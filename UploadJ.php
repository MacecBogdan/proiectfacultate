
<html>

<!--Stiluri-->
<style>

#banner {
  position: absolute;
  top: 0px;
  left: 0px;
  right: 0px;
  width: 100%;
  height: 70px;
  z-index: -1;
}


a.culori:hover {
  color: black ;
  background-color: #0080FF ;
}


</style>


<header>
<title> Vlad & Bogdan</title>
<!--Baackground-->
<body bgcolor=#737373 text=#FFFFFF background="poze/s.png">
<!--Banner-->
<img id="banner" src="poze/banner.gif" alt="Banner Image"/>



<b><p>Upload</b></p>
<center>

<a href="Primapagina.html"><b><hov><col><font color="white">Prima Pagina&nbsp</font>&nbsp;&nbsp;&nbsp;</hov></b></a>
<a href="Autorii.html"><b><hov><font color="white">Authors</font>&nbsp;&nbsp;&nbsp;&nbsp;</hov></b></a>
<a href="C.php"><b><hov><font color="white">C</font>&nbsp;&nbsp;&nbsp;&nbsp;</hov></b></a>
<a href="C++.php"><b><hov><font color="white">C++</font>&nbsp;&nbsp;&nbsp;&nbsp;</hov></b></a>
<a href="Java.php"><b><hov><font color="white">Java</font>&nbsp;&nbsp;&nbsp;&nbsp;</hov></b></a>
<a href="login.html"><b><hov><font color="white">Login</font>&nbsp;&nbsp;&nbsp;&nbsp;</hov></b></a>

</center>



<form action="insja.php" method="POST">
 <!-- <input type="checkbox" name="snippetc" value="C"  > C<br>
  <input type="checkbox" name="snippetc++" value="C++" > C+<br>
  <input type= "checkbox" name="snippetjava" value="java">Java</br> -->
  Nume Cod Sursaj:<br>
  <input type="text" name="numecodsursaj"><br>
  Nume Autorj:<br>
  <input type="text" name="numeautorj"><br>
  Cod sursaj:<br>
 <textarea name="codsursaj" style="width:250px;height:150px;"></textarea><br>
  Keywordsj:<br>
  <input type="text" name="keywordsj"><br>
  <button type="submit">Adauga</button>
</form>

</body>
</html>