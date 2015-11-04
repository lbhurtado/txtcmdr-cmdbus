<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/27/15
 * Time: 21:25
 */

namespace App\Classes;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Classes\Eventing\EventGenerator;
use App\Events\PassageWasPosted;

class Passage extends Eloquent
{
    use EventGenerator;

    protected $fillable = ['origin', 'destination', 'passage'];

    public static function post($origin, $destination, $passage)
    {
        $passage = static::create(compact('origin', 'destination', 'passage'));

        $passage->raise(new PassageWasPosted($passage));

        return $passage;
    }
}