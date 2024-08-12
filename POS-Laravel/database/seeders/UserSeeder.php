<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'email' => 'admin@mail.com'
        ], [
            'first_name' => 'Admin',
            'last_name' => 'CA',
            'email'=>'admin@mail.com',
            'password' => bcrypt('codeastro.com')
        ]);
    }
}
