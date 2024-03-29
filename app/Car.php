<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = "cars";

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
