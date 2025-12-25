<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasUuid;

    protected $fillable = [
        'slug',
        'title',
        'is_active',
    ];
}
