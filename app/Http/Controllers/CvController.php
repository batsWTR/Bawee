<?php

namespace App\Http\Controllers;

use App\CustomStuff\GeoLocate;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Visitor;

class CvController extends Controller
{
    public function show(Request $request){
        $ip = $request->ip();
        $session_id = session()->getId();
        if(!Visitor::where('visitor_id',$session_id)->exists())
        {
            $agent = $request->userAgent();
            $location = GeoLocate::locate($ip);
            // Tester si l'id est en base
            $visitor = Visitor::create([
                'visitor_id' => $session_id,
                'ip' => $ip,
                'country' => $location['country'] ?? null,
                'city' => $location['city'] ?? null,
                'isp' => $location['isp'] ?? null,
                'user_agent' => $agent,
                'lat' => $location['lat'] ?? null,
                'lon' => $location['lon'] ?? null,
            ]);
        }
        return view('cv');
    }

    public function pdf(){
        $ip = $request->ip();
        $session_id = session()->getId();
        if(!Visitor::where('visitor_id',$session_id)->exists())
        {
            $agent = $request->userAgent();
            $location = GeoLocate::locate($ip);
            // Tester si l'id est en base
            $visitor = Visitor::create([
                'visitor_id' => $session_id,
                'ip' => $ip,
                'country' => $location['country'] ?? null,
                'city' => $location['city'] ?? null,
                'isp' => $location['isp'] ?? null,
                'user_agent' => $agent,
                'lat' => $location['lat'] ?? null,
                'lon' => $location['lon'] ?? null,
            ]);
        }
        else{
            $visitor = Visitor::where('visitor_id',$session_id)->first();
            $visitor->cv_downloaded = true;
            $visitor->save();
        }

        $pdf = Pdf::loadView('cv', []);
        return $pdf->download('invoice.pdf');
    }
}
