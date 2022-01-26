<?php
session_start();
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
	$imie= $_SESSION['imie'];
	$nazwisko= $_SESSION['nazwisko'];
	$emial= $_SESSION['emial'];
	$film =$_POST["x1"];
	$data =$_POST["x2"];
	$miejsce =$_POST["x3"];
	$sql="INSERT INTO `rezerwacja`(`imie`, `nazwisko`, `email`, `data`, `film`, `miejsce`) VALUES ('$imie','$nazwisko','$emial','$data','$film','$miejsce')";
	mysqli_query($conn,$sql);
	header('Location: rezerwacja.php'); 
	
}

$conn->close();
?>