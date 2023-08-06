<?php

namespace Database\Seeders;

use App\Models\Ward;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ward::truncate();

        $data = [
            ['Ccode' => '11-TNZ', 'County' => 'Trans Nzoia', 'Sub_County' => 'Endebes', 'Wcode' => 'TNZ04', 'Ward' => 'Endebes'],
        ['Ccode' => '11-TNZ', 'County' => 'Trans Nzoia', 'Sub_County' => 'Saboti', 'Wcode' => 'TNZ03', 'Ward' => 'Saboti'],
        ['Ccode' => '11-TNZ', 'County' => 'Trans Nzoia', 'Sub_County' => 'Kiminini', 'Wcode' => 'TNZ02', 'Ward' => 'Nabiswa'],
        ['Ccode' => '11-TNZ', 'County' => 'Trans Nzoia', 'Sub_County' => 'Cherangani', 'Wcode' => 'TNZ01', 'Ward' => 'Cherangani'],
        ['Ccode' => '10-SYA', 'County' => 'Siaya', 'Sub_County' => 'Rarieda', 'Wcode' => 'SYA04', 'Ward' => 'West Uyoma'],
        ['Ccode' => '10-SYA', 'County' => 'Siaya', 'Sub_County' => 'Alego Usonga', 'Wcode' => 'SYA03', 'Ward' => 'South East Alego'],
        ['Ccode' => '10-SYA', 'County' => 'Siaya', 'Sub_County' => 'Gem', 'Wcode' => 'SYA02', 'Ward' => 'West Gem'],
        ['Ccode' => '10-SYA', 'County' => 'Siaya', 'Sub_County' => 'Bondo', 'Wcode' => 'SYA01', 'Ward' => 'North Sakwa'],
        ['Ccode' => '09-SAM', 'County' => 'Samburu', 'Sub_County' => 'Samburu North', 'Wcode' => 'SAM04', 'Ward' => 'Angata Nanyoike'],
        ['Ccode' => '09-SAM', 'County' => 'Samburu', 'Sub_County' => 'Samburu East', 'Wcode' => 'SAM03', 'Ward' => 'Wambu east'],
        ['Ccode' => '09-SAM', 'County' => 'Samburu', 'Sub_County' => 'Samburu Central', 'Wcode' => 'SAM02', 'Ward' => 'Sunguta Marmar'],
        ['Ccode' => '09-SAM', 'County' => 'Samburu', 'Sub_County' => 'Samburu Central', 'Wcode' => 'SAM01', 'Ward' => 'Lodokejet'],
        ['Ccode' => '08-NAK', 'County' => 'Nakuru', 'Sub_County' => 'Rongai', 'Wcode' => 'NAK04', 'Ward' => 'Soin'],
        ['Ccode' => '08-NAK', 'County' => 'Nakuru', 'Sub_County' => 'Rongai', 'Wcode' => 'NAK03', 'Ward' => 'Solai'],
        ['Ccode' => '08-NAK', 'County' => 'Nakuru', 'Sub_County' => 'Naivasha', 'Wcode' => 'NAK02', 'Ward' => 'Mai Mahiu'],
        ['Ccode' => '08-NAK', 'County' => 'Nakuru', 'Sub_County' => 'Gilgil', 'Wcode' => 'NAK01', 'Ward' => 'Gilgil'],
        ['Ccode' => '07-MAR', 'County' => 'Marsabit', 'Sub_County' => 'Laisamis', 'Wcode' => 'MAR04', 'Ward' => 'Kargi/ South Horr'],
        ['Ccode' => '07-MAR', 'County' => 'Marsabit', 'Sub_County' => 'Saku', 'Wcode' => 'MAR03', 'Ward' => 'Sagante/ Jeldesa'],
        ['Ccode' => '07-MAR', 'County' => 'Marsabit', 'Sub_County' => 'North Horr', 'Wcode' => 'MAR02', 'Ward' => 'Maikona'],
        ['Ccode' => '07-MAR', 'County' => 'Marsabit', 'Sub_County' => 'Moyale', 'Wcode' => 'MAR01', 'Ward' => 'Golbo'],
        ['Ccode' => '06-KKM', 'County' => 'Kakamega', 'Sub_County' => 'Butere', 'Wcode' => 'KKM04', 'Ward' => 'Marama central'],
        ['Ccode' => '06-KKM', 'County' => 'Kakamega', 'Sub_County' => 'Shinyalu', 'Wcode' => 'KKM03', 'Ward' => 'Isukha central'],
        ['Ccode' => '06-KKM', 'County' => 'Kakamega', 'Sub_County' => 'Khwisero', 'Wcode' => 'KKM02', 'Ward' => 'Kisa central'],
        ['Ccode' => '06-KKM', 'County' => 'Kakamega', 'Sub_County' => 'Lugari', 'Wcode' => 'KKM01', 'Ward' => 'Lumakanda'],
        ['Ccode' => '05-ELM', 'County' => 'Elgeyo Marakwet', 'Sub_County' => 'Marakwet East', 'Wcode' => 'ELM04', 'Ward' => 'Sambirir'],
        ['Ccode' => '05-ELM', 'County' => 'Elgeyo Marakwet', 'Sub_County' => 'Marakwet West', 'Wcode' => 'ELM03', 'Ward' => 'Cherangany/ Cheborowa'],
        ['Ccode' => '05-ELM', 'County' => 'Elgeyo Marakwet', 'Sub_County' => 'Keiyo North', 'Wcode' => 'ELM02', 'Ward' => 'Tambach'],
        ['Ccode' => '05-ELM', 'County' => 'Elgeyo Marakwet', 'Sub_County' => 'Keiyo South', 'Wcode' => 'ELM01', 'Ward' => 'Soy North'],
        ['Ccode' => '04-BSA', 'County' => 'Busia', 'Sub_County' => 'Bunyala', 'Wcode' => 'BSA04', 'Ward' => 'Bunyala North'],
        ['Ccode' => '04-BSA', 'County' => 'Busia', 'Sub_County' => 'Butula', 'Wcode' => 'BSA03', 'Ward' => 'Elugulu'],
        ['Ccode' => '04-BSA', 'County' => 'Busia', 'Sub_County' => 'Samia', 'Wcode' => 'BSA02', 'Ward' => 'Namboboto'],
        ['Ccode' => '04-BSA', 'County' => 'Busia', 'Sub_County' => 'Teso South', 'Wcode' => 'BSA01', 'Ward' => 'Amukura East'],
        ['Ccode' => '03-BGM', 'County' => 'Bungoma', 'Sub_County' => 'Kanduyi', 'Wcode' => 'BGM04', 'Ward' => 'Bukembe East'],
        ['Ccode' => '03-BGM', 'County' => 'Bungoma', 'Sub_County' => 'Tongaren', 'Wcode' => 'BGM03', 'Ward' => 'Naitiri'],
        ['Ccode' => '03-BGM', 'County' => 'Bungoma', 'Sub_County' => 'Mt. Elgon', 'Wcode' => 'BGM02', 'Ward' => 'Kaptama'],
        ['Ccode' => '03-BGM', 'County' => 'Bungoma', 'Sub_County' => 'Kanduyi', 'Wcode' => 'BGM01', 'Ward' => 'Musikoma'],
        ['Ccode' => '02-BAR', 'County' => 'Baringo', 'Sub_County' => 'Tiaty', 'Wcode' => 'BAR04', 'Ward' => 'Loyamorok'],
        ['Ccode' => '02-BAR', 'County' => 'Baringo', 'Sub_County' => 'Baringo North', 'Wcode' => 'BAR03', 'Ward' => 'Kabartonjo'],
        ['Ccode' => '02-BAR', 'County' => 'Baringo', 'Sub_County' => 'Mogotio', 'Wcode' => 'BAR02', 'Ward' => 'Marigat'],
        ['Ccode' => '02-BAR', 'County' => 'Baringo', 'Sub_County' => 'Baringo South', 'Wcode' => 'BAR01', 'Ward' => 'Kisanana'],
        ['Ccode' => '01-PCU-7', 'County' => 'IFAD Desk Officer', 'Sub_County' => '', 'Wcode' => '01-PCU-7', 'Ward' => 'Social Inclusion Specialist'],
        ['Ccode' => '01-PCU-6', 'County' => 'Administration Assistant', 'Sub_County' => '', 'Wcode' => '01-PCU-6', 'Ward' => 'Administration Assistant'],
        ['Ccode' => '01-PCU-5', 'County' => 'Finance Controller', 'Sub_County' => '', 'Wcode' => '01-PCU-5', 'Ward' => 'Finance Controller'],
        ['Ccode' => '01-PCU-4', 'County' => 'Procurement Specialist', 'Sub_County' => '', 'Wcode' => '01-PCU-4', 'Ward' => 'Procurement Specialist'],
        ['Ccode' => '01-PCU-3', 'County' => 'Monitoring and Evaluation Specialist', 'Sub_County' => '', 'Wcode' => '01-PCU-3', 'Ward' => 'Monitoring and Evaluation Specialist'],
        ['Ccode' => '01-PCU-2', 'County' => 'Livestock Marketing Specialist', 'Sub_County' => '', 'Wcode' => '01-PCU-2', 'Ward' => 'Livestock Marketing Specialist'],
        ['Ccode' => '01-PCU-1-S', 'County' => 'Social Inclusion Specialist', 'Sub_County' => '', 'Wcode' => '01-PCU-1-S', 'Ward' => 'Social Inclusion Specialist'],
        ['Ccode' => '01-PCU-1-L', 'County' => 'Livestock Production Specialist', 'Sub_County' => '', 'Wcode' => '01-PCU-1-L', 'Ward' => 'Livestock Production Specialist'],
        ['Ccode' => '01-PCU-1-E', 'County' => 'Environment Climate and Safeguards Specialist', 'Sub_County' => '', 'Wcode' => '01-PCU-1-E', 'Ward' => 'Environment Climate and Safeguards Specialist'],

        
    ];


    Ward::insert($data);
    }
}
