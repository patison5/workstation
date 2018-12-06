<?php
	namespace controllers;
	Class api_contr
	{

		// function getApi(){
		// 	$get_api = \models\api::getIt(\F3::get('POST.art_id'), \F3::get('POST.org_id'));
		// 	\F3::set("get_api", $get_api);

		// 	echo json_encode($get_api);
		// }


		// // мне кажется, тут должно быть "$get_groupm, а не get_article "
		// function getOrganizationsGroup(){
		// 	$get_articles = \F3::get('DB')->exec("SELECT * FROM organizations_group");

		// 	echo json_encode(array("error" => null, "data" => $get_articles));
		// }

		// static function getOrganizations($f3){
		// 	$response = \F3::get('DB')->exec("SELECT * FROM organizations WHERE id_group = ?", $_POST['id_group']);
		// 	echo json_encode($response);
		// }


		// static function getCampus($f3){
		// 	$response = \F3::get('DB')->exec("SELECT * FROM campus WHERE campus_id = ?", $_POST['campus_id']);
		// 	echo json_encode($response);
		// }

		// static function getProfessions($f3){
		// 	$response = \F3::get('DB')->exec("SELECT * FROM professions WHERE prof_id = ?", $_POST['prof_id']);
		// 	echo json_encode($response);
		// }

		// static function getFaculties_group ($f3){
		// 	$response = \F3::get('DB')->exec("SELECT * FROM `faculty_group` WHERE id = ?", $_POST['id']);
		// 	echo json_encode($response);
		// }




		// по id
		static function getArticles(){
			$response = \models\api::getArticles($_POST['article_id']);
			echo json_encode($response);
		}
		static function getCampus(){
			$response = \models\api::getCampus(\F3::get('POST.campus_id'));
			echo json_encode($response);
		}
		static function getProfessions(){
			$response = \models\api::getProfessions(\F3::get('POST.prof_id'));
			echo json_encode($response);
		}
		static function getFaculties_group(){
			$response = \models\api::getFaculties_group(\F3::get('POST.fac_group_id'));
			echo json_encode($response);
		}
		static function getOrganizations(){
			$response = \models\api::getOrganizations(\F3::get('POST.org_id'));
			echo json_encode($response);
		}

		static function getFacultiesByDirId (){
			$response = \models\api::getFacultiesByDirId(\F3::get('POST.id'));
			echo json_encode($response);
		}
		static function getAllOrganizations(){
			$response = \models\api::getAllOrganizations(\F3::get('POST.id'));
			echo json_encode($response);
		}





		// показать все
		static function getOrganizationsGroup(){
			$response = \models\api::getOrganizationsGroup();
			echo json_encode($response);
		}
		static function getAllOrganizationGroup(){
			$response = \models\api::getAllOrganizationGroup();
			echo json_encode($response);
		}
		static function getAllProfessions(){
			$response = \models\api::getAllProfessions();
			echo json_encode($response);
		}
		static function getAllCampus(){
			$response = \models\api::getAllCampus();
			echo json_encode($response);
		}
		static function getAllArticles(){
			$response = \models\api::getAllArticles();
			echo json_encode($response);
		}
		static function getAllDirections(){
			$response = \models\api::getAllDirections();
			echo json_encode($response);
		}
		static function getAllSubjects(){
			$response = \models\api::getAllSubjects();
			echo json_encode($response);
		}


		static function getAllFacGroups () {
			$response = \models\api::getAllFacGroups();
			echo json_encode($response);			
		}

		// фотки
		static function getPhotos () {
			$response = \models\api::getPhotos();
			echo json_encode($response);
		}

		static function getFacInfo () {
			$response = \models\api::getFacInfo(2);
			echo json_encode($response);
		}

	}
?>