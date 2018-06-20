<?php

class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Business
{
    protected $staff;
    public $name;

    public function __construct(String $name, Staff $staff)
    {
        $this->name = $name;
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    public function getStaff()
    {
        return $this->staff->getMembers();
    }
}

class Staff
{
    protected $members = [];

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function getMembers()
    {
        return $this->members;
    }
}

$jesse = new Person('Jesse Tyner-Bryan');
$laracasts = new Business('Laracasts', new Staff());
$laracasts->hire($jesse);
var_dump($laracasts->getStaff());
