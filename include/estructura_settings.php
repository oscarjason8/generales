<?php
$tdataestructura = array();
$tdataestructura[".searchableFields"] = array();
$tdataestructura[".ShortName"] = "estructura";
$tdataestructura[".OwnerID"] = "";
$tdataestructura[".OriginalTable"] = "estructura";


$tdataestructura[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataestructura[".originalPagesByType"] = $tdataestructura[".pagesByType"];
$tdataestructura[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataestructura[".originalPages"] = $tdataestructura[".pages"];
$tdataestructura[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
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
	$fieldLabelsestructura["Spanish"]["posicion"] = "Posicion";
	$fieldToolTipsestructura["Spanish"]["posicion"] = "";
	$placeHoldersestructura["Spanish"]["posicion"] = "";
	$fieldLabelsestructura["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsestructura["Spanish"]["nombre"] = "";
	$placeHoldersestructura["Spanish"]["nombre"] = "";
	$fieldLabelsestructura["Spanish"]["movimiento"] = "Movimiento";
	$fieldToolTipsestructura["Spanish"]["movimiento"] = "";
	$placeHoldersestructura["Spanish"]["movimiento"] = "";
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
$tdataestructura[".googleLikeFields"][] = "posicion";
$tdataestructura[".googleLikeFields"][] = "nombre";
$tdataestructura[".googleLikeFields"][] = "movimiento";



$tdataestructura[".tableType"] = "list";

$tdataestructura[".printerPageOrientation"] = 0;
$tdataestructura[".nPrinterPageScale"] = 100;

$tdataestructura[".nPrinterSplitRecords"] = 40;

$tdataestructura[".geocodingEnabled"] = false;










$tdataestructura[".pageSize"] = 20;

$tdataestructura[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY cor";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataestructura[".strOrderBy"] = $tstrOrderBy;

$tdataestructura[".orderindexes"] = array();
	$tdataestructura[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "cor");



$tdataestructura[".sqlHead"] = "SELECT cor,  	posicion,  	nombre,  	movimiento";
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
	$fdata["FieldType"] = 3;

	
	
	
			

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
//	posicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "posicion";
	$fdata["GoodName"] = "posicion";
	$fdata["ownerTable"] = "estructura";
	$fdata["Label"] = GetFieldLabel("estructura","posicion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "posicion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "posicion";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdataestructura["posicion"] = $fdata;
		$tdataestructura[".searchableFields"][] = "posicion";
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
//	movimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "movimiento";
	$fdata["GoodName"] = "movimiento";
	$fdata["ownerTable"] = "estructura";
	$fdata["Label"] = GetFieldLabel("estructura","movimiento");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "movimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "movimiento";

	
	
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


	$tdataestructura["movimiento"] = $fdata;
		$tdataestructura[".searchableFields"][] = "movimiento";


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
$proto0["m_strFieldList"] = "cor,  	posicion,  	nombre,  	movimiento";
$proto0["m_strFrom"] = "FROM estructura";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY cor";
	
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
	"m_strName" => "posicion",
	"m_strTable" => "estructura",
	"m_srcTableName" => "estructura"
));

$proto8["m_sql"] = "posicion";
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
	"m_strName" => "movimiento",
	"m_strTable" => "estructura",
	"m_srcTableName" => "estructura"
));

$proto12["m_sql"] = "movimiento";
$proto12["m_srcTableName"] = "estructura";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "estructura";
$proto15["m_srcTableName"] = "estructura";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "cor";
$proto15["m_columns"][] = "posicion";
$proto15["m_columns"][] = "nombre";
$proto15["m_columns"][] = "movimiento";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "estructura";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "estructura";
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
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "cor",
	"m_strTable" => "estructura",
	"m_srcTableName" => "estructura"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="estructura";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_estructura = createSqlQuery_estructura();


	
		;

				

$tdataestructura[".sqlquery"] = $queryData_estructura;



$tableEvents["estructura"] = new eventsBase;
$tdataestructura[".hasEvents"] = false;

?>