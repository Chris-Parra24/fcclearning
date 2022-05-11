<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ResourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'category' =>$this->faker->randomElement(['Libros','Articulos','Prácticas','videos']),
            'URL'=>$this->faker->url(),
            'description'=>$this->faker->text(),
            'user_id'=>User::all()->random()->id
        ];
    }
}
