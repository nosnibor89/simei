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
      return $this->belongsTo('App\User', 'technician');
    }

    public function user()
    {
      return $this->belongsTo('App\User','user');
    }

    public function fail(){
        return $this->belongsTo('App\Fail', 'fail');
    }

    public function status(){
        return $this->belongsTo('App\Status', 'status');
    }
}
