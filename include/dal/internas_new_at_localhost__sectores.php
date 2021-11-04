<?php
$dalTablesectores = array();
$dalTablesectores["id_distrito"] = array("type"=>3,"varname"=>"id_distrito", "name" => "id_distrito");
$dalTablesectores["id_sector"] = array("type"=>3,"varname"=>"id_sector", "name" => "id_sector");
$dalTablesectores["nombre_sector"] = array("type"=>200,"varname"=>"nombre_sector", "name" => "nombre_sector");
	$dalTablesectores["id_distrito"]["key"]=true;
	$dalTablesectores["id_sector"]["key"]=true;

$dal_info["internas_new_at_localhost__sectores"] = &$dalTablesectores;
?>