
 
<?php 
session_start(); 
session_unset(); 
session_destroy(); 
?> 
<html> 
<head> 
<link rel="stylesheet" type="text/css" href="formstyle.css" />
<title>Login Page</title> 



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


input[type=submit] {
    width: 20em;  height: 4em;
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
background-image:url('hotel1.jpg'); 
background-repeat:no-repeat;
background-size:1500px 700px;

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

	color:#ffffff;
	}




</style>



</head> 
<body> 


<h1 style="color:white;" align="center" > - Enter your login Details - </h1> 



<br><br><br><br>
<form name="myloginForm" method="post" action="login_check.php"> 
<table text-align="center" "width="300" border="1" align="center" cellpadding="5" cellspacing="0" class="xyz"> 
<tr valign="middle"> 
<td font-size=24px style="color:rgb(6,59,118)" ><h4 style="font-size:40px;" align="middle"><b>Login</h4></b></td> 
<td><input name="login" type="text" id="login" /></td> 
</tr> 
<tr valign="middle"> 
<td style="color:rgb(6,59,118)"><h4 style="font-size:40px;" align="middle"><b>Password</b></h4></td> 
<td><input name="password" type="password" s/></td> 
</tr> 
<tr valign="middle"> 
<td colspan="2" align="center"> 
<input type="submit" name="submit" value="Login" /></td> 
</tr> 
</table> 
</body> 
</html>
