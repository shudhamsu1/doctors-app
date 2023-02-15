<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'first_name' =>$this->faker->firstName,
                'last_name' =>$this->faker->lastName,
                'email'=>$this->faker->email,
                'password' =>bcrypt($this->faker->password),
                'gender' => $this->faker->randomElement(['Male','Female']),
                'phone_number' => $this->faker->phoneNumber,
                'status' =>  $this->faker->randomElement(['Active','Inactive']),
                'address' =>  $this->faker->address,
                'type' => 'doctor',
                'created_at' => $this->faker->dateTimeBetween('-1 year','now'),
                'updated_at' =>$this->faker->dateTimeBetween('-1 year','now'),
        ];
    }
}
