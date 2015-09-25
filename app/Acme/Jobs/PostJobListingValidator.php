<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/24/15
 * Time: 17:31
 */

namespace Acme\Jobs;

use Illuminate\Support\Facades\Validator;

class PostJobListingValidator
{
    static $rules = [
        'title' => 'required',
        'description' => 'required'
    ];

    public function validate(PostJobListingCommand $command)
    {
        $validator = Validator::make([
            'title' => $command->title,
            'description' => $command->description
        ], static::$rules);

        if ($validator->fails()) {
            die("Validation failed!");
        }
    }
}