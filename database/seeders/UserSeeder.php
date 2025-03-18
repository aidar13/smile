<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** @var User $admin */
        $admin = User::query()->firstOrCreate(
            [
                'email' => "kanybek.a13@gmail.com",
            ],
            [
                'name'     => 'Admin',
                'email'    => "kanybek.a13@gmail.com",
                'password' => Hash::make('admin123'),
            ]
        );

        /** @var User $doctor */
        $doctor = User::query()->firstOrCreate(
            [
                'email' => "doctor@gmail.com",
            ],
            [
                'name'     => 'Admin',
                'email'    => "doctor@gmail.com",
                'password' => Hash::make('doctor123'),
            ]
        );

        $admin->assignRole(Role::findByName(Role::NAME_ADMIN, 'api'));
        $doctor->assignRole(Role::findByName(Role::NAME_DOCTOR, 'api'));
    }
}
