<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 19/11/15
 * Time: 18:17
 */

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class SettingWasUpdated extends Event
{
    use SerializesModels;

    public $setting;

    /**
     * SettingWasUpdated constructor.
     * @param $setting
     */
    public function __construct($setting)
    {
        $this->setting = $setting;
    }

}