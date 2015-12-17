<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 16/12/15
 * Time: 14:15
 */

use Illuminate\Database\Seeder;

class ConferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('conferences')->delete();

        $project_id = array(
            'txtcmdr' => DB::table('projects')->where('name', '=', 'txtcmdr')->pluck('id'),
            'duterte' => DB::table('projects')->where('name', '=', 'duterte')->pluck('id'),
            'baligod' => DB::table('projects')->where('name', '=', 'baligod')->pluck('id'),
        );

        $conferences = array(
            ['project_id' => $project_id['txtcmdr'], 'name' => "cadre"],
            ['project_id' => $project_id['duterte'], 'name' => "cadre"],
            ['project_id' => $project_id['duterte'], 'name' => "open forum"],
            ['project_id' => $project_id['baligod'], 'name' => "cadre"],
            ['project_id' => $project_id['baligod'], 'name' => "open forum"],
        );

        // Uncomment the below to run the seeder
        DB::table('conferences')->insert($conferences);
    }
}