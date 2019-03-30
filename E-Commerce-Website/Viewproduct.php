	<?php
		if(isset($_COOKIE['abc'])){
	?>
	
	<body>
    <table align="center" border="1px" height="100%" width="100%">
			<tr height="20px" background="5.jpg">
				<td>
					<a href="Adminpanel.php"><img valign="top" src="aes1.png" height="47px" width="150px"></a>
					&nbsp;&nbsp;<font size="6" color="black">AES</font><font size="3px" color="black">ShoppingCenter</font>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 

					
					<a href="Adminpanel.php"><font size="5" color="yellow">Home</font></a> |					
					<a href="AdminLogout.php"><font size="5" color="yellow">Logout</font></a>
				</td>
			</tr>
			
			<tr height="90%" valign="top">
				<td>
				</br>










<?php
	session_start();
	error_reporting(0);
  
	require "DBCon.php";
	$conn= DBconnection();

		$sql="SELECT * FROM productentry";
		$result=mysqli_query($conn,$sql);
		echo "	<body method='post' align='center'>
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
				<th>Id</th>
				<th>Name</th>
				<th>Image</th>
				<th>Price</th>
				<th>Catgory</th>
				<th>Description</th>
				<th colspan='50%'>Action</th>

				</tr>";
	
				
				while($row=mysqli_fetch_assoc($result)){
					echo " <tr>
					<td align='middle'>".$row['id']."</td>
					<td align='middle'>".$row['name']."</td>
					<td align='middle'><img src=".$row['file']." height='80px'></td>
					<td align='middle'>".$row['price']."</td>
					<td align='middle'>".$row['catgory']."</td>
					<td align='middle'>".$row['description']."</td>
					<td align='middle'>
							<form action='Update.php' method='post'>
							<input type='submit' name='update' value='update'/>
							<input type='hidden' name='id' value='".$row['id']."'/>
						
							</form>
						<form action='Delete.php' method='post'>
							<input type='submit' name='delete' value='delete'/>
							<input type='hidden' name='id' value='".$row['id']."'/>
							</form>

							
						
					
					</td>
		
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
	
	<table align="center">
	<tr>
		<td>Copyright@abc.com</td>
	</tr>
</table>
<?php
	}
?>
</td>
</tr>
</body>
