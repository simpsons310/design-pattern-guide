<?php

namespace App\VisitorPattern;

use App\VisitorPattern\Entities\Company;
use App\VisitorPattern\Entities\Department;
use App\VisitorPattern\Entities\Employee;

class SalaryReportTestDriven
{
    public function __construct()
    {
        $mobileDev = new Department("Mobile Development", [
            new Employee("Albert Falmore", "designer", 100000),
            new Employee("Ali Halabay", "programmer", 100000),
            new Employee("Sarah Konor", "programmer", 90000),
            new Employee("Monica Ronaldino", "QA engineer", 31000),
            new Employee("James Smith", "QA engineer", 30000),
        ]);
        $techSupport = new Department("Tech Support", [
            new Employee("Larry Ulbrecht", "supervisor", 70000),
            new Employee("Elton Pale", "operator", 30000),
            new Employee("Rajeet Kumar", "operator", 30000),
            new Employee("John Burnovsky", "operator", 34000),
            new Employee("Sergey Korolev", "operator", 35000),
        ]);
        $company = new Company("Super Star Development", [$mobileDev, $techSupport]);

        $report = new SalaryReport();

        echo "---- Salary report for whole company:\n";
        echo $company->accept($report);

        echo "\n---- Salary report for technical support department:\n";
        echo $techSupport->accept($report);
    }
}
