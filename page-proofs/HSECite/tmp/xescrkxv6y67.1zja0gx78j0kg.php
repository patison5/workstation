<head>
 
	<meta charset="utf-8">
	<title>faculties</title>

	<meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">


	<link rel="stylesheet" href="<?php echo $BASE; ?>/ui/frontend/css/style.css">

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<div class="wrapper">

<div id="background"></div>

<ul class="topnav" id="myTopnav">
	<div class="centralcontainermenu">
  		<li><a id="alogo" href="#"><img id="logo" src="<?php echo $BASE; ?>/ui/frontend/hselogo.png"></a></li>
  		<li><a class="menubutton" href="http://abitir.styleru.net/frontend/news">Новости</a></li>
  		<li><a class="menubutton" href="http://abitir.styleru.net/frontend/faculties">Факультеты</a></li>
  		<li><a class="menubutton" href="http://abitir.styleru.net/frontend/olympiads">Олимпиады</a></li>
  		<li><a class="menubutton" href="#">Калькулятор</a></li>
  		<li><a class="menubutton" href="#">Курсы</a></li>
  		<li><a class="menubutton" href="http://abitir.styleru.net/frontend/organisations">Студорганизации</a></li>
  		<li><a class="menubutton" href="#">Советы</a></li>
  		<li class="icon">
    		<a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  		</li>
    </div>		
</ul>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<script>
  
$(document).ready(function() {

  var qwe = parseInt($('#background').css("height")) + 80;
  $('#background').css("height", qwe + "px");

})

</script>
