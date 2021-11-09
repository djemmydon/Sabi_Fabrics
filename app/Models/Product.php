<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;
use App\Models\Product;

class Product extends Model
{
    use HasFactory;

    protected $table ='products';
    protected $fillable = [
        'subcate_id',
        'name',
        'slug',
        'small_descript',
        'descript',
        'original_price',
        'selling_price',
        'image',
        'prod_image',
        'status',
        'trendings',
    ];

    public function subCategory()
    {
      return $this->belongsTo(SubCategory::class, 'subcate_id', 'id');
    }
    

}
