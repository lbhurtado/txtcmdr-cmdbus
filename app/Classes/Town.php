<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 10/29/15
 * Time: 2:23 PM
 */

namespace app\Classes;

use Illuminate\Database\Eloquent\Model as Eloquent;

use App\Classes\Province;

class Town extends Eloquent
{
    protected $fillable = ['id', 'name'];

    protected $hidden = ['province_id'];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}