<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [    
        
        'quantity',
        'price',
        'discount',
        'status',
        'purchase_date',
        'expire_date',
        'payment_amount',
        'payment_method',
        'transaction_id',
        'user_id',
        'package_id'
        ];

      public function package()
    {
        return $this->belongsTo('App\Models\Package', 'package_id', 'id');
    }
}
