<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/28/15
 * Time: 18:45
 */

namespace App\Commands;


class PostResponseCommand
{
    public $code;

    public $question;

    public $answer;

    /**
     * PostAnswerCommand constructor.
     * @param $code
     * @param $question
     * @param $answer
     */
    public function __construct($code, $question, $answer)
    {
        $this->code = $code;
        $this->question = $question;
        $this->answer = $answer;
    }
}