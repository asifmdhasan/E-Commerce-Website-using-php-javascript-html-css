<?php

	require "DBCon.php";
	$conn= DBconnection();
	session_start();
	error_reporting(0);
	if(isset($_COOKIE['abc'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$price   = $_POST['price'];
		$description = $_POST['description'];
		$catgory   = $_POST['catgory'];
		$file	= "upload/".$_FILES["file"]["name"];
?>

<table border="1px" width="100%">
			<tr height="20px" background="5.jpg">
				<td>
					<a href="Userpage.php"><img valign="top" src="aes1.png" height="47px" width="150px"></a>
					&nbsp;&nbsp;<font size="6" color="black">AES</font><font size="3px" color="black">ShoppingCenter</font>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp
					<a href="Userpage.php"><font size="5" color="yellow">Home</font></a> |
					
					<a href="Logout.php"><font size="5" color="yellow">Logout</font></a> 
				</td>
			</tr>
			
		<tr height="90%"background="1.jpg" valign="top">
			<td>
				<center>
			
			

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

	<body>
	<table border="1"  width="100%" bgcolor="#ff8000">
		<tr valign="top">
			<td width="20%">
				</br><center>Catagories : <select id="search2" name="bycat"></center><br/>
				<option value="shirt">Shirt</option>
				<option value="pant">Pant</option>
				<option value="shoe">Shoe</option>
				<br/>
				<center><input name="submit"type="button" value="Search" onclick="loadData(document.getElementById('search2'))"></center><br/><br/>
				</br>
				<center>Sort by price : <input type="text" id="search3" name="byprice" size="3"></center><br/>
				<center><input name="submit"type="button" value="Search" onclick="loadData(document.getElementById('search3'))"></center><br/>
				
				<form action="Viewcart.php" method="post"></center>
				<center><br/><input name="submit"type="submit" value="View Cart"></center>
				</form>

				<center><a href='Logout.php'>Logout </a></center> <br/><br/>
			</td>

			<td bgcolor="#FF0000">
			</br>
					<h1 align ="center"  bgcolor="white">Welcome To AES Shoping Center </h1><br/>
					<div>
						<center>Search By Name:<input type="text"autocomplete="off" id="search" name="byname" onkeyup="loadData(this)"></center></br>
					</div>
					<div id="result">
					</div>	
<?php
	$conn= DBconnection();
	$sql="SELECT * FROM productentry";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);	
	while($row=mysqli_fetch_assoc($result)){
?>
	<div class="main">
	<form method="post"action="Addcart.php">

		<?php echo"<img src=".$row['file']." height='100px'>" ?></br>
		<?php echo"".$row['name'].""?></br>
		<?php echo"".$row['price'].""?></br>
		<input type="submit" name="submit" style="background-color:green;" value="Order">
		<input type="hidden" name="id" value="<?php echo $row['id'];?>"></br>
		<input type="hidden" name="name" value="<?php echo $row["name"];?>"></br>
		<input type="hidden" name="price" value="<?php echo $row["price"];?>"></br>
		<input type="hidden" name="description" value="<?php echo $row["description"];?>"></br>
	</form>
	</div>

		<?php 				
			}
		}
		?>


	
	
	<table border="0" width="100%"height="400px">
		<tr>
			<td align="center" background="cr10.gif"></td>
			
			<td align="center" background="cr5.gif"></td>
			
			<td align="center" background="cr007.gif"></td>

        </tr>
		
				<tr>
			<td align="center" background="cr12.gif"></td>
			
			<td align="center" background="cr15.gif"></td>
			
			<td align="center" background="cr3.gif"></td>
        </tr>
	</table>
	
	
			</td>
		</tr>
	</table>
	
	
	
	
			<table border="0" width="100%"height="200px"bgcolor="#FFA07A">
			<tr>
			 <td align="center">
			<center>
            <h3>Information</h3>
			<a href="whatisaes.php"><font size="1" color="blue">What is AES</font></a></br>
			<a href="howitworks.php"><font size="1" color="blue">How it works</font></a>
			</center>
			</td>
			
			<td align="center">
			<center>
            <h3>Work with us</h3>
			<a href="worktime.php"><font size="1" color="blue">Work Time</font></a></br>
			<a href="payment.php"><font size="1" color="blue">Payment</font></a>
			</center>
			</td>
			
			<td align="center">
			<center>
            <h3>Contact Us</h3>
			<a href="officeaddress.php"><font size="1" color="blue">Office Address</font></a></br>
			<a href="mobileno.php"><font size="1" color="blue">Mobile No</font></a>			
			
			</center>
			</td>
        </tr>
	</table>
	
	
	
	
	
	
	
	
	
	<table border="1" width="100%">
			<tr>
			<center>
            <td align="center">Copyright&copy; 2018</td>
			</center>
        </tr>
	</table>
	
	

	
	
	
	
	
	
	
	
	
	
	<script type="text/javascript">
		function loadData(element) {
			
			var xmlHttp = new XMLHttpRequest();
			xmlHttp.open('POST', 'Search.php', true);
			xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");			
			var abc = "name="+element.value+"&&searchby="+element.name+"&&searchbyprice="+element.name;
			xmlHttp.send(abc);
			xmlHttp.onreadystatechange = function()
			{
				if(this.readyState == 4 && this.status==200)
				{
					document.getElementById('result').innerHTML=this.responseText;	
				}
			}
		}
	</script>
</body>