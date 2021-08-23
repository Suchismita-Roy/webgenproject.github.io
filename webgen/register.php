<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4a5f59fc5b.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>

<body>
      
    <div class="in">

        <div class="reg-main">

            <div class="register">
            
                <form action="" method="POST">
                    
                    <h1 class="lg-heading text-black head_change">Sign Up</h1>
                    
                    <div class="reg-group">
                        <label for="FName">Full Name:</label><br>
                        <input type="text" name="FName" id="FName" placeholder="Enter Your Full Name" class="big_box" required><br>
                    </div><br>
                    
                    <div class="reg-group">
                        <label for="Email">Email:</label><br>
                        <input type="email" name="mail" id="Email" placeholder="Enter A Valid Email ID" class="big_box" required><br>
                       </div><br>
                    
                       <div class="reg-group">
                        <label for="Phone">Phone:</label><br>
                        <input type="text" name="no" id="Phone" placeholder="Enter Your Phone Number" class="big_box" required><br>
                    </div><br>
    
                    <div class="reg-group">
                        <label for="Password">Password:</label><br>
                        <input type="" name="Password" id="Password" placeholder="Enter Your Password" class="big_box" required><br>
                    </div><br>
                    
                    <div class="reg-group">
                        <label for="Password">Confirm Password:</label><br>
                        <input type="password" name="Password" id="Password" placeholder="Confirm Your Password" class="big_box" required><br>
                    </div><br>
                    
                    <div class="button-mid">
                        <button type="submit" name="save" class="btn btn-primary" target="_blank">Sign Up</button><br><br>
                    </div>
                
                </form>
            
            </div>
        
        </div>

    </div>

</body>

</html>

<?php

    include 'Connection.php';

    if(isset($_POST['save'])){
		$FName=$_POST['FName'];
		$Email=$_POST['mail'];
		$Phone=$_POST['no'];
		$Password=$_POST['Password'];
		$CPassword=$_POST['CPassword'];


		$Hashp=password_hash($Password,PASSWORD_BCRYPT);
		$Hashcp=password_hash($CPassword,PASSWORD_BCRYPT);

		$sqlquery="select * from reg where email='$Email'";
		$checkq=mysqli_query($conn,$sqlquery);

		$rowscount=mysqli_num_rows($checkq);
		if($rowscount>0){
			?>
			<script>
				alert('Email already Registered.');
			</script>
			<?php
		}else{
			$insertq="insert into reg(name,email,phone,password,cpass) values('$FName','$Email','$Phone','$Hashp','$Hashcp')";
			$proq=mysqli_query($conn,$insertq);
			if($proq){
				?>

				<script>
				alert('Data inserted successfully.');
			</script>
			<?php
			}else{
				?>
				<script>
				alert('Data is not inserted.');
			</script>
			<?php

			}
		}
	}

?>