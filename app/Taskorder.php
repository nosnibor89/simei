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

    public function user($value='')
    {
      return $this->hasMany('\App\User','user');
    }

    public function technician($value='')
    {
      return $this->hasMany('\App\User','technician');
    }
}
