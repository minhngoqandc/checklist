<?php
namespace App\Model;
use Illuminate\DataBase\Eloquent\Model;

class Project extents Model
{
	protected $table = 'projects';
	
	protected $timestamps = true;
	
	protected $primaryKey = 'id';

	public function user()
	{
		return $this->hasOne('App\Model\User','id','id_pm');
	}

	public function users()
	{
		return $this->belongsTo('App\Model\User','id','id_pm');
	}

	public function team()
	{
		return $this->hasMany('App\Model\Team','id_pj','id');
	}

	public function sprint()
	{
		return $this->hasMany('App\Model\Sprint','id_pj','id');
	}

	public function productbacklog()
	{
		return $this->hasOne('App\Model\ProductBacklog','id_pj','id')
	}
}
?>