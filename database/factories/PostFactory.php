<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'title' => $this->faker->realText($maxNbChars = 11, $indexSize = 2),
            'description' =>$this->faker->realText($maxNbChars = 26, $indexSize = 2),
            'text' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'image' =>  $this->faker->image('public/storage',640,480, null, false),
            'view_count' => $this->faker->numberBetween(0, 80),
            'status' => $this->faker->numberBetween(0, 1),
            'created_at' => $this->faker->dateTimeThisYear($max = 'now', $timezone = null),
            'updated_at' =>$this->faker->dateTimeThisYear($max = 'now', $timezone = null),
                
        ];
    }
}
