<?php
// 1.
$num = 0;
while ($num <= 100) {
	if (!($num % 3)) echo $num.'<br>';
	$num++;
}

echo '<br><br>';

// 2. 

function num_print($max) {
	$num = 0;
	$result = '';
	do {
		switch ($num) {
			case '0':
				$result .= "$num - это ноль<br>";
				break;
			case !($num % 2):
				$result .= "$num - чётное число<br>";
				break;	
			default:
				$result .= "$num - нечётное число<br>";
				break;
		}
	} while ($num++ < $max);
	return $result;	
}

echo num_print(10);

echo '<br><br>';

// 3. единственный момент - нужно предусмотреть отрезание запятой в конце строки перечислений

$regions = [
	'Московская область' => ['Балашиха', 'Подольск', 'Химки', 'Королёв', 'Шатура', 'Мытищи'],
	'Ленинградская область' => ['Гатчина', 'Выборг', 'Всеволожск', 'Сосновый Бор', 'Кириши'],
	'Республика Дагестан' => ['Махачкала', 'Хасавюрт', 'Дербент', 'Каспийск', 'Кизляр']
];

$result = '';
foreach($regions as $key => $value) {
	$result .= "$key:<br>";
	foreach ($value as $sub_value) {
		$result  .= "$sub_value, ";
	}
	$result = substr($result , 0, -2) . '<br>';
}
echo $result;

echo '<br><br>';

// 4. 5. 9. - разница только в составе внутреннего массива

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

echo translit('Пример работы функции транслитерации');

echo '<br><br>';

// 6. 

$menu_arr = [
	['href' => '#', 'title' => 'Меню 1'],
	['href' => '#', 'title' => 'Меню 2'],
	['href' => '#', 'title' => 'Меню 3'],
	['href' => '3', 'title' => 'Меню 4']
];

function menu_render($menu_arr) {
	$result = '<ul>';
	foreach($menu_arr as $value) {
		$result .= "<li><a href=".$value['href'].">".$value['title']."</a></li>";
	}
	$result .= '</ul>';
	return $result;
}

echo menu_render($menu_arr);

echo '<br><br>'; 

// 7. старый трюк с инкрементом внутри print_r

for ($i = 0; $i < 10; print_r($i++)) {}

echo '<br><br>';

// 8. добавляются две проверки. 
// Одна на первую букву, вторая запрещает отрезать запятую в конце, если вообще ничего не выводилось

$result = '';
foreach($regions as $key => $value) {
	$result .= "$key:<br>";
	$flag = false; 
	foreach ($value as $sub_value) {
		if (mb_substr($sub_value, 0, 1) == 'К') {
			$result  .= "$sub_value, ";
			$flag = true;
		}
	}
	if ($flag) $result = substr($result , 0, -2) . '<br>';
}
echo $result;

echo '<br><br>';

// 10. проще всего создать массив от 1 до 200, перемешать и отрезать половинку

$arr = range(1, 200);
shuffle($arr);
$arr = array_slice($arr, 0, 100);
print_r($arr);

echo '<br><br>';

// 11. на грамотное использование slice и splice
// проходим массив до середины, вставляем посимвольно значения, потом отрезаем лишнее, главное учесть, что индекс нового элемента тоже сдвигается
// для наглядности пошаговый вывод обрабатываемого массива

$arr = [1, 2, 3, 4, 5, 0, 0, 0, 0, 0];

$arr_half = count($arr) / 2;
for($i = 0; $i < $arr_half; $i++) {
	array_splice($arr, $i * 2 + 1, 0, $arr[$i * 2]);
	print_r($arr);
	echo '<br>';
}
$arr = array_slice($arr, 0, 10);

print_r($arr);