<?php

namespace App\VisitorPattern\Interfaces;

use App\VisitorPattern\Entities\Company;
use App\VisitorPattern\Entities\Department;
use App\VisitorPattern\Entities\Employee;

interface Visitor
{
    public function visitCompany(Company $company);

    public function visitDepartment(Department $department);

    public function visitEmployee(Employee $employee);
}
