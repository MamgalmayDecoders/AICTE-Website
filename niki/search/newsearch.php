<!DOCTYPE html>
<html>
<head>
<style>


#myInput {
  background-image:
  url('/img/search.png');

  background-position: 5px 10px;
  background-size:40px;
  background-repeat: no-repeat;
  width: 100%;
  box-sizing: border-box;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}



</style>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>main page</title>


<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="css/jquery.dataTables.min.css">

<style>
	

</style>





</head>

<body>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">AICTE survey</a> </div>
    
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
    <li><a href="school.php">School Level</a></li>
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


<div id="graph" style="margin-left: 14px;  margin-right: 15px; width:97.70%; margin-top:50px; display:block;">
    <table style="width:100;"><tr><td style="width:20%;">
    <!----- php search option form started from here -->
   <form action="" method="get">
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
							
							

                                           <label for="Enrollment Type">Enrollment Type</label>
                                            <select class="form-control" name="val2" id="val2">
											<option value="All">-----All-----</option>
                                                <option value="Rural/Urban" id="Rural/Urban">Rural/Urban</option>
                                                <option value="Open School Education" id="Open School Education">Open School Education</option>
                                                
                                                </select>
                                           
                                            <label for="state">Select State</label>
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
                                            </select>
							
							
                                                <label for="level">Minority</label>
<select class="form-control input-sm" name="val4" id="val4">
	<option selected="" value="no">-----No-----</option>
    <option value="SC">SC</option>
    <option value="ST">ST</option>
    </select>
                  <label for="level">Gender</label>
					<select class="form-control input-sm" name="val5" id="val5">
                    	<option disabled selected value="">   All </option>
                    <option value="Boys">Boys</option>
                    <option value="Girls">Girls</option>					
					</select>						
										<center><input type="submit" name="submit" value="send"></input>  </center>                              
							<!--Form group end-->
							</div>
							
							</form>	</td><td style="width:80%;">
                           <image src="img/school image/24.Enrolment in various types of schools for 2008-09.png" height="700px"></image>
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


