<html>
<head>
<style>
#div2{border:4px solid black;width:200;position:absolute; background:#4d4d4d;color:white}
td{font-size:12;font-weight:bold;color:white}
a{font-size:12;text-decoration:none}
#calmonth{margin:20 0 0 0;padding:0 0 0 0;font-size:26}
#caldate{margin;0 0 0 0;padding:0 0 255 0;font-size:92}

#cal 
{
	border-top:4px solid black;
	height:230px;
	width: 200px;
        background:#595959;
        text-align:center;
}

hr {
    background-color: black;
    color:black;
    border: solid black 2px ;
 
}

#crt{color:#001433}

#crt:hover{color:#e6f2ff}

</style>
</head>

<body>
<div id="div2" >
<hr/>

<h5> &nbsp&nbsp Login</h5>

<table>	        
	<form id="loginfrm" name="loginfrm" action="" method="">
		<tr>
			<td>&nbspUser Name :</td>
			<td><input type= "text" name="id" id="un" size="14"> </td>
			
		</tr>
	
		<tr><br/></tr>

		<tr>
			<td>&nbspPassword &nbsp&nbsp: </td>
			<td><input type="Password" name="ps" id="ps" size="14"> </td>
		
		</tr>	
		<tr>
			<td><input type="submit" name="sub" id="sub" value="Login"> </td>
	</form>
</table>
<br/>

<hr /><hr/>

<h5> &nbsp&nbsp Register</h5>	

<table>
		<tr>
			<td><a id="crt" href="Register.php"><pre>     Create New Account</pre></a></td>
		</tr>
		<tr> </tr>
</table>

<hr/>
<div id="cal">
<h6 id="calmonth"></h6>
<h1 id="caldate" ></h1>
</div>
<script>
    var month = new Array();
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";


var d=new Date();
var m=month[d.getMonth()];
var dt=d.getDate();

document.getElementById("calmonth").innerHTML=m;
document.getElementById("caldate").innerHTML=dt;


</script>
</div>
</body>
</html>