<?php
$tdataurnas___completadas = array();
$tdataurnas___completadas[".searchableFields"] = array();
$tdataurnas___completadas[".ShortName"] = "urnas___completadas";
$tdataurnas___completadas[".OwnerID"] = "";
$tdataurnas___completadas[".OriginalTable"] = "urna";


$tdataurnas___completadas[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdataurnas___completadas[".originalPagesByType"] = $tdataurnas___completadas[".pagesByType"];
$tdataurnas___completadas[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdataurnas___completadas[".originalPages"] = $tdataurnas___completadas[".pages"];
$tdataurnas___completadas[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdataurnas___completadas[".originalDefaultPages"] = $tdataurnas___completadas[".defaultPages"];

//	field labels
$fieldLabelsurnas___completadas = array();
$fieldToolTipsurnas___completadas = array();
$pageTitlesurnas___completadas = array();
$placeHoldersurnas___completadas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsurnas___completadas["Spanish"] = array();
	$fieldToolTipsurnas___completadas["Spanish"] = array();
	$placeHoldersurnas___completadas["Spanish"] = array();
	$pageTitlesurnas___completadas["Spanish"] = array();
	$fieldLabelsurnas___completadas["Spanish"]["id_distrito"] = "Distrito";
	$fieldToolTipsurnas___completadas["Spanish"]["id_distrito"] = "";
	$placeHoldersurnas___completadas["Spanish"]["id_distrito"] = "";
	$fieldLabelsurnas___completadas["Spanish"]["id_sector"] = "Sector";
	$fieldToolTipsurnas___completadas["Spanish"]["id_sector"] = "";
	$placeHoldersurnas___completadas["Spanish"]["id_sector"] = "";
	$fieldLabelsurnas___completadas["Spanish"]["ubicaci_n"] = "Ubicación";
	$fieldToolTipsurnas___completadas["Spanish"]["ubicaci_n"] = "";
	$placeHoldersurnas___completadas["Spanish"]["ubicaci_n"] = "";
	$fieldLabelsurnas___completadas["Spanish"]["urna"] = "Urna";
	$fieldToolTipsurnas___completadas["Spanish"]["urna"] = "";
	$placeHoldersurnas___completadas["Spanish"]["urna"] = "";
	$fieldLabelsurnas___completadas["Spanish"]["presidente"] = "Presidente";
	$fieldToolTipsurnas___completadas["Spanish"]["presidente"] = "";
	$placeHoldersurnas___completadas["Spanish"]["presidente"] = "";
	$fieldLabelsurnas___completadas["Spanish"]["alcalde"] = "Alcalde";
	$fieldToolTipsurnas___completadas["Spanish"]["alcalde"] = "";
	$placeHoldersurnas___completadas["Spanish"]["alcalde"] = "";
	$fieldLabelsurnas___completadas["Spanish"]["diputado"] = "Diputado";
	$fieldToolTipsurnas___completadas["Spanish"]["diputado"] = "";
	$placeHoldersurnas___completadas["Spanish"]["diputado"] = "";
	if (count($fieldToolTipsurnas___completadas["Spanish"]))
		$tdataurnas___completadas[".isUseToolTips"] = true;
}


	$tdataurnas___completadas[".NCSearch"] = true;



$tdataurnas___completadas[".shortTableName"] = "urnas___completadas";
$tdataurnas___completadas[".nSecOptions"] = 0;

$tdataurnas___completadas[".mainTableOwnerID"] = "";
$tdataurnas___completadas[".entityType"] = 2;
$tdataurnas___completadas[".connId"] = "internas_new_at_localhost";


$tdataurnas___completadas[".strOriginalTableName"] = "urna";

	



$tdataurnas___completadas[".showAddInPopup"] = false;

$tdataurnas___completadas[".showEditInPopup"] = false;

$tdataurnas___completadas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataurnas___completadas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataurnas___completadas[".listAjax"] = false;
//	temporary
//$tdataurnas___completadas[".listAjax"] = false;

	$tdataurnas___completadas[".audit"] = false;

	$tdataurnas___completadas[".locking"] = false;


$pages = $tdataurnas___completadas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataurnas___completadas[".edit"] = true;
	$tdataurnas___completadas[".afterEditAction"] = 1;
	$tdataurnas___completadas[".closePopupAfterEdit"] = 1;
	$tdataurnas___completadas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataurnas___completadas[".add"] = true;
$tdataurnas___completadas[".afterAddAction"] = 1;
$tdataurnas___completadas[".closePopupAfterAdd"] = 1;
$tdataurnas___completadas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataurnas___completadas[".list"] = true;
}



$tdataurnas___completadas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataurnas___completadas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataurnas___completadas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataurnas___completadas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataurnas___completadas[".printFriendly"] = true;
}



$tdataurnas___completadas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataurnas___completadas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataurnas___completadas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataurnas___completadas[".isUseAjaxSuggest"] = true;






