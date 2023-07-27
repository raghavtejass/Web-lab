<?php 
 $con=mysqli_connect('localhost','root','','weblab3'); 
 $query="SELECT * from student"; 
 $result = mysqli_query($con, $query)or die(mysqli_error($con)); ?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>Extra program 10</title> 
</head> 
<body> 
<h1><b>NAME: S Raghav Tejas<br>USN: 1CR17CS119</b></h1>
<div class="container" > 
 <div class="text-center"> 
 
 <form method="post"> 
 <h4> Search Name : </h4> <input type="text" name="name" class="form-control"  placeholder="Enter Student Name" aria-describedby="basic-addon1"> 
 <button type="submit" name="submit" class="btn btn primary" >Done</button> 
 <?php 
 if (isset($_POST['submit'])){
$name = $_POST['name']; 
 $query1="SELECT * from student where name='$name'"; 
 $result = mysqli_query($con, $query1)or  die(mysqli_error($con)); 
 $row = mysqli_fetch_array($result); ?>  <h4><b style="color:black;">- SEARCH RESULTS -</h4> 
 <h4><b style="color:black;">NAME:</b> <?php  print_r($row['name']); ?></h4> 
 <h4><b style="color:black;">USN:</b> <?php  print_r($row['usn']); ?></h4> 
 <h4><b style="color:black;">BATCH:</b> <?php  print_r($row['batch']); ?></h4> 
 <?php }; 
 ?> </h4> </form> 
 <br> 
 </div> 
 </div>  
</body> 
</html>