<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->randomElement(['Tapisserie','Aluminium','Parabole TV','Maçonnerie','Climatisation','Jardinage','Camera','Electroménager','Plâtre','Parquet','Electricité','Peinture','Plomberie','Serrurerie']);
        return [
            'name' => $title,
            'slug' => Str::slug( $title )
        ];
    }
}
