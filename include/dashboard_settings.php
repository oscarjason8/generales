<?php
require_once(getabspath("classes/cipherer.php"));



$tdatadashboard = array();
$tdatadashboard[".ShortName"] = "dashboard";

$tdatadashboard[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" );
$tdatadashboard[".originalPagesByType"] = $tdatadashboard[".pagesByType"];
$tdatadashboard[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$tdatadashboard[".originalPages"] = $tdatadashboard[".pages"];
$tdatadashboard[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdatadashboard[".originalDefaultPages"] = $tdatadashboard[".defaultPages"];


//	field labels
$fieldLabelsdashboard = array();
$pageTitlesdashboard = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdashboard["Spanish"] = array();
	$fieldLabelsdashboard["Spanish"]["Alcalde_Chart_id_urna"] = "Urna";
	$fieldLabelsdashboard["Spanish"]["Alcalde_Chart_candidato1"] = "Maria Luisa Martell";
	$fieldLabelsdashboard["Spanish"]["Alcalde_Chart_candidato2"] = "Victor Rivera";
	$fieldLabelsdashboard["Spanish"]["Alcalde_Chart_candidato3"] = "Adolfo Canales";
	$fieldLabelsdashboard["Spanish"]["Alcalde_Chart_validos"] = "Votos Validos";
	$fieldLabelsdashboard["Spanish"]["Alcalde_Chart_blancos"] = "Votos En Blanco";
	$fieldLabelsdashboard["Spanish"]["Alcalde_Chart_nulos"] = "Votos Nulos";
	$fieldLabelsdashboard["Spanish"]["Alcalde_Chart_utilizados"] = "Votos Utilizados";
	$fieldLabelsdashboard["Spanish"]["Alcalde_Chart_no_utilizados"] = "Votos No Utilizados";
	$fieldLabelsdashboard["Spanish"]["Alcalde_Chart_total"] = "Total de Votos";
	$fieldLabelsdashboard["Spanish"]["Alcalde_Chart_usuario"] = "Ingresado Por";
	$fieldLabelsdashboard["Spanish"]["Alcalde_Chart_fecha"] = "Fecha de Ingreso";
	$fieldLabelsdashboard["Spanish"]["Presidente_Chart_id_urna"] = "Urna";
	$fieldLabelsdashboard["Spanish"]["Presidente_Chart_candidato1"] = "Yani Rosenthal";
	$fieldLabelsdashboard["Spanish"]["Presidente_Chart_candidato2"] = "Dario Banegas";
	$fieldLabelsdashboard["Spanish"]["Presidente_Chart_candidato3"] = "Luis Zelaya";
	$fieldLabelsdashboard["Spanish"]["Presidente_Chart_validos"] = "Votos Validos";
	$fieldLabelsdashboard["Spanish"]["Presidente_Chart_blancos"] = "Votos En Blanco";
	$fieldLabelsdashboard["Spanish"]["Presidente_Chart_nulos"] = "Votos Nulos";
	$fieldLabelsdashboard["Spanish"]["Presidente_Chart_utilizados"] = "Votos Utilizados";
	$fieldLabelsdashboard["Spanish"]["Presidente_Chart_no_utilizados"] = "Votos No Utilizados";
	$fieldLabelsdashboard["Spanish"]["Presidente_Chart_total"] = "Total de Votos";
	$fieldLabelsdashboard["Spanish"]["Presidente_Chart_usuario"] = "Ingresado Por";
	$fieldLabelsdashboard["Spanish"]["Presidente_Chart_fecha"] = "Fecha de Ingreso";
}

//	search fields
$tdatadashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"Alcalde_Chart", "field"=>"id_urna" );
$tdatadashboard[".searchFields"]["Alcalde_Chart_id_urna"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Alcalde_Chart", "field"=>"candidato1" );
$tdatadashboard[".searchFields"]["Alcalde_Chart_candidato1"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Alcalde_Chart", "field"=>"candidato2" );
$tdatadashboard[".searchFields"]["Alcalde_Chart_candidato2"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Alcalde_Chart", "field"=>"candidato3" );
$tdatadashboard[".searchFields"]["Alcalde_Chart_candidato3"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Alcalde_Chart", "field"=>"validos" );
$tdatadashboard[".searchFields"]["Alcalde_Chart_validos"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Alcalde_Chart", "field"=>"blancos" );
$tdatadashboard[".searchFields"]["Alcalde_Chart_blancos"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Alcalde_Chart", "field"=>"nulos" );
$tdatadashboard[".searchFields"]["Alcalde_Chart_nulos"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Alcalde_Chart", "field"=>"utilizados" );
$tdatadashboard[".searchFields"]["Alcalde_Chart_utilizados"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Alcalde_Chart", "field"=>"no_utilizados" );
$tdatadashboard[".searchFields"]["Alcalde_Chart_no_utilizados"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Alcalde_Chart", "field"=>"total" );
$tdatadashboard[".searchFields"]["Alcalde_Chart_total"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Alcalde_Chart", "field"=>"usuario" );
$tdatadashboard[".searchFields"]["Alcalde_Chart_usuario"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Alcalde_Chart", "field"=>"fecha" );
$tdatadashboard[".searchFields"]["Alcalde_Chart_fecha"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Presidente_Chart", "field"=>"id_urna" );
$tdatadashboard[".searchFields"]["Presidente_Chart_id_urna"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Presidente_Chart", "field"=>"candidato1" );
$tdatadashboard[".searchFields"]["Presidente_Chart_candidato1"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Presidente_Chart", "field"=>"candidato2" );
$tdatadashboard[".searchFields"]["Presidente_Chart_candidato2"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Presidente_Chart", "field"=>"candidato3" );
$tdatadashboard[".searchFields"]["Presidente_Chart_candidato3"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Presidente_Chart", "field"=>"validos" );
$tdatadashboard[".searchFields"]["Presidente_Chart_validos"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Presidente_Chart", "field"=>"blancos" );
$tdatadashboard[".searchFields"]["Presidente_Chart_blancos"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Presidente_Chart", "field"=>"nulos" );
$tdatadashboard[".searchFields"]["Presidente_Chart_nulos"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Presidente_Chart", "field"=>"utilizados" );
$tdatadashboard[".searchFields"]["Presidente_Chart_utilizados"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Presidente_Chart", "field"=>"no_utilizados" );
$tdatadashboard[".searchFields"]["Presidente_Chart_no_utilizados"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Presidente_Chart", "field"=>"total" );
$tdatadashboard[".searchFields"]["Presidente_Chart_total"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Presidente_Chart", "field"=>"usuario" );
$tdatadashboard[".searchFields"]["Presidente_Chart_usuario"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Presidente_Chart", "field"=>"fecha" );
$tdatadashboard[".searchFields"]["Presidente_Chart_fecha"] = $dashField;

// all search fields
$tdatadashboard[".allSearchFields"] = array();
$tdatadashboard[".allSearchFields"][] = "Alcalde_Chart_id_urna";
$tdatadashboard[".allSearchFields"][] = "Alcalde_Chart_candidato1";
$tdatadashboard[".allSearchFields"][] = "Alcalde_Chart_candidato2";
$tdatadashboard[".allSearchFields"][] = "Alcalde_Chart_candidato3";
$tdatadashboard[".allSearchFields"][] = "Alcalde_Chart_validos";
$tdatadashboard[".allSearchFields"][] = "Alcalde_Chart_blancos";
$tdatadashboard[".allSearchFields"][] = "Alcalde_Chart_nulos";
$tdatadashboard[".allSearchFields"][] = "Alcalde_Chart_utilizados";
$tdatadashboard[".allSearchFields"][] = "Alcalde_Chart_no_utilizados";
$tdatadashboard[".allSearchFields"][] = "Alcalde_Chart_total";
$tdatadashboard[".allSearchFields"][] = "Alcalde_Chart_usuario";
$tdatadashboard[".allSearchFields"][] = "Alcalde_Chart_fecha";
$tdatadashboard[".allSearchFields"][] = "Presidente_Chart_id_urna";
$tdatadashboard[".allSearchFields"][] = "Presidente_Chart_candidato1";
$tdatadashboard[".allSearchFields"][] = "Presidente_Chart_candidato2";
$tdatadashboard[".allSearchFields"][] = "Presidente_Chart_candidato3";
$tdatadashboard[".allSearchFields"][] = "Presidente_Chart_validos";
$tdatadashboard[".allSearchFields"][] = "Presidente_Chart_blancos";
$tdatadashboard[".allSearchFields"][] = "Presidente_Chart_nulos";
$tdatadashboard[".allSearchFields"][] = "Presidente_Chart_utilizados";
$tdatadashboard[".allSearchFields"][] = "Presidente_Chart_no_utilizados";
$tdatadashboard[".allSearchFields"][] = "Presidente_Chart_total";
$tdatadashboard[".allSearchFields"][] = "Presidente_Chart_usuario";
$tdatadashboard[".allSearchFields"][] = "Presidente_Chart_fecha";

// good like search fields
$tdatadashboard[".googleLikeFields"] = array();
$tdatadashboard[".googleLikeFields"][] = "Alcalde_Chart_id_urna";
$tdatadashboard[".googleLikeFields"][] = "Alcalde_Chart_candidato1";
$tdatadashboard[".googleLikeFields"][] = "Alcalde_Chart_candidato2";
$tdatadashboard[".googleLikeFields"][] = "Alcalde_Chart_candidato3";
$tdatadashboard[".googleLikeFields"][] = "Alcalde_Chart_validos";
$tdatadashboard[".googleLikeFields"][] = "Alcalde_Chart_blancos";
$tdatadashboard[".googleLikeFields"][] = "Alcalde_Chart_nulos";
$tdatadashboard[".googleLikeFields"][] = "Alcalde_Chart_utilizados";
$tdatadashboard[".googleLikeFields"][] = "Alcalde_Chart_no_utilizados";
$tdatadashboard[".googleLikeFields"][] = "Alcalde_Chart_total";
$tdatadashboard[".googleLikeFields"][] = "Alcalde_Chart_usuario";
$tdatadashboard[".googleLikeFields"][] = "Alcalde_Chart_fecha";
$tdatadashboard[".googleLikeFields"][] = "Presidente_Chart_id_urna";
$tdatadashboard[".googleLikeFields"][] = "Presidente_Chart_candidato1";
$tdatadashboard[".googleLikeFields"][] = "Presidente_Chart_candidato2";
$tdatadashboard[".googleLikeFields"][] = "Presidente_Chart_candidato3";
$tdatadashboard[".googleLikeFields"][] = "Presidente_Chart_validos";
$tdatadashboard[".googleLikeFields"][] = "Presidente_Chart_blancos";
$tdatadashboard[".googleLikeFields"][] = "Presidente_Chart_nulos";
$tdatadashboard[".googleLikeFields"][] = "Presidente_Chart_utilizados";
$tdatadashboard[".googleLikeFields"][] = "Presidente_Chart_no_utilizados";
$tdatadashboard[".googleLikeFields"][] = "Presidente_Chart_total";
$tdatadashboard[".googleLikeFields"][] = "Presidente_Chart_usuario";
$tdatadashboard[".googleLikeFields"][] = "Presidente_Chart_fecha";

$tdatadashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "alcalde_chart_chart", "table" => "Alcalde_Chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "cell_0_0";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 555;
		$dbelement["height"] = 500;


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "presidente_chart_chart", "table" => "Presidente_Chart",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "cell_0_1";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 555;
		$dbelement["height"] = 500;


	$tdatadashboard[".dashElements"][] = $dbelement;

$tdatadashboard[".shortTableName"] = "dashboard";
$tdatadashboard[".entityType"] = 4;



include_once(getabspath("include/dashboard_events.php"));
$tableEvents["Dashboard"] = new eventclass_dashboard;
$tdatadashboard[".hasEvents"] = true;


$tdatadashboard[".tableType"] = "dashboard";



$tdatadashboard[".addPageEvents"] = false;

$tdatadashboard[".isUseAjaxSuggest"] = true;

$tables_data["Dashboard"]=&$tdatadashboard;
$field_labels["Dashboard"] = &$fieldLabelsdashboard;
$page_titles["Dashboard"] = &$pageTitlesdashboard;

?>