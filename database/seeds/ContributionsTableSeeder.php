<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 13/12/15
 * Time: 09:57
 */

use Illuminate\Database\Seeder;

class ContributionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('contributions')->delete();

        $task_id = array(
            'recruit' => DB::table('tasks')
                ->whereRaw("'recruit 09173011987' REGEXP `regex`")->pluck('id')
        );

        $user_id = array(
            'lbhurtado' => DB::table('users')->where('name', '=', 'lbhurtado')->pluck('id')
        );

        var_dump($task_id);
        var_dump($user_id);

        $assignment_id = DB::table('assignments')
            ->where('task_id','=',$task_id['recruit'])
            ->where('user_id','=',$user_id['lbhurtado'])
            ->pluck('id');

        $quota =  DB::table('tasks')
            ->where('id','=',$task_id['recruit'])
            ->pluck('quota');

        var_dump($assignment_id);
        var_dump($quota);

        for ($i=1; $i<=100; $i++){
            $contributions = [
                'assignment_id' => $assignment_id,
                'contribution'  => 1
            ];

            // Uncomment the below to run the seeder
            DB::table('contributions')->insert($contributions);

            $contribution_sum = DB::table('contributions')
                ->where('assignment_id','=',$assignment_id)
                ->sum('contribution');

            echo $contribution_sum . "\n";

            if ($contribution_sum == $quota) {
                DB::table('assignments')
                    ->where('id','=',$assignment_id)
                    ->update(['finished'=>true]);
            }
        }




    }
}