<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }
    public function subcategory(){
        return $this->belongsTo(SubCategory::class,'sub_cat_id');
    }
    public function childcategory(){
        return $this->belongsTo(ChildCategory::class,'child_cat_id');
    }
    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id');
    }
    public function gallery(){
        return $this->hasMany(ProductGallery::class);
    }
    public function sizeBasedProduct(){
        return $this->hasMany(SizeBasedProduct::class);
    }

}
