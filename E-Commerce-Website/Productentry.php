<?php
  error_reporting(0);
    
	require "DBCon.php";
	$conn= DBconnection();
	if(isset($_COOKIE['abc'])){
	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$name = $_POST['name'];
		$price   = $_POST['price'];
		$description = $_POST['description'];
		$catgory   = $_POST['catgory'];
		$file	=	"upload/".$_FILES["file"]["name"];
		//$file   = $_FILES['file']['name'];
		//$file	=	"upload/".$_FILES["file"]["name"];
		
		if($id == "" || $name == "" || $price == "" || $description == "" || $catgory == ""){
			echo "Nothing not be empty";
		}else{
				move_uploaded_file($_FILES['file']['tmp_name'], $file);
			$sql="INSERT into productentry values('', '$name','$price','$description','$catgory','$file')";

			
			if(!mysqli_query($conn, $sql)){
				echo "not insert";
			}
			else{
				//echo "insert";
				header("location:Viewproduct.php");
			} 
			
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
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp				
				<a href="Adminpanel.php"><font size="5" color="yellow">Home</font></a> |					
				<a href="AdminLogout.php"><font size="5" color="yellow">Logout</font></a>
			</td>
		</tr>
			
		<tr height="90%"background="1.jpg" valign="top">
			<td>
			</br>
				<center>

				<style>
					ul#menu 
					{
						padding:0;
					}
					
					ul#menu li 
					{
						display:inline;
					}
					
					ul#menu li a 
					{
						background-color:blue;
						color:white;
						padding: 10px 20px;
						text-decoration:none;
						border-radius: 4px 4px 0 0;
					}
					
					ul#menu li a:hover
					{
						background-color:orange
					}
	
				</style>
				
				<center>
				<ul id="menu">
				<li><a href = "Viewproduct.php">View Product</a></li>
				<li><a href = "Productentry.php">Product Entry</a></li>
				<li><a href = "Viewcustomer.php">View Customer</a></li>
				<li><a href = "Adminlogoutsure.php">Logout</a></li>
				</ul>
			</center>
			
			
				<form method="post" action="#" enctype="multipart/form-data">
				<center>
					<table height="90%" width="50%">
						<tr>
							<center><h3>Product Entry </h3></center>	
						</tr>
						<tr>
		
							<th>Product Id :</th>
							<td><input type="text"placeholder="Id" name="id"></td>
						</tr>
	
						<tr>
							<th>Product Name :</th>
							<td><input type="text"placeholder="Name" name="name"></td>
						</tr>
	
						<tr>
							<th>Product view :</th>
							<td><input type="file" name="file" value="file"></td>
						</tr>
	
						<tr>
							<th>Price :</th>
							<td><input type="text"placeholder="Price" name="price"></td>
						</tr>
	
						<tr>
							<th>Description :</th>
							<td><input type="text"placeholder="Description" name="description"></td>
						</tr>	
	
						<tr>
							<th>Catgory :</th>
							<td><select name="catgory">
							<option value="shirt">Shirt</option>
							<option value="pant">Pant</option>
							<option value="shoe">Shoe</option></td>
						</tr>
				</table>
				</center>
				<center><input name="submit" type="submit" value="Submit"></center>
				</form>


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
