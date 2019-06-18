<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    //
    protected $table = 'sprints';

    public function project()
    {
    	$this->belongsTo('App\Models\Project','id_pj','id');
    }

    public function team()
    {
    	$this->belongsTo('App\Models\Team','id_team','id');
    }

    public function sfeature()
    {
    	$this->hasMany('App\Models\SFeature','id_sprint','id');
    }
}
