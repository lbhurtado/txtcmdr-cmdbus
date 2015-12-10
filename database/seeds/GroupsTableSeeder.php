<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('groups')->delete();

        $project_id = array(
            'txtcmdr' => DB::table('projects')->where('name', '=', 'txtcmdr')->pluck('id'),
            'duterte' => DB::table('projects')->where('name', '=', 'duterte')->pluck('id'),
            'baligod' => DB::table('projects')->where('name', '=', 'baligod')->pluck('id'),
        );

        $groups = array(
            ['project_id' => $project_id['txtcmdr'], 'name' => "testers"],
            ['project_id' => $project_id['duterte'], 'name' => "cadre"],
            ['project_id' => $project_id['duterte'], 'name' => "research"],
            ['project_id' => $project_id['duterte'], 'name' => "training"],
            ['project_id' => $project_id['duterte'], 'name' => "supply"],
            ['project_id' => $project_id['duterte'], 'name' => "advocacy"],
            ['project_id' => $project_id['duterte'], 'name' => "legal"],
            ['project_id' => $project_id['duterte'], 'name' => "security"],
            ['project_id' => $project_id['duterte'], 'name' => "regional coordinators"],
            ['project_id' => $project_id['duterte'], 'name' => "provincial coordinators"],
            ['project_id' => $project_id['duterte'], 'name' => "municipal coordinators"],
            ['project_id' => $project_id['duterte'], 'name' => "barangay coordinators"],
            ['project_id' => $project_id['duterte'], 'name' => "grassroots"],
            ['project_id' => $project_id['baligod'], 'name' => "personnel"],
            ['project_id' => $project_id['baligod'], 'name' => "intelligence"],
            ['project_id' => $project_id['baligod'], 'name' => "operation"],
            ['project_id' => $project_id['baligod'], 'name' => "logistics"],
            ['project_id' => $project_id['baligod'], 'name' => "liasons"],
            ['project_id' => $project_id['baligod'], 'name' => "budget"],
            ['project_id' => $project_id['baligod'], 'name' => "security"],
            ['project_id' => $project_id['baligod'], 'name' => "grassroots"],
        );

        // Uncomment the below to run the seeder
        DB::table('groups')->insert($groups);
    }
}