<div class="col-sm-6"><div id="example_filter" class="dataTables_filter">
							<label>Search:<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Country...."title="Type in a name"></div>
							</div>



 <?php
						if(isset($_GET['submit']))
						{
							 $year = htmlentities($_GET['val1']);
   $state= htmlentities($_GET['val3']);
   $Etype= htmlentities($_GET['val2']);
   $minority= htmlentities($_GET['val4']);
   
							$servername='localhost';
							$dbuser='root';
							$dbpassword='';
							$database=$year;
							
$conn = mysqli_connect($servername, $dbuser, $dbpassword, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

}
switch ($Etype){
	case "Rural/Urban":
if($state=='each')
{
	$sql = "SELECT * FROM `dd` ";
}
else{

$sql = "SELECT * FROM `dd` WHERE `States/UTs`='$state' ";
}
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     echo "<table style='font-size:11px; display: block; overflow-x: scroll; white-space: nowrap;' class='table paging table-striped table-bordered ' id='myTable'>
<tr class='header'><th>States/UTs</th><th>Pre-Primary - Boys</th><th>Pre-Primary - Girls</th><th>Pre-Primary - Total</th>
	 <th>Class I - Boys</th><th>Class I - Girls</th><th>Class I - Total</th><th>Class II - Boys</th><th>Class II - Girls</th>
	 <th>Class II - Total</th><th>Class III - Boys</th><th>Class III - Girls</th><th>Class III - Total</th><th>Class IV - Boys</th>
	 <th>Class IV - Girls</th><th>Class IV - Total</th><th>Class V - Boys</th><th>Class V - Girls</th><th>Class V - Total</th>
	 <th>TOTAL I-V - Boys</th><th>TOTAL I-V - Girls</th><th>TOTAL I-V - Total</th><th>Class VI - Boys</th><th>Class VI - Girls</th>
	 <th>Class VI - Total</th><th>Class VII - Boys</th><th>Class VII - Girls</th><th>Class VII - Total</th><th>Class VIII - Boys</th>
	 <th>Class VIII - Girls</th><th>Class VIII - Total</th><th>TOTAL VI-VIII - Boys</th><th>TOTAL VI-VIII - Girls</th>
	 <th>TOTAL VI-VIII - Total</th><th>Class IX - Boys</th><th>Class IX - Girls</th><th>Class IX - Total</th><th>Class X - Boys</th>
	 <th>Class X - Girls</th><th>Class X - Total</th><th>TOTAL IX-X - Boys</th><th>TOTAL IX-X - Girls</th><th>TOTAL IX-X - Total</th>
	 <th>Class XI - Boys</th><th>Class XI - Girls</th><th>Class XI - Total</th><th>Class XII - Boys</th><th>Class XII - Girls</th>
	 <th>Class XII - Total</th><th>TOTAL XI-XII - Boys	TOTAL</th><th>XI-XII - Girls</th><th>TOTAL XI-XII - Total</th>
	 <th>TOTAL I-XII - Boys</th><th>TOTAL I-XII - Girls</th><th>TOTAL I-XII - Total</th>
	 <th>Total Enrol. classes Pre-Primary-classXII - Boys</th><th>Total Enrol. classes Pre-Primary-classXII - Girls</th>
	 <th>Total Enrol.classes Pre-Primary-classXII-Total</th></tr>"
;
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["States/UTs"]. "</td><td>" . $row["Pre-Primary - Boys"]. "</td><td>" . $row["Pre-Primary - Girls"]. "</td>
		 <td>" . $row["Pre-Primary - Total"]. "</td><td>" . $row["Class I - Boys"]. "</td><td>" . $row["Class I - Girls"]. "</td>
		 <td>" . $row["Class I - Total"]. "</td><td>" . $row["Class II - Boys"]. "</td><td>" . $row["Class II - Girls"]. "</td>
		 <td>" . $row["Class II - Total"]. "</td><td>" . $row["Class III - Boys"]. "</td><td>" . $row["Class III - Girls"]. "</td>
		 <td>" . $row["Class III - Total"]. "</td><td>" . $row["Class IV - Boys"]. "</td><td>" . $row["Class IV - Girls"]. "</td>
		 <td>" . $row["Class IV - Total"]. "</td><td>" . $row["Class V - Boys"]. "</td><td>" . $row["Class V - Girls"]. "</td>
		 <td>" . $row["Class V - Total"]. "</td><td>" . $row["TOTAL I-V - Boys"]. "</td><td>" . $row["TOTAL I-V - Girls"]. "</td>
		 <td>" . $row["TOTAL I-V - Total"]. "</td><td>" . $row["Class VI - Boys"]. "</td><td>" . $row["Class VI - Girls"]. "</td>
		 <td>" . $row["Class VI - Total"]. "</td><td>" . $row["Class VII - Boys"]. "</td><td>" . $row["Class VII - Girls"]. "</td>
		 <td>" . $row["Class VII - Total"]. "</td><td>" . $row["Class VIII - Boys"]. "</td><td>" . $row["Class VIII - Girls"]. "</td>
		 <td>" . $row["Class VIII - Total"]. "</td><td>" . $row["TOTAL VI-VIII - Boys"]. "</td><td>" . $row["TOTAL VI-VIII - Girls"]. "</td>
		 <td>" . $row["TOTAL VI-VIII - Total"]. "</td><td>" . $row["Class IX - Boys"]. "</td><td>" . $row["Class IX - Girls"]. "</td>
		 <td>" . $row["Class IX - Total"]. "</td><td>" . $row["Class X - Boys"]. "</td><td>" . $row["Class X - Girls"]. "</td>
		 <td>". $row["Class X - Total"]. "</td><td>". $row["TOTAL IX-X - Boys"]. "</td><td>" . $row["TOTAL IX-X - Girls"]. "</td>
		 <td>" . $row["TOTAL IX-X - Total"]. "</td><td>" . $row["Class XI - Boys"]. "</td><td>". $row["Class XI - Girls"]. "</td>
		 <td>" . $row["Class XI - Total"]. "</td><td>". $row["Class XII - Boys"]. "</td><td>". $row["Class XII - Girls"]. "</td>
		 <td>". $row["Class XII - Total"]. "</td><td>" . $row["TOTAL XI-XII - Boys"]. "</td><td>". $row["TOTAL XI-XII - Girls"]. "</td>
		 <td>" . $row["TOTAL XI-XII - Total"]. "</td><td>" . $row["TOTAL I-XII - Boys"]. "</td><td>" . $row["TOTAL I-XII - Girls"]. "</td>
		 <td>" . $row["TOTAL I-XII - Total"]. "</td><td>" . $row["Total Enrol. classes Pre-Primary-classXII - Boys"]. "</td>
		 <td>" . $row["Total Enrol. classes Pre-Primary-classXII - Girls"]. "</td>
		 <td>" . $row["Total Enrol.classes Pre-Primary-classXII-Total"]. "</td>
		 </tr>" ;
     }   echo "</table>";
} else {
        echo "0 results";}
	 break;
	 
	 case "All":
	 if($state=='each')
{
	$sql = "SELECT * FROM `d` ";
}
else{

$sql = "SELECT * FROM `d` WHERE `States/UTs`='$state' ";
}
$result = $conn->query($sql);
	 if ($result->num_rows > 0) {
     echo "<table style='font-size:11px; display: block; overflow-x: scroll; white-space: nowrap;' class='table paging table-striped table-bordered ' id='myTable'>
<tr class='header'><th>States/Union Territories</th>
	 <th>Intermediate/Senior Secondary Schools - Boys</th><th>Intermediate/Senior Secondary Schools - Girls</th>
	 <th>Intermediate/Senior Secondary Schools - Total</th><th>High/Secondary Schools - Boys</th><th>High/Secondary Schools - Girls</th>
	 <th>High/Secondary Schools - Total</th><th>Upper Primary Schools - Boys</th><th>Upper Primary Schools - Girls</th>
	 <th>Upper Primary Schools - Total</th><th>Primary Schools - Boys</th><th>Primary Schools - Girls</th><th>Primary Schools - Total</th>
	 <th>Pre-Primary Schools - Boys</th><th>Pre-Primary Schools - Girls</th><th>Pre-Primary Schools - Total</th>
	 </tr>"

;
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["States/Union Territories"]. "</td><td>" . $row["Intermediate/Senior Secondary Schools - Boys"]. "</td>
		 <td>" . $row["Intermediate/Senior Secondary Schools - Girls"]. "</td><td>" . $row["Intermediate/Senior Secondary Schools - Total"]. "</td>
		 <td>" . $row["High/Secondary Schools - Boys"]. "</td><td>" . $row["High/Secondary Schools - Girls"]. "</td>
		 <td>" . $row["High/Secondary Schools - Total"]. "</td><td>" . $row["Upper Primary Schools - Boys"]. "</td>
		 <td>" . $row["Upper Primary Schools - Girls"]. "</td><td>" . $row["Upper Primary Schools - Total"]. "</td>
		 <td>" . $row["Primary Schools - Boys"]. "</td><td>" . $row["Primary Schools - Girls"]. "</td>
		 <td>" . $row["Primary Schools - Total"]. "</td><td>" . $row["Pre-Primary Schools - Boys"]. "</td>
		 <td>" . $row["Pre-Primary Schools - Girls"]. "</td><td>" . $row["Pre-Primary Schools - Total"]. "</td>
		 </tr>" ;
     }   echo "</table>";
} else {
echo "0 results";	}
break;	 


