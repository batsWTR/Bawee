<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunController extends Controller
{
    public function index(){
        return view('fun');
    }
}
