<?php

class User
{
    public $name = "Haniful ";
    public static $message = 'This is message';

    public static function display()
    {

        $usr = new User;
        echo "Hi, How are you? <br>";
        echo  "{$usr->name} <br>";
        
        echo self::$message;
    }
}

// echo User::$name;
echo User::display();

// $user =  new User();
// $user->display();
