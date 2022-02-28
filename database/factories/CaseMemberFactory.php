<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CaseMemberFactory extends Factory
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
            'case_competition_id'    => $id - 1,
            'register_code'         => "CaseStudy-" . $id,
            'name'                  => $this->faker->name(),
            'email'                 => $this->faker->email(),
            'phone'                 => $this->faker->phoneNumber(),
            'file'                  => "CaseStudy-" . $id . "_Member" . $member++ . ".png"
        ];
    }
}
