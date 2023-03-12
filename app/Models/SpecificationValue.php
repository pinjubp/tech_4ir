<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Specification;

class SpecificationValue extends Model
{
   // use HasFactory;

   public function specification(){

    return $this->belongsTo(Specification::class,'specification_id','id');

    }
}
