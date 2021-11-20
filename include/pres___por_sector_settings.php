<?php
$tdatapres___por_sector = array();
$tdatapres___por_sector[".searchableFields"] = array();
$tdatapres___por_sector[".ShortName"] = "pres___por_sector";
$tdatapres___por_sector[".OwnerID"] = "";
$tdatapres___por_sector[".OriginalTable"] = "voto_presidente";


$tdatapres___por_sector[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatapres___por_sector[".originalPagesByType"] = $tdatapres___por_sector[".pagesByType"];
$tdatapres___por_sector[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatapres___por_sector[".originalPages"] = $tdatapres___por_sector[".pages"];
$tdatapres___por_sector[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatapres___por_sector[".originalDefaultPages"] = $tdatapres___por_sector[".defaultPages"];

//	field labels
$fieldLabelspres___por_sector = array();
$fieldToolTipspres___por_sector = array();
$pageTitlespres___por_sector = array();
$placeHolderspres___por_sector = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspres___por_sector["Spanish"] = array();
	$fieldToolTipspres___por_sector["Spanish"] = array();
	$placeHolderspres___por_sector["Spanish"] = array();
	$pageTitlespres___por_sector["Spanish"] = array();
	$fieldLabelspres___por_sector["Spanish"]["Validos"] = "Votos Validos";
	$fieldToolTipspres___por_sector["Spanish"]["Validos"] = "";
	$placeHolderspres___por_sector["Spanish"]["Validos"] = "";
	$fieldLabelspres___por_sector["Spanish"]["Blancos"] = "Votos En Blanco";
	$fieldToolTipspres___por_sector["Spanish"]["Blancos"] = "";
	$placeHolderspres___por_sector["Spanish"]["Blancos"] = "";
	$fieldLabelspres___por_sector["Spanish"]["Nulos"] = "Votos Nulos";
	$fieldToolTipspres___por_sector["Spanish"]["Nulos"] = "";
	$placeHolderspres___por_sector["Spanish"]["Nulos"] = "";
	$fieldLabelspres___por_sector["Spanish"]["Utilizados"] = "Votos Utilizados";
	$fieldToolTipspres___por_sector["Spanish"]["Utilizados"] = "";
	$placeHolderspres___por_sector["Spanish"]["Utilizados"] = "";
	$fieldLabelspres___por_sector["Spanish"]["No_Utilizados"] = "Votos No Utilizados";
	$fieldToolTipspres___por_sector["Spanish"]["No_Utilizados"] = "";
	$placeHolderspres___por_sector["Spanish"]["No_Utilizados"] = "";
	$fieldLabelspres___por_sector["Spanish"]["Total"] = "Total de Votos";
	$fieldToolTipspres___por_sector["Spanish"]["Total"] = "";
	$placeHolderspres___por_sector["Spanish"]["Total"] = "";
	$fieldLabelspres___por_sector["Spanish"]["id_distrito"] = "Distrito";
	$fieldToolTipspres___por_sector["Spanish"]["id_distrito"] = "";
	$placeHolderspres___por_sector["Spanish"]["id_distrito"] = "";
	$fieldLabelspres___por_sector["Spanish"]["id_sector"] = "Sector";
	$fieldToolTipspres___por_sector["Spanish"]["id_sector"] = "";
	$placeHolderspres___por_sector["Spanish"]["id_sector"] = "";
	$fieldLabelspres___por_sector["Spanish"]["PAC"] = "PAC";
	$fieldToolTipspres___por_sector["Spanish"]["PAC"] = "";
	$placeHolderspres___por_sector["Spanish"]["PAC"] = "";
	$fieldLabelspres___por_sector["Spanish"]["FAPER"] = "FAPER";
	$fieldToolTipspres___por_sector["Spanish"]["FAPER"] = "";
	$placeHolderspres___por_sector["Spanish"]["FAPER"] = "";
	$fieldLabelspres___por_sector["Spanish"]["NUEVA_RUTA"] = "Nueva Ruta";
	$fieldToolTipspres___por_sector["Spanish"]["NUEVA_RUTA"] = "";
	$placeHolderspres___por_sector["Spanish"]["NUEVA_RUTA"] = "";
	$fieldLabelspres___por_sector["Spanish"]["ALIANZA_PAT"] = "Alianza Patriotica";
	$fieldToolTipspres___por_sector["Spanish"]["ALIANZA_PAT"] = "";
	$placeHolderspres___por_sector["Spanish"]["ALIANZA_PAT"] = "";
	$fieldLabelspres___por_sector["Spanish"]["MIDE"] = "MIDE";
	$fieldToolTipspres___por_sector["Spanish"]["MIDE"] = "";
	$placeHolderspres___por_sector["Spanish"]["MIDE"] = "";
	$fieldLabelspres___por_sector["Spanish"]["VAMOS"] = "VAMOS";
	$fieldToolTipspres___por_sector["Spanish"]["VAMOS"] = "";
	$placeHolderspres___por_sector["Spanish"]["VAMOS"] = "";
	$fieldLabelspres___por_sector["Spanish"]["LIBRE"] = "Libre";
	$fieldToolTipspres___por_sector["Spanish"]["LIBRE"] = "";
	$placeHolderspres___por_sector["Spanish"]["LIBRE"] = "";
	$fieldLabelspres___por_sector["Spanish"]["PSH"] = "PSH";
	$fieldToolTipspres___por_sector["Spanish"]["PSH"] = "";
	$placeHolderspres___por_sector["Spanish"]["PSH"] = "";
	$fieldLabelspres___por_sector["Spanish"]["LIDEHR"] = "LIDEHR";
	$fieldToolTipspres___por_sector["Spanish"]["LIDEHR"] = "";
	$placeHolderspres___por_sector["Spanish"]["LIDEHR"] = "";
	$fieldLabelspres___por_sector["Spanish"]["UD"] = "UD";
	$fieldToolTipspres___por_sector["Spanish"]["UD"] = "";
	$placeHolderspres___por_sector["Spanish"]["UD"] = "";
	$fieldLabelspres___por_sector["Spanish"]["DC"] = "DC";
	$fieldToolTipspres___por_sector["Spanish"]["DC"] = "";
	$placeHolderspres___por_sector["Spanish"]["DC"] = "";
	$fieldLabelspres___por_sector["Spanish"]["TSH"] = "TSH";
	$fieldToolTipspres___por_sector["Spanish"]["TSH"] = "";
	$placeHolderspres___por_sector["Spanish"]["TSH"] = "";
	$fieldLabelspres___por_sector["Spanish"]["HON_HUMANA"] = "Honduras Humana";
	$fieldToolTipspres___por_sector["Spanish"]["HON_HUMANA"] = "";
	$placeHolderspres___por_sector["Spanish"]["HON_HUMANA"] = "";
	$fieldLabelspres___por_sector["Spanish"]["LIBERAL"] = "Partido Liberal";
	$fieldToolTipspres___por_sector["Spanish"]["LIBERAL"] = "";
	$placeHolderspres___por_sector["Spanish"]["LIBERAL"] = "";
	$fieldLabelspres___por_sector["Spanish"]["NACIONAL"] = "Partido Nacional";
	$fieldToolTipspres___por_sector["Spanish"]["NACIONAL"] = "";
	$placeHolderspres___por_sector["Spanish"]["NACIONAL"] = "";
	$fieldLabelspres___por_sector["Spanish"]["Otros"] = "Otros";
	$fieldToolTipspres___por_sector["Spanish"]["Otros"] = "";
	$placeHolderspres___por_sector["Spanish"]["Otros"] = "";
	if (count($fieldToolTipspres___por_sector["Spanish"]))
		$tdatapres___por_sector[".isUseToolTips"] = true;
}


	$tdatapres___por_sector[".NCSearch"] = true;



$tdatapres___por_sector[".shortTableName"] = "pres___por_sector";
$tdatapres___por_sector[".nSecOptions"] = 0;

$tdatapres___por_sector[".mainTableOwnerID"] = "";
$tdatapres___por_sector[".entityType"] = 2;
$tdatapres___por_sector[".connId"] = "internas_new_at_localhost";


$tdatapres___por_sector[".strOriginalTableName"] = "voto_presidente";

	



$tdatapres___por_sector[".showAddInPopup"] = false;

$tdatapres___por_sector[".showEditInPopup"] = false;

$tdatapres___por_sector[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapres___por_sector[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapres___por_sector[".listAjax"] = false;
//	temporary
//$tdatapres___por_sector[".listAjax"] = false;

	$tdatapres___por_sector[".audit"] = false;

	$tdatapres___por_sector[".locking"] = false;


$pages = $tdatapres___por_sector[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapres___por_sector[".edit"] = true;
	$tdatapres___por_sector[".afterEditAction"] = 1;
	$tdatapres___por_sector[".closePopupAfterEdit"] = 1;
	$tdatapres___por_sector[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapres___por_sector[".add"] = true;
$tdatapres___por_sector[".afterAddAction"] = 1;
$tdatapres___por_sector[".closePopupAfterAdd"] = 1;
$tdatapres___por_sector[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapres___por_sector[".list"] = true;
}



$tdatapres___por_sector[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapres___por_sector[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapres___por_sector[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapres___por_sector[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapres___por_sector[".printFriendly"] = true;
}



$tdatapres___por_sector[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapres___por_sector[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapres___por_sector[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapres___por_sector[".isUseAjaxSuggest"] = true;






$tdatapres___por_sector[".ajaxCodeSnippetAdded"] = false;

$tdatapres___por_sector[".buttonsAdded"] = false;

$tdatapres___por_sector[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapres___por_sector[".isUseTimeForSearch"] = false;


$tdatapres___por_sector[".badgeColor"] = "778899";


$tdatapres___por_sector[".allSearchFields"] = array();
$tdatapres___por_sector[".filterFields"] = array();
$tdatapres___por_sector[".requiredSearchFields"] = array();

$tdatapres___por_sector[".googleLikeFields"] = array();
$tdatapres___por_sector[".googleLikeFields"][] = "id_distrito";
$tdatapres___por_sector[".googleLikeFields"][] = "id_sector";
$tdatapres___por_sector[".googleLikeFields"][] = "PAC";
$tdatapres___por_sector[".googleLikeFields"][] = "FAPER";
$tdatapres___por_sector[".googleLikeFields"][] = "NUEVA_RUTA";
$tdatapres___por_sector[".googleLikeFields"][] = "ALIANZA_PAT";
$tdatapres___por_sector[".googleLikeFields"][] = "MIDE";
$tdatapres___por_sector[".googleLikeFields"][] = "VAMOS";
$tdatapres___por_sector[".googleLikeFields"][] = "LIBRE";
$tdatapres___por_sector[".googleLikeFields"][] = "PSH";
$tdatapres___por_sector[".googleLikeFields"][] = "LIDEHR";
$tdatapres___por_sector[".googleLikeFields"][] = "UD";
$tdatapres___por_sector[".googleLikeFields"][] = "DC";
$tdatapres___por_sector[".googleLikeFields"][] = "TSH";
$tdatapres___por_sector[".googleLikeFields"][] = "HON_HUMANA";
$tdatapres___por_sector[".googleLikeFields"][] = "LIBERAL";
$tdatapres___por_sector[".googleLikeFields"][] = "NACIONAL";
$tdatapres___por_sector[".googleLikeFields"][] = "Otros";
$tdatapres___por_sector[".googleLikeFields"][] = "Validos";
$tdatapres___por_sector[".googleLikeFields"][] = "Blancos";
$tdatapres___por_sector[".googleLikeFields"][] = "Nulos";
$tdatapres___por_sector[".googleLikeFields"][] = "Utilizados";
$tdatapres___por_sector[".googleLikeFields"][] = "No_Utilizados";
$tdatapres___por_sector[".googleLikeFields"][] = "Total";



$tdatapres___por_sector[".tableType"] = "report";

$tdatapres___por_sector[".printerPageOrientation"] = 1;
$tdatapres___por_sector[".nPrinterPageScale"] = 100;

$tdatapres___por_sector[".nPrinterSplitRecords"] = 20;

$tdatapres___por_sector[".geocodingEnabled"] = false;

//report settings
$tdatapres___por_sector[".printReportLayout"] = 6;

$tdatapres___por_sector[".reportPrintPartitionType"] = 1;
$tdatapres___por_sector[".reportPrintGroupsPerPage"] = 20;
$tdatapres___por_sector[".lowGroup"] = 0;



$tdatapres___por_sector[".pageSize"] = 20;


$tdatapres___por_sector[".isExistTotalFields"] = true;



$tdatapres___por_sector[".reportGlobalSummary"] = true;

$tdatapres___por_sector[".repShowDet"] = true;

$tdatapres___por_sector[".reportLayout"] = 6;

//end of report settings










$tstrOrderBy = "order by ur.id_distrito";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapres___por_sector[".strOrderBy"] = $tstrOrderBy;

$tdatapres___por_sector[".orderindexes"] = array();
	$tdatapres___por_sector[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "ur.id_distrito");



$tdatapres___por_sector[".sqlHead"] = "select ur.id_distrito, ur.id_sector,  (select concat(sum(p.candidato1), \" (\", ROUND(((sum(p.candidato1))/(sum(validos))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as PAC,  (select concat(sum(p.candidato2), \" (\", ROUND((((sum(p.candidato2)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as FAPER,  (select concat(sum(p.candidato3), \" (\", ROUND((((sum(p.candidato3)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as NUEVA_RUTA,  (select concat(sum(p.candidato4), \" (\", ROUND((((sum(p.candidato4)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as ALIANZA_PAT,  (select concat(sum(p.candidato5), \" (\", ROUND((((sum(p.candidato5)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as MIDE,  (select concat(sum(p.candidato6), \" (\", ROUND((((sum(p.candidato6)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as VAMOS,  (select concat(sum(p.candidato7), \" (\", ROUND((((sum(p.candidato7)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as LIBRE,  (select concat(sum(p.candidato8), \" (\", ROUND((((sum(p.candidato8)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as PSH,  (select concat(sum(p.candidato9), \" (\", ROUND((((sum(p.candidato9)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as LIDEHR,  (select concat(sum(p.candidato10), \" (\", ROUND((((sum(p.candidato10)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as UD,  (select concat(sum(p.candidato11), \" (\", ROUND((((sum(p.candidato11)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as DC,  (select concat(sum(p.candidato12), \" (\", ROUND((((sum(p.candidato12)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as TSH,  (select concat(sum(p.candidato13), \" (\", ROUND((((sum(p.candidato13)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as HON_HUMANA,  (select concat(sum(p.candidato14), \" (\", ROUND((((sum(p.candidato14)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as LIBERAL,  (select concat(sum(p.candidato15), \" (\", ROUND((((sum(p.candidato15)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as NACIONAL,  (select concat(((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)) + (sum(p.candidato4)) + (sum(p.candidato5)) + (sum(p.candidato6)) + (sum(p.candidato8))   + (sum(p.candidato9)) + (sum(p.candidato10)) + (sum(p.candidato11)) + (sum(p.candidato12)) + (sum(p.candidato13))), \" (\", ROUND((((((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)) + (sum(p.candidato4)) + (sum(p.candidato5)) + (sum(p.candidato6)) + (sum(p.candidato8))   + (sum(p.candidato9)) + (sum(p.candidato10)) + (sum(p.candidato11)) + (sum(p.candidato12)) + (sum(p.candidato13))) / (sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Otros,  (select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Validos,  (select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Blancos,  (select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Nulos,  (select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Utilizados,  (select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as No_Utilizados,  (select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Total";
$tdatapres___por_sector[".sqlFrom"] = "from voto_presidente as vp  inner join urna as ur on vp.id_urna = ur.id_urna";
$tdatapres___por_sector[".sqlWhereExpr"] = "";
$tdatapres___por_sector[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatapres___por_sector[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapres___por_sector[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapres___por_sector[".arrGroupsPerPage"] = $arrGPP;

$tdatapres___por_sector[".highlightSearchResults"] = true;

$tableKeyspres___por_sector = array();
$tdatapres___por_sector[".Keys"] = $tableKeyspres___por_sector;


$tdatapres___por_sector[".hideMobileList"] = array();




//	id_distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_distrito";
	$fdata["GoodName"] = "id_distrito";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","id_distrito");
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


	$tdatapres___por_sector["id_distrito"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "id_distrito";
//	id_sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_sector";
	$fdata["GoodName"] = "id_sector";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","id_sector");
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


	$tdatapres___por_sector["id_sector"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "id_sector";
//	PAC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PAC";
	$fdata["GoodName"] = "PAC";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","PAC");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "PAC";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato1), \" (\", ROUND(((sum(p.candidato1))/(sum(validos))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["PAC"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "PAC";
//	FAPER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FAPER";
	$fdata["GoodName"] = "FAPER";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","FAPER");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "FAPER";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato2), \" (\", ROUND((((sum(p.candidato2)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["FAPER"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "FAPER";
//	NUEVA_RUTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "NUEVA_RUTA";
	$fdata["GoodName"] = "NUEVA_RUTA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","NUEVA_RUTA");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "NUEVA_RUTA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato3), \" (\", ROUND((((sum(p.candidato3)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["NUEVA_RUTA"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "NUEVA_RUTA";
//	ALIANZA_PAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ALIANZA_PAT";
	$fdata["GoodName"] = "ALIANZA_PAT";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","ALIANZA_PAT");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "ALIANZA_PAT";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato4), \" (\", ROUND((((sum(p.candidato4)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["ALIANZA_PAT"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "ALIANZA_PAT";
//	MIDE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MIDE";
	$fdata["GoodName"] = "MIDE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","MIDE");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "MIDE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato5), \" (\", ROUND((((sum(p.candidato5)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["MIDE"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "MIDE";
//	VAMOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "VAMOS";
	$fdata["GoodName"] = "VAMOS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","VAMOS");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "VAMOS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato6), \" (\", ROUND((((sum(p.candidato6)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["VAMOS"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "VAMOS";
//	LIBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LIBRE";
	$fdata["GoodName"] = "LIBRE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","LIBRE");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "LIBRE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato7), \" (\", ROUND((((sum(p.candidato7)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["LIBRE"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "LIBRE";
//	PSH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PSH";
	$fdata["GoodName"] = "PSH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","PSH");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "PSH";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato8), \" (\", ROUND((((sum(p.candidato8)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["PSH"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "PSH";
//	LIDEHR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LIDEHR";
	$fdata["GoodName"] = "LIDEHR";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","LIDEHR");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "LIDEHR";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato9), \" (\", ROUND((((sum(p.candidato9)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["LIDEHR"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "LIDEHR";
//	UD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UD";
	$fdata["GoodName"] = "UD";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","UD");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "UD";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato10), \" (\", ROUND((((sum(p.candidato10)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["UD"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "UD";
//	DC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DC";
	$fdata["GoodName"] = "DC";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","DC");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "DC";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato11), \" (\", ROUND((((sum(p.candidato11)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["DC"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "DC";
//	TSH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "TSH";
	$fdata["GoodName"] = "TSH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","TSH");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "TSH";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato12), \" (\", ROUND((((sum(p.candidato12)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["TSH"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "TSH";
//	HON_HUMANA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "HON_HUMANA";
	$fdata["GoodName"] = "HON_HUMANA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","HON_HUMANA");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "HON_HUMANA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato13), \" (\", ROUND((((sum(p.candidato13)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["HON_HUMANA"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "HON_HUMANA";
//	LIBERAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "LIBERAL";
	$fdata["GoodName"] = "LIBERAL";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","LIBERAL");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "LIBERAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato14), \" (\", ROUND((((sum(p.candidato14)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["LIBERAL"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "LIBERAL";
//	NACIONAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "NACIONAL";
	$fdata["GoodName"] = "NACIONAL";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","NACIONAL");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "NACIONAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato15), \" (\", ROUND((((sum(p.candidato15)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["NACIONAL"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "NACIONAL";
//	Otros
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Otros";
	$fdata["GoodName"] = "Otros";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","Otros");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "Otros";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)) + (sum(p.candidato4)) + (sum(p.candidato5)) + (sum(p.candidato6)) + (sum(p.candidato8))   + (sum(p.candidato9)) + (sum(p.candidato10)) + (sum(p.candidato11)) + (sum(p.candidato12)) + (sum(p.candidato13))), \" (\", ROUND((((((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)) + (sum(p.candidato4)) + (sum(p.candidato5)) + (sum(p.candidato6)) + (sum(p.candidato8))   + (sum(p.candidato9)) + (sum(p.candidato10)) + (sum(p.candidato11)) + (sum(p.candidato12)) + (sum(p.candidato13))) / (sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["Otros"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "Otros";
//	Validos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Validos";
	$fdata["GoodName"] = "Validos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","Validos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "validos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["Validos"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "Validos";
//	Blancos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Blancos";
	$fdata["GoodName"] = "Blancos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","Blancos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "blancos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["Blancos"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "Blancos";
//	Nulos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Nulos";
	$fdata["GoodName"] = "Nulos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","Nulos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "nulos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["Nulos"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "Nulos";
//	Utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Utilizados";
	$fdata["GoodName"] = "Utilizados";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","Utilizados");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "utilizados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["Utilizados"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "Utilizados";
//	No_Utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "No_Utilizados";
	$fdata["GoodName"] = "No_Utilizados";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","No_Utilizados");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "no_utilizados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["No_Utilizados"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "No_Utilizados";
//	Total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Total";
	$fdata["GoodName"] = "Total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","Total");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "total";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["Total"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "Total";


$tables_data["Pres - Por Sector"]=&$tdatapres___por_sector;
$field_labels["Pres___Por_Sector"] = &$fieldLabelspres___por_sector;
$fieldToolTips["Pres___Por_Sector"] = &$fieldToolTipspres___por_sector;
$placeHolders["Pres___Por_Sector"] = &$placeHolderspres___por_sector;
$page_titles["Pres___Por_Sector"] = &$pageTitlespres___por_sector;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Pres - Por Sector"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Pres - Por Sector"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pres___por_sector()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "ur.id_distrito, ur.id_sector,  (select concat(sum(p.candidato1), \" (\", ROUND(((sum(p.candidato1))/(sum(validos))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as PAC,  (select concat(sum(p.candidato2), \" (\", ROUND((((sum(p.candidato2)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as FAPER,  (select concat(sum(p.candidato3), \" (\", ROUND((((sum(p.candidato3)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as NUEVA_RUTA,  (select concat(sum(p.candidato4), \" (\", ROUND((((sum(p.candidato4)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as ALIANZA_PAT,  (select concat(sum(p.candidato5), \" (\", ROUND((((sum(p.candidato5)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as MIDE,  (select concat(sum(p.candidato6), \" (\", ROUND((((sum(p.candidato6)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as VAMOS,  (select concat(sum(p.candidato7), \" (\", ROUND((((sum(p.candidato7)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as LIBRE,  (select concat(sum(p.candidato8), \" (\", ROUND((((sum(p.candidato8)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as PSH,  (select concat(sum(p.candidato9), \" (\", ROUND((((sum(p.candidato9)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as LIDEHR,  (select concat(sum(p.candidato10), \" (\", ROUND((((sum(p.candidato10)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as UD,  (select concat(sum(p.candidato11), \" (\", ROUND((((sum(p.candidato11)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as DC,  (select concat(sum(p.candidato12), \" (\", ROUND((((sum(p.candidato12)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as TSH,  (select concat(sum(p.candidato13), \" (\", ROUND((((sum(p.candidato13)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as HON_HUMANA,  (select concat(sum(p.candidato14), \" (\", ROUND((((sum(p.candidato14)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as LIBERAL,  (select concat(sum(p.candidato15), \" (\", ROUND((((sum(p.candidato15)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as NACIONAL,  (select concat(((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)) + (sum(p.candidato4)) + (sum(p.candidato5)) + (sum(p.candidato6)) + (sum(p.candidato8))   + (sum(p.candidato9)) + (sum(p.candidato10)) + (sum(p.candidato11)) + (sum(p.candidato12)) + (sum(p.candidato13))), \" (\", ROUND((((((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)) + (sum(p.candidato4)) + (sum(p.candidato5)) + (sum(p.candidato6)) + (sum(p.candidato8))   + (sum(p.candidato9)) + (sum(p.candidato10)) + (sum(p.candidato11)) + (sum(p.candidato12)) + (sum(p.candidato13))) / (sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Otros,  (select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Validos,  (select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Blancos,  (select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Nulos,  (select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Utilizados,  (select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as No_Utilizados,  (select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Total";
$proto0["m_strFrom"] = "from voto_presidente as vp  inner join urna as ur on vp.id_urna = ur.id_urna";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by ur.id_distrito";
	
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
	"m_srcTableName" => "Pres - Por Sector"
));

$proto6["m_sql"] = "ur.id_distrito";
$proto6["m_srcTableName"] = "Pres - Por Sector";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "ur",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto8["m_sql"] = "ur.id_sector";
$proto8["m_srcTableName"] = "Pres - Por Sector";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_strHead"] = "select";
$proto11["m_strFieldList"] = "concat(sum(p.candidato1), \" (\", ROUND(((sum(p.candidato1))/(sum(validos))*100),1), \"%)\")";
$proto11["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
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
	"m_srcTableName" => "Pres - Por Sector"
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
	"m_sql" => "sum(p.candidato1)"
));

$proto18["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto18["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND(((sum(p.candidato1))/(sum(validos))*100),1)"
));

$proto18["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto18);

$proto17["m_sql"] = "concat(sum(p.candidato1), \" (\", ROUND(((sum(p.candidato1))/(sum(validos))*100),1), \"%)\")";
$proto17["m_srcTableName"] = "Pres - Por Sector";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto11["m_fieldlist"][]=$obj;
$proto11["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "voto_presidente";
$proto24["m_srcTableName"] = "Pres - Por Sector";
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
$proto24["m_columns"][] = "candidato13";
$proto24["m_columns"][] = "candidato14";
$proto24["m_columns"][] = "candidato15";
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
$proto23["m_sql"] = "voto_presidente as p";
$proto23["m_alias"] = "p";
$proto23["m_srcTableName"] = "Pres - Por Sector";
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
$proto28["m_srcTableName"] = "Pres - Por Sector";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "id_distrito";
$proto28["m_columns"][] = "id_sector";
$proto28["m_columns"][] = "id_urna";
$proto28["m_columns"][] = "nombre_centro";
$proto28["m_columns"][] = "ubicación";
$proto28["m_columns"][] = "votantes";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto27["m_alias"] = "u";
$proto27["m_srcTableName"] = "Pres - Por Sector";
$proto29=array();
$proto29["m_sql"] = "p.id_urna = u.id_urna";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
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
$proto11["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto11);

$proto10["m_sql"] = "(select concat(sum(p.candidato1), \" (\", ROUND(((sum(p.candidato1))/(sum(validos))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto10["m_srcTableName"] = "Pres - Por Sector";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "PAC";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$proto32=array();
$proto32["m_strHead"] = "select";
$proto32["m_strFieldList"] = "concat(sum(p.candidato2), \" (\", ROUND((((sum(p.candidato2)/(sum(validos))))*100),1), \"%)\")";
$proto32["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
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
	"m_srcTableName" => "Pres - Por Sector"
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
	"m_sql" => "sum(p.candidato2)"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato2)/(sum(validos))))*100),1)"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto39["m_arguments"][]=$obj;
$proto39["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto39);

$proto38["m_sql"] = "concat(sum(p.candidato2), \" (\", ROUND((((sum(p.candidato2)/(sum(validos))))*100),1), \"%)\")";
$proto38["m_srcTableName"] = "Pres - Por Sector";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto32["m_fieldlist"][]=$obj;
$proto32["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "voto_presidente";
$proto45["m_srcTableName"] = "Pres - Por Sector";
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
$proto45["m_columns"][] = "candidato13";
$proto45["m_columns"][] = "candidato14";
$proto45["m_columns"][] = "candidato15";
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
$proto44["m_sql"] = "voto_presidente as p";
$proto44["m_alias"] = "p";
$proto44["m_srcTableName"] = "Pres - Por Sector";
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
$proto49["m_srcTableName"] = "Pres - Por Sector";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id_distrito";
$proto49["m_columns"][] = "id_sector";
$proto49["m_columns"][] = "id_urna";
$proto49["m_columns"][] = "nombre_centro";
$proto49["m_columns"][] = "ubicación";
$proto49["m_columns"][] = "votantes";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto48["m_alias"] = "u";
$proto48["m_srcTableName"] = "Pres - Por Sector";
$proto50=array();
$proto50["m_sql"] = "p.id_urna = u.id_urna";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
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
$proto32["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto32);

$proto31["m_sql"] = "(select concat(sum(p.candidato2), \" (\", ROUND((((sum(p.candidato2)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto31["m_srcTableName"] = "Pres - Por Sector";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "FAPER";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$proto53=array();
$proto53["m_strHead"] = "select";
$proto53["m_strFieldList"] = "concat(sum(p.candidato3), \" (\", ROUND((((sum(p.candidato3)/(sum(validos))))*100),1), \"%)\")";
$proto53["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
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
	"m_srcTableName" => "Pres - Por Sector"
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
	"m_sql" => "sum(p.candidato3)"
));

$proto60["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto60["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato3)/(sum(validos))))*100),1)"
));

$proto60["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto60["m_arguments"][]=$obj;
$proto60["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto60);

$proto59["m_sql"] = "concat(sum(p.candidato3), \" (\", ROUND((((sum(p.candidato3)/(sum(validos))))*100),1), \"%)\")";
$proto59["m_srcTableName"] = "Pres - Por Sector";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto53["m_fieldlist"][]=$obj;
$proto53["m_fromlist"] = array();
												$proto65=array();
$proto65["m_link"] = "SQLL_MAIN";
			$proto66=array();
$proto66["m_strName"] = "voto_presidente";
$proto66["m_srcTableName"] = "Pres - Por Sector";
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
$proto66["m_columns"][] = "candidato13";
$proto66["m_columns"][] = "candidato14";
$proto66["m_columns"][] = "candidato15";
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
$proto65["m_sql"] = "voto_presidente as p";
$proto65["m_alias"] = "p";
$proto65["m_srcTableName"] = "Pres - Por Sector";
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
$proto70["m_srcTableName"] = "Pres - Por Sector";
$proto70["m_columns"] = array();
$proto70["m_columns"][] = "id_distrito";
$proto70["m_columns"][] = "id_sector";
$proto70["m_columns"][] = "id_urna";
$proto70["m_columns"][] = "nombre_centro";
$proto70["m_columns"][] = "ubicación";
$proto70["m_columns"][] = "votantes";
$obj = new SQLTable($proto70);

$proto69["m_table"] = $obj;
$proto69["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto69["m_alias"] = "u";
$proto69["m_srcTableName"] = "Pres - Por Sector";
$proto71=array();
$proto71["m_sql"] = "p.id_urna = u.id_urna";
$proto71["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
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
$proto53["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto53);

$proto52["m_sql"] = "(select concat(sum(p.candidato3), \" (\", ROUND((((sum(p.candidato3)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto52["m_srcTableName"] = "Pres - Por Sector";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "NUEVA_RUTA";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$proto74=array();
$proto74["m_strHead"] = "select";
$proto74["m_strFieldList"] = "concat(sum(p.candidato4), \" (\", ROUND((((sum(p.candidato4)/(sum(validos))))*100),1), \"%)\")";
$proto74["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
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
	"m_srcTableName" => "Pres - Por Sector"
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
	"m_sql" => "sum(p.candidato4)"
));

$proto81["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto81["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato4)/(sum(validos))))*100),1)"
));

$proto81["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto81["m_arguments"][]=$obj;
$proto81["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto81);

$proto80["m_sql"] = "concat(sum(p.candidato4), \" (\", ROUND((((sum(p.candidato4)/(sum(validos))))*100),1), \"%)\")";
$proto80["m_srcTableName"] = "Pres - Por Sector";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto74["m_fieldlist"][]=$obj;
$proto74["m_fromlist"] = array();
												$proto86=array();
$proto86["m_link"] = "SQLL_MAIN";
			$proto87=array();
$proto87["m_strName"] = "voto_presidente";
$proto87["m_srcTableName"] = "Pres - Por Sector";
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
$proto87["m_columns"][] = "candidato13";
$proto87["m_columns"][] = "candidato14";
$proto87["m_columns"][] = "candidato15";
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
$proto86["m_sql"] = "voto_presidente as p";
$proto86["m_alias"] = "p";
$proto86["m_srcTableName"] = "Pres - Por Sector";
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
$proto91["m_srcTableName"] = "Pres - Por Sector";
$proto91["m_columns"] = array();
$proto91["m_columns"][] = "id_distrito";
$proto91["m_columns"][] = "id_sector";
$proto91["m_columns"][] = "id_urna";
$proto91["m_columns"][] = "nombre_centro";
$proto91["m_columns"][] = "ubicación";
$proto91["m_columns"][] = "votantes";
$obj = new SQLTable($proto91);

$proto90["m_table"] = $obj;
$proto90["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto90["m_alias"] = "u";
$proto90["m_srcTableName"] = "Pres - Por Sector";
$proto92=array();
$proto92["m_sql"] = "p.id_urna = u.id_urna";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
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
$proto74["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto74);

$proto73["m_sql"] = "(select concat(sum(p.candidato4), \" (\", ROUND((((sum(p.candidato4)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto73["m_srcTableName"] = "Pres - Por Sector";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "ALIANZA_PAT";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$proto95=array();
$proto95["m_strHead"] = "select";
$proto95["m_strFieldList"] = "concat(sum(p.candidato5), \" (\", ROUND((((sum(p.candidato5)/(sum(validos))))*100),1), \"%)\")";
$proto95["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
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
	"m_srcTableName" => "Pres - Por Sector"
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
	"m_sql" => "sum(p.candidato5)"
));

$proto102["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto102["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato5)/(sum(validos))))*100),1)"
));

