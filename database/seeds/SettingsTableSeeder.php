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
            'code' => "txtcmdr.author",
            'json' => json_encode(array(
                'handle' => "Lester Biadora Hurtado",
                'mobile' => "639189362340"
            ), JSON_FORCE_OBJECT)
        ));

        Setting::create(array(
            'code' => "txtcmdr.provisioner",
            'json' => json_encode([
                '639189362340',
                '639173011987'
            ])
        ));

        Setting::create(array(
            'code' => "demo.groups",
            'json' => json_encode([
                'personnel' => [
                    'moderator' => "MODERATOR",
                    'member' => "MEMBER"
                ]
            ], JSON_FORCE_OBJECT)
        ));

        Setting::create(array(
            'code' => "demo.autoreply",
            'description' => "Auto-response to keywords",
            'json' => json_encode([
                'info' => "Lorem ipsum dolor sit amet, no mutat eruditi nam, debet essent mel ne, eu eruditi graecis has.",
                'about' => "Eos id malorum efficiendi, an partiendo cotidieque duo, cu vim choro doming laboramus."
            ], JSON_FORCE_OBJECT)
        ));

        Setting::create(array(
            'code' => "demo.forwards",
            'json' => json_encode([])
        ));
    }
}
