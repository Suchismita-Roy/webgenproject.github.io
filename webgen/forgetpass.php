<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="text" name="eemm">
	<input type="submit" name="submit">

</body>
</html>
<?php

	if(isset($_POST['submit'])){
		$eemm=$_POST['eemm'];
		$query="select * from reg where email='$eemm'";
		header('location:cngpass.php');
	}
	
?>