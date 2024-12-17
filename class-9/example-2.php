<?php

interface Animal
{
    public function eat();
    public function sleep();
}

class Cat implements Animal
{
    public function eat()
    {
        echo "The cat is eating.<br>";
    }
    public function sleep()
    {
        echo "The cat is sleeping.<br>";
    }
}

class Dog implements Animal
{
    public function eat(): void
    {
        echo "This Dog is Eating";
    }

    public function sleep(): void
    {
        echo "This Dog is sleeping";
    }
}

$cat = new Cat();
$dog = new Dog();

$cat->eat();
$cat->sleep();
echo "<br>";
$dog->eat();
$dog->sleep();
