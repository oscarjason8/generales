<?php
$tdatacandidatos = array();
$tdatacandidatos[".searchableFields"] = array();
$tdatacandidatos[".ShortName"] = "candidatos";
$tdatacandidatos[".OwnerID"] = "";
$tdatacandidatos[".OriginalTable"] = "candidatos";


$tdatacandidatos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacandidatos[".originalPagesByType"] = $tdatacandidatos[".pagesByType"];
$tdatacandidatos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacandidatos[".originalPages"] = $tdatacandidatos[".pages"];
$tdatacandidatos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacandidatos[".originalDefaultPages"] = $tdatacandidatos[".defaultPages"];

//	field labels
$fieldLabelscandidatos = array();
$fieldToolTipscandidatos = array();
$pageTitlescandidatos = array();
$placeHolderscandidatos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscandidatos["Spanish"] = array();
	$fieldToolTipscandidatos["Spanish"] = array();
	$placeHolderscandidatos["Spanish"] = array();
	$pageTitlescandidatos["Spanish"] = array();
	$fieldLabelscandidatos["Spanish"]["nombre_candidato"] = "Nombre";
	$fieldToolTipscandidatos["Spanish"]["nombre_candidato"] = "";
	$placeHolderscandidatos["Spanish"]["nombre_candidato"] = "";
	$fieldLabelscandidatos["Spanish"]["vice_alcalde"] = "Vice Alcalde";
	$fieldToolTipscandidatos["Spanish"]["vice_alcalde"] = "";
	$placeHolderscandidatos["Spanish"]["vice_alcalde"] = "";
	$fieldLabelscandidatos["Spanish"]["id_partido"] = "Partido";
	$fieldToolTipscandidatos["Spanish"]["id_partido"] = "";
	$placeHolderscandidatos["Spanish"]["id_partido"] = "";
	if (count($fieldToolTipscandidatos["Spanish"]))
		$tdatacandidatos[".isUseToolTips"] = true;
}


	$tdatacandidatos[".NCSearch"] = true;



$tdatacandidatos[".shortTableName"] = "candidatos";
$tdatacandidatos[".nSecOptions"] = 0;

$tdatacandidatos[".mainTableOwnerID"] = "";
$tdatacandidatos[".entityType"] = 0;
$tdatacandidatos[".connId"] = "internas_new_at_localhost";


$tdatacandidatos[".strOriginalTableName"] = "candidatos";

	



$tdatacandidatos[".showAddInPopup"] = false;

$tdatacandidatos[".showEditInPopup"] = false;

$tdatacandidatos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacandidatos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacandidatos[".listAjax"] = false;
//	temporary
//$tdatacandidatos[".listAjax"] = false;

	$tdatacandidatos[".audit"] = false;

	$tdatacandidatos[".locking"] = false;


$pages = $tdatacandidatos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacandidatos[".edit"] = true;
	$tdatacandidatos[".afterEditAction"] = 1;
	$tdatacandidatos[".closePopupAfterEdit"] = 1;
	$tdatacandidatos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacandidatos[".add"] = true;
$tdatacandidatos[".afterAddAction"] = 1;
$tdatacandidatos[".closePopupAfterAdd"] = 1;
$tdatacandidatos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacandidatos[".list"] = true;
}



$tdatacandidatos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacandidatos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacandidatos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacandidatos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacandidatos[".printFriendly"] = true;
}



$tdatacandidatos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacandidatos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacandidatos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacandidatos[".isUseAjaxSuggest"] = true;

$tdatacandidatos[".rowHighlite"] = true;





$tdatacandidatos[".ajaxCodeSnippetAdded"] = false;

$tdatacandidatos[".buttonsAdded"] = false;

$tdatacandidatos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacandidatos[".isUseTimeForSearch"] = false;


$tdatacandidatos[".badgeColor"] = "4682B4";


$tdatacandidatos[".allSearchFields"] = array();
$tdatacandidatos[".filterFields"] = array();
$tdatacandidatos[".requiredSearchFields"] = array();

$tdatacandidatos[".googleLikeFields"] = array();
$tdatacandidatos[".googleLikeFields"][] = "id_partido";
$tdatacandidatos[".googleLikeFields"][] = "nombre_candidato";
$tdatacandidatos[".googleLikeFields"][] = "vice_alcalde";



