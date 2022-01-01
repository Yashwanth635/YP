<?php
$distributorid=$_POST['distributorid'];
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$email=$_POST['email'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];
//Database connecteion
$con=new mysqli('localhost','root','','webdb');
if($con->connect_error)
{
  die('falied to connect:'.$con->connect_error);
}
else{
  $stmt=$con->prepare("insert into dsignupdb(distributorid,FirstName,LastName,email,password,rpassword)values(?,?,?,?,?,?)");
  $stmt->bind_param("ssssss",$distributorid,$FirstName,$LastName,$email,$password,$rpassword);
  $stmt->execute();
  echo"registration sucessful";
  $stmt->close();
  $con->close();
}
?>