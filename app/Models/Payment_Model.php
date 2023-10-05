<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_Model extends Model
{
    use HasFactory;

    protected $table = 'payment';


    protected $fillable = [
        'product_name',
        'product_price',
        'product_quantity',
        'status',
        'user_name',
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
