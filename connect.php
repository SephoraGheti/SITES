<?php
$firstName= $_POST['firstName'];
$lastName= $_POST['lastName'];
$email= $_POST['email'];
$password= $_POST['password'];
$phone= $_POST['phone'];


$conn =new mysqli('localhost','root','','login');
if($conn->connect_error){
	die('Connection Failed :'.$conn->connect_error);
}else{
	$stmt=$conn->prepare("insert into registration(firstName,lastName,email,password,phone)values(?,?,?,?,?)");
	$stmt->bind_param("ssssi",$firstName,$lastName,$email,$password,$phone);
	$stmt->execute();
	echo "Registration Successfully!";
	$stmt->close();
	$conn->close();

}

?>