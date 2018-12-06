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
  			    <?php foreach (($faculties?:array()) as $faculties): ?>
                                          
              <!-- форма редактирования Факультета -->
              <div class="admin-form theme-primary">
                <form action="/editing_faculties" method="POST" id="form-ui">
                  <!-- Basic Inputs -->
                  <div class="row">
                    <div class="col-md-8">
                      <div class="section">
                        <label for="title" class="field">
                          <input type="text" name="title" id="title" class="gui-input" value="<?php echo $faculties['faculty_name']; ?>">
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="section">
                        <label for="type" class="field">
                          <input type="text" name="type" id="type" class="gui-input" value="<?php echo $faculties['fac_study_type']; ?>">
                        </label>
                      </div>
                    </div>
                  </div>                
                  <div class="row">
                    <div class="col-md-4">
                      <div class="section">
                        <label for="price" class="field">
                          <input type="text" name="price" id="price" class="gui-input" value="<?php echo $faculties['fac_price']; ?>">
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="section">
                        <label for="qouta" class="field">
                          <input type="text" name="qouta" id="qouta" class="gui-input" value="<?php echo $faculties['fac_quota']; ?>">
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="section">
                        <label for="program_link" class="field">
                          <input type="text" name="program_link" id="program_link" class="gui-input" value="<?php echo $faculties['fac_program_link']; ?>">
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="section">
                        <label for="QB_link" class="field">
                          <input type="text" name="QB_link" id="QB_link" class="gui-input" value="<?php echo $faculties['fac_QB_link']; ?>">
                        </label>
                      </div>
                    </div>

                     <div class="col-md-10">
                      <div class="section existedObjects">
                      <h4>Выбранные предметы</h4>
                        <?php foreach (($faculties['faculty_subject']?:array()) as $subject): ?>
                          <div class="col-md-12">
                            <div class="section">
                              <label for="sub_<?php echo $subject['subj_id']; ?>" name="subj" class="col-md-3"><?php echo $subject['subj_name']; ?></label>
                              <input type="text" value="<?php echo $subject['subj_min_mark']; ?>" name="subj_mark"" id="sub_<?php echo $subject['subj_id']; ?>" class="col-md-3 mr15">
                              <span class="btn btn-xs btn-danger btn-primary art_btn del" onclick="delObj(this, '<?php echo $subject['subj_name']; ?>', '<?php echo $subject['subj_id']; ?>')">удалить</span><br>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="section allObjects">
                        <h4>Все предметы</h4>
                        <?php foreach (($faculties['all_subjects']?:array()) as $a_subj): ?>
                          <div class="col-md-4">
                            <div class="section">
                              <input type="checkbox" name="<?php echo $a_subj['sub_name']; ?>" id="sub_<?php echo $a_subj['sub_id']; ?>" value="<?php echo $a_subj['sub_id']; ?>" style="display: none;"><span class="col-md-5"><?php echo $a_subj['sub_name']; ?></span>
                              <span class="btn btn-xs btn-success btn-primary art_btn del" onclick="addObj(this,'<?php echo $a_subj['sub_name']; ?>', '<?php echo $a_subj['sub_id']; ?>')">добавить</span>
                              <?php echo $a_subj['sub_id'] % 3 == 0 ?'<br>':''; ?>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </div>

                    <div class="col-md-10">
                      <div class="section">
                        <h4>Выбранные профессии</h4>
                        <?php foreach (($faculties['fac_profession']?:array()) as $prof): ?>
                          <div class="col-md-12">
                            <div class="section">
                              <input type="checkbox" name="<?php echo $prof['prof_name']; ?>" id="sub_<?php echo $prof['_id_prof_']; ?>" value="<?php echo $prof['_id_prof_']; ?>" style="display: none;"><span class="col-md-2"><?php echo $prof['prof_name']; ?></span>
                              <span class="btn btn-xs btn-danger btn-primary art_btn del">удалить</span><br>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="section">
                        <h4>Все профессии</h4>
                        <?php foreach (($faculties['all_professions']?:array()) as $a_prof): ?>
                          <div class="col-md-12">
                            <div class="section">
                              <input type="checkbox" name="<?php echo $a_prof['prof_name']; ?>" id="sub_<?php echo $a_prof['_id_prof_']; ?>" value="<?php echo $a_prof['_id_prof_']; ?>" style="display: none;"><span class="col-md-2"><?php echo $a_prof['prof_name']; ?></span>
                              <span class="btn btn-xs btn-success btn-primary art_btn del">добавить</span>
                              <?php echo $a_subj['sub_id'] % 3 == 0 ?'<br>':''; ?>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer text-right">
                      <input type="hidden" name="id" class="gui-input" value="<?php echo $faculties['fac_id']; ?>">

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


<script>

  var existedObjects = document.getElementsByClassName('existedObjects')[0];
  var allObjects = document.getElementsByClassName('allObjects')[0];
  

  function delObj (ob, name, id) {
    console.log(ob.parentNode.parentNode.removeChild(ob.parentNode));

    var title = document.createElement('span'),
        hiddenInput = document.createElement('input'),
        add = document.createElement('span');

    var wrap = document.createElement('div'),      
        section = document.createElement('div');

    
    title.className = 'col-md-5';
    title.innerHTML = name;

    hiddenInput.setAttribute('type', 'checkbox');
    hiddenInput.setAttribute('name', id + '');
    hiddenInput.id = id;

    hiddenInput.setAttribute('style', 'display:none;');


    add.className = 'btn btn-xs btn-success btn-primary art_btn del';
    add.innerHTML = 'добавить';
    add.setAttribute('onclick', name + '', id + '');

    section.className = 'section';
    wrap.className = 'col-md-4';


    allObjects.appendChild(wrap);
    wrap.appendChild(section);

    section.appendChild(hiddenInput)
    section.appendChild(title)
    section.appendChild(add)
  }

  function addObj (ob, name, id) {
    var title = document.createElement('label'),
        input = document.createElement('input'),
        del = document.createElement('span');

    var wrap = document.createElement('div'),      
        section = document.createElement('div');

    wrap.className = 'col-md-12';
    section.className = 'section'

    title.className = 'col-md-3';
    title.innerHTML = name;
    title.setAttribute('name', id)
    title.setAttribute('for', id)

    input.setAttribute('type', 'text');
    input.setAttribute('name', id);
    input.className = 'col-md-3 mr15'
    input.id = id;

    del.className = 'btn btn-xs btn-danger btn-primary art_btn del';
    del.innerHTML = 'удалить';
    // del.setAttribute('onclick', "addOob(this, '"+ name + "','" + id + "')");
    // del.onclick = function () {addOob(this, name , id)}
    
    del.addEventListener('click', function () {
      addOob(this, name , id);
      console.log(this, name, id)
      console.log('bum')
    })

    existedObjects.appendChild(wrap);
    wrap.appendChild(section);

    section.appendChild(title)
    section.appendChild(input)
    section.appendChild(del)

    ob.parentNode.parentNode.removeChild(ob.parentNode)
  }

</script>




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