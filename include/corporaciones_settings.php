<?php
$tdatacorporaciones = array();
$tdatacorporaciones[".searchableFields"] = array();
$tdatacorporaciones[".ShortName"] = "corporaciones";
$tdatacorporaciones[".OwnerID"] = "";
$tdatacorporaciones[".OriginalTable"] = "corporaciones";


$tdatacorporaciones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacorporaciones[".originalPagesByType"] = $tdatacorporaciones[".pagesByType"];
$tdatacorporaciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacorporaciones[".originalPages"] = $tdatacorporaciones[".pages"];
$tdatacorporaciones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacorporaciones[".originalDefaultPages"] = $tdatacorporaciones[".defaultPages"];

//	field labels
$fieldLabelscorporaciones = array();
$fieldToolTipscorporaciones = array();
$pageTitlescorporaciones = array();
$placeHolderscorporaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscorporaciones["Spanish"] = array();
	$fieldToolTipscorporaciones["Spanish"] = array();
	$placeHolderscorporaciones["Spanish"] = array();
	$pageTitlescorporaciones["Spanish"] = array();
	$fieldLabelscorporaciones["Spanish"]["dep"] = "Dep";
	$fieldToolTipscorporaciones["Spanish"]["dep"] = "";
	$placeHolderscorporaciones["Spanish"]["dep"] = "";
	$fieldLabelscorporaciones["Spanish"]["mun"] = "Mun";
	$fieldToolTipscorporaciones["Spanish"]["mun"] = "";
	$placeHolderscorporaciones["Spanish"]["mun"] = "";
	$fieldLabelscorporaciones["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipscorporaciones["Spanish"]["cantidad"] = "";
	$placeHolderscorporaciones["Spanish"]["cantidad"] = "";
	$fieldLabelscorporaciones["Spanish"]["factor"] = "Factor";
	$fieldToolTipscorporaciones["Spanish"]["factor"] = "";
	$placeHolderscorporaciones["Spanish"]["factor"] = "";
	$fieldLabelscorporaciones["Spanish"]["estructura"] = "Estructura";
	$fieldToolTipscorporaciones["Spanish"]["estructura"] = "";
	$placeHolderscorporaciones["Spanish"]["estructura"] = "";
	$fieldLabelscorporaciones["Spanish"]["estructurac"] = "Estructurac";
	$fieldToolTipscorporaciones["Spanish"]["estructurac"] = "";
	$placeHolderscorporaciones["Spanish"]["estructurac"] = "";
	$fieldLabelscorporaciones["Spanish"]["diputados"] = "Diputados";
	$fieldToolTipscorporaciones["Spanish"]["diputados"] = "";
	$placeHolderscorporaciones["Spanish"]["diputados"] = "";
	if (count($fieldToolTipscorporaciones["Spanish"]))
		$tdatacorporaciones[".isUseToolTips"] = true;
}


	$tdatacorporaciones[".NCSearch"] = true;



$tdatacorporaciones[".shortTableName"] = "corporaciones";
$tdatacorporaciones[".nSecOptions"] = 0;

$tdatacorporaciones[".mainTableOwnerID"] = "";
$tdatacorporaciones[".entityType"] = 0;
$tdatacorporaciones[".connId"] = "internas_new_at_localhost";


$tdatacorporaciones[".strOriginalTableName"] = "corporaciones";

	



$tdatacorporaciones[".showAddInPopup"] = false;

$tdatacorporaciones[".showEditInPopup"] = false;

$tdatacorporaciones[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacorporaciones[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacorporaciones[".listAjax"] = false;
//	temporary
//$tdatacorporaciones[".listAjax"] = false;

	$tdatacorporaciones[".audit"] = false;

	$tdatacorporaciones[".locking"] = false;


$pages = $tdatacorporaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacorporaciones[".edit"] = true;
	$tdatacorporaciones[".afterEditAction"] = 1;
	$tdatacorporaciones[".closePopupAfterEdit"] = 1;
	$tdatacorporaciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacorporaciones[".add"] = true;
$tdatacorporaciones[".afterAddAction"] = 1;
$tdatacorporaciones[".closePopupAfterAdd"] = 1;
$tdatacorporaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacorporaciones[".list"] = true;
}



$tdatacorporaciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacorporaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacorporaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacorporaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacorporaciones[".printFriendly"] = true;
}



$tdatacorporaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacorporaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacorporaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacorporaciones[".isUseAjaxSuggest"] = true;

$tdatacorporaciones[".rowHighlite"] = true;





$tdatacorporaciones[".ajaxCodeSnippetAdded"] = false;

$tdatacorporaciones[".buttonsAdded"] = false;

$tdatacorporaciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacorporaciones[".isUseTimeForSearch"] = false;


$tdatacorporaciones[".badgeColor"] = "CFAE83";


$tdatacorporaciones[".allSearchFields"] = array();
$tdatacorporaciones[".filterFields"] = array();
$tdatacorporaciones[".requiredSearchFields"] = array();

$tdatacorporaciones[".googleLikeFields"] = array();
$tdatacorporaciones[".googleLikeFields"][] = "dep";
$tdatacorporaciones[".googleLikeFields"][] = "mun";
$tdatacorporaciones[".googleLikeFields"][] = "cantidad";
$tdatacorporaciones[".googleLikeFields"][] = "factor";
$tdatacorporaciones[".googleLikeFields"][] = "estructura";
$tdatacorporaciones[".googleLikeFields"][] = "estructurac";
$tdatacorporaciones[".googleLikeFields"][] = "diputados";



$tdatacorporaciones[".tableType"] = "list";

$tdatacorporaciones[".printerPageOrientation"] = 0;
$tdatacorporaciones[".nPrinterPageScale"] = 100;

$tdatacorporaciones[".nPrinterSplitRecords"] = 40;

$tdatacorporaciones[".geocodingEnabled"] = false;










$tdatacorporaciones[".pageSize"] = 20;

$tdatacorporaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacorporaciones[".strOrderBy"] = $tstrOrderBy;

$tdatacorporaciones[".orderindexes"] = array();


$tdatacorporaciones[".sqlHead"] = "SELECT dep,  	mun,  	cantidad,  	factor,  	estructura,  	estructurac,  	diputados";
$tdatacorporaciones[".sqlFrom"] = "FROM corporaciones";
$tdatacorporaciones[".sqlWhereExpr"] = "";
$tdatacorporaciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacorporaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacorporaciones[".arrGroupsPerPage"] = $arrGPP;

$tdatacorporaciones[".highlightSearchResults"] = true;

$tableKeyscorporaciones = array();
$tableKeyscorporaciones[] = "dep";
$tableKeyscorporaciones[] = "mun";
$tdatacorporaciones[".Keys"] = $tableKeyscorporaciones;


$tdatacorporaciones[".hideMobileList"] = array();




//	dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dep";
	$fdata["GoodName"] = "dep";
	$fdata["ownerTable"] = "corporaciones";
	$fdata["Label"] = GetFieldLabel("corporaciones","dep");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "dep";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep";

	
	
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


	$tdatacorporaciones["dep"] = $fdata;
		$tdatacorporaciones[".searchableFields"][] = "dep";
//	mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mun";
	$fdata["GoodName"] = "mun";
	$fdata["ownerTable"] = "corporaciones";
	$fdata["Label"] = GetFieldLabel("corporaciones","mun");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "mun";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mun";

	
	
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


	$tdatacorporaciones["mun"] = $fdata;
		$tdatacorporaciones[".searchableFields"][] = "mun";
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "corporaciones";
	$fdata["Label"] = GetFieldLabel("corporaciones","cantidad");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "cantidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidad";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacorporaciones["cantidad"] = $fdata;
		$tdatacorporaciones[".searchableFields"][] = "cantidad";
