<?php
	session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4a5f59fc5b.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>


	<?php
	include 'connection.php';
	

			$id=$_GET['idu'];
				
			
			$selquery="select * from product where Id='$id'";
			$proquery=mysqli_query($conn,$selquery);

			$result=mysqli_fetch_assoc($proquery);
				
			

	if(isset($_POST['submit'])){
		
		$price=$_POST['price'];
		$description=$_POST['description'];

		
		$updated=date("F j, Y, g:i a");
		
		$uquery="update product set price='$price',description='$description',utime='$updated'
		";

		$processupdatequery=mysqli_query($conn,$uquery);

		if($processupdatequery){
			header('location:Dashboard.php');
			?>
			<script>
				alert('one row updated');
			</script>
			<?php
		}else{
			header('location:update.php');
				?>
			<script>
				alert(' row not updated');
			</script>
			<?php

		}

		
			
		
	}
		

?>

<body>

	<div class="container">

    <div class="product">


<form action="" method="POST">

            <div class="pro-head">
            <h1 class="lg-heading head_change">UPDATE PRODUCT DETAILS</h1>
            </div><br><br>      
                    
                
                    
                <div class="reg-group">
                    <label for="Price">PRICE:</label><br>
                    <input type="text" name="price" id="Price" placeholder="Enter the Product Ammount" class="pro_box" value="<?php echo $result['price']; ?>" required><br>
                </div><br>

                <div class="reg-group">
                    <label for="Description">DESCRIPTION:</label><br>
                    <input type="text" name="description" id="Description" placeholder="Describe Something About Product" class="pro_box" value="<?php echo $result['description']; ?>" required><br>
                </div><br>

                <div class="reg-group">
                    <label for="update">UPDATE TIME:</label><br>
                    <input type="text" name="update" id="update"  placeholder="Updated Time" value="<?php echo $result['utime']; ?>" class="pro_box" required><br>
                </div><br>
   
                <div class="button-pro">
                    <button type="submit" name="submit" class="btn btn-primary" target="_blank">ADD</button><br><br>
                </div>
                
        </form>

    </div>

</div>
	
</body>
</html>