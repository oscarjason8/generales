<?php
$dalTableestructura = array();
$dalTableestructura["cor"] = array("type"=>16,"varname"=>"cor", "name" => "cor");
$dalTableestructura["cargo"] = array("type"=>200,"varname"=>"cargo", "name" => "cargo");
$dalTableestructura["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre");
$dalTableestructura["dep"] = array("type"=>2,"varname"=>"dep", "name" => "dep");
$dalTableestructura["mun"] = array("type"=>2,"varname"=>"mun", "name" => "mun");
$dalTableestructura["Usuario"] = array("type"=>200,"varname"=>"Usuario", "name" => "Usuario");
$dalTableestructura["id"] = array("type"=>16,"varname"=>"id", "name" => "id");
$dalTableestructura["partido"] = array("type"=>16,"varname"=>"partido", "name" => "partido");
$dalTableestructura["tot"] = array("type"=>3,"varname"=>"tot", "name" => "tot");
$dalTableestructura["factor"] = array("type"=>5,"varname"=>"factor", "name" => "factor");
$dalTableestructura["restante"] = array("type"=>5,"varname"=>"restante", "name" => "restante");
	$dalTableestructura["cor"]["key"]=true;
	$dalTableestructura["dep"]["key"]=true;
	$dalTableestructura["mun"]["key"]=true;
	$dalTableestructura["Usuario"]["key"]=true;

$dal_info["internas_new_at_localhost__estructura"] = &$dalTableestructura;
?>