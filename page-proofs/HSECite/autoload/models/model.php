<?php
	namespace models;
	Class model
	{
		static function getFalucty_Groups(){
			return \F3::get('DB')->exec("SELECT name FROM faculty_group");
		}
	}
?>