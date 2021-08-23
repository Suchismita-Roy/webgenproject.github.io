<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4a5f59fc5b.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>

    <div class="in">

        <div class="Sign-in">

            <div class="Sign">
                
                <form action="" method="POST">
                    
                    <h1 class="lg-heading text-black head_change">Sign In</h1>
                    
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" id="Email" class="big_box">
                        <i class="fas fa-envelope seen"></i><br>
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" id="Paswrd" class="big_box">
                        <i class="fas fa-eye-slash pws seen" onclick="show()"></i>
                    </div>
                    <br>

                    <div class="button-mid">
                        <button type="submit" name="submit" class="btn btn-primary" target="_blank">SIGN IN</button><br><br>
                    </div>
                    
                    <div class="form-group">
                        <a href="forgetpass.php">Forgot Password?</a>
                    </div>
                    <br><br>
                    
                    <div class="form-group">
                        <a href="register.php" class="new-page" target="">Create a New Page</a>
                    </div>
                
                </form>
            
            </div>
        
        </div>
       
    </div>

    <script>

        function show(){
            var Paswrd = document.getElementById('Paswrd');
            var icon = document.querySelector('.pws');
            if (Paswrd.type === "password") {
                Paswrd.type = "text";
            }else{
                Paswrd.type = "password";
            }
        }

    </script>

</body>

</html>

<?php
	include 'connection.php';

	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$passwordd=$_POST['password'];

		$hashpassee=password_hash($passwordd,PASSWORD_BCRYPT);

		$sqlquery="select * from reg where email='$email'";
		$proquery=mysqli_query($conn,$sqlquery);
         

		$rowscount=mysqli_num_rows($proquery);

		if($rowscount){
            

		$fetchdata=mysqli_fetch_assoc($processquery);
			$dbpassee=$fetchdata['password'];
			$checkpo=password_verify($hashpassee,$dbpassee);


			$_SESSION['uname']=$fetchdata['name'];

				header('location:http://localhost/webgen/Dashboard.php');

	}

}

?>