<?php echo $this->render('template/head.html',$this->mime,get_defined_vars(),0); ?>	
<script src="https://use.fontawesome.com/19b78bdbb2.js"></script>

	<style>
		.notifications__main {
			margin-top: 2em; 
			padding-left: 1em; 
			padding-right: 1em;
		}	
		.panel {
			padding: 0; 
			border: 0; 
			margin-bottom: 0.3em;
		}
	</style>
	<link rel="stylesheet" href="assets/admin/css/admin-forms.min.css">
</head>
<body>
	<?php echo $this->render('template/menu.html',$this->mime,get_defined_vars(),0); ?>	
    <section id="content_wrapper">
    	<div class="row">
			<div class="col-md-12">
				<h2 class="ml10 ">Кампусы</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
			    <div class="notifications__main mt10">
					<!-- <?php echo $test; ?> -->

					<!-- recent orders table -->
					<div class="panel">
					  <div class="panel-menu admin-form theme-primary">
					  	<div class="row ">
					  		<div class="col-md-4 text-left">
					  			<!-- <span class="panel-title fs18">Статьи и новости</span> -->
					  		</div>
					  		<div class="col-md-8 text-right">
					      		<a href="/add_article" class="btn btn-success br2 btn-xs fs12 dropdown-toggle">Добавить новость</a>
					      	</div>
					  	</div>
					  </div>
					  <div class="panel-body pn">
					    <div class="table-responsive">
						    <form action="/show_articles" method="POST">
						      <table class="table admin-form theme-warning tc-checkbox-1 fs13 ">
						        <thead>
						          <tr class="bg-light">
						            <th class="text-center">Выбрать</th>
						            <th class="text-center">Название</th>
						            <th class="text-center">Автор</th>
						            <th class="text-center">Добавлено</th>
						            <th class="text-center">Метки</th>
						            <th class="text-center">Рубрики</th>
						            <th class="text-right">Статус</th>
						          </tr>
						        </thead>
						        <tbody>


								<?php foreach (($articles?:array()) as $article): ?>
							        <!-- Вывод из бд -->
							          <tr>
							            <td class="w50 text-center">
							              <label class="option block mn">
							                <input type="checkbox" name="checked" value="<?php echo $article['article_id']; ?>">
							                <span class="checkbox mn"></span>
							              </label>
							            </td>
							            <td class="w350">
							            	<a href="/editing_article/<?php echo $article['article_id']; ?>"><?php echo $article['article_title']; ?></a>
							            </td>
							            <td class="text-center w100"><?php echo $article['article_author']; ?> Super Puper Admin</td>
							            <td class="text-center"><?php echo $article['article_date']; ?></td>
							            <td class="w150 text-center"><a href="#">метка1</a>, <a href="#">метка2</a>, <a href="#">метка3</a>, <a href="#">метка4</a>,<a href="#">метка5</a></td>
							            <td class=" text-center">
							            	<span class="label label-primary">Photoshop</span>,
											<span class="label label-primary">Sublime</span>,
											<span class="label label-primary">Firefox</span>,
											<span class="label label-primary">Chrome</span>
							            </td>
							            <td class="text-right">
							              <div class="btn-group text-right">
							                <button type="button" class="btn br2 btn-xs fs12 dropdown-toggle <?php echo $article['article_status']=='confirmed'?'btn-success':'btn-warning'; ?> <?php echo $article['article_status']; ?>" data-toggle="dropdown" aria-expanded="false"> <?php echo $article['article_status']; ?></button>
							              </div>
							            </td>
							          </tr> <!-- Вывод из бд -->
						          <?php endforeach; ?>
						        </tbody>
						      </table>
							  <div class="panel-footer text-right">
							      <input type="submit" name="confirm" 	 class="btn btn-xs btn-success  button btn-primary art_btn" value="Подтвердить">
							      <input type="submit" name="nonconfirm" class="btn btn-xs btn-warning  button btn-primary art_btn" value="Снять подтверждение">
							      <input type="submit" name="delete"  	 class="btn btn-xs btn-danger   button btn-primary art_btn" value="Удалить">
							  </div>
						  	</form>
					    </div>
					  </div>
					</div>

				</div>
			</div>
		</div>
	</section>
</body>




<!-- main scripts for the page -->
<script src="assets/admin/js/utility.js"></script>
<script src="assets/admin/js/demo.js"></script>
<script src="assets/admin/js/main.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Demo JS  
    Demo.init();
 

    // Init Theme Core    
    Core.init();


    // Init Widget Demo JS
    // demoHighCharts.init();

    // Because we are using Admin Panels we use the OnFinish 
    // callback to activate the demoWidgets. It's smoother if
    // we let the panels be moved and organized before 
    // filling them with content from various plugins

    // Init plugins used on this page
    // HighCharts, JvectorMap, Admin Panels

    // Init Admin Panels on widgets inside the ".admin-panels" container
    $('.admin-panels').adminpanel({
      grid: '.admin-grid',
      draggable: true,
      preserveGrid: true,
      // mobile: true,
      onStart: function() {
        // Do something before AdminPanels runs
      },
      onFinish: function() {
        $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

        // Init the rest of the plugins now that the panels
        // have had a chance to be moved and organized.
        // It's less taxing to organize empty panels
        demoHighCharts.init();
        runVectorMaps(); // function below
      },
      onSave: function() {
        $(window).trigger('resize');
      }
    });
});





  // скрипт для обработки формы


  // // кнопки формы
  // var art_btns = document.getElementsByClassName('art_btn');

  // // удалить публикацию
  // art_btns[0].addEventListener('click', function () {
  // 	$.ajax({ 
		// type: "POST", 
		// dataType: 'json', 
		// data: { id : 1 }, 

		// success: function(data){ 
		// 	alert('hip hip horey!!! it is working!!!!!!!!!! =)') ;
		// 	alert(data);
		// }, 

		// error: function(){ alert('fuck this shit!'); }});
  // });



  // // подтвердить публикацию
  // art_btns[1].addEventListener('click', function () {
  // 	var xmlhttp = new XMLHttpRequest(),
  // 		params = "id=" + par;

  //   xmlhttp.onreadystatechange = function() {
  //       if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
  //           alert('Данные успешно добавлены!')
  //       } else {
  //       	alert(xhr.status + ': ' + xhr.statusText);
  //       }
  //   };

  //   xmlhttp.open("POST", "../autoload/controllers/notification.php"+params, true);
  //   xmlhttp.send();
  // })

  console.log('hello')
</script>
</html>