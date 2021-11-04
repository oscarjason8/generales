<?php
$strTableName="Urnas - Pendientes";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="urna";

$gstrOrderBy="order by id_sector";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Urnas - Pendientes");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Urnas - Pendientes"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>