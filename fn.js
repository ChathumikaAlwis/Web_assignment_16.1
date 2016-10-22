function fnv()
{
var fname = document.forms["form1"]["fn"].value; // FName Validation
if(fname=="" || fname==null)//checks if it's null, then it checks if it's aN in the else part.
{
document.getElementById("fnh").innerHTML="First Name Cannot Be Empty";

}
else if(isNaN(fname)) //checks if name is NaN, if it's NaN(by default it's true), it loops with all the indexes to verify that they're not.
{
for(var i=0; i<fname.length ; i++) 
{
if(isNaN(fname[i])) //Accessing indexes 
{

}
else
{
document.getElementById("fnh").innerHTML="Name Cannot contain numbers";

break;
}
}
}
}
