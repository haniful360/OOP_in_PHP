<?php


// Method Overriding:

// Both Manager and Developer override the getDetails method to include additional information.

class Employee
{
    protected $name;
    protected $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getDetails()
    {
        return "Name: $this->name, Salary $this->salary";
    }
}

// $person = new Employee('antor', '10');
// echo $person->getDetails();

class Manager extends Employee
{
    private $department;

    public function __construct($name, $salary, $department)
    {
        parent::__construct($name, $salary); // Call the parent class's constructor
        $this->department = $department;
    }

    public function getDetails(){
        // return $this->getDetails(). ", Department: $this->department";
        return parent::getDetails(). ", Department: $this->department";
    }

    public function contactMetting(){
        return "$this->name is contacting meeting in the $this->department department";
    }

}


class Developer extends Employee{
    protected $programmingLanguage;

    public function __construct($name, $salary, $programmingLanguage)
    {
        parent::__construct($name, $salary); // Call the parent class's constructor
        $this->programmingLanguage = $programmingLanguage;
    
    }

    public function getDetails(){
        // return $this->getDetails(). ", Department: $this->programmingLanguage";
        return parent::getDetails(). ", Programming Language: $this->programmingLanguage";
    }

    public function writeCode(){
        return "$this->name is writing code in $this->programmingLanguage";
    }
}

$manager = new Manager("ali hossain", "20k", "HR");
$developer = new Developer("ali hossain", "20k", "PHP");
// $developer = new Manager();

// echo $manager->getDetails();
// echo $manager->contactMetting();

echo $developer->getDetails();
// echo $developer->writeCode();