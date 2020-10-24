<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable=[
    'address',
    'city',
    'country',
    'phone',
    'email',
];
}
