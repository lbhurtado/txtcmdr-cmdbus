<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/28/15
 * Time: 08:36
 */

namespace App\Classes;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Classes\Eventing\EventGenerator;
use App\Events\SurveyWasPosted;

class Survey extends Eloquent
{
    use EventGenerator;

    protected $fillable = ['code', 'description', 'data'];

    public static function post($code, $description, $data) //add code or description
    {
        $survey = static::create(compact('code', 'description', 'data'));

        $survey->raise(new SurveyWasPosted($survey));

        return $survey;
    }

    public function response()
    {
        return $this->hasMany(Response::class, 'code');
    }

    public function getData(){
        return json_decode($this->data);
    }
}