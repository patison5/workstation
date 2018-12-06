<?php
	namespace controllers;
	Class controller
	{
		function index(){
			\F3::set("f3Test", \models\model::getFalucty_Groups());
			$template = new \Template;
			echo $template->render('main.html');	
		}
	}
?>