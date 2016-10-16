<?php

session_start();
require_once "connect.php";

$polonczenie=@new mysqli($host,$db_user,$db_pass,$db_name);

if($polonczenie->connect_errno!=0)
{
	echo "Error och och".$polonczenie->connect_errno;
}
else
{
$login=$_POST["login"];
$pass=$_POST["password"];

$sql="SELECT * FROM users WHERE login='$login' AND password='$pass'";
if($rezultat=@$polonczenie->query($sql))
{
	$ilu=$rezultat->num_rows;
	if($ilu>0)
	{
		$_SESSION['logged']=true;
		$wiersz=$rezultat->fetch_assoc();
		$_SESSION['id']=$wiersz['id'];
		$_SESSION['root']=$wiersz['root'];
		$_SESSION['email']=$wiersz['email'];
		$_SESSION['login']=$wiersz['login'];
		
		
		
		$rezultat->free_result();
		header('Location:index.php');
	}else
	{
		$_SESSION['error']='<span style="color:red">Wrong,matherfucker!</span>';
		header('Location:index.php');
	}
}
$polonczenie->close();
}


?> 