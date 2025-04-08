<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class BSIT3AController extends Controller
{
    public function index() {
        return view('BSIT3A.lists');
    }
}
