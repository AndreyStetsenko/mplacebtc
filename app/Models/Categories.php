<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Categories extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'categories';

    protected $fillable = [
        'sub',
        'name',
        'slug',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    // Models\Category
    public function products()
    {
        return $this->belongsToMany(Products::class);
    }
}
