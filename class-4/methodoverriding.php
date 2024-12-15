<?php

class User
{
    public $name;
    public $address;

    public function set(string $name, string $address): void
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function display()
    {
        return "Name: $this->name, <br> Address: $this->address";
    }
}


class Student extends User
{
    public $roll;

    public function set(string $name, string $address, int $roll = NULL): void
    {
        $this->name = $name;
        $this->address = $address;
        $this->roll = $roll;
    }

    public function display()
    {
        echo 'Student Information';
        echo "<br>";
        return parent::display() .  " <br> Roll: $this->roll";
    }
}
class Teacher extends User
{

    public function display()
    {
        echo 'Teacher Information';
        echo "<br>";
        return parent::display();
    }
}

// $user = new User();
// $user->set('hani', 'dhaka');
// echo $user->display();
$student = new Student();
$student->set('hani', 'dhaka', 10);
echo $student->display();

echo "</br>";
echo "</br>";

$teacher = new Teacher();
$teacher->set('modhu', 'rangpur');
echo $teacher->display();
