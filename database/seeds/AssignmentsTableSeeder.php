<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 08/12/15
 * Time: 21:14
 */

use Illuminate\Database\Seeder;

class AssignmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('assignments')->delete();

        $user_id = array(
            'lbhurtado' => DB::table('users')->where('name', '=', 'lbhurtado')->pluck('id')
        );

        $project_id = array(
            'txtcmdr' => DB::table('projects')
                ->where('name', '=', 'txtcmdr')->pluck('id')
        );

        $tasks = DB::table('tasks')->get();

        $errands = [];
        foreach ($tasks as $task)
        {
            array_push($errands,[
                'task_id' => $task->id,
                'user_id' => $user_id['lbhurtado'],
            ]);

        }

        // Uncomment the below to run the seeder
        DB::table('assignments')->insert($errands);
    }
}