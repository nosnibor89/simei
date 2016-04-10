<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Status extends Model
{
    protected $table = "status";
    protected $fillable = ['name', 'description'];


    public function taskorder()
    {
        return $this->hasMany('App\Taskorder');
    }

}
