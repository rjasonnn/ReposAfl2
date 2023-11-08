<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $challenges = [
            [
                'image' => 'https://i.pinimg.com/736x/2d/83/46/2d8346b149638f5ca6141353c72d4ad8.jpg',
                'judul' => 'Cardio',
                'deskripsi' => 'As technology continues to evolve, so too does the world of web design. CSS is no exception, with
                advancements being made all the time to enhance the user experience of websites. In this article, we
                will explore the latest trends and predictions for the future of CSS and what it means for web
                developers and designers.',
                'isi' => '30 Hari Plank Challenge:

                Tujuan: Meningkatkan ketahanan plank dan memperkuat otot perut.
                Cara Melakukan: Setiap hari, lakukan plank selama waktu yang semakin lama. Mulai dari 20 detik pada hari pertama dan tingkatkan setiap hari hingga mencapai 5 menit.
                100 Crunches Challenge:
                
                Tujuan: Meningkatkan kekuatan otot perut dengan melakukan crunches.
                Cara Melakukan: Setiap hari, lakukan 100 crunches. Jika Anda tidak bisa langsung mencapai 100, lakukan sebanyak yang Anda bisa dan tingkatkan seiring waktu.
                Ab Wheel Challenge:
                
                Tujuan: Meningkatkan kekuatan otot perut dengan menggunakan roda ab.
                Cara Melakukan: Lakukan latihan ab wheel setiap hari, mulai dengan beberapa repetisi dan tingkatkan seiring waktu.
                Leg Raise Challenge:
                
                Tujuan: Meningkatkan kekuatan otot perut bawah dengan leg raises.
                Cara Melakukan: Setiap hari, lakukan leg raises dalam jumlah yang meningkat. Mulai dari 10 repetisi dan tambahkan lebih banyak setiap hari.
                Russian Twist Challenge:
                
                Tujuan: Mengencangkan otot pinggul dan samping perut.
                Cara Melakukan: Setiap hari, lakukan russian twist dengan beban tambahan atau dumbbell. Tingkatkan jumlah repetisi atau beratannya seiring waktu.',
            ],
            [
                'image' => 'https://i.pinimg.com/736x/f4/d1/60/f4d160463a7b3f7d9867a4e146dcfade.jpg',
                'judul' => 'Abs',
                'deskripsi' => 'As technology continues to evolve, so too does the world of web design. CSS is no exception, with
                advancements being made all the time to enhance the user experience of websites. In this article, we
                will explore the latest trends and predictions for the future of CSS and what it means for web
                developers and designers.',
                'isi' => '30 Hari Plank Challenge:

                Tujuan: Meningkatkan ketahanan plank dan memperkuat otot perut.
                Cara Melakukan: Setiap hari, lakukan plank selama waktu yang semakin lama. Mulai dari 20 detik pada hari pertama dan tingkatkan setiap hari hingga mencapai 5 menit.
                100 Crunches Challenge:
                
                Tujuan: Meningkatkan kekuatan otot perut dengan melakukan crunches.
                Cara Melakukan: Setiap hari, lakukan 100 crunches. Jika Anda tidak bisa langsung mencapai 100, lakukan sebanyak yang Anda bisa dan tingkatkan seiring waktu.
                Ab Wheel Challenge:
                
                Tujuan: Meningkatkan kekuatan otot perut dengan menggunakan roda ab.
                Cara Melakukan: Lakukan latihan ab wheel setiap hari, mulai dengan beberapa repetisi dan tingkatkan seiring waktu.
                Leg Raise Challenge:
                
                Tujuan: Meningkatkan kekuatan otot perut bawah dengan leg raises.
                Cara Melakukan: Setiap hari, lakukan leg raises dalam jumlah yang meningkat. Mulai dari 10 repetisi dan tambahkan lebih banyak setiap hari.
                Russian Twist Challenge:
                
                Tujuan: Mengencangkan otot pinggul dan samping perut.
                Cara Melakukan: Setiap hari, lakukan russian twist dengan beban tambahan atau dumbbell. Tingkatkan jumlah repetisi atau beratannya seiring waktu.',
            ],
            [
                'image' => 'https://i.pinimg.com/736x/f0/b6/8d/f0b68d1d204ff9cea8461b4ff7ab84ea.jpg',
                'judul' => 'Legs',
                'deskripsi' => 'As technology continues to evolve, so too does the world of web design. CSS is no exception, with
                advancements being made all the time to enhance the user experience of websites. In this article, we
                will explore the latest trends and predictions for the future of CSS and what it means for web
                developers and designers.',
                'isi' => '30 Hari Plank Challenge:

                Tujuan: Meningkatkan ketahanan plank dan memperkuat otot perut.
                Cara Melakukan: Setiap hari, lakukan plank selama waktu yang semakin lama. Mulai dari 20 detik pada hari pertama dan tingkatkan setiap hari hingga mencapai 5 menit.
                100 Crunches Challenge:
                
                Tujuan: Meningkatkan kekuatan otot perut dengan melakukan crunches.
                Cara Melakukan: Setiap hari, lakukan 100 crunches. Jika Anda tidak bisa langsung mencapai 100, lakukan sebanyak yang Anda bisa dan tingkatkan seiring waktu.
                Ab Wheel Challenge:
                
                Tujuan: Meningkatkan kekuatan otot perut dengan menggunakan roda ab.
                Cara Melakukan: Lakukan latihan ab wheel setiap hari, mulai dengan beberapa repetisi dan tingkatkan seiring waktu.
                Leg Raise Challenge:
                
                Tujuan: Meningkatkan kekuatan otot perut bawah dengan leg raises.
                Cara Melakukan: Setiap hari, lakukan leg raises dalam jumlah yang meningkat. Mulai dari 10 repetisi dan tambahkan lebih banyak setiap hari.
                Russian Twist Challenge:
                
                Tujuan: Mengencangkan otot pinggul dan samping perut.
                Cara Melakukan: Setiap hari, lakukan russian twist dengan beban tambahan atau dumbbell. Tingkatkan jumlah repetisi atau beratannya seiring waktu.',
            ],
            [
                'image' => 'image4.jpg',
                'judul' => 'Challenge 4',
                'deskripsi' => 'Deskripsi Challenge 4',
                'isi' => 'Isi Challenge 4',
            ],
            [
                'image' => 'image5.jpg',
                'judul' => 'Challenge 5',
                'deskripsi' => 'Deskripsi Challenge 5',
                'isi' => 'Isi Challenge 5',
            ],
            [
                'image' => 'image6.jpg',
                'judul' => 'Challenge 6',
                'deskripsi' => 'Deskripsi Challenge 6',
                'isi' => 'Isi Challenge 6',
            ],
        ];

        // Masukkan data ke dalam tabel
        foreach ($challenges as $challenge) {
            DB::table('challenges')->insert($challenge);
        }
    }
}
