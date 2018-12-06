<?php
	namespace controllers;
	Class notifications
	{
		function add_article_layout(){
			$template = new \Template;
			echo $template->render('add_article.html');	
		}

		function add_article () {
			\models\notification::add_article(\F3::get('POST.art_title'),\F3::get('POST.art_text'),\F3::get('POST.article_place'),\F3::get('POST.articles_filter'));
			\F3::reroute('/show_articles');
		}

		function show_article () {
			\F3::set("articles", \models\notification::get_articles());
			$template = new \Template;
			echo $template->render('show_articles.html');
		}

		function editing_article_layout () {
			// \models\notification::editing_article_layout(\F3::get('POST.id'));
			// \F3::set("article", \models\notification::editing_article_layout(\F3::get('PARAMS.id')));
			\F3::set("articles", \models\notification::editing_article_layout(\F3::get('PARAMS.id')));
			$template = new \Template;
			// echo "article";
			echo $template->render('editing_article.html');
		}

		function editing_article () {
			\models\notification::editing__article(\F3::get('POST.confirm'), \F3::get('POST.nonconfirm'), \F3::get('POST.delete'));

			\F3::reroute('/show_articles');
		}

		function change__article () {
			\models\notification::change__article(\F3::get('POST.checked'), \F3::get('POST.confirm'), \F3::get('POST.nonconfirm'), \F3::get('POST.delete'));

			\F3::reroute('/show_articles');
		}

		function update_article () {
			\models\notification::update_article(\F3::get('POST.article_title'),\F3::get('POST.art_text'),\F3::get('POST.article_place'),\F3::get('POST.articles_filter'), \F3::get('POST.articles_date'), \F3::get('POST.articles_tags'), \F3::get('POST.id'));

			\F3::reroute('/show_articles');
		}	
	}
?>