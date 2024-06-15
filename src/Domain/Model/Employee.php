<?php

namespace App\Domain\Model;

class Employee
{
    private $id;
    private $firstname;
    private $lastname;

    /**
     * @param $firstname
     * @param $lastname
     */
    public function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    /**
     * @param Training $training
     * @return Training
     */
    public function performTraining(Training $training)
    {
        $training->addCandidate($this);

        return $training;
    }
}
