<?php

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
        
    }

}

// $manager = new Manager();
// $manager->