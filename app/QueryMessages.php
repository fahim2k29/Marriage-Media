<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QueryMessages extends Model
{
    protected $fillable=['name','email','subject','message'];
}
