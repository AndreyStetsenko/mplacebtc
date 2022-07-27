<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesMake extends Model
{
    use HasFactory;

    public $table = "categories_make";

    protected $fillable = [
        'category_id',
        'product_id',
    ];
}
