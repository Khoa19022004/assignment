<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Category;
class addCategories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['ten_loai' => 'Đời Sống'],
            ['ten_loai' => 'Giải Trí'],
            ['ten_loai' => 'Thể Thao'],
            ['ten_loai' => 'Giáo dục'],
            ['ten_loai' => 'Sức Khoẻ'],
            ['ten_loai' => 'Du Lịch'],
        ];

        foreach ($categories as $categoryData) {
            Category::create($categoryData); // Sử dụng model để tạo category
        };

    }
}
