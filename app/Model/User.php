<?php
namespace App\Model;
use Illuminate\DataBase\Eloquent\Model;

class User extents Model
{
	protected $table = 'users';

	protected $timestamps = false;
	
	protected $primaryKey = 'id';

	public function projects()
	{
		return $this->hasMany('App\Model\Project','id_pm','id');
	}

	public function teams()
	{
		return $this->hasMany('App\Model\Team','id_lead','id');
	}

	public function project()
	{
		return $this->belongsTo('App\Model\Project','id_pm','id');
	}

	public function team()
	{
		return $this->belongsTo('App\Model\Team','id_lead','id');
	}

	public function assignment()
	{
		return $this->hasMany('App\Model\Assignment','id_mem','id');
	}


	public function task()
	{
		return $this->hasMany('App\Model\Task','id_mem','id');
	}
}
?>