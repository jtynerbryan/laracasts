<?php

use Acme\Business;
use Acme\Staff;
use Acme\Users\Person;

$jesse = new Person('Jesse Tyner-Bryan');
$staff = new Staff([$jesse]);
$laracasts = new Business('Laracasts', $staff);
$laracasts->hire(new Person('Jane Doe'));
var_dump($laracasts->getStaffMembers());
