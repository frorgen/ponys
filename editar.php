<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" type="image/x-icon" href="rd.png">
<title>La Magia de la Amistad</title>
<table border="0" cellpadding="10" cellspacing="1" width="100%" align="center">
<tr class="tableheader">
	<td align="center">
	<form method="get" action="editar.php">
<table width="225" height="81" align="center" border="1">
  <tr>
    <td align="left">Nombre:</td>
	<?php
		include("conec.php");
		$link=conectarse();
		$result = mysql_query("select pony.nombre, pony.genero, pony.elemento, pony.cod_raza, ocupacion.ocup from pony, ocupacion where pony.cod_ocup=ocupacion.cod_ocup and pony.cod_ocup='$cod_ocup'",$link);
		$row= mysql_fetch_array($result);
		$row_nombre=$row['nombre'];
	?>
    <td>
      <input name="nombre" type="text" id="nombre" value= "<? echo $row['nombre'] ?>" border="0" style="border:transparent; size:auto; background:transparent;" />    </td>
  </tr>
  <tr>
    <td align="left">Genero:</td>
    <td><select name="genero" border="0" style="border:transparent; size:auto; background:transparent;">
      <?php
		if (($row['genero']==f or $row['genero']==F)){
	?>
      <option selected="selected">F</option>
      <option>M</option>
      <?php
	}
	else{
	?>
      <option selected="selected">M</option>
      <option>F</option>
      <?php
	}
	?>
    </select></td>
  </tr>
  <tr>
    <td>Elemento:</td>
    <td><input name="elemnto" type="text" id="elemento" value="<? echo $row['elemento'] ?>" border="0" style="border:transparent; size:auto; background:transparent;"/></td>
  </tr>
  <tr>
    <td align="left">Raza:</td>
    <td><select name="especie" border="0" style="border:transparent; size:auto; background:transparent;">
      <?php
		$result=mysql_query("select especie,cod_raza from raza",$link);
		while($row_especie = mysql_fetch_array($result)){ 
		if (($row['cod_raza']==$row_especie['cod_raza'])){
	?>
      <option value="<? echo $row_especie['cod_raza']?>" selected="selected"><? echo $row_especie['especie']?></option>
      <?php
		}
		else{
	?>
      <option value="<? echo $row_especie['cod_raza']?>"><? echo $row_especie['especie']?></option>
      <?php
			}
  		}
  	?>
    </select></td>
  </tr>
  <tr>
    <td align="left">Ocupacion:</td>
    <td>
      <input name="nacimiento" type="text" id="nacimiento" value="<? echo $row['ocup'] ?>" border="0" style="border:transparent; size:auto; background:transparent;"/>      </td>
  </tr>
</table>
<table width="242" border="1" align="center" bordercolor="transparent" bgcolor="transparent" bordercolor="transparent" border="">
  <tr align="center">
  	<?php
		if(($nombre=="" or $sexo=="" or $propietario=="" or $especie=="" or $nacimiento=="")){
		
		}
		else{
		mysql_query("UPDATE mascotas SET nombre='$nombre', propietario='$propietario', especie='$especie', sexo='$sexo', nacimiento='$nacimiento', fallecimiento='$fallecimiento'  where nombre='$row_nombre'",$link);
		}
	?>
    <td align="center" border="0" style="border:transparent; size:auto; background:transparent;"><input type="submit" align="absmiddle" name="Submit" value="Actualizar Datos" /></td>
  </tr>
</table>
</form>
	
	</td>
</tr>
</table>