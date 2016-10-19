<html>
<head>
<style>
#img1{    width: 300px;
    height: 100px;
    box-shadow: 15px 10px 10px black;}

</style>
</head>
<body>
	<img id="img1" src="1.jpg"  style="width:98%;height:65%;clear:right;padding:0 0 1 10">
<script>

	var imno=0;

	setInterval("changePic()",3000);

	function changePic()
	{
		imno++;
		var image=imno%4;
		document.getElementById("img1").src=image+".jpg";
	}
</script>

<br/><br/><br/>


<h3 style="text-align:center;text-decoration:underline;clear:left"> About National Institute Of Information Technology</h3>
<p style="text-align:center;font-weight:bold;float:right;font-size:17">
The  National Institute Of Information Technology is the ideal institute for any undergraduate interested in pursuing a career in computing. The drive behind achieving this goal is the passion for excellence and perfection that surrounds the methods of teaching, learning, research and networking with the community.

The National Institute Of Information Technology offers many degree programs in collaboration with world renowned universities. This gives our graduates the opportunity to gain an International degree while living and working in Sri Lanka.

Students will find learning at NIIT quite a unique and interesting experience as undergraduates are also given the taste of real life experiences while learning the theories behind it at class. Through this process, the school strives to prepare undergraduates to face any challenges in the real world as they will be equipped with excellent problem solving and analytical capabilities. The Institute takes special care to ensure that all students are provided with intellectual depth and abundant resources as well as individual attention.

Each department of the NIIT is dedicated to its students and in providing them the best possible educational experience. So, if you’re looking for a bright future in IT, NIIT is the place to be!
<br/><br/></p>
</body>
</html>