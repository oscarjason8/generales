<?php
$tdatavoto_presidente = array();
$tdatavoto_presidente[".searchableFields"] = array();
$tdatavoto_presidente[".ShortName"] = "voto_presidente";
$tdatavoto_presidente[".OwnerID"] = "";
$tdatavoto_presidente[".OriginalTable"] = "voto_presidente";


$tdatavoto_presidente[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavoto_presidente[".originalPagesByType"] = $tdatavoto_presidente[".pagesByType"];
$tdatavoto_presidente[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavoto_presidente[".originalPages"] = $tdatavoto_presidente[".pages"];
$tdatavoto_presidente[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavoto_presidente[".originalDefaultPages"] = $tdatavoto_presidente[".defaultPages"];

//	field labels
$fieldLabelsvoto_presidente = array();
$fieldToolTipsvoto_presidente = array();
$pageTitlesvoto_presidente = array();
$placeHoldersvoto_presidente = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvoto_presidente["Spanish"] = array();
	$fieldToolTipsvoto_presidente["Spanish"] = array();
	$placeHoldersvoto_presidente["Spanish"] = array();
	$pageTitlesvoto_presidente["Spanish"] = array();
	$fieldLabelsvoto_presidente["Spanish"]["id_urna"] = "Urna";
	$fieldToolTipsvoto_presidente["Spanish"]["id_urna"] = "";
	$placeHoldersvoto_presidente["Spanish"]["id_urna"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["candidato1"] = "Julio Lopez";
	$fieldToolTipsvoto_presidente["Spanish"]["candidato1"] = "";
	$placeHoldersvoto_presidente["Spanish"]["candidato1"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["candidato2"] = "Kelin Perez";
	$fieldToolTipsvoto_presidente["Spanish"]["candidato2"] = "";
	$placeHoldersvoto_presidente["Spanish"]["candidato2"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["candidato3"] = "Esdras Lopez";
	$fieldToolTipsvoto_presidente["Spanish"]["candidato3"] = "";
	$placeHoldersvoto_presidente["Spanish"]["candidato3"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["validos"] = "Validos";
	$fieldToolTipsvoto_presidente["Spanish"]["validos"] = "";
	$placeHoldersvoto_presidente["Spanish"]["validos"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["blancos"] = "En Blanco";
	$fieldToolTipsvoto_presidente["Spanish"]["blancos"] = "";
	$placeHoldersvoto_presidente["Spanish"]["blancos"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["nulos"] = "Nulos";
	$fieldToolTipsvoto_presidente["Spanish"]["nulos"] = "";
	$placeHoldersvoto_presidente["Spanish"]["nulos"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["utilizados"] = "Utilizados";
	$fieldToolTipsvoto_presidente["Spanish"]["utilizados"] = "";
	$placeHoldersvoto_presidente["Spanish"]["utilizados"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["no_utilizados"] = "No Utilizados";
	$fieldToolTipsvoto_presidente["Spanish"]["no_utilizados"] = "";
	$placeHoldersvoto_presidente["Spanish"]["no_utilizados"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["total"] = "Total";
	$fieldToolTipsvoto_presidente["Spanish"]["total"] = "";
	$placeHoldersvoto_presidente["Spanish"]["total"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["usuario"] = "Ingresado Por";
	$fieldToolTipsvoto_presidente["Spanish"]["usuario"] = "";
	$placeHoldersvoto_presidente["Spanish"]["usuario"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["fecha"] = "Fecha de Ingreso";
	$fieldToolTipsvoto_presidente["Spanish"]["fecha"] = "";
	$placeHoldersvoto_presidente["Spanish"]["fecha"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["candidato4"] = "Romeo Vasquez";
	$fieldToolTipsvoto_presidente["Spanish"]["candidato4"] = "";
	$placeHoldersvoto_presidente["Spanish"]["candidato4"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["candidato5"] = "Santos Orellana";
	$fieldToolTipsvoto_presidente["Spanish"]["candidato5"] = "";
	$placeHoldersvoto_presidente["Spanish"]["candidato5"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["candidato6"] = "Jose Coto";
	$fieldToolTipsvoto_presidente["Spanish"]["candidato6"] = "";
	$placeHoldersvoto_presidente["Spanish"]["candidato6"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["candidato7"] = "Xiomara Castro";
	$fieldToolTipsvoto_presidente["Spanish"]["candidato7"] = "";
	$placeHoldersvoto_presidente["Spanish"]["candidato7"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["candidato8"] = "Alexander Mira";
	$fieldToolTipsvoto_presidente["Spanish"]["candidato8"] = "";
	$placeHoldersvoto_presidente["Spanish"]["candidato8"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["candidato9"] = "Lempira Viana";
	$fieldToolTipsvoto_presidente["Spanish"]["candidato9"] = "";
	$placeHoldersvoto_presidente["Spanish"]["candidato9"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["candidato10"] = "Jose Diaz";
	$fieldToolTipsvoto_presidente["Spanish"]["candidato10"] = "";
	$placeHoldersvoto_presidente["Spanish"]["candidato10"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["candidato11"] = "Carlos Portillo";
	$fieldToolTipsvoto_presidente["Spanish"]["candidato11"] = "";
	$placeHoldersvoto_presidente["Spanish"]["candidato11"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["candidato12"] = "Marlon Escoto";
	$fieldToolTipsvoto_presidente["Spanish"]["candidato12"] = "";
	$placeHoldersvoto_presidente["Spanish"]["candidato12"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["candidato13"] = "Milton Avila";
	$fieldToolTipsvoto_presidente["Spanish"]["candidato13"] = "";
	$placeHoldersvoto_presidente["Spanish"]["candidato13"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["candidato14"] = "Yani Rosenthal";
	$fieldToolTipsvoto_presidente["Spanish"]["candidato14"] = "";
	$placeHoldersvoto_presidente["Spanish"]["candidato14"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["editado_por"] = "Editado Por";
	$fieldToolTipsvoto_presidente["Spanish"]["editado_por"] = "";
	$placeHoldersvoto_presidente["Spanish"]["editado_por"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["fecha_edicion"] = "Fecha de Edición";
	$fieldToolTipsvoto_presidente["Spanish"]["fecha_edicion"] = "";
	$placeHoldersvoto_presidente["Spanish"]["fecha_edicion"] = "";
	$fieldLabelsvoto_presidente["Spanish"]["candidato15"] = "Nasry Asfura";
	$fieldToolTipsvoto_presidente["Spanish"]["candidato15"] = "";
	$placeHoldersvoto_presidente["Spanish"]["candidato15"] = "";
	if (count($fieldToolTipsvoto_presidente["Spanish"]))
		$tdatavoto_presidente[".isUseToolTips"] = true;
}


	$tdatavoto_presidente[".NCSearch"] = true;



$tdatavoto_presidente[".shortTableName"] = "voto_presidente";
$tdatavoto_presidente[".nSecOptions"] = 0;

$tdatavoto_presidente[".mainTableOwnerID"] = "";
$tdatavoto_presidente[".entityType"] = 0;
$tdatavoto_presidente[".connId"] = "internas_new_at_localhost";


$tdatavoto_presidente[".strOriginalTableName"] = "voto_presidente";

	



$tdatavoto_presidente[".showAddInPopup"] = false;

$tdatavoto_presidente[".showEditInPopup"] = false;

$tdatavoto_presidente[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavoto_presidente[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavoto_presidente[".listAjax"] = false;
//	temporary
//$tdatavoto_presidente[".listAjax"] = false;

	$tdatavoto_presidente[".audit"] = false;

	$tdatavoto_presidente[".locking"] = false;


$pages = $tdatavoto_presidente[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavoto_presidente[".edit"] = true;
	$tdatavoto_presidente[".afterEditAction"] = 0;
	$tdatavoto_presidente[".closePopupAfterEdit"] = 1;
	$tdatavoto_presidente[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatavoto_presidente[".add"] = true;
$tdatavoto_presidente[".afterAddAction"] = 1;
$tdatavoto_presidente[".closePopupAfterAdd"] = 1;
$tdatavoto_presidente[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatavoto_presidente[".list"] = true;
}



$tdatavoto_presidente[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavoto_presidente[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavoto_presidente[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavoto_presidente[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavoto_presidente[".printFriendly"] = true;
}



$tdatavoto_presidente[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavoto_presidente[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavoto_presidente[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavoto_presidente[".isUseAjaxSuggest"] = true;

$tdatavoto_presidente[".rowHighlite"] = true;





$tdatavoto_presidente[".ajaxCodeSnippetAdded"] = false;

$tdatavoto_presidente[".buttonsAdded"] = false;

$tdatavoto_presidente[".addPageEvents"] = true;

// use timepicker for search panel
$tdatavoto_presidente[".isUseTimeForSearch"] = false;


$tdatavoto_presidente[".badgeColor"] = "2f4f4f";


$tdatavoto_presidente[".allSearchFields"] = array();
$tdatavoto_presidente[".filterFields"] = array();
$tdatavoto_presidente[".requiredSearchFields"] = array();

$tdatavoto_presidente[".googleLikeFields"] = array();
$tdatavoto_presidente[".googleLikeFields"][] = "id_urna";
$tdatavoto_presidente[".googleLikeFields"][] = "candidato1";
$tdatavoto_presidente[".googleLikeFields"][] = "candidato2";
$tdatavoto_presidente[".googleLikeFields"][] = "candidato3";
$tdatavoto_presidente[".googleLikeFields"][] = "candidato4";
$tdatavoto_presidente[".googleLikeFields"][] = "candidato5";
$tdatavoto_presidente[".googleLikeFields"][] = "candidato6";
$tdatavoto_presidente[".googleLikeFields"][] = "candidato7";
$tdatavoto_presidente[".googleLikeFields"][] = "candidato8";
$tdatavoto_presidente[".googleLikeFields"][] = "candidato9";
$tdatavoto_presidente[".googleLikeFields"][] = "candidato10";
$tdatavoto_presidente[".googleLikeFields"][] = "candidato11";
$tdatavoto_presidente[".googleLikeFields"][] = "candidato12";
$tdatavoto_presidente[".googleLikeFields"][] = "candidato13";
$tdatavoto_presidente[".googleLikeFields"][] = "candidato14";
$tdatavoto_presidente[".googleLikeFields"][] = "candidato15";
$tdatavoto_presidente[".googleLikeFields"][] = "validos";
$tdatavoto_presidente[".googleLikeFields"][] = "blancos";
$tdatavoto_presidente[".googleLikeFields"][] = "nulos";
$tdatavoto_presidente[".googleLikeFields"][] = "utilizados";
$tdatavoto_presidente[".googleLikeFields"][] = "no_utilizados";
$tdatavoto_presidente[".googleLikeFields"][] = "total";
$tdatavoto_presidente[".googleLikeFields"][] = "usuario";
$tdatavoto_presidente[".googleLikeFields"][] = "fecha";
$tdatavoto_presidente[".googleLikeFields"][] = "editado_por";
$tdatavoto_presidente[".googleLikeFields"][] = "fecha_edicion";



$tdatavoto_presidente[".tableType"] = "list";

$tdatavoto_presidente[".printerPageOrientation"] = 0;
$tdatavoto_presidente[".nPrinterPageScale"] = 100;

$tdatavoto_presidente[".nPrinterSplitRecords"] = 40;

$tdatavoto_presidente[".geocodingEnabled"] = false;










$tdatavoto_presidente[".pageSize"] = 20;

$tdatavoto_presidente[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavoto_presidente[".strOrderBy"] = $tstrOrderBy;

$tdatavoto_presidente[".orderindexes"] = array();


$tdatavoto_presidente[".sqlHead"] = "SELECT id_urna,  	candidato1,  	candidato2,  	candidato3,  	candidato4,  	candidato5,  	candidato6,  	candidato7,  	candidato8,  	candidato9,  	candidato10,  	candidato11,  	candidato12,  	candidato13,  	candidato14,  	candidato15,  	validos,  	blancos,  	nulos,  	utilizados,  	no_utilizados,  	total,  	usuario,  	fecha,  	editado_por,  	fecha_edicion";
$tdatavoto_presidente[".sqlFrom"] = "FROM voto_presidente";
$tdatavoto_presidente[".sqlWhereExpr"] = "";
$tdatavoto_presidente[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavoto_presidente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavoto_presidente[".arrGroupsPerPage"] = $arrGPP;

$tdatavoto_presidente[".highlightSearchResults"] = true;

$tableKeysvoto_presidente = array();
$tableKeysvoto_presidente[] = "id_urna";
$tdatavoto_presidente[".Keys"] = $tableKeysvoto_presidente;


$tdatavoto_presidente[".hideMobileList"] = array();




//	id_urna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_urna";
	$fdata["GoodName"] = "id_urna";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","id_urna");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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


	$tdatavoto_presidente["id_urna"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "id_urna";
//	candidato1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "candidato1";
	$fdata["GoodName"] = "candidato1";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","candidato1");
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


	$tdatavoto_presidente["candidato1"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "candidato1";
//	candidato2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "candidato2";
	$fdata["GoodName"] = "candidato2";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","candidato2");
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


	$tdatavoto_presidente["candidato2"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "candidato2";
//	candidato3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "candidato3";
	$fdata["GoodName"] = "candidato3";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","candidato3");
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


	$tdatavoto_presidente["candidato3"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "candidato3";
//	candidato4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "candidato4";
	$fdata["GoodName"] = "candidato4";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","candidato4");
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


	$tdatavoto_presidente["candidato4"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "candidato4";
//	candidato5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "candidato5";
	$fdata["GoodName"] = "candidato5";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","candidato5");
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


	$tdatavoto_presidente["candidato5"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "candidato5";
//	candidato6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "candidato6";
	$fdata["GoodName"] = "candidato6";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","candidato6");
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


	$tdatavoto_presidente["candidato6"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "candidato6";
//	candidato7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "candidato7";
	$fdata["GoodName"] = "candidato7";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","candidato7");
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


	$tdatavoto_presidente["candidato7"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "candidato7";
//	candidato8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "candidato8";
	$fdata["GoodName"] = "candidato8";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","candidato8");
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


	$tdatavoto_presidente["candidato8"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "candidato8";
//	candidato9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "candidato9";
	$fdata["GoodName"] = "candidato9";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","candidato9");
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


	$tdatavoto_presidente["candidato9"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "candidato9";
//	candidato10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "candidato10";
	$fdata["GoodName"] = "candidato10";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","candidato10");
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


	$tdatavoto_presidente["candidato10"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "candidato10";
//	candidato11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "candidato11";
	$fdata["GoodName"] = "candidato11";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","candidato11");
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


	$tdatavoto_presidente["candidato11"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "candidato11";
//	candidato12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "candidato12";
	$fdata["GoodName"] = "candidato12";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","candidato12");
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


	$tdatavoto_presidente["candidato12"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "candidato12";
//	candidato13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "candidato13";
	$fdata["GoodName"] = "candidato13";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","candidato13");
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


	$tdatavoto_presidente["candidato13"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "candidato13";
//	candidato14
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "candidato14";
	$fdata["GoodName"] = "candidato14";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","candidato14");
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


	$tdatavoto_presidente["candidato14"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "candidato14";
//	candidato15
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "candidato15";
	$fdata["GoodName"] = "candidato15";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","candidato15");
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


	$tdatavoto_presidente["candidato15"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "candidato15";
//	validos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "validos";
	$fdata["GoodName"] = "validos";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","validos");
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


	$tdatavoto_presidente["validos"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "validos";
//	blancos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "blancos";
	$fdata["GoodName"] = "blancos";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","blancos");
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


	$tdatavoto_presidente["blancos"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "blancos";
//	nulos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "nulos";
	$fdata["GoodName"] = "nulos";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","nulos");
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


	$tdatavoto_presidente["nulos"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "nulos";
//	utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "utilizados";
	$fdata["GoodName"] = "utilizados";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","utilizados");
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


	$tdatavoto_presidente["utilizados"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "utilizados";
//	no_utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "no_utilizados";
	$fdata["GoodName"] = "no_utilizados";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","no_utilizados");
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


	$tdatavoto_presidente["no_utilizados"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "no_utilizados";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","total");
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


	$tdatavoto_presidente["total"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "total";
//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","usuario");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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


	$tdatavoto_presidente["usuario"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "usuario";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","fecha");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatavoto_presidente["fecha"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "fecha";
//	editado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "editado_por";
	$fdata["GoodName"] = "editado_por";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","editado_por");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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
	
		$edata["autoUpdatable"] = true;

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


	$tdatavoto_presidente["editado_por"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "editado_por";
//	fecha_edicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "fecha_edicion";
	$fdata["GoodName"] = "fecha_edicion";
	$fdata["ownerTable"] = "voto_presidente";
	$fdata["Label"] = GetFieldLabel("voto_presidente","fecha_edicion");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "fecha_edicion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_edicion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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
							
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatavoto_presidente["fecha_edicion"] = $fdata;
		$tdatavoto_presidente[".searchableFields"][] = "fecha_edicion";


$tables_data["voto_presidente"]=&$tdatavoto_presidente;
$field_labels["voto_presidente"] = &$fieldLabelsvoto_presidente;
$fieldToolTips["voto_presidente"] = &$fieldToolTipsvoto_presidente;
$placeHolders["voto_presidente"] = &$placeHoldersvoto_presidente;
$page_titles["voto_presidente"] = &$pageTitlesvoto_presidente;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["voto_presidente"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["voto_presidente"] = array();



	
				$strOriginalDetailsTable="urna";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="urna";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "urna";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["voto_presidente"][0] = $masterParams;
				$masterTablesData["voto_presidente"][0]["masterKeys"] = array();
	$masterTablesData["voto_presidente"][0]["masterKeys"][]="id_urna";
				$masterTablesData["voto_presidente"][0]["detailKeys"] = array();
	$masterTablesData["voto_presidente"][0]["detailKeys"][]="id_urna";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_voto_presidente()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_urna,  	candidato1,  	candidato2,  	candidato3,  	candidato4,  	candidato5,  	candidato6,  	candidato7,  	candidato8,  	candidato9,  	candidato10,  	candidato11,  	candidato12,  	candidato13,  	candidato14,  	candidato15,  	validos,  	blancos,  	nulos,  	utilizados,  	no_utilizados,  	total,  	usuario,  	fecha,  	editado_por,  	fecha_edicion";
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
	"m_strName" => "id_urna",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto6["m_sql"] = "id_urna";
$proto6["m_srcTableName"] = "voto_presidente";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato1",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto8["m_sql"] = "candidato1";
$proto8["m_srcTableName"] = "voto_presidente";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato2",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto10["m_sql"] = "candidato2";
$proto10["m_srcTableName"] = "voto_presidente";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato3",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto12["m_sql"] = "candidato3";
$proto12["m_srcTableName"] = "voto_presidente";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato4",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto14["m_sql"] = "candidato4";
$proto14["m_srcTableName"] = "voto_presidente";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato5",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto16["m_sql"] = "candidato5";
$proto16["m_srcTableName"] = "voto_presidente";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato6",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto18["m_sql"] = "candidato6";
$proto18["m_srcTableName"] = "voto_presidente";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato7",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto20["m_sql"] = "candidato7";
$proto20["m_srcTableName"] = "voto_presidente";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato8",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto22["m_sql"] = "candidato8";
$proto22["m_srcTableName"] = "voto_presidente";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato9",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto24["m_sql"] = "candidato9";
$proto24["m_srcTableName"] = "voto_presidente";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato10",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto26["m_sql"] = "candidato10";
$proto26["m_srcTableName"] = "voto_presidente";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato11",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto28["m_sql"] = "candidato11";
$proto28["m_srcTableName"] = "voto_presidente";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato12",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto30["m_sql"] = "candidato12";
$proto30["m_srcTableName"] = "voto_presidente";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato13",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto32["m_sql"] = "candidato13";
$proto32["m_srcTableName"] = "voto_presidente";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato14",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto34["m_sql"] = "candidato14";
$proto34["m_srcTableName"] = "voto_presidente";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato15",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto36["m_sql"] = "candidato15";
$proto36["m_srcTableName"] = "voto_presidente";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "validos",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto38["m_sql"] = "validos";
$proto38["m_srcTableName"] = "voto_presidente";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "blancos",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto40["m_sql"] = "blancos";
$proto40["m_srcTableName"] = "voto_presidente";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "nulos",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto42["m_sql"] = "nulos";
$proto42["m_srcTableName"] = "voto_presidente";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "utilizados",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto44["m_sql"] = "utilizados";
$proto44["m_srcTableName"] = "voto_presidente";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "no_utilizados",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto46["m_sql"] = "no_utilizados";
$proto46["m_srcTableName"] = "voto_presidente";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto48["m_sql"] = "total";
$proto48["m_srcTableName"] = "voto_presidente";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto50["m_sql"] = "usuario";
$proto50["m_srcTableName"] = "voto_presidente";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto52["m_sql"] = "fecha";
$proto52["m_srcTableName"] = "voto_presidente";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "editado_por",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto54["m_sql"] = "editado_por";
$proto54["m_srcTableName"] = "voto_presidente";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_edicion",
	"m_strTable" => "voto_presidente",
	"m_srcTableName" => "voto_presidente"
));

$proto56["m_sql"] = "fecha_edicion";
$proto56["m_srcTableName"] = "voto_presidente";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "voto_presidente";
$proto59["m_srcTableName"] = "voto_presidente";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "elecciones";
$proto59["m_columns"][] = "id_urna";
$proto59["m_columns"][] = "candidato1";
$proto59["m_columns"][] = "candidato2";
$proto59["m_columns"][] = "candidato3";
$proto59["m_columns"][] = "candidato4";
$proto59["m_columns"][] = "candidato5";
$proto59["m_columns"][] = "candidato6";
$proto59["m_columns"][] = "candidato7";
$proto59["m_columns"][] = "candidato8";
$proto59["m_columns"][] = "candidato9";
$proto59["m_columns"][] = "candidato10";
$proto59["m_columns"][] = "candidato11";
$proto59["m_columns"][] = "candidato12";
$proto59["m_columns"][] = "candidato13";
$proto59["m_columns"][] = "candidato14";
$proto59["m_columns"][] = "candidato15";
$proto59["m_columns"][] = "validos";
$proto59["m_columns"][] = "blancos";
$proto59["m_columns"][] = "nulos";
$proto59["m_columns"][] = "utilizados";
$proto59["m_columns"][] = "no_utilizados";
$proto59["m_columns"][] = "total";
$proto59["m_columns"][] = "usuario";
$proto59["m_columns"][] = "fecha";
$proto59["m_columns"][] = "editado_por";
$proto59["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "voto_presidente";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "voto_presidente";
$proto60=array();
$proto60["m_sql"] = "";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="voto_presidente";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_voto_presidente = createSqlQuery_voto_presidente();


	
		;

																										

$tdatavoto_presidente[".sqlquery"] = $queryData_voto_presidente;



include_once(getabspath("include/voto_presidente_events.php"));
$tableEvents["voto_presidente"] = new eventclass_voto_presidente;
$tdatavoto_presidente[".hasEvents"] = true;

?>