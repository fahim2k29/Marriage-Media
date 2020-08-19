<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Traits\AutoTimeStamp;
use App\Traits\Sluggable;

class QuickPage extends Model
{
	use AutoTimeStamp, Sluggable;
	
    protected $guarded = ['id'];
    protected $fillable = [
        'name','section','short_desc','status', 'slug',
    ];
}
