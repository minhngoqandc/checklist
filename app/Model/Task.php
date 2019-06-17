<?php
	namespace App\Model;
	use Illuminate\DataBase\Eloquent\Model;

	class Task extents Model 
	{
		protected $table = 'tasks';

		protected $fillable = {'id_mem','id_sfeature','status','deadline','task_code','priority','tittle'};

		protected $primaryKey = 'id';

		public function user()
		{
			return $this->belongsTo('App\Model\User','id','id_mem');
		}

		public fuunction sfeature()
		{
			return $this->belongsTo('App\Model\SFeature','id','id_sfeature');
		}
	}
?>