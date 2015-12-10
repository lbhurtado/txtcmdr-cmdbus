<?php

use Illuminate\Database\Seeder;
use App\Classes\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'name'     => 'lbhurtado',
            'email'    => 'lester@applester.co',
            'mobile'   => '639189362340',
            'password' => Hash::make('apple1'),
        ));
    }
}
