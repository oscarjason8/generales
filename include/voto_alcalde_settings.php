<?php
$tdatavoto_alcalde = array();
$tdatavoto_alcalde[".searchableFields"] = array();
$tdatavoto_alcalde[".ShortName"] = "voto_alcalde";
$tdatavoto_alcalde[".OwnerID"] = "";
$tdatavoto_alcalde[".OriginalTable"] = "voto_alcalde";


$tdatavoto_alcalde[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavoto_alcalde[".originalPagesByType"] = $tdatavoto_alcalde[".pagesByType"];
$tdatavoto_alcalde[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavoto_alcalde[".originalPages"] = $tdatavoto_alcalde[".pages"];
$tdatavoto_alcalde[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavoto_alcalde[".originalDefaultPages"] = $tdatavoto_alcalde[".defaultPages"];

//	field labels
$fieldLabelsvoto_alcalde = array();
$fieldToolTipsvoto_alcalde = array();
$pageTitlesvoto_alcalde = array();
$placeHoldersvoto_alcalde = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvoto_alcalde["Spanish"] = array();
	$fieldToolTipsvoto_alcalde["Spanish"] = array();
	$placeHoldersvoto_alcalde["Spanish"] = array();
	$pageTitlesvoto_alcalde["Spanish"] = array();
	$fieldLabelsvoto_alcalde["Spanish"]["id_urna"] = "Urna";
	$fieldToolTipsvoto_alcalde["Spanish"]["id_urna"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["id_urna"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["candidato1"] = "Wilson Cerrato";
	$fieldToolTipsvoto_alcalde["Spanish"]["candidato1"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["candidato1"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["candidato2"] = "FAPER";
	$fieldToolTipsvoto_alcalde["Spanish"]["candidato2"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["candidato2"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["candidato3"] = "Nueva Ruta";
	$fieldToolTipsvoto_alcalde["Spanish"]["candidato3"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["candidato3"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["validos"] = "Validos";
	$fieldToolTipsvoto_alcalde["Spanish"]["validos"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["validos"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["blancos"] = "En Blanco";
	$fieldToolTipsvoto_alcalde["Spanish"]["blancos"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["blancos"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["nulos"] = "Nulos";
	$fieldToolTipsvoto_alcalde["Spanish"]["nulos"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["nulos"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["utilizados"] = "Utilizados";
	$fieldToolTipsvoto_alcalde["Spanish"]["utilizados"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["utilizados"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["no_utilizados"] = "No Utilizados";
	$fieldToolTipsvoto_alcalde["Spanish"]["no_utilizados"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["no_utilizados"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["total"] = "Total";
	$fieldToolTipsvoto_alcalde["Spanish"]["total"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["total"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["usuario"] = "Ingresado Por";
	$fieldToolTipsvoto_alcalde["Spanish"]["usuario"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["usuario"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["fecha"] = "Fecha de Ingreso";
	$fieldToolTipsvoto_alcalde["Spanish"]["fecha"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["fecha"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["candidato4"] = "Ronald Rivera";
	$fieldToolTipsvoto_alcalde["Spanish"]["candidato4"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["candidato4"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["candidato5"] = "Wendy Revelo";
	$fieldToolTipsvoto_alcalde["Spanish"]["candidato5"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["candidato5"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["candidato6"] = "Boris de Romano";
	$fieldToolTipsvoto_alcalde["Spanish"]["candidato6"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["candidato6"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["candidato7"] = "Julio Henderson";
	$fieldToolTipsvoto_alcalde["Spanish"]["candidato7"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["candidato7"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["candidato8"] = "Anibal Nuñez";
	$fieldToolTipsvoto_alcalde["Spanish"]["candidato8"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["candidato8"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["candidato9"] = "Ingris Martinez";
	$fieldToolTipsvoto_alcalde["Spanish"]["candidato9"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["candidato9"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["candidato10"] = "Maria Luisa Martell";
	$fieldToolTipsvoto_alcalde["Spanish"]["candidato10"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["candidato10"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["candidato11"] = "Elmer Guerrero";
	$fieldToolTipsvoto_alcalde["Spanish"]["candidato11"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["candidato11"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["candidato12"] = "Tatiana Perez";
	$fieldToolTipsvoto_alcalde["Spanish"]["candidato12"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["candidato12"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["editado_por"] = "Editado Por";
	$fieldToolTipsvoto_alcalde["Spanish"]["editado_por"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["editado_por"] = "";
	$fieldLabelsvoto_alcalde["Spanish"]["fecha_edicion"] = "Fecha de Edición";
	$fieldToolTipsvoto_alcalde["Spanish"]["fecha_edicion"] = "";
	$placeHoldersvoto_alcalde["Spanish"]["fecha_edicion"] = "";
	if (count($fieldToolTipsvoto_alcalde["Spanish"]))
		$tdatavoto_alcalde[".isUseToolTips"] = true;
}


	$tdatavoto_alcalde[".NCSearch"] = true;



$tdatavoto_alcalde[".shortTableName"] = "voto_alcalde";
$tdatavoto_alcalde[".nSecOptions"] = 0;

$tdatavoto_alcalde[".mainTableOwnerID"] = "";
$tdatavoto_alcalde[".entityType"] = 0;
$tdatavoto_alcalde[".connId"] = "internas_new_at_localhost";


$tdatavoto_alcalde[".strOriginalTableName"] = "voto_alcalde";

	



$tdatavoto_alcalde[".showAddInPopup"] = false;

$tdatavoto_alcalde[".showEditInPopup"] = false;

$tdatavoto_alcalde[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavoto_alcalde[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavoto_alcalde[".listAjax"] = false;
//	temporary
//$tdatavoto_alcalde[".listAjax"] = false;

	$tdatavoto_alcalde[".audit"] = false;

	$tdatavoto_alcalde[".locking"] = false;


$pages = $tdatavoto_alcalde[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavoto_alcalde[".edit"] = true;
	$tdatavoto_alcalde[".afterEditAction"] = 0;
	$tdatavoto_alcalde[".closePopupAfterEdit"] = 1;
	$tdatavoto_alcalde[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatavoto_alcalde[".add"] = true;
$tdatavoto_alcalde[".afterAddAction"] = 1;
$tdatavoto_alcalde[".closePopupAfterAdd"] = 1;
$tdatavoto_alcalde[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavoto_alcalde[".list"] = true;
}



$tdatavoto_alcalde[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavoto_alcalde[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavoto_alcalde[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavoto_alcalde[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavoto_alcalde[".printFriendly"] = true;
}



$tdatavoto_alcalde[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavoto_alcalde[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavoto_alcalde[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavoto_alcalde[".isUseAjaxSuggest"] = true;

$tdatavoto_alcalde[".rowHighlite"] = true;





$tdatavoto_alcalde[".ajaxCodeSnippetAdded"] = false;

$tdatavoto_alcalde[".buttonsAdded"] = false;

$tdatavoto_alcalde[".addPageEvents"] = true;

// use timepicker for search panel
$tdatavoto_alcalde[".isUseTimeForSearch"] = false;


$tdatavoto_alcalde[".badgeColor"] = "daa520";


$tdatavoto_alcalde[".allSearchFields"] = array();
$tdatavoto_alcalde[".filterFields"] = array();
$tdatavoto_alcalde[".requiredSearchFields"] = array();

$tdatavoto_alcalde[".googleLikeFields"] = array();
$tdatavoto_alcalde[".googleLikeFields"][] = "id_urna";
$tdatavoto_alcalde[".googleLikeFields"][] = "candidato1";
$tdatavoto_alcalde[".googleLikeFields"][] = "candidato2";
$tdatavoto_alcalde[".googleLikeFields"][] = "candidato3";
$tdatavoto_alcalde[".googleLikeFields"][] = "candidato4";
$tdatavoto_alcalde[".googleLikeFields"][] = "candidato5";
$tdatavoto_alcalde[".googleLikeFields"][] = "candidato6";
$tdatavoto_alcalde[".googleLikeFields"][] = "candidato7";
$tdatavoto_alcalde[".googleLikeFields"][] = "candidato8";
$tdatavoto_alcalde[".googleLikeFields"][] = "candidato9";
$tdatavoto_alcalde[".googleLikeFields"][] = "candidato10";
$tdatavoto_alcalde[".googleLikeFields"][] = "candidato11";
$tdatavoto_alcalde[".googleLikeFields"][] = "candidato12";
$tdatavoto_alcalde[".googleLikeFields"][] = "validos";
$tdatavoto_alcalde[".googleLikeFields"][] = "blancos";
$tdatavoto_alcalde[".googleLikeFields"][] = "nulos";
$tdatavoto_alcalde[".googleLikeFields"][] = "utilizados";
$tdatavoto_alcalde[".googleLikeFields"][] = "no_utilizados";
$tdatavoto_alcalde[".googleLikeFields"][] = "total";
$tdatavoto_alcalde[".googleLikeFields"][] = "usuario";
$tdatavoto_alcalde[".googleLikeFields"][] = "fecha";
$tdatavoto_alcalde[".googleLikeFields"][] = "editado_por";
$tdatavoto_alcalde[".googleLikeFields"][] = "fecha_edicion";



$tdatavoto_alcalde[".tableType"] = "list";

$tdatavoto_alcalde[".printerPageOrientation"] = 0;
$tdatavoto_alcalde[".nPrinterPageScale"] = 100;

$tdatavoto_alcalde[".nPrinterSplitRecords"] = 40;

$tdatavoto_alcalde[".geocodingEnabled"] = false;










$tdatavoto_alcalde[".pageSize"] = 20;

$tdatavoto_alcalde[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavoto_alcalde[".strOrderBy"] = $tstrOrderBy;

$tdatavoto_alcalde[".orderindexes"] = array();


$tdatavoto_alcalde[".sqlHead"] = "SELECT id_urna,  	candidato1,  	candidato2,  	candidato3,  	candidato4,  	candidato5,  	candidato6,  	candidato7,  	candidato8,  	candidato9,  	candidato10,  	candidato11,  	candidato12,  	validos,  	blancos,  	nulos,  	utilizados,  	no_utilizados,  	total,  	usuario,  	fecha,  	editado_por,  	fecha_edicion";
$tdatavoto_alcalde[".sqlFrom"] = "FROM voto_alcalde";
$tdatavoto_alcalde[".sqlWhereExpr"] = "";
$tdatavoto_alcalde[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavoto_alcalde[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavoto_alcalde[".arrGroupsPerPage"] = $arrGPP;

$tdatavoto_alcalde[".highlightSearchResults"] = true;

$tableKeysvoto_alcalde = array();
$tableKeysvoto_alcalde[] = "id_urna";
$tdatavoto_alcalde[".Keys"] = $tableKeysvoto_alcalde;


$tdatavoto_alcalde[".hideMobileList"] = array();




//	id_urna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_urna";
	$fdata["GoodName"] = "id_urna";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","id_urna");
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


	$tdatavoto_alcalde["id_urna"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "id_urna";
//	candidato1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "candidato1";
	$fdata["GoodName"] = "candidato1";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","candidato1");
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


	$tdatavoto_alcalde["candidato1"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "candidato1";
//	candidato2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "candidato2";
	$fdata["GoodName"] = "candidato2";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","candidato2");
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


	$tdatavoto_alcalde["candidato2"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "candidato2";
//	candidato3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "candidato3";
	$fdata["GoodName"] = "candidato3";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","candidato3");
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


	$tdatavoto_alcalde["candidato3"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "candidato3";
//	candidato4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "candidato4";
	$fdata["GoodName"] = "candidato4";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","candidato4");
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


	$tdatavoto_alcalde["candidato4"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "candidato4";
//	candidato5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "candidato5";
	$fdata["GoodName"] = "candidato5";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","candidato5");
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


	$tdatavoto_alcalde["candidato5"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "candidato5";
//	candidato6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "candidato6";
	$fdata["GoodName"] = "candidato6";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","candidato6");
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


	$tdatavoto_alcalde["candidato6"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "candidato6";
//	candidato7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "candidato7";
	$fdata["GoodName"] = "candidato7";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","candidato7");
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


	$tdatavoto_alcalde["candidato7"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "candidato7";
//	candidato8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "candidato8";
	$fdata["GoodName"] = "candidato8";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","candidato8");
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


	$tdatavoto_alcalde["candidato8"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "candidato8";
//	candidato9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "candidato9";
	$fdata["GoodName"] = "candidato9";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","candidato9");
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


	$tdatavoto_alcalde["candidato9"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "candidato9";
//	candidato10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "candidato10";
	$fdata["GoodName"] = "candidato10";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","candidato10");
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


	$tdatavoto_alcalde["candidato10"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "candidato10";
//	candidato11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "candidato11";
	$fdata["GoodName"] = "candidato11";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","candidato11");
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


	$tdatavoto_alcalde["candidato11"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "candidato11";
//	candidato12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "candidato12";
	$fdata["GoodName"] = "candidato12";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","candidato12");
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


	$tdatavoto_alcalde["candidato12"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "candidato12";
//	validos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "validos";
	$fdata["GoodName"] = "validos";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","validos");
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


	$tdatavoto_alcalde["validos"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "validos";
//	blancos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "blancos";
	$fdata["GoodName"] = "blancos";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","blancos");
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


	$tdatavoto_alcalde["blancos"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "blancos";
//	nulos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "nulos";
	$fdata["GoodName"] = "nulos";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","nulos");
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


	$tdatavoto_alcalde["nulos"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "nulos";
//	utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "utilizados";
	$fdata["GoodName"] = "utilizados";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","utilizados");
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


	$tdatavoto_alcalde["utilizados"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "utilizados";
//	no_utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "no_utilizados";
	$fdata["GoodName"] = "no_utilizados";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","no_utilizados");
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


	$tdatavoto_alcalde["no_utilizados"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "no_utilizados";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","total");
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


	$tdatavoto_alcalde["total"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "total";
//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","usuario");
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


	$tdatavoto_alcalde["usuario"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "usuario";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","fecha");
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


	$tdatavoto_alcalde["fecha"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "fecha";
//	editado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "editado_por";
	$fdata["GoodName"] = "editado_por";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","editado_por");
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


	$tdatavoto_alcalde["editado_por"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "editado_por";
//	fecha_edicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "fecha_edicion";
	$fdata["GoodName"] = "fecha_edicion";
	$fdata["ownerTable"] = "voto_alcalde";
	$fdata["Label"] = GetFieldLabel("voto_alcalde","fecha_edicion");
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


	$tdatavoto_alcalde["fecha_edicion"] = $fdata;
		$tdatavoto_alcalde[".searchableFields"][] = "fecha_edicion";


$tables_data["voto_alcalde"]=&$tdatavoto_alcalde;
$field_labels["voto_alcalde"] = &$fieldLabelsvoto_alcalde;
$fieldToolTips["voto_alcalde"] = &$fieldToolTipsvoto_alcalde;
$placeHolders["voto_alcalde"] = &$placeHoldersvoto_alcalde;
$page_titles["voto_alcalde"] = &$pageTitlesvoto_alcalde;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["voto_alcalde"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["voto_alcalde"] = array();



	
				$strOriginalDetailsTable="urna";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="urna";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "urna";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["voto_alcalde"][0] = $masterParams;
				$masterTablesData["voto_alcalde"][0]["masterKeys"] = array();
	$masterTablesData["voto_alcalde"][0]["masterKeys"][]="id_urna";
				$masterTablesData["voto_alcalde"][0]["detailKeys"] = array();
	$masterTablesData["voto_alcalde"][0]["detailKeys"][]="id_urna";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_voto_alcalde()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_urna,  	candidato1,  	candidato2,  	candidato3,  	candidato4,  	candidato5,  	candidato6,  	candidato7,  	candidato8,  	candidato9,  	candidato10,  	candidato11,  	candidato12,  	validos,  	blancos,  	nulos,  	utilizados,  	no_utilizados,  	total,  	usuario,  	fecha,  	editado_por,  	fecha_edicion";
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
	"m_strName" => "id_urna",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto6["m_sql"] = "id_urna";
$proto6["m_srcTableName"] = "voto_alcalde";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato1",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto8["m_sql"] = "candidato1";
$proto8["m_srcTableName"] = "voto_alcalde";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato2",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto10["m_sql"] = "candidato2";
$proto10["m_srcTableName"] = "voto_alcalde";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato3",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto12["m_sql"] = "candidato3";
$proto12["m_srcTableName"] = "voto_alcalde";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato4",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto14["m_sql"] = "candidato4";
$proto14["m_srcTableName"] = "voto_alcalde";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato5",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto16["m_sql"] = "candidato5";
$proto16["m_srcTableName"] = "voto_alcalde";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato6",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto18["m_sql"] = "candidato6";
$proto18["m_srcTableName"] = "voto_alcalde";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato7",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto20["m_sql"] = "candidato7";
$proto20["m_srcTableName"] = "voto_alcalde";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato8",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto22["m_sql"] = "candidato8";
$proto22["m_srcTableName"] = "voto_alcalde";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato9",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto24["m_sql"] = "candidato9";
$proto24["m_srcTableName"] = "voto_alcalde";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato10",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto26["m_sql"] = "candidato10";
$proto26["m_srcTableName"] = "voto_alcalde";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato11",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto28["m_sql"] = "candidato11";
$proto28["m_srcTableName"] = "voto_alcalde";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "candidato12",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto30["m_sql"] = "candidato12";
$proto30["m_srcTableName"] = "voto_alcalde";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "validos",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto32["m_sql"] = "validos";
$proto32["m_srcTableName"] = "voto_alcalde";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "blancos",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto34["m_sql"] = "blancos";
$proto34["m_srcTableName"] = "voto_alcalde";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "nulos",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto36["m_sql"] = "nulos";
$proto36["m_srcTableName"] = "voto_alcalde";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "utilizados",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto38["m_sql"] = "utilizados";
$proto38["m_srcTableName"] = "voto_alcalde";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "no_utilizados",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto40["m_sql"] = "no_utilizados";
$proto40["m_srcTableName"] = "voto_alcalde";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto42["m_sql"] = "total";
$proto42["m_srcTableName"] = "voto_alcalde";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto44["m_sql"] = "usuario";
$proto44["m_srcTableName"] = "voto_alcalde";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto46["m_sql"] = "fecha";
$proto46["m_srcTableName"] = "voto_alcalde";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "editado_por",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto48["m_sql"] = "editado_por";
$proto48["m_srcTableName"] = "voto_alcalde";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_edicion",
	"m_strTable" => "voto_alcalde",
	"m_srcTableName" => "voto_alcalde"
));

$proto50["m_sql"] = "fecha_edicion";
$proto50["m_srcTableName"] = "voto_alcalde";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "voto_alcalde";
$proto53["m_srcTableName"] = "voto_alcalde";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "elecciones";
$proto53["m_columns"][] = "id_urna";
$proto53["m_columns"][] = "candidato1";
$proto53["m_columns"][] = "candidato2";
$proto53["m_columns"][] = "candidato3";
$proto53["m_columns"][] = "candidato4";
$proto53["m_columns"][] = "candidato5";
$proto53["m_columns"][] = "candidato6";
$proto53["m_columns"][] = "candidato7";
$proto53["m_columns"][] = "candidato8";
$proto53["m_columns"][] = "candidato9";
$proto53["m_columns"][] = "candidato10";
$proto53["m_columns"][] = "candidato11";
$proto53["m_columns"][] = "candidato12";
$proto53["m_columns"][] = "validos";
$proto53["m_columns"][] = "blancos";
$proto53["m_columns"][] = "nulos";
$proto53["m_columns"][] = "utilizados";
$proto53["m_columns"][] = "no_utilizados";
$proto53["m_columns"][] = "total";
$proto53["m_columns"][] = "usuario";
$proto53["m_columns"][] = "fecha";
$proto53["m_columns"][] = "editado_por";
$proto53["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "voto_alcalde";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "voto_alcalde";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="voto_alcalde";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_voto_alcalde = createSqlQuery_voto_alcalde();


	
		;

																							

$tdatavoto_alcalde[".sqlquery"] = $queryData_voto_alcalde;



include_once(getabspath("include/voto_alcalde_events.php"));
$tableEvents["voto_alcalde"] = new eventclass_voto_alcalde;
$tdatavoto_alcalde[".hasEvents"] = true;

?>