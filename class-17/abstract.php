<?php


abstract class A
{
    public abstract function get();
}

abstract class B
{
    public abstract function show();
}

class User extends A
{
    public function get()
    {
        echo 'this is abstract get method';
    }
}

$obj1 = new User;
$obj1->get();

