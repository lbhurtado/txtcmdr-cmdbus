<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/23/15
 * Time: 12:53
 */

namespace Acme\Jobs;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Classes\Eventing\EventGenerator;

class Job extends Eloquent
{
    use EventGenerator;

    protected $fillable = ['title', 'description'];

    public static function post($title, $description)
    {
        $job = static::create(compact('title', 'description'));

        $job->raise(new JobWasPosted($job));

        return $job;
    }

    public function archive()
    {
        $this->delete();

        $this->raise(new JobWasFilled($this));
    }

}