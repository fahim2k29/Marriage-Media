<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{

    protected $fillable = [
        'title',
        'image',
        'video',
        'description',
    ];
}