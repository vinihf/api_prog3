<?php
	
	echo "<h3>Array simples para string</h3>";

	$array = array("Brasil","Rio Grande do Sul","Feliz");
	$newArray = json_encode($array);
	echo $newArray;

	echo "<hr>";

	//========================================================

	echo "<h3>Array associativo para string</h3>";

	$array = array("Pais"=>"Brasil","Estado"=>"Rio Grande do Sul","Cidade"=>"Feliz");
	$newArray = json_encode($array);	
	echo $newArray;

	echo "<hr>";

	//========================================================

	echo "<h3>Array com mais itens em string</h3>";

	$cidades = array("Cidades" => array(
		array("Pais"=>"Brasil","Estado"=>"Rio Grande do Sul","Cidade"=>"Feliz"),
		array("Pais"=>"Brasil","Estado"=>"Rio Grande do Sul","Cidade"=>"Vale Real"),
		array("Pais"=>"Brasil","Estado"=>"Rio Grande do Sul","Cidade"=>"Alto Feliz")
	));
	$newCidades = json_encode($cidades);	
	echo $newCidades;

	echo "<hr>";

	//========================================================

	echo "<h3>Objeto em string</h3>";

	$objeto = new stdclass;
	$objeto->nome = "Nome da pessoa";
	$objeto->idade = "30";
	$newObjeto = json_encode($objeto);	
	echo $newObjeto;

	echo "<hr>";

	//========================================================

	echo "<h3>String para objeto</h3>";

	$array = array("Pais"=>"Brasil","Estado"=>"Rio Grande do Sul","Cidade"=>"Feliz");
	$newJson = json_encode($array);	
	$cidade = json_decode($newJson);
	echo "Pais:".$cidade->{"Pais"}."<br>";
	echo "Estado:".$cidade->{"Estado"}."<br>";
	echo "Cidade:".$cidade->{"Cidade"}."<br>";
	
	echo "<hr>";

	//========================================================

	echo "<h3>String com mais itens em objeto</h3>";

	$arrayCidades = array("Cidades" => array(
		array("Pais"=>"Brasil","Estado"=>"Rio Grande do Sul","Cidade"=>"Feliz"),
		array("Pais"=>"Brasil","Estado"=>"Rio Grande do Sul","Cidade"=>"Vale Real"),
		array("Pais"=>"Brasil","Estado"=>"Rio Grande do Sul","Cidade"=>"Alto Feliz")
	));
	$newCidades = json_encode($arrayCidades);	

	$cidades = json_decode($newCidades);

	foreach($cidades->{"Cidades"} as $cidade){
		echo $cidade->{"Cidade"}."<br>";
	}

	echo "<hr>";


?>
