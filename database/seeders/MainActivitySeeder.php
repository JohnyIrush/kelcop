<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        

        DB::table('main_activities')->delete();
        
        DB::table('main_activities')->insert(array (
            0 => 
            array (
                'AcNo' => 'P212',
                'RefCode' => '01.02.07-1',
                'Centre' => '01-PCU-1-E',
                'Location' => 'Naivasha',
                'Officer' => 'ECSS',
                'Q1' => 'true',
                'Q2' => 'false',
                'Q3' => 'false',
                'Q4' => 'false',
                'Cat' => 'Ic',
                'Donor' => 'D05',
                'FY' => '2023/24',
                'Flag' => 'true',
                'Why_benefits' => 'Payment for conference services provided during the write shop',
                'How_done' => '',
                'Ben_role' => '',
                'Ben_contribution' => '',
            ),
            1 => 
            array (
                'AcNo' => 'P211',
                'RefCode' => '01.02.06-4',
                'Centre' => '01-PCU-1-E',
                'Location' => 'Naivasha',
                'Officer' => 'ECSS',
                'Q1' => 'true',
                'Q2' => 'false',
                'Q3' => 'false',
                'Q4' => 'false',
                'Cat' => 'Ic',
                'Donor' => 'D05',
                'FY' => '2023/24',
                'Flag' => 'true',
                'Why_benefits' => 'Payment for conference services provided during the training',
                'How_done' => '',
                'Ben_role' => '',
                'Ben_contribution' => '',
            ),
            2 => 
            array (
                'AcNo' => 'P210',
                'RefCode' => '01.02.08-1',
                'Centre' => '01-PCU-1-E',
                'Location' => 'Naivasha',
                'Officer' => 'ECSS',
                'Q1' => 'false',
                'Q2' => 'true',
                'Q3' => 'false',
                'Q4' => 'false',
                'Cat' => 'Ic',
                'Donor' => 'D05',
                'FY' => '2023/24',
                'Flag' => 'true',
                'Why_benefits' => 'Payment of tax for conference facilities/services provided during the training',
                'How_done' => '',
                'Ben_role' => '',
                'Ben_contribution' => '',
            ),
            3 => 
            array (
                'AcNo' => 'P209',
                'RefCode' => '01.02.06-3',
                'Centre' => '01-PCU-1-E',
                'Location' => 'Naivasha',
                'Officer' => 'ECSS',
                'Q1' => 'false',
                'Q2' => 'false',
                'Q3' => 'true',
                'Q4' => 'false',
                'Cat' => 'Ic',
                'Donor' => 'D05',
                'FY' => '2023/24',
                'Flag' => 'true',
                'Why_benefits' => 'Payment of tax for conference services offered during the two write shops',
                'How_done' => '',
                'Ben_role' => '',
                'Ben_contribution' => '',
            ),
            4 => 
            array (
                'AcNo' => 'P208',
                'RefCode' => '01.04.01-3',
                'Centre' => '01-PCU-1-E',
                'Location' => '10 Counties',
                'Officer' => 'ECSS',
                'Q1' => 'false',
                'Q2' => 'true',
                'Q3' => 'false',
                'Q4' => 'true',
                'Cat' => 'Ic',
                'Donor' => 'D01',
                'FY' => '2023/24',
                'Flag' => 'true',
                'Why_benefits' => 'The M&EO, SIS and the ECSS will need to visit the counties on quarterly basis to confirm that the project activities are mainstreaming the climate change, environmental and social issues. This will ensure that the activities are continuously documented and reported. The mainstreaming will result in sustainable development with positive climate, environmental and social impacts.',
            'How_done' => 'The teams 3 specialists and the 3 TSAs will visit the 10 counties bi-annually (third and fourth quarters).',
                'Ben_role' => 'The beneficiaries will provide the data on their activities on mainstreaming climate, environmental and social issues.',
                'Ben_contribution' => '',
            ),
            5 => 
            array (
                'AcNo' => 'P207',
                'RefCode' => '01.04.01-2',
                'Centre' => '01-PCU-1-E',
                'Location' => 'Nairobi, Kisumu, Eldoret, Nakuru',
                'Officer' => 'ECSS',
                'Q1' => 'true',
                'Q2' => 'true',
                'Q3' => 'true',
                'Q4' => 'true',
                'Cat' => 'Ic',
                'Donor' => 'D01',
                'FY' => '2023/24',
                'Flag' => 'true',
            'Why_benefits' => 'The activities are vital for getting updated Technical, Innovations, Management Practices (TIMPs) for the prioritised value chains and climate change scenarios. The information will also be shared with the PMCU and the counties to be cascaded to the beneficiaries.',
                'How_done' => 'The ECSS and the TSA for climate, environmental and social safeguards will attend the annual livestock breeders show at Nairobi, plus the ASK shows in Nairobi, Eldoret and Kisumu. They will also participate in the preparation and exhibition at Nakuru ASK show. The ECSS will attend the annual APSK symposium at Kisumu and also participate in the COP 28 to be held in Dubai in October / November 2023.',
                'Ben_role' => '',
                'Ben_contribution' => '',
            ),
            6 => 
            array (
                'AcNo' => 'P206',
                'RefCode' => '01.02.08-1',
                'Centre' => '01-PCU-1-E',
                'Location' => 'Naivasha',
                'Officer' => 'ECSS',
                'Q1' => 'false',
                'Q2' => 'true',
                'Q3' => 'false',
                'Q4' => 'false',
                'Cat' => 'Ic',
                'Donor' => 'D01',
                'FY' => '2023/24',
                'Flag' => 'true',
                'Why_benefits' => 'All the project staff require understanding the social safeguards issues and the project grievances management processes. They will therefore be involved in the development of the GRM guidelines that should also be cascaded to the beneficiaries',
                'How_done' => 'All the PMCU staff and two CPMCU plus all the drivers will be trained on the grievances management.',
                'Ben_role' => 'All the project staff will be expected to perform their duties in manners that do not elicit grievances. They should also be able to sensitize project-affected persons on how to handle grievances.',
                'Ben_contribution' => '',
            ),
            7 => 
            array (
                'AcNo' => 'P204',
                'RefCode' => '01.02.07-4',
                'Centre' => '01-PCU-1-E',
                'Location' => '10 Counties',
                'Officer' => 'ECSS',
                'Q1' => 'false',
                'Q2' => 'true',
                'Q3' => 'false',
                'Q4' => 'true',
                'Cat' => 'Ic',
                'Donor' => 'D01',
                'FY' => '2023/24',
                'Flag' => 'false',
            'Why_benefits' => 'The NEMA lead experts and PMCU staff will need to follow up the counties to ensure that the contractors and beneficiaries are implementing the activities outlined in the ESMP (As stand-alone ESMPs for on-farm activities or the Contractor-ESMPs). This will ensure compliance which will result in sustainable investments.',
                'How_done' => 'The 6 experts and 3 PMCU staff will form two teams and make 2-day visits to the counties and then take 2 days to draft the report. The experts will visit a total of 5 counties in quarter 2 and another 5 counties in quarter 4. Total of 10 visits',
                'Ben_role' => '',
                'Ben_contribution' => '',
            ),
            8 => 
            array (
                'AcNo' => 'P203',
                'RefCode' => '01.02.07-1',
                'Centre' => '01-PCU-1-E',
                'Location' => 'Kisumu',
                'Officer' => 'ECSS',
                'Q1' => 'true',
                'Q2' => 'false',
                'Q3' => 'false',
                'Q4' => 'false',
                'Cat' => 'Ic',
                'Donor' => 'D01',
                'FY' => '2023/24',
                'Flag' => 'true',
                'Why_benefits' => 'Every farm activity for value chain development and project infrastructure will need to be screened for compliance with SECAP and the corresponding ESMP developed. The team will customize the screening checklist and develop a template for ESMP. The administration of the checklist will be done uniformly in all the counties and will boost beneficiary ownership of the investments and sustainable investment. This will also improve community ownership',
                'How_done' => 'The team of experts plus the PMCU will hold a 5-day retreat at Kisumu to customize the IFAD screening checklist and develop a template for ESMPs to be used for all KeLCoP activities.',
                'Ben_role' => '',
                'Ben_contribution' => '',
            ),
            9 => 
            array (
                'AcNo' => 'P202',
                'RefCode' => '01.02.06-4',
                'Centre' => '01-PCU-1-E',
                'Location' => 'Naivasha',
                'Officer' => 'ECSS',
                'Q1' => 'true',
                'Q2' => 'false',
                'Q3' => 'false',
                'Q4' => 'false',
                'Cat' => 'Ic',
                'Donor' => 'D01',
                'FY' => '2023/24',
                'Flag' => 'true',
                'Why_benefits' => 'The training will equip the 20 county staff with the relevant IEC materials for dissemination to the beneficiaries. This will enable the beneficiaries to mainstream climate change and environmental and social safeguards in the prioritized value chains. This will lead to higher production efficiency and better mitigation of any negative impacts.',
                'How_done' => 'The 4-day training at Naivasha DTI will be facilitated by 7 livestock experts and PMCU and will involve the M&EO and EFP from each project county. The views from the county teams will be incorporated in the final IEC materials in a write shop.',
                'Ben_role' => 'The beneficiaries will mainstream the climate change and environmental and social safeguards in the value chain activities. This will improve the efficiency of production and mitigate climate change issues.',
                'Ben_contribution' => '',
            ),
            10 => 
            array (
                'AcNo' => 'P201',
                'RefCode' => '01.02.06-3',
                'Centre' => '01-PCU-1-E',
                'Location' => 'Naivasha',
                'Officer' => 'ECSS',
                'Q1' => 'false',
                'Q2' => 'false',
                'Q3' => 'true',
                'Q4' => 'false',
                'Cat' => 'Ic',
                'Donor' => 'D01',
                'FY' => '2023/24',
                'Flag' => 'true',
            'Why_benefits' => 'The write shops for the 7 experts and PMCU staff are meant to consolidate the gaps identified in the counties during field visits in 2022/23 FY and develop the Information, Extension and Communication (IEC) materials for the priority value chains on Technical Innovation Management Practices (TIMPs) for mainstreaming the climate change plus environmental social and climate safeguards. The project implementers will be equipped with the information for transferring to the project beneficiaries through the coun',
                'How_done' => 'The first 5-day write shop involving 7 livestock experts and 6 PMCU staff will be aimed at development of IEC materials. This will later be followed by a training for the County staff during which the county staff inputs will be documented and incorporated in the final set of IEC materials that will be developed during the second 3-day write shop in the third quarter.',
                'Ben_role' => 'The members will develop the IEC materials and package them into simple booklets for easy utilization by the project beneficiaries.',
                'Ben_contribution' => '',
            ),
        ));
        
        
    }
}
