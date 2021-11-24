<?php
$tdatadip___por_orden = array();
$tdatadip___por_orden[".searchableFields"] = array();
$tdatadip___por_orden[".ShortName"] = "dip___por_orden";
$tdatadip___por_orden[".OwnerID"] = "";
$tdatadip___por_orden[".OriginalTable"] = "vdiputados";


$tdatadip___por_orden[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatadip___por_orden[".originalPagesByType"] = $tdatadip___por_orden[".pagesByType"];
$tdatadip___por_orden[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatadip___por_orden[".originalPages"] = $tdatadip___por_orden[".pages"];
$tdatadip___por_orden[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatadip___por_orden[".originalDefaultPages"] = $tdatadip___por_orden[".defaultPages"];

//	field labels
$fieldLabelsdip___por_orden = array();
$fieldToolTipsdip___por_orden = array();
$pageTitlesdip___por_orden = array();
$placeHoldersdip___por_orden = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdip___por_orden["Spanish"] = array();
	$fieldToolTipsdip___por_orden["Spanish"] = array();
	$placeHoldersdip___por_orden["Spanish"] = array();
	$pageTitlesdip___por_orden["Spanish"] = array();
	$fieldLabelsdip___por_orden["Spanish"]["Casilla"] = "Casilla";
	$fieldToolTipsdip___por_orden["Spanish"]["Casilla"] = "";
	$placeHoldersdip___por_orden["Spanish"]["Casilla"] = "";
	$fieldLabelsdip___por_orden["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipsdip___por_orden["Spanish"]["Nombre"] = "";
	$placeHoldersdip___por_orden["Spanish"]["Nombre"] = "";
	$fieldLabelsdip___por_orden["Spanish"]["value"] = "Votos";
	$fieldToolTipsdip___por_orden["Spanish"]["value"] = "";
	$placeHoldersdip___por_orden["Spanish"]["value"] = "";
	$fieldLabelsdip___por_orden["Spanish"]["Partido"] = "Partido";
	$fieldToolTipsdip___por_orden["Spanish"]["Partido"] = "";
	$placeHoldersdip___por_orden["Spanish"]["Partido"] = "";
	if (count($fieldToolTipsdip___por_orden["Spanish"]))
		$tdatadip___por_orden[".isUseToolTips"] = true;
}


	$tdatadip___por_orden[".NCSearch"] = true;



$tdatadip___por_orden[".shortTableName"] = "dip___por_orden";
$tdatadip___por_orden[".nSecOptions"] = 0;

$tdatadip___por_orden[".mainTableOwnerID"] = "";
$tdatadip___por_orden[".entityType"] = 2;
$tdatadip___por_orden[".connId"] = "internas_new_at_localhost";


$tdatadip___por_orden[".strOriginalTableName"] = "vdiputados";

	



$tdatadip___por_orden[".showAddInPopup"] = false;

$tdatadip___por_orden[".showEditInPopup"] = false;

$tdatadip___por_orden[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadip___por_orden[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadip___por_orden[".listAjax"] = false;
//	temporary
//$tdatadip___por_orden[".listAjax"] = false;

	$tdatadip___por_orden[".audit"] = false;

	$tdatadip___por_orden[".locking"] = false;


$pages = $tdatadip___por_orden[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadip___por_orden[".edit"] = true;
	$tdatadip___por_orden[".afterEditAction"] = 1;
	$tdatadip___por_orden[".closePopupAfterEdit"] = 1;
	$tdatadip___por_orden[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadip___por_orden[".add"] = true;
$tdatadip___por_orden[".afterAddAction"] = 1;
$tdatadip___por_orden[".closePopupAfterAdd"] = 1;
$tdatadip___por_orden[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadip___por_orden[".list"] = true;
}



$tdatadip___por_orden[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadip___por_orden[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadip___por_orden[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadip___por_orden[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadip___por_orden[".printFriendly"] = true;
}



$tdatadip___por_orden[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadip___por_orden[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadip___por_orden[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadip___por_orden[".isUseAjaxSuggest"] = true;






$tdatadip___por_orden[".ajaxCodeSnippetAdded"] = false;

$tdatadip___por_orden[".buttonsAdded"] = false;

$tdatadip___por_orden[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadip___por_orden[".isUseTimeForSearch"] = false;


$tdatadip___por_orden[".badgeColor"] = "EDCA00";


$tdatadip___por_orden[".allSearchFields"] = array();
$tdatadip___por_orden[".filterFields"] = array();
$tdatadip___por_orden[".requiredSearchFields"] = array();

$tdatadip___por_orden[".googleLikeFields"] = array();
$tdatadip___por_orden[".googleLikeFields"][] = "Casilla";
$tdatadip___por_orden[".googleLikeFields"][] = "Nombre";
$tdatadip___por_orden[".googleLikeFields"][] = "value";
$tdatadip___por_orden[".googleLikeFields"][] = "Partido";



$tdatadip___por_orden[".tableType"] = "report";

$tdatadip___por_orden[".printerPageOrientation"] = 0;
$tdatadip___por_orden[".nPrinterPageScale"] = 100;

$tdatadip___por_orden[".nPrinterSplitRecords"] = 20;

$tdatadip___por_orden[".geocodingEnabled"] = false;

//report settings
$tdatadip___por_orden[".printReportLayout"] = 6;

$tdatadip___por_orden[".reportPrintPartitionType"] = 1;
$tdatadip___por_orden[".reportPrintGroupsPerPage"] = 20;
$tdatadip___por_orden[".lowGroup"] = 0;



$tdatadip___por_orden[".pageSize"] = 20;






$tdatadip___por_orden[".repShowDet"] = true;

$tdatadip___por_orden[".reportLayout"] = 6;

//end of report settings










$tstrOrderBy = "order by Casilla";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadip___por_orden[".strOrderBy"] = $tstrOrderBy;

$tdatadip___por_orden[".orderindexes"] = array();
	$tdatadip___por_orden[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "Casilla");



$tdatadip___por_orden[".sqlHead"] = "SELECT Casilla,  	Nombre,  	`value`,  	Partido";
$tdatadip___por_orden[".sqlFrom"] = "FROM vdiputados";
$tdatadip___por_orden[".sqlWhereExpr"] = "";
$tdatadip___por_orden[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadip___por_orden[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadip___por_orden[".arrGroupsPerPage"] = $arrGPP;

$tdatadip___por_orden[".highlightSearchResults"] = true;

$tableKeysdip___por_orden = array();
$tdatadip___por_orden[".Keys"] = $tableKeysdip___por_orden;


$tdatadip___por_orden[".hideMobileList"] = array();




//	Casilla
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Casilla";
	$fdata["GoodName"] = "Casilla";
	$fdata["ownerTable"] = "vdiputados";
	$fdata["Label"] = GetFieldLabel("Dip___Por_Orden","Casilla");
	$fdata["FieldType"] = 20;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "Casilla";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Casilla";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatadip___por_orden["Casilla"] = $fdata;
		$tdatadip___por_orden[".searchableFields"][] = "Casilla";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "vdiputados";
	$fdata["Label"] = GetFieldLabel("Dip___Por_Orden","Nombre");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "Nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre";

	
	
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
			$edata["EditParams"].= " maxlength=18";

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


	$tdatadip___por_orden["Nombre"] = $fdata;
		$tdatadip___por_orden[".searchableFields"][] = "Nombre";
//	value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "value";
	$fdata["GoodName"] = "value";
	$fdata["ownerTable"] = "vdiputados";
	$fdata["Label"] = GetFieldLabel("Dip___Por_Orden","value");
	$fdata["FieldType"] = 14;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "value";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`value`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatadip___por_orden["value"] = $fdata;
		$tdatadip___por_orden[".searchableFields"][] = "value";
//	Partido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Partido";
	$fdata["GoodName"] = "Partido";
	$fdata["ownerTable"] = "vdiputados";
	$fdata["Label"] = GetFieldLabel("Dip___Por_Orden","Partido");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "Partido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Partido";

	
	
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
			$edata["EditParams"].= " maxlength=34";

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


	$tdatadip___por_orden["Partido"] = $fdata;
		$tdatadip___por_orden[".searchableFields"][] = "Partido";


$tables_data["Dip - Por Orden"]=&$tdatadip___por_orden;
$field_labels["Dip___Por_Orden"] = &$fieldLabelsdip___por_orden;
$fieldToolTips["Dip___Por_Orden"] = &$fieldToolTipsdip___por_orden;
$placeHolders["Dip___Por_Orden"] = &$placeHoldersdip___por_orden;
$page_titles["Dip___Por_Orden"] = &$pageTitlesdip___por_orden;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Dip - Por Orden"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Dip - Por Orden"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dip___por_orden()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Casilla,  	Nombre,  	`value`,  	Partido";
$proto0["m_strFrom"] = "FROM vdiputados";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by Casilla";
	
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
	"m_strName" => "Casilla",
	"m_strTable" => "vdiputados",
	"m_srcTableName" => "Dip - Por Orden"
));

$proto6["m_sql"] = "Casilla";
$proto6["m_srcTableName"] = "Dip - Por Orden";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "vdiputados",
	"m_srcTableName" => "Dip - Por Orden"
));

$proto8["m_sql"] = "Nombre";
$proto8["m_srcTableName"] = "Dip - Por Orden";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "value",
	"m_strTable" => "vdiputados",
	"m_srcTableName" => "Dip - Por Orden"
));

$proto10["m_sql"] = "`value`";
$proto10["m_srcTableName"] = "Dip - Por Orden";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Partido",
	"m_strTable" => "vdiputados",
	"m_srcTableName" => "Dip - Por Orden"
));

$proto12["m_sql"] = "Partido";
$proto12["m_srcTableName"] = "Dip - Por Orden";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "vdiputados";
$proto15["m_srcTableName"] = "Dip - Por Orden";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "Casilla";
$proto15["m_columns"][] = "Nombre";
$proto15["m_columns"][] = "value";
$proto15["m_columns"][] = "Partido";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "vdiputados";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "Dip - Por Orden";
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
	"m_strName" => "Casilla",
	"m_strTable" => "vdiputados",
	"m_srcTableName" => "Dip - Por Orden"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Dip - Por Orden";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dip___por_orden = createSqlQuery_dip___por_orden();


	
		;

				

$tdatadip___por_orden[".sqlquery"] = $queryData_dip___por_orden;



$tableEvents["Dip - Por Orden"] = new eventsBase;
$tdatadip___por_orden[".hasEvents"] = false;

?>