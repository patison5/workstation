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
	<link rel="stylesheet" href="../ui/backend/assets/admin/css/admin-forms.min.css">
  <!-- другой шаблоан -->
  <link href="../ui/backend/chosen/chosen.css" rel="stylesheet">
</head>
<body>
	<?php echo $this->render('template/menu.html',$this->mime,get_defined_vars(),0); ?>	
    <section id="content_wrapper">
	    <div class="notifications__main">
  			<!-- recent orders table -->
  			<div class="panel">
  			  <div class="panel-body">
                                          
              <!-- форма редактирования Факультета -->
              <div class="admin-form theme-primary">
                <form action="/add_faculties" method="POST" id="form-ui">
                  <!-- Basic Inputs -->
                  <!-- <div class="row">
                    <div class="col-md-8">
                      <div class="section">
                        <label for="title" class="field">
                          <input type="text" name="title" id="title" class="gui-input" value="название">
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="section">
                        <label for="type" class="field">
                          <input type="text" name="type" id="type" class="gui-input" value="тип">
                        </label>
                      </div>
                    </div>
                  </div>                
                  <div class="row">
                    <div class="col-md-4">
                      <div class="section">
                        <label for="price" class="field">
                          <input type="text" name="price" id="price" class="gui-input" value="цена">
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="section">
                        <label for="qouta" class="field">
                          <input type="text" name="qouta" id="qouta" class="gui-input" value="квота">
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="section">
                        <label for="program_link" class="field">
                          <input type="text" name="program_link" id="program_link" class="gui-input" value="ссылка на программу">
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="section">
                        <label for="QB_link" class="field">
                          <input type="text" name="QB_link" id="QB_link" class="gui-input" value="ссылка на qb">
                        </label>
                      </div>
                    </div>

                  </div>
                  <div class="panel-footer text-right">
                      <input type="submit" class="btn btn-xs btn-success  button btn-primary" value="Сохранить">
                      <button type="button" class="btn btn-xs btn-danger button btn-primary">Отмена</button>
                  </div> -->
                </form>

                
                <div class="row">
                  <!-- Form Wizard -->
                  <div class="admin-form">

                    <form method="post" action="http://admindesigns.com/" id="form-wizard">
                      <div class="wizard steps-bg steps-left">

                        <!-- Wizard step 1 -->
                        <h4 class="wizard-section-title">
                          <i class="fa fa-user pr5"></i> Основная инфа</h4>
                        <section class="wizard-section">

                          <div class="section">
                            <label class="field select">
                            <select id="country" name="country">
                              <!-- <option value="">Выбор направления факультета</option> -->
                              
                              <?php foreach (($facultyInfo?:array()) as $facultyInfo): ?>
                                <option value="<?php echo $facultyInfo['dir_id']; ?>"><?php echo $facultyInfo['dir_name']; ?></option>
                              <?php endforeach; ?>                              
                            </select>
                            <i class="arrow"></i>
                          </label>
                            <!-- end .smart-widget section -->
                          </div>
                          <!-- end section -->

                          <div class="section">
                            <label for="fac_title" class="field-label">Название факультета</label>
                            <label for="fac_title" class="field prepend-icon">
                              <input type="text" name="fac_title" id="fac_title" class="gui-input" placeholder="Название факультета">
                              <label for="fac_title" class="field-icon">
                                  <i class="fa fa-user"></i>
                                </label>
                            </label>
                          </div>

                          <div class="section">
                            <label for="fac_desc" class="field-label">Описание факультета</label>
                            <label for="fac_desc" class="field prepend-icon">
                              <input type="text" name="fac_desc" id="fac_desc" class="gui-input" placeholder="описание факультета">
                              <label for="fac_desc" class="field-icon">
                                  <i class="fa fa-user"></i>
                                </label>
                            </label>
                          </div>
                          <!-- end section -->

                        </section>

                        <!-- Wizard step 2 -->
                        <h4 class="wizard-section-title">
                          <i class="fa fa-dollar pr5"></i> Паспорт программы</h4>
                        <section class="wizard-section">

                          <div class="section">
                            <label for="budget" class="field prepend-icon">
                              <input type="text" name="budget" id="budget" class="gui-input" placeholder="Кол-во бюджетных мест">
                              <label for="budget" class="field-icon">
                                <i class="fa fa-user"></i>
                              </label>
                            </label>
                          </div>
                          <!-- end section -->

                          <div class="section">
                            <label for="paytype" class="field prepend-icon">
                              <input type="text" name="paytype" id="paytype" class="gui-input" placeholder="Кол-во платных мест">
                              <label for="paytype" class="field-icon">
                                <i class="fa fa-user"></i>
                              </label>
                            </label>
                          </div>

                           <div class="section">
                            <label for="pay" class="field prepend-icon">
                              <input type="text" name="pay" id="pay" class="gui-input" placeholder="Стоимость">
                              <label for="pay" class="field-icon">
                                <i class="fa fa-user"></i>
                              </label>
                            </label>
                          </div>

                           <div class="section">
                            <label for="comment1" class="field prepend-icon">
                              <input type="text" name="comment1" id="comment1" class="gui-input" placeholder="Комментарий 1">
                              <label for="comment1" class="field-icon">
                                <i class="fa fa-user"></i>
                              </label>
                            </label>
                          </div>

                           <div class="section">
                            <label for="comment2" class="field prepend-icon">
                              <input type="text" name="comment2" id="comment2" class="gui-input" placeholder="комментарий 2">
                              <label for="comment2" class="field-icon">
                                <i class="fa fa-user"></i>
                              </label>
                            </label>
                          </div>


                          <!-- <div class="section"> -->
                            <!-- multi -->
                            <div class="form-group">
                              <label class="font-noraml">Multi select</label>
                              <div class="input-group">
                                <select data-placeholder="Choose a Country..." class="chosen-select" multiple style="width:350px;" tabindex="4">
                                  <option value="">Select</option>
                                  <option value="United States">United States</option>
                                  <option value="United Kingdom">United Kingdom</option>
                                </select>
                              </div>
                            </div>
                            <!-- multi -->
                          <!-- </div> -->

                          
                          </div>
                          <!-- end section -->

                        </section>

                        <!-- multi -->
                        <div class="form-group">
                          <label class="font-noraml">Multi select</label>
                          <div class="input-group">
                            <select data-placeholder="Choose a Country..." class="chosen-select" multiple style="width:350px;" tabindex="4">
                              <option value="">Select</option>
                              <option value="United States">United States</option>
                              <option value="United Kingdom">United Kingdom</option>
                            </select>
                          </div>
                        </div>
                        <!-- multi -->

                        <!-- Wizard step 3 -->
                        <h4 class="wizard-section-title">
                          <i class="fa fa-shopping-cart pr5"></i> Будущая профессия</h4>
                        <section class="wizard-section">

                          <div class="section">
                            <label for="program_link" class="field prepend-icon">
                              <input type="program_link" name="program_link" id="program_link" class="gui-input" placeholder="Ссылка на программу">
                              <label for="program_link" class="field-icon">
                                <i class="fa fa-envelope"></i>
                              </label>
                            </label>
                          </div>
                          <!-- end section -->

                          <div class="section">
                            <label for="QB_link" class="field prepend-icon">
                              <input type="tel" name="QB_link" id="QB_link" class="gui-input" placeholder="Q&A ссылка">
                              <label for="QB_link" class="field-icon">
                                <i class="fa fa-phone-square"></i>
                              </label>
                            </label>
                          </div>
                          <!-- end section -->

                        </section>
                      </div>
                      <!-- End: Wizard -->

                    </form>
                    <!-- End Account2 Form -->

                  </div>
                  <!-- end: .admin-form -->
                </div>
              </div><!-- форма добавления статьи -->
  			  </div>
  			</div>
		  </div>


