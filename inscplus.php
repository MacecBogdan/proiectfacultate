<?php
$conn = mysqli_connect("localhost", "root", "", "snnippets");
if(!$conn)
{
	die("Conection failed:".mysqli_connect_error());

}
$numecodsursacp= $_POST['numecodsursacp'];
$numeautorcp= $_POST['numeautorcp'];
$codsursacp= $_POST['codsursacp'];
$keywordscp= $_POST['keywordscp'];
$sql = "INSERT INTO dbcplus (numecodsursacp, numeautorcp, codsursacp, keywordscp) VALUES ('$numecodsursacp', '$numeautorcp', '$codsursacp', '$keywordscp')";

$result =$conn->query($sql);
header("Location: C++.php");

?>