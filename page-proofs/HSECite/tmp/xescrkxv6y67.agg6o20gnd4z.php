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
	<link rel="stylesheet" href="../assets/admin/css/admin-forms.min.css">
</head>
<body>
	<?php echo $this->render('template/menu.html',$this->mime,get_defined_vars(),0); ?>	
    <section id="content_wrapper">
	    <div class="notifications__main">
  			<!-- recent orders table -->
  			<div class="panel">
  			  <div class="panel-body">
  			    <?php foreach (($articles?:array()) as $article): ?>
              <!-- <div class="center"><?php echo $article['article_id']; ?></div> -->
              <!-- <div class="w50"><?php echo $article['article_title']; ?></div> -->
              <!-- <div class="text-center"><?php echo $article['article_date']; ?></div> -->
              <!-- <div><?php echo $article['article_text']; ?></div> -->
                              
              <!-- форма добавления статьи -->
              <div class="admin-form theme-primary">
                <form action="/update_article" method="POST" id="form-ui">
                  <!-- Basic Inputs -->
                        
                  <div class="row">
                    <div class="col-md-8">
                      <div class="section">
                           <label class="field prepend-icon">
                            <input type="hidden" name="id" id="art_title" class="gui-input" value="<?php echo $article['article_id']; ?>">
                             <textarea class="gui-textarea" id="comment" name="art_text"><?php echo $article['article_text']; ?></textarea>
                             <label for="comment" class="field-icon"><i class="fa fa-comments"></i></label>
                             <span class="input-footer"> 
                                <strong>PS: </strong> Айда все менять!
                              </span>
                           </label>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="section">
                        <label class="field prepend-icon append-button file">
                          <span class="button btn-primary">Выберите файл</span>
                          <input type="file" class="gui-file" name="file1" id="file1" onChange="document.getElementById('uploader1').value = this.value;">
                          <input type="text" class="gui-input" id="uploader1" name="art_file" placeholder="Загрузить медиа">
                          <label class="field-icon">
                            <i class="fa fa-upload"></i>
                          </label>
                        </label>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="section">
                        <input type="text" name="article_title" id="article_title" class="gui-input" value="<?php echo $article['article_title']; ?>">
                      </div>
                    </div>
  
                    <div class="col-md-2">
                      <div class="section">
                        <input type="text" name="article_place" id="article_place" class="gui-input" value="<?php echo $article['article_place']; ?>">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="section">
                        <input type="text" name="articles_filter" id="articles_filter" class="gui-input" value="<?php echo $article['articles_filter']; ?>">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="section">
                        <input type="text" name="articles_date" id="articles_date" class="gui-input" value="<?php echo $article['article_date']; ?>">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="section">
                        <input type="text" name="articles_tags" id="articles_tags" class="gui-input" value="<?php echo $article['article_tags']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer text-right">
                      <input type="submit" class="btn btn-xs btn-success  button btn-primary" value="Сохранить"></input>
                      <button type="button" class="btn btn-xs btn-danger button btn-primary">Отмена</button>
                  </div>
                </form>
              </div><!-- форма добавления статьи -->
            <?php endforeach; ?>
  			  </div>
  			</div>
		  </div>





    </section>
</body>




<!-- main scripts for the page -->
<!-- <script src="assets/admin/js/utility.js"></script> -->
<!-- <script src="assets/admin/js/demo.js"></script> -->
<!-- <script src="assets/admin/js/main.js"></script> -->
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
</script>
</html>