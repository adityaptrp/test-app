<?php

namespace Database\Seeders;

use App\Models\Role;
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
        User::create([
            'role_id' => Role::where('name', 'master')->first()->id,
            'name' => 'Dika Putra',
            'username' => 'dikaptrw',
            'email' => 'dikaptrw@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$st76ubiBv1oz8lF3aanmhu8zeQJBTJHcuTezHyAK9ejuEa1wlNGlC', //Qwert123
        ]);
        User::create([
            'role_id' => Role::where('name', 'master')->first()->id,
            'name' => 'Aditya Putra',
            'username' => 'adityaptrp',
            'email' => 'sp.adityaptrp@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$st76ubiBv1oz8lF3aanmhu8zeQJBTJHcuTezHyAK9ejuEa1wlNGlC', //Qwert123
        ]);
    }
}
