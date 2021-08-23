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
<div class="pro-tab">
	<?php
		include 'connection.php';
		$pp=$_SESSION['searchss'];
		$query="select * from product where pname='$pp'";
		$proquery=mysqli_query($conn,$query);
		while ($re=mysqli_fetch_assoc($proquery) ){
			
		

	?>
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
        <tr>
        	<td> <?php echo $re['Id']; ?> </td>
        	<td> <?php echo $re['pname']; ?> </td>
        	<td> <?php echo $re['price']; ?> </td>
        	<td> <?php echo $re['description']; ?> </td>
        	<td> <?php echo $re['ctime']; ?> </td>
        	<td> <?php echo $re['utime']; ?> </td>
        	<td> <?php echo $re['uname']; ?> </td>
        </tr>
    </table>
    <?php
}

    ?>
</div>

</body>
</html>