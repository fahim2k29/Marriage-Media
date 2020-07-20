<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $fillable=[
            'user_id',
            'Citizenship',
            'Origin',
            'Relocation',
            'Income',
            'MarryIn',
            'MaritalStatus',
            'Children',
            'HaveChildren',
            'Living',
            'Height',
            'Build',
            'Hair',
            'EyeColour',
            'Smoke',
            'Disabilities',
    ];

        public function user_personal()
      {
        return $this->hasOne('App\User','id','user_id');
      }
}
