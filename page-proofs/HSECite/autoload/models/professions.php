<?php
	namespace models;
	Class professions
	{		
		// все кампусы
		static function show_professions(){		
			return \F3::get('DB')->exec("SELECT * FROM professions");
		}

		// функция редактирования конкретного кампуса
		static function edit_professions_layout($id) {
			return \F3::get('DB')->exec("SELECT * FROM professions WHERE prof_id = '$id'");
		}

		// функция удаления кампуса
		static function delete_professions ($id) {
			return \F3::get('DB')->exec("DELETE FROM professions WHERE prof_id = '$id'");			
		}

		static function add_profession ($prof_name) {
			return \F3::get('DB')->exec("INSERT INTO professions (prof_name) VALUES ('$prof_name')");
		}

		static function edit_professions ($id, $title) {
			return \F3::get('DB')->exec("UPDATE professions SET prof_name = '$title' WHERE prof_id =?", $id);
		}
	}
?>