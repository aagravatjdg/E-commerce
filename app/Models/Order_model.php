<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_model extends Model
{
    use HasFactory;

    protected $table = 'order_detail';

    protected $fillable = [
        'user_name',
        'address',
        'state',
        'city',
        'zip',
        'size',
        'quantity',
        'price',
        'status',
        'count',
    ];

    public function product()
    {
        return $this->belongsTo(Seller_Products::class, 'product_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }



}
