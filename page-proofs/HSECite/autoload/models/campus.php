<?php
	namespace models;
	Class campus
	{		
		// все кампусы
		static function show_campus(){		
			return \F3::get('DB')->exec("SELECT * FROM campus");
		}

		// функция редактирования конкретного кампуса
		static function editing_campus_layout($id) {
			return \F3::get('DB')->exec("SELECT * FROM campus WHERE campus_id = '$id'");
		}

		// функция удаления кампуса
		static function delete_campus ($id) {
			return \F3::get('DB')->exec("DELETE FROM campus WHERE campus_id = '$id'");			
		}

		static function add_campus ($campus_name) {
			\F3::get('DB')->exec("INSERT INTO campus (campus_name) VALUES ('$campus_name')");
		}

		static function editing_campus ($id, $title) {
			return \F3::get('DB')->exec("UPDATE campus SET campus_name = '$title' WHERE campus_id =?", $id);
		}
	}
?>


<!-- 4796 -->