$proto102["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto102["m_arguments"][]=$obj;
$proto102["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto102);

$proto101["m_sql"] = "concat(sum(p.candidato5), \" (\", ROUND((((sum(p.candidato5)/(sum(validos))))*100),1), \"%)\")";
$proto101["m_srcTableName"] = "Pres - Por Sector";
$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto95["m_fieldlist"][]=$obj;
$proto95["m_fromlist"] = array();
												$proto107=array();
$proto107["m_link"] = "SQLL_MAIN";
			$proto108=array();
$proto108["m_strName"] = "voto_presidente";
$proto108["m_srcTableName"] = "Pres - Por Sector";
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
$proto108["m_columns"][] = "candidato13";
$proto108["m_columns"][] = "candidato14";
$proto108["m_columns"][] = "candidato15";
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
$proto107["m_sql"] = "voto_presidente as p";
$proto107["m_alias"] = "p";
$proto107["m_srcTableName"] = "Pres - Por Sector";
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
$proto112["m_srcTableName"] = "Pres - Por Sector";
$proto112["m_columns"] = array();
$proto112["m_columns"][] = "id_distrito";
$proto112["m_columns"][] = "id_sector";
$proto112["m_columns"][] = "id_urna";
$proto112["m_columns"][] = "nombre_centro";
$proto112["m_columns"][] = "ubicación";
$proto112["m_columns"][] = "votantes";
$obj = new SQLTable($proto112);

$proto111["m_table"] = $obj;
$proto111["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto111["m_alias"] = "u";
$proto111["m_srcTableName"] = "Pres - Por Sector";
$proto113=array();
$proto113["m_sql"] = "p.id_urna = u.id_urna";
$proto113["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
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
$proto95["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto95);

$proto94["m_sql"] = "(select concat(sum(p.candidato5), \" (\", ROUND((((sum(p.candidato5)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto94["m_srcTableName"] = "Pres - Por Sector";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "MIDE";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto115=array();
			$proto116=array();
$proto116["m_strHead"] = "select";
$proto116["m_strFieldList"] = "concat(sum(p.candidato6), \" (\", ROUND((((sum(p.candidato6)/(sum(validos))))*100),1), \"%)\")";
$proto116["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
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
	"m_srcTableName" => "Pres - Por Sector"
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
	"m_sql" => "sum(p.candidato6)"
));

$proto123["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto123["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato6)/(sum(validos))))*100),1)"
));

