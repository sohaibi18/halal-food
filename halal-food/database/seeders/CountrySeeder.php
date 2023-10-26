<?php

namespace Database\Seeders;

use App\Models\CountryModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CountryModel::create([
            'Country' => fake()->country(),
            'Code' => fake()->countryCode,
        ]);
    }
}
