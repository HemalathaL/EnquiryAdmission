<?php
$ids= $_POST['ids'];
$sta=$_POST['status'];
 $conn=  mysqli_connect('localhost', 'root', '', 'iucadmin');
 $query="update register set action='$sta' where PhoneNo='$ids'";
 $check=mysqli_query($conn,$query);
 echo $check;
?>

