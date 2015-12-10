<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 05/12/15
 * Time: 14:54
 */

namespace App\Http\Controllers;

use App\Classes\User;

class UserController extends ApiController
{

    public function getUsers() {
        $users = User::get(['id', 'name', 'mobile', 'email']);

        return $this->respond([
            'data' => $users
        ]);
    }

}