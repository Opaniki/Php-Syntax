<?php

//switch case - это конструкция, которая позволяет выполнить определенный блок кода в зависимости от значения переменной. Она используется для замены множества операторов if-else, когда нужно проверить одно и то же выражение на несколько различных значений.


$a = 3;

switch($a){
    case 1 : 
        echo "a = 1";
        break; //break - это оператор, который используется для выхода из конструкции switch после выполнения соответствующего блока кода. Если не использовать break, то выполнение продолжится и будет выполнен следующий блок кода, что может привести к нежелательным результатам.
   case 2 :
        echo "a = 2";
        break;
    case 3 :
        echo "a = 3<br>";
        break;
    default : //default - это необязательный блок, который выполняется, если ни одно из значений в case не совпало с переменной. Он используется для обработки случаев, которые не были предусмотрены в других блоках case.
        echo "a is not 1, 2 or 3";
}

/*

$a = 3;

switch($a){
    case 1 : 
    case 2 :
    case 3 :
        echo "a = 1 or 2 or 3";
        break;
}

*/

//match - это конструкция, которая была введена в PHP 8 и является более мощной и гибкой альтернативой switch case. Она позволяет выполнять определенный блок кода в зависимости от значения переменной, но при этом имеет более лаконичный синтаксис и поддерживает более сложные условия.

$fruit = "apple";
$result = match($fruit) {
    'apple' => 'It is an apple<br>',
    'banana' => 'It is a banana<br>',
    'orange' => 'It is an orange<br>',
    default => 'It is not an apple, banana or orange<br>'
};

echo $result;

/*
$num = 7;
$result = match($num){
    1 => "1",
    2 => "2",
    3 => "3",
    default => "no match"
};
echo $result;
*/

$num = 3;
$result = match(true){
    $num <= 7 => " result 1",
    $num <= 10 => "result 2",
    $num <= 20 => "result 3",   
    default => "no match"
};
echo $result;

$a = 1;
$b = 2; 
$c = 1;
$result = match(2){
    $a, $b, $c => "result 1",
    default => "no match"
    
    
};
echo $result;




?>