<?php 

function getUserStatus() {

    if (isset($_SESSION['user']) && $_SESSION['user_name'] == 'admin' ) {
        return 'admin';
    } else if (isset($_SESSION['user'])) {
    	return $_SESSION['user_name'];
    } else {
    	return 'guest';
    }
}

function logOut() {
	session_destroy();
	setcookie('user', '', time() - 3600, '/');	
	header("Location:/");
}

function registerNewUser() {

    if (!isset($_POST['name']) || $_POST['name'] == "") return 'Enter You name. Field cannot be empty.';
    if (!isset($_POST['email']) || $_POST['email'] == "") return 'Enter You E-mail. Field cannot be empty.';
    if (!isset($_POST['addres']) || $_POST['addres'] == "") return 'Enter You addres. Field cannot be empty.';
    if (!isset($_POST['phone']) || $_POST['phone'] == "") return 'Enter You phone. Field cannot be empty.';
    if (!isset($_POST['login']) || $_POST['login'] == "") return 'Enter You Login. Field cannot be empty.';
    if (!isset($_POST['password']) || $_POST['password'] == "") return 'Enter You password. Field cannot be empty.';

   	$db = getDb();

    $name = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['name'])));
    $phone = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['phone'])));
    $email = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['email'])));
    $addres = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['address'])));
    $login= mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['login'])));
    $password = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['password']))); 

    $password = md5($password . SALT);

    $status = 2;

    // Тут надо бы вставить проверку чтобы логин не повторялся. Делать я это, конечно, не буду

    $sql = "SELECT * FROM `users` WHERE `login`='{$login}'";
    if (!getAssocResult($sql)) return 'Enter another name';
    if ($login == 'admin') return 'Enter another name';

	$sql = "INSERT INTO `users` ( `status`, `password`, `login`, `name`, `phone`, `e-mail`, `address`) VALUES ({$status}, '{$password}', '{$login}', '{$name}', '{$phone}', '{$email}', '{$address}');";
	
	if (executeQuery($sql)) {

		session_start();
		$_SESSION['user_name'] = $login;
		$_SESSION['user'] = true;
		setcookie('products', '', time() - 3600, '/');	
		unset($_POST);

		$message = "Thank you for registration!<br> You enter as $login.";
	
	} else {

		$message = 'Sorry, registration error';
	
	}

	return $message;
}

function logIn() {

   	$db = getDb();
	$login = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['login'])));
    $password = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['password'])));
    $password = md5($password . SALT); 

	$sql = "SELECT * FROM `users` WHERE `login`='{$login}' AND `password`='{$password}'";

	if ($user = getAssocResult($sql)) {
		session_start();
		$_SESSION['user_name'] = $login ;
		$_SESSION['user'] = true;
		setcookie('user', $login, time() + 60 * 60 * 24 * 365, '/');
	} else {
		return 'Not correct login or password';
	}
}

function startInit() {
    if (!$_COOKIE['user']) {
        return;
    } else {
        session_start();
        $_SESSION['user'] = true;
        $_SESSION['user_name'] = $_COOKIE['user'];
    }
}