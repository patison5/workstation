<?php
	namespace controllers;
	Class subjects
	{
		function show_subjects () {
			\F3::set("subjects", \models\subjects::show_subjects());
			$template = new \Template;

			echo $template->render('subjects.html');	
		}


		function delete_subjects () {
			\models\subjects::delete_subjects(\F3::get('PARAMS.id'));
			\F3::reroute('/show_subjects');
		}

		function add_subject () {
			\models\subjects::add_subject(\F3::get('POST.title'));
			\F3::reroute('/show_subjects');
		}

		function add_subject_layout () {
			$template = new \Template;
			echo $template->render('add_subject.html');
		}

		function editing_subjects_layout () {
			\F3::set("subjects", \models\subjects::editing_subjects_layout(\F3::get('PARAMS.id')));
			$template = new \Template;
			echo $template->render('editing_subjects.html');
		}

		function editing_subjects () {
			\models\subjects::editing_subjects(\F3::get('POST.id'), \F3::get('POST.title'));
			\F3::reroute('/show_subjects');
		}
		
	}
?>