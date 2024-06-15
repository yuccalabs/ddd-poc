<?php

namespace App\Application\Employee;

use App\Domain\Model\Employee;

interface EmployeeInterface
{
    public function create($firstname, $lastname): Employee;

    public function startTraining();
}