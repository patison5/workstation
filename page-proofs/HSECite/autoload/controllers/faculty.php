<?php
	namespace controllers;
	Class faculty
	{
		function f3Test(){
			\F3::set("f3Test", \models\model::getFaculty_Groups());
			\F3::set("faculties", \models\faculty::getFaculty());
			$template = new \Template;
			echo $template->render('f3Test.html');	
		}	
			
	}
?>