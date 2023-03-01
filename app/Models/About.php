<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_descrption',
        'two_short_descrption',
        'list',
        'three_list',
        'two_list',
        'about_image',
    ];
}
