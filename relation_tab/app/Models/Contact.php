<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['phone','gpa','college_name','sid'];

    public function student(){
        return $this->belongsTo(Student::class,'sid');
    }
}
