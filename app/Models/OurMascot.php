<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurMascot extends Model
{
    use HasFactory;
    protected $table = 'our_mascot';
    protected $fillable = [
        'title',
        'description_title',
        'our_mascot',
    ];
}

