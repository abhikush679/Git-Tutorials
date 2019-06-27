<?php


if($_POST['login']){
	include('library.php');
	
		
		$username=$_POST['username'];
		$user_id=$_POST['user_id'];
	   $new_password=md5($_POST['new_password']);
		
	    $query="SELECT * FROM `doctor_register` WHERE `username`='$username'";
		$data=mysqli_query($abhi,$query);
		
		$row=mysqli_fetch_array($data);
		$num_rows=mysqli_num_rows($data);
		
		if($num_rows>0){
			
			
			if($row['user_id']==$user_id){
				
				$query="UPDATE `doctor_register` SET `password`='$new_password' WHERE `username`='$username' ";
	            $data=mysqli_query($abhi,$query);
				?>
				<script type="text/javascript">	
                             alert("Password Successfully Reset");
                            window.location="doctor-login.php";

</script>
			<?php	
	
	
			}
			else{
				?>
				
							<script type="text/javascript">	
                             alert("incorrect username/password");
                            window.location="doctor-forgot-password.php";

</script>
		<?php
								}
		}
		else{
		    ?>
							<script type="text/javascript">	
                             alert("incorrect username/password");
                            window.location="doctor-forgot-password.php";

</script>
	<?php
		}
		
	}

else{
	
	//header('location:index.php');
}
?>

