function unv() // User Name
{
var uname = document.forms["form1"]["un"].value;
var uname1 =  uname.length;
if(uname1<6 || uname=="") // Name Validation
{
  document.getElementById("unh").innerHTML="User Name should contain more than 6 charactors";

}
else
{

} // End of Name Validation
}
