<?php

		session_start();

if($_SESSION['user_id']){	


if($_POST['login']){
	include('library.php');
	
		$catagory=$_POST['catagory'];
	    $date=$_POST['date'];
	    $note=$_POST['note'];
		
	    $query="SELECT * FROM `doctor_register` WHERE `specialist`='$catagory'";
		$data=mysqli_query($abhi,$query);
		
		$row=mysqli_fetch_array($data);
		$num_rows=mysqli_num_rows($data);

if($num_rows>0){
			

			?>
			
		<!--	my main page-->
						
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Book Your Appointment</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="patient-book-appoint-2.css">
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
	<!--
	doctors
-->
<?php 
	
 
	$query="SELECT * FROM `doctor_register`";
	$data=mysqli_query($abhi,$query);

	?>
	
	<div class="container-fluid panell">
    	<div class="row">
								<?php
		                        while($row=mysqli_fetch_array($data)){
										if($row['specialist']==$catagory){	
								?>
				<div class="col-md-6">
						<div class="panel panel-danger">
								<div class="panel-heading text-center">
								<p style="font-family: Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif; font-size: 25px">Available Doctor</p>
								</div>
							
									<div class="panel-body text-center">
										<p  class="text-capitalize" style="font-size:20px"><strong><?php echo"Dr. ".$row['fullname'] ?></strong></p>
								</div>
								<ul class="list-group list-group-flush text-center text-capitalize">
							            <li class="list-group-item ">
										   <?php echo" <b>Doctor Code:</b> ".$row['user_id'] ?>
										</li>
										<li class="list-group-item">
												<?php echo" <b>Clinic / Hospital Name:</b> ".$row['clinic_name'] ?>
										</li>
										<li class="list-group-item">
												<?php echo"<b>Specialist In:</b> ".$row['specialist'] ?>
										</li>
										<li class="list-group-item">
										<?php echo" <b>Address:</b> ".$row['address'] ?>
										</li>
								</ul>
								<div class="panel-footer">
								<form action="patient-book-appoint-back-page.php" method="post" enctype="multipart/form-data">
								 
								 <div class="form-group">
								 
 <input type="hidden" name="catagory" value="<?php echo $catagory; ?>" >
  <input type="hidden" name="date" value="<?php echo $date; ?>">
  <input type="hidden" name="note" value="<?php echo $note; ?>">

     	  <input type="submit" name="login" class="btn btn-lg btn-block btn-danger" value="Confirm Appointment" />   
  </div>

								      </div>
								
						</div>
						
				</div>	
	<?php 
								}
							else{
								
							}
									}
							?>










</body>
</html>

			
	
			
			<?php	
			}
			else{
				?>
				
							<script type="text/javascript">	
                             alert("No Any Doctor Availble");
                           window.location="patient-book-appoint.php";

</script>
		<?php
								}
		}
else{
	
}
}
else{
	
}
	

?>
