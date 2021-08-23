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
    <title>Product List</title>
</head>

<body>

<div class="container">

    <div class="product">
            
        <form action="" method="POST">

            <div class="pro-head">
            <h1 class="lg-heading head_change">FORM OF PRODUCT</h1>
            </div><br><br>      
                    
                <div class="reg-group">
                    <label for="ID">ID:</label><br>
                    <input type="text" name="id" id="id" placeholder="Enter Product Id" class="pro_box" required><br>
                </div><br>
                    
                <div class="reg-group">
                    <label for="PName">PRODUCT NAME:</label><br>
                    <input type="text" name="pname" id="pname" placeholder="Enter Product Name" class="pro_box" required><br>
                </div><br>
                    
                <div class="reg-group">
                    <label for="Price">PRICE:</label><br>
                    <input type="text" name="price" id="Price" placeholder="Enter the Product Ammount" class="pro_box" required><br>
                </div><br>

                <div class="reg-group">
                    <label for="Description">DESCRIPTION:</label><br>
                    <input type="text" name="description" id="Description" placeholder="Describe Something About Product" class="pro_box" required><br>
                </div><br>
                    
                <div class="reg-group">
                    <label for="creat">CREATE TIME:</label><br>
                    <input type="text" name="creat" id="creat" placeholder="Create Time" class="pro_box" required><br>
                </div><br>

                <div class="reg-group">
                    <label for="update">UPDATE TIME:</label><br>
                    <input type="text" name="update" id="update" placeholder="Updated Time" class="pro_box" required><br>
                </div><br>

                <div class="reg-group">
                    <label for="add">USER NAME:</label><br>
                    <input type="text" name="add" id="add" placeholder="Enter The User Name" class="pro_box" required><br>
                </div><br>
   
                <div class="button-pro">
                    <button type="submit" name="save" class="btn btn-primary" target="_blank">ADD</button><br><br>
                </div>
                
        </form>
            
    </div>
        
</div>

</body>

</html>

<?php
	include 'connection.php';
	if(isset($_POST['save'])){
        $id=$_POST['id'];
		$name=$_POST['pname'];
		$price=$_POST['price'];
		$description=$_POST['description'];
		$created=$_POST['create'];
		$updated=$_POST['update'];
		$usrname=$_SESSION['add'];

		$query="insert into product(Id,pname,price,description,ctime,utime,uname) values('$id','$name','$price','$description','$created','$updated','$usrname')";

		$query=mysqli_query($conn,$query);

		if($query){
			?>
			<script>
				alert('Data inserted.');
			</script>
			<?php
		}else{
			?>
			<script>
				alert('Data not inserted.');
			</script>
			<?php

		}


		

	}
?>