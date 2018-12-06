<?php
	namespace models;
	Class api
	{
		
		// static function getIt ($art_id, $org_id) {

		// 	if	(isset($art_id)) {
		// 		return \F3::get('DB')->exec("SELECT * FROM abitir_articles 	WHERE article_id = '$art_id'");
		// 	}
			
		// 	if	(isset($org_id)) {
		// 		return \F3::get('DB')->exec("SELECT * FROM abitir_articles 	WHERE article_id = '$org_id'");
		// 	}

		// 	if	(isset($test)) {
		// 		return \F3::get('DB')->exec("SELECT * FROM abitir_articles 	WHERE article_id = '$test'");
		// 	}

		// 	return $art_id;
		// }


		static function getArticles($id) {
			return \F3::get('DB')->exec("SELECT * FROM abitir_articles 	WHERE article_id = '$id'");
		}
		static function getCampus($id) {
			return \F3::get('DB')->exec("SELECT * FROM campus WHERE campus_id =  '$id'");
		}
		static function getProfessions($id) {
			return \F3::get('DB')->exec("SELECT * FROM  professions	WHERE prof_id = '$id'");
		}
		static function getFaculties_group($id) {
			return \F3::get('DB')->exec("SELECT * FROM  faculty_group	WHERE id = '$id'");
		}
		static function getOrganizations($id) {
			return \F3::get('DB')->exec("SELECT * FROM organizations 	WHERE id = '$id'");
		}

		static function getOrganizationsGroup ($id) {
			return \F3::get('DB')->exec("SELECT * FROM organizations_group");	
		}

		static function getFacultiesByDirId ($id) {
			return \F3::get('DB')->exec("SELECT * FROM faculties WHERE dir_id = '$id'");
		}

		static function getAllOrganizations($id) {
			return \F3::get('DB')->exec("SELECT * FROM organizations where id_group = '$id'");
		}


		// новые
		static function getAllOrganizationGroup() {
			return \F3::get('DB')->exec("SELECT * FROM organizations_group");
		}
		static function getAllProfessions () {
			return \F3::get('DB')->exec("SELECT * FROM professions");	
		}
		static function getAllCampus () {
			return \F3::get('DB')->exec("SELECT * FROM campus");
		}
		static function getAllArticles () {
			return \F3::get('DB')->exec("SELECT * FROM abitir_articles");
		}

		static function getAllDirections () {
			$response = \F3::get('DB')->exec("SELECT * FROM faculties_directions");;
			$src = "http://abitir.styleru.net/api_photos/";

			$result = array(); 

			foreach ($response as $res) { 
				array_push($result, array(
					"photo_src"  => $src.$res['dir_img'],
					"directions" => $res));
			}

			return $result;
		}
		static function getAllSubjects () {
			return \F3::get('DB')->exec("SELECT * FROM subject");	
		}
		static function getAllFacGroups() {
			return \F3::get('DB')->exec("SELECT * FROM faculty_group");
		}



		// фотки
		static function getPhotos () {
			$response = \F3::get('DB')->exec("SELECT * FROM abitir_articles");
			$src = "http://abitir.styleru.net/api_photos/";

			$result = array(); 

			foreach ($response as $res) { 
				array_push($result, array(
					"photo_src"  => $src.$res['article_file'],
					"articles" => $res));
			}

			return $result;
		}


		static function getFacInfo ($id) {
			$query = \F3::get('DB')->exec("SELECT * FROM faculties WHERE fac_id = ?",$id);
			$array = array();
			foreach ($query as $q){
				$subj = \F3::get('DB')->exec("SELECT * FROM faculty_subject 
												LEFT JOIN subject ON subject.sub_id = faculty_subject._id_subj_
												WHERE faculty_subject._id_faculty_ = ?", $id);

				$prof = \F3::get('DB')->exec("SELECT prof_name FROM faculty_professions 
												LEFT JOIN professions 
													ON professions.prof_id = faculty_professions._id_prof_
												WHERE faculty_professions._id_faculty_ = ?", $id);

				$arr = array();
				foreach ($subj as $sd) {
					array_push($arr, array(
						"subj_name" => $sd['sub_name'],
						"subj_min_mark" => $sd['mark']
					));
				}

				array_push($array, array(
					"faculty_name"   	=> $query[0]['fac_name'],
					"faculty_price"  	=> $query[0]['fac_price'],
					"fac_study_type" 	=> $query[0]['fac_study_type'],
					"fac_price"			=> $query[0]['fac_price'],
					"fac_quota"			=> $query[0]['fac_quota'],
					"fac_program_link"	=> $query[0]['fac_program_link'],
					"fac_QB_link"		=> $query[0]['fac_QB_link'],
					"faculty_subject" 	=> $arr,
					"fac_profession"	=> $prof
				));
			}


			//return $subj[0]["mark"];
			return $array;
			// return \F3::get('DB')->exec("SELECT * FROM faculties
			// 						LEFT JOIN faculty_subject
			// 							ON faculty_subject._id_faculty_ = faculties.fac_id
			// 						LEFT JOIN subject
			// 							ON subject.sub_id = faculty_subject._id_subj_
			// 						LEFT JOIN faculty_professions
			// 							ON faculties.fac_id = faculty_professions._id_faculty_
			// 						LEFT JOIN professions
			// 							ON professions.prof_id = faculty_professions._id_faculty_
			// 						WHERE fac_id = '$id'");
		}

	}
?>