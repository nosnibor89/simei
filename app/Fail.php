<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Fail extends Model
{
    //
    protected $fillable = ['name', 'priority', 'impact'];

    public function taskorderes()
    {
        return $this->hasMany('App\Taskorder');
    }

    public function priority()
    {
        return $this->belongsTo('App\Priority');
    }

    public function impact()
    {
        return $this->belongsTo('App\Impact');
    }
}
