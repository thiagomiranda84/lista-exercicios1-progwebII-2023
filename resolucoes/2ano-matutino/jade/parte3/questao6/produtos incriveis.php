<?php
/*

6- A fábrica "Produtos Incríveis" precisa de uma solução para registrar o tempo de duração de sua produção, desde o início até o término. Esses eventos podem ter uma duração muito longa, medida em segundos, o que torna difícil a visualização do tempo total de produção. Para isso, será necessário criar um formulário que permita ao usuário digitar o tempo de duração em segundos de um determinado evento e, em seguida, converter esse tempo em horas, minutos e segundos. Utilize uma estrutura de repetição para fazer a conversão.
Entrada:
Um valor inteiro representando o tempo de duração em segundos do evento. Exemplo de entrada: 56789
Saída: O tempo de duração do evento no formato horas:minutos:segundos. Exemplo de saída: 15:46:29
Dica: Para converter o tempo total em segundos para o formato horas:minutos:segundos podemos utilizar o seguinte raciocínio:
Enquanto o tempo total em segundos for maior do que 3600 (equivalente a 1 hora), podemos subtrair 3600 do tempo total e adicionar 1 hora ao contador de horas.
Em seguida, enquanto o tempo total em segundos for maior do que 60 (equivalente a 1 minuto), podemos subtrair 60 do tempo total e adicionar 1 minuto ao contador de minutos.
Finalmente, o tempo total restante será a quantidade de segundos, que podemos simplesmente adicionar ao contador de segundos.
Podemos repetir esses passos até que o tempo total em segundos seja igual a 0.
Com essa lógica, conseguimos obter o tempo total no formato horas:minutos:segundos. Lembre-se de inicializar as variáveis dos contadores de horas, minutos e segundos com 0 antes de começar a estrutura de repetição.




*/

?>
<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8"> 
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		
	</header>
	<div class="container">
		<div class="box formulario">

			<form action="receber1.php" method="get">

				<label> Tempo
					<input type="number" name="tempo" required step = "1" value = "65789">
				</label>
				
				


				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>