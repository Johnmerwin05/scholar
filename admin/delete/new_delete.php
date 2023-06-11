<?php 


 $conn=mysqli_connect("localhost","root","","scholar_registration");

 $Id = $_GET['Id'];

 $query = mysqli_query($conn, "DELETE FROM scholar_registration WHERE Id = '$Id'");

 header('location: ../tables.php?=1');

?>