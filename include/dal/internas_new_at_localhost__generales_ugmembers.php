<?php
$dalTablegenerales_ugmembers = array();
$dalTablegenerales_ugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName");
$dalTablegenerales_ugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID");
	$dalTablegenerales_ugmembers["UserName"]["key"]=true;
	$dalTablegenerales_ugmembers["GroupID"]["key"]=true;

$dal_info["internas_new_at_localhost__generales_ugmembers"] = &$dalTablegenerales_ugmembers;
?>