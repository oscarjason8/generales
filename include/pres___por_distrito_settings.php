<?php
$tdatapres___por_distrito = array();
$tdatapres___por_distrito[".searchableFields"] = array();
$tdatapres___por_distrito[".ShortName"] = "pres___por_distrito";
$tdatapres___por_distrito[".OwnerID"] = "";
$tdatapres___por_distrito[".OriginalTable"] = "voto_presidente";


$tdatapres___por_distrito[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatapres___por_distrito[".originalPagesByType"] = $tdatapres___por_distrito[".pagesByType"];
$tdatapres___por_distrito[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatapres___por_distrito[".originalPages"] = $tdatapres___por_distrito[".pages"];
$tdatapres___por_distrito[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatapres___por_distrito[".originalDefaultPages"] = $tdatapres___por_distrito[".defaultPages"];

//	field labels
$fieldLabelspres___por_distrito = array();
$fieldToolTipspres___por_distrito = array();
$pageTitlespres___por_distrito = array();
$placeHolderspres___por_distrito = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspres___por_distrito["Spanish"] = array();
	$fieldToolTipspres___por_distrito["Spanish"] = array();
	$placeHolderspres___por_distrito["Spanish"] = array();
	$pageTitlespres___por_distrito["Spanish"] = array();
	$fieldLabelspres___por_distrito["Spanish"]["id_distrito"] = "Distrito";
	$fieldToolTipspres___por_distrito["Spanish"]["id_distrito"] = "";
	$placeHolderspres___por_distrito["Spanish"]["id_distrito"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["Validos"] = "Votos Validos";
	$fieldToolTipspres___por_distrito["Spanish"]["Validos"] = "";
	$placeHolderspres___por_distrito["Spanish"]["Validos"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["Blancos"] = "Votos En Blanco";
	$fieldToolTipspres___por_distrito["Spanish"]["Blancos"] = "";
	$placeHolderspres___por_distrito["Spanish"]["Blancos"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["Nulos"] = "Votos Nulos";
	$fieldToolTipspres___por_distrito["Spanish"]["Nulos"] = "";
	$placeHolderspres___por_distrito["Spanish"]["Nulos"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["Utilizados"] = "Votos Utilizados";
	$fieldToolTipspres___por_distrito["Spanish"]["Utilizados"] = "";
	$placeHolderspres___por_distrito["Spanish"]["Utilizados"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["No_Utilizados"] = "Votos No Utilizados";
	$fieldToolTipspres___por_distrito["Spanish"]["No_Utilizados"] = "";
	$placeHolderspres___por_distrito["Spanish"]["No_Utilizados"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["Total"] = "Total de Votos";
	$fieldToolTipspres___por_distrito["Spanish"]["Total"] = "";
	$placeHolderspres___por_distrito["Spanish"]["Total"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["Yani"] = "Yani Rosenthal";
	$fieldToolTipspres___por_distrito["Spanish"]["Yani"] = "";
	$placeHolderspres___por_distrito["Spanish"]["Yani"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["Banegas"] = "Dario Banegas";
	$fieldToolTipspres___por_distrito["Spanish"]["Banegas"] = "";
	$placeHolderspres___por_distrito["Spanish"]["Banegas"] = "";
	$fieldLabelspres___por_distrito["Spanish"]["Luis"] = "Luis Zelaya";
	$fieldToolTipspres___por_distrito["Spanish"]["Luis"] = "";
	$placeHolderspres___por_distrito["Spanish"]["Luis"] = "";
	if (count($fieldToolTipspres___por_distrito["Spanish"]))
		$tdatapres___por_distrito[".isUseToolTips"] = true;
}


	$tdatapres___por_distrito[".NCSearch"] = true;



$tdatapres___por_distrito[".shortTableName"] = "pres___por_distrito";
$tdatapres___por_distrito[".nSecOptions"] = 0;

$tdatapres___por_distrito[".mainTableOwnerID"] = "";
$tdatapres___por_distrito[".entityType"] = 2;
$tdatapres___por_distrito[".connId"] = "internas_new_at_localhost";


$tdatapres___por_distrito[".strOriginalTableName"] = "voto_presidente";

	



$tdatapres___por_distrito[".showAddInPopup"] = false;

$tdatapres___por_distrito[".showEditInPopup"] = false;

$tdatapres___por_distrito[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapres___por_distrito[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapres___por_distrito[".listAjax"] = false;
//	temporary
//$tdatapres___por_distrito[".listAjax"] = false;

	$tdatapres___por_distrito[".audit"] = false;

	$tdatapres___por_distrito[".locking"] = false;


$pages = $tdatapres___por_distrito[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapres___por_distrito[".edit"] = true;
	$tdatapres___por_distrito[".afterEditAction"] = 1;
	$tdatapres___por_distrito[".closePopupAfterEdit"] = 1;
	$tdatapres___por_distrito[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapres___por_distrito[".add"] = true;
$tdatapres___por_distrito[".afterAddAction"] = 1;
$tdatapres___por_distrito[".closePopupAfterAdd"] = 1;
$tdatapres___por_distrito[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapres___por_distrito[".list"] = true;
}



$tdatapres___por_distrito[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapres___por_distrito[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapres___por_distrito[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapres___por_distrito[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapres___por_distrito[".printFriendly"] = true;
}



$tdatapres___por_distrito[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapres___por_distrito[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapres___por_distrito[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapres___por_distrito[".isUseAjaxSuggest"] = true;






$tdatapres___por_distrito[".ajaxCodeSnippetAdded"] = false;

$tdatapres___por_distrito[".buttonsAdded"] = false;

$tdatapres___por_distrito[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapres___por_distrito[".isUseTimeForSearch"] = false;


$tdatapres___por_distrito[".badgeColor"] = "DC143C";


$tdatapres___por_distrito[".allSearchFields"] = array();
$tdatapres___por_distrito[".filterFields"] = array();
$tdatapres___por_distrito[".requiredSearchFields"] = array();

$tdatapres___por_distrito[".googleLikeFields"] = array();
$tdatapres___por_distrito[".googleLikeFields"][] = "id_distrito";
$tdatapres___por_distrito[".googleLikeFields"][] = "Yani";
$tdatapres___por_distrito[".googleLikeFields"][] = "Banegas";
$tdatapres___por_distrito[".googleLikeFields"][] = "Luis";
$tdatapres___por_distrito[".googleLikeFields"][] = "Validos";
$tdatapres___por_distrito[".googleLikeFields"][] = "Blancos";
$tdatapres___por_distrito[".googleLikeFields"][] = "Nulos";
$tdatapres___por_distrito[".googleLikeFields"][] = "Utilizados";
$tdatapres___por_distrito[".googleLikeFields"][] = "No_Utilizados";
$tdatapres___por_distrito[".googleLikeFields"][] = "Total";



$tdatapres___por_distrito[".tableType"] = "report";

$tdatapres___por_distrito[".printerPageOrientation"] = 0;
$tdatapres___por_distrito[".nPrinterPageScale"] = 100;

$tdatapres___por_distrito[".nPrinterSplitRecords"] = 40;

$tdatapres___por_distrito[".geocodingEnabled"] = false;

//report settings
$tdatapres___por_distrito[".printReportLayout"] = 6;

$tdatapres___por_distrito[".reportPrintPartitionType"] = 1;
$tdatapres___por_distrito[".reportPrintGroupsPerPage"] = 40;
$tdatapres___por_distrito[".lowGroup"] = 0;



$tdatapres___por_distrito[".pageSize"] = 20;


$tdatapres___por_distrito[".isExistTotalFields"] = true;



$tdatapres___por_distrito[".reportGlobalSummary"] = true;

$tdatapres___por_distrito[".repShowDet"] = true;

$tdatapres___por_distrito[".reportLayout"] = 6;

//end of report settings










$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapres___por_distrito[".strOrderBy"] = $tstrOrderBy;

$tdatapres___por_distrito[".orderindexes"] = array();


$tdatapres___por_distrito[".sqlHead"] = "select ur.id_distrito,   (select concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")   from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Yani,  (select concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")   from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Banegas,  (select concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")   from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Luis,  (select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Validos,  (select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Blancos,  (select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Nulos,  (select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Utilizados,  (select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as No_Utilizados,  (select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Total";
$tdatapres___por_distrito[".sqlFrom"] = "from voto_presidente as vp  inner join urna as ur on vp.id_urna = ur.id_urna";
$tdatapres___por_distrito[".sqlWhereExpr"] = "";
$tdatapres___por_distrito[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapres___por_distrito[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapres___por_distrito[".arrGroupsPerPage"] = $arrGPP;

$tdatapres___por_distrito[".highlightSearchResults"] = true;

$tableKeyspres___por_distrito = array();
$tableKeyspres___por_distrito[] = "id_distrito";
$tdatapres___por_distrito[".Keys"] = $tableKeyspres___por_distrito;


$tdatapres___por_distrito[".hideMobileList"] = array();




//	id_distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_distrito";
	$fdata["GoodName"] = "id_distrito";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","id_distrito");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "id_distrito";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ur.id_distrito";

	
	
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

	

	
	$edata["LookupOrderBy"] = "id_distrito";

	
	
	
	

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatapres___por_distrito["id_distrito"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "id_distrito";
//	Yani
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Yani";
	$fdata["GoodName"] = "Yani";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","Yani");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "Yani";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")   from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
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


	$tdatapres___por_distrito["Yani"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "Yani";
//	Banegas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Banegas";
	$fdata["GoodName"] = "Banegas";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","Banegas");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "Banegas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")   from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
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


	$tdatapres___por_distrito["Banegas"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "Banegas";
//	Luis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Luis";
	$fdata["GoodName"] = "Luis";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","Luis");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "Luis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")   from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
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


	$tdatapres___por_distrito["Luis"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "Luis";
//	Validos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Validos";
	$fdata["GoodName"] = "Validos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","Validos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "validos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
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


	$tdatapres___por_distrito["Validos"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "Validos";
//	Blancos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Blancos";
	$fdata["GoodName"] = "Blancos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","Blancos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "blancos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
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


	$tdatapres___por_distrito["Blancos"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "Blancos";
//	Nulos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Nulos";
	$fdata["GoodName"] = "Nulos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","Nulos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "nulos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
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


	$tdatapres___por_distrito["Nulos"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "Nulos";
//	Utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Utilizados";
	$fdata["GoodName"] = "Utilizados";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","Utilizados");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "utilizados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
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


	$tdatapres___por_distrito["Utilizados"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "Utilizados";
//	No_Utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "No_Utilizados";
	$fdata["GoodName"] = "No_Utilizados";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","No_Utilizados");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "no_utilizados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
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


	$tdatapres___por_distrito["No_Utilizados"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "No_Utilizados";
//	Total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Total";
	$fdata["GoodName"] = "Total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Distrito","Total");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "total";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";

	
	
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


	$tdatapres___por_distrito["Total"] = $fdata;
		$tdatapres___por_distrito[".searchableFields"][] = "Total";


$tables_data["Pres - Por Distrito"]=&$tdatapres___por_distrito;
$field_labels["Pres___Por_Distrito"] = &$fieldLabelspres___por_distrito;
$fieldToolTips["Pres___Por_Distrito"] = &$fieldToolTipspres___por_distrito;
$placeHolders["Pres___Por_Distrito"] = &$placeHolderspres___por_distrito;
$page_titles["Pres___Por_Distrito"] = &$pageTitlespres___por_distrito;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Pres - Por Distrito"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Pres - Por Distrito"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pres___por_distrito()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "ur.id_distrito,   (select concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")   from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Yani,  (select concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")   from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Banegas,  (select concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")   from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Luis,  (select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Validos,  (select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Blancos,  (select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Nulos,  (select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Utilizados,  (select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as No_Utilizados,  (select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito) as Total";
$proto0["m_strFrom"] = "from voto_presidente as vp  inner join urna as ur on vp.id_urna = ur.id_urna";
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
	"m_strTable" => "ur",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto6["m_sql"] = "ur.id_distrito";
$proto6["m_srcTableName"] = "Pres - Por Distrito";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_strHead"] = "select";
$proto9["m_strFieldList"] = "concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")";
$proto9["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto9["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto9["m_strOrderBy"] = "";
	
		;
			$proto9["cipherer"] = null;
$proto11=array();
$proto11["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "= ur.id_distrito";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_where"] = $obj;
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto9["m_having"] = $obj;
$proto9["m_fieldlist"] = array();
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_CUSTOM";
$proto16["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato1)"
));

$proto16["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" votos (\""
));

$proto16["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato1)/((sum(candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1)"
));

$proto16["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")";
$proto15["m_srcTableName"] = "Pres - Por Distrito";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto9["m_fieldlist"][]=$obj;
$proto9["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "voto_presidente";
$proto22["m_srcTableName"] = "Pres - Por Distrito";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "elecciones";
$proto22["m_columns"][] = "id_urna";
$proto22["m_columns"][] = "candidato1";
$proto22["m_columns"][] = "candidato2";
$proto22["m_columns"][] = "candidato3";
$proto22["m_columns"][] = "candidato4";
$proto22["m_columns"][] = "candidato5";
$proto22["m_columns"][] = "candidato6";
$proto22["m_columns"][] = "candidato7";
$proto22["m_columns"][] = "candidato8";
$proto22["m_columns"][] = "candidato9";
$proto22["m_columns"][] = "candidato10";
$proto22["m_columns"][] = "candidato11";
$proto22["m_columns"][] = "candidato12";
$proto22["m_columns"][] = "candidato13";
$proto22["m_columns"][] = "candidato14";
$proto22["m_columns"][] = "candidato15";
$proto22["m_columns"][] = "validos";
$proto22["m_columns"][] = "blancos";
$proto22["m_columns"][] = "nulos";
$proto22["m_columns"][] = "utilizados";
$proto22["m_columns"][] = "no_utilizados";
$proto22["m_columns"][] = "total";
$proto22["m_columns"][] = "usuario";
$proto22["m_columns"][] = "fecha";
$proto22["m_columns"][] = "editado_por";
$proto22["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "voto_presidente as p";
$proto21["m_alias"] = "p";
$proto21["m_srcTableName"] = "Pres - Por Distrito";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto9["m_fromlist"][]=$obj;
												$proto25=array();
$proto25["m_link"] = "SQLL_INNERJOIN";
			$proto26=array();
$proto26["m_strName"] = "urna";
$proto26["m_srcTableName"] = "Pres - Por Distrito";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id_distrito";
$proto26["m_columns"][] = "id_sector";
$proto26["m_columns"][] = "id_urna";
$proto26["m_columns"][] = "nombre_centro";
$proto26["m_columns"][] = "ubicación";
$proto26["m_columns"][] = "votantes";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto25["m_alias"] = "u";
$proto25["m_srcTableName"] = "Pres - Por Distrito";
$proto27=array();
$proto27["m_sql"] = "p.id_urna = u.id_urna";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "= u.id_urna";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto9["m_fromlist"][]=$obj;
$proto9["m_groupby"] = array();
$proto9["m_orderby"] = array();
$proto9["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto9);

$proto8["m_sql"] = "(select concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")   from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto8["m_srcTableName"] = "Pres - Por Distrito";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Yani";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$proto30=array();
$proto30["m_strHead"] = "select";
$proto30["m_strFieldList"] = "concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")";
$proto30["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto30["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto30["m_strOrderBy"] = "";
	
		;
			$proto30["cipherer"] = null;
$proto32=array();
$proto32["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= ur.id_distrito";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_where"] = $obj;
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

$proto30["m_having"] = $obj;
$proto30["m_fieldlist"] = array();
						$proto36=array();
			$proto37=array();
$proto37["m_functiontype"] = "SQLF_CUSTOM";
$proto37["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato2)"
));

$proto37["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" votos (\""
));

$proto37["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1)"
));

$proto37["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto37);

$proto36["m_sql"] = "concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")";
$proto36["m_srcTableName"] = "Pres - Por Distrito";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto30["m_fieldlist"][]=$obj;
$proto30["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "voto_presidente";
$proto43["m_srcTableName"] = "Pres - Por Distrito";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "elecciones";
$proto43["m_columns"][] = "id_urna";
$proto43["m_columns"][] = "candidato1";
$proto43["m_columns"][] = "candidato2";
$proto43["m_columns"][] = "candidato3";
$proto43["m_columns"][] = "candidato4";
$proto43["m_columns"][] = "candidato5";
$proto43["m_columns"][] = "candidato6";
$proto43["m_columns"][] = "candidato7";
$proto43["m_columns"][] = "candidato8";
$proto43["m_columns"][] = "candidato9";
$proto43["m_columns"][] = "candidato10";
$proto43["m_columns"][] = "candidato11";
$proto43["m_columns"][] = "candidato12";
$proto43["m_columns"][] = "candidato13";
$proto43["m_columns"][] = "candidato14";
$proto43["m_columns"][] = "candidato15";
$proto43["m_columns"][] = "validos";
$proto43["m_columns"][] = "blancos";
$proto43["m_columns"][] = "nulos";
$proto43["m_columns"][] = "utilizados";
$proto43["m_columns"][] = "no_utilizados";
$proto43["m_columns"][] = "total";
$proto43["m_columns"][] = "usuario";
$proto43["m_columns"][] = "fecha";
$proto43["m_columns"][] = "editado_por";
$proto43["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "voto_presidente as p";
$proto42["m_alias"] = "p";
$proto42["m_srcTableName"] = "Pres - Por Distrito";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto30["m_fromlist"][]=$obj;
												$proto46=array();
$proto46["m_link"] = "SQLL_INNERJOIN";
			$proto47=array();
$proto47["m_strName"] = "urna";
$proto47["m_srcTableName"] = "Pres - Por Distrito";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id_distrito";
$proto47["m_columns"][] = "id_sector";
$proto47["m_columns"][] = "id_urna";
$proto47["m_columns"][] = "nombre_centro";
$proto47["m_columns"][] = "ubicación";
$proto47["m_columns"][] = "votantes";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto46["m_alias"] = "u";
$proto46["m_srcTableName"] = "Pres - Por Distrito";
$proto48=array();
$proto48["m_sql"] = "p.id_urna = u.id_urna";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= u.id_urna";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto30["m_fromlist"][]=$obj;
$proto30["m_groupby"] = array();
$proto30["m_orderby"] = array();
$proto30["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto30);

$proto29["m_sql"] = "(select concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")   from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto29["m_srcTableName"] = "Pres - Por Distrito";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "Banegas";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$proto51=array();
$proto51["m_strHead"] = "select";
$proto51["m_strFieldList"] = "concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")";
$proto51["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto51["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto51["m_strOrderBy"] = "";
	
		;
			$proto51["cipherer"] = null;
$proto53=array();
$proto53["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "= ur.id_distrito";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

$proto51["m_where"] = $obj;
$proto55=array();
$proto55["m_sql"] = "";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "";
$proto55["m_havingmode"] = false;
$proto55["m_inBrackets"] = false;
$proto55["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto55);

$proto51["m_having"] = $obj;
$proto51["m_fieldlist"] = array();
						$proto57=array();
			$proto58=array();
$proto58["m_functiontype"] = "SQLF_CUSTOM";
$proto58["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato3)"
));

$proto58["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" votos (\""
));

$proto58["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1)"
));

$proto58["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto58["m_arguments"][]=$obj;
$proto58["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto58);

$proto57["m_sql"] = "concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")";
$proto57["m_srcTableName"] = "Pres - Por Distrito";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto51["m_fieldlist"][]=$obj;
$proto51["m_fromlist"] = array();
												$proto63=array();
$proto63["m_link"] = "SQLL_MAIN";
			$proto64=array();
$proto64["m_strName"] = "voto_presidente";
$proto64["m_srcTableName"] = "Pres - Por Distrito";
$proto64["m_columns"] = array();
$proto64["m_columns"][] = "elecciones";
$proto64["m_columns"][] = "id_urna";
$proto64["m_columns"][] = "candidato1";
$proto64["m_columns"][] = "candidato2";
$proto64["m_columns"][] = "candidato3";
$proto64["m_columns"][] = "candidato4";
$proto64["m_columns"][] = "candidato5";
$proto64["m_columns"][] = "candidato6";
$proto64["m_columns"][] = "candidato7";
$proto64["m_columns"][] = "candidato8";
$proto64["m_columns"][] = "candidato9";
$proto64["m_columns"][] = "candidato10";
$proto64["m_columns"][] = "candidato11";
$proto64["m_columns"][] = "candidato12";
$proto64["m_columns"][] = "candidato13";
$proto64["m_columns"][] = "candidato14";
$proto64["m_columns"][] = "candidato15";
$proto64["m_columns"][] = "validos";
$proto64["m_columns"][] = "blancos";
$proto64["m_columns"][] = "nulos";
$proto64["m_columns"][] = "utilizados";
$proto64["m_columns"][] = "no_utilizados";
$proto64["m_columns"][] = "total";
$proto64["m_columns"][] = "usuario";
$proto64["m_columns"][] = "fecha";
$proto64["m_columns"][] = "editado_por";
$proto64["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto64);

$proto63["m_table"] = $obj;
$proto63["m_sql"] = "voto_presidente as p";
$proto63["m_alias"] = "p";
$proto63["m_srcTableName"] = "Pres - Por Distrito";
$proto65=array();
$proto65["m_sql"] = "";
$proto65["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto65["m_column"]=$obj;
$proto65["m_contained"] = array();
$proto65["m_strCase"] = "";
$proto65["m_havingmode"] = false;
$proto65["m_inBrackets"] = false;
$proto65["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto65);

$proto63["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto63);

$proto51["m_fromlist"][]=$obj;
												$proto67=array();
$proto67["m_link"] = "SQLL_INNERJOIN";
			$proto68=array();
$proto68["m_strName"] = "urna";
$proto68["m_srcTableName"] = "Pres - Por Distrito";
$proto68["m_columns"] = array();
$proto68["m_columns"][] = "id_distrito";
$proto68["m_columns"][] = "id_sector";
$proto68["m_columns"][] = "id_urna";
$proto68["m_columns"][] = "nombre_centro";
$proto68["m_columns"][] = "ubicación";
$proto68["m_columns"][] = "votantes";
$obj = new SQLTable($proto68);

$proto67["m_table"] = $obj;
$proto67["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto67["m_alias"] = "u";
$proto67["m_srcTableName"] = "Pres - Por Distrito";
$proto69=array();
$proto69["m_sql"] = "p.id_urna = u.id_urna";
$proto69["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto69["m_column"]=$obj;
$proto69["m_contained"] = array();
$proto69["m_strCase"] = "= u.id_urna";
$proto69["m_havingmode"] = false;
$proto69["m_inBrackets"] = false;
$proto69["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto69);

$proto67["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto67);

$proto51["m_fromlist"][]=$obj;
$proto51["m_groupby"] = array();
$proto51["m_orderby"] = array();
$proto51["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto51);

$proto50["m_sql"] = "(select concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")   from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto50["m_srcTableName"] = "Pres - Por Distrito";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "Luis";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$proto72=array();
$proto72["m_strHead"] = "select";
$proto72["m_strFieldList"] = "sum(p.validos)";
$proto72["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto72["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto72["m_strOrderBy"] = "";
	
		;
			$proto72["cipherer"] = null;
$proto74=array();
$proto74["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= ur.id_distrito";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_where"] = $obj;
$proto76=array();
$proto76["m_sql"] = "";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

$proto72["m_having"] = $obj;
$proto72["m_fieldlist"] = array();
						$proto78=array();
			$proto79=array();
$proto79["m_functiontype"] = "SQLF_SUM";
$proto79["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "validos",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto79["m_arguments"][]=$obj;
$proto79["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto79);

$proto78["m_sql"] = "sum(p.validos)";
$proto78["m_srcTableName"] = "Pres - Por Distrito";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto72["m_fieldlist"][]=$obj;
$proto72["m_fromlist"] = array();
												$proto81=array();
$proto81["m_link"] = "SQLL_MAIN";
			$proto82=array();
$proto82["m_strName"] = "voto_presidente";
$proto82["m_srcTableName"] = "Pres - Por Distrito";
$proto82["m_columns"] = array();
$proto82["m_columns"][] = "elecciones";
$proto82["m_columns"][] = "id_urna";
$proto82["m_columns"][] = "candidato1";
$proto82["m_columns"][] = "candidato2";
$proto82["m_columns"][] = "candidato3";
$proto82["m_columns"][] = "candidato4";
$proto82["m_columns"][] = "candidato5";
$proto82["m_columns"][] = "candidato6";
$proto82["m_columns"][] = "candidato7";
$proto82["m_columns"][] = "candidato8";
$proto82["m_columns"][] = "candidato9";
$proto82["m_columns"][] = "candidato10";
$proto82["m_columns"][] = "candidato11";
$proto82["m_columns"][] = "candidato12";
$proto82["m_columns"][] = "candidato13";
$proto82["m_columns"][] = "candidato14";
$proto82["m_columns"][] = "candidato15";
$proto82["m_columns"][] = "validos";
$proto82["m_columns"][] = "blancos";
$proto82["m_columns"][] = "nulos";
$proto82["m_columns"][] = "utilizados";
$proto82["m_columns"][] = "no_utilizados";
$proto82["m_columns"][] = "total";
$proto82["m_columns"][] = "usuario";
$proto82["m_columns"][] = "fecha";
$proto82["m_columns"][] = "editado_por";
$proto82["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto82);

$proto81["m_table"] = $obj;
$proto81["m_sql"] = "voto_presidente as p";
$proto81["m_alias"] = "p";
$proto81["m_srcTableName"] = "Pres - Por Distrito";
$proto83=array();
$proto83["m_sql"] = "";
$proto83["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto83["m_column"]=$obj;
$proto83["m_contained"] = array();
$proto83["m_strCase"] = "";
$proto83["m_havingmode"] = false;
$proto83["m_inBrackets"] = false;
$proto83["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto83);

$proto81["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto81);

$proto72["m_fromlist"][]=$obj;
												$proto85=array();
$proto85["m_link"] = "SQLL_INNERJOIN";
			$proto86=array();
$proto86["m_strName"] = "urna";
$proto86["m_srcTableName"] = "Pres - Por Distrito";
$proto86["m_columns"] = array();
$proto86["m_columns"][] = "id_distrito";
$proto86["m_columns"][] = "id_sector";
$proto86["m_columns"][] = "id_urna";
$proto86["m_columns"][] = "nombre_centro";
$proto86["m_columns"][] = "ubicación";
$proto86["m_columns"][] = "votantes";
$obj = new SQLTable($proto86);

$proto85["m_table"] = $obj;
$proto85["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto85["m_alias"] = "u";
$proto85["m_srcTableName"] = "Pres - Por Distrito";
$proto87=array();
$proto87["m_sql"] = "p.id_urna = u.id_urna";
$proto87["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto87["m_column"]=$obj;
$proto87["m_contained"] = array();
$proto87["m_strCase"] = "= u.id_urna";
$proto87["m_havingmode"] = false;
$proto87["m_inBrackets"] = false;
$proto87["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto87);

$proto85["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto85);

$proto72["m_fromlist"][]=$obj;
$proto72["m_groupby"] = array();
$proto72["m_orderby"] = array();
$proto72["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto72);

$proto71["m_sql"] = "(select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto71["m_srcTableName"] = "Pres - Por Distrito";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "Validos";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$proto90=array();
$proto90["m_strHead"] = "select";
$proto90["m_strFieldList"] = "sum(p.blancos)";
$proto90["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto90["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto90["m_strOrderBy"] = "";
	
		;
			$proto90["cipherer"] = null;
$proto92=array();
$proto92["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
$proto92["m_strCase"] = "= ur.id_distrito";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

$proto90["m_where"] = $obj;
$proto94=array();
$proto94["m_sql"] = "";
$proto94["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto94["m_column"]=$obj;
$proto94["m_contained"] = array();
$proto94["m_strCase"] = "";
$proto94["m_havingmode"] = false;
$proto94["m_inBrackets"] = false;
$proto94["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto94);

$proto90["m_having"] = $obj;
$proto90["m_fieldlist"] = array();
						$proto96=array();
			$proto97=array();
$proto97["m_functiontype"] = "SQLF_SUM";
$proto97["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "blancos",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto97["m_arguments"][]=$obj;
$proto97["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto97);

$proto96["m_sql"] = "sum(p.blancos)";
$proto96["m_srcTableName"] = "Pres - Por Distrito";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto90["m_fieldlist"][]=$obj;
$proto90["m_fromlist"] = array();
												$proto99=array();
$proto99["m_link"] = "SQLL_MAIN";
			$proto100=array();
$proto100["m_strName"] = "voto_presidente";
$proto100["m_srcTableName"] = "Pres - Por Distrito";
$proto100["m_columns"] = array();
$proto100["m_columns"][] = "elecciones";
$proto100["m_columns"][] = "id_urna";
$proto100["m_columns"][] = "candidato1";
$proto100["m_columns"][] = "candidato2";
$proto100["m_columns"][] = "candidato3";
$proto100["m_columns"][] = "candidato4";
$proto100["m_columns"][] = "candidato5";
$proto100["m_columns"][] = "candidato6";
$proto100["m_columns"][] = "candidato7";
$proto100["m_columns"][] = "candidato8";
$proto100["m_columns"][] = "candidato9";
$proto100["m_columns"][] = "candidato10";
$proto100["m_columns"][] = "candidato11";
$proto100["m_columns"][] = "candidato12";
$proto100["m_columns"][] = "candidato13";
$proto100["m_columns"][] = "candidato14";
$proto100["m_columns"][] = "candidato15";
$proto100["m_columns"][] = "validos";
$proto100["m_columns"][] = "blancos";
$proto100["m_columns"][] = "nulos";
$proto100["m_columns"][] = "utilizados";
$proto100["m_columns"][] = "no_utilizados";
$proto100["m_columns"][] = "total";
$proto100["m_columns"][] = "usuario";
$proto100["m_columns"][] = "fecha";
$proto100["m_columns"][] = "editado_por";
$proto100["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto100);

$proto99["m_table"] = $obj;
$proto99["m_sql"] = "voto_presidente as p";
$proto99["m_alias"] = "p";
$proto99["m_srcTableName"] = "Pres - Por Distrito";
$proto101=array();
$proto101["m_sql"] = "";
$proto101["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto101["m_column"]=$obj;
$proto101["m_contained"] = array();
$proto101["m_strCase"] = "";
$proto101["m_havingmode"] = false;
$proto101["m_inBrackets"] = false;
$proto101["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto101);

$proto99["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto99);

$proto90["m_fromlist"][]=$obj;
												$proto103=array();
$proto103["m_link"] = "SQLL_INNERJOIN";
			$proto104=array();
$proto104["m_strName"] = "urna";
$proto104["m_srcTableName"] = "Pres - Por Distrito";
$proto104["m_columns"] = array();
$proto104["m_columns"][] = "id_distrito";
$proto104["m_columns"][] = "id_sector";
$proto104["m_columns"][] = "id_urna";
$proto104["m_columns"][] = "nombre_centro";
$proto104["m_columns"][] = "ubicación";
$proto104["m_columns"][] = "votantes";
$obj = new SQLTable($proto104);

$proto103["m_table"] = $obj;
$proto103["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto103["m_alias"] = "u";
$proto103["m_srcTableName"] = "Pres - Por Distrito";
$proto105=array();
$proto105["m_sql"] = "p.id_urna = u.id_urna";
$proto105["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto105["m_column"]=$obj;
$proto105["m_contained"] = array();
$proto105["m_strCase"] = "= u.id_urna";
$proto105["m_havingmode"] = false;
$proto105["m_inBrackets"] = false;
$proto105["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto105);

$proto103["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto103);

$proto90["m_fromlist"][]=$obj;
$proto90["m_groupby"] = array();
$proto90["m_orderby"] = array();
$proto90["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto90);

$proto89["m_sql"] = "(select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto89["m_srcTableName"] = "Pres - Por Distrito";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "Blancos";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto107=array();
			$proto108=array();
$proto108["m_strHead"] = "select";
$proto108["m_strFieldList"] = "sum(p.nulos)";
$proto108["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto108["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto108["m_strOrderBy"] = "";
	
		;
			$proto108["cipherer"] = null;
$proto110=array();
$proto110["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "= ur.id_distrito";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

$proto108["m_where"] = $obj;
$proto112=array();
$proto112["m_sql"] = "";
$proto112["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto112["m_column"]=$obj;
$proto112["m_contained"] = array();
$proto112["m_strCase"] = "";
$proto112["m_havingmode"] = false;
$proto112["m_inBrackets"] = false;
$proto112["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto112);

$proto108["m_having"] = $obj;
$proto108["m_fieldlist"] = array();
						$proto114=array();
			$proto115=array();
$proto115["m_functiontype"] = "SQLF_SUM";
$proto115["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "nulos",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto115["m_arguments"][]=$obj;
$proto115["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto115);

$proto114["m_sql"] = "sum(p.nulos)";
$proto114["m_srcTableName"] = "Pres - Por Distrito";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto108["m_fieldlist"][]=$obj;
$proto108["m_fromlist"] = array();
												$proto117=array();
$proto117["m_link"] = "SQLL_MAIN";
			$proto118=array();
$proto118["m_strName"] = "voto_presidente";
$proto118["m_srcTableName"] = "Pres - Por Distrito";
$proto118["m_columns"] = array();
$proto118["m_columns"][] = "elecciones";
$proto118["m_columns"][] = "id_urna";
$proto118["m_columns"][] = "candidato1";
$proto118["m_columns"][] = "candidato2";
$proto118["m_columns"][] = "candidato3";
$proto118["m_columns"][] = "candidato4";
$proto118["m_columns"][] = "candidato5";
$proto118["m_columns"][] = "candidato6";
$proto118["m_columns"][] = "candidato7";
$proto118["m_columns"][] = "candidato8";
$proto118["m_columns"][] = "candidato9";
$proto118["m_columns"][] = "candidato10";
$proto118["m_columns"][] = "candidato11";
$proto118["m_columns"][] = "candidato12";
$proto118["m_columns"][] = "candidato13";
$proto118["m_columns"][] = "candidato14";
$proto118["m_columns"][] = "candidato15";
$proto118["m_columns"][] = "validos";
$proto118["m_columns"][] = "blancos";
$proto118["m_columns"][] = "nulos";
$proto118["m_columns"][] = "utilizados";
$proto118["m_columns"][] = "no_utilizados";
$proto118["m_columns"][] = "total";
$proto118["m_columns"][] = "usuario";
$proto118["m_columns"][] = "fecha";
$proto118["m_columns"][] = "editado_por";
$proto118["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto118);

$proto117["m_table"] = $obj;
$proto117["m_sql"] = "voto_presidente as p";
$proto117["m_alias"] = "p";
$proto117["m_srcTableName"] = "Pres - Por Distrito";
$proto119=array();
$proto119["m_sql"] = "";
$proto119["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto119["m_column"]=$obj;
$proto119["m_contained"] = array();
$proto119["m_strCase"] = "";
$proto119["m_havingmode"] = false;
$proto119["m_inBrackets"] = false;
$proto119["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto119);

$proto117["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto117);

$proto108["m_fromlist"][]=$obj;
												$proto121=array();
$proto121["m_link"] = "SQLL_INNERJOIN";
			$proto122=array();
$proto122["m_strName"] = "urna";
$proto122["m_srcTableName"] = "Pres - Por Distrito";
$proto122["m_columns"] = array();
$proto122["m_columns"][] = "id_distrito";
$proto122["m_columns"][] = "id_sector";
$proto122["m_columns"][] = "id_urna";
$proto122["m_columns"][] = "nombre_centro";
$proto122["m_columns"][] = "ubicación";
$proto122["m_columns"][] = "votantes";
$obj = new SQLTable($proto122);

$proto121["m_table"] = $obj;
$proto121["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto121["m_alias"] = "u";
$proto121["m_srcTableName"] = "Pres - Por Distrito";
$proto123=array();
$proto123["m_sql"] = "p.id_urna = u.id_urna";
$proto123["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto123["m_column"]=$obj;
$proto123["m_contained"] = array();
$proto123["m_strCase"] = "= u.id_urna";
$proto123["m_havingmode"] = false;
$proto123["m_inBrackets"] = false;
$proto123["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto123);

$proto121["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto121);

$proto108["m_fromlist"][]=$obj;
$proto108["m_groupby"] = array();
$proto108["m_orderby"] = array();
$proto108["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto108);

$proto107["m_sql"] = "(select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto107["m_srcTableName"] = "Pres - Por Distrito";
$proto107["m_expr"]=$obj;
$proto107["m_alias"] = "Nulos";
$obj = new SQLFieldListItem($proto107);

$proto0["m_fieldlist"][]=$obj;
						$proto125=array();
			$proto126=array();
$proto126["m_strHead"] = "select";
$proto126["m_strFieldList"] = "sum(p.utilizados)";
$proto126["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto126["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto126["m_strOrderBy"] = "";
	
		;
			$proto126["cipherer"] = null;
$proto128=array();
$proto128["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto128["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto128["m_column"]=$obj;
$proto128["m_contained"] = array();
$proto128["m_strCase"] = "= ur.id_distrito";
$proto128["m_havingmode"] = false;
$proto128["m_inBrackets"] = false;
$proto128["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto128);

$proto126["m_where"] = $obj;
$proto130=array();
$proto130["m_sql"] = "";
$proto130["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto130["m_column"]=$obj;
$proto130["m_contained"] = array();
$proto130["m_strCase"] = "";
$proto130["m_havingmode"] = false;
$proto130["m_inBrackets"] = false;
$proto130["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto130);

$proto126["m_having"] = $obj;
$proto126["m_fieldlist"] = array();
						$proto132=array();
			$proto133=array();
$proto133["m_functiontype"] = "SQLF_SUM";
$proto133["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "utilizados",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto133["m_arguments"][]=$obj;
$proto133["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto133);

$proto132["m_sql"] = "sum(p.utilizados)";
$proto132["m_srcTableName"] = "Pres - Por Distrito";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto126["m_fieldlist"][]=$obj;
$proto126["m_fromlist"] = array();
												$proto135=array();
$proto135["m_link"] = "SQLL_MAIN";
			$proto136=array();
$proto136["m_strName"] = "voto_presidente";
$proto136["m_srcTableName"] = "Pres - Por Distrito";
$proto136["m_columns"] = array();
$proto136["m_columns"][] = "elecciones";
$proto136["m_columns"][] = "id_urna";
$proto136["m_columns"][] = "candidato1";
$proto136["m_columns"][] = "candidato2";
$proto136["m_columns"][] = "candidato3";
$proto136["m_columns"][] = "candidato4";
$proto136["m_columns"][] = "candidato5";
$proto136["m_columns"][] = "candidato6";
$proto136["m_columns"][] = "candidato7";
$proto136["m_columns"][] = "candidato8";
$proto136["m_columns"][] = "candidato9";
$proto136["m_columns"][] = "candidato10";
$proto136["m_columns"][] = "candidato11";
$proto136["m_columns"][] = "candidato12";
$proto136["m_columns"][] = "candidato13";
$proto136["m_columns"][] = "candidato14";
$proto136["m_columns"][] = "candidato15";
$proto136["m_columns"][] = "validos";
$proto136["m_columns"][] = "blancos";
$proto136["m_columns"][] = "nulos";
$proto136["m_columns"][] = "utilizados";
$proto136["m_columns"][] = "no_utilizados";
$proto136["m_columns"][] = "total";
$proto136["m_columns"][] = "usuario";
$proto136["m_columns"][] = "fecha";
$proto136["m_columns"][] = "editado_por";
$proto136["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto136);

$proto135["m_table"] = $obj;
$proto135["m_sql"] = "voto_presidente as p";
$proto135["m_alias"] = "p";
$proto135["m_srcTableName"] = "Pres - Por Distrito";
$proto137=array();
$proto137["m_sql"] = "";
$proto137["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto137["m_column"]=$obj;
$proto137["m_contained"] = array();
$proto137["m_strCase"] = "";
$proto137["m_havingmode"] = false;
$proto137["m_inBrackets"] = false;
$proto137["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto137);

$proto135["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto135);

$proto126["m_fromlist"][]=$obj;
												$proto139=array();
$proto139["m_link"] = "SQLL_INNERJOIN";
			$proto140=array();
$proto140["m_strName"] = "urna";
$proto140["m_srcTableName"] = "Pres - Por Distrito";
$proto140["m_columns"] = array();
$proto140["m_columns"][] = "id_distrito";
$proto140["m_columns"][] = "id_sector";
$proto140["m_columns"][] = "id_urna";
$proto140["m_columns"][] = "nombre_centro";
$proto140["m_columns"][] = "ubicación";
$proto140["m_columns"][] = "votantes";
$obj = new SQLTable($proto140);

$proto139["m_table"] = $obj;
$proto139["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto139["m_alias"] = "u";
$proto139["m_srcTableName"] = "Pres - Por Distrito";
$proto141=array();
$proto141["m_sql"] = "p.id_urna = u.id_urna";
$proto141["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto141["m_column"]=$obj;
$proto141["m_contained"] = array();
$proto141["m_strCase"] = "= u.id_urna";
$proto141["m_havingmode"] = false;
$proto141["m_inBrackets"] = false;
$proto141["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto141);

$proto139["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto139);

$proto126["m_fromlist"][]=$obj;
$proto126["m_groupby"] = array();
$proto126["m_orderby"] = array();
$proto126["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto126);

$proto125["m_sql"] = "(select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto125["m_srcTableName"] = "Pres - Por Distrito";
$proto125["m_expr"]=$obj;
$proto125["m_alias"] = "Utilizados";
$obj = new SQLFieldListItem($proto125);

$proto0["m_fieldlist"][]=$obj;
						$proto143=array();
			$proto144=array();
$proto144["m_strHead"] = "select";
$proto144["m_strFieldList"] = "sum(p.no_utilizados)";
$proto144["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto144["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto144["m_strOrderBy"] = "";
	
		;
			$proto144["cipherer"] = null;
$proto146=array();
$proto146["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto146["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto146["m_column"]=$obj;
$proto146["m_contained"] = array();
$proto146["m_strCase"] = "= ur.id_distrito";
$proto146["m_havingmode"] = false;
$proto146["m_inBrackets"] = false;
$proto146["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto146);

$proto144["m_where"] = $obj;
$proto148=array();
$proto148["m_sql"] = "";
$proto148["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto148["m_column"]=$obj;
$proto148["m_contained"] = array();
$proto148["m_strCase"] = "";
$proto148["m_havingmode"] = false;
$proto148["m_inBrackets"] = false;
$proto148["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto148);

$proto144["m_having"] = $obj;
$proto144["m_fieldlist"] = array();
						$proto150=array();
			$proto151=array();
$proto151["m_functiontype"] = "SQLF_SUM";
$proto151["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "no_utilizados",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto151["m_arguments"][]=$obj;
$proto151["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto151);

$proto150["m_sql"] = "sum(p.no_utilizados)";
$proto150["m_srcTableName"] = "Pres - Por Distrito";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto144["m_fieldlist"][]=$obj;
$proto144["m_fromlist"] = array();
												$proto153=array();
$proto153["m_link"] = "SQLL_MAIN";
			$proto154=array();
$proto154["m_strName"] = "voto_presidente";
$proto154["m_srcTableName"] = "Pres - Por Distrito";
$proto154["m_columns"] = array();
$proto154["m_columns"][] = "elecciones";
$proto154["m_columns"][] = "id_urna";
$proto154["m_columns"][] = "candidato1";
$proto154["m_columns"][] = "candidato2";
$proto154["m_columns"][] = "candidato3";
$proto154["m_columns"][] = "candidato4";
$proto154["m_columns"][] = "candidato5";
$proto154["m_columns"][] = "candidato6";
$proto154["m_columns"][] = "candidato7";
$proto154["m_columns"][] = "candidato8";
$proto154["m_columns"][] = "candidato9";
$proto154["m_columns"][] = "candidato10";
$proto154["m_columns"][] = "candidato11";
$proto154["m_columns"][] = "candidato12";
$proto154["m_columns"][] = "candidato13";
$proto154["m_columns"][] = "candidato14";
$proto154["m_columns"][] = "candidato15";
$proto154["m_columns"][] = "validos";
$proto154["m_columns"][] = "blancos";
$proto154["m_columns"][] = "nulos";
$proto154["m_columns"][] = "utilizados";
$proto154["m_columns"][] = "no_utilizados";
$proto154["m_columns"][] = "total";
$proto154["m_columns"][] = "usuario";
$proto154["m_columns"][] = "fecha";
$proto154["m_columns"][] = "editado_por";
$proto154["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto154);

$proto153["m_table"] = $obj;
$proto153["m_sql"] = "voto_presidente as p";
$proto153["m_alias"] = "p";
$proto153["m_srcTableName"] = "Pres - Por Distrito";
$proto155=array();
$proto155["m_sql"] = "";
$proto155["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto155["m_column"]=$obj;
$proto155["m_contained"] = array();
$proto155["m_strCase"] = "";
$proto155["m_havingmode"] = false;
$proto155["m_inBrackets"] = false;
$proto155["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto155);

$proto153["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto153);

$proto144["m_fromlist"][]=$obj;
												$proto157=array();
$proto157["m_link"] = "SQLL_INNERJOIN";
			$proto158=array();
$proto158["m_strName"] = "urna";
$proto158["m_srcTableName"] = "Pres - Por Distrito";
$proto158["m_columns"] = array();
$proto158["m_columns"][] = "id_distrito";
$proto158["m_columns"][] = "id_sector";
$proto158["m_columns"][] = "id_urna";
$proto158["m_columns"][] = "nombre_centro";
$proto158["m_columns"][] = "ubicación";
$proto158["m_columns"][] = "votantes";
$obj = new SQLTable($proto158);

$proto157["m_table"] = $obj;
$proto157["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto157["m_alias"] = "u";
$proto157["m_srcTableName"] = "Pres - Por Distrito";
$proto159=array();
$proto159["m_sql"] = "p.id_urna = u.id_urna";
$proto159["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto159["m_column"]=$obj;
$proto159["m_contained"] = array();
$proto159["m_strCase"] = "= u.id_urna";
$proto159["m_havingmode"] = false;
$proto159["m_inBrackets"] = false;
$proto159["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto159);

$proto157["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto157);

$proto144["m_fromlist"][]=$obj;
$proto144["m_groupby"] = array();
$proto144["m_orderby"] = array();
$proto144["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto144);

$proto143["m_sql"] = "(select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto143["m_srcTableName"] = "Pres - Por Distrito";
$proto143["m_expr"]=$obj;
$proto143["m_alias"] = "No_Utilizados";
$obj = new SQLFieldListItem($proto143);

$proto0["m_fieldlist"][]=$obj;
						$proto161=array();
			$proto162=array();
$proto162["m_strHead"] = "select";
$proto162["m_strFieldList"] = "sum(p.total)";
$proto162["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto162["m_strWhere"] = "u.id_distrito = ur.id_distrito";
$proto162["m_strOrderBy"] = "";
	
		;
			$proto162["cipherer"] = null;
$proto164=array();
$proto164["m_sql"] = "u.id_distrito = ur.id_distrito";
$proto164["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto164["m_column"]=$obj;
$proto164["m_contained"] = array();
$proto164["m_strCase"] = "= ur.id_distrito";
$proto164["m_havingmode"] = false;
$proto164["m_inBrackets"] = false;
$proto164["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto164);

$proto162["m_where"] = $obj;
$proto166=array();
$proto166["m_sql"] = "";
$proto166["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto166["m_column"]=$obj;
$proto166["m_contained"] = array();
$proto166["m_strCase"] = "";
$proto166["m_havingmode"] = false;
$proto166["m_inBrackets"] = false;
$proto166["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto166);

$proto162["m_having"] = $obj;
$proto162["m_fieldlist"] = array();
						$proto168=array();
			$proto169=array();
$proto169["m_functiontype"] = "SQLF_SUM";
$proto169["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto169["m_arguments"][]=$obj;
$proto169["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto169);

$proto168["m_sql"] = "sum(p.total)";
$proto168["m_srcTableName"] = "Pres - Por Distrito";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto162["m_fieldlist"][]=$obj;
$proto162["m_fromlist"] = array();
												$proto171=array();
$proto171["m_link"] = "SQLL_MAIN";
			$proto172=array();
$proto172["m_strName"] = "voto_presidente";
$proto172["m_srcTableName"] = "Pres - Por Distrito";
$proto172["m_columns"] = array();
$proto172["m_columns"][] = "elecciones";
$proto172["m_columns"][] = "id_urna";
$proto172["m_columns"][] = "candidato1";
$proto172["m_columns"][] = "candidato2";
$proto172["m_columns"][] = "candidato3";
$proto172["m_columns"][] = "candidato4";
$proto172["m_columns"][] = "candidato5";
$proto172["m_columns"][] = "candidato6";
$proto172["m_columns"][] = "candidato7";
$proto172["m_columns"][] = "candidato8";
$proto172["m_columns"][] = "candidato9";
$proto172["m_columns"][] = "candidato10";
$proto172["m_columns"][] = "candidato11";
$proto172["m_columns"][] = "candidato12";
$proto172["m_columns"][] = "candidato13";
$proto172["m_columns"][] = "candidato14";
$proto172["m_columns"][] = "candidato15";
$proto172["m_columns"][] = "validos";
$proto172["m_columns"][] = "blancos";
$proto172["m_columns"][] = "nulos";
$proto172["m_columns"][] = "utilizados";
$proto172["m_columns"][] = "no_utilizados";
$proto172["m_columns"][] = "total";
$proto172["m_columns"][] = "usuario";
$proto172["m_columns"][] = "fecha";
$proto172["m_columns"][] = "editado_por";
$proto172["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto172);

$proto171["m_table"] = $obj;
$proto171["m_sql"] = "voto_presidente as p";
$proto171["m_alias"] = "p";
$proto171["m_srcTableName"] = "Pres - Por Distrito";
$proto173=array();
$proto173["m_sql"] = "";
$proto173["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto173["m_column"]=$obj;
$proto173["m_contained"] = array();
$proto173["m_strCase"] = "";
$proto173["m_havingmode"] = false;
$proto173["m_inBrackets"] = false;
$proto173["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto173);

$proto171["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto171);

$proto162["m_fromlist"][]=$obj;
												$proto175=array();
$proto175["m_link"] = "SQLL_INNERJOIN";
			$proto176=array();
$proto176["m_strName"] = "urna";
$proto176["m_srcTableName"] = "Pres - Por Distrito";
$proto176["m_columns"] = array();
$proto176["m_columns"][] = "id_distrito";
$proto176["m_columns"][] = "id_sector";
$proto176["m_columns"][] = "id_urna";
$proto176["m_columns"][] = "nombre_centro";
$proto176["m_columns"][] = "ubicación";
$proto176["m_columns"][] = "votantes";
$obj = new SQLTable($proto176);

$proto175["m_table"] = $obj;
$proto175["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto175["m_alias"] = "u";
$proto175["m_srcTableName"] = "Pres - Por Distrito";
$proto177=array();
$proto177["m_sql"] = "p.id_urna = u.id_urna";
$proto177["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto177["m_column"]=$obj;
$proto177["m_contained"] = array();
$proto177["m_strCase"] = "= u.id_urna";
$proto177["m_havingmode"] = false;
$proto177["m_inBrackets"] = false;
$proto177["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto177);

$proto175["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto175);

$proto162["m_fromlist"][]=$obj;
$proto162["m_groupby"] = array();
$proto162["m_orderby"] = array();
$proto162["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto162);

$proto161["m_sql"] = "(select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_distrito = ur.id_distrito)";
$proto161["m_srcTableName"] = "Pres - Por Distrito";
$proto161["m_expr"]=$obj;
$proto161["m_alias"] = "Total";
$obj = new SQLFieldListItem($proto161);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto179=array();
$proto179["m_link"] = "SQLL_MAIN";
			$proto180=array();
$proto180["m_strName"] = "voto_presidente";
$proto180["m_srcTableName"] = "Pres - Por Distrito";
$proto180["m_columns"] = array();
$proto180["m_columns"][] = "elecciones";
$proto180["m_columns"][] = "id_urna";
$proto180["m_columns"][] = "candidato1";
$proto180["m_columns"][] = "candidato2";
$proto180["m_columns"][] = "candidato3";
$proto180["m_columns"][] = "candidato4";
$proto180["m_columns"][] = "candidato5";
$proto180["m_columns"][] = "candidato6";
$proto180["m_columns"][] = "candidato7";
$proto180["m_columns"][] = "candidato8";
$proto180["m_columns"][] = "candidato9";
$proto180["m_columns"][] = "candidato10";
$proto180["m_columns"][] = "candidato11";
$proto180["m_columns"][] = "candidato12";
$proto180["m_columns"][] = "candidato13";
$proto180["m_columns"][] = "candidato14";
$proto180["m_columns"][] = "candidato15";
$proto180["m_columns"][] = "validos";
$proto180["m_columns"][] = "blancos";
$proto180["m_columns"][] = "nulos";
$proto180["m_columns"][] = "utilizados";
$proto180["m_columns"][] = "no_utilizados";
$proto180["m_columns"][] = "total";
$proto180["m_columns"][] = "usuario";
$proto180["m_columns"][] = "fecha";
$proto180["m_columns"][] = "editado_por";
$proto180["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto180);

$proto179["m_table"] = $obj;
$proto179["m_sql"] = "voto_presidente as vp";
$proto179["m_alias"] = "vp";
$proto179["m_srcTableName"] = "Pres - Por Distrito";
$proto181=array();
$proto181["m_sql"] = "";
$proto181["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto181["m_column"]=$obj;
$proto181["m_contained"] = array();
$proto181["m_strCase"] = "";
$proto181["m_havingmode"] = false;
$proto181["m_inBrackets"] = false;
$proto181["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto181);

$proto179["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto179);

$proto0["m_fromlist"][]=$obj;
												$proto183=array();
$proto183["m_link"] = "SQLL_INNERJOIN";
			$proto184=array();
$proto184["m_strName"] = "urna";
$proto184["m_srcTableName"] = "Pres - Por Distrito";
$proto184["m_columns"] = array();
$proto184["m_columns"][] = "id_distrito";
$proto184["m_columns"][] = "id_sector";
$proto184["m_columns"][] = "id_urna";
$proto184["m_columns"][] = "nombre_centro";
$proto184["m_columns"][] = "ubicación";
$proto184["m_columns"][] = "votantes";
$obj = new SQLTable($proto184);

$proto183["m_table"] = $obj;
$proto183["m_sql"] = "inner join urna as ur on vp.id_urna = ur.id_urna";
$proto183["m_alias"] = "ur";
$proto183["m_srcTableName"] = "Pres - Por Distrito";
$proto185=array();
$proto185["m_sql"] = "vp.id_urna = ur.id_urna";
$proto185["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "vp",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto185["m_column"]=$obj;
$proto185["m_contained"] = array();
$proto185["m_strCase"] = "= ur.id_urna";
$proto185["m_havingmode"] = false;
$proto185["m_inBrackets"] = false;
$proto185["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto185);

$proto183["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto183);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto187=array();
						$obj = new SQLField(array(
	"m_strName" => "id_distrito",
	"m_strTable" => "ur",
	"m_srcTableName" => "Pres - Por Distrito"
));

$proto187["m_column"]=$obj;
$obj = new SQLGroupByItem($proto187);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Pres - Por Distrito";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pres___por_distrito = createSqlQuery_pres___por_distrito();


	
		;

										

$tdatapres___por_distrito[".sqlquery"] = $queryData_pres___por_distrito;



include_once(getabspath("include/pres___por_distrito_events.php"));
$tableEvents["Pres - Por Distrito"] = new eventclass_pres___por_distrito;
$tdatapres___por_distrito[".hasEvents"] = true;

$query = &$queryData_pres___por_distrito;
$table = "Pres - Por Distrito";
// here goes EVENT_INIT_TABLE event


// Place event code here.
// Use "Add Action" button to add code snippets.

$can1_por = DBlookup("select round(((sum(candidato1)/sum(validos))*100),1) from voto_presidente");
$can2_por = DBlookup("select round(((sum(candidato2)/sum(validos))*100),1) from voto_presidente");
$can3_por = DBlookup("select round(((sum(candidato3)/sum(validos))*100),1) from voto_presidente");

$_SESSION["can1"] = $can1_por;
$_SESSION["can2"] = $can2_por;
$_SESSION["can3"] = $can3_por;
;
unset($query);
?>