$tdatacandidatos[".tableType"] = "list";

$tdatacandidatos[".printerPageOrientation"] = 0;
$tdatacandidatos[".nPrinterPageScale"] = 100;

$tdatacandidatos[".nPrinterSplitRecords"] = 40;

$tdatacandidatos[".geocodingEnabled"] = false;










$tdatacandidatos[".pageSize"] = 20;

$tdatacandidatos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacandidatos[".strOrderBy"] = $tstrOrderBy;

$tdatacandidatos[".orderindexes"] = array();


$tdatacandidatos[".sqlHead"] = "SELECT id_partido,  	nombre_candidato,  	vice_alcalde";
$tdatacandidatos[".sqlFrom"] = "FROM candidatos";
$tdatacandidatos[".sqlWhereExpr"] = "";
$tdatacandidatos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacandidatos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacandidatos[".arrGroupsPerPage"] = $arrGPP;

$tdatacandidatos[".highlightSearchResults"] = true;

$tableKeyscandidatos = array();
$tableKeyscandidatos[] = "id_partido";
$tdatacandidatos[".Keys"] = $tableKeyscandidatos;


$tdatacandidatos[".hideMobileList"] = array();




//	id_partido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_partido";
	$fdata["GoodName"] = "id_partido";
	$fdata["ownerTable"] = "candidatos";
	$fdata["Label"] = GetFieldLabel("candidatos","id_partido");
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


	$tdatacandidatos["id_partido"] = $fdata;
		$tdatacandidatos[".searchableFields"][] = "id_partido";
//	nombre_candidato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_candidato";
	$fdata["GoodName"] = "nombre_candidato";
	$fdata["ownerTable"] = "candidatos";
	$fdata["Label"] = GetFieldLabel("candidatos","nombre_candidato");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre_candidato";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_candidato";

	
	
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


	$tdatacandidatos["nombre_candidato"] = $fdata;
		$tdatacandidatos[".searchableFields"][] = "nombre_candidato";
//	vice_alcalde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vice_alcalde";
	$fdata["GoodName"] = "vice_alcalde";
	$fdata["ownerTable"] = "candidatos";
	$fdata["Label"] = GetFieldLabel("candidatos","vice_alcalde");
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


	$tdatacandidatos["vice_alcalde"] = $fdata;
		$tdatacandidatos[".searchableFields"][] = "vice_alcalde";


$tables_data["candidatos"]=&$tdatacandidatos;
$field_labels["candidatos"] = &$fieldLabelscandidatos;
$fieldToolTips["candidatos"] = &$fieldToolTipscandidatos;
$placeHolders["candidatos"] = &$placeHolderscandidatos;
$page_titles["candidatos"] = &$pageTitlescandidatos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["candidatos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["candidatos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_candidatos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_partido,  	nombre_candidato,  	vice_alcalde";
$proto0["m_strFrom"] = "FROM candidatos";
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
	"m_strTable" => "candidatos",
	"m_srcTableName" => "candidatos"
));

$proto6["m_sql"] = "id_partido";
$proto6["m_srcTableName"] = "candidatos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_candidato",
	"m_strTable" => "candidatos",
	"m_srcTableName" => "candidatos"
));

$proto8["m_sql"] = "nombre_candidato";
$proto8["m_srcTableName"] = "candidatos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vice_alcalde",
	"m_strTable" => "candidatos",
	"m_srcTableName" => "candidatos"
));

$proto10["m_sql"] = "vice_alcalde";
$proto10["m_srcTableName"] = "candidatos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "candidatos";
$proto13["m_srcTableName"] = "candidatos";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_partido";
$proto13["m_columns"][] = "nombre_candidato";
$proto13["m_columns"][] = "vice_alcalde";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "candidatos";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "candidatos";
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
$proto0["m_srcTableName"]="candidatos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_candidatos = createSqlQuery_candidatos();


	
		;

			

$tdatacandidatos[".sqlquery"] = $queryData_candidatos;



$tableEvents["candidatos"] = new eventsBase;
$tdatacandidatos[".hasEvents"] = false;

?>