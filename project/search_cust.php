<?php
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
//require('menu.php');                                                                  /// look this

// Code to be executed when 'Delete' is clicked. 
if ($_POST['submit'] == 'Search'){ 
if($_POST['cust_id']) 
{ 
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

$query = "SELECT * FROM customer WHERE cust_id = '$cust_id'"; 

/*Execute query*/ 
$result = mysql_query($query);
echo '<h1>The Customer Details are - </h1>';

 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th> customer_id </th> 
<th> customer_name </th>
 <th> customer_phone </th>
<th> customer_city </th>
<th> customer_checkin </th> 
<th> customer_checkout </th>
 <th> customer_RoomNo </th> ';

/*Show the rows in the fetched result set one by one*/ 
$row = mysql_fetch_assoc($result);

echo '<tr> 


<td>'.$row['cust_id'].'</td>
<td>'.$row['name'].'</td>
<td>'.$row['phone'].'</td> 
<td>'.$row['city'].'</td>
<td>'.$row['check_in'].'</td>
<td>'.$row['check_out'].'</td> 
<td>'.$row['room_no'].'</td>   
</tr>'; 


echo '</table>';
} 

elseif($_POST['room_no'])
{
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

$room_no= $_POST['room_no'];

$qry= "SELECT * FROM customer,room_status WHERE customer.room_no= room_status.room_no AND customer.room_no='$room_no' AND room_status.status='Booked'";	
	
/*Execute query*/ 
$result = mysql_query($qry);
echo '<h1>The Customer Details are - </h1>';

 /*Draw the table for Players*/ 
echo '<table border="1"> 

<th> customer_id </th> 
<th> customer_name </th>
 <th> customer_phone </th>
<th> customer_city </th>
<th> customer_checkin </th> 
<th> customer_checkout </th>
 <th> customer_RoomNo </th> ';

/*Show the rows in the fetched result set one by one*/ 
$row = mysql_fetch_assoc($result);

echo '<tr> 


<td>'.$row['cust_id'].'</td>
<td>'.$row['name'].'</td>
<td>'.$row['phone'].'</td> 
<td>'.$row['city'].'</td>
<td>'.$row['check_in'].'</td>
<td>'.$row['check_out'].'</td> 
<td>'.$row['room_no'].'</td>   
</tr>'; 


echo '</table>';		
}

else
	echo '<h1> Invalid Input Entered</h1>';
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
