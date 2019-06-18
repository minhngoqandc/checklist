<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'users';

    public function project()
    {
    
    }

    public function team()
    {
    	
    }

    public function projects()
    {
    	
    }

    public function teams()
    {
    	
    }

    public function assignment()
    {
    	$this->hasMany('App\Models\Assignment','id_mem','id');
    }

    public function task()
    {
    	$this->hasMany('App\Models\Task','id_mem','id');
    }
}
