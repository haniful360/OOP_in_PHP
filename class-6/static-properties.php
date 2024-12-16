<?php

class User
{
    public static $message = "hello world";

    public function display(): void
    {
        echo User::$message;
        echo "<br>";
        echo self::$message;
    }

    public function setMessage(string $message): void
    {
        self::$message = $message;
    }
}

class Teacher extends User {}


echo User::$message;
echo "<br>";
User::$message = 'Happy Independent Day';
echo User::$message;
echo "<br>";
$user = new User();
$user->display();
$user->setMessage('New Bangladesh 2.0');
$user->display();




echo "<br><br>";

Teacher::$message = 'welcome my home';
echo User::$message;
