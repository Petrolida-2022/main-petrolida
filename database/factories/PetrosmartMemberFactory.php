<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PetrosmartMemberFactory extends Factory
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
            'petrosmart_competition_id'    => $id - 1,
            'register_code'         => "Petrosmart-" . $id,
            'name'                  => $this->faker->name(),
            'email'                 => $this->faker->email(),
            'phone'                 => $this->faker->phoneNumber(),
            'file'                  => "Petrosmart-" . $id . "_Member" . $member++ . ".png"
        ];
    }
}
