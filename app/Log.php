<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    //
    protected $primaryKey = 'log_id';
    public $timestamps = false;
    public $fillable = [
    	'login_time', 'logout_time','user_id'
    ];
}
