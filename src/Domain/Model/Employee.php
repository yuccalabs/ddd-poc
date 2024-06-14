<?php

namespace App\Domain\Model;

class Employee
{
    private $id;
    private $firstname;
    private $lastname;

    public function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
}
