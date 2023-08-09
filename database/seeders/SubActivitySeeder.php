<?php

namespace Database\Seeders;

use App\Models\SubActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubActivity::truncate();
        
        $data = [
            [ 'AcNo' => 'P204', 'SubActivity' => 'DSA for 3 PMCU staff', 'Unit' => 'DSA', 'Qty' => '72', 'UnitCost' => '10500', 'Budget' => '756000', 'Item' => '2210302'],
            [ 'AcNo' => 'P212', 'SubActivity' => 'VAT for catering services (16%of 120000)', 'Unit' => 'No', 'Qty' => '1', 'UnitCost' => '19200', 'Budget' => '19200', 'Item' => '2210801'],
            [ 'AcNo' => 'P211', 'SubActivity' => 'VAT for catering services (16% of 296000)', 'Unit' => '1', 'Qty' => '1', 'UnitCost' => '47360', 'Budget' => '47360', 'Item' => '2210801'],
            [ 'AcNo' => 'P210', 'SubActivity' => 'VAT for catering services (16% of 300000)', 'Unit' => 'No', 'Qty' => '1', 'UnitCost' => '48000', 'Budget' => '48000', 'Item' => '2210801'],
            [ 'AcNo' => 'P209', 'SubActivity' => 'VAT for conference services(16% of 180000)', 'Unit' => 'No.', 'Qty' => '1', 'UnitCost' => '28800', 'Budget' => '28800', 'Item' => '2210801'],
            [ 'AcNo' => 'P208', 'SubActivity' => 'Back stoppong-vehicle Maintatance', 'Unit' => 'Kms', 'Qty' => '4000', 'UnitCost' => '43', 'Budget' => '172000', 'Item' => '2220101'],
            [ 'AcNo' => 'P208', 'SubActivity' => 'Backstopping- Fuel for 2 vehicles', 'Unit' => 'Kms', 'Qty' => '4000', 'UnitCost' => '47', 'Budget' => '188000', 'Item' => '2211201'],
            [ 'AcNo' => 'P208', 'SubActivity' => 'Backstopping - DSA for 2 drivers', 'Unit' => 'No.', 'Qty' => '60', 'UnitCost' => '4900', 'Budget' => '294000', 'Item' => '2210302'],
            

            [ 'AcNo' => 'P208', 'SubActivity' => 'Backstopping- DSA for 3 TSA for 30 days', 'Unit' => 'No', 'Qty' => '90', 'UnitCost' => '8400', 'Budget' => '756000', 'Item' => '2210302'],
            [ 'AcNo' => 'P208', 'SubActivity' => 'Backstopping - DSA for 3 PMCU members 30 days', 'Unit' => 'No.', 'Qty' => '90', 'UnitCost' => '10500', 'Budget' => '945000', 'Item' => '2210302'],
            [ 'AcNo' => 'P207', 'SubActivity' => 'CO 28 airport transfer', 'Unit' => 'No', 'Qty' => '4', 'UnitCost' => '4000', 'Budget' => '16000', 'Item' => '2210401'],
            [ 'AcNo' => 'P207', 'SubActivity' => 'COP 28 - DSA for 14 days (553 $)', 'Unit' => 'No.', 'Qty' => '14', 'UnitCost' => '72000', 'Budget' => '1008000', 'Item' => '2210402'],
            [ 'AcNo' => 'P207', 'SubActivity' => 'COP 28- DUBAI- Air ticket for ECSS', 'Unit' => 'No', 'Qty' => '1', 'UnitCost' => '90000', 'Budget' => '90000', 'Item' => '2210401'],
            [ 'AcNo' => 'P207', 'SubActivity' => 'Annual ASK members tickets', 'Unit' => 'No.', 'Qty' => '2', 'UnitCost' => '5000', 'Budget' => '10000', 'Item' => '2211306'],
            [ 'AcNo' => 'P207', 'SubActivity' => 'Breeders show and ASK shows vehicle maintenance', 'Unit' => 'Kms', 'Qty' => '1700', 'UnitCost' => '43', 'Budget' => '73100', 'Item' => '2220101'],

            [ 'AcNo' => 'P207', 'SubActivity' => 'Breeders show and ASK shows vehicle maintenance', 'Unit' => 'Kms', 'Qty' => '1700', 'UnitCost' => '43', 'Budget' => '73100', 'Item' => '2220101'],
            [ 'AcNo' => 'P207', 'SubActivity' => 'Breeders show and ASK shows - Fuel', 'Unit' => 'Kms', 'Qty' => '1700', 'UnitCost' => '47', 'Budget' => '79900', 'Item' => '2211201'],
            [ 'AcNo' => 'P207', 'SubActivity' => 'Breeders show and ASK shows - DSA for ECSS and TSA', 'Unit' => 'No.', 'Qty' => '40', 'UnitCost' => '14000', 'Budget' => '560000', 'Item' => '2210302'],
            [ 'AcNo' => 'P207', 'SubActivity' => 'APSK symposium participation fee', 'Unit' => 'No.', 'Qty' => '1', 'UnitCost' => '24000', 'Budget' => '24000', 'Item' => '2211306'],
            [ 'AcNo' => 'P207', 'SubActivity' => 'APSK- Kisumu- Membership renewal', 'Unit' => 'No.', 'Qty' => '1', 'UnitCost' => '6000', 'Budget' => '6000', 'Item' => '2211306'],
            [ 'AcNo' => 'P207', 'SubActivity' => 'APSK -Kisumu- Fare refund', 'Unit' => 'No.', 'Qty' => '1', 'UnitCost' => '4000', 'Budget' => '4000', 'Item' => '2210301'],
            [ 'AcNo' => 'P207', 'SubActivity' => 'APSK- Kisumu - DSA for ECSS', 'Unit' => 'No.', 'Qty' => '5', 'UnitCost' => '14000', 'Budget' => '70000', 'Item' => '2210302'],
            [ 'AcNo' => 'P202', 'SubActivity' => 'DSA for 6 PMCU for 5 days', 'Unit' => 'DSA', 'Qty' => '30', 'UnitCost' => '10500', 'Budget' => '315000', 'Item' => '2210701'],
            [ 'AcNo' => 'P202', 'SubActivity' => 'DSA for PC for 5 days', 'Unit' => 'DSA', 'Qty' => '5', 'UnitCost' => '14000', 'Budget' => '70000', 'Item' => '2210701'],

            [ 'AcNo' => 'P201', 'SubActivity' => 'Write shop - DSA for 5 PMCU for 6 days', 'Unit' => 'DSA', 'Qty' => '30', 'UnitCost' => '10500', 'Budget' => '315000', 'Item' => '2210701'],
            [ 'AcNo' => 'P201', 'SubActivity' => 'Write shop - DSA for PC', 'Unit' => 'DSA', 'Qty' => '6', 'UnitCost' => '14000', 'Budget' => '84000', 'Item' => '2210701'],
            [ 'AcNo' => 'P206', 'SubActivity' => 'Maintenance for 16 vehicles', 'Unit' => 'Kms', 'Qty' => '9600', 'UnitCost' => '43', 'Budget' => '412800', 'Item' => '2220101'],
            [ 'AcNo' => 'P203', 'SubActivity' => 'Maintenance for 1 vehicle', 'Unit' => 'Kms', 'Qty' => '600', 'UnitCost' => '43', 'Budget' => '25800', 'Item' => '2220101'],
            [ 'AcNo' => 'P203', 'SubActivity' => 'Fuel for one vehicle', 'Unit' => 'Kms', 'Qty' => '600', 'UnitCost' => '47', 'Budget' => '28200', 'Item' => '2211201'],
            [ 'AcNo' => 'P202', 'SubActivity' => 'Maintenance for 5 vehicles', 'Unit' => 'Kms', 'Qty' => '3000', 'UnitCost' => '43', 'Budget' => '129000', 'Item' => '2220101'],
            [ 'AcNo' => 'P201', 'SubActivity' => 'Write shop - Maintenance of 5 vehicles', 'Unit' => 'Kms', 'Qty' => '3000', 'UnitCost' => '43', 'Budget' => '129000', 'Item' => '2220101'],
            [ 'AcNo' => 'P204', 'SubActivity' => 'Maintenance for 3 vehicles', 'Unit' => 'Km', 'Qty' => '6000', 'UnitCost' => '43', 'Budget' => '258000', 'Item' => '2220101'],
            [ 'AcNo' => 'P206', 'SubActivity' => 'Conference for 3 days for 50 persons', 'Unit' => 'No', 'Qty' => '150', 'UnitCost' => '2000', 'Budget' => '300000', 'Item' => '2210801'],
            [ 'AcNo' => 'P206', 'SubActivity' => 'Stationery', 'Unit' => 'No', 'Qty' => '60', 'UnitCost' => '300', 'Budget' => '18000', 'Item' => '2211101'],
            [ 'AcNo' => 'P206', 'SubActivity' => 'Fuel for 16 vehicles', 'Unit' => 'Km', 'Qty' => '9600', 'UnitCost' => '47', 'Budget' => '451200', 'Item' => '2211201'],
            [ 'AcNo' => 'P206', 'SubActivity' => 'DSA for 16 drivers for 4 days', 'Unit' => 'DSA', 'Qty' => '64', 'UnitCost' => '4900', 'Budget' => '313600', 'Item' => '2210710'],
            [ 'AcNo' => 'P206', 'SubActivity' => 'DSA for 14 PMCU and 20 CPMCU staff for 4 days', 'Unit' => 'DSA', 'Qty' => '136', 'UnitCost' => '10500', 'Budget' => '1428000', 'Item' => '2210710'],

            [ 'AcNo' => '', 'SubActivity' => 'DSA for 1 driver for 5 days', 'Unit' => 'DSA', 'Qty' => '5', 'UnitCost' => '4900', 'Budget' => '24500', 'Item' => '2210701'],
            [ 'AcNo' => '', 'SubActivity' => 'DSA for 22 KeLCoP staff for 5 days', 'Unit' => 'DSA', 'Qty' => '110', 'UnitCost' => '10500', 'Budget' => '1155000', 'Item' => '2210701'],
            [ 'AcNo' => '', 'SubActivity' => 'DSA for 5 ESIA experts for 5 days', 'Unit' => 'DSA', 'Qty' => '25', 'UnitCost' => '10500', 'Budget' => '262500', 'Item' => '2210701'],

            [ 'AcNo' => 'P204', 'SubActivity' => 'Fuel for 3 vehicles', 'Unit' => 'Km', 'Qty' => '6000', 'UnitCost' => '47', 'Budget' => '282000', 'Item' => '2211201'],
            [ 'AcNo' => 'P204', 'SubActivity' => 'DSA for 3 drivers for 24 days', 'Unit' => 'DSA', 'Qty' => '72', 'UnitCost' => '4900', 'Budget' => '352800', 'Item' => '2210302'],
            [ 'AcNo' => 'P204', 'SubActivity' => 'DSA for 6 ESIA experts for 24 days', 'Unit' => 'DSA', 'Qty' => '144', 'UnitCost' => '10500', 'Budget' => '1512000', 'Item' => '2210302'],
            [ 'AcNo' => 'P203', 'SubActivity' => 'Fare refund for 5 experts', 'Unit' => 'No', 'Qty' => '5', 'UnitCost' => '2000', 'Budget' => '10000', 'Item' => '2210701'],
            [ 'AcNo' => 'P203', 'SubActivity' => 'Stationery for 7 staff', 'Unit' => 'No', 'Qty' => '7', 'UnitCost' => '300', 'Budget' => '2100', 'Item' => '2211101'],
            [ 'AcNo' => 'P203', 'SubActivity' => 'Conference for 8 participants for 5 days', 'Unit' => 'No', 'Qty' => '40', 'UnitCost' => '3000', 'Budget' => '120000', 'Item' => '2210701'],


            [ 'AcNo' => 'P203', 'SubActivity' => 'DSA for 2 PMCU for 6 days', 'Unit' => 'DSA', 'Qty' => '12', 'UnitCost' => '14000', 'Budget' => '168000', 'Item' => '2210710'],
            [ 'AcNo' => 'P203', 'SubActivity' => 'DSA for 1 driver for 6 days', 'Unit' => 'DSA', 'Qty' => '6', 'UnitCost' => '6300', 'Budget' => '37800', 'Item' => '2210710'],
            [ 'AcNo' => 'P203', 'SubActivity' => 'DSA for 5 NEMA lead experts for 6 days', 'Unit' => 'DSA', 'Qty' => '30', 'UnitCost' => '14000', 'Budget' => '420000', 'Item' => '2210710'],
            [ 'AcNo' => 'P202', 'SubActivity' => 'Stationery for 34 staff', 'Unit' => 'No', 'Qty' => '34', 'UnitCost' => '300', 'Budget' => '10200', 'Item' => '2211101'],
            [ 'AcNo' => 'P202', 'SubActivity' => 'Fare refund for 20 staff', 'Unit' => 'No', 'Qty' => '20', 'UnitCost' => '2000', 'Budget' => '40000', 'Item' => '2210301'],
            [ 'AcNo' => 'P202', 'SubActivity' => 'Fuel for 5 vehicles', 'Unit' => 'Kms', 'Qty' => '3000', 'UnitCost' => '47', 'Budget' => '141000', 'Item' => '2211201'],


            ['AcNo' => 'P202', 'SubActivity' => 'Conference facility for 37 persons for 4 days', 'Unit' => 'No', 'Qty' => '148', 'UnitCost' => '2000', 'Budget' => '296000', 'Item' => '2210801'],
            ['AcNo' => 'P202', 'SubActivity' => 'DSA for 5 drivers for 5 days', 'Unit' => 'DSA', 'Qty' => '25', 'UnitCost' => '4900', 'Budget' => '122500', 'Item' => '2210701'],
            ['AcNo' => 'P202', 'SubActivity' => 'DSA for 27 staff for 5 days', 'Unit' => 'DSA', 'Qty' => '135', 'UnitCost' => '10500', 'Budget' => '1417500', 'Item' => '2210701'],
            ['AcNo' => 'P201', 'SubActivity' => 'Wrte shop - Stationery', 'Unit' => 'No', 'Qty' => '15', 'UnitCost' => '300', 'Budget' => '4500', 'Item' => '2211101'],
            ['AcNo' => 'P201', 'SubActivity' => 'Write shop - Fuel for 5 vehicles', 'Unit' => 'Kms', 'Qty' => '3000', 'UnitCost' => '47', 'Budget' => '141000', 'Item' => '2211201'],
            ['AcNo' => 'P201', 'SubActivity' => 'Write shop - Conference facility for 18 parsons for 5 days', 'Unit' => 'No', 'Qty' => '90', 'UnitCost' => '2000', 'Budget' => '180000', 'Item' => '2210801'],
            ['AcNo' => 'P201', 'SubActivity' => 'Write shop - DSA for for 5 drivers for 6 days.', 'Unit' => 'DSA', 'Qty' => '30', 'UnitCost' => '4900', 'Budget' => '147000', 'Item' => '2210701'],
            ['AcNo' => 'P201', 'SubActivity' => 'Write shop - for IEC materials- DSA for 7 experts for 6 days.', 'Unit' => 'DSA', 'Qty' => '42', 'UnitCost' => '10500', 'Budget' => '441000', 'Item' => '2210701'],
        ];


        DB::table('sub_activities')->insert($data);
    }
}
