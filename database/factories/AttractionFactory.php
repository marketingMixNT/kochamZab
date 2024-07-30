<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Attraction;
use App\Models\User;

class AttractionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attraction::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'meta_title' => '{}',
            'meta_desc' => '{}',
            'title' => '{}',
            'slug' => '{}',
            'desc' => '{}',
            'thumbnail' => $this->faker->text(),
            'gallery' => $this->faker->text(),
            'address' => $this->faker->text(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
            'google_maps_link' => $this->faker->text(),
            'google_maps_frame' => $this->faker->text(),
            'site_link' => $this->faker->text(),
            'featured' => $this->faker->boolean(),
            'sort' => $this->faker->numberBetween(-10000, 10000),
            'user_id' => User::factory(),
        ];
    }
}
