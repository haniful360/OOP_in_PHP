<?php

interface A
{
    public function get();
}

interface B
{
    public function show();
}


class User implements A, B
{

    public function get()
    {
        echo 'this is get function';
    }

    public function show(){
        echo 'this is show function';
    }
}

$obj = new User();
$obj->get();