<?php
$dalTableactas = array();
$dalTableactas["id_urna"] = array("type"=>3,"varname"=>"id_urna", "name" => "id_urna");
$dalTableactas["presidente"] = array("type"=>201,"varname"=>"presidente", "name" => "presidente");
$dalTableactas["diputado"] = array("type"=>201,"varname"=>"diputado", "name" => "diputado");
$dalTableactas["alcalde"] = array("type"=>201,"varname"=>"alcalde", "name" => "alcalde");
$dalTableactas["ingresado_por"] = array("type"=>200,"varname"=>"ingresado_por", "name" => "ingresado_por");
$dalTableactas["fecha_ingreso"] = array("type"=>135,"varname"=>"fecha_ingreso", "name" => "fecha_ingreso");
$dalTableactas["editado_por"] = array("type"=>200,"varname"=>"editado_por", "name" => "editado_por");
$dalTableactas["fecha_edicion"] = array("type"=>135,"varname"=>"fecha_edicion", "name" => "fecha_edicion");

$dal_info["internas_new_at_localhost__actas"] = &$dalTableactas;
?>