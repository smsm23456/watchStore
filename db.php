<?php
	$con = mysqli_connect("localhost","root“ ,"","watch")
or die( mysqli_connect_error() );
	mysqli_select_db($con,"test")
or die( mysqli_connect_error());
mysqli_query($con,"CREATE TABLE IF NOT EXISTS cstm(
		id INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(id),
		username VARCHAR(30),
    password VARCHAR(20),
		email VARCHAR(40))")
	or die( mysqli_connect_error());
	echo "Table Created!";
	$query = "INSERT INTO cstm (username, password,email) VALUES (' " .$_POST["username"]. " ', ' " .$_POST["password"]. " ', ' " .$_POST["email"]. " ') ";
	mysqli_query($con,$query)
or die( mysqli_connect_error());
	echo "Data is successfully inserted...";
?>
