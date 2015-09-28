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
use Illuminate\Database\QueryException;

class Response extends Eloquent
{
    use EventGenerator;

    protected $fillable = ['code', 'question', 'answer'];

    public static function post($code, $question, $answer) //add code or description
    {
        try {
            $response = static::firstOrCreate(compact('code', 'question', 'answer'));
            $response->raise(new ResponseWasPosted($response));
        } catch (QueryException $ex) {
            if ($ex->getCode() == 23000) {
                $response = static::updateOrCreate(compact('code','question'),compact('code', 'question', 'answer'));
                $response->raise(new ResponseWasUpdated($response));
            }
        }

        return $response;
    }

    public function survey()
    {
        return $this->belongsTo(Survey::class, 'code');
    }
}