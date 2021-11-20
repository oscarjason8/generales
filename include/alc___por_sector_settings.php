<?php
$tdataalc___por_sector = array();
$tdataalc___por_sector[".searchableFields"] = array();
$tdataalc___por_sector[".ShortName"] = "alc___por_sector";
$tdataalc___por_sector[".OwnerID"] = "";
$tdataalc___por_sector[".OriginalTable"] = "voto_alcalde";


$tdataalc___por_sector[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdataalc___por_sector[".originalPagesByType"] = $tdataalc___por_sector[".pagesByType"];
$tdataalc___por_sector[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdataalc___por_sector[".originalPages"] = $tdataalc___por_sector[".pages"];
$tdataalc___por_sector[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdataalc___por_sector[".originalDefaultPages"] = $tdataalc___por_sector[".defaultPages"];

//	field labels
$fieldLabelsalc___por_sector = array();
$fieldToolTipsalc___por_sector = array();
$pageTitlesalc___por_sector = array();
$placeHoldersalc___por_sector = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalc___por_sector["Spanish"] = array();
	$fieldToolTipsalc___por_sector["Spanish"] = array();
	$placeHoldersalc___por_sector["Spanish"] = array();
	$pageTitlesalc___por_sector["Spanish"] = array();
	$fieldLabelsalc___por_sector["Spanish"]["Validos"] = "Votos Validos";
	$fieldToolTipsalc___por_sector["Spanish"]["Validos"] = "";
	$placeHoldersalc___por_sector["Spanish"]["Validos"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["Blancos"] = "Votos Blancos";
	$fieldToolTipsalc___por_sector["Spanish"]["Blancos"] = "";
	$placeHoldersalc___por_sector["Spanish"]["Blancos"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["Nulos"] = "Votos Nulos";
	$fieldToolTipsalc___por_sector["Spanish"]["Nulos"] = "";
	$placeHoldersalc___por_sector["Spanish"]["Nulos"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["Utilizados"] = "Votos Utilizados";
	$fieldToolTipsalc___por_sector["Spanish"]["Utilizados"] = "";
	$placeHoldersalc___por_sector["Spanish"]["Utilizados"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["No_Utilizados"] = "Votos No Utilizados";
	$fieldToolTipsalc___por_sector["Spanish"]["No_Utilizados"] = "";
	$placeHoldersalc___por_sector["Spanish"]["No_Utilizados"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["Total"] = "Total de Votos";
	$fieldToolTipsalc___por_sector["Spanish"]["Total"] = "";
	$placeHoldersalc___por_sector["Spanish"]["Total"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["id_distrito"] = "Distrito";
	$fieldToolTipsalc___por_sector["Spanish"]["id_distrito"] = "";
	$placeHoldersalc___por_sector["Spanish"]["id_distrito"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["id_sector"] = "Sector";
	$fieldToolTipsalc___por_sector["Spanish"]["id_sector"] = "";
	$placeHoldersalc___por_sector["Spanish"]["id_sector"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["PAC"] = "PAC";
	$fieldToolTipsalc___por_sector["Spanish"]["PAC"] = "";
	$placeHoldersalc___por_sector["Spanish"]["PAC"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["FAPER"] = "FAPER";
	$fieldToolTipsalc___por_sector["Spanish"]["FAPER"] = "";
	$placeHoldersalc___por_sector["Spanish"]["FAPER"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["NUEVA_RUTA"] = "Nueva Ruta";
	$fieldToolTipsalc___por_sector["Spanish"]["NUEVA_RUTA"] = "";
	$placeHoldersalc___por_sector["Spanish"]["NUEVA_RUTA"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["ALIANZA_PAT"] = "Alianza Patriótica";
	$fieldToolTipsalc___por_sector["Spanish"]["ALIANZA_PAT"] = "";
	$placeHoldersalc___por_sector["Spanish"]["ALIANZA_PAT"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["LIBRE"] = "Libre";
	$fieldToolTipsalc___por_sector["Spanish"]["LIBRE"] = "";
	$placeHoldersalc___por_sector["Spanish"]["LIBRE"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["PSH"] = "PSH";
	$fieldToolTipsalc___por_sector["Spanish"]["PSH"] = "";
	$placeHoldersalc___por_sector["Spanish"]["PSH"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["LIDEHR"] = "LIDEHR";
	$fieldToolTipsalc___por_sector["Spanish"]["LIDEHR"] = "";
	$placeHoldersalc___por_sector["Spanish"]["LIDEHR"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["DC"] = "DC";
	$fieldToolTipsalc___por_sector["Spanish"]["DC"] = "";
	$placeHoldersalc___por_sector["Spanish"]["DC"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["TSH"] = "TSH";
	$fieldToolTipsalc___por_sector["Spanish"]["TSH"] = "";
	$placeHoldersalc___por_sector["Spanish"]["TSH"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["LIBERAL"] = "Partido Liberal";
	$fieldToolTipsalc___por_sector["Spanish"]["LIBERAL"] = "";
	$placeHoldersalc___por_sector["Spanish"]["LIBERAL"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["NACIONAL"] = "Partido Nacional";
	$fieldToolTipsalc___por_sector["Spanish"]["NACIONAL"] = "";
	$placeHoldersalc___por_sector["Spanish"]["NACIONAL"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["PINU"] = "PINU";
	$fieldToolTipsalc___por_sector["Spanish"]["PINU"] = "";
	$placeHoldersalc___por_sector["Spanish"]["PINU"] = "";
	$fieldLabelsalc___por_sector["Spanish"]["Otros"] = "Otros";
	$fieldToolTipsalc___por_sector["Spanish"]["Otros"] = "";
	$placeHoldersalc___por_sector["Spanish"]["Otros"] = "";
	if (count($fieldToolTipsalc___por_sector["Spanish"]))
		$tdataalc___por_sector[".isUseToolTips"] = true;
}


	$tdataalc___por_sector[".NCSearch"] = true;



$tdataalc___por_sector[".shortTableName"] = "alc___por_sector";
$tdataalc___por_sector[".nSecOptions"] = 0;

$tdataalc___por_sector[".mainTableOwnerID"] = "";
$tdataalc___por_sector[".entityType"] = 2;
$tdataalc___por_sector[".connId"] = "internas_new_at_localhost";


$tdataalc___por_sector[".strOriginalTableName"] = "voto_alcalde";

	



$tdataalc___por_sector[".showAddInPopup"] = false;

$tdataalc___por_sector[".showEditInPopup"] = false;

$tdataalc___por_sector[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataalc___por_sector[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataalc___por_sector[".listAjax"] = false;
//	temporary
//$tdataalc___por_sector[".listAjax"] = false;

	$tdataalc___por_sector[".audit"] = false;

	$tdataalc___por_sector[".locking"] = false;


$pages = $tdataalc___por_sector[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalc___por_sector[".edit"] = true;
	$tdataalc___por_sector[".afterEditAction"] = 1;
	$tdataalc___por_sector[".closePopupAfterEdit"] = 1;
	$tdataalc___por_sector[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalc___por_sector[".add"] = true;
$tdataalc___por_sector[".afterAddAction"] = 1;
$tdataalc___por_sector[".closePopupAfterAdd"] = 1;
$tdataalc___por_sector[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalc___por_sector[".list"] = true;
}



$tdataalc___por_sector[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalc___por_sector[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalc___por_sector[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalc___por_sector[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalc___por_sector[".printFriendly"] = true;
}



$tdataalc___por_sector[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalc___por_sector[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalc___por_sector[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalc___por_sector[".isUseAjaxSuggest"] = true;






$tdataalc___por_sector[".ajaxCodeSnippetAdded"] = false;

$tdataalc___por_sector[".buttonsAdded"] = false;

$tdataalc___por_sector[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalc___por_sector[".isUseTimeForSearch"] = false;


$tdataalc___por_sector[".badgeColor"] = "E67349";


$tdataalc___por_sector[".allSearchFields"] = array();
$tdataalc___por_sector[".filterFields"] = array();
$tdataalc___por_sector[".requiredSearchFields"] = array();

$tdataalc___por_sector[".googleLikeFields"] = array();
$tdataalc___por_sector[".googleLikeFields"][] = "id_distrito";
$tdataalc___por_sector[".googleLikeFields"][] = "id_sector";
$tdataalc___por_sector[".googleLikeFields"][] = "PAC";
$tdataalc___por_sector[".googleLikeFields"][] = "FAPER";
$tdataalc___por_sector[".googleLikeFields"][] = "NUEVA_RUTA";
$tdataalc___por_sector[".googleLikeFields"][] = "ALIANZA_PAT";
$tdataalc___por_sector[".googleLikeFields"][] = "LIBRE";
$tdataalc___por_sector[".googleLikeFields"][] = "PSH";
$tdataalc___por_sector[".googleLikeFields"][] = "LIDEHR";
$tdataalc___por_sector[".googleLikeFields"][] = "DC";
$tdataalc___por_sector[".googleLikeFields"][] = "TSH";
$tdataalc___por_sector[".googleLikeFields"][] = "LIBERAL";
$tdataalc___por_sector[".googleLikeFields"][] = "NACIONAL";
$tdataalc___por_sector[".googleLikeFields"][] = "PINU";
$tdataalc___por_sector[".googleLikeFields"][] = "Otros";
$tdataalc___por_sector[".googleLikeFields"][] = "Validos";
$tdataalc___por_sector[".googleLikeFields"][] = "Blancos";
$tdataalc___por_sector[".googleLikeFields"][] = "Nulos";
$tdataalc___por_sector[".googleLikeFields"][] = "Utilizados";
$tdataalc___por_sector[".googleLikeFields"][] = "No_Utilizados";
$tdataalc___por_sector[".googleLikeFields"][] = "Total";



$tdataalc___por_sector[".tableType"] = "report";

$tdataalc___por_sector[".printerPageOrientation"] = 1;
$tdataalc___por_sector[".nPrinterPageScale"] = 100;

$tdataalc___por_sector[".nPrinterSplitRecords"] = 20;

$tdataalc___por_sector[".geocodingEnabled"] = false;

//report settings
$tdataalc___por_sector[".printReportLayout"] = 6;

$tdataalc___por_sector[".reportPrintPartitionType"] = 1;
$tdataalc___por_sector[".reportPrintGroupsPerPage"] = 20;
$tdataalc___por_sector[".lowGroup"] = 0;



$tdataalc___por_sector[".pageSize"] = 20;


$tdataalc___por_sector[".isExistTotalFields"] = true;



$tdataalc___por_sector[".reportGlobalSummary"] = true;

$tdataalc___por_sector[".repShowDet"] = true;

$tdataalc___por_sector[".reportLayout"] = 6;

//end of report settings










$tstrOrderBy = "order by ur.id_sector";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataalc___por_sector[".strOrderBy"] = $tstrOrderBy;

$tdataalc___por_sector[".orderindexes"] = array();
	$tdataalc___por_sector[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "ur.id_sector");



$tdataalc___por_sector[".sqlHead"] = "select ur.id_distrito, ur.id_sector,  (select concat(sum(a.candidato1), \" (\", ROUND(((((sum(a.candidato1)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)) ))))*100),1), \"%)\")    from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as PAC,  (select concat(sum(a.candidato2), \" (\", ROUND((((sum(a.candidato2)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as FAPER,  (select concat(sum(a.candidato3), \" (\", ROUND((((sum(a.candidato3)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as NUEVA_RUTA,  (select concat(sum(a.candidato4), \" (\", ROUND((((sum(a.candidato4)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as ALIANZA_PAT,  (select concat(sum(a.candidato5), \" (\", ROUND((((sum(a.candidato5)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as LIBRE,  (select concat(sum(a.candidato6), \" (\", ROUND((((sum(a.candidato6)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as PSH,  (select concat(sum(a.candidato7), \" (\", ROUND((((sum(a.candidato7)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as LIDEHR,  (select concat(sum(a.candidato8), \" (\", ROUND((((sum(a.candidato8)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as DC,  (select concat(sum(a.candidato9), \" (\", ROUND((((sum(a.candidato9)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as TSH,  (select concat(sum(a.candidato10), \" (\", ROUND((((sum(a.candidato10)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as LIBERAL,  (select concat(sum(a.candidato11), \" (\", ROUND((((sum(a.candidato11)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as NACIONAL,  (select concat(sum(a.candidato12), \" (\", ROUND((((sum(a.candidato12)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as PINU,  (select concat(((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8))   + (sum(a.candidato9)) + (sum(a.candidato12))), \" (\", ROUND((((((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) +  (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato12))) / ((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Otros,  (select sum(a.validos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Validos,  (select sum(a.blancos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Blancos,  (select sum(a.nulos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Nulos,  (select sum(a.utilizados) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Utilizados,  (select sum(a.no_utilizados) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as No_Utilizados,  (select sum(a.total) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Total";
$tdataalc___por_sector[".sqlFrom"] = "from voto_alcalde as va  inner join urna as ur on va.id_urna = ur.id_urna";
$tdataalc___por_sector[".sqlWhereExpr"] = "";
$tdataalc___por_sector[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalc___por_sector[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalc___por_sector[".arrGroupsPerPage"] = $arrGPP;

$tdataalc___por_sector[".highlightSearchResults"] = true;

$tableKeysalc___por_sector = array();
$tdataalc___por_sector[".Keys"] = $tableKeysalc___por_sector;


$tdataalc___por_sector[".hideMobileList"] = array();




//	id_distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_distrito";
	$fdata["GoodName"] = "id_distrito";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","id_distrito");
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


	$tdataalc___por_sector["id_distrito"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "id_distrito";
//	id_sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_sector";
	$fdata["GoodName"] = "id_sector";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","id_sector");
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


	$tdataalc___por_sector["id_sector"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "id_sector";
//	PAC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PAC";
	$fdata["GoodName"] = "PAC";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","PAC");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "PAC";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato1), \" (\", ROUND(((((sum(a.candidato1)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)) ))))*100),1), \"%)\")    from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["PAC"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "PAC";
//	FAPER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FAPER";
	$fdata["GoodName"] = "FAPER";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","FAPER");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "FAPER";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato2), \" (\", ROUND((((sum(a.candidato2)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["FAPER"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "FAPER";
//	NUEVA_RUTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "NUEVA_RUTA";
	$fdata["GoodName"] = "NUEVA_RUTA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","NUEVA_RUTA");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "NUEVA_RUTA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato3), \" (\", ROUND((((sum(a.candidato3)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["NUEVA_RUTA"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "NUEVA_RUTA";
//	ALIANZA_PAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ALIANZA_PAT";
	$fdata["GoodName"] = "ALIANZA_PAT";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","ALIANZA_PAT");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "ALIANZA_PAT";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato4), \" (\", ROUND((((sum(a.candidato4)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["ALIANZA_PAT"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "ALIANZA_PAT";
//	LIBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "LIBRE";
	$fdata["GoodName"] = "LIBRE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","LIBRE");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "LIBRE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato5), \" (\", ROUND((((sum(a.candidato5)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["LIBRE"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "LIBRE";
//	PSH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PSH";
	$fdata["GoodName"] = "PSH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","PSH");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "PSH";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato6), \" (\", ROUND((((sum(a.candidato6)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["PSH"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "PSH";
//	LIDEHR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LIDEHR";
	$fdata["GoodName"] = "LIDEHR";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","LIDEHR");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "LIDEHR";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato7), \" (\", ROUND((((sum(a.candidato7)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["LIDEHR"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "LIDEHR";
//	DC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DC";
	$fdata["GoodName"] = "DC";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","DC");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "DC";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato8), \" (\", ROUND((((sum(a.candidato8)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["DC"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "DC";
//	TSH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "TSH";
	$fdata["GoodName"] = "TSH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","TSH");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "TSH";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato9), \" (\", ROUND((((sum(a.candidato9)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["TSH"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "TSH";
//	LIBERAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "LIBERAL";
	$fdata["GoodName"] = "LIBERAL";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","LIBERAL");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "LIBERAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato10), \" (\", ROUND((((sum(a.candidato10)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["LIBERAL"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "LIBERAL";
//	NACIONAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "NACIONAL";
	$fdata["GoodName"] = "NACIONAL";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","NACIONAL");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "NACIONAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato11), \" (\", ROUND((((sum(a.candidato11)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["NACIONAL"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "NACIONAL";
//	PINU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "PINU";
	$fdata["GoodName"] = "PINU";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","PINU");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "PINU";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(a.candidato12), \" (\", ROUND((((sum(a.candidato12)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["PINU"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "PINU";
//	Otros
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Otros";
	$fdata["GoodName"] = "Otros";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","Otros");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "Otros";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8))   + (sum(a.candidato9)) + (sum(a.candidato12))), \" (\", ROUND((((((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) +  (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato12))) / ((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["Otros"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "Otros";
//	Validos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Validos";
	$fdata["GoodName"] = "Validos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","Validos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "validos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(a.validos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["Validos"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "Validos";
//	Blancos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Blancos";
	$fdata["GoodName"] = "Blancos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","Blancos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "blancos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(a.blancos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["Blancos"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "Blancos";
//	Nulos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Nulos";
	$fdata["GoodName"] = "Nulos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","Nulos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "nulos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(a.nulos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["Nulos"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "Nulos";
//	Utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Utilizados";
	$fdata["GoodName"] = "Utilizados";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","Utilizados");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "utilizados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(a.utilizados) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["Utilizados"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "Utilizados";
//	No_Utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "No_Utilizados";
	$fdata["GoodName"] = "No_Utilizados";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","No_Utilizados");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "no_utilizados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(a.no_utilizados) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["No_Utilizados"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "No_Utilizados";
//	Total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Total";
	$fdata["GoodName"] = "Total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Alc___Por_Sector","Total");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "total";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(a.total) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdataalc___por_sector["Total"] = $fdata;
		$tdataalc___por_sector[".searchableFields"][] = "Total";


$tables_data["Alc - Por Sector"]=&$tdataalc___por_sector;
$field_labels["Alc___Por_Sector"] = &$fieldLabelsalc___por_sector;
$fieldToolTips["Alc___Por_Sector"] = &$fieldToolTipsalc___por_sector;
$placeHolders["Alc___Por_Sector"] = &$placeHoldersalc___por_sector;
$page_titles["Alc___Por_Sector"] = &$pageTitlesalc___por_sector;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Alc - Por Sector"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Alc - Por Sector"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alc___por_sector()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "ur.id_distrito, ur.id_sector,  (select concat(sum(a.candidato1), \" (\", ROUND(((((sum(a.candidato1)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)) ))))*100),1), \"%)\")    from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as PAC,  (select concat(sum(a.candidato2), \" (\", ROUND((((sum(a.candidato2)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as FAPER,  (select concat(sum(a.candidato3), \" (\", ROUND((((sum(a.candidato3)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as NUEVA_RUTA,  (select concat(sum(a.candidato4), \" (\", ROUND((((sum(a.candidato4)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as ALIANZA_PAT,  (select concat(sum(a.candidato5), \" (\", ROUND((((sum(a.candidato5)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as LIBRE,  (select concat(sum(a.candidato6), \" (\", ROUND((((sum(a.candidato6)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as PSH,  (select concat(sum(a.candidato7), \" (\", ROUND((((sum(a.candidato7)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as LIDEHR,  (select concat(sum(a.candidato8), \" (\", ROUND((((sum(a.candidato8)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as DC,  (select concat(sum(a.candidato9), \" (\", ROUND((((sum(a.candidato9)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as TSH,  (select concat(sum(a.candidato10), \" (\", ROUND((((sum(a.candidato10)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as LIBERAL,  (select concat(sum(a.candidato11), \" (\", ROUND((((sum(a.candidato11)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as NACIONAL,  (select concat(sum(a.candidato12), \" (\", ROUND((((sum(a.candidato12)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as PINU,  (select concat(((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8))   + (sum(a.candidato9)) + (sum(a.candidato12))), \" (\", ROUND((((((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) +  (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato12))) / ((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Otros,  (select sum(a.validos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Validos,  (select sum(a.blancos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Blancos,  (select sum(a.nulos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Nulos,  (select sum(a.utilizados) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Utilizados,  (select sum(a.no_utilizados) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as No_Utilizados,  (select sum(a.total) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Total";
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
	"m_srcTableName" => "Alc - Por Sector"
));

$proto6["m_sql"] = "ur.id_distrito";
$proto6["m_srcTableName"] = "Alc - Por Sector";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "ur",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto8["m_sql"] = "ur.id_sector";
$proto8["m_srcTableName"] = "Alc - Por Sector";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_strHead"] = "select";
$proto11["m_strFieldList"] = "concat(sum(a.candidato1), \" (\", ROUND(((((sum(a.candidato1)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)) ))))*100),1), \"%)\")";
$proto11["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto11["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto11["m_strOrderBy"] = "";
	
		;
			$proto11["cipherer"] = null;
$proto13=array();
$proto13["m_sql"] = "u.id_sector = ur.id_sector";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "= ur.id_sector";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_where"] = $obj;
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto11["m_having"] = $obj;
$proto11["m_fieldlist"] = array();
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_CUSTOM";
$proto18["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato1)"
));

$proto18["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto18["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND(((((sum(a.candidato1)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)) ))))*100),1)"
));

$proto18["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto18);

$proto17["m_sql"] = "concat(sum(a.candidato1), \" (\", ROUND(((((sum(a.candidato1)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)) ))))*100),1), \"%)\")";
$proto17["m_srcTableName"] = "Alc - Por Sector";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto11["m_fieldlist"][]=$obj;
$proto11["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "voto_alcalde";
$proto24["m_srcTableName"] = "Alc - Por Sector";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "elecciones";
$proto24["m_columns"][] = "id_urna";
$proto24["m_columns"][] = "candidato1";
$proto24["m_columns"][] = "candidato2";
$proto24["m_columns"][] = "candidato3";
$proto24["m_columns"][] = "candidato4";
$proto24["m_columns"][] = "candidato5";
$proto24["m_columns"][] = "candidato6";
$proto24["m_columns"][] = "candidato7";
$proto24["m_columns"][] = "candidato8";
$proto24["m_columns"][] = "candidato9";
$proto24["m_columns"][] = "candidato10";
$proto24["m_columns"][] = "candidato11";
$proto24["m_columns"][] = "candidato12";
$proto24["m_columns"][] = "validos";
$proto24["m_columns"][] = "blancos";
$proto24["m_columns"][] = "nulos";
$proto24["m_columns"][] = "utilizados";
$proto24["m_columns"][] = "no_utilizados";
$proto24["m_columns"][] = "total";
$proto24["m_columns"][] = "usuario";
$proto24["m_columns"][] = "fecha";
$proto24["m_columns"][] = "editado_por";
$proto24["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "voto_alcalde as a";
$proto23["m_alias"] = "a";
$proto23["m_srcTableName"] = "Alc - Por Sector";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto11["m_fromlist"][]=$obj;
												$proto27=array();
$proto27["m_link"] = "SQLL_INNERJOIN";
			$proto28=array();
$proto28["m_strName"] = "urna";
$proto28["m_srcTableName"] = "Alc - Por Sector";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "id_distrito";
$proto28["m_columns"][] = "id_sector";
$proto28["m_columns"][] = "id_urna";
$proto28["m_columns"][] = "nombre_centro";
$proto28["m_columns"][] = "ubicación";
$proto28["m_columns"][] = "votantes";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto27["m_alias"] = "u";
$proto27["m_srcTableName"] = "Alc - Por Sector";
$proto29=array();
$proto29["m_sql"] = "a.id_urna = u.id_urna";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "= u.id_urna";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto11["m_fromlist"][]=$obj;
$proto11["m_groupby"] = array();
$proto11["m_orderby"] = array();
$proto11["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto11);

$proto10["m_sql"] = "(select concat(sum(a.candidato1), \" (\", ROUND(((((sum(a.candidato1)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)) ))))*100),1), \"%)\")    from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto10["m_srcTableName"] = "Alc - Por Sector";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "PAC";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$proto32=array();
$proto32["m_strHead"] = "select";
$proto32["m_strFieldList"] = "concat(sum(a.candidato2), \" (\", ROUND((((sum(a.candidato2)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto32["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto32["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto32["m_strOrderBy"] = "";
	
		;
			$proto32["cipherer"] = null;
$proto34=array();
$proto34["m_sql"] = "u.id_sector = ur.id_sector";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= ur.id_sector";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_where"] = $obj;
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto32["m_having"] = $obj;
$proto32["m_fieldlist"] = array();
						$proto38=array();
			$proto39=array();
$proto39["m_functiontype"] = "SQLF_CUSTOM";
$proto39["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato2)"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato2)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto39["m_arguments"][]=$obj;
$proto39["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto39);

$proto38["m_sql"] = "concat(sum(a.candidato2), \" (\", ROUND((((sum(a.candidato2)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto38["m_srcTableName"] = "Alc - Por Sector";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto32["m_fieldlist"][]=$obj;
$proto32["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "voto_alcalde";
$proto45["m_srcTableName"] = "Alc - Por Sector";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "elecciones";
$proto45["m_columns"][] = "id_urna";
$proto45["m_columns"][] = "candidato1";
$proto45["m_columns"][] = "candidato2";
$proto45["m_columns"][] = "candidato3";
$proto45["m_columns"][] = "candidato4";
$proto45["m_columns"][] = "candidato5";
$proto45["m_columns"][] = "candidato6";
$proto45["m_columns"][] = "candidato7";
$proto45["m_columns"][] = "candidato8";
$proto45["m_columns"][] = "candidato9";
$proto45["m_columns"][] = "candidato10";
$proto45["m_columns"][] = "candidato11";
$proto45["m_columns"][] = "candidato12";
$proto45["m_columns"][] = "validos";
$proto45["m_columns"][] = "blancos";
$proto45["m_columns"][] = "nulos";
$proto45["m_columns"][] = "utilizados";
$proto45["m_columns"][] = "no_utilizados";
$proto45["m_columns"][] = "total";
$proto45["m_columns"][] = "usuario";
$proto45["m_columns"][] = "fecha";
$proto45["m_columns"][] = "editado_por";
$proto45["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "voto_alcalde as a";
$proto44["m_alias"] = "a";
$proto44["m_srcTableName"] = "Alc - Por Sector";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto32["m_fromlist"][]=$obj;
												$proto48=array();
$proto48["m_link"] = "SQLL_INNERJOIN";
			$proto49=array();
$proto49["m_strName"] = "urna";
$proto49["m_srcTableName"] = "Alc - Por Sector";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id_distrito";
$proto49["m_columns"][] = "id_sector";
$proto49["m_columns"][] = "id_urna";
$proto49["m_columns"][] = "nombre_centro";
$proto49["m_columns"][] = "ubicación";
$proto49["m_columns"][] = "votantes";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto48["m_alias"] = "u";
$proto48["m_srcTableName"] = "Alc - Por Sector";
$proto50=array();
$proto50["m_sql"] = "a.id_urna = u.id_urna";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "= u.id_urna";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto32["m_fromlist"][]=$obj;
$proto32["m_groupby"] = array();
$proto32["m_orderby"] = array();
$proto32["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto32);

$proto31["m_sql"] = "(select concat(sum(a.candidato2), \" (\", ROUND((((sum(a.candidato2)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto31["m_srcTableName"] = "Alc - Por Sector";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "FAPER";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$proto53=array();
$proto53["m_strHead"] = "select";
$proto53["m_strFieldList"] = "concat(sum(a.candidato3), \" (\", ROUND((((sum(a.candidato3)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto53["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto53["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto53["m_strOrderBy"] = "";
	
		;
			$proto53["cipherer"] = null;
$proto55=array();
$proto55["m_sql"] = "u.id_sector = ur.id_sector";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "= ur.id_sector";
$proto55["m_havingmode"] = false;
$proto55["m_inBrackets"] = false;
$proto55["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto55);

$proto53["m_where"] = $obj;
$proto57=array();
$proto57["m_sql"] = "";
$proto57["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto57["m_column"]=$obj;
$proto57["m_contained"] = array();
$proto57["m_strCase"] = "";
$proto57["m_havingmode"] = false;
$proto57["m_inBrackets"] = false;
$proto57["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto57);

$proto53["m_having"] = $obj;
$proto53["m_fieldlist"] = array();
						$proto59=array();
			$proto60=array();
$proto60["m_functiontype"] = "SQLF_CUSTOM";
$proto60["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato3)"
));

$proto60["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto60["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato3)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto60["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto60["m_arguments"][]=$obj;
$proto60["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto60);

$proto59["m_sql"] = "concat(sum(a.candidato3), \" (\", ROUND((((sum(a.candidato3)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto59["m_srcTableName"] = "Alc - Por Sector";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto53["m_fieldlist"][]=$obj;
$proto53["m_fromlist"] = array();
												$proto65=array();
$proto65["m_link"] = "SQLL_MAIN";
			$proto66=array();
$proto66["m_strName"] = "voto_alcalde";
$proto66["m_srcTableName"] = "Alc - Por Sector";
$proto66["m_columns"] = array();
$proto66["m_columns"][] = "elecciones";
$proto66["m_columns"][] = "id_urna";
$proto66["m_columns"][] = "candidato1";
$proto66["m_columns"][] = "candidato2";
$proto66["m_columns"][] = "candidato3";
$proto66["m_columns"][] = "candidato4";
$proto66["m_columns"][] = "candidato5";
$proto66["m_columns"][] = "candidato6";
$proto66["m_columns"][] = "candidato7";
$proto66["m_columns"][] = "candidato8";
$proto66["m_columns"][] = "candidato9";
$proto66["m_columns"][] = "candidato10";
$proto66["m_columns"][] = "candidato11";
$proto66["m_columns"][] = "candidato12";
$proto66["m_columns"][] = "validos";
$proto66["m_columns"][] = "blancos";
$proto66["m_columns"][] = "nulos";
$proto66["m_columns"][] = "utilizados";
$proto66["m_columns"][] = "no_utilizados";
$proto66["m_columns"][] = "total";
$proto66["m_columns"][] = "usuario";
$proto66["m_columns"][] = "fecha";
$proto66["m_columns"][] = "editado_por";
$proto66["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto66);

$proto65["m_table"] = $obj;
$proto65["m_sql"] = "voto_alcalde as a";
$proto65["m_alias"] = "a";
$proto65["m_srcTableName"] = "Alc - Por Sector";
$proto67=array();
$proto67["m_sql"] = "";
$proto67["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto67["m_column"]=$obj;
$proto67["m_contained"] = array();
$proto67["m_strCase"] = "";
$proto67["m_havingmode"] = false;
$proto67["m_inBrackets"] = false;
$proto67["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto67);

$proto65["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto65);

$proto53["m_fromlist"][]=$obj;
												$proto69=array();
$proto69["m_link"] = "SQLL_INNERJOIN";
			$proto70=array();
$proto70["m_strName"] = "urna";
$proto70["m_srcTableName"] = "Alc - Por Sector";
$proto70["m_columns"] = array();
$proto70["m_columns"][] = "id_distrito";
$proto70["m_columns"][] = "id_sector";
$proto70["m_columns"][] = "id_urna";
$proto70["m_columns"][] = "nombre_centro";
$proto70["m_columns"][] = "ubicación";
$proto70["m_columns"][] = "votantes";
$obj = new SQLTable($proto70);

$proto69["m_table"] = $obj;
$proto69["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto69["m_alias"] = "u";
$proto69["m_srcTableName"] = "Alc - Por Sector";
$proto71=array();
$proto71["m_sql"] = "a.id_urna = u.id_urna";
$proto71["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto71["m_column"]=$obj;
$proto71["m_contained"] = array();
$proto71["m_strCase"] = "= u.id_urna";
$proto71["m_havingmode"] = false;
$proto71["m_inBrackets"] = false;
$proto71["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto71);

$proto69["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto69);

$proto53["m_fromlist"][]=$obj;
$proto53["m_groupby"] = array();
$proto53["m_orderby"] = array();
$proto53["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto53);

$proto52["m_sql"] = "(select concat(sum(a.candidato3), \" (\", ROUND((((sum(a.candidato3)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto52["m_srcTableName"] = "Alc - Por Sector";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "NUEVA_RUTA";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$proto74=array();
$proto74["m_strHead"] = "select";
$proto74["m_strFieldList"] = "concat(sum(a.candidato4), \" (\", ROUND((((sum(a.candidato4)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto74["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto74["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto74["m_strOrderBy"] = "";
	
		;
			$proto74["cipherer"] = null;
$proto76=array();
$proto76["m_sql"] = "u.id_sector = ur.id_sector";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "= ur.id_sector";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

$proto74["m_where"] = $obj;
$proto78=array();
$proto78["m_sql"] = "";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto74["m_having"] = $obj;
$proto74["m_fieldlist"] = array();
						$proto80=array();
			$proto81=array();
$proto81["m_functiontype"] = "SQLF_CUSTOM";
$proto81["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato4)"
));

$proto81["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto81["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato4)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto81["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto81["m_arguments"][]=$obj;
$proto81["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto81);

$proto80["m_sql"] = "concat(sum(a.candidato4), \" (\", ROUND((((sum(a.candidato4)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto80["m_srcTableName"] = "Alc - Por Sector";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto74["m_fieldlist"][]=$obj;
$proto74["m_fromlist"] = array();
												$proto86=array();
$proto86["m_link"] = "SQLL_MAIN";
			$proto87=array();
$proto87["m_strName"] = "voto_alcalde";
$proto87["m_srcTableName"] = "Alc - Por Sector";
$proto87["m_columns"] = array();
$proto87["m_columns"][] = "elecciones";
$proto87["m_columns"][] = "id_urna";
$proto87["m_columns"][] = "candidato1";
$proto87["m_columns"][] = "candidato2";
$proto87["m_columns"][] = "candidato3";
$proto87["m_columns"][] = "candidato4";
$proto87["m_columns"][] = "candidato5";
$proto87["m_columns"][] = "candidato6";
$proto87["m_columns"][] = "candidato7";
$proto87["m_columns"][] = "candidato8";
$proto87["m_columns"][] = "candidato9";
$proto87["m_columns"][] = "candidato10";
$proto87["m_columns"][] = "candidato11";
$proto87["m_columns"][] = "candidato12";
$proto87["m_columns"][] = "validos";
$proto87["m_columns"][] = "blancos";
$proto87["m_columns"][] = "nulos";
$proto87["m_columns"][] = "utilizados";
$proto87["m_columns"][] = "no_utilizados";
$proto87["m_columns"][] = "total";
$proto87["m_columns"][] = "usuario";
$proto87["m_columns"][] = "fecha";
$proto87["m_columns"][] = "editado_por";
$proto87["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto87);

$proto86["m_table"] = $obj;
$proto86["m_sql"] = "voto_alcalde as a";
$proto86["m_alias"] = "a";
$proto86["m_srcTableName"] = "Alc - Por Sector";
$proto88=array();
$proto88["m_sql"] = "";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

$proto86["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto86);

$proto74["m_fromlist"][]=$obj;
												$proto90=array();
$proto90["m_link"] = "SQLL_INNERJOIN";
			$proto91=array();
$proto91["m_strName"] = "urna";
$proto91["m_srcTableName"] = "Alc - Por Sector";
$proto91["m_columns"] = array();
$proto91["m_columns"][] = "id_distrito";
$proto91["m_columns"][] = "id_sector";
$proto91["m_columns"][] = "id_urna";
$proto91["m_columns"][] = "nombre_centro";
$proto91["m_columns"][] = "ubicación";
$proto91["m_columns"][] = "votantes";
$obj = new SQLTable($proto91);

$proto90["m_table"] = $obj;
$proto90["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto90["m_alias"] = "u";
$proto90["m_srcTableName"] = "Alc - Por Sector";
$proto92=array();
$proto92["m_sql"] = "a.id_urna = u.id_urna";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
$proto92["m_strCase"] = "= u.id_urna";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

$proto90["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto90);

$proto74["m_fromlist"][]=$obj;
$proto74["m_groupby"] = array();
$proto74["m_orderby"] = array();
$proto74["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto74);

$proto73["m_sql"] = "(select concat(sum(a.candidato4), \" (\", ROUND((((sum(a.candidato4)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto73["m_srcTableName"] = "Alc - Por Sector";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "ALIANZA_PAT";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$proto95=array();
$proto95["m_strHead"] = "select";
$proto95["m_strFieldList"] = "concat(sum(a.candidato5), \" (\", ROUND((((sum(a.candidato5)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto95["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto95["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto95["m_strOrderBy"] = "";
	
		;
			$proto95["cipherer"] = null;
$proto97=array();
$proto97["m_sql"] = "u.id_sector = ur.id_sector";
$proto97["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto97["m_column"]=$obj;
$proto97["m_contained"] = array();
$proto97["m_strCase"] = "= ur.id_sector";
$proto97["m_havingmode"] = false;
$proto97["m_inBrackets"] = false;
$proto97["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto97);

$proto95["m_where"] = $obj;
$proto99=array();
$proto99["m_sql"] = "";
$proto99["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto99["m_column"]=$obj;
$proto99["m_contained"] = array();
$proto99["m_strCase"] = "";
$proto99["m_havingmode"] = false;
$proto99["m_inBrackets"] = false;
$proto99["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto99);

$proto95["m_having"] = $obj;
$proto95["m_fieldlist"] = array();
						$proto101=array();
			$proto102=array();
$proto102["m_functiontype"] = "SQLF_CUSTOM";
$proto102["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato5)"
));

$proto102["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto102["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato5)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto102["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto102["m_arguments"][]=$obj;
$proto102["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto102);

$proto101["m_sql"] = "concat(sum(a.candidato5), \" (\", ROUND((((sum(a.candidato5)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto101["m_srcTableName"] = "Alc - Por Sector";
$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto95["m_fieldlist"][]=$obj;
$proto95["m_fromlist"] = array();
												$proto107=array();
$proto107["m_link"] = "SQLL_MAIN";
			$proto108=array();
$proto108["m_strName"] = "voto_alcalde";
$proto108["m_srcTableName"] = "Alc - Por Sector";
$proto108["m_columns"] = array();
$proto108["m_columns"][] = "elecciones";
$proto108["m_columns"][] = "id_urna";
$proto108["m_columns"][] = "candidato1";
$proto108["m_columns"][] = "candidato2";
$proto108["m_columns"][] = "candidato3";
$proto108["m_columns"][] = "candidato4";
$proto108["m_columns"][] = "candidato5";
$proto108["m_columns"][] = "candidato6";
$proto108["m_columns"][] = "candidato7";
$proto108["m_columns"][] = "candidato8";
$proto108["m_columns"][] = "candidato9";
$proto108["m_columns"][] = "candidato10";
$proto108["m_columns"][] = "candidato11";
$proto108["m_columns"][] = "candidato12";
$proto108["m_columns"][] = "validos";
$proto108["m_columns"][] = "blancos";
$proto108["m_columns"][] = "nulos";
$proto108["m_columns"][] = "utilizados";
$proto108["m_columns"][] = "no_utilizados";
$proto108["m_columns"][] = "total";
$proto108["m_columns"][] = "usuario";
$proto108["m_columns"][] = "fecha";
$proto108["m_columns"][] = "editado_por";
$proto108["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto108);

$proto107["m_table"] = $obj;
$proto107["m_sql"] = "voto_alcalde as a";
$proto107["m_alias"] = "a";
$proto107["m_srcTableName"] = "Alc - Por Sector";
$proto109=array();
$proto109["m_sql"] = "";
$proto109["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto109["m_column"]=$obj;
$proto109["m_contained"] = array();
$proto109["m_strCase"] = "";
$proto109["m_havingmode"] = false;
$proto109["m_inBrackets"] = false;
$proto109["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto109);

$proto107["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto107);

$proto95["m_fromlist"][]=$obj;
												$proto111=array();
$proto111["m_link"] = "SQLL_INNERJOIN";
			$proto112=array();
$proto112["m_strName"] = "urna";
$proto112["m_srcTableName"] = "Alc - Por Sector";
$proto112["m_columns"] = array();
$proto112["m_columns"][] = "id_distrito";
$proto112["m_columns"][] = "id_sector";
$proto112["m_columns"][] = "id_urna";
$proto112["m_columns"][] = "nombre_centro";
$proto112["m_columns"][] = "ubicación";
$proto112["m_columns"][] = "votantes";
$obj = new SQLTable($proto112);

$proto111["m_table"] = $obj;
$proto111["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto111["m_alias"] = "u";
$proto111["m_srcTableName"] = "Alc - Por Sector";
$proto113=array();
$proto113["m_sql"] = "a.id_urna = u.id_urna";
$proto113["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto113["m_column"]=$obj;
$proto113["m_contained"] = array();
$proto113["m_strCase"] = "= u.id_urna";
$proto113["m_havingmode"] = false;
$proto113["m_inBrackets"] = false;
$proto113["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto113);

$proto111["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto111);

$proto95["m_fromlist"][]=$obj;
$proto95["m_groupby"] = array();
$proto95["m_orderby"] = array();
$proto95["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto95);

$proto94["m_sql"] = "(select concat(sum(a.candidato5), \" (\", ROUND((((sum(a.candidato5)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto94["m_srcTableName"] = "Alc - Por Sector";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "LIBRE";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto115=array();
			$proto116=array();
$proto116["m_strHead"] = "select";
$proto116["m_strFieldList"] = "concat(sum(a.candidato6), \" (\", ROUND((((sum(a.candidato6)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto116["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto116["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto116["m_strOrderBy"] = "";
	
		;
			$proto116["cipherer"] = null;
$proto118=array();
$proto118["m_sql"] = "u.id_sector = ur.id_sector";
$proto118["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto118["m_column"]=$obj;
$proto118["m_contained"] = array();
$proto118["m_strCase"] = "= ur.id_sector";
$proto118["m_havingmode"] = false;
$proto118["m_inBrackets"] = false;
$proto118["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto118);

$proto116["m_where"] = $obj;
$proto120=array();
$proto120["m_sql"] = "";
$proto120["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto120["m_column"]=$obj;
$proto120["m_contained"] = array();
$proto120["m_strCase"] = "";
$proto120["m_havingmode"] = false;
$proto120["m_inBrackets"] = false;
$proto120["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto120);

$proto116["m_having"] = $obj;
$proto116["m_fieldlist"] = array();
						$proto122=array();
			$proto123=array();
$proto123["m_functiontype"] = "SQLF_CUSTOM";
$proto123["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato6)"
));

$proto123["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto123["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato6)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto123["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto123["m_arguments"][]=$obj;
$proto123["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto123);

$proto122["m_sql"] = "concat(sum(a.candidato6), \" (\", ROUND((((sum(a.candidato6)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto122["m_srcTableName"] = "Alc - Por Sector";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto116["m_fieldlist"][]=$obj;
$proto116["m_fromlist"] = array();
												$proto128=array();
$proto128["m_link"] = "SQLL_MAIN";
			$proto129=array();
$proto129["m_strName"] = "voto_alcalde";
$proto129["m_srcTableName"] = "Alc - Por Sector";
$proto129["m_columns"] = array();
$proto129["m_columns"][] = "elecciones";
$proto129["m_columns"][] = "id_urna";
$proto129["m_columns"][] = "candidato1";
$proto129["m_columns"][] = "candidato2";
$proto129["m_columns"][] = "candidato3";
$proto129["m_columns"][] = "candidato4";
$proto129["m_columns"][] = "candidato5";
$proto129["m_columns"][] = "candidato6";
$proto129["m_columns"][] = "candidato7";
$proto129["m_columns"][] = "candidato8";
$proto129["m_columns"][] = "candidato9";
$proto129["m_columns"][] = "candidato10";
$proto129["m_columns"][] = "candidato11";
$proto129["m_columns"][] = "candidato12";
$proto129["m_columns"][] = "validos";
$proto129["m_columns"][] = "blancos";
$proto129["m_columns"][] = "nulos";
$proto129["m_columns"][] = "utilizados";
$proto129["m_columns"][] = "no_utilizados";
$proto129["m_columns"][] = "total";
$proto129["m_columns"][] = "usuario";
$proto129["m_columns"][] = "fecha";
$proto129["m_columns"][] = "editado_por";
$proto129["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto129);

$proto128["m_table"] = $obj;
$proto128["m_sql"] = "voto_alcalde as a";
$proto128["m_alias"] = "a";
$proto128["m_srcTableName"] = "Alc - Por Sector";
$proto130=array();
$proto130["m_sql"] = "";
$proto130["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto130["m_column"]=$obj;
$proto130["m_contained"] = array();
$proto130["m_strCase"] = "";
$proto130["m_havingmode"] = false;
$proto130["m_inBrackets"] = false;
$proto130["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto130);

$proto128["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto128);

$proto116["m_fromlist"][]=$obj;
												$proto132=array();
$proto132["m_link"] = "SQLL_INNERJOIN";
			$proto133=array();
$proto133["m_strName"] = "urna";
$proto133["m_srcTableName"] = "Alc - Por Sector";
$proto133["m_columns"] = array();
$proto133["m_columns"][] = "id_distrito";
$proto133["m_columns"][] = "id_sector";
$proto133["m_columns"][] = "id_urna";
$proto133["m_columns"][] = "nombre_centro";
$proto133["m_columns"][] = "ubicación";
$proto133["m_columns"][] = "votantes";
$obj = new SQLTable($proto133);

$proto132["m_table"] = $obj;
$proto132["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto132["m_alias"] = "u";
$proto132["m_srcTableName"] = "Alc - Por Sector";
$proto134=array();
$proto134["m_sql"] = "a.id_urna = u.id_urna";
$proto134["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto134["m_column"]=$obj;
$proto134["m_contained"] = array();
$proto134["m_strCase"] = "= u.id_urna";
$proto134["m_havingmode"] = false;
$proto134["m_inBrackets"] = false;
$proto134["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto134);

$proto132["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto132);

$proto116["m_fromlist"][]=$obj;
$proto116["m_groupby"] = array();
$proto116["m_orderby"] = array();
$proto116["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto116);

$proto115["m_sql"] = "(select concat(sum(a.candidato6), \" (\", ROUND((((sum(a.candidato6)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto115["m_srcTableName"] = "Alc - Por Sector";
$proto115["m_expr"]=$obj;
$proto115["m_alias"] = "PSH";
$obj = new SQLFieldListItem($proto115);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$proto137=array();
$proto137["m_strHead"] = "select";
$proto137["m_strFieldList"] = "concat(sum(a.candidato7), \" (\", ROUND((((sum(a.candidato7)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto137["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto137["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto137["m_strOrderBy"] = "";
	
		;
			$proto137["cipherer"] = null;
$proto139=array();
$proto139["m_sql"] = "u.id_sector = ur.id_sector";
$proto139["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto139["m_column"]=$obj;
$proto139["m_contained"] = array();
$proto139["m_strCase"] = "= ur.id_sector";
$proto139["m_havingmode"] = false;
$proto139["m_inBrackets"] = false;
$proto139["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto139);

$proto137["m_where"] = $obj;
$proto141=array();
$proto141["m_sql"] = "";
$proto141["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto141["m_column"]=$obj;
$proto141["m_contained"] = array();
$proto141["m_strCase"] = "";
$proto141["m_havingmode"] = false;
$proto141["m_inBrackets"] = false;
$proto141["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto141);

$proto137["m_having"] = $obj;
$proto137["m_fieldlist"] = array();
						$proto143=array();
			$proto144=array();
$proto144["m_functiontype"] = "SQLF_CUSTOM";
$proto144["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato7)"
));

$proto144["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto144["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato7)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto144["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto144["m_arguments"][]=$obj;
$proto144["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto144);

$proto143["m_sql"] = "concat(sum(a.candidato7), \" (\", ROUND((((sum(a.candidato7)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto143["m_srcTableName"] = "Alc - Por Sector";
$proto143["m_expr"]=$obj;
$proto143["m_alias"] = "";
$obj = new SQLFieldListItem($proto143);

$proto137["m_fieldlist"][]=$obj;
$proto137["m_fromlist"] = array();
												$proto149=array();
$proto149["m_link"] = "SQLL_MAIN";
			$proto150=array();
$proto150["m_strName"] = "voto_alcalde";
$proto150["m_srcTableName"] = "Alc - Por Sector";
$proto150["m_columns"] = array();
$proto150["m_columns"][] = "elecciones";
$proto150["m_columns"][] = "id_urna";
$proto150["m_columns"][] = "candidato1";
$proto150["m_columns"][] = "candidato2";
$proto150["m_columns"][] = "candidato3";
$proto150["m_columns"][] = "candidato4";
$proto150["m_columns"][] = "candidato5";
$proto150["m_columns"][] = "candidato6";
$proto150["m_columns"][] = "candidato7";
$proto150["m_columns"][] = "candidato8";
$proto150["m_columns"][] = "candidato9";
$proto150["m_columns"][] = "candidato10";
$proto150["m_columns"][] = "candidato11";
$proto150["m_columns"][] = "candidato12";
$proto150["m_columns"][] = "validos";
$proto150["m_columns"][] = "blancos";
$proto150["m_columns"][] = "nulos";
$proto150["m_columns"][] = "utilizados";
$proto150["m_columns"][] = "no_utilizados";
$proto150["m_columns"][] = "total";
$proto150["m_columns"][] = "usuario";
$proto150["m_columns"][] = "fecha";
$proto150["m_columns"][] = "editado_por";
$proto150["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto150);

$proto149["m_table"] = $obj;
$proto149["m_sql"] = "voto_alcalde as a";
$proto149["m_alias"] = "a";
$proto149["m_srcTableName"] = "Alc - Por Sector";
$proto151=array();
$proto151["m_sql"] = "";
$proto151["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto151["m_column"]=$obj;
$proto151["m_contained"] = array();
$proto151["m_strCase"] = "";
$proto151["m_havingmode"] = false;
$proto151["m_inBrackets"] = false;
$proto151["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto151);

$proto149["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto149);

$proto137["m_fromlist"][]=$obj;
												$proto153=array();
$proto153["m_link"] = "SQLL_INNERJOIN";
			$proto154=array();
$proto154["m_strName"] = "urna";
$proto154["m_srcTableName"] = "Alc - Por Sector";
$proto154["m_columns"] = array();
$proto154["m_columns"][] = "id_distrito";
$proto154["m_columns"][] = "id_sector";
$proto154["m_columns"][] = "id_urna";
$proto154["m_columns"][] = "nombre_centro";
$proto154["m_columns"][] = "ubicación";
$proto154["m_columns"][] = "votantes";
$obj = new SQLTable($proto154);

$proto153["m_table"] = $obj;
$proto153["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto153["m_alias"] = "u";
$proto153["m_srcTableName"] = "Alc - Por Sector";
$proto155=array();
$proto155["m_sql"] = "a.id_urna = u.id_urna";
$proto155["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto155["m_column"]=$obj;
$proto155["m_contained"] = array();
$proto155["m_strCase"] = "= u.id_urna";
$proto155["m_havingmode"] = false;
$proto155["m_inBrackets"] = false;
$proto155["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto155);

$proto153["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto153);

$proto137["m_fromlist"][]=$obj;
$proto137["m_groupby"] = array();
$proto137["m_orderby"] = array();
$proto137["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto137);

$proto136["m_sql"] = "(select concat(sum(a.candidato7), \" (\", ROUND((((sum(a.candidato7)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto136["m_srcTableName"] = "Alc - Por Sector";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "LIDEHR";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto157=array();
			$proto158=array();
$proto158["m_strHead"] = "select";
$proto158["m_strFieldList"] = "concat(sum(a.candidato8), \" (\", ROUND((((sum(a.candidato8)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto158["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto158["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto158["m_strOrderBy"] = "";
	
		;
			$proto158["cipherer"] = null;
$proto160=array();
$proto160["m_sql"] = "u.id_sector = ur.id_sector";
$proto160["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto160["m_column"]=$obj;
$proto160["m_contained"] = array();
$proto160["m_strCase"] = "= ur.id_sector";
$proto160["m_havingmode"] = false;
$proto160["m_inBrackets"] = false;
$proto160["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto160);

$proto158["m_where"] = $obj;
$proto162=array();
$proto162["m_sql"] = "";
$proto162["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto162["m_column"]=$obj;
$proto162["m_contained"] = array();
$proto162["m_strCase"] = "";
$proto162["m_havingmode"] = false;
$proto162["m_inBrackets"] = false;
$proto162["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto162);

$proto158["m_having"] = $obj;
$proto158["m_fieldlist"] = array();
						$proto164=array();
			$proto165=array();
$proto165["m_functiontype"] = "SQLF_CUSTOM";
$proto165["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato8)"
));

$proto165["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto165["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato8)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto165["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto165["m_arguments"][]=$obj;
$proto165["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto165);

$proto164["m_sql"] = "concat(sum(a.candidato8), \" (\", ROUND((((sum(a.candidato8)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto164["m_srcTableName"] = "Alc - Por Sector";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto158["m_fieldlist"][]=$obj;
$proto158["m_fromlist"] = array();
												$proto170=array();
$proto170["m_link"] = "SQLL_MAIN";
			$proto171=array();
$proto171["m_strName"] = "voto_alcalde";
$proto171["m_srcTableName"] = "Alc - Por Sector";
$proto171["m_columns"] = array();
$proto171["m_columns"][] = "elecciones";
$proto171["m_columns"][] = "id_urna";
$proto171["m_columns"][] = "candidato1";
$proto171["m_columns"][] = "candidato2";
$proto171["m_columns"][] = "candidato3";
$proto171["m_columns"][] = "candidato4";
$proto171["m_columns"][] = "candidato5";
$proto171["m_columns"][] = "candidato6";
$proto171["m_columns"][] = "candidato7";
$proto171["m_columns"][] = "candidato8";
$proto171["m_columns"][] = "candidato9";
$proto171["m_columns"][] = "candidato10";
$proto171["m_columns"][] = "candidato11";
$proto171["m_columns"][] = "candidato12";
$proto171["m_columns"][] = "validos";
$proto171["m_columns"][] = "blancos";
$proto171["m_columns"][] = "nulos";
$proto171["m_columns"][] = "utilizados";
$proto171["m_columns"][] = "no_utilizados";
$proto171["m_columns"][] = "total";
$proto171["m_columns"][] = "usuario";
$proto171["m_columns"][] = "fecha";
$proto171["m_columns"][] = "editado_por";
$proto171["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto171);

$proto170["m_table"] = $obj;
$proto170["m_sql"] = "voto_alcalde as a";
$proto170["m_alias"] = "a";
$proto170["m_srcTableName"] = "Alc - Por Sector";
$proto172=array();
$proto172["m_sql"] = "";
$proto172["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto172["m_column"]=$obj;
$proto172["m_contained"] = array();
$proto172["m_strCase"] = "";
$proto172["m_havingmode"] = false;
$proto172["m_inBrackets"] = false;
$proto172["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto172);

$proto170["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto170);

$proto158["m_fromlist"][]=$obj;
												$proto174=array();
$proto174["m_link"] = "SQLL_INNERJOIN";
			$proto175=array();
$proto175["m_strName"] = "urna";
$proto175["m_srcTableName"] = "Alc - Por Sector";
$proto175["m_columns"] = array();
$proto175["m_columns"][] = "id_distrito";
$proto175["m_columns"][] = "id_sector";
$proto175["m_columns"][] = "id_urna";
$proto175["m_columns"][] = "nombre_centro";
$proto175["m_columns"][] = "ubicación";
$proto175["m_columns"][] = "votantes";
$obj = new SQLTable($proto175);

$proto174["m_table"] = $obj;
$proto174["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto174["m_alias"] = "u";
$proto174["m_srcTableName"] = "Alc - Por Sector";
$proto176=array();
$proto176["m_sql"] = "a.id_urna = u.id_urna";
$proto176["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto176["m_column"]=$obj;
$proto176["m_contained"] = array();
$proto176["m_strCase"] = "= u.id_urna";
$proto176["m_havingmode"] = false;
$proto176["m_inBrackets"] = false;
$proto176["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto176);

$proto174["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto174);

$proto158["m_fromlist"][]=$obj;
$proto158["m_groupby"] = array();
$proto158["m_orderby"] = array();
$proto158["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto158);

$proto157["m_sql"] = "(select concat(sum(a.candidato8), \" (\", ROUND((((sum(a.candidato8)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto157["m_srcTableName"] = "Alc - Por Sector";
$proto157["m_expr"]=$obj;
$proto157["m_alias"] = "DC";
$obj = new SQLFieldListItem($proto157);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$proto179=array();
$proto179["m_strHead"] = "select";
$proto179["m_strFieldList"] = "concat(sum(a.candidato9), \" (\", ROUND((((sum(a.candidato9)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto179["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto179["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto179["m_strOrderBy"] = "";
	
		;
			$proto179["cipherer"] = null;
$proto181=array();
$proto181["m_sql"] = "u.id_sector = ur.id_sector";
$proto181["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto181["m_column"]=$obj;
$proto181["m_contained"] = array();
$proto181["m_strCase"] = "= ur.id_sector";
$proto181["m_havingmode"] = false;
$proto181["m_inBrackets"] = false;
$proto181["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto181);

$proto179["m_where"] = $obj;
$proto183=array();
$proto183["m_sql"] = "";
$proto183["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto183["m_column"]=$obj;
$proto183["m_contained"] = array();
$proto183["m_strCase"] = "";
$proto183["m_havingmode"] = false;
$proto183["m_inBrackets"] = false;
$proto183["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto183);

$proto179["m_having"] = $obj;
$proto179["m_fieldlist"] = array();
						$proto185=array();
			$proto186=array();
$proto186["m_functiontype"] = "SQLF_CUSTOM";
$proto186["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato9)"
));

$proto186["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto186["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato9)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto186["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto186["m_arguments"][]=$obj;
$proto186["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto186);

$proto185["m_sql"] = "concat(sum(a.candidato9), \" (\", ROUND((((sum(a.candidato9)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto185["m_srcTableName"] = "Alc - Por Sector";
$proto185["m_expr"]=$obj;
$proto185["m_alias"] = "";
$obj = new SQLFieldListItem($proto185);

$proto179["m_fieldlist"][]=$obj;
$proto179["m_fromlist"] = array();
												$proto191=array();
$proto191["m_link"] = "SQLL_MAIN";
			$proto192=array();
$proto192["m_strName"] = "voto_alcalde";
$proto192["m_srcTableName"] = "Alc - Por Sector";
$proto192["m_columns"] = array();
$proto192["m_columns"][] = "elecciones";
$proto192["m_columns"][] = "id_urna";
$proto192["m_columns"][] = "candidato1";
$proto192["m_columns"][] = "candidato2";
$proto192["m_columns"][] = "candidato3";
$proto192["m_columns"][] = "candidato4";
$proto192["m_columns"][] = "candidato5";
$proto192["m_columns"][] = "candidato6";
$proto192["m_columns"][] = "candidato7";
$proto192["m_columns"][] = "candidato8";
$proto192["m_columns"][] = "candidato9";
$proto192["m_columns"][] = "candidato10";
$proto192["m_columns"][] = "candidato11";
$proto192["m_columns"][] = "candidato12";
$proto192["m_columns"][] = "validos";
$proto192["m_columns"][] = "blancos";
$proto192["m_columns"][] = "nulos";
$proto192["m_columns"][] = "utilizados";
$proto192["m_columns"][] = "no_utilizados";
$proto192["m_columns"][] = "total";
$proto192["m_columns"][] = "usuario";
$proto192["m_columns"][] = "fecha";
$proto192["m_columns"][] = "editado_por";
$proto192["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto192);

$proto191["m_table"] = $obj;
$proto191["m_sql"] = "voto_alcalde as a";
$proto191["m_alias"] = "a";
$proto191["m_srcTableName"] = "Alc - Por Sector";
$proto193=array();
$proto193["m_sql"] = "";
$proto193["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto193["m_column"]=$obj;
$proto193["m_contained"] = array();
$proto193["m_strCase"] = "";
$proto193["m_havingmode"] = false;
$proto193["m_inBrackets"] = false;
$proto193["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto193);

$proto191["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto191);

$proto179["m_fromlist"][]=$obj;
												$proto195=array();
$proto195["m_link"] = "SQLL_INNERJOIN";
			$proto196=array();
$proto196["m_strName"] = "urna";
$proto196["m_srcTableName"] = "Alc - Por Sector";
$proto196["m_columns"] = array();
$proto196["m_columns"][] = "id_distrito";
$proto196["m_columns"][] = "id_sector";
$proto196["m_columns"][] = "id_urna";
$proto196["m_columns"][] = "nombre_centro";
$proto196["m_columns"][] = "ubicación";
$proto196["m_columns"][] = "votantes";
$obj = new SQLTable($proto196);

$proto195["m_table"] = $obj;
$proto195["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto195["m_alias"] = "u";
$proto195["m_srcTableName"] = "Alc - Por Sector";
$proto197=array();
$proto197["m_sql"] = "a.id_urna = u.id_urna";
$proto197["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto197["m_column"]=$obj;
$proto197["m_contained"] = array();
$proto197["m_strCase"] = "= u.id_urna";
$proto197["m_havingmode"] = false;
$proto197["m_inBrackets"] = false;
$proto197["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto197);

$proto195["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto195);

$proto179["m_fromlist"][]=$obj;
$proto179["m_groupby"] = array();
$proto179["m_orderby"] = array();
$proto179["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto179);

$proto178["m_sql"] = "(select concat(sum(a.candidato9), \" (\", ROUND((((sum(a.candidato9)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto178["m_srcTableName"] = "Alc - Por Sector";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "TSH";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto199=array();
			$proto200=array();
$proto200["m_strHead"] = "select";
$proto200["m_strFieldList"] = "concat(sum(a.candidato10), \" (\", ROUND((((sum(a.candidato10)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto200["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto200["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto200["m_strOrderBy"] = "";
	
		;
			$proto200["cipherer"] = null;
$proto202=array();
$proto202["m_sql"] = "u.id_sector = ur.id_sector";
$proto202["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto202["m_column"]=$obj;
$proto202["m_contained"] = array();
$proto202["m_strCase"] = "= ur.id_sector";
$proto202["m_havingmode"] = false;
$proto202["m_inBrackets"] = false;
$proto202["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto202);

$proto200["m_where"] = $obj;
$proto204=array();
$proto204["m_sql"] = "";
$proto204["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto204["m_column"]=$obj;
$proto204["m_contained"] = array();
$proto204["m_strCase"] = "";
$proto204["m_havingmode"] = false;
$proto204["m_inBrackets"] = false;
$proto204["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto204);

$proto200["m_having"] = $obj;
$proto200["m_fieldlist"] = array();
						$proto206=array();
			$proto207=array();
$proto207["m_functiontype"] = "SQLF_CUSTOM";
$proto207["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato10)"
));

$proto207["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto207["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato10)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto207["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto207["m_arguments"][]=$obj;
$proto207["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto207);

$proto206["m_sql"] = "concat(sum(a.candidato10), \" (\", ROUND((((sum(a.candidato10)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto206["m_srcTableName"] = "Alc - Por Sector";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto200["m_fieldlist"][]=$obj;
$proto200["m_fromlist"] = array();
												$proto212=array();
$proto212["m_link"] = "SQLL_MAIN";
			$proto213=array();
$proto213["m_strName"] = "voto_alcalde";
$proto213["m_srcTableName"] = "Alc - Por Sector";
$proto213["m_columns"] = array();
$proto213["m_columns"][] = "elecciones";
$proto213["m_columns"][] = "id_urna";
$proto213["m_columns"][] = "candidato1";
$proto213["m_columns"][] = "candidato2";
$proto213["m_columns"][] = "candidato3";
$proto213["m_columns"][] = "candidato4";
$proto213["m_columns"][] = "candidato5";
$proto213["m_columns"][] = "candidato6";
$proto213["m_columns"][] = "candidato7";
$proto213["m_columns"][] = "candidato8";
$proto213["m_columns"][] = "candidato9";
$proto213["m_columns"][] = "candidato10";
$proto213["m_columns"][] = "candidato11";
$proto213["m_columns"][] = "candidato12";
$proto213["m_columns"][] = "validos";
$proto213["m_columns"][] = "blancos";
$proto213["m_columns"][] = "nulos";
$proto213["m_columns"][] = "utilizados";
$proto213["m_columns"][] = "no_utilizados";
$proto213["m_columns"][] = "total";
$proto213["m_columns"][] = "usuario";
$proto213["m_columns"][] = "fecha";
$proto213["m_columns"][] = "editado_por";
$proto213["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto213);

$proto212["m_table"] = $obj;
$proto212["m_sql"] = "voto_alcalde as a";
$proto212["m_alias"] = "a";
$proto212["m_srcTableName"] = "Alc - Por Sector";
$proto214=array();
$proto214["m_sql"] = "";
$proto214["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto214["m_column"]=$obj;
$proto214["m_contained"] = array();
$proto214["m_strCase"] = "";
$proto214["m_havingmode"] = false;
$proto214["m_inBrackets"] = false;
$proto214["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto214);

$proto212["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto212);

$proto200["m_fromlist"][]=$obj;
												$proto216=array();
$proto216["m_link"] = "SQLL_INNERJOIN";
			$proto217=array();
$proto217["m_strName"] = "urna";
$proto217["m_srcTableName"] = "Alc - Por Sector";
$proto217["m_columns"] = array();
$proto217["m_columns"][] = "id_distrito";
$proto217["m_columns"][] = "id_sector";
$proto217["m_columns"][] = "id_urna";
$proto217["m_columns"][] = "nombre_centro";
$proto217["m_columns"][] = "ubicación";
$proto217["m_columns"][] = "votantes";
$obj = new SQLTable($proto217);

$proto216["m_table"] = $obj;
$proto216["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto216["m_alias"] = "u";
$proto216["m_srcTableName"] = "Alc - Por Sector";
$proto218=array();
$proto218["m_sql"] = "a.id_urna = u.id_urna";
$proto218["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto218["m_column"]=$obj;
$proto218["m_contained"] = array();
$proto218["m_strCase"] = "= u.id_urna";
$proto218["m_havingmode"] = false;
$proto218["m_inBrackets"] = false;
$proto218["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto218);

$proto216["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto216);

$proto200["m_fromlist"][]=$obj;
$proto200["m_groupby"] = array();
$proto200["m_orderby"] = array();
$proto200["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto200);

$proto199["m_sql"] = "(select concat(sum(a.candidato10), \" (\", ROUND((((sum(a.candidato10)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto199["m_srcTableName"] = "Alc - Por Sector";
$proto199["m_expr"]=$obj;
$proto199["m_alias"] = "LIBERAL";
$obj = new SQLFieldListItem($proto199);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$proto221=array();
$proto221["m_strHead"] = "select";
$proto221["m_strFieldList"] = "concat(sum(a.candidato11), \" (\", ROUND((((sum(a.candidato11)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto221["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto221["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto221["m_strOrderBy"] = "";
	
		;
			$proto221["cipherer"] = null;
$proto223=array();
$proto223["m_sql"] = "u.id_sector = ur.id_sector";
$proto223["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto223["m_column"]=$obj;
$proto223["m_contained"] = array();
$proto223["m_strCase"] = "= ur.id_sector";
$proto223["m_havingmode"] = false;
$proto223["m_inBrackets"] = false;
$proto223["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto223);

$proto221["m_where"] = $obj;
$proto225=array();
$proto225["m_sql"] = "";
$proto225["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto225["m_column"]=$obj;
$proto225["m_contained"] = array();
$proto225["m_strCase"] = "";
$proto225["m_havingmode"] = false;
$proto225["m_inBrackets"] = false;
$proto225["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto225);

$proto221["m_having"] = $obj;
$proto221["m_fieldlist"] = array();
						$proto227=array();
			$proto228=array();
$proto228["m_functiontype"] = "SQLF_CUSTOM";
$proto228["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato11)"
));

$proto228["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto228["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato11)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto228["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto228["m_arguments"][]=$obj;
$proto228["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto228);

$proto227["m_sql"] = "concat(sum(a.candidato11), \" (\", ROUND((((sum(a.candidato11)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto227["m_srcTableName"] = "Alc - Por Sector";
$proto227["m_expr"]=$obj;
$proto227["m_alias"] = "";
$obj = new SQLFieldListItem($proto227);

$proto221["m_fieldlist"][]=$obj;
$proto221["m_fromlist"] = array();
												$proto233=array();
$proto233["m_link"] = "SQLL_MAIN";
			$proto234=array();
$proto234["m_strName"] = "voto_alcalde";
$proto234["m_srcTableName"] = "Alc - Por Sector";
$proto234["m_columns"] = array();
$proto234["m_columns"][] = "elecciones";
$proto234["m_columns"][] = "id_urna";
$proto234["m_columns"][] = "candidato1";
$proto234["m_columns"][] = "candidato2";
$proto234["m_columns"][] = "candidato3";
$proto234["m_columns"][] = "candidato4";
$proto234["m_columns"][] = "candidato5";
$proto234["m_columns"][] = "candidato6";
$proto234["m_columns"][] = "candidato7";
$proto234["m_columns"][] = "candidato8";
$proto234["m_columns"][] = "candidato9";
$proto234["m_columns"][] = "candidato10";
$proto234["m_columns"][] = "candidato11";
$proto234["m_columns"][] = "candidato12";
$proto234["m_columns"][] = "validos";
$proto234["m_columns"][] = "blancos";
$proto234["m_columns"][] = "nulos";
$proto234["m_columns"][] = "utilizados";
$proto234["m_columns"][] = "no_utilizados";
$proto234["m_columns"][] = "total";
$proto234["m_columns"][] = "usuario";
$proto234["m_columns"][] = "fecha";
$proto234["m_columns"][] = "editado_por";
$proto234["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto234);

$proto233["m_table"] = $obj;
$proto233["m_sql"] = "voto_alcalde as a";
$proto233["m_alias"] = "a";
$proto233["m_srcTableName"] = "Alc - Por Sector";
$proto235=array();
$proto235["m_sql"] = "";
$proto235["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto235["m_column"]=$obj;
$proto235["m_contained"] = array();
$proto235["m_strCase"] = "";
$proto235["m_havingmode"] = false;
$proto235["m_inBrackets"] = false;
$proto235["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto235);

$proto233["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto233);

$proto221["m_fromlist"][]=$obj;
												$proto237=array();
$proto237["m_link"] = "SQLL_INNERJOIN";
			$proto238=array();
$proto238["m_strName"] = "urna";
$proto238["m_srcTableName"] = "Alc - Por Sector";
$proto238["m_columns"] = array();
$proto238["m_columns"][] = "id_distrito";
$proto238["m_columns"][] = "id_sector";
$proto238["m_columns"][] = "id_urna";
$proto238["m_columns"][] = "nombre_centro";
$proto238["m_columns"][] = "ubicación";
$proto238["m_columns"][] = "votantes";
$obj = new SQLTable($proto238);

$proto237["m_table"] = $obj;
$proto237["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto237["m_alias"] = "u";
$proto237["m_srcTableName"] = "Alc - Por Sector";
$proto239=array();
$proto239["m_sql"] = "a.id_urna = u.id_urna";
$proto239["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto239["m_column"]=$obj;
$proto239["m_contained"] = array();
$proto239["m_strCase"] = "= u.id_urna";
$proto239["m_havingmode"] = false;
$proto239["m_inBrackets"] = false;
$proto239["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto239);

$proto237["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto237);

$proto221["m_fromlist"][]=$obj;
$proto221["m_groupby"] = array();
$proto221["m_orderby"] = array();
$proto221["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto221);

$proto220["m_sql"] = "(select concat(sum(a.candidato11), \" (\", ROUND((((sum(a.candidato11)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto220["m_srcTableName"] = "Alc - Por Sector";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "NACIONAL";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto241=array();
			$proto242=array();
$proto242["m_strHead"] = "select";
$proto242["m_strFieldList"] = "concat(sum(a.candidato12), \" (\", ROUND((((sum(a.candidato12)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto242["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto242["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto242["m_strOrderBy"] = "";
	
		;
			$proto242["cipherer"] = null;
$proto244=array();
$proto244["m_sql"] = "u.id_sector = ur.id_sector";
$proto244["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto244["m_column"]=$obj;
$proto244["m_contained"] = array();
$proto244["m_strCase"] = "= ur.id_sector";
$proto244["m_havingmode"] = false;
$proto244["m_inBrackets"] = false;
$proto244["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto244);

$proto242["m_where"] = $obj;
$proto246=array();
$proto246["m_sql"] = "";
$proto246["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto246["m_column"]=$obj;
$proto246["m_contained"] = array();
$proto246["m_strCase"] = "";
$proto246["m_havingmode"] = false;
$proto246["m_inBrackets"] = false;
$proto246["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto246);

$proto242["m_having"] = $obj;
$proto242["m_fieldlist"] = array();
						$proto248=array();
			$proto249=array();
$proto249["m_functiontype"] = "SQLF_CUSTOM";
$proto249["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(a.candidato12)"
));

$proto249["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto249["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(a.candidato12)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto249["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto249["m_arguments"][]=$obj;
$proto249["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto249);

$proto248["m_sql"] = "concat(sum(a.candidato12), \" (\", ROUND((((sum(a.candidato12)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto248["m_srcTableName"] = "Alc - Por Sector";
$proto248["m_expr"]=$obj;
$proto248["m_alias"] = "";
$obj = new SQLFieldListItem($proto248);

$proto242["m_fieldlist"][]=$obj;
$proto242["m_fromlist"] = array();
												$proto254=array();
$proto254["m_link"] = "SQLL_MAIN";
			$proto255=array();
$proto255["m_strName"] = "voto_alcalde";
$proto255["m_srcTableName"] = "Alc - Por Sector";
$proto255["m_columns"] = array();
$proto255["m_columns"][] = "elecciones";
$proto255["m_columns"][] = "id_urna";
$proto255["m_columns"][] = "candidato1";
$proto255["m_columns"][] = "candidato2";
$proto255["m_columns"][] = "candidato3";
$proto255["m_columns"][] = "candidato4";
$proto255["m_columns"][] = "candidato5";
$proto255["m_columns"][] = "candidato6";
$proto255["m_columns"][] = "candidato7";
$proto255["m_columns"][] = "candidato8";
$proto255["m_columns"][] = "candidato9";
$proto255["m_columns"][] = "candidato10";
$proto255["m_columns"][] = "candidato11";
$proto255["m_columns"][] = "candidato12";
$proto255["m_columns"][] = "validos";
$proto255["m_columns"][] = "blancos";
$proto255["m_columns"][] = "nulos";
$proto255["m_columns"][] = "utilizados";
$proto255["m_columns"][] = "no_utilizados";
$proto255["m_columns"][] = "total";
$proto255["m_columns"][] = "usuario";
$proto255["m_columns"][] = "fecha";
$proto255["m_columns"][] = "editado_por";
$proto255["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto255);

$proto254["m_table"] = $obj;
$proto254["m_sql"] = "voto_alcalde as a";
$proto254["m_alias"] = "a";
$proto254["m_srcTableName"] = "Alc - Por Sector";
$proto256=array();
$proto256["m_sql"] = "";
$proto256["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto256["m_column"]=$obj;
$proto256["m_contained"] = array();
$proto256["m_strCase"] = "";
$proto256["m_havingmode"] = false;
$proto256["m_inBrackets"] = false;
$proto256["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto256);

$proto254["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto254);

$proto242["m_fromlist"][]=$obj;
												$proto258=array();
$proto258["m_link"] = "SQLL_INNERJOIN";
			$proto259=array();
$proto259["m_strName"] = "urna";
$proto259["m_srcTableName"] = "Alc - Por Sector";
$proto259["m_columns"] = array();
$proto259["m_columns"][] = "id_distrito";
$proto259["m_columns"][] = "id_sector";
$proto259["m_columns"][] = "id_urna";
$proto259["m_columns"][] = "nombre_centro";
$proto259["m_columns"][] = "ubicación";
$proto259["m_columns"][] = "votantes";
$obj = new SQLTable($proto259);

$proto258["m_table"] = $obj;
$proto258["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto258["m_alias"] = "u";
$proto258["m_srcTableName"] = "Alc - Por Sector";
$proto260=array();
$proto260["m_sql"] = "a.id_urna = u.id_urna";
$proto260["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto260["m_column"]=$obj;
$proto260["m_contained"] = array();
$proto260["m_strCase"] = "= u.id_urna";
$proto260["m_havingmode"] = false;
$proto260["m_inBrackets"] = false;
$proto260["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto260);

$proto258["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto258);

$proto242["m_fromlist"][]=$obj;
$proto242["m_groupby"] = array();
$proto242["m_orderby"] = array();
$proto242["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto242);

$proto241["m_sql"] = "(select concat(sum(a.candidato12), \" (\", ROUND((((sum(a.candidato12)/((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto241["m_srcTableName"] = "Alc - Por Sector";
$proto241["m_expr"]=$obj;
$proto241["m_alias"] = "PINU";
$obj = new SQLFieldListItem($proto241);

$proto0["m_fieldlist"][]=$obj;
						$proto262=array();
			$proto263=array();
$proto263["m_strHead"] = "select";
$proto263["m_strFieldList"] = "concat(((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8))   + (sum(a.candidato9)) + (sum(a.candidato12))), \" (\", ROUND((((((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) +  (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato12))) / ((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto263["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto263["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto263["m_strOrderBy"] = "";
	
		;
			$proto263["cipherer"] = null;
$proto265=array();
$proto265["m_sql"] = "u.id_sector = ur.id_sector";
$proto265["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto265["m_column"]=$obj;
$proto265["m_contained"] = array();
$proto265["m_strCase"] = "= ur.id_sector";
$proto265["m_havingmode"] = false;
$proto265["m_inBrackets"] = false;
$proto265["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto265);

$proto263["m_where"] = $obj;
$proto267=array();
$proto267["m_sql"] = "";
$proto267["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto267["m_column"]=$obj;
$proto267["m_contained"] = array();
$proto267["m_strCase"] = "";
$proto267["m_havingmode"] = false;
$proto267["m_inBrackets"] = false;
$proto267["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto267);

$proto263["m_having"] = $obj;
$proto263["m_fieldlist"] = array();
						$proto269=array();
			$proto270=array();
$proto270["m_functiontype"] = "SQLF_CUSTOM";
$proto270["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8))   + (sum(a.candidato9)) + (sum(a.candidato12)))"
));

$proto270["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto270["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) +  (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato12))) / ((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1)"
));

$proto270["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto270["m_arguments"][]=$obj;
$proto270["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto270);

$proto269["m_sql"] = "concat(((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8))   + (sum(a.candidato9)) + (sum(a.candidato12))), \" (\", ROUND((((((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) +  (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato12))) / ((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")";
$proto269["m_srcTableName"] = "Alc - Por Sector";
$proto269["m_expr"]=$obj;
$proto269["m_alias"] = "";
$obj = new SQLFieldListItem($proto269);

$proto263["m_fieldlist"][]=$obj;
$proto263["m_fromlist"] = array();
												$proto275=array();
$proto275["m_link"] = "SQLL_MAIN";
			$proto276=array();
$proto276["m_strName"] = "voto_alcalde";
$proto276["m_srcTableName"] = "Alc - Por Sector";
$proto276["m_columns"] = array();
$proto276["m_columns"][] = "elecciones";
$proto276["m_columns"][] = "id_urna";
$proto276["m_columns"][] = "candidato1";
$proto276["m_columns"][] = "candidato2";
$proto276["m_columns"][] = "candidato3";
$proto276["m_columns"][] = "candidato4";
$proto276["m_columns"][] = "candidato5";
$proto276["m_columns"][] = "candidato6";
$proto276["m_columns"][] = "candidato7";
$proto276["m_columns"][] = "candidato8";
$proto276["m_columns"][] = "candidato9";
$proto276["m_columns"][] = "candidato10";
$proto276["m_columns"][] = "candidato11";
$proto276["m_columns"][] = "candidato12";
$proto276["m_columns"][] = "validos";
$proto276["m_columns"][] = "blancos";
$proto276["m_columns"][] = "nulos";
$proto276["m_columns"][] = "utilizados";
$proto276["m_columns"][] = "no_utilizados";
$proto276["m_columns"][] = "total";
$proto276["m_columns"][] = "usuario";
$proto276["m_columns"][] = "fecha";
$proto276["m_columns"][] = "editado_por";
$proto276["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto276);

$proto275["m_table"] = $obj;
$proto275["m_sql"] = "voto_alcalde as a";
$proto275["m_alias"] = "a";
$proto275["m_srcTableName"] = "Alc - Por Sector";
$proto277=array();
$proto277["m_sql"] = "";
$proto277["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto277["m_column"]=$obj;
$proto277["m_contained"] = array();
$proto277["m_strCase"] = "";
$proto277["m_havingmode"] = false;
$proto277["m_inBrackets"] = false;
$proto277["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto277);

$proto275["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto275);

$proto263["m_fromlist"][]=$obj;
												$proto279=array();
$proto279["m_link"] = "SQLL_INNERJOIN";
			$proto280=array();
$proto280["m_strName"] = "urna";
$proto280["m_srcTableName"] = "Alc - Por Sector";
$proto280["m_columns"] = array();
$proto280["m_columns"][] = "id_distrito";
$proto280["m_columns"][] = "id_sector";
$proto280["m_columns"][] = "id_urna";
$proto280["m_columns"][] = "nombre_centro";
$proto280["m_columns"][] = "ubicación";
$proto280["m_columns"][] = "votantes";
$obj = new SQLTable($proto280);

$proto279["m_table"] = $obj;
$proto279["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto279["m_alias"] = "u";
$proto279["m_srcTableName"] = "Alc - Por Sector";
$proto281=array();
$proto281["m_sql"] = "a.id_urna = u.id_urna";
$proto281["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto281["m_column"]=$obj;
$proto281["m_contained"] = array();
$proto281["m_strCase"] = "= u.id_urna";
$proto281["m_havingmode"] = false;
$proto281["m_inBrackets"] = false;
$proto281["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto281);

$proto279["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto279);

$proto263["m_fromlist"][]=$obj;
$proto263["m_groupby"] = array();
$proto263["m_orderby"] = array();
$proto263["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto263);

$proto262["m_sql"] = "(select concat(((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8))   + (sum(a.candidato9)) + (sum(a.candidato12))), \" (\", ROUND((((((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4)) +  (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato12))) / ((sum(a.candidato1)) + (sum(a.candidato2)) + (sum(a.candidato3)) + (sum(a.candidato4))   + (sum(a.candidato5)) + (sum(a.candidato6)) + (sum(a.candidato7)) + (sum(a.candidato8)) + (sum(a.candidato9)) + (sum(a.candidato10)) + (sum(a.candidato11))   + (sum(a.candidato12)))))*100),1), \"%)\")  from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto262["m_srcTableName"] = "Alc - Por Sector";
$proto262["m_expr"]=$obj;
$proto262["m_alias"] = "Otros";
$obj = new SQLFieldListItem($proto262);

$proto0["m_fieldlist"][]=$obj;
						$proto283=array();
			$proto284=array();
$proto284["m_strHead"] = "select";
$proto284["m_strFieldList"] = "sum(a.validos)";
$proto284["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto284["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto284["m_strOrderBy"] = "";
	
		;
			$proto284["cipherer"] = null;
$proto286=array();
$proto286["m_sql"] = "u.id_sector = ur.id_sector";
$proto286["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto286["m_column"]=$obj;
$proto286["m_contained"] = array();
$proto286["m_strCase"] = "= ur.id_sector";
$proto286["m_havingmode"] = false;
$proto286["m_inBrackets"] = false;
$proto286["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto286);

$proto284["m_where"] = $obj;
$proto288=array();
$proto288["m_sql"] = "";
$proto288["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto288["m_column"]=$obj;
$proto288["m_contained"] = array();
$proto288["m_strCase"] = "";
$proto288["m_havingmode"] = false;
$proto288["m_inBrackets"] = false;
$proto288["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto288);

$proto284["m_having"] = $obj;
$proto284["m_fieldlist"] = array();
						$proto290=array();
			$proto291=array();
$proto291["m_functiontype"] = "SQLF_SUM";
$proto291["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "validos",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto291["m_arguments"][]=$obj;
$proto291["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto291);

$proto290["m_sql"] = "sum(a.validos)";
$proto290["m_srcTableName"] = "Alc - Por Sector";
$proto290["m_expr"]=$obj;
$proto290["m_alias"] = "";
$obj = new SQLFieldListItem($proto290);

$proto284["m_fieldlist"][]=$obj;
$proto284["m_fromlist"] = array();
												$proto293=array();
$proto293["m_link"] = "SQLL_MAIN";
			$proto294=array();
$proto294["m_strName"] = "voto_alcalde";
$proto294["m_srcTableName"] = "Alc - Por Sector";
$proto294["m_columns"] = array();
$proto294["m_columns"][] = "elecciones";
$proto294["m_columns"][] = "id_urna";
$proto294["m_columns"][] = "candidato1";
$proto294["m_columns"][] = "candidato2";
$proto294["m_columns"][] = "candidato3";
$proto294["m_columns"][] = "candidato4";
$proto294["m_columns"][] = "candidato5";
$proto294["m_columns"][] = "candidato6";
$proto294["m_columns"][] = "candidato7";
$proto294["m_columns"][] = "candidato8";
$proto294["m_columns"][] = "candidato9";
$proto294["m_columns"][] = "candidato10";
$proto294["m_columns"][] = "candidato11";
$proto294["m_columns"][] = "candidato12";
$proto294["m_columns"][] = "validos";
$proto294["m_columns"][] = "blancos";
$proto294["m_columns"][] = "nulos";
$proto294["m_columns"][] = "utilizados";
$proto294["m_columns"][] = "no_utilizados";
$proto294["m_columns"][] = "total";
$proto294["m_columns"][] = "usuario";
$proto294["m_columns"][] = "fecha";
$proto294["m_columns"][] = "editado_por";
$proto294["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto294);

$proto293["m_table"] = $obj;
$proto293["m_sql"] = "voto_alcalde as a";
$proto293["m_alias"] = "a";
$proto293["m_srcTableName"] = "Alc - Por Sector";
$proto295=array();
$proto295["m_sql"] = "";
$proto295["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto295["m_column"]=$obj;
$proto295["m_contained"] = array();
$proto295["m_strCase"] = "";
$proto295["m_havingmode"] = false;
$proto295["m_inBrackets"] = false;
$proto295["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto295);

$proto293["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto293);

$proto284["m_fromlist"][]=$obj;
												$proto297=array();
$proto297["m_link"] = "SQLL_INNERJOIN";
			$proto298=array();
$proto298["m_strName"] = "urna";
$proto298["m_srcTableName"] = "Alc - Por Sector";
$proto298["m_columns"] = array();
$proto298["m_columns"][] = "id_distrito";
$proto298["m_columns"][] = "id_sector";
$proto298["m_columns"][] = "id_urna";
$proto298["m_columns"][] = "nombre_centro";
$proto298["m_columns"][] = "ubicación";
$proto298["m_columns"][] = "votantes";
$obj = new SQLTable($proto298);

$proto297["m_table"] = $obj;
$proto297["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto297["m_alias"] = "u";
$proto297["m_srcTableName"] = "Alc - Por Sector";
$proto299=array();
$proto299["m_sql"] = "a.id_urna = u.id_urna";
$proto299["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto299["m_column"]=$obj;
$proto299["m_contained"] = array();
$proto299["m_strCase"] = "= u.id_urna";
$proto299["m_havingmode"] = false;
$proto299["m_inBrackets"] = false;
$proto299["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto299);

$proto297["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto297);

$proto284["m_fromlist"][]=$obj;
$proto284["m_groupby"] = array();
$proto284["m_orderby"] = array();
$proto284["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto284);

$proto283["m_sql"] = "(select sum(a.validos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto283["m_srcTableName"] = "Alc - Por Sector";
$proto283["m_expr"]=$obj;
$proto283["m_alias"] = "Validos";
$obj = new SQLFieldListItem($proto283);

$proto0["m_fieldlist"][]=$obj;
						$proto301=array();
			$proto302=array();
$proto302["m_strHead"] = "select";
$proto302["m_strFieldList"] = "sum(a.blancos)";
$proto302["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto302["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto302["m_strOrderBy"] = "";
	
		;
			$proto302["cipherer"] = null;
$proto304=array();
$proto304["m_sql"] = "u.id_sector = ur.id_sector";
$proto304["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto304["m_column"]=$obj;
$proto304["m_contained"] = array();
$proto304["m_strCase"] = "= ur.id_sector";
$proto304["m_havingmode"] = false;
$proto304["m_inBrackets"] = false;
$proto304["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto304);

$proto302["m_where"] = $obj;
$proto306=array();
$proto306["m_sql"] = "";
$proto306["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto306["m_column"]=$obj;
$proto306["m_contained"] = array();
$proto306["m_strCase"] = "";
$proto306["m_havingmode"] = false;
$proto306["m_inBrackets"] = false;
$proto306["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto306);

$proto302["m_having"] = $obj;
$proto302["m_fieldlist"] = array();
						$proto308=array();
			$proto309=array();
$proto309["m_functiontype"] = "SQLF_SUM";
$proto309["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "blancos",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto309["m_arguments"][]=$obj;
$proto309["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto309);

$proto308["m_sql"] = "sum(a.blancos)";
$proto308["m_srcTableName"] = "Alc - Por Sector";
$proto308["m_expr"]=$obj;
$proto308["m_alias"] = "";
$obj = new SQLFieldListItem($proto308);

$proto302["m_fieldlist"][]=$obj;
$proto302["m_fromlist"] = array();
												$proto311=array();
$proto311["m_link"] = "SQLL_MAIN";
			$proto312=array();
$proto312["m_strName"] = "voto_alcalde";
$proto312["m_srcTableName"] = "Alc - Por Sector";
$proto312["m_columns"] = array();
$proto312["m_columns"][] = "elecciones";
$proto312["m_columns"][] = "id_urna";
$proto312["m_columns"][] = "candidato1";
$proto312["m_columns"][] = "candidato2";
$proto312["m_columns"][] = "candidato3";
$proto312["m_columns"][] = "candidato4";
$proto312["m_columns"][] = "candidato5";
$proto312["m_columns"][] = "candidato6";
$proto312["m_columns"][] = "candidato7";
$proto312["m_columns"][] = "candidato8";
$proto312["m_columns"][] = "candidato9";
$proto312["m_columns"][] = "candidato10";
$proto312["m_columns"][] = "candidato11";
$proto312["m_columns"][] = "candidato12";
$proto312["m_columns"][] = "validos";
$proto312["m_columns"][] = "blancos";
$proto312["m_columns"][] = "nulos";
$proto312["m_columns"][] = "utilizados";
$proto312["m_columns"][] = "no_utilizados";
$proto312["m_columns"][] = "total";
$proto312["m_columns"][] = "usuario";
$proto312["m_columns"][] = "fecha";
$proto312["m_columns"][] = "editado_por";
$proto312["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto312);

$proto311["m_table"] = $obj;
$proto311["m_sql"] = "voto_alcalde as a";
$proto311["m_alias"] = "a";
$proto311["m_srcTableName"] = "Alc - Por Sector";
$proto313=array();
$proto313["m_sql"] = "";
$proto313["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto313["m_column"]=$obj;
$proto313["m_contained"] = array();
$proto313["m_strCase"] = "";
$proto313["m_havingmode"] = false;
$proto313["m_inBrackets"] = false;
$proto313["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto313);

$proto311["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto311);

$proto302["m_fromlist"][]=$obj;
												$proto315=array();
$proto315["m_link"] = "SQLL_INNERJOIN";
			$proto316=array();
$proto316["m_strName"] = "urna";
$proto316["m_srcTableName"] = "Alc - Por Sector";
$proto316["m_columns"] = array();
$proto316["m_columns"][] = "id_distrito";
$proto316["m_columns"][] = "id_sector";
$proto316["m_columns"][] = "id_urna";
$proto316["m_columns"][] = "nombre_centro";
$proto316["m_columns"][] = "ubicación";
$proto316["m_columns"][] = "votantes";
$obj = new SQLTable($proto316);

$proto315["m_table"] = $obj;
$proto315["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto315["m_alias"] = "u";
$proto315["m_srcTableName"] = "Alc - Por Sector";
$proto317=array();
$proto317["m_sql"] = "a.id_urna = u.id_urna";
$proto317["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto317["m_column"]=$obj;
$proto317["m_contained"] = array();
$proto317["m_strCase"] = "= u.id_urna";
$proto317["m_havingmode"] = false;
$proto317["m_inBrackets"] = false;
$proto317["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto317);

$proto315["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto315);

$proto302["m_fromlist"][]=$obj;
$proto302["m_groupby"] = array();
$proto302["m_orderby"] = array();
$proto302["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto302);

$proto301["m_sql"] = "(select sum(a.blancos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto301["m_srcTableName"] = "Alc - Por Sector";
$proto301["m_expr"]=$obj;
$proto301["m_alias"] = "Blancos";
$obj = new SQLFieldListItem($proto301);

$proto0["m_fieldlist"][]=$obj;
						$proto319=array();
			$proto320=array();
$proto320["m_strHead"] = "select";
$proto320["m_strFieldList"] = "sum(a.nulos)";
$proto320["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto320["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto320["m_strOrderBy"] = "";
	
		;
			$proto320["cipherer"] = null;
$proto322=array();
$proto322["m_sql"] = "u.id_sector = ur.id_sector";
$proto322["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto322["m_column"]=$obj;
$proto322["m_contained"] = array();
$proto322["m_strCase"] = "= ur.id_sector";
$proto322["m_havingmode"] = false;
$proto322["m_inBrackets"] = false;
$proto322["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto322);

$proto320["m_where"] = $obj;
$proto324=array();
$proto324["m_sql"] = "";
$proto324["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto324["m_column"]=$obj;
$proto324["m_contained"] = array();
$proto324["m_strCase"] = "";
$proto324["m_havingmode"] = false;
$proto324["m_inBrackets"] = false;
$proto324["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto324);

$proto320["m_having"] = $obj;
$proto320["m_fieldlist"] = array();
						$proto326=array();
			$proto327=array();
$proto327["m_functiontype"] = "SQLF_SUM";
$proto327["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "nulos",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto327["m_arguments"][]=$obj;
$proto327["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto327);

$proto326["m_sql"] = "sum(a.nulos)";
$proto326["m_srcTableName"] = "Alc - Por Sector";
$proto326["m_expr"]=$obj;
$proto326["m_alias"] = "";
$obj = new SQLFieldListItem($proto326);

$proto320["m_fieldlist"][]=$obj;
$proto320["m_fromlist"] = array();
												$proto329=array();
$proto329["m_link"] = "SQLL_MAIN";
			$proto330=array();
$proto330["m_strName"] = "voto_alcalde";
$proto330["m_srcTableName"] = "Alc - Por Sector";
$proto330["m_columns"] = array();
$proto330["m_columns"][] = "elecciones";
$proto330["m_columns"][] = "id_urna";
$proto330["m_columns"][] = "candidato1";
$proto330["m_columns"][] = "candidato2";
$proto330["m_columns"][] = "candidato3";
$proto330["m_columns"][] = "candidato4";
$proto330["m_columns"][] = "candidato5";
$proto330["m_columns"][] = "candidato6";
$proto330["m_columns"][] = "candidato7";
$proto330["m_columns"][] = "candidato8";
$proto330["m_columns"][] = "candidato9";
$proto330["m_columns"][] = "candidato10";
$proto330["m_columns"][] = "candidato11";
$proto330["m_columns"][] = "candidato12";
$proto330["m_columns"][] = "validos";
$proto330["m_columns"][] = "blancos";
$proto330["m_columns"][] = "nulos";
$proto330["m_columns"][] = "utilizados";
$proto330["m_columns"][] = "no_utilizados";
$proto330["m_columns"][] = "total";
$proto330["m_columns"][] = "usuario";
$proto330["m_columns"][] = "fecha";
$proto330["m_columns"][] = "editado_por";
$proto330["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto330);

$proto329["m_table"] = $obj;
$proto329["m_sql"] = "voto_alcalde as a";
$proto329["m_alias"] = "a";
$proto329["m_srcTableName"] = "Alc - Por Sector";
$proto331=array();
$proto331["m_sql"] = "";
$proto331["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto331["m_column"]=$obj;
$proto331["m_contained"] = array();
$proto331["m_strCase"] = "";
$proto331["m_havingmode"] = false;
$proto331["m_inBrackets"] = false;
$proto331["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto331);

$proto329["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto329);

$proto320["m_fromlist"][]=$obj;
												$proto333=array();
$proto333["m_link"] = "SQLL_INNERJOIN";
			$proto334=array();
$proto334["m_strName"] = "urna";
$proto334["m_srcTableName"] = "Alc - Por Sector";
$proto334["m_columns"] = array();
$proto334["m_columns"][] = "id_distrito";
$proto334["m_columns"][] = "id_sector";
$proto334["m_columns"][] = "id_urna";
$proto334["m_columns"][] = "nombre_centro";
$proto334["m_columns"][] = "ubicación";
$proto334["m_columns"][] = "votantes";
$obj = new SQLTable($proto334);

$proto333["m_table"] = $obj;
$proto333["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto333["m_alias"] = "u";
$proto333["m_srcTableName"] = "Alc - Por Sector";
$proto335=array();
$proto335["m_sql"] = "a.id_urna = u.id_urna";
$proto335["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto335["m_column"]=$obj;
$proto335["m_contained"] = array();
$proto335["m_strCase"] = "= u.id_urna";
$proto335["m_havingmode"] = false;
$proto335["m_inBrackets"] = false;
$proto335["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto335);

$proto333["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto333);

$proto320["m_fromlist"][]=$obj;
$proto320["m_groupby"] = array();
$proto320["m_orderby"] = array();
$proto320["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto320);

$proto319["m_sql"] = "(select sum(a.nulos) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto319["m_srcTableName"] = "Alc - Por Sector";
$proto319["m_expr"]=$obj;
$proto319["m_alias"] = "Nulos";
$obj = new SQLFieldListItem($proto319);

$proto0["m_fieldlist"][]=$obj;
						$proto337=array();
			$proto338=array();
$proto338["m_strHead"] = "select";
$proto338["m_strFieldList"] = "sum(a.utilizados)";
$proto338["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto338["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto338["m_strOrderBy"] = "";
	
		;
			$proto338["cipherer"] = null;
$proto340=array();
$proto340["m_sql"] = "u.id_sector = ur.id_sector";
$proto340["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto340["m_column"]=$obj;
$proto340["m_contained"] = array();
$proto340["m_strCase"] = "= ur.id_sector";
$proto340["m_havingmode"] = false;
$proto340["m_inBrackets"] = false;
$proto340["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto340);

$proto338["m_where"] = $obj;
$proto342=array();
$proto342["m_sql"] = "";
$proto342["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto342["m_column"]=$obj;
$proto342["m_contained"] = array();
$proto342["m_strCase"] = "";
$proto342["m_havingmode"] = false;
$proto342["m_inBrackets"] = false;
$proto342["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto342);

$proto338["m_having"] = $obj;
$proto338["m_fieldlist"] = array();
						$proto344=array();
			$proto345=array();
$proto345["m_functiontype"] = "SQLF_SUM";
$proto345["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "utilizados",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto345["m_arguments"][]=$obj;
$proto345["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto345);

$proto344["m_sql"] = "sum(a.utilizados)";
$proto344["m_srcTableName"] = "Alc - Por Sector";
$proto344["m_expr"]=$obj;
$proto344["m_alias"] = "";
$obj = new SQLFieldListItem($proto344);

$proto338["m_fieldlist"][]=$obj;
$proto338["m_fromlist"] = array();
												$proto347=array();
$proto347["m_link"] = "SQLL_MAIN";
			$proto348=array();
$proto348["m_strName"] = "voto_alcalde";
$proto348["m_srcTableName"] = "Alc - Por Sector";
$proto348["m_columns"] = array();
$proto348["m_columns"][] = "elecciones";
$proto348["m_columns"][] = "id_urna";
$proto348["m_columns"][] = "candidato1";
$proto348["m_columns"][] = "candidato2";
$proto348["m_columns"][] = "candidato3";
$proto348["m_columns"][] = "candidato4";
$proto348["m_columns"][] = "candidato5";
$proto348["m_columns"][] = "candidato6";
$proto348["m_columns"][] = "candidato7";
$proto348["m_columns"][] = "candidato8";
$proto348["m_columns"][] = "candidato9";
$proto348["m_columns"][] = "candidato10";
$proto348["m_columns"][] = "candidato11";
$proto348["m_columns"][] = "candidato12";
$proto348["m_columns"][] = "validos";
$proto348["m_columns"][] = "blancos";
$proto348["m_columns"][] = "nulos";
$proto348["m_columns"][] = "utilizados";
$proto348["m_columns"][] = "no_utilizados";
$proto348["m_columns"][] = "total";
$proto348["m_columns"][] = "usuario";
$proto348["m_columns"][] = "fecha";
$proto348["m_columns"][] = "editado_por";
$proto348["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto348);

$proto347["m_table"] = $obj;
$proto347["m_sql"] = "voto_alcalde as a";
$proto347["m_alias"] = "a";
$proto347["m_srcTableName"] = "Alc - Por Sector";
$proto349=array();
$proto349["m_sql"] = "";
$proto349["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto349["m_column"]=$obj;
$proto349["m_contained"] = array();
$proto349["m_strCase"] = "";
$proto349["m_havingmode"] = false;
$proto349["m_inBrackets"] = false;
$proto349["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto349);

$proto347["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto347);

$proto338["m_fromlist"][]=$obj;
												$proto351=array();
$proto351["m_link"] = "SQLL_INNERJOIN";
			$proto352=array();
$proto352["m_strName"] = "urna";
$proto352["m_srcTableName"] = "Alc - Por Sector";
$proto352["m_columns"] = array();
$proto352["m_columns"][] = "id_distrito";
$proto352["m_columns"][] = "id_sector";
$proto352["m_columns"][] = "id_urna";
$proto352["m_columns"][] = "nombre_centro";
$proto352["m_columns"][] = "ubicación";
$proto352["m_columns"][] = "votantes";
$obj = new SQLTable($proto352);

$proto351["m_table"] = $obj;
$proto351["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto351["m_alias"] = "u";
$proto351["m_srcTableName"] = "Alc - Por Sector";
$proto353=array();
$proto353["m_sql"] = "a.id_urna = u.id_urna";
$proto353["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto353["m_column"]=$obj;
$proto353["m_contained"] = array();
$proto353["m_strCase"] = "= u.id_urna";
$proto353["m_havingmode"] = false;
$proto353["m_inBrackets"] = false;
$proto353["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto353);

$proto351["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto351);

$proto338["m_fromlist"][]=$obj;
$proto338["m_groupby"] = array();
$proto338["m_orderby"] = array();
$proto338["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto338);

$proto337["m_sql"] = "(select sum(a.utilizados) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto337["m_srcTableName"] = "Alc - Por Sector";
$proto337["m_expr"]=$obj;
$proto337["m_alias"] = "Utilizados";
$obj = new SQLFieldListItem($proto337);

$proto0["m_fieldlist"][]=$obj;
						$proto355=array();
			$proto356=array();
$proto356["m_strHead"] = "select";
$proto356["m_strFieldList"] = "sum(a.no_utilizados)";
$proto356["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto356["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto356["m_strOrderBy"] = "";
	
		;
			$proto356["cipherer"] = null;
$proto358=array();
$proto358["m_sql"] = "u.id_sector = ur.id_sector";
$proto358["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto358["m_column"]=$obj;
$proto358["m_contained"] = array();
$proto358["m_strCase"] = "= ur.id_sector";
$proto358["m_havingmode"] = false;
$proto358["m_inBrackets"] = false;
$proto358["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto358);

$proto356["m_where"] = $obj;
$proto360=array();
$proto360["m_sql"] = "";
$proto360["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto360["m_column"]=$obj;
$proto360["m_contained"] = array();
$proto360["m_strCase"] = "";
$proto360["m_havingmode"] = false;
$proto360["m_inBrackets"] = false;
$proto360["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto360);

$proto356["m_having"] = $obj;
$proto356["m_fieldlist"] = array();
						$proto362=array();
			$proto363=array();
$proto363["m_functiontype"] = "SQLF_SUM";
$proto363["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "no_utilizados",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto363["m_arguments"][]=$obj;
$proto363["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto363);

$proto362["m_sql"] = "sum(a.no_utilizados)";
$proto362["m_srcTableName"] = "Alc - Por Sector";
$proto362["m_expr"]=$obj;
$proto362["m_alias"] = "";
$obj = new SQLFieldListItem($proto362);

$proto356["m_fieldlist"][]=$obj;
$proto356["m_fromlist"] = array();
												$proto365=array();
$proto365["m_link"] = "SQLL_MAIN";
			$proto366=array();
$proto366["m_strName"] = "voto_alcalde";
$proto366["m_srcTableName"] = "Alc - Por Sector";
$proto366["m_columns"] = array();
$proto366["m_columns"][] = "elecciones";
$proto366["m_columns"][] = "id_urna";
$proto366["m_columns"][] = "candidato1";
$proto366["m_columns"][] = "candidato2";
$proto366["m_columns"][] = "candidato3";
$proto366["m_columns"][] = "candidato4";
$proto366["m_columns"][] = "candidato5";
$proto366["m_columns"][] = "candidato6";
$proto366["m_columns"][] = "candidato7";
$proto366["m_columns"][] = "candidato8";
$proto366["m_columns"][] = "candidato9";
$proto366["m_columns"][] = "candidato10";
$proto366["m_columns"][] = "candidato11";
$proto366["m_columns"][] = "candidato12";
$proto366["m_columns"][] = "validos";
$proto366["m_columns"][] = "blancos";
$proto366["m_columns"][] = "nulos";
$proto366["m_columns"][] = "utilizados";
$proto366["m_columns"][] = "no_utilizados";
$proto366["m_columns"][] = "total";
$proto366["m_columns"][] = "usuario";
$proto366["m_columns"][] = "fecha";
$proto366["m_columns"][] = "editado_por";
$proto366["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto366);

$proto365["m_table"] = $obj;
$proto365["m_sql"] = "voto_alcalde as a";
$proto365["m_alias"] = "a";
$proto365["m_srcTableName"] = "Alc - Por Sector";
$proto367=array();
$proto367["m_sql"] = "";
$proto367["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto367["m_column"]=$obj;
$proto367["m_contained"] = array();
$proto367["m_strCase"] = "";
$proto367["m_havingmode"] = false;
$proto367["m_inBrackets"] = false;
$proto367["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto367);

$proto365["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto365);

$proto356["m_fromlist"][]=$obj;
												$proto369=array();
$proto369["m_link"] = "SQLL_INNERJOIN";
			$proto370=array();
$proto370["m_strName"] = "urna";
$proto370["m_srcTableName"] = "Alc - Por Sector";
$proto370["m_columns"] = array();
$proto370["m_columns"][] = "id_distrito";
$proto370["m_columns"][] = "id_sector";
$proto370["m_columns"][] = "id_urna";
$proto370["m_columns"][] = "nombre_centro";
$proto370["m_columns"][] = "ubicación";
$proto370["m_columns"][] = "votantes";
$obj = new SQLTable($proto370);

$proto369["m_table"] = $obj;
$proto369["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto369["m_alias"] = "u";
$proto369["m_srcTableName"] = "Alc - Por Sector";
$proto371=array();
$proto371["m_sql"] = "a.id_urna = u.id_urna";
$proto371["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto371["m_column"]=$obj;
$proto371["m_contained"] = array();
$proto371["m_strCase"] = "= u.id_urna";
$proto371["m_havingmode"] = false;
$proto371["m_inBrackets"] = false;
$proto371["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto371);

$proto369["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto369);

$proto356["m_fromlist"][]=$obj;
$proto356["m_groupby"] = array();
$proto356["m_orderby"] = array();
$proto356["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto356);

$proto355["m_sql"] = "(select sum(a.no_utilizados) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto355["m_srcTableName"] = "Alc - Por Sector";
$proto355["m_expr"]=$obj;
$proto355["m_alias"] = "No_Utilizados";
$obj = new SQLFieldListItem($proto355);

$proto0["m_fieldlist"][]=$obj;
						$proto373=array();
			$proto374=array();
$proto374["m_strHead"] = "select";
$proto374["m_strFieldList"] = "sum(a.total)";
$proto374["m_strFrom"] = "from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna";
$proto374["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto374["m_strOrderBy"] = "";
	
		;
			$proto374["cipherer"] = null;
$proto376=array();
$proto376["m_sql"] = "u.id_sector = ur.id_sector";
$proto376["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto376["m_column"]=$obj;
$proto376["m_contained"] = array();
$proto376["m_strCase"] = "= ur.id_sector";
$proto376["m_havingmode"] = false;
$proto376["m_inBrackets"] = false;
$proto376["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto376);

$proto374["m_where"] = $obj;
$proto378=array();
$proto378["m_sql"] = "";
$proto378["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto378["m_column"]=$obj;
$proto378["m_contained"] = array();
$proto378["m_strCase"] = "";
$proto378["m_havingmode"] = false;
$proto378["m_inBrackets"] = false;
$proto378["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto378);

$proto374["m_having"] = $obj;
$proto374["m_fieldlist"] = array();
						$proto380=array();
			$proto381=array();
$proto381["m_functiontype"] = "SQLF_SUM";
$proto381["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto381["m_arguments"][]=$obj;
$proto381["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto381);

$proto380["m_sql"] = "sum(a.total)";
$proto380["m_srcTableName"] = "Alc - Por Sector";
$proto380["m_expr"]=$obj;
$proto380["m_alias"] = "";
$obj = new SQLFieldListItem($proto380);

$proto374["m_fieldlist"][]=$obj;
$proto374["m_fromlist"] = array();
												$proto383=array();
$proto383["m_link"] = "SQLL_MAIN";
			$proto384=array();
$proto384["m_strName"] = "voto_alcalde";
$proto384["m_srcTableName"] = "Alc - Por Sector";
$proto384["m_columns"] = array();
$proto384["m_columns"][] = "elecciones";
$proto384["m_columns"][] = "id_urna";
$proto384["m_columns"][] = "candidato1";
$proto384["m_columns"][] = "candidato2";
$proto384["m_columns"][] = "candidato3";
$proto384["m_columns"][] = "candidato4";
$proto384["m_columns"][] = "candidato5";
$proto384["m_columns"][] = "candidato6";
$proto384["m_columns"][] = "candidato7";
$proto384["m_columns"][] = "candidato8";
$proto384["m_columns"][] = "candidato9";
$proto384["m_columns"][] = "candidato10";
$proto384["m_columns"][] = "candidato11";
$proto384["m_columns"][] = "candidato12";
$proto384["m_columns"][] = "validos";
$proto384["m_columns"][] = "blancos";
$proto384["m_columns"][] = "nulos";
$proto384["m_columns"][] = "utilizados";
$proto384["m_columns"][] = "no_utilizados";
$proto384["m_columns"][] = "total";
$proto384["m_columns"][] = "usuario";
$proto384["m_columns"][] = "fecha";
$proto384["m_columns"][] = "editado_por";
$proto384["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto384);

$proto383["m_table"] = $obj;
$proto383["m_sql"] = "voto_alcalde as a";
$proto383["m_alias"] = "a";
$proto383["m_srcTableName"] = "Alc - Por Sector";
$proto385=array();
$proto385["m_sql"] = "";
$proto385["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto385["m_column"]=$obj;
$proto385["m_contained"] = array();
$proto385["m_strCase"] = "";
$proto385["m_havingmode"] = false;
$proto385["m_inBrackets"] = false;
$proto385["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto385);

$proto383["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto383);

$proto374["m_fromlist"][]=$obj;
												$proto387=array();
$proto387["m_link"] = "SQLL_INNERJOIN";
			$proto388=array();
$proto388["m_strName"] = "urna";
$proto388["m_srcTableName"] = "Alc - Por Sector";
$proto388["m_columns"] = array();
$proto388["m_columns"][] = "id_distrito";
$proto388["m_columns"][] = "id_sector";
$proto388["m_columns"][] = "id_urna";
$proto388["m_columns"][] = "nombre_centro";
$proto388["m_columns"][] = "ubicación";
$proto388["m_columns"][] = "votantes";
$obj = new SQLTable($proto388);

$proto387["m_table"] = $obj;
$proto387["m_sql"] = "inner join urna as u on a.id_urna = u.id_urna";
$proto387["m_alias"] = "u";
$proto387["m_srcTableName"] = "Alc - Por Sector";
$proto389=array();
$proto389["m_sql"] = "a.id_urna = u.id_urna";
$proto389["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "a",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto389["m_column"]=$obj;
$proto389["m_contained"] = array();
$proto389["m_strCase"] = "= u.id_urna";
$proto389["m_havingmode"] = false;
$proto389["m_inBrackets"] = false;
$proto389["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto389);

$proto387["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto387);

$proto374["m_fromlist"][]=$obj;
$proto374["m_groupby"] = array();
$proto374["m_orderby"] = array();
$proto374["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto374);

$proto373["m_sql"] = "(select sum(a.total) from voto_alcalde as a  inner join urna as u on a.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto373["m_srcTableName"] = "Alc - Por Sector";
$proto373["m_expr"]=$obj;
$proto373["m_alias"] = "Total";
$obj = new SQLFieldListItem($proto373);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto391=array();
$proto391["m_link"] = "SQLL_MAIN";
			$proto392=array();
$proto392["m_strName"] = "voto_alcalde";
$proto392["m_srcTableName"] = "Alc - Por Sector";
$proto392["m_columns"] = array();
$proto392["m_columns"][] = "elecciones";
$proto392["m_columns"][] = "id_urna";
$proto392["m_columns"][] = "candidato1";
$proto392["m_columns"][] = "candidato2";
$proto392["m_columns"][] = "candidato3";
$proto392["m_columns"][] = "candidato4";
$proto392["m_columns"][] = "candidato5";
$proto392["m_columns"][] = "candidato6";
$proto392["m_columns"][] = "candidato7";
$proto392["m_columns"][] = "candidato8";
$proto392["m_columns"][] = "candidato9";
$proto392["m_columns"][] = "candidato10";
$proto392["m_columns"][] = "candidato11";
$proto392["m_columns"][] = "candidato12";
$proto392["m_columns"][] = "validos";
$proto392["m_columns"][] = "blancos";
$proto392["m_columns"][] = "nulos";
$proto392["m_columns"][] = "utilizados";
$proto392["m_columns"][] = "no_utilizados";
$proto392["m_columns"][] = "total";
$proto392["m_columns"][] = "usuario";
$proto392["m_columns"][] = "fecha";
$proto392["m_columns"][] = "editado_por";
$proto392["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto392);

$proto391["m_table"] = $obj;
$proto391["m_sql"] = "voto_alcalde as va";
$proto391["m_alias"] = "va";
$proto391["m_srcTableName"] = "Alc - Por Sector";
$proto393=array();
$proto393["m_sql"] = "";
$proto393["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto393["m_column"]=$obj;
$proto393["m_contained"] = array();
$proto393["m_strCase"] = "";
$proto393["m_havingmode"] = false;
$proto393["m_inBrackets"] = false;
$proto393["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto393);

$proto391["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto391);

$proto0["m_fromlist"][]=$obj;
												$proto395=array();
$proto395["m_link"] = "SQLL_INNERJOIN";
			$proto396=array();
$proto396["m_strName"] = "urna";
$proto396["m_srcTableName"] = "Alc - Por Sector";
$proto396["m_columns"] = array();
$proto396["m_columns"][] = "id_distrito";
$proto396["m_columns"][] = "id_sector";
$proto396["m_columns"][] = "id_urna";
$proto396["m_columns"][] = "nombre_centro";
$proto396["m_columns"][] = "ubicación";
$proto396["m_columns"][] = "votantes";
$obj = new SQLTable($proto396);

$proto395["m_table"] = $obj;
$proto395["m_sql"] = "inner join urna as ur on va.id_urna = ur.id_urna";
$proto395["m_alias"] = "ur";
$proto395["m_srcTableName"] = "Alc - Por Sector";
$proto397=array();
$proto397["m_sql"] = "va.id_urna = ur.id_urna";
$proto397["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "va",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto397["m_column"]=$obj;
$proto397["m_contained"] = array();
$proto397["m_strCase"] = "= ur.id_urna";
$proto397["m_havingmode"] = false;
$proto397["m_inBrackets"] = false;
$proto397["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto397);

$proto395["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto395);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto399=array();
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "ur",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto399["m_column"]=$obj;
$obj = new SQLGroupByItem($proto399);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto401=array();
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "ur",
	"m_srcTableName" => "Alc - Por Sector"
));

$proto401["m_column"]=$obj;
$proto401["m_bAsc"] = 1;
$proto401["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto401);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Alc - Por Sector";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alc___por_sector = createSqlQuery_alc___por_sector();


	
		;

																					

$tdataalc___por_sector[".sqlquery"] = $queryData_alc___por_sector;



include_once(getabspath("include/alc___por_sector_events.php"));
$tableEvents["Alc - Por Sector"] = new eventclass_alc___por_sector;
$tdataalc___por_sector[".hasEvents"] = true;

$query = &$queryData_alc___por_sector;
$table = "Alc - Por Sector";
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