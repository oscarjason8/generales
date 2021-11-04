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
	$fieldLabelspres___por_sector["Spanish"]["Yani"] = "Yani Rosenthal";
	$fieldToolTipspres___por_sector["Spanish"]["Yani"] = "";
	$placeHolderspres___por_sector["Spanish"]["Yani"] = "";
	$fieldLabelspres___por_sector["Spanish"]["Banegas"] = "Dario Banegas";
	$fieldToolTipspres___por_sector["Spanish"]["Banegas"] = "";
	$placeHolderspres___por_sector["Spanish"]["Banegas"] = "";
	$fieldLabelspres___por_sector["Spanish"]["Luis"] = "Luis Zelaya";
	$fieldToolTipspres___por_sector["Spanish"]["Luis"] = "";
	$placeHolderspres___por_sector["Spanish"]["Luis"] = "";
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
$tdatapres___por_sector[".googleLikeFields"][] = "Yani";
$tdatapres___por_sector[".googleLikeFields"][] = "Banegas";
$tdatapres___por_sector[".googleLikeFields"][] = "Luis";
$tdatapres___por_sector[".googleLikeFields"][] = "Validos";
$tdatapres___por_sector[".googleLikeFields"][] = "Blancos";
$tdatapres___por_sector[".googleLikeFields"][] = "Nulos";
$tdatapres___por_sector[".googleLikeFields"][] = "Utilizados";
$tdatapres___por_sector[".googleLikeFields"][] = "No_Utilizados";
$tdatapres___por_sector[".googleLikeFields"][] = "Total";



$tdatapres___por_sector[".tableType"] = "report";

$tdatapres___por_sector[".printerPageOrientation"] = 0;
$tdatapres___por_sector[".nPrinterPageScale"] = 100;

$tdatapres___por_sector[".nPrinterSplitRecords"] = 25;

$tdatapres___por_sector[".geocodingEnabled"] = false;

//report settings
$tdatapres___por_sector[".printReportLayout"] = 6;

$tdatapres___por_sector[".reportPrintPartitionType"] = 1;
$tdatapres___por_sector[".reportPrintGroupsPerPage"] = 25;
$tdatapres___por_sector[".lowGroup"] = 0;



$tdatapres___por_sector[".pageSize"] = 20;


$tdatapres___por_sector[".isExistTotalFields"] = true;



$tdatapres___por_sector[".reportGlobalSummary"] = true;

$tdatapres___por_sector[".repShowDet"] = true;

$tdatapres___por_sector[".reportLayout"] = 6;

//end of report settings










$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapres___por_sector[".strOrderBy"] = $tstrOrderBy;

$tdatapres___por_sector[".orderindexes"] = array();


$tdatapres___por_sector[".sqlHead"] = "select ur.id_distrito, ur.id_sector,  (select concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Yani,  (select concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Banegas,  (select concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Luis,  (select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Validos,  (select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Blancos,  (select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Nulos,  (select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Utilizados,  (select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as No_Utilizados,  (select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Total";
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


	$tdatapres___por_sector["id_sector"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "id_sector";
//	Yani
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Yani";
	$fdata["GoodName"] = "Yani";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","Yani");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "Yani";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["Yani"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "Yani";
//	Banegas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Banegas";
	$fdata["GoodName"] = "Banegas";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","Banegas");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "Banegas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["Banegas"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "Banegas";
//	Luis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Luis";
	$fdata["GoodName"] = "Luis";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Sector","Luis");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "Luis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";

	
	
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


	$tdatapres___por_sector["Luis"] = $fdata;
		$tdatapres___por_sector[".searchableFields"][] = "Luis";
//	Validos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
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
	$fdata["Index"] = 7;
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
	$fdata["Index"] = 8;
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
	$fdata["Index"] = 9;
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
	$fdata["Index"] = 10;
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
	$fdata["Index"] = 11;
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
$proto0["m_strFieldList"] = "ur.id_distrito, ur.id_sector,  (select concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Yani,  (select concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Banegas,  (select concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Luis,  (select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Validos,  (select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Blancos,  (select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Nulos,  (select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Utilizados,  (select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as No_Utilizados,  (select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector) as Total";
$proto0["m_strFrom"] = "from voto_presidente as vp  inner join urna as ur on vp.id_urna = ur.id_urna";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
$proto11["m_strFieldList"] = "concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")";
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
	"m_sql" => "\" votos (\""
));

$proto18["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato1)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1)"
));

$proto18["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto18);

$proto17["m_sql"] = "concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")";
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

$proto10["m_sql"] = "(select concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto10["m_srcTableName"] = "Pres - Por Sector";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Yani";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$proto32=array();
$proto32["m_strHead"] = "select";
$proto32["m_strFieldList"] = "concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")";
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
	"m_sql" => "\" votos (\""
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1)"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto39["m_arguments"][]=$obj;
$proto39["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto39);

$proto38["m_sql"] = "concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")";
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

