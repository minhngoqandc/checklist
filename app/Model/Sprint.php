<?php
	namespace App\Model;
	use Illuminate\DataBase\Eloquent\Model;

	class Sprint extents Model 
	{
		protected $table = 'sprints';

		protected $fillable = {'status, time, id_team, content'};

		protected $primaryKey = 'id';

		public function project()
		{
			return $this->belongsTo('App\Model\Project','id','id_pj');
		}

		public fucntion sfeature()
		{
			return $this->hasMany('App\Model\SFeature','id_sprint','id');
		}
	}
?>