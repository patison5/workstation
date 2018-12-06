<head>
	<?php echo $this->render('template/head.html',$this->mime,get_defined_vars(),0); ?>	
	<script src="https://use.fontawesome.com/19b78bdbb2.js"></script>
	<link rel="stylesheet" href="assets/admin/css/admin-forms.min.css">
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
	<link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">
	<link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">
	<link rel="shortcut icon" href="assets/img/favicon.ico">
	<meta charset="utf-8">
	<title>Направления</title>
</head>
<body>
	<?php echo $this->render('template/menu.html',$this->mime,get_defined_vars(),0); ?>
	<section id="content_wrapper">
		<div style="margin-top: 2em; padding-left: 1em; padding-right: 1em;" >
			<div class="panel-body pn" style="background-color: white;">
				<table class="table table-hover">
					<thead>
						<th>Образовательные программы направления</th>
					</thead>
					<tbody>
					<?php foreach (($faculty?:array()) as $value): ?>
							<tr><td><?php echo $value['name']; ?></td></tr><?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</body>