<?php

namespace App\Application\Employee;

class Generator implements GeneratorInterface
{
    private $suffix;

    public function __construct($companyName)
    {
        $this->suffix = sprintf('%s_', strtolower($companyName));
    }

    public function generate($companyName)
    {
        throw new \LogicException('not implemented yet');
    }
}
