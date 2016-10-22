function emv() 
{ 
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
} 
}
