<?php
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
//require('menu.php');                                                            ///// look it
// Code to be executed when 'Insert' is clicked. 

if ($_POST['submit'] == 'Insert'){
//validation flag to check that all validations are done 
$validationFlag = true; 
//Check all the required fields are filled 
if(!($_POST['staff_id']))
{ 
echo 'All the fields marked as * are compulsory.<br>'; 
$validationFlag = false; 
} 

else{ 
$staff_id = $_POST['staff_id']; 
$staff_name = $_POST['name']; 
$staff_phoneno =$_POST['phone'];
$staff_city = $_POST['city']; 
$staff_salary = $_POST['salary'];
$staff_startdate = $_POST['start_date'];
$staff_enddate = $_POST['end_date'];
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
$db = mysql_select_db('hotel'); 										/////enter yout database name
if(!$db){ 
die("Unable to select database"); 
} 
//Create Insert query 
$query = "INSERT INTO staff (staff_id,name,phone,city,salary,start_date,end_date) VALUES ('$staff_id','$staff_name','$staff_phoneno','$staff_city ','$staff_salary','$staff_startdate','$staff_enddate')"; 
//Execute query 
$results = mysql_query($query); 
 
//Check if query executes successfully 
if($results == FALSE) 
echo mysql_error() . '<br>'; 
else 
echo '<h1"><center>Data inserted successfully!</center></h1> '; 
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