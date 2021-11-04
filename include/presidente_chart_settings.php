<?php
$tdatapresidente_chart = array();
$tdatapresidente_chart[".searchableFields"] = array();
$tdatapresidente_chart[".ShortName"] = "presidente_chart";
$tdatapresidente_chart[".OwnerID"] = "";
$tdatapresidente_chart[".OriginalTable"] = "voto_presidente";


$tdatapresidente_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatapresidente_chart[".originalPagesByType"] = $tdatapresidente_chart[".pagesByType"];
$tdatapresidente_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatapresidente_chart[".originalPages"] = $tdatapresidente_chart[".pages"];
$tdatapresidente_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatapresidente_chart[".originalDefaultPages"] = $tdatapresidente_chart[".defaultPages"];

//	field labels
$fieldLabelspresidente_chart = array();
$fieldToolTipspresidente_chart = array();
$pageTitlespresidente_chart = array();
$placeHolderspresidente_chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspresidente_chart["Spanish"] = array();
	$fieldToolTipspresidente_chart["Spanish"] = array();
	$placeHolderspresidente_chart["Spanish"] = array();
	$pageTitlespresidente_chart["Spanish"] = array();
	$fieldLabelspresidente_chart["Spanish"]["id_urna"] = "Urna";
	$fieldToolTipspresidente_chart["Spanish"]["id_urna"] = "";
	$placeHolderspresidente_chart["Spanish"]["id_urna"] = "";
	$fieldLabelspresidente_chart["Spanish"]["candidato1"] = "Julio López";
	$fieldToolTipspresidente_chart["Spanish"]["candidato1"] = "";
	$placeHolderspresidente_chart["Spanish"]["candidato1"] = "";
	$fieldLabelspresidente_chart["Spanish"]["candidato2"] = "Kelin Pérez";
	$fieldToolTipspresidente_chart["Spanish"]["candidato2"] = "";
	$placeHolderspresidente_chart["Spanish"]["candidato2"] = "";
	$fieldLabelspresidente_chart["Spanish"]["candidato3"] = "Esdras López";
	$fieldToolTipspresidente_chart["Spanish"]["candidato3"] = "";
	$placeHolderspresidente_chart["Spanish"]["candidato3"] = "";
	$fieldLabelspresidente_chart["Spanish"]["validos"] = "Votos Validos";
	$fieldToolTipspresidente_chart["Spanish"]["validos"] = "";
	$placeHolderspresidente_chart["Spanish"]["validos"] = "";
	$fieldLabelspresidente_chart["Spanish"]["blancos"] = "Votos En Blanco";
	$fieldToolTipspresidente_chart["Spanish"]["blancos"] = "";
	$placeHolderspresidente_chart["Spanish"]["blancos"] = "";
	$fieldLabelspresidente_chart["Spanish"]["nulos"] = "Votos Nulos";
	$fieldToolTipspresidente_chart["Spanish"]["nulos"] = "";
	$placeHolderspresidente_chart["Spanish"]["nulos"] = "";
	$fieldLabelspresidente_chart["Spanish"]["utilizados"] = "Votos Utilizados";
	$fieldToolTipspresidente_chart["Spanish"]["utilizados"] = "";
	$placeHolderspresidente_chart["Spanish"]["utilizados"] = "";
	$fieldLabelspresidente_chart["Spanish"]["no_utilizados"] = "Votos No Utilizados";
	$fieldToolTipspresidente_chart["Spanish"]["no_utilizados"] = "";
	$placeHolderspresidente_chart["Spanish"]["no_utilizados"] = "";
	$fieldLabelspresidente_chart["Spanish"]["total"] = "Total de Votos";
	$fieldToolTipspresidente_chart["Spanish"]["total"] = "";
	$placeHolderspresidente_chart["Spanish"]["total"] = "";
	$fieldLabelspresidente_chart["Spanish"]["usuario"] = "Ingresado Por";
	$fieldToolTipspresidente_chart["Spanish"]["usuario"] = "";
	$placeHolderspresidente_chart["Spanish"]["usuario"] = "";
	$fieldLabelspresidente_chart["Spanish"]["fecha"] = "Fecha de Ingreso";
	$fieldToolTipspresidente_chart["Spanish"]["fecha"] = "";
	$placeHolderspresidente_chart["Spanish"]["fecha"] = "";
	$fieldLabelspresidente_chart["Spanish"]["candidato4"] = "Romeo Vasquez";
	$fieldToolTipspresidente_chart["Spanish"]["candidato4"] = "";
	$placeHolderspresidente_chart["Spanish"]["candidato4"] = "";
	$fieldLabelspresidente_chart["Spanish"]["candidato5"] = "Santos Orellana";
	$fieldToolTipspresidente_chart["Spanish"]["candidato5"] = "";
	$placeHolderspresidente_chart["Spanish"]["candidato5"] = "";
	$fieldLabelspresidente_chart["Spanish"]["candidato6"] = "José Coto";
	$fieldToolTipspresidente_chart["Spanish"]["candidato6"] = "";
	$placeHolderspresidente_chart["Spanish"]["candidato6"] = "";
	$fieldLabelspresidente_chart["Spanish"]["candidato7"] = "Xiomara Castro";
	$fieldToolTipspresidente_chart["Spanish"]["candidato7"] = "";
	$placeHolderspresidente_chart["Spanish"]["candidato7"] = "";
	$fieldLabelspresidente_chart["Spanish"]["candidato8"] = "Alexander Mira";
	$fieldToolTipspresidente_chart["Spanish"]["candidato8"] = "";
	$placeHolderspresidente_chart["Spanish"]["candidato8"] = "";
	$fieldLabelspresidente_chart["Spanish"]["candidato9"] = "Lempira Viana";
	$fieldToolTipspresidente_chart["Spanish"]["candidato9"] = "";
	$placeHolderspresidente_chart["Spanish"]["candidato9"] = "";
	$fieldLabelspresidente_chart["Spanish"]["candidato10"] = "José Diaz";
	$fieldToolTipspresidente_chart["Spanish"]["candidato10"] = "";
	$placeHolderspresidente_chart["Spanish"]["candidato10"] = "";
	$fieldLabelspresidente_chart["Spanish"]["candidato11"] = "Carlos Portillo";
	$fieldToolTipspresidente_chart["Spanish"]["candidato11"] = "";
	$placeHolderspresidente_chart["Spanish"]["candidato11"] = "";
	$fieldLabelspresidente_chart["Spanish"]["candidato12"] = "Marlon Escoto";
	$fieldToolTipspresidente_chart["Spanish"]["candidato12"] = "";
	$placeHolderspresidente_chart["Spanish"]["candidato12"] = "";
	$fieldLabelspresidente_chart["Spanish"]["candidato13"] = "Milton Ávila";
	$fieldToolTipspresidente_chart["Spanish"]["candidato13"] = "";
	$placeHolderspresidente_chart["Spanish"]["candidato13"] = "";
	$fieldLabelspresidente_chart["Spanish"]["candidato14"] = "Yani Rosenthal";
	$fieldToolTipspresidente_chart["Spanish"]["candidato14"] = "";
	$placeHolderspresidente_chart["Spanish"]["candidato14"] = "";
	$fieldLabelspresidente_chart["Spanish"]["editado_por"] = "Editado Por";
	$fieldToolTipspresidente_chart["Spanish"]["editado_por"] = "";
	$placeHolderspresidente_chart["Spanish"]["editado_por"] = "";
	$fieldLabelspresidente_chart["Spanish"]["fecha_edicion"] = "Fecha Edicion";
	$fieldToolTipspresidente_chart["Spanish"]["fecha_edicion"] = "";
	$placeHolderspresidente_chart["Spanish"]["fecha_edicion"] = "";
	$fieldLabelspresidente_chart["Spanish"]["candidato15"] = "Nasry Asfura";
	$fieldToolTipspresidente_chart["Spanish"]["candidato15"] = "";
	$placeHolderspresidente_chart["Spanish"]["candidato15"] = "";
	$fieldLabelspresidente_chart["Spanish"]["elecciones"] = "Elecciones";
	$fieldToolTipspresidente_chart["Spanish"]["elecciones"] = "";
	$placeHolderspresidente_chart["Spanish"]["elecciones"] = "";
	if (count($fieldToolTipspresidente_chart["Spanish"]))
		$tdatapresidente_chart[".isUseToolTips"] = true;
}


	$tdatapresidente_chart[".NCSearch"] = true;

	$tdatapresidente_chart[".ChartRefreshTime"] = 60;


