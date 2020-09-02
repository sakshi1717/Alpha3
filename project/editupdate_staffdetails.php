<?php
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
//require('menu.php'); 
 
 
// Code to be executed when 'Update' is clicked. 
if ($_POST['submit'] == 'Update'){ 
if(!$_POST['staff_id']) 
echo 'Enter the id of the staff as it is the primary key.'; 
else{ 
$validationFlag = true;

$staff_id = $_POST['staff_id']; 
$staff_name = $_POST['name']; 
$staff_phoneno =$_POST['phone'];
$staff_city = $_POST['city']; 
$staff_salary = $_POST['salary'];
$staff_enddate = $_POST['end_date'];
 
 

if($_POST['name']){ 
$update = "UPDATE staff SET name = '$staff_name' WHERE staff_id = '$staff_id'"; 
} 
if($_POST['phone']){ 
$update = "UPDATE staff SET phone = '$staff_phoneno' WHERE staff_id = '$staff_id'"; 
} 
if($_POST['city']){ 
$update = "UPDATE staff SET city = '$staff_city' WHERE staff_id = '$staff_id'"; 
} 
if($_POST['salary']){ 
$update = "UPDATE staff SET salary = '$staff_salary' WHERE staff_id = '$staff_id'"; 
} 
if($_POST['end_date']){ 
$update = "UPDATE staff SET end_date = '$staff_enddate' WHERE staff_id = '$staff_id'"; 
} 

//If all validations are correct, connect to MySQL and execute the query 
if($validationFlag){ 
//Connect to mysql server 
$link = mysql_connect('localhost', 'root', ''); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('hotel');                        ///// database change name
if(!$db){ 
die("Unable to select database"); 
} 
//Execute query 
$results = mysql_query($update); 
if($results == FALSE) 
{  echo "ERROR SHOWN";
echo mysql_error() . '<br>'; }
else 
echo '<h1><center>Data Has Been Updated</center></h1>'; 
} 
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
