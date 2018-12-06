<?php
	namespace controllers;
	Class frontend
	{
		function renderNewsPage(){
			$template = new \Template;
			echo $template->render('frontend/news.htm');	
		}

		function renderFacultiesPage(){
			$template = new \Template;
			echo $template->render('frontend/faculties.htm');	
		}

		function renderOlympiadsPage(){
			$template = new \Template;
			echo $template->render('frontend/olympiads.htm');	
		}

		function renderOrganisationsPage(){
			$template = new \Template;
			echo $template->render('frontend/organisations.htm');
		}

		function renderFacultyAboutPage(){
			$template = new \Template;
			echo $template->render('frontend/about.htm');
		}

		function renderFacultyEntrancePage(){
			$template = new \Template;
			echo $template->render('frontend/entrance.htm');
		}

		function renderFacultyProfessionPage(){
			$template = new \Template;
			echo $template->render('frontend/profession.htm');
		}

		function renderFacultyStatisticsPage(){
			$template = new \Template;
			echo $template->render('frontend/statistics.htm');
		}

		function renderFacultyBenefitsPage(){
			$template = new \Template;
			echo $template->render('frontend/benefits.htm');
		}
	}
?>