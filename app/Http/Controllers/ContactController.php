<?php

namespace App\Http\Controllers;


use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\MessageContact;

class ContactController extends Controller
{
    public function show(){
        return view('contact');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'email' => 'required|max:255',
            'message' => 'required|min:6|max:4096'
        ]);

        //$message = MessageContact::create([
        //    'email' => $validated->email,
        //    'message' => $validated->message,
         //   'user_id' => session()->getId(),
        //]);

        return redirect('contact')->with('status', 'Votre message a bien été pris en compte');
    }
}
