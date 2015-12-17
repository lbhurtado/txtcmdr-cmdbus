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
        DB::table('statuses')->delete();

        $user_id = array(
            'lbhurtado' => DB::table('users')->where('name', '=', 'lbhurtado')->pluck('id'),
        );

        $project_id = array(
            'txtcmdr' => DB::table('projects')->where('name', '=', 'txtcmdr')->pluck('id'),
        );

        $statuses = array(
            ['project_id' => $project_id['txtcmdr'], 'user_id' => $user_id['lbhurtado'], 'status' => "initial"],
            ['project_id' => $project_id['txtcmdr'], 'user_id' => $user_id['lbhurtado'], 'status' => "2nd time"],
        );

        // Uncomment the below to run the seeder
        DB::table('statuses')->insert($statuses);

//        DB::table('statuses')
//            ->where('project_id','=',$project_id['txtcmdr'])
//            ->where('user_id','=',$user_id['lbhurtado'])
//            ->update(['status'=>"2nd time"]);

    }
}