<?php
abstract class User
{
    public abstract function getName();
    // public abstract function display();
    public function display()
    {
        echo 'Learn abstrac';
    }
}


class Student extends User
{

    public $name = 'Haniful Islam';
    public function getName()
    {
       return $this->name;
    }

    // public function display()
    // {
    //     echo 'Learn abstrac';
    // }
}

$user = new Student;
$user->display();
echo "<br>";
echo $user->getName();
