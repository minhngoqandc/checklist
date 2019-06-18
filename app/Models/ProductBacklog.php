<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductBacklog extends Model
{
    //
    protected $table = 'productbacklogs'

    public function project()
    {
    	$this->belongsTo('App\Models\Project','id_pj','id');
    }

    public function pfeature()
    {
    	$this->hasMany('App\Models\PFeature','id_pb','id');
    }
}
