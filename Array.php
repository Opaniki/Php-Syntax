<?php

$args = ['Rostyslav Tarasenko', 10, 3.14, true]; // нумерованный массив
//var_dump($args);    
//$args = array('Rostyslav Tarasenko', 10, 3.14, true) старое написание

$fruits = ['apples', 'bananas', 'oranges', 'ananas'];
$args_test = [
    "name" => 'Rostyslav, Alex, Chris',
    "age" => 24,
    "height" => 185, 
    "is_male" => true,
    "fruits" => $fruits,
    ]; //ассоциативный массив

$args_name = explode(", ", $args_test['name']); //преобразование строки в массив. Разделитель - запятая и пробел
$args_name = implode(" ", $args_name); //преобразование массива в строку. Разделитель - пробел
echo $args_name;

/*$obj = new stdClass(); //создание объекта
var_dump($obj);*/

/*$user = new stdClass;
$user->name = "Rostyslav"; //добавление свойства к объекту
var_dump($user);
*/

/*//resource - специальный тип данных, который используется для хранения ссылок на внешние ресурсы, такие как файлы, базы данных и т.д. Например, при открытии файла с помощью функции fopen() возвращается ресурс, который можно использовать для чтения или записи в файл.
$file = fopen('test.txt', 'r'); //создание ресурса для чтения файла test.txt
var_dump($file); //вывод информации о ресурсе
*/

//echo is_array($fruits); //проверка является ли переменная массивом. Возвращает true или false


/*
//var_dump($args_test);
echo count($fruits); //count позволяет выводить кол-во элем. в массиве. sizeoff синоним count

//echo $fruits[1]; //вывод конкретного значения по индексу.
//echo $args_test['name']; //вывод имени переменной.

array_push($fruits, "grapes", "strawberries"); //добавление элемента в массив в конец списка
array_unshift($fruits, "watermelon"); //добавление элемента в массив в начало списка

//asort($fruits); //сортировка массива по алфавиту/числам от меньшего к большему
//arsort($fruits); //сортировка массива по алфавиту/числам от большего к меньшему

$args3 = array_merge($fruits, $args); //слияние массивов

/*echo "<pre>";
var_dump($args3);
echo "</pre>";
*/

//$fruits_rev = rray_reverse($fruits); //реверс массива(переворачивает массив в обратном порядке)

/*
echo "<pre>"; //тег для форматирования вывода
var_dump($fruits);
echo "</pre>";

//print_r($fruits); //вывод массива в удобном виде(только данные)
*/


?>