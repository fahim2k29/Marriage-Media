<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class AddPhoto extends Model
{
    protected $fillable=[
       'user_id',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