$tdataurnas___completadas[".ajaxCodeSnippetAdded"] = false;

$tdataurnas___completadas[".buttonsAdded"] = false;

$tdataurnas___completadas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataurnas___completadas[".isUseTimeForSearch"] = false;


$tdataurnas___completadas[".badgeColor"] = "B22222";


$tdataurnas___completadas[".allSearchFields"] = array();
$tdataurnas___completadas[".filterFields"] = array();
$tdataurnas___completadas[".requiredSearchFields"] = array();

$tdataurnas___completadas[".googleLikeFields"] = array();
$tdataurnas___completadas[".googleLikeFields"][] = "id_distrito";
$tdataurnas___completadas[".googleLikeFields"][] = "id_sector";
$tdataurnas___completadas[".googleLikeFields"][] = "ubicación";
$tdataurnas___completadas[".googleLikeFields"][] = "urna";
$tdataurnas___completadas[".googleLikeFields"][] = "presidente";
$tdataurnas___completadas[".googleLikeFields"][] = "alcalde";
$tdataurnas___completadas[".googleLikeFields"][] = "diputado";



$tdataurnas___completadas[".tableType"] = "report";

$tdataurnas___completadas[".printerPageOrientation"] = 0;
$tdataurnas___completadas[".nPrinterPageScale"] = 100;

$tdataurnas___completadas[".nPrinterSplitRecords"] = 30;

$tdataurnas___completadas[".geocodingEnabled"] = false;

//report settings
$tdataurnas___completadas[".printReportLayout"] = 6;

$tdataurnas___completadas[".reportPrintPartitionType"] = 1;
$tdataurnas___completadas[".reportPrintGroupsPerPage"] = 30;
$tdataurnas___completadas[".lowGroup"] = 0;



$tdataurnas___completadas[".pageSize"] = 20;






$tdataurnas___completadas[".repShowDet"] = true;

$tdataurnas___completadas[".reportLayout"] = 6;

//end of report settings










$tstrOrderBy = "order by id_sector";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataurnas___completadas[".strOrderBy"] = $tstrOrderBy;

$tdataurnas___completadas[".orderindexes"] = array();
	$tdataurnas___completadas[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "id_sector");



$tdataurnas___completadas[".sqlHead"] = "SELECT id_distrito, id_sector, ubicación, concat(id_urna, \" - \", nombre_centro) as urna,  CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_presidente) THEN 'Ingresada'  END as presidente,  CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_alcalde) THEN 'Ingresada'  END as alcalde,  CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_diputado) THEN 'Ingresada'  END as diputado";
$tdataurnas___completadas[".sqlFrom"] = "FROM urna";
$tdataurnas___completadas[".sqlWhereExpr"] = "";
$tdataurnas___completadas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataurnas___completadas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataurnas___completadas[".arrGroupsPerPage"] = $arrGPP;

$tdataurnas___completadas[".highlightSearchResults"] = true;

$tableKeysurnas___completadas = array();
$tableKeysurnas___completadas[] = "id_distrito";
$tableKeysurnas___completadas[] = "id_sector";
$tdataurnas___completadas[".Keys"] = $tableKeysurnas___completadas;


$tdataurnas___completadas[".hideMobileList"] = array();




//	id_distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_distrito";
	$fdata["GoodName"] = "id_distrito";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Urnas___Completadas","id_distrito");
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


	$tdataurnas___completadas["id_distrito"] = $fdata;
		$tdataurnas___completadas[".searchableFields"][] = "id_distrito";
//	id_sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_sector";
	$fdata["GoodName"] = "id_sector";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Urnas___Completadas","id_sector");
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


	$tdataurnas___completadas["id_sector"] = $fdata;
		$tdataurnas___completadas[".searchableFields"][] = "id_sector";
//	ubicación
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ubicación";
	$fdata["GoodName"] = "ubicaci_n";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Urnas___Completadas","ubicaci_n");
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


	$tdataurnas___completadas["ubicación"] = $fdata;
		$tdataurnas___completadas[".searchableFields"][] = "ubicación";
//	urna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "urna";
	$fdata["GoodName"] = "urna";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Urnas___Completadas","urna");
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


	$tdataurnas___completadas["urna"] = $fdata;
		$tdataurnas___completadas[".searchableFields"][] = "urna";
//	presidente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "presidente";
	$fdata["GoodName"] = "presidente";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Urnas___Completadas","presidente");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "presidente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_presidente) THEN 'Ingresada'  END";

	
	
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


	$tdataurnas___completadas["presidente"] = $fdata;
		$tdataurnas___completadas[".searchableFields"][] = "presidente";
//	alcalde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "alcalde";
	$fdata["GoodName"] = "alcalde";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Urnas___Completadas","alcalde");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "alcalde";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_alcalde) THEN 'Ingresada'  END";

	
	
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


	$tdataurnas___completadas["alcalde"] = $fdata;
		$tdataurnas___completadas[".searchableFields"][] = "alcalde";
