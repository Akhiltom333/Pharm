<?php
session_start();
if(isset($_SESSION["email"])){
	?>

<!DOCTYPE html>
<html>
<head>
<style>
	img
	{
		border-radius: 4%;
	}
</style>
<center> <font color="white" size="10"><b>MEDISERV</b></font></center>
<title>PMS</title>
<link type="text/css"  rel ="stylesheet" href ="style1.css">
</head>
<body >

<P align=right><b><a href="Home.php">HOME</a></b>&nbsp&nbsp&nbsp<b><a href="Registration.html">REGISTRATION</a></b>
			   &nbsp&nbsp&nbsp<b><a href="Login.html">LOGIN</a></b>&nbsp&nbsp&nbsp<b><a href="About.html">ABOUT US</a>
			   <a href="logout.php">logout</a></b></P>
<center><img src="M2.jpg" height="450" width="900"></center>
<center><p><B><font color="white" size="5"><i>"Physicians and patients need to work together to pursue care that improves health, avoids harms and eliminates wasteful practices."</font></B></p>
</body>
</html>

<?php
}
else{
	?>
	<center>
		<html>
	<h2>Something went wrong<br>
				click <a href="Login.html">here</a> to login</h2></center>
				</html>
	<?php
}
?>