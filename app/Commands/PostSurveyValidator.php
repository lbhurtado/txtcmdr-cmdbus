<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/29/15
 * Time: 13:21
 */

namespace App\Commands;

use Illuminate\Support\Facades\Validator;
use App\Commands\PostSurveyCommand;

class PostSurveyValidator
{
    static $rules = [
        'code' => 'required',
        'description' => 'required',
        'data' => 'required',
    ];

    public function validate(PostSurveyCommand $command){
        $validator = Validator::make([
            'code' => $command->code,
            'description' => $command->description,
            'data' => $command->data,
        ], static::$rules);

        if ($validator->fails()) {
            die("Validation failed!");
        }
    }
}