$proto31["m_sql"] = "(select concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto31["m_srcTableName"] = "Pres - Por Sector";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "Banegas";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$proto53=array();
$proto53["m_strHead"] = "select";
$proto53["m_strFieldList"] = "concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(candidato3)))))*100),1), \"%)\")";
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
	"m_sql" => "\" votos (\""
));

$proto60["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(candidato3)))))*100),1)"
));

$proto60["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto60["m_arguments"][]=$obj;
$proto60["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto60);

$proto59["m_sql"] = "concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(candidato3)))))*100),1), \"%)\")";
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

$proto52["m_sql"] = "(select concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto52["m_srcTableName"] = "Pres - Por Sector";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "Luis";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$proto74=array();
$proto74["m_strHead"] = "select";
$proto74["m_strFieldList"] = "sum(p.validos)";
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
$proto81["m_functiontype"] = "SQLF_SUM";
$proto81["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "validos",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto81["m_arguments"][]=$obj;
$proto81["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto81);

$proto80["m_sql"] = "sum(p.validos)";
$proto80["m_srcTableName"] = "Pres - Por Sector";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto74["m_fieldlist"][]=$obj;
$proto74["m_fromlist"] = array();
												$proto83=array();
$proto83["m_link"] = "SQLL_MAIN";
			$proto84=array();
$proto84["m_strName"] = "voto_presidente";
$proto84["m_srcTableName"] = "Pres - Por Sector";
$proto84["m_columns"] = array();
$proto84["m_columns"][] = "elecciones";
$proto84["m_columns"][] = "id_urna";
$proto84["m_columns"][] = "candidato1";
$proto84["m_columns"][] = "candidato2";
$proto84["m_columns"][] = "candidato3";
$proto84["m_columns"][] = "candidato4";
$proto84["m_columns"][] = "candidato5";
$proto84["m_columns"][] = "candidato6";
$proto84["m_columns"][] = "candidato7";
$proto84["m_columns"][] = "candidato8";
$proto84["m_columns"][] = "candidato9";
$proto84["m_columns"][] = "candidato10";
$proto84["m_columns"][] = "candidato11";
$proto84["m_columns"][] = "candidato12";
$proto84["m_columns"][] = "candidato13";
$proto84["m_columns"][] = "candidato14";
$proto84["m_columns"][] = "candidato15";
$proto84["m_columns"][] = "validos";
$proto84["m_columns"][] = "blancos";
$proto84["m_columns"][] = "nulos";
$proto84["m_columns"][] = "utilizados";
$proto84["m_columns"][] = "no_utilizados";
$proto84["m_columns"][] = "total";
$proto84["m_columns"][] = "usuario";
$proto84["m_columns"][] = "fecha";
$proto84["m_columns"][] = "editado_por";
$proto84["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto84);

$proto83["m_table"] = $obj;
$proto83["m_sql"] = "voto_presidente as p";
$proto83["m_alias"] = "p";
$proto83["m_srcTableName"] = "Pres - Por Sector";
$proto85=array();
$proto85["m_sql"] = "";
$proto85["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto85["m_column"]=$obj;
$proto85["m_contained"] = array();
$proto85["m_strCase"] = "";
$proto85["m_havingmode"] = false;
$proto85["m_inBrackets"] = false;
$proto85["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto85);

$proto83["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto83);

$proto74["m_fromlist"][]=$obj;
												$proto87=array();
$proto87["m_link"] = "SQLL_INNERJOIN";
			$proto88=array();
$proto88["m_strName"] = "urna";
$proto88["m_srcTableName"] = "Pres - Por Sector";
$proto88["m_columns"] = array();
$proto88["m_columns"][] = "id_distrito";
$proto88["m_columns"][] = "id_sector";
$proto88["m_columns"][] = "id_urna";
$proto88["m_columns"][] = "nombre_centro";
$proto88["m_columns"][] = "ubicación";
$proto88["m_columns"][] = "votantes";
$obj = new SQLTable($proto88);

$proto87["m_table"] = $obj;
$proto87["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto87["m_alias"] = "u";
$proto87["m_srcTableName"] = "Pres - Por Sector";
$proto89=array();
$proto89["m_sql"] = "p.id_urna = u.id_urna";
$proto89["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto89["m_column"]=$obj;
$proto89["m_contained"] = array();
$proto89["m_strCase"] = "= u.id_urna";
$proto89["m_havingmode"] = false;
$proto89["m_inBrackets"] = false;
$proto89["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto89);

$proto87["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto87);

$proto74["m_fromlist"][]=$obj;
$proto74["m_groupby"] = array();
$proto74["m_orderby"] = array();
$proto74["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto74);

$proto73["m_sql"] = "(select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto73["m_srcTableName"] = "Pres - Por Sector";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "Validos";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$proto92=array();
$proto92["m_strHead"] = "select";
$proto92["m_strFieldList"] = "sum(p.blancos)";
$proto92["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto92["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto92["m_strOrderBy"] = "";
	
		;
			$proto92["cipherer"] = null;
$proto94=array();
$proto94["m_sql"] = "u.id_sector = ur.id_sector";
$proto94["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto94["m_column"]=$obj;
$proto94["m_contained"] = array();
$proto94["m_strCase"] = "= ur.id_sector";
$proto94["m_havingmode"] = false;
$proto94["m_inBrackets"] = false;
$proto94["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto94);

$proto92["m_where"] = $obj;
$proto96=array();
$proto96["m_sql"] = "";
$proto96["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto96["m_column"]=$obj;
$proto96["m_contained"] = array();
$proto96["m_strCase"] = "";
$proto96["m_havingmode"] = false;
$proto96["m_inBrackets"] = false;
$proto96["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto96);

$proto92["m_having"] = $obj;
$proto92["m_fieldlist"] = array();
						$proto98=array();
			$proto99=array();
$proto99["m_functiontype"] = "SQLF_SUM";
$proto99["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "blancos",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto99["m_arguments"][]=$obj;
$proto99["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto99);

$proto98["m_sql"] = "sum(p.blancos)";
$proto98["m_srcTableName"] = "Pres - Por Sector";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto92["m_fieldlist"][]=$obj;
$proto92["m_fromlist"] = array();
												$proto101=array();
$proto101["m_link"] = "SQLL_MAIN";
			$proto102=array();
$proto102["m_strName"] = "voto_presidente";
$proto102["m_srcTableName"] = "Pres - Por Sector";
$proto102["m_columns"] = array();
$proto102["m_columns"][] = "elecciones";
$proto102["m_columns"][] = "id_urna";
$proto102["m_columns"][] = "candidato1";
$proto102["m_columns"][] = "candidato2";
$proto102["m_columns"][] = "candidato3";
$proto102["m_columns"][] = "candidato4";
$proto102["m_columns"][] = "candidato5";
$proto102["m_columns"][] = "candidato6";
$proto102["m_columns"][] = "candidato7";
$proto102["m_columns"][] = "candidato8";
$proto102["m_columns"][] = "candidato9";
$proto102["m_columns"][] = "candidato10";
$proto102["m_columns"][] = "candidato11";
$proto102["m_columns"][] = "candidato12";
$proto102["m_columns"][] = "candidato13";
$proto102["m_columns"][] = "candidato14";
$proto102["m_columns"][] = "candidato15";
$proto102["m_columns"][] = "validos";
$proto102["m_columns"][] = "blancos";
$proto102["m_columns"][] = "nulos";
$proto102["m_columns"][] = "utilizados";
$proto102["m_columns"][] = "no_utilizados";
$proto102["m_columns"][] = "total";
$proto102["m_columns"][] = "usuario";
$proto102["m_columns"][] = "fecha";
$proto102["m_columns"][] = "editado_por";
$proto102["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto102);

$proto101["m_table"] = $obj;
$proto101["m_sql"] = "voto_presidente as p";
$proto101["m_alias"] = "p";
$proto101["m_srcTableName"] = "Pres - Por Sector";
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

$proto101["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto101);

$proto92["m_fromlist"][]=$obj;
												$proto105=array();
$proto105["m_link"] = "SQLL_INNERJOIN";
			$proto106=array();
$proto106["m_strName"] = "urna";
$proto106["m_srcTableName"] = "Pres - Por Sector";
$proto106["m_columns"] = array();
$proto106["m_columns"][] = "id_distrito";
$proto106["m_columns"][] = "id_sector";
$proto106["m_columns"][] = "id_urna";
$proto106["m_columns"][] = "nombre_centro";
$proto106["m_columns"][] = "ubicación";
$proto106["m_columns"][] = "votantes";
$obj = new SQLTable($proto106);

$proto105["m_table"] = $obj;
$proto105["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto105["m_alias"] = "u";
$proto105["m_srcTableName"] = "Pres - Por Sector";
$proto107=array();
$proto107["m_sql"] = "p.id_urna = u.id_urna";
$proto107["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto107["m_column"]=$obj;
$proto107["m_contained"] = array();
$proto107["m_strCase"] = "= u.id_urna";
$proto107["m_havingmode"] = false;
$proto107["m_inBrackets"] = false;
$proto107["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto107);

$proto105["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto105);

$proto92["m_fromlist"][]=$obj;
$proto92["m_groupby"] = array();
$proto92["m_orderby"] = array();
$proto92["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto92);

$proto91["m_sql"] = "(select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto91["m_srcTableName"] = "Pres - Por Sector";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "Blancos";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto109=array();
			$proto110=array();
$proto110["m_strHead"] = "select";
$proto110["m_strFieldList"] = "sum(p.nulos)";
$proto110["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto110["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto110["m_strOrderBy"] = "";
	
		;
			$proto110["cipherer"] = null;
$proto112=array();
$proto112["m_sql"] = "u.id_sector = ur.id_sector";
$proto112["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto112["m_column"]=$obj;
$proto112["m_contained"] = array();
$proto112["m_strCase"] = "= ur.id_sector";
$proto112["m_havingmode"] = false;
$proto112["m_inBrackets"] = false;
$proto112["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto112);

$proto110["m_where"] = $obj;
$proto114=array();
$proto114["m_sql"] = "";
$proto114["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto114["m_column"]=$obj;
$proto114["m_contained"] = array();
$proto114["m_strCase"] = "";
$proto114["m_havingmode"] = false;
$proto114["m_inBrackets"] = false;
$proto114["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto114);

$proto110["m_having"] = $obj;
$proto110["m_fieldlist"] = array();
						$proto116=array();
			$proto117=array();
$proto117["m_functiontype"] = "SQLF_SUM";
$proto117["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "nulos",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto117["m_arguments"][]=$obj;
$proto117["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto117);

$proto116["m_sql"] = "sum(p.nulos)";
$proto116["m_srcTableName"] = "Pres - Por Sector";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto110["m_fieldlist"][]=$obj;
$proto110["m_fromlist"] = array();
												$proto119=array();
$proto119["m_link"] = "SQLL_MAIN";
			$proto120=array();
$proto120["m_strName"] = "voto_presidente";
$proto120["m_srcTableName"] = "Pres - Por Sector";
$proto120["m_columns"] = array();
$proto120["m_columns"][] = "elecciones";
$proto120["m_columns"][] = "id_urna";
$proto120["m_columns"][] = "candidato1";
$proto120["m_columns"][] = "candidato2";
$proto120["m_columns"][] = "candidato3";
$proto120["m_columns"][] = "candidato4";
$proto120["m_columns"][] = "candidato5";
$proto120["m_columns"][] = "candidato6";
$proto120["m_columns"][] = "candidato7";
$proto120["m_columns"][] = "candidato8";
$proto120["m_columns"][] = "candidato9";
$proto120["m_columns"][] = "candidato10";
$proto120["m_columns"][] = "candidato11";
$proto120["m_columns"][] = "candidato12";
$proto120["m_columns"][] = "candidato13";
$proto120["m_columns"][] = "candidato14";
$proto120["m_columns"][] = "candidato15";
$proto120["m_columns"][] = "validos";
$proto120["m_columns"][] = "blancos";
$proto120["m_columns"][] = "nulos";
$proto120["m_columns"][] = "utilizados";
$proto120["m_columns"][] = "no_utilizados";
$proto120["m_columns"][] = "total";
$proto120["m_columns"][] = "usuario";
$proto120["m_columns"][] = "fecha";
$proto120["m_columns"][] = "editado_por";
$proto120["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto120);

$proto119["m_table"] = $obj;
$proto119["m_sql"] = "voto_presidente as p";
$proto119["m_alias"] = "p";
$proto119["m_srcTableName"] = "Pres - Por Sector";
$proto121=array();
$proto121["m_sql"] = "";
$proto121["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto121["m_column"]=$obj;
$proto121["m_contained"] = array();
$proto121["m_strCase"] = "";
$proto121["m_havingmode"] = false;
$proto121["m_inBrackets"] = false;
$proto121["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto121);

$proto119["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto119);

$proto110["m_fromlist"][]=$obj;
												$proto123=array();
$proto123["m_link"] = "SQLL_INNERJOIN";
			$proto124=array();
$proto124["m_strName"] = "urna";
$proto124["m_srcTableName"] = "Pres - Por Sector";
$proto124["m_columns"] = array();
$proto124["m_columns"][] = "id_distrito";
$proto124["m_columns"][] = "id_sector";
$proto124["m_columns"][] = "id_urna";
$proto124["m_columns"][] = "nombre_centro";
$proto124["m_columns"][] = "ubicación";
$proto124["m_columns"][] = "votantes";
$obj = new SQLTable($proto124);

$proto123["m_table"] = $obj;
$proto123["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto123["m_alias"] = "u";
$proto123["m_srcTableName"] = "Pres - Por Sector";
$proto125=array();
$proto125["m_sql"] = "p.id_urna = u.id_urna";
$proto125["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto125["m_column"]=$obj;
$proto125["m_contained"] = array();
$proto125["m_strCase"] = "= u.id_urna";
$proto125["m_havingmode"] = false;
$proto125["m_inBrackets"] = false;
$proto125["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto125);

$proto123["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto123);

$proto110["m_fromlist"][]=$obj;
$proto110["m_groupby"] = array();
$proto110["m_orderby"] = array();
$proto110["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto110);

$proto109["m_sql"] = "(select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto109["m_srcTableName"] = "Pres - Por Sector";
$proto109["m_expr"]=$obj;
$proto109["m_alias"] = "Nulos";
$obj = new SQLFieldListItem($proto109);

$proto0["m_fieldlist"][]=$obj;
						$proto127=array();
			$proto128=array();
$proto128["m_strHead"] = "select";
$proto128["m_strFieldList"] = "sum(p.utilizados)";
$proto128["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto128["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto128["m_strOrderBy"] = "";
	
		;
			$proto128["cipherer"] = null;
$proto130=array();
$proto130["m_sql"] = "u.id_sector = ur.id_sector";
$proto130["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto130["m_column"]=$obj;
$proto130["m_contained"] = array();
$proto130["m_strCase"] = "= ur.id_sector";
$proto130["m_havingmode"] = false;
$proto130["m_inBrackets"] = false;
$proto130["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto130);

$proto128["m_where"] = $obj;
$proto132=array();
$proto132["m_sql"] = "";
$proto132["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto132["m_column"]=$obj;
$proto132["m_contained"] = array();
$proto132["m_strCase"] = "";
$proto132["m_havingmode"] = false;
$proto132["m_inBrackets"] = false;
$proto132["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto132);

$proto128["m_having"] = $obj;
$proto128["m_fieldlist"] = array();
						$proto134=array();
			$proto135=array();
$proto135["m_functiontype"] = "SQLF_SUM";
$proto135["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "utilizados",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto135["m_arguments"][]=$obj;
$proto135["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto135);

$proto134["m_sql"] = "sum(p.utilizados)";
$proto134["m_srcTableName"] = "Pres - Por Sector";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto128["m_fieldlist"][]=$obj;
$proto128["m_fromlist"] = array();
												$proto137=array();
$proto137["m_link"] = "SQLL_MAIN";
			$proto138=array();
$proto138["m_strName"] = "voto_presidente";
$proto138["m_srcTableName"] = "Pres - Por Sector";
$proto138["m_columns"] = array();
$proto138["m_columns"][] = "elecciones";
$proto138["m_columns"][] = "id_urna";
$proto138["m_columns"][] = "candidato1";
$proto138["m_columns"][] = "candidato2";
$proto138["m_columns"][] = "candidato3";
$proto138["m_columns"][] = "candidato4";
$proto138["m_columns"][] = "candidato5";
$proto138["m_columns"][] = "candidato6";
$proto138["m_columns"][] = "candidato7";
$proto138["m_columns"][] = "candidato8";
$proto138["m_columns"][] = "candidato9";
$proto138["m_columns"][] = "candidato10";
$proto138["m_columns"][] = "candidato11";
$proto138["m_columns"][] = "candidato12";
$proto138["m_columns"][] = "candidato13";
$proto138["m_columns"][] = "candidato14";
$proto138["m_columns"][] = "candidato15";
$proto138["m_columns"][] = "validos";
$proto138["m_columns"][] = "blancos";
$proto138["m_columns"][] = "nulos";
$proto138["m_columns"][] = "utilizados";
$proto138["m_columns"][] = "no_utilizados";
$proto138["m_columns"][] = "total";
$proto138["m_columns"][] = "usuario";
$proto138["m_columns"][] = "fecha";
$proto138["m_columns"][] = "editado_por";
$proto138["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto138);

$proto137["m_table"] = $obj;
$proto137["m_sql"] = "voto_presidente as p";
$proto137["m_alias"] = "p";
$proto137["m_srcTableName"] = "Pres - Por Sector";
$proto139=array();
$proto139["m_sql"] = "";
$proto139["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto139["m_column"]=$obj;
$proto139["m_contained"] = array();
$proto139["m_strCase"] = "";
$proto139["m_havingmode"] = false;
$proto139["m_inBrackets"] = false;
$proto139["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto139);

$proto137["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto137);

$proto128["m_fromlist"][]=$obj;
												$proto141=array();
$proto141["m_link"] = "SQLL_INNERJOIN";
			$proto142=array();
$proto142["m_strName"] = "urna";
$proto142["m_srcTableName"] = "Pres - Por Sector";
$proto142["m_columns"] = array();
$proto142["m_columns"][] = "id_distrito";
$proto142["m_columns"][] = "id_sector";
$proto142["m_columns"][] = "id_urna";
$proto142["m_columns"][] = "nombre_centro";
$proto142["m_columns"][] = "ubicación";
$proto142["m_columns"][] = "votantes";
$obj = new SQLTable($proto142);

$proto141["m_table"] = $obj;
$proto141["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto141["m_alias"] = "u";
$proto141["m_srcTableName"] = "Pres - Por Sector";
$proto143=array();
$proto143["m_sql"] = "p.id_urna = u.id_urna";
$proto143["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto143["m_column"]=$obj;
$proto143["m_contained"] = array();
$proto143["m_strCase"] = "= u.id_urna";
$proto143["m_havingmode"] = false;
$proto143["m_inBrackets"] = false;
$proto143["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto143);

$proto141["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto141);

$proto128["m_fromlist"][]=$obj;
$proto128["m_groupby"] = array();
$proto128["m_orderby"] = array();
$proto128["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto128);

$proto127["m_sql"] = "(select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto127["m_srcTableName"] = "Pres - Por Sector";
$proto127["m_expr"]=$obj;
$proto127["m_alias"] = "Utilizados";
$obj = new SQLFieldListItem($proto127);

$proto0["m_fieldlist"][]=$obj;
						$proto145=array();
			$proto146=array();
$proto146["m_strHead"] = "select";
$proto146["m_strFieldList"] = "sum(p.no_utilizados)";
$proto146["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto146["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto146["m_strOrderBy"] = "";
	
		;
			$proto146["cipherer"] = null;
$proto148=array();
$proto148["m_sql"] = "u.id_sector = ur.id_sector";
$proto148["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto148["m_column"]=$obj;
$proto148["m_contained"] = array();
$proto148["m_strCase"] = "= ur.id_sector";
$proto148["m_havingmode"] = false;
$proto148["m_inBrackets"] = false;
$proto148["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto148);

$proto146["m_where"] = $obj;
$proto150=array();
$proto150["m_sql"] = "";
$proto150["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto150["m_column"]=$obj;
$proto150["m_contained"] = array();
$proto150["m_strCase"] = "";
$proto150["m_havingmode"] = false;
$proto150["m_inBrackets"] = false;
$proto150["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto150);

$proto146["m_having"] = $obj;
$proto146["m_fieldlist"] = array();
						$proto152=array();
			$proto153=array();
$proto153["m_functiontype"] = "SQLF_SUM";
$proto153["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "no_utilizados",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto153["m_arguments"][]=$obj;
$proto153["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto153);

$proto152["m_sql"] = "sum(p.no_utilizados)";
$proto152["m_srcTableName"] = "Pres - Por Sector";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto146["m_fieldlist"][]=$obj;
$proto146["m_fromlist"] = array();
												$proto155=array();
$proto155["m_link"] = "SQLL_MAIN";
			$proto156=array();
$proto156["m_strName"] = "voto_presidente";
$proto156["m_srcTableName"] = "Pres - Por Sector";
$proto156["m_columns"] = array();
$proto156["m_columns"][] = "elecciones";
$proto156["m_columns"][] = "id_urna";
$proto156["m_columns"][] = "candidato1";
$proto156["m_columns"][] = "candidato2";
$proto156["m_columns"][] = "candidato3";
$proto156["m_columns"][] = "candidato4";
$proto156["m_columns"][] = "candidato5";
$proto156["m_columns"][] = "candidato6";
$proto156["m_columns"][] = "candidato7";
$proto156["m_columns"][] = "candidato8";
$proto156["m_columns"][] = "candidato9";
$proto156["m_columns"][] = "candidato10";
$proto156["m_columns"][] = "candidato11";
$proto156["m_columns"][] = "candidato12";
$proto156["m_columns"][] = "candidato13";
$proto156["m_columns"][] = "candidato14";
$proto156["m_columns"][] = "candidato15";
$proto156["m_columns"][] = "validos";
$proto156["m_columns"][] = "blancos";
$proto156["m_columns"][] = "nulos";
$proto156["m_columns"][] = "utilizados";
$proto156["m_columns"][] = "no_utilizados";
$proto156["m_columns"][] = "total";
$proto156["m_columns"][] = "usuario";
$proto156["m_columns"][] = "fecha";
$proto156["m_columns"][] = "editado_por";
$proto156["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto156);

$proto155["m_table"] = $obj;
$proto155["m_sql"] = "voto_presidente as p";
$proto155["m_alias"] = "p";
$proto155["m_srcTableName"] = "Pres - Por Sector";
$proto157=array();
$proto157["m_sql"] = "";
$proto157["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto157["m_column"]=$obj;
$proto157["m_contained"] = array();
$proto157["m_strCase"] = "";
$proto157["m_havingmode"] = false;
$proto157["m_inBrackets"] = false;
$proto157["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto157);

$proto155["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto155);

$proto146["m_fromlist"][]=$obj;
												$proto159=array();
$proto159["m_link"] = "SQLL_INNERJOIN";
			$proto160=array();
$proto160["m_strName"] = "urna";
$proto160["m_srcTableName"] = "Pres - Por Sector";
$proto160["m_columns"] = array();
$proto160["m_columns"][] = "id_distrito";
$proto160["m_columns"][] = "id_sector";
$proto160["m_columns"][] = "id_urna";
$proto160["m_columns"][] = "nombre_centro";
$proto160["m_columns"][] = "ubicación";
$proto160["m_columns"][] = "votantes";
$obj = new SQLTable($proto160);

$proto159["m_table"] = $obj;
$proto159["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto159["m_alias"] = "u";
$proto159["m_srcTableName"] = "Pres - Por Sector";
$proto161=array();
$proto161["m_sql"] = "p.id_urna = u.id_urna";
$proto161["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto161["m_column"]=$obj;
$proto161["m_contained"] = array();
$proto161["m_strCase"] = "= u.id_urna";
$proto161["m_havingmode"] = false;
$proto161["m_inBrackets"] = false;
$proto161["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto161);

$proto159["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto159);

$proto146["m_fromlist"][]=$obj;
$proto146["m_groupby"] = array();
$proto146["m_orderby"] = array();
$proto146["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto146);

$proto145["m_sql"] = "(select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto145["m_srcTableName"] = "Pres - Por Sector";
$proto145["m_expr"]=$obj;
$proto145["m_alias"] = "No_Utilizados";
$obj = new SQLFieldListItem($proto145);

$proto0["m_fieldlist"][]=$obj;
						$proto163=array();
			$proto164=array();
$proto164["m_strHead"] = "select";
$proto164["m_strFieldList"] = "sum(p.total)";
$proto164["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto164["m_strWhere"] = "u.id_sector = ur.id_sector";
$proto164["m_strOrderBy"] = "";
	
		;
			$proto164["cipherer"] = null;
$proto166=array();
$proto166["m_sql"] = "u.id_sector = ur.id_sector";
$proto166["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto166["m_column"]=$obj;
$proto166["m_contained"] = array();
$proto166["m_strCase"] = "= ur.id_sector";
$proto166["m_havingmode"] = false;
$proto166["m_inBrackets"] = false;
$proto166["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto166);

$proto164["m_where"] = $obj;
$proto168=array();
$proto168["m_sql"] = "";
$proto168["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto168["m_column"]=$obj;
$proto168["m_contained"] = array();
$proto168["m_strCase"] = "";
$proto168["m_havingmode"] = false;
$proto168["m_inBrackets"] = false;
$proto168["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto168);

$proto164["m_having"] = $obj;
$proto164["m_fieldlist"] = array();
						$proto170=array();
			$proto171=array();
$proto171["m_functiontype"] = "SQLF_SUM";
$proto171["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto171["m_arguments"][]=$obj;
$proto171["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto171);

$proto170["m_sql"] = "sum(p.total)";
$proto170["m_srcTableName"] = "Pres - Por Sector";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto164["m_fieldlist"][]=$obj;
$proto164["m_fromlist"] = array();
												$proto173=array();
$proto173["m_link"] = "SQLL_MAIN";
			$proto174=array();
$proto174["m_strName"] = "voto_presidente";
$proto174["m_srcTableName"] = "Pres - Por Sector";
$proto174["m_columns"] = array();
$proto174["m_columns"][] = "elecciones";
$proto174["m_columns"][] = "id_urna";
$proto174["m_columns"][] = "candidato1";
$proto174["m_columns"][] = "candidato2";
$proto174["m_columns"][] = "candidato3";
$proto174["m_columns"][] = "candidato4";
$proto174["m_columns"][] = "candidato5";
$proto174["m_columns"][] = "candidato6";
$proto174["m_columns"][] = "candidato7";
$proto174["m_columns"][] = "candidato8";
$proto174["m_columns"][] = "candidato9";
$proto174["m_columns"][] = "candidato10";
$proto174["m_columns"][] = "candidato11";
$proto174["m_columns"][] = "candidato12";
$proto174["m_columns"][] = "candidato13";
$proto174["m_columns"][] = "candidato14";
$proto174["m_columns"][] = "candidato15";
$proto174["m_columns"][] = "validos";
$proto174["m_columns"][] = "blancos";
$proto174["m_columns"][] = "nulos";
$proto174["m_columns"][] = "utilizados";
$proto174["m_columns"][] = "no_utilizados";
$proto174["m_columns"][] = "total";
$proto174["m_columns"][] = "usuario";
$proto174["m_columns"][] = "fecha";
$proto174["m_columns"][] = "editado_por";
$proto174["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto174);

$proto173["m_table"] = $obj;
$proto173["m_sql"] = "voto_presidente as p";
$proto173["m_alias"] = "p";
$proto173["m_srcTableName"] = "Pres - Por Sector";
$proto175=array();
$proto175["m_sql"] = "";
$proto175["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto175["m_column"]=$obj;
$proto175["m_contained"] = array();
$proto175["m_strCase"] = "";
$proto175["m_havingmode"] = false;
$proto175["m_inBrackets"] = false;
$proto175["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto175);

$proto173["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto173);

$proto164["m_fromlist"][]=$obj;
												$proto177=array();
$proto177["m_link"] = "SQLL_INNERJOIN";
			$proto178=array();
$proto178["m_strName"] = "urna";
$proto178["m_srcTableName"] = "Pres - Por Sector";
$proto178["m_columns"] = array();
$proto178["m_columns"][] = "id_distrito";
$proto178["m_columns"][] = "id_sector";
$proto178["m_columns"][] = "id_urna";
$proto178["m_columns"][] = "nombre_centro";
$proto178["m_columns"][] = "ubicación";
$proto178["m_columns"][] = "votantes";
$obj = new SQLTable($proto178);

$proto177["m_table"] = $obj;
$proto177["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto177["m_alias"] = "u";
$proto177["m_srcTableName"] = "Pres - Por Sector";
$proto179=array();
$proto179["m_sql"] = "p.id_urna = u.id_urna";
$proto179["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto179["m_column"]=$obj;
$proto179["m_contained"] = array();
$proto179["m_strCase"] = "= u.id_urna";
$proto179["m_havingmode"] = false;
$proto179["m_inBrackets"] = false;
$proto179["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto179);

$proto177["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto177);

$proto164["m_fromlist"][]=$obj;
$proto164["m_groupby"] = array();
$proto164["m_orderby"] = array();
$proto164["m_srcTableName"]="Pres - Por Sector";		
$obj = new SQLQuery($proto164);

$proto163["m_sql"] = "(select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_sector = ur.id_sector)";
$proto163["m_srcTableName"] = "Pres - Por Sector";
$proto163["m_expr"]=$obj;
$proto163["m_alias"] = "Total";
$obj = new SQLFieldListItem($proto163);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto181=array();
$proto181["m_link"] = "SQLL_MAIN";
			$proto182=array();
$proto182["m_strName"] = "voto_presidente";
$proto182["m_srcTableName"] = "Pres - Por Sector";
$proto182["m_columns"] = array();
$proto182["m_columns"][] = "elecciones";
$proto182["m_columns"][] = "id_urna";
$proto182["m_columns"][] = "candidato1";
$proto182["m_columns"][] = "candidato2";
$proto182["m_columns"][] = "candidato3";
$proto182["m_columns"][] = "candidato4";
$proto182["m_columns"][] = "candidato5";
$proto182["m_columns"][] = "candidato6";
$proto182["m_columns"][] = "candidato7";
$proto182["m_columns"][] = "candidato8";
$proto182["m_columns"][] = "candidato9";
$proto182["m_columns"][] = "candidato10";
$proto182["m_columns"][] = "candidato11";
$proto182["m_columns"][] = "candidato12";
$proto182["m_columns"][] = "candidato13";
$proto182["m_columns"][] = "candidato14";
$proto182["m_columns"][] = "candidato15";
$proto182["m_columns"][] = "validos";
$proto182["m_columns"][] = "blancos";
$proto182["m_columns"][] = "nulos";
$proto182["m_columns"][] = "utilizados";
$proto182["m_columns"][] = "no_utilizados";
$proto182["m_columns"][] = "total";
$proto182["m_columns"][] = "usuario";
$proto182["m_columns"][] = "fecha";
$proto182["m_columns"][] = "editado_por";
$proto182["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto182);

$proto181["m_table"] = $obj;
$proto181["m_sql"] = "voto_presidente as vp";
$proto181["m_alias"] = "vp";
$proto181["m_srcTableName"] = "Pres - Por Sector";
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

$proto181["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto181);

$proto0["m_fromlist"][]=$obj;
												$proto185=array();
$proto185["m_link"] = "SQLL_INNERJOIN";
			$proto186=array();
$proto186["m_strName"] = "urna";
$proto186["m_srcTableName"] = "Pres - Por Sector";
$proto186["m_columns"] = array();
$proto186["m_columns"][] = "id_distrito";
$proto186["m_columns"][] = "id_sector";
$proto186["m_columns"][] = "id_urna";
$proto186["m_columns"][] = "nombre_centro";
$proto186["m_columns"][] = "ubicación";
$proto186["m_columns"][] = "votantes";
$obj = new SQLTable($proto186);

$proto185["m_table"] = $obj;
$proto185["m_sql"] = "inner join urna as ur on vp.id_urna = ur.id_urna";
$proto185["m_alias"] = "ur";
$proto185["m_srcTableName"] = "Pres - Por Sector";
$proto187=array();
$proto187["m_sql"] = "vp.id_urna = ur.id_urna";
$proto187["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "vp",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto187["m_column"]=$obj;
$proto187["m_contained"] = array();
$proto187["m_strCase"] = "= ur.id_urna";
$proto187["m_havingmode"] = false;
$proto187["m_inBrackets"] = false;
$proto187["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto187);

$proto185["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto185);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto189=array();
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "ur",
	"m_srcTableName" => "Pres - Por Sector"
));

$proto189["m_column"]=$obj;
$obj = new SQLGroupByItem($proto189);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
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

$_SESSION["can1"] = $can1_por;
$_SESSION["can2"] = $can2_por;
$_SESSION["can3"] = $can3_por;
;
unset($query);
?>