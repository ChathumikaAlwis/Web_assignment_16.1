function psv()
{
var pass = document.forms["form1"]["ps"].value.length; //Password Validation
if(pass<6)
{
document.getElementById("psh").innerHTML="Password must be longer than 6 charactors";
}
else if(pass>16)
{
document.getElementById("psh").innerHTML="password shouldn't exceed 16 charactors";
}
else
{
pw=0;
}
}
