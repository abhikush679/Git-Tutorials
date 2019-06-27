<?php

session_start();

if($_POST['login']){
	include('library.php');
	
		
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		
	    $query="SELECT * FROM `patient_register` WHERE `username`='$username'";
		$data=mysqli_query($abhi,$query);
		
		$row=mysqli_fetch_array($data);
		$num_rows=mysqli_num_rows($data);
		
		if($num_rows>0){
			
			
			if($row['password']==$password){
				
				
				$_SESSION['email']=$row['email'];
				$_SESSION['user_id']=$row['user_id'];
				$_SESSION['fullname']=$row['fullname'];
				$_SESSION['username']=$row['username'];
				$_SESSION['image']=$row['image'];
				$_SESSION['father_name']=$row['father_name'];
				$_SESSION['mother_name']=$row['mother_name'];
				$_SESSION['dob']=$row['dob'];
				$_SESSION['mob_number']=$row['mob_number'];
				$_SESSION['alt_mob_number']=$row['alt_mob_number'];
				$_SESSION['address']=$row['address'];
				$_SESSION['age']=$row['age'];
				$_SESSION['gender']=$row['gender'];
				$_SESSION['blood_group']=$row['blood_group'];
				
				
				//echo"welcome ".$row['fullname'];
				
				header('location:patient-my-details.php');
			}
			else{
				?>
				
							<script type="text/javascript">	
                             alert("incorrect username/password");
                            window.location="patient-login.php";

</script>
		<?php
								}
		}
		else{
			?>
				
							<script type="text/javascript">	
                             alert("incorrect username/password");
                            window.location="patient-login.php";

</script>
		<?php
		}
		
	}

else{
	
	//header('location:index.php');
}
?>

