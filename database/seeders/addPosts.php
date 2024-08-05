<?php

namespace Database\Seeders;

use App\Models\Posts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class addPosts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Posts::factory(50)->create();
    }
}
