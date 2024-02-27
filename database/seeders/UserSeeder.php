<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::Where('email','tripti2k24@gmail.com')->first();
        if(!$user){
            User::create([
                'name' => 'Super Admin',
                'email' => 'tripti2k24@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'Super Admin'
            ]);
        }
    }
}
