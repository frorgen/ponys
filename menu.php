<?php
	include("conec.php");
?>
<script language="javascript">
function pony_edit(nombre)
{
	LeftPos=(screen.width)?(screen.width-200)/1:50;
	TopPos=(screen.height)?(screen.height-200)/1:50;
	window.open("editar.php?nombre="+nombre+"", "WindowSave", "toolbar=no , scrollbars=yes, resizable=no,width=620, height420, left="+LeftPos+", top="+TopPos);
}
</script>
<script languaje="javascript">
function pony_eras(nombre)
{
	LeftPos=(screen.width)?(screen.width-200)/1:50;
	TopPos=(screen.height)?(screen.height-200)/1:50;
	window.open("eliminar.php?nombre="+nombre+"", "WindowSave", "toolbar=no , scrollbars=yes, resizable=no, width=620, height420, left="+LeftPos+", top="+TopPos);
}
</script>
<div id='cssmenu'>
<ul>
   <li class='active '><a href='index.php'><span>Ponyville</span></a></li>
   <li class='has-sub '><a href='#'><span>Ponys</span></a>
      <ul>
		<?
		$link=conectarse();
		$result=mysql_query("select nombre,cod_raza,cod_ocup from pony",$link);
		while($row = mysql_fetch_array($result)){
		?>
         <li><a onClick="tabla('<? echo $row['nombre'] ?>');"><span><? echo $row['nombre']; ?></span></a></li>
		<?
		}
		?>
      </ul>
   </li>
   <li><a href='listar.php'><span>Listar</span></a></li>
</ul>
</div>
<script type="text/javascript">
	function tabla(nombre){
	window.location="tabla.php?nombre="+nombre+"";
	}
</script>