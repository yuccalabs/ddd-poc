<?php

namespace App\Application\Employee;

use App\Domain\Model\Employee as EmployeeDTO;

class Employee implements EmployeeInterface
{
    public function create($firstname, $lastname): EmployeeDTO
    {
        $employee = new EmployeeDTO($firstname, $lastname);

        return $employee;
    }

    public function startTraining()
    {
        throw new \LogicException('Not implemented yet');
    }
}
