<?php

namespace Database\Seeders;

use App\Models\Warship;
use Illuminate\Database\Seeder;

class WarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Warship::create([
            'name' => 'Bismarck',
            'type' => 'Battleship',
            'country' => 'Nazi Germany'
        ]);

        Warship::create([
            'name' => 'Yamato',
            'type' => 'Battleship',
            'country' => 'Japan'
        ]);

        Warship::create([
            'name' => 'USS Iowa',
            'type' => 'Battleship',
            'country' => 'United States'
        ]);

        Warship::create([
            'name' => 'HMS Hood',
            'type' => 'cruiser',
            'country' => 'United Kingdom'
        ]);

        Warship::create([
            'name' => 'USS Enterprise',
            'type' => 'aircraftcarrier',
            'country' => 'United States'
        ]);

        Warship::create([
            'name' => 'Admiral Graf Spee',
            'type' => 'cruiser',
            'country' => 'Nazi Germany'
        ]);

        Warship::create([
            'name' => 'Musashi',
            'type' => 'Battleship',
            'country' => 'Japan'
        ]);

        Warship::create([
            'name' => 'USS Missouri',
            'type' => 'Battleship',
            'country' => 'United States'
        ]);

        Warship::create([
            'name' => 'KMS Scharnhorst',
            'type' => 'Battleship',
            'country' => 'Nazi Germany'
        ]);

        Warship::create([
            'name' => 'HMS Prince of Wales',
            'type' => 'Battleship',
            'country' => 'United Kingdom'
        ]);
        Warship::create([
            'name' => 'Anhalt',
            'type' => 'battleship',
            'country' => 'Nazi Germany'
        ]);
    }
}
