<?php
$conn = mysqli_connect("localhost", "root", "", "snnippets");
if(!$conn)
{
	die("Conection failed:".mysqli_connect_error());

}
$numecodsursa= $_POST['numecodsursa'];
$numeautor= $_POST['numeautor'];
$codsursa= $_POST['codsursa'];
$keywords= $_POST['keywords'];
$sql = "INSERT INTO dt (numecodsursa, numeautor, codsursa, keywords) VALUES ('$numecodsursa', '$numeautor', '$codsursa', '$keywords')";

$result =$conn->query($sql);
header("Location: C.php");

?>