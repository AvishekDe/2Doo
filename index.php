<!DOCTYPE html>
<?php session_start(); 
	$_SESSION['check'] = 0;
	?>
<html>

	<head>
		<title>2Doo: an online note making website</title>
		<meta name="author" content="Avishek De">
		<meta name="charset" content="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="jquery-1.11.0.min.js"></script>
		<script src="//code.jquery.com/jquery-1.9.1.js"></script>
      	<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  		<script type="text/javascript" src="validation.js"></script>
  		<script type="text/javascript" src="anim.js"></script>
  
	</head>


	<body style="background-image: url('pics/backgoundmain.png'); background-repeat: both;">
		<div>
			<div id="topbar1">
				<span id="tb1t1"> 2DOO </span>
				<span id="tb1t2"> &nbsp &nbsp Organize your life... with us  </span>
				<div id="about" onmouseout="aboutover()" onmouseover="abouthover()" onclick="aboutshow()"> About </div>
			</div>

			<div id="mainarea1">
				<div id="ma1d1">
					<span style="font-family: Agency FB;font-size: 30px;"> <b>"Rename your "To-Do" list to your "Opportunities" list. Each 	day is a treasure chest filled with limitless opportunities; take joy in checking many off your list."</b><br><br>
					- Steve Maraboli<br> Unapologetically You: Reflections on Life and the Human Experience </span>
				</div>
			
				<div id="ma1d2">
					<img src="pics/checklist.png" width="400px" height="400px">
				</div>

				<div id="ma1d3">
					<div style="font-family: Agency FB;text-align: center;">
						<b><span style="font-size:83px;">Join Now!<br>
						Its free!<br><br></span>
						<span style="font-size:30px;"> And never miss an appointment again! </span></b>
					</div>
				</div>
			</div>

			<div id="bottombar1">
				<div id="signupbutton" onmouseout="signupover()" onmouseover="signuphover()"> Sign Up </div>
				<div id="signinbutton" onmouseout="signinover()" onmouseover="signinhover()"> Sign In</div>
			</div>

			<div id="signupjs">
				<span style="font-size:44px;margin-left: 15px;">Sign Up</span>
				<hr width=95%>

				<form action="input.php" method="post" id="signupform">
					<input class="a" type="text" placeholder="Enter your name" id="namesu" name="namesu" required> <br> <br>
					<input class="a" type="text" placeholder="Enter E-mail Address" id="emialsu" name="emailsu" required> <br><br>
					<input class="a" type="password" placeholder="Enter password" name="keysu" id="keysu" required><br><br>
					<hr width=95%>
					<input class="a" type="submit" value="Submit"> 
				</form>
			</div>

			<div id="signinjs">
				<span style="font-size:44px;margin-left: 15px;">Sign In</span>
				<hr width=95%>

				<form action="input1.php" method="post" id="signinform">
					<input class="a" type="text" placeholder="Enter E-mail Address" id="emailsi" name="emailsi" required> <br><br>
					<input class="a" type="password" placeholder="Enter password" id="keysi" name="keysi" required><br><br>
					<hr width=95%>
					<input class="a" type="submit" value="Submit"> 
				</form>
			</div>

			<div id="aboutme">
				<span id="tb1t1"> 2DOO </span> version 1.0
				<hr width=95%>
				<span style="font-size: 22px;">2Doo is an online organizer that creates a user-oriented To-Do list in a beautiful graphical interface. It is fully customizable and is a perfect companion to identify, plan, prepare and organize your tasks faster.</span>
				<hr width=95%>
				developed by<br><span style="font-weight: 700;font-size: 30px;">Avishek De</span><br> B.Tech (Electrical Engineering) I Year<br> IIT-Roorkee
			</div>

		</div>
	</body>

</html>