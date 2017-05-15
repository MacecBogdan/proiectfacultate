<?php
$conn = mysqli_connect("localhost", "root", "", "snnippets");
if(!$conn)
{
	die("Conection failed:".mysqli_connect_error());

}
$numecodsursaj= $_POST['numecodsursaj'];
$numeautorj= $_POST['numeautorj'];
$codsursaj= $_POST['codsursaj'];
$keywordsj= $_POST['keywordsj'];
$sql = "INSERT INTO dbjava (numecodsursaj, numeautorj, codsursaj, keywordsj) VALUES ('$numecodsursaj', '$numeautorj', '$codsursaj', '$keywordsj')";

$result =$conn->query($sql);
header("Location: Java.php");

?>