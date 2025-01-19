<?php

trait User
{
    public function show()
    {
        echo 'this is trait <br>';
    }
}

trait Semester
{
    private $name = 'haniful ';

    public function showSemester(): void
    {
        echo 'this is last semester';
    }

    public function showName()
    {
        // return $this->name .  "<br>";
        echo 'show the name. <br>' ;
    }
}

class Student
{
    use User, Semester;

    public function display() : void {
        $this->showName();
        $this->showSemester();
    }
}


$obj = new Student();
$semester = new Student();
$semester->display();
// $obj->show();
// $semester->showSemester();
// echo "<br>";
// echo $semester->showName();
