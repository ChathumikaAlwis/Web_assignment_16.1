<html>
<head>

<style>

/*head styles*/
h1 {
    padding-top: 50px;
    font-size: 35px;
}
img { 
    padding-top: 20px;
    padding-left: 80px;
   
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 18px 101.75px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #3366ff;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #80dfff;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 90px;
    text-decoration: none;
    display: block;
    text-align: left;
    
	
}
#b{
    color: black;
    padding: 12px 76px;
    text-decoration: none;
    display: block;
    text-align: left;
    
	
}
#c
{
    color: black;
    padding: 12px 66.5px;
    text-decoration: none;
    display: block;
    text-align: left;
    
	
}





.dropdown-content a:hover {background-color: #c2c2a3}

.dropdown:hover .dropdown-content {
    display: block;
}

#hdr{height:100px}
body{background-image: url("bgimg.jpg");  
	background-size: 100% 100%;
    background-repeat: no-repeat;}

</style>
</head>

<!--<body  bgcolor="#b9f6df">-->
<body>
<div id="h123">
<img src="logo1.gif" height="150px" width="150px" align="left">
<h1 id="topic" align="center"> NATIONAL INSTITUTE OF INFORMATION TECHNOLOGY </H1>
<br>

<br>

<br>

<br>

<div id="hdr">
<ul>
 <li><a class="active" href="site.php">Home</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Facility Allocation</a>
    <div class="dropdown-content">
     <a href="hall.php" >Lecture halls and Labs</a>
     <a href="crsc_con.php" >Resources</a>
    </div>
<li class="dropdown">
    <a href="#" class="dropbtn">Societies</a>
    <div class="dropdown-content">
      <a href="society.php" id="b">Societies</a>
      <a href="event.php" id="b">Student activities</a>
    </div>
<li class="dropdown">
    <a href="#" class="dropbtn">Events</a>
    <div class="dropdown-content">
      <a href="gallery.php" id="c">Gallery</a>
      <a href="upcoming.php" id="c">Upcoming Events</a>
    </div>
<li><a class="active" href="contact.php">Contact Us</a></li>
  </li>
 </div>
</div>
