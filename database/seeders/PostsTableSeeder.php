<?php

namespace Database\Seeders;

use App\Models\Posts;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Posts::create([
            'postTitle' => 'Ghibli Castle',
            'imgLink' => 'https://res.cloudinary.com/djfokefsy/image/upload/v1725159025/blog-porto/ghibli_qr1kxl.png',
            'projectLink' => 'https://ghibli-castle.vercel.app/',
            'description' => 'Situs web yang ditampilkan adalah Ghibli Castle, yang menampilkan berbagai elemen dari dunia Studio Ghibli, termasuk film, karakter, soundtrack, dan fanart. Situs ini didesain menggunakan HTML dan CSS, yang menciptakan tampilan estetis dan bersih. Desainnya minimalis dengan navigasi yang jelas, memungkinkan pengguna untuk dengan mudah menjelajahi konten terkait Studio Ghibli. Gambar dan elemen visual dipilih dengan cermat untuk menangkap esensi magis dari film-film Ghibli, menjadikannya ruang yang menarik bagi para penggemar.',
        ]);
        Posts::create([
            'postTitle' => 'Nct Dream Fanbase',
            'imgLink' => 'https://res.cloudinary.com/djfokefsy/image/upload/v1725159011/blog-porto/fanbase-nct_eewith.png',
            'projectLink' => 'https://fanbase-phi.vercel.app/',
            'description' => 'Situs web fanbase ini didedikasikan untuk NCT Dream, sebuah sub-unit dari grup K-Pop NCT. Dengan menggunakan HTML, CSS, dan JavaScript, situs ini menampilkan profil grup, informasi anggota, galeri foto, dan koleksi album mereka. Desainnya yang modern dan responsif memastikan pengalaman pengguna yang mulus di berbagai perangkat, sementara visual yang menarik dan navigasi yang mudah digunakan memberikan ruang bagi penggemar untuk lebih mengenal NCT Dream.',
        ]);
        Posts::create([
            'postTitle' => 'Bitz Odyssey',
            'imgLink' => 'https://res.cloudinary.com/djfokefsy/image/upload/v1725158937/blog-porto/bitz-odyssey_f055st.png',
            'projectLink' => 'https://bitz-odyssey.vercel.app/',
            'description' => 'Bitz Odyssey adalah sebuah game edukatif dibuat menggunakan construct3 berjenis petualangan platformer yang dirancang untuk membantu mahasiswa mengetahui salah satu jenis multimedia interaktif. Bitz Odyssey mengambil materi mengenai konsep alur pemrosesan data dalam teknologi informasi. Dalam game ini, pemain akan mengendalikan karakter utama bernama "Bitz" yang melambangkan data dalam komputer. Pemain akan menjalani petualangan seru melewati berbagai rintangan dan tantangan yang menggambarkan proses alur data dari input, proses, penyimpanan, hingga output. Latar Belakang Cerita Bitz adalah simbolisasi dari data dalam komputer yang harus melalui berbagai piranti untuk dapat diproses. Perjalanan Bitz dimulai dari input, di mana data pertama kali dimasukkan ke dalam sistem, kemudian bergerak melalui CPU untuk diproses, disimpan dalam penyimpanan eksternal, dan akhirnya dikeluarkan sebagai output. Dalam game ini, pemain akan membantu Bitz melalui perjalanan ini, menghadapi berbagai tantangan yang mencerminkan keadaan lingkungan dalam pengolahan data, seperti membersihkan keyboard, memasang komponen motherboard, dan mengatasi serangan virus di harddisk.',
        ]);

    }
}
