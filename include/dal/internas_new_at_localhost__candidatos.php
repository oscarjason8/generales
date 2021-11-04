<?php
$dalTablecandidatos = array();
$dalTablecandidatos["id_partido"] = array("type"=>3,"varname"=>"id_partido", "name" => "id_partido");
$dalTablecandidatos["nombre_candidato"] = array("type"=>200,"varname"=>"nombre_candidato", "name" => "nombre_candidato");
$dalTablecandidatos["vice_alcalde"] = array("type"=>200,"varname"=>"vice_alcalde", "name" => "vice_alcalde");
	$dalTablecandidatos["id_partido"]["key"]=true;

$dal_info["internas_new_at_localhost__candidatos"] = &$dalTablecandidatos;
?>