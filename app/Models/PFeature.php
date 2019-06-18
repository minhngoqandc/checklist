<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PFeature extends Model
{
    //
    protected $table = 'pfeatures';

    public function productbacklog()
    {
    	$this->belongsTo('App\Models\ProductBacklog','id_pb,id');
    }

    public function sfeature()
    {
    	$this->hasOne('App\Models\SFeature','id_pfeature','id');
    }
}
