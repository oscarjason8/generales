<?php
$dalTableurna = array();
$dalTableurna["id_distrito"] = array("type"=>3,"varname"=>"id_distrito", "name" => "id_distrito");
$dalTableurna["id_sector"] = array("type"=>3,"varname"=>"id_sector", "name" => "id_sector");
$dalTableurna["id_urna"] = array("type"=>3,"varname"=>"id_urna", "name" => "id_urna");
$dalTableurna["nombre_centro"] = array("type"=>200,"varname"=>"nombre_centro", "name" => "nombre_centro");
$dalTableurna["ubicación"] = array("type"=>200,"varname"=>"ubicaci_n", "name" => "ubicación");
$dalTableurna["votantes"] = array("type"=>3,"varname"=>"votantes", "name" => "votantes");
	$dalTableurna["id_distrito"]["key"]=true;
	$dalTableurna["id_sector"]["key"]=true;
	$dalTableurna["id_urna"]["key"]=true;

$dal_info["internas_new_at_localhost__urna"] = &$dalTableurna;
?>