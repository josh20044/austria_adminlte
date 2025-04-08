<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student1Controller extends Controller
{
    public function index(){
        return view('student1.index');
    }

}
