<?php
$strTableName="Alc - Por Sector";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="voto_alcalde";

$gstrOrderBy="order by ur.id_sector";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Alc - Por Sector");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Alc - Por Sector"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>