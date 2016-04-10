<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impact extends Model
{
    //
     protected $fillable = ['name', 'description'];


     public function fails()
     {
          return $this->hasMany('App\Fail');
     }
}
