<?php
	namespace App\Model;
	use Illuminate\Database\Eloquent\Model;

	class Team extents Model
	{

		protected $table = 'teams';

		protected $fillable = {'id_lead','name','id_pj'};

		protected $primaryKey = 'id';

		// public function user()
		// {
			
		// }

		public function project()
		{	
			return $this->belongsTo('App\Model\Project','id','id_pj');
		}

		public function assignment()
		{
			return $this->hasMany('App\Model\Assignment','id_team','id');
		}
	}
?>