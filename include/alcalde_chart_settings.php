<?php
$tdataalcalde_chart = array();
$tdataalcalde_chart[".searchableFields"] = array();
$tdataalcalde_chart[".ShortName"] = "alcalde_chart";
$tdataalcalde_chart[".OwnerID"] = "";
$tdataalcalde_chart[".OriginalTable"] = "voto_alcalde";


$tdataalcalde_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataalcalde_chart[".originalPagesByType"] = $tdataalcalde_chart[".pagesByType"];
$tdataalcalde_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataalcalde_chart[".originalPages"] = $tdataalcalde_chart[".pages"];
$tdataalcalde_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataalcalde_chart[".originalDefaultPages"] = $tdataalcalde_chart[".defaultPages"];

//	field labels
$fieldLabelsalcalde_chart = array();
$fieldToolTipsalcalde_chart = array();
$pageTitlesalcalde_chart = array();
$placeHoldersalcalde_chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalcalde_chart["Spanish"] = array();
	$fieldToolTipsalcalde_chart["Spanish"] = array();
	$placeHoldersalcalde_chart["Spanish"] = array();
	$pageTitlesalcalde_chart["Spanish"] = array();
	$fieldLabelsalcalde_chart["Spanish"]["id_urna"] = "Urna";
	$fieldToolTipsalcalde_chart["Spanish"]["id_urna"] = "";
	$placeHoldersalcalde_chart["Spanish"]["id_urna"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["candidato1"] = "Wilson Cerrato";
	$fieldToolTipsalcalde_chart["Spanish"]["candidato1"] = "";
	$placeHoldersalcalde_chart["Spanish"]["candidato1"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["candidato2"] = "FAPER";
	$fieldToolTipsalcalde_chart["Spanish"]["candidato2"] = "";
	$placeHoldersalcalde_chart["Spanish"]["candidato2"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["candidato3"] = "Nueva Ruta";
	$fieldToolTipsalcalde_chart["Spanish"]["candidato3"] = "";
	$placeHoldersalcalde_chart["Spanish"]["candidato3"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["validos"] = "Votos Validos";
	$fieldToolTipsalcalde_chart["Spanish"]["validos"] = "";
	$placeHoldersalcalde_chart["Spanish"]["validos"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["blancos"] = "Votos En Blanco";
	$fieldToolTipsalcalde_chart["Spanish"]["blancos"] = "";
	$placeHoldersalcalde_chart["Spanish"]["blancos"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["nulos"] = "Votos Nulos";
	$fieldToolTipsalcalde_chart["Spanish"]["nulos"] = "";
	$placeHoldersalcalde_chart["Spanish"]["nulos"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["utilizados"] = "Votos Utilizados";
	$fieldToolTipsalcalde_chart["Spanish"]["utilizados"] = "";
	$placeHoldersalcalde_chart["Spanish"]["utilizados"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["no_utilizados"] = "Votos No Utilizados";
	$fieldToolTipsalcalde_chart["Spanish"]["no_utilizados"] = "";
	$placeHoldersalcalde_chart["Spanish"]["no_utilizados"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["total"] = "Total de Votos";
	$fieldToolTipsalcalde_chart["Spanish"]["total"] = "";
	$placeHoldersalcalde_chart["Spanish"]["total"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["usuario"] = "Ingresado Por";
	$fieldToolTipsalcalde_chart["Spanish"]["usuario"] = "";
	$placeHoldersalcalde_chart["Spanish"]["usuario"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["fecha"] = "Fecha de Ingreso";
	$fieldToolTipsalcalde_chart["Spanish"]["fecha"] = "";
	$placeHoldersalcalde_chart["Spanish"]["fecha"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["candidato4"] = "Ronald Rivera";
	$fieldToolTipsalcalde_chart["Spanish"]["candidato4"] = "";
	$placeHoldersalcalde_chart["Spanish"]["candidato4"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["candidato5"] = "Wendy Revelo";
	$fieldToolTipsalcalde_chart["Spanish"]["candidato5"] = "";
	$placeHoldersalcalde_chart["Spanish"]["candidato5"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["candidato6"] = "Boris de Romano";
	$fieldToolTipsalcalde_chart["Spanish"]["candidato6"] = "";
	$placeHoldersalcalde_chart["Spanish"]["candidato6"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["candidato7"] = "Julio Henderson";
	$fieldToolTipsalcalde_chart["Spanish"]["candidato7"] = "";
	$placeHoldersalcalde_chart["Spanish"]["candidato7"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["candidato8"] = "Anibal Nuñez";
	$fieldToolTipsalcalde_chart["Spanish"]["candidato8"] = "";
	$placeHoldersalcalde_chart["Spanish"]["candidato8"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["candidato9"] = "Ingris Martinez";
	$fieldToolTipsalcalde_chart["Spanish"]["candidato9"] = "";
	$placeHoldersalcalde_chart["Spanish"]["candidato9"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["candidato10"] = "Maria Luisa Martell";
	$fieldToolTipsalcalde_chart["Spanish"]["candidato10"] = "";
	$placeHoldersalcalde_chart["Spanish"]["candidato10"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["candidato11"] = "Elmer Guerrero";
	$fieldToolTipsalcalde_chart["Spanish"]["candidato11"] = "";
	$placeHoldersalcalde_chart["Spanish"]["candidato11"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["candidato12"] = "Tatina Perez";
	$fieldToolTipsalcalde_chart["Spanish"]["candidato12"] = "";
	$placeHoldersalcalde_chart["Spanish"]["candidato12"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["editado_por"] = "Editado Por";
	$fieldToolTipsalcalde_chart["Spanish"]["editado_por"] = "";
	$placeHoldersalcalde_chart["Spanish"]["editado_por"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["fecha_edicion"] = "Fecha de Edición";
	$fieldToolTipsalcalde_chart["Spanish"]["fecha_edicion"] = "";
	$placeHoldersalcalde_chart["Spanish"]["fecha_edicion"] = "";
	$fieldLabelsalcalde_chart["Spanish"]["elecciones"] = "Elecciones";
	$fieldToolTipsalcalde_chart["Spanish"]["elecciones"] = "";
	$placeHoldersalcalde_chart["Spanish"]["elecciones"] = "";
	if (count($fieldToolTipsalcalde_chart["Spanish"]))
		$tdataalcalde_chart[".isUseToolTips"] = true;
}


	$tdataalcalde_chart[".NCSearch"] = true;

	$tdataalcalde_chart[".ChartRefreshTime"] = 60;


$tdataalcalde_chart[".shortTableName"] = "alcalde_chart";
$tdataalcalde_chart[".nSecOptions"] = 0;

$tdataalcalde_chart[".mainTableOwnerID"] = "";
$tdataalcalde_chart[".entityType"] = 3;
$tdataalcalde_chart[".connId"] = "internas_new_at_localhost";


$tdataalcalde_chart[".strOriginalTableName"] = "voto_alcalde";

	



$tdataalcalde_chart[".showAddInPopup"] = false;

$tdataalcalde_chart[".showEditInPopup"] = false;

$tdataalcalde_chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataalcalde_chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataalcalde_chart[".listAjax"] = false;
//	temporary
//$tdataalcalde_chart[".listAjax"] = false;

	$tdataalcalde_chart[".audit"] = false;

	$tdataalcalde_chart[".locking"] = false;


$pages = $tdataalcalde_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalcalde_chart[".edit"] = true;
	$tdataalcalde_chart[".afterEditAction"] = 1;
	$tdataalcalde_chart[".closePopupAfterEdit"] = 1;
	$tdataalcalde_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalcalde_chart[".add"] = true;
$tdataalcalde_chart[".afterAddAction"] = 1;
$tdataalcalde_chart[".closePopupAfterAdd"] = 1;
$tdataalcalde_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataalcalde_chart[".list"] = true;
}



$tdataalcalde_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalcalde_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalcalde_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalcalde_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalcalde_chart[".printFriendly"] = true;
}



$tdataalcalde_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalcalde_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalcalde_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalcalde_chart[".isUseAjaxSuggest"] = true;






$tdataalcalde_chart[".ajaxCodeSnippetAdded"] = false;

$tdataalcalde_chart[".buttonsAdded"] = false;

$tdataalcalde_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalcalde_chart[".isUseTimeForSearch"] = false;


$tdataalcalde_chart[".badgeColor"] = "EDCA00";


$tdataalcalde_chart[".allSearchFields"] = array();
$tdataalcalde_chart[".filterFields"] = array();
$tdataalcalde_chart[".requiredSearchFields"] = array();

$tdataalcalde_chart[".googleLikeFields"] = array();
$tdataalcalde_chart[".googleLikeFields"][] = "elecciones";
$tdataalcalde_chart[".googleLikeFields"][] = "id_urna";
$tdataalcalde_chart[".googleLikeFields"][] = "candidato10";
$tdataalcalde_chart[".googleLikeFields"][] = "candidato11";
$tdataalcalde_chart[".googleLikeFields"][] = "candidato5";
$tdataalcalde_chart[".googleLikeFields"][] = "candidato1";
$tdataalcalde_chart[".googleLikeFields"][] = "candidato2";
$tdataalcalde_chart[".googleLikeFields"][] = "candidato3";
$tdataalcalde_chart[".googleLikeFields"][] = "candidato4";
$tdataalcalde_chart[".googleLikeFields"][] = "candidato6";
$tdataalcalde_chart[".googleLikeFields"][] = "candidato7";
$tdataalcalde_chart[".googleLikeFields"][] = "candidato8";
$tdataalcalde_chart[".googleLikeFields"][] = "candidato9";
$tdataalcalde_chart[".googleLikeFields"][] = "candidato12";
$tdataalcalde_chart[".googleLikeFields"][] = "validos";
$tdataalcalde_chart[".googleLikeFields"][] = "blancos";
$tdataalcalde_chart[".googleLikeFields"][] = "nulos";
$tdataalcalde_chart[".googleLikeFields"][] = "utilizados";
$tdataalcalde_chart[".googleLikeFields"][] = "no_utilizados";
$tdataalcalde_chart[".googleLikeFields"][] = "total";
$tdataalcalde_chart[".googleLikeFields"][] = "usuario";
$tdataalcalde_chart[".googleLikeFields"][] = "fecha";
$tdataalcalde_chart[".googleLikeFields"][] = "editado_por";
$tdataalcalde_chart[".googleLikeFields"][] = "fecha_edicion";



$tdataalcalde_chart[".tableType"] = "chart";

$tdataalcalde_chart[".printerPageOrientation"] = 0;
$tdataalcalde_chart[".nPrinterPageScale"] = 100;

$tdataalcalde_chart[".nPrinterSplitRecords"] = 40;

$tdataalcalde_chart[".geocodingEnabled"] = false;



// chart settings
$tdataalcalde_chart[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataalcalde_chart[".strOrderBy"] = $tstrOrderBy;

$tdataalcalde_chart[".orderindexes"] = array();


$tdataalcalde_chart[".sqlHead"] = "SELECT elecciones,  	id_urna,  	candidato10,  	candidato11,  	candidato5,  	candidato1,  	candidato2,  	candidato3,  	candidato4,  	candidato6,  	candidato7,  	candidato8,  	candidato9,  	candidato12,  	validos,  	blancos,  	nulos,  	utilizados,  	no_utilizados,  	total,  	usuario,  	fecha,  	editado_por,  	fecha_edicion";
$tdataalcalde_chart[".sqlFrom"] = "FROM voto_alcalde";
$tdataalcalde_chart[".sqlWhereExpr"] = "";
$tdataalcalde_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalcalde_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalcalde_chart[".arrGroupsPerPage"] = $arrGPP;

$tdataalcalde_chart[".highlightSearchResults"] = true;

$tableKeysalcalde_chart = array();
$tdataalcalde_chart[".Keys"] = $tableKeysalcalde_chart;


$tdataalcalde_chart[".hideMobileList"] = array();




//	elecciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "elecciones";
	$fdata["GoodName"] = "elecciones";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","elecciones");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "elecciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "elecciones";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["elecciones"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "elecciones";
//	id_urna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_urna";
	$fdata["GoodName"] = "id_urna";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","id_urna");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_urna";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_urna";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_urna";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(id_urna,\" -  \",nombre_centro)";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "id_urna";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_sector", "lookup" => "id_sector" );

	
	

	
	
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


	$tdataalcalde_chart["id_urna"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "id_urna";
//	candidato10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "candidato10";
	$fdata["GoodName"] = "candidato10";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","candidato10");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "candidato10";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "candidato10";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["candidato10"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "candidato10";
//	candidato11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "candidato11";
	$fdata["GoodName"] = "candidato11";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","candidato11");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "candidato11";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "candidato11";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["candidato11"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "candidato11";
//	candidato5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "candidato5";
	$fdata["GoodName"] = "candidato5";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","candidato5");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "candidato5";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "candidato5";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["candidato5"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "candidato5";
//	candidato1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "candidato1";
	$fdata["GoodName"] = "candidato1";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","candidato1");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "candidato1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "candidato1";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["candidato1"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "candidato1";
//	candidato2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "candidato2";
	$fdata["GoodName"] = "candidato2";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","candidato2");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "candidato2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "candidato2";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["candidato2"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "candidato2";
//	candidato3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "candidato3";
	$fdata["GoodName"] = "candidato3";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","candidato3");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "candidato3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "candidato3";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["candidato3"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "candidato3";
//	candidato4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "candidato4";
	$fdata["GoodName"] = "candidato4";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","candidato4");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "candidato4";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "candidato4";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["candidato4"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "candidato4";
//	candidato6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "candidato6";
	$fdata["GoodName"] = "candidato6";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","candidato6");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "candidato6";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "candidato6";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["candidato6"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "candidato6";
//	candidato7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "candidato7";
	$fdata["GoodName"] = "candidato7";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","candidato7");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "candidato7";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "candidato7";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["candidato7"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "candidato7";
//	candidato8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "candidato8";
	$fdata["GoodName"] = "candidato8";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","candidato8");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "candidato8";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "candidato8";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["candidato8"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "candidato8";
//	candidato9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "candidato9";
	$fdata["GoodName"] = "candidato9";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","candidato9");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "candidato9";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "candidato9";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["candidato9"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "candidato9";
//	candidato12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "candidato12";
	$fdata["GoodName"] = "candidato12";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","candidato12");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "candidato12";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "candidato12";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["candidato12"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "candidato12";
//	validos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "validos";
	$fdata["GoodName"] = "validos";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","validos");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "validos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "validos";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["validos"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "validos";
//	blancos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "blancos";
	$fdata["GoodName"] = "blancos";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","blancos");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "blancos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "blancos";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["blancos"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "blancos";
//	nulos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "nulos";
	$fdata["GoodName"] = "nulos";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","nulos");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "nulos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nulos";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["nulos"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "nulos";
//	utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "utilizados";
	$fdata["GoodName"] = "utilizados";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","utilizados");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "utilizados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "utilizados";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["utilizados"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "utilizados";
//	no_utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "no_utilizados";
	$fdata["GoodName"] = "no_utilizados";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","no_utilizados");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "no_utilizados";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "no_utilizados";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["no_utilizados"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "no_utilizados";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","total");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "total";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["total"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "total";
//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","usuario");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuario";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataalcalde_chart["usuario"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "usuario";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","fecha");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataalcalde_chart["fecha"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "fecha";
//	editado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "editado_por";
	$fdata["GoodName"] = "editado_por";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","editado_por");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "editado_por";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "editado_por";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdataalcalde_chart["editado_por"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "editado_por";
//	fecha_edicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "fecha_edicion";
	$fdata["GoodName"] = "fecha_edicion";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("Alcalde_Chart","fecha_edicion");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "fecha_edicion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_edicion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataalcalde_chart["fecha_edicion"] = $fdata;
		$tdataalcalde_chart[".searchableFields"][] = "fecha_edicion";

$tdataalcalde_chart[".groupChart"] = true;
$tdataalcalde_chart[".chartLabelInterval"] = 0;
$tdataalcalde_chart[".chartLabelField"] = "elecciones";
$tdataalcalde_chart[".chartSeries"] = array();
$tdataalcalde_chart[".chartSeries"][] = array( 
	"field" => "candidato10",
	"total" => "SUM"
);
$tdataalcalde_chart[".chartSeries"][] = array( 
	"field" => "candidato11",
	"total" => "SUM"
);
$tdataalcalde_chart[".chartSeries"][] = array( 
	"field" => "candidato5",
	"total" => "SUM"
);
$tdataalcalde_chart[".chartSeries"][] = array( 
	"field" => "candidato6",
	"total" => "SUM"
);
$tdataalcalde_chart[".chartSeries"][] = array( 
	"field" => "candidato7",
	"total" => "SUM"
);
$tdataalcalde_chart[".chartSeries"][] = array( 
	"field" => "candidato8",
	"total" => "SUM"
);
$tdataalcalde_chart[".chartSeries"][] = array( 
	"field" => "candidato1",
	"total" => "SUM"
);
$tdataalcalde_chart[".chartSeries"][] = array( 
	"field" => "candidato2",
	"total" => "SUM"
);
$tdataalcalde_chart[".chartSeries"][] = array( 
	"field" => "candidato3",
	"total" => "SUM"
);
$tdataalcalde_chart[".chartSeries"][] = array( 
	"field" => "candidato4",
	"total" => "SUM"
);
$tdataalcalde_chart[".chartSeries"][] = array( 
	"field" => "candidato12",
	"total" => "SUM"
);
$tdataalcalde_chart[".chartSeries"][] = array( 
	"field" => "candidato9",
	"total" => "SUM"
);
	$tdataalcalde_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Alcalde_Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">candidato10</attr>';
	$tdataalcalde_chart[".chartXml"] .= '</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="1">
			<attr value="name">candidato11</attr>';
	$tdataalcalde_chart[".chartXml"] .= '</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="2">
			<attr value="name">candidato5</attr>';
	$tdataalcalde_chart[".chartXml"] .= '</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="3">
			<attr value="name">candidato6</attr>';
	$tdataalcalde_chart[".chartXml"] .= '</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="4">
			<attr value="name">candidato7</attr>';
	$tdataalcalde_chart[".chartXml"] .= '</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="5">
			<attr value="name">candidato8</attr>';
	$tdataalcalde_chart[".chartXml"] .= '</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="6">
			<attr value="name">candidato1</attr>';
	$tdataalcalde_chart[".chartXml"] .= '</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="7">
			<attr value="name">candidato2</attr>';
	$tdataalcalde_chart[".chartXml"] .= '</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="8">
			<attr value="name">candidato3</attr>';
	$tdataalcalde_chart[".chartXml"] .= '</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="9">
			<attr value="name">candidato4</attr>';
	$tdataalcalde_chart[".chartXml"] .= '</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="10">
			<attr value="name">candidato12</attr>';
	$tdataalcalde_chart[".chartXml"] .= '</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="11">
			<attr value="name">candidato9</attr>';
	$tdataalcalde_chart[".chartXml"] .= '</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="12">
		<attr value="name">elecciones</attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataalcalde_chart[".chartXml"] .= '<attr value="head">'.xmlencode("Nivel Municipal").'</attr>
<attr value="foot">'.xmlencode("Elecciones").'</attr>
<attr value="y_axis_label">'.xmlencode("Votos").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">false</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">1</attr>
<attr value="autoupmin">60</attr>';
$tdataalcalde_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">elecciones</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","elecciones")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">id_urna</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","id_urna")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">candidato10</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","candidato10")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">candidato11</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","candidato11")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">candidato5</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","candidato5")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">candidato1</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","candidato1")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">candidato2</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","candidato2")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="7">
		<attr value="name">candidato3</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","candidato3")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="8">
		<attr value="name">candidato4</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","candidato4")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="9">
		<attr value="name">candidato6</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","candidato6")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="10">
		<attr value="name">candidato7</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","candidato7")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="11">
		<attr value="name">candidato8</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","candidato8")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="12">
		<attr value="name">candidato9</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","candidato9")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="13">
		<attr value="name">candidato12</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","candidato12")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="14">
		<attr value="name">validos</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","validos")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="15">
		<attr value="name">blancos</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","blancos")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="16">
		<attr value="name">nulos</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","nulos")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="17">
		<attr value="name">utilizados</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","utilizados")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="18">
		<attr value="name">no_utilizados</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","no_utilizados")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="19">
		<attr value="name">total</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","total")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="20">
		<attr value="name">usuario</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","usuario")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="21">
		<attr value="name">fecha</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","fecha")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="22">
		<attr value="name">editado_por</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","editado_por")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataalcalde_chart[".chartXml"] .= '<attr value="23">
		<attr value="name">fecha_edicion</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Alcalde_Chart","fecha_edicion")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataalcalde_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Alcalde_Chart</attr>
<attr value="short_table_name">alcalde_chart</attr>
</attr>

</chart>';

$tables_data["Alcalde_Chart"]=&$tdataalcalde_chart;
$field_labels["Alcalde_Chart"] = &$fieldLabelsalcalde_chart;
$fieldToolTips["Alcalde_Chart"] = &$fieldToolTipsalcalde_chart;
$placeHolders["Alcalde_Chart"] = &$placeHoldersalcalde_chart;
$page_titles["Alcalde_Chart"] = &$pageTitlesalcalde_chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Alcalde_Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Alcalde_Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_alcalde_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "elecciones,  	id_urna,  	candidato10,  	candidato11,  	candidato5,  	candidato1,  	candidato2,  	candidato3,  	candidato4,  	candidato6,  	candidato7,  	candidato8,  	candidato9,  	candidato12,  	validos,  	blancos,  	nulos,  	utilizados,  	no_utilizados,  	total,  	usuario,  	fecha,  	editado_por,  	fecha_edicion";
$proto0["m_strFrom"] = "FROM voto_alcalde";
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
	"m_strName" => "elecciones",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto6["m_sql"] = "elecciones";
$proto6["m_srcTableName"] = "Alcalde_Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto8["m_sql"] = "id_urna";
$proto8["m_srcTableName"] = "Alcalde_Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato10",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto10["m_sql"] = "candidato10";
$proto10["m_srcTableName"] = "Alcalde_Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato11",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto12["m_sql"] = "candidato11";
$proto12["m_srcTableName"] = "Alcalde_Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato5",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto14["m_sql"] = "candidato5";
$proto14["m_srcTableName"] = "Alcalde_Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato1",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto16["m_sql"] = "candidato1";
$proto16["m_srcTableName"] = "Alcalde_Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato2",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto18["m_sql"] = "candidato2";
$proto18["m_srcTableName"] = "Alcalde_Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato3",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto20["m_sql"] = "candidato3";
$proto20["m_srcTableName"] = "Alcalde_Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato4",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto22["m_sql"] = "candidato4";
$proto22["m_srcTableName"] = "Alcalde_Chart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato6",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto24["m_sql"] = "candidato6";
$proto24["m_srcTableName"] = "Alcalde_Chart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato7",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto26["m_sql"] = "candidato7";
$proto26["m_srcTableName"] = "Alcalde_Chart";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato8",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto28["m_sql"] = "candidato8";
$proto28["m_srcTableName"] = "Alcalde_Chart";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato9",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto30["m_sql"] = "candidato9";
$proto30["m_srcTableName"] = "Alcalde_Chart";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato12",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto32["m_sql"] = "candidato12";
$proto32["m_srcTableName"] = "Alcalde_Chart";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "validos",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto34["m_sql"] = "validos";
$proto34["m_srcTableName"] = "Alcalde_Chart";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "blancos",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto36["m_sql"] = "blancos";
$proto36["m_srcTableName"] = "Alcalde_Chart";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "nulos",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto38["m_sql"] = "nulos";
$proto38["m_srcTableName"] = "Alcalde_Chart";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "utilizados",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto40["m_sql"] = "utilizados";
$proto40["m_srcTableName"] = "Alcalde_Chart";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "no_utilizados",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto42["m_sql"] = "no_utilizados";
$proto42["m_srcTableName"] = "Alcalde_Chart";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto44["m_sql"] = "total";
$proto44["m_srcTableName"] = "Alcalde_Chart";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto46["m_sql"] = "usuario";
$proto46["m_srcTableName"] = "Alcalde_Chart";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto48["m_sql"] = "fecha";
$proto48["m_srcTableName"] = "Alcalde_Chart";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "editado_por",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto50["m_sql"] = "editado_por";
$proto50["m_srcTableName"] = "Alcalde_Chart";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_edicion",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "Alcalde_Chart"
));

$proto52["m_sql"] = "fecha_edicion";
$proto52["m_srcTableName"] = "Alcalde_Chart";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "voto_alcalde";
$proto55["m_srcTableName"] = "Alcalde_Chart";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "elecciones";
$proto55["m_columns"][] = "id_urna";
$proto55["m_columns"][] = "candidato1";
$proto55["m_columns"][] = "candidato2";
$proto55["m_columns"][] = "candidato3";
$proto55["m_columns"][] = "candidato4";
$proto55["m_columns"][] = "candidato5";
$proto55["m_columns"][] = "candidato6";
$proto55["m_columns"][] = "candidato7";
$proto55["m_columns"][] = "candidato8";
$proto55["m_columns"][] = "candidato9";
$proto55["m_columns"][] = "candidato10";
$proto55["m_columns"][] = "candidato11";
$proto55["m_columns"][] = "candidato12";
$proto55["m_columns"][] = "validos";
$proto55["m_columns"][] = "blancos";
$proto55["m_columns"][] = "nulos";
$proto55["m_columns"][] = "utilizados";
$proto55["m_columns"][] = "no_utilizados";
$proto55["m_columns"][] = "total";
$proto55["m_columns"][] = "usuario";
$proto55["m_columns"][] = "fecha";
$proto55["m_columns"][] = "editado_por";
$proto55["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "voto_alcalde";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "Alcalde_Chart";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Alcalde_Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alcalde_chart = createSqlQuery_alcalde_chart();


	
		;

																								

$tdataalcalde_chart[".sqlquery"] = $queryData_alcalde_chart;



include_once(getabspath("include/alcalde_chart_events.php"));
$tableEvents["Alcalde_Chart"] = new eventclass_alcalde_chart;
$tdataalcalde_chart[".hasEvents"] = true;

$query = &$queryData_alcalde_chart;
$table = "Alcalde_Chart";
// here goes EVENT_INIT_TABLE event


// Place event code here.
// Use "Add Action" button to add code snippets.
$escrutada = DBlookup("select round((((select count(*) from voto_alcalde) / count(*)) * 100),1) as Actas_Escrutadas from urna");
$no_escrutado = 100 - $escrutada;

$_SESSION["escrutada"] = $escrutada;
$_SESSION["no_escrutada"] = $no_escrutado;
;
unset($query);
?>