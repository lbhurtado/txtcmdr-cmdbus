<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 19/11/15
 * Time: 12:55
 */

namespace App\Events;

use App\Classes\Setting;
use Illuminate\Queue\SerializesModels;

class SettingWasPosted extends Event
{
    use SerializesModels;

    public $setting;

    /**
     * SettingWasPosted constructor.
     * @param $setting
     */
    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }
}