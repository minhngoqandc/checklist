<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SFeature extends Model
{
    //
    protected $table = 'sfeatures';

    public function sprint()
    {
    	$this->belongsTo('App\Models\Sprint','id_sprint','id');
    }

    public function pfeature()
    {
    	$this->belongsTo('App\Models\PFeature','id_pfeature','id');
    }

    public function task()
    {
    	$this->hasOne('App\Models\Task','id_sfeature','id');
    }
}
