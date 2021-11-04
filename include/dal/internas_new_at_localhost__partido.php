<?php
$dalTablepartido = array();
$dalTablepartido["id_partido"] = array("type"=>3,"varname"=>"id_partido", "name" => "id_partido");
$dalTablepartido["nombre_partido"] = array("type"=>200,"varname"=>"nombre_partido", "name" => "nombre_partido");
$dalTablepartido["presidente"] = array("type"=>200,"varname"=>"presidente", "name" => "presidente");
$dalTablepartido["color"] = array("type"=>200,"varname"=>"color", "name" => "color");
	$dalTablepartido["id_partido"]["key"]=true;

$dal_info["internas_new_at_localhost__partido"] = &$dalTablepartido;
?>