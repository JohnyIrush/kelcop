<?php

namespace Database\Seeders;

use App\Models\expense_items;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpenseItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        

    DB::table('expense_items')->delete();
        
    DB::table('expense_items')->insert(array (
            0 => 
            array (
                'Item' => 9999999.0,
                'Description' => 'Consolidated Fund',
                'MainItem' => 9999900,
                'MainDescription' => 'Consolidated Fund',
                'Cat' => '',
            ),
            1 => 
            array (
                'Item' => 9910303.0,
                'Description' => 'Remittances to Exchequer',
                'MainItem' => 9910300,
                'MainDescription' => 'Exchequer Provisions',
                'Cat' => '',
            ),
            2 => 
            array (
                'Item' => 9910302.0,
                'Description' => 'District Reimbursement Release',
                'MainItem' => 9910300,
                'MainDescription' => 'Exchequer Provisions',
                'Cat' => '',
            ),
            3 => 
            array (
                'Item' => 9910301.0,
                'Description' => 'Exchequer Releases/ Provisioning Account',
                'MainItem' => 9910300,
                'MainDescription' => 'Exchequer Provisions',
                'Cat' => '',
            ),
            4 => 
            array (
                'Item' => 9910201.0,
                'Description' => 'Provision for Encumbrance',
                'MainItem' => 9910200,
                'MainDescription' => 'General Provisions',
                'Cat' => '',
            ),
            5 => 
            array (
                'Item' => 9910101.0,
                'Description' => 'Remittances to Exchequer',
                'MainItem' => 9910100,
                'MainDescription' => 'Remittances to Exchequer',
                'Cat' => '',
            ),
            6 => 
            array (
                'Item' => 7359999.0,
                'Description' => 'Cash Clearing A/c',
                'MainItem' => 7350100,
                'MainDescription' => 'System Required Liabilities',
                'Cat' => '',
            ),
            7 => 
            array (
                'Item' => 7350104.0,
                'Description' => 'Employee Liabilities',
                'MainItem' => 7350100,
                'MainDescription' => 'System Required Liabilities',
                'Cat' => '',
            ),
            8 => 
            array (
                'Item' => 7350103.0,
                'Description' => 'AP Liabilities',
                'MainItem' => 7350100,
                'MainDescription' => 'System Required Liabilities',
                'Cat' => '',
            ),
            9 => 
            array (
                'Item' => 7350102.0,
                'Description' => 'Expense AP Acrual',
                'MainItem' => 7350100,
                'MainDescription' => 'System Required Liabilities',
                'Cat' => '',
            ),
            10 => 
            array (
                'Item' => 7350101.0,
                'Description' => 'Inventory AP Accrual',
                'MainItem' => 7350100,
                'MainDescription' => 'System Required Liabilities',
                'Cat' => '',
            ),
            11 => 
            array (
                'Item' => 7340102.0,
                'Description' => 'VAT Withholding',
                'MainItem' => 7340100,
                'MainDescription' => 'General Withholding Tax',
                'Cat' => '',
            ),
            12 => 
            array (
                'Item' => 7340101.0,
                'Description' => 'General Withholding Tax',
                'MainItem' => 7340100,
                'MainDescription' => 'General Withholding Tax',
                'Cat' => '',
            ),
            13 => 
            array (
                'Item' => 7330101.0,
                'Description' => 'Income Tax',
                'MainItem' => 7330100,
                'MainDescription' => 'Income Tax',
                'Cat' => '',
            ),
            14 => 
            array (
                'Item' => 7320402.0,
                'Description' => 'Vat Withholding Tax',
                'MainItem' => 7320400,
                'MainDescription' => 'Withholding Taxes',
                'Cat' => '',
            ),
            15 => 
            array (
                'Item' => 7320401.0,
                'Description' => 'General Withholding Tax',
                'MainItem' => 7320400,
                'MainDescription' => 'Withholding Taxes',
                'Cat' => '',
            ),
            16 => 
            array (
                'Item' => 7320302.0,
                'Description' => 'Veterinary Services Fund',
                'MainItem' => 7320300,
                'MainDescription' => 'Revolving Funds',
                'Cat' => '',
            ),
            17 => 
            array (
                'Item' => 7320301.0,
                'Description' => 'District Development Fund',
                'MainItem' => 7320300,
                'MainDescription' => 'Revolving Funds',
                'Cat' => '',
            ),
            18 => 
            array (
                'Item' => 7320203.0,
                'Description' => 'Inter Bank Transfers',
                'MainItem' => 7320200,
                'MainDescription' => 'Other General Liabilities',
                'Cat' => '',
            ),
            19 => 
            array (
                'Item' => 7320202.0,
                'Description' => 'Special Offshore Liability A/C',
                'MainItem' => 7320200,
                'MainDescription' => 'Other General Liabilities',
                'Cat' => '',
            ),
            20 => 
            array (
                'Item' => 7320201.0,
                'Description' => 'Contractors Retention Money',
                'MainItem' => 7320200,
                'MainDescription' => 'Other General Liabilities',
                'Cat' => '',
            ),
            21 => 
            array (
                'Item' => 7320199.0,
                'Description' => 'Salary Control Account',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            22 => 
            array (
                'Item' => 7320121.0,
                'Description' => 'Salary Overpayment Refunds',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            23 => 
            array (
                'Item' => 7320120.0,
                'Description' => 'Staff Contribution - Pension Scheme',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            24 => 
            array (
                'Item' => 7320119.0,
                'Description' => 'RTD Salary - held for officer',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            25 => 
            array (
                'Item' => 7320117.0,
                'Description' => 'Govt. Liability Attachments',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            26 => 
            array (
                'Item' => 7320116.0,
                'Description' => 'Mortgages / Bank Loans',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            27 => 
            array (
                'Item' => 7320115.0,
            'Description' => 'Save As You Earn (SAYE)',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            28 => 
            array (
                'Item' => 7320114.0,
                'Description' => 'Union Dues',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            29 => 
            array (
                'Item' => 7320113.0,
                'Description' => 'HELB Deductions',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            30 => 
            array (
                'Item' => 7320112.0,
                'Description' => 'Staff Welfare Associations',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            31 => 
            array (
                'Item' => 7320111.0,
                'Description' => 'WCPS',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            32 => 
            array (
                'Item' => 7320110.0,
                'Description' => 'Court Attachments',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            33 => 
            array (
                'Item' => 7320109.0,
                'Description' => 'Hire Purchases',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            34 => 
            array (
                'Item' => 7320108.0,
                'Description' => 'Insurances',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            35 => 
            array (
                'Item' => 7320107.0,
                'Description' => 'Co-operatives',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            36 => 
            array (
                'Item' => 7320106.0,
                'Description' => 'NSSF',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            37 => 
            array (
                'Item' => 7320104.0,
                'Description' => 'Car Loans',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            38 => 
            array (
                'Item' => 7320103.0,
                'Description' => 'House Rent',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            39 => 
            array (
                'Item' => 7320102.0,
                'Description' => 'NHIF',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            40 => 
            array (
                'Item' => 7320101.0,
                'Description' => 'PAYE',
                'MainItem' => 7320100,
                'MainDescription' => 'Salary Deductions',
                'Cat' => '',
            ),
            41 => 
            array (
                'Item' => 7310102.0,
                'Description' => 'Personal Accidents Scheme',
                'MainItem' => 7310100,
                'MainDescription' => 'General Deposits',
                'Cat' => '',
            ),
            42 => 
            array (
                'Item' => 7310101.0,
                'Description' => 'General Deposits',
                'MainItem' => 7310100,
                'MainDescription' => 'General Deposits',
                'Cat' => '',
            ),
            43 => 
            array (
                'Item' => 7210101.0,
                'Description' => 'Bank Overdrafts',
                'MainItem' => 7210100,
                'MainDescription' => 'Bank Overdrafts',
                'Cat' => '',
            ),
            44 => 
            array (
                'Item' => 6790102.0,
                'Description' => 'Receiving Inventory A/C',
                'MainItem' => 6790100,
                'MainDescription' => 'Other Current System A/cs',
                'Cat' => '',
            ),
            45 => 
            array (
                'Item' => 6790101.0,
                'Description' => 'Materials A/C',
                'MainItem' => 6790100,
                'MainDescription' => 'Other Current System A/cs',
                'Cat' => '',
            ),
            46 => 
            array (
                'Item' => 6780108.0,
            'Description' => 'Referendum Costs(ECK)',
                'MainItem' => 6780100,
                'MainDescription' => 'Suspense & Clearance Account',
                'Cat' => '',
            ),
            47 => 
            array (
                'Item' => 6780107.0,
                'Description' => 'Missions Cash Float Fund',
                'MainItem' => 6780100,
                'MainDescription' => 'Suspense & Clearance Account',
                'Cat' => '',
            ),
            48 => 
            array (
                'Item' => 6780106.0,
                'Description' => 'PMG Reimbursement Susp. A/c',
                'MainItem' => 6780100,
                'MainDescription' => 'Suspense & Clearance Account',
                'Cat' => '',
            ),
            49 => 
            array (
                'Item' => 6780105.0,
            'Description' => 'Stale Cheques (Receipts)',
                'MainItem' => 6780100,
                'MainDescription' => 'Suspense & Clearance Account',
                'Cat' => '',
            ),
            50 => 
            array (
                'Item' => 6780104.0,
                'Description' => 'Govt. Agency Clearances - GCA',
                'MainItem' => 6780100,
                'MainDescription' => 'Suspense & Clearance Account',
                'Cat' => '',
            ),
            51 => 
            array (
                'Item' => 6780103.0,
                'Description' => 'District Suspense A/c',
                'MainItem' => 6780100,
                'MainDescription' => 'Suspense & Clearance Account',
                'Cat' => '',
            ),
            52 => 
            array (
                'Item' => 6780102.0,
                'Description' => 'General Suspense - Retrenchment',
                'MainItem' => 6780100,
                'MainDescription' => 'Suspense & Clearance Account',
                'Cat' => '',
            ),
            53 => 
            array (
                'Item' => 6780101.0,
                'Description' => 'General Suspense A/C',
                'MainItem' => 6780100,
                'MainDescription' => 'Suspense & Clearance Account',
                'Cat' => '',
            ),
            54 => 
            array (
                'Item' => 6770101.0,
                'Description' => 'Inter-Ministerial Agency A/C',
                'MainItem' => 6770100,
                'MainDescription' => 'Ministerial Agency Accounts',
                'Cat' => '',
            ),
            55 => 
            array (
                'Item' => 6760103.0,
                'Description' => 'Temporary Imprests',
                'MainItem' => 6760100,
                'MainDescription' => 'Imprests',
                'Cat' => '',
            ),
            56 => 
            array (
                'Item' => 6760102.0,
                'Description' => 'Special Imprests',
                'MainItem' => 6760100,
                'MainDescription' => 'Imprests',
                'Cat' => '',
            ),
            57 => 
            array (
                'Item' => 6760101.0,
                'Description' => 'Standing Imprests',
                'MainItem' => 6760100,
                'MainDescription' => 'Imprests',
                'Cat' => '',
            ),
            58 => 
            array (
                'Item' => 6740104.0,
                'Description' => 'Ministry of Works',
                'MainItem' => 6740100,
                'MainDescription' => 'Other Debtors & Pre-payments',
                'Cat' => '',
            ),
            59 => 
            array (
                'Item' => 6740103.0,
                'Description' => 'Loss of Cash',
                'MainItem' => 6740100,
                'MainDescription' => 'Other Debtors & Pre-payments',
                'Cat' => '',
            ),
            60 => 
            array (
                'Item' => 6740102.0,
                'Description' => 'R/D Cheques',
                'MainItem' => 6740100,
                'MainDescription' => 'Other Debtors & Pre-payments',
                'Cat' => '',
            ),
            61 => 
            array (
                'Item' => 6740101.0,
                'Description' => 'Prepayment',
                'MainItem' => 6740100,
                'MainDescription' => 'Other Debtors & Pre-payments',
                'Cat' => '',
            ),
            62 => 
            array (
                'Item' => 6730101.0,
                'Description' => 'Advances - Overseas Governments',
                'MainItem' => 6730100,
                'MainDescription' => 'Debtors & Advances - O\'Seas Govts.',
                'Cat' => '',
            ),
            63 => 
            array (
                'Item' => 6720101.0,
                'Description' => 'Advances - Govt. Organisations',
                'MainItem' => 6720100,
                'MainDescription' => 'Debtors & Advances - Government Organisations',
                'Cat' => '',
            ),
            64 => 
            array (
                'Item' => 6710103.0,
                'Description' => 'Salary Advance',
                'MainItem' => 6710100,
                'MainDescription' => 'Debtors & Advances - Employees',
                'Cat' => '',
            ),
            65 => 
            array (
                'Item' => 6710102.0,
                'Description' => 'Salary Paid in Advance',
                'MainItem' => 6710100,
                'MainDescription' => 'Debtors & Advances - Employees',
                'Cat' => '',
            ),
            66 => 
            array (
                'Item' => 6710101.0,
                'Description' => 'Staff Loans - General',
                'MainItem' => 6710100,
                'MainDescription' => 'Debtors & Advances - Employees',
                'Cat' => '',
            ),
            67 => 
            array (
                'Item' => 6590201.0,
                'Description' => 'Cash in Hand - Missions',
                'MainItem' => 6590200,
                'MainDescription' => 'Foreign Cash Holdings',
                'Cat' => '',
            ),
            68 => 
            array (
                'Item' => 6590101.0,
                'Description' => 'Missions\' Bank Accounts',
                'MainItem' => 6590100,
                'MainDescription' => 'Foreign Bank Accounts',
                'Cat' => '',
            ),
            69 => 
            array (
                'Item' => 6580104.0,
                'Description' => 'Cash in Transit',
                'MainItem' => 6580100,
                'MainDescription' => 'Cash in Hand',
                'Cat' => '',
            ),
            70 => 
            array (
                'Item' => 6580103.0,
            'Description' => 'Cash in Other Bank (for Missions Abroad)',
                'MainItem' => 6580100,
                'MainDescription' => 'Cash in Hand',
                'Cat' => '',
            ),
            71 => 
            array (
                'Item' => 6580102.0,
                'Description' => 'Cash at Hand - imprest',
                'MainItem' => 6580100,
                'MainDescription' => 'Cash in Hand',
                'Cat' => '',
            ),
            72 => 
            array (
                'Item' => 6580101.0,
                'Description' => 'Cash',
                'MainItem' => 6580100,
                'MainDescription' => 'Cash in Hand',
                'Cat' => '',
            ),
            73 => 
            array (
                'Item' => 6570103.0,
            'Description' => 'Kenya Commercial Bank (University way)',
                'MainItem' => 6570100,
            'MainDescription' => 'Project Specific Bank Accounts(and other Indivudual A/C\'s)',
                'Cat' => '',
            ),
            74 => 
            array (
                'Item' => 6570102.0,
            'Description' => 'Kenya Commercial Bank (KICC)',
                'MainItem' => 6570100,
            'MainDescription' => 'Project Specific Bank Accounts(and other Indivudual A/C\'s)',
                'Cat' => '',
            ),
            75 => 
            array (
                'Item' => 6570101.0,
            'Description' => 'Co-Operative Bank of Kenya (Hequarters)',
                'MainItem' => 6570100,
            'MainDescription' => 'Project Specific Bank Accounts(and other Indivudual A/C\'s)',
                'Cat' => '',
            ),
            76 => 
            array (
                'Item' => 6550111.0,
                'Description' => 'District - Deposit Bank A/C',
                'MainItem' => 6550100,
                'MainDescription' => 'Deposit Bank Accounts',
                'Cat' => '',
            ),
            77 => 
            array (
                'Item' => 6550101.0,
                'Description' => 'Ministry HQ Deposit Bank A/C',
                'MainItem' => 6550100,
                'MainDescription' => 'Deposit Bank Accounts',
                'Cat' => '',
            ),
            78 => 
            array (
                'Item' => 6540111.0,
                'Description' => 'District - Development Bank Accounts',
                'MainItem' => 6540100,
                'MainDescription' => 'Development Bank Accounts',
                'Cat' => '',
            ),
            79 => 
            array (
                'Item' => 6540101.0,
                'Description' => 'Ministry HQ Development Bank A/C',
                'MainItem' => 6540100,
                'MainDescription' => 'Development Bank Accounts',
                'Cat' => '',
            ),
            80 => 
            array (
                'Item' => 6530112.0,
                'Description' => 'LATF Deposit A/C- E 341',
                'MainItem' => 6530100,
                'MainDescription' => 'Recurrent Bank Accounts',
                'Cat' => '',
            ),
            81 => 
            array (
                'Item' => 6530111.0,
                'Description' => 'District - Recurrent Bank A/c',
                'MainItem' => 6530100,
                'MainDescription' => 'Recurrent Bank Accounts',
                'Cat' => '',
            ),
            82 => 
            array (
                'Item' => 6530102.0,
                'Description' => 'Revenue Deposit E-312 A/C',
                'MainItem' => 6530100,
                'MainDescription' => 'Recurrent Bank Accounts',
                'Cat' => '',
            ),
            83 => 
            array (
                'Item' => 6530101.0,
                'Description' => 'Ministry HQ Recurrent Bank A/C',
                'MainItem' => 6530100,
                'MainDescription' => 'Recurrent Bank Accounts',
                'Cat' => '',
            ),
            84 => 
            array (
                'Item' => 6520111.0,
                'Description' => 'CFS Public Debt Deposit A/C',
                'MainItem' => 6520100,
                'MainDescription' => 'Treasury Bank Accounts',
                'Cat' => '',
            ),
            85 => 
            array (
                'Item' => 6520110.0,
                'Description' => 'CFS Public Debt',
                'MainItem' => 6520100,
                'MainDescription' => 'Treasury Bank Accounts',
                'Cat' => '',
            ),
            86 => 
            array (
                'Item' => 6520109.0,
                'Description' => 'TREASURY BONDS A/C Public Debt - E307',
                'MainItem' => 6520100,
                'MainDescription' => 'Treasury Bank Accounts',
                'Cat' => '',
            ),
            87 => 
            array (
                'Item' => 6520108.0,
                'Description' => 'TREASURY BILLS A/C Public Debt - E306',
                'MainItem' => 6520100,
                'MainDescription' => 'Treasury Bank Accounts',
                'Cat' => '',
            ),
            88 => 
            array (
                'Item' => 6520107.0,
                'Description' => 'Petroleum Development Levy Fund - E329',
                'MainItem' => 6520100,
                'MainDescription' => 'Treasury Bank Accounts',
                'Cat' => '',
            ),
            89 => 
            array (
                'Item' => 6520106.0,
                'Description' => 'Preshipment Inspection Fund A/C - E357',
                'MainItem' => 6520100,
                'MainDescription' => 'Treasury Bank Accounts',
                'Cat' => '',
            ),
            90 => 
            array (
                'Item' => 6520105.0,
                'Description' => 'Contingency Fund Bank A/C',
                'MainItem' => 6520100,
                'MainDescription' => 'Treasury Bank Accounts',
                'Cat' => '',
            ),
            91 => 
            array (
                'Item' => 6520104.0,
                'Description' => 'District Development Reimbursement A/C',
                'MainItem' => 6520100,
                'MainDescription' => 'Treasury Bank Accounts',
                'Cat' => '',
            ),
            92 => 
            array (
                'Item' => 6520103.0,
                'Description' => 'District Cash Fund Deposit A/C',
                'MainItem' => 6520100,
                'MainDescription' => 'Treasury Bank Accounts',
                'Cat' => '',
            ),
            93 => 
            array (
                'Item' => 6520102.0,
                'Description' => 'District Reccurrent Reimbursement A/C',
                'MainItem' => 6520100,
                'MainDescription' => 'Treasury Bank Accounts',
                'Cat' => '',
            ),
            94 => 
            array (
                'Item' => 6520101.0,
                'Description' => 'Exchequer Account',
                'MainItem' => 6520100,
                'MainDescription' => 'Treasury Bank Accounts',
                'Cat' => '',
            ),
            95 => 
            array (
                'Item' => 6510169.0,
                'Description' => 'IDA- Economic & Public Sector Reform - Cr. 3406-0-KE',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            96 => 
            array (
                'Item' => 6510168.0,
                'Description' => 'UNDP Disaster Preparedness & Management Project E 389',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            97 => 
            array (
                'Item' => 6510167.0,
                'Description' => 'Japanese KR II - 2000',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            98 => 
            array (
                'Item' => 6510166.0,
                'Description' => 'Strategic Grain Reserve Trust Fund',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            99 => 
            array (
                'Item' => 6510165.0,
                'Description' => 'UNEP-DEV. OF NAT. PLAN FOR IMP of STAC',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            100 => 
            array (
                'Item' => 6510164.0,
                'Description' => 'UNDP MGT. OF VEG. FOR REH. OF DEG. Lands',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            101 => 
            array (
                'Item' => 6510163.0,
                'Description' => 'SIDA Rural Integrated Health Service',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            102 => 
            array (
                'Item' => 6510162.0,
                'Description' => 'EPH & TFCP KEN-96 FOL/IFAD LOAN',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            103 => 
            array (
                'Item' => 6510161.0,
                'Description' => 'Japanese KR II GRANT 1999',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            104 => 
            array (
                'Item' => 6510160.0,
                'Description' => 'MRPW/ACU/KHADREP',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            105 => 
            array (
                'Item' => 6510159.0,
                'Description' => 'Nrb. Prov. Road Maintenance Fund',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            106 => 
            array (
                'Item' => 6510158.0,
                'Description' => 'Central Kenya Dry Areas IFAD',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            107 => 
            array (
                'Item' => 6510157.0,
                'Description' => 'Central Kenya Dry Areas IFAD Loan',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            108 => 
            array (
                'Item' => 6510156.0,
                'Description' => 'Central Kenya Dry Areas IFAD Grant',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            109 => 
            array (
                'Item' => 6510155.0,
                'Description' => 'EC Poverty Reduction Budget Support',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            110 => 
            array (
                'Item' => 6510154.0,
                'Description' => 'Rescheduled Parastatal Loans',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            111 => 
            array (
                'Item' => 6510153.0,
                'Description' => 'DANIDA Roads 2000 Proj. Coast Province',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            112 => 
            array (
                'Item' => 6510152.0,
                'Description' => 'Japanese KR II 1998',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            113 => 
            array (
                'Item' => 6510151.0,
                'Description' => 'Nairobi - Mombasa Road Project',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            114 => 
            array (
                'Item' => 6510150.0,
                'Description' => '351 0 CBS/DFID/Cencus Project',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            115 => 
            array (
                'Item' => 6510149.0,
                'Description' => 'SMALL ARMS A/C',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            116 => 
            array (
                'Item' => 6510148.0,
                'Description' => 'UNFPA-KEN/99/POL-COORD OF POP Pol. 1M',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            117 => 
            array (
                'Item' => 6510147.0,
                'Description' => 'UNFPA-KEN/99/POL-COORD OF POP Pol.1M',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            118 => 
            array (
                'Item' => 6510146.0,
                'Description' => 'SIDA Roads 2000 Nyeri District',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            119 => 
            array (
                'Item' => 6510145.0,
                'Description' => 'SIDA Roads 2000 Kirinyaga District',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            120 => 
            array (
                'Item' => 6510144.0,
                'Description' => 'Local Authorities Transfer Fund',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            121 => 
            array (
                'Item' => 6510143.0,
                'Description' => 'Japan Kr2 Grant 1998 A/C',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            122 => 
            array (
                'Item' => 6510142.0,
                'Description' => 'Enab. Acts Prep. Int. Nati. Comm. Rel.UNF.',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            123 => 
            array (
                'Item' => 6510141.0,
                'Description' => 'Gok/Netherlands Textbook Project',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            124 => 
            array (
                'Item' => 6510140.0,
                'Description' => 'Kenya Global Priv. Enterp. Gpe',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            125 => 
            array (
                'Item' => 6510139.0,
                'Description' => 'Kenya Global Priv. Enterp. Eib Project',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            126 => 
            array (
                'Item' => 6510138.0,
                'Description' => 'The Rural Health Project',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            127 => 
            array (
                'Item' => 6510137.0,
                'Description' => 'Japanese Emergeny Assist. To Bomb B',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            128 => 
            array (
                'Item' => 6510136.0,
                'Description' => 'Red Biodiv. Loss At Cross Border Sit.',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            129 => 
            array (
                'Item' => 6510135.0,
                'Description' => 'Road Maintenance Levy Fund',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            130 => 
            array (
                'Item' => 6510134.0,
                'Description' => 'Data Coll & Data Base Development',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            131 => 
            array (
                'Item' => 6510133.0,
                'Description' => 'USAID-RPE REOW A/C',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            132 => 
            array (
                'Item' => 6510132.0,
                'Description' => 'UK/Kenya Strengthening Of Pri. Educ.',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            133 => 
            array (
                'Item' => 6510131.0,
                'Description' => 'Support For Financial & Econom',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            134 => 
            array (
                'Item' => 6510130.0,
                'Description' => 'GOK/KPLC-Belgiun Windpower Project',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            135 => 
            array (
                'Item' => 6510129.0,
                'Description' => 'Italian Commodity Aid Programm',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            136 => 
            array (
                'Item' => 6510128.0,
                'Description' => 'UNDP-Support To The Prog. For SSJK',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            137 => 
            array (
                'Item' => 6510127.0,
                'Description' => 'Sexually Transmitted Inectious',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            138 => 
            array (
                'Item' => 6510126.0,
                'Description' => 'Netherlands Co-Fin For Civil Servants R.',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            139 => 
            array (
                'Item' => 6510125.0,
                'Description' => 'Horticulture & Traditional Crop',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            140 => 
            array (
                'Item' => 6510124.0,
                'Description' => 'EC Micro-Enterp. Pilot Lending Sheme',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            141 => 
            array (
                'Item' => 6510123.0,
            'Description' => 'Japanese Non-Project Grant (1995)',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            142 => 
            array (
                'Item' => 6510122.0,
                'Description' => 'IFAD-Western Kenya District Based',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            143 => 
            array (
                'Item' => 6510121.0,
                'Description' => 'UNDP-I.S.T.P.O. OZONE D.S.U.TN. P.K',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            144 => 
            array (
                'Item' => 6510120.0,
                'Description' => 'Kenya Global Priv. Enterprise E.I',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            145 => 
            array (
                'Item' => 6510119.0,
                'Description' => 'IFAD-Eastern Proj. Hort. & Traditional',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            146 => 
            array (
                'Item' => 6510118.0,
                'Description' => 'EEC Micro Projects Programme',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            147 => 
            array (
                'Item' => 6510117.0,
                'Description' => 'Sale Of Govt Shares In Parastals',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            148 => 
            array (
                'Item' => 6510116.0,
                'Description' => 'ADB Nyayo Tea Zones Cons. Project',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            149 => 
            array (
                'Item' => 6510115.0,
                'Description' => 'SIDA Soil Consevation National',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            150 => 
            array (
                'Item' => 6510114.0,
                'Description' => 'IFAD Coastal Asal Proj. Loan',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            151 => 
            array (
                'Item' => 6510113.0,
                'Description' => 'EEC Min. Commerce Trade Fairs Deposit',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            152 => 
            array (
                'Item' => 6510112.0,
                'Description' => 'IFAD Farmers Community Support',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            153 => 
            array (
                'Item' => 6510111.0,
                'Description' => 'WORLD BANK Special A/Cs Interest',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            154 => 
            array (
                'Item' => 6510110.0,
            'Description' => 'USAID Kenya Mkt. Dev. Proj. (1989)',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            155 => 
            array (
                'Item' => 6510109.0,
                'Description' => 'IFAD Dry Area S. Holder & C.S.D',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            156 => 
            array (
                'Item' => 6510108.0,
                'Description' => 'Belgium Rural Ent. Fund Pro. 1&2',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            157 => 
            array (
                'Item' => 6510107.0,
                'Description' => 'UNICEF-Child Survival & Development',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            158 => 
            array (
                'Item' => 6510106.0,
                'Description' => 'USAID HEALTH FINANCING 1989',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            159 => 
            array (
                'Item' => 6510105.0,
                'Description' => 'USAID FY 1989',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            160 => 
            array (
                'Item' => 6510104.0,
                'Description' => 'Japanese Non Project Grant To Kenya',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            161 => 
            array (
                'Item' => 6510103.0,
                'Description' => 'Finland Fertiliser',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            162 => 
            array (
                'Item' => 6510102.0,
                'Description' => 'Japanese Rice',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            163 => 
            array (
                'Item' => 6510101.0,
                'Description' => 'CIDA GRANTS',
                'MainItem' => 6510100,
                'MainDescription' => 'Special Project Bank Accounts',
                'Cat' => '',
            ),
            164 => 
            array (
                'Item' => 5520101.0,
                'Description' => 'Cooperative Bank Loan',
                'MainItem' => 5520100,
                'MainDescription' => 'Principal Repayments on Guaranteed Domestic Debt Taken over by Government',
                'Cat' => '',
            ),
            165 => 
            array (
                'Item' => 5510605.0,
                'Description' => 'Repayments on Assumed Guarantees on Foreign Debt',
                'MainItem' => 5510600,
                'MainDescription' => 'Principal Repayments on Foreign Borrowing',
                'Cat' => '',
            ),
            166 => 
            array (
                'Item' => 5510604.0,
                'Description' => 'Repayments on Borrowings from Foreign Suppliers credits',
                'MainItem' => 5510600,
                'MainDescription' => 'Principal Repayments on Foreign Borrowing',
                'Cat' => '',
            ),
            167 => 
            array (
                'Item' => 5510603.0,
                'Description' => 'Repayments on Borrowings from Foreign Financial Corporations and other International Financial Institutions',
                'MainItem' => 5510600,
                'MainDescription' => 'Principal Repayments on Foreign Borrowing',
                'Cat' => '',
            ),
            168 => 
            array (
                'Item' => 5510602.0,
                'Description' => 'Repayments on Borrowings from International Organizations',
                'MainItem' => 5510600,
                'MainDescription' => 'Principal Repayments on Foreign Borrowing',
                'Cat' => '',
            ),
            169 => 
            array (
                'Item' => 5510601.0,
                'Description' => 'Repayments on Borrowings from Foreign Governments',
                'MainItem' => 5510600,
                'MainDescription' => 'Principal Repayments on Foreign Borrowing',
                'Cat' => '',
            ),
            170 => 
            array (
                'Item' => 5510503.0,
                'Description' => 'Households and Individuals',
                'MainItem' => 5510500,
                'MainDescription' => 'Repayments on Borrowings from Other Domestic Creditors',
                'Cat' => '',
            ),
            171 => 
            array (
                'Item' => 5510502.0,
                'Description' => 'Private Enterprises',
                'MainItem' => 5510500,
                'MainDescription' => 'Repayments on Borrowings from Other Domestic Creditors',
                'Cat' => '',
            ),
            172 => 
            array (
                'Item' => 5510501.0,
                'Description' => 'Public Enterprises',
                'MainItem' => 5510500,
                'MainDescription' => 'Repayments on Borrowings from Other Domestic Creditors',
                'Cat' => '',
            ),
            173 => 
            array (
                'Item' => 5510403.0,
                'Description' => 'Loans and Other Instruments',
                'MainItem' => 5510400,
                'MainDescription' => 'Repayments on Borrowings from Other Domestic Financial Institutions',
                'Cat' => '',
            ),
            174 => 
            array (
                'Item' => 5510402.0,
                'Description' => 'Long-term Securities and Bonds',
                'MainItem' => 5510400,
                'MainDescription' => 'Repayments on Borrowings from Other Domestic Financial Institutions',
                'Cat' => '',
            ),
            175 => 
            array (
                'Item' => 5510401.0,
                'Description' => 'Short-term Treasury Bills',
                'MainItem' => 5510400,
                'MainDescription' => 'Repayments on Borrowings from Other Domestic Financial Institutions',
                'Cat' => '',
            ),
            176 => 
            array (
                'Item' => 5510303.0,
                'Description' => 'Loans and Other Instruments',
                'MainItem' => 5510300,
            'MainDescription' => 'Repayments on Borrowings from Other Domestic Depository Corporations (Commercial Banks)',
                'Cat' => '',
            ),
            177 => 
            array (
                'Item' => 5510302.0,
                'Description' => 'Long-term Securities and Bonds',
                'MainItem' => 5510300,
            'MainDescription' => 'Repayments on Borrowings from Other Domestic Depository Corporations (Commercial Banks)',
                'Cat' => '',
            ),
            178 => 
            array (
                'Item' => 5510301.0,
                'Description' => 'Short-term Treasury Bills',
                'MainItem' => 5510300,
            'MainDescription' => 'Repayments on Borrowings from Other Domestic Depository Corporations (Commercial Banks)',
                'Cat' => '',
            ),
            179 => 
            array (
                'Item' => 5510204.0,
                'Description' => 'Interest on IMF Loans',
                'MainItem' => 5510200,
            'MainDescription' => 'Repayments on Borrowings from Monetary Authorities (Central Bank)',
                'Cat' => '',
            ),
            180 => 
            array (
                'Item' => 5510203.0,
                'Description' => 'Overdraft',
                'MainItem' => 5510200,
            'MainDescription' => 'Repayments on Borrowings from Monetary Authorities (Central Bank)',
                'Cat' => '',
            ),
            181 => 
            array (
                'Item' => 5510202.0,
                'Description' => 'Long-term Securities and Bonds',
                'MainItem' => 5510200,
            'MainDescription' => 'Repayments on Borrowings from Monetary Authorities (Central Bank)',
                'Cat' => '',
            ),
            182 => 
            array (
                'Item' => 5510201.0,
                'Description' => 'Short-term Treasury Bills',
                'MainItem' => 5510200,
            'MainDescription' => 'Repayments on Borrowings from Monetary Authorities (Central Bank)',
                'Cat' => '',
            ),
            183 => 
            array (
                'Item' => 5510103.0,
                'Description' => 'Retirements Benefits Authority',
                'MainItem' => 5510100,
                'MainDescription' => 'Repayments on Borrowings from General Government',
                'Cat' => '',
            ),
            184 => 
            array (
                'Item' => 5510102.0,
                'Description' => 'National Social Security Fund',
                'MainItem' => 5510100,
                'MainDescription' => 'Repayments on Borrowings from General Government',
                'Cat' => '',
            ),
            185 => 
            array (
                'Item' => 5510101.0,
                'Description' => 'National Health Insurance Fund',
                'MainItem' => 5510100,
                'MainDescription' => 'Repayments on Borrowings from General Government',
                'Cat' => '',
            ),
            186 => 
            array (
                'Item' => 5120302.0,
                'Description' => 'Foreign Deposits',
                'MainItem' => 5120300,
                'MainDescription' => 'Foreign Currency and Foreign Deposits',
                'Cat' => '',
            ),
            187 => 
            array (
                'Item' => 5120301.0,
                'Description' => 'Foreign Currency',
                'MainItem' => 5120300,
                'MainDescription' => 'Foreign Currency and Foreign Deposits',
                'Cat' => '',
            ),
            188 => 
            array (
                'Item' => 5120202.0,
                'Description' => 'Borrowing from International Organisations',
                'MainItem' => 5120200,
                'MainDescription' => '"Foreign Borrowing - Direct Payments, Treated as AIA"',
                'Cat' => '',
            ),
            189 => 
            array (
                'Item' => 5120201.0,
                'Description' => 'Borrowing from Foreign Governments',
                'MainItem' => 5120200,
                'MainDescription' => '"Foreign Borrowing - Direct Payments, Treated as AIA"',
                'Cat' => '',
            ),
            190 => 
            array (
                'Item' => 5120104.0,
                'Description' => 'Borrowing under Foreign Suppliers Credits',
                'MainItem' => 5120100,
                'MainDescription' => 'Foreign Borrowing - Drawdowns Through Exchequer',
                'Cat' => '',
            ),
            191 => 
            array (
                'Item' => 5120103.0,
                'Description' => 'Borrowing from Foreign Financial Corporations and other International Financial Institutions',
                'MainItem' => 5120100,
                'MainDescription' => 'Foreign Borrowing - Drawdowns Through Exchequer',
                'Cat' => '',
            ),
            192 => 
            array (
                'Item' => 5120102.0,
                'Description' => 'Borrowing from International Organisations',
                'MainItem' => 5120100,
                'MainDescription' => 'Foreign Borrowing - Drawdowns Through Exchequer',
                'Cat' => '',
            ),
            193 => 
            array (
                'Item' => 5120101.0,
                'Description' => 'Borrowing from Foreign Governments',
                'MainItem' => 5120100,
                'MainDescription' => 'Foreign Borrowing - Drawdowns Through Exchequer',
                'Cat' => '',
            ),
            194 => 
            array (
                'Item' => 5110704.0,
                'Description' => 'Other Domestic Accounts Payable',
                'MainItem' => 5110700,
                'MainDescription' => 'Domestic Accounts Payable',
                'Cat' => '',
            ),
            195 => 
            array (
                'Item' => 5110703.0,
                'Description' => 'Domestic Accountable Advances',
                'MainItem' => 5110700,
                'MainDescription' => 'Domestic Accounts Payable',
                'Cat' => '',
            ),
            196 => 
            array (
                'Item' => 5110702.0,
            'Description' => 'Domestic Commercial Creditors (Accruals)',
                'MainItem' => 5110700,
                'MainDescription' => 'Domestic Accounts Payable',
                'Cat' => '',
            ),
            197 => 
            array (
                'Item' => 5110701.0,
                'Description' => 'Domestic Trade Creditors',
                'MainItem' => 5110700,
                'MainDescription' => 'Domestic Accounts Payable',
                'Cat' => '',
            ),
            198 => 
            array (
                'Item' => 5110602.0,
                'Description' => 'Domestic Deposits',
                'MainItem' => 5110600,
                'MainDescription' => 'Domestic Currency and Domestic Deposits',
                'Cat' => '',
            ),
            199 => 
            array (
                'Item' => 5110601.0,
                'Description' => 'Domestic Currency',
                'MainItem' => 5110600,
                'MainDescription' => 'Domestic Currency and Domestic Deposits',
                'Cat' => '',
            ),
            200 => 
            array (
                'Item' => 5110504.0,
                'Description' => 'Other Domestic Creditors',
                'MainItem' => 5110500,
                'MainDescription' => 'Borrowing from Other Domestic Creditors',
                'Cat' => '',
            ),
            201 => 
            array (
                'Item' => 5110503.0,
                'Description' => 'Households and Individuals',
                'MainItem' => 5110500,
                'MainDescription' => 'Borrowing from Other Domestic Creditors',
                'Cat' => '',
            ),
            202 => 
            array (
                'Item' => 5110502.0,
                'Description' => 'Private Enterprises',
                'MainItem' => 5110500,
                'MainDescription' => 'Borrowing from Other Domestic Creditors',
                'Cat' => '',
            ),
            203 => 
            array (
                'Item' => 5110501.0,
                'Description' => 'Public Enterprises',
                'MainItem' => 5110500,
                'MainDescription' => 'Borrowing from Other Domestic Creditors',
                'Cat' => '',
            ),
            204 => 
            array (
                'Item' => 5110403.0,
                'Description' => 'Loans and Other Instruments',
                'MainItem' => 5110400,
                'MainDescription' => 'Borrowing from Other Domestic Financial Institutions',
                'Cat' => '',
            ),
            205 => 
            array (
                'Item' => 5110402.0,
                'Description' => 'Long-term Securities and Bonds',
                'MainItem' => 5110400,
                'MainDescription' => 'Borrowing from Other Domestic Financial Institutions',
                'Cat' => '',
            ),
            206 => 
            array (
                'Item' => 5110401.0,
                'Description' => 'Short-term Treasury Bills',
                'MainItem' => 5110400,
                'MainDescription' => 'Borrowing from Other Domestic Financial Institutions',
                'Cat' => '',
            ),
            207 => 
            array (
                'Item' => 5110303.0,
                'Description' => 'Loans and Other Instruments',
                'MainItem' => 5110300,
            'MainDescription' => 'Other Domestic Depository Corporations (Commercial Banks)',
                'Cat' => '',
            ),
            208 => 
            array (
                'Item' => 5110302.0,
                'Description' => 'Long-term Securities and Bonds',
                'MainItem' => 5110300,
            'MainDescription' => 'Other Domestic Depository Corporations (Commercial Banks)',
                'Cat' => '',
            ),
            209 => 
            array (
                'Item' => 5110301.0,
                'Description' => 'Short-term Treasury Bills',
                'MainItem' => 5110300,
            'MainDescription' => 'Other Domestic Depository Corporations (Commercial Banks)',
                'Cat' => '',
            ),
            210 => 
            array (
                'Item' => 5110204.0,
                'Description' => 'Proceeds of IMF Lending',
                'MainItem' => 5110200,
            'MainDescription' => 'Borrowing from Monetary Authorities (Central Bank)',
                'Cat' => '',
            ),
            211 => 
            array (
                'Item' => 5110203.0,
                'Description' => 'Overdraft',
                'MainItem' => 5110200,
            'MainDescription' => 'Borrowing from Monetary Authorities (Central Bank)',
                'Cat' => '',
            ),
            212 => 
            array (
                'Item' => 5110202.0,
                'Description' => 'Long-term Securities and Bonds',
                'MainItem' => 5110200,
            'MainDescription' => 'Borrowing from Monetary Authorities (Central Bank)',
                'Cat' => '',
            ),
            213 => 
            array (
                'Item' => 5110201.0,
                'Description' => 'Short-term Treasury Bills',
                'MainItem' => 5110200,
            'MainDescription' => 'Borrowing from Monetary Authorities (Central Bank)',
                'Cat' => '',
            ),
            214 => 
            array (
                'Item' => 5110103.0,
                'Description' => 'Retirements Benefits Authority',
                'MainItem' => 5110100,
                'MainDescription' => 'Borrowing within General Government',
                'Cat' => '',
            ),
            215 => 
            array (
                'Item' => 5110102.0,
                'Description' => 'National Social Security Fund',
                'MainItem' => 5110100,
                'MainDescription' => 'Borrowing within General Government',
                'Cat' => '',
            ),
            216 => 
            array (
                'Item' => 5110101.0,
                'Description' => 'National Health Insurance Fund',
                'MainItem' => 5110100,
                'MainDescription' => 'Borrowing within General Government',
                'Cat' => '',
            ),
            217 => 
            array (
                'Item' => 4550204.0,
                'Description' => 'Global Environment Fund',
                'MainItem' => 4550200,
                'MainDescription' => 'Returns of Equity Holdings in International Organizations',
                'Cat' => '',
            ),
            218 => 
            array (
                'Item' => 4550203.0,
            'Description' => 'International Fund for Agriculture Development (IFAD)',
                'MainItem' => 4550200,
                'MainDescription' => 'Returns of Equity Holdings in International Organizations',
                'Cat' => '',
            ),
            219 => 
            array (
                'Item' => 4550202.0,
                'Description' => 'African Development Bank',
                'MainItem' => 4550200,
                'MainDescription' => 'Returns of Equity Holdings in International Organizations',
                'Cat' => '',
            ),
            220 => 
            array (
                'Item' => 4550201.0,
                'Description' => 'World Bank',
                'MainItem' => 4550200,
                'MainDescription' => 'Returns of Equity Holdings in International Organizations',
                'Cat' => '',
            ),
            221 => 
            array (
                'Item' => 4540109.0,
                'Description' => 'Reimbursement Using Bonds',
                'MainItem' => 4540100,
                'MainDescription' => 'Reimbursements and Refund Collected as AIA',
                'Cat' => '',
            ),
            222 => 
            array (
                'Item' => 4540108.0,
                'Description' => 'Reimbursement within Central Government',
                'MainItem' => 4540100,
                'MainDescription' => 'Reimbursements and Refund Collected as AIA',
                'Cat' => '',
            ),
            223 => 
            array (
                'Item' => 4540107.0,
                'Description' => 'Reimbursement from Statutory Organizations',
                'MainItem' => 4540100,
                'MainDescription' => 'Reimbursements and Refund Collected as AIA',
                'Cat' => '',
            ),
            224 => 
            array (
                'Item' => 4540106.0,
                'Description' => 'Reimbursement from Local Government Authorities',
                'MainItem' => 4540100,
                'MainDescription' => 'Reimbursements and Refund Collected as AIA',
                'Cat' => '',
            ),
            225 => 
            array (
                'Item' => 4540105.0,
                'Description' => 'Reimbursement from Individuals and Private Organisations',
                'MainItem' => 4540100,
                'MainDescription' => 'Reimbursements and Refund Collected as AIA',
                'Cat' => '',
            ),
            226 => 
            array (
                'Item' => 4540104.0,
                'Description' => 'Reimbursement from World Bank - ECD',
                'MainItem' => 4540100,
                'MainDescription' => 'Reimbursements and Refund Collected as AIA',
                'Cat' => '',
            ),
            227 => 
            array (
                'Item' => 4540103.0,
            'Description' => 'Reimbursement on Messing Charges (UNICEF)',
                'MainItem' => 4540100,
                'MainDescription' => 'Reimbursements and Refund Collected as AIA',
                'Cat' => '',
            ),
            228 => 
            array (
                'Item' => 4540102.0,
                'Description' => 'Reimbursement of Audit Fees',
                'MainItem' => 4540100,
                'MainDescription' => 'Reimbursements and Refund Collected as AIA',
                'Cat' => '',
            ),
            229 => 
            array (
                'Item' => 4540101.0,
            'Description' => 'Refund from World Food Programme (WFP)',
                'MainItem' => 4540100,
                'MainDescription' => 'Reimbursements and Refund Collected as AIA',
                'Cat' => '',
            ),
            230 => 
            array (
                'Item' => 4510404.0,
                'Description' => 'Loans from the Higher Education Loans Board',
                'MainItem' => 4510400,
                'MainDescription' => 'Repayments from Domestic Loans to Individuals and Households',
                'Cat' => '',
            ),
            231 => 
            array (
                'Item' => 4510403.0,
                'Description' => 'House loans to civil servants',
                'MainItem' => 4510400,
                'MainDescription' => 'Repayments from Domestic Loans to Individuals and Households',
                'Cat' => '',
            ),
            232 => 
            array (
                'Item' => 4510402.0,
                'Description' => 'House loans to Members of Parliament and their Staff',
                'MainItem' => 4510400,
                'MainDescription' => 'Repayments from Domestic Loans to Individuals and Households',
                'Cat' => '',
            ),
            233 => 
            array (
                'Item' => 4510401.0,
                'Description' => 'Car loans to Members of Parliament',
                'MainItem' => 4510400,
                'MainDescription' => 'Repayments from Domestic Loans to Individuals and Households',
                'Cat' => '',
            ),
            234 => 
            array (
                'Item' => 4510102.0,
                'Description' => 'Repayments from Loans to Domestic Financial Institutions',
                'MainItem' => 4510100,
                'MainDescription' => 'Repayments from Loans to Government Agencies and Other Levels of Government',
                'Cat' => '',
            ),
            235 => 
            array (
                'Item' => 4510101.0,
                'Description' => 'Repayments from Loans to Domestic Non-Financial Public Enterprises',
                'MainItem' => 4510100,
                'MainDescription' => 'Repayments from Loans to Government Agencies and Other Levels of Government',
                'Cat' => '',
            ),
            236 => 
            array (
                'Item' => 4160102.0,
                'Description' => 'Equity participation in EAD Bank',
                'MainItem' => 4160100,
                'MainDescription' => 'Payable from Previous Financial Periods',
                'Cat' => '',
            ),
            237 => 
            array (
                'Item' => 4160101.0,
                'Description' => 'Foreign Payables - From Previous Years',
                'MainItem' => 4160100,
                'MainDescription' => 'Payable from Previous Financial Periods',
                'Cat' => '',
            ),
            238 => 
            array (
                'Item' => 4150201.0,
                'Description' => 'Equity Participation in African Development Bank',
                'MainItem' => 4150200,
                'MainDescription' => 'Equity Participation in Foreign financial Institutions operating Abroad',
                'Cat' => '',
            ),
            239 => 
            array (
                'Item' => 4130201.0,
                'Description' => 'Domestic Payables - From Previous Financial Years',
                'MainItem' => 4130200,
                'MainDescription' => 'Payable from Previous Financial Periods',
                'Cat' => '',
            ),
            240 => 
            array (
                'Item' => 4130103.0,
                'Description' => 'Equipment Advances',
                'MainItem' => 4130100,
                'MainDescription' => 'Advances to Government Employees',
                'Cat' => '',
            ),
            241 => 
            array (
                'Item' => 4130102.0,
                'Description' => 'Salary Advances',
                'MainItem' => 4130100,
                'MainDescription' => 'Advances to Government Employees',
                'Cat' => '',
            ),
            242 => 
            array (
                'Item' => 4130101.0,
                'Description' => 'Bicycle Advances',
                'MainItem' => 4130100,
                'MainDescription' => 'Advances to Government Employees',
                'Cat' => '',
            ),
            243 => 
            array (
                'Item' => 4110404.0,
                'Description' => 'Loans from the Higher Education Loans Board',
                'MainItem' => 4110400,
                'MainDescription' => 'Domestic Loans to Individuals and Households',
                'Cat' => '',
            ),
            244 => 
            array (
                'Item' => 4110403.0,
                'Description' => 'House loans to civil servants',
                'MainItem' => 4110400,
                'MainDescription' => 'Domestic Loans to Individuals and Households',
                'Cat' => '',
            ),
            245 => 
            array (
                'Item' => 4110402.0,
                'Description' => 'House loans to Members of Parliament and their staff',
                'MainItem' => 4110400,
                'MainDescription' => 'Domestic Loans to Individuals and Households',
                'Cat' => '',
            ),
            246 => 
            array (
                'Item' => 4110401.0,
                'Description' => 'Car loans to Members of Parliament',
                'MainItem' => 4110400,
                'MainDescription' => 'Domestic Loans to Individuals and Households',
                'Cat' => '',
            ),
            247 => 
            array (
                'Item' => 4110102.0,
                'Description' => 'Local Government Loans Authority',
                'MainItem' => 4110100,
                'MainDescription' => 'Domestic Loans to Other Level of Government',
                'Cat' => '',
            ),
            248 => 
            array (
                'Item' => 4110101.0,
                'Description' => 'Urban Transport Infrastructure -- Local Authorities',
                'MainItem' => 4110100,
                'MainDescription' => 'Domestic Loans to Other Level of Government',
                'Cat' => '',
            ),
            249 => 
            array (
                'Item' => 3540302.0,
                'Description' => 'Fishing Rights',
                'MainItem' => 3540300,
                'MainDescription' => 'Receipts from the Sale of Intangible Non-Produced Assets',
                'Cat' => '',
            ),
            250 => 
            array (
                'Item' => 3540301.0,
                'Description' => 'Land Development Rights',
                'MainItem' => 3540300,
                'MainDescription' => 'Receipts from the Sale of Intangible Non-Produced Assets',
                'Cat' => '',
            ),
            251 => 
            array (
                'Item' => 3540201.0,
                'Description' => 'Receipts from the Sale of Sub-Soil Deposits',
                'MainItem' => 3540200,
                'MainDescription' => 'Receipts from the Sale of Other Naturally Occurring Non-Produced Assets',
                'Cat' => '',
            ),
            252 => 
            array (
                'Item' => 3540103.0,
                'Description' => 'Receipts from the Sale of Rural and Agricultural Land',
                'MainItem' => 3540100,
                'MainDescription' => 'Receipts from the Sale of Land',
                'Cat' => '',
            ),
            253 => 
            array (
                'Item' => 3540102.0,
                'Description' => 'Receipts from the Sale of Urban Commercial and Industrial Land',
                'MainItem' => 3540100,
                'MainDescription' => 'Receipts from the Sale of Land',
                'Cat' => '',
            ),
            254 => 
            array (
                'Item' => 3540101.0,
                'Description' => 'Receipts from the Sale of Urban Residential Land',
                'MainItem' => 3540100,
                'MainDescription' => 'Receipts from the Sale of Land',
                'Cat' => '',
            ),
            255 => 
            array (
                'Item' => 3520309.0,
                'Description' => '"Sale of Seedlings, Cuttings and Licences"',
                'MainItem' => 3520300,
                'MainDescription' => '"Receipts from the Sale of Inventories, Stocks and Commodities - Collected as AIA"',
                'Cat' => '',
            ),
            256 => 
            array (
                'Item' => 3520308.0,
                'Description' => 'Sale of Timber and Houses',
                'MainItem' => 3520300,
                'MainDescription' => '"Receipts from the Sale of Inventories, Stocks and Commodities - Collected as AIA"',
                'Cat' => '',
            ),
            257 => 
            array (
                'Item' => 3520307.0,
                'Description' => 'Sale of Forest Produce',
                'MainItem' => 3520300,
                'MainDescription' => '"Receipts from the Sale of Inventories, Stocks and Commodities - Collected as AIA"',
                'Cat' => '',
            ),
            258 => 
            array (
                'Item' => 3520306.0,
                'Description' => 'Sale of Textile Products',
                'MainItem' => 3520300,
                'MainDescription' => '"Receipts from the Sale of Inventories, Stocks and Commodities - Collected as AIA"',
                'Cat' => '',
            ),
            259 => 
            array (
                'Item' => 3520305.0,
            'Description' => 'Sale of Woodfuel Burners (JIKOS)',
                'MainItem' => 3520300,
                'MainDescription' => '"Receipts from the Sale of Inventories, Stocks and Commodities - Collected as AIA"',
                'Cat' => '',
            ),
            260 => 
            array (
                'Item' => 3520304.0,
                'Description' => 'Sale of Goods and Fees for Services',
                'MainItem' => 3520300,
                'MainDescription' => '"Receipts from the Sale of Inventories, Stocks and Commodities - Collected as AIA"',
                'Cat' => '',
            ),
            261 => 
            array (
                'Item' => 3520303.0,
                'Description' => 'Sale of Non-Capital Goods',
                'MainItem' => 3520300,
                'MainDescription' => '"Receipts from the Sale of Inventories, Stocks and Commodities - Collected as AIA"',
                'Cat' => '',
            ),
            262 => 
            array (
                'Item' => 3520302.0,
                'Description' => '"Sale of Equipment, Plant and Machinery"',
                'MainItem' => 3520300,
                'MainDescription' => '"Receipts from the Sale of Inventories, Stocks and Commodities - Collected as AIA"',
                'Cat' => '',
            ),
            263 => 
            array (
                'Item' => 3520301.0,
                'Description' => 'Sale of Capital Goods',
                'MainItem' => 3520300,
                'MainDescription' => '"Receipts from the Sale of Inventories, Stocks and Commodities - Collected as AIA"',
                'Cat' => '',
            ),
            264 => 
            array (
                'Item' => 3520101.0,
                'Description' => 'Sales of Maize and Beans',
                'MainItem' => 3520100,
                'MainDescription' => 'Receipts from the Sale of Strategic Reserves Stocks',
                'Cat' => '',
            ),
            265 => 
            array (
                'Item' => 3511002.0,
            'Description' => 'Receipt from the Sale of Cultivated Assets (plants and crops)',
                'MainItem' => 3511000,
                'MainDescription' => 'Receipts from Sale of Certified Seeds and Breeding Stock - Collected as AIA',
                'Cat' => '',
            ),
            266 => 
            array (
                'Item' => 3511001.0,
            'Description' => 'Receipts from the Sale of Cultivated Assets (Livestock)',
                'MainItem' => 3511000,
                'MainDescription' => 'Receipts from Sale of Certified Seeds and Breeding Stock - Collected as AIA',
                'Cat' => '',
            ),
            267 => 
            array (
                'Item' => 3510902.0,
            'Description' => 'Receipt from the Sale of Cultivated Assets (Plants and Crops)',
                'MainItem' => 3510900,
                'MainDescription' => 'Receipts from Sale of Certified Seeds and Breeding Stock - Paid to Exchequer',
                'Cat' => '',
            ),
            268 => 
            array (
                'Item' => 3510901.0,
            'Description' => 'Receipts from the Sale of Cultivated Assets (Livestock)',
                'MainItem' => 3510900,
                'MainDescription' => 'Receipts from Sale of Certified Seeds and Breeding Stock - Paid to Exchequer',
                'Cat' => '',
            ),
            269 => 
            array (
                'Item' => 3510803.0,
                'Description' => 'Receipts from the Sale of Office and General Equipment',
                'MainItem' => 3510800,
                'MainDescription' => 'Receipts from the Sale Plant Machinery and Equipment - Collected as AIA',
                'Cat' => '',
            ),
            270 => 
            array (
                'Item' => 3510802.0,
                'Description' => 'Receipts from the Sale of household Furniture and Institutional Equipment',
                'MainItem' => 3510800,
                'MainDescription' => 'Receipts from the Sale Plant Machinery and Equipment - Collected as AIA',
                'Cat' => '',
            ),
            271 => 
            array (
                'Item' => 3510801.0,
                'Description' => '"Receipts from the Sale of Plant, Machinery and Equipment"',
                'MainItem' => 3510800,
                'MainDescription' => 'Receipts from the Sale Plant Machinery and Equipment - Collected as AIA',
                'Cat' => '',
            ),
            272 => 
            array (
                'Item' => 3510703.0,
                'Description' => 'Receipts from the Sale of Office and General Equipment',
                'MainItem' => 3510700,
                'MainDescription' => 'Receipts from the Sale of Plant Machinery and Equipment - Paid to Exchequer',
                'Cat' => '',
            ),
            273 => 
            array (
                'Item' => 3510702.0,
                'Description' => 'Receipts from the Sale of household Furniture and Institutional Equipment',
                'MainItem' => 3510700,
                'MainDescription' => 'Receipts from the Sale of Plant Machinery and Equipment - Paid to Exchequer',
                'Cat' => '',
            ),
            274 => 
            array (
                'Item' => 3510701.0,
                'Description' => '"Receipts from the Sale of Plant, Machinery and Equipment"',
                'MainItem' => 3510700,
                'MainDescription' => 'Receipts from the Sale of Plant Machinery and Equipment - Paid to Exchequer',
                'Cat' => '',
            ),
            275 => 
            array (
                'Item' => 3510603.0,
                'Description' => 'Sale of aircraft and helicopters',
                'MainItem' => 3510600,
                'MainDescription' => 'Receipts from the Sale of Vehicles and Transport Equipment - Collected as AIA',
                'Cat' => '',
            ),
            276 => 
            array (
                'Item' => 3510602.0,
                'Description' => 'Sale of boats',
                'MainItem' => 3510600,
                'MainDescription' => 'Receipts from the Sale of Vehicles and Transport Equipment - Collected as AIA',
                'Cat' => '',
            ),
            277 => 
            array (
                'Item' => 3510601.0,
                'Description' => 'Sale of Motor Vehicles',
                'MainItem' => 3510600,
                'MainDescription' => 'Receipts from the Sale of Vehicles and Transport Equipment - Collected as AIA',
                'Cat' => '',
            ),
            278 => 
            array (
                'Item' => 3510503.0,
                'Description' => 'Sale of Aircraft and Helicopters',
                'MainItem' => 3510500,
                'MainDescription' => 'Receipts from the Sale of Vehicles and Transport Equipment - Paid to Exchequer',
                'Cat' => '',
            ),
            279 => 
            array (
                'Item' => 3510502.0,
                'Description' => 'Sale of Boats',
                'MainItem' => 3510500,
                'MainDescription' => 'Receipts from the Sale of Vehicles and Transport Equipment - Paid to Exchequer',
                'Cat' => '',
            ),
            280 => 
            array (
                'Item' => 3510501.0,
                'Description' => 'Sale of Motor Vehicles',
                'MainItem' => 3510500,
                'MainDescription' => 'Receipts from the Sale of Vehicles and Transport Equipment - Paid to Exchequer',
                'Cat' => '',
            ),
            281 => 
            array (
                'Item' => 3510202.0,
                'Description' => 'AIA Receipts from the Sale of Buildings - Non-Residential',
                'MainItem' => 3510200,
                'MainDescription' => 'Receipts from the Sale of Buildings - Collected as AIA',
                'Cat' => '',
            ),
            282 => 
            array (
                'Item' => 3510201.0,
                'Description' => 'AIA Receipts from the Sale of Buildings - Residential',
                'MainItem' => 3510200,
                'MainDescription' => 'Receipts from the Sale of Buildings - Collected as AIA',
                'Cat' => '',
            ),
            283 => 
            array (
                'Item' => 3510102.0,
                'Description' => 'Receipts from the Sale of Buildings - Non-Residential',
                'MainItem' => 3510100,
                'MainDescription' => 'Receipts from the Sale of Buildings - Paid to Exchequer',
                'Cat' => '',
            ),
            284 => 
            array (
                'Item' => 3510101.0,
                'Description' => 'Receipts from the Sale of Buildings - Residential',
                'MainItem' => 3510100,
                'MainDescription' => 'Receipts from the Sale of Buildings - Paid to Exchequer',
                'Cat' => '',
            ),
            285 => 
            array (
                'Item' => 3130202.0,
                'Description' => 'Acquisition of Other Naturally Occuring Assets',
                'MainItem' => 3130200,
                'MainDescription' => 'Acquisition of Other Intangible Assets',
                'Cat' => '',
            ),
            286 => 
            array (
                'Item' => 3130201.0,
                'Description' => 'Acquisition of Sub Soil Deposits/Assets',
                'MainItem' => 3130200,
                'MainDescription' => 'Acquisition of Other Intangible Assets',
                'Cat' => '',
            ),
            287 => 
            array (
                'Item' => 3130101.0,
                'Description' => 'Acquisition of Land',
                'MainItem' => 3130100,
                'MainDescription' => 'Acquisition of Land',
                'Cat' => '',
            ),
            288 => 
            array (
                'Item' => 3120101.0,
                'Description' => 'Maize and Beans',
                'MainItem' => 3120100,
                'MainDescription' => 'Acquisition of Strategic Stocks',
                'Cat' => '',
            ),
            289 => 
            array (
                'Item' => 3111504.0,
                'Description' => 'Other Infrastructure and Civil Works',
                'MainItem' => 3111500,
                'MainDescription' => 'Rehabilitation of Civil Works',
                'Cat' => '',
            ),
            290 => 
            array (
                'Item' => 3111503.0,
                'Description' => 'Aerodromes and Airstrips',
                'MainItem' => 3111500,
                'MainDescription' => 'Rehabilitation of Civil Works',
                'Cat' => '',
            ),
            291 => 
            array (
                'Item' => 3111502.0,
                'Description' => 'Water Supplies and Sewerage',
                'MainItem' => 3111500,
                'MainDescription' => 'Rehabilitation of Civil Works',
                'Cat' => '',
            ),
            292 => 
            array (
                'Item' => 3111501.0,
                'Description' => 'Bridges',
                'MainItem' => 3111500,
                'MainDescription' => 'Rehabilitation of Civil Works',
                'Cat' => '',
            ),
            293 => 
            array (
                'Item' => 3111404.0,
                'Description' => 'Research Allowance',
                'MainItem' => 3111400,
                'MainDescription' => '"Research,Feasibility Studies, Project Preparation and Design, Project Supervision"',
                'Cat' => '',
            ),
            294 => 
            array (
                'Item' => 3111403.0,
                'Description' => 'Research',
                'MainItem' => 3111400,
                'MainDescription' => '"Research,Feasibility Studies, Project Preparation and Design, Project Supervision"',
                'Cat' => '',
            ),
            295 => 
            array (
                'Item' => 3111402.0,
                'Description' => 'Engineering and Design Plans',
                'MainItem' => 3111400,
                'MainDescription' => '"Research,Feasibility Studies, Project Preparation and Design, Project Supervision"',
                'Cat' => '',
            ),
            296 => 
            array (
                'Item' => 3111401.0,
                'Description' => '"Pre-feasibility, Feasibility and Appraisal Studies"',
                'MainItem' => 3111400,
                'MainDescription' => '"Research,Feasibility Studies, Project Preparation and Design, Project Supervision"',
                'Cat' => '',
            ),
            297 => 
            array (
                'Item' => 3111304.0,
                'Description' => 'Purchase of Zoo Animals',
                'MainItem' => 3111300,
                'MainDescription' => '"Purchase of Certified Seeds, Breeding Stock and Live Animals"',
                'Cat' => '',
            ),
            298 => 
            array (
                'Item' => 3111303.0,
                'Description' => 'Purchase of Police Horses and Dogs',
                'MainItem' => 3111300,
                'MainDescription' => '"Purchase of Certified Seeds, Breeding Stock and Live Animals"',
                'Cat' => 'II',
            ),
            299 => 
            array (
                'Item' => 3111302.0,
                'Description' => 'Purchase of Animals and Breeding Stock',
                'MainItem' => 3111300,
                'MainDescription' => '"Purchase of Certified Seeds, Breeding Stock and Live Animals"',
                'Cat' => 'II',
            ),
            300 => 
            array (
                'Item' => 3111301.0,
                'Description' => 'Purchase of Certified Crop Seed',
                'MainItem' => 3111300,
                'MainDescription' => '"Purchase of Certified Seeds, Breeding Stock and Live Animals"',
                'Cat' => 'II',
            ),
            301 => 
            array (
                'Item' => 3111201.0,
                'Description' => '"Overhaul of Plant, Machinery and Equipment"',
                'MainItem' => 3111200,
                'MainDescription' => '"Rehabilitation and Renovation of Plant, Machinery and Equipment"',
                'Cat' => '',
            ),
            302 => 
            array (
                'Item' => 3111116.0,
                'Description' => 'Purchase of Graders',
                'MainItem' => 3111100,
                'MainDescription' => '"Purchase of Specialised Plant, Equipment and Machinery"',
                'Cat' => 'II',
            ),
            303 => 
            array (
                'Item' => 3111115.0,
                'Description' => 'Purchase of drilling Rig',
                'MainItem' => 3111100,
                'MainDescription' => '"Purchase of Specialised Plant, Equipment and Machinery"',
                'Cat' => 'II',
            ),
            304 => 
            array (
                'Item' => 3111114.0,
                'Description' => 'Purchase of Survey Equipment',
                'MainItem' => 3111100,
                'MainDescription' => '"Purchase of Specialised Plant, Equipment and Machinery"',
                'Cat' => 'II',
            ),
            305 => 
            array (
                'Item' => 3111113.0,
                'Description' => 'Purchase of Musical Instruments',
                'MainItem' => 3111100,
                'MainDescription' => '"Purchase of Specialised Plant, Equipment and Machinery"',
                'Cat' => 'II',
            ),
            306 => 
            array (
                'Item' => 3111112.0,
                'Description' => 'Purchase of Software',
                'MainItem' => 3111100,
                'MainDescription' => '"Purchase of Specialised Plant, Equipment and Machinery"',
                'Cat' => 'II',
            ),
            307 => 
            array (
                'Item' => 3111111.0,
                'Description' => 'Purchase of ICT networking and Communications Equipment',
                'MainItem' => 3111100,
                'MainDescription' => '"Purchase of Specialised Plant, Equipment and Machinery"',
                'Cat' => 'II',
            ),
            308 => 
            array (
                'Item' => 3111110.0,
                'Description' => 'Purchase of Generators',
                'MainItem' => 3111100,
                'MainDescription' => '"Purchase of Specialised Plant, Equipment and Machinery"',
                'Cat' => 'II',
            ),
            309 => 
            array (
                'Item' => 3111109.0,
                'Description' => 'Purchase of Educational Aids and Related Equipment',
                'MainItem' => 3111100,
                'MainDescription' => '"Purchase of Specialised Plant, Equipment and Machinery"',
                'Cat' => 'II',
            ),
            310 => 
            array (
                'Item' => 3111108.0,
                'Description' => 'Purchase of Police and Security Equipment',
                'MainItem' => 3111100,
                'MainDescription' => '"Purchase of Specialised Plant, Equipment and Machinery"',
                'Cat' => 'II',
            ),
            311 => 
            array (
                'Item' => 3111107.0,
                'Description' => 'Purchase of Laboratory Equipment',
                'MainItem' => 3111100,
                'MainDescription' => '"Purchase of Specialised Plant, Equipment and Machinery"',
                'Cat' => 'II',
            ),
            312 => 
            array (
                'Item' => 3111106.0,
                'Description' => 'Purchase of Firefighting Vehicles and Equipment',
                'MainItem' => 3111100,
                'MainDescription' => '"Purchase of Specialised Plant, Equipment and Machinery"',
                'Cat' => 'II',
            ),
            313 => 
            array (
                'Item' => 3111105.0,
                'Description' => 'Purchase of Navigational and Traffic Control Equipment',
                'MainItem' => 3111100,
                'MainDescription' => '"Purchase of Specialised Plant, Equipment and Machinery"',
                'Cat' => 'II',
            ),
            314 => 
            array (
                'Item' => 3111104.0,
                'Description' => 'Purchase of Instrumentation and Calibration Equipment',
                'MainItem' => 3111100,
                'MainDescription' => '"Purchase of Specialised Plant, Equipment and Machinery"',
                'Cat' => 'II',
            ),
            315 => 
            array (
                'Item' => 3111103.0,
                'Description' => 'Purchase of Agricultural Machinery and Equipment',
                'MainItem' => 3111100,
                'MainDescription' => '"Purchase of Specialised Plant, Equipment and Machinery"',
                'Cat' => 'II',
            ),
            316 => 
            array (
                'Item' => 3111102.0,
                'Description' => '"Purchase of Boilers, Refrigeration and Air-conditioning Plant"',
                'MainItem' => 3111100,
                'MainDescription' => '"Purchase of Specialised Plant, Equipment and Machinery"',
                'Cat' => 'II',
            ),
            317 => 
            array (
                'Item' => 3111101.0,
                'Description' => 'Purchase of Medical and Dental Equipment',
                'MainItem' => 3111100,
                'MainDescription' => '"Purchase of Specialised Plant, Equipment and Machinery"',
                'Cat' => 'II',
            ),
            318 => 
            array (
                'Item' => 3111009.0,
                'Description' => 'Purchase of other Office Equipment',
                'MainItem' => 3111000,
                'MainDescription' => 'Purchase of Office Furniture and General Equipment',
                'Cat' => 'II',
            ),
            319 => 
            array (
                'Item' => 3111008.0,
                'Description' => 'Purchase of Printing Equipment',
                'MainItem' => 3111000,
                'MainDescription' => 'Purchase of Office Furniture and General Equipment',
                'Cat' => 'II',
            ),
            320 => 
            array (
                'Item' => 3111006.0,
                'Description' => 'Purchase of Cash Boxes',
                'MainItem' => 3111000,
                'MainDescription' => 'Purchase of Office Furniture and General Equipment',
                'Cat' => 'II',
            ),
            321 => 
            array (
                'Item' => 3111005.0,
                'Description' => 'Purchase of Photocopiers',
                'MainItem' => 3111000,
                'MainDescription' => 'Purchase of Office Furniture and General Equipment',
                'Cat' => 'II',
            ),
            322 => 
            array (
                'Item' => 3111004.0,
                'Description' => 'Purchase of Exchanges and other Communications Equipment',
                'MainItem' => 3111000,
                'MainDescription' => 'Purchase of Office Furniture and General Equipment',
                'Cat' => 'II',
            ),
            323 => 
            array (
                'Item' => 3111003.0,
                'Description' => '"Purchase of Airconditionners, Fans and Heating Appliances"',
                'MainItem' => 3111000,
                'MainDescription' => 'Purchase of Office Furniture and General Equipment',
                'Cat' => 'II',
            ),
            324 => 
            array (
                'Item' => 3111002.0,
                'Description' => '"Purchase of Computers, Printers and other IT Equipment"',
                'MainItem' => 3111000,
                'MainDescription' => 'Purchase of Office Furniture and General Equipment',
                'Cat' => 'II',
            ),
            325 => 
            array (
                'Item' => 3111001.0,
                'Description' => 'Purchase of Office Furniture and Fittings',
                'MainItem' => 3111000,
                'MainDescription' => 'Purchase of Office Furniture and General Equipment',
                'Cat' => 'II',
            ),
            326 => 
            array (
                'Item' => 3110902.0,
                'Description' => 'Purchase of Household and Institutional Appliances',
                'MainItem' => 3110900,
                'MainDescription' => 'Purchase of Household Furniture and Institutional Equipment',
                'Cat' => 'II',
            ),
            327 => 
            array (
                'Item' => 3110901.0,
                'Description' => 'Purchase of Household and Institutional Furniture and Fittings',
                'MainItem' => 3110900,
                'MainDescription' => 'Purchase of Household Furniture and Institutional Equipment',
                'Cat' => 'II',
            ),
            328 => 
            array (
                'Item' => 3110803.0,
                'Description' => 'Overhaul of Boats',
                'MainItem' => 3110800,
                'MainDescription' => 'Overhaul of Vehicles and Other Transport Equipment',
                'Cat' => '',
            ),
            329 => 
            array (
                'Item' => 3110802.0,
                'Description' => 'Overhaul of Aircraft',
                'MainItem' => 3110800,
                'MainDescription' => 'Overhaul of Vehicles and Other Transport Equipment',
                'Cat' => '',
            ),
            330 => 
            array (
                'Item' => 3110801.0,
                'Description' => 'Overhaul of Vehicles',
                'MainItem' => 3110800,
                'MainDescription' => 'Overhaul of Vehicles and Other Transport Equipment',
                'Cat' => '',
            ),
            331 => 
            array (
                'Item' => 3110708.0,
                'Description' => 'Purchase of Minibuses and Buses',
                'MainItem' => 3110700,
                'MainDescription' => 'Purchase of Vehicles and Other Transport Equipment',
                'Cat' => 'II',
            ),
            332 => 
            array (
                'Item' => 3110707.0,
                'Description' => 'Purchase of Ambulances',
                'MainItem' => 3110700,
                'MainDescription' => 'Purchase of Vehicles and Other Transport Equipment',
                'Cat' => 'II',
            ),
            333 => 
            array (
                'Item' => 3110706.0,
                'Description' => 'Purchase of Tractors',
                'MainItem' => 3110700,
                'MainDescription' => 'Purchase of Vehicles and Other Transport Equipment',
                'Cat' => 'II',
            ),
            334 => 
            array (
                'Item' => 3110705.0,
                'Description' => 'Purchase of Trucks and Trailers',
                'MainItem' => 3110700,
                'MainDescription' => 'Purchase of Vehicles and Other Transport Equipment',
                'Cat' => 'II',
            ),
            335 => 
            array (
                'Item' => 3110704.0,
                'Description' => 'Purchase of Bicycles and Motorcycles',
                'MainItem' => 3110700,
                'MainDescription' => 'Purchase of Vehicles and Other Transport Equipment',
                'Cat' => 'II',
            ),
            336 => 
            array (
                'Item' => 3110703.0,
                'Description' => 'Purchase of Aircraft and Hopers',
                'MainItem' => 3110700,
                'MainDescription' => 'Purchase of Vehicles and Other Transport Equipment',
                'Cat' => '',
            ),
            337 => 
            array (
                'Item' => 3110702.0,
                'Description' => 'Purchase of Boats',
                'MainItem' => 3110700,
                'MainDescription' => 'Purchase of Vehicles and Other Transport Equipment',
                'Cat' => '',
            ),
            338 => 
            array (
                'Item' => 3110701.0,
                'Description' => 'Purchase of Motor Vehicles',
                'MainItem' => 3110700,
                'MainDescription' => 'Purchase of Vehicles and Other Transport Equipment',
                'Cat' => 'II',
            ),
            339 => 
            array (
                'Item' => 3110604.0,
                'Description' => 'Overhaul of Other Infrastructure and Civil Works',
                'MainItem' => 3110600,
                'MainDescription' => 'Overhaul and Refurbishment of Construction and Civil Works',
                'Cat' => '',
            ),
            340 => 
            array (
                'Item' => 3110603.0,
                'Description' => 'Overhaul and Refurbishment of Aerodromes and Airstrips',
                'MainItem' => 3110600,
                'MainDescription' => 'Overhaul and Refurbishment of Construction and Civil Works',
                'Cat' => '',
            ),
            341 => 
            array (
                'Item' => 3110602.0,
                'Description' => 'Overhaul of Water Supplies and Sewerage',
                'MainItem' => 3110600,
                'MainDescription' => 'Overhaul and Refurbishment of Construction and Civil Works',
                'Cat' => '',
            ),
            342 => 
            array (
                'Item' => 3110601.0,
                'Description' => 'Overhaul of Roads and Bridges',
                'MainItem' => 3110600,
                'MainDescription' => 'Overhaul and Refurbishment of Construction and Civil Works',
                'Cat' => '',
            ),
            343 => 
            array (
                'Item' => 3110505.0,
                'Description' => 'Sea Wall',
                'MainItem' => 3110500,
                'MainDescription' => 'Construction and Civil Works',
                'Cat' => '',
            ),
            344 => 
            array (
                'Item' => 3110504.0,
                'Description' => 'Other Infrastructure and Civil Works',
                'MainItem' => 3110500,
                'MainDescription' => 'Construction and Civil Works',
                'Cat' => 'I',
            ),
            345 => 
            array (
                'Item' => 3110503.0,
                'Description' => 'Aerodromes and Airstrips',
                'MainItem' => 3110500,
                'MainDescription' => 'Construction and Civil Works',
                'Cat' => '',
            ),
            346 => 
            array (
                'Item' => 3110502.0,
                'Description' => 'Water Supplies and Sewerage',
                'MainItem' => 3110500,
                'MainDescription' => 'Construction and Civil Works',
                'Cat' => 'Ic',
            ),
            347 => 
            array (
                'Item' => 3110501.0,
                'Description' => 'Bridges',
                'MainItem' => 3110500,
                'MainDescription' => 'Construction and Civil Works',
                'Cat' => '',
            ),
            348 => 
            array (
                'Item' => 3110402.0,
                'Description' => 'Access Roads',
                'MainItem' => 3110400,
                'MainDescription' => 'Construction of Roads',
                'Cat' => '',
            ),
            349 => 
            array (
                'Item' => 3110401.0,
                'Description' => 'Major Roads',
                'MainItem' => 3110400,
                'MainDescription' => 'Construction of Roads',
                'Cat' => '',
            ),
            350 => 
            array (
                'Item' => 3110303.0,
                'Description' => 'Refurbishment of Military Buildings with Potential Dual Use',
                'MainItem' => 3110300,
                'MainDescription' => 'Refurbishment of Buildings',
                'Cat' => '',
            ),
            351 => 
            array (
                'Item' => 3110302.0,
                'Description' => 'Refurbishment of Non-Residential Buildings',
                'MainItem' => 3110300,
                'MainDescription' => 'Refurbishment of Buildings',
                'Cat' => 'I',
            ),
            352 => 
            array (
                'Item' => 3110301.0,
                'Description' => 'Refurbishment of Residential Buildings',
                'MainItem' => 3110300,
                'MainDescription' => 'Refurbishment of Buildings',
                'Cat' => 'I',
            ),
            353 => 
            array (
                'Item' => 3110202.0,
            'Description' => '"Non-Residential Buildings (offices, schools, hospitals, etc..)"',
                'MainItem' => 3110200,
                'MainDescription' => 'Construction of Building',
                'Cat' => 'I',
            ),
            354 => 
            array (
                'Item' => 3110201.0,
            'Description' => 'Residential Buildings (including hostels)',
                'MainItem' => 3110200,
                'MainDescription' => 'Construction of Building',
                'Cat' => 'I',
            ),
            355 => 
            array (
                'Item' => 3110103.0,
                'Description' => 'Purchase of Military Buildings with Potential Dual Use',
                'MainItem' => 3110100,
                'MainDescription' => 'Purchase of Buildings',
                'Cat' => '',
            ),
            356 => 
            array (
                'Item' => 3110102.0,
                'Description' => 'Purchase of Non-Residential Buildings',
                'MainItem' => 3110100,
                'MainDescription' => 'Purchase of Buildings',
                'Cat' => '',
            ),
            357 => 
            array (
                'Item' => 3110101.0,
                'Description' => 'Purchase of Residential Buildings',
                'MainItem' => 3110100,
                'MainDescription' => 'Purchase of Buildings',
                'Cat' => '',
            ),
            358 => 
            array (
                'Item' => 2820204.0,
                'Description' => 'Agricultural Finance Company',
                'MainItem' => 2820200,
                'MainDescription' => 'Capital Transfer to Public Financial Institutions and Enterprises',
                'Cat' => '',
            ),
            359 => 
            array (
                'Item' => 2820203.0,
                'Description' => 'Post Office Bank',
                'MainItem' => 2820200,
                'MainDescription' => 'Capital Transfer to Public Financial Institutions and Enterprises',
                'Cat' => '',
            ),
            360 => 
            array (
                'Item' => 2820202.0,
                'Description' => 'Consolidated Bank of Kenya',
                'MainItem' => 2820200,
                'MainDescription' => 'Capital Transfer to Public Financial Institutions and Enterprises',
                'Cat' => '',
            ),
            361 => 
            array (
                'Item' => 2820201.0,
                'Description' => 'Long-Term Losses of Public Financial Institutions',
                'MainItem' => 2820200,
                'MainDescription' => 'Capital Transfer to Public Financial Institutions and Enterprises',
                'Cat' => '',
            ),
            362 => 
            array (
                'Item' => 2820105.0,
                'Description' => 'Kenya Meat Commission',
                'MainItem' => 2820100,
                'MainDescription' => 'Capital Transfer to Non Financial Public Enterprises',
                'Cat' => '',
            ),
            363 => 
            array (
                'Item' => 2820104.0,
                'Description' => 'National Oil Corporation of Kenya',
                'MainItem' => 2820100,
                'MainDescription' => 'Capital Transfer to Non Financial Public Enterprises',
                'Cat' => '',
            ),
            364 => 
            array (
                'Item' => 2820103.0,
                'Description' => 'Long-Term Losses of Public Enterprises',
                'MainItem' => 2820100,
                'MainDescription' => 'Capital Transfer to Non Financial Public Enterprises',
                'Cat' => '',
            ),
            365 => 
            array (
                'Item' => 2820102.0,
                'Description' => 'Kenya Ports Authority',
                'MainItem' => 2820100,
                'MainDescription' => 'Capital Transfer to Non Financial Public Enterprises',
                'Cat' => '',
            ),
            366 => 
            array (
                'Item' => 2820101.0,
                'Description' => 'Kenya Railways',
                'MainItem' => 2820100,
                'MainDescription' => 'Capital Transfer to Non Financial Public Enterprises',
                'Cat' => '',
            ),
            367 => 
            array (
                'Item' => 2810201.0,
                'Description' => 'Civil Contingency Reserves',
                'MainItem' => 2810200,
                'MainDescription' => 'Civil Contingency Reserves',
                'Cat' => '',
            ),
            368 => 
            array (
                'Item' => 2810101.0,
                'Description' => 'Budgetary Reserves',
                'MainItem' => 2810100,
                'MainDescription' => 'Budget Reserves',
                'Cat' => '',
            ),
            369 => 
            array (
                'Item' => 2720201.0,
                'Description' => 'Refund of Contributions to WCPS',
                'MainItem' => 2720200,
                'MainDescription' => 'Refund of Contributions to Other Pension Schemes',
                'Cat' => '',
            ),
            370 => 
            array (
                'Item' => 2720101.0,
                'Description' => 'Refund of Pension to UK government',
                'MainItem' => 2720100,
                'MainDescription' => 'Refund of Pension and Retirement Benefits to Other Governments',
                'Cat' => '',
            ),
            371 => 
            array (
                'Item' => 2710302.0,
                'Description' => 'Employer Social Benefits in Kind',
                'MainItem' => 2710300,
                'MainDescription' => 'Employer Social Benefits',
                'Cat' => '',
            ),
            372 => 
            array (
                'Item' => 2710301.0,
                'Description' => 'Employer Social Benefits in Cash',
                'MainItem' => 2710300,
                'MainDescription' => 'Employer Social Benefits',
                'Cat' => '',
            ),
            373 => 
            array (
                'Item' => 2710202.0,
                'Description' => 'Social Security Benefits in Kind',
                'MainItem' => 2710200,
                'MainDescription' => 'Social Security Benefits',
                'Cat' => '',
            ),
            374 => 
            array (
                'Item' => 2710201.0,
                'Description' => 'Social Security Benefits in Cash',
                'MainItem' => 2710200,
                'MainDescription' => 'Social Security Benefits',
                'Cat' => '',
            ),
            375 => 
            array (
                'Item' => 2710119.0,
                'Description' => 'Gratuity - Kenya Anti Corruption Commission',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            376 => 
            array (
                'Item' => 2710118.0,
                'Description' => 'Gratuity - Electoral Commision of Kenya',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            377 => 
            array (
                'Item' => 2710117.0,
                'Description' => 'Widows and Children\'s Pensions -Civil Servants',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            378 => 
            array (
                'Item' => 2710116.0,
                'Description' => 'Widows and Children - Military',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            379 => 
            array (
                'Item' => 2710115.0,
                'Description' => 'Refund Exgratia and Other Service Gratuities',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            380 => 
            array (
                'Item' => 2710114.0,
                'Description' => 'Refund of Contributions- Members of Parliament',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            381 => 
            array (
                'Item' => 2710113.0,
                'Description' => 'Quartely Injury - Military',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            382 => 
            array (
                'Item' => 2710112.0,
                'Description' => 'Pensions - Dependants',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            383 => 
            array (
                'Item' => 2710111.0,
                'Description' => 'NSSF Pensions',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            384 => 
            array (
                'Item' => 2710110.0,
                'Description' => 'Monthly Pension - Retired Presidents',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            385 => 
            array (
                'Item' => 2710109.0,
                'Description' => 'Monthly Pension - Military',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            386 => 
            array (
                'Item' => 2710108.0,
                'Description' => 'Monthly Pension - Members of Parliament',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            387 => 
            array (
                'Item' => 2710107.0,
                'Description' => 'Monthly Pension - Civil Servants',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            388 => 
            array (
                'Item' => 2710106.0,
                'Description' => 'Gratuity - Retired Presidents',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            389 => 
            array (
                'Item' => 2710105.0,
                'Description' => 'Gratuity - Ministers',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            390 => 
            array (
                'Item' => 2710104.0,
                'Description' => 'Gratuity - Military',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            391 => 
            array (
                'Item' => 2710103.0,
                'Description' => 'Gratuity - Members of Parliament',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            392 => 
            array (
                'Item' => 2710102.0,
                'Description' => 'Gratuity - Civil Servants',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            393 => 
            array (
                'Item' => 2710101.0,
                'Description' => 'Early Retirement',
                'MainItem' => 2710100,
                'MainDescription' => 'Government Pension and Retirement Benefits',
                'Cat' => '',
            ),
            394 => 
            array (
                'Item' => 2640503.0,
                'Description' => 'Other Capital Grants and Transfers',
                'MainItem' => 2640500,
                'MainDescription' => 'Other Capital Grants and Transfers',
                'Cat' => '',
            ),
            395 => 
            array (
                'Item' => 2640502.0,
                'Description' => 'Capital Transfers to Individuals and Households',
                'MainItem' => 2640500,
                'MainDescription' => 'Other Capital Grants and Transfers',
                'Cat' => '',
            ),
            396 => 
            array (
                'Item' => 2640501.0,
                'Description' => 'Capital Transfers to Non-Profit Organizations and Associations',
                'MainItem' => 2640500,
                'MainDescription' => 'Other Capital Grants and Transfers',
                'Cat' => '',
            ),
            397 => 
            array (
                'Item' => 2640403.0,
                'Description' => 'Burial Grants for Destitutes',
                'MainItem' => 2640400,
                'MainDescription' => '"Other Current Transfers, Grants and Subsidies"',
                'Cat' => '',
            ),
            398 => 
            array (
                'Item' => 2640402.0,
                'Description' => 'Donations',
                'MainItem' => 2640400,
                'MainDescription' => '"Other Current Transfers, Grants and Subsidies"',
                'Cat' => '',
            ),
            399 => 
            array (
                'Item' => 2640401.0,
                'Description' => 'Non-Profit Non - Governmental Organizations',
                'MainItem' => 2640400,
                'MainDescription' => '"Other Current Transfers, Grants and Subsidies"',
                'Cat' => '',
            ),
            400 => 
            array (
                'Item' => 2640301.0,
                'Description' => 'Ferry Services',
                'MainItem' => 2640300,
                'MainDescription' => '"Subsidies to Small Businesses, Cooperatives, and Self Employed"',
                'Cat' => '',
            ),
            401 => 
            array (
                'Item' => 2640203.0,
                'Description' => 'Drought Contigency',
                'MainItem' => 2640200,
                'MainDescription' => 'Emergency Relief and Refugee Assistance',
                'Cat' => '',
            ),
            402 => 
            array (
                'Item' => 2640202.0,
                'Description' => 'Food and Rations for Refugees',
                'MainItem' => 2640200,
                'MainDescription' => 'Emergency Relief and Refugee Assistance',
                'Cat' => '',
            ),
            403 => 
            array (
                'Item' => 2640201.0,
            'Description' => '"Emergency Relief (food, medicine, blankets, cash grant, tents and other temporary shelter etc.)"',
                'MainItem' => 2640200,
                'MainDescription' => 'Emergency Relief and Refugee Assistance',
                'Cat' => '',
            ),
            404 => 
            array (
                'Item' => 2640103.0,
                'Description' => 'Educational Allowance',
                'MainItem' => 2640100,
                'MainDescription' => 'Scholarships and other Educational Benefits',
                'Cat' => '',
            ),
            405 => 
            array (
                'Item' => 2640102.0,
                'Description' => 'Scholarships and other Educational Benefits -- Tertiary Education',
                'MainItem' => 2640100,
                'MainDescription' => 'Scholarships and other Educational Benefits',
                'Cat' => '',
            ),
            406 => 
            array (
                'Item' => 2640101.0,
                'Description' => 'Scholarships and other Educational Benefits -- Secondary Education',
                'MainItem' => 2640100,
                'MainDescription' => 'Scholarships and other Educational Benefits',
                'Cat' => '',
            ),
            407 => 
            array (
                'Item' => 2630203.0,
                'Description' => 'Capital Grants to Other levels of government',
                'MainItem' => 2630200,
                'MainDescription' => 'Capital Grants to Government Agencies and Other Levels of Government',
                'Cat' => '',
            ),
            408 => 
            array (
                'Item' => 2630202.0,
                'Description' => 'Capital Grants to Local Authorities',
                'MainItem' => 2630200,
                'MainDescription' => 'Capital Grants to Government Agencies and Other Levels of Government',
                'Cat' => '',
            ),
            409 => 
            array (
                'Item' => 2630201.0,
                'Description' => 'Capital Grants to Semi-Autonomous Government Agencies',
                'MainItem' => 2630200,
                'MainDescription' => 'Capital Grants to Government Agencies and Other Levels of Government',
                'Cat' => '',
            ),
            410 => 
            array (
                'Item' => 2630116.0,
                'Description' => 'Current Grants to Registration of Accountants Board',
                'MainItem' => 2630100,
                'MainDescription' => 'Current grants to government agencies and other levels of government',
                'Cat' => '',
            ),
            411 => 
            array (
                'Item' => 2630115.0,
                'Description' => 'Current Grants to State Corporations Tribunal TSC Tribunal',
                'MainItem' => 2630100,
                'MainDescription' => 'Current grants to government agencies and other levels of government',
                'Cat' => '',
            ),
            412 => 
            array (
                'Item' => 2630114.0,
                'Description' => 'Current grants to Policy HoldersCompensation Fund',
                'MainItem' => 2630100,
                'MainDescription' => 'Current grants to government agencies and other levels of government',
                'Cat' => '',
            ),
            413 => 
            array (
                'Item' => 2630113.0,
                'Description' => 'Grants to Privatization Commission',
                'MainItem' => 2630100,
                'MainDescription' => 'Current grants to government agencies and other levels of government',
                'Cat' => '',
            ),
            414 => 
            array (
                'Item' => 2630112.0,
                'Description' => 'Current Grants to TSC Tribunal',
                'MainItem' => 2630100,
                'MainDescription' => 'Current grants to government agencies and other levels of government',
                'Cat' => '',
            ),
            415 => 
            array (
                'Item' => 2630111.0,
                'Description' => 'Current Grants to National Steering Committee on Conflict',
                'MainItem' => 2630100,
                'MainDescription' => 'Current grants to government agencies and other levels of government',
                'Cat' => '',
            ),
            416 => 
            array (
                'Item' => 2630110.0,
                'Description' => 'Current Grants to Kenya Film Commission',
                'MainItem' => 2630100,
                'MainDescription' => 'Current grants to government agencies and other levels of government',
                'Cat' => '',
            ),
            417 => 
            array (
                'Item' => 2630109.0,
                'Description' => 'Current Grants to National Communications Tribunal',
                'MainItem' => 2630100,
                'MainDescription' => 'Current grants to government agencies and other levels of government',
                'Cat' => '',
            ),
            418 => 
            array (
                'Item' => 2630108.0,
                'Description' => 'Current Grants to Communication Appeals Tribunal',
                'MainItem' => 2630100,
                'MainDescription' => 'Current grants to government agencies and other levels of government',
                'Cat' => '',
            ),
            419 => 
            array (
                'Item' => 2630107.0,
                'Description' => 'Additional Cash Fund',
                'MainItem' => 2630100,
                'MainDescription' => 'Current grants to government agencies and other levels of government',
                'Cat' => '',
            ),
            420 => 
            array (
                'Item' => 2630106.0,
                'Description' => 'Grant to Retirement Benefits Authority',
                'MainItem' => 2630100,
                'MainDescription' => 'Current grants to government agencies and other levels of government',
                'Cat' => '',
            ),
            421 => 
            array (
                'Item' => 2630104.0,
                'Description' => 'Grant to Kenya Revenue Authority',
                'MainItem' => 2630100,
                'MainDescription' => 'Current grants to government agencies and other levels of government',
                'Cat' => '',
            ),
            422 => 
            array (
                'Item' => 2630103.0,
                'Description' => 'Boarding Expenses Low Cost Boarding Primary Schools',
                'MainItem' => 2630100,
                'MainDescription' => 'Current grants to government agencies and other levels of government',
                'Cat' => '',
            ),
            423 => 
            array (
                'Item' => 2630102.0,
                'Description' => 'Current Grants to Local Authorities - LATF',
                'MainItem' => 2630100,
                'MainDescription' => 'Current grants to government agencies and other levels of government',
                'Cat' => '',
            ),
            424 => 
            array (
                'Item' => 2630101.0,
                'Description' => 'Current Grants to Semi-Autonomous Government Agencies',
                'MainItem' => 2630100,
                'MainDescription' => 'Current grants to government agencies and other levels of government',
                'Cat' => '',
            ),
            425 => 
            array (
                'Item' => 2620189.0,
                'Description' => 'AHF',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            426 => 
            array (
                'Item' => 2620188.0,
                'Description' => 'Shelter Afrique',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            427 => 
            array (
                'Item' => 2620187.0,
                'Description' => 'African Intellectual Property Organization',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            428 => 
            array (
                'Item' => 2620186.0,
                'Description' => 'World Association of Debt Management Offices',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            429 => 
            array (
                'Item' => 2620185.0,
                'Description' => 'MEFMI',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            430 => 
            array (
                'Item' => 2620184.0,
                'Description' => 'Contribution to Other Parliamentary Associations',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            431 => 
            array (
                'Item' => 2620183.0,
                'Description' => 'Contribution to African Parliamentary Association',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            432 => 
            array (
                'Item' => 2620182.0,
                'Description' => 'Contribution to Commonwealth Parliamentary Association',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            433 => 
            array (
                'Item' => 2620181.0,
                'Description' => 'Contributions to Interpol',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            434 => 
            array (
                'Item' => 2620180.0,
                'Description' => 'Commonwealth Lawyers Association',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            435 => 
            array (
                'Item' => 2620179.0,
                'Description' => 'International Tribunal for the Law of the Sea',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            436 => 
            array (
                'Item' => 2620178.0,
                'Description' => 'International Court of Justice',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            437 => 
            array (
                'Item' => 2620177.0,
                'Description' => 'International Criminal Court',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            438 => 
            array (
                'Item' => 2620176.0,
                'Description' => 'World Intellectual Property Organisation',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            439 => 
            array (
                'Item' => 2620175.0,
                'Description' => 'World Meteorological Organisation',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            440 => 
            array (
                'Item' => 2620174.0,
                'Description' => 'UNESCO Centre for Science and Technology',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            441 => 
            array (
                'Item' => 2620173.0,
                'Description' => 'UN International Fund for Training and Research',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            442 => 
            array (
                'Item' => 2620172.0,
                'Description' => 'UN Fund for Development in Science and Technology',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            443 => 
            array (
                'Item' => 2620171.0,
            'Description' => 'UN Emergency Fund (Middle East)',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            444 => 
            array (
                'Item' => 2620170.0,
                'Description' => 'UN African Institute for Prevention of Crime',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            445 => 
            array (
                'Item' => 2620169.0,
                'Description' => 'UN Regular Budget',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            446 => 
            array (
                'Item' => 2620168.0,
                'Description' => 'UNFPA and Regional Institute for Population Studies',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            447 => 
            array (
                'Item' => 2620167.0,
                'Description' => 'United Nations Industrial Development Fund',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            448 => 
            array (
                'Item' => 2620166.0,
                'Description' => 'UN Voluntary Fund for Victims of Torture',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            449 => 
            array (
                'Item' => 2620165.0,
                'Description' => 'UN Missions',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            450 => 
            array (
                'Item' => 2620164.0,
                'Description' => 'UNDP Fund',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            451 => 
            array (
                'Item' => 2620163.0,
                'Description' => 'UN Habitat and Human Settlement',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            452 => 
            array (
                'Item' => 2620162.0,
                'Description' => 'INTOSAI',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            453 => 
            array (
                'Item' => 2620161.0,
                'Description' => 'Supreme Sports Council of Africa',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            454 => 
            array (
                'Item' => 2620160.0,
            'Description' => '"Statutory Organisations (IOTC, SW10, INFO)"',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            455 => 
            array (
                'Item' => 2620159.0,
                'Description' => 'Rehabilitation International',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            456 => 
            array (
                'Item' => 2620158.0,
                'Description' => 'Organisation of African Union Secretariat',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            457 => 
            array (
                'Item' => 2620157.0,
                'Description' => 'Nile Basin Initiative',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            458 => 
            array (
                'Item' => 2620156.0,
                'Description' => 'NEPAD Africa’s Contribution',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            459 => 
            array (
                'Item' => 2620155.0,
                'Description' => 'NCST',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            460 => 
            array (
                'Item' => 2620154.0,
                'Description' => 'MIGA',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            461 => 
            array (
                'Item' => 2620153.0,
                'Description' => 'Lake Victoria Fisheries Organisation',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            462 => 
            array (
                'Item' => 2620152.0,
                'Description' => 'IMF',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            463 => 
            array (
                'Item' => 2620151.0,
                'Description' => 'Institute of International and Comparative Law',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            464 => 
            array (
                'Item' => 2620150.0,
                'Description' => 'International Olympic Commission',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            465 => 
            array (
                'Item' => 2620149.0,
                'Description' => 'International Red Locust Control Organisation for Central and Southern Afri',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            466 => 
            array (
                'Item' => 2620148.0,
            'Description' => 'International Maritime Organisation (IMO)',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            467 => 
            array (
                'Item' => 2620147.0,
            'Description' => 'International Civil Aviation Organisation (ICAO)',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            468 => 
            array (
                'Item' => 2620146.0,
                'Description' => 'International Centre for Insect Physiology and Ecology',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            469 => 
            array (
                'Item' => 2620145.0,
                'Description' => 'International Centre for Cinema and Television',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            470 => 
            array (
                'Item' => 2620144.0,
            'Description' => 'Inter-Governmental Standing Commission on Shipping (ISCOS)',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            471 => 
            array (
                'Item' => 2620143.0,
                'Description' => 'International Water Supply Association',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            472 => 
            array (
                'Item' => 2620142.0,
                'Description' => 'International Seed Testing Association',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            473 => 
            array (
                'Item' => 2620141.0,
                'Description' => 'International Organisations',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            474 => 
            array (
                'Item' => 2620140.0,
                'Description' => 'International Organisation of Legal Metrology',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            475 => 
            array (
                'Item' => 2620139.0,
                'Description' => 'International Organisation – UNESCO',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            476 => 
            array (
                'Item' => 2620138.0,
                'Description' => '"International Labour Organisation, ARLAC and International Organisation f"',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            477 => 
            array (
                'Item' => 2620137.0,
                'Description' => 'International Institute of Molecular and Cellular Biology',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            478 => 
            array (
                'Item' => 2620136.0,
                'Description' => 'International Fund for Agricultural Development',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            479 => 
            array (
                'Item' => 2620135.0,
                'Description' => 'International Commission on Irrigation',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            480 => 
            array (
                'Item' => 2620134.0,
                'Description' => 'International Wildlife Agencies',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            481 => 
            array (
                'Item' => 2620133.0,
                'Description' => 'International Bar Association',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            482 => 
            array (
                'Item' => 2620132.0,
                'Description' => 'IGAD',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            483 => 
            array (
                'Item' => 2620131.0,
                'Description' => 'IBRD',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            484 => 
            array (
                'Item' => 2620130.0,
                'Description' => 'IAEA',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            485 => 
            array (
                'Item' => 2620129.0,
            'Description' => 'Group of Fifteen (G15)',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            486 => 
            array (
                'Item' => 2620128.0,
                'Description' => 'GATT/World Trade Organisation',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            487 => 
            array (
                'Item' => 2620127.0,
                'Description' => 'G77 Development Bank',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            488 => 
            array (
                'Item' => 2620126.0,
                'Description' => 'FAO/Desert Locust International Trust Fund',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            489 => 
            array (
                'Item' => 2620125.0,
                'Description' => 'Eastern and Southern African Trade',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            490 => 
            array (
                'Item' => 2620124.0,
                'Description' => 'Eastern and Southern African Management Institute',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            491 => 
            array (
                'Item' => 2620123.0,
            'Description' => 'East African Legislative Assembly (Parliament)',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            492 => 
            array (
                'Item' => 2620122.0,
                'Description' => 'East African Court of Justice',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            493 => 
            array (
                'Item' => 2620121.0,
                'Description' => 'East African Community Secretariat',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            494 => 
            array (
                'Item' => 2620120.0,
                'Description' => 'Eastern and Southern Africa Anti-Money Laundering Group',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            495 => 
            array (
                'Item' => 2620119.0,
                'Description' => 'Commonwealth Technical Assistance Fund',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            496 => 
            array (
                'Item' => 2620118.0,
                'Description' => 'Commonwealth Secretariat',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            497 => 
            array (
                'Item' => 2620117.0,
                'Description' => 'Commonwealth Scientific Committee',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            498 => 
            array (
                'Item' => 2620116.0,
                'Description' => 'Commonwealth Region Health Community Secretariat',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            499 => 
            array (
                'Item' => 2620115.0,
                'Description' => 'Commonwealth Foundation',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
        ));
        DB::table('expense_items')->insert(array (
            0 => 
            array (
                'Item' => 2620114.0,
                'Description' => 'Consultative Group of International Agriculture Research',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            1 => 
            array (
                'Item' => 2620113.0,
            'Description' => 'Commonwealth of Learning (COL)',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            2 => 
            array (
                'Item' => 2620112.0,
            'Description' => 'Commonwealth Air Transport Council (CATC)',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            3 => 
            array (
                'Item' => 2620111.0,
                'Description' => 'COMESA',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            4 => 
            array (
                'Item' => 2620110.0,
                'Description' => 'Asian-African Legal Consultative Organization',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            5 => 
            array (
                'Item' => 2620109.0,
                'Description' => 'ARCEDEM',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            6 => 
            array (
                'Item' => 2620108.0,
                'Description' => 'African Regional Centre for Technology',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            7 => 
            array (
                'Item' => 2620107.0,
                'Description' => 'African Institute for Higher Technical Training and Research',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            8 => 
            array (
                'Item' => 2620106.0,
                'Description' => 'African Institute for Economic Development and Planning',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            9 => 
            array (
                'Item' => 2620105.0,
            'Description' => 'African Civil Aviation Commission (AFCAC)',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            10 => 
            array (
                'Item' => 2620104.0,
                'Description' => 'African Caribbean and Pacific Group of States Secretariat',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            11 => 
            array (
                'Item' => 2620103.0,
            'Description' => 'African Association of Public Administration (AAPAM)/CAAPAM/CLGF',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            12 => 
            array (
                'Item' => 2620102.0,
                'Description' => 'African Centre for Meteorological Applications for Development',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            13 => 
            array (
                'Item' => 2620101.0,
            'Description' => 'Africa Capacity Building Foundation (ACBF)',
                'MainItem' => 2620100,
                'MainDescription' => '"Membership Fees and Dues, and Subscriptions to International Organizations"',
                'Cat' => '',
            ),
            14 => 
            array (
                'Item' => 2520201.0,
                'Description' => 'Subsidies to Financial Private Enterprises',
                'MainItem' => 2520200,
                'MainDescription' => 'Subsidies to Financial Private Enterprises',
                'Cat' => '',
            ),
            15 => 
            array (
                'Item' => 2510106.0,
                'Description' => 'Kenya Broadcasting Corporation',
                'MainItem' => 2510100,
                'MainDescription' => 'Subsidies to Non-Financial Public Enterprises',
                'Cat' => '',
            ),
            16 => 
            array (
                'Item' => 2510105.0,
                'Description' => 'Cereals Board',
                'MainItem' => 2510100,
                'MainDescription' => 'Subsidies to Non-Financial Public Enterprises',
                'Cat' => '',
            ),
            17 => 
            array (
                'Item' => 2510104.0,
                'Description' => 'Kenya Electricity Generating Company',
                'MainItem' => 2510100,
                'MainDescription' => 'Subsidies to Non-Financial Public Enterprises',
                'Cat' => '',
            ),
            18 => 
            array (
                'Item' => 2510103.0,
                'Description' => 'Sugar Industries',
                'MainItem' => 2510100,
                'MainDescription' => 'Subsidies to Non-Financial Public Enterprises',
                'Cat' => '',
            ),
            19 => 
            array (
                'Item' => 2510102.0,
                'Description' => 'Tana River Development Authority',
                'MainItem' => 2510100,
                'MainDescription' => 'Subsidies to Non-Financial Public Enterprises',
                'Cat' => '',
            ),
            20 => 
            array (
                'Item' => 2510101.0,
                'Description' => 'National Irrigation Board',
                'MainItem' => 2510100,
                'MainDescription' => 'Subsidies to Non-Financial Public Enterprises',
                'Cat' => '',
            ),
            21 => 
            array (
                'Item' => 2430103.0,
                'Description' => 'Retirements Benefits Authority',
                'MainItem' => 2430100,
                'MainDescription' => 'General Government',
                'Cat' => '',
            ),
            22 => 
            array (
                'Item' => 2430102.0,
                'Description' => 'National Social Security Fund',
                'MainItem' => 2430100,
                'MainDescription' => 'General Government',
                'Cat' => '',
            ),
            23 => 
            array (
                'Item' => 2430101.0,
                'Description' => 'National Health Insurance Fund',
                'MainItem' => 2430100,
                'MainDescription' => 'General Government',
                'Cat' => '',
            ),
            24 => 
            array (
                'Item' => 2420501.0,
                'Description' => 'Interest on Domestic Guaranteed Debt Taken Over',
                'MainItem' => 2420500,
                'MainDescription' => 'Interest Payments on Guaranteed Debt Taken over by Government',
                'Cat' => '',
            ),
            25 => 
            array (
                'Item' => 2420403.0,
                'Description' => 'Households and Individuals',
                'MainItem' => 2420400,
                'MainDescription' => 'Other Creditors',
                'Cat' => '',
            ),
            26 => 
            array (
                'Item' => 2420402.0,
                'Description' => 'Private Enterprises',
                'MainItem' => 2420400,
                'MainDescription' => 'Other Creditors',
                'Cat' => '',
            ),
            27 => 
            array (
                'Item' => 2420401.0,
                'Description' => 'Public Enterprises',
                'MainItem' => 2420400,
                'MainDescription' => 'Other Creditors',
                'Cat' => '',
            ),
            28 => 
            array (
                'Item' => 2420303.0,
                'Description' => 'Loans and Other Instruments',
                'MainItem' => 2420300,
                'MainDescription' => 'Other Financial Institutions',
                'Cat' => '',
            ),
            29 => 
            array (
                'Item' => 2420302.0,
                'Description' => 'Long-term Securities and Bonds',
                'MainItem' => 2420300,
                'MainDescription' => 'Other Financial Institutions',
                'Cat' => '',
            ),
            30 => 
            array (
                'Item' => 2420301.0,
                'Description' => 'Short-term Treasury Bills',
                'MainItem' => 2420300,
                'MainDescription' => 'Other Financial Institutions',
                'Cat' => '',
            ),
            31 => 
            array (
                'Item' => 2420203.0,
                'Description' => 'Loans and Other Instruments',
                'MainItem' => 2420200,
            'MainDescription' => 'Other Depository Corporations (Commercial Banks)',
                'Cat' => '',
            ),
            32 => 
            array (
                'Item' => 2420202.0,
                'Description' => 'Long-term Securities and Bonds',
                'MainItem' => 2420200,
            'MainDescription' => 'Other Depository Corporations (Commercial Banks)',
                'Cat' => '',
            ),
            33 => 
            array (
                'Item' => 2420201.0,
                'Description' => 'Short-term Treasury Bills',
                'MainItem' => 2420200,
            'MainDescription' => 'Other Depository Corporations (Commercial Banks)',
                'Cat' => '',
            ),
            34 => 
            array (
                'Item' => 2420104.0,
                'Description' => 'Interest on IMF Loans',
                'MainItem' => 2420100,
            'MainDescription' => 'Monetary Authorities (Central Bank)',
                'Cat' => '',
            ),
            35 => 
            array (
                'Item' => 2420103.0,
                'Description' => 'Overdraft',
                'MainItem' => 2420100,
            'MainDescription' => 'Monetary Authorities (Central Bank)',
                'Cat' => '',
            ),
            36 => 
            array (
                'Item' => 2420102.0,
                'Description' => 'Long-term Securities and Bonds',
                'MainItem' => 2420100,
            'MainDescription' => 'Monetary Authorities (Central Bank)',
                'Cat' => '',
            ),
            37 => 
            array (
                'Item' => 2420101.0,
                'Description' => 'Short-term Treasury Bills',
                'MainItem' => 2420100,
            'MainDescription' => 'Monetary Authorities (Central Bank)',
                'Cat' => '',
            ),
            38 => 
            array (
                'Item' => 2410201.0,
                'Description' => 'Interest on Foreign Guaranteed Debt Taken Over',
                'MainItem' => 2410200,
                'MainDescription' => 'Interest Payments on Guaranteed Debt Taken over by Government',
                'Cat' => '',
            ),
            39 => 
            array (
                'Item' => 2410105.0,
                'Description' => 'Assumed Guarantees on Foreign Debt',
                'MainItem' => 2410100,
                'MainDescription' => 'Interest Payments on Foreign Borrowing',
                'Cat' => '',
            ),
            40 => 
            array (
                'Item' => 2410104.0,
                'Description' => 'Suppliers credits',
                'MainItem' => 2410100,
                'MainDescription' => 'Interest Payments on Foreign Borrowing',
                'Cat' => '',
            ),
            41 => 
            array (
                'Item' => 2410103.0,
                'Description' => 'Financial Corporations and other International Financial Institutions',
                'MainItem' => 2410100,
                'MainDescription' => 'Interest Payments on Foreign Borrowing',
                'Cat' => '',
            ),
            42 => 
            array (
                'Item' => 2410102.0,
                'Description' => 'International Organizations',
                'MainItem' => 2410100,
                'MainDescription' => 'Interest Payments on Foreign Borrowing',
                'Cat' => '',
            ),
            43 => 
            array (
                'Item' => 2410101.0,
                'Description' => 'Foreign Governments',
                'MainItem' => 2410100,
                'MainDescription' => 'Interest Payments on Foreign Borrowing',
                'Cat' => '',
            ),
            44 => 
            array (
                'Item' => 2230102.0,
                'Description' => 'Foreign exchange rate loss',
                'MainItem' => 2230100,
                'MainDescription' => 'Exchange Rates Losses',
                'Cat' => '',
            ),
            45 => 
            array (
                'Item' => 2230101.0,
                'Description' => 'Domestic exchange loss',
                'MainItem' => 2230100,
                'MainDescription' => 'Exchange Rates Losses',
                'Cat' => '',
            ),
            46 => 
            array (
                'Item' => 2220212.0,
                'Description' => 'Maintenance of Communications Equipment',
                'MainItem' => 2220200,
                'MainDescription' => 'Routine Maintenance - Other Assets',
                'Cat' => 'Vib',
            ),
            47 => 
            array (
                'Item' => 2220211.0,
                'Description' => 'Maintenance of Police and Security Equipment',
                'MainItem' => 2220200,
                'MainDescription' => 'Routine Maintenance - Other Assets',
                'Cat' => '',
            ),
            48 => 
            array (
                'Item' => 2220210.0,
                'Description' => '"Maintenance of Computers, Software, and Networks"',
                'MainItem' => 2220200,
                'MainDescription' => 'Routine Maintenance - Other Assets',
                'Cat' => 'Vib',
            ),
            49 => 
            array (
                'Item' => 2220209.0,
                'Description' => 'Minor Alterations to Buildings and Civil Works',
                'MainItem' => 2220200,
                'MainDescription' => 'Routine Maintenance - Other Assets',
                'Cat' => '',
            ),
            50 => 
            array (
                'Item' => 2220208.0,
                'Description' => 'Maintenance of Aerodromes and Airstrips',
                'MainItem' => 2220200,
                'MainDescription' => 'Routine Maintenance - Other Assets',
                'Cat' => 'Vc',
            ),
            51 => 
            array (
                'Item' => 2220207.0,
                'Description' => '"Maintenance of Roads, Ports and Jetties"',
                'MainItem' => 2220200,
                'MainDescription' => 'Routine Maintenance - Other Assets',
                'Cat' => 'Vc',
            ),
            52 => 
            array (
                'Item' => 2220206.0,
                'Description' => 'Maintenance of Civil Works',
                'MainItem' => 2220200,
                'MainDescription' => 'Routine Maintenance - Other Assets',
                'Cat' => 'Vib',
            ),
            53 => 
            array (
                'Item' => 2220205.0,
                'Description' => 'Maintenance of Buildings and Stations -- Non-Residential',
                'MainItem' => 2220200,
                'MainDescription' => 'Routine Maintenance - Other Assets',
                'Cat' => 'Vc',
            ),
            54 => 
            array (
                'Item' => 2220204.0,
                'Description' => 'Maintenance of Buildings -- Residential',
                'MainItem' => 2220200,
                'MainDescription' => 'Routine Maintenance - Other Assets',
                'Cat' => 'Vc',
            ),
            55 => 
            array (
                'Item' => 2220203.0,
                'Description' => 'Maintenance of Medical and Dental Equipment',
                'MainItem' => 2220200,
                'MainDescription' => 'Routine Maintenance - Other Assets',
                'Cat' => 'Vc',
            ),
            56 => 
            array (
                'Item' => 2220202.0,
                'Description' => 'Maintenance of Office Furniture and Equipment',
                'MainItem' => 2220200,
                'MainDescription' => 'Routine Maintenance - Other Assets',
                'Cat' => 'Vc',
            ),
            57 => 
            array (
                'Item' => 2220201.0,
            'Description' => '"Maintenance of Plant, Machinery and Equipment (including lifts)"',
                'MainItem' => 2220200,
                'MainDescription' => 'Routine Maintenance - Other Assets',
                'Cat' => 'Vib',
            ),
            58 => 
            array (
                'Item' => 2220103.0,
                'Description' => 'Maintenance Expenses - Boats and Ferries',
                'MainItem' => 2220100,
                'MainDescription' => 'Routine Maintenance- Vehicles and other Transport Equipment',
                'Cat' => '',
            ),
            59 => 
            array (
                'Item' => 2220102.0,
                'Description' => 'Maintenance Expenses - Aircraft',
                'MainItem' => 2220100,
                'MainDescription' => 'Routine Maintenance- Vehicles and other Transport Equipment',
                'Cat' => '',
            ),
            60 => 
            array (
                'Item' => 2220101.0,
                'Description' => 'Maintenance Expenses - Motor Vehicles',
                'MainItem' => 2220100,
                'MainDescription' => 'Routine Maintenance- Vehicles and other Transport Equipment',
                'Cat' => 'Vib',
            ),
            61 => 
            array (
                'Item' => 2211324.0,
                'Description' => 'Registration of Land',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            62 => 
            array (
                'Item' => 2211323.0,
                'Description' => 'Laundry Expenses',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            63 => 
            array (
                'Item' => 2211322.0,
                'Description' => 'Binding of Records',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            64 => 
            array (
                'Item' => 2211321.0,
                'Description' => 'Parking charges',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            65 => 
            array (
                'Item' => 2211320.0,
                'Description' => 'Temporary Committees Expenses',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            66 => 
            array (
                'Item' => 2211319.0,
                'Description' => 'Fertilizer clearance',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            67 => 
            array (
                'Item' => 2211318.0,
                'Description' => 'Witness Expenses',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            68 => 
            array (
                'Item' => 2211317.0,
                'Description' => 'Witness allowances',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            69 => 
            array (
                'Item' => 2211316.0,
                'Description' => 'Domestic Cash Write Offs',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            70 => 
            array (
                'Item' => 2211315.0,
                'Description' => 'Foreign Cash Write Offs',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            71 => 
            array (
                'Item' => 2211314.0,
                'Description' => 'Write Offs/ Bad Debt Expenses from Previous Years',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            72 => 
            array (
                'Item' => 2211313.0,
                'Description' => 'Security Operations',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            73 => 
            array (
                'Item' => 2211312.0,
                'Description' => 'Confidential Expenditures',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            74 => 
            array (
                'Item' => 2211311.0,
                'Description' => 'Contracted Technical Services',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => 'IV',
            ),
            75 => 
            array (
                'Item' => 2211310.0,
                'Description' => 'Contracted Professional Services',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => 'IV',
            ),
            76 => 
            array (
                'Item' => 2211309.0,
                'Description' => 'Management Fees',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            77 => 
            array (
                'Item' => 2211308.0,
                'Description' => '"Legal Dues/fees, Arbitration and Compensation Payments"',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            78 => 
            array (
                'Item' => 2211307.0,
            'Description' => '"Transport Costs and Charges ( freight, loading/unloading, clearing and shipping charges)"',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            79 => 
            array (
                'Item' => 2211306.0,
                'Description' => '"Membership Fees, Dues and Subscriptions to Professional and Trade Bodies"',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => 'IIIa',
            ),
            80 => 
            array (
                'Item' => 2211305.0,
                'Description' => 'Contracted Guards and Cleaning Services',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => 'Vib',
            ),
            81 => 
            array (
                'Item' => 2211304.0,
                'Description' => 'Medical Expenses',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            82 => 
            array (
                'Item' => 2211303.0,
                'Description' => 'Inmate Allowance',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            83 => 
            array (
                'Item' => 2211302.0,
                'Description' => 'School Examination and Invigilation Fees',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => '',
            ),
            84 => 
            array (
                'Item' => 2211301.0,
                'Description' => 'Bank Service Commission and Charges',
                'MainItem' => 2211300,
                'MainDescription' => 'Other Operating Expenses',
                'Cat' => 'Vib',
            ),
            85 => 
            array (
                'Item' => 2211204.0,
            'Description' => '"Other Fuels (wood, charcoal, cooking gas etc…)"',
                'MainItem' => 2211200,
                'MainDescription' => 'Fuel Oil and Lubricants',
                'Cat' => '',
            ),
            86 => 
            array (
                'Item' => 2211203.0,
                'Description' => 'Refined Fuels and Lubricants -- Other',
                'MainItem' => 2211200,
                'MainDescription' => 'Fuel Oil and Lubricants',
                'Cat' => '',
            ),
            87 => 
            array (
                'Item' => 2211202.0,
                'Description' => 'Refined Fuels and Lubricants for Production',
                'MainItem' => 2211200,
                'MainDescription' => 'Fuel Oil and Lubricants',
                'Cat' => 'Vc',
            ),
            88 => 
            array (
                'Item' => 2211201.0,
                'Description' => 'Refined Fuels and Lubricants for Transport',
                'MainItem' => 2211200,
                'MainDescription' => 'Fuel Oil and Lubricants',
                'Cat' => 'IIIa',
            ),
            89 => 
            array (
                'Item' => 2211103.0,
                'Description' => '"Sanitary and Cleaning Materials, Supplies and Services"',
                'MainItem' => 2211100,
                'MainDescription' => 'Office and General Supplies and Services',
                'Cat' => 'Vib',
            ),
            90 => 
            array (
                'Item' => 2211102.0,
                'Description' => 'Supplies and Accessories for Computers and Printers',
                'MainItem' => 2211100,
                'MainDescription' => 'Office and General Supplies and Services',
                'Cat' => 'II',
            ),
            91 => 
            array (
                'Item' => 2211101.0,
            'Description' => '"General Office Supplies (papers, pencils, forms, small office equipment etc)"',
                'MainItem' => 2211100,
                'MainDescription' => 'Office and General Supplies and Services',
                'Cat' => 'Vib',
            ),
            92 => 
            array (
                'Item' => 2211028.0,
                'Description' => 'Purchase of X-Rays Supplies',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => '',
            ),
            93 => 
            array (
                'Item' => 2211027.0,
                'Description' => 'Maintenance of Police Animals',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => '',
            ),
            94 => 
            array (
                'Item' => 2211026.0,
                'Description' => 'Purchase of Vaccines and Sera',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => '',
            ),
            95 => 
            array (
                'Item' => 2211025.0,
                'Description' => 'Purchase of Voter Registration materials- Lamination Pouches',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => '',
            ),
            96 => 
            array (
                'Item' => 2211024.0,
                'Description' => '"Purchase of Election materials- Ballot Boxes, Polling Booths, Secutiry Rivets and Security Seals"',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => '',
            ),
            97 => 
            array (
                'Item' => 2211023.0,
                'Description' => 'Supplies for Production',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => 'II',
            ),
            98 => 
            array (
                'Item' => 2211022.0,
                'Description' => 'Supplies for Women Inmates',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => '',
            ),
            99 => 
            array (
                'Item' => 2211021.0,
                'Description' => 'Purchase of Bedding and Linen',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => '',
            ),
            100 => 
            array (
                'Item' => 2211020.0,
                'Description' => 'Uniform and Clothing Allowances',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => '',
            ),
            101 => 
            array (
                'Item' => 2211019.0,
                'Description' => 'Purchase of Uniforms and Clothing - Patients',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => '',
            ),
            102 => 
            array (
                'Item' => 2211018.0,
                'Description' => 'Purchase of Uniforms and Clothing - Trainees',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => '',
            ),
            103 => 
            array (
                'Item' => 2211017.0,
                'Description' => 'Purchase of Uniforms and Clothing - Inmates',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => '',
            ),
            104 => 
            array (
                'Item' => 2211016.0,
                'Description' => 'Purchase of Uniforms and Clothing - Staff',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => 'II',
            ),
            105 => 
            array (
                'Item' => 2211015.0,
                'Description' => 'Food and Rations',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => 'II',
            ),
            106 => 
            array (
                'Item' => 2211014.0,
                'Description' => 'Barracks and other Military Purpose Buildings and Constructions',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => '',
            ),
            107 => 
            array (
                'Item' => 2211013.0,
                'Description' => 'Military and Security Supplies and Equipment',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => '',
            ),
            108 => 
            array (
                'Item' => 2211012.0,
                'Description' => '"Purchase of Police, Prisons, and NYS Small Equipment and Supplies"',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => '',
            ),
            109 => 
            array (
                'Item' => 2211011.0,
                'Description' => 'Purchase/Production of Photographic and Audio-Visual Materials',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => 'II',
            ),
            110 => 
            array (
                'Item' => 2211010.0,
                'Description' => 'Supplies for Broadcasting and Information Services',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => '',
            ),
            111 => 
            array (
                'Item' => 2211009.0,
                'Description' => 'Education and Library Supplies',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => 'II',
            ),
            112 => 
            array (
                'Item' => 2211008.0,
                'Description' => '"Laboratory Materials, Supplies and Small Equipment"',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => 'II',
            ),
            113 => 
            array (
                'Item' => 2211007.0,
                'Description' => '"Agricultural Materials, Supplies and Small Equipment"',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => 'II',
            ),
            114 => 
            array (
                'Item' => 2211006.0,
                'Description' => '"Purchase of Workshop Tools, Spares and Small Equipment"',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => 'II',
            ),
            115 => 
            array (
                'Item' => 2211005.0,
                'Description' => 'Chemicals and Industrial Gases',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => 'II',
            ),
            116 => 
            array (
                'Item' => 2211004.0,
                'Description' => '"Fungicides, Insecticides and Sprays"',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => 'II',
            ),
            117 => 
            array (
                'Item' => 2211003.0,
                'Description' => 'Veterinarian Supplies and Materials',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => 'II',
            ),
            118 => 
            array (
                'Item' => 2211002.0,
                'Description' => 'Dressings and Other Non-Pharmaceutical Medical Items',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => 'II',
            ),
            119 => 
            array (
                'Item' => 2211001.0,
                'Description' => 'Medical Drugs',
                'MainItem' => 2211000,
                'MainDescription' => 'Specialised Materials and Supplies',
                'Cat' => 'II',
            ),
            120 => 
            array (
                'Item' => 2210910.0,
                'Description' => 'Medical Insurance',
                'MainItem' => 2210900,
                'MainDescription' => 'Insurance Costs',
                'Cat' => '',
            ),
            121 => 
            array (
                'Item' => 2210909.0,
                'Description' => 'Insurance of Spare Parts',
                'MainItem' => 2210900,
                'MainDescription' => 'Insurance Costs',
                'Cat' => '',
            ),
            122 => 
            array (
                'Item' => 2210908.0,
                'Description' => 'Insurance of Exibits',
                'MainItem' => 2210900,
                'MainDescription' => 'Insurance Costs',
                'Cat' => '',
            ),
            123 => 
            array (
                'Item' => 2210907.0,
                'Description' => 'Insurance for cash',
                'MainItem' => 2210900,
                'MainDescription' => 'Insurance Costs',
                'Cat' => '',
            ),
            124 => 
            array (
                'Item' => 2210906.0,
                'Description' => 'Insurance for Board Members',
                'MainItem' => 2210900,
                'MainDescription' => 'Insurance Costs',
                'Cat' => '',
            ),
            125 => 
            array (
                'Item' => 2210905.0,
                'Description' => '"Aircraft, Boats and Other Transport Equipment Insurance"',
                'MainItem' => 2210900,
                'MainDescription' => 'Insurance Costs',
                'Cat' => 'Vib',
            ),
            126 => 
            array (
                'Item' => 2210904.0,
                'Description' => 'Motor Vehicle Insurance',
                'MainItem' => 2210900,
                'MainDescription' => 'Insurance Costs',
                'Cat' => '',
            ),
            127 => 
            array (
                'Item' => 2210903.0,
                'Description' => '"Plant, Equipment and Machinery Insurance"',
                'MainItem' => 2210900,
                'MainDescription' => 'Insurance Costs',
                'Cat' => '',
            ),
            128 => 
            array (
                'Item' => 2210902.0,
                'Description' => 'Buildings Insurance',
                'MainItem' => 2210900,
                'MainDescription' => 'Insurance Costs',
                'Cat' => '',
            ),
            129 => 
            array (
                'Item' => 2210901.0,
                'Description' => 'Group Personal Insurance',
                'MainItem' => 2210900,
                'MainDescription' => 'Insurance Costs',
                'Cat' => 'Vib',
            ),
            130 => 
            array (
                'Item' => 2210809.0,
                'Description' => 'Board Allowance',
                'MainItem' => 2210800,
                'MainDescription' => 'Hospitality Supplies and Services',
                'Cat' => '',
            ),
            131 => 
            array (
                'Item' => 2210808.0,
                'Description' => 'Purchase of Coffins',
                'MainItem' => 2210800,
                'MainDescription' => 'Hospitality Supplies and Services',
                'Cat' => '',
            ),
            132 => 
            array (
                'Item' => 2210807.0,
                'Description' => '"Medals, Awards and Honors"',
                'MainItem' => 2210800,
                'MainDescription' => 'Hospitality Supplies and Services',
                'Cat' => '',
            ),
            133 => 
            array (
                'Item' => 2210806.0,
                'Description' => 'Expenses of President\'s Household',
                'MainItem' => 2210800,
                'MainDescription' => 'Hospitality Supplies and Services',
                'Cat' => '',
            ),
            134 => 
            array (
                'Item' => 2210805.0,
                'Description' => 'National Celebrations',
                'MainItem' => 2210800,
                'MainDescription' => 'Hospitality Supplies and Services',
                'Cat' => '',
            ),
            135 => 
            array (
                'Item' => 2210804.0,
                'Description' => 'Tribunals Costs',
                'MainItem' => 2210800,
                'MainDescription' => 'Hospitality Supplies and Services',
                'Cat' => '',
            ),
            136 => 
            array (
                'Item' => 2210803.0,
                'Description' => 'State Hospitality Costs',
                'MainItem' => 2210800,
                'MainDescription' => 'Hospitality Supplies and Services',
                'Cat' => '',
            ),
            137 => 
            array (
                'Item' => 2210802.0,
                'Description' => '"Boards, Committees, Conferences and Seminars"',
                'MainItem' => 2210800,
                'MainDescription' => 'Hospitality Supplies and Services',
                'Cat' => 'IIId',
            ),
            138 => 
            array (
                'Item' => 2210801.0,
            'Description' => '"Catering Services (receptions), Accommodation, Gifts, Food and Drinks"',
                'MainItem' => 2210800,
                'MainDescription' => 'Hospitality Supplies and Services',
                'Cat' => 'Vib',
            ),
            139 => 
            array (
                'Item' => 2210712.0,
                'Description' => 'Training Allowance',
                'MainItem' => 2210700,
                'MainDescription' => 'Training Expenses',
                'Cat' => 'IIIa',
            ),
            140 => 
            array (
                'Item' => 2210711.0,
                'Description' => 'Tuition Fees Allowance',
                'MainItem' => 2210700,
                'MainDescription' => 'Training Expenses',
                'Cat' => 'IIIa',
            ),
            141 => 
            array (
                'Item' => 2210710.0,
                'Description' => 'Accommondation Allowance',
                'MainItem' => 2210700,
                'MainDescription' => 'Training Expenses',
                'Cat' => 'IIIa',
            ),
            142 => 
            array (
                'Item' => 2210709.0,
                'Description' => 'Research allowance',
                'MainItem' => 2210700,
                'MainDescription' => 'Training Expenses',
                'Cat' => 'IIIa',
            ),
            143 => 
            array (
                'Item' => 2210708.0,
                'Description' => 'Trainer Allowance',
                'MainItem' => 2210700,
                'MainDescription' => 'Training Expenses',
                'Cat' => 'IIIa',
            ),
            144 => 
            array (
                'Item' => 2210707.0,
                'Description' => 'Project Allowance',
                'MainItem' => 2210700,
                'MainDescription' => 'Training Expenses',
                'Cat' => 'IIIa',
            ),
            145 => 
            array (
                'Item' => 2210706.0,
                'Description' => 'Book Allowance',
                'MainItem' => 2210700,
                'MainDescription' => 'Training Expenses',
                'Cat' => 'IIIa',
            ),
            146 => 
            array (
                'Item' => 2210705.0,
                'Description' => 'Field Training Attachments',
                'MainItem' => 2210700,
                'MainDescription' => 'Training Expenses',
                'Cat' => 'IIIa',
            ),
            147 => 
            array (
                'Item' => 2210704.0,
                'Description' => 'Hire of Training Facilities and Equipment',
                'MainItem' => 2210700,
                'MainDescription' => 'Training Expenses',
                'Cat' => 'IIIa',
            ),
            148 => 
            array (
                'Item' => 2210703.0,
                'Description' => 'Production and Printing of Training Materials',
                'MainItem' => 2210700,
                'MainDescription' => 'Training Expenses',
                'Cat' => 'IIIa',
            ),
            149 => 
            array (
                'Item' => 2210702.0,
                'Description' => 'Remuneration of Instructors and Contract Based Training Services',
                'MainItem' => 2210700,
                'MainDescription' => 'Training Expenses',
                'Cat' => 'IIIa',
            ),
            150 => 
            array (
                'Item' => 2210701.0,
                'Description' => 'Training Allowance',
                'MainItem' => 2210700,
                'MainDescription' => 'Training Expenses',
                'Cat' => 'IIIa',
            ),
            151 => 
            array (
                'Item' => 2210606.0,
                'Description' => '"Hire of Equipment, Plant and Machinery"',
                'MainItem' => 2210600,
                'MainDescription' => 'Rentals of Produced Assets',
                'Cat' => 'II',
            ),
            152 => 
            array (
                'Item' => 2210605.0,
                'Description' => 'Contribution in Lieu of Rates',
                'MainItem' => 2210600,
                'MainDescription' => 'Rentals of Produced Assets',
                'Cat' => '',
            ),
            153 => 
            array (
                'Item' => 2210604.0,
                'Description' => 'Hire of Transport',
                'MainItem' => 2210600,
                'MainDescription' => 'Rentals of Produced Assets',
                'Cat' => 'II',
            ),
            154 => 
            array (
                'Item' => 2210603.0,
                'Description' => 'Rents and Rates - Non-Residential',
                'MainItem' => 2210600,
                'MainDescription' => 'Rentals of Produced Assets',
                'Cat' => '',
            ),
            155 => 
            array (
                'Item' => 2210602.0,
                'Description' => 'Payment of Rents and Rates - Residential',
                'MainItem' => 2210600,
                'MainDescription' => 'Rentals of Produced Assets',
                'Cat' => 'Vc',
            ),
            156 => 
            array (
                'Item' => 2210601.0,
                'Description' => 'Rent of Vehicles',
                'MainItem' => 2210600,
                'MainDescription' => 'Rentals of Produced Assets',
                'Cat' => 'II',
            ),
            157 => 
            array (
                'Item' => 2210506.0,
                'Description' => 'Purchase of Curios',
                'MainItem' => 2210500,
                'MainDescription' => '"Printing , Advertising and Information Supplies and Services"',
                'Cat' => '',
            ),
            158 => 
            array (
                'Item' => 2210505.0,
                'Description' => 'Trade Shows and Exhibitions',
                'MainItem' => 2210500,
                'MainDescription' => '"Printing , Advertising and Information Supplies and Services"',
                'Cat' => 'IIIa',
            ),
            159 => 
            array (
                'Item' => 2210504.0,
                'Description' => '"Advertising, Awareness and Publicity Campaigns"',
                'MainItem' => 2210500,
                'MainDescription' => '"Printing , Advertising and Information Supplies and Services"',
                'Cat' => 'IIIa',
            ),
            160 => 
            array (
                'Item' => 2210503.0,
                'Description' => '"Subscriptions to Newspapers, Magazines and Periodicals"',
                'MainItem' => 2210500,
                'MainDescription' => '"Printing , Advertising and Information Supplies and Services"',
                'Cat' => 'Vib',
            ),
            161 => 
            array (
                'Item' => 2210502.0,
                'Description' => 'Publishing and Printing Services',
                'MainItem' => 2210500,
                'MainDescription' => '"Printing , Advertising and Information Supplies and Services"',
                'Cat' => 'Vib',
            ),
            162 => 
            array (
                'Item' => 2210501.0,
                'Description' => 'International News Services',
                'MainItem' => 2210500,
                'MainDescription' => '"Printing , Advertising and Information Supplies and Services"',
                'Cat' => 'Vib',
            ),
            163 => 
            array (
                'Item' => 2210407.0,
                'Description' => 'State Visits Abroad',
                'MainItem' => 2210400,
                'MainDescription' => '"Foreign Travel and Subsistence, and Other Transportation Costs"',
                'Cat' => '',
            ),
            164 => 
            array (
                'Item' => 2210406.0,
                'Description' => 'Repatriation Costs',
                'MainItem' => 2210400,
                'MainDescription' => '"Foreign Travel and Subsistence, and Other Transportation Costs"',
                'Cat' => '',
            ),
            165 => 
            array (
                'Item' => 2210405.0,
                'Description' => 'Shipment of Personal and Household Effects',
                'MainItem' => 2210400,
                'MainDescription' => '"Foreign Travel and Subsistence, and Other Transportation Costs"',
                'Cat' => '',
            ),
            166 => 
            array (
                'Item' => 2210404.0,
            'Description' => '"Sundry Items (e.g. airport tax, taxis, etc…)"',
                'MainItem' => 2210400,
                'MainDescription' => '"Foreign Travel and Subsistence, and Other Transportation Costs"',
                'Cat' => 'IIIa',
            ),
            167 => 
            array (
                'Item' => 2210403.0,
                'Description' => 'Daily Subsistence Allowance',
                'MainItem' => 2210400,
                'MainDescription' => '"Foreign Travel and Subsistence, and Other Transportation Costs"',
                'Cat' => 'IIIa',
            ),
            168 => 
            array (
                'Item' => 2210402.0,
                'Description' => 'Accommodation',
                'MainItem' => 2210400,
                'MainDescription' => '"Foreign Travel and Subsistence, and Other Transportation Costs"',
                'Cat' => 'IIIa',
            ),
            169 => 
            array (
                'Item' => 2210401.0,
            'Description' => '"Travel Costs (airlines, bus, railway, etc.)"',
                'MainItem' => 2210400,
                'MainDescription' => '"Foreign Travel and Subsistence, and Other Transportation Costs"',
                'Cat' => 'IIIa',
            ),
            170 => 
            array (
                'Item' => 2210310.0,
                'Description' => 'Field Operational Allowance',
                'MainItem' => 2210300,
                'MainDescription' => '"Domestic Travel and Subsistence, and Other Transportation Costs"',
                'Cat' => '',
            ),
            171 => 
            array (
                'Item' => 2210309.0,
                'Description' => 'Field Allowance',
                'MainItem' => 2210300,
                'MainDescription' => '"Domestic Travel and Subsistence, and Other Transportation Costs"',
                'Cat' => '',
            ),
            172 => 
            array (
                'Item' => 2210308.0,
                'Description' => 'Local Presidential Visits',
                'MainItem' => 2210300,
                'MainDescription' => '"Domestic Travel and Subsistence, and Other Transportation Costs"',
                'Cat' => '',
            ),
            173 => 
            array (
                'Item' => 2210307.0,
                'Description' => 'Passage and Transfer Expenses',
                'MainItem' => 2210300,
                'MainDescription' => '"Domestic Travel and Subsistence, and Other Transportation Costs"',
                'Cat' => '',
            ),
            174 => 
            array (
                'Item' => 2210306.0,
                'Description' => 'Repatriation Costs',
                'MainItem' => 2210300,
                'MainDescription' => '"Domestic Travel and Subsistence, and Other Transportation Costs"',
                'Cat' => '',
            ),
            175 => 
            array (
                'Item' => 2210305.0,
                'Description' => 'Shipment of Personal and Household Effects',
                'MainItem' => 2210300,
                'MainDescription' => '"Domestic Travel and Subsistence, and Other Transportation Costs"',
                'Cat' => '',
            ),
            176 => 
            array (
                'Item' => 2210304.0,
            'Description' => '"Sundry Items (e.g. airport tax, taxis, etc…)"',
                'MainItem' => 2210300,
                'MainDescription' => '"Domestic Travel and Subsistence, and Other Transportation Costs"',
                'Cat' => '',
            ),
            177 => 
            array (
                'Item' => 2210303.0,
                'Description' => 'Daily Subsistence Allowance',
                'MainItem' => 2210300,
                'MainDescription' => '"Domestic Travel and Subsistence, and Other Transportation Costs"',
                'Cat' => 'IIIa',
            ),
            178 => 
            array (
                'Item' => 2210302.0,
                'Description' => 'Accommodation - Domestic Travel',
                'MainItem' => 2210300,
                'MainDescription' => '"Domestic Travel and Subsistence, and Other Transportation Costs"',
                'Cat' => 'IIIa',
            ),
            179 => 
            array (
                'Item' => 2210301.0,
            'Description' => '"Travel Costs (airlines, bus, railway, mileage allowances, etc.)"',
                'MainItem' => 2210300,
                'MainDescription' => '"Domestic Travel and Subsistence, and Other Transportation Costs"',
                'Cat' => 'IIIa',
            ),
            180 => 
            array (
                'Item' => 2210206.0,
                'Description' => 'Licencing fees forCommunication',
                'MainItem' => 2210200,
                'MainDescription' => '"Communication, Supplies and Services"',
                'Cat' => 'Vc',
            ),
            181 => 
            array (
                'Item' => 2210205.0,
                'Description' => 'Satellite Access Services',
                'MainItem' => 2210200,
                'MainDescription' => '"Communication, Supplies and Services"',
                'Cat' => 'Vc',
            ),
            182 => 
            array (
                'Item' => 2210204.0,
                'Description' => 'Leased Communication Lines',
                'MainItem' => 2210200,
                'MainDescription' => '"Communication, Supplies and Services"',
                'Cat' => 'Vc',
            ),
            183 => 
            array (
                'Item' => 2210203.0,
                'Description' => 'Courier and Postal Services',
                'MainItem' => 2210200,
                'MainDescription' => '"Communication, Supplies and Services"',
                'Cat' => 'Vib',
            ),
            184 => 
            array (
                'Item' => 2210202.0,
                'Description' => 'Internet Connections',
                'MainItem' => 2210200,
                'MainDescription' => '"Communication, Supplies and Services"',
                'Cat' => 'IIIa',
            ),
            185 => 
            array (
                'Item' => 2210201.0,
                'Description' => '"Telephone, Telex, Facsmile and Mobile Phone Services"',
                'MainItem' => 2210200,
                'MainDescription' => '"Communication, Supplies and Services"',
                'Cat' => 'Vib',
            ),
            186 => 
            array (
                'Item' => 2210103.0,
                'Description' => 'Gas expenses',
                'MainItem' => 2210100,
                'MainDescription' => 'Utilities Supplies and Services',
                'Cat' => 'Vib',
            ),
            187 => 
            array (
                'Item' => 2210102.0,
                'Description' => 'Water and sewerage charges',
                'MainItem' => 2210100,
                'MainDescription' => 'Utilities Supplies and Services',
                'Cat' => 'Vib',
            ),
            188 => 
            array (
                'Item' => 2210101.0,
                'Description' => 'Electricity',
                'MainItem' => 2210100,
                'MainDescription' => 'Utilities Supplies and Services',
                'Cat' => 'Vib',
            ),
            189 => 
            array (
                'Item' => 2120301.0,
                'Description' => 'Employer Contributions to Private Social Security Funds and Schemes',
                'MainItem' => 2120300,
                'MainDescription' => 'Employer Contributions to Social Benefit Schemes Outside Government',
                'Cat' => '',
            ),
            190 => 
            array (
                'Item' => 2120201.0,
                'Description' => 'Employer Contributions to National Social and Health Insurance Scheme',
                'MainItem' => 2120200,
                'MainDescription' => 'Employer Contributions to Compulsary Health Insurance Schemes',
                'Cat' => '',
            ),
            191 => 
            array (
                'Item' => 2120102.0,
                'Description' => 'Employer Contributions to Local Government Security Fund',
                'MainItem' => 2120100,
                'MainDescription' => 'Employer Contributions to Compulsary National Social Security Schemes',
                'Cat' => '',
            ),
            192 => 
            array (
                'Item' => 2120101.0,
                'Description' => 'Employer Contributions to National Social Security Fund',
                'MainItem' => 2120100,
                'MainDescription' => 'Employer Contributions to Compulsary National Social Security Schemes',
                'Cat' => '',
            ),
            193 => 
            array (
                'Item' => 2110504.0,
            'Description' => 'Payment of Duty (Members of Parliament)',
                'MainItem' => 2110500,
                'MainDescription' => 'Personal Allowances Provided in Kind',
                'Cat' => '',
            ),
            194 => 
            array (
                'Item' => 2110503.0,
            'Description' => 'Payment of Duty (Commissioners)',
                'MainItem' => 2110500,
                'MainDescription' => 'Personal Allowances Provided in Kind',
                'Cat' => '',
            ),
            195 => 
            array (
                'Item' => 2110502.0,
            'Description' => 'Payment of Duty (University Lecturers)',
                'MainItem' => 2110500,
                'MainDescription' => 'Personal Allowances Provided in Kind',
                'Cat' => '',
            ),
            196 => 
            array (
                'Item' => 2110501.0,
            'Description' => 'Payment of Duty (Civil Servants)',
                'MainItem' => 2110500,
                'MainDescription' => 'Personal Allowances Provided in Kind',
                'Cat' => '',
            ),
            197 => 
            array (
                'Item' => 2110405.0,
                'Description' => 'Telephone Allowance',
                'MainItem' => 2110400,
                'MainDescription' => 'Personal Allowances Paid as Reimbursements',
                'Cat' => '',
            ),
            198 => 
            array (
                'Item' => 2110404.0,
                'Description' => 'Leave Expenses',
                'MainItem' => 2110400,
                'MainDescription' => 'Personal Allowances Paid as Reimbursements',
                'Cat' => '',
            ),
            199 => 
            array (
                'Item' => 2110403.0,
                'Description' => 'Refund of Medical Expenses - Ex-Gratia',
                'MainItem' => 2110400,
                'MainDescription' => 'Personal Allowances Paid as Reimbursements',
                'Cat' => '',
            ),
            200 => 
            array (
                'Item' => 2110402.0,
                'Description' => 'Refund of Medical Expenses - Inpatient',
                'MainItem' => 2110400,
                'MainDescription' => 'Personal Allowances Paid as Reimbursements',
                'Cat' => '',
            ),
            201 => 
            array (
                'Item' => 2110401.0,
                'Description' => 'Refund of Medical Expenses - Outpatient',
                'MainItem' => 2110400,
                'MainDescription' => 'Personal Allowances Paid as Reimbursements',
                'Cat' => '',
            ),
            202 => 
            array (
                'Item' => 2110325.0,
                'Description' => 'Car Maintenance Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            203 => 
            array (
                'Item' => 2110324.0,
                'Description' => 'Constituency Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            204 => 
            array (
                'Item' => 2110323.0,
                'Description' => 'Late Duty Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            205 => 
            array (
                'Item' => 2110322.0,
                'Description' => 'Risk Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            206 => 
            array (
                'Item' => 2110321.0,
                'Description' => 'Administrative Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            207 => 
            array (
                'Item' => 2110320.0,
                'Description' => 'Leave Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            208 => 
            array (
                'Item' => 2110319.0,
                'Description' => 'Top-up House Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            209 => 
            array (
                'Item' => 2110318.0,
                'Description' => 'Non- Practising Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            210 => 
            array (
                'Item' => 2110317.0,
                'Description' => 'Domestic Servant Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            211 => 
            array (
                'Item' => 2110316.0,
                'Description' => 'Security Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            212 => 
            array (
                'Item' => 2110315.0,
                'Description' => 'Extraneous Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            213 => 
            array (
                'Item' => 2110314.0,
                'Description' => 'Transport Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            214 => 
            array (
                'Item' => 2110313.0,
                'Description' => 'Entertainment Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            215 => 
            array (
                'Item' => 2110312.0,
                'Description' => 'Responsibility Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            216 => 
            array (
                'Item' => 2110311.0,
                'Description' => 'Transfer Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            217 => 
            array (
                'Item' => 2110310.0,
                'Description' => 'Top-up Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            218 => 
            array (
                'Item' => 2110309.0,
                'Description' => 'Special Duty Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            219 => 
            array (
                'Item' => 2110308.0,
                'Description' => 'Medical Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            220 => 
            array (
                'Item' => 2110307.0,
                'Description' => 'Hardship Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            221 => 
            array (
                'Item' => 2110306.0,
            'Description' => 'Foreign Service Allowance (Overseas Addition)',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            222 => 
            array (
                'Item' => 2110304.0,
                'Description' => 'Overtime - Civil Service',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            223 => 
            array (
                'Item' => 2110303.0,
                'Description' => 'Acting Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            224 => 
            array (
                'Item' => 2110302.0,
                'Description' => 'Honoraria',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            225 => 
            array (
                'Item' => 2110301.0,
                'Description' => 'House Allowance',
                'MainItem' => 2110300,
                'MainDescription' => 'Personal Allowance Paid as Part of Salary',
                'Cat' => '',
            ),
            226 => 
            array (
                'Item' => 2110203.0,
                'Description' => 'Casual Labour -Teachers',
                'MainItem' => 2110200,
                'MainDescription' => 'Basic Wages - Temporary Employees',
                'Cat' => '',
            ),
            227 => 
            array (
                'Item' => 2110202.0,
                'Description' => 'Casual Labour-Others',
                'MainItem' => 2110200,
                'MainDescription' => 'Basic Wages - Temporary Employees',
                'Cat' => 'IV',
            ),
            228 => 
            array (
                'Item' => 2110201.0,
                'Description' => 'Contractual Employees',
                'MainItem' => 2110200,
                'MainDescription' => 'Basic Wages - Temporary Employees',
                'Cat' => 'Via',
            ),
            229 => 
            array (
                'Item' => 2110114.0,
                'Description' => 'Basic Salaries - Kenya Anti-Corruption Commision',
                'MainItem' => 2110100,
                'MainDescription' => 'Basic Salaries - Permanent Employees',
                'Cat' => '',
            ),
            230 => 
            array (
                'Item' => 2110113.0,
                'Description' => 'Basic Salaries - Teachers Service Commission Secretariat',
                'MainItem' => 2110100,
                'MainDescription' => 'Basic Salaries - Permanent Employees',
                'Cat' => '',
            ),
            231 => 
            array (
                'Item' => 2110112.0,
                'Description' => 'Basic Salaries - National Assembly',
                'MainItem' => 2110100,
                'MainDescription' => 'Basic Salaries - Permanent Employees',
                'Cat' => '',
            ),
            232 => 
            array (
                'Item' => 2110111.0,
                'Description' => 'Basic Salaries - Electoral Commission Of Kenya',
                'MainItem' => 2110100,
                'MainDescription' => 'Basic Salaries - Permanent Employees',
                'Cat' => '',
            ),
            233 => 
            array (
                'Item' => 2110110.0,
                'Description' => 'Basic Salaries - Constitutional Office Holders',
                'MainItem' => 2110100,
                'MainDescription' => 'Basic Salaries - Permanent Employees',
                'Cat' => '',
            ),
            234 => 
            array (
                'Item' => 2110109.0,
                'Description' => 'Basic Salaries - National Intelligence Service',
                'MainItem' => 2110100,
                'MainDescription' => 'Basic Salaries - Permanent Employees',
                'Cat' => '',
            ),
            235 => 
            array (
                'Item' => 2110108.0,
                'Description' => 'Basic Salaries - Military',
                'MainItem' => 2110100,
                'MainDescription' => 'Basic Salaries - Permanent Employees',
                'Cat' => '',
            ),
            236 => 
            array (
                'Item' => 2110107.0,
                'Description' => '"Basic Salaries - Police, Prison Officers and National Youth Service"',
                'MainItem' => 2110100,
                'MainDescription' => 'Basic Salaries - Permanent Employees',
                'Cat' => '',
            ),
            237 => 
            array (
                'Item' => 2110106.0,
                'Description' => 'Basic Salaries - Commissioners',
                'MainItem' => 2110100,
                'MainDescription' => 'Basic Salaries - Permanent Employees',
                'Cat' => '',
            ),
            238 => 
            array (
                'Item' => 2110105.0,
                'Description' => 'Basic Salaries - Members of Parliament',
                'MainItem' => 2110100,
                'MainDescription' => 'Basic Salaries - Permanent Employees',
                'Cat' => '',
            ),
            239 => 
            array (
                'Item' => 2110104.0,
                'Description' => 'Basic Salaries - External Auditors',
                'MainItem' => 2110100,
                'MainDescription' => 'Basic Salaries - Permanent Employees',
                'Cat' => '',
            ),
            240 => 
            array (
                'Item' => 2110103.0,
                'Description' => 'Basic Salaries - Judiciary',
                'MainItem' => 2110100,
                'MainDescription' => 'Basic Salaries - Permanent Employees',
                'Cat' => '',
            ),
            241 => 
            array (
                'Item' => 2110102.0,
                'Description' => 'Basic Salaries - Teachers',
                'MainItem' => 2110100,
                'MainDescription' => 'Basic Salaries - Permanent Employees',
                'Cat' => '',
            ),
            242 => 
            array (
                'Item' => 2110101.0,
                'Description' => 'Basic Salaries - Civil Service',
                'MainItem' => 2110100,
                'MainDescription' => 'Basic Salaries - Permanent Employees',
                'Cat' => '',
            ),
            243 => 
            array (
                'Item' => 1450206.0,
                'Description' => 'Receipts from Emergency Electricity Sales',
                'MainItem' => 1450200,
                'MainDescription' => 'Receipts Not Classified Elsewhere Collected as AIA',
                'Cat' => '',
            ),
            244 => 
            array (
                'Item' => 1450202.0,
                'Description' => 'Receipts from Solid Waste Management',
                'MainItem' => 1450200,
                'MainDescription' => 'Receipts Not Classified Elsewhere Collected as AIA',
                'Cat' => '',
            ),
            245 => 
            array (
                'Item' => 1450201.0,
                'Description' => 'Jomo Kenyatta Foundation Royalties',
                'MainItem' => 1450200,
                'MainDescription' => 'Receipts Not Classified Elsewhere Collected as AIA',
                'Cat' => '',
            ),
            246 => 
            array (
                'Item' => 1450105.0,
            'Description' => '"Other Local Authority Revenue (Slaughterhouses, Stage Fees, etc…)"',
                'MainItem' => 1450100,
                'MainDescription' => 'Receipts Not Classified Elsewhere',
                'Cat' => '',
            ),
            247 => 
            array (
                'Item' => 1450104.0,
                'Description' => 'Surplus AIA Receipts Transferred to Exchequer',
                'MainItem' => 1450100,
                'MainDescription' => 'Receipts Not Classified Elsewhere',
                'Cat' => '',
            ),
            248 => 
            array (
                'Item' => 1450103.0,
                'Description' => 'Refunds related to Other Insurance Premium Commissions',
                'MainItem' => 1450100,
                'MainDescription' => 'Receipts Not Classified Elsewhere',
                'Cat' => '',
            ),
            249 => 
            array (
                'Item' => 1450102.0,
                'Description' => 'Refund related to Insurance Premium Commission TSC',
                'MainItem' => 1450100,
                'MainDescription' => 'Receipts Not Classified Elsewhere',
                'Cat' => '',
            ),
            250 => 
            array (
                'Item' => 1450101.0,
                'Description' => 'Sundry Revenue',
                'MainItem' => 1450100,
                'MainDescription' => 'Receipts Not Classified Elsewhere',
                'Cat' => '',
            ),
            251 => 
            array (
                'Item' => 1440402.0,
                'Description' => 'Ford Foundation',
                'MainItem' => 1440400,
                'MainDescription' => 'Capital Grants from International NGOs - collected as AIA',
                'Cat' => '',
            ),
            252 => 
            array (
                'Item' => 1440401.0,
                'Description' => 'Aga Khan Foundation',
                'MainItem' => 1440400,
                'MainDescription' => 'Capital Grants from International NGOs - collected as AIA',
                'Cat' => '',
            ),
            253 => 
            array (
                'Item' => 1440302.0,
                'Description' => 'Ford Foundation',
                'MainItem' => 1440300,
                'MainDescription' => 'Current Grants from International NGOs - collected as AIA',
                'Cat' => '',
            ),
            254 => 
            array (
                'Item' => 1440301.0,
                'Description' => 'Aga Khan Foundation',
                'MainItem' => 1440300,
                'MainDescription' => 'Current Grants from International NGOs - collected as AIA',
                'Cat' => '',
            ),
            255 => 
            array (
                'Item' => 1440202.0,
                'Description' => 'Ford Foundation',
                'MainItem' => 1440200,
                'MainDescription' => 'Current Grants from International NGOs - paid through Exchequer',
                'Cat' => '',
            ),
            256 => 
            array (
                'Item' => 1440201.0,
                'Description' => 'Aga Khan Foundation',
                'MainItem' => 1440200,
                'MainDescription' => 'Current Grants from International NGOs - paid through Exchequer',
                'Cat' => '',
            ),
            257 => 
            array (
                'Item' => 1440102.0,
                'Description' => 'Ford Foundation',
                'MainItem' => 1440100,
                'MainDescription' => 'Current Grants from International NGOs - paid through Exchequer',
                'Cat' => '',
            ),
            258 => 
            array (
                'Item' => 1440101.0,
                'Description' => 'Aga Khan Foundation',
                'MainItem' => 1440100,
                'MainDescription' => 'Current Grants from International NGOs - paid through Exchequer',
                'Cat' => '',
            ),
            259 => 
            array (
                'Item' => 1430101.0,
                'Description' => 'Court Imposed Fines and Forfeitures',
                'MainItem' => 1430100,
                'MainDescription' => '"Receipts from Fines, Penalties and Forfeitures and Other Charges"',
                'Cat' => '',
            ),
            260 => 
            array (
                'Item' => 1420601.0,
                'Description' => 'Sale of Tender Documents',
                'MainItem' => 1420600,
                'MainDescription' => 'Receipts from Sale of Incidential Goods collected as A.I.A',
                'Cat' => '',
            ),
            261 => 
            array (
                'Item' => 1420506.0,
                'Description' => 'UN Refunds Related to Kenya\'s Contributions to Peacekeeping Missions',
                'MainItem' => 1420500,
                'MainDescription' => 'Receipts from Sales by Non-Market Establishments Collected as AIA',
                'Cat' => '',
            ),
            262 => 
            array (
                'Item' => 1420505.0,
                'Description' => 'Limuru Sewerage Connection Fees',
                'MainItem' => 1420500,
                'MainDescription' => 'Receipts from Sales by Non-Market Establishments Collected as AIA',
                'Cat' => '',
            ),
            263 => 
            array (
                'Item' => 1420504.0,
                'Description' => 'Course Fees and Hostel Charges',
                'MainItem' => 1420500,
                'MainDescription' => 'Receipts from Sales by Non-Market Establishments Collected as AIA',
                'Cat' => '',
            ),
            264 => 
            array (
                'Item' => 1420503.0,
                'Description' => 'Aviation Fees And Air Navigation Charges.',
                'MainItem' => 1420500,
                'MainDescription' => 'Receipts from Sales by Non-Market Establishments Collected as AIA',
                'Cat' => '',
            ),
            265 => 
            array (
                'Item' => 1420502.0,
                'Description' => 'Water Rates',
                'MainItem' => 1420500,
                'MainDescription' => 'Receipts from Sales by Non-Market Establishments Collected as AIA',
                'Cat' => '',
            ),
            266 => 
            array (
                'Item' => 1420501.0,
                'Description' => 'KOSF Storage Charges',
                'MainItem' => 1420500,
                'MainDescription' => 'Receipts from Sales by Non-Market Establishments Collected as AIA',
                'Cat' => '',
            ),
            267 => 
            array (
                'Item' => 1420405.0,
                'Description' => 'Market Fees - Local Authority Revenue',
                'MainItem' => 1420400,
                'MainDescription' => 'Receipts from Incidental Sales by Non-Market Establishments',
                'Cat' => '',
            ),
            268 => 
            array (
                'Item' => 1420404.0,
                'Description' => 'Parking Fees - Local Authority Revenue',
                'MainItem' => 1420400,
                'MainDescription' => 'Receipts from Incidental Sales by Non-Market Establishments',
                'Cat' => '',
            ),
            269 => 
            array (
                'Item' => 1420403.0,
                'Description' => 'Water and Sewerage Rates - Local Authority Revenue',
                'MainItem' => 1420400,
                'MainDescription' => 'Receipts from Incidental Sales by Non-Market Establishments',
                'Cat' => '',
            ),
            270 => 
            array (
                'Item' => 1420402.0,
                'Description' => 'Air Navigation Charges and Sundry Aviation Revenue',
                'MainItem' => 1420400,
                'MainDescription' => 'Receipts from Incidental Sales by Non-Market Establishments',
                'Cat' => '',
            ),
            271 => 
            array (
                'Item' => 1420401.0,
                'Description' => 'Forest Receipts',
                'MainItem' => 1420400,
                'MainDescription' => 'Receipts from Incidental Sales by Non-Market Establishments',
                'Cat' => '',
            ),
            272 => 
            array (
                'Item' => 1420342.0,
                'Description' => 'Training Levy',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            273 => 
            array (
                'Item' => 1420341.0,
                'Description' => 'Agency fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            274 => 
            array (
                'Item' => 1420340.0,
                'Description' => 'Hire of Security Services fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            275 => 
            array (
                'Item' => 1420339.0,
                'Description' => 'Certificate of Good Conduct Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            276 => 
            array (
                'Item' => 1420338.0,
            'Description' => 'Bill of Cost (Petition Fees)',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            277 => 
            array (
                'Item' => 1420337.0,
                'Description' => 'Surchage fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            278 => 
            array (
                'Item' => 1420336.0,
                'Description' => 'Nomination Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            279 => 
            array (
                'Item' => 1420335.0,
                'Description' => 'Business Names Search Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            280 => 
            array (
                'Item' => 1420334.0,
                'Description' => 'Public Trustee Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            281 => 
            array (
                'Item' => 1420333.0,
                'Description' => 'Estate Duty Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            282 => 
            array (
                'Item' => 1420332.0,
                'Description' => 'Export Inspection Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            283 => 
            array (
                'Item' => 1420331.0,
                'Description' => 'Import Inspection Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            284 => 
            array (
                'Item' => 1420330.0,
                'Description' => 'Specialised weather products charges',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            285 => 
            array (
                'Item' => 1420329.0,
                'Description' => 'Educational visits fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            286 => 
            array (
                'Item' => 1420328.0,
                'Description' => 'Single Business Licences - Local Authority Revenue',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            287 => 
            array (
                'Item' => 1420327.0,
                'Description' => 'Game Park Fees - Local Authority Revenue',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            288 => 
            array (
                'Item' => 1420326.0,
                'Description' => 'Other Immigration Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            289 => 
            array (
                'Item' => 1420325.0,
                'Description' => 'Identity Card Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            290 => 
            array (
                'Item' => 1420324.0,
                'Description' => 'Work Permit Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            291 => 
            array (
                'Item' => 1420323.0,
                'Description' => 'Passport Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            292 => 
            array (
                'Item' => 1420322.0,
                'Description' => 'Immigration Visas and Other Consular Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            293 => 
            array (
                'Item' => 1420321.0,
                'Description' => 'Registration of Births and Deaths',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            294 => 
            array (
                'Item' => 1420320.0,
                'Description' => 'Registration of Building Societies',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            295 => 
            array (
                'Item' => 1420319.0,
                'Description' => 'Tourist Operator Licences',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            296 => 
            array (
                'Item' => 1420318.0,
                'Description' => 'Licence Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            297 => 
            array (
                'Item' => 1420317.0,
                'Description' => 'KEBS Inspection Levy Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            298 => 
            array (
                'Item' => 1420316.0,
                'Description' => 'Land Boundary Dispute Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            299 => 
            array (
                'Item' => 1420315.0,
                'Description' => 'Land Search Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            300 => 
            array (
                'Item' => 1420314.0,
                'Description' => 'Land Registration Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            301 => 
            array (
                'Item' => 1420313.0,
                'Description' => 'Land Valuation Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            302 => 
            array (
                'Item' => 1420312.0,
                'Description' => '"Registration of Newspapers, Books and Periodicals"',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            303 => 
            array (
                'Item' => 1420311.0,
                'Description' => 'Conveyancing Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            304 => 
            array (
                'Item' => 1420310.0,
                'Description' => 'Examination and Tuition Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            305 => 
            array (
                'Item' => 1420309.0,
                'Description' => 'Registration of Societies',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            306 => 
            array (
                'Item' => 1420308.0,
                'Description' => 'Registration of Hire Purchase Agreement',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            307 => 
            array (
                'Item' => 1420307.0,
                'Description' => 'Registration of Marriages',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            308 => 
            array (
                'Item' => 1420306.0,
                'Description' => 'Registration of Business Names',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            309 => 
            array (
                'Item' => 1420305.0,
                'Description' => 'Registration of Coat of Arms',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            310 => 
            array (
                'Item' => 1420304.0,
                'Description' => 'Registration of Trade Unions',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            311 => 
            array (
                'Item' => 1420303.0,
                'Description' => 'Registration of Companies',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            312 => 
            array (
                'Item' => 1420302.0,
                'Description' => 'Official Reciever\'s Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            313 => 
            array (
                'Item' => 1420301.0,
                'Description' => 'Auctioneers Registration Fees',
                'MainItem' => 1420300,
                'MainDescription' => 'Receipts from Administrative Fees and Charges Collected as AIA',
                'Cat' => '',
            ),
            314 => 
            array (
                'Item' => 1420206.0,
                'Description' => 'Transit Toll Charges',
                'MainItem' => 1420200,
                'MainDescription' => 'Receipts from Administrative Fees and Charges',
                'Cat' => '',
            ),
            315 => 
            array (
                'Item' => 1420205.0,
                'Description' => 'Calibration of Navigational Aids',
                'MainItem' => 1420200,
                'MainDescription' => 'Receipts from Administrative Fees and Charges',
                'Cat' => '',
            ),
            316 => 
            array (
                'Item' => 1420204.0,
                'Description' => 'Land Adjudication and Case Fees',
                'MainItem' => 1420200,
                'MainDescription' => 'Receipts from Administrative Fees and Charges',
                'Cat' => '',
            ),
            317 => 
            array (
                'Item' => 1420203.0,
                'Description' => 'Other Land Revenue',
                'MainItem' => 1420200,
                'MainDescription' => 'Receipts from Administrative Fees and Charges',
                'Cat' => '',
            ),
            318 => 
            array (
                'Item' => 1420202.0,
                'Description' => 'Motor Driver Licences',
                'MainItem' => 1420200,
                'MainDescription' => 'Receipts from Administrative Fees and Charges',
                'Cat' => '',
            ),
            319 => 
            array (
                'Item' => 1420201.0,
                'Description' => 'Fees under Traffic Act',
                'MainItem' => 1420200,
                'MainDescription' => 'Receipts from Administrative Fees and Charges',
                'Cat' => '',
            ),
            320 => 
            array (
                'Item' => 1420101.0,
            'Description' => 'Sale of Electricity (Turkwell Hydroelectric Power Station)',
                'MainItem' => 1420100,
                'MainDescription' => 'Sales of Market Establishments',
                'Cat' => '',
            ),
            321 => 
            array (
                'Item' => 1410501.0,
                'Description' => 'Rent of Land and Buildings',
                'MainItem' => 1410500,
                'MainDescription' => 'Other Property Income Collected as AIA',
                'Cat' => '',
            ),
            322 => 
            array (
                'Item' => 1410404.0,
                'Description' => 'House Rents - Local Authority Revenue',
                'MainItem' => 1410400,
                'MainDescription' => 'Rents',
                'Cat' => '',
            ),
            323 => 
            array (
                'Item' => 1410403.0,
                'Description' => 'Webuye Housing Scheme Rents',
                'MainItem' => 1410400,
                'MainDescription' => 'Rents',
                'Cat' => '',
            ),
            324 => 
            array (
                'Item' => 1410402.0,
                'Description' => 'Rent of Government Buildings and Housing',
                'MainItem' => 1410400,
                'MainDescription' => 'Rents',
                'Cat' => '',
            ),
            325 => 
            array (
                'Item' => 1410401.0,
                'Description' => 'Rent of Land',
                'MainItem' => 1410400,
                'MainDescription' => 'Rents',
                'Cat' => '',
            ),
            326 => 
            array (
                'Item' => 1410202.0,
                'Description' => 'Profits and Dividends from Public Non- Financial Enterprise',
                'MainItem' => 1410200,
                'MainDescription' => 'Profits and Dividends',
                'Cat' => '',
            ),
            327 => 
            array (
                'Item' => 1410201.0,
                'Description' => 'Profits and Dividends from Public Financial Enterprise',
                'MainItem' => 1410200,
                'MainDescription' => 'Profits and Dividends',
                'Cat' => '',
            ),
            328 => 
            array (
                'Item' => 1410106.0,
                'Description' => 'Interest Receipts from Foreign Loans',
                'MainItem' => 1410100,
                'MainDescription' => 'Interest Received',
                'Cat' => '',
            ),
            329 => 
            array (
                'Item' => 1410105.0,
                'Description' => 'Interest Receipts on Other Domestic Lending and On-Lending',
                'MainItem' => 1410100,
                'MainDescription' => 'Interest Received',
                'Cat' => '',
            ),
            330 => 
            array (
                'Item' => 1410104.0,
                'Description' => 'Interest Receipts on Loans to Individuals and Households',
                'MainItem' => 1410100,
                'MainDescription' => 'Interest Received',
                'Cat' => '',
            ),
            331 => 
            array (
                'Item' => 1410103.0,
                'Description' => 'Interest Receipts on Loans to Domestic Financial Institutions',
                'MainItem' => 1410100,
                'MainDescription' => 'Interest Received',
                'Cat' => '',
            ),
            332 => 
            array (
                'Item' => 1410102.0,
                'Description' => 'Interest Receipts on Loans to Public Non-Financial Enterprises',
                'MainItem' => 1410100,
                'MainDescription' => 'Interest Received',
                'Cat' => '',
            ),
            333 => 
            array (
                'Item' => 1410101.0,
                'Description' => 'Interest Receipts on Loans to Government Agencies and Other Levels of Government',
                'MainItem' => 1410100,
                'MainDescription' => 'Interest Received',
                'Cat' => '',
            ),
            334 => 
            array (
                'Item' => 1330406.0,
                'Description' => 'Funds Received by Ministry of Energy From Rural Electrification Fund',
                'MainItem' => 1330400,
                'MainDescription' => 'Grants Received by Other General Government Units from Fund Accounts',
                'Cat' => '',
            ),
            335 => 
            array (
                'Item' => 1330405.0,
                'Description' => 'Funds Received by Ministry of Agriculture from Veterinary Services Fund',
                'MainItem' => 1330400,
                'MainDescription' => 'Grants Received by Other General Government Units from Fund Accounts',
                'Cat' => '',
            ),
            336 => 
            array (
                'Item' => 1330404.0,
                'Description' => 'Funds Received by Hospitals and Clinics from Health Care Services Fund',
                'MainItem' => 1330400,
                'MainDescription' => 'Grants Received by Other General Government Units from Fund Accounts',
                'Cat' => '',
            ),
            337 => 
            array (
                'Item' => 1330403.0,
                'Description' => 'Funds Received by Ministry of Energy from Petroleum Development Fund',
                'MainItem' => 1330400,
                'MainDescription' => 'Grants Received by Other General Government Units from Fund Accounts',
                'Cat' => '',
            ),
            338 => 
            array (
                'Item' => 1330402.0,
                'Description' => 'Funds Received by Ministry of Roads and Public Works from Road Maintenance Levy Fund',
                'MainItem' => 1330400,
                'MainDescription' => 'Grants Received by Other General Government Units from Fund Accounts',
                'Cat' => '',
            ),
            339 => 
            array (
                'Item' => 1330401.0,
                'Description' => 'Funds Management Fees Received by Ministry of Finance from Local Authorities Transfer Fund',
                'MainItem' => 1330400,
                'MainDescription' => 'Grants Received by Other General Government Units from Fund Accounts',
                'Cat' => '',
            ),
            340 => 
            array (
                'Item' => 1330304.0,
                'Description' => 'Funds Received by Rural Electrification Fund',
                'MainItem' => 1330300,
                'MainDescription' => 'Grants Received by Fund Accounts from Central Government Budget',
                'Cat' => '',
            ),
            341 => 
            array (
                'Item' => 1330303.0,
                'Description' => 'Funds Received by Petroleum Development Fund',
                'MainItem' => 1330300,
                'MainDescription' => 'Grants Received by Fund Accounts from Central Government Budget',
                'Cat' => '',
            ),
            342 => 
            array (
                'Item' => 1330302.0,
                'Description' => 'Funds Received by Road Maintenance Levy Fund',
                'MainItem' => 1330300,
                'MainDescription' => 'Grants Received by Fund Accounts from Central Government Budget',
                'Cat' => '',
            ),
            343 => 
            array (
                'Item' => 1330301.0,
                'Description' => 'Funds Received by Local Authorities Transfer Fund',
                'MainItem' => 1330300,
                'MainDescription' => 'Grants Received by Fund Accounts from Central Government Budget',
                'Cat' => '',
            ),
            344 => 
            array (
                'Item' => 1330202.0,
                'Description' => 'Funds Received from Road Maintenance Levy Fund',
                'MainItem' => 1330200,
                'MainDescription' => 'Grants Received by Local Authorities from General Government Units',
                'Cat' => '',
            ),
            345 => 
            array (
                'Item' => 1330201.0,
                'Description' => 'Funds Received from Local Authorities Transfer Fund',
                'MainItem' => 1330200,
                'MainDescription' => 'Grants Received by Local Authorities from General Government Units',
                'Cat' => '',
            ),
            346 => 
            array (
                'Item' => 1320202.0,
                'Description' => 'Capital Grants from International Organizations',
                'MainItem' => 1320200,
                'MainDescription' => 'Grants from International Organizations - Treated as AIA',
                'Cat' => '',
            ),
            347 => 
            array (
                'Item' => 1320201.0,
                'Description' => 'Current Grants from International Organizations',
                'MainItem' => 1320200,
                'MainDescription' => 'Grants from International Organizations - Treated as AIA',
                'Cat' => '',
            ),
            348 => 
            array (
                'Item' => 1320102.0,
                'Description' => 'Capital Grants from International Organizations',
                'MainItem' => 1320100,
                'MainDescription' => 'Grants from International Organizations - Cash Through Exchequer',
                'Cat' => '',
            ),
            349 => 
            array (
                'Item' => 1320101.0,
                'Description' => 'Current Grants from International Organizations',
                'MainItem' => 1320100,
                'MainDescription' => 'Grants from International Organizations - Cash Through Exchequer',
                'Cat' => '',
            ),
            350 => 
            array (
                'Item' => 1310202.0,
                'Description' => 'Capital Grants from Foreign Governments',
                'MainItem' => 1310200,
                'MainDescription' => 'Grants from Foreign Governments - Direct Payments - Treated as AIA',
                'Cat' => '',
            ),
            351 => 
            array (
                'Item' => 1310201.0,
                'Description' => 'Current Grants from Foreign Governments',
                'MainItem' => 1310200,
                'MainDescription' => 'Grants from Foreign Governments - Direct Payments - Treated as AIA',
                'Cat' => '',
            ),
            352 => 
            array (
                'Item' => 1310102.0,
                'Description' => 'Capital Grants from Foreign Governments',
                'MainItem' => 1310100,
                'MainDescription' => 'Grants from Foreign Governments - Cash Through Exchequer',
                'Cat' => '',
            ),
            353 => 
            array (
                'Item' => 1310101.0,
                'Description' => 'Current Grants from Foreign Governments',
                'MainItem' => 1310100,
                'MainDescription' => 'Grants from Foreign Governments - Cash Through Exchequer',
                'Cat' => '',
            ),
            354 => 
            array (
                'Item' => 1210302.0,
                'Description' => 'Contributions - MPs\' Pension Scheme',
                'MainItem' => 1210300,
                'MainDescription' => 'Receipts from Government Employees to Social and Welfare Schemes within Government',
                'Cat' => '',
            ),
            355 => 
            array (
                'Item' => 1210301.0,
                'Description' => 'Contributions - Widows and Children Pension Scheme',
                'MainItem' => 1210300,
                'MainDescription' => 'Receipts from Government Employees to Social and Welfare Schemes within Government',
                'Cat' => '',
            ),
            356 => 
            array (
                'Item' => 1210205.0,
                'Description' => 'Voluntary Additional Contributions',
                'MainItem' => 1210200,
                'MainDescription' => 'Receipts to NHIF for Health Insurance Contributions',
                'Cat' => '',
            ),
            357 => 
            array (
                'Item' => 1210204.0,
                'Description' => 'Employer Contributions - Non-Government Employees',
                'MainItem' => 1210200,
                'MainDescription' => 'Receipts to NHIF for Health Insurance Contributions',
                'Cat' => '',
            ),
            358 => 
            array (
                'Item' => 1210203.0,
                'Description' => 'Employee Contributions - Non-Government Employees',
                'MainItem' => 1210200,
                'MainDescription' => 'Receipts to NHIF for Health Insurance Contributions',
                'Cat' => '',
            ),
            359 => 
            array (
                'Item' => 1210202.0,
                'Description' => 'Employer Contributions - Government Employees',
                'MainItem' => 1210200,
                'MainDescription' => 'Receipts to NHIF for Health Insurance Contributions',
                'Cat' => '',
            ),
            360 => 
            array (
                'Item' => 1210201.0,
                'Description' => 'Employee Contributions - Government Employees',
                'MainItem' => 1210200,
                'MainDescription' => 'Receipts to NHIF for Health Insurance Contributions',
                'Cat' => '',
            ),
            361 => 
            array (
                'Item' => 1210105.0,
                'Description' => 'Voluntary Additional Contributions',
                'MainItem' => 1210100,
                'MainDescription' => 'Receipts for Health Insurance Contribution',
                'Cat' => '',
            ),
            362 => 
            array (
                'Item' => 1210104.0,
                'Description' => 'Employer Contributions - Non-Government Employees',
                'MainItem' => 1210100,
                'MainDescription' => 'Receipts for Health Insurance Contribution',
                'Cat' => '',
            ),
            363 => 
            array (
                'Item' => 1210103.0,
                'Description' => 'Employee Contributions - Non-Government Employees',
                'MainItem' => 1210100,
                'MainDescription' => 'Receipts for Health Insurance Contribution',
                'Cat' => '',
            ),
            364 => 
            array (
                'Item' => 1210102.0,
                'Description' => 'Employer Contributions - Government Employees',
                'MainItem' => 1210100,
                'MainDescription' => 'Receipts for Health Insurance Contribution',
                'Cat' => '',
            ),
            365 => 
            array (
                'Item' => 1210101.0,
                'Description' => 'Employee Contributions - Government Employees',
                'MainItem' => 1210100,
                'MainDescription' => 'Receipts for Health Insurance Contribution',
                'Cat' => '',
            ),
            366 => 
            array (
                'Item' => 1160201.0,
                'Description' => 'Training Levy on Hotels and Institutions',
                'MainItem' => 1160200,
                'MainDescription' => 'Receipts from Other Taxes Not Elsewhere Classified Collected as AIA',
                'Cat' => '',
            ),
            367 => 
            array (
                'Item' => 1160102.0,
                'Description' => 'Other Taxes - Local Authorities',
                'MainItem' => 1160100,
                'MainDescription' => 'Receipts from Other Taxes Not Elsewhere Classified',
                'Cat' => '',
            ),
            368 => 
            array (
                'Item' => 1160101.0,
                'Description' => 'Stamp Duty',
                'MainItem' => 1160100,
                'MainDescription' => 'Receipts from Other Taxes Not Elsewhere Classified',
                'Cat' => '',
            ),
            369 => 
            array (
                'Item' => 1150401.0,
                'Description' => 'Import Declaration and Inspection Fees',
                'MainItem' => 1150400,
                'MainDescription' => 'Receipts from Other Taxes on International Trade and Transactions',
                'Cat' => '',
            ),
            370 => 
            array (
                'Item' => 1150201.0,
                'Description' => 'Receipt from Export Surcharges on Scrap Metal and Unprocessed Hides',
                'MainItem' => 1150200,
                'MainDescription' => 'Receipts from Exports',
                'Cat' => '',
            ),
            371 => 
            array (
                'Item' => 1150107.0,
                'Description' => 'Exemption of Import Declaration and Inspection Fees',
                'MainItem' => 1150100,
                'MainDescription' => 'Receipts from Customs and Other Import Duties',
                'Cat' => '',
            ),
            372 => 
            array (
                'Item' => 1150106.0,
                'Description' => 'Exemptions on other good and services',
                'MainItem' => 1150100,
                'MainDescription' => 'Receipts from Customs and Other Import Duties',
                'Cat' => '',
            ),
            373 => 
            array (
                'Item' => 1150105.0,
                'Description' => 'Exemptions on Government Institutions',
                'MainItem' => 1150100,
                'MainDescription' => 'Receipts from Customs and Other Import Duties',
                'Cat' => '',
            ),
            374 => 
            array (
                'Item' => 1150104.0,
                'Description' => 'Exemptions on International Organizations and Diplomatic Missions Corporations',
                'MainItem' => 1150100,
                'MainDescription' => 'Receipts from Customs and Other Import Duties',
                'Cat' => '',
            ),
            375 => 
            array (
                'Item' => 1150103.0,
                'Description' => 'Exemptions on NGOs',
                'MainItem' => 1150100,
                'MainDescription' => 'Receipts from Customs and Other Import Duties',
                'Cat' => '',
            ),
            376 => 
            array (
                'Item' => 1150102.0,
                'Description' => 'Exemptions on Investment on capital goods',
                'MainItem' => 1150100,
                'MainDescription' => 'Receipts from Customs and Other Import Duties',
                'Cat' => '',
            ),
            377 => 
            array (
                'Item' => 1150101.0,
                'Description' => 'Receipts from Customs Import Duties',
                'MainItem' => 1150100,
                'MainDescription' => 'Receipts from Customs and Other Import Duties',
                'Cat' => '',
            ),
            378 => 
            array (
                'Item' => 1140803.0,
                'Description' => 'Other Receipts from Taxes on Goods and Services',
                'MainItem' => 1140800,
                'MainDescription' => 'Other Receipts from Taxes on Goods and Services',
                'Cat' => '',
            ),
            379 => 
            array (
                'Item' => 1140802.0,
                'Description' => 'Other Penalty Interest and Additional Taxes Related to Taxes on Goods and Services',
                'MainItem' => 1140800,
                'MainDescription' => 'Other Receipts from Taxes on Goods and Services',
                'Cat' => '',
            ),
            380 => 
            array (
                'Item' => 1140801.0,
                'Description' => 'Entertainment Tax',
                'MainItem' => 1140800,
                'MainDescription' => 'Other Receipts from Taxes on Goods and Services',
                'Cat' => '',
            ),
            381 => 
            array (
                'Item' => 1140705.0,
                'Description' => 'Reseipts from Transit/Toll Charges',
                'MainItem' => 1140700,
                'MainDescription' => 'Receipts of Taxes on Goods and Services Collected as AIA',
                'Cat' => '',
            ),
            382 => 
            array (
                'Item' => 1140704.0,
                'Description' => 'Road Use Levy',
                'MainItem' => 1140700,
                'MainDescription' => 'Receipts of Taxes on Goods and Services Collected as AIA',
                'Cat' => '',
            ),
            383 => 
            array (
                'Item' => 1140703.0,
            'Description' => 'Petroleum Development Levy (PDL)',
                'MainItem' => 1140700,
                'MainDescription' => 'Receipts of Taxes on Goods and Services Collected as AIA',
                'Cat' => '',
            ),
            384 => 
            array (
                'Item' => 1140702.0,
            'Description' => 'Consumer Contribution to REP (Maximization Self Help Works) - KPLC',
                'MainItem' => 1140700,
                'MainDescription' => 'Receipts of Taxes on Goods and Services Collected as AIA',
                'Cat' => '',
            ),
            385 => 
            array (
                'Item' => 1140701.0,
                'Description' => '5% Electricity Levy - REP',
                'MainItem' => 1140700,
                'MainDescription' => 'Receipts of Taxes on Goods and Services Collected as AIA',
                'Cat' => '',
            ),
            386 => 
            array (
                'Item' => 1140605.0,
                'Description' => 'Royalties on oil exproration',
                'MainItem' => 1140600,
                'MainDescription' => 'Receipt from Royalties',
                'Cat' => '',
            ),
            387 => 
            array (
                'Item' => 1140604.0,
                'Description' => 'Royalties on Extraction of Minerals',
                'MainItem' => 1140600,
                'MainDescription' => 'Receipt from Royalties',
                'Cat' => '',
            ),
            388 => 
            array (
                'Item' => 1140603.0,
                'Description' => 'Royalty on Carbon Dioxide Gas',
                'MainItem' => 1140600,
                'MainDescription' => 'Receipt from Royalties',
                'Cat' => '',
            ),
            389 => 
            array (
                'Item' => 1140602.0,
                'Description' => 'Royalties on Fuel Wood',
                'MainItem' => 1140600,
                'MainDescription' => 'Receipt from Royalties',
                'Cat' => '',
            ),
            390 => 
            array (
                'Item' => 1140601.0,
                'Description' => 'Timber Royalties',
                'MainItem' => 1140600,
                'MainDescription' => 'Receipt from Royalties',
                'Cat' => '',
            ),
            391 => 
            array (
                'Item' => 1140511.0,
                'Description' => 'Licences under the Communications Act',
                'MainItem' => 1140500,
                'MainDescription' => 'Receipts from Permission to Use the Goods or to Perform Services and Activities',
                'Cat' => '',
            ),
            392 => 
            array (
                'Item' => 1140510.0,
                'Description' => 'Aviation Fees',
                'MainItem' => 1140500,
                'MainDescription' => 'Receipts from Permission to Use the Goods or to Perform Services and Activities',
                'Cat' => '',
            ),
            393 => 
            array (
                'Item' => 1140509.0,
                'Description' => 'Exploration and Mining Licence Fees',
                'MainItem' => 1140500,
                'MainDescription' => 'Receipts from Permission to Use the Goods or to Perform Services and Activities',
                'Cat' => '',
            ),
            394 => 
            array (
                'Item' => 1140508.0,
                'Description' => 'Air Passenger Service Charge',
                'MainItem' => 1140500,
                'MainDescription' => 'Receipts from Permission to Use the Goods or to Perform Services and Activities',
                'Cat' => '',
            ),
            395 => 
            array (
                'Item' => 1140507.0,
                'Description' => 'Licences under Transport Licensing Act',
                'MainItem' => 1140500,
                'MainDescription' => 'Receipts from Permission to Use the Goods or to Perform Services and Activities',
                'Cat' => '',
            ),
            396 => 
            array (
                'Item' => 1140506.0,
                'Description' => 'Licences under Traffic Act',
                'MainItem' => 1140500,
                'MainDescription' => 'Receipts from Permission to Use the Goods or to Perform Services and Activities',
                'Cat' => '',
            ),
            397 => 
            array (
                'Item' => 1140505.0,
                'Description' => '"Licence Fee Under Imports, Exports and Essential Supplies Act"',
                'MainItem' => 1140500,
                'MainDescription' => 'Receipts from Permission to Use the Goods or to Perform Services and Activities',
                'Cat' => '',
            ),
            398 => 
            array (
                'Item' => 1140504.0,
                'Description' => 'Licences Under Stage Plays and Cinemas Act',
                'MainItem' => 1140500,
                'MainDescription' => 'Receipts from Permission to Use the Goods or to Perform Services and Activities',
                'Cat' => '',
            ),
            399 => 
            array (
                'Item' => 1140503.0,
                'Description' => 'Registration of Banks and Financial Institutions',
                'MainItem' => 1140500,
                'MainDescription' => 'Receipts from Permission to Use the Goods or to Perform Services and Activities',
                'Cat' => '',
            ),
            400 => 
            array (
                'Item' => 1140502.0,
                'Description' => 'Electricians Licences',
                'MainItem' => 1140500,
                'MainDescription' => 'Receipts from Permission to Use the Goods or to Perform Services and Activities',
                'Cat' => '',
            ),
            401 => 
            array (
                'Item' => 1140501.0,
                'Description' => 'Liquor Licences',
                'MainItem' => 1140500,
                'MainDescription' => 'Receipts from Permission to Use the Goods or to Perform Services and Activities',
                'Cat' => '',
            ),
            402 => 
            array (
                'Item' => 1140403.0,
                'Description' => 'Insurance/Reinsurance Premium Tax',
                'MainItem' => 1140400,
                'MainDescription' => 'Receipts from Taxes on Specific Services',
                'Cat' => '',
            ),
            403 => 
            array (
                'Item' => 1140402.0,
                'Description' => 'Casino Tax',
                'MainItem' => 1140400,
                'MainDescription' => 'Receipts from Taxes on Specific Services',
                'Cat' => '',
            ),
            404 => 
            array (
                'Item' => 1140401.0,
                'Description' => 'Betting Tax',
                'MainItem' => 1140400,
                'MainDescription' => 'Receipts from Taxes on Specific Services',
                'Cat' => '',
            ),
            405 => 
            array (
                'Item' => 1140306.0,
                'Description' => 'Excise Receipts on Other Products',
                'MainItem' => 1140300,
                'MainDescription' => 'Excise Receipts',
                'Cat' => '',
            ),
            406 => 
            array (
                'Item' => 1140305.0,
                'Description' => 'Excise Receipts on Imported Motor Vehicles',
                'MainItem' => 1140300,
                'MainDescription' => 'Excise Receipts',
                'Cat' => '',
            ),
            407 => 
            array (
                'Item' => 1140304.0,
                'Description' => 'Excise Receipts on Air Time',
                'MainItem' => 1140300,
                'MainDescription' => 'Excise Receipts',
                'Cat' => '',
            ),
            408 => 
            array (
                'Item' => 1140303.0,
                'Description' => 'Excise Receipts on Cigarettes and Tobacco Products',
                'MainItem' => 1140300,
                'MainDescription' => 'Excise Receipts',
                'Cat' => '',
            ),
            409 => 
            array (
                'Item' => 1140302.0,
                'Description' => 'Excise Receipts on Alcoholic Beverages',
                'MainItem' => 1140300,
                'MainDescription' => 'Excise Receipts',
                'Cat' => '',
            ),
            410 => 
            array (
                'Item' => 1140301.0,
                'Description' => 'Excise Receipts on Oil',
                'MainItem' => 1140300,
                'MainDescription' => 'Excise Receipts',
                'Cat' => '',
            ),
            411 => 
            array (
                'Item' => 1140201.0,
                'Description' => 'Receipts from VAT on Imported Goods and Services',
                'MainItem' => 1140200,
                'MainDescription' => 'Receipts from VAT on Imported Goods and Services',
                'Cat' => '',
            ),
            412 => 
            array (
                'Item' => 1140106.0,
                'Description' => 'VAT Refund for Individuals',
                'MainItem' => 1140100,
                'MainDescription' => 'Receipts from VAT on Domestic Goods and Services',
                'Cat' => '',
            ),
            413 => 
            array (
                'Item' => 1140105.0,
                'Description' => 'VAT Refund for Corporations',
                'MainItem' => 1140100,
                'MainDescription' => 'Receipts from VAT on Domestic Goods and Services',
                'Cat' => '',
            ),
            414 => 
            array (
                'Item' => 1140104.0,
                'Description' => 'VAT refund to NGO\'s',
                'MainItem' => 1140100,
                'MainDescription' => 'Receipts from VAT on Domestic Goods and Services',
                'Cat' => '',
            ),
            415 => 
            array (
                'Item' => 1140103.0,
                'Description' => 'Penalty Interest and Additional Taxes on VAT on Domestic Goods and Services',
                'MainItem' => 1140100,
                'MainDescription' => 'Receipts from VAT on Domestic Goods and Services',
                'Cat' => '',
            ),
            416 => 
            array (
                'Item' => 1140102.0,
                'Description' => 'Refunds of VAT on Domestic Goods and Services',
                'MainItem' => 1140100,
                'MainDescription' => 'Receipts from VAT on Domestic Goods and Services',
                'Cat' => '',
            ),
            417 => 
            array (
                'Item' => 1140101.0,
                'Description' => 'Receipts from VAT on Domestic Goods and Services',
                'MainItem' => 1140100,
                'MainDescription' => 'Receipts from VAT on Domestic Goods and Services',
                'Cat' => '',
            ),
            418 => 
            array (
                'Item' => 1130302.0,
                'Description' => 'Receipts from Other Recurrent Taxes on Property',
                'MainItem' => 1130300,
                'MainDescription' => 'Receipts from Other Taxes on Property',
                'Cat' => '',
            ),
            419 => 
            array (
                'Item' => 1130301.0,
                'Description' => 'Receipts from Other Non-Recurrent Taxes on Property',
                'MainItem' => 1130300,
                'MainDescription' => 'Receipts from Other Taxes on Property',
                'Cat' => '',
            ),
            420 => 
            array (
                'Item' => 1130206.0,
                'Description' => 'Tax Exemption for Corporations',
                'MainItem' => 1130200,
                'MainDescription' => 'Receipts from Taxes on Financial and Capital Transactions',
                'Cat' => '',
            ),
            421 => 
            array (
                'Item' => 1130205.0,
                'Description' => 'Tax Exemption for Government Institutions',
                'MainItem' => 1130200,
                'MainDescription' => 'Receipts from Taxes on Financial and Capital Transactions',
                'Cat' => '',
            ),
            422 => 
            array (
                'Item' => 1130204.0,
                'Description' => 'Tax Exemptions for NGOs',
                'MainItem' => 1130200,
                'MainDescription' => 'Receipts from Taxes on Financial and Capital Transactions',
                'Cat' => '',
            ),
            423 => 
            array (
                'Item' => 1130203.0,
            'Description' => 'Tax on Payments from Bank Accounts (2 Sh per transaction)',
                'MainItem' => 1130200,
                'MainDescription' => 'Receipts from Taxes on Financial and Capital Transactions',
                'Cat' => '',
            ),
            424 => 
            array (
                'Item' => 1130202.0,
                'Description' => 'Second-Hand Motor Vehicle Purchase Tax',
                'MainItem' => 1130200,
                'MainDescription' => 'Receipts from Taxes on Financial and Capital Transactions',
                'Cat' => '',
            ),
            425 => 
            array (
                'Item' => 1130201.0,
                'Description' => 'Tax on Property Transfers and Sales',
                'MainItem' => 1130200,
                'MainDescription' => 'Receipts from Taxes on Financial and Capital Transactions',
                'Cat' => '',
            ),
            426 => 
            array (
                'Item' => 1130106.0,
                'Description' => 'Exemptions on Government Institutions',
                'MainItem' => 1130100,
                'MainDescription' => 'Recurrent Taxes on Immovable Property',
                'Cat' => '',
            ),
            427 => 
            array (
                'Item' => 1130105.0,
                'Description' => 'Other Recurrent Taxes on Immovable Property',
                'MainItem' => 1130100,
                'MainDescription' => 'Recurrent Taxes on Immovable Property',
                'Cat' => '',
            ),
            428 => 
            array (
                'Item' => 1130104.0,
                'Description' => 'Property Rates - Local Authority Revenue',
                'MainItem' => 1130100,
                'MainDescription' => 'Recurrent Taxes on Immovable Property',
                'Cat' => '',
            ),
            429 => 
            array (
                'Item' => 1130103.0,
                'Description' => 'CILOR - Local Authority Revenue',
                'MainItem' => 1130100,
                'MainDescription' => 'Recurrent Taxes on Immovable Property',
                'Cat' => '',
            ),
            430 => 
            array (
                'Item' => 1130102.0,
                'Description' => 'Plot Rates - Local Authority Taxes',
                'MainItem' => 1130100,
                'MainDescription' => 'Recurrent Taxes on Immovable Property',
                'Cat' => '',
            ),
            431 => 
            array (
                'Item' => 1130101.0,
            'Description' => 'Stand Premia on Town Plots (Land Leasehold Tax)',
                'MainItem' => 1130100,
                'MainDescription' => 'Recurrent Taxes on Immovable Property',
                'Cat' => '',
            ),
            432 => 
            array (
                'Item' => 1110301.0,
                'Description' => 'Withholding Tax',
                'MainItem' => 1110300,
                'MainDescription' => 'Receipts from Withholding Tax',
                'Cat' => '',
            ),
            433 => 
            array (
                'Item' => 1110206.0,
                'Description' => 'Income Tax Exemptions for Government Institutions',
                'MainItem' => 1110200,
                'MainDescription' => 'Receipts of Income Tax from Corporations',
                'Cat' => '',
            ),
            434 => 
            array (
                'Item' => 1110205.0,
                'Description' => 'Income Tax Exemptions',
                'MainItem' => 1110200,
                'MainDescription' => 'Receipts of Income Tax from Corporations',
                'Cat' => '',
            ),
            435 => 
            array (
                'Item' => 1110204.0,
                'Description' => '"Penalties, Interest and Additional Taxes"',
                'MainItem' => 1110200,
                'MainDescription' => 'Receipts of Income Tax from Corporations',
                'Cat' => '',
            ),
            436 => 
            array (
                'Item' => 1110203.0,
                'Description' => 'Income Tax Refunds',
                'MainItem' => 1110200,
                'MainDescription' => 'Receipts of Income Tax from Corporations',
                'Cat' => '',
            ),
            437 => 
            array (
                'Item' => 1110202.0,
                'Description' => 'Other Income Tax on Corporations',
                'MainItem' => 1110200,
                'MainDescription' => 'Receipts of Income Tax from Corporations',
                'Cat' => '',
            ),
            438 => 
            array (
                'Item' => 1110201.0,
                'Description' => 'Corporate Income Tax',
                'MainItem' => 1110200,
                'MainDescription' => 'Receipts of Income Tax from Corporations',
                'Cat' => '',
            ),
            439 => 
            array (
                'Item' => 1110106.0,
                'Description' => '"Penalties, Interest and Additional Taxes"',
                'MainItem' => 1110100,
                'MainDescription' => 'Receipt of Income Tax from Individuals',
                'Cat' => '',
            ),
            440 => 
            array (
                'Item' => 1110105.0,
                'Description' => 'Income Tax Refunds',
                'MainItem' => 1110100,
                'MainDescription' => 'Receipt of Income Tax from Individuals',
                'Cat' => '',
            ),
            441 => 
            array (
                'Item' => 1110104.0,
                'Description' => 'Cess Receipts - Local Authority Tax',
                'MainItem' => 1110100,
                'MainDescription' => 'Receipt of Income Tax from Individuals',
                'Cat' => '',
            ),
            442 => 
            array (
                'Item' => 1110103.0,
                'Description' => 'Other Income Tax on Individuals',
                'MainItem' => 1110100,
                'MainDescription' => 'Receipt of Income Tax from Individuals',
                'Cat' => '',
            ),
            443 => 
            array (
                'Item' => 1110102.0,
                'Description' => 'Personal Income Tax - PAYE Others',
                'MainItem' => 1110100,
                'MainDescription' => 'Receipt of Income Tax from Individuals',
                'Cat' => '',
            ),
            444 => 
            array (
                'Item' => 1110101.0,
                'Description' => 'Personal Income Tax - PAYE Government Employees',
                'MainItem' => 1110100,
                'MainDescription' => 'Receipt of Income Tax from Individuals',
                'Cat' => '',
            ),
            445 => 
            array (
                'Item' => 0.0,
                'Description' => 'Undefined Subitem',
                'MainItem' => 0,
                'MainDescription' => 'Undefined Item',
                'Cat' => '0',
            ),
        ));
        
        
    }
}
