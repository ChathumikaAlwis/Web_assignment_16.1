function lnv()
{ 
var lname = document.forms["form1"]["ln"].value; // LName Validation
if(lname=="" || lname==null)//Same process as the FName Validation.
{
document.getElementById("lnh").innerHTML="Last Name Cannot Be Empty";

}
else if(isNaN(lname)) //checks if name is NaN, if it's NaN(by default it's true), it loops with all the indexes to verify that they're not.
{
for(var i=0; i<lname.length ; i++) 
{
if(isNaN(lname[i])) //Accessing indexes 
{

}
else
{
document.getElementById("lnh").innerHTML="Name Cannot contain numbers";

break;
}
}
}
}
