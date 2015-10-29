<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 10/29/15
 * Time: 2:19 PM
 */

namespace App\Classes;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Region extends Eloquent
{
    protected $fillable = ['code', 'name'];
}