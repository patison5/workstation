<?php
	namespace models;
	Class notification
	{
		// private $bd_title;
		// function __construct($art_title) {
		// 	$bd_title = \F3::get('DB')->exec("SELECT article_title FROM abitir_articles WHERE article_title =?", $art_title);
		// }

		static function get_articles(){
			return \F3::get('DB')->exec("SELECT * FROM abitir_articles");
		}

		// функция добавления статьи
		static function add_article ($art_title, $art_text, $article_place, $articles_filter) {
			$art_date = "30.10.2016";

	        if (isset($art_title) && isset($art_text)) {
				$bd_title = \F3::get('DB')->exec("SELECT article_title FROM abitir_articles WHERE article_title = '$art_title'");

	        	// $bd_title = \F3::get('DB')->exec("SELECT * FROM `abitir_articles`");

				if ($bd_title["article_title"]) {
			  		echo "Введите другое назавние статьи";
			  	} else {
					return \F3::get('DB')->exec("INSERT INTO abitir_articles (article_title, article_date, article_text, article_file, article_place, articles_filter, article_status)
															VALUES ('$art_title', '$art_date', '$art_text', 'img/avatar.jpg', '$article_place', '$articles_filter', 'not confirmed')");
			  	}
			}

			\F3::reroute('/notifications');
		}


		// функция для переадресации на конкретную статью
		static function editing_article_layout($art_id) {
			return \F3::get('DB')->exec("SELECT * FROM abitir_articles WHERE article_id = '$art_id'");
		}	

		static function change__article($id, $conf, $nonconf,  $del) {
			if (isset($conf)) {
				return \F3::get('DB')->exec("UPDATE abitir_articles SET article_status = 'confirmed' WHERE article_id = '$id'");
			} else
				if (isset($nonconf)) {
					return \F3::get('DB')->exec("UPDATE abitir_articles SET article_status = 'not confirmed' WHERE article_id = '$id'");
				} else 
					if (isset($del)) {
						return \F3::get('DB')->exec("DELETE FROM abitir_articles WHERE article_id = '$id'");
					}
		}


		// static function editing_article ($id) {
		// 	return \F3::get('DB')->exec("UPDATE tableName SET stolbik_name = value WHERE article_id = ?", $id);
		// }


		static function update_article ($art_title, $art_text, $article_place, $articles_filter, $article_date, $articles_tags, $id) {
			return \F3::get('DB')->exec("UPDATE abitir_articles SET 
											article_title = '$art_title',
											article_text = '$art_text',
											article_place = '$article_place', 
											articles_filter = '$articles_filter',
											article_date = '$article_date',
											article_tags = '$articles_tags'
										 WHERE article_id =?", $id);
		}
	}
?>