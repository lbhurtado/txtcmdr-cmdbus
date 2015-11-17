<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 10/29/15
 * Time: 2:19 PM
 */

namespace App\Classes\Philippines;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Region extends Eloquent
{
    protected $fillable = ['id', 'name', 'code'];

    public $timestamps = false;

    public function island_group()
    {
        return $this->belongsTo(IslandGroup::class);
    }

    public function provinces()
    {
        return $this->hasMany(Province::class);
    }
}