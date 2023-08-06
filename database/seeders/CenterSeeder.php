<?php

namespace Database\Seeders;

use App\Models\Center;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Center' => '11-TNZ', 'Description' => 'Trans Nzoia County', 'Area' => ''],
            ['Center' => '10-SYA', 'Description' => 'Siaya County', 'Area' => ''],
            ['Center' => '09-SAM', 'Description' => 'Samburu County', 'Area' => ''],
            ['Center' => '08-NAK', 'Description' => 'Nakuru County', 'Area' => ''],
            ['Center' => '07-MAR', 'Description' => 'Marsabit County', 'Area' => ''],
            ['Center' => '06-KKM', 'Description' => 'Kakamega County', 'Area' => ''],
            ['Center' => '05-ELM', 'Description' => 'Elgeyo Marakwet County', 'Area' => ''],
            ['Center' => '04-BSA', 'Description' => 'Busia County', 'Area' => ''],
            ['Center' => '03-BGM', 'Description' => 'Bungoma County', 'Area' => ''],
            ['Center' => '02-BAR', 'Description' => 'Baringo County', 'Area' => ''],
            ['Center' => '01-PCU-7', 'Description' => 'IFAD Desk Officer', 'Area' => ''],
            ['Center' => '01-PCU-6', 'Description' => 'Administration Assistant', 'Area' => ''],
            ['Center' => '01-PCU-5', 'Description' => 'Finance Controller', 'Area' => ''],
            ['Center' => '01-PCU-4', 'Description' => 'Procurement Specialist', 'Area' => ''],
            ['Center' => '01-PCU-3', 'Description' => 'Monitoring and Evaluation Specialist', 'Area' => ''],
            ['Center' => '01-PCU-2', 'Description' => 'Livestock Marketing Specialist', 'Area' => ''],
            ['Center' => '01-PCU-1-S', 'Description' => 'Social Inclusion Specialist', 'Area' => ''],
            ['Center' => '01-PCU-1-L', 'Description' => 'Livestock Production Specialist', 'Area' => ''],
            ['Center' => '01-PCU-1-E', 'Description' => 'Environment Climate and Safeguards Specialist', 'Area' => ''],
        ];

        Center::insert($data);
    }
}
