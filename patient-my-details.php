<?php 
session_start();

if($_SESSION['user_id']){
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Patient's Details</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="patient-my-details.css">
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
		<li><a href="patient-book-appoint.php">Book Appointment</a></li>
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
	
   
   <div class="container-fluid info">
	   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
        <div class="panel">
            <div class="panel-heading ">
             <div class="row">
             <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				 <h1 class="panel-title"><b><?php echo $_SESSION['fullname'];?></b>  </h1>
              </div>
                 	  
              </div>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4 col-lg-4 " align="center"> <img src="uploads/<?php echo $_SESSION['image']; ?>" class="img-circle img-responsive"> <span class="pull-right">  <a href="edit.html" title="Edit Profile Photo" data-toggle="tooltip" type="button" class="btn btn-xs btn-danger edit">edit</a></span> </div>
                
                <div class=" col-md-8 col-lg-8 "> 
                
                  <table class="table">
                    <tbody>
                      <tr>
                        <td><b>Father's Name:</b></td>
                        <td class="text-capitalize"> <?php echo $_SESSION['father_name']; ?> </td>
                      </tr>
                        <tr>
                        <td><b>Mother's Name:</b></td>
                        <td class="text-capitalize"> <?php echo $_SESSION['mother_name']; ?> </td>
                      </tr>
                      <tr>
                        <td><b>E-mail:</b></td>
                        <td> <?php echo $_SESSION['email']; ?> </td>
                      </tr>
                       <tr>
                        <td><b>Age:</b></td>
                        <td> <?php echo $_SESSION['age']; ?>  </td>
                      </tr>
                      <tr>
                        <td><b>Date Of Birth:</b></td>
                        <td>  <?php echo $_SESSION['dob']; ?> </td>
						</tr>
                        <tr>
                        <td><b>Gender:</b></td>
                        <td> <?php echo $_SESSION['gender']; ?>  </td>
                      </tr>
                        <tr>
                        <td><b>Address:</b></td>
                        <td> <?php echo $_SESSION['address']; ?>  </td>
                      </tr>
                      <tr>
                        <td><b>Blood Group:</b></td>
                        <td> <?php echo $_SESSION['blood_group']; ?>  </td>
                      </tr>
                       <tr>
                        <td><b>Contact Number:</b></td>
                        <td> <?php echo $_SESSION['mob_number']; ?>  <br><br> <?php echo $_SESSION['alt_mob_number']; ?>
                        </td>
                           
                      </tr>
                     
                    </tbody>
					</table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
               
        
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