<!-- <form action="/add_faculties" method="post">
                  <input type="text" name="title" id="title" class="gui-input" value="название">
                  <input type="text" name="type" id="type" class="gui-input" value="тип">
                  <input type="text" name="price" id="price" class="gui-input" value="цена">
                  <input type="text" name="qouta" id="qouta" class="gui-input" value="квота">
                  <input type="text" name="program_link" id="program_link" class="gui-input" value="ссылка на программу">
                  <input type="text" name="QB_link" id="QB_link" class="gui-input" value="ссылка на qb">
                  <input type="submit" value="отправить">
                </form>
 -->


    </section>
</body>

<style>
  /*page demo styles*/
  .wizard .steps .fa,
  .wizard .steps .glyphicon,
  .wizard .steps .glyphicon {
    display: none;
  }
  </style>

<script src="../ui/backend/vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="../ui/backend/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- Page Plugins -->
  <script src="../ui/backend/assets/admin-tools/admin-forms/js/jquery.validate.min.js"></script>
  <script src="../ui/backend/assets/admin-tools/admin-forms/js/jquery.steps.min.js"></script>
    <!-- Theme Javascript -->
  <script src="../ui/backend/assets/js/utility/utility.js"></script>
  <script src="../ui/backend/assets/js/demo/demo.js"></script>
  <script src="../ui/backend/assets/js/main.js"></script>

  <!-- другой шаблон -->
  <!-- Chosen -->
    <script src="../ui/backend/chosen/chosen.jquery.js"></script>

