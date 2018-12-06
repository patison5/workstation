$("#menu > li > div").click(function(){

		if(false == $(this).next().is(':visible')) {
			$('#menu ul').slideUp(280);
		}
		$(this).next().slideToggle(280); 
	});

	$('#menu ul:eq(2)').show();