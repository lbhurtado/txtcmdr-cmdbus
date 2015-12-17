<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
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

        $project_id = array(
            'txtcmdr' => DB::table('projects')->where('name', '=', 'txtcmdr')->pluck('id'),
            'duterte' => DB::table('projects')->where('name', '=', 'duterte')->pluck('id'),
            'baligod' => DB::table('projects')->where('name', '=', 'baligod')->pluck('id'),
        );

        $txtcmdr = $project_id['txtcmdr'];
        $duterte = $project_id['duterte'];
        $baligod = $project_id['baligod'];
        
        $groups = array(
            ['id' => $init=1,               'group_id' => null,         'project_id' => $txtcmdr, 'name' => "txtcmdr"],
            ['id' => $everybody=$a=++$init, 'group_id' => null,         'project_id' => $duterte, 'name' => "everybody"],
            ['id' => $cadre=$b=++$a,        'group_id' => $everybody,   'project_id' => $duterte, 'name' => "officers"],
            ['id' => ++$b,                  'group_id' => $cadre,       'project_id' => $duterte, 'name' => "cadre"],
            ['id' => ++$b,                  'group_id' => 3,            'project_id' => $duterte, 'name' => "research"],
            ['id' => ++$b,                  'group_id' => 3,            'project_id' => $duterte, 'name' => "training"],
            ['id' => ++$b,                  'group_id' => 3,            'project_id' => $duterte, 'name' => "supply"],
            ['id' => ++$b,                  'group_id' => 3,            'project_id' => $duterte, 'name' => "advocacy"],
            ['id' => ++$b,                  'group_id' => 3,            'project_id' => $duterte, 'name' => "legal"],
            ['id' => ++$b,                  'group_id' => 3,            'project_id' => $duterte, 'name' => "security"],
            ['id' => $coordinators=$c=++$b, 'group_id' => $cadre,       'project_id' => $duterte, 'name' => "coordinators"],
            ['id' => ++$c,                  'group_id' => $coordinators,'project_id' => $duterte, 'name' => "regional coordinators"],
            ['id' => ++$c,                  'group_id' => $coordinators,'project_id' => $duterte, 'name' => "provincial coordinators"],
            ['id' => ++$c,                  'group_id' => $coordinators,'project_id' => $duterte, 'name' => "municipal coordinators"],
            ['id' => ++$c,                  'group_id' => $coordinators,'project_id' => $duterte, 'name' => "barangay coordinators"],
            ['id' => ++$c,                  'group_id' => $everybody,   'project_id' => $duterte, 'name' => "grassroots"],
            ['id' => ++$c,                  'group_id' => null,         'project_id' => $baligod, 'name' => "personnel"],
            ['id' => ++$c,                  'group_id' => null,         'project_id' => $baligod, 'name' => "intelligence"],
            ['id' => ++$c,                  'group_id' => null,         'project_id' => $baligod, 'name' => "operation"],
            ['id' => ++$c,                  'group_id' => null,         'project_id' => $baligod, 'name' => "logistics"],
            ['id' => ++$c,                  'group_id' => null,         'project_id' => $baligod, 'name' => "liasons"],
            ['id' => ++$c,                  'group_id' => null,         'project_id' => $baligod, 'name' => "budget"],
            ['id' => ++$c,                  'group_id' => null,         'project_id' => $baligod, 'name' => "security"],
            ['id' => ++$c,                  'group_id' => null,         'project_id' => $baligod, 'name' => "grassroots"],
        );

        // Uncomment the below to run the seeder
        DB::table('groups')->insert($groups);


    }
}
