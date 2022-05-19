<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $guarded = [];
    public function users(){
        return $this->hasMany('App\User','store_id');
    }
    // public function po_records()
    // {
    //     return $this->hasMany('App\Models\PoRecord','police_station_id');
    // }
}
