<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create([
            'country' => 'Indonesia',
            'region' => 'South Sulawesi',
            'city' => 'Parepare',
        ]);

        Address::create([
            'country' => 'Indonesia',
            'region' => 'South Sulawesi',
            'city' => 'Makassar',
        ]);

        Address::create([
            'country' => 'Indonesia',
            'region' => 'South Sulawesi',
            'city' => 'Barru',
        ]);

        Address::create([
            'country' => 'Indonesia',
            'region' => 'South Sulawesi',
            'city' => 'Pinrang',
        ]);

        Address::create([
            'country' => 'Indonesia',
            'region' => 'South Sulawesi',
            'city' => 'Enrekang',
        ]);

        Address::create([
            'country' => 'Indonesia',
            'region' => 'South Sulawesi',
            'city' => 'Sidrap',
        ]);

        Address::create([
            'country' => 'Indonesia',
            'region' => 'South Sulawesi',
            'city' => 'Soppeng',
        ]);

        Address::create([
            'country' => 'Indonesia',
            'region' => 'South Sulawesi',
            'city' => 'Bone',
        ]);

        Address::create([
            'country' => 'Indonesia',
            'region' => 'South Sulawesi',
            'city' => 'Wajo',
        ]);

        Address::create([
            'country' => 'Indonesia',
            'region' => 'South Sulawesi',
            'city' => 'Maros',
        ]);
    }
}
