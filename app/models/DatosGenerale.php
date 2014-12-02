<?php 
	
	class DatosGenerale extends Eloquent {
		protected $table = "datosgenerales";

		protected $fillable = array(
								'nombreBeneficiario',
								'rfc',
								'curp',
								'correo',
								'telefono',
								'celular',
								'viable',
								'descripcion',
								'evento',
								'fechaEvento',
								'lugarEvento',
								'proyectos_id'
		);

		public function proyecto() {
			return $this->hasOne('Proyecto', 'proyectos_id');
		}
	}
?>