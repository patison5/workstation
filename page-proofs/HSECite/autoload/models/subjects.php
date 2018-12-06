<?php
	namespace models;
	Class subjects
	{		
		// все кампусы
		static function show_subjects(){		
			return \F3::get('DB')->exec("SELECT * FROM subject");
		}


		// функция удаления кампуса
		static function delete_subjects ($id) {
			return \F3::get('DB')->exec("DELETE FROM subject WHERE sub_id = '$id'");			
		}


		static function add_subject ($name) {
			return \F3::get('DB')->exec("INSERT INTO subject (sub_name) VALUES ('$name')");
		}

		// функция редактирования конкретного кампуса
		static function editing_subjects_layout($id) {
			return \F3::get('DB')->exec("SELECT * FROM subject WHERE sub_id = '$id'");
		}

		static function editing_subjects ($id, $title) {
			return \F3::get('DB')->exec("UPDATE subject SET sub_name = '$title' WHERE sub_id =?", $id);
		}
		
	}
?>