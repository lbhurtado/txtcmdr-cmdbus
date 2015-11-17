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
            ['id' => '010000000', 'island_group_id' => 'L', 'code' => "1",        'name' => 'REGION I (Ilocos Region)'],
            ['id' => '020000000', 'island_group_id' => 'L', 'code' => "2",        'name' => 'REGION II (Cagayan Valley)'],
            ['id' => '030000000', 'island_group_id' => 'L', 'code' => "3",        'name' => 'REGION III (Central Luzon)'],
            ['id' => '040000000', 'island_group_id' => 'L', 'code' => "4A",       'name' => 'REGION IV-A (CALABARZON)'],
            ['id' => '050000000', 'island_group_id' => 'L', 'code' => "5",        'name' => 'REGION V (Bicol Region)'],
            ['id' => '060000000', 'island_group_id' => 'V', 'code' => "6",        'name' => 'REGION VI (Western Visayas)'],
            ['id' => '070000000', 'island_group_id' => 'V', 'code' => "7",        'name' => 'REGION VII (Central Visayas)'],
            ['id' => '080000000', 'island_group_id' => 'V', 'code' => "8",        'name' => 'REGION VIII (Eastern Visayas)'],
            ['id' => '090000000', 'island_group_id' => 'M', 'code' => "9",        'name' => 'REGION IX (Zamboanga Peninsula)'],
            ['id' => '100000000', 'island_group_id' => 'M', 'code' => "10",       'name' => 'REGION X (Northern Mindanao)'],
            ['id' => '110000000', 'island_group_id' => 'M', 'code' => "11",       'name' => 'REGION XI (Davao Region)'],
            ['id' => '120000000', 'island_group_id' => 'M', 'code' => "12",       'name' => 'REGION XII (Soccsksargen)'],
            ['id' => '130000000', 'island_group_id' => 'L', 'code' => "NCR",      'name' => 'NCR - National Capital Region'],
            ['id' => '140000000', 'island_group_id' => 'L', 'code' => "CAR",      'name' => 'CAR - Cordillera Administrative Region'],
            ['id' => '150000000', 'island_group_id' => 'M', 'code' => "ARMM",     'name' => 'ARMM - Autonomous Region in Muslim Mindanao'],
            ['id' => '160000000', 'island_group_id' => 'M', 'code' => "13",       'name' => 'REGION XIII (Caraga)'],
            ['id' => '170000000', 'island_group_id' => 'L', 'code' => "4B",       'name' => 'REGION IV-B (MIMAROPA)'],
            ['id' => '180000000', 'island_group_id' => 'V', 'code' => "NEGROS",   'name' => 'NEGROS ISLAND REGION (NIR)'],
        );

        // Uncomment the below to run the seeder
        DB::table('regions')->insert($regions);
    }
}
