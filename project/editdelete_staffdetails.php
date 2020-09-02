<?php
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
//require('menu.php');                                                                  /// look this

// Code to be executed when 'Delete' is clicked. 
if ($_POST['submit'] == 'Delete'){ 
if(!$_POST['staff_id']) 
echo 'Enter the id of the staff as it is the primary key.'; 
else{ 

$staff_id = $_POST['staff_id']; 


$delete = "DELETE FROM staff WHERE staff_id = '$staff_id'"; 
//Connect to mysql server 
$link = mysql_connect('localhost', 'root', ''); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('hotel');                          // enter database
if(!$db){ 
die("Unable to select database"); 
} 
//Execute query 
$results = mysql_query($delete); 
if($results == FALSE) 
echo mysql_error() . '<br>'; 
else 
echo '<h1><center>Data deleted successfully</center></h1>'; 
} 
} 
} 
else{ 
header('location:login_form.php'); 
exit(); 
} 
?>
<html>
<head>
<style>
body {
	background-color: #3E0086;
	background-image: url("bg10.jpg");
	background-size: 1500px 750px;
	background-repeat:no-repeat;
	background-repeat: no-repeat;
	text-align: center;
	color: #6F1E16;
}

h1 {
    display: block;
    font-size: 2em;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;

	font-size: 60px;
    font-weight: 700;

	color:#b03a2e;
	}

</style>
</head>
</html>
