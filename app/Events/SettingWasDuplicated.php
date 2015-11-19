<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 19/11/15
 * Time: 18:15
 */

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class SettingWasDuplicated extends Event
{
    use SerializesModels;

    public $setting;

    /**
     * SettingWasDuplicated constructor.
     * @param $setting
     */
    public function __construct($setting)
    {
        $this->setting = $setting;
    }

}