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
<h1  align="center"> Book Your Room</h1> 
<form action="editbook_form.php" method="post">                                         
<table   text-align="center" width="40" border="1" align="center" cellspacing="0" class="xyz"> 
<tr> 
<td font-size=10px style="color:rgb(6,59,118)" ><h4 style="font-size:30px;" align="middle" >Customer Name</td>                                                               
<td font-size=10px style="color:rgb(6,59,118)" ><h4 style="font-size:30px;" align="middle"><input type="text" name="name" maxlength="15"></td> 				
</tr> 
<tr> 
<td font-size=10px style="color:rgb(6,59,118)" ><h4 style="font-size:30px;" align="middle">Phone Number</td>               												
<td font-size=10px style="color:rgb(6,59,118)" ><h4 style="font-size:30px;" align="middle"><input type="text" name="phone" maxlength="15"></td> 			
</tr> 
<tr> 
<td font-size=10px style="color:rgb(6,59,118)" ><h4 style="font-size:30px;" align="middle">City</td>               													
<td font-size=10px style="color:rgb(6,59,118)" ><h4 style="font-size:30px;" align="middle"><input type="text" name="city" maxlength="15"></td> 			
</tr> 
<tr> 
<td font-size=10px style="color:rgb(6,59,118)" ><h4 style="font-size:30px;" align="middle">Check In</td>               													
<td font-size=10px style="color:rgb(6,59,118)" ><h4 style="font-size:30px;" align="middle"><input type="date" name="check_in" maxlength="15"></td> 			
</tr> 
<tr> 
<td font-size=10px style="color:rgb(6,59,118)" ><h4 style="font-size:30px;" align="middle">Check Out</td>               													
<td font-size=10px style="color:rgb(6,59,118)" ><h4 style="font-size:30px;" align="middle"><input type="date" name="check_out" maxlength="15"></td> 			
</tr> 
<tr> 
<td  style="color:rgb(6,59,118)" ><h4 style="font-size:30px;" align="middle">Type of Room</td>               													
<td  style="color:rgb(6,59,118)" ><h4 style="font-size:30px;" align="middle"><select name="type">
<option value="Single">Single</option>
<option value="Twin"> Twin </option>
<option value="Villa">Villa</option>
<option value="Suite"> Suite </option>
</select>
</td> 			
</tr> 
 
 <tr>
<td font-size=24px style="color:rgb(6,59,118)" ><h4 style="font-size:40px;" align="middle"><input type="submit" name="submit" value="Book"></td> 
</tr> 
</table> 
</form> 
</center> 
</body> 
</html>