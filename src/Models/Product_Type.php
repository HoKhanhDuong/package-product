<?php

namespace Duong\Product\Models;

use Illuminate\Database\Eloquent\Model;

class Product_Type extends Model
{
    //
    protected $table = 'product_type';
    protected $primaryKey = 'id';

    public function Products() {
        return $this->hasMany('Duong\Product\Models\Products', 'product_type_id', 'local_key');
    }
}
