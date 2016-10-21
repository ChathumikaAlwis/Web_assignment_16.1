<?php session_start();
error_reporting(0);?>
<fieldset>
<legend>Account Details</legend>
<form action="regphp.php" method="post" name="form1" onsubmit="return validform()">
User Name : <input type="text" name="un" onblur="unv()"> <h4 id="unh"></h4><br> 
Password  : <input type="password" name="ps" value="<?php echo $_SESSION["pss"];?>" onblur="psv()"> <h4 id="psh"></h4> <br>
Email	  : <input type="email" name="em"value="<?php echo $_SESSION["ems"];?>" onblur="emv()"> <h4 id="emh"></h4><br>
</fieldset> <br>
<fieldset>
<legend>Personal Details</legend>
First Name : <input type="text" name="fn" value="<?php echo $_SESSION["fns"];?>" onblur="fnv()"> <h4 id="fnh"></h4><br>
Last  Name : <input type="text" name="ln" value="<?php echo $_SESSION["lns"];?>" onblur="lnv()"> <h4 id="lnh"></h4><br>
Date Of Birth : <input type="date" name="bday" max="2001-01-01" value="<?php echo $_SESSION["bdays"]; ?>"required> <h4 id="bdayh"></h4><br>
</fieldset><br>
<fieldset>
<legend>Course Details</legend>
Faculty : <select name="fac" required> <h4 id="fach"></h4>
		<option value="" selected></option>
		<option value="Computing">Computing</option>
		<option value="Engineering">Engineering</option>
		<option value="Management">Management</option>
		</select><br><br>
Batch   : <select name="bat" required> <h4 id="bath"></h4>
		<option value="" selected></option>
		<option value="15.1">15.1</option>
		<option value="15.2">15.2</option>
		<option value="16.1">16.1</option>
		<option value="16.2">16.2</option>
		<option value="17.1">17.1</option>
		</select>
</fieldset>
<br>
<input type="reset" >
<input type="submit" value="submit">
</form>
</fieldset>
</form>
<script>

var ses = "<?php echo $_SESSION["uns"];?>";
	document.getElementById("unh").innerHTML=ses;

var un=1,pw=1,em=1,fn=1,ln=1;

function validform()		//Form validation
{
var uname = document.forms["form1"]["un"].value;
var uname1 =  uname.length;
if(uname1< 5 || uname=="") //UserName Validation
{
  document.getElementById("unh").innerHTML="User Name should contain more than 6 charactors";
  un=1;
}
else
{
un=0;
} // End of UserName Validation

var pass = document.forms["form1"]["ps"].value.length; //Password Validation
if(pass<6)
{
document.getElementById("psh").innerHTML="Password must be longer than 6 charactors";
pw=1;
}
else if(pass>16)
{
document.getElementById("psh").innerHTML="password shouldn't exceed 16 charactors";
pw=1;
}
else
{
pw=0;
} // End of Password Validation

var email = document.forms["form1"]["em"].value;  // Email Validation
var at = email.indexOf("@");
var dot = email.indexOf(".", at);
var checkem = dot - at;
if(checkem > 3 && checkem < 8 && at>1)
{
em=0;
}
else 
{
document.getElementById("emh").innerHTML="Email is not valid";
em=1;
} // End of Email Validation

var fname = document.forms["form1"]["fn"].value; // FName Validation
if(fname=="" || fname==null)//checks if it's null, then it checks if it's aN in the else part.
{
document.getElementById("fnh").innerHTML="This Field cannot be empty";
fn=1;
}
else if(isNaN(fname)) //checks if name is NaN, if it's NaN(by default it's true), it loops with all the indexes to verify that they're not.
{
for(var i=0; i<fname.length ; i++) 
{
if(isNaN(fname[i])) //Accessing indexes 
{
fn=0; // returns 0 if the string doesn't contain any number.
}
else
{
document.getElementById("fnh").innerHTML="Name Cannot contain numbers";
fn=1;
break;
}
}
} //End of FName Validation

var lname = document.forms["form1"]["ln"].value; // LName Validation
if(lname=="" || lname==null)//Same process as the FName Validation.
{
document.getElementById("lnh").innerHTML="This Field cannot be empty";
ln=1;
}
else if(isNaN(lname)) //checks if name is NaN, if it's NaN(by default it's true), it loops with all the indexes to verify that they're not.
{
for(var i=0; i<lname.length ; i++) 
{
if(isNaN(lname[i])) //Accessing indexes 
{
ln=0; // returns 0 if the string doesn't contain any number.
}
else
{
document.getElementById("lnh").innerHTML="Name Cannot contain numbers";
ln=1;
break;
}
}
}// End of LName Validation


if(un==0 && pw==0 && em==0 && fn==0 && ln==0) // Return True || False To The Form
{
return true;
}
else 
{
return false;
}
}
</script>


<!--On Blur Verification -->

<script src="username.js"></script> 
<script src="password.js"></script> 
<script src="email.js"></script> 
<script src="fn.js"></script>
<script src="ln.js"></script> 
















