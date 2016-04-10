<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Fail extends Model
{
    //
    protected $fillable = ['name', 'priority', 'impact'];

    public function taskorderes()
    {
        $this->hasMany('App\Taskorder');
    }

    public function priority()
    {
        $this->belongsTo('App\Priority');
    }

    public function impact()
    {
        $this->belongsTo('App\Impact');
    }
}
