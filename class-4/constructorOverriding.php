<?php

class Animal
{

    public $name;
    public $color;

    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
}

class Dog extends Animal
{

    public $breed;


    public function __construct(string $name, string $color,  string $breed)
    {
        parent::__construct($name, $color) . $this->breed = $breed;
    }

    public function getDetails(){
        return "Name: $this->name, <br> Color:  $this->breed, <br> Breed  $this->name";
    }
}
$dog = new Dog('Buddy', 'white', 'Golden');
echo $dog->getDetails();