<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SpecificationValue;

class Specification extends Model
{
    //use HasFactory;
    public function SpecificationValue(){

        return $this->belongsTo(SpecificationValue::class,'id','specification_id');
    
        }
}
