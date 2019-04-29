<?php if (isset($user) && $user == 'admin') : ?>

	<div class="checkout conteiner">
		<a href="/checkout/logout" class="check__button">Log out</a>
		<div class="check__head">Admin-panel</div>
		<p>Прости, админ, но пока придётся тебе работать через phpmyadmin</p>

	</div>

<?php elseif (isset($user) && $user == 'guest') : ?>

	<div class="checkout conteiner">	
		<div class="check__item">
			<div class="check__content">
				<div class="check__left">
					<form action="#" method="post">
						<div class="check__head">Register new user</div>
						<p class="check__title"><?=$message_register; ?></p>
						<input type="text" name="name" class="result-input check__input" placeholder="You name"
							value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>"><br><br>
						<input type="email" name="email" class="result-input check__input" placeholder="E-mail"
							value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"><br><br>
						<input type="text" name="addres" class="result-input check__input" placeholder="Address"
							value="<?php if (isset($_POST['addres'])) echo $_POST['addres']; ?>"><br><br>
						<input type="text" name="phone" class="result-input check__input" placeholder="Phone"
							value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>"><br><br>
						<input type="text" name="login" class="result-input check__input" placeholder="Login"
							value="<?php if (isset($_POST['login'])) echo $_POST['login']; ?>"><br><br>
						<input type="text" name="password" class="result-input check__input" placeholder="*****"><br><br>														
						<input type="hidden" name="user_register" value="true">
						<input type="submit" class="check__button" value="Register">
					</form>				
				</div>
				<div class="check__right">
						<div class="check__head">Enter account</div>
					<p class="check__title"><?=$message_login; ?></p>
					<form action="#" method="post">
						<input type="text" class="result-input check__input" placeholder="login" name="login"><br><br>
						<input type="password" class="result-input check__input" placeholder="*******" name="password"><br><br>
						<input type="submit" class="check__button" value="Log in">
						<input type="hidden" name="user_login" value="true">
					</form>	
				</div>				
			</div>
		</div>
	</div>

<?php else : ?>

	<div class="checkout conteiner">
		<a href="/checkout/logout" class="check__button">Log out</a>
		<div class="check__head">User office.<br> Hello, <?=$user; ?></div>
		<div><?=$orders; ?></div>
	</div>

<?php endif; ?>
