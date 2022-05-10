<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ForumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'category' =>$this->faker->randomElement(['Matematicas','Programación','Consejos']),
            'description'=>$this->faker->sentence(),
            'user_id'=>User::all()->random()->id
        ];
    }
}
