<!DOCTYPE html>
<?php session_start();
	if($_SESSION['check']!=1) 
	{
		session_destroy();
		header('Location: index.php');
	}
?>
<html>
	<head>
		<title> 2Doo : An online To-do List organizer </title>
		<meta name="charset" content="utf-8">
		<meta name="author" content="Avishek De">
		<script src="jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="anim.js"></script>
		<link rel="stylesheet" type="text/css" href="homestyle.css">
		
		<!--<script src="//code.jquery.com/jquery-1.9.1.js"></script>-->
      	<!--<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>-->
		
	</head>


	<body style="background-image: url('pics/backgoundmain.png'); background-repeat: both;">
		<div id="title">
			<span id="tb1t1"> 2DOO </span>
			<span id="tb1t2"> &nbsp &nbsp Organize your life... with us  </span>
			<div class="col" id="blue" style="left:755px;background-color:blue;" onclick="bluefunc()"></div>
			<div class="col" id="green" style="left:891px;background-color: green;" onclick="greenfunc()"></div>
			<div class="col" id="red" style="left:1027px;background-color: red;" onclick="redfunc()"></div>
			<div class="col" id="black" style="left:1163px;background-color: black;" onclick="blackfunc()"></div>
		</div>

		<div id="leftmenu">
			<span style="font-size: 40px;"> Add Event </span>
			<hr width=95%>
			<form id="eventform" method="post" action="addEvent.php">
				<textarea rows="10" cols="38" class="c" placeholder="Enter event details" name="eventd"></textarea>
				<input type="text" placeholder="Enter event Location" class="b" name="location" >
				<input type="text" placeholder="Enter date dd-mm-yyyy" class="b" name="date">
				<input type="text" placeholder="Enter time hh:mm:ss" class="b" name="time">
				<input type="submit" value="Submit" class="b">
 			</form>
		</div>

		<div id="welcome">
			<span style="margin-top:0px;font-size: 40px;margin-left: 30px;position: absolute;top:20px;"> Welcome <?php echo $_SESSION['uname'];
			?>
				<a href="logout.php" style="text-decoration: none;"><div id="logoutbutton" onmouseover="logouthover()" onmouseout="logoutover()">
					Sign Out
				</div> </a>
			</span>

		</div>

		<div id="active"></div>

		<script>
			$('#eventform').form({
	    	success:function(data){
	        $.messager.alert('Info', data, 'info');
    		}
			});
			</script>

		<!-- <script>
		// Attach a submit handler to the form
		//$( "input[type='submit']" ).click(function() {
 		console.log('yes');
 		$('#eventform').submit(function(event){
 			// Stop form from submitting normally
  			event.preventDefault();

  			// Get some values from elements on the page:
	  		var $form = $( this ),
	    	term = $form.find( "input[name='location']" ).val(),
	    	url = $form.attr( "action" );

	    	$.post('http://localhost/to_doo/addEvent.php',{a:['a','b']});
 		});
  		
 
  		
 
  		// Send the data using post
  		//var posting = $.post( url, { date: term } );*/
  		
  		//$.get('http://localhost/to_doo/addEvent.php',{a:'A',b:'B',c:'C'});

		//});

		//$('#eventform').on('submit',function(){console.log('y')});
		</script>-->
	</body>
</html>