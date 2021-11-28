<?php
$tdataactas = array();
$tdataactas[".searchableFields"] = array();
$tdataactas[".ShortName"] = "actas";
$tdataactas[".OwnerID"] = "";
$tdataactas[".OriginalTable"] = "actas";


$tdataactas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataactas[".originalPagesByType"] = $tdataactas[".pagesByType"];
$tdataactas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataactas[".originalPages"] = $tdataactas[".pages"];
$tdataactas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataactas[".originalDefaultPages"] = $tdataactas[".defaultPages"];

//	field labels
$fieldLabelsactas = array();
$fieldToolTipsactas = array();
$pageTitlesactas = array();
$placeHoldersactas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsactas["Spanish"] = array();
	$fieldToolTipsactas["Spanish"] = array();
	$placeHoldersactas["Spanish"] = array();
	$pageTitlesactas["Spanish"] = array();
	$fieldLabelsactas["Spanish"]["id_urna"] = "Urna";
	$fieldToolTipsactas["Spanish"]["id_urna"] = "";
	$placeHoldersactas["Spanish"]["id_urna"] = "";
	$fieldLabelsactas["Spanish"]["presidente"] = "Presidente";
	$fieldToolTipsactas["Spanish"]["presidente"] = "";
	$placeHoldersactas["Spanish"]["presidente"] = "";
	$fieldLabelsactas["Spanish"]["diputado"] = "Diputado";
	$fieldToolTipsactas["Spanish"]["diputado"] = "";
	$placeHoldersactas["Spanish"]["diputado"] = "";
	$fieldLabelsactas["Spanish"]["alcalde"] = "Alcalde";
	$fieldToolTipsactas["Spanish"]["alcalde"] = "";
	$placeHoldersactas["Spanish"]["alcalde"] = "";
	$fieldLabelsactas["Spanish"]["ingresado_por"] = "Ingresado Por";
	$fieldToolTipsactas["Spanish"]["ingresado_por"] = "";
	$placeHoldersactas["Spanish"]["ingresado_por"] = "";
	$fieldLabelsactas["Spanish"]["fecha_ingreso"] = "Fechade Ingreso";
	$fieldToolTipsactas["Spanish"]["fecha_ingreso"] = "";
	$placeHoldersactas["Spanish"]["fecha_ingreso"] = "";
	$fieldLabelsactas["Spanish"]["editado_por"] = "Editado Por";
	$fieldToolTipsactas["Spanish"]["editado_por"] = "";
	$placeHoldersactas["Spanish"]["editado_por"] = "";
	$fieldLabelsactas["Spanish"]["fecha_edicion"] = "Fecha de Edición";
	$fieldToolTipsactas["Spanish"]["fecha_edicion"] = "";
	$placeHoldersactas["Spanish"]["fecha_edicion"] = "";
	if (count($fieldToolTipsactas["Spanish"]))
		$tdataactas[".isUseToolTips"] = true;
}


	$tdataactas[".NCSearch"] = true;



$tdataactas[".shortTableName"] = "actas";
$tdataactas[".nSecOptions"] = 0;

$tdataactas[".mainTableOwnerID"] = "";
$tdataactas[".entityType"] = 0;
$tdataactas[".connId"] = "internas_new_at_localhost";


$tdataactas[".strOriginalTableName"] = "actas";

	



$tdataactas[".showAddInPopup"] = false;

$tdataactas[".showEditInPopup"] = false;

$tdataactas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataactas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataactas[".listAjax"] = false;
//	temporary
//$tdataactas[".listAjax"] = false;

	$tdataactas[".audit"] = false;

	$tdataactas[".locking"] = false;


$pages = $tdataactas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataactas[".edit"] = true;
	$tdataactas[".afterEditAction"] = 1;
	$tdataactas[".closePopupAfterEdit"] = 1;
	$tdataactas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataactas[".add"] = true;
$tdataactas[".afterAddAction"] = 1;
$tdataactas[".closePopupAfterAdd"] = 1;
$tdataactas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataactas[".list"] = true;
}



