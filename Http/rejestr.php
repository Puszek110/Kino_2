<?php
	$host = "localhost";
	$db_user = "root";
	$db_password = "";
	$base = "kino";

$conn =new mysqli($host,$db_user,$db_password,$base);
if($conn->connect_errno!=0)
{
	echo "Brak Połączenia";
}
else
{
	$login =$_POST['login'];
	$password =$_POST['password'];
	$name =$_POST['imie'];
	$surename =$_POST['nazwisko'];
	$email =$_POST['email'];
	$sql ="INSERT INTO users VALUES('$name','$surename','$login','$password','$email')";	
	mysqli_query($conn,$sql);
	header('Location: test1.php');
}
$conn->close()
?>