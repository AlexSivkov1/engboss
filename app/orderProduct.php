<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderProduct extends Model
{
    protected $fillable = ['product_id', 'title', 'price', 'qty'];

    public $timestamps = false;


    public function user()
    {
        return $this->belongsTo(User::class);

    }



}
