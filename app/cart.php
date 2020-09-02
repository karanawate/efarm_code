<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
        protected $table = 'cart';

        protected $fillable = [
            'product_id',
            'product_name',
            'product_color',
            'quantity',
            'session_id'
        ];

        // protected $dates = [
        //     'created_at',
        //     'updated_at'
        // ];
        public $timestamps = false;
}
