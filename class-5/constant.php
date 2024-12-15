<?php 

class MathOperations{
    const PI = 3.1416;

    public function calculateCircumference($radius){
        return 2 * self::PI * $radius;
    }
}

echo MathOperations::PI;

$calc = new MathOperations();
echo '<br>';
echo $calc->calculateCircumference(5);


echo '<br>';
class User {
    const MESSAGE = 'Welcome to my Here';
}

echo User::MESSAGE;

echo '<br>';
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting my office!";
}

echo Goodbye::LEAVING_MESSAGE;
?>