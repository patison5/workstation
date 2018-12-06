<?php echo $this->render('template/head.html',$this->mime,get_defined_vars(),0); ?>	
<script src="https://use.fontawesome.com/19b78bdbb2.js"></script>


<!-- new -->
<!-- Font CSS (Via CDN) -->
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
<!-- Datatables CSS -->
<link rel="stylesheet" type="text/css" href="assets/admin/css/datatables/dataTables.bootstrap.css">
<!-- Datatables Editor Addon CSS -->
<link rel="stylesheet" type="text/css" href="assets/admin/css/datatables/dataTables.editor.css">
<!-- Datatables ColReorder Addon CSS -->
<link rel="stylesheet" type="text/css" href="assets/admin/css/datatables/dataTables.colReorder.min.css">
<!-- Theme CSS -->
<link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">
<!-- Favicon -->
<link rel="shortcut icon" href="assets/img/favicon.ico">

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
	              <div class="panel panel-visible m10" id="spy2">
	                <div class="panel-heading">
	                  <div class="panel-title hidden-xs">
	                    <span class="glyphicon glyphicon-tasks"></span>Организации</div>
	                </div>
	                <div class="panel-body pn">
		                <form action="/show_articles" method="POST">
		                  <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
		                    <thead>
		                      <tr>
		                        <th>Выбрать</th>
		                        <th>Название</th>
		                        <th class="text-center">Ссылка</th>
		                        <th class="text-center">Описание</th>
		                        <th>Название группы</th>
                            <th></th>
		                      </tr>
		                    </thead>
                        <a href="add_organization">добавить организацию</a>
		                    <tbody>
			                    <?php foreach (($organizations?:array()) as $organization): ?>
			                    	<tr>
				                        <td class="w50 text-center">
										  <label class="option block mn">
										    <input type="checkbox" name="checked" value="<?php echo $organization['id']; ?>">
										    <span class="checkbox mn"></span>
										  </label>
										</td>
				                        <td><a href="/editing_organization/<?php echo $organization['id']; ?>"><?php echo $organization['org_name']; ?></a></td>
				                        <td class="text-center"><a href="<?php echo $organization['link']; ?>"><?php echo $organization['link']; ?></a></td>
										<td class="text-left"><?php echo $organization['description']; ?></td>
										<td class="w150 text-center"><?php echo $organization['group_name']; ?></td>
                    <td class="w150 text-center"><a href="/delete_organization/<?php echo $organization['id']; ?>" class="btn btn-xs btn-danger button btn-primary art_btn">Удалить</a></td>
									</tr>
								<?php endforeach; ?>
		                    </tbody>
		                  </table>
						</form>
	                </div>
	              </div>
	            </div>
	         </div>

	</section>
</body>




<!-- jQuery -->
<!-- <script src="assets/jquery/jquery-1.11.1.min.js"></script>
<script src="assets/jquery/jquery_ui/jquery-ui.min.js"></script> -->

