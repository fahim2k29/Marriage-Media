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

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
