<?php
		if(isset($_COOKIE['abc'])){
			?>

<html>
    <table align="center" border="1px" height="100%" width="100%">
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
			
        <tr height="100%">
            <td>			
                <table align="center">
<?php
	require "DBCon.php";
	$conn= DBconnection();
		session_start();

		
		$id = $_POST['id'];
		if(empty($_SESSION['cart']))
		{
			$_SESSION['cart']=array();
		}
		array_push($_SESSION['cart'],$_POST['id'],$_POST['price']);
		//print_r($_SESSION['cart']);
		$sql="SELECT * FROM productentry where id=".$id;
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result)){
				echo" 
				<center>
				<img src=".$row['file']." height='200px'></br>
				Name: ".$row['name']."</br>
				Price: ".$row['price']."</br>
				Catgory: ".$row['catgory']."</br>
				Description: ".$row['description']."</br>
				</center>";
		}
?>

<form method="post" action="Userpage.php">
<center>
</br>	
<h3 style="color:gold;" >This product was successfully add to your cart....<h3></br>
<a href='Viewcart.php' style="color:red;"> View Cart!!!</a></br>
<a href='Userpage.php' style="color:blue;">Continue shopping!!!</a>
</center>
</form>
	
                    </td>
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
<?php
	}
?>