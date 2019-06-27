<?php 
session_start();

if($_SESSION['user_id']){
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Book Your Appointment</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="patient-book-appoint.css">
<script src="js/ajaxjquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.js"></script>
</head>

<body>

<div class="container-fluid top">
<div class="col-md-8">
	<img src="images/thefamilydoctor-logo6.png" class="img-responsive banner"width="600px">
</div>			
</div>
<?php
include('library.php');
?>


	<div class="container-fluid menu">
		<div class="row">
			<div class="col-md-8 col-lg-8">
				<nav class="navbar">
					<div class="navbar-header">
					<button type="button" class="navbar-toggle btn"
	 data-toggle="collapse" data-target="#abhi">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	</button>
						
					</div>
						<div class="collapse navbar-collapse" id="abhi" >
	<ul class="nav navbar-tabs navbar-nav pull-left" id="abk">
		<li><a class="active" href="patient-book-appoint.php">Book Appointment</a></li>
 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="" >Appointments
	    <b class="caret"></b>
	    </a>
	    <ul class="dropdown-menu text-center">
	   
	    <li><a href="patient-view-appoint.php">View Appointments</a>
	    	<li><a href="">Cancel Appointments</a>
	    	
	    </ul>
	    </li>
                    <li><a href="" >Search Doctor</a></li>
                       <li><a href="" >Donate Organ</a></li>
		<li><a href="" >Search Organ</a></li>
                           
	</ul>
					</div>
					
				</nav>
			</div>
			<div class="col-md-4 col-lg-4">
				<nav class="navbar">
					<div class="navbar-header">
			</div>
			<div id="abhi" >
	<ul class="nav navbar-tabs navbar-nav navbar-right navbar-left" id="abk">
       	
			 <li><a class="active text-capitalize" href="patient-my-details.php" ><?php   echo"Hello! ".$_SESSION['fullname'];  ?></a></li>
			     <li><a href="patient-logout.php" >Log Out</a></li>
			
                          
	</ul>
					</div>
				</nav>
		</div>
	</div>
	</div>
	

<div class="container-fluid logg">
    	<div class="row">
	 <div class="col-md-6 col-md-offset-3">
            <div class="login-box log">
                   
                   
                    <form action="patient-book-appoint-2.php" method="post">
                        <legend class="text-center">Book Appointment</legend>
                        <div class="form-group">
                           <label>Appointment Id:-</label>
                            <input tabindex="1" name="appointment_id" placeholder="Not to be Filled by Patient" readonly type="number" class="form-control" />
                        </div>
                        
                        
                        
                        <div class="form-group">
                        <label>Catagory:-</label>
                        <select class="form-control" tabindex="2" name="catagory" required >
     <option value="" disabled selected>Select Here</option>
      <option value="Heart">Heart</option>
      <option value="Stomach">Stomach</option>
        <option value="Legs">Legs</option>
          <option value="Hands">Hands</option>
            <option value="Liver">Liver</option>
	 <option value="Fingers">Fingers</option>
  </select>
                       </div>
                        
                        
                        <div class="form-group">
                        <label>Date Of Appointment:-</label>
	 <input name="date" type="date" class="form-control" tabindex="3" required="">	
	</div>
                       
                       <div class="form-group">
                       <label>Note:-</label>                     
    <textarea class="form-control" name="note" tabindex="4"></textarea>
</div>
                       
                        
                        <div class="form-group">
                            <input type="submit" tabindex="5" name="login" class="btn btn-default btn-login-submit btn-block" value="Search" />
                        </div> 
                        </form>
                
            </div>
        </div>
	
		</div>
	</div>


</body>
</html>


<?php
}
else{
	header('location:patient-login.php');
}
?>

