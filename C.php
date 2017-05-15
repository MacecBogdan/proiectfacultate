
<!DOCTYPE HTML>
<html>

<head>
<style>
.btn {
    font-size: 25px;
    background-color: #7CFC00; 
	border-radius: 50%;
	
}
textarea.large-compact {
  height: 2.5em;
  transition: height .3s ease-out;
}
textarea.large-compact:focus {
  height: 40em;
}


/* reset */
body,
textarea {
  font: 100%/1.3 Verdana, sans-serif;
}
body {
  background: #fafafa;
  color: #333;
}

label,
textarea {
  display: block;
}
label {
  margin: 1em 0 .3em;
}
textarea {
  width: 90em;
}

</style>
    <title>Vlad & Bogdan</title>
    <link rel="stylesheet" type="text/css" href="styleautorii.css">
</head>
<body>
    <div id="nav"><br>
        <div id="nav_wrapper">
            <ul>
               <br><br><a href="Primapagina.html"><b><hov><col><font color="cerise" font size="+3">Home</font>&nbsp;&nbsp;&nbsp;&nbsp;</hov></b></a>
                    <a href="Autorii.html"><b><hover><font color="cerise" font size="+3">Authors</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</hover></b></a>
                    <a href="C.php"><b><hover><font color="cerise" font size="+3">C</font>&nbsp;&nbsp;&nbsp;&nbsp;</hover></b></a>
                    <a href="C++.php"><b><hover><font color="cerise" font size="+3">C++</font>&nbsp;&nbsp;&nbsp;&nbsp;</hover></b></a>
                    <a href="Java.php"><b><hover><font color="cerise" font size="+3">Java</font>&nbsp;&nbsp;&nbsp;&nbsp;</hover></b></a>
                    <a href="login.php"><b><hover><font color="cerise" font size="+3">Login</font>&nbsp;&nbsp;&nbsp;&nbsp;</hover></b></a>
					<a href="Upload.php"><button class="btn">Upload</button></a>
            </ul>
			
        </div>
	<?php
$conn = mysqli_connect("localhost", "root", "", "snnippets");
if(!$conn)
{
	die("Conection failed:".mysqli_connect_error());

}

$sql = "SELECT * FROM dt";
$result =mysqli_query($conn, $sql);
$i=0;
while($row = mysqli_fetch_assoc($result))
{
	$i++;
//readonly pt textarea ca sa nu poti scrie
/*echo "<a href = "?id=<?=$row['id']?>"></a>";
echo "<p>" . $row['id'] . "</p>";
echo "<pre>" . $row['numecodsursa'] . "</pre>";
echo "<pre>" . $row['numeautor'] . "</pre>";
echo '<textarea  class="large-compact" name="text1" id="id1" cols="30" rows="10" readonly>' . $row['codsursa'] . '</textarea>';
echo "<pre>" . $row['keywords'] . "</pre>";
*/
?>
<pre><a href="delete.php?id=<?=$row['id']?>">Delete</a>
<a href="display.php?id=<?=$row['id']?>">
  <?php
  echo $i.")";
 echo $row['numecodsursa'];
?></a></pre>
<?php
}

?>
    </div>
	
</body>

</html>