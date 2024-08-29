<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function categoriesSub(){
        return $this->hasOneThrough(Category::class, Subcategory::class, 'product_id', 'id','id','suncategory_id');
    }
}
