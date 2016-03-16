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

}