case "Open School Education":
 if($state=='each')
{
	$sql = "SELECT * FROM `ddd` ";
}
else{

$sql = "SELECT * FROM `ddd` WHERE `States/UTs`='$state' ";
}
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     echo "<table style='font-size:11px; display: block; overflow-x: scroll; white-space: nowrap;' class='table paging table-striped table-bordered ' id='myTable'>
<tr class='header'><th>States / Union Territories</th><th>All Categories - Secondary - Boys</th><th>All Categories - Secondary - Girls</th>
	 <th>All Categories - Secondary - Total</th><th>All Categories - Senior Secondary - Boys</th><th>All Categories - Senior Secondary - Girls</th>
	 <th>All Categories - Senior Secondary - Total</th><th>All Categories - Vocational - Boys</th><th>All Categories - Vocational - Girls</th>
	 <th>All Categories - Vocational - Total</th><th>All Categories - Total - Boys</th><th>All Categories - Total - Girls</th>
	 <th>All Categories - Total - Total</th><th>Scheduled Caste - Secondary - Boys</th><th>Scheduled Caste - Secondary - Girls</th>
	 <th>Scheduled Caste - Secondary - Total</th><th>Scheduled Caste - Senior Secondary - Boys</th><th>Scheduled Caste - Senior Secondary - Girls</th>
	 <th>Scheduled Caste - Senior Secondary - Total</th><th>Scheduled Caste - Vocational - Boys</th><th>Scheduled Caste - Vocational - Girls</th>
	 <th>Scheduled Caste - Vocational - Total</th><th>Scheduled Caste - Total - Boys</th><th>Scheduled Caste - Total - Girls</th>
	 <th>Scheduled Caste - Total - Total</th><th>Scheduled Tribe - Secondary - Boys</th><th>Scheduled Tribe - Secondary - Girls</th>
	 <th>Scheduled Tribe - Secondary - Total</th><th>Scheduled Tribe - Senior Secondary - Boys</th><th>Scheduled Tribe - Senior Secondary - Girls</th>
	 <th>Scheduled Tribe - Senior Secondary - Total</th><th>Scheduled Tribe - Vocational - Boys</th><th>Scheduled Tribe - Vocational - Girls</th>
	 <th>Scheduled Tribe - Vocational - Total</th><th>Scheduled Tribe - Total - Boys</th><th>Scheduled Tribe - Total - Girls</th>
	 <th>Scheduled Tribe - Total - Total</th>
	 </tr>";
	 
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["States / Union Territories"]. "</td><td>" . $row["All Categories - Secondary - Boys"]. "</td>
		 <td>" . $row["All Categories - Secondary - Girls"]. "</td><td>". $row["All Categories - Secondary - Total"]. "</td>
		 <td>" . $row["All Categories - Senior Secondary - Boys"]. "</td><td>" . $row["All Categories - Senior Secondary - Girls"]. "</td>
		 <td>" . $row["All Categories - Senior Secondary - Total"]. "</td><td>". $row["All Categories - Vocational - Boys"]. "</td>
		 <td>" . $row["All Categories - Vocational - Girls"]. "</td><td>" . $row["All Categories - Vocational - Total"]. "</td>
		 <td>" . $row["All Categories - Total - Boys"]. "</td><td>". $row["All Categories - Total - Girls"]. "</td>
		 <td>" . $row["All Categories - Total - Total"]. "</td><td>" . $row["Scheduled Caste - Secondary - Boys"]. "</td>
		 <td>" . $row["Scheduled Caste - Secondary - Girls"]. "</td><td>". $row["Scheduled Caste - Secondary - Total"]. "</td>
		 <td>" . $row["Scheduled Caste - Senior Secondary - Boys"]. "</td><td>" . $row["Scheduled Caste - Senior Secondary - Girls"]. "</td>
		 <td>" . $row["Scheduled Caste - Senior Secondary - Total"]. "</td><td>". $row["Scheduled Caste - Vocational - Boys"]. "</td>
		 <td>" . $row["Scheduled Caste - Vocational - Girls"]. "</td><td>" . $row["Scheduled Caste - Vocational - Total"]. "</td>
		 <td>" . $row["Scheduled Caste - Total - Boys"]. "</td><td>". $row["Scheduled Caste - Total - Girls"]. "</td>
		 <td>" . $row["Scheduled Caste - Total - Total"]. "</td><td>" . $row["Scheduled Tribe - Secondary - Boys"]. "</td>
		 <td>" . $row["Scheduled Tribe - Secondary - Girls"]. "</td><td>". $row["Scheduled Tribe - Secondary - Total"]. "</td>
		 <td>" . $row["Scheduled Tribe - Senior Secondary - Boys"]. "</td><td>" . $row["Scheduled Tribe - Senior Secondary - Girls"]. "</td>
		 <td>" . $row["Scheduled Tribe - Senior Secondary - Total"]. "</td><td>". $row["Scheduled Tribe - Vocational - Boys"]. "</td>
		 <td>" . $row["Scheduled Tribe - Vocational - Girls"]. "</td>
		 <td>" . $row["Scheduled Tribe - Vocational - Total"]. "</td><td>" . $row["Scheduled Tribe - Total - Boys"]. "</td>
		 <td>" . $row["Scheduled Tribe - Total - Girls"]. "</td>
		 <td>". $row["Scheduled Tribe - Total - Total"]. "</td>
		 </tr>";
     }   echo "</table>";
} else {
     echo "0 results";
}





