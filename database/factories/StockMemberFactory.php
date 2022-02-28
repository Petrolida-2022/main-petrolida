<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StockMemberFactory extends Factory
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
            'user_id'               => $id,
            'stock_competition_id'    => $id - 1,
            'register_code'         => "STC-" . $id,
            'name'                  => $this->faker->name(),
            'email'                 => $this->faker->email(),
            'phone'                 => $this->faker->phoneNumber(),
            'file'                  => "STC-" . $id++ . "_Member.png"
        ];
    }
}
