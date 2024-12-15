<?php

// Logger class to handle logging
class Logger {
    public function log($message) {
        echo "[LOG]: $message\n";
    }
}

// Parent class: Product
class Product {
    protected $name;
    protected $price;
    protected $logger;

    public function __construct($name, $price, Logger $logger) {
        $this->name = $name;
        $this->price = $price;
        $this->logger = $logger;

        $this->logger->log("Product created: {$this->name} at \${$this->price}");
    }

    public function getDetails() {
        return "Name: {$this->name}, Price: \${$this->price}";
    }
}

// Child class: DigitalProduct
class DigitalProduct extends Product {
    private $fileSize;

    public function __construct($name, $price, $fileSize, Logger $logger) {
        // Call the parent constructor
        parent::__construct($name, $price, $logger);

        // Additional property for DigitalProduct
        $this->fileSize = $fileSize;
        $this->logger->log("Digital product file size: {$this->fileSize}MB");
    }

    public function getDetails() {
        $baseDetails = parent::getDetails();
        return "{$baseDetails}, File Size: {$this->fileSize}MB";
    }
}

// Child class: PhysicalProduct
class PhysicalProduct extends Product {
    private $weight;
    private $dimensions;

    public function __construct($name, $price, $weight, $dimensions, Logger $logger) {
        // Call the parent constructor
        parent::__construct($name, $price, $logger);

        // Additional properties for PhysicalProduct
        $this->weight = $weight;
        $this->dimensions = $dimensions;
        $this->logger->log("Physical product weight: {$this->weight}kg, Dimensions: {$this->dimensions}");
    }

    public function getDetails() {
        $baseDetails = parent::getDetails();
        return "{$baseDetails}, Weight: {$this->weight}kg, Dimensions: {$this->dimensions}";
    }
}

// Using the classes
$logger = new Logger();

$product1 = new DigitalProduct("E-book", 10, 15, $logger);
echo $product1->getDetails() . "\n\n";

echo "<br>";
echo "<br>";

$product2 = new PhysicalProduct("Laptop", 1200, 2.5, "30x20x5 cm", $logger);
echo $product2->getDetails() . "\n";
