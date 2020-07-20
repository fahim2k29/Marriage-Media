<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aboutme extends Model
{
    protected $fillable = [
        'user_id',
        'Headline',
        'Description',
        'LookingFor',
    ];

    public function user_aboutme()
    {
      return $this->hasOne('App\User','id','user_id');
    }
}
