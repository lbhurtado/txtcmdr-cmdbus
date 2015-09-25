<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/24/15
 * Time: 13:28
 */

namespace Acme\Jobs;


class JobFilledCommand
{
    public $jobId;

    /**
     * JobFilledCommand constructor.
     * @param $jobId
     */
    public function __construct($jobId)
    {
        $this->jobId = $jobId;
    }
}