$tdatapresidente_chart[".shortTableName"] = "presidente_chart";
$tdatapresidente_chart[".nSecOptions"] = 0;

$tdatapresidente_chart[".mainTableOwnerID"] = "";
$tdatapresidente_chart[".entityType"] = 3;
$tdatapresidente_chart[".connId"] = "internas_new_at_localhost";


$tdatapresidente_chart[".strOriginalTableName"] = "voto_presidente";

	



$tdatapresidente_chart[".showAddInPopup"] = false;

$tdatapresidente_chart[".showEditInPopup"] = false;

$tdatapresidente_chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapresidente_chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapresidente_chart[".listAjax"] = false;
//	temporary
//$tdatapresidente_chart[".listAjax"] = false;

	$tdatapresidente_chart[".audit"] = false;

	$tdatapresidente_chart[".locking"] = false;


$pages = $tdatapresidente_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapresidente_chart[".edit"] = true;
	$tdatapresidente_chart[".afterEditAction"] = 1;
	$tdatapresidente_chart[".closePopupAfterEdit"] = 1;
	$tdatapresidente_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapresidente_chart[".add"] = true;
$tdatapresidente_chart[".afterAddAction"] = 1;
$tdatapresidente_chart[".closePopupAfterAdd"] = 1;
$tdatapresidente_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapresidente_chart[".list"] = true;
}



