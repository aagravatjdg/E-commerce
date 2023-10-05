<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class site_header_footer extends Model
{
    use HasFactory;

    protected $table = 'site_header_footer';

    protected $fillable = [
        'gmail',
        'number',
        'address',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
        'location_link',
    ];
}
