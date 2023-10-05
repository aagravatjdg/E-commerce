<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    protected $table = 'company_detail';


    protected $fillable = [
        'company_id',
        'company_name',
        'company_logo',
        'company_licence',
        'address',
        'state',
        'city',
        'zip',
        'gender',
        'status',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }



}
