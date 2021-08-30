<?php
 include('db/connection.php');

 $id=$_GET['del'];
 $query = mysqli_query($conn,"delete  from advise where id='$id' ");
 if ($query) {
 	 echo "<script> alert('advise deleted !')</script> ";
  	   echo "<script >window.location='http://localhost:8081/Project-visionedu/advise.php' ;</script>";
 
 }else{
 	echo "Please Try again";
 }

?>