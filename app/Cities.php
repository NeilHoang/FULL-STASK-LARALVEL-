<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table = 'cities';

    public function customer()
    {
        return $this->hasMany('App\Customer','city_id');
    }
}
