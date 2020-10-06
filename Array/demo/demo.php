<?php
$cars = array("Ferrari", "Mec", "BMW", "Mazda");
echo "length : " . count($cars);
echo "<hr/>";


for ($i = 0; $i < count($cars); $i++) {
    echo $cars[$i] . "<br/>";
}
echo "<hr/>";


$dictionary = array("hello" => "Xin chao", "name" => "Ten", "love" => "yeu");
echo "hello mean : " . $dictionary["hello"];
echo "<hr/>";


foreach ($dictionary as $key => $value) {
    echo "key : " . $key . ",value : " . $value;
    echo "<br/>";
}
echo "<hr>";

$person = [
    [1,2,4,7],
    [10,12,5,22,354,23,231]
];

for ($x = 0; $x < count($person); $x++) {
    for ($y = 0; $y < count($person[$x]); $y++) {
        echo $person[$x][$y];
    }
}