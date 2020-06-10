<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\priority;

class Task extends Model
{
    protected $fillable = [
        'task', 'task_description', 'task_date','task_time','task_status','priority_id','user_id'
    ];
    public function priority(){
        return $this->belongsTo('App\priority');
    }
}
