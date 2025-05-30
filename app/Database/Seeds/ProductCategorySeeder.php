<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        // Data untuk tabel product_categories
        $data = [
            [
                'name' => 'Laptop Gaming',
                'description' => 'Laptop untuk gaming',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Laptop Ultrabook',
                'description' => 'Laptop ultrabook Keren',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Laptop Budget',
                'description' => 'Laptop budget untuk mahasiswa',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Laptop Design',
                'description' => 'Laptop untuk design',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Laptop New',
                'description' => 'Laptop baru',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Laptop Second',
                'description' => 'Laptop second bekas',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Laptop Mahal',
                'description' => 'Laptop mahal mantap',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Laptop MSI',
                'description' => 'Laptop MSI mantap',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Laptop Asus',
                'description' => 'Laptop Asus mantap',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Laptop Bagas',
                'description' => 'Laptop Bagas mantap Syekali',
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ];

        foreach ($data as $item) {
            // Insert data ke tabel product_categories
            $this->db->table('product_categories')->insert($item);
        }
    }
}