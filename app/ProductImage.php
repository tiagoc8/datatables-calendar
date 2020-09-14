<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'products_image';
    
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
