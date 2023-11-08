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
            'bio' => 'Trainer 1 adalah seorang individu yang sangat berpengalaman dan penuh semangat dalam bidangnya. Mereka telah mengumpulkan pengetahuan dan keterampilan yang luas dalam pekerjaan atau disiplin tertentu. Dengan semangat yang tinggi, Trainer 1 mungkin memiliki kemampuan untuk memotivasi dan menginspirasi orang lain untuk mencapai tujuan mereka, baik dalam konteks pelatihan fisik, pelatihan bisnis, atau bidang lainnya.

            Keberpengalamanan dan semangat yang dimiliki oleh Trainer 1 dapat menjadi kombinasi yang kuat untuk membantu orang lain mencapai kesuksesan, memecahkan masalah, atau mencapai prestasi dalam berbagai aspek kehidupan. Mereka mungkin menjadi sumber inspirasi dan pemimpin dalam komunitas atau industri tertentu di mana mereka beroperasi.
            
            
            
            
            ',
            'profile_picture' => 'https://cdn.vectorstock.com/i/1000x1000/93/05/woman-personal-trainer-icon-flat-style-vector-37429305.webp',
        ]);

        // Data Trainer #2
        Trainer::create([
            'name' => 'Trainer 2',
            'age' => 35,
            'bio' => 'Bio Trainer 2',
            'profile_picture' => 'https://cdn.vectorstock.com/i/1000x1000/93/07/man-personal-trainer-icon-flat-style-vector-37429307.webp',
        ]);

        // Data Trainer #3
        Trainer::create([
            'name' => 'Trainer 3',
            'age' => 28,
            'bio' => 'Bio Trainer 3',
            'profile_picture' => 'https://static.vecteezy.com/system/resources/previews/000/151/465/non_2x/vector-muscleman-personal-trainer-illustration.jpg',
        ]);

        // Data Trainer #4
        Trainer::create([
            'name' => 'Trainer 4',
            'age' => 32,
            'bio' => 'Bio Trainer 4',
            'profile_picture' => 'https://static.vecteezy.com/system/resources/previews/006/994/204/non_2x/a-man-holds-dumbbells-in-his-hands-a-man-does-sports-exercises-for-the-hands-vector.jpg',
        ]);
    }
}