$tdataactas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataactas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataactas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataactas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataactas[".printFriendly"] = true;
}



$tdataactas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataactas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataactas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataactas[".isUseAjaxSuggest"] = true;

$tdataactas[".rowHighlite"] = true;





$tdataactas[".ajaxCodeSnippetAdded"] = false;

$tdataactas[".buttonsAdded"] = false;

$tdataactas[".addPageEvents"] = true;

// use timepicker for search panel
$tdataactas[".isUseTimeForSearch"] = false;


$tdataactas[".badgeColor"] = "DB7093";


$tdataactas[".allSearchFields"] = array();
$tdataactas[".filterFields"] = array();
$tdataactas[".requiredSearchFields"] = array();

$tdataactas[".googleLikeFields"] = array();
$tdataactas[".googleLikeFields"][] = "id_urna";
$tdataactas[".googleLikeFields"][] = "presidente";
$tdataactas[".googleLikeFields"][] = "diputado";
$tdataactas[".googleLikeFields"][] = "alcalde";
$tdataactas[".googleLikeFields"][] = "ingresado_por";
$tdataactas[".googleLikeFields"][] = "fecha_ingreso";
$tdataactas[".googleLikeFields"][] = "editado_por";
$tdataactas[".googleLikeFields"][] = "fecha_edicion";



$tdataactas[".tableType"] = "list";

$tdataactas[".printerPageOrientation"] = 0;
$tdataactas[".nPrinterPageScale"] = 100;

$tdataactas[".nPrinterSplitRecords"] = 40;

$tdataactas[".geocodingEnabled"] = false;










$tdataactas[".pageSize"] = 20;

$tdataactas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataactas[".strOrderBy"] = $tstrOrderBy;

$tdataactas[".orderindexes"] = array();


$tdataactas[".sqlHead"] = "SELECT id_urna,  	presidente,  	diputado,  	alcalde,  	ingresado_por,  	fecha_ingreso,  	editado_por,  	fecha_edicion";
$tdataactas[".sqlFrom"] = "FROM actas";
$tdataactas[".sqlWhereExpr"] = "";
$tdataactas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataactas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataactas[".arrGroupsPerPage"] = $arrGPP;

$tdataactas[".highlightSearchResults"] = true;

$tableKeysactas = array();
$tableKeysactas[] = "id_urna";
$tdataactas[".Keys"] = $tableKeysactas;


$tdataactas[".hideMobileList"] = array();




//	id_urna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_urna";
	$fdata["GoodName"] = "id_urna";
	$fdata["ownerTable"] = "actas";
	$fdata["Label"] = GetFieldLabel("actas","id_urna");
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


	$tdataactas["id_urna"] = $fdata;
		$tdataactas[".searchableFields"][] = "id_urna";
//	presidente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "presidente";
	$fdata["GoodName"] = "presidente";
	$fdata["ownerTable"] = "actas";
	$fdata["Label"] = GetFieldLabel("actas","presidente");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "presidente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "presidente";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
					$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataactas["presidente"] = $fdata;
		$tdataactas[".searchableFields"][] = "presidente";
//	diputado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "diputado";
	$fdata["GoodName"] = "diputado";
	$fdata["ownerTable"] = "actas";
	$fdata["Label"] = GetFieldLabel("actas","diputado");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "diputado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diputado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
					$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataactas["diputado"] = $fdata;
		$tdataactas[".searchableFields"][] = "diputado";
//	alcalde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "alcalde";
	$fdata["GoodName"] = "alcalde";
	$fdata["ownerTable"] = "actas";
	$fdata["Label"] = GetFieldLabel("actas","alcalde");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "alcalde";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alcalde";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
					$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataactas["alcalde"] = $fdata;
		$tdataactas[".searchableFields"][] = "alcalde";
//	ingresado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ingresado_por";
	$fdata["GoodName"] = "ingresado_por";
	$fdata["ownerTable"] = "actas";
	$fdata["Label"] = GetFieldLabel("actas","ingresado_por");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ingresado_por";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ingresado_por";

	
	
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


	$tdataactas["ingresado_por"] = $fdata;
		$tdataactas[".searchableFields"][] = "ingresado_por";
