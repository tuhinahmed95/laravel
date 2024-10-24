<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function contact(){
        return $this->hasOne(Contact::class);
    }
}
