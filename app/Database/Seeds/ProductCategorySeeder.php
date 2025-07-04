<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        // membuat data
        $data = [
            [
                'nama' => 'Smartphone',
                'deskripsi' => 'Kategori untuk berbagai jenis smartphone dari berbagai merek.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Tablet',
                'deskripsi' => 'Kategori untuk perangkat tablet yang cocok untuk hiburan dan produktivitas.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Smartwatch',
                'deskripsi' => 'Kategori untuk jam tangan pintar dengan berbagai fitur modern.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Headphone',
                'deskripsi' => 'Kategori untuk headphone berkualitas tinggi untuk mendengarkan musik.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Kamera Digital',
                'deskripsi' => 'Kategori untuk kamera digital dengan berbagai fitur fotografi.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Peralatan Gaming',
                'deskripsi' => 'Kategori untuk peralatan gaming seperti mouse, keyboard, dan kursi gaming.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Peralatan Dapur',
                'deskripsi' => 'Kategori untuk peralatan dapur seperti blender, oven, dan rice cooker.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Peralatan Olahraga',
                'deskripsi' => 'Kategori untuk peralatan olahraga seperti treadmill dan dumbbell.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Buku',
                'deskripsi' => 'Kategori untuk berbagai jenis buku seperti novel, komik, dan buku pelajaran.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Mainan Anak',
                'deskripsi' => 'Kategori untuk mainan anak seperti puzzle, boneka, dan mobil-mobilan.',
                'created_at' => date("Y-m-d H:i:s"),
            ]
        ];

        foreach ($data as $item) {
            // insert semua data ke tabel
            $this->db->table('product_category')->insert($item);
        }
    }
}