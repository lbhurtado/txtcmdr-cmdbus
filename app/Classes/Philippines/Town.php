<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 10/29/15
 * Time: 2:23 PM
 */

namespace App\Classes\Philippines;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Town extends Eloquent
{
    protected $fillable = ['id', 'name'];

    protected $hidden = ['province_id'];

    protected $appends = ['code'];

    public $timestamps = false;

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function getCodeAttribute() {
        return  substr($this->id, 0, 6);
    }
}