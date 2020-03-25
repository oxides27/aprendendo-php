<?php 
include ("conecta.php");

$consulta = "SELECT visitas
			FROM contador";
			
$resultado = mysql_query ($consulta)
or die ("Falha na consulta");

$linha = mysql_fetch_assoc($resultado);
$visita = $linha["visitas"]; 
$res = $visita + '1';


$insere = "UPDATE contador
			SET visitas = $res
			WHERE visitas = '$visita'";
			
$resul_insere = mysql_query($insere)
or die ("Falha na insercão");


echo "<br><b><br>Vistante n&ordm;: $res</b>";
?>