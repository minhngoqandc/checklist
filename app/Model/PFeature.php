<?php
	namespace App\Model;
	use Illuminate\DataBase\Eloquent\Model;

	class PFeature extents Model 
	{
		protected $table = 'pfeatures';

		protected $fillable = {'id_pb','priority','content'};

		protected $timestamps = false;

		protected $primaryKey = 'id';

		public function probacklog()
		{
			return $this->belongsTo('App\Model\Probacklog','id','id_pb');
		}
	}
?>
