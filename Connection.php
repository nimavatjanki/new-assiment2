<?php

   session_start();
   $mysqli=new mysqli('localhost','root','','as-2')or die(mysqli_error($mysqli));
   $update=false;
   $id=0;
   $name='';
   $email='';
   $con='';
   $date='';
   if(isset($_POST['Insert'])){
	$name=$_POST["nam"];
	$email=$_POST["email"];
	$con=$_POST["con"];
	$date=$_POST["date"];
	
	$mysqli->query("INSERT INTO crud(r_name,r_email,r_contact,r_date)VALUES('$name','$email','$con','$date')")OR
	die($mysqli->error);
	$_SESSION['message']="Record has been Inserted";
   $_SESSION['msg_type']="success";
   header("location:Assignment2.php");
   }
   if(isset($_GET['delete']))
   {
	   $id=$_GET['delete'];
	   $mysqli->query("DELETE FROM crud WHERE r_id=$id")or die($mysqli->error());
	   $_SESSION['message']="Record has been deleted";
   $_SESSION['msg_type']="danger";
   header("location:Assignment2.php");
   }
  
   if(isset($_POST['update']))
   {
	    $id=$_POST['id'];
	   $name=$_POST['nam'];
	   $email=$_POST['email'];
	   $con=$_POST['con'];
	   $date=$_POST['date'];
	   $mysqli->query("UPDATE crud SET r_name='$name',r_email='$email',r_contact='$con',r_date='$date' WHERE r_id=$id")or die($mysqli->error());
       $_SESSION['message']="Record has been updated!";
       $_SESSION['msg_type']="warning";
      header("location:Assignment2.php");
   }
   ?>