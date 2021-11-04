<?php
$tdatasectores = array();
$tdatasectores[".searchableFields"] = array();
$tdatasectores[".ShortName"] = "sectores";
$tdatasectores[".OwnerID"] = "";
$tdatasectores[".OriginalTable"] = "sectores";


$tdatasectores[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasectores[".originalPagesByType"] = $tdatasectores[".pagesByType"];
$tdatasectores[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasectores[".originalPages"] = $tdatasectores[".pages"];
$tdatasectores[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasectores[".originalDefaultPages"] = $tdatasectores[".defaultPages"];

//	field labels
$fieldLabelssectores = array();
$fieldToolTipssectores = array();
$pageTitlessectores = array();
$placeHolderssectores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssectores["Spanish"] = array();
	$fieldToolTipssectores["Spanish"] = array();
	$placeHolderssectores["Spanish"] = array();
	$pageTitlessectores["Spanish"] = array();
	$fieldLabelssectores["Spanish"]["id_distrito"] = "Distrito";
	$fieldToolTipssectores["Spanish"]["id_distrito"] = "";
	$placeHolderssectores["Spanish"]["id_distrito"] = "";
	$fieldLabelssectores["Spanish"]["id_sector"] = "Sector";
	$fieldToolTipssectores["Spanish"]["id_sector"] = "";
	$placeHolderssectores["Spanish"]["id_sector"] = "";
	$fieldLabelssectores["Spanish"]["nombre_sector"] = "Nombre";
	$fieldToolTipssectores["Spanish"]["nombre_sector"] = "";
	$placeHolderssectores["Spanish"]["nombre_sector"] = "";
	if (count($fieldToolTipssectores["Spanish"]))
		$tdatasectores[".isUseToolTips"] = true;
}


	$tdatasectores[".NCSearch"] = true;



$tdatasectores[".shortTableName"] = "sectores";
$tdatasectores[".nSecOptions"] = 0;

$tdatasectores[".mainTableOwnerID"] = "";
$tdatasectores[".entityType"] = 0;
$tdatasectores[".connId"] = "internas_new_at_localhost";


$tdatasectores[".strOriginalTableName"] = "sectores";

	



$tdatasectores[".showAddInPopup"] = false;

$tdatasectores[".showEditInPopup"] = false;

$tdatasectores[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasectores[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasectores[".listAjax"] = false;
//	temporary
//$tdatasectores[".listAjax"] = false;

	$tdatasectores[".audit"] = false;

	$tdatasectores[".locking"] = false;


$pages = $tdatasectores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasectores[".edit"] = true;
	$tdatasectores[".afterEditAction"] = 1;
	$tdatasectores[".closePopupAfterEdit"] = 1;
	$tdatasectores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasectores[".add"] = true;
$tdatasectores[".afterAddAction"] = 1;
$tdatasectores[".closePopupAfterAdd"] = 1;
$tdatasectores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasectores[".list"] = true;
}



$tdatasectores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasectores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasectores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasectores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasectores[".printFriendly"] = true;
}



$tdatasectores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasectores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasectores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasectores[".isUseAjaxSuggest"] = true;

$tdatasectores[".rowHighlite"] = true;





$tdatasectores[".ajaxCodeSnippetAdded"] = false;

$tdatasectores[".buttonsAdded"] = false;

$tdatasectores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasectores[".isUseTimeForSearch"] = false;


$tdatasectores[".badgeColor"] = "778899";


$tdatasectores[".allSearchFields"] = array();
$tdatasectores[".filterFields"] = array();
$tdatasectores[".requiredSearchFields"] = array();

$tdatasectores[".googleLikeFields"] = array();
$tdatasectores[".googleLikeFields"][] = "id_distrito";
$tdatasectores[".googleLikeFields"][] = "id_sector";
$tdatasectores[".googleLikeFields"][] = "nombre_sector";



$tdatasectores[".tableType"] = "list";

$tdatasectores[".printerPageOrientation"] = 0;
$tdatasectores[".nPrinterPageScale"] = 100;

$tdatasectores[".nPrinterSplitRecords"] = 40;

$tdatasectores[".geocodingEnabled"] = false;










$tdatasectores[".pageSize"] = 20;

$tdatasectores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasectores[".strOrderBy"] = $tstrOrderBy;

$tdatasectores[".orderindexes"] = array();


$tdatasectores[".sqlHead"] = "SELECT id_distrito,  	id_sector,  	nombre_sector";
$tdatasectores[".sqlFrom"] = "FROM sectores";
$tdatasectores[".sqlWhereExpr"] = "";
$tdatasectores[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasectores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasectores[".arrGroupsPerPage"] = $arrGPP;

$tdatasectores[".highlightSearchResults"] = true;

$tableKeyssectores = array();
$tableKeyssectores[] = "id_distrito";
$tableKeyssectores[] = "id_sector";
$tdatasectores[".Keys"] = $tableKeyssectores;


$tdatasectores[".hideMobileList"] = array();




//	id_distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_distrito";
	$fdata["GoodName"] = "id_distrito";
	$fdata["ownerTable"] = "sectores";
	$fdata["Label"] = GetFieldLabel("sectores","id_distrito");
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


	$tdatasectores["id_distrito"] = $fdata;
		$tdatasectores[".searchableFields"][] = "id_distrito";
//	id_sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_sector";
	$fdata["GoodName"] = "id_sector";
	$fdata["ownerTable"] = "sectores";
	$fdata["Label"] = GetFieldLabel("sectores","id_sector");
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


	$tdatasectores["id_sector"] = $fdata;
		$tdatasectores[".searchableFields"][] = "id_sector";
//	nombre_sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nombre_sector";
	$fdata["GoodName"] = "nombre_sector";
	$fdata["ownerTable"] = "sectores";
	$fdata["Label"] = GetFieldLabel("sectores","nombre_sector");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre_sector";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_sector";

	
	
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


	$tdatasectores["nombre_sector"] = $fdata;
		$tdatasectores[".searchableFields"][] = "nombre_sector";


$tables_data["sectores"]=&$tdatasectores;
$field_labels["sectores"] = &$fieldLabelssectores;
$fieldToolTips["sectores"] = &$fieldToolTipssectores;
$placeHolders["sectores"] = &$placeHolderssectores;
$page_titles["sectores"] = &$pageTitlessectores;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sectores"] = array();
//	urna
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="urna";
		$detailsParam["dOriginalTable"] = "urna";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "urna";
	$detailsParam["dCaptionTable"] = GetTableCaption("urna");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["sectores"][$dIndex] = $detailsParam;

	
		$detailsTablesData["sectores"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["sectores"][$dIndex]["masterKeys"][]="id_sector";

				$detailsTablesData["sectores"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["sectores"][$dIndex]["detailKeys"][]="id_sector";

// tables which are master tables for current table (detail)
$masterTablesData["sectores"] = array();



	
				$strOriginalDetailsTable="distritos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="distritos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "distritos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["sectores"][0] = $masterParams;
				$masterTablesData["sectores"][0]["masterKeys"] = array();
	$masterTablesData["sectores"][0]["masterKeys"][]="id_distrito";
				$masterTablesData["sectores"][0]["detailKeys"] = array();
	$masterTablesData["sectores"][0]["detailKeys"][]="id_distrito";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sectores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_distrito,  	id_sector,  	nombre_sector";
$proto0["m_strFrom"] = "FROM sectores";
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
	"m_strTable" => "sectores",
	"m_srcTableName" => "sectores"
));

$proto6["m_sql"] = "id_distrito";
$proto6["m_srcTableName"] = "sectores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "sectores",
	"m_srcTableName" => "sectores"
));

$proto8["m_sql"] = "id_sector";
$proto8["m_srcTableName"] = "sectores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_sector",
	"m_strTable" => "sectores",
	"m_srcTableName" => "sectores"
));

$proto10["m_sql"] = "nombre_sector";
$proto10["m_srcTableName"] = "sectores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "sectores";
$proto13["m_srcTableName"] = "sectores";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_distrito";
$proto13["m_columns"][] = "id_sector";
$proto13["m_columns"][] = "nombre_sector";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "sectores";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "sectores";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sectores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sectores = createSqlQuery_sectores();


	
		;

			

$tdatasectores[".sqlquery"] = $queryData_sectores;



$tableEvents["sectores"] = new eventsBase;
$tdatasectores[".hasEvents"] = false;

?>