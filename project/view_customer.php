
 
<?php 
//Start the session to see if the user is authencticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
//require('menu.php'); 																/// look this
 
 /*Connect to mysql server*/ 
$link = mysql_connect('localhost', 'root', '');  

/*Check link to the mysql server*/ 
if(!$link)
{ 
die('Failed to connect to server: ' . mysql_error());
 } 

/*Select database*/ 
$db = mysql_select_db('hotel'); 
if(!$db)
{
 die("Unable to select database"); 
}

 /*Create query*/ 
$qry = 'SELECT * FROM customer '; 

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
while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 


<td>'.$row['cust_id'].'</td>
<td>'.$row['name'].'</td>
<td>'.$row['phone'].'</td> 
<td>'.$row['city'].'</td>
<td>'.$row['check_in'].'</td>
<td>'.$row['check_out'].'</td> 
<td>'.$row['room_no'].'</td>   
</tr>'; 
}

echo '</table>';
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

</style>
</head>
</html>
