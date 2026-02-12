<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'type',
        'year',
        'client',
        'tools',
        'slug',
        'thumbnail',
        'github',
        'image',
        'link',
    ];

    protected $casts = [
    'image' => 'array',
];
}
