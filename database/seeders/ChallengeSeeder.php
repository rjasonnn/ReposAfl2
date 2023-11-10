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
                'deskripsi' => 'Skipping selama 1 menit untuk melatih koordinasi dan ketahanan.
                Lakukan jumping jacks selama 1 menit untuk meningkatkan denyut jantung dan pembakaran kalori.
                Lari di tempat selama 2 menit untuk melatih kekuatan kaki dan kardiovaskular.
                Burpees selama 1 menit untuk latihan tubuh secara keseluruhan dan peningkatan kekuatan.
                Melakukan high knees (lutut tinggi) selama 1 menit untuk meningkatkan kekuatan otot perut dan kardiovaskular.',
               
            ],
            [
                'image' => 'https://i.pinimg.com/736x/f4/d1/60/f4d160463a7b3f7d9867a4e146dcfade.jpg',
                'judul' => 'Abs',
                'deskripsi' => 'Plank selama 1 menit untuk menguatkan otot perut dan inti tubuh.
                Sit-up selama 1 menit untuk melatih otot rektus abdominis.
                Russian twists selama 1 menit untuk melatih otot obliques.
                Leg raises selama 1 menit untuk melatih lower abs.
                Bicycle crunches selama 1 menit untuk latihan menyeluruh otot perut.
                Mountain climbers selama 1 menit untuk meningkatkan ketahanan otot perut dan kardiovaskular.',
              
            ],
            [
                'image' => 'https://i.pinimg.com/736x/f0/b6/8d/f0b68d1d204ff9cea8461b4ff7ab84ea.jpg',
                'judul' => 'Legs',
                'deskripsi' => 'Lakukan 20 squats untuk melatih otot paha dan gluteus.
                Kerjakan 15 lunges per kaki untuk menguatkan otot paha dan otot pantat.
                Lakukan 20 calf raises untuk melatih otot betis.
                Lakukan 15 leg curls per kaki untuk melatih otot hamstring.
                Kerjakan 20 step-ups per kaki dengan kursi atau bangku rendah untuk melatih otot paha dan pantat.
                Lakukan 15 glute bridges untuk menguatkan otot panggul dan otot pantat.',
              
            ],
            [
                'image' => 'image4.jpg',
                'judul' => 'Challenge 4',
                'deskripsi' => 'Deskripsi Challenge 4',
            ],
            [
                'image' => 'https://us.123rf.com/450wm/djvstock/djvstock1904/djvstock190403356/124111075-young-man-practicing-outdoor-gym-vector-illustration-design.jpg?ver=6',
                'judul' => 'Triceps',
                'deskripsi' => 'Lakukan 15 tricep dips dengan kursi atau bangku rendah.
                Kerjakan 20 tricep push-ups dengan tangan rapat.
                Lakukan 15 diamond push-ups untuk fokus pada triceps.
                Lakukan 20 tricep kickbacks dengan berat yang sesuai.
                Kerjakan 15 overhead tricep extensions dengan dumbbell.
                Lakukan 20 bench presses dengan barbel dengan fokus pada triceps.',
            ],
            [
                'image' => 'https://media.istockphoto.com/id/1456811769/vector/man-doing-push-up-exercise-semi-flat-color-vector-character.jpg?s=612x612&w=0&k=20&c=aHVuKlY9_FQfjwXZlpZ-QUbK4CTWLnCApl7i2ArMJ40=',
                'judul' => 'Chest',
                'deskripsi' => 'Lakukan 3 set bench press dengan barbell, masing-masing 15 repetisi.
                Kerjakan 4 set dumbbell flyes di flat bench, masing-masing 12 repetisi.
                Lakukan 3 set machine chest press, masing-masing 15 repetisi.
                Lakukan 4 set cable crossovers di cable machine, masing-masing 12 repetisi.
                Kerjakan 3 set chest dips, masing-masing 15 repetisi.
                Lakukan 4 set incline bench press dengan barbell, masing-masing 12 repetisi.',
            ],
        ];

        // Masukkan data ke dalam tabel
        foreach ($challenges as $challenge) {
            DB::table('challenges')->insert($challenge);
        }
    }
}
