<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{   
    protected $fillable = [
        'user_id',
    'EducationLevel',
    'SubjectStudied',
    'JobTitle',
    'Employment',
    'FirstLang',
    'SecondLang',
    ];

    public function user_education()
      {
        return $this->hasOne('App\User','id','user_id');
      }
}
