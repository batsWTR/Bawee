<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use App\CustomStuff\GeoLocate;

class IndexController extends Controller
{
    public function accueil(Request $request)
    {
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

        return view('index');
    }
}
