<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        $students = collect([ 
            [ 
                'name' => 'Tanvir',
                'email' => 'tanvir@gmail.com',
                'age' => 30,
                'city' => 'Bhola'
            ],
            [ 
                'name' => 'Shoain',
                'email' => 'shoaib@gmail.com',
                'age' => 55,
                'city' => 'Rawalpindi'
            ],
            [ 
                'name' => 'Amir',
                'email' => 'amir@gmail.com',
                'age' => 33,
                'city' => 'Pakistan'
            ]
        ]);

        $students -> each(function($student){ 
            student::insert($student);
        });

        // student::create([ 
        //     'name'=>'Tuhin',
        //     'email'=>'mtuhin@gmail.com',
        //     'age'=>30,
        //     'city'=>'Gaibandha'
        // ]);
    }
}
