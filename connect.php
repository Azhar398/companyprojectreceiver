<?php
$name = $_POST['name'];
$email = $_POST['email'];
$projecttopic = $_POST['projecttopic'];

//Database connection
$conn = new mysqli('localhost','root','','website');
if($conn->connect_error){
	die('connection Failed :'.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into registration(name, email, projecttopic)
		values(?, ?, ?)");
	$stmt->bind_param("sss",$name, $email, $projecttopic);
	$stmt->execute();
	echo "registration Successful...";
	$stmt->close();
	$stmt->close();

}



?>