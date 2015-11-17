<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 05/11/15
 * Time: 22:43
 */

namespace App\Classes\Philippines;

use Illuminate\Database\Eloquent\Model as Eloquent;

class IslandGroup extends Eloquent
{
    protected $fillable = ['id', 'name'];

    public $timestamps = false;

    public function regions()
    {
        return $this->hasMany(Region::class);
    }

}