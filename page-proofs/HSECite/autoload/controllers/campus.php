<?php
	namespace controllers;
	Class campus
	{
		function show_campus () {
			\F3::set("campus", \models\campus::show_campus());
			$template = new \Template;

			echo $template->render('campus.html');	
		}


		function delete_campus () {
			\models\campus::delete_campus(\F3::get('PARAMS.id'));
			\F3::reroute('/show_campus');
		}

		function add_campus_layout () {
			$template = new \Template;
			echo $template->render('add_campus.html');
		}

		function add_campus () {
			\models\campus::add_campus(\F3::get('POST.title'));
			\F3::reroute('/show_campus');
		}

		function editing_campus_layout () {
			\F3::set("campus", \models\campus::editing_campus_layout(\F3::get('PARAMS.id')));
			$template = new \Template;
			echo $template->render('editing_campus.html');
		}

		function editing_campus () {
			\models\campus::editing_campus(\F3::get('POST.id'), \F3::get('POST.title'));
			\F3::reroute('/show_campus');
		}
	}
?>