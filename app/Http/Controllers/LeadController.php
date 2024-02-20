<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LeadController extends Controller
{

    public function store() {
        request()->validate([
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

        return redirect()->back()
            ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }

}
