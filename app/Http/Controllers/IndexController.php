<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomStuff\GeoLocate;

class IndexController extends Controller
{
    public function accueil(Request $request)
    {
        // Tester si l'id est en base
        //si oui ne rien faire
        // si non, recuperer:
        //country, city, lat, lon, isp
        $ip = $request->ip();
        $agent = $request->userAgent();
        if($ip != '127.0.0.1')
        {
            // Tester si l'id est en base
            //si oui ne rien faire
            // si non, recuperer:
            //country, city, lat, lon, isp
            $sessionId = session()->getId();
            $location = GeoLocate::locate($ip);
        }

        return view('index');
    }
}
