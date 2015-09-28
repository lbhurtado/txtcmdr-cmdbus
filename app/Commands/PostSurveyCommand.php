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
     * AskQuestionsCommand constructor.
     * @param $q1
     * @param $q2
     * @param $q3
     * @param $q4
     */
    public function __construct($code, $description, $data)
    {
        $this->code = $code;

        $this->description = $description;

        $this->data = $data;
    }

}