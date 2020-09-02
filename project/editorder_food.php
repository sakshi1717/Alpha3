<?php
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
//require('menu.php');                                                            ///// look it
// Code to be executed when 'Insert' is clicked. 

if ($_POST['submit'] == 'Order'){
//validation flag to check that all validations are done 
$validationFlag = true; 
//Check all the required fields are filled 
if(!($_POST['cust_id']) || !($_POST['food_item']))
{ 
echo 'All the fields marked as * are compulsory.<br>'; 
$validationFlag = false; 
} 

else{ 
$cust_id = $_POST['cust_id']; 
$food_item = $_POST['food_item']; 
$quantity = $_POST['quantity'];
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
$query = "INSERT INTO forder (cust_id,food_item,quantity) VALUES ('$cust_id','$food_item','$quantity')"; 
//Execute query 
$results = mysql_query($query); 
 
//Check if query executes successfully 
if($results == FALSE) 
echo mysql_error() . '<br>'; 
else 
echo '<h1><center>Order Has Been Placed  successfully!</cenetr></h1> '; 
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