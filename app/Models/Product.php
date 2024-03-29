<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'image',
        'original_price',
        'selling_price',
        'quantity',
        'brand',
        'trending',
        'popular',
        'shape'

    ];


    function category (): BelongsTo {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
