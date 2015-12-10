<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 05/12/15
 * Time: 17:56
 */

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
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

        $projects = array(
            ['id'=> 1, 'name' => "txtcmdr"],
            ['id'=> 2, 'name' => "duterte"],
            ['id'=> 3, 'name' => "baligod"],
            ['id'=> 4, 'name' => "marcos"]
        );

        // Uncomment the below to run the seeder
        DB::table('projects')->insert($projects);
    }
}