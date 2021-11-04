<?php
$dalTablecorporaciones = array();
$dalTablecorporaciones["dep"] = array("type"=>16,"varname"=>"dep", "name" => "dep");
$dalTablecorporaciones["mun"] = array("type"=>16,"varname"=>"mun", "name" => "mun");
$dalTablecorporaciones["cantidad"] = array("type"=>16,"varname"=>"cantidad", "name" => "cantidad");
$dalTablecorporaciones["factor"] = array("type"=>16,"varname"=>"factor", "name" => "factor");
$dalTablecorporaciones["estructura"] = array("type"=>16,"varname"=>"estructura", "name" => "estructura");
$dalTablecorporaciones["estructurac"] = array("type"=>16,"varname"=>"estructurac", "name" => "estructurac");
$dalTablecorporaciones["diputados"] = array("type"=>16,"varname"=>"diputados", "name" => "diputados");
	$dalTablecorporaciones["dep"]["key"]=true;
	$dalTablecorporaciones["mun"]["key"]=true;

$dal_info["internas_new_at_localhost__corporaciones"] = &$dalTablecorporaciones;
?>