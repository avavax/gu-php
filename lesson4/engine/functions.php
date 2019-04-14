<?php

function render($page, $params = [])
{
    return renderTamplate(LAYOUTS_DIR . 'layout', [
        "content" => renderTamplate($page, $params)
    ]);
}

function renderTamplate($page, $params = [])
{
    ob_start();

    if (!is_null($params)) {
        extract($params);
    }


    $fileName = TEMLATES_DIR . $page . '.php';

    if (file_exists($fileName)) {
        include $fileName;
    } else {
        Die("Страницы не существует, 404");
    }


    return ob_get_clean();
}

function create_img_array($upload_dir = GALLERY .'small') {
    return array_splice(scandir($upload_dir), 2);
}

function upload_file_to_gallery() {
    //var_dump($_FILES['myimg']);
    $img_size = $_FILES['myimg']['size'];
    $img_type = $_FILES['myimg']['type'];
    $img_name = $_FILES['myimg']['name'];    
    $img_tmp_name = $_FILES['myimg']['tmp_name'];

    // Проверки на тип файла и размер
    $types = array('image/gif', 'image/png', 'image/jpeg');
    $max_size = 1024000;

    if (!in_array($img_type, $types) || $img_size > $max_size) {
        echo "<script>alert('Incorrect file type or size')</script>";
    } else {

        // Транслит если есть кириллические символы
        $correct_img_name = (preg_match("/[а-я]/i", $img_name)) ?
            translit( $img_name ) : $img_name;
        
        // Загрузка файла и создание миниаюры
        copy($img_tmp_name, GALLERY . 'big/'.$correct_img_name);
        copy($img_tmp_name, GALLERY . 'small/'.$correct_img_name);
        resize(GALLERY . 'small/'.$correct_img_name, 160);
        unlink($img_tmp_name);
    }
}

function translit($string) {
    $letter_base = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
        ' ' => '_'
    );
    $string = mb_strtolower($string);
    return strtr($string, $letter_base);
}

function resize ($image, $w_o = false, $h_o = false) {
    
    // найдена и адаптирована готовая :)

    list($w_i, $h_i, $type) = getimagesize($image); // Получаем размеры и тип изображения (число)
    $types = array("", "gif", "jpeg", "png"); // Массив с типами изображений
    $ext = $types[$type]; // Зная "числовой" тип изображения, узнаём название типа
    if ($ext) {
        $func = 'imagecreatefrom'.$ext; // Получаем название функции, соответствующую типу, для создания изображения
        $img_i = $func($image); // Создаём дескриптор для работы с исходным изображением
    } else {
        // Выводим ошибку, если формат изображения недопустимый
        return false;
    }
    // Если указать только 1 параметр, то второй подстроится пропорционально 
    if (!$h_o) $h_o = $w_o / ($w_i / $h_i);
    if (!$w_o) $w_o = $h_o / ($h_i / $w_i);
    $img_o = imagecreatetruecolor($w_o, $h_o); // Создаём дескриптор для выходного изображения
    imagecopyresampled($img_o, $img_i, 0, 0, 0, 0, $w_o, $h_o, $w_i, $h_i); // Переносим изображение из исходного в выходное, масштабируя его
    $func = 'image'.$ext; // Получаем функция для сохранения результата
    return $func($img_o, $image); // Сохраняем изображение в тот же файл, что и исходное, возвращая результат этой операции
}

