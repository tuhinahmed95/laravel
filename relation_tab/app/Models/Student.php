<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','email','address'];

    public function contact(){
        return $this->hasOne(Contact::class);
    }
}
