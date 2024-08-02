<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\student;
use App\Models\citie;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([ 
            StudentSeeder::class
        ]);
        $this->call([ 
            CitieSeeder::class
        ]);
    }
}
