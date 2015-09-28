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

class Survey extends Eloquent
{
    use EventGenerator;

    protected $fillable = ['code','description','data'];

    public static function post($code, $description, $data) //add code or description
    {
        $questions = static::create(compact('code','description','data'));

        //$questions->raise(new JobWasPosted($job));

        return $questions;
    }
}