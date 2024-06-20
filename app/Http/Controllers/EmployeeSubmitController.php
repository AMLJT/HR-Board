<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeSubmitController extends Controller
{
    public function store()
    {
        $employee = Employee::create([
            'emp_name' => request()->get('emp_name'),
            'department' => request()->get('department'),
            'email' => request()->get('email'),
            'phone' => request()->get('phone')
        ]);

        return redirect()->route('employee.view');
    }
}
