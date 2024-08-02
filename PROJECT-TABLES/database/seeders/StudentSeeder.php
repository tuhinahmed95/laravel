<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\student;



class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(path:'database/json/students.json');
        $students = collect(json_decode($json));

        $students->each(function($students){ 
            student::create([ 
                'name' =>$students ->name,
                'email' =>$students ->email,
                'age' =>$students ->age,
                'city' =>$students ->city,
            ]);
        });
    }
}
