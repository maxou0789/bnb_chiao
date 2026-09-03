<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'name',
        'brand_name',
        'email',
        'phone',
        'project_type',
        'budget_range',
        'timeline',
        'message',
        'status',
    ];
}
