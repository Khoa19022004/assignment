<?php

namespace Database\Factories;
use App\Faker\VietNameseProvider as VietNamese;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory  as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $faker=Faker::create('vi_VN');
        $faker->addProvider(new VietNamese($faker));
        return [
            'title' =>$faker->name(), // Tạo tiêu đề ngẫu nhiên
            'description' => $faker->generateVietnameseText(3),
            'content' => $faker->generateVietnameseText(200),
            'image'=>$faker->getImage().".jpg",
            'views' => $faker->numerify(), // Số lượt xem ngẫu nhiên
            'id_user'=>$faker->numerify(1),
            'id_category' => $faker->numberBetween(1, 6),
        ];
    }
}
