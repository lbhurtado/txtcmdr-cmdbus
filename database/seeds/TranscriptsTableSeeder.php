<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 10/12/15
 * Time: 11:16
 */

use Illuminate\Database\Seeder;

class TranscriptsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('transcripts')->delete();

        $transcripts = array(
            ['code' => 'recruit',           'language' => "eng", 'text' => "Find a recruit. Send 'recruit (mobile number)' to 09178251991"],
            ['code' => 'recruit',           'language' => "tag", 'text' => "Hanap ka ng recruit. I-text mo 'recruit (mobile number)' sa 09178251991"],

            ['code' => 'confirm',           'language' => "eng", 'text' => "Confirm the PIN code. Send 'confirm (PIN code) (NAME) (AGE)' to 09178251991"],
            ['code' => 'confirm',           'language' => "tag", 'text' => "Kumpirmahin ang PIN code. I-text mo 'confirm (PIN code) (NAME) (AGE)' sa 09178251991"],

            ['code' => 'registration',      'language' => "eng", 'text' => "Go to your precinct. Send 'HERE' when you get there."],
            ['code' => 'registration',      'language' => "tag", 'text' => "Pumunta ka sa presinto mo. I-text mo 'DITO' pag dating mo doon."],

            ['code' => 'initialization',    'language' => "eng", 'text' => "Observe the initialization of the PCOS machine . Send 'ZERO' when you see all the zeroes in the receipt."],
            ['code' => 'initialization',    'language' => "tag", 'text' => "Masdan mabuti ang PCOS machine. Ipadala ang 'ZERO' nakita mo na zero ang mga nasa resibo."],

            ['code' => 'finalization',      'language' => "eng", 'text' => "Observe the finalization of the PCOS machine . Send 'final' when you see the receipt."],
            ['code' => 'finalization',      'language' => "tag", 'text' => "Masdan mabuti ang PCOS machine. Ipadala ang 'tapos' kapag nakita mo ang resibo"],

            ['code' => 'printing',          'language' => "eng", 'text' => "Observe the printing of the PCOS machine . Send 'print' when you see the receipt."],
            ['code' => 'printing',          'language' => "tag", 'text' => "Masdan mabuti ang PCOS machine. Ipadala ang 'print' kapag nakita mo ang resibo"],

            ['code' => 'transmission',      'language' => "eng", 'text' => "Observe the transmission of the PCOS machine . Send 'transmit' when you see the receipt."],
            ['code' => 'transmission',      'language' => "tag", 'text' => "Masdan mabuti ang PCOS machine. Ipadala ang 'transmit' kapag nakita mo ang resibo"],
        );

        // Uncomment the below to run the seeder
        DB::table('transcripts')->insert($transcripts);
    }
}