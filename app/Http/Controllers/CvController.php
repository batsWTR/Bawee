<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CvController extends Controller
{
    public function index(){
        return view('cv');
    }

    public function pdf(){
        $pdf = Pdf::loadView('cv', []);
        return $pdf->download('invoice.pdf');
    }
}
