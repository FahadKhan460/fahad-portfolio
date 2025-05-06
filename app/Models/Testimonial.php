<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Testimonial extends Model
{
    protected $fillable = ['name', 'position', 'company', 'content', 'image_path', 'rating'];
}
