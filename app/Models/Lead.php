<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Lead extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot() {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "liam.dmgurus@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }

}
