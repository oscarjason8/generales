<?php
$tdataurnas___pendientes = array();
$tdataurnas___pendientes[".searchableFields"] = array();
$tdataurnas___pendientes[".ShortName"] = "urnas___pendientes";
$tdataurnas___pendientes[".OwnerID"] = "";
$tdataurnas___pendientes[".OriginalTable"] = "urna";


$tdataurnas___pendientes[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdataurnas___pendientes[".originalPagesByType"] = $tdataurnas___pendientes[".pagesByType"];
$tdataurnas___pendientes[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdataurnas___pendientes[".originalPages"] = $tdataurnas___pendientes[".pages"];
$tdataurnas___pendientes[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdataurnas___pendientes[".originalDefaultPages"] = $tdataurnas___pendientes[".defaultPages"];

//	field labels
$fieldLabelsurnas___pendientes = array();
$fieldToolTipsurnas___pendientes = array();
$pageTitlesurnas___pendientes = array();
$placeHoldersurnas___pendientes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsurnas___pendientes["Spanish"] = array();
	$fieldToolTipsurnas___pendientes["Spanish"] = array();
	$placeHoldersurnas___pendientes["Spanish"] = array();
	$pageTitlesurnas___pendientes["Spanish"] = array();
	$fieldLabelsurnas___pendientes["Spanish"]["id_distrito"] = "Distrito";
	$fieldToolTipsurnas___pendientes["Spanish"]["id_distrito"] = "";
	$placeHoldersurnas___pendientes["Spanish"]["id_distrito"] = "";
	$fieldLabelsurnas___pendientes["Spanish"]["id_sector"] = "Sector";
	$fieldToolTipsurnas___pendientes["Spanish"]["id_sector"] = "";
	$placeHoldersurnas___pendientes["Spanish"]["id_sector"] = "";
	$fieldLabelsurnas___pendientes["Spanish"]["ubicaci_n"] = "Ubicación";
	$fieldToolTipsurnas___pendientes["Spanish"]["ubicaci_n"] = "";
	$placeHoldersurnas___pendientes["Spanish"]["ubicaci_n"] = "";
	$fieldLabelsurnas___pendientes["Spanish"]["urna"] = "Urna";
	$fieldToolTipsurnas___pendientes["Spanish"]["urna"] = "";
	$placeHoldersurnas___pendientes["Spanish"]["urna"] = "";
	$fieldLabelsurnas___pendientes["Spanish"]["presidente"] = "Presidente";
	$fieldToolTipsurnas___pendientes["Spanish"]["presidente"] = "";
	$placeHoldersurnas___pendientes["Spanish"]["presidente"] = "";
	$fieldLabelsurnas___pendientes["Spanish"]["alcalde"] = "Alcalde";
	$fieldToolTipsurnas___pendientes["Spanish"]["alcalde"] = "";
	$placeHoldersurnas___pendientes["Spanish"]["alcalde"] = "";
	$fieldLabelsurnas___pendientes["Spanish"]["diputado"] = "Diputado";
	$fieldToolTipsurnas___pendientes["Spanish"]["diputado"] = "";
	$placeHoldersurnas___pendientes["Spanish"]["diputado"] = "";
	if (count($fieldToolTipsurnas___pendientes["Spanish"]))
		$tdataurnas___pendientes[".isUseToolTips"] = true;
}


	$tdataurnas___pendientes[".NCSearch"] = true;



$tdataurnas___pendientes[".shortTableName"] = "urnas___pendientes";
$tdataurnas___pendientes[".nSecOptions"] = 0;

$tdataurnas___pendientes[".mainTableOwnerID"] = "";
$tdataurnas___pendientes[".entityType"] = 2;
$tdataurnas___pendientes[".connId"] = "internas_new_at_localhost";


$tdataurnas___pendientes[".strOriginalTableName"] = "urna";

	



$tdataurnas___pendientes[".showAddInPopup"] = false;

$tdataurnas___pendientes[".showEditInPopup"] = false;

$tdataurnas___pendientes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataurnas___pendientes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataurnas___pendientes[".listAjax"] = false;
//	temporary
//$tdataurnas___pendientes[".listAjax"] = false;

	$tdataurnas___pendientes[".audit"] = false;

	$tdataurnas___pendientes[".locking"] = false;


$pages = $tdataurnas___pendientes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataurnas___pendientes[".edit"] = true;
	$tdataurnas___pendientes[".afterEditAction"] = 1;
	$tdataurnas___pendientes[".closePopupAfterEdit"] = 1;
	$tdataurnas___pendientes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataurnas___pendientes[".add"] = true;
$tdataurnas___pendientes[".afterAddAction"] = 1;
$tdataurnas___pendientes[".closePopupAfterAdd"] = 1;
$tdataurnas___pendientes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataurnas___pendientes[".list"] = true;
}



$tdataurnas___pendientes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataurnas___pendientes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataurnas___pendientes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataurnas___pendientes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataurnas___pendientes[".printFriendly"] = true;
}



