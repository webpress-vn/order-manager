<?php

namespace VCComponent\Laravel\Order\Entities;

use Illuminate\Database\Eloquent\Model;

class UserOrders extends Model
{
    protected $fillable = [
        'order_id',
    ];
}
