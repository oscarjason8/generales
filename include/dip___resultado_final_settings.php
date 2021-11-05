<?php
$tdatadip___resultado_final = array();
$tdatadip___resultado_final[".searchableFields"] = array();
$tdatadip___resultado_final[".ShortName"] = "dip___resultado_final";
$tdatadip___resultado_final[".OwnerID"] = "";
$tdatadip___resultado_final[".OriginalTable"] = "vdiputados";


$tdatadip___resultado_final[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatadip___resultado_final[".originalPagesByType"] = $tdatadip___resultado_final[".pagesByType"];
$tdatadip___resultado_final[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatadip___resultado_final[".originalPages"] = $tdatadip___resultado_final[".pages"];
$tdatadip___resultado_final[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatadip___resultado_final[".originalDefaultPages"] = $tdatadip___resultado_final[".defaultPages"];

//	field labels
$fieldLabelsdip___resultado_final = array();
$fieldToolTipsdip___resultado_final = array();
$pageTitlesdip___resultado_final = array();
$placeHoldersdip___resultado_final = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdip___resultado_final["Spanish"] = array();
	$fieldToolTipsdip___resultado_final["Spanish"] = array();
	$placeHoldersdip___resultado_final["Spanish"] = array();
	$pageTitlesdip___resultado_final["Spanish"] = array();
	$fieldLabelsdip___resultado_final["Spanish"]["Casilla"] = "Casilla";
	$fieldToolTipsdip___resultado_final["Spanish"]["Casilla"] = "";
	$placeHoldersdip___resultado_final["Spanish"]["Casilla"] = "";
	$fieldLabelsdip___resultado_final["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipsdip___resultado_final["Spanish"]["Nombre"] = "";
	$placeHoldersdip___resultado_final["Spanish"]["Nombre"] = "";
	$fieldLabelsdip___resultado_final["Spanish"]["value"] = "Votos";
	$fieldToolTipsdip___resultado_final["Spanish"]["value"] = "";
	$placeHoldersdip___resultado_final["Spanish"]["value"] = "";
	$fieldLabelsdip___resultado_final["Spanish"]["Partido"] = "Partido";
	$fieldToolTipsdip___resultado_final["Spanish"]["Partido"] = "";
	$placeHoldersdip___resultado_final["Spanish"]["Partido"] = "";
	if (count($fieldToolTipsdip___resultado_final["Spanish"]))
		$tdatadip___resultado_final[".isUseToolTips"] = true;
}


	$tdatadip___resultado_final[".NCSearch"] = true;



$tdatadip___resultado_final[".shortTableName"] = "dip___resultado_final";
$tdatadip___resultado_final[".nSecOptions"] = 0;

$tdatadip___resultado_final[".mainTableOwnerID"] = "";
$tdatadip___resultado_final[".entityType"] = 2;
$tdatadip___resultado_final[".connId"] = "internas_new_at_localhost";


$tdatadip___resultado_final[".strOriginalTableName"] = "vdiputados";

	



$tdatadip___resultado_final[".showAddInPopup"] = false;

$tdatadip___resultado_final[".showEditInPopup"] = false;

$tdatadip___resultado_final[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadip___resultado_final[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadip___resultado_final[".listAjax"] = false;
//	temporary
//$tdatadip___resultado_final[".listAjax"] = false;

	$tdatadip___resultado_final[".audit"] = false;

	$tdatadip___resultado_final[".locking"] = false;


$pages = $tdatadip___resultado_final[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadip___resultado_final[".edit"] = true;
	$tdatadip___resultado_final[".afterEditAction"] = 1;
	$tdatadip___resultado_final[".closePopupAfterEdit"] = 1;
	$tdatadip___resultado_final[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadip___resultado_final[".add"] = true;
$tdatadip___resultado_final[".afterAddAction"] = 1;
$tdatadip___resultado_final[".closePopupAfterAdd"] = 1;
$tdatadip___resultado_final[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadip___resultado_final[".list"] = true;
}



$tdatadip___resultado_final[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadip___resultado_final[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadip___resultado_final[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadip___resultado_final[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadip___resultado_final[".printFriendly"] = true;
}



$tdatadip___resultado_final[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadip___resultado_final[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadip___resultado_final[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadip___resultado_final[".isUseAjaxSuggest"] = true;






$tdatadip___resultado_final[".ajaxCodeSnippetAdded"] = false;

$tdatadip___resultado_final[".buttonsAdded"] = false;

$tdatadip___resultado_final[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadip___resultado_final[".isUseTimeForSearch"] = false;


$tdatadip___resultado_final[".badgeColor"] = "9ACD32";


$tdatadip___resultado_final[".allSearchFields"] = array();
$tdatadip___resultado_final[".filterFields"] = array();
$tdatadip___resultado_final[".requiredSearchFields"] = array();

$tdatadip___resultado_final[".googleLikeFields"] = array();
$tdatadip___resultado_final[".googleLikeFields"][] = "Casilla";
$tdatadip___resultado_final[".googleLikeFields"][] = "Nombre";
$tdatadip___resultado_final[".googleLikeFields"][] = "value";
$tdatadip___resultado_final[".googleLikeFields"][] = "Partido";



$tdatadip___resultado_final[".tableType"] = "report";

$tdatadip___resultado_final[".printerPageOrientation"] = 0;
$tdatadip___resultado_final[".nPrinterPageScale"] = 100;

$tdatadip___resultado_final[".nPrinterSplitRecords"] = 20;

$tdatadip___resultado_final[".geocodingEnabled"] = false;

//report settings
$tdatadip___resultado_final[".printReportLayout"] = 6;

$tdatadip___resultado_final[".reportPrintPartitionType"] = 1;
$tdatadip___resultado_final[".reportPrintGroupsPerPage"] = 20;
$tdatadip___resultado_final[".lowGroup"] = 0;



$tdatadip___resultado_final[".pageSize"] = 20;






$tdatadip___resultado_final[".repShowDet"] = true;

$tdatadip___resultado_final[".reportLayout"] = 6;

//end of report settings










$tstrOrderBy = "order by value desc";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadip___resultado_final[".strOrderBy"] = $tstrOrderBy;

$tdatadip___resultado_final[".orderindexes"] = array();
	$tdatadip___resultado_final[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`value`");



$tdatadip___resultado_final[".sqlHead"] = "SELECT Casilla,  	Nombre,  	`value`,  	Partido";
$tdatadip___resultado_final[".sqlFrom"] = "FROM vdiputados";
$tdatadip___resultado_final[".sqlWhereExpr"] = "";
$tdatadip___resultado_final[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadip___resultado_final[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadip___resultado_final[".arrGroupsPerPage"] = $arrGPP;

$tdatadip___resultado_final[".highlightSearchResults"] = true;

$tableKeysdip___resultado_final = array();
$tdatadip___resultado_final[".Keys"] = $tableKeysdip___resultado_final;


$tdatadip___resultado_final[".hideMobileList"] = array();




//	Casilla
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Casilla";
	$fdata["GoodName"] = "Casilla";
	$fdata["ownerTable"] = "vdiputados";
	$fdata["Label"] = GetFieldLabel("Dip___Resultado_Final","Casilla");
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


	$tdatadip___resultado_final["Casilla"] = $fdata;
		$tdatadip___resultado_final[".searchableFields"][] = "Casilla";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "vdiputados";
	$fdata["Label"] = GetFieldLabel("Dip___Resultado_Final","Nombre");
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


	$tdatadip___resultado_final["Nombre"] = $fdata;
		$tdatadip___resultado_final[".searchableFields"][] = "Nombre";
//	value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "value";
	$fdata["GoodName"] = "value";
	$fdata["ownerTable"] = "vdiputados";
	$fdata["Label"] = GetFieldLabel("Dip___Resultado_Final","value");
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


	$tdatadip___resultado_final["value"] = $fdata;
		$tdatadip___resultado_final[".searchableFields"][] = "value";
//	Partido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Partido";
	$fdata["GoodName"] = "Partido";
	$fdata["ownerTable"] = "vdiputados";
	$fdata["Label"] = GetFieldLabel("Dip___Resultado_Final","Partido");
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


	$tdatadip___resultado_final["Partido"] = $fdata;
		$tdatadip___resultado_final[".searchableFields"][] = "Partido";


$tables_data["Dip - Resultado Final"]=&$tdatadip___resultado_final;
$field_labels["Dip___Resultado_Final"] = &$fieldLabelsdip___resultado_final;
$fieldToolTips["Dip___Resultado_Final"] = &$fieldToolTipsdip___resultado_final;
$placeHolders["Dip___Resultado_Final"] = &$placeHoldersdip___resultado_final;
$page_titles["Dip___Resultado_Final"] = &$pageTitlesdip___resultado_final;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Dip - Resultado Final"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Dip - Resultado Final"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dip___resultado_final()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Casilla,  	Nombre,  	`value`,  	Partido";
$proto0["m_strFrom"] = "FROM vdiputados";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by value desc";
	
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
	"m_srcTableName" => "Dip - Resultado Final"
));

$proto6["m_sql"] = "Casilla";
$proto6["m_srcTableName"] = "Dip - Resultado Final";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "vdiputados",
	"m_srcTableName" => "Dip - Resultado Final"
));

$proto8["m_sql"] = "Nombre";
$proto8["m_srcTableName"] = "Dip - Resultado Final";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "value",
	"m_strTable" => "vdiputados",
	"m_srcTableName" => "Dip - Resultado Final"
));

$proto10["m_sql"] = "`value`";
$proto10["m_srcTableName"] = "Dip - Resultado Final";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Partido",
	"m_strTable" => "vdiputados",
	"m_srcTableName" => "Dip - Resultado Final"
));

$proto12["m_sql"] = "Partido";
$proto12["m_srcTableName"] = "Dip - Resultado Final";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "vdiputados";
$proto15["m_srcTableName"] = "Dip - Resultado Final";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "Casilla";
$proto15["m_columns"][] = "Nombre";
$proto15["m_columns"][] = "value";
$proto15["m_columns"][] = "Partido";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "vdiputados";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "Dip - Resultado Final";
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
	"m_strName" => "value",
	"m_strTable" => "vdiputados",
	"m_srcTableName" => "Dip - Resultado Final"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 0;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Dip - Resultado Final";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dip___resultado_final = createSqlQuery_dip___resultado_final();


	
		;

				

$tdatadip___resultado_final[".sqlquery"] = $queryData_dip___resultado_final;



$tableEvents["Dip - Resultado Final"] = new eventsBase;
$tdatadip___resultado_final[".hasEvents"] = false;

?>