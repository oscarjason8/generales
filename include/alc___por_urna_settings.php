<?php
$tdataalc___por_urna = array();
$tdataalc___por_urna[".searchableFields"] = array();
$tdataalc___por_urna[".ShortName"] = "alc___por_urna";
$tdataalc___por_urna[".OwnerID"] = "";
$tdataalc___por_urna[".OriginalTable"] = "voto_alcalde";


$tdataalc___por_urna[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdataalc___por_urna[".originalPagesByType"] = $tdataalc___por_urna[".pagesByType"];
$tdataalc___por_urna[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdataalc___por_urna[".originalPages"] = $tdataalc___por_urna[".pages"];
$tdataalc___por_urna[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdataalc___por_urna[".originalDefaultPages"] = $tdataalc___por_urna[".defaultPages"];

//	field labels
$fieldLabelsalc___por_urna = array();
$fieldToolTipsalc___por_urna = array();
$pageTitlesalc___por_urna = array();
$placeHoldersalc___por_urna = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalc___por_urna["Spanish"] = array();
	$fieldToolTipsalc___por_urna["Spanish"] = array();
	$placeHoldersalc___por_urna["Spanish"] = array();
	$pageTitlesalc___por_urna["Spanish"] = array();
	$fieldLabelsalc___por_urna["Spanish"]["id_urna"] = "Urna";
	$fieldToolTipsalc___por_urna["Spanish"]["id_urna"] = "";
	$placeHoldersalc___por_urna["Spanish"]["id_urna"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["Validos"] = "Votos Validos";
	$fieldToolTipsalc___por_urna["Spanish"]["Validos"] = "";
	$placeHoldersalc___por_urna["Spanish"]["Validos"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["Blancos"] = "Votos Blancos";
	$fieldToolTipsalc___por_urna["Spanish"]["Blancos"] = "";
	$placeHoldersalc___por_urna["Spanish"]["Blancos"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["Nulos"] = "Votos Nulos";
	$fieldToolTipsalc___por_urna["Spanish"]["Nulos"] = "";
	$placeHoldersalc___por_urna["Spanish"]["Nulos"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["Utilizados"] = "Votos Utilizados";
	$fieldToolTipsalc___por_urna["Spanish"]["Utilizados"] = "";
	$placeHoldersalc___por_urna["Spanish"]["Utilizados"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["No_Utilizados"] = "Votos No Utilizados";
	$fieldToolTipsalc___por_urna["Spanish"]["No_Utilizados"] = "";
	$placeHoldersalc___por_urna["Spanish"]["No_Utilizados"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["Total"] = "Total de Votos";
	$fieldToolTipsalc___por_urna["Spanish"]["Total"] = "";
	$placeHoldersalc___por_urna["Spanish"]["Total"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["id_distrito"] = "Distrito";
	$fieldToolTipsalc___por_urna["Spanish"]["id_distrito"] = "";
	$placeHoldersalc___por_urna["Spanish"]["id_distrito"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["id_sector"] = "Sector";
	$fieldToolTipsalc___por_urna["Spanish"]["id_sector"] = "";
	$placeHoldersalc___por_urna["Spanish"]["id_sector"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["ubicaci_n"] = "Ubicación";
	$fieldToolTipsalc___por_urna["Spanish"]["ubicaci_n"] = "";
	$placeHoldersalc___por_urna["Spanish"]["ubicaci_n"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["PAC"] = "PAC";
	$fieldToolTipsalc___por_urna["Spanish"]["PAC"] = "";
	$placeHoldersalc___por_urna["Spanish"]["PAC"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["FAPER"] = "FAPER";
	$fieldToolTipsalc___por_urna["Spanish"]["FAPER"] = "";
	$placeHoldersalc___por_urna["Spanish"]["FAPER"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["NUEVA_RUTA"] = "Nueva Ruta";
	$fieldToolTipsalc___por_urna["Spanish"]["NUEVA_RUTA"] = "";
	$placeHoldersalc___por_urna["Spanish"]["NUEVA_RUTA"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["ALIANZA_PAT"] = "Alianza Patriotica";
	$fieldToolTipsalc___por_urna["Spanish"]["ALIANZA_PAT"] = "";
	$placeHoldersalc___por_urna["Spanish"]["ALIANZA_PAT"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["LIBRE"] = "Libre";
	$fieldToolTipsalc___por_urna["Spanish"]["LIBRE"] = "";
	$placeHoldersalc___por_urna["Spanish"]["LIBRE"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["PSH"] = "PSH";
	$fieldToolTipsalc___por_urna["Spanish"]["PSH"] = "";
	$placeHoldersalc___por_urna["Spanish"]["PSH"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["LIDEHR"] = "LIDEHR";
	$fieldToolTipsalc___por_urna["Spanish"]["LIDEHR"] = "";
	$placeHoldersalc___por_urna["Spanish"]["LIDEHR"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["DC"] = "DC";
	$fieldToolTipsalc___por_urna["Spanish"]["DC"] = "";
	$placeHoldersalc___por_urna["Spanish"]["DC"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["TSH"] = "TSH";
	$fieldToolTipsalc___por_urna["Spanish"]["TSH"] = "";
	$placeHoldersalc___por_urna["Spanish"]["TSH"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["LIBERAL"] = "Partido Liberal";
	$fieldToolTipsalc___por_urna["Spanish"]["LIBERAL"] = "";
	$placeHoldersalc___por_urna["Spanish"]["LIBERAL"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["NACIONAL"] = "Partido Nacional";
	$fieldToolTipsalc___por_urna["Spanish"]["NACIONAL"] = "";
	$placeHoldersalc___por_urna["Spanish"]["NACIONAL"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["PINU"] = "PINU";
	$fieldToolTipsalc___por_urna["Spanish"]["PINU"] = "";
	$placeHoldersalc___por_urna["Spanish"]["PINU"] = "";
	$fieldLabelsalc___por_urna["Spanish"]["Otros"] = "Otros";
	$fieldToolTipsalc___por_urna["Spanish"]["Otros"] = "";
	$placeHoldersalc___por_urna["Spanish"]["Otros"] = "";
	if (count($fieldToolTipsalc___por_urna["Spanish"]))
		$tdataalc___por_urna[".isUseToolTips"] = true;
}


	$tdataalc___por_urna[".NCSearch"] = true;



$tdataalc___por_urna[".shortTableName"] = "alc___por_urna";
$tdataalc___por_urna[".nSecOptions"] = 0;

$tdataalc___por_urna[".mainTableOwnerID"] = "";
$tdataalc___por_urna[".entityType"] = 2;
$tdataalc___por_urna[".connId"] = "internas_new_at_localhost";


$tdataalc___por_urna[".strOriginalTableName"] = "voto_alcalde";

	



$tdataalc___por_urna[".showAddInPopup"] = false;

$tdataalc___por_urna[".showEditInPopup"] = false;

$tdataalc___por_urna[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataalc___por_urna[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataalc___por_urna[".listAjax"] = false;
//	temporary
//$tdataalc___por_urna[".listAjax"] = false;

	$tdataalc___por_urna[".audit"] = false;

	$tdataalc___por_urna[".locking"] = false;


$pages = $tdataalc___por_urna[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalc___por_urna[".edit"] = true;
	$tdataalc___por_urna[".afterEditAction"] = 1;
	$tdataalc___por_urna[".closePopupAfterEdit"] = 1;
	$tdataalc___por_urna[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalc___por_urna[".add"] = true;
$tdataalc___por_urna[".afterAddAction"] = 1;
$tdataalc___por_urna[".closePopupAfterAdd"] = 1;
$tdataalc___por_urna[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalc___por_urna[".list"] = true;
}



$tdataalc___por_urna[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalc___por_urna[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalc___por_urna[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalc___por_urna[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalc___por_urna[".printFriendly"] = true;
}



$tdataalc___por_urna[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalc___por_urna[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalc___por_urna[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalc___por_urna[".isUseAjaxSuggest"] = true;






$tdataalc___por_urna[".ajaxCodeSnippetAdded"] = false;

$tdataalc___por_urna[".buttonsAdded"] = false;

$tdataalc___por_urna[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalc___por_urna[".isUseTimeForSearch"] = false;


$tdataalc___por_urna[".badgeColor"] = "4169E1";


$tdataalc___por_urna[".allSearchFields"] = array();
$tdataalc___por_urna[".filterFields"] = array();
$tdataalc___por_urna[".requiredSearchFields"] = array();

$tdataalc___por_urna[".googleLikeFields"] = array();
$tdataalc___por_urna[".googleLikeFields"][] = "id_distrito";
$tdataalc___por_urna[".googleLikeFields"][] = "id_sector";
$tdataalc___por_urna[".googleLikeFields"][] = "id_urna";
$tdataalc___por_urna[".googleLikeFields"][] = "ubicación";
$tdataalc___por_urna[".googleLikeFields"][] = "PAC";
$tdataalc___por_urna[".googleLikeFields"][] = "FAPER";
$tdataalc___por_urna[".googleLikeFields"][] = "NUEVA_RUTA";
$tdataalc___por_urna[".googleLikeFields"][] = "ALIANZA_PAT";
$tdataalc___por_urna[".googleLikeFields"][] = "LIBRE";
$tdataalc___por_urna[".googleLikeFields"][] = "PSH";
$tdataalc___por_urna[".googleLikeFields"][] = "LIDEHR";
$tdataalc___por_urna[".googleLikeFields"][] = "DC";
$tdataalc___por_urna[".googleLikeFields"][] = "TSH";
$tdataalc___por_urna[".googleLikeFields"][] = "LIBERAL";
$tdataalc___por_urna[".googleLikeFields"][] = "NACIONAL";
$tdataalc___por_urna[".googleLikeFields"][] = "PINU";
$tdataalc___por_urna[".googleLikeFields"][] = "Otros";
$tdataalc___por_urna[".googleLikeFields"][] = "Validos";
$tdataalc___por_urna[".googleLikeFields"][] = "Blancos";
$tdataalc___por_urna[".googleLikeFields"][] = "Nulos";
$tdataalc___por_urna[".googleLikeFields"][] = "Utilizados";
$tdataalc___por_urna[".googleLikeFields"][] = "No_Utilizados";
$tdataalc___por_urna[".googleLikeFields"][] = "Total";



$tdataalc___por_urna[".tableType"] = "report";

$tdataalc___por_urna[".printerPageOrientation"] = 1;
$tdataalc___por_urna[".nPrinterPageScale"] = 100;

$tdataalc___por_urna[".nPrinterSplitRecords"] = 15;

$tdataalc___por_urna[".geocodingEnabled"] = false;

//report settings
$tdataalc___por_urna[".printReportLayout"] = 6;

$tdataalc___por_urna[".reportPrintPartitionType"] = 1;
$tdataalc___por_urna[".reportPrintGroupsPerPage"] = 15;
$tdataalc___por_urna[".lowGroup"] = 0;



$tdataalc___por_urna[".pageSize"] = 20;


$tdataalc___por_urna[".isExistTotalFields"] = true;



$tdataalc___por_urna[".reportGlobalSummary"] = true;

$tdataalc___por_urna[".repShowDet"] = true;

$tdataalc___por_urna[".reportLayout"] = 6;

//end of report settings










$tstrOrderBy = "order by ur.id_sector";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataalc___por_urna[".strOrderBy"] = $tstrOrderBy;

$tdataalc___por_urna[".orderindexes"] = array();
	$tdataalc___por_urna[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "ur.id_sector");



$tdataalc___por_urna[".sqlHead"] = "select ur.id_distrito, ur.id_sector, ur.id_urna, ur.ubicación,  (select concat(sum(a.candidato1), \" (\", ROUND(((((sum(a.candidato1)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)) ))))*100),1), \"%)\")    from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as PAC,  (select concat(sum(a.candidato2), \" (\", ROUND((((sum(a.candidato2)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as FAPER,  (select concat(sum(a.candidato3), \" (\", ROUND((((sum(a.candidato3)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as NUEVA_RUTA,  (select concat(sum(a.candidato4), \" (\", ROUND((((sum(a.candidato4)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as ALIANZA_PAT,  (select concat(sum(a.candidato5), \" (\", ROUND((((sum(a.candidato5)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as LIBRE,  (select concat(sum(a.candidato6), \" (\", ROUND((((sum(a.candidato6)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as PSH,  (select concat(sum(a.candidato7), \" (\", ROUND((((sum(a.candidato7)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as LIDEHR,  (select concat(sum(a.candidato8), \" (\", ROUND((((sum(a.candidato8)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as DC,  (select concat(sum(a.candidato9), \" (\", ROUND((((sum(a.candidato9)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as TSH,  (select concat(sum(a.candidato10), \" (\", ROUND((((sum(a.candidato10)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as LIBERAL,  (select concat(sum(a.candidato11), \" (\", ROUND((((sum(a.candidato11)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as NACIONAL,  (select concat(sum(a.candidato12), \" (\", ROUND((((sum(a.candidato12)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as PINU,  (select concat(((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8))   + (sum(a.candidato9)) + (sum(a.candidato12))), \" (\", ROUND((((((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) +  (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato12))) / ((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Otros,  (select sum(a.validos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Validos,  (select sum(a.blancos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Blancos,  (select sum(a.nulos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Nulos,  (select sum(a.utilizados) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Utilizados,  (select sum(a.no_utilizados) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as No_Utilizados,  (select sum(a.total) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Total";
$tdataalc___por_urna[".sqlFrom"] = "from voto_alcalde as va  inner join urna as ur on va.id_urna = ur.id_urna";
$tdataalc___por_urna[".sqlWhereExpr"] = "";
$tdataalc___por_urna[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalc___por_urna[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalc___por_urna[".arrGroupsPerPage"] = $arrGPP;

$tdataalc___por_urna[".highlightSearchResults"] = true;

$tableKeysalc___por_urna = array();
$tableKeysalc___por_urna[] = "id_urna";
$tdataalc___por_urna[".Keys"] = $tableKeysalc___por_urna;


$tdataalc___por_urna[".hideMobileList"] = array();




//	id_distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_distrito";
	$fdata["GoodName"] = "id_distrito";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","id_distrito");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "id_distrito";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ur.id_distrito";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "distritos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_distrito";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre_distrito";

	

	
	$edata["LookupOrderBy"] = "id_distrito";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_sector";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["id_distrito"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "id_distrito";
//	id_sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_sector";
	$fdata["GoodName"] = "id_sector";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","id_sector");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "id_sector";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ur.id_sector";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "sectores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_sector";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre_sector";

	

	
	$edata["LookupOrderBy"] = "id_sector";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_distrito", "lookup" => "id_distrito" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["id_sector"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "id_sector";
//	id_urna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_urna";
	$fdata["GoodName"] = "id_urna";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","id_urna");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "id_urna";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ur.id_urna";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "urna";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id_urna";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(id_urna,\" -  \",nombre_centro)";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "id_urna";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Urna %value% ya esta ingresada", "messageType" => "Text");

	
	//	End validation

	
	
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["id_urna"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "id_urna";
//	ubicación
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ubicación";
	$fdata["GoodName"] = "ubicaci_n";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","ubicaci_n");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "ubicación";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ur.ubicación";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["ubicación"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "ubicación";
//	PAC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PAC";
	$fdata["GoodName"] = "PAC";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","PAC");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "PAC";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato1), \" (\", ROUND(((((sum(a.candidato1)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)) ))))*100),1), \"%)\")    from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["PAC"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "PAC";
//	FAPER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FAPER";
	$fdata["GoodName"] = "FAPER";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","FAPER");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "FAPER";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato2), \" (\", ROUND((((sum(a.candidato2)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["FAPER"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "FAPER";
//	NUEVA_RUTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "NUEVA_RUTA";
	$fdata["GoodName"] = "NUEVA_RUTA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","NUEVA_RUTA");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "NUEVA_RUTA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato3), \" (\", ROUND((((sum(a.candidato3)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["NUEVA_RUTA"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "NUEVA_RUTA";
//	ALIANZA_PAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ALIANZA_PAT";
	$fdata["GoodName"] = "ALIANZA_PAT";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","ALIANZA_PAT");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "ALIANZA_PAT";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato4), \" (\", ROUND((((sum(a.candidato4)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["ALIANZA_PAT"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "ALIANZA_PAT";
//	LIBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LIBRE";
	$fdata["GoodName"] = "LIBRE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","LIBRE");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "LIBRE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato5), \" (\", ROUND((((sum(a.candidato5)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["LIBRE"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "LIBRE";
//	PSH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PSH";
	$fdata["GoodName"] = "PSH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","PSH");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "PSH";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato6), \" (\", ROUND((((sum(a.candidato6)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["PSH"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "PSH";
//	LIDEHR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LIDEHR";
	$fdata["GoodName"] = "LIDEHR";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","LIDEHR");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "LIDEHR";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato7), \" (\", ROUND((((sum(a.candidato7)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["LIDEHR"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "LIDEHR";
//	DC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DC";
	$fdata["GoodName"] = "DC";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","DC");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "DC";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato8), \" (\", ROUND((((sum(a.candidato8)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["DC"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "DC";
//	TSH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "TSH";
	$fdata["GoodName"] = "TSH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","TSH");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "TSH";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato9), \" (\", ROUND((((sum(a.candidato9)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["TSH"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "TSH";
//	LIBERAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "LIBERAL";
	$fdata["GoodName"] = "LIBERAL";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","LIBERAL");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "LIBERAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato10), \" (\", ROUND((((sum(a.candidato10)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["LIBERAL"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "LIBERAL";
//	NACIONAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "NACIONAL";
	$fdata["GoodName"] = "NACIONAL";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","NACIONAL");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "NACIONAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato11), \" (\", ROUND((((sum(a.candidato11)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["NACIONAL"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "NACIONAL";
//	PINU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "PINU";
	$fdata["GoodName"] = "PINU";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","PINU");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "PINU";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato12), \" (\", ROUND((((sum(a.candidato12)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["PINU"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "PINU";
//	Otros
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Otros";
	$fdata["GoodName"] = "Otros";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","Otros");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "Otros";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8))   + (sum(a.candidato9)) + (sum(a.candidato12))), \" (\", ROUND((((((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) +  (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato12))) / ((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["Otros"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "Otros";
//	Validos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Validos";
	$fdata["GoodName"] = "Validos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","Validos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "validos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(a.validos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["Validos"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "Validos";
//	Blancos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Blancos";
	$fdata["GoodName"] = "Blancos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","Blancos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "blancos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(a.blancos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["Blancos"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "Blancos";
//	Nulos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Nulos";
	$fdata["GoodName"] = "Nulos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","Nulos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "nulos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(a.nulos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["Nulos"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "Nulos";
//	Utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Utilizados";
	$fdata["GoodName"] = "Utilizados";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","Utilizados");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "utilizados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(a.utilizados) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["Utilizados"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "Utilizados";
//	No_Utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "No_Utilizados";
	$fdata["GoodName"] = "No_Utilizados";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","No_Utilizados");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "no_utilizados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(a.no_utilizados) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["No_Utilizados"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "No_Utilizados";
//	Total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Total";
	$fdata["GoodName"] = "Total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Urna","Total");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "total";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(a.total) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataalc___por_urna["Total"] = $fdata;
		$tdataalc___por_urna[".searchableFields"][] = "Total";


$tables_data["Alc - Por Urna"]=&$tdataalc___por_urna;
$field_labels["Alc___Por_Urna"] = &$fieldLabelsalc___por_urna;
$fieldToolTips["Alc___Por_Urna"] = &$fieldToolTipsalc___por_urna;
$placeHolders["Alc___Por_Urna"] = &$placeHoldersalc___por_urna;
$page_titles["Alc___Por_Urna"] = &$pageTitlesalc___por_urna;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Alc - Por Urna"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Alc - Por Urna"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alc___por_urna()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "ur.id_distrito, ur.id_sector, ur.id_urna, ur.ubicación,  (select concat(sum(a.candidato1), \" (\", ROUND(((((sum(a.candidato1)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)) ))))*100),1), \"%)\")    from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as PAC,  (select concat(sum(a.candidato2), \" (\", ROUND((((sum(a.candidato2)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as FAPER,  (select concat(sum(a.candidato3), \" (\", ROUND((((sum(a.candidato3)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as NUEVA_RUTA,  (select concat(sum(a.candidato4), \" (\", ROUND((((sum(a.candidato4)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as ALIANZA_PAT,  (select concat(sum(a.candidato5), \" (\", ROUND((((sum(a.candidato5)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as LIBRE,  (select concat(sum(a.candidato6), \" (\", ROUND((((sum(a.candidato6)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as PSH,  (select concat(sum(a.candidato7), \" (\", ROUND((((sum(a.candidato7)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as LIDEHR,  (select concat(sum(a.candidato8), \" (\", ROUND((((sum(a.candidato8)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as DC,  (select concat(sum(a.candidato9), \" (\", ROUND((((sum(a.candidato9)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as TSH,  (select concat(sum(a.candidato10), \" (\", ROUND((((sum(a.candidato10)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as LIBERAL,  (select concat(sum(a.candidato11), \" (\", ROUND((((sum(a.candidato11)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as NACIONAL,  (select concat(sum(a.candidato12), \" (\", ROUND((((sum(a.candidato12)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as PINU,  (select concat(((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8))   + (sum(a.candidato9)) + (sum(a.candidato12))), \" (\", ROUND((((((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) +  (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato12))) / ((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Otros,  (select sum(a.validos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Validos,  (select sum(a.blancos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Blancos,  (select sum(a.nulos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Nulos,  (select sum(a.utilizados) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Utilizados,  (select sum(a.no_utilizados) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as No_Utilizados,  (select sum(a.total) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Total";
$proto0["m_strFrom"] = "from voto_alcalde as va  inner join urna as ur on va.id_urna = ur.id_urna";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by ur.id_sector";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "ur",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto6["m_sql"] = "ur.id_distrito";
$proto6["m_srcTableName"] = "Alc - Por Urna";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "ur",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto8["m_sql"] = "ur.id_sector";
$proto8["m_srcTableName"] = "Alc - Por Urna";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "ur",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto10["m_sql"] = "ur.id_urna";
$proto10["m_srcTableName"] = "Alc - Por Urna";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ubicación",
	"m_strTable" => "ur",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto12["m_sql"] = "ur.ubicación";
$proto12["m_srcTableName"] = "Alc - Por Urna";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_strHead"] = "select";
$proto15["m_strFieldList"] = "concat(sum(a.candidato1), \" (\", ROUND(((((sum(a.candidato1)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)) ))))*100),1), \"%)\")";
$proto15["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto15["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto15["m_strOrderBy"] = "";
	
		;
			$proto15["cipherer"] = null;
$proto17=array();
$proto17["m_sql"] = "u.id_urna = ur.id_urna";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "= ur.id_urna";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_where"] = $obj;
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto15["m_having"] = $obj;
$proto15["m_fieldlist"] = array();
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_CUSTOM";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato1)"
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND(((((sum(a.candidato1)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)) ))))*100),1)"
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "concat(sum(a.candidato1), \" (\", ROUND(((((sum(a.candidato1)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)) ))))*100),1), \"%)\")";
$proto21["m_srcTableName"] = "Alc - Por Urna";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto15["m_fieldlist"][]=$obj;
$proto15["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "voto_alcalde";
$proto28["m_srcTableName"] = "Alc - Por Urna";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "elecciones";
$proto28["m_columns"][] = "id_urna";
$proto28["m_columns"][] = "candidato1";
$proto28["m_columns"][] = "candidato2";
$proto28["m_columns"][] = "candidato3";
$proto28["m_columns"][] = "candidato4";
$proto28["m_columns"][] = "candidato5";
$proto28["m_columns"][] = "candidato6";
$proto28["m_columns"][] = "candidato7";
$proto28["m_columns"][] = "candidato8";
$proto28["m_columns"][] = "candidato9";
$proto28["m_columns"][] = "candidato10";
$proto28["m_columns"][] = "candidato11";
$proto28["m_columns"][] = "candidato12";
$proto28["m_columns"][] = "validos";
$proto28["m_columns"][] = "blancos";
$proto28["m_columns"][] = "nulos";
$proto28["m_columns"][] = "utilizados";
$proto28["m_columns"][] = "no_utilizados";
$proto28["m_columns"][] = "total";
$proto28["m_columns"][] = "usuario";
$proto28["m_columns"][] = "fecha";
$proto28["m_columns"][] = "editado_por";
$proto28["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "voto_alcalde as a";
$proto27["m_alias"] = "a";
$proto27["m_srcTableName"] = "Alc - Por Urna";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto15["m_fromlist"][]=$obj;
												$proto31=array();
$proto31["m_link"] = "SQLL_INNERJOIN";
			$proto32=array();
$proto32["m_strName"] = "urna";
$proto32["m_srcTableName"] = "Alc - Por Urna";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "id_distrito";
$proto32["m_columns"][] = "id_sector";
$proto32["m_columns"][] = "id_urna";
$proto32["m_columns"][] = "nombre_centro";
$proto32["m_columns"][] = "ubicación";
$proto32["m_columns"][] = "votantes";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto31["m_alias"] = "u";
$proto31["m_srcTableName"] = "Alc - Por Urna";
$proto33=array();
$proto33["m_sql"] = "a.id_urna = u.id_urna";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= u.id_urna";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto15["m_fromlist"][]=$obj;
$proto15["m_groupby"] = array();
$proto15["m_orderby"] = array();
$proto15["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto15);

$proto14["m_sql"] = "(select concat(sum(a.candidato1), \" (\", ROUND(((((sum(a.candidato1)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)) ))))*100),1), \"%)\")    from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto14["m_srcTableName"] = "Alc - Por Urna";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "PAC";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$proto36=array();
$proto36["m_strHead"] = "select";
$proto36["m_strFieldList"] = "concat(sum(a.candidato2), \" (\", ROUND((((sum(a.candidato2)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto36["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto36["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto36["m_strOrderBy"] = "";
	
		;
			$proto36["cipherer"] = null;
$proto38=array();
$proto38["m_sql"] = "u.id_urna = ur.id_urna";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= ur.id_urna";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_where"] = $obj;
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto36["m_having"] = $obj;
$proto36["m_fieldlist"] = array();
						$proto42=array();
			$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato2)"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato2)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto43);

$proto42["m_sql"] = "concat(sum(a.candidato2), \" (\", ROUND((((sum(a.candidato2)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto42["m_srcTableName"] = "Alc - Por Urna";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto36["m_fieldlist"][]=$obj;
$proto36["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "voto_alcalde";
$proto49["m_srcTableName"] = "Alc - Por Urna";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "elecciones";
$proto49["m_columns"][] = "id_urna";
$proto49["m_columns"][] = "candidato1";
$proto49["m_columns"][] = "candidato2";
$proto49["m_columns"][] = "candidato3";
$proto49["m_columns"][] = "candidato4";
$proto49["m_columns"][] = "candidato5";
$proto49["m_columns"][] = "candidato6";
$proto49["m_columns"][] = "candidato7";
$proto49["m_columns"][] = "candidato8";
$proto49["m_columns"][] = "candidato9";
$proto49["m_columns"][] = "candidato10";
$proto49["m_columns"][] = "candidato11";
$proto49["m_columns"][] = "candidato12";
$proto49["m_columns"][] = "validos";
$proto49["m_columns"][] = "blancos";
$proto49["m_columns"][] = "nulos";
$proto49["m_columns"][] = "utilizados";
$proto49["m_columns"][] = "no_utilizados";
$proto49["m_columns"][] = "total";
$proto49["m_columns"][] = "usuario";
$proto49["m_columns"][] = "fecha";
$proto49["m_columns"][] = "editado_por";
$proto49["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "voto_alcalde as a";
$proto48["m_alias"] = "a";
$proto48["m_srcTableName"] = "Alc - Por Urna";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto36["m_fromlist"][]=$obj;
												$proto52=array();
$proto52["m_link"] = "SQLL_INNERJOIN";
			$proto53=array();
$proto53["m_strName"] = "urna";
$proto53["m_srcTableName"] = "Alc - Por Urna";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "id_distrito";
$proto53["m_columns"][] = "id_sector";
$proto53["m_columns"][] = "id_urna";
$proto53["m_columns"][] = "nombre_centro";
$proto53["m_columns"][] = "ubicación";
$proto53["m_columns"][] = "votantes";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto52["m_alias"] = "u";
$proto52["m_srcTableName"] = "Alc - Por Urna";
$proto54=array();
$proto54["m_sql"] = "a.id_urna = u.id_urna";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "= u.id_urna";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto36["m_fromlist"][]=$obj;
$proto36["m_groupby"] = array();
$proto36["m_orderby"] = array();
$proto36["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto36);

$proto35["m_sql"] = "(select concat(sum(a.candidato2), \" (\", ROUND((((sum(a.candidato2)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto35["m_srcTableName"] = "Alc - Por Urna";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "FAPER";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$proto57=array();
$proto57["m_strHead"] = "select";
$proto57["m_strFieldList"] = "concat(sum(a.candidato3), \" (\", ROUND((((sum(a.candidato3)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto57["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto57["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto57["m_strOrderBy"] = "";
	
		;
			$proto57["cipherer"] = null;
$proto59=array();
$proto59["m_sql"] = "u.id_urna = ur.id_urna";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "= ur.id_urna";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = false;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

$proto57["m_where"] = $obj;
$proto61=array();
$proto61["m_sql"] = "";
$proto61["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto61["m_column"]=$obj;
$proto61["m_contained"] = array();
$proto61["m_strCase"] = "";
$proto61["m_havingmode"] = false;
$proto61["m_inBrackets"] = false;
$proto61["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto61);

$proto57["m_having"] = $obj;
$proto57["m_fieldlist"] = array();
						$proto63=array();
			$proto64=array();
$proto64["m_functiontype"] = "SQLF_CUSTOM";
$proto64["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato3)"
));

$proto64["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto64["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato3)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto64["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto64["m_arguments"][]=$obj;
$proto64["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto64);

$proto63["m_sql"] = "concat(sum(a.candidato3), \" (\", ROUND((((sum(a.candidato3)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto63["m_srcTableName"] = "Alc - Por Urna";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto57["m_fieldlist"][]=$obj;
$proto57["m_fromlist"] = array();
												$proto69=array();
$proto69["m_link"] = "SQLL_MAIN";
			$proto70=array();
$proto70["m_strName"] = "voto_alcalde";
$proto70["m_srcTableName"] = "Alc - Por Urna";
$proto70["m_columns"] = array();
$proto70["m_columns"][] = "elecciones";
$proto70["m_columns"][] = "id_urna";
$proto70["m_columns"][] = "candidato1";
$proto70["m_columns"][] = "candidato2";
$proto70["m_columns"][] = "candidato3";
$proto70["m_columns"][] = "candidato4";
$proto70["m_columns"][] = "candidato5";
$proto70["m_columns"][] = "candidato6";
$proto70["m_columns"][] = "candidato7";
$proto70["m_columns"][] = "candidato8";
$proto70["m_columns"][] = "candidato9";
$proto70["m_columns"][] = "candidato10";
$proto70["m_columns"][] = "candidato11";
$proto70["m_columns"][] = "candidato12";
$proto70["m_columns"][] = "validos";
$proto70["m_columns"][] = "blancos";
$proto70["m_columns"][] = "nulos";
$proto70["m_columns"][] = "utilizados";
$proto70["m_columns"][] = "no_utilizados";
$proto70["m_columns"][] = "total";
$proto70["m_columns"][] = "usuario";
$proto70["m_columns"][] = "fecha";
$proto70["m_columns"][] = "editado_por";
$proto70["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto70);

$proto69["m_table"] = $obj;
$proto69["m_sql"] = "voto_alcalde as a";
$proto69["m_alias"] = "a";
$proto69["m_srcTableName"] = "Alc - Por Urna";
$proto71=array();
$proto71["m_sql"] = "";
$proto71["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto71["m_column"]=$obj;
$proto71["m_contained"] = array();
$proto71["m_strCase"] = "";
$proto71["m_havingmode"] = false;
$proto71["m_inBrackets"] = false;
$proto71["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto71);

$proto69["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto69);

$proto57["m_fromlist"][]=$obj;
												$proto73=array();
$proto73["m_link"] = "SQLL_INNERJOIN";
			$proto74=array();
$proto74["m_strName"] = "urna";
$proto74["m_srcTableName"] = "Alc - Por Urna";
$proto74["m_columns"] = array();
$proto74["m_columns"][] = "id_distrito";
$proto74["m_columns"][] = "id_sector";
$proto74["m_columns"][] = "id_urna";
$proto74["m_columns"][] = "nombre_centro";
$proto74["m_columns"][] = "ubicación";
$proto74["m_columns"][] = "votantes";
$obj = new SQLTable($proto74);

$proto73["m_table"] = $obj;
$proto73["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto73["m_alias"] = "u";
$proto73["m_srcTableName"] = "Alc - Por Urna";
$proto75=array();
$proto75["m_sql"] = "a.id_urna = u.id_urna";
$proto75["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto75["m_column"]=$obj;
$proto75["m_contained"] = array();
$proto75["m_strCase"] = "= u.id_urna";
$proto75["m_havingmode"] = false;
$proto75["m_inBrackets"] = false;
$proto75["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto75);

$proto73["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto73);

$proto57["m_fromlist"][]=$obj;
$proto57["m_groupby"] = array();
$proto57["m_orderby"] = array();
$proto57["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto57);

$proto56["m_sql"] = "(select concat(sum(a.candidato3), \" (\", ROUND((((sum(a.candidato3)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto56["m_srcTableName"] = "Alc - Por Urna";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "NUEVA_RUTA";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$proto78=array();
$proto78["m_strHead"] = "select";
$proto78["m_strFieldList"] = "concat(sum(a.candidato4), \" (\", ROUND((((sum(a.candidato4)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto78["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto78["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto78["m_strOrderBy"] = "";
	
		;
			$proto78["cipherer"] = null;
$proto80=array();
$proto80["m_sql"] = "u.id_urna = ur.id_urna";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "= ur.id_urna";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_where"] = $obj;
$proto82=array();
$proto82["m_sql"] = "";
$proto82["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto82["m_column"]=$obj;
$proto82["m_contained"] = array();
$proto82["m_strCase"] = "";
$proto82["m_havingmode"] = false;
$proto82["m_inBrackets"] = false;
$proto82["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto82);

$proto78["m_having"] = $obj;
$proto78["m_fieldlist"] = array();
						$proto84=array();
			$proto85=array();
$proto85["m_functiontype"] = "SQLF_CUSTOM";
$proto85["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato4)"
));

$proto85["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto85["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato4)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto85["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto85["m_arguments"][]=$obj;
$proto85["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto85);

$proto84["m_sql"] = "concat(sum(a.candidato4), \" (\", ROUND((((sum(a.candidato4)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto84["m_srcTableName"] = "Alc - Por Urna";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto78["m_fieldlist"][]=$obj;
$proto78["m_fromlist"] = array();
												$proto90=array();
$proto90["m_link"] = "SQLL_MAIN";
			$proto91=array();
$proto91["m_strName"] = "voto_alcalde";
$proto91["m_srcTableName"] = "Alc - Por Urna";
$proto91["m_columns"] = array();
$proto91["m_columns"][] = "elecciones";
$proto91["m_columns"][] = "id_urna";
$proto91["m_columns"][] = "candidato1";
$proto91["m_columns"][] = "candidato2";
$proto91["m_columns"][] = "candidato3";
$proto91["m_columns"][] = "candidato4";
$proto91["m_columns"][] = "candidato5";
$proto91["m_columns"][] = "candidato6";
$proto91["m_columns"][] = "candidato7";
$proto91["m_columns"][] = "candidato8";
$proto91["m_columns"][] = "candidato9";
$proto91["m_columns"][] = "candidato10";
$proto91["m_columns"][] = "candidato11";
$proto91["m_columns"][] = "candidato12";
$proto91["m_columns"][] = "validos";
$proto91["m_columns"][] = "blancos";
$proto91["m_columns"][] = "nulos";
$proto91["m_columns"][] = "utilizados";
$proto91["m_columns"][] = "no_utilizados";
$proto91["m_columns"][] = "total";
$proto91["m_columns"][] = "usuario";
$proto91["m_columns"][] = "fecha";
$proto91["m_columns"][] = "editado_por";
$proto91["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto91);

$proto90["m_table"] = $obj;
$proto90["m_sql"] = "voto_alcalde as a";
$proto90["m_alias"] = "a";
$proto90["m_srcTableName"] = "Alc - Por Urna";
$proto92=array();
$proto92["m_sql"] = "";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
$proto92["m_strCase"] = "";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

$proto90["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto90);

$proto78["m_fromlist"][]=$obj;
												$proto94=array();
$proto94["m_link"] = "SQLL_INNERJOIN";
			$proto95=array();
$proto95["m_strName"] = "urna";
$proto95["m_srcTableName"] = "Alc - Por Urna";
$proto95["m_columns"] = array();
$proto95["m_columns"][] = "id_distrito";
$proto95["m_columns"][] = "id_sector";
$proto95["m_columns"][] = "id_urna";
$proto95["m_columns"][] = "nombre_centro";
$proto95["m_columns"][] = "ubicación";
$proto95["m_columns"][] = "votantes";
$obj = new SQLTable($proto95);

$proto94["m_table"] = $obj;
$proto94["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto94["m_alias"] = "u";
$proto94["m_srcTableName"] = "Alc - Por Urna";
$proto96=array();
$proto96["m_sql"] = "a.id_urna = u.id_urna";
$proto96["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto96["m_column"]=$obj;
$proto96["m_contained"] = array();
$proto96["m_strCase"] = "= u.id_urna";
$proto96["m_havingmode"] = false;
$proto96["m_inBrackets"] = false;
$proto96["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto96);

$proto94["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto94);

$proto78["m_fromlist"][]=$obj;
$proto78["m_groupby"] = array();
$proto78["m_orderby"] = array();
$proto78["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto78);

$proto77["m_sql"] = "(select concat(sum(a.candidato4), \" (\", ROUND((((sum(a.candidato4)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto77["m_srcTableName"] = "Alc - Por Urna";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "ALIANZA_PAT";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$proto99=array();
$proto99["m_strHead"] = "select";
$proto99["m_strFieldList"] = "concat(sum(a.candidato5), \" (\", ROUND((((sum(a.candidato5)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto99["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto99["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto99["m_strOrderBy"] = "";
	
		;
			$proto99["cipherer"] = null;
$proto101=array();
$proto101["m_sql"] = "u.id_urna = ur.id_urna";
$proto101["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto101["m_column"]=$obj;
$proto101["m_contained"] = array();
$proto101["m_strCase"] = "= ur.id_urna";
$proto101["m_havingmode"] = false;
$proto101["m_inBrackets"] = false;
$proto101["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto101);

$proto99["m_where"] = $obj;
$proto103=array();
$proto103["m_sql"] = "";
$proto103["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto103["m_column"]=$obj;
$proto103["m_contained"] = array();
$proto103["m_strCase"] = "";
$proto103["m_havingmode"] = false;
$proto103["m_inBrackets"] = false;
$proto103["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto103);

$proto99["m_having"] = $obj;
$proto99["m_fieldlist"] = array();
						$proto105=array();
			$proto106=array();
$proto106["m_functiontype"] = "SQLF_CUSTOM";
$proto106["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato5)"
));

$proto106["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto106["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato5)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto106["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto106["m_arguments"][]=$obj;
$proto106["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto106);

$proto105["m_sql"] = "concat(sum(a.candidato5), \" (\", ROUND((((sum(a.candidato5)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto105["m_srcTableName"] = "Alc - Por Urna";
$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto99["m_fieldlist"][]=$obj;
$proto99["m_fromlist"] = array();
												$proto111=array();
$proto111["m_link"] = "SQLL_MAIN";
			$proto112=array();
$proto112["m_strName"] = "voto_alcalde";
$proto112["m_srcTableName"] = "Alc - Por Urna";
$proto112["m_columns"] = array();
$proto112["m_columns"][] = "elecciones";
$proto112["m_columns"][] = "id_urna";
$proto112["m_columns"][] = "candidato1";
$proto112["m_columns"][] = "candidato2";
$proto112["m_columns"][] = "candidato3";
$proto112["m_columns"][] = "candidato4";
$proto112["m_columns"][] = "candidato5";
$proto112["m_columns"][] = "candidato6";
$proto112["m_columns"][] = "candidato7";
$proto112["m_columns"][] = "candidato8";
$proto112["m_columns"][] = "candidato9";
$proto112["m_columns"][] = "candidato10";
$proto112["m_columns"][] = "candidato11";
$proto112["m_columns"][] = "candidato12";
$proto112["m_columns"][] = "validos";
$proto112["m_columns"][] = "blancos";
$proto112["m_columns"][] = "nulos";
$proto112["m_columns"][] = "utilizados";
$proto112["m_columns"][] = "no_utilizados";
$proto112["m_columns"][] = "total";
$proto112["m_columns"][] = "usuario";
$proto112["m_columns"][] = "fecha";
$proto112["m_columns"][] = "editado_por";
$proto112["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto112);

$proto111["m_table"] = $obj;
$proto111["m_sql"] = "voto_alcalde as a";
$proto111["m_alias"] = "a";
$proto111["m_srcTableName"] = "Alc - Por Urna";
$proto113=array();
$proto113["m_sql"] = "";
$proto113["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto113["m_column"]=$obj;
$proto113["m_contained"] = array();
$proto113["m_strCase"] = "";
$proto113["m_havingmode"] = false;
$proto113["m_inBrackets"] = false;
$proto113["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto113);

$proto111["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto111);

$proto99["m_fromlist"][]=$obj;
												$proto115=array();
$proto115["m_link"] = "SQLL_INNERJOIN";
			$proto116=array();
$proto116["m_strName"] = "urna";
$proto116["m_srcTableName"] = "Alc - Por Urna";
$proto116["m_columns"] = array();
$proto116["m_columns"][] = "id_distrito";
$proto116["m_columns"][] = "id_sector";
$proto116["m_columns"][] = "id_urna";
$proto116["m_columns"][] = "nombre_centro";
$proto116["m_columns"][] = "ubicación";
$proto116["m_columns"][] = "votantes";
$obj = new SQLTable($proto116);

$proto115["m_table"] = $obj;
$proto115["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto115["m_alias"] = "u";
$proto115["m_srcTableName"] = "Alc - Por Urna";
$proto117=array();
$proto117["m_sql"] = "a.id_urna = u.id_urna";
$proto117["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto117["m_column"]=$obj;
$proto117["m_contained"] = array();
$proto117["m_strCase"] = "= u.id_urna";
$proto117["m_havingmode"] = false;
$proto117["m_inBrackets"] = false;
$proto117["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto117);

$proto115["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto115);

$proto99["m_fromlist"][]=$obj;
$proto99["m_groupby"] = array();
$proto99["m_orderby"] = array();
$proto99["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto99);

$proto98["m_sql"] = "(select concat(sum(a.candidato5), \" (\", ROUND((((sum(a.candidato5)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto98["m_srcTableName"] = "Alc - Por Urna";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "LIBRE";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto119=array();
			$proto120=array();
$proto120["m_strHead"] = "select";
$proto120["m_strFieldList"] = "concat(sum(a.candidato6), \" (\", ROUND((((sum(a.candidato6)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto120["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto120["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto120["m_strOrderBy"] = "";
	
		;
			$proto120["cipherer"] = null;
$proto122=array();
$proto122["m_sql"] = "u.id_urna = ur.id_urna";
$proto122["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto122["m_column"]=$obj;
$proto122["m_contained"] = array();
$proto122["m_strCase"] = "= ur.id_urna";
$proto122["m_havingmode"] = false;
$proto122["m_inBrackets"] = false;
$proto122["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto122);

$proto120["m_where"] = $obj;
$proto124=array();
$proto124["m_sql"] = "";
$proto124["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto124["m_column"]=$obj;
$proto124["m_contained"] = array();
$proto124["m_strCase"] = "";
$proto124["m_havingmode"] = false;
$proto124["m_inBrackets"] = false;
$proto124["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto124);

$proto120["m_having"] = $obj;
$proto120["m_fieldlist"] = array();
						$proto126=array();
			$proto127=array();
$proto127["m_functiontype"] = "SQLF_CUSTOM";
$proto127["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato6)"
));

$proto127["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto127["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato6)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto127["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto127["m_arguments"][]=$obj;
$proto127["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto127);

$proto126["m_sql"] = "concat(sum(a.candidato6), \" (\", ROUND((((sum(a.candidato6)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto126["m_srcTableName"] = "Alc - Por Urna";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto120["m_fieldlist"][]=$obj;
$proto120["m_fromlist"] = array();
												$proto132=array();
$proto132["m_link"] = "SQLL_MAIN";
			$proto133=array();
$proto133["m_strName"] = "voto_alcalde";
$proto133["m_srcTableName"] = "Alc - Por Urna";
$proto133["m_columns"] = array();
$proto133["m_columns"][] = "elecciones";
$proto133["m_columns"][] = "id_urna";
$proto133["m_columns"][] = "candidato1";
$proto133["m_columns"][] = "candidato2";
$proto133["m_columns"][] = "candidato3";
$proto133["m_columns"][] = "candidato4";
$proto133["m_columns"][] = "candidato5";
$proto133["m_columns"][] = "candidato6";
$proto133["m_columns"][] = "candidato7";
$proto133["m_columns"][] = "candidato8";
$proto133["m_columns"][] = "candidato9";
$proto133["m_columns"][] = "candidato10";
$proto133["m_columns"][] = "candidato11";
$proto133["m_columns"][] = "candidato12";
$proto133["m_columns"][] = "validos";
$proto133["m_columns"][] = "blancos";
$proto133["m_columns"][] = "nulos";
$proto133["m_columns"][] = "utilizados";
$proto133["m_columns"][] = "no_utilizados";
$proto133["m_columns"][] = "total";
$proto133["m_columns"][] = "usuario";
$proto133["m_columns"][] = "fecha";
$proto133["m_columns"][] = "editado_por";
$proto133["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto133);

$proto132["m_table"] = $obj;
$proto132["m_sql"] = "voto_alcalde as a";
$proto132["m_alias"] = "a";
$proto132["m_srcTableName"] = "Alc - Por Urna";
$proto134=array();
$proto134["m_sql"] = "";
$proto134["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto134["m_column"]=$obj;
$proto134["m_contained"] = array();
$proto134["m_strCase"] = "";
$proto134["m_havingmode"] = false;
$proto134["m_inBrackets"] = false;
$proto134["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto134);

$proto132["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto132);

$proto120["m_fromlist"][]=$obj;
												$proto136=array();
$proto136["m_link"] = "SQLL_INNERJOIN";
			$proto137=array();
$proto137["m_strName"] = "urna";
$proto137["m_srcTableName"] = "Alc - Por Urna";
$proto137["m_columns"] = array();
$proto137["m_columns"][] = "id_distrito";
$proto137["m_columns"][] = "id_sector";
$proto137["m_columns"][] = "id_urna";
$proto137["m_columns"][] = "nombre_centro";
$proto137["m_columns"][] = "ubicación";
$proto137["m_columns"][] = "votantes";
$obj = new SQLTable($proto137);

$proto136["m_table"] = $obj;
$proto136["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto136["m_alias"] = "u";
$proto136["m_srcTableName"] = "Alc - Por Urna";
$proto138=array();
$proto138["m_sql"] = "a.id_urna = u.id_urna";
$proto138["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto138["m_column"]=$obj;
$proto138["m_contained"] = array();
$proto138["m_strCase"] = "= u.id_urna";
$proto138["m_havingmode"] = false;
$proto138["m_inBrackets"] = false;
$proto138["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto138);

$proto136["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto136);

$proto120["m_fromlist"][]=$obj;
$proto120["m_groupby"] = array();
$proto120["m_orderby"] = array();
$proto120["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto120);

$proto119["m_sql"] = "(select concat(sum(a.candidato6), \" (\", ROUND((((sum(a.candidato6)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto119["m_srcTableName"] = "Alc - Por Urna";
$proto119["m_expr"]=$obj;
$proto119["m_alias"] = "PSH";
$obj = new SQLFieldListItem($proto119);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$proto141=array();
$proto141["m_strHead"] = "select";
$proto141["m_strFieldList"] = "concat(sum(a.candidato7), \" (\", ROUND((((sum(a.candidato7)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto141["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto141["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto141["m_strOrderBy"] = "";
	
		;
			$proto141["cipherer"] = null;
$proto143=array();
$proto143["m_sql"] = "u.id_urna = ur.id_urna";
$proto143["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto143["m_column"]=$obj;
$proto143["m_contained"] = array();
$proto143["m_strCase"] = "= ur.id_urna";
$proto143["m_havingmode"] = false;
$proto143["m_inBrackets"] = false;
$proto143["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto143);

$proto141["m_where"] = $obj;
$proto145=array();
$proto145["m_sql"] = "";
$proto145["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto145["m_column"]=$obj;
$proto145["m_contained"] = array();
$proto145["m_strCase"] = "";
$proto145["m_havingmode"] = false;
$proto145["m_inBrackets"] = false;
$proto145["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto145);

$proto141["m_having"] = $obj;
$proto141["m_fieldlist"] = array();
						$proto147=array();
			$proto148=array();
$proto148["m_functiontype"] = "SQLF_CUSTOM";
$proto148["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato7)"
));

$proto148["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto148["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato7)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto148["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto148["m_arguments"][]=$obj;
$proto148["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto148);

$proto147["m_sql"] = "concat(sum(a.candidato7), \" (\", ROUND((((sum(a.candidato7)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto147["m_srcTableName"] = "Alc - Por Urna";
$proto147["m_expr"]=$obj;
$proto147["m_alias"] = "";
$obj = new SQLFieldListItem($proto147);

$proto141["m_fieldlist"][]=$obj;
$proto141["m_fromlist"] = array();
												$proto153=array();
$proto153["m_link"] = "SQLL_MAIN";
			$proto154=array();
$proto154["m_strName"] = "voto_alcalde";
$proto154["m_srcTableName"] = "Alc - Por Urna";
$proto154["m_columns"] = array();
$proto154["m_columns"][] = "elecciones";
$proto154["m_columns"][] = "id_urna";
$proto154["m_columns"][] = "candidato1";
$proto154["m_columns"][] = "candidato2";
$proto154["m_columns"][] = "candidato3";
$proto154["m_columns"][] = "candidato4";
$proto154["m_columns"][] = "candidato5";
$proto154["m_columns"][] = "candidato6";
$proto154["m_columns"][] = "candidato7";
$proto154["m_columns"][] = "candidato8";
$proto154["m_columns"][] = "candidato9";
$proto154["m_columns"][] = "candidato10";
$proto154["m_columns"][] = "candidato11";
$proto154["m_columns"][] = "candidato12";
$proto154["m_columns"][] = "validos";
$proto154["m_columns"][] = "blancos";
$proto154["m_columns"][] = "nulos";
$proto154["m_columns"][] = "utilizados";
$proto154["m_columns"][] = "no_utilizados";
$proto154["m_columns"][] = "total";
$proto154["m_columns"][] = "usuario";
$proto154["m_columns"][] = "fecha";
$proto154["m_columns"][] = "editado_por";
$proto154["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto154);

$proto153["m_table"] = $obj;
$proto153["m_sql"] = "voto_alcalde as a";
$proto153["m_alias"] = "a";
$proto153["m_srcTableName"] = "Alc - Por Urna";
$proto155=array();
$proto155["m_sql"] = "";
$proto155["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto155["m_column"]=$obj;
$proto155["m_contained"] = array();
$proto155["m_strCase"] = "";
$proto155["m_havingmode"] = false;
$proto155["m_inBrackets"] = false;
$proto155["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto155);

$proto153["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto153);

$proto141["m_fromlist"][]=$obj;
												$proto157=array();
$proto157["m_link"] = "SQLL_INNERJOIN";
			$proto158=array();
$proto158["m_strName"] = "urna";
$proto158["m_srcTableName"] = "Alc - Por Urna";
$proto158["m_columns"] = array();
$proto158["m_columns"][] = "id_distrito";
$proto158["m_columns"][] = "id_sector";
$proto158["m_columns"][] = "id_urna";
$proto158["m_columns"][] = "nombre_centro";
$proto158["m_columns"][] = "ubicación";
$proto158["m_columns"][] = "votantes";
$obj = new SQLTable($proto158);

$proto157["m_table"] = $obj;
$proto157["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto157["m_alias"] = "u";
$proto157["m_srcTableName"] = "Alc - Por Urna";
$proto159=array();
$proto159["m_sql"] = "a.id_urna = u.id_urna";
$proto159["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto159["m_column"]=$obj;
$proto159["m_contained"] = array();
$proto159["m_strCase"] = "= u.id_urna";
$proto159["m_havingmode"] = false;
$proto159["m_inBrackets"] = false;
$proto159["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto159);

$proto157["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto157);

$proto141["m_fromlist"][]=$obj;
$proto141["m_groupby"] = array();
$proto141["m_orderby"] = array();
$proto141["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto141);

$proto140["m_sql"] = "(select concat(sum(a.candidato7), \" (\", ROUND((((sum(a.candidato7)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto140["m_srcTableName"] = "Alc - Por Urna";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "LIDEHR";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto161=array();
			$proto162=array();
$proto162["m_strHead"] = "select";
$proto162["m_strFieldList"] = "concat(sum(a.candidato8), \" (\", ROUND((((sum(a.candidato8)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto162["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto162["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto162["m_strOrderBy"] = "";
	
		;
			$proto162["cipherer"] = null;
$proto164=array();
$proto164["m_sql"] = "u.id_urna = ur.id_urna";
$proto164["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto164["m_column"]=$obj;
$proto164["m_contained"] = array();
$proto164["m_strCase"] = "= ur.id_urna";
$proto164["m_havingmode"] = false;
$proto164["m_inBrackets"] = false;
$proto164["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto164);

$proto162["m_where"] = $obj;
$proto166=array();
$proto166["m_sql"] = "";
$proto166["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto166["m_column"]=$obj;
$proto166["m_contained"] = array();
$proto166["m_strCase"] = "";
$proto166["m_havingmode"] = false;
$proto166["m_inBrackets"] = false;
$proto166["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto166);

$proto162["m_having"] = $obj;
$proto162["m_fieldlist"] = array();
						$proto168=array();
			$proto169=array();
$proto169["m_functiontype"] = "SQLF_CUSTOM";
$proto169["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato8)"
));

$proto169["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto169["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato8)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto169["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto169["m_arguments"][]=$obj;
$proto169["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto169);

$proto168["m_sql"] = "concat(sum(a.candidato8), \" (\", ROUND((((sum(a.candidato8)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto168["m_srcTableName"] = "Alc - Por Urna";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto162["m_fieldlist"][]=$obj;
$proto162["m_fromlist"] = array();
												$proto174=array();
$proto174["m_link"] = "SQLL_MAIN";
			$proto175=array();
$proto175["m_strName"] = "voto_alcalde";
$proto175["m_srcTableName"] = "Alc - Por Urna";
$proto175["m_columns"] = array();
$proto175["m_columns"][] = "elecciones";
$proto175["m_columns"][] = "id_urna";
$proto175["m_columns"][] = "candidato1";
$proto175["m_columns"][] = "candidato2";
$proto175["m_columns"][] = "candidato3";
$proto175["m_columns"][] = "candidato4";
$proto175["m_columns"][] = "candidato5";
$proto175["m_columns"][] = "candidato6";
$proto175["m_columns"][] = "candidato7";
$proto175["m_columns"][] = "candidato8";
$proto175["m_columns"][] = "candidato9";
$proto175["m_columns"][] = "candidato10";
$proto175["m_columns"][] = "candidato11";
$proto175["m_columns"][] = "candidato12";
$proto175["m_columns"][] = "validos";
$proto175["m_columns"][] = "blancos";
$proto175["m_columns"][] = "nulos";
$proto175["m_columns"][] = "utilizados";
$proto175["m_columns"][] = "no_utilizados";
$proto175["m_columns"][] = "total";
$proto175["m_columns"][] = "usuario";
$proto175["m_columns"][] = "fecha";
$proto175["m_columns"][] = "editado_por";
$proto175["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto175);

$proto174["m_table"] = $obj;
$proto174["m_sql"] = "voto_alcalde as a";
$proto174["m_alias"] = "a";
$proto174["m_srcTableName"] = "Alc - Por Urna";
$proto176=array();
$proto176["m_sql"] = "";
$proto176["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto176["m_column"]=$obj;
$proto176["m_contained"] = array();
$proto176["m_strCase"] = "";
$proto176["m_havingmode"] = false;
$proto176["m_inBrackets"] = false;
$proto176["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto176);

$proto174["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto174);

$proto162["m_fromlist"][]=$obj;
												$proto178=array();
$proto178["m_link"] = "SQLL_INNERJOIN";
			$proto179=array();
$proto179["m_strName"] = "urna";
$proto179["m_srcTableName"] = "Alc - Por Urna";
$proto179["m_columns"] = array();
$proto179["m_columns"][] = "id_distrito";
$proto179["m_columns"][] = "id_sector";
$proto179["m_columns"][] = "id_urna";
$proto179["m_columns"][] = "nombre_centro";
$proto179["m_columns"][] = "ubicación";
$proto179["m_columns"][] = "votantes";
$obj = new SQLTable($proto179);

$proto178["m_table"] = $obj;
$proto178["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto178["m_alias"] = "u";
$proto178["m_srcTableName"] = "Alc - Por Urna";
$proto180=array();
$proto180["m_sql"] = "a.id_urna = u.id_urna";
$proto180["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto180["m_column"]=$obj;
$proto180["m_contained"] = array();
$proto180["m_strCase"] = "= u.id_urna";
$proto180["m_havingmode"] = false;
$proto180["m_inBrackets"] = false;
$proto180["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto180);

$proto178["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto178);

$proto162["m_fromlist"][]=$obj;
$proto162["m_groupby"] = array();
$proto162["m_orderby"] = array();
$proto162["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto162);

$proto161["m_sql"] = "(select concat(sum(a.candidato8), \" (\", ROUND((((sum(a.candidato8)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto161["m_srcTableName"] = "Alc - Por Urna";
$proto161["m_expr"]=$obj;
$proto161["m_alias"] = "DC";
$obj = new SQLFieldListItem($proto161);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$proto183=array();
$proto183["m_strHead"] = "select";
$proto183["m_strFieldList"] = "concat(sum(a.candidato9), \" (\", ROUND((((sum(a.candidato9)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto183["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto183["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto183["m_strOrderBy"] = "";
	
		;
			$proto183["cipherer"] = null;
$proto185=array();
$proto185["m_sql"] = "u.id_urna = ur.id_urna";
$proto185["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto185["m_column"]=$obj;
$proto185["m_contained"] = array();
$proto185["m_strCase"] = "= ur.id_urna";
$proto185["m_havingmode"] = false;
$proto185["m_inBrackets"] = false;
$proto185["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto185);

$proto183["m_where"] = $obj;
$proto187=array();
$proto187["m_sql"] = "";
$proto187["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto187["m_column"]=$obj;
$proto187["m_contained"] = array();
$proto187["m_strCase"] = "";
$proto187["m_havingmode"] = false;
$proto187["m_inBrackets"] = false;
$proto187["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto187);

$proto183["m_having"] = $obj;
$proto183["m_fieldlist"] = array();
						$proto189=array();
			$proto190=array();
$proto190["m_functiontype"] = "SQLF_CUSTOM";
$proto190["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato9)"
));

$proto190["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto190["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato9)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto190["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto190["m_arguments"][]=$obj;
$proto190["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto190);

$proto189["m_sql"] = "concat(sum(a.candidato9), \" (\", ROUND((((sum(a.candidato9)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto189["m_srcTableName"] = "Alc - Por Urna";
$proto189["m_expr"]=$obj;
$proto189["m_alias"] = "";
$obj = new SQLFieldListItem($proto189);

$proto183["m_fieldlist"][]=$obj;
$proto183["m_fromlist"] = array();
												$proto195=array();
$proto195["m_link"] = "SQLL_MAIN";
			$proto196=array();
$proto196["m_strName"] = "voto_alcalde";
$proto196["m_srcTableName"] = "Alc - Por Urna";
$proto196["m_columns"] = array();
$proto196["m_columns"][] = "elecciones";
$proto196["m_columns"][] = "id_urna";
$proto196["m_columns"][] = "candidato1";
$proto196["m_columns"][] = "candidato2";
$proto196["m_columns"][] = "candidato3";
$proto196["m_columns"][] = "candidato4";
$proto196["m_columns"][] = "candidato5";
$proto196["m_columns"][] = "candidato6";
$proto196["m_columns"][] = "candidato7";
$proto196["m_columns"][] = "candidato8";
$proto196["m_columns"][] = "candidato9";
$proto196["m_columns"][] = "candidato10";
$proto196["m_columns"][] = "candidato11";
$proto196["m_columns"][] = "candidato12";
$proto196["m_columns"][] = "validos";
$proto196["m_columns"][] = "blancos";
$proto196["m_columns"][] = "nulos";
$proto196["m_columns"][] = "utilizados";
$proto196["m_columns"][] = "no_utilizados";
$proto196["m_columns"][] = "total";
$proto196["m_columns"][] = "usuario";
$proto196["m_columns"][] = "fecha";
$proto196["m_columns"][] = "editado_por";
$proto196["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto196);

$proto195["m_table"] = $obj;
$proto195["m_sql"] = "voto_alcalde as a";
$proto195["m_alias"] = "a";
$proto195["m_srcTableName"] = "Alc - Por Urna";
$proto197=array();
$proto197["m_sql"] = "";
$proto197["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto197["m_column"]=$obj;
$proto197["m_contained"] = array();
$proto197["m_strCase"] = "";
$proto197["m_havingmode"] = false;
$proto197["m_inBrackets"] = false;
$proto197["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto197);

$proto195["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto195);

$proto183["m_fromlist"][]=$obj;
												$proto199=array();
$proto199["m_link"] = "SQLL_INNERJOIN";
			$proto200=array();
$proto200["m_strName"] = "urna";
$proto200["m_srcTableName"] = "Alc - Por Urna";
$proto200["m_columns"] = array();
$proto200["m_columns"][] = "id_distrito";
$proto200["m_columns"][] = "id_sector";
$proto200["m_columns"][] = "id_urna";
$proto200["m_columns"][] = "nombre_centro";
$proto200["m_columns"][] = "ubicación";
$proto200["m_columns"][] = "votantes";
$obj = new SQLTable($proto200);

$proto199["m_table"] = $obj;
$proto199["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto199["m_alias"] = "u";
$proto199["m_srcTableName"] = "Alc - Por Urna";
$proto201=array();
$proto201["m_sql"] = "a.id_urna = u.id_urna";
$proto201["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto201["m_column"]=$obj;
$proto201["m_contained"] = array();
$proto201["m_strCase"] = "= u.id_urna";
$proto201["m_havingmode"] = false;
$proto201["m_inBrackets"] = false;
$proto201["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto201);

$proto199["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto199);

$proto183["m_fromlist"][]=$obj;
$proto183["m_groupby"] = array();
$proto183["m_orderby"] = array();
$proto183["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto183);

$proto182["m_sql"] = "(select concat(sum(a.candidato9), \" (\", ROUND((((sum(a.candidato9)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto182["m_srcTableName"] = "Alc - Por Urna";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "TSH";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto203=array();
			$proto204=array();
$proto204["m_strHead"] = "select";
$proto204["m_strFieldList"] = "concat(sum(a.candidato10), \" (\", ROUND((((sum(a.candidato10)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto204["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto204["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto204["m_strOrderBy"] = "";
	
		;
			$proto204["cipherer"] = null;
$proto206=array();
$proto206["m_sql"] = "u.id_urna = ur.id_urna";
$proto206["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto206["m_column"]=$obj;
$proto206["m_contained"] = array();
$proto206["m_strCase"] = "= ur.id_urna";
$proto206["m_havingmode"] = false;
$proto206["m_inBrackets"] = false;
$proto206["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto206);

$proto204["m_where"] = $obj;
$proto208=array();
$proto208["m_sql"] = "";
$proto208["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto208["m_column"]=$obj;
$proto208["m_contained"] = array();
$proto208["m_strCase"] = "";
$proto208["m_havingmode"] = false;
$proto208["m_inBrackets"] = false;
$proto208["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto208);

$proto204["m_having"] = $obj;
$proto204["m_fieldlist"] = array();
						$proto210=array();
			$proto211=array();
$proto211["m_functiontype"] = "SQLF_CUSTOM";
$proto211["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato10)"
));

$proto211["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto211["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato10)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto211["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto211["m_arguments"][]=$obj;
$proto211["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto211);

$proto210["m_sql"] = "concat(sum(a.candidato10), \" (\", ROUND((((sum(a.candidato10)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto210["m_srcTableName"] = "Alc - Por Urna";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto204["m_fieldlist"][]=$obj;
$proto204["m_fromlist"] = array();
												$proto216=array();
$proto216["m_link"] = "SQLL_MAIN";
			$proto217=array();
$proto217["m_strName"] = "voto_alcalde";
$proto217["m_srcTableName"] = "Alc - Por Urna";
$proto217["m_columns"] = array();
$proto217["m_columns"][] = "elecciones";
$proto217["m_columns"][] = "id_urna";
$proto217["m_columns"][] = "candidato1";
$proto217["m_columns"][] = "candidato2";
$proto217["m_columns"][] = "candidato3";
$proto217["m_columns"][] = "candidato4";
$proto217["m_columns"][] = "candidato5";
$proto217["m_columns"][] = "candidato6";
$proto217["m_columns"][] = "candidato7";
$proto217["m_columns"][] = "candidato8";
$proto217["m_columns"][] = "candidato9";
$proto217["m_columns"][] = "candidato10";
$proto217["m_columns"][] = "candidato11";
$proto217["m_columns"][] = "candidato12";
$proto217["m_columns"][] = "validos";
$proto217["m_columns"][] = "blancos";
$proto217["m_columns"][] = "nulos";
$proto217["m_columns"][] = "utilizados";
$proto217["m_columns"][] = "no_utilizados";
$proto217["m_columns"][] = "total";
$proto217["m_columns"][] = "usuario";
$proto217["m_columns"][] = "fecha";
$proto217["m_columns"][] = "editado_por";
$proto217["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto217);

$proto216["m_table"] = $obj;
$proto216["m_sql"] = "voto_alcalde as a";
$proto216["m_alias"] = "a";
$proto216["m_srcTableName"] = "Alc - Por Urna";
$proto218=array();
$proto218["m_sql"] = "";
$proto218["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto218["m_column"]=$obj;
$proto218["m_contained"] = array();
$proto218["m_strCase"] = "";
$proto218["m_havingmode"] = false;
$proto218["m_inBrackets"] = false;
$proto218["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto218);

$proto216["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto216);

$proto204["m_fromlist"][]=$obj;
												$proto220=array();
$proto220["m_link"] = "SQLL_INNERJOIN";
			$proto221=array();
$proto221["m_strName"] = "urna";
$proto221["m_srcTableName"] = "Alc - Por Urna";
$proto221["m_columns"] = array();
$proto221["m_columns"][] = "id_distrito";
$proto221["m_columns"][] = "id_sector";
$proto221["m_columns"][] = "id_urna";
$proto221["m_columns"][] = "nombre_centro";
$proto221["m_columns"][] = "ubicación";
$proto221["m_columns"][] = "votantes";
$obj = new SQLTable($proto221);

$proto220["m_table"] = $obj;
$proto220["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto220["m_alias"] = "u";
$proto220["m_srcTableName"] = "Alc - Por Urna";
$proto222=array();
$proto222["m_sql"] = "a.id_urna = u.id_urna";
$proto222["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto222["m_column"]=$obj;
$proto222["m_contained"] = array();
$proto222["m_strCase"] = "= u.id_urna";
$proto222["m_havingmode"] = false;
$proto222["m_inBrackets"] = false;
$proto222["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto222);

$proto220["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto220);

$proto204["m_fromlist"][]=$obj;
$proto204["m_groupby"] = array();
$proto204["m_orderby"] = array();
$proto204["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto204);

$proto203["m_sql"] = "(select concat(sum(a.candidato10), \" (\", ROUND((((sum(a.candidato10)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto203["m_srcTableName"] = "Alc - Por Urna";
$proto203["m_expr"]=$obj;
$proto203["m_alias"] = "LIBERAL";
$obj = new SQLFieldListItem($proto203);

$proto0["m_fieldlist"][]=$obj;
						$proto224=array();
			$proto225=array();
$proto225["m_strHead"] = "select";
$proto225["m_strFieldList"] = "concat(sum(a.candidato11), \" (\", ROUND((((sum(a.candidato11)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto225["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto225["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto225["m_strOrderBy"] = "";
	
		;
			$proto225["cipherer"] = null;
$proto227=array();
$proto227["m_sql"] = "u.id_urna = ur.id_urna";
$proto227["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto227["m_column"]=$obj;
$proto227["m_contained"] = array();
$proto227["m_strCase"] = "= ur.id_urna";
$proto227["m_havingmode"] = false;
$proto227["m_inBrackets"] = false;
$proto227["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto227);

$proto225["m_where"] = $obj;
$proto229=array();
$proto229["m_sql"] = "";
$proto229["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto229["m_column"]=$obj;
$proto229["m_contained"] = array();
$proto229["m_strCase"] = "";
$proto229["m_havingmode"] = false;
$proto229["m_inBrackets"] = false;
$proto229["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto229);

$proto225["m_having"] = $obj;
$proto225["m_fieldlist"] = array();
						$proto231=array();
			$proto232=array();
$proto232["m_functiontype"] = "SQLF_CUSTOM";
$proto232["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato11)"
));

$proto232["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto232["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato11)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto232["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto232["m_arguments"][]=$obj;
$proto232["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto232);

$proto231["m_sql"] = "concat(sum(a.candidato11), \" (\", ROUND((((sum(a.candidato11)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto231["m_srcTableName"] = "Alc - Por Urna";
$proto231["m_expr"]=$obj;
$proto231["m_alias"] = "";
$obj = new SQLFieldListItem($proto231);

$proto225["m_fieldlist"][]=$obj;
$proto225["m_fromlist"] = array();
												$proto237=array();
$proto237["m_link"] = "SQLL_MAIN";
			$proto238=array();
$proto238["m_strName"] = "voto_alcalde";
$proto238["m_srcTableName"] = "Alc - Por Urna";
$proto238["m_columns"] = array();
$proto238["m_columns"][] = "elecciones";
$proto238["m_columns"][] = "id_urna";
$proto238["m_columns"][] = "candidato1";
$proto238["m_columns"][] = "candidato2";
$proto238["m_columns"][] = "candidato3";
$proto238["m_columns"][] = "candidato4";
$proto238["m_columns"][] = "candidato5";
$proto238["m_columns"][] = "candidato6";
$proto238["m_columns"][] = "candidato7";
$proto238["m_columns"][] = "candidato8";
$proto238["m_columns"][] = "candidato9";
$proto238["m_columns"][] = "candidato10";
$proto238["m_columns"][] = "candidato11";
$proto238["m_columns"][] = "candidato12";
$proto238["m_columns"][] = "validos";
$proto238["m_columns"][] = "blancos";
$proto238["m_columns"][] = "nulos";
$proto238["m_columns"][] = "utilizados";
$proto238["m_columns"][] = "no_utilizados";
$proto238["m_columns"][] = "total";
$proto238["m_columns"][] = "usuario";
$proto238["m_columns"][] = "fecha";
$proto238["m_columns"][] = "editado_por";
$proto238["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto238);

$proto237["m_table"] = $obj;
$proto237["m_sql"] = "voto_alcalde as a";
$proto237["m_alias"] = "a";
$proto237["m_srcTableName"] = "Alc - Por Urna";
$proto239=array();
$proto239["m_sql"] = "";
$proto239["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto239["m_column"]=$obj;
$proto239["m_contained"] = array();
$proto239["m_strCase"] = "";
$proto239["m_havingmode"] = false;
$proto239["m_inBrackets"] = false;
$proto239["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto239);

$proto237["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto237);

$proto225["m_fromlist"][]=$obj;
												$proto241=array();
$proto241["m_link"] = "SQLL_INNERJOIN";
			$proto242=array();
$proto242["m_strName"] = "urna";
$proto242["m_srcTableName"] = "Alc - Por Urna";
$proto242["m_columns"] = array();
$proto242["m_columns"][] = "id_distrito";
$proto242["m_columns"][] = "id_sector";
$proto242["m_columns"][] = "id_urna";
$proto242["m_columns"][] = "nombre_centro";
$proto242["m_columns"][] = "ubicación";
$proto242["m_columns"][] = "votantes";
$obj = new SQLTable($proto242);

$proto241["m_table"] = $obj;
$proto241["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto241["m_alias"] = "u";
$proto241["m_srcTableName"] = "Alc - Por Urna";
$proto243=array();
$proto243["m_sql"] = "a.id_urna = u.id_urna";
$proto243["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto243["m_column"]=$obj;
$proto243["m_contained"] = array();
$proto243["m_strCase"] = "= u.id_urna";
$proto243["m_havingmode"] = false;
$proto243["m_inBrackets"] = false;
$proto243["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto243);

$proto241["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto241);

$proto225["m_fromlist"][]=$obj;
$proto225["m_groupby"] = array();
$proto225["m_orderby"] = array();
$proto225["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto225);

$proto224["m_sql"] = "(select concat(sum(a.candidato11), \" (\", ROUND((((sum(a.candidato11)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto224["m_srcTableName"] = "Alc - Por Urna";
$proto224["m_expr"]=$obj;
$proto224["m_alias"] = "NACIONAL";
$obj = new SQLFieldListItem($proto224);

$proto0["m_fieldlist"][]=$obj;
						$proto245=array();
			$proto246=array();
$proto246["m_strHead"] = "select";
$proto246["m_strFieldList"] = "concat(sum(a.candidato12), \" (\", ROUND((((sum(a.candidato12)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto246["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto246["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto246["m_strOrderBy"] = "";
	
		;
			$proto246["cipherer"] = null;
$proto248=array();
$proto248["m_sql"] = "u.id_urna = ur.id_urna";
$proto248["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto248["m_column"]=$obj;
$proto248["m_contained"] = array();
$proto248["m_strCase"] = "= ur.id_urna";
$proto248["m_havingmode"] = false;
$proto248["m_inBrackets"] = false;
$proto248["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto248);

$proto246["m_where"] = $obj;
$proto250=array();
$proto250["m_sql"] = "";
$proto250["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto250["m_column"]=$obj;
$proto250["m_contained"] = array();
$proto250["m_strCase"] = "";
$proto250["m_havingmode"] = false;
$proto250["m_inBrackets"] = false;
$proto250["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto250);

$proto246["m_having"] = $obj;
$proto246["m_fieldlist"] = array();
						$proto252=array();
			$proto253=array();
$proto253["m_functiontype"] = "SQLF_CUSTOM";
$proto253["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato12)"
));

$proto253["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto253["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato12)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto253["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto253["m_arguments"][]=$obj;
$proto253["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto253);

$proto252["m_sql"] = "concat(sum(a.candidato12), \" (\", ROUND((((sum(a.candidato12)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto252["m_srcTableName"] = "Alc - Por Urna";
$proto252["m_expr"]=$obj;
$proto252["m_alias"] = "";
$obj = new SQLFieldListItem($proto252);

$proto246["m_fieldlist"][]=$obj;
$proto246["m_fromlist"] = array();
												$proto258=array();
$proto258["m_link"] = "SQLL_MAIN";
			$proto259=array();
$proto259["m_strName"] = "voto_alcalde";
$proto259["m_srcTableName"] = "Alc - Por Urna";
$proto259["m_columns"] = array();
$proto259["m_columns"][] = "elecciones";
$proto259["m_columns"][] = "id_urna";
$proto259["m_columns"][] = "candidato1";
$proto259["m_columns"][] = "candidato2";
$proto259["m_columns"][] = "candidato3";
$proto259["m_columns"][] = "candidato4";
$proto259["m_columns"][] = "candidato5";
$proto259["m_columns"][] = "candidato6";
$proto259["m_columns"][] = "candidato7";
$proto259["m_columns"][] = "candidato8";
$proto259["m_columns"][] = "candidato9";
$proto259["m_columns"][] = "candidato10";
$proto259["m_columns"][] = "candidato11";
$proto259["m_columns"][] = "candidato12";
$proto259["m_columns"][] = "validos";
$proto259["m_columns"][] = "blancos";
$proto259["m_columns"][] = "nulos";
$proto259["m_columns"][] = "utilizados";
$proto259["m_columns"][] = "no_utilizados";
$proto259["m_columns"][] = "total";
$proto259["m_columns"][] = "usuario";
$proto259["m_columns"][] = "fecha";
$proto259["m_columns"][] = "editado_por";
$proto259["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto259);

$proto258["m_table"] = $obj;
$proto258["m_sql"] = "voto_alcalde as a";
$proto258["m_alias"] = "a";
$proto258["m_srcTableName"] = "Alc - Por Urna";
$proto260=array();
$proto260["m_sql"] = "";
$proto260["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto260["m_column"]=$obj;
$proto260["m_contained"] = array();
$proto260["m_strCase"] = "";
$proto260["m_havingmode"] = false;
$proto260["m_inBrackets"] = false;
$proto260["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto260);

$proto258["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto258);

$proto246["m_fromlist"][]=$obj;
												$proto262=array();
$proto262["m_link"] = "SQLL_INNERJOIN";
			$proto263=array();
$proto263["m_strName"] = "urna";
$proto263["m_srcTableName"] = "Alc - Por Urna";
$proto263["m_columns"] = array();
$proto263["m_columns"][] = "id_distrito";
$proto263["m_columns"][] = "id_sector";
$proto263["m_columns"][] = "id_urna";
$proto263["m_columns"][] = "nombre_centro";
$proto263["m_columns"][] = "ubicación";
$proto263["m_columns"][] = "votantes";
$obj = new SQLTable($proto263);

$proto262["m_table"] = $obj;
$proto262["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto262["m_alias"] = "u";
$proto262["m_srcTableName"] = "Alc - Por Urna";
$proto264=array();
$proto264["m_sql"] = "a.id_urna = u.id_urna";
$proto264["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto264["m_column"]=$obj;
$proto264["m_contained"] = array();
$proto264["m_strCase"] = "= u.id_urna";
$proto264["m_havingmode"] = false;
$proto264["m_inBrackets"] = false;
$proto264["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto264);

$proto262["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto262);

$proto246["m_fromlist"][]=$obj;
$proto246["m_groupby"] = array();
$proto246["m_orderby"] = array();
$proto246["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto246);

$proto245["m_sql"] = "(select concat(sum(a.candidato12), \" (\", ROUND((((sum(a.candidato12)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto245["m_srcTableName"] = "Alc - Por Urna";
$proto245["m_expr"]=$obj;
$proto245["m_alias"] = "PINU";
$obj = new SQLFieldListItem($proto245);

$proto0["m_fieldlist"][]=$obj;
						$proto266=array();
			$proto267=array();
$proto267["m_strHead"] = "select";
$proto267["m_strFieldList"] = "concat(((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8))   + (sum(a.candidato9)) + (sum(a.candidato12))), \" (\", ROUND((((((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) +  (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato12))) / ((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto267["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto267["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto267["m_strOrderBy"] = "";
	
		;
			$proto267["cipherer"] = null;
$proto269=array();
$proto269["m_sql"] = "u.id_urna = ur.id_urna";
$proto269["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto269["m_column"]=$obj;
$proto269["m_contained"] = array();
$proto269["m_strCase"] = "= ur.id_urna";
$proto269["m_havingmode"] = false;
$proto269["m_inBrackets"] = false;
$proto269["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto269);

$proto267["m_where"] = $obj;
$proto271=array();
$proto271["m_sql"] = "";
$proto271["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto271["m_column"]=$obj;
$proto271["m_contained"] = array();
$proto271["m_strCase"] = "";
$proto271["m_havingmode"] = false;
$proto271["m_inBrackets"] = false;
$proto271["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto271);

$proto267["m_having"] = $obj;
$proto267["m_fieldlist"] = array();
						$proto273=array();
			$proto274=array();
$proto274["m_functiontype"] = "SQLF_CUSTOM";
$proto274["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8))   + (sum(a.candidato9)) + (sum(a.candidato12)))"
));

$proto274["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto274["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) +  (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato12))) / ((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto274["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto274["m_arguments"][]=$obj;
$proto274["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto274);

$proto273["m_sql"] = "concat(((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8))   + (sum(a.candidato9)) + (sum(a.candidato12))), \" (\", ROUND((((((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) +  (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato12))) / ((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto273["m_srcTableName"] = "Alc - Por Urna";
$proto273["m_expr"]=$obj;
$proto273["m_alias"] = "";
$obj = new SQLFieldListItem($proto273);

$proto267["m_fieldlist"][]=$obj;
$proto267["m_fromlist"] = array();
												$proto279=array();
$proto279["m_link"] = "SQLL_MAIN";
			$proto280=array();
$proto280["m_strName"] = "voto_alcalde";
$proto280["m_srcTableName"] = "Alc - Por Urna";
$proto280["m_columns"] = array();
$proto280["m_columns"][] = "elecciones";
$proto280["m_columns"][] = "id_urna";
$proto280["m_columns"][] = "candidato1";
$proto280["m_columns"][] = "candidato2";
$proto280["m_columns"][] = "candidato3";
$proto280["m_columns"][] = "candidato4";
$proto280["m_columns"][] = "candidato5";
$proto280["m_columns"][] = "candidato6";
$proto280["m_columns"][] = "candidato7";
$proto280["m_columns"][] = "candidato8";
$proto280["m_columns"][] = "candidato9";
$proto280["m_columns"][] = "candidato10";
$proto280["m_columns"][] = "candidato11";
$proto280["m_columns"][] = "candidato12";
$proto280["m_columns"][] = "validos";
$proto280["m_columns"][] = "blancos";
$proto280["m_columns"][] = "nulos";
$proto280["m_columns"][] = "utilizados";
$proto280["m_columns"][] = "no_utilizados";
$proto280["m_columns"][] = "total";
$proto280["m_columns"][] = "usuario";
$proto280["m_columns"][] = "fecha";
$proto280["m_columns"][] = "editado_por";
$proto280["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto280);

$proto279["m_table"] = $obj;
$proto279["m_sql"] = "voto_alcalde as a";
$proto279["m_alias"] = "a";
$proto279["m_srcTableName"] = "Alc - Por Urna";
$proto281=array();
$proto281["m_sql"] = "";
$proto281["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto281["m_column"]=$obj;
$proto281["m_contained"] = array();
$proto281["m_strCase"] = "";
$proto281["m_havingmode"] = false;
$proto281["m_inBrackets"] = false;
$proto281["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto281);

$proto279["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto279);

$proto267["m_fromlist"][]=$obj;
												$proto283=array();
$proto283["m_link"] = "SQLL_INNERJOIN";
			$proto284=array();
$proto284["m_strName"] = "urna";
$proto284["m_srcTableName"] = "Alc - Por Urna";
$proto284["m_columns"] = array();
$proto284["m_columns"][] = "id_distrito";
$proto284["m_columns"][] = "id_sector";
$proto284["m_columns"][] = "id_urna";
$proto284["m_columns"][] = "nombre_centro";
$proto284["m_columns"][] = "ubicación";
$proto284["m_columns"][] = "votantes";
$obj = new SQLTable($proto284);

$proto283["m_table"] = $obj;
$proto283["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto283["m_alias"] = "u";
$proto283["m_srcTableName"] = "Alc - Por Urna";
$proto285=array();
$proto285["m_sql"] = "a.id_urna = u.id_urna";
$proto285["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto285["m_column"]=$obj;
$proto285["m_contained"] = array();
$proto285["m_strCase"] = "= u.id_urna";
$proto285["m_havingmode"] = false;
$proto285["m_inBrackets"] = false;
$proto285["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto285);

$proto283["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto283);

$proto267["m_fromlist"][]=$obj;
$proto267["m_groupby"] = array();
$proto267["m_orderby"] = array();
$proto267["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto267);

$proto266["m_sql"] = "(select concat(((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8))   + (sum(a.candidato9)) + (sum(a.candidato12))), \" (\", ROUND((((((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) +  (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato12))) / ((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto266["m_srcTableName"] = "Alc - Por Urna";
$proto266["m_expr"]=$obj;
$proto266["m_alias"] = "Otros";
$obj = new SQLFieldListItem($proto266);

$proto0["m_fieldlist"][]=$obj;
						$proto287=array();
			$proto288=array();
$proto288["m_strHead"] = "select";
$proto288["m_strFieldList"] = "sum(a.validos)";
$proto288["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto288["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto288["m_strOrderBy"] = "";
	
		;
			$proto288["cipherer"] = null;
$proto290=array();
$proto290["m_sql"] = "u.id_urna = ur.id_urna";
$proto290["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto290["m_column"]=$obj;
$proto290["m_contained"] = array();
$proto290["m_strCase"] = "= ur.id_urna";
$proto290["m_havingmode"] = false;
$proto290["m_inBrackets"] = false;
$proto290["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto290);

$proto288["m_where"] = $obj;
$proto292=array();
$proto292["m_sql"] = "";
$proto292["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto292["m_column"]=$obj;
$proto292["m_contained"] = array();
$proto292["m_strCase"] = "";
$proto292["m_havingmode"] = false;
$proto292["m_inBrackets"] = false;
$proto292["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto292);

$proto288["m_having"] = $obj;
$proto288["m_fieldlist"] = array();
						$proto294=array();
			$proto295=array();
$proto295["m_functiontype"] = "SQLF_SUM";
$proto295["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "validos",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto295["m_arguments"][]=$obj;
$proto295["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto295);

$proto294["m_sql"] = "sum(a.validos)";
$proto294["m_srcTableName"] = "Alc - Por Urna";
$proto294["m_expr"]=$obj;
$proto294["m_alias"] = "";
$obj = new SQLFieldListItem($proto294);

$proto288["m_fieldlist"][]=$obj;
$proto288["m_fromlist"] = array();
												$proto297=array();
$proto297["m_link"] = "SQLL_MAIN";
			$proto298=array();
$proto298["m_strName"] = "voto_alcalde";
$proto298["m_srcTableName"] = "Alc - Por Urna";
$proto298["m_columns"] = array();
$proto298["m_columns"][] = "elecciones";
$proto298["m_columns"][] = "id_urna";
$proto298["m_columns"][] = "candidato1";
$proto298["m_columns"][] = "candidato2";
$proto298["m_columns"][] = "candidato3";
$proto298["m_columns"][] = "candidato4";
$proto298["m_columns"][] = "candidato5";
$proto298["m_columns"][] = "candidato6";
$proto298["m_columns"][] = "candidato7";
$proto298["m_columns"][] = "candidato8";
$proto298["m_columns"][] = "candidato9";
$proto298["m_columns"][] = "candidato10";
$proto298["m_columns"][] = "candidato11";
$proto298["m_columns"][] = "candidato12";
$proto298["m_columns"][] = "validos";
$proto298["m_columns"][] = "blancos";
$proto298["m_columns"][] = "nulos";
$proto298["m_columns"][] = "utilizados";
$proto298["m_columns"][] = "no_utilizados";
$proto298["m_columns"][] = "total";
$proto298["m_columns"][] = "usuario";
$proto298["m_columns"][] = "fecha";
$proto298["m_columns"][] = "editado_por";
$proto298["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto298);

$proto297["m_table"] = $obj;
$proto297["m_sql"] = "voto_alcalde as a";
$proto297["m_alias"] = "a";
$proto297["m_srcTableName"] = "Alc - Por Urna";
$proto299=array();
$proto299["m_sql"] = "";
$proto299["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto299["m_column"]=$obj;
$proto299["m_contained"] = array();
$proto299["m_strCase"] = "";
$proto299["m_havingmode"] = false;
$proto299["m_inBrackets"] = false;
$proto299["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto299);

$proto297["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto297);

$proto288["m_fromlist"][]=$obj;
												$proto301=array();
$proto301["m_link"] = "SQLL_INNERJOIN";
			$proto302=array();
$proto302["m_strName"] = "urna";
$proto302["m_srcTableName"] = "Alc - Por Urna";
$proto302["m_columns"] = array();
$proto302["m_columns"][] = "id_distrito";
$proto302["m_columns"][] = "id_sector";
$proto302["m_columns"][] = "id_urna";
$proto302["m_columns"][] = "nombre_centro";
$proto302["m_columns"][] = "ubicación";
$proto302["m_columns"][] = "votantes";
$obj = new SQLTable($proto302);

$proto301["m_table"] = $obj;
$proto301["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto301["m_alias"] = "u";
$proto301["m_srcTableName"] = "Alc - Por Urna";
$proto303=array();
$proto303["m_sql"] = "a.id_urna = u.id_urna";
$proto303["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto303["m_column"]=$obj;
$proto303["m_contained"] = array();
$proto303["m_strCase"] = "= u.id_urna";
$proto303["m_havingmode"] = false;
$proto303["m_inBrackets"] = false;
$proto303["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto303);

$proto301["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto301);

$proto288["m_fromlist"][]=$obj;
$proto288["m_groupby"] = array();
$proto288["m_orderby"] = array();
$proto288["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto288);

$proto287["m_sql"] = "(select sum(a.validos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto287["m_srcTableName"] = "Alc - Por Urna";
$proto287["m_expr"]=$obj;
$proto287["m_alias"] = "Validos";
$obj = new SQLFieldListItem($proto287);

$proto0["m_fieldlist"][]=$obj;
						$proto305=array();
			$proto306=array();
$proto306["m_strHead"] = "select";
$proto306["m_strFieldList"] = "sum(a.blancos)";
$proto306["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto306["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto306["m_strOrderBy"] = "";
	
		;
			$proto306["cipherer"] = null;
$proto308=array();
$proto308["m_sql"] = "u.id_urna = ur.id_urna";
$proto308["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto308["m_column"]=$obj;
$proto308["m_contained"] = array();
$proto308["m_strCase"] = "= ur.id_urna";
$proto308["m_havingmode"] = false;
$proto308["m_inBrackets"] = false;
$proto308["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto308);

$proto306["m_where"] = $obj;
$proto310=array();
$proto310["m_sql"] = "";
$proto310["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto310["m_column"]=$obj;
$proto310["m_contained"] = array();
$proto310["m_strCase"] = "";
$proto310["m_havingmode"] = false;
$proto310["m_inBrackets"] = false;
$proto310["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto310);

$proto306["m_having"] = $obj;
$proto306["m_fieldlist"] = array();
						$proto312=array();
			$proto313=array();
$proto313["m_functiontype"] = "SQLF_SUM";
$proto313["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "blancos",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto313["m_arguments"][]=$obj;
$proto313["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto313);

$proto312["m_sql"] = "sum(a.blancos)";
$proto312["m_srcTableName"] = "Alc - Por Urna";
$proto312["m_expr"]=$obj;
$proto312["m_alias"] = "";
$obj = new SQLFieldListItem($proto312);

$proto306["m_fieldlist"][]=$obj;
$proto306["m_fromlist"] = array();
												$proto315=array();
$proto315["m_link"] = "SQLL_MAIN";
			$proto316=array();
$proto316["m_strName"] = "voto_alcalde";
$proto316["m_srcTableName"] = "Alc - Por Urna";
$proto316["m_columns"] = array();
$proto316["m_columns"][] = "elecciones";
$proto316["m_columns"][] = "id_urna";
$proto316["m_columns"][] = "candidato1";
$proto316["m_columns"][] = "candidato2";
$proto316["m_columns"][] = "candidato3";
$proto316["m_columns"][] = "candidato4";
$proto316["m_columns"][] = "candidato5";
$proto316["m_columns"][] = "candidato6";
$proto316["m_columns"][] = "candidato7";
$proto316["m_columns"][] = "candidato8";
$proto316["m_columns"][] = "candidato9";
$proto316["m_columns"][] = "candidato10";
$proto316["m_columns"][] = "candidato11";
$proto316["m_columns"][] = "candidato12";
$proto316["m_columns"][] = "validos";
$proto316["m_columns"][] = "blancos";
$proto316["m_columns"][] = "nulos";
$proto316["m_columns"][] = "utilizados";
$proto316["m_columns"][] = "no_utilizados";
$proto316["m_columns"][] = "total";
$proto316["m_columns"][] = "usuario";
$proto316["m_columns"][] = "fecha";
$proto316["m_columns"][] = "editado_por";
$proto316["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto316);

$proto315["m_table"] = $obj;
$proto315["m_sql"] = "voto_alcalde as a";
$proto315["m_alias"] = "a";
$proto315["m_srcTableName"] = "Alc - Por Urna";
$proto317=array();
$proto317["m_sql"] = "";
$proto317["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto317["m_column"]=$obj;
$proto317["m_contained"] = array();
$proto317["m_strCase"] = "";
$proto317["m_havingmode"] = false;
$proto317["m_inBrackets"] = false;
$proto317["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto317);

$proto315["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto315);

$proto306["m_fromlist"][]=$obj;
												$proto319=array();
$proto319["m_link"] = "SQLL_INNERJOIN";
			$proto320=array();
$proto320["m_strName"] = "urna";
$proto320["m_srcTableName"] = "Alc - Por Urna";
$proto320["m_columns"] = array();
$proto320["m_columns"][] = "id_distrito";
$proto320["m_columns"][] = "id_sector";
$proto320["m_columns"][] = "id_urna";
$proto320["m_columns"][] = "nombre_centro";
$proto320["m_columns"][] = "ubicación";
$proto320["m_columns"][] = "votantes";
$obj = new SQLTable($proto320);

$proto319["m_table"] = $obj;
$proto319["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto319["m_alias"] = "u";
$proto319["m_srcTableName"] = "Alc - Por Urna";
$proto321=array();
$proto321["m_sql"] = "a.id_urna = u.id_urna";
$proto321["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto321["m_column"]=$obj;
$proto321["m_contained"] = array();
$proto321["m_strCase"] = "= u.id_urna";
$proto321["m_havingmode"] = false;
$proto321["m_inBrackets"] = false;
$proto321["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto321);

$proto319["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto319);

$proto306["m_fromlist"][]=$obj;
$proto306["m_groupby"] = array();
$proto306["m_orderby"] = array();
$proto306["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto306);

$proto305["m_sql"] = "(select sum(a.blancos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto305["m_srcTableName"] = "Alc - Por Urna";
$proto305["m_expr"]=$obj;
$proto305["m_alias"] = "Blancos";
$obj = new SQLFieldListItem($proto305);

$proto0["m_fieldlist"][]=$obj;
						$proto323=array();
			$proto324=array();
$proto324["m_strHead"] = "select";
$proto324["m_strFieldList"] = "sum(a.nulos)";
$proto324["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto324["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto324["m_strOrderBy"] = "";
	
		;
			$proto324["cipherer"] = null;
$proto326=array();
$proto326["m_sql"] = "u.id_urna = ur.id_urna";
$proto326["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto326["m_column"]=$obj;
$proto326["m_contained"] = array();
$proto326["m_strCase"] = "= ur.id_urna";
$proto326["m_havingmode"] = false;
$proto326["m_inBrackets"] = false;
$proto326["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto326);

$proto324["m_where"] = $obj;
$proto328=array();
$proto328["m_sql"] = "";
$proto328["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto328["m_column"]=$obj;
$proto328["m_contained"] = array();
$proto328["m_strCase"] = "";
$proto328["m_havingmode"] = false;
$proto328["m_inBrackets"] = false;
$proto328["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto328);

$proto324["m_having"] = $obj;
$proto324["m_fieldlist"] = array();
						$proto330=array();
			$proto331=array();
$proto331["m_functiontype"] = "SQLF_SUM";
$proto331["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "nulos",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto331["m_arguments"][]=$obj;
$proto331["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto331);

$proto330["m_sql"] = "sum(a.nulos)";
$proto330["m_srcTableName"] = "Alc - Por Urna";
$proto330["m_expr"]=$obj;
$proto330["m_alias"] = "";
$obj = new SQLFieldListItem($proto330);

$proto324["m_fieldlist"][]=$obj;
$proto324["m_fromlist"] = array();
												$proto333=array();
$proto333["m_link"] = "SQLL_MAIN";
			$proto334=array();
$proto334["m_strName"] = "voto_alcalde";
$proto334["m_srcTableName"] = "Alc - Por Urna";
$proto334["m_columns"] = array();
$proto334["m_columns"][] = "elecciones";
$proto334["m_columns"][] = "id_urna";
$proto334["m_columns"][] = "candidato1";
$proto334["m_columns"][] = "candidato2";
$proto334["m_columns"][] = "candidato3";
$proto334["m_columns"][] = "candidato4";
$proto334["m_columns"][] = "candidato5";
$proto334["m_columns"][] = "candidato6";
$proto334["m_columns"][] = "candidato7";
$proto334["m_columns"][] = "candidato8";
$proto334["m_columns"][] = "candidato9";
$proto334["m_columns"][] = "candidato10";
$proto334["m_columns"][] = "candidato11";
$proto334["m_columns"][] = "candidato12";
$proto334["m_columns"][] = "validos";
$proto334["m_columns"][] = "blancos";
$proto334["m_columns"][] = "nulos";
$proto334["m_columns"][] = "utilizados";
$proto334["m_columns"][] = "no_utilizados";
$proto334["m_columns"][] = "total";
$proto334["m_columns"][] = "usuario";
$proto334["m_columns"][] = "fecha";
$proto334["m_columns"][] = "editado_por";
$proto334["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto334);

$proto333["m_table"] = $obj;
$proto333["m_sql"] = "voto_alcalde as a";
$proto333["m_alias"] = "a";
$proto333["m_srcTableName"] = "Alc - Por Urna";
$proto335=array();
$proto335["m_sql"] = "";
$proto335["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto335["m_column"]=$obj;
$proto335["m_contained"] = array();
$proto335["m_strCase"] = "";
$proto335["m_havingmode"] = false;
$proto335["m_inBrackets"] = false;
$proto335["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto335);

$proto333["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto333);

$proto324["m_fromlist"][]=$obj;
												$proto337=array();
$proto337["m_link"] = "SQLL_INNERJOIN";
			$proto338=array();
$proto338["m_strName"] = "urna";
$proto338["m_srcTableName"] = "Alc - Por Urna";
$proto338["m_columns"] = array();
$proto338["m_columns"][] = "id_distrito";
$proto338["m_columns"][] = "id_sector";
$proto338["m_columns"][] = "id_urna";
$proto338["m_columns"][] = "nombre_centro";
$proto338["m_columns"][] = "ubicación";
$proto338["m_columns"][] = "votantes";
$obj = new SQLTable($proto338);

$proto337["m_table"] = $obj;
$proto337["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto337["m_alias"] = "u";
$proto337["m_srcTableName"] = "Alc - Por Urna";
$proto339=array();
$proto339["m_sql"] = "a.id_urna = u.id_urna";
$proto339["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto339["m_column"]=$obj;
$proto339["m_contained"] = array();
$proto339["m_strCase"] = "= u.id_urna";
$proto339["m_havingmode"] = false;
$proto339["m_inBrackets"] = false;
$proto339["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto339);

$proto337["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto337);

$proto324["m_fromlist"][]=$obj;
$proto324["m_groupby"] = array();
$proto324["m_orderby"] = array();
$proto324["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto324);

$proto323["m_sql"] = "(select sum(a.nulos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto323["m_srcTableName"] = "Alc - Por Urna";
$proto323["m_expr"]=$obj;
$proto323["m_alias"] = "Nulos";
$obj = new SQLFieldListItem($proto323);

$proto0["m_fieldlist"][]=$obj;
						$proto341=array();
			$proto342=array();
$proto342["m_strHead"] = "select";
$proto342["m_strFieldList"] = "sum(a.utilizados)";
$proto342["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto342["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto342["m_strOrderBy"] = "";
	
		;
			$proto342["cipherer"] = null;
$proto344=array();
$proto344["m_sql"] = "u.id_urna = ur.id_urna";
$proto344["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto344["m_column"]=$obj;
$proto344["m_contained"] = array();
$proto344["m_strCase"] = "= ur.id_urna";
$proto344["m_havingmode"] = false;
$proto344["m_inBrackets"] = false;
$proto344["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto344);

$proto342["m_where"] = $obj;
$proto346=array();
$proto346["m_sql"] = "";
$proto346["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto346["m_column"]=$obj;
$proto346["m_contained"] = array();
$proto346["m_strCase"] = "";
$proto346["m_havingmode"] = false;
$proto346["m_inBrackets"] = false;
$proto346["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto346);

$proto342["m_having"] = $obj;
$proto342["m_fieldlist"] = array();
						$proto348=array();
			$proto349=array();
$proto349["m_functiontype"] = "SQLF_SUM";
$proto349["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "utilizados",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto349["m_arguments"][]=$obj;
$proto349["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto349);

$proto348["m_sql"] = "sum(a.utilizados)";
$proto348["m_srcTableName"] = "Alc - Por Urna";
$proto348["m_expr"]=$obj;
$proto348["m_alias"] = "";
$obj = new SQLFieldListItem($proto348);

$proto342["m_fieldlist"][]=$obj;
$proto342["m_fromlist"] = array();
												$proto351=array();
$proto351["m_link"] = "SQLL_MAIN";
			$proto352=array();
$proto352["m_strName"] = "voto_alcalde";
$proto352["m_srcTableName"] = "Alc - Por Urna";
$proto352["m_columns"] = array();
$proto352["m_columns"][] = "elecciones";
$proto352["m_columns"][] = "id_urna";
$proto352["m_columns"][] = "candidato1";
$proto352["m_columns"][] = "candidato2";
$proto352["m_columns"][] = "candidato3";
$proto352["m_columns"][] = "candidato4";
$proto352["m_columns"][] = "candidato5";
$proto352["m_columns"][] = "candidato6";
$proto352["m_columns"][] = "candidato7";
$proto352["m_columns"][] = "candidato8";
$proto352["m_columns"][] = "candidato9";
$proto352["m_columns"][] = "candidato10";
$proto352["m_columns"][] = "candidato11";
$proto352["m_columns"][] = "candidato12";
$proto352["m_columns"][] = "validos";
$proto352["m_columns"][] = "blancos";
$proto352["m_columns"][] = "nulos";
$proto352["m_columns"][] = "utilizados";
$proto352["m_columns"][] = "no_utilizados";
$proto352["m_columns"][] = "total";
$proto352["m_columns"][] = "usuario";
$proto352["m_columns"][] = "fecha";
$proto352["m_columns"][] = "editado_por";
$proto352["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto352);

$proto351["m_table"] = $obj;
$proto351["m_sql"] = "voto_alcalde as a";
$proto351["m_alias"] = "a";
$proto351["m_srcTableName"] = "Alc - Por Urna";
$proto353=array();
$proto353["m_sql"] = "";
$proto353["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto353["m_column"]=$obj;
$proto353["m_contained"] = array();
$proto353["m_strCase"] = "";
$proto353["m_havingmode"] = false;
$proto353["m_inBrackets"] = false;
$proto353["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto353);

$proto351["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto351);

$proto342["m_fromlist"][]=$obj;
												$proto355=array();
$proto355["m_link"] = "SQLL_INNERJOIN";
			$proto356=array();
$proto356["m_strName"] = "urna";
$proto356["m_srcTableName"] = "Alc - Por Urna";
$proto356["m_columns"] = array();
$proto356["m_columns"][] = "id_distrito";
$proto356["m_columns"][] = "id_sector";
$proto356["m_columns"][] = "id_urna";
$proto356["m_columns"][] = "nombre_centro";
$proto356["m_columns"][] = "ubicación";
$proto356["m_columns"][] = "votantes";
$obj = new SQLTable($proto356);

$proto355["m_table"] = $obj;
$proto355["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto355["m_alias"] = "u";
$proto355["m_srcTableName"] = "Alc - Por Urna";
$proto357=array();
$proto357["m_sql"] = "a.id_urna = u.id_urna";
$proto357["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto357["m_column"]=$obj;
$proto357["m_contained"] = array();
$proto357["m_strCase"] = "= u.id_urna";
$proto357["m_havingmode"] = false;
$proto357["m_inBrackets"] = false;
$proto357["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto357);

$proto355["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto355);

$proto342["m_fromlist"][]=$obj;
$proto342["m_groupby"] = array();
$proto342["m_orderby"] = array();
$proto342["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto342);

$proto341["m_sql"] = "(select sum(a.utilizados) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto341["m_srcTableName"] = "Alc - Por Urna";
$proto341["m_expr"]=$obj;
$proto341["m_alias"] = "Utilizados";
$obj = new SQLFieldListItem($proto341);

$proto0["m_fieldlist"][]=$obj;
						$proto359=array();
			$proto360=array();
$proto360["m_strHead"] = "select";
$proto360["m_strFieldList"] = "sum(a.no_utilizados)";
$proto360["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto360["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto360["m_strOrderBy"] = "";
	
		;
			$proto360["cipherer"] = null;
$proto362=array();
$proto362["m_sql"] = "u.id_urna = ur.id_urna";
$proto362["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto362["m_column"]=$obj;
$proto362["m_contained"] = array();
$proto362["m_strCase"] = "= ur.id_urna";
$proto362["m_havingmode"] = false;
$proto362["m_inBrackets"] = false;
$proto362["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto362);

$proto360["m_where"] = $obj;
$proto364=array();
$proto364["m_sql"] = "";
$proto364["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto364["m_column"]=$obj;
$proto364["m_contained"] = array();
$proto364["m_strCase"] = "";
$proto364["m_havingmode"] = false;
$proto364["m_inBrackets"] = false;
$proto364["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto364);

$proto360["m_having"] = $obj;
$proto360["m_fieldlist"] = array();
						$proto366=array();
			$proto367=array();
$proto367["m_functiontype"] = "SQLF_SUM";
$proto367["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "no_utilizados",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto367["m_arguments"][]=$obj;
$proto367["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto367);

$proto366["m_sql"] = "sum(a.no_utilizados)";
$proto366["m_srcTableName"] = "Alc - Por Urna";
$proto366["m_expr"]=$obj;
$proto366["m_alias"] = "";
$obj = new SQLFieldListItem($proto366);

$proto360["m_fieldlist"][]=$obj;
$proto360["m_fromlist"] = array();
												$proto369=array();
$proto369["m_link"] = "SQLL_MAIN";
			$proto370=array();
$proto370["m_strName"] = "voto_alcalde";
$proto370["m_srcTableName"] = "Alc - Por Urna";
$proto370["m_columns"] = array();
$proto370["m_columns"][] = "elecciones";
$proto370["m_columns"][] = "id_urna";
$proto370["m_columns"][] = "candidato1";
$proto370["m_columns"][] = "candidato2";
$proto370["m_columns"][] = "candidato3";
$proto370["m_columns"][] = "candidato4";
$proto370["m_columns"][] = "candidato5";
$proto370["m_columns"][] = "candidato6";
$proto370["m_columns"][] = "candidato7";
$proto370["m_columns"][] = "candidato8";
$proto370["m_columns"][] = "candidato9";
$proto370["m_columns"][] = "candidato10";
$proto370["m_columns"][] = "candidato11";
$proto370["m_columns"][] = "candidato12";
$proto370["m_columns"][] = "validos";
$proto370["m_columns"][] = "blancos";
$proto370["m_columns"][] = "nulos";
$proto370["m_columns"][] = "utilizados";
$proto370["m_columns"][] = "no_utilizados";
$proto370["m_columns"][] = "total";
$proto370["m_columns"][] = "usuario";
$proto370["m_columns"][] = "fecha";
$proto370["m_columns"][] = "editado_por";
$proto370["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto370);

$proto369["m_table"] = $obj;
$proto369["m_sql"] = "voto_alcalde as a";
$proto369["m_alias"] = "a";
$proto369["m_srcTableName"] = "Alc - Por Urna";
$proto371=array();
$proto371["m_sql"] = "";
$proto371["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto371["m_column"]=$obj;
$proto371["m_contained"] = array();
$proto371["m_strCase"] = "";
$proto371["m_havingmode"] = false;
$proto371["m_inBrackets"] = false;
$proto371["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto371);

$proto369["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto369);

$proto360["m_fromlist"][]=$obj;
												$proto373=array();
$proto373["m_link"] = "SQLL_INNERJOIN";
			$proto374=array();
$proto374["m_strName"] = "urna";
$proto374["m_srcTableName"] = "Alc - Por Urna";
$proto374["m_columns"] = array();
$proto374["m_columns"][] = "id_distrito";
$proto374["m_columns"][] = "id_sector";
$proto374["m_columns"][] = "id_urna";
$proto374["m_columns"][] = "nombre_centro";
$proto374["m_columns"][] = "ubicación";
$proto374["m_columns"][] = "votantes";
$obj = new SQLTable($proto374);

$proto373["m_table"] = $obj;
$proto373["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto373["m_alias"] = "u";
$proto373["m_srcTableName"] = "Alc - Por Urna";
$proto375=array();
$proto375["m_sql"] = "a.id_urna = u.id_urna";
$proto375["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto375["m_column"]=$obj;
$proto375["m_contained"] = array();
$proto375["m_strCase"] = "= u.id_urna";
$proto375["m_havingmode"] = false;
$proto375["m_inBrackets"] = false;
$proto375["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto375);

$proto373["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto373);

$proto360["m_fromlist"][]=$obj;
$proto360["m_groupby"] = array();
$proto360["m_orderby"] = array();
$proto360["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto360);

$proto359["m_sql"] = "(select sum(a.no_utilizados) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto359["m_srcTableName"] = "Alc - Por Urna";
$proto359["m_expr"]=$obj;
$proto359["m_alias"] = "No_Utilizados";
$obj = new SQLFieldListItem($proto359);

$proto0["m_fieldlist"][]=$obj;
						$proto377=array();
			$proto378=array();
$proto378["m_strHead"] = "select";
$proto378["m_strFieldList"] = "sum(a.total)";
$proto378["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto378["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto378["m_strOrderBy"] = "";
	
		;
			$proto378["cipherer"] = null;
$proto380=array();
$proto380["m_sql"] = "u.id_urna = ur.id_urna";
$proto380["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto380["m_column"]=$obj;
$proto380["m_contained"] = array();
$proto380["m_strCase"] = "= ur.id_urna";
$proto380["m_havingmode"] = false;
$proto380["m_inBrackets"] = false;
$proto380["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto380);

$proto378["m_where"] = $obj;
$proto382=array();
$proto382["m_sql"] = "";
$proto382["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto382["m_column"]=$obj;
$proto382["m_contained"] = array();
$proto382["m_strCase"] = "";
$proto382["m_havingmode"] = false;
$proto382["m_inBrackets"] = false;
$proto382["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto382);

$proto378["m_having"] = $obj;
$proto378["m_fieldlist"] = array();
						$proto384=array();
			$proto385=array();
$proto385["m_functiontype"] = "SQLF_SUM";
$proto385["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto385["m_arguments"][]=$obj;
$proto385["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto385);

$proto384["m_sql"] = "sum(a.total)";
$proto384["m_srcTableName"] = "Alc - Por Urna";
$proto384["m_expr"]=$obj;
$proto384["m_alias"] = "";
$obj = new SQLFieldListItem($proto384);

$proto378["m_fieldlist"][]=$obj;
$proto378["m_fromlist"] = array();
												$proto387=array();
$proto387["m_link"] = "SQLL_MAIN";
			$proto388=array();
$proto388["m_strName"] = "voto_alcalde";
$proto388["m_srcTableName"] = "Alc - Por Urna";
$proto388["m_columns"] = array();
$proto388["m_columns"][] = "elecciones";
$proto388["m_columns"][] = "id_urna";
$proto388["m_columns"][] = "candidato1";
$proto388["m_columns"][] = "candidato2";
$proto388["m_columns"][] = "candidato3";
$proto388["m_columns"][] = "candidato4";
$proto388["m_columns"][] = "candidato5";
$proto388["m_columns"][] = "candidato6";
$proto388["m_columns"][] = "candidato7";
$proto388["m_columns"][] = "candidato8";
$proto388["m_columns"][] = "candidato9";
$proto388["m_columns"][] = "candidato10";
$proto388["m_columns"][] = "candidato11";
$proto388["m_columns"][] = "candidato12";
$proto388["m_columns"][] = "validos";
$proto388["m_columns"][] = "blancos";
$proto388["m_columns"][] = "nulos";
$proto388["m_columns"][] = "utilizados";
$proto388["m_columns"][] = "no_utilizados";
$proto388["m_columns"][] = "total";
$proto388["m_columns"][] = "usuario";
$proto388["m_columns"][] = "fecha";
$proto388["m_columns"][] = "editado_por";
$proto388["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto388);

$proto387["m_table"] = $obj;
$proto387["m_sql"] = "voto_alcalde as a";
$proto387["m_alias"] = "a";
$proto387["m_srcTableName"] = "Alc - Por Urna";
$proto389=array();
$proto389["m_sql"] = "";
$proto389["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto389["m_column"]=$obj;
$proto389["m_contained"] = array();
$proto389["m_strCase"] = "";
$proto389["m_havingmode"] = false;
$proto389["m_inBrackets"] = false;
$proto389["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto389);

$proto387["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto387);

$proto378["m_fromlist"][]=$obj;
												$proto391=array();
$proto391["m_link"] = "SQLL_INNERJOIN";
			$proto392=array();
$proto392["m_strName"] = "urna";
$proto392["m_srcTableName"] = "Alc - Por Urna";
$proto392["m_columns"] = array();
$proto392["m_columns"][] = "id_distrito";
$proto392["m_columns"][] = "id_sector";
$proto392["m_columns"][] = "id_urna";
$proto392["m_columns"][] = "nombre_centro";
$proto392["m_columns"][] = "ubicación";
$proto392["m_columns"][] = "votantes";
$obj = new SQLTable($proto392);

$proto391["m_table"] = $obj;
$proto391["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto391["m_alias"] = "u";
$proto391["m_srcTableName"] = "Alc - Por Urna";
$proto393=array();
$proto393["m_sql"] = "a.id_urna = u.id_urna";
$proto393["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto393["m_column"]=$obj;
$proto393["m_contained"] = array();
$proto393["m_strCase"] = "= u.id_urna";
$proto393["m_havingmode"] = false;
$proto393["m_inBrackets"] = false;
$proto393["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto393);

$proto391["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto391);

$proto378["m_fromlist"][]=$obj;
$proto378["m_groupby"] = array();
$proto378["m_orderby"] = array();
$proto378["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto378);

$proto377["m_sql"] = "(select sum(a.total) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto377["m_srcTableName"] = "Alc - Por Urna";
$proto377["m_expr"]=$obj;
$proto377["m_alias"] = "Total";
$obj = new SQLFieldListItem($proto377);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto395=array();
$proto395["m_link"] = "SQLL_MAIN";
			$proto396=array();
$proto396["m_strName"] = "voto_alcalde";
$proto396["m_srcTableName"] = "Alc - Por Urna";
$proto396["m_columns"] = array();
$proto396["m_columns"][] = "elecciones";
$proto396["m_columns"][] = "id_urna";
$proto396["m_columns"][] = "candidato1";
$proto396["m_columns"][] = "candidato2";
$proto396["m_columns"][] = "candidato3";
$proto396["m_columns"][] = "candidato4";
$proto396["m_columns"][] = "candidato5";
$proto396["m_columns"][] = "candidato6";
$proto396["m_columns"][] = "candidato7";
$proto396["m_columns"][] = "candidato8";
$proto396["m_columns"][] = "candidato9";
$proto396["m_columns"][] = "candidato10";
$proto396["m_columns"][] = "candidato11";
$proto396["m_columns"][] = "candidato12";
$proto396["m_columns"][] = "validos";
$proto396["m_columns"][] = "blancos";
$proto396["m_columns"][] = "nulos";
$proto396["m_columns"][] = "utilizados";
$proto396["m_columns"][] = "no_utilizados";
$proto396["m_columns"][] = "total";
$proto396["m_columns"][] = "usuario";
$proto396["m_columns"][] = "fecha";
$proto396["m_columns"][] = "editado_por";
$proto396["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto396);

$proto395["m_table"] = $obj;
$proto395["m_sql"] = "voto_alcalde as va";
$proto395["m_alias"] = "va";
$proto395["m_srcTableName"] = "Alc - Por Urna";
$proto397=array();
$proto397["m_sql"] = "";
$proto397["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto397["m_column"]=$obj;
$proto397["m_contained"] = array();
$proto397["m_strCase"] = "";
$proto397["m_havingmode"] = false;
$proto397["m_inBrackets"] = false;
$proto397["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto397);

$proto395["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto395);

$proto0["m_fromlist"][]=$obj;
												$proto399=array();
$proto399["m_link"] = "SQLL_INNERJOIN";
			$proto400=array();
$proto400["m_strName"] = "urna";
$proto400["m_srcTableName"] = "Alc - Por Urna";
$proto400["m_columns"] = array();
$proto400["m_columns"][] = "id_distrito";
$proto400["m_columns"][] = "id_sector";
$proto400["m_columns"][] = "id_urna";
$proto400["m_columns"][] = "nombre_centro";
$proto400["m_columns"][] = "ubicación";
$proto400["m_columns"][] = "votantes";
$obj = new SQLTable($proto400);

$proto399["m_table"] = $obj;
$proto399["m_sql"] = "inner join urna as ur on va.id_urna = ur.id_urna";
$proto399["m_alias"] = "ur";
$proto399["m_srcTableName"] = "Alc - Por Urna";
$proto401=array();
$proto401["m_sql"] = "va.id_urna = ur.id_urna";
$proto401["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "va",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto401["m_column"]=$obj;
$proto401["m_contained"] = array();
$proto401["m_strCase"] = "= ur.id_urna";
$proto401["m_havingmode"] = false;
$proto401["m_inBrackets"] = false;
$proto401["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto401);

$proto399["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto399);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto403=array();
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "ur",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto403["m_column"]=$obj;
$obj = new SQLGroupByItem($proto403);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto405=array();
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "ur",
	"m_srcTableName" => "Alc - Por Urna"
));

$proto405["m_column"]=$obj;
$proto405["m_bAsc"] = 1;
$proto405["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto405);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Alc - Por Urna";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alc___por_urna = createSqlQuery_alc___por_urna();


	
		;

																							

$tdataalc___por_urna[".sqlquery"] = $queryData_alc___por_urna;



include_once(getabspath("include/alc___por_urna_events.php"));
$tableEvents["Alc - Por Urna"] = new eventclass_alc___por_urna;
$tdataalc___por_urna[".hasEvents"] = true;

$query = &$queryData_alc___por_urna;
$table = "Alc - Por Urna";
// here goes EVENT_INIT_TABLE event


// Place event code here.
// Use "Add Action" button to add code snippets.

$can1_por = DBlookup("select round(((sum(candidato1)/sum(validos))*100),1) from voto_alcalde");
$can2_por = DBlookup("select round(((sum(candidato2)/sum(validos))*100),1) from voto_alcalde");
$can3_por = DBlookup("select round(((sum(candidato3)/sum(validos))*100),1) from voto_alcalde");
$can4_por = DBlookup("select round(((sum(candidato4)/sum(validos))*100),1) from voto_alcalde");
$can5_por = DBlookup("select round(((sum(candidato5)/sum(validos))*100),1) from voto_alcalde");
$can6_por = DBlookup("select round(((sum(candidato6)/sum(validos))*100),1) from voto_alcalde");
$can7_por = DBlookup("select round(((sum(candidato7)/sum(validos))*100),1) from voto_alcalde");
$can8_por = DBlookup("select round(((sum(candidato8)/sum(validos))*100),1) from voto_alcalde");
$can9_por = DBlookup("select round(((sum(candidato9)/sum(validos))*100),1) from voto_alcalde");
$can10_por = DBlookup("select round(((sum(candidato10)/sum(validos))*100),1) from voto_alcalde");
$can11_por = DBlookup("select round(((sum(candidato11)/sum(validos))*100),1) from voto_alcalde");
$can12_por = DBlookup("select round(((sum(candidato12)/sum(validos))*100),1) from voto_alcalde");
$otros_por = DBlookup("select round(((((sum(candidato1))+(sum(candidato2))+(sum(candidato3))+(sum(candidato4))+(sum(candidato6))
+(sum(candidato7))+(sum(candidato8))+(sum(candidato9))+(sum(candidato12)))/sum(validos))*100),1) from voto_alcalde");

$_SESSION["can1"] = $can1_por;
$_SESSION["can2"] = $can2_por;
$_SESSION["can3"] = $can3_por;
$_SESSION["can4"] = $can4_por;
$_SESSION["can5"] = $can5_por;
$_SESSION["can6"] = $can6_por;
$_SESSION["can7"] = $can7_por;
$_SESSION["can8"] = $can8_por;
$_SESSION["can9"] = $can9_por;
$_SESSION["can10"] = $can10_por;
$_SESSION["can11"] = $can11_por;
$_SESSION["can12"] = $can12_por;
$_SESSION["otros"] = $otros_por;
;
unset($query);
?>