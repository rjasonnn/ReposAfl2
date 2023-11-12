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
            'name' => 'Daniel White',
            'age' => 30,
            'bio' => 'Daniel adalah seorang pelatih kebugaran yang berfokus pada kesehatan mental dan fisik. Dengan pendekatan yang berpusat pada keseimbangan, dia menggabungkan latihan kardio, kekuatan, dan meditasi untuk membantu klien meraih kesehatan yang komprehensif. Daniel juga aktif dalam mendukung kesehatan mental di komunitasnya.',
            'profile_picture' => 'https://drive.google.com/uc?export=view&id=1W7n0izGkMVEbX1UnebF5_g0cws7YA9Ym',
        ]);

        // Data Trainer #2
        Trainer::create([
            'name' => 'Jake Martinez',
            'age' => 35,
            'bio' => 'Sebagai mantan tentara, Jake membawa disiplin militer ke pelatihan kebugaran. Dia memiliki keahlian dalam latihan khusus berbasis fungsional yang memadukan kekuatan, kelenturan, dan keseimbangan. Jake percaya bahwa konsistensi dan tekad adalah kunci utama untuk meraih hasil yang signifikan.',
            'profile_picture' => 'https://drive.google.com/uc?export=view&id=1jz6YXhT-rhrMQwWu_sU9na5rCBUPOdfp',
        ]);

        // Data Trainer #3
        Trainer::create([
            'name' => 'Dr. Marc Grant',
            'age' => 40,
            'bio' => 'Sebagai dokter dan pelatih kebugaran bersertifikasi, Marc memiliki pengetahuan medis yang mendalam tentang tubuh dan latihan. Dia mengintegrasikan pengetahuan kedokteran dengan pelatihan fisik untuk membantu klien dengan tujuan kesehatan yang holistik.',
            'profile_picture' => 'https://drive.google.com/uc?export=view&id=1AVSOK3it35OcYoh87RK_K3j7NcjPrNpw',
        ]);

        // Data Trainer #4
        Trainer::create([
            'name' => 'Emily Clarke',
            'age' => 27,
            'bio' => 'Seorang ahli yoga dan meditasi, Emily mendalami pendekatan kebugaran yang menggabungkan aspek fisik dan mental. Dia memiliki sertifikasi dalam berbagai disiplin yoga dan telah membantu banyak klien menemukan keseimbangan hidup melalui latihan yoga dan teknik meditasi.',
            'profile_picture' => 'https://drive.google.com/uc?export=view&id=17L-aWbU_lU51LKJe20I_v9dxmIufMJM-',
        ]);

        Trainer::create([
            'name' => 'Sarah Johnson',
            'age' => 32,
            'bio' => 'Sarah adalah seorang pelatih personal yang berpengalaman dengan fokus pada kebugaran holistik. Dengan latar belakang sebagai atlet profesional, dia memiliki pengetahuan mendalam tentang pelatihan kardio, kekuatan, dan nutrisi. Sarah percaya pada pendekatan yang personal untuk membantu klien mencapai tujuan kebugaran mereka.',
            'profile_picture' => 'https://drive.google.com/uc?export=view&id=1U9I_e3kYUT28_tKjzZTQafd_nbcwOOXe',
        ]);

        Trainer::create([
            'name' => 'Maxwell "Max" Roberts',
            'age' => 40,
            'bio' => 'Max adalah seorang pelatih kebugaran yang sangat energik dan motivasional. Dengan latar belakang dalam seni bela diri dan kebugaran militer, dia fokus pada latihan intensitas tinggi, pengembangan kekuatan, dan peningkatan daya tahan. Max dikenal karena motivasinya yang tak kenal lelah.',
            'profile_picture' => 'https://drive.google.com/uc?export=view&id=12KOHIthCfBTD01vY47h4PT3FqLuWldu5',
        ]);
    }
}
