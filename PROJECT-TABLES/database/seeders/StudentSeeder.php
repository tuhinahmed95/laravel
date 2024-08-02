<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        $students = collect(json_deconde($json));

        $students->each(function($students){ 
            student::create([ 
                'name' =>$students ->name,
                'email' =>$students ->emial,
                'age' =>$students ->age,
                'city' =>$students ->city,
            ]);
        });
    }
}
