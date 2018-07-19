<?php 
		include 'header.php';
		$aula_atual = 'NodeMCU';
	?>


	<body>


		<h2>Ligar e Desligar</h2>
		<hr>NodeMCU - PHP</small>



		<h3>Comandos</h3>

		<?php
if ($_REQUEST ["comando"] != "") 
{
switch ($_REQUEST ["comando"])
{   
case "acender"   :  $acao = "1"; break;
case "apagar"    :  $acao = "0"; break;

}   


$ca = fopen ("/dev/ttyUSB0","w");
fwrite ($ca, $acao);
fclose($ca);
header("refresh:;ligar.php");
}
?>                                                                                                                                                                              

<h1> Olha só.... que bunito</h1>
<form action="ligar.php" method="get">
<input type="submit" name="comando" id="botaoligar" value="acender">
<input type="submit" name="comando" id="botaoApagar" value="apagar">
</form>
</body>
</html>



	</body>

</html>
