<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavItem extends Model
{
    protected $fillable = ['label', 'url', 'target', 'sort', 'is_active'];

    protected $casts = ['is_active' => 'boolean'];
}
