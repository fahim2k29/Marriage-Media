<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{

    protected $fillable = [
        'title',
        'main_image',
        'description',
        'body_image',
        'address',
        'marriage_date',

    ];
}