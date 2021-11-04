<?php
$tdatacorporacion = array();
$tdatacorporacion[".searchableFields"] = array();
$tdatacorporacion[".ShortName"] = "corporacion";
$tdatacorporacion[".OwnerID"] = "";
$tdatacorporacion[".OriginalTable"] = "corporacion";


$tdatacorporacion[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacorporacion[".originalPagesByType"] = $tdatacorporacion[".pagesByType"];
$tdatacorporacion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacorporacion[".originalPages"] = $tdatacorporacion[".pages"];
$tdatacorporacion[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacorporacion[".originalDefaultPages"] = $tdatacorporacion[".defaultPages"];

//	field labels
$fieldLabelscorporacion = array();
$fieldToolTipscorporacion = array();
$pageTitlescorporacion = array();
$placeHolderscorporacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscorporacion["Spanish"] = array();
	$fieldToolTipscorporacion["Spanish"] = array();
	$placeHolderscorporacion["Spanish"] = array();
	$pageTitlescorporacion["Spanish"] = array();
	$fieldLabelscorporacion["Spanish"]["vice_alcalde"] = "Vice-Alcalde";
	$fieldToolTipscorporacion["Spanish"]["vice_alcalde"] = "";
	$placeHolderscorporacion["Spanish"]["vice_alcalde"] = "";
	$fieldLabelscorporacion["Spanish"]["regidor1"] = "Regidor 1";
	$fieldToolTipscorporacion["Spanish"]["regidor1"] = "";
	$placeHolderscorporacion["Spanish"]["regidor1"] = "";
	$fieldLabelscorporacion["Spanish"]["regidor2"] = "Regidor 2";
	$fieldToolTipscorporacion["Spanish"]["regidor2"] = "";
	$placeHolderscorporacion["Spanish"]["regidor2"] = "";
	$fieldLabelscorporacion["Spanish"]["regidor3"] = "Regidor 3";
	$fieldToolTipscorporacion["Spanish"]["regidor3"] = "";
	$placeHolderscorporacion["Spanish"]["regidor3"] = "";
	$fieldLabelscorporacion["Spanish"]["regidor4"] = "Regidor 4";
	$fieldToolTipscorporacion["Spanish"]["regidor4"] = "";
	$placeHolderscorporacion["Spanish"]["regidor4"] = "";
	$fieldLabelscorporacion["Spanish"]["regidor5"] = "Regidor 5";
	$fieldToolTipscorporacion["Spanish"]["regidor5"] = "";
	$placeHolderscorporacion["Spanish"]["regidor5"] = "";
	$fieldLabelscorporacion["Spanish"]["regidor6"] = "Regidor 6";
	$fieldToolTipscorporacion["Spanish"]["regidor6"] = "";
	$placeHolderscorporacion["Spanish"]["regidor6"] = "";
	$fieldLabelscorporacion["Spanish"]["regidor7"] = "Regidor 7";
	$fieldToolTipscorporacion["Spanish"]["regidor7"] = "";
	$placeHolderscorporacion["Spanish"]["regidor7"] = "";
	$fieldLabelscorporacion["Spanish"]["regidor8"] = "Regidor 8";
	$fieldToolTipscorporacion["Spanish"]["regidor8"] = "";
	$placeHolderscorporacion["Spanish"]["regidor8"] = "";
	$fieldLabelscorporacion["Spanish"]["regidor9"] = "Regidor 9";
	$fieldToolTipscorporacion["Spanish"]["regidor9"] = "";
	$placeHolderscorporacion["Spanish"]["regidor9"] = "";
	$fieldLabelscorporacion["Spanish"]["regidor10"] = "Regidor 10";
	$fieldToolTipscorporacion["Spanish"]["regidor10"] = "";
	$placeHolderscorporacion["Spanish"]["regidor10"] = "";
	$fieldLabelscorporacion["Spanish"]["alcalde"] = "Alcalde";
	$fieldToolTipscorporacion["Spanish"]["alcalde"] = "";
	$placeHolderscorporacion["Spanish"]["alcalde"] = "";
	$fieldLabelscorporacion["Spanish"]["id_partido"] = "Partido";
	$fieldToolTipscorporacion["Spanish"]["id_partido"] = "";
	$placeHolderscorporacion["Spanish"]["id_partido"] = "";
	if (count($fieldToolTipscorporacion["Spanish"]))
		$tdatacorporacion[".isUseToolTips"] = true;
}


	$tdatacorporacion[".NCSearch"] = true;



$tdatacorporacion[".shortTableName"] = "corporacion";
$tdatacorporacion[".nSecOptions"] = 0;

$tdatacorporacion[".mainTableOwnerID"] = "";
$tdatacorporacion[".entityType"] = 0;
$tdatacorporacion[".connId"] = "internas_new_at_localhost";


$tdatacorporacion[".strOriginalTableName"] = "corporacion";

	



$tdatacorporacion[".showAddInPopup"] = false;

$tdatacorporacion[".showEditInPopup"] = false;

$tdatacorporacion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacorporacion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacorporacion[".listAjax"] = false;
//	temporary
//$tdatacorporacion[".listAjax"] = false;

	$tdatacorporacion[".audit"] = false;

	$tdatacorporacion[".locking"] = false;


$pages = $tdatacorporacion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacorporacion[".edit"] = true;
	$tdatacorporacion[".afterEditAction"] = 1;
	$tdatacorporacion[".closePopupAfterEdit"] = 1;
	$tdatacorporacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacorporacion[".add"] = true;
$tdatacorporacion[".afterAddAction"] = 1;
$tdatacorporacion[".closePopupAfterAdd"] = 1;
$tdatacorporacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacorporacion[".list"] = true;
}



$tdatacorporacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacorporacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacorporacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacorporacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacorporacion[".printFriendly"] = true;
}



$tdatacorporacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacorporacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacorporacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacorporacion[".isUseAjaxSuggest"] = true;

$tdatacorporacion[".rowHighlite"] = true;





$tdatacorporacion[".ajaxCodeSnippetAdded"] = false;

$tdatacorporacion[".buttonsAdded"] = false;

$tdatacorporacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacorporacion[".isUseTimeForSearch"] = false;


$tdatacorporacion[".badgeColor"] = "BC8F8F";


$tdatacorporacion[".allSearchFields"] = array();
$tdatacorporacion[".filterFields"] = array();
$tdatacorporacion[".requiredSearchFields"] = array();

$tdatacorporacion[".googleLikeFields"] = array();
$tdatacorporacion[".googleLikeFields"][] = "id_partido";
$tdatacorporacion[".googleLikeFields"][] = "alcalde";
$tdatacorporacion[".googleLikeFields"][] = "vice_alcalde";
$tdatacorporacion[".googleLikeFields"][] = "regidor1";
$tdatacorporacion[".googleLikeFields"][] = "regidor2";
$tdatacorporacion[".googleLikeFields"][] = "regidor3";
$tdatacorporacion[".googleLikeFields"][] = "regidor4";
$tdatacorporacion[".googleLikeFields"][] = "regidor5";
$tdatacorporacion[".googleLikeFields"][] = "regidor6";
$tdatacorporacion[".googleLikeFields"][] = "regidor7";
$tdatacorporacion[".googleLikeFields"][] = "regidor8";
$tdatacorporacion[".googleLikeFields"][] = "regidor9";
$tdatacorporacion[".googleLikeFields"][] = "regidor10";



$tdatacorporacion[".tableType"] = "list";

$tdatacorporacion[".printerPageOrientation"] = 0;
$tdatacorporacion[".nPrinterPageScale"] = 100;

$tdatacorporacion[".nPrinterSplitRecords"] = 40;

$tdatacorporacion[".geocodingEnabled"] = false;










$tdatacorporacion[".pageSize"] = 20;

$tdatacorporacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacorporacion[".strOrderBy"] = $tstrOrderBy;

$tdatacorporacion[".orderindexes"] = array();


$tdatacorporacion[".sqlHead"] = "SELECT id_partido,  	alcalde,  	vice_alcalde,  	regidor1,  	regidor2,  	regidor3,  	regidor4,  	regidor5,  	regidor6,  	regidor7,  	regidor8,  	regidor9,  	regidor10";
$tdatacorporacion[".sqlFrom"] = "FROM corporacion";
$tdatacorporacion[".sqlWhereExpr"] = "";
$tdatacorporacion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacorporacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacorporacion[".arrGroupsPerPage"] = $arrGPP;

$tdatacorporacion[".highlightSearchResults"] = true;

$tableKeyscorporacion = array();
$tableKeyscorporacion[] = "id_partido";
$tdatacorporacion[".Keys"] = $tableKeyscorporacion;


$tdatacorporacion[".hideMobileList"] = array();




//	id_partido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_partido";
	$fdata["GoodName"] = "id_partido";
	$fdata["ownerTable"] = "corporacion";
	$fdata["Label"] = GetFieldLabel("corporacion","id_partido");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_partido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_partido";

	
	
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
	$edata["LookupTable"] = "partido";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_partido";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre_partido";

	

	
	$edata["LookupOrderBy"] = "id_partido";

	
	
	
	

	
	
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


	$tdatacorporacion["id_partido"] = $fdata;
		$tdatacorporacion[".searchableFields"][] = "id_partido";
