<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    protected $fillable = [
        'employment_id',
    ];


    public function user_employment()
      {
        return $this->hasMany('App\Employment,','id','employment_id');
      }
}
