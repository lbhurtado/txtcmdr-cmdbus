<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/24/15
 * Time: 06:58
 */

namespace App\Events;


use App\Podcast;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;

class PodcastWasPurchased extends Event
{
    use SerializesModels;

    public $podcast;

    /**
     * Create a new event instance.
     *
     * @param  Podcast  $podcast
     * @return void
     */
    public function __construct(Podcast $podcast)
    {
        $this->podcast = $podcast;
    }
}