$tdatapresidente_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapresidente_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapresidente_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapresidente_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapresidente_chart[".printFriendly"] = true;
}



$tdatapresidente_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapresidente_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapresidente_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapresidente_chart[".isUseAjaxSuggest"] = true;






$tdatapresidente_chart[".ajaxCodeSnippetAdded"] = false;

$tdatapresidente_chart[".buttonsAdded"] = false;

$tdatapresidente_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapresidente_chart[".isUseTimeForSearch"] = false;


$tdatapresidente_chart[".badgeColor"] = "BC8F8F";


$tdatapresidente_chart[".allSearchFields"] = array();
$tdatapresidente_chart[".filterFields"] = array();
$tdatapresidente_chart[".requiredSearchFields"] = array();

$tdatapresidente_chart[".googleLikeFields"] = array();
$tdatapresidente_chart[".googleLikeFields"][] = "elecciones";
$tdatapresidente_chart[".googleLikeFields"][] = "id_urna";
$tdatapresidente_chart[".googleLikeFields"][] = "candidato1";
$tdatapresidente_chart[".googleLikeFields"][] = "candidato2";
$tdatapresidente_chart[".googleLikeFields"][] = "candidato3";
$tdatapresidente_chart[".googleLikeFields"][] = "candidato4";
$tdatapresidente_chart[".googleLikeFields"][] = "candidato5";
$tdatapresidente_chart[".googleLikeFields"][] = "candidato6";
$tdatapresidente_chart[".googleLikeFields"][] = "candidato7";
$tdatapresidente_chart[".googleLikeFields"][] = "candidato8";
$tdatapresidente_chart[".googleLikeFields"][] = "candidato9";
$tdatapresidente_chart[".googleLikeFields"][] = "candidato10";
$tdatapresidente_chart[".googleLikeFields"][] = "candidato11";
$tdatapresidente_chart[".googleLikeFields"][] = "candidato12";
$tdatapresidente_chart[".googleLikeFields"][] = "candidato13";
$tdatapresidente_chart[".googleLikeFields"][] = "candidato14";
$tdatapresidente_chart[".googleLikeFields"][] = "candidato15";
$tdatapresidente_chart[".googleLikeFields"][] = "validos";
$tdatapresidente_chart[".googleLikeFields"][] = "blancos";
$tdatapresidente_chart[".googleLikeFields"][] = "nulos";
$tdatapresidente_chart[".googleLikeFields"][] = "utilizados";
$tdatapresidente_chart[".googleLikeFields"][] = "no_utilizados";
$tdatapresidente_chart[".googleLikeFields"][] = "total";
$tdatapresidente_chart[".googleLikeFields"][] = "usuario";
$tdatapresidente_chart[".googleLikeFields"][] = "fecha";
$tdatapresidente_chart[".googleLikeFields"][] = "editado_por";
$tdatapresidente_chart[".googleLikeFields"][] = "fecha_edicion";



