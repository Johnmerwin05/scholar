<?php 
$conn=mysqli_connect("localhost","root","","scholar_registration");

$query="SELECT email from usertable";  
$connect=mysqli_query($conn,$query);  
$num=mysqli_num_rows($connect);
                                
                                                    
if ($num>0) {  
while($data=mysqli_fetch_assoc($connect)){

   echo $data['email'];

}}



?>