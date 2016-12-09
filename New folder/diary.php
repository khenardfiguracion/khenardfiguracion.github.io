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
	font-family:myfont1;
	color:white;
	

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
<div class="col-sm-12 f" style="background-image:url('img/x.jpg');background-size:cover;">
<div class="col-sm-10"></div><div class="col-sm-2"><span class="glyphicon glyphicon-chevron-down t"></div>
</div>

<div class="col-sm-10 s" style="background-image:url('images/bii.jpg');background-size:cover;padding:10px;">
<div class="col-sm-2"></div>
<div class="col-sm-10"></div>

<div class="col-sm-2"><span class="glyphicon glyphicon-chevron-left t"></span><img src="images/bg.jpg" width="150px" height="150px" style="border:5px solid black;"></div>
<div class="colsm-2"><h4>Hello, i'm </h4><h2>KHENARD M FIGURACION</h2>
<hr width="10%" align="left"><a href="#">HOME</a> | <a href="#">PROFILE</a> | <a href="#">LOGOUT</a></div>
<div class="col-sm-8"></div>

<div class="col-sm-12"></div>


<div class="col-sm-4"></div>
<div class="col-sm-8">
adadadadadad
</div>
</div>
</body>
</html>