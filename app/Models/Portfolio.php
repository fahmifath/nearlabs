<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasUuid;

    protected $fillable = [
        'project_name',
        'client_name',
        'description',
        'image',
        'project_url',
    ];
}
