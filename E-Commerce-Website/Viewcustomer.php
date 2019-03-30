<?php
	if(isset($_COOKIE['abc'])){
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
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp	
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp				
				<a href="Adminpanel.php"><font size="5" color="yellow">Home</font></a> |					
				<a href="AdminLogout.php"><font size="5" color="yellow">Logout</font></a>
			</td>
		</tr>
			
		<tr height="90%"background="7.jpg" valign="top">
			<td>
			</br>
				<center>
				</br>

<?php
	error_reporting(0);
	require "DBCon.php";
	$conn= DBconnection();

		$sql="SELECT * FROM customer";
		$result=mysqli_query($conn,$sql);
			
		echo "	
			<body method='post' align='center'>
				<center>
			<ul id='menu'>
			<li><a href = 'Viewproduct.php'>View Product</a></li>
			<li><a href = 'Productentry.php'>Product Entry</a></li>
			<li><a href = 'Viewcustomer.php'>View Customer</a></li>
			<li><a href = 'Adminlogoutsure.php'>Logout</a></li>
			</ul> 
				</center>
				
			<table border='1'  width='100%'>
			<tr align='middle' >
			<th>User_Id</th>
			<th>User_Name</th>
			<th>Address</th>
			<th>Contact</th>
			<th>Email</th>
			</tr>";
				
		while($row=mysqli_fetch_assoc($result)){
			echo " 
			<tr>
				<td align='middle'>".$row['id']."</td>
				<td align='middle'>".$row['name']."</td>
				<td align='middle'>".$row['address']."</td>
				<td align='middle'>".$row['contact']."</td>
				<td align='middle'>".$row['email']."</td>	
			</tr>";	
				}
				echo " </table>";
			
		
	
?>


	<style>
	ul#menu {
		padding:0;
	}
	ul#menu li {
		display:inline;
	}
	ul#menu li a {
		background-color:blue;
		color:white;
		padding: 10px 20px;
		text-decoration:none;
		border-radius: 4px 4px 0 0;
	}
	ul#menu li a:hover{
		background-color:orange
	}
	</style>
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
	<?php
	}
	?>
</table>
</body>

	