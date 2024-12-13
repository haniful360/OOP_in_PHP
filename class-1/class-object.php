<?php

class Fruits
{
    // property
    public $name;
    public $color;

    public function __construct($name, $color )
    {
        echo $name;
        // $name = 'Monkey jackfruit';// we can change name inside
        $this->name = $name;
        $this->color = $color;
    }

    public function setName($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function getName()
    {
        return "Name: $this->name, Color: $this->color";
        
    }
}

$fruits = new Fruits('Banana ', 'Yellow ');
// $fruits->setName('Mango', 'green');
echo $fruits->getName();
// var_dump($fruits instanceof Fruits); ///true or false

// $fruits->name='jackfruits'; //we can change the property value outside of class 
// echo $fruits->name;
