<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Attraction;
use App\Models\Hotel;
use App\Models\Restaurant;
use App\Models\Social;
use App\Models\User;

class SocialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Social::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'link' => $this->faker->text(),
            'attraction_id' => Attraction::factory(),
            'restaurant_id' => Restaurant::factory(),
            'hotel_id' => Hotel::factory(),
            'user_id' => User::factory(),
        ];
    }
}
