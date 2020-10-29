<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    public function users(){
        $this->belongsToMany('App\Models\User');
    }
}
