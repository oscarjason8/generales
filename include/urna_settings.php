<?php
$tdataurna = array();
$tdataurna[".searchableFields"] = array();
$tdataurna[".ShortName"] = "urna";
$tdataurna[".OwnerID"] = "";
$tdataurna[".OriginalTable"] = "urna";


$tdataurna[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataurna[".originalPagesByType"] = $tdataurna[".pagesByType"];
$tdataurna[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataurna[".originalPages"] = $tdataurna[".pages"];
$tdataurna[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataurna[".originalDefaultPages"] = $tdataurna[".defaultPages"];

//	field labels
$fieldLabelsurna = array();
$fieldToolTipsurna = array();
$pageTitlesurna = array();
$placeHoldersurna = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsurna["Spanish"] = array();
	$fieldToolTipsurna["Spanish"] = array();
	$placeHoldersurna["Spanish"] = array();
	$pageTitlesurna["Spanish"] = array();
	$fieldLabelsurna["Spanish"]["id_distrito"] = "Distrito";
	$fieldToolTipsurna["Spanish"]["id_distrito"] = "";
	$placeHoldersurna["Spanish"]["id_distrito"] = "";
	$fieldLabelsurna["Spanish"]["id_sector"] = "Sector";
	$fieldToolTipsurna["Spanish"]["id_sector"] = "";
	$placeHoldersurna["Spanish"]["id_sector"] = "";
	$fieldLabelsurna["Spanish"]["id_urna"] = "Urna";
	$fieldToolTipsurna["Spanish"]["id_urna"] = "";
	$placeHoldersurna["Spanish"]["id_urna"] = "";
	$fieldLabelsurna["Spanish"]["nombre_centro"] = "Centro de Votación";
	$fieldToolTipsurna["Spanish"]["nombre_centro"] = "";
	$placeHoldersurna["Spanish"]["nombre_centro"] = "";
	$fieldLabelsurna["Spanish"]["ubicaci_n"] = "Ubicación";
	$fieldToolTipsurna["Spanish"]["ubicaci_n"] = "";
	$placeHoldersurna["Spanish"]["ubicaci_n"] = "";
	$fieldLabelsurna["Spanish"]["votantes"] = "Votantes";
	$fieldToolTipsurna["Spanish"]["votantes"] = "";
	$placeHoldersurna["Spanish"]["votantes"] = "";
	if (count($fieldToolTipsurna["Spanish"]))
		$tdataurna[".isUseToolTips"] = true;
}


	$tdataurna[".NCSearch"] = true;



$tdataurna[".shortTableName"] = "urna";
$tdataurna[".nSecOptions"] = 0;

$tdataurna[".mainTableOwnerID"] = "";
$tdataurna[".entityType"] = 0;
$tdataurna[".connId"] = "internas_new_at_localhost";


$tdataurna[".strOriginalTableName"] = "urna";

	



$tdataurna[".showAddInPopup"] = false;

$tdataurna[".showEditInPopup"] = false;

$tdataurna[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataurna[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataurna[".listAjax"] = false;
//	temporary
//$tdataurna[".listAjax"] = false;

	$tdataurna[".audit"] = false;

	$tdataurna[".locking"] = false;


$pages = $tdataurna[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataurna[".edit"] = true;
	$tdataurna[".afterEditAction"] = 1;
	$tdataurna[".closePopupAfterEdit"] = 1;
	$tdataurna[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataurna[".add"] = true;
$tdataurna[".afterAddAction"] = 1;
$tdataurna[".closePopupAfterAdd"] = 1;
$tdataurna[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataurna[".list"] = true;
}



$tdataurna[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataurna[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataurna[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataurna[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataurna[".printFriendly"] = true;
}



$tdataurna[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataurna[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataurna[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataurna[".isUseAjaxSuggest"] = true;

$tdataurna[".rowHighlite"] = true;





$tdataurna[".ajaxCodeSnippetAdded"] = false;

$tdataurna[".buttonsAdded"] = false;

$tdataurna[".addPageEvents"] = false;

// use timepicker for search panel
$tdataurna[".isUseTimeForSearch"] = false;


$tdataurna[".badgeColor"] = "edca00";


$tdataurna[".allSearchFields"] = array();
$tdataurna[".filterFields"] = array();
$tdataurna[".requiredSearchFields"] = array();

$tdataurna[".googleLikeFields"] = array();
$tdataurna[".googleLikeFields"][] = "id_distrito";
$tdataurna[".googleLikeFields"][] = "id_sector";
$tdataurna[".googleLikeFields"][] = "id_urna";
$tdataurna[".googleLikeFields"][] = "nombre_centro";
$tdataurna[".googleLikeFields"][] = "ubicación";
$tdataurna[".googleLikeFields"][] = "votantes";



$tdataurna[".tableType"] = "list";

$tdataurna[".printerPageOrientation"] = 0;
$tdataurna[".nPrinterPageScale"] = 100;

$tdataurna[".nPrinterSplitRecords"] = 40;

$tdataurna[".geocodingEnabled"] = false;










$tdataurna[".pageSize"] = 20;

$tdataurna[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataurna[".strOrderBy"] = $tstrOrderBy;

$tdataurna[".orderindexes"] = array();


$tdataurna[".sqlHead"] = "SELECT id_distrito,  	id_sector,  	id_urna,  	nombre_centro,  	`ubicación`,  	votantes";
$tdataurna[".sqlFrom"] = "FROM urna";
$tdataurna[".sqlWhereExpr"] = "";
$tdataurna[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataurna[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataurna[".arrGroupsPerPage"] = $arrGPP;

$tdataurna[".highlightSearchResults"] = true;

$tableKeysurna = array();
$tableKeysurna[] = "id_distrito";
$tableKeysurna[] = "id_sector";
$tableKeysurna[] = "id_urna";
$tdataurna[".Keys"] = $tableKeysurna;


$tdataurna[".hideMobileList"] = array();




//	id_distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_distrito";
	$fdata["GoodName"] = "id_distrito";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("urna","id_distrito");
	$fdata["FieldType"] = 3;

	
	
	
			

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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdataurna["id_distrito"] = $fdata;
		$tdataurna[".searchableFields"][] = "id_distrito";
//	id_sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_sector";
	$fdata["GoodName"] = "id_sector";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("urna","id_sector");
	$fdata["FieldType"] = 3;

	
	
	
			

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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdataurna["id_sector"] = $fdata;
		$tdataurna[".searchableFields"][] = "id_sector";
//	id_urna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_urna";
	$fdata["GoodName"] = "id_urna";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("urna","id_urna");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_urna";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_urna";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdataurna["id_urna"] = $fdata;
		$tdataurna[".searchableFields"][] = "id_urna";
//	nombre_centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre_centro";
	$fdata["GoodName"] = "nombre_centro";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("urna","nombre_centro");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre_centro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_centro";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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
			$edata["EditParams"].= " maxlength=40";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdataurna["nombre_centro"] = $fdata;
		$tdataurna[".searchableFields"][] = "nombre_centro";
//	ubicación
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ubicación";
	$fdata["GoodName"] = "ubicaci_n";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("urna","ubicaci_n");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ubicación";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ubicación`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdataurna["ubicación"] = $fdata;
		$tdataurna[".searchableFields"][] = "ubicación";
//	votantes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "votantes";
	$fdata["GoodName"] = "votantes";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("urna","votantes");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "votantes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "votantes";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdataurna["votantes"] = $fdata;
		$tdataurna[".searchableFields"][] = "votantes";


$tables_data["urna"]=&$tdataurna;
$field_labels["urna"] = &$fieldLabelsurna;
$fieldToolTips["urna"] = &$fieldToolTipsurna;
$placeHolders["urna"] = &$placeHoldersurna;
$page_titles["urna"] = &$pageTitlesurna;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["urna"] = array();
//	voto_presidente
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="voto_presidente";
		$detailsParam["dOriginalTable"] = "voto_presidente";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "voto_presidente";
	$detailsParam["dCaptionTable"] = GetTableCaption("voto_presidente");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["urna"][$dIndex] = $detailsParam;

	
		$detailsTablesData["urna"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["urna"][$dIndex]["masterKeys"][]="id_urna";

				$detailsTablesData["urna"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["urna"][$dIndex]["detailKeys"][]="id_urna";
//	voto_diputado
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="voto_diputado";
		$detailsParam["dOriginalTable"] = "voto_diputado";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "voto_diputado";
	$detailsParam["dCaptionTable"] = GetTableCaption("voto_diputado");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["urna"][$dIndex] = $detailsParam;

	
		$detailsTablesData["urna"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["urna"][$dIndex]["masterKeys"][]="id_urna";

				$detailsTablesData["urna"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["urna"][$dIndex]["detailKeys"][]="id_urna";
//	voto_alcalde
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="voto_alcalde";
		$detailsParam["dOriginalTable"] = "voto_alcalde";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "voto_alcalde";
	$detailsParam["dCaptionTable"] = GetTableCaption("voto_alcalde");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["urna"][$dIndex] = $detailsParam;

	
		$detailsTablesData["urna"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["urna"][$dIndex]["masterKeys"][]="id_urna";

				$detailsTablesData["urna"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["urna"][$dIndex]["detailKeys"][]="id_urna";

// tables which are master tables for current table (detail)
$masterTablesData["urna"] = array();



	
				$strOriginalDetailsTable="sectores";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="sectores";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "sectores";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["urna"][0] = $masterParams;
				$masterTablesData["urna"][0]["masterKeys"] = array();
	$masterTablesData["urna"][0]["masterKeys"][]="id_sector";
				$masterTablesData["urna"][0]["detailKeys"] = array();
	$masterTablesData["urna"][0]["detailKeys"][]="id_sector";
		
	
				$strOriginalDetailsTable="distritos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="distritos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "distritos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["urna"][1] = $masterParams;
				$masterTablesData["urna"][1]["masterKeys"] = array();
	$masterTablesData["urna"][1]["masterKeys"][]="id_distrito";
				$masterTablesData["urna"][1]["detailKeys"] = array();
	$masterTablesData["urna"][1]["detailKeys"][]="id_distrito";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_urna()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_distrito,  	id_sector,  	id_urna,  	nombre_centro,  	`ubicación`,  	votantes";
$proto0["m_strFrom"] = "FROM urna";
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
	"m_strTable" => "urna",
	"m_srcTableName" => "urna"
));

$proto6["m_sql"] = "id_distrito";
$proto6["m_srcTableName"] = "urna";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "urna",
	"m_srcTableName" => "urna"
));

$proto8["m_sql"] = "id_sector";
$proto8["m_srcTableName"] = "urna";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "urna",
	"m_srcTableName" => "urna"
));

$proto10["m_sql"] = "id_urna";
$proto10["m_srcTableName"] = "urna";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_centro",
	"m_strTable" => "urna",
	"m_srcTableName" => "urna"
));

$proto12["m_sql"] = "nombre_centro";
$proto12["m_srcTableName"] = "urna";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ubicación",
	"m_strTable" => "urna",
	"m_srcTableName" => "urna"
));

$proto14["m_sql"] = "`ubicación`";
$proto14["m_srcTableName"] = "urna";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "votantes",
	"m_strTable" => "urna",
	"m_srcTableName" => "urna"
));

$proto16["m_sql"] = "votantes";
$proto16["m_srcTableName"] = "urna";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "urna";
$proto19["m_srcTableName"] = "urna";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id_distrito";
$proto19["m_columns"][] = "id_sector";
$proto19["m_columns"][] = "id_urna";
$proto19["m_columns"][] = "nombre_centro";
$proto19["m_columns"][] = "ubicación";
$proto19["m_columns"][] = "votantes";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "urna";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "urna";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="urna";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_urna = createSqlQuery_urna();


	
		;

						

$tdataurna[".sqlquery"] = $queryData_urna;



$tableEvents["urna"] = new eventsBase;
$tdataurna[".hasEvents"] = false;

?>