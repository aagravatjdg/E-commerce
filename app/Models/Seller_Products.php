<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller_Products extends Model
{
    use HasFactory;

    protected $table = 'seller_product';

    protected $fillable = [
        'product_title',
        'brand_name',
        'p_front_image',
        'product_images',
        'shoes_for',
        'description',
        'shoes_price',
        'specification',
        'shoes_size',
        'shoes_type',
        // 'created_at',
        'status',
    ];


    public function Party()
    {
        return $this->belongsTo(Party::class, 'company_id');
    }

}
