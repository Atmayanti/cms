<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'name' => 'Wortel America',
            'slug' => 'wortel-america',
            'image' => 'img-pro-01',
            'content' => 'Wortel (serapan dari bahasa Belanda: wortel) adalah tumbuhan biennial (siklus hidup 12 - 24 bulan) yang menyimpan karbohidrat dalam jumlah besar untuk tumbuhan tersebut berbunga pada tahun kedua. Batang bunga tumbuh setinggi sekitar 1 m, dengan bunga berwarna putih, dan rasa yang manis langu. Bagian yang dapat dimakan dari wortel adalah bagian umbi atau akarnya.',
            'price' => 10.50,
            'draft' => 0
        ]);
        DB::table('posts')->insert([
            'name' => 'Tomat London',
            'slug' => 'Tomat London',
            'image' => 'img-pro-02',
            'content' => 'Tomat (Solanum lycopersicum syn. Lycopersicum esculentum) adalah tumbuhan dari keluarga Solanaceae, tumbuhan asli Amerika Tengah dan Selatan, dari Meksiko sampai Peru. Tomat merupakan tumbuhan siklus hidup singkat, dapat tumbuh setinggi 1 sampai 3 meter. Tumbuhan ini memiliki buah berawarna hijau, kuning, dan merah yang biasa dipakai sebagai sayur dalam masakan atau dimakan secara langsung tanpa diproses.',
            'price' => 9.25,
            'draft' => 0
        ]);
        DB::table('posts')->insert([
            'name' => 'Anggur Jepang',
            'slug' => 'anggur-jepang',
            'image' => 'img-pro-03',
            'content' => 'Anggur merupakan tanaman buah berupa perdu merambat yang termasuk ke dalam keluarga Vitaceae. Buah ini biasanya digunakan untuk membuat jus anggur, jelly, minuman anggur, minyak biji anggur dan kismis, atau dimakan langsung. Buah ini juga dikenal karena mengandung banyak senyawa polifenol dan resveratol yang berperan aktif dalam berbagai metabolisme tubuh, serta mampu mencegah terbentuknya sel kanker dan berbagai penyakit lainnya.',
            'price' => 35.20,
            'draft' => 0
        ]);
        DB::table('posts')->insert([
            'name' => 'Pepaya Singapura',
            'slug' => 'pepaya-singapura',
            'image' => 'img-pro-04',
            'content' => ' Pepaya kini telah menyebar luas dan banyak ditanam di seluruh daerah tropis untuk diambil buahnya. C. papaya adalah satu-satunya jenis dalam genus Carica. Nama pepaya dalam bahasa Indonesia diambil dari bahasa Belanda, "papaja", yang pada gilirannya juga mengambil dari nama bahasa Arawak, "papaya". Dalam bahasa Jawa pepaya disebut "katès" dan dalam bahasa Sunda "gedang".',
            'price' => 8.75,
            'draft' => 0
        ]);
        DB::table('posts')->insert([
            'name' => 'Jeruk Korea',
            'slug' => 'jeruk-korea',
            'image' => 'img-pro-05',
            'content' => 'Jeruk atau limau adalah semua tumbuhan berbunga anggota marga Citrus dari suku Rutaceae (suku jeruk-jerukan). Anggotanya berbentuk pohon dengan buah yang berdaging dengan rasa masam yang segar, meskipun banyak di antara anggotanya yang memiliki rasa manis. Rasa masam berasal dari kandungan asam sitrat yang memang menjadi terkandung pada semua anggotanya.',
            'price' => 12.55,
            'draft' => 0
        ]);
        DB::table('posts')->insert([
            'name' => 'Apel Malaysia',
            'slug' => 'apel-malaysia',
            'image' => 'img-pro-06',
            'content' => 'Apel merupakan jenis buah-buahan, atau buah yang dihasilkan dari pohon buah apel. Buah apel biasanya berwarna merah kulitnya jika masak dan (siap dimakan), namun bisa juga kulitnya berwarna hijau atau kuning. Kulit buahnya agak lembek dan daging buahnya keras. Buah apel memiliki beberapa biji di dalamnya. Orang mulai pertama kali menanam apel di Asia Tengah.',
            'price' => 20.99,
            'draft' => 0
        ]);
    }
}
