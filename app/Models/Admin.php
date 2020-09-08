<?php

namespace App\Models;
use App\Traits\AutoTimeStamp;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use AutoTimeStamp;
    protected $fillable = [
        'name','email','password',
    ];
}