$proto123["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto123["m_arguments"][]=$obj;
$proto123["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto123);

$proto122["m_sql"] = "concat(sum(p.candidato6), \" (\", ROUND((((sum(p.candidato6)/(sum(validos))))*100),1), \"%)\")";
$proto122["m_srcTableName"] = "Pres - Por Sector";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto116["m_fieldlist"][]=$obj;
$proto116["m_fromlist"] = array();
												$proto128=array();
$proto128["m_link"] = "SQLL_MAIN";
			$proto129=array();
$proto129["m_strName"] = "voto_presidente";
$proto129["m_srcTableName"] = "Pres - Por Sector";
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
$proto129["m_columns"][] = "candidato13";
$proto129["m_columns"][] = "candidato14";
$proto129["m_columns"][] = "candidato15";
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
$proto128["m_sql"] = "voto_presidente as p";
$proto128["m_alias"] = "p";
$proto128["m_srcTableName"] = "Pres - Por Sector";
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
$proto133["m_srcTableName"] = "Pres - Por Sector";
$proto133["m_columns"] = array();
$proto133["m_columns"][] = "id_distrito";
$proto133["m_columns"][] = "id_sector";
$proto133["m_columns"][] = "id_urna";
$proto133["m_columns"][] = "nombre_centro";
$proto133["m_columns"][] = "ubicación";
$proto133["m_columns"][] = "votantes";
$obj = new SQLTable($proto133);

$proto132["m_table"] = $obj;
$proto132["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto132["m_alias"] = "u";
$proto132["m_srcTableName"] = "Pres - Por Sector";
$proto134=array();
$proto134["m_sql"] = "p.id_urna = u.id_urna";
$proto134["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
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
$proto116["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto116);

$proto115["m_sql"] = "(select concat(sum(p.candidato6), \" (\", ROUND((((sum(p.candidato6)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto115["m_srcTableName"] = "Pres - Por Sector";
$proto115["m_expr"]=$obj;
$proto115["m_alias"] = "VAMOS";
$obj = new SQLFieldListItem($proto115);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$proto137=array();
$proto137["m_strHead"] = "select";
$proto137["m_strFieldList"] = "concat(sum(p.candidato7), \" (\", ROUND((((sum(p.candidato7)/(sum(validos))))*100),1), \"%)\")";
$proto137["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
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
	"m_srcTableName" => "Pres - Por Sector"
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
	"m_sql" => "sum(p.candidato7)"
));

$proto144["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto144["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato7)/(sum(validos))))*100),1)"
));

$proto144["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto144["m_arguments"][]=$obj;
$proto144["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto144);

$proto143["m_sql"] = "concat(sum(p.candidato7), \" (\", ROUND((((sum(p.candidato7)/(sum(validos))))*100),1), \"%)\")";
$proto143["m_srcTableName"] = "Pres - Por Sector";
$proto143["m_expr"]=$obj;
$proto143["m_alias"] = "";
$obj = new SQLFieldListItem($proto143);

$proto137["m_fieldlist"][]=$obj;
$proto137["m_fromlist"] = array();
												$proto149=array();
$proto149["m_link"] = "SQLL_MAIN";
			$proto150=array();
$proto150["m_strName"] = "voto_presidente";
$proto150["m_srcTableName"] = "Pres - Por Sector";
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
$proto150["m_columns"][] = "candidato13";
$proto150["m_columns"][] = "candidato14";
$proto150["m_columns"][] = "candidato15";
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
$proto149["m_sql"] = "voto_presidente as p";
$proto149["m_alias"] = "p";
$proto149["m_srcTableName"] = "Pres - Por Sector";
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
$proto154["m_srcTableName"] = "Pres - Por Sector";
$proto154["m_columns"] = array();
$proto154["m_columns"][] = "id_distrito";
$proto154["m_columns"][] = "id_sector";
$proto154["m_columns"][] = "id_urna";
$proto154["m_columns"][] = "nombre_centro";
$proto154["m_columns"][] = "ubicación";
$proto154["m_columns"][] = "votantes";
$obj = new SQLTable($proto154);

$proto153["m_table"] = $obj;
$proto153["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto153["m_alias"] = "u";
$proto153["m_srcTableName"] = "Pres - Por Sector";
$proto155=array();
$proto155["m_sql"] = "p.id_urna = u.id_urna";
$proto155["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
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
$proto137["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto137);

$proto136["m_sql"] = "(select concat(sum(p.candidato7), \" (\", ROUND((((sum(p.candidato7)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto136["m_srcTableName"] = "Pres - Por Sector";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "LIBRE";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto157=array();
			$proto158=array();
$proto158["m_strHead"] = "select";
$proto158["m_strFieldList"] = "concat(sum(p.candidato8), \" (\", ROUND((((sum(p.candidato8)/(sum(validos))))*100),1), \"%)\")";
$proto158["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
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
	"m_srcTableName" => "Pres - Por Sector"
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
	"m_sql" => "sum(p.candidato8)"
));

$proto165["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto165["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato8)/(sum(validos))))*100),1)"
));