//	diputado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "diputado";
	$fdata["GoodName"] = "diputado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Urnas___Completadas","diputado");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "diputado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_diputado) THEN 'Ingresada'  END";

	
	
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


	$tdataurnas___completadas["diputado"] = $fdata;
		$tdataurnas___completadas[".searchableFields"][] = "diputado";


$tables_data["Urnas - Completadas"]=&$tdataurnas___completadas;
$field_labels["Urnas___Completadas"] = &$fieldLabelsurnas___completadas;
$fieldToolTips["Urnas___Completadas"] = &$fieldToolTipsurnas___completadas;
$placeHolders["Urnas___Completadas"] = &$placeHoldersurnas___completadas;
$page_titles["Urnas___Completadas"] = &$pageTitlesurnas___completadas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Urnas - Completadas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Urnas - Completadas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_urnas___completadas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_distrito, id_sector, ubicación, concat(id_urna, \" - \", nombre_centro) as urna,  CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_presidente) THEN 'Ingresada'  END as presidente,  CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_alcalde) THEN 'Ingresada'  END as alcalde,  CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_diputado) THEN 'Ingresada'  END as diputado";
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
$proto4["m_sql"] = "presidente = 'Ingresada' and alcalde = 'Ingresada' and diputado = 'Ingresada'";
$proto4["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "presidente = 'Ingresada' and alcalde = 'Ingresada' and diputado = 'Ingresada'"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
						$proto6=array();
$proto6["m_sql"] = "presidente = 'Ingresada'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$proto7=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_presidente) THEN 'Ingresada'  END"
));

$proto7["m_sql"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_presidente) THEN 'Ingresada'  END";
$proto7["m_srcTableName"] = "Urnas - Completadas";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "presidente";
$obj = new SQLFieldListItem($proto7);

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 'Ingresada'";
$proto6["m_havingmode"] = true;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = true;
$obj = new SQLLogicalExpr($proto6);

			$proto4["m_contained"][]=$obj;
						$proto9=array();
$proto9["m_sql"] = "alcalde = 'Ingresada'";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_alcalde) THEN 'Ingresada'  END"
));

$proto10["m_sql"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_alcalde) THEN 'Ingresada'  END";
$proto10["m_srcTableName"] = "Urnas - Completadas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "alcalde";
$obj = new SQLFieldListItem($proto10);

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "= 'Ingresada'";
$proto9["m_havingmode"] = true;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = true;
$obj = new SQLLogicalExpr($proto9);

			$proto4["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "diputado = 'Ingresada'";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$proto13=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_diputado) THEN 'Ingresada'  END"
));

$proto13["m_sql"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_diputado) THEN 'Ingresada'  END";
$proto13["m_srcTableName"] = "Urnas - Completadas";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "diputado";
$obj = new SQLFieldListItem($proto13);

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "= 'Ingresada'";
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
	"m_srcTableName" => "Urnas - Completadas"
));

$proto15["m_sql"] = "id_distrito";
$proto15["m_srcTableName"] = "Urnas - Completadas";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "urna",
	"m_srcTableName" => "Urnas - Completadas"
));

$proto17["m_sql"] = "id_sector";
$proto17["m_srcTableName"] = "Urnas - Completadas";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "ubicación",
	"m_strTable" => "urna",
	"m_srcTableName" => "Urnas - Completadas"
));

$proto19["m_sql"] = "ubicación";
$proto19["m_srcTableName"] = "Urnas - Completadas";
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
$proto21["m_srcTableName"] = "Urnas - Completadas";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "urna";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_presidente) THEN 'Ingresada'  END"
));

$proto26["m_sql"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_presidente) THEN 'Ingresada'  END";
$proto26["m_srcTableName"] = "Urnas - Completadas";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "presidente";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_alcalde) THEN 'Ingresada'  END"
));

$proto28["m_sql"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_alcalde) THEN 'Ingresada'  END";
$proto28["m_srcTableName"] = "Urnas - Completadas";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "alcalde";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_diputado) THEN 'Ingresada'  END"
));

$proto30["m_sql"] = "CASE  	WHEN id_urna IN (SELECT id_urna FROM voto_diputado) THEN 'Ingresada'  END";
$proto30["m_srcTableName"] = "Urnas - Completadas";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "diputado";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "urna";
$proto33["m_srcTableName"] = "Urnas - Completadas";
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
$proto32["m_srcTableName"] = "Urnas - Completadas";
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
	"m_srcTableName" => "Urnas - Completadas"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 1;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Urnas - Completadas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_urnas___completadas = createSqlQuery_urnas___completadas();


	
		;

							

$tdataurnas___completadas[".sqlquery"] = $queryData_urnas___completadas;



$tableEvents["Urnas - Completadas"] = new eventsBase;
$tdataurnas___completadas[".hasEvents"] = false;

?>