<?php

namespace Database\Seeders;

use App\Models\ExpenseItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Item' => '9999999.0', 'Description' => 'Consolidated Fund', 'MainItem' => '9999900', 'MainDescription' => 'Consolidated Fund', 'Cat' => ''],
            ['Item' => '9910303.0', 'Description' => 'Remittances to Exchequer', 'MainItem' => '9910300', 'MainDescription' => 'Exchequer Provisions', 'Cat' => ''],
            ['Item' => '9910302.0', 'Description' => 'District Reimbursement Release', 'MainItem' => '9910300', 'MainDescription' => 'Exchequer Provisions', 'Cat' => ''],
            ['Item' => '9910301.0', 'Description' => 'Exchequer Releases/ Provisioning Account', 'MainItem' => '9910300', 'MainDescription' => 'Exchequer Provisions', 'Cat' => ''],
            ['Item' => '9910201.0', 'Description' => 'Provision for Encumbrance', 'MainItem' => '9910200', 'MainDescription' => 'General Provisions', 'Cat' => ''],
            ['Item' => '9910101.0', 'Description' => 'Remittances to Exchequer', 'MainItem' => '9910100', 'MainDescription' => 'Remittances to Exchequer', 'Cat' => ''],
            // ... Repeat for the rest of the data ...
            ['Item' => '7320116.0', 'Description' => 'Mortgages / Bank Loans', 'MainItem' => '7320100', 'MainDescription' => 'Salary Deductions', 'Cat' => ''],
            ['Item' => '7320115.0', 'Description' => 'Save As You Earn (SAYE)', 'MainItem' => '7320100', 'MainDescription' => 'Salary Deductions', 'Cat' => ''],
            ['Item' => '7320114.0', 'Description' => 'Union Dues', 'MainItem' => '7320100', 'MainDescription' => 'Salary Deductions', 'Cat' => ''],
            ['Item' => '7320113.0', 'Description' => 'HELB Deductions', 'MainItem' => '7320100', 'MainDescription' => 'Salary Deductions', 'Cat' => ''],
            ['Item' => '7320112.0', 'Description' => 'Staff Welfare Associations', 'MainItem' => '7320100', 'MainDescription' => 'Salary Deductions', 'Cat' => ''],
            ['Item' => '7320111.0', 'Description' => 'WCPS', 'MainItem' => '7320100', 'MainDescription' => 'Salary Deductions', 'Cat' => ''],
            ['Item' => '7320110.0', 'Description' => 'Court Attachments', 'MainItem' => '7320100', 'MainDescription' => 'Salary Deductions', 'Cat' => ''],
            ['Item' => '7320109.0', 'Description' => 'Hire Purchases', 'MainItem' => '7320100', 'MainDescription' => 'Salary Deductions', 'Cat' => ''],
            ['Item' => '7320108.0', 'Description' => 'Insurances', 'MainItem' => '7320100', 'MainDescription' => 'Salary Deductions', 'Cat' => ''],
            ['Item' => '7320107.0', 'Description' => 'Co-operatives', 'MainItem' => '7320100', 'MainDescription' => 'Salary Deductions', 'Cat' => ''],
            ['Item' => '7320106.0', 'Description' => 'NSSF', 'MainItem' => '7320100', 'MainDescription' => 'Salary Deductions', 'Cat' => ''],
            ['Item' => '7320104.0', 'Description' => 'Car Loans', 'MainItem' => '7320100', 'MainDescription' => 'Salary Deductions', 'Cat' => ''],
            ['Item' => '7320103.0', 'Description' => 'House Rent', 'MainItem' => '7320100', 'MainDescription' => 'Salary Deductions', 'Cat' => ''],
            ['Item' => '7320102.0', 'Description' => 'NHIF', 'MainItem' => '7320100', 'MainDescription' => 'Salary Deductions', 'Cat' => ''],
            ['Item' => '7320101.0', 'Description' => 'PAYE', 'MainItem' => '7320100', 'MainDescription' => 'Salary Deductions', 'Cat' => ''],


            ['Item' => '7310102.0', 'Description' => 'Personal Accidents Scheme', 'MainItem' => '7310100', 'MainDescription' => 'General Deposits', 'Cat' => ''],
            ['Item' => '7310101.0', 'Description' => 'General Deposits', 'MainItem' => '7310100', 'MainDescription' => 'General Deposits', 'Cat' => ''],
            ['Item' => '7210101.0', 'Description' => 'Bank Overdrafts', 'MainItem' => '7210100', 'MainDescription' => 'Bank Overdrafts', 'Cat' => ''],
            ['Item' => '6790102.0', 'Description' => 'Receiving Inventory A/C', 'MainItem' => '6790100', 'MainDescription' => 'Other Current System A/cs', 'Cat' => ''],
            ['Item' => '6790101.0', 'Description' => 'Materials A/C', 'MainItem' => '6790100', 'MainDescription' => 'Other Current System A/cs', 'Cat' => ''],
            ['Item' => '6780108.0', 'Description' => 'Referendum Costs(ECK)', 'MainItem' => '6780100', 'MainDescription' => 'Suspense & Clearance Account', 'Cat' => ''],
            ['Item' => '6780107.0', 'Description' => 'Missions Cash Float Fund', 'MainItem' => '6780100', 'MainDescription' => 'Suspense & Clearance Account', 'Cat' => ''],
            // ... Repeat for the rest of the data ...
            ['Item' => '6550111.0', 'Description' => 'District - Deposit Bank A/C', 'MainItem' => '6550100', 'MainDescription' => 'Deposit Bank Accounts', 'Cat' => ''],
            ['Item' => '6550101.0', 'Description' => 'Ministry HQ Deposit Bank A/C', 'MainItem' => '6550100', 'MainDescription' => 'Deposit Bank Accounts', 'Cat' => ''],
            ['Item' => '6540111.0', 'Description' => 'District - Development Bank Accounts', 'MainItem' => '6540100', 'MainDescription' => 'Development Bank Accounts', 'Cat' => ''],
            ['Item' => '6540101.0', 'Description' => 'Ministry HQ Development Bank A/C', 'MainItem' => '6540100', 'MainDescription' => 'Development Bank Accounts', 'Cat' => ''],
            // ... Repeat for the rest of the data ...
            ['Item' => '6530111.0', 'Description' => 'District - Recurrent Bank A/c', 'MainItem' => '6530100', 'MainDescription' => 'Recurrent Bank Accounts', 'Cat' => ''],
            ['Item' => '6530102.0', 'Description' => 'Revenue Deposit E-312 A/C', 'MainItem' => '6530100', 'MainDescription' => 'Recurrent Bank Accounts', 'Cat' => ''],
            ['Item' => '6530101.0', 'Description' => 'Ministry HQ Recurrent Bank A/C', 'MainItem' => '6530100', 'MainDescription' => 'Recurrent Bank Accounts', 'Cat' => ''],
            ['Item' => '6520111.0', 'Description' => 'CFS Public Debt Deposit A/C', 'MainItem' => '6520100', 'MainDescription' => 'Treasury Bank Accounts', 'Cat' => ''],
            ['Item' => '6520110.0', 'Description' => 'CFS Public Debt', 'MainItem' => '6520100', 'MainDescription' => 'Treasury Bank Accounts', 'Cat' => ''],
            ['Item' => '6520109.0', 'Description' => 'TREASURY BONDS A/C Public Debt - E307', 'MainItem' => '6520100', 'MainDescription' => 'Treasury Bank Accounts', 'Cat' => ''],

            ['Item' => '6520104.0', 'Description' => 'District Development Reimbursement A/C', 'MainItem' => '6520100', 'MainDescription' => 'Treasury Bank Accounts', 'Cat' => ''],
            ['Item' => '6520103.0', 'Description' => 'District Cash Fund Deposit A/C', 'MainItem' => '6520100', 'MainDescription' => 'Treasury Bank Accounts', 'Cat' => ''],
            ['Item' => '6520102.0', 'Description' => 'District Reccurrent Reimbursement A/C', 'MainItem' => '6520100', 'MainDescription' => 'Treasury Bank Accounts', 'Cat' => ''],
            ['Item' => '6520101.0', 'Description' => 'Exchequer Account', 'MainItem' => '6520100', 'MainDescription' => 'Treasury Bank Accounts', 'Cat' => ''],
            ['Item' => '6510169.0', 'Description' => 'IDA- Economic & Public Sector Reform - Cr. 3406-0-KE', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510168.0', 'Description' => 'UNDP Disaster Preparedness & Management Project E 389', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510167.0', 'Description' => 'Japanese KR II - 2000', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510166.0', 'Description' => 'Strategic Grain Reserve Trust Fund', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510165.0', 'Description' => 'UNEP-DEV. OF NAT. PLAN FOR IMP of STAC', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510164.0', 'Description' => 'UNDP MGT. OF VEG. FOR REH. OF DEG. Lands', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510163.0', 'Description' => 'SIDA Rural Integrated Health Service', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510162.0', 'Description' => 'EPH & TFCP KEN-96 FOL/IFAD LOAN', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510161.0', 'Description' => 'Japanese KR II 1998', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510160.0', 'Description' => 'MRPW/ACU/KHADREP', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510159.0', 'Description' => 'Nrb. Prov. Road Maintenance Fund', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510158.0', 'Description' => 'Central Kenya Dry Areas IFAD', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510157.0', 'Description' => 'Central Kenya Dry Areas IFAD Loan', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510156.0', 'Description' => 'Central Kenya Dry Areas IFAD Grant', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510155.0', 'Description' => 'EC Poverty Reduction Budget Support', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510154.0', 'Description' => 'Rescheduled Parastatal Loans', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510153.0', 'Description' => 'DANIDA Roads 2000 Proj. Coast Province', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510152.0', 'Description' => 'Japanese KR II 1998', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510151.0', 'Description' => 'Nairobi - Mombasa Road Project', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510150.0', 'Description' => '351 0 CBS/DFID/Cencus Project', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510149.0', 'Description' => 'SMALL ARMS A/C', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510148.0', 'Description' => 'UNFPA-KEN/99/POL-COORD OF POP Pol. 1M', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510147.0', 'Description' => 'UNFPA-KEN/99/POL-COORD OF POP Pol.1M', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510146.0', 'Description' => 'SIDA Roads 2000 Nyeri District', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510145.0', 'Description' => 'SIDA Roads 2000 Kirinyaga District', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510144.0', 'Description' => 'Local Authorities Transfer Fund', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510143.0', 'Description' => 'Japan Kr2 Grant 1998 A/C', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510142.0', 'Description' => 'Enab. Acts Prep. Int. Nati. Comm. Rel.UNF.', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510141.0', 'Description' => 'Gok/Netherlands Textbook Project', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510140.0', 'Description' => 'Kenya Global Priv. Enterp. Gpe', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510139.0', 'Description' => 'Kenya Global Priv. Enterp. Eib Project', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510138.0', 'Description' => 'The Rural Health Project', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510137.0', 'Description' => 'Japanese Emergeny Assist. To Bomb B', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510136.0', 'Description' => 'Red Biodiv. Loss At Cross Border Sit.', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510135.0', 'Description' => 'Road Maintenance Levy Fund', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510134.0', 'Description' => 'Data Coll & Data Base Development', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510133.0', 'Description' => 'USAID-RPE REOW A/C', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510132.0', 'Description' => 'UK/Kenya Strengthening Of Pri. Educ.', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510131.0', 'Description' => 'Support For Financial & Econom', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510130.0', 'Description' => 'GOK/KPLC-Belgiun Windpower Project', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510129.0', 'Description' => 'Italian Commodity Aid Programm', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510128.0', 'Description' => 'UNDP-Support To The Prog. For SSJK', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510127.0', 'Description' => 'Sexually Transmitted Inectious', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510126.0', 'Description' => 'Netherlands Co-Fin For Civil Servants R.', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
            ['Item' => '6510125.0', 'Description' => 'Horticulture & Traditional Crop', 'MainItem' => '6510100', 'MainDescription' => 'Special Project Bank Accounts', 'Cat' => ''],
        ];

        ExpenseItem::insert($data);
    }
}
