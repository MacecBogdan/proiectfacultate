
<html>

<!--Stiluri-->
<head>
<style>
.btn {
    font-size: 25px;
    background-color: #7CFC00; 
	border-radius: 50%;
}

</style>
<link rel="stylesheet" type="text/css" href="styleautorii.css">
</head>


<header>
<title> Vlad & Bogdan</title>

<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
<!--<body bgcolor=#737373 text=#FFFFFF background="poze/s.png">-->
<body>
    <div id="nav"><br>
        <div id="nav_wrapper">
            <ul>
               <br><br><a href="Primapagina.html"><b><hov><col><font color="white">Prima Pagina&nbsp</font>&nbsp;&nbsp;&nbsp;</hov></b></a>
						<a href="Autorii.html"><b><hov><font color="white">Authors</font>&nbsp;&nbsp;&nbsp;&nbsp;</hov></b></a>
						<a href="C.php"><b><hov><font color="white">C</font>&nbsp;&nbsp;&nbsp;&nbsp;</hov></b></a>
						<a href="C++.php"><b><hov><font color="white">C++</font>&nbsp;&nbsp;&nbsp;&nbsp;</hov></b></a>
						<a href="Java.php"><b><hov><font color="white">Java</font>&nbsp;&nbsp;&nbsp;&nbsp;</hov></b></a>
						<a href="login.html"><b><hov><font color="white">Login</font>&nbsp;&nbsp;&nbsp;&nbsp;</hov></b></a>

               
            </ul>
        </div>
    </div>
</body>

<form action="insr.php" method="POST">
 
  Nume Cod Sursa:<br>
  <input type="text" name="numecodsursa"><br>
  Nume Autor:<br>
  <input type="text" name="numeautor"><br>
  Cod sursa:<br>
 <textarea name="codsursa" style="width:250px;height:150px;"></textarea><br>
  Keywords:<br>
  <input type="text" name="keywords"><br>
  <button type="submit">Adauga</button>
</form>



</div>

</html>