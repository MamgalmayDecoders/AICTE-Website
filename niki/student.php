<!DOCTYPE html>
<html >
<head>
 <head lang="en">
    <meta charset="UTF-8">
    <title>AICTE Survey</title>
   <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="css/jquery.dataTables.min.css">
<link rel="stylesheet" href="css/school1.css">


<script src="js/bootstrap.js" type="text/javascript"></script>
  <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="js/raphael-min.js" type="text/javascript"></script>
<script src="js/morris.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/school1.js"></script>
 <script src="js/jquery.dataTables.min.js"></script>
 <style>
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
 
 
<script type="text/javascript" language="javascript" >
			$(document).ready(function() {
				var dataTable = $('#employee-grid').DataTable( {
					"processing": true,
					"serverSide": true,
					"ajax":{
						url :"sch_dat_1.php", // json datasource
						type: "post",  // method  , by default get
						error: function(){  // error handling
							$(".employee-grid-error").html("");
							$("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
							$("#employee-grid_processing").css("display","none");
							
						}
					}
				} );
			} );
		</script>
 
   
   
   
  
</head>
<body>
<body>
 <nav class="navbar navbar-default navbar-fixed-top navbar-light">
  <div class="container-fluid"> 
  
  
 <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
	  <span class="sr-only">Toggle navigation</span> 
	  <span class="icon-bar"></span> 
	  <span class="icon-bar"></span> 
	  <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#"><img src="AICTE_Banner.png" alt="Aicte" style="height:60px; width:250px;">
        </a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="font-family:Helvetica Neue, Helvetica, Arial, sans-serif;">
        <li class="list"><a href="home.php">Home<span class="sr-only">(current)</span></a> </li>
       <li  class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Data Feed</a>
      <ul class="dropdown-menu" >
        <li class="list"><a href="log.php">School Level</a></li>
        <li class="list"><a href="log.php" >Higher Education Level</a></li>
      </ul>
    </li>
    <li><a href="school.html">School Level</a></li>
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
</nav><div id="graph" style="margin-left: 14px;  margin-right: 15px; width:97.70%; margin-top:50px; display:block;" >
    <table style="width:100;"><tr><td style="width:20%;">
    <!----- php search option form started from here -->
   <form action="" method="get" style="text-align:center; background-color:#E7E2E1;">
                            <div class="form-group" style="margin:10px">
							
							
							<label for="year">Year</label>
                                            <select class="form-control" name="val1" id="val1">
											   
                                                <option value="2007-08" >2007-08</option>
                                                <option value="2008-09" >2008-09</option>
                                                <option value="2009-10" >2009-10</option>
                                                <option value="2010-11" >2010-11</option>
                                                <option value="2011-12" >2011-12</option>                                 
                                             
                                                
                                                <option value="2012-13" >2012-13</option>
                                                 <option value="2013-14">2013-14</option>
                                                <option value="2014-15">2014-15</option>												 
                                               <option value="2015-16">2015-16</option>
                                                                        
                                               
                                                
                                            </select>
							
							

                                           <label for="Enrollment Type">Categories</label>
                                            <select class="form-control" name="val2" id="val2">
											<option value="enrol dif edu" id="enrol dif edu">Enrollment at different Education (All)</option>
                                                <option value="enrol dist edu" id="enrol dist edu">Enrollment for distance Education</option>
                                                <option value="enrol uni" id="enrol uni">Enrollment by University</option>
												<option value="enrol uni typ" id="enrol uni typ">Enrollment by University Type</option>
												<option value="enrol grp" id="enrol grp">Enrollment by Group Wise</option>
												<option value="enrol state uni" id="enrol state uni">Enrollment by State wise (University)</option>
												<option value="enrol state cllg" id="enrol state cllg">Enrollment by State wise(College)</option>
												<option value="enrol lev state" id="enrol lev state">Enrollment by Level wise(State)</option>
												<option value="enrol lev inst" id="enrol lev inst">Enrollment by Level wise(Institute)</option>
												<option value="enrol prog" id="enrol prog">Enrollment by Program wise</option>
												<option value="intk lev" id="intk lev">Intake Level wise</option>
												<option value="intk mang uni" id="intk mang uni">Intake Management wise(University)</option>
												<option value="intk mang cllg" id="intk mang cllg">Intake Management wise(College)</option>
												<option value="intk lev 1 yr all" id="intk lev 1 yr all">Intake Level wise 1<sup>st</sup> Year(All)</option>
												<option value="intk lev 1 yr uni" id="intk lev 1 yr uni">Intake Level wise 1<sup>st</sup> Year(University)</option>
												<option value="intk lev 1 yr cllg" id="intk lev 1 yr cllg">Intake Level wise 1<sup>st</sup> Year(College)</option>
                                                
                                                </select>
                                           
                                            <!--<label for="state">Select State</label>
							<select class="form-control input-sm" name="val3" id="val3">
                           
                            <option selected="" value="each">-----All-----</option>
 <option disabled="">-------------------------------------------</option>
 						<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
 <option value="Arunachal Pradesh">Arunachal Pradesh </option>
 <option value="Andhra Pradesh">Andhra Pradesh </option>
 <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands </option>
 <option value="Assam">Assam </option>
 <option value="Bihar">Bihar </option>
 <option value="Chanigarh">Chandigarh </option>
 <option value="Chhattisgarh">Chhattisgarh </option>
 <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli </option>
 <option value="Daman and Diu">Daman and Diu </option>
 <option value="Delhi">Delhi </option>
 <option value="Goa">Goa </option>
 <option value="Gujarat">Gujarat </option>
 <option value="Haryana">Haryana </option>
 <option value="Himachal Pradesh">Himachal Pradesh </option>
 <option value="Jammu and Kashmir">Jammu and Kashmir </option>
 <option value="Jharkhand">Jharkhand </option>
 <option value="Karnataka">Karnataka </option>
 <option value="Kerala">Kerala </option>
 <option value="Madhya Pradesh">Madhya Pradesh </option>
 <option value="Maharashtra">Maharashtra </option>
 <option value="Manipur">Manipur </option>
 <option value="Meghalaya">Meghalaya </option>
 <option value="Mizoram">Mizoram </option>
 <option value="Nagaland">Nagaland </option>
 <option value="Odisha">Odisha </option>
 <option value="Orissa">Orissa </option>
 <option value="Punducherry">Puducherry </option>
 <option value="Punjab">Punjab </option>
 <option value="Rajasthan">Rajasthan </option>
 <option value="Sikkim">Sikkim </option>
 <option value="Tamil Nadu">Tamil Nadu </option>
 <option value="Telangana">Telangana </option>
 <option value="Tripura">Tripura </option>
 <option value="Uttar Pradesh">Uttar Pradesh </option>
 <option value="Uttarakhand">Uttarakhand </option>
 <option value="West Bengal">West Bengal </option>
<option  value="INDIA">India</option>
                                            </select>-->
							
							
                                               <!-- <label for="level">Minority</label>
<select class="form-control input-sm" name="val4" id="val4">
	<option selected="" value="no">-----No-----</option>
    <option value="SC">SC</option>
    <option value="ST">ST</option>
    </select>-->
                  <label for="level">Gender</label>
					<select class="form-control input-sm" name="val5" id="val5">
                    	<option disabled selected value="">   All </option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>					
					</select>				
                  <label for="level">Gender</label>
					<select class="form-control input-sm" name="val5" id="val5">
                    	<option disabled selected value="">   All </option>
                    <option value="Boys">Boys</option>
                    <option value="Girls">Girls</option>					
					</select>		<br><br>				
										<center><input style="border-radius: 12px; padding: 10px 24px; font-size: 12px;background-color: #B4B1B0  ;" type="submit" name="submit" value="send"></input>  </center>                              
							<!--Form group end-->
							</div>
							
							</form>	</td><td style="width:80%;">
                           <div class"row">
  <div  class="col-sm-6 text-center">
      <center> <label class="label label-success">Bar Chart</label><center>
      <div id="bar-chart" ></div>
    </div></div>
                            </td></tr></table>
							
							<div id="page-wrapper" style="min-heigt: 1000px;">
             <div class="row" >
                <div class="col-lg-12" >
                    <div class="panel panel-default"  style="min-width: 100%;">
                        <div class="panel-heading" style="min-width: 100%;">
						<h5 class="modal-title" align="center" style=";color:#BF6302">
                           List of Faculties in AICTE Approved Institutes in 'ENGINEERING AND TECHNOLOGY' for the State Andaman and Nicobar Islands  </h5>
                        </div>
						
						
						
						<div class="panel-body">
						<div class="col-lg-12">
                            <div class="dataTable_wrapper">
                                <div id="dataTables1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
								
								<div class="row">
								<div class="col-sm-12">

			<table id="employee-grid"  style='display: block; overflow-x: scroll; white-space: nowrap;' class='table paging table-striped table-bordered ' class="display" width="100%">
					<thead>
						<tr>
							<th>Department</th>
							<th>Category</th>
							<th>Amount innvnvnvbnv</th>
						</tr>
					</thead>
			</table>
		</div></div>
 </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			</div></div></div></div>

							
							
</body>
  


    <script src="js/school1.js"></script>

</body>
<footer>
<center><h6>This page is designed by Mamgalmay Decoders</h6></center>
</footer>
</html>
