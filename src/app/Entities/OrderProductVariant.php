<?php

namespace VCComponent\Laravel\Order\Entities;

use VCComponent\Laravel\Product\Entities\Variant;
use Illuminate\Database\Eloquent\Model;

class OrderProductVariant extends Model
{
    protected $fillable = [
        'order_item_id',
        'variant_id',
        'variant_type',
    ];

    public function variant()
    {
        return $this->belongsTo(Variant::class, 'variant_id');
    }
}