//	alcalde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "alcalde";
	$fdata["GoodName"] = "alcalde";
	$fdata["ownerTable"] = "corporacion";
	$fdata["Label"] = GetFieldLabel("corporacion","alcalde");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "alcalde";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alcalde";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacorporacion["alcalde"] = $fdata;
		$tdatacorporacion[".searchableFields"][] = "alcalde";
//	vice_alcalde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vice_alcalde";
	$fdata["GoodName"] = "vice_alcalde";
	$fdata["ownerTable"] = "corporacion";
	$fdata["Label"] = GetFieldLabel("corporacion","vice_alcalde");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "vice_alcalde";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vice_alcalde";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacorporacion["vice_alcalde"] = $fdata;
		$tdatacorporacion[".searchableFields"][] = "vice_alcalde";
//	regidor1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "regidor1";
	$fdata["GoodName"] = "regidor1";
	$fdata["ownerTable"] = "corporacion";
	$fdata["Label"] = GetFieldLabel("corporacion","regidor1");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "regidor1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "regidor1";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacorporacion["regidor1"] = $fdata;
		$tdatacorporacion[".searchableFields"][] = "regidor1";
//	regidor2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "regidor2";
	$fdata["GoodName"] = "regidor2";
	$fdata["ownerTable"] = "corporacion";
	$fdata["Label"] = GetFieldLabel("corporacion","regidor2");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "regidor2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "regidor2";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacorporacion["regidor2"] = $fdata;
		$tdatacorporacion[".searchableFields"][] = "regidor2";
//	regidor3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "regidor3";
	$fdata["GoodName"] = "regidor3";
	$fdata["ownerTable"] = "corporacion";
	$fdata["Label"] = GetFieldLabel("corporacion","regidor3");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "regidor3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "regidor3";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacorporacion["regidor3"] = $fdata;
		$tdatacorporacion[".searchableFields"][] = "regidor3";
//	regidor4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "regidor4";
	$fdata["GoodName"] = "regidor4";
	$fdata["ownerTable"] = "corporacion";
	$fdata["Label"] = GetFieldLabel("corporacion","regidor4");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "regidor4";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "regidor4";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacorporacion["regidor4"] = $fdata;
		$tdatacorporacion[".searchableFields"][] = "regidor4";
//	regidor5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "regidor5";
	$fdata["GoodName"] = "regidor5";
	$fdata["ownerTable"] = "corporacion";
	$fdata["Label"] = GetFieldLabel("corporacion","regidor5");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "regidor5";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "regidor5";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacorporacion["regidor5"] = $fdata;
		$tdatacorporacion[".searchableFields"][] = "regidor5";
//	regidor6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "regidor6";
	$fdata["GoodName"] = "regidor6";
	$fdata["ownerTable"] = "corporacion";
	$fdata["Label"] = GetFieldLabel("corporacion","regidor6");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "regidor6";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "regidor6";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacorporacion["regidor6"] = $fdata;
		$tdatacorporacion[".searchableFields"][] = "regidor6";
//	regidor7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "regidor7";
	$fdata["GoodName"] = "regidor7";
	$fdata["ownerTable"] = "corporacion";
	$fdata["Label"] = GetFieldLabel("corporacion","regidor7");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "regidor7";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "regidor7";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacorporacion["regidor7"] = $fdata;
		$tdatacorporacion[".searchableFields"][] = "regidor7";
//	regidor8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "regidor8";
	$fdata["GoodName"] = "regidor8";
	$fdata["ownerTable"] = "corporacion";
	$fdata["Label"] = GetFieldLabel("corporacion","regidor8");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "regidor8";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "regidor8";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacorporacion["regidor8"] = $fdata;
		$tdatacorporacion[".searchableFields"][] = "regidor8";
//	regidor9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "regidor9";
	$fdata["GoodName"] = "regidor9";
	$fdata["ownerTable"] = "corporacion";
	$fdata["Label"] = GetFieldLabel("corporacion","regidor9");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "regidor9";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "regidor9";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacorporacion["regidor9"] = $fdata;
		$tdatacorporacion[".searchableFields"][] = "regidor9";
//	regidor10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "regidor10";
	$fdata["GoodName"] = "regidor10";
	$fdata["ownerTable"] = "corporacion";
	$fdata["Label"] = GetFieldLabel("corporacion","regidor10");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "regidor10";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "regidor10";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacorporacion["regidor10"] = $fdata;
		$tdatacorporacion[".searchableFields"][] = "regidor10";


