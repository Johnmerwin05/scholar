<?php 


 $conn=mysqli_connect("localhost","root","","scholar_registration");

 $id = $_GET['id'];

 $query = mysqli_query($conn, "DELETE FROM admins WHERE id = '$id'");

 header('location: ../admins.php?=1');

?>
