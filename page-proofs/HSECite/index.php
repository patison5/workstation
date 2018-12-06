<?php
$f3=require('lib/base.php');

$f3->set('AUTOLOAD','autoload/');

$f3->config('config.ini');

define("DB_HOST", "localhost");
define("DB_USER", "abitir");
define("DB_PWD", "qwerty78");
define("DB_NAME", "abitir");

define("_EXECUTED",1);

$db = new DB\SQL(
    'mysql:host='.DB_HOST.';port=3306;dbname='.DB_NAME, DB_USER, DB_PWD
);

$f3->set("DB",$db);
$f3->set('DEBUG', 3);
$f3->set('CACHE',FALSE);
$f3->set('UI','ui/');

//routs for Rinat
$f3->route("GET /", "\controllers\controller->index");

//routs for Arina
$f3->route("GET /frontend/news", 		  "\controllers\\frontend->renderNewsPage");
$f3->route("GET /frontend/faculties",     "\controllers\\frontend->renderFacultiesPage");
$f3->route("GET /frontend/olympiads",     "\controllers\\frontend->renderOlympiadsPage");
$f3->route("GET /frontend/organisations", "\controllers\\frontend->renderOrganisationsPage");
$f3->route("GET /frontend/faculties/bi",  "\controllers\\frontend->renderFacultyAboutPage");
$f3->route("GET /frontend/faculties/bi/entrance",  "\controllers\\frontend->renderFacultyEntrancePage");
$f3->route("GET /frontend/faculties/bi/profession",  "\controllers\\frontend->renderFacultyProfessionPage");
$f3->route("GET /frontend/faculties/bi/statistics",  "\controllers\\frontend->renderFacultyStatisticsPage");
$f3->route("GET /frontend/faculties/bi/benefits",  "\controllers\\frontend->renderFacultyBenefitsPage");




//routs for Fedor
$f3->route("GET /show_articles", 	   		"\controllers\\notifications->show_article");
$f3->route("GET /add_article",		    	"\controllers\\notifications->add_article_layout");
$f3->route("GET /editing_article/@id",  	"\controllers\\notifications->editing_article_layout");
$f3->route("POST /editing_article/@id",  	"\controllers\\notifications->edit_article");

$f3->route("POST /add_article", 			"\controllers\\notifications->add_article");
$f3->route("POST /editing_article", 		"\controllers\\notifications->edit_article");
$f3->route("POST /show_articles",	 		"\controllers\\notifications->change__article");
$f3->route("POST /update_article", 			"\controllers\\notifications->update_article");


$f3->route("GET /faculties", 		        "\controllers\\faculties->faculties");
$f3->route("GET /editing_faculties/@id",    "\controllers\\faculties->editing_faculties_layout");
$f3->route("GET /delete_faculties/@id",     "\controllers\\faculties->delete_faculties");
$f3->route("GET /add_faculties",		    "\controllers\\faculties->add_faculties_layout");
$f3->route("POST /add_facultie",	  	    "\controllers\\faculties->add_faculties");
$f3->route("POST /editing_faculties",	  	"\controllers\\faculties->editing_faculties");



$f3->route("GET  /show_campus",   		    "\controllers\\campus->show_campus");
$f3->route("GET  /editing_campus/@id",      "\controllers\\campus->editing_campus_layout");
$f3->route("GET  /delete_campus/@id",       "\controllers\\campus->delete_campus");
$f3->route("GET  /add_campus",			    "\controllers\\campus->add_campus_layout");
$f3->route("POST /add_campus",			    "\controllers\\campus->add_campus");
$f3->route("POST /editing_campus",			"\controllers\\campus->editing_campus");



$f3->route("GET  /show_professions",   		"\controllers\\professions->show_professions");
$f3->route("GET  /edit_professions/@id", 	"\controllers\\professions->edit_professions_layout");
$f3->route("GET  /delete_professions/@id", 	"\controllers\\professions->delete_professions");
$f3->route("GET  /add_profession", 			"\controllers\\professions->add_profession_layout");
$f3->route("POST /add_profession", 			"\controllers\\professions->add_profession");
$f3->route("POST|GET /edit_professions", 	"\controllers\\professions->edit_professions");

$f3->route("GET  /show_subjects",   		"\controllers\\subjects->show_subjects");
$f3->route("GET  /editing_subjects/@id",   	"\controllers\\subjects->editing_subjects_layout");
$f3->route("GET  /delete_subjects/@id", 	"\controllers\\subjects->delete_subjects");
$f3->route("GET  /add_subject", 			"\controllers\\subjects->add_subject_layout");
$f3->route("POST /add_subject", 			"\controllers\\subjects->add_subject");
$f3->route("POST /editing_subjects", 		"\controllers\\subjects->editing_subjects");


$f3->route("GET  /faculty_groups/@id",   	"\controllers\\faculties->getGroupFacs");
$f3->route("GET  /faculty_groups", 	    	"\controllers\\faculties->getGroups");
$f3->route("GET  /add_fac_gr",  		    "\controllers\\faculties->addFG");
// $f3->route("POST /editing_faculties", 		"\controllers\\faculties->editing_faculties");

$f3->route("GET /organizations", 	      "\controllers\\organizations->organizations");
$f3->route("GET /add_organization", 	  "\controllers\\organizations->add_organization_layout");
$f3->route("POST /add_organization", 	  "\controllers\\organizations->add_organization");




// берем по по id
// $f3->route("POST|GET /api", 					 "\controllers\\api_contr->getApi");
$f3->route("POST|GET /api/organizations",  		 	 "\controllers\\api_contr->getOrganizations");
$f3->route("POST|GET /api/organizationsGroups ", 	 "\controllers\\api_contr->getOrganizationsGroup");
$f3->route("POST|GET /api/articles",				 "\controllers\\api_contr->getArticles");
$f3->route("POST|GET /api/campus",					 "\controllers\\api_contr->getCampus");
$f3->route("POST|GET /api/professions", 			 "\controllers\\api_contr->getProfessions");
$f3->route("POST|GET /api/Faculties_group", 		 "\controllers\\api_contr->getFaculties_group");

// отображаем все, что есть
$f3->route("POST|GET /api/getAllOrganizations",		 "\controllers\\api_contr->getAllOrganizations");
$f3->route("POST|GET /api/getAllOrganizationGroup",  "\controllers\\api_contr->getAllOrganizationGroup");
$f3->route("POST|GET /api/getAllProfessions", 		 "\controllers\\api_contr->getAllProfessions");
$f3->route("POST|GET /api/getAllCampus", 			 "\controllers\\api_contr->getAllCampus");
$f3->route("POST|GET /api/getAllArticles", 			 "\controllers\\api_contr->getAllArticles");
$f3->route("POST|GET /api/getAllDirections", 		 "\controllers\\api_contr->getAllDirections");
$f3->route("POST|GET /api/getAllSubjects", 			 "\controllers\\api_contr->getAllSubjects");

$f3->route("POST|GET /api/getFacultiesByDirId", 	 "controllers\\api_contr->getFacultiesByDirId");
$f3->route("POST|GET /api/getAllFacGroups", 		 "controllers\\api_contr->getAllFacGroups");
$f3->route("POST|GET /api/getPhotos", 				 "controllers\\api_contr->getPhotos");
$f3->route("POST|GET /api/getFacInfo", 				 "controllers\\api_contr->getFacInfo");


$f3->run(); 