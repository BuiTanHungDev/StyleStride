<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerMainCtroller extends Controller
{
    public function dashboard(){
        return view('manager.dashboard');
    }
}
