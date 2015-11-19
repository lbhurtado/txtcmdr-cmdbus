<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 19/11/15
 * Time: 07:16
 */

namespace App\Classes;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Classes\Eventing\EventGenerator;
use App\Events\SettingWasPosted;

class Setting extends Eloquent
{
    use EventGenerator;

    protected $fillable = ['code', 'json', 'description'];

    public static function post($code, $json, $description = null)
    {
        $setting = static::create(compact('code', 'json', 'description'));

        $setting->raise(new SettingWasPosted($setting));

        return $setting;
    }
}