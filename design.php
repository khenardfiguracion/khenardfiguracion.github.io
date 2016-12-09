<!DOCTYPE html>
<html>
<head><title>I'm Khenard - Get to know Me!</title>
         
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	 
  <link rel="shortcut icon" type="image/x-icon" href="images/x.ico" />
	  <script src="bootstrap/js/jquery.min.js"></script>  
	 <script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
<style>

             @font-face{
            font-family:myfont;
            src:url(fo.otf);
        }   
		 @font-face{
            font-family:myfont1;
            src:url(fo2.ttf);
        }   
           
body{ 
	font-family:myfont;
	background-color:black;
	color:white;
	padding:7%;
	font-size:1.3em;
}
a{
	text-decoration:none;
	transition:0.6s all ease;

	}
a:hover{
	text-decoration:none;
	font-size:1.5em;
}
p{
	font-family:myfont1;
}
.ver{
	
	font-family:myfont1;
	border-right:0px solid white;
	padding:5px;

}
#myModal{
	font-size:1em;
	padding:10px;
	background-color:black;
	background-image:url("images/mobileeee.png");
	background-size:cover;
}
.imgg{

	border-radius:50%;
}
.items{
	width:100%;
	height:100%;
}
label{
	font-family:myfont1;
	}
	input{
		
	font-family:myfont1;
	}

</style>


<script>

$(function(){
	

	$(".ver").hide();
	
	$(".abm").hide();
	$(".w").hide();
	$(".funarea").hide();
	
	$(".fun").click(function(){
		$(".bodd").slideToggle("slow");
		$(".funarea").slideToggle("slow");

	});
	
	$(".ww").click(function(){
		$(".w").slideToggle("slow");
	});
	
	
	$(".trig").click(function(){
		$(".ver").slideToggle("slow");
		$(".abm").slideToggle("slow");
	});
	  $(".pro").hide();
	$(".wo").hide();
	$(".me").hide();
	
	$(".bio").hide();
	$(".educ").hide();
	$(".ski").hide();
	
	$(".ht").hide();
	$(".css").hide();
	$(".bss").hide();
	$(".phps").hide();
	$(".jqy").hide();
	$(".vbn").hide();
	$(".cpp").hide();
	
	$(".projs").hide();
	
	
	$(".proj1").hide();
	$(".proj2").hide();
	$(".proj3").hide();
	$(".proj4").hide();
	$(".proj5").hide();
	
	
	$(".p1").click(function(){
		$(".proj1").slideToggle("slow");
	$(".proj2").hide();
	$(".proj3").hide();
	$(".proj4").hide();
	$(".proj5").hide();
	});
	$(".p2").click(function(){
		$(".proj2").slideToggle("slow");
		$(".proj1").hide();
	
	$(".proj3").hide();
	$(".proj4").hide();
	$(".proj5").hide();
	});
	$(".p3").click(function(){
		$(".proj3").slideToggle("slow");
		$(".proj1").hide();
	$(".proj2").hide();
	$(".proj4").hide();
	$(".proj5").hide();
	});
	$(".p4").click(function(){
		$(".proj4").slideToggle("slow");
		$(".proj1").hide();
	$(".proj2").hide();
	$(".proj3").hide();
	$(".proj5").hide();
	});
	$(".p5").click(function(){
		$(".proj5").slideToggle("slow");
		$(".proj1").hide();
	$(".proj2").hide();
	$(".proj3").hide();
	$(".proj4").hide();
	});
	

	
	
	$(".work").click(function(){
	
		$(".projs").slideToggle("slow");

	});
	
	$("#h").hover(function(){
	
		$(".ht").slideToggle("slow");

	});
	
	$(".cs").hover(function(){
	    $(".css").slideToggle("slow");
     });
	 $(".bs").hover(function(){
	    $(".bss").slideToggle("slow");
     });
	 $(".ph").hover(function(){
	    $(".phps").slideToggle("slow");
     });
	 $(".jq").hover(function(){
	    $(".jqy").slideToggle("slow");
     });
	 $(".vb").hover(function(){
	    $(".vbn").slideToggle("slow");
     });
	 $(".cp").hover(function(){
	    $(".cpp").slideToggle("slow");
     });
	
	
	
	
	
	$(".b").click(function(){
		$(".bio").slideToggle("slow");

	});
	$(".s").click(function(){
		$(".ski").slideToggle("slow");

	});
	$(".e").click(function(){
		$(".educ").slideToggle("slow");

	});
	
	
	$(".trig").click(function(){
		$(".navig").slideToggle("slow");

	});
	
	$(".home").click(function(){
		$(".ho").slideToggle("slow");
		$(".ho").css({"border-width": "0px", "border-style": "solid", "border-color": "black" });

	});
	$(".prof").click(function(){
		$(".pro").slideToggle("slow");
		$(".pro").css({"background-color": "black", "border-width": "0px", "border-style": "solid", "border-color": "white", "color": "white" });

	});
	$(".work").click(function(){
		$(".wo").slideToggle("slow");
		$(".wo").css({"background-color": "black", "border-width": "1px", "border-style": "solid", "border-color": "black" });

	});
	
	$(".mess").click(function(){
		$(".me").slideToggle("slow");
		$(".me").css({"background-color": "pink", "border-width": "1px", "border-style": "solid", "border-color": "black" });

	});

	


});
</script>

