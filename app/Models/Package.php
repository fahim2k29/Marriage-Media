<?php

namespace App\Models;
use App\Traits\AutoTimeStamp;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use AutoTimeStamp;
    protected $fillable = [
        'name','price','duration',
    ];
  
    public function package()
    {
        return $this->hasMany('App\Models\Package', 'package_id', 'id');
    }
    
}
