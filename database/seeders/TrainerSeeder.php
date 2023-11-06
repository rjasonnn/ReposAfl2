<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trainer;
class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trainer::create([
            'name' => 'Trainer 1',
            'age' => 30,
            'bio' => 'Bio Trainer 1',
            'profile_picture' => 'path-to-profile-picture-1.jpg',
        ]);

        // Data Trainer #2
        Trainer::create([
            'name' => 'Trainer 2',
            'age' => 35,
            'bio' => 'Bio Trainer 2',
            'profile_picture' => 'path-to-profile-picture-2.jpg',
        ]);

        // Data Trainer #3
        Trainer::create([
            'name' => 'Trainer 3',
            'age' => 28,
            'bio' => 'Bio Trainer 3',
            'profile_picture' => 'path-to-profile-picture-3.jpg',
        ]);

        // Data Trainer #4
        Trainer::create([
            'name' => 'Trainer 4',
            'age' => 32,
            'bio' => 'Bio Trainer 4',
            'profile_picture' => 'path-to-profile-picture-4.jpg',
        ]);
    }
}
