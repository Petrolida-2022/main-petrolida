<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FfdMemberFactory extends Factory
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
            'ffd_competition_id'    => $id - 1,
            'register_code'         => "FFDC-" . $id,
            'name'                  => $this->faker->name(),
            'email'                 => $this->faker->email(),
            'phone'                 => $this->faker->phoneNumber(),
            'file'                  => "FFDC-" . $id . "_Member" . $member++ . ".png"
        ];
    }
}
