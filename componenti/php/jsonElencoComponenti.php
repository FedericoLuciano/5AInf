<?php
	require("./connection.php");
	if(isset($_REQUEST["id"]))		{$id=$_REQUEST["id"];}
		else{$id="";}
	if(isset($_REQUEST["componente"]))	{$componente=$_REQUEST["componente"];}
		else{$componente="";}
	if(isset($_REQUEST["costo"]))	{$costo=$_REQUEST["costo"];}
		else{$costo="";}
		
	$sql = "select * from componenti";
	if($id!="")			{$sql .= " where id = $id";}
	if($componente!="")	{$sql .= " where componente = $componente";}
	if($costo!="")		{$sql .= " where costo = $costo";}
	
	$rs=$con->query($sql);
	if($rs==false)		{die("sql error". $con->error. "<br/>". $sql);}
	$vet=array();
	while($record=$rs->fetch_assoc())	{array_push($vet, $record);}
	$json=json_encode($vet);
	echo $json;
?>