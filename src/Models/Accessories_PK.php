<?php

namespace Duong\Product\Models;

use Illuminate\Database\Eloquent\Model;

class Accessories_PK extends Model
{
    //
    protected $table = 'accessories';
    protected $primaryKey = 'id';

    public function PK_Product() {
        return $this->hasMany('Duong\Product\Models\PK_Product', 'accessories_id', 'local_key');
    }
}
