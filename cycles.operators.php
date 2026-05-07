<?php

for($i = 1; $i <= 10; $i++){
    echo "hello<br>"; 
}

/* Альтернативный способ написания цикла for, в котором мы можем опустить некоторые части синтаксиса. В данном случае, мы не указываем начальное значение переменной $i и условие продолжения цикла, а также не указываем шаг итерации. Вместо этого, мы просто используем бесконечный цикл и внутри него выполняем необходимые действия. В данном примере, мы выводим "hello" и увеличиваем значение $i на 1. Когда $i достигает 10, мы используем оператор break для выхода из цикла. 
$i = 1;
for(; ;){
    echo "hello<br>";

    $i++;

    if($i == 10) break;
} 
*/
/*
$args = [1, 2, 3, 4];

for($i = 0; $i < count($args); $i++){
    echo $args[$i] . "<br>"; 
}
*/
/* 
$i = 1;

while($i <= 10){
    echo $i . "<br>";
    $i++;
}
*/

/*
$r = 3;
$c = 4;

$i = 1;
echo "<table border='1'>"; // border \"1\"Z
    while($i <= $r){
        echo "<tr>";
            $j = 1;
            while($j <= $c){
                echo "<td>Строка: ". $i .". Столбец: ". $j ."</td>";
                $j++;
            }
        echo "</tr>";
        $i++;
    }
echo "</table>";
*/

/*$year = 2000;
echo "<select>";
    while($year <= 2026) :
        echo "<option value=". $year .">" . $year . "</option>";
        $year++;
    endwhile;
echo  "</select>";
*/

$names = ["John", "Jane", "Doe", "Smith", "Alice"];
/*foreach($names as $name){
    echo $name .= ".";
    echo $name . "<br>";
}
*/

$container = [
    "магнитофон"        => "3",
    "Видеокамера"       => "3",
    "Подсигар"          => "4",
    "Куртка кожаная"    => 2
];

foreach($container as $key => $item){
    echo $key . " $item <br>";

}



?>