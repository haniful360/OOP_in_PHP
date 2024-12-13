<?php


class ParentClass {
    protected $protectedProperty = 'Protected value';

    protected function protectedMethod(){
        echo 'protected method';
    }
}

class ChildClass extends ParentClass {
    
    public function display(){
        echo $this->protectedMethod();
        // return $this->protectedProperty;
    }
}

$result = new ChildClass();
echo $result->display();