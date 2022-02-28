<?php

namespace Database\Seeders;

use App\Models\OrdMember;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // $user = new User;

        // $user->name     = 'Petrolida Admin';
        // $user->email    = 'admin@petrolida.com';
        // $user->password = Hash::make('G4tauP4ssnya');

        // $user->save();
        \App\Models\OrdCompetition::factory(15)->create()->each(function ($user) {
            \App\Models\OrdMember::factory(4)->create();
        });
        \App\Models\PaperCompetition::factory(15)->create()->each(function ($user) {
            \App\Models\PaperMember::factory(2)->create();
        });
        \App\Models\StockCompetition::factory(15)->create()->each(function ($user) {
            \App\Models\StockMember::factory(1)->create();
        });
        \App\Models\BusinessCompetition::factory(15)->create()->each(function ($user) {
            \App\Models\BusinessMember::factory(2)->create();
        });
        \App\Models\CaseCompetition::factory(15)->create()->each(function ($user) {
            \App\Models\CaseMember::factory(2)->create();
        });
        \App\Models\FfdCompetition::factory(15)->create()->each(function ($user) {
            \App\Models\FfdMember::factory(2)->create();
        });
        \App\Models\PetrosmartCompetition::factory(15)->create()->each(function ($user) {
            \App\Models\PetrosmartMember::factory(2)->create();
        });
    }
}
