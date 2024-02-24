<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeMainController extends Controller
{
    //
    public function dashboard(){
        return view('employee.dashboard');
    }

}
