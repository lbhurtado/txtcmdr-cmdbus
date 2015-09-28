<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/27/15
 * Time: 21:25
 */

namespace App\Classes;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Classes\Eventing\EventGenerator;
use App\Events\LoadWasPosted;

class Load extends Eloquent
{
    use EventGenerator;

    protected $fillable = ['origin', 'mobile', 'amount'];

    protected $attributes = array(
        'confirmed' => false,
    );

    public static function post($origin, $mobile, $amount)
    {
        $load = static::create(compact('origin', 'mobile', 'amount'));

        $load->raise(new LoadWasPosted($load));

        return $load;
    }
    //php artisan make:migration create_loads_table --create=loads
    //php artisan migrate --force
}