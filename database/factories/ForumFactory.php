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
            'title' => $this->faker->sentence(),
            'category' =>$this->faker->randomElement(['Matematicas','Programación','Consejos']),
            'description'=>$this->faker->text(),
            'user_id'=>User::all()->random()->id
        ];
    }
}
