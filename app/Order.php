<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];



    public function products()
    {

        return $this->hasMany(orderProduct::class );
    }

    public function user()
    {
    return $this->belongsTo(User::class, 'user_id');
    }



}