$tdataurnas___pendientes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataurnas___pendientes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataurnas___pendientes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataurnas___pendientes[".isUseAjaxSuggest"] = true;






$tdataurnas___pendientes[".ajaxCodeSnippetAdded"] = false;

$tdataurnas___pendientes[".buttonsAdded"] = false;

$tdataurnas___pendientes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataurnas___pendientes[".isUseTimeForSearch"] = false;


$tdataurnas___pendientes[".badgeColor"] = "E67349";


$tdataurnas___pendientes[".allSearchFields"] = array();
$tdataurnas___pendientes[".filterFields"] = array();
$tdataurnas___pendientes[".requiredSearchFields"] = array();

$tdataurnas___pendientes[".googleLikeFields"] = array();
$tdataurnas___pendientes[".googleLikeFields"][] = "id_distrito";
$tdataurnas___pendientes[".googleLikeFields"][] = "id_sector";
$tdataurnas___pendientes[".googleLikeFields"][] = "ubicación";
$tdataurnas___pendientes[".googleLikeFields"][] = "urna";
$tdataurnas___pendientes[".googleLikeFields"][] = "presidente";
$tdataurnas___pendientes[".googleLikeFields"][] = "alcalde";
$tdataurnas___pendientes[".googleLikeFields"][] = "diputado";



$tdataurnas___pendientes[".tableType"] = "report";

$tdataurnas___pendientes[".printerPageOrientation"] = 0;
$tdataurnas___pendientes[".nPrinterPageScale"] = 100;

$tdataurnas___pendientes[".nPrinterSplitRecords"] = 30;

$tdataurnas___pendientes[".geocodingEnabled"] = false;

//report settings
$tdataurnas___pendientes[".printReportLayout"] = 6;

$tdataurnas___pendientes[".reportPrintPartitionType"] = 1;
$tdataurnas___pendientes[".reportPrintGroupsPerPage"] = 30;
$tdataurnas___pendientes[".lowGroup"] = 0;



$tdataurnas___pendientes[".pageSize"] = 20;






$tdataurnas___pendientes[".repShowDet"] = true;

$tdataurnas___pendientes[".reportLayout"] = 6;

//end of report settings










$tstrOrderBy = "order by id_sector";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataurnas___pendientes[".strOrderBy"] = $tstrOrderBy;

$tdataurnas___pendientes[".orderindexes"] = array();
	$tdataurnas___pendientes[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "id_sector");



