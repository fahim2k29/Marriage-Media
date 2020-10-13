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

     public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
