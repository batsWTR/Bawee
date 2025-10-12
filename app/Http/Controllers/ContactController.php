<?php

namespace App\Http\Controllers;


use App\CustomStuff\GeoLocate;
use App\Models\Message;
use App\Models\Visitor;
use Illuminate\Http\Request;
use App\Models\MessageContact;

class ContactController extends Controller
{
    public function show(Request $request){
        $ip = $request->ip();
        $session_id = session()->getId();
        if(!Visitor::where('visitor_id',$session_id)->exists())
        {
            $agent = $request->userAgent();
            $location = GeoLocate::locate($ip);
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
        return view('contact');
    }

    public function store(Request $request){


        $validated = $request->validate([
            'email' => 'required|max:255',
            'message' => 'required|min:6|max:4096'
        ]);

        $message = MessageContact::create([
            'email' => $validated['email'],
            'message' => $validated['message'],
            'visitor_id' => session()->getId(),
        ]);

        return redirect('contact')->with('status', 'Votre message a bien été pris en compte');
    }
}
