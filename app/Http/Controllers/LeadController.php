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

        $request = new Lead();
        $request->name = Str::ucfirst(request('name'));
        $request->email = request('email');
        $request->phone = request('phone');
        $request->address_1 = request('address_1');
        $request->address_2 = request('address_2');
        $request->city = request('city');
        $request->state = request('state');
        $request->zip = request('zip');
        $request->message = request('message');
        $request->how_heard = request('how_heard');
        $request->used_before = request('used_before');
        $request->save();


        Mail::send('email', [
            'name' => Str::ucfirst(request('name')),
            'email' => request('email'),
            'phone' => request('phone'),
            'how_heard' => request('how_heard'),
            'comment' => request('message') ],
            function ($message) {
                $message->from('contact@hamptonstileandgrout.com');
                $message->to('liam.dmgurus@gmail.com', 'LJK')
                    ->subject('Hamptons Tile & Grout Contact Form Submission');
            });

        return redirect()->route('success');
    }

}
