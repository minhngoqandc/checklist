<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table = 'projects';

    public function user()
    {

    }

    public function team()
    {
    	$this->hasMany('App\Models\Team','id_pj','id');
    }

    public function productbacklog()
    {
    	$this->hasOne('App\Models\ProductBacklog','id_pj','id');
    }

    public function sprint()
    {
    	$this->hasMany('App\Models\Sprint','id_pj','id');
    }
}
