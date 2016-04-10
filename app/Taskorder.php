<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taskorder extends Model
{
    protected $table = "taskorderes";
    protected $fillable = [
        'user', 'title', 'fail','desription'
        ,'status','technician','startDate',
        'closedDate'
    ];

    public function technician()
    {
      return $this->belongsTo('App\User');
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function fail(){
        return $this->belongsTo('App\Fail');
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }
}
