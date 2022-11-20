<?php 

	$hostname='localhost';
	$username='root';
	$password='';
	$dbname='webtechlab';

	$conn = mysqli_connect($hostname,$username,$password,$dbname);

	$print=" Database Connect Succesfully";

	if($conn){
		echo $print;
	}else{
		echo "Database Connection Failed";
	}