<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(10)->create();

        User::create([
            'name' => 'Martin Hlaváč',
            'email' => 'martin.hlavac@czechitas.cz',
            'email_verified_at' => now(),
            'password' => Hash::make('hesSlo123'),
            'remember_token' => Str::random(10),
        ]);
    }
}