break;

}
	 $conn->close();
						
					
						 ?>
</div></div>
						<!--<div class="row">
						<div class="col-sm-6">
						<div class="dataTables_info" id="dataTables1_info" role="status" aria-live="polite"></div>
						</div>
						<div class="col-sm-6">
						<div class="dataTables_paginate paging_simple_numbers" id="dataTables1_paginate">
						<ul class="pagination">
						<li class="paginate_button previous disabled" aria-controls="dataTables1" tabindex="0" id="dataTables1_previous">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">Previous</a>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">1</a>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">2</a>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">3</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">4</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">5</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">6</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">7</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">8</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">9</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">10</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">11</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">12</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">13</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">14</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">15</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">16</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">17</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">18</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">19</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">20</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">21</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">22</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">23</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">24</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">25</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">26</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">27</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">28</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">29</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">30</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">31</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">32</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">33</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">34</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">35</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">36</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">37</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">38</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">39</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">40</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">41</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">42</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">43</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">44</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">45</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">46</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">47</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">48</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">49</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">50</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">51</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">52</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">53</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">54</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">55</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">56</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">57</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">58</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">59</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">60</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">61</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">62</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">63</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">64</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">65</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">66</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">67</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">68</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">69</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">70</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">71</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">72</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">73</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">74</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">75</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">76</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">77</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">78</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">79</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">80</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">81</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">82</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">83</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">84</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">85</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">86</a>
						</li>
						</li>
						<li class="paginate_button active" aria-controls="dataTables1" tabindex="0">
						<a href="http://localhost/final/final/newsearch.php?val1=2007-08&amp;val2=Rural%2FUrban&amp;val3=each&amp;val4=no&amp;submit=#">87</a>
						</li>
						</ul>
						</div></div>-->
						
						

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







<script>

function myFunction() {
var input, filter, table, tr, td, i;
input=document.getElementById("myInput");

filter=input.value.toUpperCase();

table=document.getElementById("myTable");

tr=table.getElementsByTagName("tr");

for (i = 0; i < tr.length; i++) {
td = tr[i].getElementsByTagName("td")[0];

 if (td) {
   if (td.innerHTML.toUpperCase()
   .indexOf(filter) > -1) {

     tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";

      }
    }
  }
}
$(document).ready(function() {
    $('#myinput').DataTable( {
        "pagingType": "full_numbers"
    } );
} );

</script>
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="js/raphael-min.js" type="text/javascript"></script>
<script src="js/morris.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/index.js"></script>
<script src="js/bootstrap-dropdownhover.js"></script>
<script src="js/bootstrap-dropdownhover.min.js"></script>
</body>
</html>