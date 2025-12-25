<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasUuid;

    protected $fillable = [
        'name',
        'description',
        'price_start',
        'icon',
        'is_active',
    ];

    protected $casts = [
        'price_start' => 'decimal:2',
        'is_active' => 'boolean',
    ];
}
