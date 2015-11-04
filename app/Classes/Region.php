<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 10/29/15
 * Time: 2:19 PM
 */

namespace App\Classes;

use Illuminate\Database\Eloquent\Model as Eloquent;

//use App\Classes\Province;

class Region extends Eloquent
{
    protected $fillable = ['id', 'name', 'code'];

    public $timestamps = false;

    public function provinces()
    {
        return $this->hasMany(Province::class);
    }
}