<?php 
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
//require('css.css');                                                                   ////// type something else
} 
else{ 
header('location:login_form.php');            
exit(); 
} 
?> 

<html> 
<head>
<link rel="stylesheet" type="text/css" href="formstyle1.css" />
<style type="text/css">
input[type=text]
{
 width:50%;
 padding:12px 20px;
 margin:8px 0;
 box-sizing:border-box;
}
input[type=password]
{
 width:50%;
 padding:12px 20px;
 margin:8px 0;
 box-sizing:border-box;
}



input[type=date]
{
width:50%;
 padding:12px 20px;
 margin:8px 0;
 box-sizing:border-box;
}

textarea
{width:50%;
 padding:12px 20px;
 margin:8px 0;
 box-sizing:border-box;
}
select
{
width:50%;
 padding:12px 20px;
 margin:8px 0;
 box-sizing:border-box;

}

input[type=email]
{
 width:50%;
 padding:12px 20px;
 margin:8px 0;
 box-sizing:border-box;

}
input[type=button]
{
 
font:bold 12px arial;
 height:60px;
 margin:0;
 padding:2px 3px;

}

body
{
background-image:url('td2.jpg'); 
background-repeat:no-repeat;
background-size:1500px 1500px;

font-family:comic sans MS;
}


table.xyz{
	margin-left:auto;
	margin-right:auto;
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

input[type=submit] {
    width: 20em;  height: 4em;
}


</style>











</head>
<body> 
<center> 
<h1>Check Out Form</h1> 
<form action="checkout.php" method="post">                                        
<table cellpadding = "10"> 
<tr> 
<td><center><h2 style="font-size:30px;" align="middle"> Enter Customer ID</h2><center></td> 
</tr>
<tr>
<td style="font-size:30px;" align="middle">Customer ID*</td>                                                              
<td><input type="text" name="cust_id" maxlength="15"></td> 				
</tr> 

<tr>
<td><input type="submit" name="submit" value="Checkout"></td> 
</tr> 
</table> 
</form> 
</center> 
</body> 
</html>