<?php 


if($_POST['login']){
	include('library.php');
	
		$catagory=$_POST['catagory'];
	    $date=$_POST['date'];
	    $note=$_POST['note'];
	
	 $query="INSERT INTO `patient_appointments`(`catagory`,`date`,`note`) VALUES('$catagory','$date','$note')";
	$data=mysqli_query($abhi,$query);
	if($data){
		 
		
		?>
		<script type="text/javascript">
		alert("Appointment Booked");
		window.location="patient-my-details.php";
	</script>
	<?php

	
		
		
		
	}
	else{
		echo(mysqli_error($abhi));
	}
	
}
	
	
	?>