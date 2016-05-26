<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" type="image/x-icon" href="rd.png">
<title>La Magia de la Amistad</title>
<?php
include("conec.php");
$link=conectarse();
$nombr= $_GET[nombre];
$accion= $_GET[boton];
if ($accion=='Borrar'){
$delete="delete from pony where nombre='$nombr'";
mysql_query($delete,$link);}
?>
<form method="get" action="eliminar.php">
<table width="352" border="0" align="center">
  <tr align="center">
	<td width="365"><p>¿ Seguro desea Eliminar a:
	  <input name="nombre" type="text" value="<? echo $nombr ;?>" readonly="true" border="0" style="border:transparent; size:auto; background:transparent;" />
	  ?
	  <input name="boton" type="submit" value="Borrar" align="middle" />
      </p>
	  </td>
  </tr>
</table>
</form>
<table width="200" border="0" align="center" >
  <tr>
    <td>
	<?php
		switch($nombr){
case "Twilight Sparkle":
	$cry = "twi";
	break;
case "Apple Jack":
	$cry = "app";
	break;
case "Flutthershy":
	$cry = "flu";
	break;
case "Rainbow Dash":
	$cry = "rai";
	break;
case "Pinkie Pie":
	$cry = "pin";
	break;
case "Rarity":
	$cry = "rar";
	break;
default:
	echo "No tengo imagen :C";
}
	?>
	<img align="middle" src="<? echo $cry ?>" width="400" height="300" /></td>
  </tr>
</table>
