<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Cart;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $fillable = [
        'user_id',
        'prod_id',
        'prod_yards',
    ];

    public function products()
    {
       return $this->belongsTo(Product::class, 'prod_id', 'id');
    }
}
