<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 19/11/15
 * Time: 13:06
 */

namespace App\Commands;


class PostSettingCommand
{
    public $code;

    public $json;

    public $description;

    /**
     * PostSettingCommand constructor.
     * @param $code
     * @param $json
     * @param $description
     */
    public function __construct($code, $json, $description)
    {
        $this->code = $code;
        $this->json = $json;
        $this->description = $description;
    }


}