<script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core    
    Core.init();

    // Init Demo JS     
    Demo.init();

    // Form Wizard 
    var form = $("#form-wizard");
    form.validate({
      errorPlacement: function errorPlacement(error, element) {
        element.before(error);
      },
      rules: {
        confirm: {
          equalTo: "#password"
        }
      }
    });
    form.children(".wizard").steps({
      headerTag: ".wizard-section-title",
      bodyTag: ".wizard-section",
      onStepChanging: function(event, currentIndex, newIndex) {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
      },
      onFinishing: function(event, currentIndex) {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
      },
      onFinished: function(event, currentIndex) {
        alert("Submitted!");
      }
    });

    // Demo Wizard Functionality
    var formWizard = $('.wizard');
    var formSteps = formWizard.find('.steps');

    $('.wizard-options .holder-style').on('click', function(e) {
      e.preventDefault();

      var stepStyle = $(this).data('steps-style');

      var stepRight = $('.holder-style[data-steps-style="steps-right"]');
      var stepLeft = $('.holder-style[data-steps-style="steps-left"]');
      var stepJustified = $('.holder-style[data-steps-style="steps-justified"]');

      if (stepStyle === "steps-left") {
        stepRight.removeClass('holder-active');
        stepJustified.removeClass('holder-active');
        formWizard.removeClass('steps-right steps-justified');
      }
      if (stepStyle === "steps-right") {
        stepLeft.removeClass('holder-active');
        stepJustified.removeClass('holder-active');
        formWizard.removeClass('steps-left steps-justified');
      }
      if (stepStyle === "steps-justified") {
        stepLeft.removeClass('holder-active');
        stepRight.removeClass('holder-active');
        formWizard.removeClass('steps-left steps-right');
      }

      // Assign new style 
      if ($(this).hasClass('holder-active')) {
        formWizard.removeClass(stepStyle);
      } else {
        formWizard.addClass(stepStyle);
      }

      // Assign new active holder
      $(this).toggleClass('holder-active');
    });


  });
  </script>
  <!-- END: PAGE SCRIPTS -->



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




<script>
        $(document).ready(function(){

            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var fileReader = new FileReader(),
                            files = this.files,
                            file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $('.demo1').colorpicker();

            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                        divStyle.backgroundColor = ev.color.toHex();
                    });

            $('.clockpicker').clockpicker();

            $('input[name="daterange"]').daterangepicker();

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });

            $(".select2_demo_1").select2();
            $(".select2_demo_2").select2();
            $(".select2_demo_3").select2({
                placeholder: "Select a state",
                allowClear: true
            });


        });
        var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
                }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }

        $("#ionrange_1").ionRangeSlider({
            min: 0,
            max: 5000,
            type: 'double',
            prefix: "$",
            maxPostfix: "+",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_2").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " carats",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_3").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            postfix: "°",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_4").ionRangeSlider({
            values: [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "December"
            ],
            type: 'single',
            hasGrid: true
        });

        $("#ionrange_5").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " km",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });

        $(".dial").knob();

        $("#basic_slider").noUiSlider({
            start: 40,
            behaviour: 'tap',
            connect: 'upper',
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#range_slider").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#drag-fixed").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag-fixed',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });


    </script>
</html>