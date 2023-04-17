<?php

class Person
{
    public $name = '';

    public function __construct()
    {
        echo "Person";
    }

    function getName()
    {
        return $this->name;
    }
    function setName($newName)
    {
        $this->name = $newName;
    }

    public static function testEcho(){
        echo "test echo";
    }
}