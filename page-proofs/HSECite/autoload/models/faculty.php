<?php
	namespace models;
	Class faculty
	{		
		static function getFaculties(){		
			return \F3::get('DB')->exec("SELECT * FROM faculties 
											LEFT JOIN faculty_subject ON (faculties.fac_id = faculty_subject._id_faculty_)
											LEFT JOIN subject ON (subject.sub_id = faculty_subject._id_subj_)");
		}

		static function getMembers($id){	
			return \F3::get('DB')->exec("SELECT * FROM faculties WHERE id_group = '$id'");
		}

		static function add_fg($fg_name){
	        if (isset($fg_name)) {
				$bd_title = \F3::get('DB')->exec("SELECT name FROM `faculty_group` WHERE name = '$fg_name'");
		   		if ($bd_title["name"]) {
		 	  		echo "Такое направление уже есть";
		 	  	}  else {
		 			return \F3::get('DB')->exec("INSERT INTO faculty_group (name) VALUES ('$fg_name')");
		 		}
			}
		}


		// функция для переадресации на конкретную статью
		static function editing_faculties_layout($id) {
			// return \F3::get('DB')->exec("SELECT * FROM faculties WHERE fac_id = '$id'");

			$query = \F3::get('DB')->exec("SELECT * FROM faculties WHERE fac_id = ?",$id);
			$array = array();
			foreach ($query as $q){
				$subj = \F3::get('DB')->exec("SELECT * FROM faculty_subject 
												LEFT JOIN subject ON subject.sub_id = faculty_subject._id_subj_
												WHERE faculty_subject._id_faculty_ = ?", $id);

				$prof = \F3::get('DB')->exec("SELECT * FROM faculty_professions 
												LEFT JOIN professions 
													ON professions.prof_id = faculty_professions._id_prof_
												WHERE faculty_professions._id_faculty_ = ?", $id);

				$allprof = \F3::get('DB')->exec("SELECT * FROM professions");
				$allSubj = \F3::get('DB')->exec("SELECT * FROM subject");

				$arr = array();
				foreach ($subj as $sd) {
					array_push($arr, array(
						"subj_id" => $sd['sub_id'],
						"subj_name" => $sd['sub_name'],
						"subj_min_mark" => $sd['mark']
					));
				}

				array_push($array, array(
					"faculty_name"   	=> $query[0]['fac_name'],
					"fac_study_type" 	=> $query[0]['fac_study_type'],
					"fac_price"			=> $query[0]['fac_price'],
					"fac_quota"			=> $query[0]['fac_quota'],
					"fac_program_link"	=> $query[0]['fac_program_link'],
					"fac_QB_link"		=> $query[0]['fac_QB_link'],
					"faculty_subject" 	=> $arr,
					"fac_profession"	=> $prof,
					"all_professions"	=> $allprof,
					"all_subjects"		=> $allSubj
				));
			}

			return $array;		
		}
		static function delete_faculties ($id) {
			return \F3::get('DB')->exec("DELETE FROM faculties WHERE fac_id = '$id'");			
		}

		static function add_faculties ($fac_title, $fac_desc, $budget, $paytype, $pay, $comment1, $comment2, $program_link, $QB_link) {
			// return \F3::get('DB')->exec("INSERT INTO faculties (fac_name, fac_study_type, fac_price, fac_quota, fac_program_link, fac_QB_link) 
			// 	VALUES ('$title', '$type', '$price', '$qouta', '$program_link', '$QB_link')");

			return $fac_title;
		}

		static function editing_faculties ($title, $type, $price, $qouta, $program_link, $QB_link, $id) {
			return \F3::get('DB')->exec("UPDATE faculties SET 
											fac_name = '$title',
											fac_study_type = '$type',
											fac_price = '$price', 
											fac_quota = '$qouta', 
											fac_program_link = '$program_link', 
											fac_QB_link = '$QB_link'
										 WHERE fac_id =?", $id);
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

			return $array;			
		}

		static function getFacDirections () {
			$faculties_directions = \F3::get('DB')->exec("SELECT * FROM faculties_directions");
			$subject = \F3::get('DB')->exec("SELECT * FROM subject");
			$array = array();

			array_push($array, array(
				"faculties_directions"   	=> $faculties_directions,
				"subjects"  					=> $subject,
			));

			return $array;

		}

	}
?>