<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $table = 'tasks';

    public function user()
    {
    	$this->belongsTo('App\Models\Users','id_mem','id');
    }

    public function sfeature()
    {
    	$this->belongsTo('App\Models\SFeature','id_sfeature','id');
    }
}
