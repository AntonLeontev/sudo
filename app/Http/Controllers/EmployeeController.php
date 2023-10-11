<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class EmployeeController extends Controller
{
    public function show(Employee $employee)
    {
        return view('employee', compact('employee'));
    }
}
