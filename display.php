
<!DOCTYPE HTML>
<html>
<head>
<link rel ="stylesheet" href="styles/Pojoaque.css">
<script src="highlight.pack.js"></script>

<script> hljs.initHighlightingOnLoad();</script>
</head>

</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "snnippets");
if(!$conn)
{
	die("Conection failed:".mysqli_connect_error());

}

$id=$_GET['id'];
$sql = "SELECT codsursa FROM dt where id=".$id;
$result =mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

	echo "<pre><code class='C'>". $row['codsursa']. "</code></pre>";


?>