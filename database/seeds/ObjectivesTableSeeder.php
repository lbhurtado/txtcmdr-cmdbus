<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 08/12/15
 * Time: 07:01
 */

use Illuminate\Database\Seeder;

class ObjectivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('objectives')->delete();

        $project_id = array(
            'txtcmdr' => DB::table('projects')->where('name', '=', 'txtcmdr')->pluck('id'),
        );

        $objectives = array(
            ['project_id' => $project_id['txtcmdr'], 'name' => "recruit"],
            ['project_id' => $project_id['txtcmdr'], 'name' => "poll watch"],
            ['project_id' => $project_id['txtcmdr'], 'name' => "quick count"],
        );

        // Uncomment the below to run the seeder
        DB::table('objectives')->insert($objectives);
    }
}