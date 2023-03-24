<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\User;
use App\Models\Description;


class Product extends Model
{
    //use HasFactory;

    public function users(){

        return $this->belongsTo(User::class,'user_id','id');

    }
    public function categories(){

        return $this->belongsTo(Category::class,'category_id','id');

    }
    public function brands(){

        return $this->belongsTo(Brand::class,'brand_id','id');

    }
    public function subcategorys(){

        return $this->belongsTo(SubCategory::class,'subcategory_id','id');

    }

    public function description(){

        return $this->belongsTo(Description::class,'product_id','id');

    }
}
