<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class AddPhoto extends Model
{
    protected $fillable=[
       'user_id',
        'image',
    ];

        public function user_photo()
      {
        return $this->hasOne('App\User','id','user_id');
      }
}
