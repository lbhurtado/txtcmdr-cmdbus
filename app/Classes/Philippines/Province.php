<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 10/29/15
 * Time: 2:22 PM
 */

namespace App\Classes\Philippines;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Province extends Eloquent
{
    protected $fillable = ['id', 'name'];

    protected $hidden = ['region_id'];

    protected $appends = ['code'];

    public $timestamps = false;

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function towns()
    {
        return $this->hasMany(Town::class);
    }

    public function getCodeAttribute() {
        return  substr($this->id, 0, 4);
    }
}