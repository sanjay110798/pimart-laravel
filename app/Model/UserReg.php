<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserReg extends Model
{



    protected $table = 'user_register_details';

    protected $guarded = [];

    public function country(){
        return $this->belongsTo('App\Model\Country', 'country');
    }
    public function state(){
        return $this->belongsTo('App\Model\State', 'state');
    }
    public function city(){
        return $this->belongsTo('App\Model\City', 'city');
    }


}