<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  
  <meta charset="utf-8" >
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
		<title>Home</title>
		<meta name="description" content="" >
		
		<meta name="viewport" content="width=device-width; initial-scale=1.0" >
  
  
  
  <link rel="stylesheet" href="css/bootstrap.css">

  <link rel="stylesheet" href="css/slider.css">
  <link rel="stylesheet" href="css/home1.css">
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="js/raphael-min.js" type="text/javascript"></script>
<script src="js/morris.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/home1.js"></script>

  
</head>
  
</head>

<body>
  <head>
<meta charset=utf-8 />
<style>
.myimg {
    max-width: 100%;
    height: auto;
    width: auto\9; /* ie8 */
}
.dropdown-menu > li.kopie > a {
    padding-left:5px;
}
 
.dropdown-submenu {
    position:relative;
}
.dropdown-submenu>.dropdown-menu {
   top:0;left:100%;
   margin-top:-6px;margin-left:-1px;
   -webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;
 }
  
.dropdown-submenu > a:after {
  border-color: transparent transparent transparent #333;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  content: " ";
  display: block;
  float: right;  
  height: 0;     
  margin-right: -10px;
  margin-top: 5px;
  width: 0;
}
 
.dropdown-submenu:hover>a:after {
    border-left-color:#555;
 }

.dropdown-menu > li > a:hover, .dropdown-menu > .active > a:hover {
  text-decoration: underline;
}  
  
@media (max-width: 767px) {
  .navbar-nav  {
     display: inline;
  }
  .navbar-default .navbar-brand {
    display: inline;
  }
  .navbar-default .navbar-toggle .icon-bar {
    background-color: #fff;
  }
  .navbar-default .navbar-nav .dropdown-menu > li > a {
    color: red;
    background-color: #ccc;
    border-radius: 4px;
    margin-top: 2px;   
  }
   .navbar-default .navbar-nav .open .dropdown-menu > li > a {
     color: #333;
   }
   .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
   .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
     background-color: #ccc;
   }

   .navbar-nav .open .dropdown-menu {
     border-bottom: 1px solid white; 
     border-radius: 0;
   }
  .dropdown-menu {
      padding-left: 10px;
  }
  .dropdown-menu .dropdown-menu {
      padding-left: 20px;
   }
   .dropdown-menu .dropdown-menu .dropdown-menu {
      padding-left: 30px;
   }
   li.dropdown.open {
    border: 0px solid red;
   }

}
 
@media (min-width: 768px) {
  ul.nav li:hover > ul.dropdown-menu {
    display: block;
  }
  #navbar {
    text-align: center;
  }
}  

</style>

</head>
<body>
  
<nav class="navbar navbar-default ">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
	  <span class="sr-only">Toggle navigation</span> 
	  <span class="icon-bar"></span> 
	  <span class="icon-bar"></span> 
	  <span class="icon-bar"></span> </button>
     <!-- <a class="navbar-brand img-responsive2" href="#"><img  src="aicte.png" alt="Aicte" style="height:80px; width:80px;">
        </a>-->
<a class="navbar-brand"  href="#" ><img style="max-width:100px; margin-top: -15px; max-height:50px;" alt="Aicte"        src="aicte.png"></a>		</div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="font-family:Helvetica Neue, Helvetica, Arial, sans-serif;">
        <li class="list"><a href="home.php">Home<span class="sr-only">(current)</span></a> </li>
       <!--<li  class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Data Feed</a>
      <ul class="dropdown-menu" >
        <li class="list"><a href="log.php">School Level</a></li>
        <li class="list"><a href="log.php" >Higher Education Level</a></li>
      </ul>
    </li>-->
    <li><a href="school.php">School Level Report</a></li>
        <li  class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle" > Higher Education Level Report</a>
      <ul class="dropdown-menu" >
        <li class="list"><a href="university.php">Unversities Wise</a></li>
        <li class="list"><a href="institute.php">Institutions/colleges Wise</a></li>
        <li class="list"><a href="teacher.php">Teachers wise</a></li>
        <li class="list"><a href="student.php">Students Wise</a></li>
      </ul>
    </li>   
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">News</a> </li>
        <li><a href="log.php">Login</a> </li>
        <li><a href="contact_form.php">Contact us</a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>


