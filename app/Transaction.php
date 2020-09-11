<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
'user_id',
'fk_created_by',
'fk_updated_by',
'amount',
'transactionable_type',
'transactionable_id'
    ];

    
}
