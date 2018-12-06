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
				<form action="/add_article" method="POST" id="form-ui">
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
                    <div class="col-md-2">
                      <div class="section">
                        <input type="text" name="article_place" id="article_place" class="gui-input" placeholder="место">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="section">
                        <input type="text" name="articles_filter" id="articles_filter" class="gui-input" placeholder="фильтр">
                      </div>
                    </div>
	                </div>
	                <div class="row">
	                	<div class="col-md-4">
	                		<input type="submit" class="button btn-primary btn-upload" value="Сохранить">
	                	</div>
	                </div>
				</form>
			</div><!-- форма добавления статьи -->
	    </div>
    </section>
	</div>
</body>









<!-- Summernote Plugin -->
<script src="vendor/plugins/summernote/summernote.min.js"></script>
<!-- MarkDown JS -->
<script src="vendor/plugins/markdown/markdown.js"></script>
<script src="vendor/plugins/markdown/to-markdown.js"></script>
<script src="vendor/plugins/markdown/bootstrap-markdown.js"></script>
<!-- Ckeditor JS -->
<script src="vendor/plugins/ckeditor/ckeditor.js"></script>
<!-- X-Edit JS -->
<script src="vendor/plugins/moment/moment.min.js"></script>
<!-- X-Edit Dependencies -->
<script src="vendor/plugins/xeditable/js/bootstrap-editable.min.js"></script>
<script src="vendor/plugins/xeditable/inputs/address/address.js"></script>
<script src="vendor/plugins/xeditable/inputs/typeaheadjs/lib/typeahead.js"></script>
<script src="vendor/plugins/xeditable/inputs/typeaheadjs/typeaheadjs.js"></script>







<!-- main scripts for the page -->
<script src="assets/admin/js/utility.js"></script>
<!-- <script src="assets/admin/js/demo.js"></script> -->
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






<!-- datapicker -->





<script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core    
    Core.init();

    // Init Demo JS  
    Demo.init();


    // Init Summernote Plugin
    $('.summernote').summernote({
      height: 255, //set editable area's height
      focus: false, //set focus editable area after Initialize summernote
      oninit: function() {},
      onChange: function(contents, $editable) {},
    });

    // Init Inline Summernote Plugin
    $('.summernote-edit').summernote({
      airMode: true,
      focus: false //set focus editable area after Initialize summernote            
    });

    // Turn off automatic editor initilization.
    // Used to prevent conflictions with multiple text 
    // editors being displayed on the same page.
    CKEDITOR.disableAutoInline = true;

    // Init Ckeditor
    CKEDITOR.replace('ckeditor1', {
      height: 210,
      on: {
        instanceReady: function(evt) {
          $('.cke').addClass('admin-skin cke-hide-bottom');
        }
      },
    });

    // Init Inline Ckeditors
    CKEDITOR.inline('ckeditor-inline1');
    CKEDITOR.inline('ckeditor-inline2');

    // Init MarkDown Editor
    $("#markdown-editor").markdown({
      savable: false,
      onChange: function(e) {
        var content = e.parseContent(),
          content_length = (content.match(/\n/g) || []).length + content.length
        if (content == '') {
          $('#md-footer').hide()
        } else {
          $('#md-footer').show().html(content)
        }
      }
    });

    // Init X-editable Plugin
    function XEdit() {
      //enable / disable xedit
      $('#enable').click(function() {
        $(this).toggleClass('active');
        $('#user .editable').editable('toggleDisabled');
      });

      //editables 
      $('#username').editable({
        type: 'text',
        pk: 1,
        name: 'username',
        title: 'Enter username'
      });

      $('#firstname').editable({
        validate: function(value) {
          if ($.trim(value) == '') return 'This field is required';
        }
      });

      $('#sex').editable({
        prepend: "not selected",
        source: [{
          value: 1,
          text: 'Male'
        }, {
          value: 2,
          text: 'Female'
        }],
        display: function(value, sourceData) {
          var colors = {
              "": "gray",
              1: "green",
              2: "blue"
            },
            elem = $.grep(sourceData, function(o) {
              return o.value == value;
            });

          if (elem.length) {
            $(this).text(elem[0].text).css("color", colors[value]);
          } else {
            $(this).empty();
          }
        }
      });

      $('#status').editable();

      $('#group').editable({
        showbuttons: false
      });

      $('#vacation').editable({
        datepicker: {
          todayBtn: 'linked'
        }
      });

      $('#dob').editable();

      $('#event').editable({
        placement: 'right',
        combodate: {
          firstItem: 'name'
        }
      });

      $('#meeting_start').editable({
        format: 'yyyy-mm-dd hh:ii',
        viewformat: 'dd/mm/yyyy hh:ii',
        validate: function(v) {
          if (v && v.getDate() == 10) return 'Day cant be 10!';
        },
        datetimepicker: {
          todayBtn: 'linked',
          weekStart: 1
        }
      });

      $('#comments').editable({
        showbuttons: 'bottom'
      });

      $('#note').editable();
      $('#pencil').click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        $('#note').editable('toggle');
      });

      $('#state').editable({
        source: ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Dakota", "North Carolina", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"]
      });

      $('#state2').editable({
        value: 'California',
        typeahead: {
          name: 'state',
          local: ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Dakota", "North Carolina", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"]
        }
      });

      $('#fruits').editable({
        pk: 1,
        limit: 3,
        source: [{
          value: 1,
          text: 'banana'
        }, {
          value: 2,
          text: 'peach'
        }, {
          value: 3,
          text: 'apple'
        }, {
          value: 4,
          text: 'watermelon'
        }, {
          value: 5,
          text: 'orange'
        }]
      });

      $('#address').editable({
        url: '/post',
        value: {
          city: "Moscow",
          street: "Lenina",
          building: "12"
        },
        validate: function(value) {
          if (value.city == '') return 'city is required!';
        },
        display: function(value) {
          if (!value) {
            $(this).empty();
            return;
          }
          var html = '<b>' + $('<div>').text(value.city).html() + '</b>, ' + $('<div>').text(value.street).html() + ' st., bld. ' + $('<div>').text(value.building).html();
          $(this).html(html);
        }
      });

      $('#user .editable').on('hidden', function(e, reason) {
        if (reason === 'save' || reason === 'nochange') {
          var $next = $(this).closest('tr').next().find('.editable');
          if ($('#autoopen').is(':checked')) {
            setTimeout(function() {
              $next.editable('show');
            }, 300);
          } else {
            $next.focus();
          }
        }
      });

    };
    XEdit();

  });
  </script>
  <!-- END: PAGE SCRIPTS -->
