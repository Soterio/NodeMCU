<?php 
		include 'header.php';
		$aula_atual = 'NodeMCU';
	?>


	<body>


		<h2>Receber Status</h2>
		<hr>NodeMCU - PHP</small>
		<h3>Ventilador</h3>

<?php
$port = fopen('/dev/ttyUSB0', 'r+b');
sleep(1);
echo fgets($port);
fclose($port);
header("refresh:;receber.php");
 ?>                                                                                                                                                                            

</body>
</html>
