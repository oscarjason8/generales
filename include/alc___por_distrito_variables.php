<?php
$strTableName="Alc - Por Distrito";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="voto_alcalde";

$gstrOrderBy="order by ur.id_distrito";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Alc - Por Distrito");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Alc - Por Distrito"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>