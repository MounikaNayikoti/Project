<?php
$firstname=$_POST['firstname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile_no=$_POST['mobile'];
$age=$_POST['age'];
$month=$_POST['month'];
//db connectivity
$conn = new mysqli('localhost','root','','demo');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into pages(firstname, gender, email, mobile, age, month) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssiii", $firstname, $gender, $email, $mobile, $age, $month);
		 $stmt->execute();
		
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

?>