$proto165["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto165["m_arguments"][]=$obj;
$proto165["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto165);

$proto164["m_sql"] = "concat(sum(p.candidato8), \" (\", ROUND((((sum(p.candidato8)/(sum(validos))))*100),1), \"%)\")";
$proto164["m_srcTableName"] = "Pres - Por Sector";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto158["m_fieldlist"][]=$obj;
$proto158["m_fromlist"] = array();
												$proto170=array();
$proto170["m_link"] = "SQLL_MAIN";
			$proto171=array();
$proto171["m_strName"] = "voto_presidente";
$proto171["m_srcTableName"] = "Pres - Por Sector";
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
$proto171["m_columns"][] = "candidato13";
$proto171["m_columns"][] = "candidato14";
$proto171["m_columns"][] = "candidato15";
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
$proto170["m_sql"] = "voto_presidente as p";
$proto170["m_alias"] = "p";
$proto170["m_srcTableName"] = "Pres - Por Sector";
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
$proto175["m_srcTableName"] = "Pres - Por Sector";
$proto175["m_columns"] = array();
$proto175["m_columns"][] = "id_distrito";
$proto175["m_columns"][] = "id_sector";
$proto175["m_columns"][] = "id_urna";
$proto175["m_columns"][] = "nombre_centro";
$proto175["m_columns"][] = "ubicación";
$proto175["m_columns"][] = "votantes";
$obj = new SQLTable($proto175);

$proto174["m_table"] = $obj;
$proto174["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto174["m_alias"] = "u";
$proto174["m_srcTableName"] = "Pres - Por Sector";
$proto176=array();
$proto176["m_sql"] = "p.id_urna = u.id_urna";
$proto176["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
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
$proto158["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto158);

$proto157["m_sql"] = "(select concat(sum(p.candidato8), \" (\", ROUND((((sum(p.candidato8)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto157["m_srcTableName"] = "Pres - Por Sector";
$proto157["m_expr"]=$obj;
$proto157["m_alias"] = "PSH";
$obj = new SQLFieldListItem($proto157);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$proto179=array();
$proto179["m_strHead"] = "select";
$proto179["m_strFieldList"] = "concat(sum(p.candidato9), \" (\", ROUND((((sum(p.candidato9)/(sum(validos))))*100),1), \"%)\")";
$proto179["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
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
	"m_srcTableName" => "Pres - Por Sector"
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
	"m_sql" => "sum(p.candidato9)"
));

$proto186["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto186["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato9)/(sum(validos))))*100),1)"
));

$proto186["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto186["m_arguments"][]=$obj;
$proto186["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto186);

$proto185["m_sql"] = "concat(sum(p.candidato9), \" (\", ROUND((((sum(p.candidato9)/(sum(validos))))*100),1), \"%)\")";
$proto185["m_srcTableName"] = "Pres - Por Sector";
$proto185["m_expr"]=$obj;
$proto185["m_alias"] = "";
$obj = new SQLFieldListItem($proto185);

$proto179["m_fieldlist"][]=$obj;
$proto179["m_fromlist"] = array();
												$proto191=array();
$proto191["m_link"] = "SQLL_MAIN";
			$proto192=array();
$proto192["m_strName"] = "voto_presidente";
$proto192["m_srcTableName"] = "Pres - Por Sector";
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
$proto192["m_columns"][] = "candidato13";
$proto192["m_columns"][] = "candidato14";
$proto192["m_columns"][] = "candidato15";
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
$proto191["m_sql"] = "voto_presidente as p";
$proto191["m_alias"] = "p";
$proto191["m_srcTableName"] = "Pres - Por Sector";
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
$proto196["m_srcTableName"] = "Pres - Por Sector";
$proto196["m_columns"] = array();
$proto196["m_columns"][] = "id_distrito";
$proto196["m_columns"][] = "id_sector";
$proto196["m_columns"][] = "id_urna";
$proto196["m_columns"][] = "nombre_centro";
$proto196["m_columns"][] = "ubicación";
$proto196["m_columns"][] = "votantes";
$obj = new SQLTable($proto196);

$proto195["m_table"] = $obj;
$proto195["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto195["m_alias"] = "u";
$proto195["m_srcTableName"] = "Pres - Por Sector";
$proto197=array();
$proto197["m_sql"] = "p.id_urna = u.id_urna";
$proto197["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
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
$proto179["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto179);

$proto178["m_sql"] = "(select concat(sum(p.candidato9), \" (\", ROUND((((sum(p.candidato9)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto178["m_srcTableName"] = "Pres - Por Sector";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "LIDEHR";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto199=array();
			$proto200=array();
$proto200["m_strHead"] = "select";
$proto200["m_strFieldList"] = "concat(sum(p.candidato10), \" (\", ROUND((((sum(p.candidato10)/(sum(validos))))*100),1), \"%)\")";
$proto200["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
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
	"m_srcTableName" => "Pres - Por Sector"
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
	"m_sql" => "sum(p.candidato10)"
));

$proto207["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto207["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato10)/(sum(validos))))*100),1)"
));

$proto207["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto207["m_arguments"][]=$obj;
$proto207["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto207);

$proto206["m_sql"] = "concat(sum(p.candidato10), \" (\", ROUND((((sum(p.candidato10)/(sum(validos))))*100),1), \"%)\")";
$proto206["m_srcTableName"] = "Pres - Por Sector";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto200["m_fieldlist"][]=$obj;
$proto200["m_fromlist"] = array();
												$proto212=array();
$proto212["m_link"] = "SQLL_MAIN";
			$proto213=array();
$proto213["m_strName"] = "voto_presidente";
$proto213["m_srcTableName"] = "Pres - Por Sector";
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
$proto213["m_columns"][] = "candidato13";
$proto213["m_columns"][] = "candidato14";
$proto213["m_columns"][] = "candidato15";
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
$proto212["m_sql"] = "voto_presidente as p";
$proto212["m_alias"] = "p";
$proto212["m_srcTableName"] = "Pres - Por Sector";
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
$proto217["m_srcTableName"] = "Pres - Por Sector";
$proto217["m_columns"] = array();
$proto217["m_columns"][] = "id_distrito";
$proto217["m_columns"][] = "id_sector";
$proto217["m_columns"][] = "id_urna";
$proto217["m_columns"][] = "nombre_centro";
$proto217["m_columns"][] = "ubicación";
$proto217["m_columns"][] = "votantes";
$obj = new SQLTable($proto217);

$proto216["m_table"] = $obj;
$proto216["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto216["m_alias"] = "u";
$proto216["m_srcTableName"] = "Pres - Por Sector";
$proto218=array();
$proto218["m_sql"] = "p.id_urna = u.id_urna";
$proto218["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
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
$proto200["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto200);

$proto199["m_sql"] = "(select concat(sum(p.candidato10), \" (\", ROUND((((sum(p.candidato10)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto199["m_srcTableName"] = "Pres - Por Sector";
$proto199["m_expr"]=$obj;
$proto199["m_alias"] = "UD";
$obj = new SQLFieldListItem($proto199);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$proto221=array();
$proto221["m_strHead"] = "select";
$proto221["m_strFieldList"] = "concat(sum(p.candidato11), \" (\", ROUND((((sum(p.candidato11)/(sum(validos))))*100),1), \"%)\")";
$proto221["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
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
	"m_srcTableName" => "Pres - Por Sector"
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
	"m_sql" => "sum(p.candidato11)"
));

$proto228["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto228["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato11)/(sum(validos))))*100),1)"
));

$proto228["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto228["m_arguments"][]=$obj;
$proto228["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto228);

$proto227["m_sql"] = "concat(sum(p.candidato11), \" (\", ROUND((((sum(p.candidato11)/(sum(validos))))*100),1), \"%)\")";
$proto227["m_srcTableName"] = "Pres - Por Sector";
$proto227["m_expr"]=$obj;
$proto227["m_alias"] = "";
$obj = new SQLFieldListItem($proto227);

$proto221["m_fieldlist"][]=$obj;
$proto221["m_fromlist"] = array();
												$proto233=array();
$proto233["m_link"] = "SQLL_MAIN";
			$proto234=array();
$proto234["m_strName"] = "voto_presidente";
$proto234["m_srcTableName"] = "Pres - Por Sector";
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
$proto234["m_columns"][] = "candidato13";
$proto234["m_columns"][] = "candidato14";
$proto234["m_columns"][] = "candidato15";
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
$proto233["m_sql"] = "voto_presidente as p";
$proto233["m_alias"] = "p";
$proto233["m_srcTableName"] = "Pres - Por Sector";
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
$proto238["m_srcTableName"] = "Pres - Por Sector";
$proto238["m_columns"] = array();
$proto238["m_columns"][] = "id_distrito";
$proto238["m_columns"][] = "id_sector";
$proto238["m_columns"][] = "id_urna";
$proto238["m_columns"][] = "nombre_centro";
$proto238["m_columns"][] = "ubicación";
$proto238["m_columns"][] = "votantes";
$obj = new SQLTable($proto238);

$proto237["m_table"] = $obj;
$proto237["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto237["m_alias"] = "u";
$proto237["m_srcTableName"] = "Pres - Por Sector";
$proto239=array();
$proto239["m_sql"] = "p.id_urna = u.id_urna";
$proto239["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
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
$proto221["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto221);

$proto220["m_sql"] = "(select concat(sum(p.candidato11), \" (\", ROUND((((sum(p.candidato11)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto220["m_srcTableName"] = "Pres - Por Sector";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "DC";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto241=array();
			$proto242=array();
$proto242["m_strHead"] = "select";
$proto242["m_strFieldList"] = "concat(sum(p.candidato12), \" (\", ROUND((((sum(p.candidato12)/(sum(validos))))*100),1), \"%)\")";
$proto242["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
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
	"m_srcTableName" => "Pres - Por Sector"
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
	"m_sql" => "sum(p.candidato12)"
));

$proto249["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto249["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato12)/(sum(validos))))*100),1)"
));

$proto249["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto249["m_arguments"][]=$obj;
$proto249["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto249);

$proto248["m_sql"] = "concat(sum(p.candidato12), \" (\", ROUND((((sum(p.candidato12)/(sum(validos))))*100),1), \"%)\")";
$proto248["m_srcTableName"] = "Pres - Por Sector";
$proto248["m_expr"]=$obj;
$proto248["m_alias"] = "";
$obj = new SQLFieldListItem($proto248);

$proto242["m_fieldlist"][]=$obj;
$proto242["m_fromlist"] = array();
												$proto254=array();
$proto254["m_link"] = "SQLL_MAIN";
			$proto255=array();
$proto255["m_strName"] = "voto_presidente";
$proto255["m_srcTableName"] = "Pres - Por Sector";
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
$proto255["m_columns"][] = "candidato13";
$proto255["m_columns"][] = "candidato14";
$proto255["m_columns"][] = "candidato15";
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
$proto254["m_sql"] = "voto_presidente as p";
$proto254["m_alias"] = "p";
$proto254["m_srcTableName"] = "Pres - Por Sector";
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
$proto259["m_srcTableName"] = "Pres - Por Sector";
$proto259["m_columns"] = array();
$proto259["m_columns"][] = "id_distrito";
$proto259["m_columns"][] = "id_sector";
$proto259["m_columns"][] = "id_urna";
$proto259["m_columns"][] = "nombre_centro";
$proto259["m_columns"][] = "ubicación";
$proto259["m_columns"][] = "votantes";
$obj = new SQLTable($proto259);

$proto258["m_table"] = $obj;
$proto258["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto258["m_alias"] = "u";
$proto258["m_srcTableName"] = "Pres - Por Sector";
$proto260=array();
$proto260["m_sql"] = "p.id_urna = u.id_urna";
$proto260["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
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
$proto242["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto242);

$proto241["m_sql"] = "(select concat(sum(p.candidato12), \" (\", ROUND((((sum(p.candidato12)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto241["m_srcTableName"] = "Pres - Por Sector";
$proto241["m_expr"]=$obj;
$proto241["m_alias"] = "TSH";
$obj = new SQLFieldListItem($proto241);

$proto0["m_fieldlist"][]=$obj;
						$proto262=array();
			$proto263=array();
$proto263["m_strHead"] = "select";
$proto263["m_strFieldList"] = "concat(sum(p.candidato13), \" (\", ROUND((((sum(p.candidato13)/(sum(validos))))*100),1), \"%)\")";
$proto263["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
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
	"m_srcTableName" => "Pres - Por Sector"
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
	"m_sql" => "sum(p.candidato13)"
));

$proto270["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto270["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato13)/(sum(validos))))*100),1)"
));

$proto270["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto270["m_arguments"][]=$obj;
$proto270["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto270);

$proto269["m_sql"] = "concat(sum(p.candidato13), \" (\", ROUND((((sum(p.candidato13)/(sum(validos))))*100),1), \"%)\")";
$proto269["m_srcTableName"] = "Pres - Por Sector";
$proto269["m_expr"]=$obj;
$proto269["m_alias"] = "";
$obj = new SQLFieldListItem($proto269);

$proto263["m_fieldlist"][]=$obj;
$proto263["m_fromlist"] = array();
												$proto275=array();
$proto275["m_link"] = "SQLL_MAIN";
			$proto276=array();
$proto276["m_strName"] = "voto_presidente";
$proto276["m_srcTableName"] = "Pres - Por Sector";
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
$proto276["m_columns"][] = "candidato13";
$proto276["m_columns"][] = "candidato14";
$proto276["m_columns"][] = "candidato15";
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
$proto275["m_sql"] = "voto_presidente as p";
$proto275["m_alias"] = "p";
$proto275["m_srcTableName"] = "Pres - Por Sector";
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
$proto280["m_srcTableName"] = "Pres - Por Sector";
$proto280["m_columns"] = array();
$proto280["m_columns"][] = "id_distrito";
$proto280["m_columns"][] = "id_sector";
$proto280["m_columns"][] = "id_urna";
$proto280["m_columns"][] = "nombre_centro";
$proto280["m_columns"][] = "ubicación";
$proto280["m_columns"][] = "votantes";
$obj = new SQLTable($proto280);

$proto279["m_table"] = $obj;
$proto279["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto279["m_alias"] = "u";
$proto279["m_srcTableName"] = "Pres - Por Sector";
$proto281=array();
$proto281["m_sql"] = "p.id_urna = u.id_urna";
$proto281["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
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
$proto263["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto263);

$proto262["m_sql"] = "(select concat(sum(p.candidato13), \" (\", ROUND((((sum(p.candidato13)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto262["m_srcTableName"] = "Pres - Por Sector";
$proto262["m_expr"]=$obj;
$proto262["m_alias"] = "HON_HUMANA";
$obj = new SQLFieldListItem($proto262);

$proto0["m_fieldlist"][]=$obj;
						$proto283=array();
			$proto284=array();
$proto284["m_strHead"] = "select";
$proto284["m_strFieldList"] = "concat(sum(p.candidato14), \" (\", ROUND((((sum(p.candidato14)/(sum(validos))))*100),1), \"%)\")";
$proto284["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
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
	"m_srcTableName" => "Pres - Por Sector"
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
$proto291["m_functiontype"] = "SQLF_CUSTOM";
$proto291["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato14)"
));

$proto291["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto291["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato14)/(sum(validos))))*100),1)"
));

