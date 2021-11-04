<?php
$tdatapartido = array();
$tdatapartido[".searchableFields"] = array();
$tdatapartido[".ShortName"] = "partido";
$tdatapartido[".OwnerID"] = "";
$tdatapartido[".OriginalTable"] = "partido";


$tdatapartido[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapartido[".originalPagesByType"] = $tdatapartido[".pagesByType"];
$tdatapartido[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapartido[".originalPages"] = $tdatapartido[".pages"];
$tdatapartido[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapartido[".originalDefaultPages"] = $tdatapartido[".defaultPages"];

//	field labels
$fieldLabelspartido = array();
$fieldToolTipspartido = array();
$pageTitlespartido = array();
$placeHolderspartido = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspartido["Spanish"] = array();
	$fieldToolTipspartido["Spanish"] = array();
	$placeHolderspartido["Spanish"] = array();
	$pageTitlespartido["Spanish"] = array();
	$fieldLabelspartido["Spanish"]["id_partido"] = "Partido";
	$fieldToolTipspartido["Spanish"]["id_partido"] = "";
	$placeHolderspartido["Spanish"]["id_partido"] = "";
	$fieldLabelspartido["Spanish"]["nombre_partido"] = "Nombre Partido";
	$fieldToolTipspartido["Spanish"]["nombre_partido"] = "";
	$placeHolderspartido["Spanish"]["nombre_partido"] = "";
	$fieldLabelspartido["Spanish"]["presidente"] = "Presidente";
	$fieldToolTipspartido["Spanish"]["presidente"] = "";
	$placeHolderspartido["Spanish"]["presidente"] = "";
	$fieldLabelspartido["Spanish"]["color"] = "Color";
	$fieldToolTipspartido["Spanish"]["color"] = "";
	$placeHolderspartido["Spanish"]["color"] = "";
	if (count($fieldToolTipspartido["Spanish"]))
		$tdatapartido[".isUseToolTips"] = true;
}


	$tdatapartido[".NCSearch"] = true;



$tdatapartido[".shortTableName"] = "partido";
$tdatapartido[".nSecOptions"] = 0;

$tdatapartido[".mainTableOwnerID"] = "";
$tdatapartido[".entityType"] = 0;
$tdatapartido[".connId"] = "internas_new_at_localhost";


$tdatapartido[".strOriginalTableName"] = "partido";

	



$tdatapartido[".showAddInPopup"] = false;

$tdatapartido[".showEditInPopup"] = false;

$tdatapartido[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapartido[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapartido[".listAjax"] = false;
//	temporary
//$tdatapartido[".listAjax"] = false;

	$tdatapartido[".audit"] = false;

	$tdatapartido[".locking"] = false;


$pages = $tdatapartido[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapartido[".edit"] = true;
	$tdatapartido[".afterEditAction"] = 1;
	$tdatapartido[".closePopupAfterEdit"] = 1;
	$tdatapartido[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapartido[".add"] = true;
$tdatapartido[".afterAddAction"] = 1;
$tdatapartido[".closePopupAfterAdd"] = 1;
$tdatapartido[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapartido[".list"] = true;
}



$tdatapartido[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapartido[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapartido[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapartido[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapartido[".printFriendly"] = true;
}



$tdatapartido[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapartido[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapartido[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapartido[".isUseAjaxSuggest"] = true;

$tdatapartido[".rowHighlite"] = true;





$tdatapartido[".ajaxCodeSnippetAdded"] = false;

$tdatapartido[".buttonsAdded"] = false;

$tdatapartido[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapartido[".isUseTimeForSearch"] = false;


$tdatapartido[".badgeColor"] = "CD853F";


$tdatapartido[".allSearchFields"] = array();
$tdatapartido[".filterFields"] = array();
$tdatapartido[".requiredSearchFields"] = array();

$tdatapartido[".googleLikeFields"] = array();
$tdatapartido[".googleLikeFields"][] = "id_partido";
$tdatapartido[".googleLikeFields"][] = "nombre_partido";
$tdatapartido[".googleLikeFields"][] = "presidente";
$tdatapartido[".googleLikeFields"][] = "color";



$tdatapartido[".tableType"] = "list";

$tdatapartido[".printerPageOrientation"] = 0;
$tdatapartido[".nPrinterPageScale"] = 100;

$tdatapartido[".nPrinterSplitRecords"] = 40;

$tdatapartido[".geocodingEnabled"] = false;










$tdatapartido[".pageSize"] = 20;

$tdatapartido[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapartido[".strOrderBy"] = $tstrOrderBy;

$tdatapartido[".orderindexes"] = array();


$tdatapartido[".sqlHead"] = "SELECT id_partido,  	nombre_partido,  	presidente,  	color";
$tdatapartido[".sqlFrom"] = "FROM partido";
$tdatapartido[".sqlWhereExpr"] = "";
$tdatapartido[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapartido[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapartido[".arrGroupsPerPage"] = $arrGPP;

$tdatapartido[".highlightSearchResults"] = true;

$tableKeyspartido = array();
$tableKeyspartido[] = "id_partido";
$tdatapartido[".Keys"] = $tableKeyspartido;


$tdatapartido[".hideMobileList"] = array();




//	id_partido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_partido";
	$fdata["GoodName"] = "id_partido";
	$fdata["ownerTable"] = "partido";
	$fdata["Label"] = GetFieldLabel("partido","id_partido");
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


	$tdatapartido["id_partido"] = $fdata;
		$tdatapartido[".searchableFields"][] = "id_partido";
//	nombre_partido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_partido";
	$fdata["GoodName"] = "nombre_partido";
	$fdata["ownerTable"] = "partido";
	$fdata["Label"] = GetFieldLabel("partido","nombre_partido");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre_partido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_partido";

	
	
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


	$tdatapartido["nombre_partido"] = $fdata;
		$tdatapartido[".searchableFields"][] = "nombre_partido";
//	presidente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "presidente";
	$fdata["GoodName"] = "presidente";
	$fdata["ownerTable"] = "partido";
	$fdata["Label"] = GetFieldLabel("partido","presidente");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "presidente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "presidente";

	
	
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


	$tdatapartido["presidente"] = $fdata;
		$tdatapartido[".searchableFields"][] = "presidente";
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "partido";
	$fdata["Label"] = GetFieldLabel("partido","color");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "color";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "color";

	
	
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
			$edata["EditParams"].= " maxlength=8";

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


	$tdatapartido["color"] = $fdata;
		$tdatapartido[".searchableFields"][] = "color";


$tables_data["partido"]=&$tdatapartido;
$field_labels["partido"] = &$fieldLabelspartido;
$fieldToolTips["partido"] = &$fieldToolTipspartido;
$placeHolders["partido"] = &$placeHolderspartido;
$page_titles["partido"] = &$pageTitlespartido;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["partido"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["partido"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_partido()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_partido,  	nombre_partido,  	presidente,  	color";
$proto0["m_strFrom"] = "FROM partido";
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
	"m_strTable" => "partido",
	"m_srcTableName" => "partido"
));

$proto6["m_sql"] = "id_partido";
$proto6["m_srcTableName"] = "partido";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_partido",
	"m_strTable" => "partido",
	"m_srcTableName" => "partido"
));

$proto8["m_sql"] = "nombre_partido";
$proto8["m_srcTableName"] = "partido";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "presidente",
	"m_strTable" => "partido",
	"m_srcTableName" => "partido"
));

$proto10["m_sql"] = "presidente";
$proto10["m_srcTableName"] = "partido";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "partido",
	"m_srcTableName" => "partido"
));

$proto12["m_sql"] = "color";
$proto12["m_srcTableName"] = "partido";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "partido";
$proto15["m_srcTableName"] = "partido";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_partido";
$proto15["m_columns"][] = "nombre_partido";
$proto15["m_columns"][] = "presidente";
$proto15["m_columns"][] = "color";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "partido";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "partido";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="partido";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_partido = createSqlQuery_partido();


	
		;

				

$tdatapartido[".sqlquery"] = $queryData_partido;



$tableEvents["partido"] = new eventsBase;
$tdatapartido[".hasEvents"] = false;

?>