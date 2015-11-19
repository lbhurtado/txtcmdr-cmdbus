<?php

use Illuminate\Database\Seeder;
use App\Classes\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        Setting::create(array(
            'code'     => "txtcmdr.author",
            'json'    => json_encode(array(
                'handle' => "Lester B. Hurtado",
                'mobile' => "639189362340"
            ), JSON_FORCE_OBJECT)
        ));

        Setting::create(array(
            'code'     => "baligod.forwards",
            'json'    => json_encode(['639189362340', '639173011987'])
        ));

        Setting::create(array(
            'code'     => "baligod.groups",
            'json'    => json_encode(['subscriber', 'blacklisted'])
        ));

        Setting::create(array(
            'code'     => "baligod.test",
            'json'    => json_encode("the quick brown fox jumps over the lazy dog.")
        ));
    }
}
