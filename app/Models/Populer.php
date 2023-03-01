<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Populer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description_title',
        'price',
        'available_seats',
        'schedule',
        'image',
    ];
}
