<?php

use Illuminate\Database\Seeder;

class IslandGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('island_groups')->delete();

        $island_groups = array(
            ['id' => 'L', 'name' => "Luzon"],
            ['id' => 'V', 'name' => "Visayas"],
            ['id' => 'M', 'name' => "Mindanao"]
        );

        // Uncomment the below to run the seeder
        DB::table('island_groups')->insert($island_groups);
    }
}
