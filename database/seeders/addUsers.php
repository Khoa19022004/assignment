<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class addUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::create([
            'username'=>'Khoatd',
            'password'=>'khoa123',
            'email'=>'khoa19022004@gmail.com'
        ]);
    }
}
