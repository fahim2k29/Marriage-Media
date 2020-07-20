<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeUse extends Model
{
    protected $fillable=[
        'user_id',
        'FirstName',
        'LastName',
        'Address',
        'City',
        'Country',
        'PostCode',
        'ContactTel',
        'MobileTel',
        'DOB_day',
        'DOB_month',
        'DOB_year',
];

        public function user_officeUse()
      {
        return $this->hasOne('App\User','id','user_id');
      }
}
