<html>
<head>
<link rel="stylesheet" href="Estilo.css">
</head>
<body>
<?php 
//genera una tabla: 3 filas 4 columnas
echo"<table border=1>";
$contador=1;
$clase="";
for($fila=0;$fila<10;$fila++){
echo"<tr>";
for($columna=1;$columna<=10;$columna++){
if($fila%2==0){
$clase='class="par"';
}
else{
$clase='class="non"';
}
echo "<td ".$clase.">$contador</td>";
$contador++;
}
echo"</tr>";
}
echo"</table>";
?>
</body>
</html>