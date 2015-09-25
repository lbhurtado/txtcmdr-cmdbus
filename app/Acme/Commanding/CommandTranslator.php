<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/23/15
 * Time: 12:12
 */

namespace Acme\Commanding;

use Exception;

class CommandTranslator
{
    public function toCommandHandler($command){
        $handler = str_replace('Command', 'CommandHandler', get_class($command));

        if ( ! class_exists($handler)) {
            $message = "Command handler [$handler] does not exist.";

            throw new Exception($message);
        }

        return $handler;
    }

    public function toValidator($command){
        return str_replace('Command', 'Validator', get_class($command));
    }
}