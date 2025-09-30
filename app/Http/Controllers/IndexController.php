<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function accueil(Request $request)
    {
        $ip = $request->ip();
        $sessionId = session()->getId();
        return view('index');
    }
}
