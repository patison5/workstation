<?php
	namespace controllers;
	Class professions
	{
		function show_professions () {
			\F3::set("professions", \models\professions::show_professions());
			$template = new \Template;

			echo $template->render('professions.html');	
		}

		function delete_professions () {
			\models\professions::delete_professions(\F3::get('PARAMS.id'));
			\F3::reroute('/show_professions');
		}

		function add_profession () {
			\models\professions::add_profession(\F3::get('PARAMS.id'), \F3::get('POST.title'));
			\F3::reroute('/show_professions');
		}

		function add_profession_layout () {
			$template = new \Template;
			echo $template->render('add_profession.html');
		}


		function edit_professions_layout () {
			\F3::set("professions", \models\professions::edit_professions_layout(\F3::get('PARAMS.id')));
			$template = new \Template;
			echo $template->render('editing_professions.html');
		}

		function edit_professions () {
			\models\professions::edit_professions(\F3::get('POST.id'), \F3::get('POST.title'));
			\F3::reroute('/show_professions');
		}
	}
?>