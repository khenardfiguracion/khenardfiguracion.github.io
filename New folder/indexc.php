<!DOCTYPE html>
<html>
<head><title>Title | Super Title</title>
         
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	 
  <link rel="shortcut icon" type="image/x-icon" href="images/x.ico" />
	  <script src="bootstrap/js/jquery.min.js"></script>  
	 <script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
<style>

             @font-face{
            font-family:myfont;
            src:url(fo.otf);
        }   
		 @font-face{
            font-family:myfont1;
            src:url(fo2.ttf);
        }  
 @font-face{
            font-family:myfont2;
            src:url(fo3.otf);
        }  		
           
body{ 
padding:50px;
	font-family:myfont;

}

</style>
<script>

$(function(){
	


	

$(".ltrigh").click(function(){
$(".hh").animate({width: 'toggle', height: 'toggle'}, "slow");
$(".indexx").slideToggle("slow");
});





});
</script>

<div class="col-sm-12" align="center" style="padding:10px;">
<h1>Welcome to my Page!</h1><hr width="40%">
<p></p>
<div class="col-sm-5"><br><br></div>
<div class="col-sm-2" align="center">
<form action="homepage.php" method="POST" class="form">
Choose a Screen Name: <br><br><input type="text" class="form-control" name="sn"/><br>

</div>
<div class="col-sm-5"><br></div>
<div class="col-sm-12" align="center">
<button type="submit" class="btn btn-primary">PROCEED ! </button>
</div></form>
</div>


</body>
</html>