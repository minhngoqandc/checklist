<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    //
    protected $table = 'assignments';

    public function user()
    {
    	$this->belongsTo('App\Models\User','id_mem','id');
    }

    public function team()
    {
    	$this->belongsTo('App\Models\Team','id_team','id');
    }
}
