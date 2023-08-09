<?php

namespace Database\Seeders;

use App\Models\Financing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinancingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Financing::truncate();
        
        $data = [
            ['Donor' => 'D09', 'Description' => 'Participating Financial Institution (PFI)'],
            ['Donor' => 'D08', 'Description' => 'Heifer International (HI)'],
            ['Donor' => 'D07', 'Description' => 'Beneficiaries - Inkind'],
            ['Donor' => 'D06', 'Description' => 'Beneficiaries - Cash'],
            ['Donor' => 'D05', 'Description' => 'GOK - Tax'],
            ['Donor' => 'D04', 'Description' => 'GOK - Inkind'],
            ['Donor' => 'D03', 'Description' => 'GOK - Cash'],
            ['Donor' => 'D02', 'Description' => 'IFAD AIA'],
            ['Donor' => 'D01', 'Description' => 'IFAD Revenue'],
            // Add more rows as needed...
        ];

        Financing::insert($data);
    }
}
