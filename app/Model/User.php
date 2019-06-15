5<?php
namespace App\Model;
use Illuminate\DataBase\Eloquent\Model;

class User extents Model
{
	protected $table = 'users';
	protected $timestamps = false;


	// public function project()
	// {
	// 	if($this->level == '1'){ // User is project manager
	// 		return $this->hasMany('App\Model\Project','id_pm','id');
	// 	}
	// }

	// public function team()
	// {
	// 	if($this->level == '2'){ // User is leader of team
	// 		return $this->hasMany('App\Model\Team','id_lead','id');
	// 	}
	// }

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