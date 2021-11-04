<?php
$tdatadistritos = array();
$tdatadistritos[".searchableFields"] = array();
$tdatadistritos[".ShortName"] = "distritos";
$tdatadistritos[".OwnerID"] = "";
$tdatadistritos[".OriginalTable"] = "distritos";


$tdatadistritos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadistritos[".originalPagesByType"] = $tdatadistritos[".pagesByType"];
$tdatadistritos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadistritos[".originalPages"] = $tdatadistritos[".pages"];
$tdatadistritos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadistritos[".originalDefaultPages"] = $tdatadistritos[".defaultPages"];

//	field labels
$fieldLabelsdistritos = array();
$fieldToolTipsdistritos = array();
$pageTitlesdistritos = array();
$placeHoldersdistritos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdistritos["Spanish"] = array();
	$fieldToolTipsdistritos["Spanish"] = array();
	$placeHoldersdistritos["Spanish"] = array();
	$pageTitlesdistritos["Spanish"] = array();
	$fieldLabelsdistritos["Spanish"]["id_distrito"] = "Distrito";
	$fieldToolTipsdistritos["Spanish"]["id_distrito"] = "";
	$placeHoldersdistritos["Spanish"]["id_distrito"] = "";
	$fieldLabelsdistritos["Spanish"]["nombre_distrito"] = "Nombre";
	$fieldToolTipsdistritos["Spanish"]["nombre_distrito"] = "";
	$placeHoldersdistritos["Spanish"]["nombre_distrito"] = "";
	if (count($fieldToolTipsdistritos["Spanish"]))
		$tdatadistritos[".isUseToolTips"] = true;
}


	$tdatadistritos[".NCSearch"] = true;



$tdatadistritos[".shortTableName"] = "distritos";
$tdatadistritos[".nSecOptions"] = 0;

$tdatadistritos[".mainTableOwnerID"] = "";
$tdatadistritos[".entityType"] = 0;
$tdatadistritos[".connId"] = "internas_new_at_localhost";


$tdatadistritos[".strOriginalTableName"] = "distritos";

	



$tdatadistritos[".showAddInPopup"] = false;

$tdatadistritos[".showEditInPopup"] = false;

$tdatadistritos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadistritos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadistritos[".listAjax"] = false;
//	temporary
//$tdatadistritos[".listAjax"] = false;

	$tdatadistritos[".audit"] = false;

	$tdatadistritos[".locking"] = false;


$pages = $tdatadistritos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadistritos[".edit"] = true;
	$tdatadistritos[".afterEditAction"] = 1;
	$tdatadistritos[".closePopupAfterEdit"] = 1;
	$tdatadistritos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadistritos[".add"] = true;
$tdatadistritos[".afterAddAction"] = 1;
$tdatadistritos[".closePopupAfterAdd"] = 1;
$tdatadistritos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadistritos[".list"] = true;
}



$tdatadistritos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadistritos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadistritos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadistritos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadistritos[".printFriendly"] = true;
}



$tdatadistritos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadistritos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadistritos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadistritos[".isUseAjaxSuggest"] = true;

$tdatadistritos[".rowHighlite"] = true;





$tdatadistritos[".ajaxCodeSnippetAdded"] = false;

$tdatadistritos[".buttonsAdded"] = false;

$tdatadistritos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadistritos[".isUseTimeForSearch"] = false;


$tdatadistritos[".badgeColor"] = "3CB371";


$tdatadistritos[".allSearchFields"] = array();
$tdatadistritos[".filterFields"] = array();
$tdatadistritos[".requiredSearchFields"] = array();

$tdatadistritos[".googleLikeFields"] = array();
$tdatadistritos[".googleLikeFields"][] = "id_distrito";
$tdatadistritos[".googleLikeFields"][] = "nombre_distrito";



$tdatadistritos[".tableType"] = "list";

$tdatadistritos[".printerPageOrientation"] = 0;
$tdatadistritos[".nPrinterPageScale"] = 100;

