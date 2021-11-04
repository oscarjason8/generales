<?php
$tdatapres___por_urna = array();
$tdatapres___por_urna[".searchableFields"] = array();
$tdatapres___por_urna[".ShortName"] = "pres___por_urna";
$tdatapres___por_urna[".OwnerID"] = "";
$tdatapres___por_urna[".OriginalTable"] = "voto_presidente";


$tdatapres___por_urna[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatapres___por_urna[".originalPagesByType"] = $tdatapres___por_urna[".pagesByType"];
$tdatapres___por_urna[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatapres___por_urna[".originalPages"] = $tdatapres___por_urna[".pages"];
$tdatapres___por_urna[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatapres___por_urna[".originalDefaultPages"] = $tdatapres___por_urna[".defaultPages"];

//	field labels
$fieldLabelspres___por_urna = array();
$fieldToolTipspres___por_urna = array();
$pageTitlespres___por_urna = array();
$placeHolderspres___por_urna = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspres___por_urna["Spanish"] = array();
	$fieldToolTipspres___por_urna["Spanish"] = array();
	$placeHolderspres___por_urna["Spanish"] = array();
	$pageTitlespres___por_urna["Spanish"] = array();
	$fieldLabelspres___por_urna["Spanish"]["id_urna"] = "Urna";
	$fieldToolTipspres___por_urna["Spanish"]["id_urna"] = "";
	$placeHolderspres___por_urna["Spanish"]["id_urna"] = "";
	$fieldLabelspres___por_urna["Spanish"]["Validos"] = "Votos Validos";
	$fieldToolTipspres___por_urna["Spanish"]["Validos"] = "";
	$placeHolderspres___por_urna["Spanish"]["Validos"] = "";
	$fieldLabelspres___por_urna["Spanish"]["Blancos"] = "Votos En Blanco";
	$fieldToolTipspres___por_urna["Spanish"]["Blancos"] = "";
	$placeHolderspres___por_urna["Spanish"]["Blancos"] = "";
	$fieldLabelspres___por_urna["Spanish"]["Nulos"] = "Votos Nulos";
	$fieldToolTipspres___por_urna["Spanish"]["Nulos"] = "";
	$placeHolderspres___por_urna["Spanish"]["Nulos"] = "";
	$fieldLabelspres___por_urna["Spanish"]["Utilizados"] = "Votos Utilizados";
	$fieldToolTipspres___por_urna["Spanish"]["Utilizados"] = "";
	$placeHolderspres___por_urna["Spanish"]["Utilizados"] = "";
	$fieldLabelspres___por_urna["Spanish"]["No_Utilizados"] = "Votos No Utilizados";
	$fieldToolTipspres___por_urna["Spanish"]["No_Utilizados"] = "";
	$placeHolderspres___por_urna["Spanish"]["No_Utilizados"] = "";
	$fieldLabelspres___por_urna["Spanish"]["Total"] = "Total de Votos";
	$fieldToolTipspres___por_urna["Spanish"]["Total"] = "";
	$placeHolderspres___por_urna["Spanish"]["Total"] = "";
	$fieldLabelspres___por_urna["Spanish"]["id_distrito"] = "Distrito";
	$fieldToolTipspres___por_urna["Spanish"]["id_distrito"] = "";
	$placeHolderspres___por_urna["Spanish"]["id_distrito"] = "";
	$fieldLabelspres___por_urna["Spanish"]["id_sector"] = "Sector";
	$fieldToolTipspres___por_urna["Spanish"]["id_sector"] = "";
	$placeHolderspres___por_urna["Spanish"]["id_sector"] = "";
	$fieldLabelspres___por_urna["Spanish"]["Yani"] = "Yani Rosenthal";
	$fieldToolTipspres___por_urna["Spanish"]["Yani"] = "";
	$placeHolderspres___por_urna["Spanish"]["Yani"] = "";
	$fieldLabelspres___por_urna["Spanish"]["Banegas"] = "Dario Banegas";
	$fieldToolTipspres___por_urna["Spanish"]["Banegas"] = "";
	$placeHolderspres___por_urna["Spanish"]["Banegas"] = "";
	$fieldLabelspres___por_urna["Spanish"]["Luis"] = "Luis Zelaya";
	$fieldToolTipspres___por_urna["Spanish"]["Luis"] = "";
	$placeHolderspres___por_urna["Spanish"]["Luis"] = "";
	$fieldLabelspres___por_urna["Spanish"]["ubicaci_n"] = "Ubicación";
	$fieldToolTipspres___por_urna["Spanish"]["ubicaci_n"] = "";
	$placeHolderspres___por_urna["Spanish"]["ubicaci_n"] = "";
	if (count($fieldToolTipspres___por_urna["Spanish"]))
		$tdatapres___por_urna[".isUseToolTips"] = true;
}


	$tdatapres___por_urna[".NCSearch"] = true;



$tdatapres___por_urna[".shortTableName"] = "pres___por_urna";
$tdatapres___por_urna[".nSecOptions"] = 0;

$tdatapres___por_urna[".mainTableOwnerID"] = "";
$tdatapres___por_urna[".entityType"] = 2;
$tdatapres___por_urna[".connId"] = "internas_new_at_localhost";


$tdatapres___por_urna[".strOriginalTableName"] = "voto_presidente";

	



$tdatapres___por_urna[".showAddInPopup"] = false;

$tdatapres___por_urna[".showEditInPopup"] = false;

$tdatapres___por_urna[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapres___por_urna[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapres___por_urna[".listAjax"] = false;
//	temporary
//$tdatapres___por_urna[".listAjax"] = false;

	$tdatapres___por_urna[".audit"] = false;

	$tdatapres___por_urna[".locking"] = false;


$pages = $tdatapres___por_urna[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapres___por_urna[".edit"] = true;
	$tdatapres___por_urna[".afterEditAction"] = 1;
	$tdatapres___por_urna[".closePopupAfterEdit"] = 1;
	$tdatapres___por_urna[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapres___por_urna[".add"] = true;
$tdatapres___por_urna[".afterAddAction"] = 1;
$tdatapres___por_urna[".closePopupAfterAdd"] = 1;
$tdatapres___por_urna[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapres___por_urna[".list"] = true;
}



$tdatapres___por_urna[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapres___por_urna[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapres___por_urna[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapres___por_urna[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapres___por_urna[".printFriendly"] = true;
}



$tdatapres___por_urna[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapres___por_urna[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapres___por_urna[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapres___por_urna[".isUseAjaxSuggest"] = true;






$tdatapres___por_urna[".ajaxCodeSnippetAdded"] = false;

$tdatapres___por_urna[".buttonsAdded"] = false;

$tdatapres___por_urna[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapres___por_urna[".isUseTimeForSearch"] = false;


$tdatapres___por_urna[".badgeColor"] = "DC143C";


$tdatapres___por_urna[".allSearchFields"] = array();
$tdatapres___por_urna[".filterFields"] = array();
$tdatapres___por_urna[".requiredSearchFields"] = array();

$tdatapres___por_urna[".googleLikeFields"] = array();
$tdatapres___por_urna[".googleLikeFields"][] = "id_distrito";
$tdatapres___por_urna[".googleLikeFields"][] = "id_sector";
$tdatapres___por_urna[".googleLikeFields"][] = "id_urna";
$tdatapres___por_urna[".googleLikeFields"][] = "ubicación";
$tdatapres___por_urna[".googleLikeFields"][] = "Yani";
$tdatapres___por_urna[".googleLikeFields"][] = "Banegas";
$tdatapres___por_urna[".googleLikeFields"][] = "Luis";
$tdatapres___por_urna[".googleLikeFields"][] = "Validos";
$tdatapres___por_urna[".googleLikeFields"][] = "Blancos";
$tdatapres___por_urna[".googleLikeFields"][] = "Nulos";
$tdatapres___por_urna[".googleLikeFields"][] = "Utilizados";
$tdatapres___por_urna[".googleLikeFields"][] = "No_Utilizados";
$tdatapres___por_urna[".googleLikeFields"][] = "Total";



$tdatapres___por_urna[".tableType"] = "report";

$tdatapres___por_urna[".printerPageOrientation"] = 0;
$tdatapres___por_urna[".nPrinterPageScale"] = 100;

$tdatapres___por_urna[".nPrinterSplitRecords"] = 30;

$tdatapres___por_urna[".geocodingEnabled"] = false;

//report settings
$tdatapres___por_urna[".printReportLayout"] = 6;

$tdatapres___por_urna[".reportPrintPartitionType"] = 1;
$tdatapres___por_urna[".reportPrintGroupsPerPage"] = 30;
$tdatapres___por_urna[".lowGroup"] = 0;



$tdatapres___por_urna[".pageSize"] = 20;


$tdatapres___por_urna[".isExistTotalFields"] = true;



$tdatapres___por_urna[".reportGlobalSummary"] = true;

$tdatapres___por_urna[".repShowDet"] = true;

$tdatapres___por_urna[".reportLayout"] = 6;

//end of report settings










$tstrOrderBy = "order by ur.id_sector";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapres___por_urna[".strOrderBy"] = $tstrOrderBy;

$tdatapres___por_urna[".orderindexes"] = array();
	$tdatapres___por_urna[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "ur.id_sector");



$tdatapres___por_urna[".sqlHead"] = "select ur.id_distrito, ur.id_sector, ur.id_urna, ur.ubicación,  (select concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Yani,  (select concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Banegas,  (select concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Luis,  (select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Validos,  (select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Blancos,  (select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Nulos,  (select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Utilizados,  (select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as No_Utilizados,  (select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Total";
$tdatapres___por_urna[".sqlFrom"] = "from voto_presidente as vp  inner join urna as ur on vp.id_urna = ur.id_urna";
$tdatapres___por_urna[".sqlWhereExpr"] = "";
$tdatapres___por_urna[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapres___por_urna[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapres___por_urna[".arrGroupsPerPage"] = $arrGPP;

$tdatapres___por_urna[".highlightSearchResults"] = true;

$tableKeyspres___por_urna = array();
$tableKeyspres___por_urna[] = "id_urna";
$tdatapres___por_urna[".Keys"] = $tableKeyspres___por_urna;


$tdatapres___por_urna[".hideMobileList"] = array();




//	id_distrito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_distrito";
	$fdata["GoodName"] = "id_distrito";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Urna","id_distrito");
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

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_sector";

	
	
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


	$tdatapres___por_urna["id_distrito"] = $fdata;
		$tdatapres___por_urna[".searchableFields"][] = "id_distrito";
//	id_sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_sector";
	$fdata["GoodName"] = "id_sector";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Urna","id_sector");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "id_sector";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ur.id_sector";

	
	
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
	$edata["LookupTable"] = "sectores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_sector";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre_sector";

	

	
	$edata["LookupOrderBy"] = "id_sector";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_distrito", "lookup" => "id_distrito" );

	
	

	
	
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


	$tdatapres___por_urna["id_sector"] = $fdata;
		$tdatapres___por_urna[".searchableFields"][] = "id_sector";
//	id_urna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_urna";
	$fdata["GoodName"] = "id_urna";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Urna","id_urna");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "id_urna";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ur.id_urna";

	
	
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
	$edata["LookupTable"] = "urna";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id_urna";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(id_urna,\" -  \",nombre_centro)";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "id_urna";

	
	
	
	

	
	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Urna %value% ya esta ingresada", "messageType" => "Text");

	
	//	End validation

	
	
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatapres___por_urna["id_urna"] = $fdata;
		$tdatapres___por_urna[".searchableFields"][] = "id_urna";
//	ubicación
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ubicación";
	$fdata["GoodName"] = "ubicaci_n";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Urna","ubicaci_n");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			

		$fdata["strField"] = "ubicación";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ur.ubicación";

	
	
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


	$tdatapres___por_urna["ubicación"] = $fdata;
		$tdatapres___por_urna[".searchableFields"][] = "ubicación";
//	Yani
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Yani";
	$fdata["GoodName"] = "Yani";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Urna","Yani");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "Yani";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
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


	$tdatapres___por_urna["Yani"] = $fdata;
		$tdatapres___por_urna[".searchableFields"][] = "Yani";
//	Banegas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Banegas";
	$fdata["GoodName"] = "Banegas";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Urna","Banegas");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "Banegas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
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


	$tdatapres___por_urna["Banegas"] = $fdata;
		$tdatapres___por_urna[".searchableFields"][] = "Banegas";
//	Luis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Luis";
	$fdata["GoodName"] = "Luis";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Urna","Luis");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "Luis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
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


	$tdatapres___por_urna["Luis"] = $fdata;
		$tdatapres___por_urna[".searchableFields"][] = "Luis";
//	Validos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Validos";
	$fdata["GoodName"] = "Validos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Urna","Validos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "validos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
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


	$tdatapres___por_urna["Validos"] = $fdata;
		$tdatapres___por_urna[".searchableFields"][] = "Validos";
//	Blancos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Blancos";
	$fdata["GoodName"] = "Blancos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Urna","Blancos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "blancos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
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


	$tdatapres___por_urna["Blancos"] = $fdata;
		$tdatapres___por_urna[".searchableFields"][] = "Blancos";
//	Nulos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Nulos";
	$fdata["GoodName"] = "Nulos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Urna","Nulos");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "nulos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
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


	$tdatapres___por_urna["Nulos"] = $fdata;
		$tdatapres___por_urna[".searchableFields"][] = "Nulos";
//	Utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Utilizados";
	$fdata["GoodName"] = "Utilizados";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Urna","Utilizados");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "utilizados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
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


	$tdatapres___por_urna["Utilizados"] = $fdata;
		$tdatapres___por_urna[".searchableFields"][] = "Utilizados";
//	No_Utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "No_Utilizados";
	$fdata["GoodName"] = "No_Utilizados";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Urna","No_Utilizados");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "no_utilizados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
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


	$tdatapres___por_urna["No_Utilizados"] = $fdata;
		$tdatapres___por_urna[".searchableFields"][] = "No_Utilizados";
//	Total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Total";
	$fdata["GoodName"] = "Total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Pres___Por_Urna","Total");
	$fdata["FieldType"] = 14;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			

		$fdata["strField"] = "total";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";

	
	
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


	$tdatapres___por_urna["Total"] = $fdata;
		$tdatapres___por_urna[".searchableFields"][] = "Total";


$tables_data["Pres - Por Urna"]=&$tdatapres___por_urna;
$field_labels["Pres___Por_Urna"] = &$fieldLabelspres___por_urna;
$fieldToolTips["Pres___Por_Urna"] = &$fieldToolTipspres___por_urna;
$placeHolders["Pres___Por_Urna"] = &$placeHolderspres___por_urna;
$page_titles["Pres___Por_Urna"] = &$pageTitlespres___por_urna;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Pres - Por Urna"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Pres - Por Urna"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pres___por_urna()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "ur.id_distrito, ur.id_sector, ur.id_urna, ur.ubicación,  (select concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Yani,  (select concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Banegas,  (select concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Luis,  (select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Validos,  (select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Blancos,  (select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Nulos,  (select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Utilizados,  (select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as No_Utilizados,  (select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna) as Total";
$proto0["m_strFrom"] = "from voto_presidente as vp  inner join urna as ur on vp.id_urna = ur.id_urna";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by ur.id_sector";
	
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
	"m_srcTableName" => "Pres - Por Urna"
));

$proto6["m_sql"] = "ur.id_distrito";
$proto6["m_srcTableName"] = "Pres - Por Urna";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "ur",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto8["m_sql"] = "ur.id_sector";
$proto8["m_srcTableName"] = "Pres - Por Urna";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "ur",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto10["m_sql"] = "ur.id_urna";
$proto10["m_srcTableName"] = "Pres - Por Urna";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ubicación",
	"m_strTable" => "ur",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto12["m_sql"] = "ur.ubicación";
$proto12["m_srcTableName"] = "Pres - Por Urna";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_strHead"] = "select";
$proto15["m_strFieldList"] = "concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")";
$proto15["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto15["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto15["m_strOrderBy"] = "";
	
		;
			$proto15["cipherer"] = null;
$proto17=array();
$proto17["m_sql"] = "u.id_urna = ur.id_urna";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "= ur.id_urna";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_where"] = $obj;
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto15["m_having"] = $obj;
$proto15["m_fieldlist"] = array();
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_CUSTOM";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato1)"
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" votos (\""
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato1)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1)"
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")";
$proto21["m_srcTableName"] = "Pres - Por Urna";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto15["m_fieldlist"][]=$obj;
$proto15["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "voto_presidente";
$proto28["m_srcTableName"] = "Pres - Por Urna";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "elecciones";
$proto28["m_columns"][] = "id_urna";
$proto28["m_columns"][] = "candidato1";
$proto28["m_columns"][] = "candidato2";
$proto28["m_columns"][] = "candidato3";
$proto28["m_columns"][] = "candidato4";
$proto28["m_columns"][] = "candidato5";
$proto28["m_columns"][] = "candidato6";
$proto28["m_columns"][] = "candidato7";
$proto28["m_columns"][] = "candidato8";
$proto28["m_columns"][] = "candidato9";
$proto28["m_columns"][] = "candidato10";
$proto28["m_columns"][] = "candidato11";
$proto28["m_columns"][] = "candidato12";
$proto28["m_columns"][] = "candidato13";
$proto28["m_columns"][] = "candidato14";
$proto28["m_columns"][] = "candidato15";
$proto28["m_columns"][] = "validos";
$proto28["m_columns"][] = "blancos";
$proto28["m_columns"][] = "nulos";
$proto28["m_columns"][] = "utilizados";
$proto28["m_columns"][] = "no_utilizados";
$proto28["m_columns"][] = "total";
$proto28["m_columns"][] = "usuario";
$proto28["m_columns"][] = "fecha";
$proto28["m_columns"][] = "editado_por";
$proto28["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "voto_presidente as p";
$proto27["m_alias"] = "p";
$proto27["m_srcTableName"] = "Pres - Por Urna";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto15["m_fromlist"][]=$obj;
												$proto31=array();
$proto31["m_link"] = "SQLL_INNERJOIN";
			$proto32=array();
$proto32["m_strName"] = "urna";
$proto32["m_srcTableName"] = "Pres - Por Urna";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "id_distrito";
$proto32["m_columns"][] = "id_sector";
$proto32["m_columns"][] = "id_urna";
$proto32["m_columns"][] = "nombre_centro";
$proto32["m_columns"][] = "ubicación";
$proto32["m_columns"][] = "votantes";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto31["m_alias"] = "u";
$proto31["m_srcTableName"] = "Pres - Por Urna";
$proto33=array();
$proto33["m_sql"] = "p.id_urna = u.id_urna";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= u.id_urna";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto15["m_fromlist"][]=$obj;
$proto15["m_groupby"] = array();
$proto15["m_orderby"] = array();
$proto15["m_srcTableName"]="Pres - Por Urna";		
$obj = new SQLQuery($proto15);

$proto14["m_sql"] = "(select concat(sum(p.candidato1), \" votos (\", ROUND((((sum(p.candidato1)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto14["m_srcTableName"] = "Pres - Por Urna";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Yani";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$proto36=array();
$proto36["m_strHead"] = "select";
$proto36["m_strFieldList"] = "concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")";
$proto36["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto36["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto36["m_strOrderBy"] = "";
	
		;
			$proto36["cipherer"] = null;
$proto38=array();
$proto38["m_sql"] = "u.id_urna = ur.id_urna";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= ur.id_urna";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_where"] = $obj;
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto36["m_having"] = $obj;
$proto36["m_fieldlist"] = array();
						$proto42=array();
			$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato2)"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" votos (\""
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1)"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto43);

$proto42["m_sql"] = "concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")";
$proto42["m_srcTableName"] = "Pres - Por Urna";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto36["m_fieldlist"][]=$obj;
$proto36["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "voto_presidente";
$proto49["m_srcTableName"] = "Pres - Por Urna";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "elecciones";
$proto49["m_columns"][] = "id_urna";
$proto49["m_columns"][] = "candidato1";
$proto49["m_columns"][] = "candidato2";
$proto49["m_columns"][] = "candidato3";
$proto49["m_columns"][] = "candidato4";
$proto49["m_columns"][] = "candidato5";
$proto49["m_columns"][] = "candidato6";
$proto49["m_columns"][] = "candidato7";
$proto49["m_columns"][] = "candidato8";
$proto49["m_columns"][] = "candidato9";
$proto49["m_columns"][] = "candidato10";
$proto49["m_columns"][] = "candidato11";
$proto49["m_columns"][] = "candidato12";
$proto49["m_columns"][] = "candidato13";
$proto49["m_columns"][] = "candidato14";
$proto49["m_columns"][] = "candidato15";
$proto49["m_columns"][] = "validos";
$proto49["m_columns"][] = "blancos";
$proto49["m_columns"][] = "nulos";
$proto49["m_columns"][] = "utilizados";
$proto49["m_columns"][] = "no_utilizados";
$proto49["m_columns"][] = "total";
$proto49["m_columns"][] = "usuario";
$proto49["m_columns"][] = "fecha";
$proto49["m_columns"][] = "editado_por";
$proto49["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "voto_presidente as p";
$proto48["m_alias"] = "p";
$proto48["m_srcTableName"] = "Pres - Por Urna";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto36["m_fromlist"][]=$obj;
												$proto52=array();
$proto52["m_link"] = "SQLL_INNERJOIN";
			$proto53=array();
$proto53["m_strName"] = "urna";
$proto53["m_srcTableName"] = "Pres - Por Urna";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "id_distrito";
$proto53["m_columns"][] = "id_sector";
$proto53["m_columns"][] = "id_urna";
$proto53["m_columns"][] = "nombre_centro";
$proto53["m_columns"][] = "ubicación";
$proto53["m_columns"][] = "votantes";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto52["m_alias"] = "u";
$proto52["m_srcTableName"] = "Pres - Por Urna";
$proto54=array();
$proto54["m_sql"] = "p.id_urna = u.id_urna";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "= u.id_urna";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto36["m_fromlist"][]=$obj;
$proto36["m_groupby"] = array();
$proto36["m_orderby"] = array();
$proto36["m_srcTableName"]="Pres - Por Urna";		
$obj = new SQLQuery($proto36);

$proto35["m_sql"] = "(select concat(sum(p.candidato2), \" votos (\", ROUND((((sum(p.candidato2)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto35["m_srcTableName"] = "Pres - Por Urna";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "Banegas";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$proto57=array();
$proto57["m_strHead"] = "select";
$proto57["m_strFieldList"] = "concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")";
$proto57["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto57["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto57["m_strOrderBy"] = "";
	
		;
			$proto57["cipherer"] = null;
$proto59=array();
$proto59["m_sql"] = "u.id_urna = ur.id_urna";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "= ur.id_urna";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = false;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

$proto57["m_where"] = $obj;
$proto61=array();
$proto61["m_sql"] = "";
$proto61["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto61["m_column"]=$obj;
$proto61["m_contained"] = array();
$proto61["m_strCase"] = "";
$proto61["m_havingmode"] = false;
$proto61["m_inBrackets"] = false;
$proto61["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto61);

$proto57["m_having"] = $obj;
$proto57["m_fieldlist"] = array();
						$proto63=array();
			$proto64=array();
$proto64["m_functiontype"] = "SQLF_CUSTOM";
$proto64["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sum(p.candidato3)"
));

$proto64["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" votos (\""
));

$proto64["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1)"
));

$proto64["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%)\""
));

$proto64["m_arguments"][]=$obj;
$proto64["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto64);

$proto63["m_sql"] = "concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")";
$proto63["m_srcTableName"] = "Pres - Por Urna";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto57["m_fieldlist"][]=$obj;
$proto57["m_fromlist"] = array();
												$proto69=array();
$proto69["m_link"] = "SQLL_MAIN";
			$proto70=array();
$proto70["m_strName"] = "voto_presidente";
$proto70["m_srcTableName"] = "Pres - Por Urna";
$proto70["m_columns"] = array();
$proto70["m_columns"][] = "elecciones";
$proto70["m_columns"][] = "id_urna";
$proto70["m_columns"][] = "candidato1";
$proto70["m_columns"][] = "candidato2";
$proto70["m_columns"][] = "candidato3";
$proto70["m_columns"][] = "candidato4";
$proto70["m_columns"][] = "candidato5";
$proto70["m_columns"][] = "candidato6";
$proto70["m_columns"][] = "candidato7";
$proto70["m_columns"][] = "candidato8";
$proto70["m_columns"][] = "candidato9";
$proto70["m_columns"][] = "candidato10";
$proto70["m_columns"][] = "candidato11";
$proto70["m_columns"][] = "candidato12";
$proto70["m_columns"][] = "candidato13";
$proto70["m_columns"][] = "candidato14";
$proto70["m_columns"][] = "candidato15";
$proto70["m_columns"][] = "validos";
$proto70["m_columns"][] = "blancos";
$proto70["m_columns"][] = "nulos";
$proto70["m_columns"][] = "utilizados";
$proto70["m_columns"][] = "no_utilizados";
$proto70["m_columns"][] = "total";
$proto70["m_columns"][] = "usuario";
$proto70["m_columns"][] = "fecha";
$proto70["m_columns"][] = "editado_por";
$proto70["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto70);

$proto69["m_table"] = $obj;
$proto69["m_sql"] = "voto_presidente as p";
$proto69["m_alias"] = "p";
$proto69["m_srcTableName"] = "Pres - Por Urna";
$proto71=array();
$proto71["m_sql"] = "";
$proto71["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto71["m_column"]=$obj;
$proto71["m_contained"] = array();
$proto71["m_strCase"] = "";
$proto71["m_havingmode"] = false;
$proto71["m_inBrackets"] = false;
$proto71["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto71);

$proto69["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto69);

$proto57["m_fromlist"][]=$obj;
												$proto73=array();
$proto73["m_link"] = "SQLL_INNERJOIN";
			$proto74=array();
$proto74["m_strName"] = "urna";
$proto74["m_srcTableName"] = "Pres - Por Urna";
$proto74["m_columns"] = array();
$proto74["m_columns"][] = "id_distrito";
$proto74["m_columns"][] = "id_sector";
$proto74["m_columns"][] = "id_urna";
$proto74["m_columns"][] = "nombre_centro";
$proto74["m_columns"][] = "ubicación";
$proto74["m_columns"][] = "votantes";
$obj = new SQLTable($proto74);

$proto73["m_table"] = $obj;
$proto73["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto73["m_alias"] = "u";
$proto73["m_srcTableName"] = "Pres - Por Urna";
$proto75=array();
$proto75["m_sql"] = "p.id_urna = u.id_urna";
$proto75["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto75["m_column"]=$obj;
$proto75["m_contained"] = array();
$proto75["m_strCase"] = "= u.id_urna";
$proto75["m_havingmode"] = false;
$proto75["m_inBrackets"] = false;
$proto75["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto75);

$proto73["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto73);

$proto57["m_fromlist"][]=$obj;
$proto57["m_groupby"] = array();
$proto57["m_orderby"] = array();
$proto57["m_srcTableName"]="Pres - Por Urna";		
$obj = new SQLQuery($proto57);

$proto56["m_sql"] = "(select concat(sum(p.candidato3), \" votos (\", ROUND((((sum(p.candidato3)/((sum(p.candidato1)) + (sum(p.candidato2)) + (sum(p.candidato3)))))*100),1), \"%)\")    from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto56["m_srcTableName"] = "Pres - Por Urna";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "Luis";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$proto78=array();
$proto78["m_strHead"] = "select";
$proto78["m_strFieldList"] = "sum(p.validos)";
$proto78["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto78["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto78["m_strOrderBy"] = "";
	
		;
			$proto78["cipherer"] = null;
$proto80=array();
$proto80["m_sql"] = "u.id_urna = ur.id_urna";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "= ur.id_urna";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_where"] = $obj;
$proto82=array();
$proto82["m_sql"] = "";
$proto82["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto82["m_column"]=$obj;
$proto82["m_contained"] = array();
$proto82["m_strCase"] = "";
$proto82["m_havingmode"] = false;
$proto82["m_inBrackets"] = false;
$proto82["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto82);

$proto78["m_having"] = $obj;
$proto78["m_fieldlist"] = array();
						$proto84=array();
			$proto85=array();
$proto85["m_functiontype"] = "SQLF_SUM";
$proto85["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "validos",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto85["m_arguments"][]=$obj;
$proto85["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto85);

$proto84["m_sql"] = "sum(p.validos)";
$proto84["m_srcTableName"] = "Pres - Por Urna";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto78["m_fieldlist"][]=$obj;
$proto78["m_fromlist"] = array();
												$proto87=array();
$proto87["m_link"] = "SQLL_MAIN";
			$proto88=array();
$proto88["m_strName"] = "voto_presidente";
$proto88["m_srcTableName"] = "Pres - Por Urna";
$proto88["m_columns"] = array();
$proto88["m_columns"][] = "elecciones";
$proto88["m_columns"][] = "id_urna";
$proto88["m_columns"][] = "candidato1";
$proto88["m_columns"][] = "candidato2";
$proto88["m_columns"][] = "candidato3";
$proto88["m_columns"][] = "candidato4";
$proto88["m_columns"][] = "candidato5";
$proto88["m_columns"][] = "candidato6";
$proto88["m_columns"][] = "candidato7";
$proto88["m_columns"][] = "candidato8";
$proto88["m_columns"][] = "candidato9";
$proto88["m_columns"][] = "candidato10";
$proto88["m_columns"][] = "candidato11";
$proto88["m_columns"][] = "candidato12";
$proto88["m_columns"][] = "candidato13";
$proto88["m_columns"][] = "candidato14";
$proto88["m_columns"][] = "candidato15";
$proto88["m_columns"][] = "validos";
$proto88["m_columns"][] = "blancos";
$proto88["m_columns"][] = "nulos";
$proto88["m_columns"][] = "utilizados";
$proto88["m_columns"][] = "no_utilizados";
$proto88["m_columns"][] = "total";
$proto88["m_columns"][] = "usuario";
$proto88["m_columns"][] = "fecha";
$proto88["m_columns"][] = "editado_por";
$proto88["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto88);

$proto87["m_table"] = $obj;
$proto87["m_sql"] = "voto_presidente as p";
$proto87["m_alias"] = "p";
$proto87["m_srcTableName"] = "Pres - Por Urna";
$proto89=array();
$proto89["m_sql"] = "";
$proto89["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto89["m_column"]=$obj;
$proto89["m_contained"] = array();
$proto89["m_strCase"] = "";
$proto89["m_havingmode"] = false;
$proto89["m_inBrackets"] = false;
$proto89["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto89);

$proto87["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto87);

$proto78["m_fromlist"][]=$obj;
												$proto91=array();
$proto91["m_link"] = "SQLL_INNERJOIN";
			$proto92=array();
$proto92["m_strName"] = "urna";
$proto92["m_srcTableName"] = "Pres - Por Urna";
$proto92["m_columns"] = array();
$proto92["m_columns"][] = "id_distrito";
$proto92["m_columns"][] = "id_sector";
$proto92["m_columns"][] = "id_urna";
$proto92["m_columns"][] = "nombre_centro";
$proto92["m_columns"][] = "ubicación";
$proto92["m_columns"][] = "votantes";
$obj = new SQLTable($proto92);

$proto91["m_table"] = $obj;
$proto91["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto91["m_alias"] = "u";
$proto91["m_srcTableName"] = "Pres - Por Urna";
$proto93=array();
$proto93["m_sql"] = "p.id_urna = u.id_urna";
$proto93["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto93["m_column"]=$obj;
$proto93["m_contained"] = array();
$proto93["m_strCase"] = "= u.id_urna";
$proto93["m_havingmode"] = false;
$proto93["m_inBrackets"] = false;
$proto93["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto93);

$proto91["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto91);

$proto78["m_fromlist"][]=$obj;
$proto78["m_groupby"] = array();
$proto78["m_orderby"] = array();
$proto78["m_srcTableName"]="Pres - Por Urna";		
$obj = new SQLQuery($proto78);

$proto77["m_sql"] = "(select sum(p.validos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto77["m_srcTableName"] = "Pres - Por Urna";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "Validos";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$proto96=array();
$proto96["m_strHead"] = "select";
$proto96["m_strFieldList"] = "sum(p.blancos)";
$proto96["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto96["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto96["m_strOrderBy"] = "";
	
		;
			$proto96["cipherer"] = null;
$proto98=array();
$proto98["m_sql"] = "u.id_urna = ur.id_urna";
$proto98["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto98["m_column"]=$obj;
$proto98["m_contained"] = array();
$proto98["m_strCase"] = "= ur.id_urna";
$proto98["m_havingmode"] = false;
$proto98["m_inBrackets"] = false;
$proto98["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto98);

$proto96["m_where"] = $obj;
$proto100=array();
$proto100["m_sql"] = "";
$proto100["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto100["m_column"]=$obj;
$proto100["m_contained"] = array();
$proto100["m_strCase"] = "";
$proto100["m_havingmode"] = false;
$proto100["m_inBrackets"] = false;
$proto100["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto100);

$proto96["m_having"] = $obj;
$proto96["m_fieldlist"] = array();
						$proto102=array();
			$proto103=array();
$proto103["m_functiontype"] = "SQLF_SUM";
$proto103["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "blancos",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto103["m_arguments"][]=$obj;
$proto103["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto103);

$proto102["m_sql"] = "sum(p.blancos)";
$proto102["m_srcTableName"] = "Pres - Por Urna";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto96["m_fieldlist"][]=$obj;
$proto96["m_fromlist"] = array();
												$proto105=array();
$proto105["m_link"] = "SQLL_MAIN";
			$proto106=array();
$proto106["m_strName"] = "voto_presidente";
$proto106["m_srcTableName"] = "Pres - Por Urna";
$proto106["m_columns"] = array();
$proto106["m_columns"][] = "elecciones";
$proto106["m_columns"][] = "id_urna";
$proto106["m_columns"][] = "candidato1";
$proto106["m_columns"][] = "candidato2";
$proto106["m_columns"][] = "candidato3";
$proto106["m_columns"][] = "candidato4";
$proto106["m_columns"][] = "candidato5";
$proto106["m_columns"][] = "candidato6";
$proto106["m_columns"][] = "candidato7";
$proto106["m_columns"][] = "candidato8";
$proto106["m_columns"][] = "candidato9";
$proto106["m_columns"][] = "candidato10";
$proto106["m_columns"][] = "candidato11";
$proto106["m_columns"][] = "candidato12";
$proto106["m_columns"][] = "candidato13";
$proto106["m_columns"][] = "candidato14";
$proto106["m_columns"][] = "candidato15";
$proto106["m_columns"][] = "validos";
$proto106["m_columns"][] = "blancos";
$proto106["m_columns"][] = "nulos";
$proto106["m_columns"][] = "utilizados";
$proto106["m_columns"][] = "no_utilizados";
$proto106["m_columns"][] = "total";
$proto106["m_columns"][] = "usuario";
$proto106["m_columns"][] = "fecha";
$proto106["m_columns"][] = "editado_por";
$proto106["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto106);

$proto105["m_table"] = $obj;
$proto105["m_sql"] = "voto_presidente as p";
$proto105["m_alias"] = "p";
$proto105["m_srcTableName"] = "Pres - Por Urna";
$proto107=array();
$proto107["m_sql"] = "";
$proto107["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto107["m_column"]=$obj;
$proto107["m_contained"] = array();
$proto107["m_strCase"] = "";
$proto107["m_havingmode"] = false;
$proto107["m_inBrackets"] = false;
$proto107["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto107);

$proto105["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto105);

$proto96["m_fromlist"][]=$obj;
												$proto109=array();
$proto109["m_link"] = "SQLL_INNERJOIN";
			$proto110=array();
$proto110["m_strName"] = "urna";
$proto110["m_srcTableName"] = "Pres - Por Urna";
$proto110["m_columns"] = array();
$proto110["m_columns"][] = "id_distrito";
$proto110["m_columns"][] = "id_sector";
$proto110["m_columns"][] = "id_urna";
$proto110["m_columns"][] = "nombre_centro";
$proto110["m_columns"][] = "ubicación";
$proto110["m_columns"][] = "votantes";
$obj = new SQLTable($proto110);

$proto109["m_table"] = $obj;
$proto109["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto109["m_alias"] = "u";
$proto109["m_srcTableName"] = "Pres - Por Urna";
$proto111=array();
$proto111["m_sql"] = "p.id_urna = u.id_urna";
$proto111["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto111["m_column"]=$obj;
$proto111["m_contained"] = array();
$proto111["m_strCase"] = "= u.id_urna";
$proto111["m_havingmode"] = false;
$proto111["m_inBrackets"] = false;
$proto111["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto111);

$proto109["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto109);

$proto96["m_fromlist"][]=$obj;
$proto96["m_groupby"] = array();
$proto96["m_orderby"] = array();
$proto96["m_srcTableName"]="Pres - Por Urna";		
$obj = new SQLQuery($proto96);

$proto95["m_sql"] = "(select sum(p.blancos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto95["m_srcTableName"] = "Pres - Por Urna";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "Blancos";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto113=array();
			$proto114=array();
$proto114["m_strHead"] = "select";
$proto114["m_strFieldList"] = "sum(p.nulos)";
$proto114["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto114["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto114["m_strOrderBy"] = "";
	
		;
			$proto114["cipherer"] = null;
$proto116=array();
$proto116["m_sql"] = "u.id_urna = ur.id_urna";
$proto116["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto116["m_column"]=$obj;
$proto116["m_contained"] = array();
$proto116["m_strCase"] = "= ur.id_urna";
$proto116["m_havingmode"] = false;
$proto116["m_inBrackets"] = false;
$proto116["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto116);

$proto114["m_where"] = $obj;
$proto118=array();
$proto118["m_sql"] = "";
$proto118["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto118["m_column"]=$obj;
$proto118["m_contained"] = array();
$proto118["m_strCase"] = "";
$proto118["m_havingmode"] = false;
$proto118["m_inBrackets"] = false;
$proto118["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto118);

$proto114["m_having"] = $obj;
$proto114["m_fieldlist"] = array();
						$proto120=array();
			$proto121=array();
$proto121["m_functiontype"] = "SQLF_SUM";
$proto121["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "nulos",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto121["m_arguments"][]=$obj;
$proto121["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto121);

$proto120["m_sql"] = "sum(p.nulos)";
$proto120["m_srcTableName"] = "Pres - Por Urna";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto114["m_fieldlist"][]=$obj;
$proto114["m_fromlist"] = array();
												$proto123=array();
$proto123["m_link"] = "SQLL_MAIN";
			$proto124=array();
$proto124["m_strName"] = "voto_presidente";
$proto124["m_srcTableName"] = "Pres - Por Urna";
$proto124["m_columns"] = array();
$proto124["m_columns"][] = "elecciones";
$proto124["m_columns"][] = "id_urna";
$proto124["m_columns"][] = "candidato1";
$proto124["m_columns"][] = "candidato2";
$proto124["m_columns"][] = "candidato3";
$proto124["m_columns"][] = "candidato4";
$proto124["m_columns"][] = "candidato5";
$proto124["m_columns"][] = "candidato6";
$proto124["m_columns"][] = "candidato7";
$proto124["m_columns"][] = "candidato8";
$proto124["m_columns"][] = "candidato9";
$proto124["m_columns"][] = "candidato10";
$proto124["m_columns"][] = "candidato11";
$proto124["m_columns"][] = "candidato12";
$proto124["m_columns"][] = "candidato13";
$proto124["m_columns"][] = "candidato14";
$proto124["m_columns"][] = "candidato15";
$proto124["m_columns"][] = "validos";
$proto124["m_columns"][] = "blancos";
$proto124["m_columns"][] = "nulos";
$proto124["m_columns"][] = "utilizados";
$proto124["m_columns"][] = "no_utilizados";
$proto124["m_columns"][] = "total";
$proto124["m_columns"][] = "usuario";
$proto124["m_columns"][] = "fecha";
$proto124["m_columns"][] = "editado_por";
$proto124["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto124);

$proto123["m_table"] = $obj;
$proto123["m_sql"] = "voto_presidente as p";
$proto123["m_alias"] = "p";
$proto123["m_srcTableName"] = "Pres - Por Urna";
$proto125=array();
$proto125["m_sql"] = "";
$proto125["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto125["m_column"]=$obj;
$proto125["m_contained"] = array();
$proto125["m_strCase"] = "";
$proto125["m_havingmode"] = false;
$proto125["m_inBrackets"] = false;
$proto125["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto125);

$proto123["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto123);

$proto114["m_fromlist"][]=$obj;
												$proto127=array();
$proto127["m_link"] = "SQLL_INNERJOIN";
			$proto128=array();
$proto128["m_strName"] = "urna";
$proto128["m_srcTableName"] = "Pres - Por Urna";
$proto128["m_columns"] = array();
$proto128["m_columns"][] = "id_distrito";
$proto128["m_columns"][] = "id_sector";
$proto128["m_columns"][] = "id_urna";
$proto128["m_columns"][] = "nombre_centro";
$proto128["m_columns"][] = "ubicación";
$proto128["m_columns"][] = "votantes";
$obj = new SQLTable($proto128);

$proto127["m_table"] = $obj;
$proto127["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto127["m_alias"] = "u";
$proto127["m_srcTableName"] = "Pres - Por Urna";
$proto129=array();
$proto129["m_sql"] = "p.id_urna = u.id_urna";
$proto129["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto129["m_column"]=$obj;
$proto129["m_contained"] = array();
$proto129["m_strCase"] = "= u.id_urna";
$proto129["m_havingmode"] = false;
$proto129["m_inBrackets"] = false;
$proto129["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto129);

$proto127["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto127);

$proto114["m_fromlist"][]=$obj;
$proto114["m_groupby"] = array();
$proto114["m_orderby"] = array();
$proto114["m_srcTableName"]="Pres - Por Urna";		
$obj = new SQLQuery($proto114);

$proto113["m_sql"] = "(select sum(p.nulos) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto113["m_srcTableName"] = "Pres - Por Urna";
$proto113["m_expr"]=$obj;
$proto113["m_alias"] = "Nulos";
$obj = new SQLFieldListItem($proto113);

$proto0["m_fieldlist"][]=$obj;
						$proto131=array();
			$proto132=array();
$proto132["m_strHead"] = "select";
$proto132["m_strFieldList"] = "sum(p.utilizados)";
$proto132["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto132["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto132["m_strOrderBy"] = "";
	
		;
			$proto132["cipherer"] = null;
$proto134=array();
$proto134["m_sql"] = "u.id_urna = ur.id_urna";
$proto134["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto134["m_column"]=$obj;
$proto134["m_contained"] = array();
$proto134["m_strCase"] = "= ur.id_urna";
$proto134["m_havingmode"] = false;
$proto134["m_inBrackets"] = false;
$proto134["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto134);

$proto132["m_where"] = $obj;
$proto136=array();
$proto136["m_sql"] = "";
$proto136["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto136["m_column"]=$obj;
$proto136["m_contained"] = array();
$proto136["m_strCase"] = "";
$proto136["m_havingmode"] = false;
$proto136["m_inBrackets"] = false;
$proto136["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto136);

$proto132["m_having"] = $obj;
$proto132["m_fieldlist"] = array();
						$proto138=array();
			$proto139=array();
$proto139["m_functiontype"] = "SQLF_SUM";
$proto139["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "utilizados",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto139["m_arguments"][]=$obj;
$proto139["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto139);

$proto138["m_sql"] = "sum(p.utilizados)";
$proto138["m_srcTableName"] = "Pres - Por Urna";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto132["m_fieldlist"][]=$obj;
$proto132["m_fromlist"] = array();
												$proto141=array();
$proto141["m_link"] = "SQLL_MAIN";
			$proto142=array();
$proto142["m_strName"] = "voto_presidente";
$proto142["m_srcTableName"] = "Pres - Por Urna";
$proto142["m_columns"] = array();
$proto142["m_columns"][] = "elecciones";
$proto142["m_columns"][] = "id_urna";
$proto142["m_columns"][] = "candidato1";
$proto142["m_columns"][] = "candidato2";
$proto142["m_columns"][] = "candidato3";
$proto142["m_columns"][] = "candidato4";
$proto142["m_columns"][] = "candidato5";
$proto142["m_columns"][] = "candidato6";
$proto142["m_columns"][] = "candidato7";
$proto142["m_columns"][] = "candidato8";
$proto142["m_columns"][] = "candidato9";
$proto142["m_columns"][] = "candidato10";
$proto142["m_columns"][] = "candidato11";
$proto142["m_columns"][] = "candidato12";
$proto142["m_columns"][] = "candidato13";
$proto142["m_columns"][] = "candidato14";
$proto142["m_columns"][] = "candidato15";
$proto142["m_columns"][] = "validos";
$proto142["m_columns"][] = "blancos";
$proto142["m_columns"][] = "nulos";
$proto142["m_columns"][] = "utilizados";
$proto142["m_columns"][] = "no_utilizados";
$proto142["m_columns"][] = "total";
$proto142["m_columns"][] = "usuario";
$proto142["m_columns"][] = "fecha";
$proto142["m_columns"][] = "editado_por";
$proto142["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto142);

$proto141["m_table"] = $obj;
$proto141["m_sql"] = "voto_presidente as p";
$proto141["m_alias"] = "p";
$proto141["m_srcTableName"] = "Pres - Por Urna";
$proto143=array();
$proto143["m_sql"] = "";
$proto143["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto143["m_column"]=$obj;
$proto143["m_contained"] = array();
$proto143["m_strCase"] = "";
$proto143["m_havingmode"] = false;
$proto143["m_inBrackets"] = false;
$proto143["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto143);

$proto141["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto141);

$proto132["m_fromlist"][]=$obj;
												$proto145=array();
$proto145["m_link"] = "SQLL_INNERJOIN";
			$proto146=array();
$proto146["m_strName"] = "urna";
$proto146["m_srcTableName"] = "Pres - Por Urna";
$proto146["m_columns"] = array();
$proto146["m_columns"][] = "id_distrito";
$proto146["m_columns"][] = "id_sector";
$proto146["m_columns"][] = "id_urna";
$proto146["m_columns"][] = "nombre_centro";
$proto146["m_columns"][] = "ubicación";
$proto146["m_columns"][] = "votantes";
$obj = new SQLTable($proto146);

$proto145["m_table"] = $obj;
$proto145["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto145["m_alias"] = "u";
$proto145["m_srcTableName"] = "Pres - Por Urna";
$proto147=array();
$proto147["m_sql"] = "p.id_urna = u.id_urna";
$proto147["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto147["m_column"]=$obj;
$proto147["m_contained"] = array();
$proto147["m_strCase"] = "= u.id_urna";
$proto147["m_havingmode"] = false;
$proto147["m_inBrackets"] = false;
$proto147["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto147);

$proto145["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto145);

$proto132["m_fromlist"][]=$obj;
$proto132["m_groupby"] = array();
$proto132["m_orderby"] = array();
$proto132["m_srcTableName"]="Pres - Por Urna";		
$obj = new SQLQuery($proto132);

$proto131["m_sql"] = "(select sum(p.utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto131["m_srcTableName"] = "Pres - Por Urna";
$proto131["m_expr"]=$obj;
$proto131["m_alias"] = "Utilizados";
$obj = new SQLFieldListItem($proto131);

$proto0["m_fieldlist"][]=$obj;
						$proto149=array();
			$proto150=array();
$proto150["m_strHead"] = "select";
$proto150["m_strFieldList"] = "sum(p.no_utilizados)";
$proto150["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto150["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto150["m_strOrderBy"] = "";
	
		;
			$proto150["cipherer"] = null;
$proto152=array();
$proto152["m_sql"] = "u.id_urna = ur.id_urna";
$proto152["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto152["m_column"]=$obj;
$proto152["m_contained"] = array();
$proto152["m_strCase"] = "= ur.id_urna";
$proto152["m_havingmode"] = false;
$proto152["m_inBrackets"] = false;
$proto152["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto152);

$proto150["m_where"] = $obj;
$proto154=array();
$proto154["m_sql"] = "";
$proto154["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto154["m_column"]=$obj;
$proto154["m_contained"] = array();
$proto154["m_strCase"] = "";
$proto154["m_havingmode"] = false;
$proto154["m_inBrackets"] = false;
$proto154["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto154);

$proto150["m_having"] = $obj;
$proto150["m_fieldlist"] = array();
						$proto156=array();
			$proto157=array();
$proto157["m_functiontype"] = "SQLF_SUM";
$proto157["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "no_utilizados",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto157["m_arguments"][]=$obj;
$proto157["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto157);

$proto156["m_sql"] = "sum(p.no_utilizados)";
$proto156["m_srcTableName"] = "Pres - Por Urna";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto150["m_fieldlist"][]=$obj;
$proto150["m_fromlist"] = array();
												$proto159=array();
$proto159["m_link"] = "SQLL_MAIN";
			$proto160=array();
$proto160["m_strName"] = "voto_presidente";
$proto160["m_srcTableName"] = "Pres - Por Urna";
$proto160["m_columns"] = array();
$proto160["m_columns"][] = "elecciones";
$proto160["m_columns"][] = "id_urna";
$proto160["m_columns"][] = "candidato1";
$proto160["m_columns"][] = "candidato2";
$proto160["m_columns"][] = "candidato3";
$proto160["m_columns"][] = "candidato4";
$proto160["m_columns"][] = "candidato5";
$proto160["m_columns"][] = "candidato6";
$proto160["m_columns"][] = "candidato7";
$proto160["m_columns"][] = "candidato8";
$proto160["m_columns"][] = "candidato9";
$proto160["m_columns"][] = "candidato10";
$proto160["m_columns"][] = "candidato11";
$proto160["m_columns"][] = "candidato12";
$proto160["m_columns"][] = "candidato13";
$proto160["m_columns"][] = "candidato14";
$proto160["m_columns"][] = "candidato15";
$proto160["m_columns"][] = "validos";
$proto160["m_columns"][] = "blancos";
$proto160["m_columns"][] = "nulos";
$proto160["m_columns"][] = "utilizados";
$proto160["m_columns"][] = "no_utilizados";
$proto160["m_columns"][] = "total";
$proto160["m_columns"][] = "usuario";
$proto160["m_columns"][] = "fecha";
$proto160["m_columns"][] = "editado_por";
$proto160["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto160);

$proto159["m_table"] = $obj;
$proto159["m_sql"] = "voto_presidente as p";
$proto159["m_alias"] = "p";
$proto159["m_srcTableName"] = "Pres - Por Urna";
$proto161=array();
$proto161["m_sql"] = "";
$proto161["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto161["m_column"]=$obj;
$proto161["m_contained"] = array();
$proto161["m_strCase"] = "";
$proto161["m_havingmode"] = false;
$proto161["m_inBrackets"] = false;
$proto161["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto161);

$proto159["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto159);

$proto150["m_fromlist"][]=$obj;
												$proto163=array();
$proto163["m_link"] = "SQLL_INNERJOIN";
			$proto164=array();
$proto164["m_strName"] = "urna";
$proto164["m_srcTableName"] = "Pres - Por Urna";
$proto164["m_columns"] = array();
$proto164["m_columns"][] = "id_distrito";
$proto164["m_columns"][] = "id_sector";
$proto164["m_columns"][] = "id_urna";
$proto164["m_columns"][] = "nombre_centro";
$proto164["m_columns"][] = "ubicación";
$proto164["m_columns"][] = "votantes";
$obj = new SQLTable($proto164);

$proto163["m_table"] = $obj;
$proto163["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto163["m_alias"] = "u";
$proto163["m_srcTableName"] = "Pres - Por Urna";
$proto165=array();
$proto165["m_sql"] = "p.id_urna = u.id_urna";
$proto165["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto165["m_column"]=$obj;
$proto165["m_contained"] = array();
$proto165["m_strCase"] = "= u.id_urna";
$proto165["m_havingmode"] = false;
$proto165["m_inBrackets"] = false;
$proto165["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto165);

$proto163["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto163);

$proto150["m_fromlist"][]=$obj;
$proto150["m_groupby"] = array();
$proto150["m_orderby"] = array();
$proto150["m_srcTableName"]="Pres - Por Urna";		
$obj = new SQLQuery($proto150);

$proto149["m_sql"] = "(select sum(p.no_utilizados) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto149["m_srcTableName"] = "Pres - Por Urna";
$proto149["m_expr"]=$obj;
$proto149["m_alias"] = "No_Utilizados";
$obj = new SQLFieldListItem($proto149);

$proto0["m_fieldlist"][]=$obj;
						$proto167=array();
			$proto168=array();
$proto168["m_strHead"] = "select";
$proto168["m_strFieldList"] = "sum(p.total)";
$proto168["m_strFrom"] = "from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna";
$proto168["m_strWhere"] = "u.id_urna = ur.id_urna";
$proto168["m_strOrderBy"] = "";
	
		;
			$proto168["cipherer"] = null;
$proto170=array();
$proto170["m_sql"] = "u.id_urna = ur.id_urna";
$proto170["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "u",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto170["m_column"]=$obj;
$proto170["m_contained"] = array();
$proto170["m_strCase"] = "= ur.id_urna";
$proto170["m_havingmode"] = false;
$proto170["m_inBrackets"] = false;
$proto170["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto170);

$proto168["m_where"] = $obj;
$proto172=array();
$proto172["m_sql"] = "";
$proto172["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto172["m_column"]=$obj;
$proto172["m_contained"] = array();
$proto172["m_strCase"] = "";
$proto172["m_havingmode"] = false;
$proto172["m_inBrackets"] = false;
$proto172["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto172);

$proto168["m_having"] = $obj;
$proto168["m_fieldlist"] = array();
						$proto174=array();
			$proto175=array();
$proto175["m_functiontype"] = "SQLF_SUM";
$proto175["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto175["m_arguments"][]=$obj;
$proto175["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto175);

$proto174["m_sql"] = "sum(p.total)";
$proto174["m_srcTableName"] = "Pres - Por Urna";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto168["m_fieldlist"][]=$obj;
$proto168["m_fromlist"] = array();
												$proto177=array();
$proto177["m_link"] = "SQLL_MAIN";
			$proto178=array();
$proto178["m_strName"] = "voto_presidente";
$proto178["m_srcTableName"] = "Pres - Por Urna";
$proto178["m_columns"] = array();
$proto178["m_columns"][] = "elecciones";
$proto178["m_columns"][] = "id_urna";
$proto178["m_columns"][] = "candidato1";
$proto178["m_columns"][] = "candidato2";
$proto178["m_columns"][] = "candidato3";
$proto178["m_columns"][] = "candidato4";
$proto178["m_columns"][] = "candidato5";
$proto178["m_columns"][] = "candidato6";
$proto178["m_columns"][] = "candidato7";
$proto178["m_columns"][] = "candidato8";
$proto178["m_columns"][] = "candidato9";
$proto178["m_columns"][] = "candidato10";
$proto178["m_columns"][] = "candidato11";
$proto178["m_columns"][] = "candidato12";
$proto178["m_columns"][] = "candidato13";
$proto178["m_columns"][] = "candidato14";
$proto178["m_columns"][] = "candidato15";
$proto178["m_columns"][] = "validos";
$proto178["m_columns"][] = "blancos";
$proto178["m_columns"][] = "nulos";
$proto178["m_columns"][] = "utilizados";
$proto178["m_columns"][] = "no_utilizados";
$proto178["m_columns"][] = "total";
$proto178["m_columns"][] = "usuario";
$proto178["m_columns"][] = "fecha";
$proto178["m_columns"][] = "editado_por";
$proto178["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto178);

$proto177["m_table"] = $obj;
$proto177["m_sql"] = "voto_presidente as p";
$proto177["m_alias"] = "p";
$proto177["m_srcTableName"] = "Pres - Por Urna";
$proto179=array();
$proto179["m_sql"] = "";
$proto179["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto179["m_column"]=$obj;
$proto179["m_contained"] = array();
$proto179["m_strCase"] = "";
$proto179["m_havingmode"] = false;
$proto179["m_inBrackets"] = false;
$proto179["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto179);

$proto177["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto177);

$proto168["m_fromlist"][]=$obj;
												$proto181=array();
$proto181["m_link"] = "SQLL_INNERJOIN";
			$proto182=array();
$proto182["m_strName"] = "urna";
$proto182["m_srcTableName"] = "Pres - Por Urna";
$proto182["m_columns"] = array();
$proto182["m_columns"][] = "id_distrito";
$proto182["m_columns"][] = "id_sector";
$proto182["m_columns"][] = "id_urna";
$proto182["m_columns"][] = "nombre_centro";
$proto182["m_columns"][] = "ubicación";
$proto182["m_columns"][] = "votantes";
$obj = new SQLTable($proto182);

$proto181["m_table"] = $obj;
$proto181["m_sql"] = "inner join urna as u on p.id_urna = u.id_urna";
$proto181["m_alias"] = "u";
$proto181["m_srcTableName"] = "Pres - Por Urna";
$proto183=array();
$proto183["m_sql"] = "p.id_urna = u.id_urna";
$proto183["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "p",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto183["m_column"]=$obj;
$proto183["m_contained"] = array();
$proto183["m_strCase"] = "= u.id_urna";
$proto183["m_havingmode"] = false;
$proto183["m_inBrackets"] = false;
$proto183["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto183);

$proto181["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto181);

$proto168["m_fromlist"][]=$obj;
$proto168["m_groupby"] = array();
$proto168["m_orderby"] = array();
$proto168["m_srcTableName"]="Pres - Por Urna";		
$obj = new SQLQuery($proto168);

$proto167["m_sql"] = "(select sum(p.total) from voto_presidente as p  inner join urna as u on p.id_urna = u.id_urna where u.id_urna = ur.id_urna)";
$proto167["m_srcTableName"] = "Pres - Por Urna";
$proto167["m_expr"]=$obj;
$proto167["m_alias"] = "Total";
$obj = new SQLFieldListItem($proto167);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto185=array();
$proto185["m_link"] = "SQLL_MAIN";
			$proto186=array();
$proto186["m_strName"] = "voto_presidente";
$proto186["m_srcTableName"] = "Pres - Por Urna";
$proto186["m_columns"] = array();
$proto186["m_columns"][] = "elecciones";
$proto186["m_columns"][] = "id_urna";
$proto186["m_columns"][] = "candidato1";
$proto186["m_columns"][] = "candidato2";
$proto186["m_columns"][] = "candidato3";
$proto186["m_columns"][] = "candidato4";
$proto186["m_columns"][] = "candidato5";
$proto186["m_columns"][] = "candidato6";
$proto186["m_columns"][] = "candidato7";
$proto186["m_columns"][] = "candidato8";
$proto186["m_columns"][] = "candidato9";
$proto186["m_columns"][] = "candidato10";
$proto186["m_columns"][] = "candidato11";
$proto186["m_columns"][] = "candidato12";
$proto186["m_columns"][] = "candidato13";
$proto186["m_columns"][] = "candidato14";
$proto186["m_columns"][] = "candidato15";
$proto186["m_columns"][] = "validos";
$proto186["m_columns"][] = "blancos";
$proto186["m_columns"][] = "nulos";
$proto186["m_columns"][] = "utilizados";
$proto186["m_columns"][] = "no_utilizados";
$proto186["m_columns"][] = "total";
$proto186["m_columns"][] = "usuario";
$proto186["m_columns"][] = "fecha";
$proto186["m_columns"][] = "editado_por";
$proto186["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto186);

$proto185["m_table"] = $obj;
$proto185["m_sql"] = "voto_presidente as vp";
$proto185["m_alias"] = "vp";
$proto185["m_srcTableName"] = "Pres - Por Urna";
$proto187=array();
$proto187["m_sql"] = "";
$proto187["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto187["m_column"]=$obj;
$proto187["m_contained"] = array();
$proto187["m_strCase"] = "";
$proto187["m_havingmode"] = false;
$proto187["m_inBrackets"] = false;
$proto187["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto187);

$proto185["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto185);

$proto0["m_fromlist"][]=$obj;
												$proto189=array();
$proto189["m_link"] = "SQLL_INNERJOIN";
			$proto190=array();
$proto190["m_strName"] = "urna";
$proto190["m_srcTableName"] = "Pres - Por Urna";
$proto190["m_columns"] = array();
$proto190["m_columns"][] = "id_distrito";
$proto190["m_columns"][] = "id_sector";
$proto190["m_columns"][] = "id_urna";
$proto190["m_columns"][] = "nombre_centro";
$proto190["m_columns"][] = "ubicación";
$proto190["m_columns"][] = "votantes";
$obj = new SQLTable($proto190);

$proto189["m_table"] = $obj;
$proto189["m_sql"] = "inner join urna as ur on vp.id_urna = ur.id_urna";
$proto189["m_alias"] = "ur";
$proto189["m_srcTableName"] = "Pres - Por Urna";
$proto191=array();
$proto191["m_sql"] = "vp.id_urna = ur.id_urna";
$proto191["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "vp",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto191["m_column"]=$obj;
$proto191["m_contained"] = array();
$proto191["m_strCase"] = "= ur.id_urna";
$proto191["m_havingmode"] = false;
$proto191["m_inBrackets"] = false;
$proto191["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto191);

$proto189["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto189);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto193=array();
						$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "ur",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto193["m_column"]=$obj;
$obj = new SQLGroupByItem($proto193);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto195=array();
						$obj = new SQLField(array(
	"m_strName" => "id_sector",
	"m_strTable" => "ur",
	"m_srcTableName" => "Pres - Por Urna"
));

$proto195["m_column"]=$obj;
$proto195["m_bAsc"] = 1;
$proto195["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto195);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Pres - Por Urna";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pres___por_urna = createSqlQuery_pres___por_urna();


	
		;

													

$tdatapres___por_urna[".sqlquery"] = $queryData_pres___por_urna;



include_once(getabspath("include/pres___por_urna_events.php"));
$tableEvents["Pres - Por Urna"] = new eventclass_pres___por_urna;
$tdatapres___por_urna[".hasEvents"] = true;

$query = &$queryData_pres___por_urna;
$table = "Pres - Por Urna";
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