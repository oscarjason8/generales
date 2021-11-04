<?php
$dalTableusuario = array();
$dalTableusuario["usuario"] = array("type"=>200,"varname"=>"usuario", "name" => "usuario");
$dalTableusuario["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre");
$dalTableusuario["clave"] = array("type"=>200,"varname"=>"clave", "name" => "clave");
	$dalTableusuario["usuario"]["key"]=true;

$dal_info["internas_new_at_localhost__usuario"] = &$dalTableusuario;
?>