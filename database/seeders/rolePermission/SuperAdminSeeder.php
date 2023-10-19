<?php

namespace Database\Seeders\rolePermission;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create(
            [
                'name'     => 'anik',
                'email'    => 'anik@gmail.com',
                'password' => Hash::make(12345678),
                'user_type' => 1,
            ]
        );

        $user->assignRole('super-admin');
    }
}
