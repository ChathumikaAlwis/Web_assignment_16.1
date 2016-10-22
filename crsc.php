<html>
<head>
<title>Course Categories</title>
<style>
#h1{color:white}
.h2{color:#003399;font-size:20;text-align:center;position:relative;cursor:pointer}
.h2:hover{color:#0039e6}
h3{font-size:19}
div{text-align:center}
.yr{font-size:18;font-weight:bold}
.yr:hover{color:#0080ff}
</style>
</head>
<body>

<h1 id="h1">Course Categories</h1>

<br/>
<h2 class="h2" onclick="showsoc()">SCHOOL OF COMPUTING</h2>

<div id="soc" style="display:none">
<h3>Sub Categories</h3>
<a href="yc1_con.php" class="yr" target="_blank">Year 1</a><br/>
<a href="yc2_con.php" class="yr" target="_blank">Year 2</a><br/>
<a href="yc3_con.php" class="yr" target="_blank">Year 3</a><br/>
</div>

<br/><br/><br/>

<h2 class="h2" onclick="showsoe()">SCHOOL OF ENGINEERING</h2>

<div id="soe" style="display:none">
<h3>Sub Categories</h3>
<a href="ye1_con.php" class="yr" target="_blank">Year 1</a><br/>
<a href="ye2_con.php" class="yr" target="_blank">Year 2</a><br/>
<a href="ye3_con.php" class="yr" target="_blank">Year 3</a><br/>
</div>

<script>
function showsoc()
{
document.getElementById("soc").style.display="block";
}

function showsoe()
{
document.getElementById("soe").style.display="block";
}

</script>

</body>
</html>