<?php

namespace Acme;

use Acme\Users\Person;

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
