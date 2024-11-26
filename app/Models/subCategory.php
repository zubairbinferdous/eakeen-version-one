<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subCategory extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'subcategory_name'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
