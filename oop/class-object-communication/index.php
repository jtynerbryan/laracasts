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

    public function getStaffMembers()
    {
        return $this->staff->members();
    }
}

class Staff
{
    protected $members;

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function members()
    {
        return $this->members;
    }
}

$jesse = new Person('Jesse Tyner-Bryan');
$staff = new Staff([$jesse]);
$laracasts = new Business('Laracasts', $staff);
$laracasts->hire(new Person('Jane Doe'));
var_dump($laracasts->getStaffMembers());
