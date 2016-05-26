<body>
<?php
function Conectarse()
{
if(!($link=mysql_connect("localhost","root","root")))
{
exit();
}
if(!mysql_select_db("pony",$link))
{
exit();
}
return $link;
}
?>
</body>
</html>