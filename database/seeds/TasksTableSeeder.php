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
//            ['objective_id' => $objective_id['txtcmdr recruit'],     'sequence' => 1, 'name' => "recruit 1st 100"],
//            ['objective_id' => $objective_id['txtcmdr recruit'],     'sequence' => 2, 'name' => "recruit 2nd 100"],
//            ['objective_id' => $objective_id['txtcmdr recruit'],     'sequence' => 3, 'name' => "recruit 3rd 100"],
//            ['objective_id' => $objective_id['txtcmdr recruit'],     'sequence' => 4, 'name' => "recruit 4th 100"],
//            ['objective_id' => $objective_id['txtcmdr recruit'],     'sequence' => 5, 'name' => "recruit 5th 100"],
            [
                'objective_id'  => $objective_id['txtcmdr poll watch'],
                'sequence'      => 1,
                'name'          => "registration",
                'instructions'  => "Go to your precinct. Send 'HERE' when you get there.",
                'regex'         => "here"
            ],
            [
                'objective_id'  => $objective_id['txtcmdr poll watch'],
                'sequence'      => 1,
                'name'          => "initialization",
                'instructions'  => "Observe the initialization of the PCOS machine . Send 'ZERO' when you see all the zeroes in the receipt.",
                'regex'         => "zero"
            ],
            [
                'objective_id'  => $objective_id['txtcmdr poll watch'],
                'sequence'      => 1,
                'name'          => "finalization",
                'instructions'  => "Observe the finalization of the PCOS machine . Send 'final' when you see the receipt.",
                'regex'         => "final"
            ],
//            ['objective_id' => $objective_id['txtcmdr poll watch'],  'sequence' => 4, 'name' => "printing"],
//            ['objective_id' => $objective_id['txtcmdr poll watch'],  'sequence' => 5, 'name' => "transmission"],
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