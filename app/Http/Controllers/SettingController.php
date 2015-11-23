<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 19/11/15
 * Time: 08:18
 */

namespace App\Http\Controllers;

use App\Classes\Setting;
use App\Classes\Transformers\SettingTransformer;
use App\Commands\PostSettingCommand;
use Faker\Factory as Faker;

class SettingController extends ApiController
{

    const RANDOM_PASS_PHRASE_KEY = '_pp_';

    const BOOLEAN_STRINGS = ['true', 'false', 'yes', 'no'];

    public function getSetting($project, $key, SettingTransformer $settingTransformer)
    {
        $code = $this->getCode($project, $key);

        $setting = Setting::where('code', '=', $code)->firstOrFail();

        return $this->respond([
            'data' => $settingTransformer->transform($setting)
        ]);
    }

    public function setSetting($project, $key, SettingTransformer $settingTransformer)
    {
        $code = $this->getCode($project, $key);
        $json = $this->request->get('value');
        $description = $this->request->get('description');

        array_walk_recursive($json, function (&$value) {
            if (!is_array($value)) {
                $value = str_replace(static::RANDOM_PASS_PHRASE_KEY, $this->getRandomPassPhrase(), $value);
                if (in_array(strtolower($value), static::BOOLEAN_STRINGS))
                    $value = filter_var($value, FILTER_VALIDATE_BOOLEAN);
            }
        });

        $settingFromCode = Setting::where('code', $code)->first();

        if ($settingFromCode) {

            $valueFromSettingFromCode = json_decode($settingFromCode->json);

            $operation = $this->request->get('operation', 'replace');
            if (is_array($valueFromSettingFromCode)) {
                switch (strtolower($operation)) {
                    case 'append':
                    case 'insert':
                    case 'add':
                        $json = array_merge(array_diff($valueFromSettingFromCode, $json), $json);
                        break;
                    case 'delete':
                    case 'cut':
                    case 'remove':
                        $json = array_values(array_diff($valueFromSettingFromCode, $json));
                        break;
                    case 'empty':
                    case 'clear':
                    case 'unset':
                        $json = [];
                        break;
                }
            } else if (is_object($valueFromSettingFromCode)) {
                $orig = json_decode(json_encode($valueFromSettingFromCode), true);
                switch (strtolower($operation)) {
                    case 'append':
                    case 'insert':
                    case 'add':
                        $json = $this->array_merge_recursive_distinct($orig, $json);
                        break;
                    case 'delete':
                    case 'cut':
                    case 'remove':
                        $json = $this->array_diff_recursive($valueFromSettingFromCode, $json);
                        break;
                    case 'empty':
                    case 'clear':
                    case 'unset':
                        $json = [];
                        break;
                }
            }
            $descriptionFromSettingFromCode = $settingFromCode->description;
            $description = $this->request->get('description', $descriptionFromSettingFromCode);
        }

        $command = new PostSettingCommand($code, $json, $description);

        $this->commandBus->execute($command);

        return $this->getSetting($project, $key, $settingTransformer);
    }

    public function deleteSetting($project, $key)
    {
        $code = $this->getCode($project, $key);
        Setting::where('code', $code)->delete();
    }

    private function getCode($project, $key)
    {
        $code = $project . "." . $key;
        return $code;
    }

    private function array_merge_recursive_distinct(array &$array1, array &$array2)
    {
        $merged = $array1;

        foreach ($array2 as $key => &$value) {
            if (is_array($value) && isset ($merged [$key]) && is_array($merged [$key])) {
                $merged [$key] = $this->array_merge_recursive_distinct($merged [$key], $value);
            } else {
                $merged [$key] = $value;
            }
        }

        return $merged;
    }

    private function array_diff_recursive($aArray1, $aArray2)
    {
        $aReturn = array();

        foreach ($aArray1 as $mKey => $mValue) {
            if (array_key_exists($mKey, $aArray2)) {
                if (is_array($mValue)) {
                    $aRecursiveDiff = $this->array_diff_recursive($mValue, $aArray2[$mKey]);
                    if (count($aRecursiveDiff)) {
                        $aReturn[$mKey] = $aRecursiveDiff;
                    }
                } else {
                    if ($mValue != $aArray2[$mKey]) {
                        $aReturn[$mKey] = $mValue;
                    }
                }
            } else {
                $aReturn[$mKey] = $mValue;
            }
        }
        return $aReturn;
    }

    private function getRandomPassPhrase()
    {
        $faker = Faker::create();
        $fakers = array(
            $faker->randomElement($array = [
                'RIZAL',
                'BONIFACIO',
//                'DEL PILAR',
                'AGUINALDO',
                'MABINI',
                'GOMBURZA',
                'JACINTO',
                'LUNA',
                'AQUINO',
//                'LOPEZ-JAENA',
//                'PANDAY PIRA',
                'PONCE',
//                'DE JESUS',
                'GUERRERO',
                'AGONCILLO',
                'PALMA',
                'PATERNO',
                'FLORENTINO',
//                'DE LOS REYES',
                'RICARTE',
                'LAKANDULA',
                'SOLIMAN',
                'RIVERA',
                'APACIBLE',
                'PANGANIBAN',
                'SILANG',
                'LAPU-LAPU',
                'BALTAZAR',
//                'DE LOS SANTOS',
                'DAGOHOY',
                'MAGBANUA',
                'TECSON',
                'ESTEBAN',
                'FELIPE',
                'DIZON',
                'MAKABULOS'

            ]),
            $faker->randomElement($array = [
                'MAKISIG',
                'MATIPUNO',
                'MAGALANG',
                'MAPAGMAHAL',
                'MALAKAS',
                'MATATAG',
                'MAPANG-AKIT',
                'MABILIS',
                'MALIKSI',
                'MAUNAWAIN',
                'MAPAGBIGAY',
                'MATIMPIIN',
                'MATAPAT',
                'MASIKAP',
                'MAGINOO',
                'MASIGASIG',
                'MAGILIW',
                'MAUNLAD',
                'MATINO',
                'MATAPANG',
                'MATAHIMIK',
                'MALAYA',
                'MALUMANAY',
                'MANINGNING',
                'MAAMO',
                'MADASALIN',
                'MAHIYAIN',
                'MAPAGKUMBABA',
                'MAKADIYOS',
                'MAPAGKAWANGGAWA',
                'MAIMPOK',
                'MATIMTIMAN',
                'MAGINHAWA',
                'MAHABAGIN',
                'MALINGAP',
                'MASAMBAHIN',
                'MAAALAHANIN',
                'MAGITING',
                'MALAMBING',
                'MAHUSAY',
                'MAYUMI',
                'MALUSOG',
                'MANIGO',
                'MALINIS',
                'MAALINDOG',
                'MARILAG',
                'MAKATARUNGAN',
                'MAHARLIKA',
                'MAYAMAN',
                'MATIWASAY',
                'MASAYA',
                'MAHINHIN',
                'MALAMIG',
                'MABAIT',
                'MATALINO',
                'MAARALIN',
                'MASIKAP',
                'MASIGLA',
                'MARUNONG',
                'MATULUNGIN',
                'MABUHAY',
                'MATIYAGA',
                'MATATAG'
            ]),
            $faker->numberBetween(1521, 1898)

        );

        return strtoupper(implode(" ", $fakers));
    }
}