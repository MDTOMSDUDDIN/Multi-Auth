<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin=User::create([
            'name'=>'Admin User',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123456'),
            'role'=>'admin'
        ]);

        $agent=User::create([
            'name'=>'agent User',
            'email'=>'agent@gmail.com',
            'password'=>Hash::make('123456'),
            'role'=>'agent'
        ]);
        
        $user=User::create([
            'name'=>'user User',
            'email'=>'user@gmail.com',
            'password'=>Hash::make('123456'),
            'role'=>'user'
        ]);
    }
}
