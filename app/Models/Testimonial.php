<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasUuid;

    protected $fillable = [
        'client_name',
        'position',
        'message',
        'rating',
        'photo',
        'is_active',
    ];

    protected $casts = [
        'rating' => 'integer',
        'is_active' => 'boolean',
    ];
}