//	fecha_ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fecha_ingreso";
	$fdata["GoodName"] = "fecha_ingreso";
	$fdata["ownerTable"] = "actas";
	$fdata["Label"] = GetFieldLabel("actas","fecha_ingreso");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "fecha_ingreso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_ingreso";

	
	
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


	$tdataactas["fecha_ingreso"] = $fdata;
		$tdataactas[".searchableFields"][] = "fecha_ingreso";
//	editado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "editado_por";
	$fdata["GoodName"] = "editado_por";
	$fdata["ownerTable"] = "actas";
	$fdata["Label"] = GetFieldLabel("actas","editado_por");
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


	$tdataactas["editado_por"] = $fdata;
		$tdataactas[".searchableFields"][] = "editado_por";
//	fecha_edicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fecha_edicion";
	$fdata["GoodName"] = "fecha_edicion";
	$fdata["ownerTable"] = "actas";
	$fdata["Label"] = GetFieldLabel("actas","fecha_edicion");
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


	$tdataactas["fecha_edicion"] = $fdata;
		$tdataactas[".searchableFields"][] = "fecha_edicion";


$tables_data["actas"]=&$tdataactas;
$field_labels["actas"] = &$fieldLabelsactas;
$fieldToolTips["actas"] = &$fieldToolTipsactas;
$placeHolders["actas"] = &$placeHoldersactas;
$page_titles["actas"] = &$pageTitlesactas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["actas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["actas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_actas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_urna,  	presidente,  	diputado,  	alcalde,  	ingresado_por,  	fecha_ingreso,  	editado_por,  	fecha_edicion";
$proto0["m_strFrom"] = "FROM actas";
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
	"m_strTable" => "actas",
	"m_srcTableName" => "actas"
));

$proto6["m_sql"] = "id_urna";
$proto6["m_srcTableName"] = "actas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "presidente",
	"m_strTable" => "actas",
	"m_srcTableName" => "actas"
));

$proto8["m_sql"] = "presidente";
$proto8["m_srcTableName"] = "actas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "diputado",
	"m_strTable" => "actas",
	"m_srcTableName" => "actas"
));

$proto10["m_sql"] = "diputado";
$proto10["m_srcTableName"] = "actas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "alcalde",
	"m_strTable" => "actas",
	"m_srcTableName" => "actas"
));

$proto12["m_sql"] = "alcalde";
$proto12["m_srcTableName"] = "actas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ingresado_por",
	"m_strTable" => "actas",
	"m_srcTableName" => "actas"
));

$proto14["m_sql"] = "ingresado_por";
$proto14["m_srcTableName"] = "actas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ingreso",
	"m_strTable" => "actas",
	"m_srcTableName" => "actas"
));

$proto16["m_sql"] = "fecha_ingreso";
$proto16["m_srcTableName"] = "actas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "editado_por",
	"m_strTable" => "actas",
	"m_srcTableName" => "actas"
));

$proto18["m_sql"] = "editado_por";
$proto18["m_srcTableName"] = "actas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_edicion",
	"m_strTable" => "actas",
	"m_srcTableName" => "actas"
));

$proto20["m_sql"] = "fecha_edicion";
$proto20["m_srcTableName"] = "actas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "actas";
$proto23["m_srcTableName"] = "actas";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id_urna";
$proto23["m_columns"][] = "presidente";
$proto23["m_columns"][] = "diputado";
$proto23["m_columns"][] = "alcalde";
$proto23["m_columns"][] = "ingresado_por";
$proto23["m_columns"][] = "fecha_ingreso";
$proto23["m_columns"][] = "editado_por";
$proto23["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "actas";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "actas";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="actas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_actas = createSqlQuery_actas();


	
		;

								

$tdataactas[".sqlquery"] = $queryData_actas;



include_once(getabspath("include/actas_events.php"));
$tableEvents["actas"] = new eventclass_actas;
$tdataactas[".hasEvents"] = true;

?>