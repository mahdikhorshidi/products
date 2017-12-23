<?php

namespace mahdikhorshidi\products\Models;

use Cog\Likeable\Contracts\Likeable as LikeableContract;
use Cog\Likeable\Traits\Likeable;
use Illuminate\Database\Eloquent\Model;
use Lecturize\Taxonomies\Traits\HasTaxonomies;

class Product extends Model implements LikeableContract
{
    use Likeable;

    protected $fillable = ['name', 'barcode', 'avatar', 'sort', 'visible', 'description'];
    public function prices()
    {
        return 0;
    }
    public function lastprice()
    {
        return 10;
    }
}
