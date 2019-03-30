<?php
	session_start();
	if(isset($_COOKIE['rm']))
	{
		setcookie ('rm','valid',time()-1,'/');
		header("location:AdminLogin.php");
	}
	else
	{
		setcookie ('abc','valid',time()-1,'/');
		header("location:AdminLogin.php");
	}
	session_destroy();
?>

<body>
    <table align="center" border="1px" height="100%" width="100%">
			<tr height="20px" background="5.jpg">
				<td>
					<a href="homenew.php"><img valign="top" src="aes1.png" height="47px" width="150px"></a>
					&nbsp;&nbsp;<font size="6" color="black">AES</font><font size="3px" color="black">ShoppingCenter</font>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

					
					<a href="homenew.php"><font size="5" color="yellow">Home</font></a> |					
					<a href="Login.php"><font size="5" color="yellow">Login</font></a>  |
					<a href="All.php"><font size="5" color="yellow">Registration</font></a>
				</td>
			</tr>
			<tr height="90%"background="1.jpg" valign="top">
				<td>
	<center>
	<table>
		<tr>
			<td>
				<center>
				<h1 style="color:green;">Login</h1></br></center>
				<center>

				
				
				</center>
			</td>
		</tr>
	</table>
</center>
</td>
</tr>
<tr>
<td>
<table align="center">
	<tr>
		<td>Copyright@abc.com</td>
	</tr>
</table>
</td>
</tr>
</table>
</body>