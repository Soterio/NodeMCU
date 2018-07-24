	<?php 
		include 'header.php';
		$aula_atual = 'base-dados-mysql';
	?>

	<body>

		<h2>Bases de Dados MySQL</h2>
		<hr>
		<small>PHP</small>

		<h3>MySQL</h3>

		<?php
		#echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=bases-dados-mysql.php'>";
		
		$server = 'localhost';
		$user   = 'root';
		$password = '131072';
		$dbname = 'Rafael';
		$port  = '3306';
		$serial = fopen('/dev/ttyACM0', 'r+b');
		$DH = strtotime("now");
		$DATE = date (" d/m/Y H:i:s", $DH);

		$db_connect = new mysql($server, $user, $password, $dbname, $port);
		
		if ($db_connect->connect_error == true) {
			
			echo 'Falha....' . $db_connect->connect_error;
		} else {
			
			echo 'conexão feita com sucesso' . '<br>';
			
			$LDR = fgets($serial);
			echo $LDR . $DATE .'<br>';
			
			$sql = "INSERT INTO Sensores (Data, Dados) VALUES ('$DATE', $LDR)";
			
			fclose($serial);

			if ($db_connect->query($sql) == true){
				echo "dados inseridos com sucesso";
			}else {
				echo "falha no envio dos dados";
			}	
			
		}	
		
			?>		  
	</body>

</html>