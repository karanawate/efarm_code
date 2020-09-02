<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'brand_name',
        'generic_name',
        'weight',
        'state',
        'quantity',
        'content',
        'type',
        'sub_type',
        'price',
        'stalk_amount',
        'sku',
        'category_id',
        'image',
        'sortindex',
        'status',
        'slug',
        'description',
        'specification'
    ];
    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
