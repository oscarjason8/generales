<?php
$tdataestructura = array();
$tdataestructura[".searchableFields"] = array();
$tdataestructura[".ShortName"] = "estructura";
$tdataestructura[".OwnerID"] = "";
$tdataestructura[".OriginalTable"] = "estructura";


$tdataestructura[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataestructura[".originalPagesByType"] = $tdataestructura[".pagesByType"];
$tdataestructura[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataestructura[".originalPages"] = $tdataestructura[".pages"];
$tdataestructura[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataestructura[".originalDefaultPages"] = $tdataestructura[".defaultPages"];

//	field labels
$fieldLabelsestructura = array();
$fieldToolTipsestructura = array();
$pageTitlesestructura = array();
$placeHoldersestructura = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsestructura["Spanish"] = array();
	$fieldToolTipsestructura["Spanish"] = array();
	$placeHoldersestructura["Spanish"] = array();
	$pageTitlesestructura["Spanish"] = array();
	$fieldLabelsestructura["Spanish"]["cor"] = "Cor";
	$fieldToolTipsestructura["Spanish"]["cor"] = "";
	$placeHoldersestructura["Spanish"]["cor"] = "";
	$fieldLabelsestructura["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsestructura["Spanish"]["nombre"] = "";
	$placeHoldersestructura["Spanish"]["nombre"] = "";
	$fieldLabelsestructura["Spanish"]["cargo"] = "Cargo";
	$fieldToolTipsestructura["Spanish"]["cargo"] = "";
	$placeHoldersestructura["Spanish"]["cargo"] = "";
	$fieldLabelsestructura["Spanish"]["dep"] = "Dep";
	$fieldToolTipsestructura["Spanish"]["dep"] = "";
	$placeHoldersestructura["Spanish"]["dep"] = "";
	$fieldLabelsestructura["Spanish"]["mun"] = "Mun";
	$fieldToolTipsestructura["Spanish"]["mun"] = "";
	$placeHoldersestructura["Spanish"]["mun"] = "";
	$fieldLabelsestructura["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipsestructura["Spanish"]["Usuario"] = "";
	$placeHoldersestructura["Spanish"]["Usuario"] = "";
	$fieldLabelsestructura["Spanish"]["id"] = "Id";
	$fieldToolTipsestructura["Spanish"]["id"] = "";
	$placeHoldersestructura["Spanish"]["id"] = "";
	$fieldLabelsestructura["Spanish"]["partido"] = "Partido";
	$fieldToolTipsestructura["Spanish"]["partido"] = "";
	$placeHoldersestructura["Spanish"]["partido"] = "";
	$fieldLabelsestructura["Spanish"]["tot"] = "Tot";
	$fieldToolTipsestructura["Spanish"]["tot"] = "";
	$placeHoldersestructura["Spanish"]["tot"] = "";
	$fieldLabelsestructura["Spanish"]["factor"] = "Factor";
	$fieldToolTipsestructura["Spanish"]["factor"] = "";
	$placeHoldersestructura["Spanish"]["factor"] = "";
	$fieldLabelsestructura["Spanish"]["restante"] = "Restante";
	$fieldToolTipsestructura["Spanish"]["restante"] = "";
	$placeHoldersestructura["Spanish"]["restante"] = "";
	if (count($fieldToolTipsestructura["Spanish"]))
		$tdataestructura[".isUseToolTips"] = true;
}


	$tdataestructura[".NCSearch"] = true;



$tdataestructura[".shortTableName"] = "estructura";
$tdataestructura[".nSecOptions"] = 0;

$tdataestructura[".mainTableOwnerID"] = "";
$tdataestructura[".entityType"] = 0;
$tdataestructura[".connId"] = "internas_new_at_localhost";


$tdataestructura[".strOriginalTableName"] = "estructura";

	



$tdataestructura[".showAddInPopup"] = false;

$tdataestructura[".showEditInPopup"] = false;

$tdataestructura[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataestructura[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataestructura[".listAjax"] = false;
//	temporary
//$tdataestructura[".listAjax"] = false;

	$tdataestructura[".audit"] = false;

	$tdataestructura[".locking"] = false;


$pages = $tdataestructura[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataestructura[".edit"] = true;
	$tdataestructura[".afterEditAction"] = 1;
	$tdataestructura[".closePopupAfterEdit"] = 1;
	$tdataestructura[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataestructura[".add"] = true;
$tdataestructura[".afterAddAction"] = 1;
$tdataestructura[".closePopupAfterAdd"] = 1;
$tdataestructura[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataestructura[".list"] = true;
}



$tdataestructura[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataestructura[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataestructura[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataestructura[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataestructura[".printFriendly"] = true;
}



$tdataestructura[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataestructura[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataestructura[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataestructura[".isUseAjaxSuggest"] = true;

$tdataestructura[".rowHighlite"] = true;





$tdataestructura[".ajaxCodeSnippetAdded"] = false;

$tdataestructura[".buttonsAdded"] = false;

$tdataestructura[".addPageEvents"] = false;

// use timepicker for search panel
$tdataestructura[".isUseTimeForSearch"] = false;


$tdataestructura[".badgeColor"] = "6B8E23";


$tdataestructura[".allSearchFields"] = array();
$tdataestructura[".filterFields"] = array();
$tdataestructura[".requiredSearchFields"] = array();

$tdataestructura[".googleLikeFields"] = array();
$tdataestructura[".googleLikeFields"][] = "cor";
$tdataestructura[".googleLikeFields"][] = "cargo";
$tdataestructura[".googleLikeFields"][] = "nombre";
$tdataestructura[".googleLikeFields"][] = "dep";
$tdataestructura[".googleLikeFields"][] = "mun";
$tdataestructura[".googleLikeFields"][] = "Usuario";
$tdataestructura[".googleLikeFields"][] = "id";
$tdataestructura[".googleLikeFields"][] = "partido";
$tdataestructura[".googleLikeFields"][] = "tot";
$tdataestructura[".googleLikeFields"][] = "factor";
$tdataestructura[".googleLikeFields"][] = "restante";



$tdataestructura[".tableType"] = "list";

$tdataestructura[".printerPageOrientation"] = 0;
$tdataestructura[".nPrinterPageScale"] = 100;

$tdataestructura[".nPrinterSplitRecords"] = 40;

$tdataestructura[".geocodingEnabled"] = false;










$tdataestructura[".pageSize"] = 20;

$tdataestructura[".warnLeavingPages"] = true;



$tstrOrderBy = "order by cor";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataestructura[".strOrderBy"] = $tstrOrderBy;

$tdataestructura[".orderindexes"] = array();
	$tdataestructura[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "cor");



$tdataestructura[".sqlHead"] = "SELECT cor,  	cargo,  	nombre,  	dep,  	mun,  	Usuario,  	id,  	partido,  	tot,  	factor,  	restante";
$tdataestructura[".sqlFrom"] = "FROM estructura";
$tdataestructura[".sqlWhereExpr"] = "";
$tdataestructura[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataestructura[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataestructura[".arrGroupsPerPage"] = $arrGPP;

$tdataestructura[".highlightSearchResults"] = true;

$tableKeysestructura = array();
$tableKeysestructura[] = "cor";
$tdataestructura[".Keys"] = $tableKeysestructura;


$tdataestructura[".hideMobileList"] = array();




//	cor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cor";
	$fdata["GoodName"] = "cor";
	$fdata["ownerTable"] = "estructura";
	$fdata["Label"] = GetFieldLabel("estructura","cor");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "cor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cor";

	
	
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


	$tdataestructura["cor"] = $fdata;
		$tdataestructura[".searchableFields"][] = "cor";
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "estructura";
	$fdata["Label"] = GetFieldLabel("estructura","cargo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cargo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cargo";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataestructura["cargo"] = $fdata;
		$tdataestructura[".searchableFields"][] = "cargo";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "estructura";
	$fdata["Label"] = GetFieldLabel("estructura","nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdataestructura["nombre"] = $fdata;
		$tdataestructura[".searchableFields"][] = "nombre";
//	dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dep";
	$fdata["GoodName"] = "dep";
	$fdata["ownerTable"] = "estructura";
	$fdata["Label"] = GetFieldLabel("estructura","dep");
	$fdata["FieldType"] = 2;

	
	
	
			

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


	$tdataestructura["dep"] = $fdata;
		$tdataestructura[".searchableFields"][] = "dep";
//	mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mun";
	$fdata["GoodName"] = "mun";
	$fdata["ownerTable"] = "estructura";
	$fdata["Label"] = GetFieldLabel("estructura","mun");
	$fdata["FieldType"] = 2;

	
	
	
			

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


	$tdataestructura["mun"] = $fdata;
		$tdataestructura[".searchableFields"][] = "mun";
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "estructura";
	$fdata["Label"] = GetFieldLabel("estructura","Usuario");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Usuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Usuario";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataestructura["Usuario"] = $fdata;
		$tdataestructura[".searchableFields"][] = "Usuario";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "estructura";
	$fdata["Label"] = GetFieldLabel("estructura","id");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdataestructura["id"] = $fdata;
		$tdataestructura[".searchableFields"][] = "id";
//	partido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "partido";
	$fdata["GoodName"] = "partido";
	$fdata["ownerTable"] = "estructura";
	$fdata["Label"] = GetFieldLabel("estructura","partido");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "partido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "partido";

	
	
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


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataestructura["partido"] = $fdata;
		$tdataestructura[".searchableFields"][] = "partido";
//	tot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tot";
	$fdata["GoodName"] = "tot";
	$fdata["ownerTable"] = "estructura";
	$fdata["Label"] = GetFieldLabel("estructura","tot");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "tot";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tot";

	
	
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


	$tdataestructura["tot"] = $fdata;
		$tdataestructura[".searchableFields"][] = "tot";
//	factor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "factor";
	$fdata["GoodName"] = "factor";
	$fdata["ownerTable"] = "estructura";
	$fdata["Label"] = GetFieldLabel("estructura","factor");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "factor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "factor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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


	$tdataestructura["factor"] = $fdata;
		$tdataestructura[".searchableFields"][] = "factor";
//	restante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "restante";
	$fdata["GoodName"] = "restante";
	$fdata["ownerTable"] = "estructura";
	$fdata["Label"] = GetFieldLabel("estructura","restante");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "restante";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "restante";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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


	$tdataestructura["restante"] = $fdata;
		$tdataestructura[".searchableFields"][] = "restante";


$tables_data["estructura"]=&$tdataestructura;
$field_labels["estructura"] = &$fieldLabelsestructura;
$fieldToolTips["estructura"] = &$fieldToolTipsestructura;
$placeHolders["estructura"] = &$placeHoldersestructura;
$page_titles["estructura"] = &$pageTitlesestructura;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["estructura"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["estructura"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_estructura()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cor,  	cargo,  	nombre,  	dep,  	mun,  	Usuario,  	id,  	partido,  	tot,  	factor,  	restante";
$proto0["m_strFrom"] = "FROM estructura";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by cor";
	
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
	"m_strName" => "cor",
	"m_strTable" => "estructura",
	"m_srcTableName" => "estructura"
));

$proto6["m_sql"] = "cor";
$proto6["m_srcTableName"] = "estructura";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "estructura",
	"m_srcTableName" => "estructura"
));

$proto8["m_sql"] = "cargo";
$proto8["m_srcTableName"] = "estructura";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "estructura",
	"m_srcTableName" => "estructura"
));

$proto10["m_sql"] = "nombre";
$proto10["m_srcTableName"] = "estructura";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dep",
	"m_strTable" => "estructura",
	"m_srcTableName" => "estructura"
));

$proto12["m_sql"] = "dep";
$proto12["m_srcTableName"] = "estructura";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mun",
	"m_strTable" => "estructura",
	"m_srcTableName" => "estructura"
));

$proto14["m_sql"] = "mun";
$proto14["m_srcTableName"] = "estructura";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "estructura",
	"m_srcTableName" => "estructura"
));

$proto16["m_sql"] = "Usuario";
$proto16["m_srcTableName"] = "estructura";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "estructura",
	"m_srcTableName" => "estructura"
));

$proto18["m_sql"] = "id";
$proto18["m_srcTableName"] = "estructura";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "partido",
	"m_strTable" => "estructura",
	"m_srcTableName" => "estructura"
));

$proto20["m_sql"] = "partido";
$proto20["m_srcTableName"] = "estructura";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "tot",
	"m_strTable" => "estructura",
	"m_srcTableName" => "estructura"
));

$proto22["m_sql"] = "tot";
$proto22["m_srcTableName"] = "estructura";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "factor",
	"m_strTable" => "estructura",
	"m_srcTableName" => "estructura"
));

