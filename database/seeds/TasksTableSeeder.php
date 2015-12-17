<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 07/12/15
 * Time: 22:36
 */

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('tasks')->delete();

        $project_id = array(
            'txtcmdr' => DB::table('projects')
                ->where('name', '=', 'txtcmdr')->pluck('id')
        );

        $objective_id = array(
            'txtcmdr recruit' => DB::table('objectives')
                ->where('name', '=', 'recruit')
                ->where('project_id', '=', $project_id['txtcmdr'])
                ->pluck('id'),
            'txtcmdr poll watch' => DB::table('objectives')
                ->where('name', '=', 'poll watch')
                ->where('project_id', '=', $project_id['txtcmdr'])
                ->pluck('id'),
            'txtcmdr quick count' => DB::table('objectives')
                ->where('name', '=', 'quick count')
                ->where('project_id', '=', $project_id['txtcmdr'])
                ->pluck('id'),
        );

        $tasks = array(
            [
                'objective_id'      => $objective_id['txtcmdr recruit'],
                'quota'             => 100,
                'sequence'          => 1,
                'transcript_code'   => "recruit",
                'regex'             => "^recruit (0|63)([1-9]{3})([0-9]{7})$"
            ],
            [
                'objective_id'      => $objective_id['txtcmdr recruit'],
                'quota'             => 100,
                'sequence'          => 2,
                'transcript_code'   => "confirm",
                'regex'             => "^confirm ([0-9]{4}|[0-9]{6}) ([ -~]+) ([0-9]{2})$"
            ],
//            ['objective_id' => $objective_id['txtcmdr recruit'],     'sequence' => 1, 'name' => "recruit 1st 100"],
//            ['objective_id' => $objective_id['txtcmdr recruit'],     'sequence' => 2, 'name' => "recruit 2nd 100"],
//            ['objective_id' => $objective_id['txtcmdr recruit'],     'sequence' => 3, 'name' => "recruit 3rd 100"],
//            ['objective_id' => $objective_id['txtcmdr recruit'],     'sequence' => 4, 'name' => "recruit 4th 100"],
//            ['objective_id' => $objective_id['txtcmdr recruit'],     'sequence' => 5, 'name' => "recruit 5th 100"],
            [
                'objective_id'      => $objective_id['txtcmdr poll watch'],
                'quota'             => 1,
                'sequence'          => 1,
                'transcript_code'   => "registration",
                'regex'             => "^(here|dito)$"
            ],
            [
                'objective_id'      => $objective_id['txtcmdr poll watch'],
                'quota'             => 1,
                'sequence'          => 2,
                'transcript_code'   => "initialization",
                'regex'             => "^zero$"
            ],
            [
                'objective_id'      => $objective_id['txtcmdr poll watch'],
                'quota'             => 1,
                'sequence'          => 3,
                'transcript_code'   => "finalization",
                'regex'             => "^final$"
            ],
            [
                'objective_id'      => $objective_id['txtcmdr poll watch'],
                'quota'             => 1,
                'sequence'          => 3,
                'transcript_code'   => "printing",
                'regex'             => "^print$"
            ],
            [
                'objective_id'      => $objective_id['txtcmdr poll watch'],
                'quota'             => 1,
                'sequence'          => 3,
                'transcript_code'   => "transmission",
                'regex'             => "^transmit$"
            ],
//            ['objective_id' => $objective_id['txtcmdr quick count'], 'sequence' => 1, 'name' => "poll presidents"],
//            ['objective_id' => $objective_id['txtcmdr quick count'], 'sequence' => 2, 'name' => "poll vice-presidents"],
//            ['objective_id' => $objective_id['txtcmdr quick count'], 'sequence' => 3, 'name' => "poll senators"],
//            ['objective_id' => $objective_id['txtcmdr quick count'], 'sequence' => 4, 'name' => "poll governors"],
//            ['objective_id' => $objective_id['txtcmdr quick count'], 'sequence' => 5, 'name' => "poll vice-governors"],
//            ['objective_id' => $objective_id['txtcmdr quick count'], 'sequence' => 6, 'name' => "poll congressmen"],
//            ['objective_id' => $objective_id['txtcmdr quick count'], 'sequence' => 7, 'name' => "poll mayors"],
//            ['objective_id' => $objective_id['txtcmdr quick count'], 'sequence' => 8, 'name' => "poll vice-mayors"],
        );

        // Uncomment the below to run the seeder
        DB::table('tasks')->insert($tasks);
    }
}