<!-- Datatables -->
<script src="assets/admin/js/plugins/datatables/media/js/jquery.dataTables.js"></script>
<!-- Datatables Tabletools addon -->
<script src="assets/admin/js/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<!-- Datatables ColReorder addon -->
<script src="assets/admin/js/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<!-- Datatables Bootstrap Modifications  -->
<script src="assets/admin/js/plugins/datatables/media/js/dataTables.bootstrap.js"></script>


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




 <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core    
    Core.init();

    // Init Demo JS  
    Demo.init();

    // Init DataTables
    $('#datatable').dataTable({
      "sDom": 't<"dt-panelfooter clearfix"ip>',
      "oTableTools": {
        "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
      }
    });

    $('#datatable2').dataTable({
      "aoColumnDefs": [{
        'bSortable': false,
        'aTargets': [-1]
      }],
      "oLanguage": {
        "oPaginate": {
          "sPrevious": "",
          "sNext": ""
        }
      },
      "iDisplayLength": 5,
      "aLengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ],
      "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
      "oTableTools": {
        "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
      }
    });

    $('#datatable3').dataTable({
      "aoColumnDefs": [{
        'bSortable': false,
        'aTargets': [-1]
      }],
      "oLanguage": {
        "oPaginate": {
          "sPrevious": "",
          "sNext": ""
        }
      },
      "iDisplayLength": 5,
      "aLengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ],
      "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
      "oTableTools": {
        "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
      }
    });

    $('#datatable4').dataTable({
      "aoColumnDefs": [{
        'bSortable': false,
        'aTargets': [-1]
      }],
      "oLanguage": {
        "oPaginate": {
          "sPrevious": "",
          "sNext": ""
        }
      },
      "iDisplayLength": 5,
      "aLengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ],
      "sDom": 'T<"panel-menu dt-panelmenu"lfr><"clearfix">tip',

      "oTableTools": {
        "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
      }
    });

    // Multi-Column Filtering
    $('#datatable5 thead th').each(function() {
      var title = $('#datatable5 tfoot th').eq($(this).index()).text();
      $(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '" />');
    });

    // DataTable
    var table5 = $('#datatable5').DataTable({
      "sDom": 't<"dt-panelfooter clearfix"ip>',
      "ordering": false
    });

    // Apply the search
    table5.columns().eq(0).each(function(colIdx) {
      $('input', table5.column(colIdx).header()).on('keyup change', function() {
        table5
          .column(colIdx)
          .search(this.value)
          .draw();
      });
    });

    // ABC FILTERING
    var table6 = $('#datatable6').DataTable({
      "sDom": 't<"dt-panelfooter clearfix"ip>',
      "ordering": false
    });

    var alphabet = $('<div class="dt-abc-filter"/>').append('<span class="abc-label">Search: </span> ');
    var columnData = table6.column(0).data();
    var bins = bin(columnData);

    $('<span class="active"/>')
      .data('letter', '')
      .data('match-count', columnData.length)
      .html('None')
      .appendTo(alphabet);

    for (var i = 0; i < 26; i++) {
      var letter = String.fromCharCode(65 + i);

      $('<span/>')
        .data('letter', letter)
        .data('match-count', bins[letter] || 0)
        .addClass(!bins[letter] ? 'empty' : '')
        .html(letter)
        .appendTo(alphabet);
    }

    $('#datatable6').parents('.panel').find('.panel-menu').addClass('dark').html(alphabet);

    alphabet.on('click', 'span', function() {
      alphabet.find('.active').removeClass('active');
      $(this).addClass('active');

      _alphabetSearch = $(this).data('letter');
      table6.draw();
    });

    var info = $('<div class="alphabetInfo"></div>')
      .appendTo(alphabet);

    var _alphabetSearch = '';

    $.fn.dataTable.ext.search.push(function(settings, searchData) {
      if (!_alphabetSearch) {
        return true;
      }
      if (searchData[0].charAt(0) === _alphabetSearch) {
        return true;
      }
      return false;
    });

    function bin(data) {
      var letter, bins = {};
      for (var i = 0, ien = data.length; i < ien; i++) {
        letter = data[i].charAt(0).toUpperCase();

        if (bins[letter]) {
          bins[letter]++;
        } else {
          bins[letter] = 1;
        }
      }
      return bins;
    }

    // ROW GROUPING
    var table7 = $('#datatable7').DataTable({
      "columnDefs": [{
        "visible": false,
        "targets": 2
      }],
      "order": [
        [2, 'asc']
      ],
      "sDom": 't<"dt-panelfooter clearfix"ip>',
      "displayLength": 25,
      "drawCallback": function(settings) {
        var api = this.api();
        var rows = api.rows({
          page: 'current'
        }).nodes();
        var last = null;

        api.column(2, {
          page: 'current'
        }).data().each(function(group, i) {
          if (last !== group) {
            $(rows).eq(i).before(
              '<tr class="row-label ' + group.replace(/ /g, '').toLowerCase() + '"><td colspan="5">' + group + '</td></tr>'
            );
            last = group;
          }
        });
      }
    });

    // Order by the grouping
    $('#datatable7 tbody').on('click', 'tr.row-label', function() {
      var currentOrder = table7.order()[0];
      if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
        table7.order([2, 'desc']).draw();
      } else {
        table7.order([2, 'asc']).draw();
      }
    });

    $('#datatable8').DataTable({
      "sDom": 'Rt<"dt-panelfooter clearfix"ip>',
    });


    // COLLAPSIBLE ROWS
    function format ( d ) {
      // `d` is the original data object for the row
      return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
          '<td class="fw600 pr10">Full name:</td>'+
          '<td>'+d.name+'</td>'+
        '</tr>'+
        '<tr>'+
          '<td class="fw600 pr10">Extension:</td>'+
          '<td>'+d.extn+'</td>'+
        '</tr>'+
        '<tr>'+
          '<td class="fw600 pr10">Extra info:</td>'+
          '<td>And any further details here (images etc)...</td>'+
        '</tr>'+
      '</table>';
    }
     
    var table = $('#datatable9').DataTable({
      "sDom": 'Rt<"dt-panelfooter clearfix"ip>',
      "ajax": "vendor/plugins/datatables/examples/data_sources/objects.txt",
      "columns": [
        {
          "className":      'details-control',
          "orderable":      false,
          "data":           null,
          "defaultContent": ''
        },
        { "data": "name" },
        { "data": "position" },
        { "data": "office" },
        { "data": "salary" }
      ],
      "order": [[1, 'asc']]
    });
     
    // Add event listener for opening and closing details
    $('#datatable9 tbody').on('click', 'td.details-control', function () {
      var tr = $(this).closest('tr');
      var row = table.row( tr );

      if ( row.child.isShown() ) {
        // This row is already open - close it
        row.child.hide();
        tr.removeClass('shown');
      }
      else {
        // Open this row
        row.child( format(row.data()) ).show();
        tr.addClass('shown');
      }
    });


    // MISC DATATABLE HELPER FUNCTIONS

    // Add Placeholder text to datatables filter bar
    $('.dataTables_filter input').attr("placeholder", "Enter Terms...");

  });
  </script>
  <!-- END: PAGE SCRIPTS -->



  <script>
  	String.prototype.limit = function( limit, userParams) {
	    var text = this
	      , options = {
	            ending: '...'  // что дописать после обрыва
	          , trim: true     // обрезать пробелы в начале/конце?
	          , words: true    // уважать ли целостность слов? 
	        }
	      , prop
	      , lastSpace
	      , processed = false
	    ;

	    //  проверить limit, без него целого положительного никак
	    if( limit !== parseInt(limit)  ||  limit <= 0) return this;

	    // применить userParams
	    if( typeof userParams == 'object') {
	        for (prop in userParams) {
	            if (userParams.hasOwnProperty.call(userParams, prop)) {
	                options[prop] = userParams[prop];
	            }
	        }
	    }

	    // убрать пробелы в начале /конце
	    if( options.trim) text = text.trim();

	    if( text.length <= limit) return text;    // по длине вписываемся и так

	    text = text.slice( 0, limit); // тупо отрезать по лимиту
	    lastSpace = text.lastIndexOf(" ");
	    if( options.words  &&  lastSpace > 0) {  // урезать ещё до границы целого слова
	        text = text.substr(0, lastSpace);
	    }
	    return text + options.ending;
	}
  </script>

</html>