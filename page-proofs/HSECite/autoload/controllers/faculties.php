<?php
	namespace controllers;
	Class faculties
	{
		function faculties(){
			\F3::set("faculties", \models\faculty::getFaculties());
			$template = new \Template;

			echo $template->render('faculties.html');	
		}

		function editing_faculties_layout () {
			\F3::set("faculties", \models\faculty::editing_faculties_layout(\F3::get('PARAMS.id')));
			$template = new \Template;
			echo $template->render('editing_faculties.html');
		}

		function delete_faculties () {
			\models\faculty::delete_faculties(\F3::get('PARAMS.id'));
			\F3::reroute('/faculties');
		}



		// function getGroups(){
		// 	//die(\models\faculty::fucn_name(\F3::get(PARAMS.id)));
		// 	\F3::set("param", \F3::get('PARAMS.id'));
		// 	$template = new \Template;
		// 	echo $template->render('faculty_group.html');
		//}

		function getGroupFacs(){
			\F3::set("faculty", \models\faculty::getMembers(\F3::get('PARAMS.id')));
			$template = new \Template;

			echo $template->render('faculty_group.html');	
		}

		function addFG(){
			\models\faculty::add_fg(\F3::get('POST.fg_name'));
			$template = new \Template;
			echo $template->render('add_fac_gr.html');
		}


		function add_faculties_layout () {
			$template = new \Template;
			\F3::set("Info", \models\faculty::getFacDirections());
			echo $template->render('add_faculties.html');
		}

		function add_faculties () {
			// \models\faculty::add_faculties(\F3::get('POST.title'),\F3::get('POST.type'),\F3::get('POST.price'),\F3::get('POST.qouta'),\F3::get('POST.program_link'),\F3::get('POST.QB_link'));
			// \F3::reroute('/faculties');

			// \models\faculty::add_faculties(\F3::get('POST.faculty_dir'),\F3::get('POST.fac_title'),\F3::get('POST.fac_desc'),\F3::get('POST.budget'),\F3::get('POST.paytype'),\F3::get('POST.pay'),\F3::get('POST.comment1'),\F3::get('POST.comment2'),\F3::get('POST.program_link'),\F3::get('POST.QB_link'));
			// echo \F3::get('POST.faculty_dir');
			// echo \F3::get('POST.fac_title');

			// echo json_encode(\F3::get('POST.fac_subj'));
			echo json_encode(\F3::get('POST.faculty_dir'));


		}

		function editing_faculties () {
			\models\faculty::editing_faculties(\F3::get('POST.title'),\F3::get('POST.type'),\F3::get('POST.price'),\F3::get('POST.qouta'),\F3::get('POST.program_link'),\F3::get('POST.QB_link'),\F3::get('POST.id'));

			// echo

			// \F3::reroute('/faculties');
		}


		function getFacInfo () {
			$response = \models\faculty::getFacInfo(\F3::get('PARAMS.id'));
			echo json_encode($response);
		}
	}
?>

<!-- wizard clearfix steps-tabs steps-justified -->




<!-- \F3::get('PARAMS.title'),\F3::get('PARAMS.type'),\F3::get('PARAMS.price'),\F3::get('PARAMS.qouta'),\F3::get('PARAMS.program_link'),\F3::get('PARAMS.QB_link') -->





<!-- \F3::get('faculty_dir'),
\F3::get('fac_title'),
\F3::get('fac_desc'),
\F3::get('budget'),
\F3::get('paytype'),
\F3::get('pay'),
\F3::get('comment1'),
\F3::get('comment2'),
\F3::get('program_link'),
\F3::get('QB_link'),
F3::get('fac_subj')  -->


<!-- $fac_title,
$fac_desc,
$budget,
$paytype,
$pay,
$comment1,
$comment2,
$program_link,
$QB_link,
fac_subj -->