<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
	protected $table = 'teams';

    public function user()
    {

    }

    public function project()
    {
    	$this->belongsTo('App\Models\Project','id_pj','id');
    }

    public function assignment()
    {
    	$this->hasMany('App\Models\Assignment','id_team','id');
    }

    public function sprint()
    {
    	$this->hasMany('App\Models\Sprint','id_team','id');
    }
}