$tdataurnas___pendientes[".sqlHead"] = "SELECT id_distrito, id_sector, ubicación, concat(id_urna, \" - \", nombre_centro) as urna,   CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_presidente) THEN 'Ingresada'  	ELSE 'Pendiente'  END as presidente,  CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_alcalde) THEN 'Ingresada'  	ELSE 'Pendiente'  END as alcalde,  CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_diputado) THEN 'Ingresada'      ELSE 'Pendiente'  END as diputado";
$tdataurnas___pendientes[".sqlFrom"] = "FROM urna";
$tdataurnas___pendientes[".sqlWhereExpr"] = "";
$tdataurnas___pendientes[".sqlTail"] = "";

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
$tdataurnas___pendientes[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataurnas___pendientes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataurnas___pendientes[".arrGroupsPerPage"] = $arrGPP;

$tdataurnas___pendientes[".highlightSearchResults"] = true;

$tableKeysurnas___pendientes = array();
$tableKeysurnas___pendientes[] = "id_distrito";
$tableKeysurnas___pendientes[] = "id_sector";
$tdataurnas___pendientes[".Keys"] = $tableKeysurnas___pendientes;


$tdataurnas___pendientes[".hideMobileList"] = array();




//	id_distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_distrito";
	$fdata["GoodName"] = "id_distrito";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Urnas___Pendientes","id_distrito");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "id_distrito";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_distrito";

	
	
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

	

	
	$edata["LookupOrderBy"] = "nombre_distrito";

	
	
	
	
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


	$tdataurnas___pendientes["id_distrito"] = $fdata;
		$tdataurnas___pendientes[".searchableFields"][] = "id_distrito";
//	id_sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_sector";
	$fdata["GoodName"] = "id_sector";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Urnas___Pendientes","id_sector");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "id_sector";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_sector";

	
	
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

	

	
	$edata["LookupOrderBy"] = "nombre_sector";

	
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


	$tdataurnas___pendientes["id_sector"] = $fdata;
		$tdataurnas___pendientes[".searchableFields"][] = "id_sector";
//	ubicación
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ubicación";
	$fdata["GoodName"] = "ubicaci_n";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Urnas___Pendientes","ubicaci_n");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "ubicación";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ubicación";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataurnas___pendientes["ubicación"] = $fdata;
		$tdataurnas___pendientes[".searchableFields"][] = "ubicación";
//	urna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "urna";
	$fdata["GoodName"] = "urna";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Urnas___Pendientes","urna");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "urna";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(id_urna, \" - \", nombre_centro)";

	
	
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


	$tdataurnas___pendientes["urna"] = $fdata;
		$tdataurnas___pendientes[".searchableFields"][] = "urna";
//	presidente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "presidente";
	$fdata["GoodName"] = "presidente";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Urnas___Pendientes","presidente");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "presidente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_presidente) THEN 'Ingresada'  	ELSE 'Pendiente'  END";

	
	
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


	$tdataurnas___pendientes["presidente"] = $fdata;
		$tdataurnas___pendientes[".searchableFields"][] = "presidente";
//	alcalde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "alcalde";
	$fdata["GoodName"] = "alcalde";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Urnas___Pendientes","alcalde");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "alcalde";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_alcalde) THEN 'Ingresada'  	ELSE 'Pendiente'  END";

	
	
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


	$tdataurnas___pendientes["alcalde"] = $fdata;
		$tdataurnas___pendientes[".searchableFields"][] = "alcalde";
//	diputado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "diputado";
	$fdata["GoodName"] = "diputado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Urnas___Pendientes","diputado");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "diputado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_diputado) THEN 'Ingresada'      ELSE 'Pendiente'  END";

	
	
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


	$tdataurnas___pendientes["diputado"] = $fdata;
		$tdataurnas___pendientes[".searchableFields"][] = "diputado";


$tables_data["Urnas - Pendientes"]=&$tdataurnas___pendientes;
$field_labels["Urnas___Pendientes"] = &$fieldLabelsurnas___pendientes;
$fieldToolTips["Urnas___Pendientes"] = &$fieldToolTipsurnas___pendientes;
$placeHolders["Urnas___Pendientes"] = &$placeHoldersurnas___pendientes;
$page_titles["Urnas___Pendientes"] = &$pageTitlesurnas___pendientes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Urnas - Pendientes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Urnas - Pendientes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_urnas___pendientes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_distrito, id_sector, ubicación, concat(id_urna, \" - \", nombre_centro) as urna,   CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_presidente) THEN 'Ingresada'  	ELSE 'Pendiente'  END as presidente,  CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_alcalde) THEN 'Ingresada'  	ELSE 'Pendiente'  END as alcalde,  CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_diputado) THEN 'Ingresada'      ELSE 'Pendiente'  END as diputado";
$proto0["m_strFrom"] = "FROM urna";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by id_sector";
	
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
$proto4["m_sql"] = "presidente = 'Pendiente' or alcalde = 'Pendiente' or diputado = 'Pendiente'";
$proto4["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "presidente = 'Pendiente' or alcalde = 'Pendiente' or diputado = 'Pendiente'"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
						$proto6=array();
$proto6["m_sql"] = "presidente = 'Pendiente'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$proto7=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_presidente) THEN 'Ingresada'  	ELSE 'Pendiente'  END"
));

