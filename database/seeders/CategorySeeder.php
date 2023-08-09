<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::truncate();
        
        $data = [
            ['Cat' => 'IIb', 'cat_description' => 'Operating Costs'],
            ['Cat' => 'IIa', 'cat_description' => 'Salaries and Allowances'],
            ['Cat' => 'Ie', 'cat_description' => 'Credit Lines'],
            ['Cat' => 'Id', 'cat_description' => 'Grants & Subsidies'],
            ['Cat' => 'Ic', 'cat_description' => 'Technical Assistance'],
            ['Cat' => 'Ib', 'cat_description' => 'Equipments, Goods & Vehicles'],
            ['Cat' => 'Ia', 'cat_description' => 'Civil Works'],
            // Add more rows as needed...
        ];

        Category::insert($data);
    }
}
