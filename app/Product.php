<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function size()
    {
        return $this->belongsToMany(Size::class, 'size_products', 'product_id', 'size_id');
    }
}
