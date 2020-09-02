<?php
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
//require('menu.php');                                                                  /// look this

// Code to be executed when 'Delete' is clicked. 
if ($_POST['submit'] == 'Checkout'){ 
if(!$_POST['cust_id']) 
echo 'Enter the id of the staff as it is the primary key.'; 
else{ 

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

$cust_id = $_POST['cust_id']; 
$qry1 = "SELECT room_no FROM customer WHERE cust_id='$cust_id'";
$result1 = mysql_query($qry1);
$row1 = mysql_fetch_assoc($result1);
$room_no = $row1['room_no'];

$qry2 = "UPDATE room_status SET status= 'Available' WHERE room_no= '$room_no'"; 
$result2 = mysql_query($qry2);

$qry3 = "SELECT room_cost.cost FROM room_cost,room_type WHERE room_type.type = room_cost.type AND room_type.room_no = '$room_no'";
$result3 = mysql_query($qry3);
$row3 = mysql_fetch_assoc($result3);
$cost_room = $row3['cost'];   /// cost of room per day
echo '<h3><center> Total Bill of Stay :'.$cost_room.' Ruppees</center><h3>';

$qry4 = "SELECT forder.quantity,food.price FROM forder,food WHERE forder.food_item = food.food_item AND cust_id = '$cust_id'";
$cost_food = 0;
$result4 = mysql_query($qry4);
while($row4 = mysql_fetch_assoc($result4))
{
	$cost_food = $cost_food + ($row4['quantity']*$row4['price']);
}
echo '<center> Total Bill of Food Order :'.$cost_food.' Ruppees</center>';
echo '<h1><center> Customer Bill : </center></h1>';
$total = $cost_room + $cost_food;
echo '<h2><center>'.$total.' Ruppees</center></h2>';

/*
//Execute query 
$results = mysql_query($delete); 
if($results == FALSE) 
echo mysql_error() . '<br>'; 
else 
echo 'Data deleted successfully'; */
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
<link rel="stylesheet" type="text/css" href="formstyle1.css" />
<style>
body {
	background-color: #3E0086;
	background-image: url("bg10.jpg");
	background-size: 1500px 750px;
	background-repeat:no-repeat;
	background-repeat: no-repeat;
	text-align: center;
	color: #6F1E16;
	font-size : large;
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
	
	h2 {
    display: block;
    font-size: 2em;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;

	font-size: 40px;
    font-weight: 700;

	color:#b03a2e;
	}


</style>
</head>
</html>
