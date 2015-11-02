<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 10/29/15
 * Time: 2:22 PM
 */

namespace App\Classes;

use Illuminate\Database\Eloquent\Model as Eloquent;

use App\Classes\Region;
use App\Classes\Town;

class Province extends Eloquent
{

    protected $fillable = ['id', 'name'];

    protected $hidden = ['region_id'];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function towns()
    {
        return $this->hasMany(Town::class);
    }
}