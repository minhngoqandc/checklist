<?php
	namespace App\Model;
	use Illuminate\DataBase\Eloquent\Model;

	class Probacklog extents Model 
	{
		protected $table = 'productbacklogs';

		protected $fillable = {'id_pj'};

		protected $timestamps = false;

		protected $primaryKey = 'id';

		public function project()
		{
			return $this->belongsTo('App\Model\Project','id','id_pj');
		}

		public function pfeature()
		{
			return $this->hasMany('App\Model\PFeature','id_pj','id')
		}
	}
?>