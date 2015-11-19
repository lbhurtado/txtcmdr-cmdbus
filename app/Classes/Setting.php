<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 19/11/15
 * Time: 07:16
 */

namespace App\Classes;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\QueryException;
use App\Classes\Eventing\EventGenerator;
use App\Events\SettingWasPosted;
use App\Events\SettingWasDuplicated;
use App\Events\SettingWasUpdated;

class Setting extends Eloquent
{
    use EventGenerator;

    protected $fillable = ['code', 'json', 'description'];

    public static function post($code, $json, $description = null)
    {
        try {
            $setting = static::create(compact('code', 'json', 'description'));
            $setting->raise(new SettingWasPosted($setting));
        } catch (QueryException $ex) {
            if ($ex->getCode() == 23000) {
                $setting = static::where('code', $code)->firstOrFail();
                if ($setting->json == $json && $setting->description == $description) {
                    $setting->raise(new SettingWasDuplicated($setting));
                }
                else {
                    if ($setting->json != $json) {
                        $setting->json = $json;
                    };
                    if ($setting->description != $description) {
                        $setting->description = $description;
                    }
                    $setting->save();
                    $setting->raise(new SettingWasUpdated($setting));
                }
            } else throw $ex;
        }

        return $setting;
    }
}