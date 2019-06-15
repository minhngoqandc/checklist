<?php
namespace App\Model;
use Illuminate\DataBase\Eloquent\Model;

class Project extents Model
{
	protected $table = 'projects';
	protected $timestamps = true;


	public function team()
	{
		$this->hasMany('App\Model\Team','id_pj','id');
	}

	public function sprint()
	{
		$this->hasMany('App\Model\Sprint','id_pj','id');
	}

	public function productbacklog()
	{
		$this->hasOne('App\Model\ProductBacklog','id_pj','id')
	}

}
?>