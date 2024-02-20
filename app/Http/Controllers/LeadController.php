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

        $data = array(
            'messages' => $request->message
        );
        Mail::send('email', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'messages' => $data ],
            function ($message) {
                $message->from('contact@hamptonstileandgrout.com');
                $message->to('liam.dmgurus@gmail.com', 'LJK')
                    ->subject('Hamptons Tile & Grout Contact Form Submission');
            });

        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');
    }

}
