<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'category_id', 'summary', 'status'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function childCategory(){
        return $this->hasMany(ChildCategory::class);
    }
    public function product(){
        return $this->hasMany(Product::class);
    }
}
