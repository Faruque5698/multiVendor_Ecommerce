<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildCategory extends Model
{
    use HasFactory;
    protected $table='child_categories';
    protected $fillable = ['title','subcategory_id','summary','status'];

    public function subcategory(){
        return $this->belongsTo(SubCategory::class,'subcategory_id');
    }
    public function product(){
        return $this->hasMany(Product::class);
    }
}
