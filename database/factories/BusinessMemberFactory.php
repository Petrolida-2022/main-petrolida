<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BusinessMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $id = 2;
        static $member = 1;
        if ($member == 3) {
            $member = 1;
            $id++;
        }
        return [
            'user_id'               => $id,
            'business_competition_id'    => $id - 1,
            'register_code'         => "BCC-" . $id,
            'name'                  => $this->faker->name(),
            'email'                 => $this->faker->email(),
            'phone'                 => $this->faker->phoneNumber(),
            'file'                  => "BCC-" . $id . "_Member" . $member++ . ".png"
        ];
    }
}
