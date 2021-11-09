<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use  Illuminate\Database\Eloquent\Relations\BelongsTo;


class orderItem extends Model
{
    use HasFactory;

        protected $table = 'order_item';
    protected $fillable = [
        'order_id',
        'prod_id',
        'quantity',
        'price',
     
     
    ];

    /**
     * get the product that own order item
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
       public function products(): BelongsTo
    {
       return $this->belongsTo(Product::class, 'prod_id', 'id');
    }
}

