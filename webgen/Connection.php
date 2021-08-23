<?php
$servername="localhost";
$username="root";
$password="";
$database="registration";

$conn=mysqli_connect($servername,$username,$password,$database);

if ($conn){
    ?>
    <!-- <script>
        alert('Connection is Succesfully Done.');
    </script> -->
    <?php
}else{
  ?>
    <script>
        alert('Connection is Failed.');
    </script>
    <?php
}
?>