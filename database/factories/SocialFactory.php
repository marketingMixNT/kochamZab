<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Apartment;
use App\Models\Attraction;
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
            'apartment_id' => Apartment::factory(),
            'attraction_id' => Attraction::factory(),
            'restaurant_id' => Restaurant::factory(),
            'user_id' => User::factory(),
        ];
    }
}
