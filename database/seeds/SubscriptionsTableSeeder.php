<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 16/12/15
 * Time: 12:52
 */

use Illuminate\Database\Seeder;

class SubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('subscriptions')->delete();

        $project_id = array(
            'txtcmdr' => DB::table('projects')->where('name', '=', 'txtcmdr')->pluck('id'),
            'duterte' => DB::table('projects')->where('name', '=', 'duterte')->pluck('id'),
            'baligod' => DB::table('projects')->where('name', '=', 'baligod')->pluck('id'),
        );

        $subscriptions = array(
            ['project_id' => $project_id['txtcmdr'], 'name' => "news"],
            ['project_id' => $project_id['duterte'], 'name' => "news"],
            ['project_id' => $project_id['duterte'], 'name' => "circular"],
            ['project_id' => $project_id['baligod'], 'name' => "news"],
            ['project_id' => $project_id['baligod'], 'name' => "circular"],
        );

        // Uncomment the below to run the seeder
        DB::table('subscriptions')->insert($subscriptions);
    }
}