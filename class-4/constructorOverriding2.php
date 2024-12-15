<?php


class Product
{
    protected $name;
    protected $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getDetails()
    {
        echo "Name: {$this->name}, Price: \${$this->price}";
    }
}

// $product = new Product('mOBILE', '15000');
// $product->getDetails();

class DigitalProduct extends Product
{
    public $filesize;

    public function __construct(string $name, int $price, int $filesize)
    {
        parent::__construct($name, $price);
        $this->filesize = $filesize;
    }

    public function getDetails()
    {
        parent::getDetails();
        echo " <br> filesize: \${$this->filesize}";
    }
}

$digitalProduct = new DigitalProduct('Laptop', 50000, 512);
$digitalProduct->getDetails();