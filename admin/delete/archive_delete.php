<?php 


 $conn=mysqli_connect("localhost","root","","scholar_registration");

 $Id = $_GET['Id'];

 $query = mysqli_query($conn, "DELETE FROM archive WHERE Id = '$Id'");

 header('location: ../archive.php?=1');

?>
