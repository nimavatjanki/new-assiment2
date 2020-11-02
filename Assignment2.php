
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD web Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="jquery-3.5.1.min.js">
</script>
</head>
<body>
   <?php require_once'Connection.php'; $id=0;
    if(isset($_GET['edit']))
   {
	 $id=$_GET['edit'];
	 $update=true;
	 $result=$mysqli->query("SELECT * FROM crud  WHERE r_id='$id'")or die($mysqli->error());
    if(count($result)==1)
   {
	   $row=$result->fetch_array();
	   $name=$row['r_name'];
	   $email=$row['r_email'];
	   $con=$row['r_contact'];
	   $date=$row['r_date'];
	   } }
  ?> 
  <div class="container  text-info p-1 my-1 " align="center">
  <h3>CRUD Web Application </h3>
  </div>
  <div class="row justify-content-center" >
 
  <form  method="POST" action="Connection.php" class="table-striped table-warning table-bordered" >
   
  <div>

<div class="form-group">
      <input type="text" class="form-control" id="nam" placeholder="Enter Name" name="nam" value="<?php echo $name;?>"required>
</div>
<div class="form-group">
	<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email;?>"required>
</div>
<div class="form-group">
	  <input type="text" class="form-control" id="con" placeholder="Enter contact" name="con" value="<?php echo $con;?>"required>
</div>
<div class="form-group">
      <input type="date" class="form-control" id="date" placeholder="Enter Date" name="date" value="<?php echo $date;?>"required>
	   <input type="hidden" name="id" value="<?php echo $id;?>">
</div>

<div class="form-group" colspan="1" align="center">
<?php if ($update == true){ ?>
	<button  type="submit" name="update" class=" btn btn-primary text-white" >update</button>
<?php }else{ ?>
	<button type="submit" class=" btn btn-danger text-white" name="Insert" >Insert</button>
	
<?php } ?>
	  </div>	  
	  </div> </div>	  
	  
</form>
<?php
      if(isset($_SESSION['message'])):
   ?>
   <div class="alert alert-<?=$_SESSION['msg_type']?>">
   <?php
      echo $_SESSION['message'];
	  unset($_SESSION['message']);
   ?>
   </div>
   <?php endif ?>
   <div class="container">
   <?php
   $mysqli=new mysqli("localhost","root","","as-2")or die(mysqli_error($mysqli));
   $result=$mysqli->query("SELECT *FROM crud")or die($mysqli_error);
   //pre_r($result);
   
   ?>
<div class="row justify-content-center">
   <h2 class="text-dander">All Reords</h2>
   <table class="table table-striped table-dark table-bordered">
       <thead>
	     <tr>
		 <th>No</th>
		 <th>Name</th>
		 <th>Email</th>
		 <th>Contact</th>
		 <th>Date</th>
		 <th colspan="2">Action</th>
		 </tr>
	   </thead>
	   <?php 
	      while($row = $result->fetch_assoc()):
	    ?>
	<tr>
	    <td><?php echo $row['r_id'];?></td>
	     <td><?php echo $row['r_name'];?></td>
		 <td><?php echo $row['r_email'];?></td>
		 <td><?php echo $row['r_contact'];?></td>
		 <td><?php echo $row['r_date'];?></td>
		 <td>
		     <a href="Assignment2.php?edit=<?php echo$row['r_id'];?>"class="btn btn-success">Edit</a>
			   
		     <a href="Connection.php?delete=<?php echo$row['r_id'];?>"
			     class="btn btn-warning">Delete</a>
		 </td>
	</tr>
	    <?php endwhile; ?>
   </table>
   <?php
   function pre_r($array)
   {
	   echo '<pre>';
	   print_r($array);
	   echo '</pre>';
   }
   
   ?>
</div>
</div>
</body>
</html>
