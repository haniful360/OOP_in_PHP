<?php

// which  function declared in interface those function must have to use

interface UserInterface
{
    public function getName();
    public function getDetails();
}

class User implements UserInterface
{
    public $name = 'hnaiful';

    public function getName(){
        echo "$this->name <br>" ;
    }

    public function getDetails(){
        echo 'show all details';
    }
}

$user = new User();
$user->getName();
$user->getDetails();