<body> 

<p>Bold, Simple and <span href="#f" class="fun"> Fun</span> .</p>
<div class="bodd">
<marquee behavior="slide" direction="down">
<h1 align="right">It's Me, 
<a href="#" class="ken">Khenard </a></h1></marquee>
<marquee behavior="slide" direction="up"><h5 align="right"><p>a Web Designer from Pangasinan, PH.</p></h5>
</marquee>
<br>
<h4 align="left">
<a href="design.php" class="ah">HOME</a> | 
<a href="#am" class="trig">ME</a> |
 <a href="#w" class="ww">WORKS</a> |
<a href="#" align="right" data-toggle="modal" data-target="#myModal"  aspopup="true" aria-expanded="false">CONTACT ME</a> 

 </h4>

<hr>

<div class="col-sm-8">
<marquee behavior="slide" direction="up">
<h2 style="font-size:3em;">It's not if you CAN'T Do it, <br>It's if you WANT to Do it.</h2>
</marquee>
<br>
<p style="font-size:1.2em;">Name's <a href="#">Khenard Figuracion</a>, but my you can call me Ken for short.<br>
Web Designing is my Passion, I Love to create Awesome Websites.</p>
</div>
<div class="col-sm-4"  align="right">
<br>
<img src="images/mf.jpg" style="border-radius:50%;" class="image-responsive" width="50%" height="50%">
</div>
<br>


<div class="abm">
<div class="col-sm-4" id="am" align="right">
<h3 class="trig"  align="center">ABOUT ME</h3>
<div class="ver">
<div class="b"><h5 align="center">BIO:</h5>
 Full Name:Khenard Macanas Figuracion<br>
 Age:19<br>
 Birth date:February 07, 1997<br>
 Gender:Male<br>
 Address:#258 Ma. Cristina Street, Pob. Zone 2 Villasis, Pangasinan(2427)<br>
 </div>
 <br><hr><br>
 <div class="fb">
<h5  align="center">FAMILY BACKGROUND:</h5>

    Mother's Name:Catherine Figuracion<br>
	Age:37<br>
   Occupation:OFW(Singapore)<br>
	Father's Name:Edwin Figuracion<br>
	Age:45<br>
    Occupation:Self Emoloyed Vendor<br><br>
	Siblings<br>
	Krstine Rose Figuracion<br>
	Age:24<br>
	Kathleen Mae Figuracion(Deceased)<br>
	Kristelle Ann Figuracion<br>
	Age:17<br>
	</div>
	<br>
</div>
</div>

