<?php
 $conn=  mysqli_connect('localhost', 'root','','iucadmin');
 if($conn)
 {
      $name=$_POST['Name'];
      $mailid=$_POST['Email'];
      $phoneno=$_POST['Number'];
      $course=$_POST['Course'];
      $comments=$_POST['subject'];
      $action='Called';
      $query="INSERT INTO `register`(`Name`, `Mailid`, `PhoneNo`, `Course`, `Comments`,`action`) VALUES ('$name','$mailid','$phoneno','$course','$comments','$action')";
      if(mysqli_query($conn, $query))
      {
            echo "<script type='text/javascript'>alert('Data Inserted!!');location='reg.php'; </script>";
      }
      else
      {
           echo "<script type='text/javascript'>alert('Data Not Inserted!!'); location='reg.php';</script>";
      }
 }
 else 
 {
     echo 'Database Not Connectd';
 }
    
?>
