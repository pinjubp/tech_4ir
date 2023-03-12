<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class SubCategory extends Model
{
    //use HasFactory;

    public function categories(){

        return $this->belongsTo(Category::class,'category_id','id');

    }
}
