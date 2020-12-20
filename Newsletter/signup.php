<?php 
$user = "root";  
$password = "";  
$host = "127.0.0.1";  
$dbase = "newsletter";  
$table = "customers";  
 
$first_name= $_POST['firstname']; 
$last_name= $_POST['lastname']; 
$email= $_POST['email']; 
  
  
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
 
 
$query= "INSERT INTO $table  ". "(firstname, lastname, email) ". "VALUES ('$first_name', '$last_name', '$email')"; 
 
mysqli_query ($dbc, $query) 
or die ("Error querying database"); 
 
echo 'You have been successfully added.' . '<br>'; 
 
mysqli_close($dbc); 
 
?> 
 

