<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'slug', 'seo_title', 'meta_description', 'content', 'status', 'sort'];

    public function isPublished(): bool
    {
        return $this->status === 'published';
    }
}
