<?php

namespace mahdikhorshidi\products\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'product_id',
        'price'
    ];
}