$tables_data["corporacion"]=&$tdatacorporacion;
$field_labels["corporacion"] = &$fieldLabelscorporacion;
$fieldToolTips["corporacion"] = &$fieldToolTipscorporacion;
$placeHolders["corporacion"] = &$placeHolderscorporacion;
$page_titles["corporacion"] = &$pageTitlescorporacion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["corporacion"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["corporacion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_corporacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_partido,  	alcalde,  	vice_alcalde,  	regidor1,  	regidor2,  	regidor3,  	regidor4,  	regidor5,  	regidor6,  	regidor7,  	regidor8,  	regidor9,  	regidor10";
$proto0["m_strFrom"] = "FROM corporacion";
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
	"m_strName" => "id_partido",
	"m_strTable" => "corporacion",
	"m_srcTableName" => "corporacion"
));

$proto6["m_sql"] = "id_partido";
$proto6["m_srcTableName"] = "corporacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "alcalde",
	"m_strTable" => "corporacion",
	"m_srcTableName" => "corporacion"
));

$proto8["m_sql"] = "alcalde";
$proto8["m_srcTableName"] = "corporacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vice_alcalde",
	"m_strTable" => "corporacion",
	"m_srcTableName" => "corporacion"
));

$proto10["m_sql"] = "vice_alcalde";
$proto10["m_srcTableName"] = "corporacion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "regidor1",
	"m_strTable" => "corporacion",
	"m_srcTableName" => "corporacion"
));

$proto12["m_sql"] = "regidor1";
$proto12["m_srcTableName"] = "corporacion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "regidor2",
	"m_strTable" => "corporacion",
	"m_srcTableName" => "corporacion"
));

$proto14["m_sql"] = "regidor2";
$proto14["m_srcTableName"] = "corporacion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "regidor3",
	"m_strTable" => "corporacion",
	"m_srcTableName" => "corporacion"
));

$proto16["m_sql"] = "regidor3";
$proto16["m_srcTableName"] = "corporacion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "regidor4",
	"m_strTable" => "corporacion",
	"m_srcTableName" => "corporacion"
));

$proto18["m_sql"] = "regidor4";
$proto18["m_srcTableName"] = "corporacion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "regidor5",
	"m_strTable" => "corporacion",
	"m_srcTableName" => "corporacion"
));

$proto20["m_sql"] = "regidor5";
$proto20["m_srcTableName"] = "corporacion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "regidor6",
	"m_strTable" => "corporacion",
	"m_srcTableName" => "corporacion"
));

$proto22["m_sql"] = "regidor6";
$proto22["m_srcTableName"] = "corporacion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "regidor7",
	"m_strTable" => "corporacion",
	"m_srcTableName" => "corporacion"
));

$proto24["m_sql"] = "regidor7";
$proto24["m_srcTableName"] = "corporacion";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "regidor8",
	"m_strTable" => "corporacion",
	"m_srcTableName" => "corporacion"
));

$proto26["m_sql"] = "regidor8";
$proto26["m_srcTableName"] = "corporacion";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "regidor9",
	"m_strTable" => "corporacion",
	"m_srcTableName" => "corporacion"
));

$proto28["m_sql"] = "regidor9";
$proto28["m_srcTableName"] = "corporacion";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "regidor10",
	"m_strTable" => "corporacion",
	"m_srcTableName" => "corporacion"
));

$proto30["m_sql"] = "regidor10";
$proto30["m_srcTableName"] = "corporacion";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "corporacion";
$proto33["m_srcTableName"] = "corporacion";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id_partido";
$proto33["m_columns"][] = "alcalde";
$proto33["m_columns"][] = "vice_alcalde";
$proto33["m_columns"][] = "regidor1";
$proto33["m_columns"][] = "regidor2";
$proto33["m_columns"][] = "regidor3";
$proto33["m_columns"][] = "regidor4";
$proto33["m_columns"][] = "regidor5";
$proto33["m_columns"][] = "regidor6";
$proto33["m_columns"][] = "regidor7";
$proto33["m_columns"][] = "regidor8";
$proto33["m_columns"][] = "regidor9";
$proto33["m_columns"][] = "regidor10";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "corporacion";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "corporacion";
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
$proto0["m_srcTableName"]="corporacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_corporacion = createSqlQuery_corporacion();


	
		;

													

$tdatacorporacion[".sqlquery"] = $queryData_corporacion;



$tableEvents["corporacion"] = new eventsBase;
$tdatacorporacion[".hasEvents"] = false;

?>