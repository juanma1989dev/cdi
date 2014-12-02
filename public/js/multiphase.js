$(document).on('ready',function(){

			$('#btn1').on('click',function(c){
				c.preventDefault();
			$('#pas1').hide();
			$('#pas2').show();
			$('#barra').val('20');
		});


			$('#btn2').on('click',function(c){
				c.preventDefault();
			$('#pas2').hide();
			$('#pas3').show();
			$('#barra').val('60');
		});
			$('#btn3').on('click',function(c){
				c.preventDefault();
			$('#pas3').hide();
			$('#pas4').show();
			$('#barra').val('80');
		});

			$('#btn4').on('click',function(c){
				c.preventDefault();
			$('#pas4').hide();
			$('#pas5').show();
			$('#barra').val('100');
		});
			$('#btn5').on('click',function(c){
				c.preventDefault();
			$('#pas5').hide();
			$('#pas6').show();
			$('#barra').val('120');
		});

			$('#btn6').on('click',function(c){
				c.preventDefault();
			$('#pas6').hide();
			$('#pas7').show();
			$('#barra').val('140');
		});

		});