<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/28/15
 * Time: 14:02
 */

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use App\Classes\Survey;

class SurveyWasPosted extends Event
{
    use SerializesModels;

    public $survey;

    /**
     * SurveyWasPosted constructor.
     * @param $survey
     */
    public function __construct(Survey $survey)
    {
        $this->survey = $survey;
    }
}