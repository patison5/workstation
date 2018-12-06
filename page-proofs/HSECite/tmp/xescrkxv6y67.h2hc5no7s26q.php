<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
	<title>f3 test</title>
</head>
<body>
	<?php foreach (($f3Test?:array()) as $value): ?>
		<?php echo $value['name']; ?>
		<br>
	<?php endforeach; ?>
</body>
</html>