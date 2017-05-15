<?php
$conn = mysqli_connect("localhost", "root", "", "snnippets");
if(!$conn)
{
	die("Conection failed:".mysqli_connect_error());
}
if(isset($_GET['id']))
{
	$sql= "delete from dt where id=".$_GET['id'];
	if(mysqli_query($conn, $sql))
	{
		header('Location:C.php');
		
	}else
	{
		echo "Error".mysqli_error($conn);
	}
}
?>
