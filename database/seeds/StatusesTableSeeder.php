<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 07/12/15
 * Time: 22:05
 */

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
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

        $user_id = array(
            'lbhurtado' => DB::table('users')->where('name', '=', 'lbhurtado')->pluck('id'),
        );

        $project_id = array(
            'txtcmdr' => DB::table('projects')->where('name', '=', 'txtcmdr')->pluck('id'),
        );

        $statuses = array(
            ['project_id' => $project_id['txtcmdr'], 'user_id' => $user_id['lbhurtado'], 'name' => "initial"],
        );

        // Uncomment the below to run the seeder
        DB::table('statuses')->insert($statuses);
    }
}