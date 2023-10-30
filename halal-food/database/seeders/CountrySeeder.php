<?php

namespace Database\Seeders;

use App\Models\CountryModel;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory([
            'name'=>'Sohaib',
        ])->create();


        CountryModel::factory()
            ->for($user)
            ->count(100)
            ->create();

    }
}
