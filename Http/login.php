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
	$user =$_POST['login'];
	$password =$_POST['password'];
	$sql ="select * from users where login='$user' and pass='$password'";
	if($wynik =$conn->query($sql))
	{
		$i = $wynik->num_rows;
		if($i>0)
		{
			$dana=$wynik->fetch_assoc();
			$_SESSION['nazwisko']=$dana['nazwisko'];
			$_SESSION['imie']=$dana['imie'];
			$_SESSION['emial']=$dana['email'];
			header("location: rezerwacja.php");
		}
		else
		{
			echo "bład";
			header('Location: test1.php');
		}
	}
	$conn->close();
	
}
?>