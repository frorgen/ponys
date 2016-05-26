<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" type="image/x-icon" href="rd.png">
<title>La Magia de la Amistad</title>
<style>
input {
background:transparent;
border:none;
font:Arial, Helvetica, sans-serif;
}
.Estilo1 {
font-family: "Comic Sans MS";
color:#FF33CC;
}
</style>
<table border="0" cellpadding="10" cellspacing="1" width="100%" align="center">
<tr class="tableheader">
	<td align="center"><?php include("menu.php"); ?></td>
</tr>
<tr class="tablerow">
	<?php
	$link=conectarse();
	$result1 = mysql_query("select cod_raza from pony where nombre='$nombre'",$link);
	$row2= mysql_fetch_array($result1);
	$cod=$row2['cod_raza'];
	$result = mysql_query("select nombre,genero,elemento,especie,ocup from pony,ocupacion,raza where pony.nombre='$nombre' and raza.cod_raza='$cod' and pony.cod_ocup=ocupacion.cod_ocup",$link);
	$row= mysql_fetch_array($result);
	?>
<tr class="tablerow">
  <table border="0" cellpadding="10" cellspacing="1" align="center">		
    <tr>
      <td><span class="Estilo1">nombre:</span></td>
      <td><span class="Estilo1"><? echo $row['nombre'] ?></span></td>
    </tr>
    <tr>
      <td><span class="Estilo1">elemento:</span></td>
      <td><span class="Estilo1"><? echo $row['elemento'] ?></span></td>
    </tr>
    <tr>
      <td><span class="Estilo1">genero:</span></td>
      <td><span class="Estilo1"><? echo $row['genero'] ?></span></td>
    </tr>
    <tr>
      <td><span class="Estilo1">raza:</span></td>
      <td><span class="Estilo1"><? echo $row['especie'] ?></span></td>
    </tr>
    <tr>
      <td><span class="Estilo1">ocupacion:</span></td>
      <td><span class="Estilo1"><? echo $row['ocup'] ?></span></td>
    </tr>
  </table>
  <table width="200" border="0" align="center" bordercolor="transparent" border="0">
    <tr>
      <td><?php
	if(($nombre==$row['nombre'])){
	?>
        <img align="middle" src="<? echo $nombre?>" width="300" height="300" />
        <?php } ?></td>
    </tr>
  </table>
