<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/28/15
 * Time: 07:15
 */

namespace App\Commands;


class PostSurveyCommand
{
    public $code;

    public $description;

    public $data;

    /**
     * PostSurveyCommand constructor.
     * @param $code
     * @param $description
     * @param $data
     */
    public function __construct($code, $description, $data)
    {
        $this->code = $code;
        $this->description = $description;
        $this->data = $data;
    }
}