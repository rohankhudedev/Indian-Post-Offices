<?php

namespace Database\Seeders;

use App\Models\Circle;
use App\Models\District;
use App\Models\Division;
use App\Models\Pincode;
use App\Models\PostOffice;
use App\Models\Region;
use App\Models\State;
use App\Models\Taluk;
use Illuminate\Database\Seeder;

class PostOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = fopen('http://data.gov.in/sites/default/files/all_india_pin_code.csv', 'r');

        $firstRow = true;
        while (($row = fgetcsv($csv)) !== FALSE)
//        while (!feof($csv))
        {
            $row = fgetcsv($csv);
            if (!$firstRow)
            {
                PostOffice::firstOrCreate([
                    'office_name'     => trim($row['0']),
                    'pincode_id'      => Pincode::firstOrCreate(['name' => trim($row['1'])])->id,
                    'office_type'     => trim($row['2']),
                    'delivery_status' => (trim($row['3']) === 'Delivery') ? 1 : 0,
                    'division_id'     => Division::firstOrCreate(['name' => trim($row['4'])])->id,
                    'region_id'       => Region::firstOrCreate(['name' => trim($row['5'])])->id,
                    'circle_id'       => Circle::firstOrCreate(['name' => trim($row['6'])])->id,
                    'taluk_id'        => Taluk::firstOrCreate(['name' => trim($row['7'])])->id,
                    'district_id'     => District::firstOrCreate(['name' => trim($row['8'])])->id,
                    'state_id'        => State::firstOrCreate(['name' => trim($row['9'])])->id,
                ]);
            }
            $firstRow = false;
        }
        fclose($csv);
    }
}
