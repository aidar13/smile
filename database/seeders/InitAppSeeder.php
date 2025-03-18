<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InitAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
    }
}
