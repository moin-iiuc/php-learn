<?php
//String concate,reverse,length
echo "String Operations: ". "<br>";
$f_name="Moinul";
$l_name="Hossain";
$name=$f_name." ".$l_name;
echo $name. "<br>";
echo "Length of String:"." ".strlen($name) ."<br>";
echo "Reverse of String:"." ".strrev($name) ."<br>";


//Operators
$num1=12;
$num2=2;
echo "Operators: "."<br>";
echo "+ Operators: ".$num1+$num2. "<br>";
echo "- Operators: ".$num1-$num2. "<br>";
echo "* Operators: ".$num1*$num2. "<br>";
echo "/ Operators: ".$num1/$num2. "<br>";
echo "** Operators: ".$num1**$num2. "<br>";


//Comparison
echo "Comparison Operators: ". "<br>";
$num1=5;
$num2=10;
echo $num1 > $num2. "<br>";
echo $num1 < $num2. "<br>";
echo $num1==$num2. "<br>";

//Math functions:
echo "Functions: " ."<br>";
$number=6;
$number2=7.124;
$number3=-18.06;
echo round($number2)."<br>";
echo (int) ($number2)."<br>";
echo rand(1,100)."<br>";
echo abs($number3)."<br>";
echo var_dump($number3);
?>