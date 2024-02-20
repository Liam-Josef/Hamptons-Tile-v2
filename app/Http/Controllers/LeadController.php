<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{

    public function store(Request $request) {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required'],
        ]);
        Lead::create([
            'name' => Str::ucfirst(request('name')),
            'email' => Str::ucfirst(request('email')),
            'phone' => Str::ucfirst(request('phone')),
            'address_1' => Str::ucfirst(request('address_1')),
            'address_2' => Str::ucfirst(request('address_2')),
            'city' => Str::ucfirst(request('city')),
            'state' => Str::ucfirst(request('state')),
            'zip' => Str::ucfirst(request('zip')),
            'message' => Str::ucfirst(request('message')),
            'used_before' => Str::ucfirst(request('used_before')),
            'how_heard' => Str::ucfirst(request('how_heard')),
        ]);

        Mail::send('email', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'message' => $request->get('message') ],
            function ($message) {
                $message->from('contact@hamptonstileandgrout.com');
                $message->to('liam.dmgurus@gmail.com', 'LJK')
                    ->subject('Hamptons Tile & Grout Contact Form Submission');
            });

        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');
    }

}
