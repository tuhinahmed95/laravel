<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function contact(){ 
        return $this->hasOne(Contact::class);
    }
}
