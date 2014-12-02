<?php
	class Municipio extends Eloquent{
		protected $table = 'municipios';
		protected $fillable = array('id', 'nombre','ccdi','cnch');

		public function estados(){
			return $this->belongsToMany('Estado','estado_municipio','municipio_id','estado_id');
		}
	}

?>