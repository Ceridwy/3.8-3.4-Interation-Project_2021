<html>

	<head>
		<title>PHP form design </title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	
	<body>
		<div id="main">
				<h1>Contact</h1>
				<br>
					<nav>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="page1.php">Page1</a></li>
							<li><a href="page2.php">Page2</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
			
					<!-- Break to bring form below nav -->
					<br><br><hr><br>
								<?php
					//Get the connection to the database
					require_once ("connect.php");
					?>
<br>
<!---- MAIN CONTENT --->

			<!--- Form --->
			<?php
			//data form
			$name = $_POST['name'];
			$number = $_POST['contactnumber'];
			$text = $_POST['body'];
			$email = $_POST['emailadress'];
			//email server
			$awardspaceEmail = "admin@Cotton.dx.am";  //change to gmail?
			$recipientEmail="admin@Cotton.dx.am";
			
			//formulate message
			$from = "From: Mail contact form <" . $awardspaceEmail . ">";
			$to = $recipientEmail;
			
			$subject = "form submission from: $name";
			
			$body = "message: $text /n Email Address: $email /n Phone Number: $number";
			//send email
			if (mail($to, $subject,$body,$from)) {
				echo  'E-mail Sent!';
			} else {
				echo  'E-mail delivery failure!';
			}
			
			?>
	</body>
</html>