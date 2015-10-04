<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/29/15
 * Time: 19:56
 */

namespace App\Commands;

use Illuminate\Support\Facades\Validator;
use App\Commands\PostResponseCommand;

class PostResponseValidator
{
    static $rules = [
        'code' => 'required',
        'question' => 'required',
        'answer' => 'required',
    ];

    public function validate(PostResponseCommand $command) {
        $validator = Validator::make([
            'code' => $command->code,
            'question' => $command->question,
            'answer' => $command->answer,
        ], static::$rules);

        if ($validator->fails()) {
            die("Validation failed!");
        }
    }
}