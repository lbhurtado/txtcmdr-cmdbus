<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('provinces')->delete();

        $provinces = array(
            ['region_code' => '010000000', 'code' => '012800000', 'name' => 'Ilocos Norte'],
            ['region_code' => '010000000', 'code' => '012900000', 'name' => 'Ilocos Sur'],
            ['region_code' => '010000000', 'code' => '013300000', 'name' => 'La Union'],
            ['region_code' => '010000000', 'code' => '015500000', 'name' => 'Pangasinan'],

            ['region_code' => '020000000', 'code' => '025000000', 'name' => 'Nueva Viscaya'],
            ['region_code' => '020000000', 'code' => '021500000', 'name' => 'Cagayan'],
            ['region_code' => '020000000', 'code' => '023100000', 'name' => 'Isabela'],
            ['region_code' => '020000000', 'code' => '025700000', 'name' => 'Quirino'],
            ['region_code' => '020000000', 'code' => '020900000', 'name' => 'Batanes'],

            ['region_code' => '030000000', 'code' => '030800000', 'name' => 'Bataan'],
            ['region_code' => '030000000', 'code' => '037100000', 'name' => 'Zambales'],
            ['region_code' => '030000000', 'code' => '036900000', 'name' => 'Tarlac'],
            ['region_code' => '030000000', 'code' => '035400000', 'name' => 'Pampanga'],
            ['region_code' => '030000000', 'code' => '031400000', 'name' => 'Bulacan'],
            ['region_code' => '030000000', 'code' => '034900000', 'name' => 'Nueva Ecija'],
            ['region_code' => '030000000', 'code' => '037700000', 'name' => 'Aurora'],

        );

        // Uncomment the below to run the seeder
        DB::table('provinces')->insert($provinces);
    }
}
