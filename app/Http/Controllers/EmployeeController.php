<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function employee()
    {

        // dump(Employee::all());
        return view('employee', [
            'employees' => Employee::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
