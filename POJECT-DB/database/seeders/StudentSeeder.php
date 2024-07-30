<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        student::factory(5)->create();


        // for($i =1; $i <= 10; $i ++){ 
        //     student::create([ 
        //         'name' => fake()->name(),
        //         'email' => fake()->unique()->email()
        //     ]);
        // }
        


        // $json = File::get(path: 'database/json/students.json');
        // $students = collect(json_decode($json));


        // $students = collect ( 
        //     [ 
        //         [ 
        //             'name' => 'Tuhin',
        //             'email' => 'mtuhinahmded@gmail.com'
        //         ],
        //         [ 
        //             'name' => 'Rafia',
        //             'email' => 'Rafia@gmail.com'
        //         ],
        //         [ 
        //             'name' => 'Farzana',
        //             'email' => 'farzana@gmail.com'
        //         ]
                
        //     ]
        // );

        // $students -> each(function($student){ 
        //         student::create([ 

        //         'name' => $student ->name,
        //         'email' => $student -> email
        //     ]);

        // });

        
    }
}
