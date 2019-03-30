<?php
	session_start();
	if(isset($_COOKIE['rm'])){
		header("location:Adminpanel.php");
	}
	else{
		if(isset($_GET['status'])){
		$status = $_GET['status'];

		if($status == "invaliduser"){
			echo '<center><span style="color:red;">Name or Password did not match !!!</span>';
		}else if($status == "nullvalue"){
			echo '<center><span style="color:red;">Name/Password not be null !!!</span>';
		}
	}
?>
<body>
    <table align="center" border="1px" height="100%" width="100%">
			<tr height="20px" background="5.jpg">
				<td>
					<a href="Home.php"><img valign="top" src="aes1.png" height="47px" width="150px"></a>
					&nbsp;&nbsp;<font size="6" color="black">AES</font><font size="3px" color="black">ShoppingCenter</font>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

					
					<a href="Home.php"><font size="5" color="yellow">Home</font></a> |					
					<a href="Login.php"><font size="5" color="yellow">UserLogin</font></a>  |
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
				<h1 style="color:blue;">Login</h1></br></center>
				<center>
				<form method="post" action="CheckAdminLogin.php">
					AdminName : <input type="text"placeholder="Name" name="username"><br/>
					Password &nbsp  &nbsp &nbsp: <input type="password"placeholder="Password" name="password"></br>
					Remember Me<input type="checkbox" name="rm"></br></br>
					<input name="submit" type="submit" style="color:blue;" Value="Submit"><br/><br/>
				</form>
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
	
<?php
	}
?>