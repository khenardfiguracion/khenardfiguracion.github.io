<!DOCTYPE html>
<html>
<title>PSU DMS- Document Management made Easy</title>
<head>    
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="bootstrap/js/jquery.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="bootstrap/js/bootstrap.min.js"></script>
<style>
body{
  background: black;
  color:white;
}
.panel{
	border:1px solid white;
	background-color:black;
	color:white;
		width:100%;
}
.btns{
	background-color:black;
	color:white;
	border:1px solid white;
	width:100%;
	font-size:1.5em;
	padding:5px;
}
#trig{
	background-color:black;
	color:white;
	border:1px solid white;
	padding:5px;
}

</style>
<script src="bootstrap/js/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
	$("#navig").hide();



$("#trig").click(function(){

 $("#navig").css({"width": "250px", "height": "100%"});
$("#navig").fadeToggle("slow");
});


});
</script>


<span class="glyphicon glyphicon-chevron-right" id="trig" style="font-size:600%;">
</span>



<div class="col-sm-4 panel" id="navig">
<div><br>
<img src="images/bg.jpg" class="image-responsive" style="width:100%; height:200px;">
<hr>
<p>Hey There, I'm <b>Khenard Figuracion</p>
<br><br>
<nav class="navbar navbar-left">
<a href="#" class="btns"> HOME</a><br><br>
<a href="#" class="btns"> HOME</a><br><br>
<a href="#" class="btns"> HOME</a><br><br>
<a href="#" class="btns"> HOME</a><br><br>
<a href="#" class="btns"> HOME</a><br><br>
</nav>
</div>
</div>











</body>
</html>