<div class="col-sm-4" id="am" align="right">
<h3 class="trig"  align="center">EDUCATION</h3>
<div class="ver">
<div class="b">
<h5 align="center">ELEMENTARY</h5>
 School Name: Villasis 1 Central School<br>
Address:Los Requerdos St. Villasis, Pangasinan<br>
	Year Graduated:2009<br><hr><br>
	<h5 align="center">Secondary</h5>
	School Name:Don Ramon E. Costales Memorial NHS<br>
	Address:Pob. Zone 3 Villasis, Pangasinan<br>
	Year Graduated:2013<br><hr><br>
	<h5 align="center">Tertiary</h5>
	School Name:Pangasinan State University<br>
	Address:Mac Arthur Highway Urdaneta City, Pangasinan<br>
        Course Taken:BS Information Technology<br>
	Year:3rd Year


 </div>

</div>
</div>

<div class="col-sm-4" id="am" align="right">
<h3 class="trig"  align="center">SKILLS</h3>
<div class="ver">

	  <a href="#" class="ss" id="h">HTML 5</a> |
	  <a href="#" class="ss cs">CSS</a> | 
	   <a href="#" class="ss bs">BS</a> | 
	   <a href="#" class="ss ph">PHP</a> | 
	   <a href="#" class="ss jq">JQy</a> | 
	   <a href="#" class="ss vb">VB.net</a> |
	   <a href="#" class="ss cp">C++</a>
	   
	   <hr>
 <div class="col-sm-12">
 Here's some of my Skills <br>
 </div>
	   
 <div class="col-sm-12 ht"><br>
	 <a class="ss" href="#" style="width:100%;"><b>||||||||||||||||||||</b></a>- 100%<br>
	 <br>
	 <p>I Love creating and Designing Web Pages, I am very Passionate about it! HTML is the soul of a Web page.</p>
	 </div>
	  <div class="col-sm-12 css"><br>
	  <a class="ss" href="#" style="width:100%;"><b>||||||||||||||||||||</b></a>- 100%<br>
	 <br>
	 <p>Web Designing is my Passion! I know how to beautify a dull Web page with CSS, it's like Decorating a Stone and turns it into a Rock Statue.</p>
	 </div>
	  <div class="col-sm-12 bss"><br>
	  <a class="ss" href="#" style="width:100%;"><b>|||||||||||||||||&nbsp;&nbsp;&nbsp;</b></a>- 96%<br>
	 <br>
	 <p>a Website must be Responsive, PC Mode or Mobile Mode. Thanks to BootStrap.</p>
	 </div>
	  <div class="col-sm-12 phps"><br>
	  <a class="ss" href="#" style="width:100%;"><b>|||||||||||||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>- 80%<br>
	 <br>
	 <p>I know the basic PHP Scripting</p>
	 </div>
	  <div class="col-sm-12 jqy"><br>
	  <a class="ss" href="#" style="width:100%;"><b>|||||||||||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>- 75%<br>
	 <br>
	 <p>I've used JQuery for this Website and it was awesome!</p>
	 </div>
	  <div class="col-sm-12 vbn"><br>
	  <a class="ss" href="#" style="width:100%;"><b>|||||||||||||||||||&nbsp;</b></a>- 95%<br>
	<br>
	 <p>Web Based or Form Based, I can Do it with VB.net and ASP.net</p>
	 </div>
	  <div class="col-sm-12 cpp"><br>
	  <a class="ss" href="#" style="width:100%;"><b>|||||||||||||&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>- 78%<br>
	 <br><p>It's like the elementary of Programming and I know the Basics.</p>
	 </div>
	 
</div>
</div>
</div>



<div class="col-sm-12 w" id="w">
<h1 align="center">PROJECTS</h1><hr>
<div class="col-sm-6" style="padding:5px;">
<a href="#" align="right" class="dropdown-toggle" data-toggle="modal" data-target="#p1"  aspopup="true" aria-expanded="false">
<img align="right" src="images/p1.png" class="image-responsive imgg" width="150px" height="150px"></a> 
<h3>PSU DMS</h3><hr><p>A Web-based Document Management System for Pangasinan State University All Campuses
Done in PHP and Mysql Database in the completion for THESIS (ASD 1).</p>
</div> 

