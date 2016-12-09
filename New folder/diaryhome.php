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
 @font-face{
            font-family:myfont3;
            src:url(fo4.otf);
        }  		
           
body{ 
background-image:url("img/x.jpg");
background-size:cover;
	font-family:myfont3;
	color:black;
	font-size:2em;
padding:50px;
}
a{
	color:black;
}

</style>
<script>

$(function(){
	
	
	$(".s").hide();
	
	
$(".t").click(function(){
$(".s").animate({width: 'toggle', height: 'toggle'}, "slow");
$(".f").slideToggle("slow");
});
});
</script>
<div style="padding:0px;">
<div class="col-sm-8" align="center" style="background-color:darkgray;padding:5px;">KHENARD</div>
<div style="position:relative;">
<div class="col-sm-4" align="center" style="background-color:gray;padding:5px;">
<a href="#">New Entry</a> | <a href="#">My Diary</a> | <a href="#">Profile</a> | <a href="#">Logout</a>
</div>
</div>


<div class="col-sm-12" style="background-color:palegreen;color:black;padding:15px;margin:0px;">
<div class="col-sm-7">
<img src="images/bg.jpg" width="100%" height="50%"></div>
<div class="col-sm-5"><br>dsdsd</div>

</div>






</div>

</body>
</html>