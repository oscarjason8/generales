<?php
$strTableName="Dip - Por Orden";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="vdiputados";

$gstrOrderBy="order by Casilla";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Dip - Por Orden");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Dip - Por Orden"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>