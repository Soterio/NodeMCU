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
		#echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=bases-dados-mysql.php'>"; #print_r($row);
		#echo '<br>';
		
		$server = 'localhost';
		$user   = 'root';
		$password = '131072';
		$dbname = 'Rafael';
		$port  = '3306';
		$serial = fopen('/dev/ttyUSB0', 'r+b');
		$DH = strtotime("now");
		$DATE = date ("d/m/Y H:i:s", $DH);
		$db_connect = new mysqli($server, $user, $password, $dbname, $port);
					
		if ($db_connect->connect_error == true) {
			
			echo 'Falha....' . $db_connect->connect_error;
		} else {
			
			echo 'conexão feita com sucesso' . '<br>';
			
			#echo $LDR . $DATE .'<br>';
			
			$sql = "SELECT * FROM Sensores";
			
			$result = $db_connect->query($sql); ?>
			
			<table>
			
			<tr>
				<th>Data</th>
				<th>Dados</th>
			</tr>
			
			
			<?php while ($row = $result->fetch_assoc()){ ?>
				
				<tr>
					<td><?php echo $row['Data']; ?> </td>
					<td><?php echo $row['Dados']; ?> </td>
				</tr>
													
			<?php } ?>
			
			</table>
			

		<?php }

		
			?>				
    
	</body>

</html>
