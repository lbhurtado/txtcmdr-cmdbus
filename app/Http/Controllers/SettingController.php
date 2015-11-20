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
        $code = $project . "." . $key;

        $setting = Setting::where('code', '=', $code)->firstOrFail();

        return $this->respond([
            'data' => $settingTransformer->transform($setting)
        ]);
    }

    public function setSetting($project, $key, SettingTransformer $settingTransformer)
    {
        $code = $project . "." . $key;

        $json = $this->request->get('value');

        $settingFromCode = Setting::where('code', $code)->firstOrFail();

        $valueFromSettingFromCode = json_decode($settingFromCode->json);

        if (is_array($valueFromSettingFromCode)) {
            if ($this->request->get('append', false)) {
                $json = array_merge(array_diff($valueFromSettingFromCode, $json), $json);
            }
            else if ($this->request->get('remove', false)) {
                $json = array_diff($valueFromSettingFromCode, $json);
            }
        }

        $description = $this->request->get('description');

        $command = new PostSettingCommand($code, $json, $description);

        $this->commandBus->execute($command);

        return $this->getSetting($project, $key, $settingTransformer);
    }
}