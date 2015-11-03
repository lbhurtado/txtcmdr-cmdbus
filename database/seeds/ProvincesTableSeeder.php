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
            ['region_id' => '010000000', 'id' => '012800000', 'name' => 'Ilocos Norte'],
            ['region_id' => '010000000', 'id' => '012900000', 'name' => 'Ilocos Sur'],
            ['region_id' => '010000000', 'id' => '013300000', 'name' => 'La Union'],
            ['region_id' => '010000000', 'id' => '015500000', 'name' => 'Pangasinan'],

            ['region_id' => '020000000', 'id' => '025000000', 'name' => 'Nueva Viscaya'],
            ['region_id' => '020000000', 'id' => '021500000', 'name' => 'Cagayan'],
            ['region_id' => '020000000', 'id' => '023100000', 'name' => 'Isabela'],
            ['region_id' => '020000000', 'id' => '025700000', 'name' => 'Quirino'],
            ['region_id' => '020000000', 'id' => '020900000', 'name' => 'Batanes'],

            ['region_id' => '030000000', 'id' => '030800000', 'name' => 'Bataan'],
            ['region_id' => '030000000', 'id' => '037100000', 'name' => 'Zambales'],
            ['region_id' => '030000000', 'id' => '036900000', 'name' => 'Tarlac'],
            ['region_id' => '030000000', 'id' => '035400000', 'name' => 'Pampanga'],
            ['region_id' => '030000000', 'id' => '031400000', 'name' => 'Bulacan'],
            ['region_id' => '030000000', 'id' => '034900000', 'name' => 'Nueva Ecija'],
            ['region_id' => '030000000', 'id' => '037700000', 'name' => 'Aurora'],
        );

        // Uncomment the below to run the seeder
        DB::table('provinces')->insert($provinces);
    }
}
