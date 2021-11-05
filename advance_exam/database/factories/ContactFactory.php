<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'gender' => $this->faker->numberBetween(0,1),
            'email' => $this->faker->email,
            'postcode' => $this->faker->postcode,
            'address' => $this->faker->address,
            'building_name' => $this->faker->city,
            'opinion' => $this->faker->randomLetter(1,120),
            'created_at' => $this->faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
            'updated_at' => $this->faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
        ];
    }
}
