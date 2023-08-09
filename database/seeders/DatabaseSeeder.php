<?php

namespace Database\Seeders;

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
            CenterSeeder::class,
            WardSeeder::class,
            CategorySeeder::class,
            FinancingSeeder::class,
            ExpenseItemSeeder::class,
            SubActivitySeeder::class,
            ReferenceCodeSeeder::class,
            MainActivitySeeder::class,
            ReferenceCodeUnitSeeder::class
        ]);
        //$this->call(ReferenceCodeTTableSeeder::class);
        //$this->call(MainactivitiesTableSeeder::class);
        //$this->call(ReferenceCodeUnitsTableSeeder::class);
        //$this->call(ExpenseItemTableSeeder::class);
    }
}
