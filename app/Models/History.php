<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;
    protected $table = 'history'; 

    protected $fillable = [
        'id',
        'email',
        'name',
        'phone',
        'id_user',
        'price',
    ];
}
