<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Order
 *
 * @property integer $id
 * @property integer $customer_id
 * @property string $name
 * @property-read \App\Customer $customer
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereCustomerId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereName($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
    //
    public function customer(){
        return $this->belongsTo('App\Customer');
    }


}
