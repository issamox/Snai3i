<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content'   => $this->faker->paragraph(),
            'stars'     => rand(1,5),
            'user_id'   => User::all()->random(),
            'author_id' => User::all()->random(),
        ];
    }
}
