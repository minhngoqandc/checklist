<?php
	namespace App\Model;
	use Illuminate\DataBase\Eloquent\Model;

	class SFeature extents Model 
	{
		protected $table = 'sfeatures';

		protected $fillable = {'id','priority','id_sprint','id_pfeature'};

		protected $timestamps = false;

		protected $primaryKey = {'id_sprint','id_pfeature'};

		public function sprint()
		{
			return $this->belongsTo('App\Model\Sprint','id','id_sprint');
		}

		public function pfeature()
		{
			return $this->belongsTo('App\Model\PFeature','id','id_pfeature');;
		}
	}
?>