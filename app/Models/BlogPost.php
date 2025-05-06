<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class BlogPost extends Model
{
    protected $fillable = ['title', 'slug', 'excerpt', 'content', 'featured_image', 'published_at'];
}