$tdatadistritos[".nPrinterSplitRecords"] = 40;

$tdatadistritos[".geocodingEnabled"] = false;










$tdatadistritos[".pageSize"] = 20;

$tdatadistritos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadistritos[".strOrderBy"] = $tstrOrderBy;

$tdatadistritos[".orderindexes"] = array();


$tdatadistritos[".sqlHead"] = "SELECT id_distrito,  	nombre_distrito";
$tdatadistritos[".sqlFrom"] = "FROM distritos";
$tdatadistritos[".sqlWhereExpr"] = "";
$tdatadistritos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadistritos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadistritos[".arrGroupsPerPage"] = $arrGPP;

$tdatadistritos[".highlightSearchResults"] = true;

$tableKeysdistritos = array();
$tableKeysdistritos[] = "id_distrito";
$tdatadistritos[".Keys"] = $tableKeysdistritos;


$tdatadistritos[".hideMobileList"] = array();




//	id_distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_distrito";
	$fdata["GoodName"] = "id_distrito";
	$fdata["ownerTable"] = "distritos";
	$fdata["Label"] = GetFieldLabel("distritos","id_distrito");
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


	$tdatadistritos["id_distrito"] = $fdata;
		$tdatadistritos[".searchableFields"][] = "id_distrito";
//	nombre_distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_distrito";
	$fdata["GoodName"] = "nombre_distrito";
	$fdata["ownerTable"] = "distritos";
	$fdata["Label"] = GetFieldLabel("distritos","nombre_distrito");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre_distrito";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_distrito";

	
	
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


	$tdatadistritos["nombre_distrito"] = $fdata;
		$tdatadistritos[".searchableFields"][] = "nombre_distrito";


$tables_data["distritos"]=&$tdatadistritos;
$field_labels["distritos"] = &$fieldLabelsdistritos;
$fieldToolTips["distritos"] = &$fieldToolTipsdistritos;
$placeHolders["distritos"] = &$placeHoldersdistritos;
$page_titles["distritos"] = &$pageTitlesdistritos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["distritos"] = array();
//	sectores
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="sectores";
		$detailsParam["dOriginalTable"] = "sectores";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "sectores";
	$detailsParam["dCaptionTable"] = GetTableCaption("sectores");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["distritos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["distritos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["distritos"][$dIndex]["masterKeys"][]="id_distrito";

				$detailsTablesData["distritos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["distritos"][$dIndex]["detailKeys"][]="id_distrito";
//	urna
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="urna";
		$detailsParam["dOriginalTable"] = "urna";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "urna";
	$detailsParam["dCaptionTable"] = GetTableCaption("urna");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["distritos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["distritos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["distritos"][$dIndex]["masterKeys"][]="id_distrito";

				$detailsTablesData["distritos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["distritos"][$dIndex]["detailKeys"][]="id_distrito";

// tables which are master tables for current table (detail)
$masterTablesData["distritos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_distritos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_distrito,  	nombre_distrito";
$proto0["m_strFrom"] = "FROM distritos";
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
	"m_strTable" => "distritos",
	"m_srcTableName" => "distritos"
));

$proto6["m_sql"] = "id_distrito";
$proto6["m_srcTableName"] = "distritos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_distrito",
	"m_strTable" => "distritos",
	"m_srcTableName" => "distritos"
));

$proto8["m_sql"] = "nombre_distrito";
$proto8["m_srcTableName"] = "distritos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "distritos";
$proto11["m_srcTableName"] = "distritos";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_distrito";
$proto11["m_columns"][] = "nombre_distrito";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "distritos";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "distritos";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="distritos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_distritos = createSqlQuery_distritos();


	
		;

		

$tdatadistritos[".sqlquery"] = $queryData_distritos;



$tableEvents["distritos"] = new eventsBase;
$tdatadistritos[".hasEvents"] = false;

?>