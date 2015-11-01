<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('regions')->delete();

        $regions = array(
            ['id' => '010000000', 'code' => "1",    'name' => 'REGION I (Ilocos Region)'],
            ['id' => '020000000', 'code' => "2",    'name' => 'REGION II (Cagayan Valley)'],
            ['id' => '030000000', 'code' => "3",    'name' => 'REGION III (Central Luzon)'],
            ['id' => '040000000', 'code' => "4A",   'name' => 'REGION IV-A (CALABARZON)'],
            ['id' => '050000000', 'code' => "5",    'name' => 'REGION V (Bicol Region)'],
            ['id' => '060000000', 'code' => "6",    'name' => 'REGION VI (Western Visayas)'],
            ['id' => '070000000', 'code' => "7",    'name' => 'REGION VII (Central Visayas)'],
            ['id' => '080000000', 'code' => "8",    'name' => 'REGION VIII (Eastern Visayas)'],
            ['id' => '090000000', 'code' => "9",    'name' => 'REGION IX (Zamboanga Peninsula)'],
            ['id' => '100000000', 'code' => "10",   'name' => 'REGION X (Northern Mindanao)'],
            ['id' => '110000000', 'code' => "11",   'name' => 'REGION XI (Davao Region)'],
            ['id' => '120000000', 'code' => "12",   'name' => 'REGION XII (Soccsksargen)'],
            ['id' => '130000000', 'code' => "NCR",  'name' => 'NCR - National Capital Region'],
            ['id' => '140000000', 'code' => "CAR",  'name' => 'CAR - Cordillera Administrative Region'],
            ['id' => '150000000', 'code' => "ARMM", 'name' => 'ARMM - Autonomous Region in Muslim Mindanao'],
            ['id' => '160000000', 'code' => "13",   'name' => 'REGION XIII (Caraga)'],
            ['id' => '170000000', 'code' => "4B",   'name' => 'REGION IV-B (MIMAROPA)'],
            ['id' => '180000000', 'code' => "NEGROS", 'name' => 'NEGROS ISLAND REGION (NIR)'],
        );

        // Uncomment the below to run the seeder
        DB::table('regions')->insert($regions);
    }
}
