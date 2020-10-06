<?php

function person($name,$age){
    echo "name : $name , age : $age <br>";
}

person("Will",30);
person("Lilia",25);
person("Hung",18);
echo "<hr>";



 function setMoney ($money = 50){
    echo "USD : $money <br>";
}
setMoney(100);
setMoney(); //lay gia tri nhap cung.
setMoney(200);
setMoney(10);
echo "<hr>";


function sum($x,$y){
    return $x / $y;
}

echo "10 / 2 = ". sum(10,2) . "<br>" ;
echo "25 / 5 = ". sum(25,5) . "<br>";
echo "30 / 2 = ". sum(30,2) ;

