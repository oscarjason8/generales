<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["distritos"] ) ) {
			$lookupTableLinks["distritos"] = array();
		}
		if( !isset( $lookupTableLinks["distritos"]["sectores.id_distrito"] )) {
			$lookupTableLinks["distritos"]["sectores.id_distrito"] = array();
		}
		$lookupTableLinks["distritos"]["sectores.id_distrito"]["edit"] = array("table" => "sectores", "field" => "id_distrito", "page" => "edit");
		if( !isset( $lookupTableLinks["distritos"] ) ) {
			$lookupTableLinks["distritos"] = array();
		}
		if( !isset( $lookupTableLinks["distritos"]["urna.id_distrito"] )) {
			$lookupTableLinks["distritos"]["urna.id_distrito"] = array();
		}
		$lookupTableLinks["distritos"]["urna.id_distrito"]["edit"] = array("table" => "urna", "field" => "id_distrito", "page" => "edit");
		if( !isset( $lookupTableLinks["sectores"] ) ) {
			$lookupTableLinks["sectores"] = array();
		}
		if( !isset( $lookupTableLinks["sectores"]["urna.id_sector"] )) {
			$lookupTableLinks["sectores"]["urna.id_sector"] = array();
		}
		$lookupTableLinks["sectores"]["urna.id_sector"]["edit"] = array("table" => "urna", "field" => "id_sector", "page" => "edit");
		if( !isset( $lookupTableLinks["urna"] ) ) {
			$lookupTableLinks["urna"] = array();
		}
		if( !isset( $lookupTableLinks["urna"]["voto_alcalde.id_urna"] )) {
			$lookupTableLinks["urna"]["voto_alcalde.id_urna"] = array();
		}
		$lookupTableLinks["urna"]["voto_alcalde.id_urna"]["edit"] = array("table" => "voto_alcalde", "field" => "id_urna", "page" => "edit");
		if( !isset( $lookupTableLinks["urna"] ) ) {
			$lookupTableLinks["urna"] = array();
		}
		if( !isset( $lookupTableLinks["urna"]["voto_diputado.id_urna"] )) {
			$lookupTableLinks["urna"]["voto_diputado.id_urna"] = array();
		}
		$lookupTableLinks["urna"]["voto_diputado.id_urna"]["edit"] = array("table" => "voto_diputado", "field" => "id_urna", "page" => "edit");
		if( !isset( $lookupTableLinks["urna"] ) ) {
			$lookupTableLinks["urna"] = array();
		}
		if( !isset( $lookupTableLinks["urna"]["voto_presidente.id_urna"] )) {
			$lookupTableLinks["urna"]["voto_presidente.id_urna"] = array();
		}
		$lookupTableLinks["urna"]["voto_presidente.id_urna"]["edit"] = array("table" => "voto_presidente", "field" => "id_urna", "page" => "edit");
		if( !isset( $lookupTableLinks["urna"] ) ) {
			$lookupTableLinks["urna"] = array();
		}
		if( !isset( $lookupTableLinks["urna"]["alcalde_chart.id_urna"] )) {
			$lookupTableLinks["urna"]["alcalde_chart.id_urna"] = array();
		}
		$lookupTableLinks["urna"]["alcalde_chart.id_urna"]["search"] = array("table" => "Alcalde_Chart", "field" => "id_urna", "page" => "search");
		if( !isset( $lookupTableLinks["urna"] ) ) {
			$lookupTableLinks["urna"] = array();
		}
		if( !isset( $lookupTableLinks["urna"]["presidente_chart.id_urna"] )) {
			$lookupTableLinks["urna"]["presidente_chart.id_urna"] = array();
		}
		$lookupTableLinks["urna"]["presidente_chart.id_urna"]["search"] = array("table" => "Presidente_Chart", "field" => "id_urna", "page" => "search");
		if( !isset( $lookupTableLinks["distritos"] ) ) {
			$lookupTableLinks["distritos"] = array();
		}
		if( !isset( $lookupTableLinks["distritos"]["pres___por_distrito.id_distrito"] )) {
			$lookupTableLinks["distritos"]["pres___por_distrito.id_distrito"] = array();
		}
		$lookupTableLinks["distritos"]["pres___por_distrito.id_distrito"]["search"] = array("table" => "Pres - Por Distrito", "field" => "id_distrito", "page" => "search");
		if( !isset( $lookupTableLinks["distritos"] ) ) {
			$lookupTableLinks["distritos"] = array();
		}
		if( !isset( $lookupTableLinks["distritos"]["pres___por_sector.id_distrito"] )) {
			$lookupTableLinks["distritos"]["pres___por_sector.id_distrito"] = array();
		}
		$lookupTableLinks["distritos"]["pres___por_sector.id_distrito"]["search"] = array("table" => "Pres - Por Sector", "field" => "id_distrito", "page" => "search");
		if( !isset( $lookupTableLinks["sectores"] ) ) {
			$lookupTableLinks["sectores"] = array();
		}
		if( !isset( $lookupTableLinks["sectores"]["pres___por_sector.id_sector"] )) {
			$lookupTableLinks["sectores"]["pres___por_sector.id_sector"] = array();
		}
		$lookupTableLinks["sectores"]["pres___por_sector.id_sector"]["search"] = array("table" => "Pres - Por Sector", "field" => "id_sector", "page" => "search");
		if( !isset( $lookupTableLinks["distritos"] ) ) {
			$lookupTableLinks["distritos"] = array();
		}
		if( !isset( $lookupTableLinks["distritos"]["pres___por_urna.id_distrito"] )) {
			$lookupTableLinks["distritos"]["pres___por_urna.id_distrito"] = array();
		}
		$lookupTableLinks["distritos"]["pres___por_urna.id_distrito"]["search"] = array("table" => "Pres - Por Urna", "field" => "id_distrito", "page" => "search");
		if( !isset( $lookupTableLinks["sectores"] ) ) {
			$lookupTableLinks["sectores"] = array();
		}
		if( !isset( $lookupTableLinks["sectores"]["pres___por_urna.id_sector"] )) {
			$lookupTableLinks["sectores"]["pres___por_urna.id_sector"] = array();
		}
		$lookupTableLinks["sectores"]["pres___por_urna.id_sector"]["search"] = array("table" => "Pres - Por Urna", "field" => "id_sector", "page" => "search");
		if( !isset( $lookupTableLinks["urna"] ) ) {
			$lookupTableLinks["urna"] = array();
		}
		if( !isset( $lookupTableLinks["urna"]["pres___por_urna.id_urna"] )) {
			$lookupTableLinks["urna"]["pres___por_urna.id_urna"] = array();
		}
		$lookupTableLinks["urna"]["pres___por_urna.id_urna"]["search"] = array("table" => "Pres - Por Urna", "field" => "id_urna", "page" => "search");
		if( !isset( $lookupTableLinks["distritos"] ) ) {
			$lookupTableLinks["distritos"] = array();
		}
		if( !isset( $lookupTableLinks["distritos"]["alc___por_distrito.id_distrito"] )) {
			$lookupTableLinks["distritos"]["alc___por_distrito.id_distrito"] = array();
		}
		$lookupTableLinks["distritos"]["alc___por_distrito.id_distrito"]["search"] = array("table" => "Alc - Por Distrito", "field" => "id_distrito", "page" => "search");
		if( !isset( $lookupTableLinks["distritos"] ) ) {
			$lookupTableLinks["distritos"] = array();
		}
		if( !isset( $lookupTableLinks["distritos"]["alc___por_sector.id_distrito"] )) {
			$lookupTableLinks["distritos"]["alc___por_sector.id_distrito"] = array();
		}
		$lookupTableLinks["distritos"]["alc___por_sector.id_distrito"]["search"] = array("table" => "Alc - Por Sector", "field" => "id_distrito", "page" => "search");
		if( !isset( $lookupTableLinks["sectores"] ) ) {
			$lookupTableLinks["sectores"] = array();
		}
		if( !isset( $lookupTableLinks["sectores"]["alc___por_sector.id_sector"] )) {
			$lookupTableLinks["sectores"]["alc___por_sector.id_sector"] = array();
		}
		$lookupTableLinks["sectores"]["alc___por_sector.id_sector"]["search"] = array("table" => "Alc - Por Sector", "field" => "id_sector", "page" => "search");
		if( !isset( $lookupTableLinks["distritos"] ) ) {
			$lookupTableLinks["distritos"] = array();
		}
		if( !isset( $lookupTableLinks["distritos"]["alc___por_urna.id_distrito"] )) {
			$lookupTableLinks["distritos"]["alc___por_urna.id_distrito"] = array();
		}
		$lookupTableLinks["distritos"]["alc___por_urna.id_distrito"]["search"] = array("table" => "Alc - Por Urna", "field" => "id_distrito", "page" => "search");
		if( !isset( $lookupTableLinks["sectores"] ) ) {
			$lookupTableLinks["sectores"] = array();
		}
		if( !isset( $lookupTableLinks["sectores"]["alc___por_urna.id_sector"] )) {
			$lookupTableLinks["sectores"]["alc___por_urna.id_sector"] = array();
		}
		$lookupTableLinks["sectores"]["alc___por_urna.id_sector"]["search"] = array("table" => "Alc - Por Urna", "field" => "id_sector", "page" => "search");
		if( !isset( $lookupTableLinks["urna"] ) ) {
			$lookupTableLinks["urna"] = array();
		}
		if( !isset( $lookupTableLinks["urna"]["alc___por_urna.id_urna"] )) {
			$lookupTableLinks["urna"]["alc___por_urna.id_urna"] = array();
		}
		$lookupTableLinks["urna"]["alc___por_urna.id_urna"]["search"] = array("table" => "Alc - Por Urna", "field" => "id_urna", "page" => "search");
		if( !isset( $lookupTableLinks["partido"] ) ) {
			$lookupTableLinks["partido"] = array();
		}
		if( !isset( $lookupTableLinks["partido"]["corporacion.id_partido"] )) {
			$lookupTableLinks["partido"]["corporacion.id_partido"] = array();
		}
		$lookupTableLinks["partido"]["corporacion.id_partido"]["edit"] = array("table" => "corporacion", "field" => "id_partido", "page" => "edit");
		if( !isset( $lookupTableLinks["partido"] ) ) {
			$lookupTableLinks["partido"] = array();
		}
		if( !isset( $lookupTableLinks["partido"]["candidatos.id_partido"] )) {
			$lookupTableLinks["partido"]["candidatos.id_partido"] = array();
		}
		$lookupTableLinks["partido"]["candidatos.id_partido"]["edit"] = array("table" => "candidatos", "field" => "id_partido", "page" => "edit");
		if( !isset( $lookupTableLinks["distritos"] ) ) {
			$lookupTableLinks["distritos"] = array();
		}
		if( !isset( $lookupTableLinks["distritos"]["urnas___pendientes.id_distrito"] )) {
			$lookupTableLinks["distritos"]["urnas___pendientes.id_distrito"] = array();
		}
		$lookupTableLinks["distritos"]["urnas___pendientes.id_distrito"]["search"] = array("table" => "Urnas - Pendientes", "field" => "id_distrito", "page" => "search");
		if( !isset( $lookupTableLinks["sectores"] ) ) {
			$lookupTableLinks["sectores"] = array();
		}
		if( !isset( $lookupTableLinks["sectores"]["urnas___pendientes.id_sector"] )) {
			$lookupTableLinks["sectores"]["urnas___pendientes.id_sector"] = array();
		}
		$lookupTableLinks["sectores"]["urnas___pendientes.id_sector"]["search"] = array("table" => "Urnas - Pendientes", "field" => "id_sector", "page" => "search");
		if( !isset( $lookupTableLinks["distritos"] ) ) {
			$lookupTableLinks["distritos"] = array();
		}
		if( !isset( $lookupTableLinks["distritos"]["urnas___completadas.id_distrito"] )) {
			$lookupTableLinks["distritos"]["urnas___completadas.id_distrito"] = array();
		}
		$lookupTableLinks["distritos"]["urnas___completadas.id_distrito"]["search"] = array("table" => "Urnas - Completadas", "field" => "id_distrito", "page" => "search");
		if( !isset( $lookupTableLinks["sectores"] ) ) {
			$lookupTableLinks["sectores"] = array();
		}
		if( !isset( $lookupTableLinks["sectores"]["urnas___completadas.id_sector"] )) {
			$lookupTableLinks["sectores"]["urnas___completadas.id_sector"] = array();
		}
		$lookupTableLinks["sectores"]["urnas___completadas.id_sector"]["search"] = array("table" => "Urnas - Completadas", "field" => "id_sector", "page" => "search");
		if( !isset( $lookupTableLinks["partido"] ) ) {
			$lookupTableLinks["partido"] = array();
		}
		if( !isset( $lookupTableLinks["partido"]["estructura.partido"] )) {
			$lookupTableLinks["partido"]["estructura.partido"] = array();
		}
		$lookupTableLinks["partido"]["estructura.partido"]["edit"] = array("table" => "estructura", "field" => "partido", "page" => "edit");
		if( !isset( $lookupTableLinks["urna"] ) ) {
			$lookupTableLinks["urna"] = array();
		}
		if( !isset( $lookupTableLinks["urna"]["actas.id_urna"] )) {
			$lookupTableLinks["urna"]["actas.id_urna"] = array();
		}
		$lookupTableLinks["urna"]["actas.id_urna"]["edit"] = array("table" => "actas", "field" => "id_urna", "page" => "edit");
}

?>