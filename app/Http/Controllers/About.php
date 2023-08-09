<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employees;

class About extends Controller
{
    public function index(){
        $employees = Employees::all();
        dump($employees);
    }
    
}
