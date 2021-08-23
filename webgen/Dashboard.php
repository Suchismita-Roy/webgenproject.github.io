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
    <title>Dashboard</title>
</head>

<body>

<div class="dash-head">

    <div class="float-right">
        <div class="search-box">
            <form action="" method="POST">
            <input type="text" class="search-txt" name="search" placeholder="Type Of Search">
            <div class="search-btn">
                

</div>

            
        </div>
    </div>

</div>

<?php
		if(isset($_POST['searchpro'])){
			$_SESSION['searchss']=$_POST['search'];
			

			header('location:search.php');

			

		}
	?>

<div class="add">
<a href="product.php" type="submit" name="submit" class="btn add-new" target="">ADD NEW PRODUCT   <i class="fas fa-plus"></i></a>
    
</div>

<div class="pro-tab">
    <table>
        <div class="t-data">
		<th>
			<td class="tb-data">ID</td>
			<td class="tb-data">NAME</td>
			<td class="tb-data">PRICE</td>
			<td class="tb-data">DESCRIPTION</td>
			<td class="tb-data">CREATE TIME</td>
			<td class="tb-data">UPDATE TIME</td>
			<td class="tb-data">USER NAME</td>
		</th>
        </div>
    </table>
</div>

    

<?php
			include 'connection.php';

			$query="select * from product";
			$proquery=mysqli_query($conn,$query);

			while($fetchdata=mysqli_fetch_assoc($proquery)){
			
			


		?>

<div class="pro-tab">
		<tr>
			<td class="tb-data"><?php echo $fetchdata['Id']; ?></td>
			<td class="tb-data"><?php echo $fetchdata['pname']; ?></td>
			<td class="tb-data"><?php echo $fetchdata['price']; ?></td>
			<td class="tb-data"><?php echo $fetchdata['description']; ?></td>
			<td class="tb-data"><?php echo $fetchdata['ctime']; ?></td>
			<td class="tb-data"><?php echo $fetchdata['utime']; ?></td>
			<td class="tb-data"><?php echo $fetchdata['uname']; ?></td>
			
			<td class="tb-data"><a href="update.php?idu=<?php echo $fetchdata['Id']; ?>">Update</a></td>
			<td class="tb-data"><a href="delete.php?idd=<?php echo $fetchdata['Id']; ?>">Delete</a></td>

            </div>

			 <?php
			}

			?>

		</body>
		</html>