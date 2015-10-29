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
            ['code' => '010000000', 'name' => 'REGION I (Ilocos Region)'],
            ['code' => '020000000', 'name' => 'REGION II (Cagayan Valley)'],
            ['code' => '030000000', 'name' => 'REGION III (Central Luzon)'],
            ['code' => '040000000', 'name' => 'REGION IV-A (CALABARZON)'],
            ['code' => '050000000', 'name' => 'REGION V (Bicol Region)'],
            ['code' => '060000000', 'name' => 'REGION VI (Western Visayas)'],
            ['code' => '070000000', 'name' => 'REGION VII (Central Visayas)'],
            ['code' => '080000000', 'name' => 'REGION VIII (Eastern Visayas)'],
            ['code' => '090000000', 'name' => 'REGION IX (Zamboanga Peninsula)'],
            ['code' => '100000000', 'name' => 'REGION X (Northern Mindanao)'],
            ['code' => '110000000', 'name' => 'REGION XI (Davao Region)'],
            ['code' => '120000000', 'name' => 'REGION XII (Soccsksargen)'],
            ['code' => '130000000', 'name' => 'NCR - National Capital Region'],
            ['code' => '140000000', 'name' => 'CAR - Cordillera Administrative Region'],
            ['code' => '150000000', 'name' => 'ARMM - Autonomous Region in Muslim Mindanao'],
            ['code' => '160000000', 'name' => 'REGION XIII (Caraga)'],
            ['code' => '170000000', 'name' => 'REGION IV-B (MIMAROPA)'],
            ['code' => '180000000', 'name' => 'NEGROS ISLAND REGION (NIR)'],
        );

        // Uncomment the below to run the seeder
        DB::table('regions')->insert($regions);
    }
}
