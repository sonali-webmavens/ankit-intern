<?php

namespace App\Http\Controllers;

use App\Models\EmployeeDetails;
use Illuminate\Http\Request;

class EmployeeDetailController extends Controller
{
    public function showEmployeeDetails()
{
    $employeeDetails = EmployeeDetails::all();
    return view('employee_details', compact('employeeDetails'));
}
}
