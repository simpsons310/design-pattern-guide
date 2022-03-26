<?php

namespace App\VisitorPattern;

use App\VisitorPattern\Entities\Company;
use App\VisitorPattern\Entities\Department;
use App\VisitorPattern\Entities\Employee;
use App\VisitorPattern\Interfaces\Visitor;
use NumberFormatter;

class SalaryReport implements Visitor
{
    public function visitCompany(Company $company)
    {
        $output = $company->getName() . " (" . $this->formatCurrency($company->getCost()) . ")\n";

        return array_reduce(
            $company->getDepartments(),
            fn ($carry, $department) => $carry .= "-- " . $this->visitDepartment($department),
            $output
        );
    }

    public function visitDepartment(Department $department)
    {
        $output = $department->getName() . " (" . $this->formatCurrency($department->getCost()) . ")\n";

        return array_reduce(
            $department->getEmployees(),
            fn ($carry, $employee) => $carry .= "    + " . $this->visitEmployee($employee),
            $output
        );
    }

    public function visitEmployee(Employee $employee)
    {
        return $employee->getName() . " - " . $employee->getPosition() . " (" .
            $this->formatCurrency($employee->getSalary()) . ")\n";
    }

    protected function formatCurrency($value)
    {
        $format = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
        return $format->formatCurrency($value, 'USD');
    }
}
