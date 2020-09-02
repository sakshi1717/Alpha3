



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

input[type=submit] {
    width: 20em;  height: 4em;
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




</style>








</head>
<body> 
<center> 
<h1> Book Your Room</h1> 
<form action="public_editbook.php" method="post">                                        
<table cellpadding = "10"> 
<tr> 
<td style="font-size:30px;" align="middle">Customer Name</td>                                                             
<td style="font-size:30px;" align="middle"><input type="text" name="name" maxlength="15"></td> 			
</tr> 
<tr> 
<td style="font-size:30px;" align="middle">Phone Number</td>               													
<td style="font-size:30px;" align="middle"><input type="text" name="phone" maxlength="15"></td> 			
</tr> 
<tr> 
<td style="font-size:30px;" align="middle">City</td>               													
<td style="font-size:30px;" align="middle"><input type="text" name="city" maxlength="15"></td> 			
</tr> 
<tr> 
<td style="font-size:30px;" align="middle">Check In</td>               													
<td style="font-size:30px;" align="middle"><input type="date" name="check_in" maxlength="15"></td> 			
</tr> 
<tr> 
<td style="font-size:30px;" align="middle">Check Out</td>               													
<td style="font-size:30px;" align="middle"><input type="date" name="check_out" maxlength="15"></td> 			
</tr> 
<tr> 
<td style="font-size:30px;" align="middle">Type of Room</td>               													
<td style="font-size:30px;" align="middle"><select name="type">
<option value="Single">Single</option>
<option value="Twin"> Twin </option>
<option value="Villa">Villa</option>
<option value="Suite"> Suite </option>
</select>
</td> 			
</tr> 
 
 <tr>
<td><input type="submit" name="submit" value="Book"></td> 
</tr> 
</table> 
</form> 
</center> 
</body> 
</html>