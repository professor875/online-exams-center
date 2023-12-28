<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'roll' => 'admin',
             'name' => 'Admin',
             'email' => 'admin@admin.com',
             'password' => Hash::make('password')
         ]);
         \App\Models\User::factory()->create([
             'roll' => 'examiner',
             'name' => 'Examiner',
             'email' => 'examiner@test.com',
             'password' => Hash::make('password')
         ]);
         \App\Models\User::factory()->create([
             'roll' => 'sub-admin',
             'name' => 'Sub Admin',
             'email' => 'subadmin@test.com',
             'password' => Hash::make('password')
         ]);
    }
}
