<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Fail extends Model
{
    //
    protected $fillable = ['name', 'priority', 'impact'];

    public function taskorderes()
    {
        $this->hasMany('App\Taskorder', 'fail');
    }

    public function priority()
    {
        $this->belongsTo('App\Priority', 'priority');
    }

    public function impact()
    {
        $this->belongsTo('App\Impact', 'impact');
    }
}
