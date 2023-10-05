<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index_model extends Model
{
    use HasFactory;

    protected $table = 'site_index';

    protected $fillable = [
        'site_name',
        'one_1st_title',
        'one_2nd_title',
        'one_3rd_description',
        'one_1st_image',
        'two_1st_title',
        'quantity',
        'two_2nd_title',
        'two_3rd_description',
        'two_1st_image',
        'third_1st_title',
        'third_2nd_title',
        'third_3rd_description',
        'third_1st_image',
        'second_main_title',
        'second_description',
        'first_title',
        'first_image',
        'second_title',
        'second_image',
        'third_title',
        'third_image',

    ];
}
