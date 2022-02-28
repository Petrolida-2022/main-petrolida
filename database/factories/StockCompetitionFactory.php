<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StockCompetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $id = 2;
        return [
            'user_id'       => $id,
            'register_code' => "STC-" . $id,
            'name'          => $this->faker->name(),
            'email'         => $this->faker->email(),
            'team_name'     => $this->faker->word(),
            'university'    => $this->faker->word(),
            'phone'         => $this->faker->phoneNumber(),
            'file'          => "STC-" . $id . '_Leader.png',
            'payment'       => "STC-" . $id++ . '_payment.png',
        ];
    }
}
