<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
        'post_type',
        'type',
        'name',
        'url',
        'path',
        'extension',
        'alt',
        'size',
        'weight',
    ];

    public function products()
    {
        return $this->hasOne(Products::class);
    }
}
