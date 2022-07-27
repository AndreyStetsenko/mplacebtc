<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'user_author',
        'user_create',
        'title',
        'description',
        'short_description',
        'price',
        'price_sale',
        'image',
        'visible',
        'published',
    ];

    // Models\Products
    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'categories_make', 'product_id', 'category_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_create');
    }

    public function author()
    {
        return $this->hasOne(User::class, 'id', 'user_author');
    }

    public function attach()
    {
        return $this->hasOne(Attachments::class, 'post_id', 'id');
    }
}
