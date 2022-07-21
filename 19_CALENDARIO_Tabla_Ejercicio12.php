
<?php 
	
	$time = time();
	$primerDiaDelMes = $time - ((date("j",$time)-1)*24*60*60);
	$primerDeLaSemana = date("N", $primerDiaDelMes);
	$unDiaContiene = 24*60*60;
	$diasDeLaSemana = ["Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"];
	$mesesDelAnyo = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

	echo "<br>";
	echo "<!DOCTYPE html>
	<html>
	<head>
		<meta charset='utf-8'>
		<title>Document</title>
		<style type='text/css'>
		div{
			text-align: center;
		}
		table{
			text-align: center;
			margin-left: 41%;
		}
        table tr, td, th {
            border: solid;
            border-collapse: collapse;
        }
		</style>
	</head>
	<body>
		<div>
			<h1>".$mesesDelAnyo[(date("n", $time)-1)]." de ".date("Y", $time)."</h1>
			<table style='font-size: 1.5em;'>
				<tr>
					<th>Lu</th>
					<th>Ma</th>
					<th>Mi</th>
					<th>Ju</th>
					<th>Vi</th>
					<th>Sa</th>
					<th>Do</th>
				</tr>";
				for($i = 0; $i<$primerDeLaSemana-1; $i++){
					if($i == 0){
						echo "<tr><td></td>";
					}else{
						echo "<td></td>";
					}
				};

				for($j = 0; $j < date("t", $time); $j++){
					if(date("N", $primerDiaDelMes+($unDiaContiene*$j)) == 7){
						echo "<td>".date("d",$primerDiaDelMes+($unDiaContiene*$j))."</td></tr>";
					}else if(date("N", $primerDiaDelMes+($unDiaContiene*$j)) == 1){
						echo "<tr><td>".date("d",$primerDiaDelMes+($unDiaContiene*$j))."</td>";
					}else{
						echo "<td>".date("d",$primerDiaDelMes+($unDiaContiene*$j))."</td>";
					}
				};
				echo "</tr>
			</table>
		</div>
	</body>
	</html>"

?>
