<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'desc',
        'writer',
        'date',
        'image_featured_donation',
        'tag',
    ];
}