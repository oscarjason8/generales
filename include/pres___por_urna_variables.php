<?php
$strTableName="Pres - Por Urna";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="voto_presidente";

$gstrOrderBy="order by ur.id_sector";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Pres - Por Urna");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Pres - Por Urna"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>