$proto291["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto291["m_arguments"][]=$obj;
$proto291["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto291);

$proto290["m_sql"] = "concat(sum(p.candidato14), \" (\", ROUND((((sum(p.candidato14)/(sum(validos))))*100),1), \"%)\")";
$proto290["m_srcTableName"] = "Pres - Por Sector";
$proto290["m_expr"]=$obj;
$proto290["m_alias"] = "";
$obj = new SQLFieldListItem($proto290);

$proto284["m_fieldlist"][]=$obj;
$proto284["m_fromlist"] = array();
												$proto296=array();
$proto296["m_link"] = "SQLL_MAIN";
			$proto297=array();
$proto297["m_strName"] = "voto_presidente";
$proto297["m_srcTableName"] = "Pres - Por Sector";
$proto297["m_columns"] = array();
$proto297["m_columns"][] = "elecciones";
$proto297["m_columns"][] = "id_urna";
$proto297["m_columns"][] = "candidato1";
$proto297["m_columns"][] = "candidato2";
$proto297["m_columns"][] = "candidato3";
$proto297["m_columns"][] = "candidato4";
$proto297["m_columns"][] = "candidato5";
$proto297["m_columns"][] = "candidato6";
$proto297["m_columns"][] = "candidato7";
$proto297["m_columns"][] = "candidato8";
$proto297["m_columns"][] = "candidato9";
$proto297["m_columns"][] = "candidato10";
$proto297["m_columns"][] = "candidato11";
$proto297["m_columns"][] = "candidato12";
$proto297["m_columns"][] = "candidato13";
$proto297["m_columns"][] = "candidato14";
$proto297["m_columns"][] = "candidato15";
$proto297["m_columns"][] = "validos";
$proto297["m_columns"][] = "blancos";
$proto297["m_columns"][] = "nulos";
$proto297["m_columns"][] = "utilizados";
$proto297["m_columns"][] = "no_utilizados";
$proto297["m_columns"][] = "total";
$proto297["m_columns"][] = "usuario";
$proto297["m_columns"][] = "fecha";
$proto297["m_columns"][] = "editado_por";
$proto297["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto297);

$proto296["m_table"] = $obj;
$proto296["m_sql"] = "voto_presidente as p";
$proto296["m_alias"] = "p";
$proto296["m_srcTableName"] = "Pres - Por Sector";
$proto298=array();
$proto298["m_sql"] = "";
$proto298["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto298["m_column"]=$obj;
$proto298["m_contained"] = array();
$proto298["m_strCase"] = "";
$proto298["m_havingmode"] = false;
$proto298["m_inBrackets"] = false;
$proto298["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto298);

$proto296["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto296);

$proto284["m_fromlist"][]=$obj;
												$proto300=array();
$proto300["m_link"] = "SQLL_INNERJOIN";
			$proto301=array();
$proto301["m_strName"] = "urna";
$proto301["m_srcTableName"] = "Pres - Por Sector";
$proto301["m_columns"] = array();
$proto301["m_columns"][] = "id_distrito";
$proto301["m_columns"][] = "id_sector";
$proto301["m_columns"][] = "id_urna";
$proto301["m_columns"][] = "nombre_centro";
$proto301["m_columns"][] = "ubicación";
$proto301["m_columns"][] = "votantes";
$obj = new SQLTable($proto301);

$proto300["m_table"] = $obj;
$proto300["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto300["m_alias"] = "u";
$proto300["m_srcTableName"] = "Pres - Por Sector";
$proto302=array();
$proto302["m_sql"] = "p.id_urna = u.id_urna";
$proto302["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto302["m_column"]=$obj;
$proto302["m_contained"] = array();
$proto302["m_strCase"] = "= u.id_urna";
$proto302["m_havingmode"] = false;
$proto302["m_inBrackets"] = false;
$proto302["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto302);

$proto300["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto300);

$proto284["m_fromlist"][]=$obj;
$proto284["m_groupby"] = array();
$proto284["m_orderby"] = array();
$proto284["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto284);

$proto283["m_sql"] = "(select concat(sum(p.candidato14), \" (\", ROUND((((sum(p.candidato14)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto283["m_srcTableName"] = "Pres - Por Sector";
$proto283["m_expr"]=$obj;
$proto283["m_alias"] = "LIBERAL";
$obj = new SQLFieldListItem($proto283);

$proto0["m_fieldlist"][]=$obj;
						$proto304=array();
			$proto305=array();
$proto305["m_strHead"] = "select";
$proto305["m_strFieldList"] = "concat(sum(p.candidato15), \" (\", ROUND((((sum(p.candidato15)/(sum(validos))))*100),1), \"%)\")";
$proto305["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto305["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto305["m_strOrderBy"] = "";
	
		;
			$proto305["cipherer"] = null;
$proto307=array();
$proto307["m_sql"] = "u.id_sector = ur.id_sector";
$proto307["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto307["m_column"]=$obj;
$proto307["m_contained"] = array();
$proto307["m_strCase"] = "= ur.id_sector";
$proto307["m_havingmode"] = false;
$proto307["m_inBrackets"] = false;
$proto307["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto307);

$proto305["m_where"] = $obj;
$proto309=array();
$proto309["m_sql"] = "";
$proto309["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto309["m_column"]=$obj;
$proto309["m_contained"] = array();
$proto309["m_strCase"] = "";
$proto309["m_havingmode"] = false;
$proto309["m_inBrackets"] = false;
$proto309["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto309);

$proto305["m_having"] = $obj;
$proto305["m_fieldlist"] = array();
						$proto311=array();
			$proto312=array();
$proto312["m_functiontype"] = "SQLF_CUSTOM";
$proto312["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato15)"
));

$proto312["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto312["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato15)/(sum(validos))))*100),1)"
));

$proto312["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto312["m_arguments"][]=$obj;
$proto312["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto312);

$proto311["m_sql"] = "concat(sum(p.candidato15), \" (\", ROUND((((sum(p.candidato15)/(sum(validos))))*100),1), \"%)\")";
$proto311["m_srcTableName"] = "Pres - Por Sector";
$proto311["m_expr"]=$obj;
$proto311["m_alias"] = "";
$obj = new SQLFieldListItem($proto311);

$proto305["m_fieldlist"][]=$obj;
$proto305["m_fromlist"] = array();
												$proto317=array();
$proto317["m_link"] = "SQLL_MAIN";
			$proto318=array();
$proto318["m_strName"] = "voto_presidente";
$proto318["m_srcTableName"] = "Pres - Por Sector";
$proto318["m_columns"] = array();
$proto318["m_columns"][] = "elecciones";
$proto318["m_columns"][] = "id_urna";
$proto318["m_columns"][] = "candidato1";
$proto318["m_columns"][] = "candidato2";
$proto318["m_columns"][] = "candidato3";
$proto318["m_columns"][] = "candidato4";
$proto318["m_columns"][] = "candidato5";
$proto318["m_columns"][] = "candidato6";
$proto318["m_columns"][] = "candidato7";
$proto318["m_columns"][] = "candidato8";
$proto318["m_columns"][] = "candidato9";
$proto318["m_columns"][] = "candidato10";
$proto318["m_columns"][] = "candidato11";
$proto318["m_columns"][] = "candidato12";
$proto318["m_columns"][] = "candidato13";
$proto318["m_columns"][] = "candidato14";
$proto318["m_columns"][] = "candidato15";
$proto318["m_columns"][] = "validos";
$proto318["m_columns"][] = "blancos";
$proto318["m_columns"][] = "nulos";
$proto318["m_columns"][] = "utilizados";
$proto318["m_columns"][] = "no_utilizados";
$proto318["m_columns"][] = "total";
$proto318["m_columns"][] = "usuario";
$proto318["m_columns"][] = "fecha";
$proto318["m_columns"][] = "editado_por";
$proto318["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto318);

$proto317["m_table"] = $obj;
$proto317["m_sql"] = "voto_presidente as p";
$proto317["m_alias"] = "p";
$proto317["m_srcTableName"] = "Pres - Por Sector";
$proto319=array();
$proto319["m_sql"] = "";
$proto319["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto319["m_column"]=$obj;
$proto319["m_contained"] = array();
$proto319["m_strCase"] = "";
$proto319["m_havingmode"] = false;
$proto319["m_inBrackets"] = false;
$proto319["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto319);

$proto317["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto317);

$proto305["m_fromlist"][]=$obj;
												$proto321=array();
$proto321["m_link"] = "SQLL_INNERJOIN";
			$proto322=array();
$proto322["m_strName"] = "urna";
$proto322["m_srcTableName"] = "Pres - Por Sector";
$proto322["m_columns"] = array();
$proto322["m_columns"][] = "id_distrito";
$proto322["m_columns"][] = "id_sector";
$proto322["m_columns"][] = "id_urna";
$proto322["m_columns"][] = "nombre_centro";
$proto322["m_columns"][] = "ubicación";
$proto322["m_columns"][] = "votantes";
$obj = new SQLTable($proto322);

$proto321["m_table"] = $obj;
$proto321["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto321["m_alias"] = "u";
$proto321["m_srcTableName"] = "Pres - Por Sector";
$proto323=array();
$proto323["m_sql"] = "p.id_urna = u.id_urna";
$proto323["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto323["m_column"]=$obj;
$proto323["m_contained"] = array();
$proto323["m_strCase"] = "= u.id_urna";
$proto323["m_havingmode"] = false;
$proto323["m_inBrackets"] = false;
$proto323["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto323);

$proto321["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto321);

$proto305["m_fromlist"][]=$obj;
$proto305["m_groupby"] = array();
$proto305["m_orderby"] = array();
$proto305["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto305);

$proto304["m_sql"] = "(select concat(sum(p.candidato15), \" (\", ROUND((((sum(p.candidato15)/(sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto304["m_srcTableName"] = "Pres - Por Sector";
$proto304["m_expr"]=$obj;
$proto304["m_alias"] = "NACIONAL";
$obj = new SQLFieldListItem($proto304);

$proto0["m_fieldlist"][]=$obj;
						$proto325=array();
			$proto326=array();
$proto326["m_strHead"] = "select";
$proto326["m_strFieldList"] = "concat(((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)) + (sum(p.candidato4)) + (sum(p.candidato5)) + (sum(p.candidato6)) + (sum(p.candidato8))   + (sum(p.candidato9)) + (sum(p.candidato10)) + (sum(p.candidato11)) + (sum(p.candidato12)) + (sum(p.candidato13))), \" (\", ROUND((((((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)) + (sum(p.candidato4)) + (sum(p.candidato5)) + (sum(p.candidato6)) + (sum(p.candidato8))   + (sum(p.candidato9)) + (sum(p.candidato10)) + (sum(p.candidato11)) + (sum(p.candidato12)) + (sum(p.candidato13))) / (sum(validos))))*100),1), \"%)\")";
$proto326["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto326["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto326["m_strOrderBy"] = "";
	
		;
			$proto326["cipherer"] = null;
$proto328=array();
$proto328["m_sql"] = "u.id_sector = ur.id_sector";
$proto328["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto328["m_column"]=$obj;
$proto328["m_contained"] = array();
$proto328["m_strCase"] = "= ur.id_sector";
$proto328["m_havingmode"] = false;
$proto328["m_inBrackets"] = false;
$proto328["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto328);

$proto326["m_where"] = $obj;
$proto330=array();
$proto330["m_sql"] = "";
$proto330["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto330["m_column"]=$obj;
$proto330["m_contained"] = array();
$proto330["m_strCase"] = "";
$proto330["m_havingmode"] = false;
$proto330["m_inBrackets"] = false;
$proto330["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto330);

$proto326["m_having"] = $obj;
$proto326["m_fieldlist"] = array();
						$proto332=array();
			$proto333=array();
$proto333["m_functiontype"] = "SQLF_CUSTOM";
$proto333["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)) + (sum(p.candidato4)) + (sum(p.candidato5)) + (sum(p.candidato6)) + (sum(p.candidato8))   + (sum(p.candidato9)) + (sum(p.candidato10)) + (sum(p.candidato11)) + (sum(p.candidato12)) + (sum(p.candidato13)))"
));

$proto333["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" (\""
));

$proto333["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)) + (sum(p.candidato4)) + (sum(p.candidato5)) + (sum(p.candidato6)) + (sum(p.candidato8))   + (sum(p.candidato9)) + (sum(p.candidato10)) + (sum(p.candidato11)) + (sum(p.candidato12)) + (sum(p.candidato13))) / (sum(validos))))*100),1)"
));

$proto333["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto333["m_arguments"][]=$obj;
$proto333["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto333);

$proto332["m_sql"] = "concat(((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)) + (sum(p.candidato4)) + (sum(p.candidato5)) + (sum(p.candidato6)) + (sum(p.candidato8))   + (sum(p.candidato9)) + (sum(p.candidato10)) + (sum(p.candidato11)) + (sum(p.candidato12)) + (sum(p.candidato13))), \" (\", ROUND((((((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)) + (sum(p.candidato4)) + (sum(p.candidato5)) + (sum(p.candidato6)) + (sum(p.candidato8))   + (sum(p.candidato9)) + (sum(p.candidato10)) + (sum(p.candidato11)) + (sum(p.candidato12)) + (sum(p.candidato13))) / (sum(validos))))*100),1), \"%)\")";
$proto332["m_srcTableName"] = "Pres - Por Sector";
$proto332["m_expr"]=$obj;
$proto332["m_alias"] = "";
$obj = new SQLFieldListItem($proto332);

$proto326["m_fieldlist"][]=$obj;
$proto326["m_fromlist"] = array();
												$proto338=array();
$proto338["m_link"] = "SQLL_MAIN";
			$proto339=array();
$proto339["m_strName"] = "voto_presidente";
$proto339["m_srcTableName"] = "Pres - Por Sector";
$proto339["m_columns"] = array();
$proto339["m_columns"][] = "elecciones";
$proto339["m_columns"][] = "id_urna";
$proto339["m_columns"][] = "candidato1";
$proto339["m_columns"][] = "candidato2";
$proto339["m_columns"][] = "candidato3";
$proto339["m_columns"][] = "candidato4";
$proto339["m_columns"][] = "candidato5";
$proto339["m_columns"][] = "candidato6";
$proto339["m_columns"][] = "candidato7";
$proto339["m_columns"][] = "candidato8";
$proto339["m_columns"][] = "candidato9";
$proto339["m_columns"][] = "candidato10";
$proto339["m_columns"][] = "candidato11";
$proto339["m_columns"][] = "candidato12";
$proto339["m_columns"][] = "candidato13";
$proto339["m_columns"][] = "candidato14";
$proto339["m_columns"][] = "candidato15";
$proto339["m_columns"][] = "validos";
$proto339["m_columns"][] = "blancos";
$proto339["m_columns"][] = "nulos";
$proto339["m_columns"][] = "utilizados";
$proto339["m_columns"][] = "no_utilizados";
$proto339["m_columns"][] = "total";
$proto339["m_columns"][] = "usuario";
$proto339["m_columns"][] = "fecha";
$proto339["m_columns"][] = "editado_por";
$proto339["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto339);

$proto338["m_table"] = $obj;
$proto338["m_sql"] = "voto_presidente as p";
$proto338["m_alias"] = "p";
$proto338["m_srcTableName"] = "Pres - Por Sector";
$proto340=array();
$proto340["m_sql"] = "";
$proto340["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto340["m_column"]=$obj;
$proto340["m_contained"] = array();
$proto340["m_strCase"] = "";
$proto340["m_havingmode"] = false;
$proto340["m_inBrackets"] = false;
$proto340["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto340);

$proto338["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto338);

$proto326["m_fromlist"][]=$obj;
												$proto342=array();
$proto342["m_link"] = "SQLL_INNERJOIN";
			$proto343=array();
$proto343["m_strName"] = "urna";
$proto343["m_srcTableName"] = "Pres - Por Sector";
$proto343["m_columns"] = array();
$proto343["m_columns"][] = "id_distrito";
$proto343["m_columns"][] = "id_sector";
$proto343["m_columns"][] = "id_urna";
$proto343["m_columns"][] = "nombre_centro";
$proto343["m_columns"][] = "ubicación";
$proto343["m_columns"][] = "votantes";
$obj = new SQLTable($proto343);

$proto342["m_table"] = $obj;
$proto342["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto342["m_alias"] = "u";
$proto342["m_srcTableName"] = "Pres - Por Sector";
$proto344=array();
$proto344["m_sql"] = "p.id_urna = u.id_urna";
$proto344["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto344["m_column"]=$obj;
$proto344["m_contained"] = array();
$proto344["m_strCase"] = "= u.id_urna";
$proto344["m_havingmode"] = false;
$proto344["m_inBrackets"] = false;
$proto344["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto344);

$proto342["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto342);

$proto326["m_fromlist"][]=$obj;
$proto326["m_groupby"] = array();
$proto326["m_orderby"] = array();
$proto326["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto326);

$proto325["m_sql"] = "(select concat(((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)) + (sum(p.candidato4)) + (sum(p.candidato5)) + (sum(p.candidato6)) + (sum(p.candidato8))   + (sum(p.candidato9)) + (sum(p.candidato10)) + (sum(p.candidato11)) + (sum(p.candidato12)) + (sum(p.candidato13))), \" (\", ROUND((((((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)) + (sum(p.candidato4)) + (sum(p.candidato5)) + (sum(p.candidato6)) + (sum(p.candidato8))   + (sum(p.candidato9)) + (sum(p.candidato10)) + (sum(p.candidato11)) + (sum(p.candidato12)) + (sum(p.candidato13))) / (sum(validos))))*100),1), \"%)\")  from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto325["m_srcTableName"] = "Pres - Por Sector";
$proto325["m_expr"]=$obj;
$proto325["m_alias"] = "Otros";
$obj = new SQLFieldListItem($proto325);

$proto0["m_fieldlist"][]=$obj;
						$proto346=array();
			$proto347=array();
$proto347["m_strHead"] = "select";
$proto347["m_strFieldList"] = "sum(p.validos)";
$proto347["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto347["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto347["m_strOrderBy"] = "";
	
		;
			$proto347["cipherer"] = null;
$proto349=array();
$proto349["m_sql"] = "u.id_sector = ur.id_sector";
$proto349["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto349["m_column"]=$obj;
$proto349["m_contained"] = array();
$proto349["m_strCase"] = "= ur.id_sector";
$proto349["m_havingmode"] = false;
$proto349["m_inBrackets"] = false;
$proto349["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto349);

$proto347["m_where"] = $obj;
$proto351=array();
$proto351["m_sql"] = "";
$proto351["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto351["m_column"]=$obj;
$proto351["m_contained"] = array();
$proto351["m_strCase"] = "";
$proto351["m_havingmode"] = false;
$proto351["m_inBrackets"] = false;
$proto351["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto351);

$proto347["m_having"] = $obj;
$proto347["m_fieldlist"] = array();
						$proto353=array();
			$proto354=array();
$proto354["m_functiontype"] = "SQLF_SUM";
$proto354["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "validos",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto354["m_arguments"][]=$obj;
$proto354["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto354);

$proto353["m_sql"] = "sum(p.validos)";
$proto353["m_srcTableName"] = "Pres - Por Sector";
$proto353["m_expr"]=$obj;
$proto353["m_alias"] = "";
$obj = new SQLFieldListItem($proto353);

$proto347["m_fieldlist"][]=$obj;
$proto347["m_fromlist"] = array();
												$proto356=array();
$proto356["m_link"] = "SQLL_MAIN";
			$proto357=array();
$proto357["m_strName"] = "voto_presidente";
$proto357["m_srcTableName"] = "Pres - Por Sector";
$proto357["m_columns"] = array();
$proto357["m_columns"][] = "elecciones";
$proto357["m_columns"][] = "id_urna";
$proto357["m_columns"][] = "candidato1";
$proto357["m_columns"][] = "candidato2";
$proto357["m_columns"][] = "candidato3";
$proto357["m_columns"][] = "candidato4";
$proto357["m_columns"][] = "candidato5";
$proto357["m_columns"][] = "candidato6";
$proto357["m_columns"][] = "candidato7";
$proto357["m_columns"][] = "candidato8";
$proto357["m_columns"][] = "candidato9";
$proto357["m_columns"][] = "candidato10";
$proto357["m_columns"][] = "candidato11";
$proto357["m_columns"][] = "candidato12";
$proto357["m_columns"][] = "candidato13";
$proto357["m_columns"][] = "candidato14";
$proto357["m_columns"][] = "candidato15";
$proto357["m_columns"][] = "validos";
$proto357["m_columns"][] = "blancos";
$proto357["m_columns"][] = "nulos";
$proto357["m_columns"][] = "utilizados";
$proto357["m_columns"][] = "no_utilizados";
$proto357["m_columns"][] = "total";
$proto357["m_columns"][] = "usuario";
$proto357["m_columns"][] = "fecha";
$proto357["m_columns"][] = "editado_por";
$proto357["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto357);

$proto356["m_table"] = $obj;
$proto356["m_sql"] = "voto_presidente as p";
$proto356["m_alias"] = "p";
$proto356["m_srcTableName"] = "Pres - Por Sector";
$proto358=array();
$proto358["m_sql"] = "";
$proto358["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto358["m_column"]=$obj;
$proto358["m_contained"] = array();
$proto358["m_strCase"] = "";
$proto358["m_havingmode"] = false;
$proto358["m_inBrackets"] = false;
$proto358["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto358);

$proto356["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto356);

$proto347["m_fromlist"][]=$obj;
												$proto360=array();
$proto360["m_link"] = "SQLL_INNERJOIN";
			$proto361=array();
$proto361["m_strName"] = "urna";
$proto361["m_srcTableName"] = "Pres - Por Sector";
$proto361["m_columns"] = array();
$proto361["m_columns"][] = "id_distrito";
$proto361["m_columns"][] = "id_sector";
$proto361["m_columns"][] = "id_urna";
$proto361["m_columns"][] = "nombre_centro";
$proto361["m_columns"][] = "ubicación";
$proto361["m_columns"][] = "votantes";
$obj = new SQLTable($proto361);

$proto360["m_table"] = $obj;
$proto360["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto360["m_alias"] = "u";
$proto360["m_srcTableName"] = "Pres - Por Sector";
$proto362=array();
$proto362["m_sql"] = "p.id_urna = u.id_urna";
$proto362["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto362["m_column"]=$obj;
$proto362["m_contained"] = array();
$proto362["m_strCase"] = "= u.id_urna";
$proto362["m_havingmode"] = false;
$proto362["m_inBrackets"] = false;
$proto362["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto362);

$proto360["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto360);

$proto347["m_fromlist"][]=$obj;
$proto347["m_groupby"] = array();
$proto347["m_orderby"] = array();
$proto347["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto347);

$proto346["m_sql"] = "(select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto346["m_srcTableName"] = "Pres - Por Sector";
$proto346["m_expr"]=$obj;
$proto346["m_alias"] = "Validos";
$obj = new SQLFieldListItem($proto346);

$proto0["m_fieldlist"][]=$obj;
						$proto364=array();
			$proto365=array();
$proto365["m_strHead"] = "select";
$proto365["m_strFieldList"] = "sum(p.blancos)";
$proto365["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto365["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto365["m_strOrderBy"] = "";
	
		;
			$proto365["cipherer"] = null;
$proto367=array();
$proto367["m_sql"] = "u.id_sector = ur.id_sector";
$proto367["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto367["m_column"]=$obj;
$proto367["m_contained"] = array();
$proto367["m_strCase"] = "= ur.id_sector";
$proto367["m_havingmode"] = false;
$proto367["m_inBrackets"] = false;
$proto367["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto367);

$proto365["m_where"] = $obj;
$proto369=array();
$proto369["m_sql"] = "";
$proto369["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto369["m_column"]=$obj;
$proto369["m_contained"] = array();
$proto369["m_strCase"] = "";
$proto369["m_havingmode"] = false;
$proto369["m_inBrackets"] = false;
$proto369["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto369);

$proto365["m_having"] = $obj;
$proto365["m_fieldlist"] = array();
						$proto371=array();
			$proto372=array();
$proto372["m_functiontype"] = "SQLF_SUM";
$proto372["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "blancos",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto372["m_arguments"][]=$obj;
$proto372["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto372);

$proto371["m_sql"] = "sum(p.blancos)";
$proto371["m_srcTableName"] = "Pres - Por Sector";
$proto371["m_expr"]=$obj;
$proto371["m_alias"] = "";
$obj = new SQLFieldListItem($proto371);

$proto365["m_fieldlist"][]=$obj;
$proto365["m_fromlist"] = array();
												$proto374=array();
$proto374["m_link"] = "SQLL_MAIN";
			$proto375=array();
$proto375["m_strName"] = "voto_presidente";
$proto375["m_srcTableName"] = "Pres - Por Sector";
$proto375["m_columns"] = array();
$proto375["m_columns"][] = "elecciones";
$proto375["m_columns"][] = "id_urna";
$proto375["m_columns"][] = "candidato1";
$proto375["m_columns"][] = "candidato2";
$proto375["m_columns"][] = "candidato3";
$proto375["m_columns"][] = "candidato4";
$proto375["m_columns"][] = "candidato5";
$proto375["m_columns"][] = "candidato6";
$proto375["m_columns"][] = "candidato7";
$proto375["m_columns"][] = "candidato8";
$proto375["m_columns"][] = "candidato9";
$proto375["m_columns"][] = "candidato10";
$proto375["m_columns"][] = "candidato11";
$proto375["m_columns"][] = "candidato12";
$proto375["m_columns"][] = "candidato13";
$proto375["m_columns"][] = "candidato14";
$proto375["m_columns"][] = "candidato15";
$proto375["m_columns"][] = "validos";
$proto375["m_columns"][] = "blancos";
$proto375["m_columns"][] = "nulos";
$proto375["m_columns"][] = "utilizados";
$proto375["m_columns"][] = "no_utilizados";
$proto375["m_columns"][] = "total";
$proto375["m_columns"][] = "usuario";
$proto375["m_columns"][] = "fecha";
$proto375["m_columns"][] = "editado_por";
$proto375["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto375);

$proto374["m_table"] = $obj;
$proto374["m_sql"] = "voto_presidente as p";
$proto374["m_alias"] = "p";
$proto374["m_srcTableName"] = "Pres - Por Sector";
$proto376=array();
$proto376["m_sql"] = "";
$proto376["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto376["m_column"]=$obj;
$proto376["m_contained"] = array();
$proto376["m_strCase"] = "";
$proto376["m_havingmode"] = false;
$proto376["m_inBrackets"] = false;
$proto376["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto376);

$proto374["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto374);

$proto365["m_fromlist"][]=$obj;
												$proto378=array();
$proto378["m_link"] = "SQLL_INNERJOIN";
			$proto379=array();
$proto379["m_strName"] = "urna";
$proto379["m_srcTableName"] = "Pres - Por Sector";
$proto379["m_columns"] = array();
$proto379["m_columns"][] = "id_distrito";
$proto379["m_columns"][] = "id_sector";
$proto379["m_columns"][] = "id_urna";
$proto379["m_columns"][] = "nombre_centro";
$proto379["m_columns"][] = "ubicación";
$proto379["m_columns"][] = "votantes";
$obj = new SQLTable($proto379);

$proto378["m_table"] = $obj;
$proto378["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto378["m_alias"] = "u";
$proto378["m_srcTableName"] = "Pres - Por Sector";
$proto380=array();
$proto380["m_sql"] = "p.id_urna = u.id_urna";
$proto380["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto380["m_column"]=$obj;
$proto380["m_contained"] = array();
$proto380["m_strCase"] = "= u.id_urna";
$proto380["m_havingmode"] = false;
$proto380["m_inBrackets"] = false;
$proto380["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto380);

$proto378["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto378);

$proto365["m_fromlist"][]=$obj;
$proto365["m_groupby"] = array();
$proto365["m_orderby"] = array();
$proto365["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto365);

$proto364["m_sql"] = "(select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto364["m_srcTableName"] = "Pres - Por Sector";
$proto364["m_expr"]=$obj;
$proto364["m_alias"] = "Blancos";
$obj = new SQLFieldListItem($proto364);

$proto0["m_fieldlist"][]=$obj;
						$proto382=array();
			$proto383=array();
$proto383["m_strHead"] = "select";
$proto383["m_strFieldList"] = "sum(p.nulos)";
$proto383["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto383["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto383["m_strOrderBy"] = "";
	
		;
			$proto383["cipherer"] = null;
$proto385=array();
$proto385["m_sql"] = "u.id_sector = ur.id_sector";
$proto385["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto385["m_column"]=$obj;
$proto385["m_contained"] = array();
$proto385["m_strCase"] = "= ur.id_sector";
$proto385["m_havingmode"] = false;
$proto385["m_inBrackets"] = false;
$proto385["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto385);

$proto383["m_where"] = $obj;
$proto387=array();
$proto387["m_sql"] = "";
$proto387["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto387["m_column"]=$obj;
$proto387["m_contained"] = array();
$proto387["m_strCase"] = "";
$proto387["m_havingmode"] = false;
$proto387["m_inBrackets"] = false;
$proto387["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto387);

$proto383["m_having"] = $obj;
$proto383["m_fieldlist"] = array();
						$proto389=array();
			$proto390=array();
$proto390["m_functiontype"] = "SQLF_SUM";
$proto390["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "nulos",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto390["m_arguments"][]=$obj;
$proto390["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto390);

$proto389["m_sql"] = "sum(p.nulos)";
$proto389["m_srcTableName"] = "Pres - Por Sector";
$proto389["m_expr"]=$obj;
$proto389["m_alias"] = "";
$obj = new SQLFieldListItem($proto389);

$proto383["m_fieldlist"][]=$obj;
$proto383["m_fromlist"] = array();
												$proto392=array();
$proto392["m_link"] = "SQLL_MAIN";
			$proto393=array();
$proto393["m_strName"] = "voto_presidente";
$proto393["m_srcTableName"] = "Pres - Por Sector";
$proto393["m_columns"] = array();
$proto393["m_columns"][] = "elecciones";
$proto393["m_columns"][] = "id_urna";
$proto393["m_columns"][] = "candidato1";
$proto393["m_columns"][] = "candidato2";
$proto393["m_columns"][] = "candidato3";
$proto393["m_columns"][] = "candidato4";
$proto393["m_columns"][] = "candidato5";
$proto393["m_columns"][] = "candidato6";
$proto393["m_columns"][] = "candidato7";
$proto393["m_columns"][] = "candidato8";
$proto393["m_columns"][] = "candidato9";
$proto393["m_columns"][] = "candidato10";
$proto393["m_columns"][] = "candidato11";
$proto393["m_columns"][] = "candidato12";
$proto393["m_columns"][] = "candidato13";
$proto393["m_columns"][] = "candidato14";
$proto393["m_columns"][] = "candidato15";
$proto393["m_columns"][] = "validos";
$proto393["m_columns"][] = "blancos";
$proto393["m_columns"][] = "nulos";
$proto393["m_columns"][] = "utilizados";
$proto393["m_columns"][] = "no_utilizados";
$proto393["m_columns"][] = "total";
$proto393["m_columns"][] = "usuario";
$proto393["m_columns"][] = "fecha";
$proto393["m_columns"][] = "editado_por";
$proto393["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto393);

$proto392["m_table"] = $obj;
$proto392["m_sql"] = "voto_presidente as p";
$proto392["m_alias"] = "p";
$proto392["m_srcTableName"] = "Pres - Por Sector";
$proto394=array();
$proto394["m_sql"] = "";
$proto394["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto394["m_column"]=$obj;
$proto394["m_contained"] = array();
$proto394["m_strCase"] = "";
$proto394["m_havingmode"] = false;
$proto394["m_inBrackets"] = false;
$proto394["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto394);

$proto392["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto392);

$proto383["m_fromlist"][]=$obj;
												$proto396=array();
$proto396["m_link"] = "SQLL_INNERJOIN";
			$proto397=array();
$proto397["m_strName"] = "urna";
$proto397["m_srcTableName"] = "Pres - Por Sector";
$proto397["m_columns"] = array();
$proto397["m_columns"][] = "id_distrito";
$proto397["m_columns"][] = "id_sector";
$proto397["m_columns"][] = "id_urna";
$proto397["m_columns"][] = "nombre_centro";
$proto397["m_columns"][] = "ubicación";
$proto397["m_columns"][] = "votantes";
$obj = new SQLTable($proto397);

$proto396["m_table"] = $obj;
$proto396["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto396["m_alias"] = "u";
$proto396["m_srcTableName"] = "Pres - Por Sector";
$proto398=array();
$proto398["m_sql"] = "p.id_urna = u.id_urna";
$proto398["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto398["m_column"]=$obj;
$proto398["m_contained"] = array();
$proto398["m_strCase"] = "= u.id_urna";
$proto398["m_havingmode"] = false;
$proto398["m_inBrackets"] = false;
$proto398["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto398);

$proto396["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto396);

$proto383["m_fromlist"][]=$obj;
$proto383["m_groupby"] = array();
$proto383["m_orderby"] = array();
$proto383["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto383);

$proto382["m_sql"] = "(select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto382["m_srcTableName"] = "Pres - Por Sector";
$proto382["m_expr"]=$obj;
$proto382["m_alias"] = "Nulos";
$obj = new SQLFieldListItem($proto382);

$proto0["m_fieldlist"][]=$obj;
						$proto400=array();
			$proto401=array();
$proto401["m_strHead"] = "select";
$proto401["m_strFieldList"] = "sum(p.utilizados)";
$proto401["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto401["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto401["m_strOrderBy"] = "";
	
		;
			$proto401["cipherer"] = null;
$proto403=array();
$proto403["m_sql"] = "u.id_sector = ur.id_sector";
$proto403["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto403["m_column"]=$obj;
$proto403["m_contained"] = array();
$proto403["m_strCase"] = "= ur.id_sector";
$proto403["m_havingmode"] = false;
$proto403["m_inBrackets"] = false;
$proto403["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto403);

$proto401["m_where"] = $obj;
$proto405=array();
$proto405["m_sql"] = "";
$proto405["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto405["m_column"]=$obj;
$proto405["m_contained"] = array();
$proto405["m_strCase"] = "";
$proto405["m_havingmode"] = false;
$proto405["m_inBrackets"] = false;
$proto405["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto405);

$proto401["m_having"] = $obj;
$proto401["m_fieldlist"] = array();
						$proto407=array();
			$proto408=array();
$proto408["m_functiontype"] = "SQLF_SUM";
$proto408["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "utilizados",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto408["m_arguments"][]=$obj;
$proto408["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto408);

$proto407["m_sql"] = "sum(p.utilizados)";
$proto407["m_srcTableName"] = "Pres - Por Sector";
$proto407["m_expr"]=$obj;
$proto407["m_alias"] = "";
$obj = new SQLFieldListItem($proto407);

$proto401["m_fieldlist"][]=$obj;
$proto401["m_fromlist"] = array();
												$proto410=array();
$proto410["m_link"] = "SQLL_MAIN";
			$proto411=array();
$proto411["m_strName"] = "voto_presidente";
$proto411["m_srcTableName"] = "Pres - Por Sector";
$proto411["m_columns"] = array();
$proto411["m_columns"][] = "elecciones";
$proto411["m_columns"][] = "id_urna";
$proto411["m_columns"][] = "candidato1";
$proto411["m_columns"][] = "candidato2";
$proto411["m_columns"][] = "candidato3";
$proto411["m_columns"][] = "candidato4";
$proto411["m_columns"][] = "candidato5";
$proto411["m_columns"][] = "candidato6";
$proto411["m_columns"][] = "candidato7";
$proto411["m_columns"][] = "candidato8";
$proto411["m_columns"][] = "candidato9";
$proto411["m_columns"][] = "candidato10";
$proto411["m_columns"][] = "candidato11";
$proto411["m_columns"][] = "candidato12";
$proto411["m_columns"][] = "candidato13";
$proto411["m_columns"][] = "candidato14";
$proto411["m_columns"][] = "candidato15";
$proto411["m_columns"][] = "validos";
$proto411["m_columns"][] = "blancos";
$proto411["m_columns"][] = "nulos";
$proto411["m_columns"][] = "utilizados";
$proto411["m_columns"][] = "no_utilizados";
$proto411["m_columns"][] = "total";
$proto411["m_columns"][] = "usuario";
$proto411["m_columns"][] = "fecha";
$proto411["m_columns"][] = "editado_por";
$proto411["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto411);

$proto410["m_table"] = $obj;
$proto410["m_sql"] = "voto_presidente as p";
$proto410["m_alias"] = "p";
$proto410["m_srcTableName"] = "Pres - Por Sector";
$proto412=array();
$proto412["m_sql"] = "";
$proto412["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto412["m_column"]=$obj;
$proto412["m_contained"] = array();
$proto412["m_strCase"] = "";
$proto412["m_havingmode"] = false;
$proto412["m_inBrackets"] = false;
$proto412["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto412);

$proto410["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto410);

$proto401["m_fromlist"][]=$obj;
												$proto414=array();
$proto414["m_link"] = "SQLL_INNERJOIN";
			$proto415=array();
$proto415["m_strName"] = "urna";
$proto415["m_srcTableName"] = "Pres - Por Sector";
$proto415["m_columns"] = array();
$proto415["m_columns"][] = "id_distrito";
$proto415["m_columns"][] = "id_sector";
$proto415["m_columns"][] = "id_urna";
$proto415["m_columns"][] = "nombre_centro";
$proto415["m_columns"][] = "ubicación";
$proto415["m_columns"][] = "votantes";
$obj = new SQLTable($proto415);

$proto414["m_table"] = $obj;
$proto414["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto414["m_alias"] = "u";
$proto414["m_srcTableName"] = "Pres - Por Sector";
$proto416=array();
$proto416["m_sql"] = "p.id_urna = u.id_urna";
$proto416["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto416["m_column"]=$obj;
$proto416["m_contained"] = array();
$proto416["m_strCase"] = "= u.id_urna";
$proto416["m_havingmode"] = false;
$proto416["m_inBrackets"] = false;
$proto416["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto416);

$proto414["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto414);

$proto401["m_fromlist"][]=$obj;
$proto401["m_groupby"] = array();
$proto401["m_orderby"] = array();
$proto401["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto401);

$proto400["m_sql"] = "(select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto400["m_srcTableName"] = "Pres - Por Sector";
$proto400["m_expr"]=$obj;
$proto400["m_alias"] = "Utilizados";
$obj = new SQLFieldListItem($proto400);

$proto0["m_fieldlist"][]=$obj;
						$proto418=array();
			$proto419=array();
$proto419["m_strHead"] = "select";
$proto419["m_strFieldList"] = "sum(p.no_utilizados)";
$proto419["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto419["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto419["m_strOrderBy"] = "";
	
		;
			$proto419["cipherer"] = null;
$proto421=array();
$proto421["m_sql"] = "u.id_sector = ur.id_sector";
$proto421["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto421["m_column"]=$obj;
$proto421["m_contained"] = array();
$proto421["m_strCase"] = "= ur.id_sector";
$proto421["m_havingmode"] = false;
$proto421["m_inBrackets"] = false;
$proto421["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto421);

$proto419["m_where"] = $obj;
$proto423=array();
$proto423["m_sql"] = "";
$proto423["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto423["m_column"]=$obj;
$proto423["m_contained"] = array();
$proto423["m_strCase"] = "";
$proto423["m_havingmode"] = false;
$proto423["m_inBrackets"] = false;
$proto423["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto423);

$proto419["m_having"] = $obj;
$proto419["m_fieldlist"] = array();
						$proto425=array();
			$proto426=array();
$proto426["m_functiontype"] = "SQLF_SUM";
$proto426["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "no_utilizados",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto426["m_arguments"][]=$obj;
$proto426["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto426);

$proto425["m_sql"] = "sum(p.no_utilizados)";
$proto425["m_srcTableName"] = "Pres - Por Sector";
$proto425["m_expr"]=$obj;
$proto425["m_alias"] = "";
$obj = new SQLFieldListItem($proto425);

$proto419["m_fieldlist"][]=$obj;
$proto419["m_fromlist"] = array();
												$proto428=array();
$proto428["m_link"] = "SQLL_MAIN";
			$proto429=array();
$proto429["m_strName"] = "voto_presidente";
$proto429["m_srcTableName"] = "Pres - Por Sector";
$proto429["m_columns"] = array();
$proto429["m_columns"][] = "elecciones";
$proto429["m_columns"][] = "id_urna";
$proto429["m_columns"][] = "candidato1";
$proto429["m_columns"][] = "candidato2";
$proto429["m_columns"][] = "candidato3";
$proto429["m_columns"][] = "candidato4";
$proto429["m_columns"][] = "candidato5";
$proto429["m_columns"][] = "candidato6";
$proto429["m_columns"][] = "candidato7";
$proto429["m_columns"][] = "candidato8";
$proto429["m_columns"][] = "candidato9";
$proto429["m_columns"][] = "candidato10";
$proto429["m_columns"][] = "candidato11";
$proto429["m_columns"][] = "candidato12";
$proto429["m_columns"][] = "candidato13";
$proto429["m_columns"][] = "candidato14";
$proto429["m_columns"][] = "candidato15";
$proto429["m_columns"][] = "validos";
$proto429["m_columns"][] = "blancos";
$proto429["m_columns"][] = "nulos";
$proto429["m_columns"][] = "utilizados";
$proto429["m_columns"][] = "no_utilizados";
$proto429["m_columns"][] = "total";
$proto429["m_columns"][] = "usuario";
$proto429["m_columns"][] = "fecha";
$proto429["m_columns"][] = "editado_por";
$proto429["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto429);

$proto428["m_table"] = $obj;
$proto428["m_sql"] = "voto_presidente as p";
$proto428["m_alias"] = "p";
$proto428["m_srcTableName"] = "Pres - Por Sector";
$proto430=array();
$proto430["m_sql"] = "";
$proto430["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto430["m_column"]=$obj;
$proto430["m_contained"] = array();
$proto430["m_strCase"] = "";
$proto430["m_havingmode"] = false;
$proto430["m_inBrackets"] = false;
$proto430["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto430);

$proto428["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto428);

$proto419["m_fromlist"][]=$obj;
												$proto432=array();
$proto432["m_link"] = "SQLL_INNERJOIN";
			$proto433=array();
$proto433["m_strName"] = "urna";
$proto433["m_srcTableName"] = "Pres - Por Sector";
$proto433["m_columns"] = array();
$proto433["m_columns"][] = "id_distrito";
$proto433["m_columns"][] = "id_sector";
$proto433["m_columns"][] = "id_urna";
$proto433["m_columns"][] = "nombre_centro";
$proto433["m_columns"][] = "ubicación";
$proto433["m_columns"][] = "votantes";
$obj = new SQLTable($proto433);

$proto432["m_table"] = $obj;
$proto432["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto432["m_alias"] = "u";
$proto432["m_srcTableName"] = "Pres - Por Sector";
$proto434=array();
$proto434["m_sql"] = "p.id_urna = u.id_urna";
$proto434["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto434["m_column"]=$obj;
$proto434["m_contained"] = array();
$proto434["m_strCase"] = "= u.id_urna";
$proto434["m_havingmode"] = false;
$proto434["m_inBrackets"] = false;
$proto434["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto434);

$proto432["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto432);

$proto419["m_fromlist"][]=$obj;
$proto419["m_groupby"] = array();
$proto419["m_orderby"] = array();
$proto419["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto419);

$proto418["m_sql"] = "(select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto418["m_srcTableName"] = "Pres - Por Sector";
$proto418["m_expr"]=$obj;
$proto418["m_alias"] = "No_Utilizados";
$obj = new SQLFieldListItem($proto418);

$proto0["m_fieldlist"][]=$obj;
						$proto436=array();
			$proto437=array();
$proto437["m_strHead"] = "select";
$proto437["m_strFieldList"] = "sum(p.total)";
$proto437["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto437["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto437["m_strOrderBy"] = "";
	
		;
			$proto437["cipherer"] = null;
$proto439=array();
$proto439["m_sql"] = "u.id_sector = ur.id_sector";
$proto439["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto439["m_column"]=$obj;
$proto439["m_contained"] = array();
$proto439["m_strCase"] = "= ur.id_sector";
$proto439["m_havingmode"] = false;
$proto439["m_inBrackets"] = false;
$proto439["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto439);

$proto437["m_where"] = $obj;
$proto441=array();
$proto441["m_sql"] = "";
$proto441["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto441["m_column"]=$obj;
$proto441["m_contained"] = array();
$proto441["m_strCase"] = "";
$proto441["m_havingmode"] = false;
$proto441["m_inBrackets"] = false;
$proto441["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto441);

$proto437["m_having"] = $obj;
$proto437["m_fieldlist"] = array();
						$proto443=array();
			$proto444=array();
$proto444["m_functiontype"] = "SQLF_SUM";
$proto444["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto444["m_arguments"][]=$obj;
$proto444["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto444);

$proto443["m_sql"] = "sum(p.total)";
$proto443["m_srcTableName"] = "Pres - Por Sector";
$proto443["m_expr"]=$obj;
$proto443["m_alias"] = "";
$obj = new SQLFieldListItem($proto443);

$proto437["m_fieldlist"][]=$obj;
$proto437["m_fromlist"] = array();
												$proto446=array();
$proto446["m_link"] = "SQLL_MAIN";
			$proto447=array();
$proto447["m_strName"] = "voto_presidente";
$proto447["m_srcTableName"] = "Pres - Por Sector";
$proto447["m_columns"] = array();
$proto447["m_columns"][] = "elecciones";
$proto447["m_columns"][] = "id_urna";
$proto447["m_columns"][] = "candidato1";
$proto447["m_columns"][] = "candidato2";
$proto447["m_columns"][] = "candidato3";
$proto447["m_columns"][] = "candidato4";
$proto447["m_columns"][] = "candidato5";
$proto447["m_columns"][] = "candidato6";
$proto447["m_columns"][] = "candidato7";
$proto447["m_columns"][] = "candidato8";
$proto447["m_columns"][] = "candidato9";
$proto447["m_columns"][] = "candidato10";
$proto447["m_columns"][] = "candidato11";
$proto447["m_columns"][] = "candidato12";
$proto447["m_columns"][] = "candidato13";
$proto447["m_columns"][] = "candidato14";
$proto447["m_columns"][] = "candidato15";
$proto447["m_columns"][] = "validos";
$proto447["m_columns"][] = "blancos";
$proto447["m_columns"][] = "nulos";
$proto447["m_columns"][] = "utilizados";
$proto447["m_columns"][] = "no_utilizados";
$proto447["m_columns"][] = "total";
$proto447["m_columns"][] = "usuario";
$proto447["m_columns"][] = "fecha";
$proto447["m_columns"][] = "editado_por";
$proto447["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto447);

$proto446["m_table"] = $obj;
$proto446["m_sql"] = "voto_presidente as p";
$proto446["m_alias"] = "p";
$proto446["m_srcTableName"] = "Pres - Por Sector";
$proto448=array();
$proto448["m_sql"] = "";
$proto448["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto448["m_column"]=$obj;
$proto448["m_contained"] = array();
$proto448["m_strCase"] = "";
$proto448["m_havingmode"] = false;
$proto448["m_inBrackets"] = false;
$proto448["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto448);

$proto446["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto446);

$proto437["m_fromlist"][]=$obj;
												$proto450=array();
$proto450["m_link"] = "SQLL_INNERJOIN";
			$proto451=array();
$proto451["m_strName"] = "urna";
$proto451["m_srcTableName"] = "Pres - Por Sector";
$proto451["m_columns"] = array();
$proto451["m_columns"][] = "id_distrito";
$proto451["m_columns"][] = "id_sector";
$proto451["m_columns"][] = "id_urna";
$proto451["m_columns"][] = "nombre_centro";
$proto451["m_columns"][] = "ubicación";
$proto451["m_columns"][] = "votantes";
$obj = new SQLTable($proto451);

$proto450["m_table"] = $obj;
$proto450["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto450["m_alias"] = "u";
$proto450["m_srcTableName"] = "Pres - Por Sector";
$proto452=array();
$proto452["m_sql"] = "p.id_urna = u.id_urna";
$proto452["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto452["m_column"]=$obj;
$proto452["m_contained"] = array();
$proto452["m_strCase"] = "= u.id_urna";
$proto452["m_havingmode"] = false;
$proto452["m_inBrackets"] = false;
$proto452["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto452);

$proto450["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto450);

$proto437["m_fromlist"][]=$obj;
$proto437["m_groupby"] = array();
$proto437["m_orderby"] = array();
$proto437["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto437);

$proto436["m_sql"] = "(select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto436["m_srcTableName"] = "Pres - Por Sector";
$proto436["m_expr"]=$obj;
$proto436["m_alias"] = "Total";
$obj = new SQLFieldListItem($proto436);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto454=array();
$proto454["m_link"] = "SQLL_MAIN";
			$proto455=array();
$proto455["m_strName"] = "voto_presidente";
$proto455["m_srcTableName"] = "Pres - Por Sector";
$proto455["m_columns"] = array();
$proto455["m_columns"][] = "elecciones";
$proto455["m_columns"][] = "id_urna";
$proto455["m_columns"][] = "candidato1";
$proto455["m_columns"][] = "candidato2";
$proto455["m_columns"][] = "candidato3";
$proto455["m_columns"][] = "candidato4";
$proto455["m_columns"][] = "candidato5";
$proto455["m_columns"][] = "candidato6";
$proto455["m_columns"][] = "candidato7";
$proto455["m_columns"][] = "candidato8";
$proto455["m_columns"][] = "candidato9";
$proto455["m_columns"][] = "candidato10";
$proto455["m_columns"][] = "candidato11";
$proto455["m_columns"][] = "candidato12";
$proto455["m_columns"][] = "candidato13";
$proto455["m_columns"][] = "candidato14";
$proto455["m_columns"][] = "candidato15";
$proto455["m_columns"][] = "validos";
$proto455["m_columns"][] = "blancos";
$proto455["m_columns"][] = "nulos";
$proto455["m_columns"][] = "utilizados";
$proto455["m_columns"][] = "no_utilizados";
$proto455["m_columns"][] = "total";
$proto455["m_columns"][] = "usuario";
$proto455["m_columns"][] = "fecha";
$proto455["m_columns"][] = "editado_por";
$proto455["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto455);

$proto454["m_table"] = $obj;
$proto454["m_sql"] = "voto_presidente as vp";
$proto454["m_alias"] = "vp";
$proto454["m_srcTableName"] = "Pres - Por Sector";
$proto456=array();
$proto456["m_sql"] = "";
$proto456["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto456["m_column"]=$obj;
$proto456["m_contained"] = array();
$proto456["m_strCase"] = "";
$proto456["m_havingmode"] = false;
$proto456["m_inBrackets"] = false;
$proto456["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto456);

$proto454["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto454);

$proto0["m_fromlist"][]=$obj;
												$proto458=array();
$proto458["m_link"] = "SQLL_INNERJOIN";
			$proto459=array();
$proto459["m_strName"] = "urna";
$proto459["m_srcTableName"] = "Pres - Por Sector";
$proto459["m_columns"] = array();
$proto459["m_columns"][] = "id_distrito";
$proto459["m_columns"][] = "id_sector";
$proto459["m_columns"][] = "id_urna";
$proto459["m_columns"][] = "nombre_centro";
$proto459["m_columns"][] = "ubicación";
$proto459["m_columns"][] = "votantes";
$obj = new SQLTable($proto459);

$proto458["m_table"] = $obj;
$proto458["m_sql"] = "inner join urna as ur on vp.id_urna = ur.id_urna";
$proto458["m_alias"] = "ur";
$proto458["m_srcTableName"] = "Pres - Por Sector";
$proto460=array();
$proto460["m_sql"] = "vp.id_urna = ur.id_urna";
$proto460["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "vp",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto460["m_column"]=$obj;
$proto460["m_contained"] = array();
$proto460["m_strCase"] = "= ur.id_urna";
$proto460["m_havingmode"] = false;
$proto460["m_inBrackets"] = false;
$proto460["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto460);

$proto458["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto458);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto462=array();
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "ur",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto462["m_column"]=$obj;
$obj = new SQLGroupByItem($proto462);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto464=array();
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "ur",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto464["m_column"]=$obj;
$proto464["m_bAsc"] = 1;
$proto464["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto464);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pres___por_sector = createSqlQuery_pres___por_sector();


	
		;

																								

$tdatapres___por_sector[".sqlquery"] = $queryData_pres___por_sector;



include_once(getabspath("include/pres___por_sector_events.php"));
$tableEvents["Pres - Por Sector"] = new eventclass_pres___por_sector;
$tdatapres___por_sector[".hasEvents"] = true;

$query = &$queryData_pres___por_sector;
$table = "Pres - Por Sector";
// here goes EVENT_INIT_TABLE event


// Place event code here.
// Use "Add Action" button to add code snippets.

$can1_por = DBlookup("select round(((sum(candidato1)/sum(validos))*100),1) from voto_presidente");
$can2_por = DBlookup("select round(((sum(candidato2)/sum(validos))*100),1) from voto_presidente");
$can3_por = DBlookup("select round(((sum(candidato3)/sum(validos))*100),1) from voto_presidente");
$can4_por = DBlookup("select round(((sum(candidato4)/sum(validos))*100),1) from voto_presidente");
$can5_por = DBlookup("select round(((sum(candidato5)/sum(validos))*100),1) from voto_presidente");
$can6_por = DBlookup("select round(((sum(candidato6)/sum(validos))*100),1) from voto_presidente");
$can7_por = DBlookup("select round(((sum(candidato7)/sum(validos))*100),1) from voto_presidente");
$can8_por = DBlookup("select round(((sum(candidato8)/sum(validos))*100),1) from voto_presidente");
$can9_por = DBlookup("select round(((sum(candidato9)/sum(validos))*100),1) from voto_presidente");
$can10_por = DBlookup("select round(((sum(candidato10)/sum(validos))*100),1) from voto_presidente");
$can11_por = DBlookup("select round(((sum(candidato11)/sum(validos))*100),1) from voto_presidente");
$can12_por = DBlookup("select round(((sum(candidato12)/sum(validos))*100),1) from voto_presidente");
$can13_por = DBlookup("select round(((sum(candidato13)/sum(validos))*100),1) from voto_presidente");
$can14_por = DBlookup("select round(((sum(candidato14)/sum(validos))*100),1) from voto_presidente");
$can15_por = DBlookup("select round(((sum(candidato15)/sum(validos))*100),1) from voto_presidente");
$otros_por = DBlookup("select round(((((sum(candidato1))+(sum(candidato2))+(sum(candidato3))+(sum(candidato4))+(sum(candidato5))
+(sum(candidato6))+(sum(candidato8))+(sum(candidato9))+(sum(candidato10))+(sum(candidato11))+(sum(candidato12))+(sum(candidato13)))/sum(validos))*100),1) from voto_presidente");

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
$_SESSION["can13"] = $can13_por;
$_SESSION["can14"] = $can14_por;
$_SESSION["can15"] = $can15_por;
$_SESSION["otros"] = $otros_por;
;
unset($query);
?>