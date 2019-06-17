<?php
	namespace App\Model;
	use Illuminate\Database\Eloquent\Model;


	class Assignment extents Model
	{
		protected $table = 'assignments';

		protected $fillable = {'id_mem','id_team'};

		protected $timestampps = false;

		protected $primaryKey = array('id_mem','id_team');

		public function user()
		{
			return $this->belongsTo('App\Model\User','id','id_mem');
		}

		public function team()
		{
			return $this->belongsTo('App\Model\Team','id','id_team');
		}
	}
?>