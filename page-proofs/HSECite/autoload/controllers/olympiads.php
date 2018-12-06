<?php
	namespace controllers;
	Class olympiads
	{
		function renderOlympiadsPage(){
			$template = new \Template;
			echo $template->render('frontend/olympiads.htm');	
		}
	}
?>