<?php
	if(isset($_COOKIE['abc'])){
?>
<?php
	  error_reporting(0);
  
	require "DBCon.php";
	$conn= DBconnection();
	if(isset($_POST['update'])){
		
		$id = $_POST['id'];
		$sql="SELECT * FROM productentry where id=".$id;
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
	}
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
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp				
				<a href="Adminpanel.php"><font size="5" color="yellow">Home</font></a> |					
				<a href="AdminLogout.php"><font size="5" color="yellow">Logout</font></a>
			</td>
		</tr>
			
		<tr height="90%"background="1.jpg" valign="top">
			<td>
				<center>

				<form method="post"action="Updatecheck.php" enctype="multipart/form-data">

					<center><h1>Update Product</h1></center><br/><br/>
	
					<table border="0" width="100%"height="50%">
	
						<tr>
							<th>Product Id :</th>
							<td><input type="text"placeholder="Id" name="id" value="<?php echo $row['id']; ?> "> </td>
						</tr>
	
						<tr>
							<th>Product Name :</th>
							<td><input type="text"placeholder="Name" name="name" value="<?php echo $row['name']; ?> "></td>
						</tr>
	
						<tr>
							<th>Product view :</th>
							<td><input type="file" name="file" value="<?php echo $row['file']; ?> "></td>
						</tr>
	
						<tr>
							<th>Price :</th>
							<td><input type="text"placeholder="Price" name="price" value="<?php echo $row['price']; ?> "></td>
						</tr>
	
						<tr>
							<th>Description :</th>
							<td><input type="text"placeholder="Description" name="description" value="<?php echo $row['description']; ?> "></td>
						</tr>	
	
						<tr>
							<th>Catgory :</th>
							<td><select name="catgory">
							<option value="shirt">Shirt</option>
							<option value="pant">Pant</option>
							<option value="shoe">Shoe</option></td>
						</tr>
					</table><br/><br/>
					<center> <input name="submit" type="submit" value="Update"></center>
					
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

















</form>