<div class="col-sm-6" style="padding:5px;">
<a href="#" align="right" class="dropdown-toggle" data-toggle="modal" data-target="#p2"  aspopup="true" aria-expanded="false">
<img align="left" src="images/p2.png" class="image-responsive imgg" width="150px" height="150px"></a>
<h3>Online Ordering System</h3><hr><p>A Web-Based Online Ordering System for a Souvenir Shop 
Done in PHP and Mysql Database in the completion for DBMS2.</p>
</div>

</div>
<br>

<div class="col-sm-12 w" id="w">
<div class="col-sm-6" style="padding:5px;">
<a href="#" align="right" class="dropdown-toggle" data-toggle="modal" data-target="#p3"  aspopup="true" aria-expanded="false">
<img align="right" src="images/p3.png" class="image-responsive imgg" width="150px" height="150px"></a>
<h3>Chatter Box(ASP)</h3><hr><p>An interactive Online Forum for everyone, It allows user to Communicate to other people by posting with a Particular Topic and Personal Messages
Done in Asp.net andMS Access Database in the completion for ELECTIVE 2.</p>
</div>

<div class="col-sm-6" style="padding:5px;">
<a href="#" align="right" class="dropdown-toggle" data-toggle="modal" data-target="#p5"  aspopup="true" aria-expanded="false">
<img align="left" src="images/p5.png" class="image-responsive imgg" width="150px" height="150px"></a>
<h3>Chatter Box (PHP)</h3><hr><p>An interactive Online Forum for everyone, It allows user to Communicate to other people by posting with a Particular Topic and Personal Messages
Done in PHP and Mysql Database in the completion for ELECTIVE 3.</p>
</div>

</div>

<div class="col-sm-12 w" id="w">
<div class="col-sm-6" style="padding:5px;">
<a href="#" align="right" class="dropdown-toggle" data-toggle="modal" data-target="#p4"  aspopup="true" aria-expanded="false">
<img align="right" src="images/p4.png" class="image-responsive imgg" width="150px" height="150px"></a>
<h3>PSULS +</h3><hr><p>Library Management System for Pangasinan State University Urdaneta Campus
Done in VB.net 2010 and MS Ascess Database in the completion for DBMS1.</p>
</div>
<div class="col-sm-6" style="padding:5px;">
<a href="#" align="right" class="dropdown-toggle" data-toggle="modal" data-target="#p61"  aspopup="true" aria-expanded="false">
<img align="left" src="images/p61.png" class="image-responsive imgg" width="150px" height="150px"></a>
<h3>Sales and Inventory System</h3><hr><p>Sales and Inventory Management System for NorthCare Medical Pharmacy
Done in VB.net 2010 and MS Ascess Database in the completion for Software Engineering.</p>
</div>
</div>










<!--
modal

-->


<div id="p1" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body"><p></p>
<img src="images/p1.png" class="image-responsive" height="100%" width="100%" />
</div>
</div></div></div>


<div id="p2" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body"><p></p>
<img src="images/p2.png" class="image-responsive" height="100%" width="100%" />
</div>
</div></div></div>

<div id="p3" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body"><p></p>
<img src="images/p3.png" class="image-responsive" height="100%" width="100%" />
</div>
</div></div></div>

<div id="p4" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body"><p></p>
<img src="images/p4.png" class="image-responsive" height="100%" width="100%" />
</div>
</div></div></div>

<div id="p5" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body"><p></p>
<img src="images/p5.png" class="image-responsive" height="100%" width="100%" />
</div>
</div></div></div>
<div id="p61" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body"><p></p>
<img src="images/p61.png" class="image-responsive" height="100%" width="100%" />
</div>
</div></div></div>






<!--

modaallllalala 
contact

-->


<div id="myModal" class="modal fade" role="dialog" >
<div class="modal-dialog"  style="padding:120px;">
<br><br><br><br><br>

