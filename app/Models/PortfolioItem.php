<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class PortfolioItem extends Model
{
    protected $fillable = ['title', 'category', 'description', 'image_path', 'project_url'];
}
