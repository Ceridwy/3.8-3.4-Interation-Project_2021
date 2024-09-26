<!--- form connection file to phpMyAdmin database --->

<?php
	// Get values from form...
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$subject = $_POST['subject'];
		
	// Database Connection...
	$conn = new mysqli('localhost', '_COtton', 'wfOX49yfLE6dA54y', 'COtton_13DIT_online_gallery');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connection_error);
	}else{
		$result = $conn->prepare("insert into contact(name, email, contact, subject)
			values(?, ?, ?, ?)");
		$result->bind_param("ssss",$name, $email, $contact, $subject);
		$result->execute();
		echo "Submission successful, thank you we will be in contact with you soon.";
		$result->close();
		$conn->close();
	}
?>