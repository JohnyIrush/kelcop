<?

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Center; // Replace 'Centre' with your actual Eloquent model

class CenterSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['Centre' => '11-TNZ', 'Description' => 'Trans Nzoia County', 'Area' => ''],
            ['Centre' => '10-SYA', 'Description' => 'Siaya County', 'Area' => ''],
            ['Centre' => '09-SAM', 'Description' => 'Samburu County', 'Area' => ''],
            ['Centre' => '08-NAK', 'Description' => 'Nakuru County', 'Area' => ''],
            ['Centre' => '07-MAR', 'Description' => 'Marsabit County', 'Area' => ''],
            ['Centre' => '06-KKM', 'Description' => 'Kakamega County', 'Area' => ''],
            ['Centre' => '05-ELM', 'Description' => 'Elgeyo Marakwet County', 'Area' => ''],
            ['Centre' => '04-BSA', 'Description' => 'Busia County', 'Area' => ''],
            ['Centre' => '03-BGM', 'Description' => 'Bungoma County', 'Area' => ''],
            ['Centre' => '02-BAR', 'Description' => 'Baringo County', 'Area' => ''],
            ['Centre' => '01-PCU-7', 'Description' => 'IFAD Desk Officer', 'Area' => ''],
            ['Centre' => '01-PCU-6', 'Description' => 'Administration Assistant', 'Area' => ''],
            ['Centre' => '01-PCU-5', 'Description' => 'Finance Controller', 'Area' => ''],
            ['Centre' => '01-PCU-4', 'Description' => 'Procurement Specialist', 'Area' => ''],
            ['Centre' => '01-PCU-3', 'Description' => 'Monitoring and Evaluation Specialist', 'Area' => ''],
            ['Centre' => '01-PCU-2', 'Description' => 'Livestock Marketing Specialist', 'Area' => ''],
            ['Centre' => '01-PCU-1-S', 'Description' => 'Social Inclusion Specialist', 'Area' => ''],
            ['Centre' => '01-PCU-1-L', 'Description' => 'Livestock Production Specialist', 'Area' => ''],
            ['Centre' => '01-PCU-1-E', 'Description' => 'Environment Climate and Safeguards Specialist', 'Area' => ''],
        ];

        Center::insert($data);
    }
}
