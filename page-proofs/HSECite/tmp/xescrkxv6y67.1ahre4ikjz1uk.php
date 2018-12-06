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
	    <div class="notifications__main">
			<!-- <?php echo $test; ?> -->
	

			<!-- форма добавления статьи -->
			<div class="admin-form theme-primary">
				<form action="/notifications" method="POST" id="form-ui">
					<!-- Basic Inputs -->
	                <div class="row">
	                  <div class="col-md-8">
	                    <div class="section">
	                      <label for="art_title" class="field">
	                        <input type="text" name="art_title" id="art_title" class="gui-input" placeholder="Введите заголовок">
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
	                </div>	              
	                <div class="row">
                	  <div class="col-md-8">
                	    <div class="section">
	                         <label class="field prepend-icon">
	                           <textarea class="gui-textarea" id="comment" name="art_text" placeholder="Введите текст статьи"></textarea>
	                           <label for="comment" class="field-icon"><i class="fa fa-comments"></i></label>
	                           <span class="input-footer"> 
	                           	  <strong>PS: </strong> Хочу заметить, что статья не будет добавлена. тк шаблон блокирует post запрос!!!
	                           	</span>
	                         </label>
                	    </div>
                	  </div>
	                </div>
	                <div class="row">
	                	<div class="col-md-4">
	                		<input type="submit" class="button btn-primary" value="Сохранить">
	                	</div>
	                </div>
				</form>
			</div><!-- форма добавления статьи -->


			<!-- Таблица с новостями -->
			<div class="panel mb30 mt30">
			  <div class="panel-menu admin-form theme-primary">
			    <div class="row">
			      <div class="col-md-4">
			        <label class="field select">
			          <select id="filter-purchases" name="filter-purchases">
			            <option value="0">Filter by Purchases</option>
			          </select>
			          <i class="arrow double"></i>
			        </label>
			      </div>
			      <div class="col-md-4">
			        <label class="field select">
			          <select id="filter-group" name="filter-group">
			            <option value="0">Filter by Group</option>
			          </select>
			          <i class="arrow double"></i>
			        </label>
			      </div>
			      <div class="col-md-4">
			        <label class="field select">
			          <select id="filter-status" name="filter-status">
			            <option value="0">Filter by Status</option>
			          </select>
			          <i class="arrow double"></i>
			        </label>
			      </div>
			    </div>
			  </div>
			  <div class="panel-body pn">
			    <div class="table-responsive">
			      <table class="table admin-form theme-warning tc-checkbox-1 fs13">
			        <thead>
			          <tr class="bg-light">
			            <th class="text-center">Select</th>
			            <th class="">Avatar</th>
			            <th class="">Name</th>
			            <th class="">Email</th>
			            <th class="">Registered</th>
			            <th class="">Purchases</th>
			            <th class="">Total Spent</th>
			            <th class="text-right">Status</th>
			          </tr>
			        </thead>
			        <tbody>
			          <tr>
			            <td class="text-center">
			              <label class="option block mn">
			                <input type="checkbox" name="mobileos" value="FR">
			                <span class="checkbox mn"></span>
			              </label>
			            </td>
			            <td class="w50">
			              <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/1.jpg">
			            </td>
			            <td class="">Dave Robert</td>
			            <td class="">dave@company.com</td>
			            <td class="">12/03/2014</td>
			            <td class="">222</td>
			            <td class="">$3,600</td>
			            <td class="text-right">
			              <div class="btn-group text-right">
			                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
			                  <span class="caret ml5"></span>
			                </button>
			                <ul class="dropdown-menu" role="menu">
			                  <li>
			                    <a href="#">Edit</a>
			                  </li>
			                  <li>
			                    <a href="#">Contact</a>
			                  </li>
			                  <li class="divider"></li>
			                  <li class="active">
			                    <a href="#">Active</a>
			                  </li>
			                  <li>
			                    <a href="#">Suspend</a>
			                  </li>
			                  <li>
			                    <a href="#">Remove</a>
			                  </li>
			                </ul>
			              </div>
			            </td>
			          </tr>
			          
			          <tr>
			            <td class="text-center">
			              <label class="option block mn">
			                <input type="checkbox" name="mobileos" value="FR">
			                <span class="checkbox mn"></span>
			              </label>
			            </td>
			            <td class="w50">
			              <img class="img-responsive mw30 ib mr10" title="user" src="assets/img/avatars/1.jpg">
			            </td>
			            <td class="">Dave Robert</td>
			            <td class="">dave@company.com</td>
			            <td class="">12/03/2014</td>
			            <td class="">222</td>
			            <td class="">$3,600</td>
			            <td class="text-right">
			              <div class="btn-group text-right">
			                <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Suspended
			                  <span class="caret ml5"></span>
			                </button>
			                <ul class="dropdown-menu" role="menu">
			                  <li>
			                    <a href="#">Edit</a>
			                  </li>
			                  <li>
			                    <a href="#">Contact</a>
			                  </li>
			                  <li class="divider"></li>
			                  <li class="active">
			                    <a href="#">Active</a>
			                  </li>
			                  <li>
			                    <a href="#">Suspend</a>
			                  </li>
			                  <li>
			                    <a href="#">Remove</a>
			                  </li>
			                </ul>
			              </div>
			            </td>
			          </tr>
			        </tbody>
			      </table>
			    </div>
			  </div>
			</div> <!-- //Таблица с новостями -->


	    </div>
    </section>
	</div>
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
</script>
</html>