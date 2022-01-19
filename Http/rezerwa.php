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
	$film =$_POST['film'];
	$data =$_POST['data'];
	$miejsce =$_POST['miejsce'];
	$sql="INSERT INTO rezerwacja (imie, nazwisko ,email ,data, film, miejsce) VALUES('$_SESSION['imie']','$_SESSION['nazwisko']','$_SESSION['emial']','$data','$film','$miejsce')";
	mysqli_query($sql);
}

$conn->close();
?>