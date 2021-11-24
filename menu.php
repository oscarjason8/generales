<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if( !isLogged() || isLoggedAsGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() )
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}


require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/voto_alcalde_events.php"));
$tableEvents["voto_alcalde"] = new eventclass_voto_alcalde;
include_once(getabspath("include/voto_diputado_events.php"));
$tableEvents["voto_diputado"] = new eventclass_voto_diputado;
include_once(getabspath("include/voto_presidente_events.php"));
$tableEvents["voto_presidente"] = new eventclass_voto_presidente;
include_once(getabspath("include/alcalde_chart_events.php"));
$tableEvents["Alcalde_Chart"] = new eventclass_alcalde_chart;
include_once(getabspath("include/presidente_chart_events.php"));
$tableEvents["Presidente_Chart"] = new eventclass_presidente_chart;
include_once(getabspath("include/pres___por_distrito_events.php"));
$tableEvents["Pres - Por Distrito"] = new eventclass_pres___por_distrito;
include_once(getabspath("include/pres___por_sector_events.php"));
$tableEvents["Pres - Por Sector"] = new eventclass_pres___por_sector;
include_once(getabspath("include/pres___por_urna_events.php"));
$tableEvents["Pres - Por Urna"] = new eventclass_pres___por_urna;
include_once(getabspath("include/alc___por_distrito_events.php"));
$tableEvents["Alc - Por Distrito"] = new eventclass_alc___por_distrito;
include_once(getabspath("include/alc___por_sector_events.php"));
$tableEvents["Alc - Por Sector"] = new eventclass_alc___por_sector;
include_once(getabspath("include/alc___por_urna_events.php"));
$tableEvents["Alc - Por Urna"] = new eventclass_alc___por_urna;
include_once(getabspath("include/dashboard_events.php"));
$tableEvents["Dashboard"] = new eventclass_dashboard;
include_once(getabspath("include/estructura_events.php"));
$tableEvents["estructura"] = new eventclass_estructura;
include_once(getabspath("include/actas_events.php"));
$tableEvents["actas"] = new eventclass_actas;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$params["pageName"] = postvalue("page"); 

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>