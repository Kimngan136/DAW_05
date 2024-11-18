<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            BrandSeeder::class,
            CapacitySeeder::class,
            ColorSeeder::class,
            ProductSeriesSeeder::class,
            ProductSeeder::class,
            FrontCameraSeeder::class,
            RearCameraSeeder::class,
            ScreenSeeder::class,
            ProductDescriptionSeeder::class,
            LogoSeeder::class,
        ]);
    }
}
