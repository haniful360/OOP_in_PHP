<?php

class Fruits
{
    public $name;
    public $color;
    public $weight;

    public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function getDetails()
    {
        return "Name: $this->name, color: $this->color, Weight: $this->weight";
    }


    protected function getColor()
    {
        return $this->color;
    }

    // Private method
    private function getWeight()
    {
        return $this->weight;
    }

    // public function getPrivateAndProtectedDetails()
    // {
    //     return "Color: " . $this->getColor() . ", Weight: " . $this->getWeight() . " kg";
    // }
    public function getPrivateAndProtectedDetails() {
        return "Color". $this->getColor() .", Weight:". $this->getWeight() . " kg";
    }
}

class Citrus extends Fruits {

    public function getCitrusColorName()
    {
        // Accessing the protected property from the parent class
        return "The color of the fruit is <b style='color:orange'>$this->color</b> <br> Name: $this->name";
        // return "The name of the fruit is <b style='color:orange'></b> ";
    }
}

$fruit = new Fruits("banana", 'Yellow', '50g');
echo $fruit->getDetails();
echo "<br> <br>";

echo $fruit->getPrivateAndProtectedDetails();

echo "<br> <br>";

$citrus = new Citrus("Orange", "Orange", 1.5);
echo $citrus->getCitrusColorName(); // Accessible because `color` is protected
echo "\n";
