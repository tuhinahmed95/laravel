<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\lecturer;
use App\Models\student;


class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(path:'database/json/lecturers.json');
        $lecturers = collect(json_decode($json));

        $lecturers->each(function($lecturers){ 
            lecturer::create([ 
                'name' =>$lecturers ->name,
                'email' =>$lecturers ->email,
                'age' =>$lecturers ->age,
                'city' =>$lecturers ->city,
            ]);
        });
    }
}
