<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory  as Faker;
use App\Faker\VietNameseProvider as VN;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker=Faker::create();
        $faker->addProvider(new VN($faker));
        return [
            'content'=>$faker->generateVietnameseText(1),
            'id_user'=>$faker->numberBetween(1,10),
            'id_post'=>$faker->numberBetween(1,50)
        ];
    }
}
