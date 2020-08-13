<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    protected $fillable=[
        'user_id',
        'Religiosness',
        'Sect',
        'Hijab',
        'Beard',
        'Convert',
        'Halaal',
        'Salaah',
    ];
    
    public function user()
      {
        return $this->belongsTo('App\User','user_id','id');
      }

      
}