<div id="modd">
<div class="col-sm-8">
<marquee behavior="slide" direction="up">
<h2 style="font-size:3em;"></h2>
</marquee>
<br>
<p style="font-size:1.2em;">Facebook : <a href="#">facebook.com/khenard.figuracion</a></p>
</div>
<div class="col-sm-4"  align="right">
<img src="images/fb.png" style="border-radius:50%;" class="image-responsive" width="50px" height="50px">
</div>
<br>


<div class="col-sm-8">
<marquee behavior="slide" direction="up">
<h2 style="font-size:3em;"></h2>
</marquee>
<br>
<p style="font-size:1.2em;">Gmail : <br><a href="#">khenemfie13@gmail.com</a></p>
</div>
<div class="col-sm-4"  align="right">
<br>
<img src="images/gmm.png" style="border-radius:50%;" class="image-responsive" width="50px" height="50px">
</div>
<br>


<div class="col-sm-8">
<marquee behavior="slide" direction="up">
<h2 style="font-size:3em;"></h2>
</marquee>
<br>
<p style="font-size:1.2em;">Ymail : <br><a href="#">khenemfie13@ymail.com</a></p>
</div>
<div class="col-sm-4"  align="right">
<br>
<img src="images/ym.png" style="border-radius:50%;" class="image-responsive" width="50px" height="50px">
</div>
<br>



<div class="col-sm-8">
<marquee behavior="slide" direction="up">
<h2 style="font-size:3em;"></h2>
</marquee>
<br>
<p style="font-size:1.2em;">DeviantArt : <br><a href="#">khenemfie13 / Khenard13</a></p>
</div>
<div class="col-sm-4"  align="right">
<br>
<img src="images/da.png" style="border-radius:50%;" class="image-responsive" width="50px" height="50px">
</div>
<br>


<div class="col-sm-8">
<marquee behavior="slide" direction="up">
<h2 style="font-size:3em;"></h2>
</marquee>
<br>
<p style="font-size:1.2em;">Instagram : <br><a href="#">@iamkhee</a></p>
</div>
<div class="col-sm-4"  align="right">
<br>
<img src="images/ig.png" style="border-radius:50%;" class="image-responsive" width="50px" height="50px">
</div>
<br>

</div>
</div></div>





<div class="col-sm-12">
<footer align="center"><hr><p>
Web Design by: Khenard Figuracion &copy; 2016 | 
<a href="#" align="right" class="feedb" data-toggle="modal" data-target="#fbb"  aspopup="true" aria-expanded="false" ><span class="glyphicon glyphicon-envelope"></span>&nbsp;FeedBack </a></p>
</footer>
</div>
</div>



<div id="fbb" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content" style="background-color:black;">
<div class="modal-header"><label>So, What do you think? FeedBacks are appreciated. </label>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body"><p></p>
<form action="design.php" method="POST" enctype="multipart/form-data">
<label>Name: </label>
<input type="text" class="form-control" name="uname" required="required"/><br>
<label>Email:</label>
<input type="email" class="form-control" name="emaddr" required="required"/><br>
<label>Message:</label>
<textarea class="form-control"  name="fbmess" required="required">
</textarea><br>
<input type="submit" class="btn btn-default" name="sendFB"/>
</form>
</div>
</div></div></div>

<?php

//para sa insert ng feedback sa table

$kdbcon=mysql_connect("localhost","root","") or die("Could not establish connection");
mysql_select_db("khenwdb",$kdbcon) or die ("Error selecting database...");

if(isset($_POST['sendFB'])){
	
$ins=mysql_query("INSERT INTO tb_feedback(fb_name, fb_email, fb_message) VALUES('".$_POST['uname']."', '".$_POST['emaddr']."', '".$_POST['fbmess']."');") or die("Error in insert");
if($ins){
	echo "<script>alert('Thank you for your Feedback!');</script>";
}
}
?>

<!--
start ng funnnnn

-->

<div class="col-sm-12 funarea">