$tdatapresidente_chart[".tableType"] = "chart";

$tdatapresidente_chart[".printerPageOrientation"] = 0;
$tdatapresidente_chart[".nPrinterPageScale"] = 100;

$tdatapresidente_chart[".nPrinterSplitRecords"] = 40;

$tdatapresidente_chart[".geocodingEnabled"] = false;



// chart settings
$tdatapresidente_chart[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapresidente_chart[".strOrderBy"] = $tstrOrderBy;

$tdatapresidente_chart[".orderindexes"] = array();


$tdatapresidente_chart[".sqlHead"] = "SELECT elecciones,  	id_urna,  	candidato1,  	candidato2,  	candidato3,  	candidato4,  	candidato5,  	candidato6,  	candidato7,  	candidato8,  	candidato9,  	candidato10,  	candidato11,  	candidato12,  	candidato13,  	candidato14,  	candidato15,  	validos,  	blancos,  	nulos,  	utilizados,  	no_utilizados,  	total,  	usuario,  	fecha,  	editado_por,  	fecha_edicion";
$tdatapresidente_chart[".sqlFrom"] = "FROM voto_presidente";
$tdatapresidente_chart[".sqlWhereExpr"] = "";
$tdatapresidente_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapresidente_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapresidente_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatapresidente_chart[".highlightSearchResults"] = true;

$tableKeyspresidente_chart = array();
$tableKeyspresidente_chart[] = "id_urna";
$tdatapresidente_chart[".Keys"] = $tableKeyspresidente_chart;


$tdatapresidente_chart[".hideMobileList"] = array();




//	elecciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "elecciones";
	$fdata["GoodName"] = "elecciones";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","elecciones");
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


	$tdatapresidente_chart["elecciones"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "elecciones";
//	id_urna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_urna";
	$fdata["GoodName"] = "id_urna";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","id_urna");
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


	$tdatapresidente_chart["id_urna"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "id_urna";
//	candidato1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "candidato1";
	$fdata["GoodName"] = "candidato1";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","candidato1");
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


	$tdatapresidente_chart["candidato1"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "candidato1";
//	candidato2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "candidato2";
	$fdata["GoodName"] = "candidato2";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","candidato2");
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


	$tdatapresidente_chart["candidato2"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "candidato2";
//	candidato3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "candidato3";
	$fdata["GoodName"] = "candidato3";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","candidato3");
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


	$tdatapresidente_chart["candidato3"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "candidato3";
//	candidato4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "candidato4";
	$fdata["GoodName"] = "candidato4";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","candidato4");
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


	$tdatapresidente_chart["candidato4"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "candidato4";
//	candidato5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "candidato5";
	$fdata["GoodName"] = "candidato5";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","candidato5");
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


	$tdatapresidente_chart["candidato5"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "candidato5";
//	candidato6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "candidato6";
	$fdata["GoodName"] = "candidato6";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","candidato6");
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


	$tdatapresidente_chart["candidato6"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "candidato6";
//	candidato7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "candidato7";
	$fdata["GoodName"] = "candidato7";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","candidato7");
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


	$tdatapresidente_chart["candidato7"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "candidato7";
//	candidato8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "candidato8";
	$fdata["GoodName"] = "candidato8";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","candidato8");
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


	$tdatapresidente_chart["candidato8"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "candidato8";
//	candidato9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "candidato9";
	$fdata["GoodName"] = "candidato9";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","candidato9");
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


	$tdatapresidente_chart["candidato9"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "candidato9";
//	candidato10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "candidato10";
	$fdata["GoodName"] = "candidato10";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","candidato10");
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


	$tdatapresidente_chart["candidato10"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "candidato10";
//	candidato11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "candidato11";
	$fdata["GoodName"] = "candidato11";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","candidato11");
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


	$tdatapresidente_chart["candidato11"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "candidato11";
//	candidato12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "candidato12";
	$fdata["GoodName"] = "candidato12";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","candidato12");
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


	$tdatapresidente_chart["candidato12"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "candidato12";
//	candidato13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "candidato13";
	$fdata["GoodName"] = "candidato13";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","candidato13");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "candidato13";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "candidato13";

	
	
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


	$tdatapresidente_chart["candidato13"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "candidato13";
//	candidato14
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "candidato14";
	$fdata["GoodName"] = "candidato14";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","candidato14");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "candidato14";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "candidato14";

	
	
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


	$tdatapresidente_chart["candidato14"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "candidato14";
//	candidato15
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "candidato15";
	$fdata["GoodName"] = "candidato15";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","candidato15");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "candidato15";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "candidato15";

	
	
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


	$tdatapresidente_chart["candidato15"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "candidato15";
//	validos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "validos";
	$fdata["GoodName"] = "validos";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","validos");
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


	$tdatapresidente_chart["validos"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "validos";
//	blancos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "blancos";
	$fdata["GoodName"] = "blancos";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","blancos");
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


	$tdatapresidente_chart["blancos"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "blancos";
//	nulos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "nulos";
	$fdata["GoodName"] = "nulos";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","nulos");
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


	$tdatapresidente_chart["nulos"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "nulos";
//	utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "utilizados";
	$fdata["GoodName"] = "utilizados";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","utilizados");
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


	$tdatapresidente_chart["utilizados"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "utilizados";
//	no_utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "no_utilizados";
	$fdata["GoodName"] = "no_utilizados";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","no_utilizados");
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


	$tdatapresidente_chart["no_utilizados"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "no_utilizados";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","total");
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


	$tdatapresidente_chart["total"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "total";
//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","usuario");
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


	$tdatapresidente_chart["usuario"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "usuario";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","fecha");
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


	$tdatapresidente_chart["fecha"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "fecha";
//	editado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "editado_por";
	$fdata["GoodName"] = "editado_por";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","editado_por");
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


	$tdatapresidente_chart["editado_por"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "editado_por";
//	fecha_edicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "fecha_edicion";
	$fdata["GoodName"] = "fecha_edicion";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("Presidente_Chart","fecha_edicion");
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


	$tdatapresidente_chart["fecha_edicion"] = $fdata;
		$tdatapresidente_chart[".searchableFields"][] = "fecha_edicion";

$tdatapresidente_chart[".groupChart"] = true;
$tdatapresidente_chart[".chartLabelInterval"] = 0;
$tdatapresidente_chart[".chartLabelField"] = "elecciones";
$tdatapresidente_chart[".chartSeries"] = array();
$tdatapresidente_chart[".chartSeries"][] = array( 
	"field" => "candidato14",
	"total" => "SUM"
);
$tdatapresidente_chart[".chartSeries"][] = array( 
	"field" => "candidato15",
	"total" => "SUM"
);
$tdatapresidente_chart[".chartSeries"][] = array( 
	"field" => "candidato7",
	"total" => "SUM"
);
$tdatapresidente_chart[".chartSeries"][] = array( 
	"field" => "candidato13",
	"total" => "SUM"
);
$tdatapresidente_chart[".chartSeries"][] = array( 
	"field" => "candidato4",
	"total" => "SUM"
);
$tdatapresidente_chart[".chartSeries"][] = array( 
	"field" => "candidato5",
	"total" => "SUM"
);
$tdatapresidente_chart[".chartSeries"][] = array( 
	"field" => "candidato1",
	"total" => "SUM"
);
$tdatapresidente_chart[".chartSeries"][] = array( 
	"field" => "candidato2",
	"total" => "SUM"
);
$tdatapresidente_chart[".chartSeries"][] = array( 
	"field" => "candidato3",
	"total" => "SUM"
);
$tdatapresidente_chart[".chartSeries"][] = array( 
	"field" => "candidato6",
	"total" => "SUM"
);
$tdatapresidente_chart[".chartSeries"][] = array( 
	"field" => "candidato8",
	"total" => "SUM"
);
$tdatapresidente_chart[".chartSeries"][] = array( 
	"field" => "candidato9",
	"total" => "SUM"
);
$tdatapresidente_chart[".chartSeries"][] = array( 
	"field" => "candidato10",
	"total" => "SUM"
);
$tdatapresidente_chart[".chartSeries"][] = array( 
	"field" => "candidato11",
	"total" => "SUM"
);
$tdatapresidente_chart[".chartSeries"][] = array( 
	"field" => "candidato12",
	"total" => "SUM"
);
	$tdatapresidente_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Presidente_Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">candidato14</attr>';
	$tdatapresidente_chart[".chartXml"] .= '</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="1">
			<attr value="name">candidato15</attr>';
	$tdatapresidente_chart[".chartXml"] .= '</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="2">
			<attr value="name">candidato7</attr>';
	$tdatapresidente_chart[".chartXml"] .= '</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="3">
			<attr value="name">candidato13</attr>';
	$tdatapresidente_chart[".chartXml"] .= '</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="4">
			<attr value="name">candidato4</attr>';
	$tdatapresidente_chart[".chartXml"] .= '</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="5">
			<attr value="name">candidato5</attr>';
	$tdatapresidente_chart[".chartXml"] .= '</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="6">
			<attr value="name">candidato1</attr>';
	$tdatapresidente_chart[".chartXml"] .= '</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="7">
			<attr value="name">candidato2</attr>';
	$tdatapresidente_chart[".chartXml"] .= '</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="8">
			<attr value="name">candidato3</attr>';
	$tdatapresidente_chart[".chartXml"] .= '</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="9">
			<attr value="name">candidato6</attr>';
	$tdatapresidente_chart[".chartXml"] .= '</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="10">
			<attr value="name">candidato8</attr>';
	$tdatapresidente_chart[".chartXml"] .= '</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="11">
			<attr value="name">candidato9</attr>';
	$tdatapresidente_chart[".chartXml"] .= '</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="12">
			<attr value="name">candidato10</attr>';
	$tdatapresidente_chart[".chartXml"] .= '</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="13">
			<attr value="name">candidato11</attr>';
	$tdatapresidente_chart[".chartXml"] .= '</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="14">
			<attr value="name">candidato12</attr>';
	$tdatapresidente_chart[".chartXml"] .= '</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="15">
		<attr value="name">elecciones</attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatapresidente_chart[".chartXml"] .= '<attr value="head">'.xmlencode("Nivel Presidencial").'</attr>
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
$tdatapresidente_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">elecciones</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","elecciones")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">id_urna</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","id_urna")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">candidato1</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","candidato1")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">candidato2</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","candidato2")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">candidato3</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","candidato3")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">candidato4</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","candidato4")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">candidato5</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","candidato5")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="7">
		<attr value="name">candidato6</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","candidato6")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="8">
		<attr value="name">candidato7</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","candidato7")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="9">
		<attr value="name">candidato8</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","candidato8")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="10">
		<attr value="name">candidato9</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","candidato9")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="11">
		<attr value="name">candidato10</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","candidato10")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="12">
		<attr value="name">candidato11</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","candidato11")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="13">
		<attr value="name">candidato12</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","candidato12")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="14">
		<attr value="name">candidato13</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","candidato13")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="15">
		<attr value="name">candidato14</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","candidato14")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="16">
		<attr value="name">candidato15</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","candidato15")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="17">
		<attr value="name">validos</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","validos")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="18">
		<attr value="name">blancos</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","blancos")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="19">
		<attr value="name">nulos</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","nulos")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="20">
		<attr value="name">utilizados</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","utilizados")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="21">
		<attr value="name">no_utilizados</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","no_utilizados")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="22">
		<attr value="name">total</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","total")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="23">
		<attr value="name">usuario</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","usuario")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="24">
		<attr value="name">fecha</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","fecha")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="25">
		<attr value="name">editado_por</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","editado_por")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapresidente_chart[".chartXml"] .= '<attr value="26">
		<attr value="name">fecha_edicion</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Presidente_Chart","fecha_edicion")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatapresidente_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Presidente_Chart</attr>
<attr value="short_table_name">presidente_chart</attr>
</attr>

</chart>';

$tables_data["Presidente_Chart"]=&$tdatapresidente_chart;
$field_labels["Presidente_Chart"] = &$fieldLabelspresidente_chart;
$fieldToolTips["Presidente_Chart"] = &$fieldToolTipspresidente_chart;
$placeHolders["Presidente_Chart"] = &$placeHolderspresidente_chart;
$page_titles["Presidente_Chart"] = &$pageTitlespresidente_chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Presidente_Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Presidente_Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_presidente_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "elecciones,  	id_urna,  	candidato1,  	candidato2,  	candidato3,  	candidato4,  	candidato5,  	candidato6,  	candidato7,  	candidato8,  	candidato9,  	candidato10,  	candidato11,  	candidato12,  	candidato13,  	candidato14,  	candidato15,  	validos,  	blancos,  	nulos,  	utilizados,  	no_utilizados,  	total,  	usuario,  	fecha,  	editado_por,  	fecha_edicion";
$proto0["m_strFrom"] = "FROM voto_presidente";
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
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto6["m_sql"] = "elecciones";
$proto6["m_srcTableName"] = "Presidente_Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_urna",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto8["m_sql"] = "id_urna";
$proto8["m_srcTableName"] = "Presidente_Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato1",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto10["m_sql"] = "candidato1";
$proto10["m_srcTableName"] = "Presidente_Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato2",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto12["m_sql"] = "candidato2";
$proto12["m_srcTableName"] = "Presidente_Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato3",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto14["m_sql"] = "candidato3";
$proto14["m_srcTableName"] = "Presidente_Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato4",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto16["m_sql"] = "candidato4";
$proto16["m_srcTableName"] = "Presidente_Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato5",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto18["m_sql"] = "candidato5";
$proto18["m_srcTableName"] = "Presidente_Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato6",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto20["m_sql"] = "candidato6";
$proto20["m_srcTableName"] = "Presidente_Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato7",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto22["m_sql"] = "candidato7";
$proto22["m_srcTableName"] = "Presidente_Chart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato8",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto24["m_sql"] = "candidato8";
$proto24["m_srcTableName"] = "Presidente_Chart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato9",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto26["m_sql"] = "candidato9";
$proto26["m_srcTableName"] = "Presidente_Chart";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato10",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto28["m_sql"] = "candidato10";
$proto28["m_srcTableName"] = "Presidente_Chart";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato11",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto30["m_sql"] = "candidato11";
$proto30["m_srcTableName"] = "Presidente_Chart";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato12",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto32["m_sql"] = "candidato12";
$proto32["m_srcTableName"] = "Presidente_Chart";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato13",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto34["m_sql"] = "candidato13";
$proto34["m_srcTableName"] = "Presidente_Chart";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato14",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto36["m_sql"] = "candidato14";
$proto36["m_srcTableName"] = "Presidente_Chart";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato15",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto38["m_sql"] = "candidato15";
$proto38["m_srcTableName"] = "Presidente_Chart";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "validos",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto40["m_sql"] = "validos";
$proto40["m_srcTableName"] = "Presidente_Chart";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "blancos",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto42["m_sql"] = "blancos";
$proto42["m_srcTableName"] = "Presidente_Chart";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "nulos",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto44["m_sql"] = "nulos";
$proto44["m_srcTableName"] = "Presidente_Chart";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "utilizados",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto46["m_sql"] = "utilizados";
$proto46["m_srcTableName"] = "Presidente_Chart";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "no_utilizados",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto48["m_sql"] = "no_utilizados";
$proto48["m_srcTableName"] = "Presidente_Chart";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto50["m_sql"] = "total";
$proto50["m_srcTableName"] = "Presidente_Chart";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto52["m_sql"] = "usuario";
$proto52["m_srcTableName"] = "Presidente_Chart";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto54["m_sql"] = "fecha";
$proto54["m_srcTableName"] = "Presidente_Chart";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "editado_por",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto56["m_sql"] = "editado_por";
$proto56["m_srcTableName"] = "Presidente_Chart";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_edicion",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "Presidente_Chart"
));

$proto58["m_sql"] = "fecha_edicion";
$proto58["m_srcTableName"] = "Presidente_Chart";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto60=array();
$proto60["m_link"] = "SQLL_MAIN";
			$proto61=array();
$proto61["m_strName"] = "voto_presidente";
$proto61["m_srcTableName"] = "Presidente_Chart";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "elecciones";
$proto61["m_columns"][] = "id_urna";
$proto61["m_columns"][] = "candidato1";
$proto61["m_columns"][] = "candidato2";
$proto61["m_columns"][] = "candidato3";
$proto61["m_columns"][] = "candidato4";
$proto61["m_columns"][] = "candidato5";
$proto61["m_columns"][] = "candidato6";
$proto61["m_columns"][] = "candidato7";
$proto61["m_columns"][] = "candidato8";
$proto61["m_columns"][] = "candidato9";
$proto61["m_columns"][] = "candidato10";
$proto61["m_columns"][] = "candidato11";
$proto61["m_columns"][] = "candidato12";
$proto61["m_columns"][] = "candidato13";
$proto61["m_columns"][] = "candidato14";
$proto61["m_columns"][] = "candidato15";
$proto61["m_columns"][] = "validos";
$proto61["m_columns"][] = "blancos";
$proto61["m_columns"][] = "nulos";
$proto61["m_columns"][] = "utilizados";
$proto61["m_columns"][] = "no_utilizados";
$proto61["m_columns"][] = "total";
$proto61["m_columns"][] = "usuario";
$proto61["m_columns"][] = "fecha";
$proto61["m_columns"][] = "editado_por";
$proto61["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "voto_presidente";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "Presidente_Chart";
$proto62=array();
$proto62["m_sql"] = "";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Presidente_Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_presidente_chart = createSqlQuery_presidente_chart();


	
		;

																											

$tdatapresidente_chart[".sqlquery"] = $queryData_presidente_chart;



include_once(getabspath("include/presidente_chart_events.php"));
$tableEvents["Presidente_Chart"] = new eventclass_presidente_chart;
$tdatapresidente_chart[".hasEvents"] = true;

$query = &$queryData_presidente_chart;
$table = "Presidente_Chart";
// here goes EVENT_INIT_TABLE event


// Place event code here.
// Use "Add Action" button to add code snippets.

$escrutada = DBlookup("select round((((select count(*) from voto_presidente) / count(*)) * 100),1) as Actas_Escrutadas from urna");
$no_escrutado = 100 - $escrutada;

$_SESSION["escrutada"] = $escrutada;
$_SESSION["no_escrutada"] = $no_escrutado;
;
unset($query);
?>