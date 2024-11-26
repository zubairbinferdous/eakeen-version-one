<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_title',
        'product_id',
        'description',
        'product_seo',
        'seo_description',
        'status',
        'visibility',
        'category_id',
        'subcategory_id',
        'brand',
        'actual_price',
        'discount_price',
        'dealer_price',
        'stock',
        'coin',
        'availability',
        'ProductImages',
        'tags',
        'hot_deals',
        'featured',
        'today_deal',
    ];
}
