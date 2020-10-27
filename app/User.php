<?php

namespace App;

use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Payment;
use App\Aboutme;
use App\Education;
use App\Personal;
use App\Religion;
use App\AddPhoto;
use App\Models\Package;



use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $table = 'user';


    protected $fillable = [
        'UserName',
        'email',
        'ConfirmEmail',
        'Country',
        'Gender',
        'DOB_day',
        'DOB_month',
        'DOB_year',
        'RegistrationReason',
        'HearAboutUs',
        'Accept',
        'password',

    ];


    public function scopeRelations($query)
    {
        $query->with('aboutme','education','religion','personal','addphoto');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    // public function personal()
    //  {
    //    return $this->belongsTo( 'App\Personal','user_id');
    //  }

    public function aboutme()
    {
        return $this->hasOne(Aboutme::class, 'user_id', 'id');
    }

    public function religion()
    {
        return $this->hasOne(Religion::class, 'user_id', 'id');
    }

    public function officeuse()
    {
        return $this->hasOne(OfficeUse::class, 'user_id', 'id');
    }

    public function personal()
    {
        return $this->hasOne(Personal::class, 'user_id', 'id');
    }

    public function education()
    {
        return $this->hasOne(Education::class, 'user_id', 'id');
    }

    public function addphoto()
    {
        return $this->hasOne(AddPhoto::class, 'user_id', 'id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'user_id', 'id');
    }
    public function userLogoutTime()
    {
        return $this->hasOne(UserLogoutTime::class, 'user_id', 'id');
    }

}
