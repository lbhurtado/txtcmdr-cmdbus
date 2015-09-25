<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/24/15
 * Time: 17:08
 */
namespace Acme\Commanding;

interface CommandBus
{
    public function execute($command);
}