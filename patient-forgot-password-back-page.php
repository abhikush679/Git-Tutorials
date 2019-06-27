<?php


if($_POST['login']){
	include('library.php');
	
		
		$username=$_POST['username'];
		$dob=$_POST['dob'];
	   $new_password=md5($_POST['new_password']);
		
	    $query="SELECT * FROM `patient_register` WHERE `username`='$username'";
		$data=mysqli_query($abhi,$query);
		
		$row=mysqli_fetch_array($data);
		$num_rows=mysqli_num_rows($data);
		
		if($num_rows>0){
			
			
			if($row['dob']==$dob){
				
				$query="UPDATE `patient_register` SET `password`='$new_password' WHERE `username`='$username' ";
	            $data=mysqli_query($abhi,$query);
				?>
				<script type="text/javascript">	
                             alert("Password Successfully Reset");
                            window.location="patient-login.php";

</script>
			<?php	
	
			}
			else{
				?>
				
							<script type="text/javascript">	
                             alert("incorrect username/password");
                            window.location="patient-forgot-password.php";

</script>
		<?php
								}
		}
		else{
		    ?>
							<script type="text/javascript">	
                             alert("incorrect username/password");
                            window.location="patient-forgot-password.php";

</script>
	<?php
		}
		
	}

else{
	
	//header('location:index.php');
}
?>

