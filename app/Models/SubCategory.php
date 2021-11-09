<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class SubCategory extends Model
{
    use HasFactory;

    protected $table = 'sub_categories';
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'image',
        'description',
        'status',
        'popular',
     

    ];

      public function categori()
    {
      return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
