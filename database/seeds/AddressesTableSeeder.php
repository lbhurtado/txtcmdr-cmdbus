<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 16/12/15
 * Time: 09:27
 */

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('addresses')->delete();

        $user_id = array(
            'lbhurtado' => DB::table('users')->where('name', '=', 'lbhurtado')->pluck('id'),
        );

        $addresses = array(
            ['user_id' => $user_id['lbhurtado'], 'town_id' => "012808000", 'type' => "home", 'address' => "Poblacion 2"],
            ['user_id' => $user_id['lbhurtado'], 'town_id' => "012812000", 'type' => "work", 'address' => ""],
        );

        // Uncomment the below to run the seeder
        DB::table('addresses')->insert($addresses);

    }
}