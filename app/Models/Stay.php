<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stay extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'category',
        'category_label',
        'location',
        'image',
        'gallery',
        'rating',
        'views_count',
        'highlights',
        'description',
        'instagram_url',
        'is_featured',
        'sort_order',
    ];

    protected $casts = [
        'gallery' => 'array',
        'highlights' => 'array',
        'is_featured' => 'boolean',
    ];
}
