<?php
// 1. Hello World
echo "Hello World<br><br>";

// 2. Different variable types
$foo = true;
$age = 18;
$height = 1.95;

echo "Boolean foo is filled with: " . ($foo ? "1" : "0") . "<br>";
echo "I am " . $age . " years old<br>";
echo "And I am " . $height . "m long<br><br>";

// 3. Basic arithmetic operations
$num1 = 10;
$num2 = 5;

echo "Addition: " . ($num1 + $num2) . "<br>";
echo "Subtraction: " . ($num1 - $num2) . "<br>";
echo "Multiplication: " . ($num1 * $num2) . "<br>";
echo "Division: " . ($num1 / $num2) . "<br><br>";

// 4. Variable assignment and calculation
$a = 20;
$b = 10;
$c = $b - $a;
echo "Value of c is: " . $c . "<br><br>";

// 5. String concatenation
$name = "joseph";
$surname = "borg";
$fullname = $name . " " . $surname;
echo "Full name is: " . $fullname . "<br><br>";

// 6. Circle area calculation
define("PI", 3.142);
$radius = 5;
$answer = PI * ($radius * $radius);
echo "Area of circle is: " . $answer . "<br><br>";

// 7. Centimeter to inches conversion
$centimeters = 50;
$inches = $centimeters / 2.54;
echo $centimeters . " centimeters are equal to " . $inches . " inches";
?>