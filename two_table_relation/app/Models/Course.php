<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_name',
        'student_id'
    ];

    public function students (){
        return $this->belongsTo(Student::class);
    }
}
