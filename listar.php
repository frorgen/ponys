<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" type="image/x-icon" href="rd.png">
<title>La Magia de la Amistad</title>
<table border="0" cellpadding="10" cellspacing="1" width="100%" align="center">
<tr class="tableheader">
	<td align="center"><?php include("menu.php"); ?></td>
</tr>
</table>
<script language="javascript">
function pony_edit(cod_ocup)
{
	LeftPos=(screen.width)?(screen.width-600)/2:100;
	TopPos=(screen.height)?(screen.height-400)/2:100;
	window.open("editar.php?cod_ocup="+cod_ocup+"", "WindowSave", "toolbar=no , scrollbars=yes, resizable=no,width=620, height=420, left="+LeftPos+", top="+TopPos);
}
</script>
<script languaje="javascript">
function pony_eras(nombre)
{
	LeftPos=(screen.width)?(screen.width-600)/2:100;
	TopPos=(screen.height)?(screen.height-400)/2:100;
	window.open("eliminar.php?nombre="+nombre+"", "WindowSave", "toolbar=no , scrollbars=yes, resizable=no, width=620, height=420, left="+LeftPos+", top="+TopPos);
}
</script>
<body>
<p><form method="get" action="listar.php" a> 
<div align="center">Razas 
  <select name = "especie">
      <option selected="selected">Todas..</option>
    <?php
		$result=mysql_query("select * from raza",$link);
		while($row = mysql_fetch_array($result)){
	?>
    <option value="<? echo $row['cod_raza']?>"><? echo $row['especie']?> </option>
    <?php
  		}
  	?>
  </select>
  </p>
</div>
<p align="center">Nombres 
  <select name = "nombre">
  <option selected="selected">Todas..</option>
    <?php
	$esp = $especie;
	$sql="select*from pony where cod_raza='$esp'";
	echo $sql;
	$result=mysql_query($sql,$link);
	while($row = mysql_fetch_array($result)){
	?>
    <option><?echo $row['nombre']?></option>
    <?php
	}
	?>
  </select>
<p align="center">
    <input name="submit" type = submit value="Generar Tabla" />
</form>
  </p>
 
  </br>
</p>
<table width="800" height="27" align="center" border="1" cellspacing="0" bordercolor="#CC66FF">
	<tr>
		<th align="center">Nombre</th>
		<th align="center">Genero</th>
		<th align="center">Elemento</th>
		<th align="center">Raza</th>
	    <th align="center">Ocupacion</th>
		<th align="center">Accion</th>

	</tr>
	<tr>
	<?php
		$nomb= $nombre;
		if (($nombre=="Todas..")){
		$result=mysql_query("select pony.nombre, pony.genero, pony.elemento, raza.especie, ocupacion.ocup, ocupacion.cod_ocup  from pony, raza, ocupacion where pony.cod_raza='$esp' and pony.cod_raza = raza.cod_raza and ocupacion.cod_ocup=pony.cod_ocup",$link);
		}
		else{
		$result=mysql_query("select pony.nombre, pony.genero, pony.elemento, raza.especie, ocupacion.ocup, ocupacion.cod_ocup  from pony, raza, ocupacion where pony.nombre='$nomb' and pony.cod_raza = raza.cod_raza and ocupacion.cod_ocup=pony.cod_ocup",$link);
		}
		if (($nombre=="Todas.." and $especie=="Todas..")){
		$result=mysql_query("select pony.nombre, pony.genero, pony.elemento, raza.especie, ocupacion.ocup, ocupacion.cod_ocup from pony,raza,ocupacion where pony.cod_raza=raza.cod_raza and pony.cod_ocup=ocupacion.cod_ocup",$link);
		}
		while($row = mysql_fetch_array($result)){
	?>
	  <td align="center"><?echo $row['nombre']?>&nbsp;</td>
	  <td align="center"><?echo $row['genero']?>&nbsp;</td>
	  <td align="center"><?echo $row['elemento']?>&nbsp;</td>
	  <td align="center"><?echo $row['especie']?>&nbsp;</td>
      <td align="center"><?echo $row['ocup']?>&nbsp;</td>
	  <td align="center">
	  <input name ="resp" type="radio" value="<? echo $row['cod_ocup'] ?>" onClick= "pony_edit('<? echo $row['cod_ocup'] ?>');"/>
	  Editar
      <input name ="resp" type="radio" value="<? echo $row['nombre'] ?>" onClick= "pony_eras('<? echo $row['nombre'] ?>');"/>
      Eliminar    </tr>
  <?php
  	}
  ?>
</table> 