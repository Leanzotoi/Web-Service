<html>
<head>
 <meta charset="UTF-8"/>
 <title>Teste PHP - Formulário</title>
 <style type="text/css">
    <!--
    body { 
	   background-image:url(http://sindusplan.com.br/wp-content/uploads/2015/01/C%C3%B3pia-de-fundo.jpg);
	   background-repeat: no-repeat;
	   background-attachment: scroll;
	}
    -->
	</style>
</head>
<body>
 <div align="center">
 <h1 align="center"> Informações Cadastradas </h1> 
    <?php
	$emissao= $_POST["emissao"];
	$nota= $_POST["nota"];
	$valor= $_POST["valor"];
	$descricao= $_POST["descricao"];
	$observacao= $_POST["observacao"];
	$datacri= $_POST["datacri"];
	$dataatua= $_POST["dataatua"];
	
	echo "Nota Fiscal emitida no dia " .$emissao;
	echo "<br>Nota Fiscal de Nº " .$nota. " no valor de R$ " .number_format ($valor,2);
	echo "<br>Descrição : " .$descricao;
	echo "<br>Obs: " .$observacao;
	echo "<br>Nota criada no dia " .$datacri . " e sua ultima atualização foi no dia " .$dataatua; 
	?>
	<br><a href="index.html">Voltar</a>
 </div>
</body>
</html>	




