<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ProfileClinic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Rivaldi Admin',
            'email' => 'rivaldi@admin.com',
            'phone' => '089521824652',
            'role' =>'admin',
            'password' => Hash::make('12345678')
        ]);

        \App\Models\Doctor::factory(10)->create();
        \App\Models\Doctor::factory()->create([
            'name' => 'Dr Rivaldi',
            'email' => 'rivaldi@admin.com',
            'phone' => '089521824652',
            'sip' =>'SIP123',
            'specialist' => 'Urology'
        ]);

        ProfileClinic::create([
            'name' => 'Clinic Bersalin Huha',
            'email' => 'bersalin@gmail.com',
            'phone' => '089999999',
            'doctor_name' => 'Dr Sign',
            'unique_code' => '9890',
            'address' => 'Jl Kesehatan No 10 Jakarta Pusat'
        ]);
    }
}