//	factor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "factor";
	$fdata["GoodName"] = "factor";
	$fdata["ownerTable"] = "corporaciones";
	$fdata["Label"] = GetFieldLabel("corporaciones","factor");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "factor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "factor";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacorporaciones["factor"] = $fdata;
		$tdatacorporaciones[".searchableFields"][] = "factor";
//	estructura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "estructura";
	$fdata["GoodName"] = "estructura";
	$fdata["ownerTable"] = "corporaciones";
	$fdata["Label"] = GetFieldLabel("corporaciones","estructura");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "estructura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estructura";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacorporaciones["estructura"] = $fdata;
		$tdatacorporaciones[".searchableFields"][] = "estructura";
//	estructurac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "estructurac";
	$fdata["GoodName"] = "estructurac";
	$fdata["ownerTable"] = "corporaciones";
	$fdata["Label"] = GetFieldLabel("corporaciones","estructurac");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "estructurac";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estructurac";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacorporaciones["estructurac"] = $fdata;
		$tdatacorporaciones[".searchableFields"][] = "estructurac";
//	diputados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "diputados";
	$fdata["GoodName"] = "diputados";
	$fdata["ownerTable"] = "corporaciones";
	$fdata["Label"] = GetFieldLabel("corporaciones","diputados");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "diputados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diputados";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacorporaciones["diputados"] = $fdata;
		$tdatacorporaciones[".searchableFields"][] = "diputados";


$tables_data["corporaciones"]=&$tdatacorporaciones;
$field_labels["corporaciones"] = &$fieldLabelscorporaciones;
$fieldToolTips["corporaciones"] = &$fieldToolTipscorporaciones;
$placeHolders["corporaciones"] = &$placeHolderscorporaciones;
$page_titles["corporaciones"] = &$pageTitlescorporaciones;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["corporaciones"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["corporaciones"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_corporaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dep,  	mun,  	cantidad,  	factor,  	estructura,  	estructurac,  	diputados";
$proto0["m_strFrom"] = "FROM corporaciones";
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
	"m_strName" => "dep",
	"m_strTable" => "corporaciones",
	"m_srcTableName" => "corporaciones"
));

$proto6["m_sql"] = "dep";
$proto6["m_srcTableName"] = "corporaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mun",
	"m_strTable" => "corporaciones",
	"m_srcTableName" => "corporaciones"
));

$proto8["m_sql"] = "mun";
$proto8["m_srcTableName"] = "corporaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "corporaciones",
	"m_srcTableName" => "corporaciones"
));

$proto10["m_sql"] = "cantidad";
$proto10["m_srcTableName"] = "corporaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "factor",
	"m_strTable" => "corporaciones",
	"m_srcTableName" => "corporaciones"
));

$proto12["m_sql"] = "factor";
$proto12["m_srcTableName"] = "corporaciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "estructura",
	"m_strTable" => "corporaciones",
	"m_srcTableName" => "corporaciones"
));

$proto14["m_sql"] = "estructura";
$proto14["m_srcTableName"] = "corporaciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "estructurac",
	"m_strTable" => "corporaciones",
	"m_srcTableName" => "corporaciones"
));

$proto16["m_sql"] = "estructurac";
$proto16["m_srcTableName"] = "corporaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "diputados",
	"m_strTable" => "corporaciones",
	"m_srcTableName" => "corporaciones"
));

$proto18["m_sql"] = "diputados";
$proto18["m_srcTableName"] = "corporaciones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "corporaciones";
$proto21["m_srcTableName"] = "corporaciones";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "dep";
$proto21["m_columns"][] = "mun";
$proto21["m_columns"][] = "cantidad";
$proto21["m_columns"][] = "factor";
$proto21["m_columns"][] = "estructura";
$proto21["m_columns"][] = "estructurac";
$proto21["m_columns"][] = "diputados";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "corporaciones";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "corporaciones";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="corporaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_corporaciones = createSqlQuery_corporaciones();


	
		;

							

$tdatacorporaciones[".sqlquery"] = $queryData_corporaciones;



$tableEvents["corporaciones"] = new eventsBase;
$tdatacorporaciones[".hasEvents"] = false;

?>