$proto7["m_sql"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_presidente) THEN 'Ingresada'  	ELSE 'Pendiente'  END";
$proto7["m_srcTableName"] = "Urnas - Pendientes";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "presidente";
$obj = new SQLFieldListItem($proto7);

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 'Pendiente'";
$proto6["m_havingmode"] = true;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = true;
$obj = new SQLLogicalExpr($proto6);

			$proto4["m_contained"][]=$obj;
						$proto9=array();
$proto9["m_sql"] = "alcalde = 'Pendiente'";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_alcalde) THEN 'Ingresada'  	ELSE 'Pendiente'  END"
));

$proto10["m_sql"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_alcalde) THEN 'Ingresada'  	ELSE 'Pendiente'  END";
$proto10["m_srcTableName"] = "Urnas - Pendientes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "alcalde";
$obj = new SQLFieldListItem($proto10);

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "= 'Pendiente'";
$proto9["m_havingmode"] = true;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = true;
$obj = new SQLLogicalExpr($proto9);

			$proto4["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "diputado = 'Pendiente'";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$proto13=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_diputado) THEN 'Ingresada'      ELSE 'Pendiente'  END"
));

$proto13["m_sql"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_diputado) THEN 'Ingresada'      ELSE 'Pendiente'  END";
$proto13["m_srcTableName"] = "Urnas - Pendientes";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "diputado";
$obj = new SQLFieldListItem($proto13);

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "= 'Pendiente'";
$proto12["m_havingmode"] = true;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = true;
$obj = new SQLLogicalExpr($proto12);

			$proto4["m_contained"][]=$obj;
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = true;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "urna",
	"m_srcTableName" => "Urnas - Pendientes"
));

$proto15["m_sql"] = "id_distrito";
$proto15["m_srcTableName"] = "Urnas - Pendientes";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "urna",
	"m_srcTableName" => "Urnas - Pendientes"
));

$proto17["m_sql"] = "id_sector";
$proto17["m_srcTableName"] = "Urnas - Pendientes";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "ubicación",
	"m_strTable" => "urna",
	"m_srcTableName" => "Urnas - Pendientes"
));

$proto19["m_sql"] = "ubicación";
$proto19["m_srcTableName"] = "Urnas - Pendientes";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_CUSTOM";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "id_urna"
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" - \""
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "nombre_centro"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "concat(id_urna, \" - \", nombre_centro)";
$proto21["m_srcTableName"] = "Urnas - Pendientes";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "urna";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_presidente) THEN 'Ingresada'  	ELSE 'Pendiente'  END"
));

$proto26["m_sql"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_presidente) THEN 'Ingresada'  	ELSE 'Pendiente'  END";
$proto26["m_srcTableName"] = "Urnas - Pendientes";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "presidente";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_alcalde) THEN 'Ingresada'  	ELSE 'Pendiente'  END"
));

$proto28["m_sql"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_alcalde) THEN 'Ingresada'  	ELSE 'Pendiente'  END";
$proto28["m_srcTableName"] = "Urnas - Pendientes";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "alcalde";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_diputado) THEN 'Ingresada'      ELSE 'Pendiente'  END"
));

$proto30["m_sql"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_diputado) THEN 'Ingresada'      ELSE 'Pendiente'  END";
$proto30["m_srcTableName"] = "Urnas - Pendientes";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "diputado";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "urna";
$proto33["m_srcTableName"] = "Urnas - Pendientes";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id_distrito";
$proto33["m_columns"][] = "id_sector";
$proto33["m_columns"][] = "id_urna";
$proto33["m_columns"][] = "nombre_centro";
$proto33["m_columns"][] = "ubicación";
$proto33["m_columns"][] = "votantes";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "urna";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "Urnas - Pendientes";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "urna",
	"m_srcTableName" => "Urnas - Pendientes"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 1;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Urnas - Pendientes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_urnas___pendientes = createSqlQuery_urnas___pendientes();


	
		;

							

$tdataurnas___pendientes[".sqlquery"] = $queryData_urnas___pendientes;



$tableEvents["Urnas - Pendientes"] = new eventsBase;
$tdataurnas___pendientes[".hasEvents"] = false;

?>