$proto24["m_sql"] = "factor";
$proto24["m_srcTableName"] = "estructura";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "restante",
	"m_strTable" => "estructura",
	"m_srcTableName" => "estructura"
));

$proto26["m_sql"] = "restante";
$proto26["m_srcTableName"] = "estructura";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "estructura";
$proto29["m_srcTableName"] = "estructura";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "cor";
$proto29["m_columns"][] = "cargo";
$proto29["m_columns"][] = "nombre";
$proto29["m_columns"][] = "dep";
$proto29["m_columns"][] = "mun";
$proto29["m_columns"][] = "Usuario";
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "partido";
$proto29["m_columns"][] = "tot";
$proto29["m_columns"][] = "factor";
$proto29["m_columns"][] = "restante";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "estructura";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "estructura";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "cor",
	"m_strTable" => "estructura",
	"m_srcTableName" => "estructura"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "cor",
	"m_strTable" => "estructura",
	"m_srcTableName" => "estructura"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 1;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="estructura";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_estructura = createSqlQuery_estructura();


	
		;

											

$tdataestructura[".sqlquery"] = $queryData_estructura;



include_once(getabspath("include/estructura_events.php"));
$tableEvents["estructura"] = new eventclass_estructura;
$tdataestructura[".hasEvents"] = true;

?>