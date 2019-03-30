<?php
  error_reporting(0);
  
	$conn= mysqli_connect('localhost', 'root', '', 'adminpanel');
	$errusername = $errpassword = $errconfirmpassword = $erremail = $errgender = $errdd = $errmm = $erryyyy = "";
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$dd = $_POST['dd'];
		$mm = $_POST['mm'];
		$yyyy = $_POST['yyyy'];
		if (empty($_POST['username'])) 
		//if (empty($_POST["username"])) 
		{
			$username = "Name is required";
		}
        elseif(strlen($username)<2){
            $errusername = "Too short";
        }
        elseif(!(($username[0]>='a' && $username[0]<='z') || ($username[0]>='A' && $username[0]<='Z'))){
            $errusername = "Not allow";
        } 
            for($i=0; $i<$username; $i++){
                if(!(($username[$i]>='a' && $username[$i]<='z') || ($username[$i]>='A' && $username[$i]<='Z') || $username[$i]=="." || $username[$i]=="-"|| $username[$i]==" " ) )
				{
					
                    $errusername = "Not allow in for loop";
                }
            }
			
			if (empty($_POST["password"])) 
			{
				$password = "Password is required";		
			} 
			if(strlen($password)<3)
			{
				$errpassword = "Atleast 3 letter input";
			} 
			if(strlen($password)>=3)
			{
				 $password;
			}

			
	
 			if (empty($_POST["confirmpassword"])) 
			{
				$confirmpassword = "Confirmpassword is required";
			}  

 			if($password==$confirmpassword)
			{
				 $confirmpassword;
			}
			if($password!=$confirmpassword)
			{
				$errconfirmpassword = "your password did not match";
			} 
			
			if (empty($_POST["email"])) 
			{
				$email = "email is required";
			}
		
			if($_POST["email"]) 
			{
				$arr = explode("@",$email);
				if(count($arr)>=2)
				{
					$lastindex = $arr[count($arr)-1];
					$arr = explode(".",$lastindex);
					if(count($arr)>=2)
						{
						if($arr[0]=="")
						{
							$erremail = "'@' and '.' do not sit beside";
						}
						elseif($arr[count($arr)-1]=="")
						{
							$erremail = "'.' can not be last word";
						}
						else{
						 $email;
							$erremail ="";
						}
					}
					else{
						$erremail ="There has no (.)";
					}
				}
				else
				{
					$erremail = "There has no (@)";
				}
			}
			
 		if (empty($_POST["gender"])) 
		{
			$gender = "gender is required";
		}
				
		if($_POST["gender"]=="male")
		{
			$gender;
		}
		if($_POST["gender"]=="female")
		{
			$gender;
		}

		
		if(empty($_POST["dd"])) 
		{
			$dd = "dd is required";
		}

		if(!($dd[0]>='0' && $dd[0]<='9')){
            $errdd = "Not allow";
        }

		if(strlen($dd)<3)
		{
			if(($dd)<=30){							
			 $dd;
			}
			else
			{
				$errdd = "Date can not possible";
			}							 
		}
		 if(strlen($dd)>2)
		{
			$errdd = "Atleast 2 letter input";
		}
	
		if (empty($_POST["mm"])) 
		{
			$mm = "mm is required";
		}
 if(!($mm[0]>='0' && $mm[0]<='9')){
            $errmm = "Not allow";
        }
				
		if(strlen($mm)<3)
		{
			if(($mm)<=12){							
				 $mm;
			}
			else{
					$errmm = "Month can not possible";
				}							 
		}
		if(strlen($mm)>2)
		{
			$errmm = "Atleast 2 letter input";
		} 
	
 		if (empty($_POST["yyyy"])) 
		{
			$yyyy = "yyyy is required";
		}
 if(!($yyyy[0]>='0' && $yyyy[0]<='9')){
            $erryyyy = "Not allow";
        }
				
		if(strlen($yyyy)==4)
		{
			if(($yyyy)<=2015){							
				 $yyyy;
			}
			else
			{
				$erryyyy = "Your age too short";
			}							 
		} 
			
			
		if(strlen($yyyy)!=4)
		{
			$erryyyy = "Atleast 4 letter input";
		}
		
		
		if(empty($errusername) && empty($errpassword) && empty($errconfirmpassword) && empty($erremail) && empty($errgender) && empty($errdd)  && empty($errmm) && empty($erryyyy)){

			$sql="INSERT into reg values('', '$username','$password','$confirmpassword','$email','$gender','$dd','$mm','$yyyy')";

			if(mysqli_query($conn, $sql)){
				header("location:Login.php");
			}
			else{
				echo "not insert";		
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


					
					<a href="Home.php"><font size="5" color="yellow">Home</font></a> |
					<a href="Login.php"><font size="5" color="yellow">Login</font></a>  |
					<a href="All.php"><font size="5" color="yellow">Registration</font></a>
				</td>
			</tr>
			<tr height="90%"background="200.jpg" valign="top">
				<td>
					<form method="post" action="#"> 
					<center>
					<table height="100%" width="100%">
						
						
								<center> 
								<h1 style="color:gold;">Registration</h1>
								</center>
 
							
								UserName: <input type="text" name="username" placeholder="username">&nbsp &nbsp &nbsp  &nbsp
								<?php echo $errusername;?><br><br>
  
								Password: <input type="text" name="password" placeholder="Atleast 6 charecter">&nbsp &nbsp &nbsp  &nbsp
								<?php echo $errpassword;?><br><br>
  
  
								Confirmpassword: <input type="text" name="confirmpassword" placeholder="Confirm password">&nbsp &nbsp &nbsp  &nbsp
								<?php echo $errconfirmpassword;?><br><br>
  
  
								Email: <input type="text" name="email" placeholder="sample@gmail.com">&nbsp &nbsp &nbsp  &nbsp
								<?php echo $erremail;?><br><br>

  
								Gender:
								<input type="radio" name="gender" value="male">Male
								<input type="radio" name="gender" value="female">Female 
								&nbsp &nbsp &nbsp  &nbsp    <?php echo $errgender;?> <br><br>

  
								DOB :
								<input name="dd"placeholder="Date" type="text" size="1">
								/<input  name="mm" placeholder="Month"type="text" size="1">
								/<input name="yyyy"placeholder="Year" type="text" size="1">&nbsp <?php echo $errdd;?> &nbsp <?php echo $errmm;?> &nbsp <?php echo $erryyyy;?><br/><br/>
  
								<input type="submit" name="submit" style="color:blue;" value="Submit"><br/><br/>
								</center>
							
						
				</table>
				</center>
				</form>
				<tr>
				<td>
				<table align="center">
				<tr>
					<td>Copyright@abc.com</td>
				</tr>
				</table>
				</td>
				</tr>
				</td>
			</tr>
		</table>

	</body>
