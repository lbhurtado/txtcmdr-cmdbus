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
    public function getSetting($code, SettingTransformer $settingTransformer)
    {
        $setting = Setting::where('code', '=', $code)->first();

        return $this->respond([
            'data' => $settingTransformer->transform($setting)
        ]);
    }

    public function setSetting($project, $key)
    {
        $code = $project . "." . $key;
        $json = $this->request->get('value');
        $description = $this->request->get('description');

        $command = new PostSettingCommand($code, $json, $description);

        $this->commandBus->execute($command);
    }
}