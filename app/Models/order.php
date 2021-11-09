<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orderItem; 


class order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        
        'fname',
        'lname',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zipcode',
        'total_price',
        'status',
        'tracking_no',
     
    ];

    public function orderItem()
    {
        return $this->hasMany(orderItem::class);
    }
 
}
