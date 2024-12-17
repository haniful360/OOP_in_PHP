<?php

class User {
    public $name = "Haniful Islam";
    public static $message = "He is learning something new";

    public function display() : void {
            echo "{$this->name} <br>";
            echo self::$message;
    }   

    public static function hello() {
        // echo (new User)->display();
        echo (new self)->display();
        // echo self::display();
    }
}


// echo User::$message;

$user = new User();
$user->name = 'Haniful Islam Modhupur';
$user->display();

echo "<br>";// display();
echo "<br>";// display();


$user2 = new User();
$user2->display();

echo "<br>";// display();
echo "<br>";// display();

User::hello();




