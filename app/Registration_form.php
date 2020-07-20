<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration_form extends Model
{

    protected $fillable = [
        'UserName',
        'Email',
        'ConfirmEmail',
        'Country',
        'Gender',
        'DOB_day',
        'DOB_month',
        'DOB_year',
        'RegistrationReason',
        'HearAboutUs',
        'Accept',   
    ];
}