<h1><span class="myy">My Personal Space.</span> | <span class="glyphicon glyphicon-star re" align="right" style="font-size:0.7em;color:blue;" ></span>
</h1>
<hr>
<div class="faconts">
<div class="col-sm-6" style="opacity:1;">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
	        <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
	        <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
      <li data-target="#myCarousel" data-slide-to="9"></li>
	        <li data-target="#myCarousel" data-slide-to="10"></li>
      <li data-target="#myCarousel" data-slide-to="11"></li>
	  
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
   
      <div class="item active">
	  <img src="images/mypics/2.jpg"  class="items" >
      </div>
      <div class="item">
        <img src="images/mypics/3.jpg"   class="items">
        
      </div>
    
      <div class="item">
        <img src="images/mypics/4.jpg"  class="items">
      </div>

      <div class="item">
        <img src="images/mypics/5.jpg"  class="items">
      </div>
	     <div class="item">
        <img src="images/mypics/6.jpg"  class="items">
      </div>
	     <div class="item">
        <img src="images/mypics/7.jpg"  class="items">
      </div>
	  <div class="item">
        <img src="images/mypics/8.jpg"  class="items">
      </div>
	  <div class="item">
        <img src="images/mypics/9.jpg"  class="items">
      </div>
	  <div class="item">
        <img src="images/mypics/10.jpg"  class="items">
      </div>
	  <div class="item">
        <img src="images/mypics/11.jpg"  class="items">
      </div>
	  <div class="item">
        <img src="images/mypics/12.jpg"  class="items">
      </div>
	  <div class="item">
        <img src="images/mypics/13.jpg"  class="items">
      </div>
	   <div class="item">
	  <img src="images/mypics/dd.jpg"  class="items" >
      </div>
	    
	 
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="col-sm-6" style="font-family:myfont1;">
<h3>FeedBacks: </h3><br>
<?php


$kdbcon=mysql_connect("localhost","root","") or die("Could not establish connection");
mysql_select_db("khenwdb",$kdbcon) or die ("Error selecting database...");


$showFB=mysql_query("SELECT * FROM tb_feedback;") or die("Error in SELECT");
while($row=mysql_fetch_array($showFB)){
?>
<form action="design.php" method="GET">
<a href="design.php?idd=<?php echo $row[0]; ?>" class="glyphicon glyphicon-remove" name="delfb" style="color:black;"></a>
</form>
<h4><?php echo $row[1]; ?></h4> Says:
<q><?php echo $row[3]; ?></q><hr>



<?php   }  

if(isset($_GET['idd'])){
	$kdbcon=mysql_connect("localhost","root","") or die("Could not establish connection");
mysql_select_db("khenwdb",$kdbcon) or die ("Error selecting database...");

	$del=mysql_query("DELETE FROM tb_feedback WHERE feedbackid=".$_GET['idd'].";") or die("die");
	if($del){
	}
}



?>
</div>
</div>


<div class="col-sm-12 readingarea">
<div class="col-sm-2">
<h1 class="s1">stuff</h1>
</div>
<div class="col-sm-10 st1">
<p>
some stuff<br>

<br>
</p>
</div>




<div class="col-sm-12 listenarea">
xzcxzczczc
</div>




</div>

<script>

$(function(){
$(".listenarea").hide();	
$(".readingarea").hide();
	
$(".st1").hide();



$(".s1").click(function(){
		$(".st1").slideToggle("slow");
		
	});

	
	
$(".myy").click(function(){
	
		$(".faconts").slideToggle("slow");
		$(".listenarea").hide("slow");
		$(".readingarea").hide("slow");
	});
	
	$(".listen").click(function(){
		$(".faconts").hide("slow");
		$(".listenarea").slideToggle("slow");
		$(".readingarea").hide("slow");
	});
	
	$(".re").click(function(){
		$(".faconts").hide("slow");
		$(".listenarea").hide("slow");
		$(".readingarea").slideToggle("slow");
	});
	


});
</script>
</body>
</html>