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
use Illuminate\Http\Response;

class SettingController extends ApiController
{
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

        $settingFromCode = Setting::where('code', $code)->firstOrFail();
        $valueFromSettingFromCode = json_decode($settingFromCode->json);
        if (is_array($valueFromSettingFromCode)) {
            $operation = $this->request->get('operation', 'replace');
            switch (strtolower($operation)) {
                case 'append':
                    $json = array_merge(array_diff($valueFromSettingFromCode, $json), $json);
                    break;
                case 'remove':
                    $json = array_diff($valueFromSettingFromCode, $json);
                    break;
                case 'empty':
                    $json = [];
                    break;
            }
        }

        $descriptionFromSettingFromCode = $settingFromCode->description;

        $description = $this->request->get('description', $descriptionFromSettingFromCode);

        $command = new PostSettingCommand($code, $json, $description);

        $this->commandBus->execute($command);

        return $this->getSetting($project, $key, $settingTransformer);
    }

    private function getCode($project, $key)
    {
        $code = $project . "." . $key;
        return $code;
    }
}