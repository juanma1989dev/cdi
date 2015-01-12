(function( proyecto ){
	
	App.Views.Proyecto = function()
	{
		this.events = function()
		{
			$('select#estado').on('change', this.cargarMunicipios );
			$('select#municipio').on('change',  this.cargarLocalidades);
			$('select#programas_id').on('change',  this.cargarSubProgramas);

			$('#beneficiariosM, #beneficiariosH').on('keyup', this.totalBeneficiados ); //por ahora
			this.totalBeneficiados();                                  //po ahora

			$('#federalP, #estatalP, #municipalP, #otrosP').on('keyup', this.totalInversionProgramada );
			this.totalInversionProgramada();

			$('#federalE, #estatalE, #municipalE, #otrosE').on('keyup', this.totalInversionEjercida );
			this.totalInversionEjercida();
		}

		this.totalInversionEjercida = function()
		{
			var federalE = $('#federalE').val() == '' ? 0 : parseInt( $('#federalE').val(), 10 ),
			    estatalE = $('#estatalE').val() == '' ? 0 : parseInt( $('#estatalE').val(), 10 ),
			    municipalE = $('#municipalE').val() == '' ? 0 : parseInt( $('#municipalE').val(), 10 ),
			    otrosE = $('#otrosE').val() == '' ? 0 : parseInt( $('#otrosE').val(), 10 ),
			    totalEjercido = 0;

			    totalEjercido = federalE + estatalE + municipalE +otrosE;

			$('#totalEjercido').val( totalEjercido );
		}

		this.totalInversionProgramada = function()
		{
			var federalP = $('#federalP').val() == '' ? 0 : parseInt( $('#federalP').val(), 10 ),
			    estatalP = $('#estatalP').val() == '' ? 0 : parseInt( $('#estatalP').val(), 10 ),
			    municipalP = $('#municipalP').val() == '' ? 0 : parseInt( $('#municipalP').val(), 10 ),
			    otrosP = $('#otrosP').val() == '' ? 0 : parseInt( $('#otrosP').val(), 10 ),
			    totalProgramado = 0;

			    totalProgramado = federalP + estatalP + municipalP +otrosP;

			$('#totalProgramado').val( totalProgramado );
		}

		this.totalBeneficiados = function()
		{
			var beneficiariosM = $('#beneficiariosH').val() == '' ? 0 : parseInt( $('#beneficiariosH').val(), 10 ),
			    beneficiariosH = $('#beneficiariosM').val() == '' ? 0 : parseInt( $('#beneficiariosM').val(), 10 ),
			    totalBeneficiados = 0;

			totalBeneficiados = beneficiariosM + beneficiariosH == 'NaN' ? 'Los Dos valores deben ser Numericos' : beneficiariosM + beneficiariosH;

			$('#totalBeneficiados').val( totalBeneficiados );
		}

		this.cargarMunicipios = function()
		{
			var a = proyecto.municipios();
			$('select#municipio').empty();
			$('select#municipio').append( a );
		}

		this.cargarLocalidades = function()
		{
			var a = proyecto.localidades();
			$('select#localidad').empty();
			$('select#localidad').append( a );
		}

		this.cargarSubProgramas =  function()
		{
			var a = proyecto.subProgramas();	
			$('select#subPrograma').empty();		
			$('select#subPrograma').append( a );
		}

	}


	var p = new App.Views.Proyecto();
	p.events();

})( new App.Controllers.Proyecto() );