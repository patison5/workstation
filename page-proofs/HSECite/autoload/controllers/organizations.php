<?php
	namespace controllers;
	Class organizations
	{
		function organizations (){
			$organizations = \models\organization::organizations_index();
			\F3::set("organizations", $organizations);

			$template = new \Template;
			echo $template->render('organizations.html');
		}




		function add_organization_layout () {
			$template = new \Template;
			echo $template->render('add_organization.html');
		}



		function add_organization () {
			\models\organization::add_organization(\F3::get('POST.name'),\F3::get('POST.link'), \F3::get('POST.description'), \F3::get('POST.group'));
			\F3::reroute('/organizations');
		}

		function delete_organization () {
			\models\organization::delete_organization(\F3::get('PARAMS.id'));
			\F3::reroute('/organizations');
		}

		function editing_organization_layout () {
			\F3::set("organization", \models\organization::editing_organization_layout(\F3::get('PARAMS.id')));
			$template = new \Template;
			echo $template->render('editing_organization.html');
		}




		function editing_organization () {
			\models\organization::editing_organization(\F3::get('POST.id'), \F3::get('POST.name'),\F3::get('POST.link'), \F3::get('POST.description'), \F3::get('POST.id_group'));
			\F3::reroute('/organizations');
		}
	}
?>