<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
	  <table width="100%" text-align="center">
	  <tr>
        <td><center>
        <table>
		<tr><td>
		<img src="img/imageedit_2_7100810043.png" style="max-width:100px; margin-top: -7px;" alt=""/>
		</td><td>
     <center><h3 class="text-center" ><span  aria-hidden="true"></span>
	 <font color="#FD0307">Govt. of India</font><br>AICTE EDUCATIONAL SURVEY</h3></center></td></tr></table></center></td>
       </tr>
      
      <tr ><td><span  aria-hidden="true"></span>
      <p class="text-center"><marquee>Complete educational data is now available on this site </marquee></p>
        <div style="max-width:1400px; "> 
		 <img class="mySlides myimg" src="image/img1.jpg" style="width:1400px;height:400px">
		 <img class="mySlides myimg" src="image/img2.jpg" style="width:1400px;height:400px">
		 <img class="mySlides myimg" src="image/img3.jpg" style="width:1400px;height:400px">
		 <img class="mySlides myimg" src="image/img4.png" style="width:1400px;height:400px">
<!--<div class="w3-content w3-section" >
  <img class="mySlides" src="image/img1.jpg" style="width:1000;height:400">
  <img class="mySlides" src="image/img2.jpg" style="width:1000;height:400">
  <img class="mySlides" src="image/img3.jpg" style="width:1000;height:400">
    <img class="mySlides" src="image/img4.png" style="width:1000;height:400">
</div>--></div></td></div></tr>
       <tr><td></td></tr></table>
    </div>
   
  </div>
</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<div class="container">
 
<hr>
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
      <h2><span  aria-hidden="true"></span> Schools</h2>
      <p>Information about students as well as teacher in all schools available in India ia available on this sites with graphical report based on the several categories. </p>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <h2><span  aria-hidden="true"></span>Universities and Institutes</h2>
      <p>Various kind of analys is done to analyze distribution of student across the country based on thier gender,caste,state,district etc.</p>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
    <h2><span  aria-hidden="true"></span> Result</h2>
      <p>The result or we can say complete examination of this survey is available in "Report" section.</p>
     
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
       <h2><span  aria-hidden="true"></span>Your Query</h2>
      <p> In case you have ay query,you can ask us from "Contact Us" Section.</p>
    </div>
  </div>
    
   <div  class="col-sm-6 text-center"><span  aria-hidden="true">
       <H4><span  aria-hidden="true"><label style="background-color:lightgreen; border-radius:4px">Number Of Recognised Educational Institutions Of Higher Learning,(All India) upto 2010-11</label></H4>
      <div id="pie-charta" ></div>
	    </div>
		
  <div  class="col-sm-6 text-center"><span  aria-hidden="true">
       <H4><span  aria-hidden="true"><label style="background-color:lightgreen; border-radius:4px">Expenditure on Education By Centre And <BR>State Governments</label></H4>
      <div id="pie-chartb" ></div>
	  </div>
	  <div  class="col-sm-6 text-center"><span  aria-hidden="true">
       <H4><span  aria-hidden="true"><label style="background-color:lightgreen; border-radius:4px">Gross Budgetary Support For Education Sector<BR>In The Twelfth Plan</label></H4>
      <div id="pie-chartc" ></div>
	  </div>
	  
	  <div  class="col-sm-6 text-center"><span  aria-hidden="true">
       <H4><label style="background-color:lightgreen; border-radius:4px">Growth of Higher Education System</label></H4>
      <div id="bar-chart" ></div>
    </div>
    
  </div>
</body>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js'></script>
<script src="js/home1.js"></script>

</body>
<footer>
<center><h6>This page is designed by Mamgalmay Decoders</h6></center>
</footer>
</html>