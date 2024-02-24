<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierMainController extends Controller
{
    //
    public function dashboard(){
        return view('supplier.dashboard');
    }
}
