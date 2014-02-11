<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
	session_start(); 
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="anim.js"></script>
	</head>

	<body style="background-image: url('pics/backgoundmain.png');">
		<?php
			$_SESSION['emailsu'] = $_POST['emailsi'];
			$_SESSION['keysu'] = $_POST['keysi'];

			$con = new mysqli('localhost' , 'root' , 'drinkdeep' , 'todoo');
			$q="SELECT * FROM userspace WHERE email = '" . $_SESSION['emailsu'] . "'";
			$result = mysqli_query($con,$q);
			
			if($result->num_rows==1)
			{
				$row = mysqli_fetch_array($result);
				if($row['email'] == $_SESSION['emailsu'])
				{
					if($row['password'] == $_SESSION['keysu'])
					{
						$_SESSION['uid'] = $row['serial'];
						$_SESSION['uname'] = $row['username'];
						$_SESSION['check'] = 1;
						header('Location: home.php');
					}
					else
					{
					 	 ?>
							<img src="pics/warning.png"><br>
							<span style="font-size: 40px; font-family: 'Segoe UI' , sans-serif;"> Oops! Something went wrong!<br> 
	  						You may have entered a <b>wrong password</b><br>
	  						Please navigate back to the main page. <br> </span>
	  						<a href="index.php" style="text-decoration: none;"><div id="redirect" onmouseover="redhover()" onmouseout="redover()">
	  		 				Click to go back to login page </div> </a>
	  		 				<?php
	  		 				session_destroy();
	  		 		}
				}

			}
			else
			{ ?>
				<img src="pics/warning.png"><br>
							<span style="font-size: 40px; font-family: 'Segoe UI' , sans-serif;"> Oops! Something went wrong!<br>
	  						Your email-ID is <b>not yet registered</b> on our servers.<br> Sign Up first using your email-ID<br>
	  						Please navigate back to the main page. <br> </span>
	  						<a href="index.php" style="text-decoration: none;"><div id="redirect" onmouseover="redhover()" onmouseout="redover()">
	  		 				Click to go back to login page </div> </a>
			 <?php 
			 session_destroy();
		
			}?>
</html>