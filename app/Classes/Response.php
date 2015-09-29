<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/28/15
 * Time: 18:55
 */

namespace App\Classes;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Classes\Eventing\EventGenerator;
use App\Events\ResponseWasPosted;
use App\Events\ResponseWasUpdated;
use App\Events\ResponseWasDuplicated;
use Illuminate\Database\QueryException;

class Response extends Eloquent
{
    use EventGenerator;

    protected $fillable = ['code', 'question', 'answer'];

    public static function post($code, $question, $answer) //add code or description
    {
        try {
            $response = static::create(compact('code', 'question', 'answer'));
            $response->raise(new ResponseWasPosted($response));
        } catch (QueryException $ex) {
            if ($ex->getCode() == 23000) {
                $response = static::firstOrCreate(compact('code', 'question'));
                if ($response->answer != $answer) {
                    $response->answer = $answer;
                    $response->save();
                    $response->raise(new ResponseWasUpdated($response));
                } else
                    $response->raise(new ResponseWasDuplicated($response));
            } else throw $ex;
        }

        return $response;
    }

    public function survey()
    {
        return $this->belongsTo(Survey::class, 'code');
    }
}