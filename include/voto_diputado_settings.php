<?php
$tdatavoto_diputado = array();
$tdatavoto_diputado[".searchableFields"] = array();
$tdatavoto_diputado[".ShortName"] = "voto_diputado";
$tdatavoto_diputado[".OwnerID"] = "";
$tdatavoto_diputado[".OriginalTable"] = "voto_diputado";


$tdatavoto_diputado[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavoto_diputado[".originalPagesByType"] = $tdatavoto_diputado[".pagesByType"];
$tdatavoto_diputado[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavoto_diputado[".originalPages"] = $tdatavoto_diputado[".pages"];
$tdatavoto_diputado[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavoto_diputado[".originalDefaultPages"] = $tdatavoto_diputado[".defaultPages"];

//	field labels
$fieldLabelsvoto_diputado = array();
$fieldToolTipsvoto_diputado = array();
$pageTitlesvoto_diputado = array();
$placeHoldersvoto_diputado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvoto_diputado["Spanish"] = array();
	$fieldToolTipsvoto_diputado["Spanish"] = array();
	$placeHoldersvoto_diputado["Spanish"] = array();
	$pageTitlesvoto_diputado["Spanish"] = array();
	$fieldLabelsvoto_diputado["Spanish"]["id_urna"] = "Urna";
	$fieldToolTipsvoto_diputado["Spanish"]["id_urna"] = "";
	$placeHoldersvoto_diputado["Spanish"]["id_urna"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip1"] = "Dip. 1";
	$fieldToolTipsvoto_diputado["Spanish"]["dip1"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip1"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip2"] = "Dip. 2";
	$fieldToolTipsvoto_diputado["Spanish"]["dip2"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip2"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip3"] = "Dip. 3";
	$fieldToolTipsvoto_diputado["Spanish"]["dip3"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip3"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip4"] = "Dip. 4";
	$fieldToolTipsvoto_diputado["Spanish"]["dip4"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip4"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip5"] = "Dip. 5";
	$fieldToolTipsvoto_diputado["Spanish"]["dip5"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip5"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip6"] = "Dip. 6";
	$fieldToolTipsvoto_diputado["Spanish"]["dip6"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip6"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip7"] = "Dip. 7";
	$fieldToolTipsvoto_diputado["Spanish"]["dip7"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip7"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip8"] = "Dip. 8";
	$fieldToolTipsvoto_diputado["Spanish"]["dip8"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip8"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip9"] = "Dip. 9";
	$fieldToolTipsvoto_diputado["Spanish"]["dip9"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip9"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip10"] = "Dip. 10";
	$fieldToolTipsvoto_diputado["Spanish"]["dip10"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip10"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip11"] = "Dip. 11";
	$fieldToolTipsvoto_diputado["Spanish"]["dip11"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip11"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip12"] = "Dip. 12";
	$fieldToolTipsvoto_diputado["Spanish"]["dip12"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip12"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip13"] = "Dip. 13";
	$fieldToolTipsvoto_diputado["Spanish"]["dip13"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip13"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip14"] = "Dip. 14";
	$fieldToolTipsvoto_diputado["Spanish"]["dip14"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip14"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip15"] = "Dip. 15";
	$fieldToolTipsvoto_diputado["Spanish"]["dip15"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip15"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip16"] = "Dip. 16";
	$fieldToolTipsvoto_diputado["Spanish"]["dip16"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip16"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip17"] = "Dip. 17";
	$fieldToolTipsvoto_diputado["Spanish"]["dip17"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip17"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip18"] = "Dip. 18";
	$fieldToolTipsvoto_diputado["Spanish"]["dip18"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip18"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip19"] = "Dip. 19";
	$fieldToolTipsvoto_diputado["Spanish"]["dip19"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip19"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip20"] = "Dip. 20";
	$fieldToolTipsvoto_diputado["Spanish"]["dip20"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip20"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip21"] = "Dip. 21";
	$fieldToolTipsvoto_diputado["Spanish"]["dip21"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip21"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip22"] = "Dip. 22";
	$fieldToolTipsvoto_diputado["Spanish"]["dip22"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip22"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip23"] = "Dip. 23";
	$fieldToolTipsvoto_diputado["Spanish"]["dip23"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip23"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip24"] = "Dip. 24";
	$fieldToolTipsvoto_diputado["Spanish"]["dip24"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip24"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip25"] = "Dip. 25";
	$fieldToolTipsvoto_diputado["Spanish"]["dip25"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip25"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip26"] = "Dip. 26";
	$fieldToolTipsvoto_diputado["Spanish"]["dip26"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip26"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip27"] = "Dip. 27";
	$fieldToolTipsvoto_diputado["Spanish"]["dip27"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip27"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip28"] = "Dip. 28";
	$fieldToolTipsvoto_diputado["Spanish"]["dip28"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip28"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip29"] = "Dip. 29";
	$fieldToolTipsvoto_diputado["Spanish"]["dip29"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip29"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip30"] = "Dip. 30";
	$fieldToolTipsvoto_diputado["Spanish"]["dip30"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip30"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip31"] = "Dip. 31";
	$fieldToolTipsvoto_diputado["Spanish"]["dip31"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip31"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip32"] = "Dip. 32";
	$fieldToolTipsvoto_diputado["Spanish"]["dip32"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip32"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip33"] = "Dip. 33";
	$fieldToolTipsvoto_diputado["Spanish"]["dip33"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip33"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip34"] = "Dip. 34";
	$fieldToolTipsvoto_diputado["Spanish"]["dip34"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip34"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip35"] = "Dip. 35";
	$fieldToolTipsvoto_diputado["Spanish"]["dip35"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip35"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip36"] = "Dip. 36";
	$fieldToolTipsvoto_diputado["Spanish"]["dip36"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip36"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip37"] = "Dip. 37";
	$fieldToolTipsvoto_diputado["Spanish"]["dip37"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip37"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip38"] = "Dip. 38";
	$fieldToolTipsvoto_diputado["Spanish"]["dip38"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip38"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip39"] = "Dip. 39";
	$fieldToolTipsvoto_diputado["Spanish"]["dip39"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip39"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip40"] = "Dip. 40";
	$fieldToolTipsvoto_diputado["Spanish"]["dip40"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip40"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip41"] = "Dip. 41";
	$fieldToolTipsvoto_diputado["Spanish"]["dip41"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip41"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip42"] = "Dip. 42";
	$fieldToolTipsvoto_diputado["Spanish"]["dip42"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip42"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip43"] = "Dip. 43";
	$fieldToolTipsvoto_diputado["Spanish"]["dip43"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip43"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip44"] = "Dip. 44";
	$fieldToolTipsvoto_diputado["Spanish"]["dip44"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip44"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip45"] = "Dip. 45";
	$fieldToolTipsvoto_diputado["Spanish"]["dip45"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip45"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip46"] = "Dip. 46";
	$fieldToolTipsvoto_diputado["Spanish"]["dip46"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip46"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip47"] = "Dip. 47";
	$fieldToolTipsvoto_diputado["Spanish"]["dip47"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip47"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip48"] = "Dip. 48";
	$fieldToolTipsvoto_diputado["Spanish"]["dip48"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip48"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip49"] = "Dip. 49";
	$fieldToolTipsvoto_diputado["Spanish"]["dip49"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip49"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip50"] = "Dip. 50";
	$fieldToolTipsvoto_diputado["Spanish"]["dip50"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip50"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip51"] = "Dip. 51";
	$fieldToolTipsvoto_diputado["Spanish"]["dip51"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip51"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip52"] = "Dip. 52";
	$fieldToolTipsvoto_diputado["Spanish"]["dip52"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip52"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip53"] = "Dip. 53";
	$fieldToolTipsvoto_diputado["Spanish"]["dip53"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip53"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip54"] = "Dip. 54";
	$fieldToolTipsvoto_diputado["Spanish"]["dip54"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip54"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip55"] = "Dip. 55";
	$fieldToolTipsvoto_diputado["Spanish"]["dip55"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip55"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip56"] = "Dip. 56";
	$fieldToolTipsvoto_diputado["Spanish"]["dip56"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip56"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip57"] = "Dip. 57";
	$fieldToolTipsvoto_diputado["Spanish"]["dip57"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip57"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip58"] = "Dip. 58";
	$fieldToolTipsvoto_diputado["Spanish"]["dip58"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip58"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip59"] = "Dip. 59";
	$fieldToolTipsvoto_diputado["Spanish"]["dip59"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip59"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip60"] = "Dip. 60";
	$fieldToolTipsvoto_diputado["Spanish"]["dip60"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip60"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["validos"] = "Validos";
	$fieldToolTipsvoto_diputado["Spanish"]["validos"] = "";
	$placeHoldersvoto_diputado["Spanish"]["validos"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["blancos"] = "En Blanco";
	$fieldToolTipsvoto_diputado["Spanish"]["blancos"] = "";
	$placeHoldersvoto_diputado["Spanish"]["blancos"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["nulos"] = "Nulos";
	$fieldToolTipsvoto_diputado["Spanish"]["nulos"] = "";
	$placeHoldersvoto_diputado["Spanish"]["nulos"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["utilizados"] = "Utilizados";
	$fieldToolTipsvoto_diputado["Spanish"]["utilizados"] = "";
	$placeHoldersvoto_diputado["Spanish"]["utilizados"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["no_utilizados"] = "No Utilizados";
	$fieldToolTipsvoto_diputado["Spanish"]["no_utilizados"] = "";
	$placeHoldersvoto_diputado["Spanish"]["no_utilizados"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["total"] = "Total";
	$fieldToolTipsvoto_diputado["Spanish"]["total"] = "";
	$placeHoldersvoto_diputado["Spanish"]["total"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["usuario"] = "Ingresado Por";
	$fieldToolTipsvoto_diputado["Spanish"]["usuario"] = "";
	$placeHoldersvoto_diputado["Spanish"]["usuario"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["fecha"] = "Fecha de Ingreso";
	$fieldToolTipsvoto_diputado["Spanish"]["fecha"] = "";
	$placeHoldersvoto_diputado["Spanish"]["fecha"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip61"] = "Dip. 61";
	$fieldToolTipsvoto_diputado["Spanish"]["dip61"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip61"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip62"] = "Dip. 62";
	$fieldToolTipsvoto_diputado["Spanish"]["dip62"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip62"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip63"] = "Dip. 63";
	$fieldToolTipsvoto_diputado["Spanish"]["dip63"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip63"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip64"] = "Dip. 64";
	$fieldToolTipsvoto_diputado["Spanish"]["dip64"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip64"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip65"] = "Dip. 65";
	$fieldToolTipsvoto_diputado["Spanish"]["dip65"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip65"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip66"] = "Dip. 66";
	$fieldToolTipsvoto_diputado["Spanish"]["dip66"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip66"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip67"] = "Dip. 67";
	$fieldToolTipsvoto_diputado["Spanish"]["dip67"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip67"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip68"] = "Dip. 68";
	$fieldToolTipsvoto_diputado["Spanish"]["dip68"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip68"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip69"] = "Dip. 69";
	$fieldToolTipsvoto_diputado["Spanish"]["dip69"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip69"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip70"] = "Dip. 70";
	$fieldToolTipsvoto_diputado["Spanish"]["dip70"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip70"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip71"] = "Dip. 71";
	$fieldToolTipsvoto_diputado["Spanish"]["dip71"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip71"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip72"] = "Dip. 72";
	$fieldToolTipsvoto_diputado["Spanish"]["dip72"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip72"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip73"] = "Dip. 73";
	$fieldToolTipsvoto_diputado["Spanish"]["dip73"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip73"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip74"] = "Dip. 74";
	$fieldToolTipsvoto_diputado["Spanish"]["dip74"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip74"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip75"] = "Dip. 75";
	$fieldToolTipsvoto_diputado["Spanish"]["dip75"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip75"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip76"] = "Dip. 76";
	$fieldToolTipsvoto_diputado["Spanish"]["dip76"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip76"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip77"] = "Dip. 77";
	$fieldToolTipsvoto_diputado["Spanish"]["dip77"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip77"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip78"] = "Dip. 78";
	$fieldToolTipsvoto_diputado["Spanish"]["dip78"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip78"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip79"] = "Dip. 79";
	$fieldToolTipsvoto_diputado["Spanish"]["dip79"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip79"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip80"] = "Dip. 80";
	$fieldToolTipsvoto_diputado["Spanish"]["dip80"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip80"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip81"] = "Dip. 81";
	$fieldToolTipsvoto_diputado["Spanish"]["dip81"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip81"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip82"] = "Dip. 82";
	$fieldToolTipsvoto_diputado["Spanish"]["dip82"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip82"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip83"] = "Dip. 83";
	$fieldToolTipsvoto_diputado["Spanish"]["dip83"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip83"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip84"] = "Dip. 84";
	$fieldToolTipsvoto_diputado["Spanish"]["dip84"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip84"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip85"] = "Dip. 85";
	$fieldToolTipsvoto_diputado["Spanish"]["dip85"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip85"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip86"] = "Dip. 86";
	$fieldToolTipsvoto_diputado["Spanish"]["dip86"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip86"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip87"] = "Dip. 87";
	$fieldToolTipsvoto_diputado["Spanish"]["dip87"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip87"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip88"] = "Dip. 88";
	$fieldToolTipsvoto_diputado["Spanish"]["dip88"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip88"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip89"] = "Dip. 89";
	$fieldToolTipsvoto_diputado["Spanish"]["dip89"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip89"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip90"] = "Dip. 90";
	$fieldToolTipsvoto_diputado["Spanish"]["dip90"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip90"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip91"] = "Dip. 91";
	$fieldToolTipsvoto_diputado["Spanish"]["dip91"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip91"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip92"] = "Dip. 92";
	$fieldToolTipsvoto_diputado["Spanish"]["dip92"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip92"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip93"] = "Dip. 93";
	$fieldToolTipsvoto_diputado["Spanish"]["dip93"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip93"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip94"] = "Dip. 94";
	$fieldToolTipsvoto_diputado["Spanish"]["dip94"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip94"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip95"] = "Dip. 95";
	$fieldToolTipsvoto_diputado["Spanish"]["dip95"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip95"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip96"] = "Dip. 96";
	$fieldToolTipsvoto_diputado["Spanish"]["dip96"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip96"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip97"] = "Dip. 97";
	$fieldToolTipsvoto_diputado["Spanish"]["dip97"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip97"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip98"] = "Dip. 98";
	$fieldToolTipsvoto_diputado["Spanish"]["dip98"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip98"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip99"] = "Dip. 99";
	$fieldToolTipsvoto_diputado["Spanish"]["dip99"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip99"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip100"] = "Dip. 100";
	$fieldToolTipsvoto_diputado["Spanish"]["dip100"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip100"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip101"] = "Dip. 101";
	$fieldToolTipsvoto_diputado["Spanish"]["dip101"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip101"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip102"] = "Dip. 102";
	$fieldToolTipsvoto_diputado["Spanish"]["dip102"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip102"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip103"] = "Dip. 103";
	$fieldToolTipsvoto_diputado["Spanish"]["dip103"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip103"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip104"] = "Dip. 104";
	$fieldToolTipsvoto_diputado["Spanish"]["dip104"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip104"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip105"] = "Dip. 105";
	$fieldToolTipsvoto_diputado["Spanish"]["dip105"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip105"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip106"] = "Dip. 106";
	$fieldToolTipsvoto_diputado["Spanish"]["dip106"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip106"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip107"] = "Dip. 107";
	$fieldToolTipsvoto_diputado["Spanish"]["dip107"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip107"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip108"] = "Dip. 108";
	$fieldToolTipsvoto_diputado["Spanish"]["dip108"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip108"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip109"] = "Dip. 109";
	$fieldToolTipsvoto_diputado["Spanish"]["dip109"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip109"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip110"] = "Dip. 110";
	$fieldToolTipsvoto_diputado["Spanish"]["dip110"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip110"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip111"] = "Dip. 111";
	$fieldToolTipsvoto_diputado["Spanish"]["dip111"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip111"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip112"] = "Dip. 112";
	$fieldToolTipsvoto_diputado["Spanish"]["dip112"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip112"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip113"] = "Dip. 113";
	$fieldToolTipsvoto_diputado["Spanish"]["dip113"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip113"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip114"] = "Dip. 114";
	$fieldToolTipsvoto_diputado["Spanish"]["dip114"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip114"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip115"] = "Dip. 115";
	$fieldToolTipsvoto_diputado["Spanish"]["dip115"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip115"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip116"] = "Dip. 116";
	$fieldToolTipsvoto_diputado["Spanish"]["dip116"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip116"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip117"] = "Dip. 117";
	$fieldToolTipsvoto_diputado["Spanish"]["dip117"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip117"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip118"] = "Dip. 118";
	$fieldToolTipsvoto_diputado["Spanish"]["dip118"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip118"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip119"] = "Dip. 119";
	$fieldToolTipsvoto_diputado["Spanish"]["dip119"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip119"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip120"] = "Dip. 120";
	$fieldToolTipsvoto_diputado["Spanish"]["dip120"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip120"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip121"] = "Dip. 121";
	$fieldToolTipsvoto_diputado["Spanish"]["dip121"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip121"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip122"] = "Dip. 122";
	$fieldToolTipsvoto_diputado["Spanish"]["dip122"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip122"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip123"] = "Dip. 123";
	$fieldToolTipsvoto_diputado["Spanish"]["dip123"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip123"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip124"] = "Dip. 124";
	$fieldToolTipsvoto_diputado["Spanish"]["dip124"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip124"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip125"] = "Dip. 125";
	$fieldToolTipsvoto_diputado["Spanish"]["dip125"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip125"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip126"] = "Dip. 126";
	$fieldToolTipsvoto_diputado["Spanish"]["dip126"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip126"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip127"] = "Dip. 127";
	$fieldToolTipsvoto_diputado["Spanish"]["dip127"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip127"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip128"] = "Dip. 128";
	$fieldToolTipsvoto_diputado["Spanish"]["dip128"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip128"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip129"] = "Dip. 129";
	$fieldToolTipsvoto_diputado["Spanish"]["dip129"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip129"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip130"] = "Dip. 130";
	$fieldToolTipsvoto_diputado["Spanish"]["dip130"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip130"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip131"] = "Dip. 131";
	$fieldToolTipsvoto_diputado["Spanish"]["dip131"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip131"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip132"] = "Dip. 132";
	$fieldToolTipsvoto_diputado["Spanish"]["dip132"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip132"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip133"] = "Dip. 133";
	$fieldToolTipsvoto_diputado["Spanish"]["dip133"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip133"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip134"] = "Dip. 134";
	$fieldToolTipsvoto_diputado["Spanish"]["dip134"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip134"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip135"] = "Dip. 135";
	$fieldToolTipsvoto_diputado["Spanish"]["dip135"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip135"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip136"] = "Dip. 136";
	$fieldToolTipsvoto_diputado["Spanish"]["dip136"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip136"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip137"] = "Dip. 137";
	$fieldToolTipsvoto_diputado["Spanish"]["dip137"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip137"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip138"] = "Dip. 138";
	$fieldToolTipsvoto_diputado["Spanish"]["dip138"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip138"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip139"] = "Dip. 139";
	$fieldToolTipsvoto_diputado["Spanish"]["dip139"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip139"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip140"] = "Dip. 140";
	$fieldToolTipsvoto_diputado["Spanish"]["dip140"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip140"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip141"] = "Dip. 141";
	$fieldToolTipsvoto_diputado["Spanish"]["dip141"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip141"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip142"] = "Dip. 142";
	$fieldToolTipsvoto_diputado["Spanish"]["dip142"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip142"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip143"] = "Dip. 143";
	$fieldToolTipsvoto_diputado["Spanish"]["dip143"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip143"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip144"] = "Dip. 144";
	$fieldToolTipsvoto_diputado["Spanish"]["dip144"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip144"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip145"] = "Dip. 145";
	$fieldToolTipsvoto_diputado["Spanish"]["dip145"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip145"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip146"] = "Dip. 146";
	$fieldToolTipsvoto_diputado["Spanish"]["dip146"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip146"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip147"] = "Dip. 147";
	$fieldToolTipsvoto_diputado["Spanish"]["dip147"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip147"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip148"] = "Dip. 148";
	$fieldToolTipsvoto_diputado["Spanish"]["dip148"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip148"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip149"] = "Dip. 149";
	$fieldToolTipsvoto_diputado["Spanish"]["dip149"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip149"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip150"] = "Dip. 150";
	$fieldToolTipsvoto_diputado["Spanish"]["dip150"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip150"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip151"] = "Dip. 151";
	$fieldToolTipsvoto_diputado["Spanish"]["dip151"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip151"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip152"] = "Dip. 152";
	$fieldToolTipsvoto_diputado["Spanish"]["dip152"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip152"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip153"] = "Dip. 153";
	$fieldToolTipsvoto_diputado["Spanish"]["dip153"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip153"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip154"] = "Dip. 154";
	$fieldToolTipsvoto_diputado["Spanish"]["dip154"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip154"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip155"] = "Dip. 155";
	$fieldToolTipsvoto_diputado["Spanish"]["dip155"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip155"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip156"] = "Dip. 156";
	$fieldToolTipsvoto_diputado["Spanish"]["dip156"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip156"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip157"] = "Dip. 157";
	$fieldToolTipsvoto_diputado["Spanish"]["dip157"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip157"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip158"] = "Dip. 158";
	$fieldToolTipsvoto_diputado["Spanish"]["dip158"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip158"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip159"] = "Dip. 159";
	$fieldToolTipsvoto_diputado["Spanish"]["dip159"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip159"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip160"] = "Dip. 160";
	$fieldToolTipsvoto_diputado["Spanish"]["dip160"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip160"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip161"] = "Dip. 161";
	$fieldToolTipsvoto_diputado["Spanish"]["dip161"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip161"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip162"] = "Dip. 162";
	$fieldToolTipsvoto_diputado["Spanish"]["dip162"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip162"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip163"] = "Dip. 163";
	$fieldToolTipsvoto_diputado["Spanish"]["dip163"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip163"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip164"] = "Dip. 164";
	$fieldToolTipsvoto_diputado["Spanish"]["dip164"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip164"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip165"] = "Dip. 165";
	$fieldToolTipsvoto_diputado["Spanish"]["dip165"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip165"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip166"] = "Dip. 166";
	$fieldToolTipsvoto_diputado["Spanish"]["dip166"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip166"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip167"] = "Dip. 167";
	$fieldToolTipsvoto_diputado["Spanish"]["dip167"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip167"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip168"] = "Dip. 168";
	$fieldToolTipsvoto_diputado["Spanish"]["dip168"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip168"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip169"] = "Dip. 169";
	$fieldToolTipsvoto_diputado["Spanish"]["dip169"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip169"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip170"] = "Dip. 170";
	$fieldToolTipsvoto_diputado["Spanish"]["dip170"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip170"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip171"] = "Dip. 171";
	$fieldToolTipsvoto_diputado["Spanish"]["dip171"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip171"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip172"] = "Dip. 172";
	$fieldToolTipsvoto_diputado["Spanish"]["dip172"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip172"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip173"] = "Dip. 173";
	$fieldToolTipsvoto_diputado["Spanish"]["dip173"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip173"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip174"] = "Dip. 174";
	$fieldToolTipsvoto_diputado["Spanish"]["dip174"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip174"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip175"] = "Dip. 175";
	$fieldToolTipsvoto_diputado["Spanish"]["dip175"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip175"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip176"] = "Dip. 176";
	$fieldToolTipsvoto_diputado["Spanish"]["dip176"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip176"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip177"] = "Dip. 177";
	$fieldToolTipsvoto_diputado["Spanish"]["dip177"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip177"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip178"] = "Dip. 178";
	$fieldToolTipsvoto_diputado["Spanish"]["dip178"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip178"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip179"] = "Dip. 179";
	$fieldToolTipsvoto_diputado["Spanish"]["dip179"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip179"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip180"] = "Dip. 180";
	$fieldToolTipsvoto_diputado["Spanish"]["dip180"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip180"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip181"] = "Dip. 181";
	$fieldToolTipsvoto_diputado["Spanish"]["dip181"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip181"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip182"] = "Dip. 182";
	$fieldToolTipsvoto_diputado["Spanish"]["dip182"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip182"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip183"] = "Dip. 183";
	$fieldToolTipsvoto_diputado["Spanish"]["dip183"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip183"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip184"] = "Dip. 184";
	$fieldToolTipsvoto_diputado["Spanish"]["dip184"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip184"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip185"] = "Dip. 185";
	$fieldToolTipsvoto_diputado["Spanish"]["dip185"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip185"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip186"] = "Dip. 186";
	$fieldToolTipsvoto_diputado["Spanish"]["dip186"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip186"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip187"] = "Dip. 187";
	$fieldToolTipsvoto_diputado["Spanish"]["dip187"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip187"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip188"] = "Dip. 188";
	$fieldToolTipsvoto_diputado["Spanish"]["dip188"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip188"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip189"] = "Dip. 189";
	$fieldToolTipsvoto_diputado["Spanish"]["dip189"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip189"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip190"] = "Dip. 190";
	$fieldToolTipsvoto_diputado["Spanish"]["dip190"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip190"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip191"] = "Dip. 191";
	$fieldToolTipsvoto_diputado["Spanish"]["dip191"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip191"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip192"] = "Dip. 192";
	$fieldToolTipsvoto_diputado["Spanish"]["dip192"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip192"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip193"] = "Dip. 193";
	$fieldToolTipsvoto_diputado["Spanish"]["dip193"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip193"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip194"] = "Dip. 194";
	$fieldToolTipsvoto_diputado["Spanish"]["dip194"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip194"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip195"] = "Dip. 195";
	$fieldToolTipsvoto_diputado["Spanish"]["dip195"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip195"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip196"] = "Dip. 196";
	$fieldToolTipsvoto_diputado["Spanish"]["dip196"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip196"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip197"] = "Dip. 197";
	$fieldToolTipsvoto_diputado["Spanish"]["dip197"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip197"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip198"] = "Dip. 198";
	$fieldToolTipsvoto_diputado["Spanish"]["dip198"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip198"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip199"] = "Dip. 199";
	$fieldToolTipsvoto_diputado["Spanish"]["dip199"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip199"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip200"] = "Dip. 200";
	$fieldToolTipsvoto_diputado["Spanish"]["dip200"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip200"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip201"] = "Dip. 201";
	$fieldToolTipsvoto_diputado["Spanish"]["dip201"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip201"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip202"] = "Dip. 202";
	$fieldToolTipsvoto_diputado["Spanish"]["dip202"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip202"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip203"] = "Dip. 203";
	$fieldToolTipsvoto_diputado["Spanish"]["dip203"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip203"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip204"] = "Dip. 204";
	$fieldToolTipsvoto_diputado["Spanish"]["dip204"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip204"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip205"] = "Dip. 205";
	$fieldToolTipsvoto_diputado["Spanish"]["dip205"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip205"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip206"] = "Dip. 206";
	$fieldToolTipsvoto_diputado["Spanish"]["dip206"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip206"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip207"] = "Dip. 207";
	$fieldToolTipsvoto_diputado["Spanish"]["dip207"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip207"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip208"] = "Dip. 208";
	$fieldToolTipsvoto_diputado["Spanish"]["dip208"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip208"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip209"] = "Dip. 209";
	$fieldToolTipsvoto_diputado["Spanish"]["dip209"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip209"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip210"] = "Dip. 210";
	$fieldToolTipsvoto_diputado["Spanish"]["dip210"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip210"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip211"] = "Dip. 211";
	$fieldToolTipsvoto_diputado["Spanish"]["dip211"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip211"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip212"] = "Dip. 212";
	$fieldToolTipsvoto_diputado["Spanish"]["dip212"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip212"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip213"] = "Dip. 213";
	$fieldToolTipsvoto_diputado["Spanish"]["dip213"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip213"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip214"] = "Dip. 214";
	$fieldToolTipsvoto_diputado["Spanish"]["dip214"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip214"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip216"] = "Dip. 216";
	$fieldToolTipsvoto_diputado["Spanish"]["dip216"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip216"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip217"] = "Dip. 217";
	$fieldToolTipsvoto_diputado["Spanish"]["dip217"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip217"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip218"] = "Dip. 218";
	$fieldToolTipsvoto_diputado["Spanish"]["dip218"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip218"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip219"] = "Dip. 219";
	$fieldToolTipsvoto_diputado["Spanish"]["dip219"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip219"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip220"] = "Dip. 220";
	$fieldToolTipsvoto_diputado["Spanish"]["dip220"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip220"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip221"] = "Dip. 221";
	$fieldToolTipsvoto_diputado["Spanish"]["dip221"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip221"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip262"] = "Dip. 262";
	$fieldToolTipsvoto_diputado["Spanish"]["dip262"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip262"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip263"] = "Dip. 263";
	$fieldToolTipsvoto_diputado["Spanish"]["dip263"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip263"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip264"] = "Dip. 264";
	$fieldToolTipsvoto_diputado["Spanish"]["dip264"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip264"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip265"] = "Dip. 265";
	$fieldToolTipsvoto_diputado["Spanish"]["dip265"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip265"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip266"] = "Dip. 266";
	$fieldToolTipsvoto_diputado["Spanish"]["dip266"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip266"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip267"] = "Dip. 267";
	$fieldToolTipsvoto_diputado["Spanish"]["dip267"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip267"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip268"] = "Dip. 268";
	$fieldToolTipsvoto_diputado["Spanish"]["dip268"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip268"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip269"] = "Dip. 269";
	$fieldToolTipsvoto_diputado["Spanish"]["dip269"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip269"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip270"] = "Dip. 270";
	$fieldToolTipsvoto_diputado["Spanish"]["dip270"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip270"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip271"] = "Dip. 271";
	$fieldToolTipsvoto_diputado["Spanish"]["dip271"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip271"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip272"] = "Dip. 272";
	$fieldToolTipsvoto_diputado["Spanish"]["dip272"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip272"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip273"] = "Dip. 273";
	$fieldToolTipsvoto_diputado["Spanish"]["dip273"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip273"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip274"] = "Dip. 274";
	$fieldToolTipsvoto_diputado["Spanish"]["dip274"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip274"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip275"] = "Dip. 275";
	$fieldToolTipsvoto_diputado["Spanish"]["dip275"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip275"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip276"] = "Dip. 276";
	$fieldToolTipsvoto_diputado["Spanish"]["dip276"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip276"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip277"] = "Dip. 277";
	$fieldToolTipsvoto_diputado["Spanish"]["dip277"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip277"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip278"] = "Dip. 278";
	$fieldToolTipsvoto_diputado["Spanish"]["dip278"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip278"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip279"] = "Dip. 279";
	$fieldToolTipsvoto_diputado["Spanish"]["dip279"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip279"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip280"] = "Dip. 280";
	$fieldToolTipsvoto_diputado["Spanish"]["dip280"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip280"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip222"] = "Dip. 222";
	$fieldToolTipsvoto_diputado["Spanish"]["dip222"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip222"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip223"] = "Dip. 223";
	$fieldToolTipsvoto_diputado["Spanish"]["dip223"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip223"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip224"] = "Dip. 224";
	$fieldToolTipsvoto_diputado["Spanish"]["dip224"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip224"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip225"] = "Dip. 225";
	$fieldToolTipsvoto_diputado["Spanish"]["dip225"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip225"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip226"] = "Dip. 226";
	$fieldToolTipsvoto_diputado["Spanish"]["dip226"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip226"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip228"] = "Dip. 228";
	$fieldToolTipsvoto_diputado["Spanish"]["dip228"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip228"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip229"] = "Dip. 229";
	$fieldToolTipsvoto_diputado["Spanish"]["dip229"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip229"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip231"] = "Dip. 231";
	$fieldToolTipsvoto_diputado["Spanish"]["dip231"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip231"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip232"] = "Dip. 232";
	$fieldToolTipsvoto_diputado["Spanish"]["dip232"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip232"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip234"] = "Dip. 234";
	$fieldToolTipsvoto_diputado["Spanish"]["dip234"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip234"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip235"] = "Dip. 235";
	$fieldToolTipsvoto_diputado["Spanish"]["dip235"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip235"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip236"] = "Dip. 236";
	$fieldToolTipsvoto_diputado["Spanish"]["dip236"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip236"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip237"] = "Dip. 237";
	$fieldToolTipsvoto_diputado["Spanish"]["dip237"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip237"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip238"] = "Dip. 238";
	$fieldToolTipsvoto_diputado["Spanish"]["dip238"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip238"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip239"] = "Dip. 239";
	$fieldToolTipsvoto_diputado["Spanish"]["dip239"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip239"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip240"] = "Dip. 240";
	$fieldToolTipsvoto_diputado["Spanish"]["dip240"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip240"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip241"] = "Dip. 241";
	$fieldToolTipsvoto_diputado["Spanish"]["dip241"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip241"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip242"] = "Dip. 242";
	$fieldToolTipsvoto_diputado["Spanish"]["dip242"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip242"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip243"] = "Dip. 243";
	$fieldToolTipsvoto_diputado["Spanish"]["dip243"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip243"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip244"] = "Dip. 244";
	$fieldToolTipsvoto_diputado["Spanish"]["dip244"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip244"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip245"] = "Dip. 245";
	$fieldToolTipsvoto_diputado["Spanish"]["dip245"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip245"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip246"] = "Dip. 246";
	$fieldToolTipsvoto_diputado["Spanish"]["dip246"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip246"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip247"] = "Dip. 247";
	$fieldToolTipsvoto_diputado["Spanish"]["dip247"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip247"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip248"] = "Dip. 248";
	$fieldToolTipsvoto_diputado["Spanish"]["dip248"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip248"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip249"] = "Dip. 249";
	$fieldToolTipsvoto_diputado["Spanish"]["dip249"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip249"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip250"] = "Dip. 250";
	$fieldToolTipsvoto_diputado["Spanish"]["dip250"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip250"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip251"] = "Dip. 251";
	$fieldToolTipsvoto_diputado["Spanish"]["dip251"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip251"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip252"] = "Dip. 252";
	$fieldToolTipsvoto_diputado["Spanish"]["dip252"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip252"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip253"] = "Dip. 253";
	$fieldToolTipsvoto_diputado["Spanish"]["dip253"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip253"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip254"] = "Dip. 254";
	$fieldToolTipsvoto_diputado["Spanish"]["dip254"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip254"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip255"] = "Dip. 255";
	$fieldToolTipsvoto_diputado["Spanish"]["dip255"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip255"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip256"] = "Dip. 256";
	$fieldToolTipsvoto_diputado["Spanish"]["dip256"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip256"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip257"] = "Dip. 257";
	$fieldToolTipsvoto_diputado["Spanish"]["dip257"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip257"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip258"] = "Dip. 258";
	$fieldToolTipsvoto_diputado["Spanish"]["dip258"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip258"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip259"] = "Dip. 259";
	$fieldToolTipsvoto_diputado["Spanish"]["dip259"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip259"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip260"] = "Dip. 260";
	$fieldToolTipsvoto_diputado["Spanish"]["dip260"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip260"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip215"] = "Dip. 215";
	$fieldToolTipsvoto_diputado["Spanish"]["dip215"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip215"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip227"] = "Dip. 227";
	$fieldToolTipsvoto_diputado["Spanish"]["dip227"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip227"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip230"] = "Dip. 230";
	$fieldToolTipsvoto_diputado["Spanish"]["dip230"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip230"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip233"] = "Dip. 233";
	$fieldToolTipsvoto_diputado["Spanish"]["dip233"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip233"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["dip261"] = "Dip. 261";
	$fieldToolTipsvoto_diputado["Spanish"]["dip261"] = "";
	$placeHoldersvoto_diputado["Spanish"]["dip261"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["editado_por"] = "Editado Por";
	$fieldToolTipsvoto_diputado["Spanish"]["editado_por"] = "";
	$placeHoldersvoto_diputado["Spanish"]["editado_por"] = "";
	$fieldLabelsvoto_diputado["Spanish"]["fecha_edicion"] = "Fecha de Edición";
	$fieldToolTipsvoto_diputado["Spanish"]["fecha_edicion"] = "";
	$placeHoldersvoto_diputado["Spanish"]["fecha_edicion"] = "";
	if (count($fieldToolTipsvoto_diputado["Spanish"]))
		$tdatavoto_diputado[".isUseToolTips"] = true;
}


	$tdatavoto_diputado[".NCSearch"] = true;



$tdatavoto_diputado[".shortTableName"] = "voto_diputado";
$tdatavoto_diputado[".nSecOptions"] = 0;

$tdatavoto_diputado[".mainTableOwnerID"] = "";
$tdatavoto_diputado[".entityType"] = 0;
$tdatavoto_diputado[".connId"] = "internas_new_at_localhost";


$tdatavoto_diputado[".strOriginalTableName"] = "voto_diputado";

	



$tdatavoto_diputado[".showAddInPopup"] = false;

$tdatavoto_diputado[".showEditInPopup"] = false;

$tdatavoto_diputado[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavoto_diputado[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavoto_diputado[".listAjax"] = false;
//	temporary
//$tdatavoto_diputado[".listAjax"] = false;

	$tdatavoto_diputado[".audit"] = false;

	$tdatavoto_diputado[".locking"] = false;


$pages = $tdatavoto_diputado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavoto_diputado[".edit"] = true;
	$tdatavoto_diputado[".afterEditAction"] = 0;
	$tdatavoto_diputado[".closePopupAfterEdit"] = 1;
	$tdatavoto_diputado[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatavoto_diputado[".add"] = true;
$tdatavoto_diputado[".afterAddAction"] = 1;
$tdatavoto_diputado[".closePopupAfterAdd"] = 1;
$tdatavoto_diputado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavoto_diputado[".list"] = true;
}



$tdatavoto_diputado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavoto_diputado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavoto_diputado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavoto_diputado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavoto_diputado[".printFriendly"] = true;
}



$tdatavoto_diputado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavoto_diputado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavoto_diputado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavoto_diputado[".isUseAjaxSuggest"] = true;

$tdatavoto_diputado[".rowHighlite"] = true;





$tdatavoto_diputado[".ajaxCodeSnippetAdded"] = false;

$tdatavoto_diputado[".buttonsAdded"] = false;

$tdatavoto_diputado[".addPageEvents"] = true;

// use timepicker for search panel
$tdatavoto_diputado[".isUseTimeForSearch"] = false;


$tdatavoto_diputado[".badgeColor"] = "6da5c8";


$tdatavoto_diputado[".allSearchFields"] = array();
$tdatavoto_diputado[".filterFields"] = array();
$tdatavoto_diputado[".requiredSearchFields"] = array();

$tdatavoto_diputado[".googleLikeFields"] = array();
$tdatavoto_diputado[".googleLikeFields"][] = "id_urna";
$tdatavoto_diputado[".googleLikeFields"][] = "dip1";
$tdatavoto_diputado[".googleLikeFields"][] = "dip2";
$tdatavoto_diputado[".googleLikeFields"][] = "dip3";
$tdatavoto_diputado[".googleLikeFields"][] = "dip4";
$tdatavoto_diputado[".googleLikeFields"][] = "dip5";
$tdatavoto_diputado[".googleLikeFields"][] = "dip6";
$tdatavoto_diputado[".googleLikeFields"][] = "dip7";
$tdatavoto_diputado[".googleLikeFields"][] = "dip8";
$tdatavoto_diputado[".googleLikeFields"][] = "dip9";
$tdatavoto_diputado[".googleLikeFields"][] = "dip10";
$tdatavoto_diputado[".googleLikeFields"][] = "dip11";
$tdatavoto_diputado[".googleLikeFields"][] = "dip12";
$tdatavoto_diputado[".googleLikeFields"][] = "dip13";
$tdatavoto_diputado[".googleLikeFields"][] = "dip14";
$tdatavoto_diputado[".googleLikeFields"][] = "dip15";
$tdatavoto_diputado[".googleLikeFields"][] = "dip16";
$tdatavoto_diputado[".googleLikeFields"][] = "dip17";
$tdatavoto_diputado[".googleLikeFields"][] = "dip18";
$tdatavoto_diputado[".googleLikeFields"][] = "dip19";
$tdatavoto_diputado[".googleLikeFields"][] = "dip20";
$tdatavoto_diputado[".googleLikeFields"][] = "dip21";
$tdatavoto_diputado[".googleLikeFields"][] = "dip22";
$tdatavoto_diputado[".googleLikeFields"][] = "dip23";
$tdatavoto_diputado[".googleLikeFields"][] = "dip24";
$tdatavoto_diputado[".googleLikeFields"][] = "dip25";
$tdatavoto_diputado[".googleLikeFields"][] = "dip26";
$tdatavoto_diputado[".googleLikeFields"][] = "dip27";
$tdatavoto_diputado[".googleLikeFields"][] = "dip28";
$tdatavoto_diputado[".googleLikeFields"][] = "dip29";
$tdatavoto_diputado[".googleLikeFields"][] = "dip30";
$tdatavoto_diputado[".googleLikeFields"][] = "dip31";
$tdatavoto_diputado[".googleLikeFields"][] = "dip32";
$tdatavoto_diputado[".googleLikeFields"][] = "dip33";
$tdatavoto_diputado[".googleLikeFields"][] = "dip34";
$tdatavoto_diputado[".googleLikeFields"][] = "dip35";
$tdatavoto_diputado[".googleLikeFields"][] = "dip36";
$tdatavoto_diputado[".googleLikeFields"][] = "dip37";
$tdatavoto_diputado[".googleLikeFields"][] = "dip38";
$tdatavoto_diputado[".googleLikeFields"][] = "dip39";
$tdatavoto_diputado[".googleLikeFields"][] = "dip40";
$tdatavoto_diputado[".googleLikeFields"][] = "dip41";
$tdatavoto_diputado[".googleLikeFields"][] = "dip42";
$tdatavoto_diputado[".googleLikeFields"][] = "dip43";
$tdatavoto_diputado[".googleLikeFields"][] = "dip44";
$tdatavoto_diputado[".googleLikeFields"][] = "dip45";
$tdatavoto_diputado[".googleLikeFields"][] = "dip46";
$tdatavoto_diputado[".googleLikeFields"][] = "dip47";
$tdatavoto_diputado[".googleLikeFields"][] = "dip48";
$tdatavoto_diputado[".googleLikeFields"][] = "dip49";
$tdatavoto_diputado[".googleLikeFields"][] = "dip50";
$tdatavoto_diputado[".googleLikeFields"][] = "dip51";
$tdatavoto_diputado[".googleLikeFields"][] = "dip52";
$tdatavoto_diputado[".googleLikeFields"][] = "dip53";
$tdatavoto_diputado[".googleLikeFields"][] = "dip54";
$tdatavoto_diputado[".googleLikeFields"][] = "dip55";
$tdatavoto_diputado[".googleLikeFields"][] = "dip56";
$tdatavoto_diputado[".googleLikeFields"][] = "dip57";
$tdatavoto_diputado[".googleLikeFields"][] = "dip58";
$tdatavoto_diputado[".googleLikeFields"][] = "dip59";
$tdatavoto_diputado[".googleLikeFields"][] = "dip60";
$tdatavoto_diputado[".googleLikeFields"][] = "dip61";
$tdatavoto_diputado[".googleLikeFields"][] = "dip62";
$tdatavoto_diputado[".googleLikeFields"][] = "dip63";
$tdatavoto_diputado[".googleLikeFields"][] = "dip64";
$tdatavoto_diputado[".googleLikeFields"][] = "dip65";
$tdatavoto_diputado[".googleLikeFields"][] = "dip66";
$tdatavoto_diputado[".googleLikeFields"][] = "dip67";
$tdatavoto_diputado[".googleLikeFields"][] = "dip68";
$tdatavoto_diputado[".googleLikeFields"][] = "dip69";
$tdatavoto_diputado[".googleLikeFields"][] = "dip70";
$tdatavoto_diputado[".googleLikeFields"][] = "dip71";
$tdatavoto_diputado[".googleLikeFields"][] = "dip72";
$tdatavoto_diputado[".googleLikeFields"][] = "dip73";
$tdatavoto_diputado[".googleLikeFields"][] = "dip74";
$tdatavoto_diputado[".googleLikeFields"][] = "dip75";
$tdatavoto_diputado[".googleLikeFields"][] = "dip76";
$tdatavoto_diputado[".googleLikeFields"][] = "dip77";
$tdatavoto_diputado[".googleLikeFields"][] = "dip78";
$tdatavoto_diputado[".googleLikeFields"][] = "dip79";
$tdatavoto_diputado[".googleLikeFields"][] = "dip80";
$tdatavoto_diputado[".googleLikeFields"][] = "dip81";
$tdatavoto_diputado[".googleLikeFields"][] = "dip82";
$tdatavoto_diputado[".googleLikeFields"][] = "dip83";
$tdatavoto_diputado[".googleLikeFields"][] = "dip84";
$tdatavoto_diputado[".googleLikeFields"][] = "dip85";
$tdatavoto_diputado[".googleLikeFields"][] = "dip86";
$tdatavoto_diputado[".googleLikeFields"][] = "dip87";
$tdatavoto_diputado[".googleLikeFields"][] = "dip88";
$tdatavoto_diputado[".googleLikeFields"][] = "dip89";
$tdatavoto_diputado[".googleLikeFields"][] = "dip90";
$tdatavoto_diputado[".googleLikeFields"][] = "dip91";
$tdatavoto_diputado[".googleLikeFields"][] = "dip92";
$tdatavoto_diputado[".googleLikeFields"][] = "dip93";
$tdatavoto_diputado[".googleLikeFields"][] = "dip94";
$tdatavoto_diputado[".googleLikeFields"][] = "dip95";
$tdatavoto_diputado[".googleLikeFields"][] = "dip96";
$tdatavoto_diputado[".googleLikeFields"][] = "dip97";
$tdatavoto_diputado[".googleLikeFields"][] = "dip98";
$tdatavoto_diputado[".googleLikeFields"][] = "dip99";
$tdatavoto_diputado[".googleLikeFields"][] = "dip100";
$tdatavoto_diputado[".googleLikeFields"][] = "dip101";
$tdatavoto_diputado[".googleLikeFields"][] = "dip102";
$tdatavoto_diputado[".googleLikeFields"][] = "dip103";
$tdatavoto_diputado[".googleLikeFields"][] = "dip104";
$tdatavoto_diputado[".googleLikeFields"][] = "dip105";
$tdatavoto_diputado[".googleLikeFields"][] = "dip106";
$tdatavoto_diputado[".googleLikeFields"][] = "dip107";
$tdatavoto_diputado[".googleLikeFields"][] = "dip108";
$tdatavoto_diputado[".googleLikeFields"][] = "dip109";
$tdatavoto_diputado[".googleLikeFields"][] = "dip110";
$tdatavoto_diputado[".googleLikeFields"][] = "dip111";
$tdatavoto_diputado[".googleLikeFields"][] = "dip112";
$tdatavoto_diputado[".googleLikeFields"][] = "dip113";
$tdatavoto_diputado[".googleLikeFields"][] = "dip114";
$tdatavoto_diputado[".googleLikeFields"][] = "dip115";
$tdatavoto_diputado[".googleLikeFields"][] = "dip116";
$tdatavoto_diputado[".googleLikeFields"][] = "dip117";
$tdatavoto_diputado[".googleLikeFields"][] = "dip118";
$tdatavoto_diputado[".googleLikeFields"][] = "dip119";
$tdatavoto_diputado[".googleLikeFields"][] = "dip120";
$tdatavoto_diputado[".googleLikeFields"][] = "dip121";
$tdatavoto_diputado[".googleLikeFields"][] = "dip122";
$tdatavoto_diputado[".googleLikeFields"][] = "dip123";
$tdatavoto_diputado[".googleLikeFields"][] = "dip124";
$tdatavoto_diputado[".googleLikeFields"][] = "dip125";
$tdatavoto_diputado[".googleLikeFields"][] = "dip126";
$tdatavoto_diputado[".googleLikeFields"][] = "dip127";
$tdatavoto_diputado[".googleLikeFields"][] = "dip128";
$tdatavoto_diputado[".googleLikeFields"][] = "dip129";
$tdatavoto_diputado[".googleLikeFields"][] = "dip130";
$tdatavoto_diputado[".googleLikeFields"][] = "dip131";
$tdatavoto_diputado[".googleLikeFields"][] = "dip132";
$tdatavoto_diputado[".googleLikeFields"][] = "dip133";
$tdatavoto_diputado[".googleLikeFields"][] = "dip134";
$tdatavoto_diputado[".googleLikeFields"][] = "dip135";
$tdatavoto_diputado[".googleLikeFields"][] = "dip136";
$tdatavoto_diputado[".googleLikeFields"][] = "dip137";
$tdatavoto_diputado[".googleLikeFields"][] = "dip138";
$tdatavoto_diputado[".googleLikeFields"][] = "dip139";
$tdatavoto_diputado[".googleLikeFields"][] = "dip140";
$tdatavoto_diputado[".googleLikeFields"][] = "dip141";
$tdatavoto_diputado[".googleLikeFields"][] = "dip142";
$tdatavoto_diputado[".googleLikeFields"][] = "dip143";
$tdatavoto_diputado[".googleLikeFields"][] = "dip144";
$tdatavoto_diputado[".googleLikeFields"][] = "dip145";
$tdatavoto_diputado[".googleLikeFields"][] = "dip146";
$tdatavoto_diputado[".googleLikeFields"][] = "dip147";
$tdatavoto_diputado[".googleLikeFields"][] = "dip148";
$tdatavoto_diputado[".googleLikeFields"][] = "dip149";
$tdatavoto_diputado[".googleLikeFields"][] = "dip150";
$tdatavoto_diputado[".googleLikeFields"][] = "dip151";
$tdatavoto_diputado[".googleLikeFields"][] = "dip152";
$tdatavoto_diputado[".googleLikeFields"][] = "dip153";
$tdatavoto_diputado[".googleLikeFields"][] = "dip154";
$tdatavoto_diputado[".googleLikeFields"][] = "dip155";
$tdatavoto_diputado[".googleLikeFields"][] = "dip156";
$tdatavoto_diputado[".googleLikeFields"][] = "dip157";
$tdatavoto_diputado[".googleLikeFields"][] = "dip158";
$tdatavoto_diputado[".googleLikeFields"][] = "dip159";
$tdatavoto_diputado[".googleLikeFields"][] = "dip160";
$tdatavoto_diputado[".googleLikeFields"][] = "dip161";
$tdatavoto_diputado[".googleLikeFields"][] = "dip162";
$tdatavoto_diputado[".googleLikeFields"][] = "dip163";
$tdatavoto_diputado[".googleLikeFields"][] = "dip164";
$tdatavoto_diputado[".googleLikeFields"][] = "dip165";
$tdatavoto_diputado[".googleLikeFields"][] = "dip166";
$tdatavoto_diputado[".googleLikeFields"][] = "dip167";
$tdatavoto_diputado[".googleLikeFields"][] = "dip168";
$tdatavoto_diputado[".googleLikeFields"][] = "dip169";
$tdatavoto_diputado[".googleLikeFields"][] = "dip170";
$tdatavoto_diputado[".googleLikeFields"][] = "dip171";
$tdatavoto_diputado[".googleLikeFields"][] = "dip172";
$tdatavoto_diputado[".googleLikeFields"][] = "dip173";
$tdatavoto_diputado[".googleLikeFields"][] = "dip174";
$tdatavoto_diputado[".googleLikeFields"][] = "dip175";
$tdatavoto_diputado[".googleLikeFields"][] = "dip176";
$tdatavoto_diputado[".googleLikeFields"][] = "dip177";
$tdatavoto_diputado[".googleLikeFields"][] = "dip178";
$tdatavoto_diputado[".googleLikeFields"][] = "dip179";
$tdatavoto_diputado[".googleLikeFields"][] = "dip180";
$tdatavoto_diputado[".googleLikeFields"][] = "dip181";
$tdatavoto_diputado[".googleLikeFields"][] = "dip182";
$tdatavoto_diputado[".googleLikeFields"][] = "dip183";
$tdatavoto_diputado[".googleLikeFields"][] = "dip184";
$tdatavoto_diputado[".googleLikeFields"][] = "dip185";
$tdatavoto_diputado[".googleLikeFields"][] = "dip186";
$tdatavoto_diputado[".googleLikeFields"][] = "dip187";
$tdatavoto_diputado[".googleLikeFields"][] = "dip188";
$tdatavoto_diputado[".googleLikeFields"][] = "dip189";
$tdatavoto_diputado[".googleLikeFields"][] = "dip190";
$tdatavoto_diputado[".googleLikeFields"][] = "dip191";
$tdatavoto_diputado[".googleLikeFields"][] = "dip192";
$tdatavoto_diputado[".googleLikeFields"][] = "dip193";
$tdatavoto_diputado[".googleLikeFields"][] = "dip194";
$tdatavoto_diputado[".googleLikeFields"][] = "dip195";
$tdatavoto_diputado[".googleLikeFields"][] = "dip196";
$tdatavoto_diputado[".googleLikeFields"][] = "dip197";
$tdatavoto_diputado[".googleLikeFields"][] = "dip198";
$tdatavoto_diputado[".googleLikeFields"][] = "dip199";
$tdatavoto_diputado[".googleLikeFields"][] = "dip200";
$tdatavoto_diputado[".googleLikeFields"][] = "dip201";
$tdatavoto_diputado[".googleLikeFields"][] = "dip202";
$tdatavoto_diputado[".googleLikeFields"][] = "dip203";
$tdatavoto_diputado[".googleLikeFields"][] = "dip204";
$tdatavoto_diputado[".googleLikeFields"][] = "dip205";
$tdatavoto_diputado[".googleLikeFields"][] = "dip206";
$tdatavoto_diputado[".googleLikeFields"][] = "dip207";
$tdatavoto_diputado[".googleLikeFields"][] = "dip208";
$tdatavoto_diputado[".googleLikeFields"][] = "dip209";
$tdatavoto_diputado[".googleLikeFields"][] = "dip210";
$tdatavoto_diputado[".googleLikeFields"][] = "dip211";
$tdatavoto_diputado[".googleLikeFields"][] = "dip212";
$tdatavoto_diputado[".googleLikeFields"][] = "dip213";
$tdatavoto_diputado[".googleLikeFields"][] = "dip214";
$tdatavoto_diputado[".googleLikeFields"][] = "dip215";
$tdatavoto_diputado[".googleLikeFields"][] = "dip216";
$tdatavoto_diputado[".googleLikeFields"][] = "dip217";
$tdatavoto_diputado[".googleLikeFields"][] = "dip218";
$tdatavoto_diputado[".googleLikeFields"][] = "dip219";
$tdatavoto_diputado[".googleLikeFields"][] = "dip220";
$tdatavoto_diputado[".googleLikeFields"][] = "dip221";
$tdatavoto_diputado[".googleLikeFields"][] = "dip222";
$tdatavoto_diputado[".googleLikeFields"][] = "dip223";
$tdatavoto_diputado[".googleLikeFields"][] = "dip224";
$tdatavoto_diputado[".googleLikeFields"][] = "dip225";
$tdatavoto_diputado[".googleLikeFields"][] = "dip226";
$tdatavoto_diputado[".googleLikeFields"][] = "dip227";
$tdatavoto_diputado[".googleLikeFields"][] = "dip228";
$tdatavoto_diputado[".googleLikeFields"][] = "dip229";
$tdatavoto_diputado[".googleLikeFields"][] = "dip230";
$tdatavoto_diputado[".googleLikeFields"][] = "dip231";
$tdatavoto_diputado[".googleLikeFields"][] = "dip232";
$tdatavoto_diputado[".googleLikeFields"][] = "dip233";
$tdatavoto_diputado[".googleLikeFields"][] = "dip234";
$tdatavoto_diputado[".googleLikeFields"][] = "dip235";
$tdatavoto_diputado[".googleLikeFields"][] = "dip236";
$tdatavoto_diputado[".googleLikeFields"][] = "dip237";
$tdatavoto_diputado[".googleLikeFields"][] = "dip238";
$tdatavoto_diputado[".googleLikeFields"][] = "dip239";
$tdatavoto_diputado[".googleLikeFields"][] = "dip240";
$tdatavoto_diputado[".googleLikeFields"][] = "dip241";
$tdatavoto_diputado[".googleLikeFields"][] = "dip242";
$tdatavoto_diputado[".googleLikeFields"][] = "dip243";
$tdatavoto_diputado[".googleLikeFields"][] = "dip244";
$tdatavoto_diputado[".googleLikeFields"][] = "dip245";
$tdatavoto_diputado[".googleLikeFields"][] = "dip246";
$tdatavoto_diputado[".googleLikeFields"][] = "dip247";
$tdatavoto_diputado[".googleLikeFields"][] = "dip248";
$tdatavoto_diputado[".googleLikeFields"][] = "dip249";
$tdatavoto_diputado[".googleLikeFields"][] = "dip250";
$tdatavoto_diputado[".googleLikeFields"][] = "dip251";
$tdatavoto_diputado[".googleLikeFields"][] = "dip252";
$tdatavoto_diputado[".googleLikeFields"][] = "dip253";
$tdatavoto_diputado[".googleLikeFields"][] = "dip254";
$tdatavoto_diputado[".googleLikeFields"][] = "dip255";
$tdatavoto_diputado[".googleLikeFields"][] = "dip256";
$tdatavoto_diputado[".googleLikeFields"][] = "dip257";
$tdatavoto_diputado[".googleLikeFields"][] = "dip258";
$tdatavoto_diputado[".googleLikeFields"][] = "dip259";
$tdatavoto_diputado[".googleLikeFields"][] = "dip260";
$tdatavoto_diputado[".googleLikeFields"][] = "dip261";
$tdatavoto_diputado[".googleLikeFields"][] = "dip262";
$tdatavoto_diputado[".googleLikeFields"][] = "dip263";
$tdatavoto_diputado[".googleLikeFields"][] = "dip264";
$tdatavoto_diputado[".googleLikeFields"][] = "dip265";
$tdatavoto_diputado[".googleLikeFields"][] = "dip266";
$tdatavoto_diputado[".googleLikeFields"][] = "dip267";
$tdatavoto_diputado[".googleLikeFields"][] = "dip268";
$tdatavoto_diputado[".googleLikeFields"][] = "dip269";
$tdatavoto_diputado[".googleLikeFields"][] = "dip270";
$tdatavoto_diputado[".googleLikeFields"][] = "dip271";
$tdatavoto_diputado[".googleLikeFields"][] = "dip272";
$tdatavoto_diputado[".googleLikeFields"][] = "dip273";
$tdatavoto_diputado[".googleLikeFields"][] = "dip274";
$tdatavoto_diputado[".googleLikeFields"][] = "dip275";
$tdatavoto_diputado[".googleLikeFields"][] = "dip276";
$tdatavoto_diputado[".googleLikeFields"][] = "dip277";
$tdatavoto_diputado[".googleLikeFields"][] = "dip278";
$tdatavoto_diputado[".googleLikeFields"][] = "dip279";
$tdatavoto_diputado[".googleLikeFields"][] = "dip280";
$tdatavoto_diputado[".googleLikeFields"][] = "validos";
$tdatavoto_diputado[".googleLikeFields"][] = "blancos";
$tdatavoto_diputado[".googleLikeFields"][] = "nulos";
$tdatavoto_diputado[".googleLikeFields"][] = "utilizados";
$tdatavoto_diputado[".googleLikeFields"][] = "no_utilizados";
$tdatavoto_diputado[".googleLikeFields"][] = "total";
$tdatavoto_diputado[".googleLikeFields"][] = "usuario";
$tdatavoto_diputado[".googleLikeFields"][] = "fecha";
$tdatavoto_diputado[".googleLikeFields"][] = "editado_por";
$tdatavoto_diputado[".googleLikeFields"][] = "fecha_edicion";



$tdatavoto_diputado[".tableType"] = "list";

$tdatavoto_diputado[".printerPageOrientation"] = 0;
$tdatavoto_diputado[".nPrinterPageScale"] = 100;

$tdatavoto_diputado[".nPrinterSplitRecords"] = 40;

$tdatavoto_diputado[".geocodingEnabled"] = false;










$tdatavoto_diputado[".pageSize"] = 20;

$tdatavoto_diputado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavoto_diputado[".strOrderBy"] = $tstrOrderBy;

$tdatavoto_diputado[".orderindexes"] = array();


$tdatavoto_diputado[".sqlHead"] = "SELECT id_urna,  	dip1,  	dip2,  	dip3,  	dip4,  	dip5,  	dip6,  	dip7,  	dip8,  	dip9,  	dip10,  	dip11,  	dip12,  	dip13,  	dip14,  	dip15,  	dip16,  	dip17,  	dip18,  	dip19,  	dip20,  	dip21,  	dip22,  	dip23,  	dip24,  	dip25,  	dip26,  	dip27,  	dip28,  	dip29,  	dip30,  	dip31,  	dip32,  	dip33,  	dip34,  	dip35,  	dip36,  	dip37,  	dip38,  	dip39,  	dip40,  	dip41,  	dip42,  	dip43,  	dip44,  	dip45,  	dip46,  	dip47,  	dip48,  	dip49,  	dip50,  	dip51,  	dip52,  	dip53,  	dip54,  	dip55,  	dip56,  	dip57,  	dip58,  	dip59,  	dip60,  	dip61,  	dip62,  	dip63,  	dip64,  	dip65,  	dip66,  	dip67,  	dip68,  	dip69,  	dip70,  	dip71,  	dip72,  	dip73,  	dip74,  	dip75,  	dip76,  	dip77,  	dip78,  	dip79,  	dip80,  	dip81,  	dip82,  	dip83,  	dip84,  	dip85,  	dip86,  	dip87,  	dip88,  	dip89,  	dip90,  	dip91,  	dip92,  	dip93,  	dip94,  	dip95,  	dip96,  	dip97,  	dip98,  	dip99,  	dip100,  	dip101,  	dip102,  	dip103,  	dip104,  	dip105,  	dip106,  	dip107,  	dip108,  	dip109,  	dip110,  	dip111,  	dip112,  	dip113,  	dip114,  	dip115,  	dip116,  	dip117,  	dip118,  	dip119,  	dip120,  	dip121,  	dip122,  	dip123,  	dip124,  	dip125,  	dip126,  	dip127,  	dip128,  	dip129,  	dip130,  	dip131,  	dip132,  	dip133,  	dip134,  	dip135,  	dip136,  	dip137,  	dip138,  	dip139,  	dip140,  	dip141,  	dip142,  	dip143,  	dip144,  	dip145,  	dip146,  	dip147,  	dip148,  	dip149,  	dip150,  	dip151,  	dip152,  	dip153,  	dip154,  	dip155,  	dip156,  	dip157,  	dip158,  	dip159,  	dip160,  	dip161,  	dip162,  	dip163,  	dip164,  	dip165,  	dip166,  	dip167,  	dip168,  	dip169,  	dip170,  	dip171,  	dip172,  	dip173,  	dip174,  	dip175,  	dip176,  	dip177,  	dip178,  	dip179,  	dip180,  	dip181,  	dip182,  	dip183,  	dip184,  	dip185,  	dip186,  	dip187,  	dip188,  	dip189,  	dip190,  	dip191,  	dip192,  	dip193,  	dip194,  	dip195,  	dip196,  	dip197,  	dip198,  	dip199,  	dip200,  	dip201,  	dip202,  	dip203,  	dip204,  	dip205,  	dip206,  	dip207,  	dip208,  	dip209,  	dip210,  	dip211,  	dip212,  	dip213,  	dip214,  	dip215,  	dip216,  	dip217,  	dip218,  	dip219,  	dip220,  	dip221,  	dip222,  	dip223,  	dip224,  	dip225,  	dip226,  	dip227,  	dip228,  	dip229,  	dip230,  	dip231,  	dip232,  	dip233,  	dip234,  	dip235,  	dip236,  	dip237,  	dip238,  	dip239,  	dip240,  	dip241,  	dip242,  	dip243,  	dip244,  	dip245,  	dip246,  	dip247,  	dip248,  	dip249,  	dip250,  	dip251,  	dip252,  	dip253,  	dip254,  	dip255,  	dip256,  	dip257,  	dip258,  	dip259,  	dip260,  	dip261,  	dip262,  	dip263,  	dip264,  	dip265,  	dip266,  	dip267,  	dip268,  	dip269,  	dip270,  	dip271,  	dip272,  	dip273,  	dip274,  	dip275,  	dip276,  	dip277,  	dip278,  	dip279,  	dip280,  	validos,  	blancos,  	nulos,  	utilizados,  	no_utilizados,  	total,  	usuario,  	fecha,  	editado_por,  	fecha_edicion";
$tdatavoto_diputado[".sqlFrom"] = "FROM voto_diputado";
$tdatavoto_diputado[".sqlWhereExpr"] = "";
$tdatavoto_diputado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavoto_diputado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavoto_diputado[".arrGroupsPerPage"] = $arrGPP;

$tdatavoto_diputado[".highlightSearchResults"] = true;

$tableKeysvoto_diputado = array();
$tableKeysvoto_diputado[] = "id_urna";
$tdatavoto_diputado[".Keys"] = $tableKeysvoto_diputado;


$tdatavoto_diputado[".hideMobileList"] = array();




//	id_urna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_urna";
	$fdata["GoodName"] = "id_urna";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","id_urna");
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


	$tdatavoto_diputado["id_urna"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "id_urna";
//	dip1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dip1";
	$fdata["GoodName"] = "dip1";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip1");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip1";

	
	
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


	$tdatavoto_diputado["dip1"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip1";
//	dip2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dip2";
	$fdata["GoodName"] = "dip2";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip2");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip2";

	
	
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


	$tdatavoto_diputado["dip2"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip2";
//	dip3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dip3";
	$fdata["GoodName"] = "dip3";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip3");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip3";

	
	
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


	$tdatavoto_diputado["dip3"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip3";
//	dip4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dip4";
	$fdata["GoodName"] = "dip4";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip4");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip4";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip4";

	
	
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


	$tdatavoto_diputado["dip4"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip4";
//	dip5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dip5";
	$fdata["GoodName"] = "dip5";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip5");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip5";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip5";

	
	
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


	$tdatavoto_diputado["dip5"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip5";
//	dip6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dip6";
	$fdata["GoodName"] = "dip6";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip6");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip6";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip6";

	
	
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


	$tdatavoto_diputado["dip6"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip6";
//	dip7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dip7";
	$fdata["GoodName"] = "dip7";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip7");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip7";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip7";

	
	
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


	$tdatavoto_diputado["dip7"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip7";
//	dip8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dip8";
	$fdata["GoodName"] = "dip8";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip8");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip8";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip8";

	
	
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


	$tdatavoto_diputado["dip8"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip8";
//	dip9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "dip9";
	$fdata["GoodName"] = "dip9";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip9");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip9";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip9";

	
	
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


	$tdatavoto_diputado["dip9"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip9";
//	dip10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "dip10";
	$fdata["GoodName"] = "dip10";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip10");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip10";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip10";

	
	
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


	$tdatavoto_diputado["dip10"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip10";
//	dip11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "dip11";
	$fdata["GoodName"] = "dip11";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip11");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip11";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip11";

	
	
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


	$tdatavoto_diputado["dip11"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip11";
//	dip12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "dip12";
	$fdata["GoodName"] = "dip12";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip12");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip12";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip12";

	
	
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


	$tdatavoto_diputado["dip12"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip12";
//	dip13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "dip13";
	$fdata["GoodName"] = "dip13";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip13");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip13";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip13";

	
	
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


	$tdatavoto_diputado["dip13"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip13";
//	dip14
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "dip14";
	$fdata["GoodName"] = "dip14";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip14");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip14";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip14";

	
	
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


	$tdatavoto_diputado["dip14"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip14";
//	dip15
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "dip15";
	$fdata["GoodName"] = "dip15";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip15");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip15";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip15";

	
	
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


	$tdatavoto_diputado["dip15"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip15";
//	dip16
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "dip16";
	$fdata["GoodName"] = "dip16";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip16");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip16";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip16";

	
	
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


	$tdatavoto_diputado["dip16"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip16";
//	dip17
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "dip17";
	$fdata["GoodName"] = "dip17";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip17");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip17";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip17";

	
	
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


	$tdatavoto_diputado["dip17"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip17";
//	dip18
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "dip18";
	$fdata["GoodName"] = "dip18";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip18");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip18";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip18";

	
	
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


	$tdatavoto_diputado["dip18"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip18";
//	dip19
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "dip19";
	$fdata["GoodName"] = "dip19";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip19");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip19";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip19";

	
	
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


	$tdatavoto_diputado["dip19"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip19";
//	dip20
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "dip20";
	$fdata["GoodName"] = "dip20";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip20");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip20";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip20";

	
	
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


	$tdatavoto_diputado["dip20"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip20";
//	dip21
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "dip21";
	$fdata["GoodName"] = "dip21";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip21");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip21";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip21";

	
	
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


	$tdatavoto_diputado["dip21"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip21";
//	dip22
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "dip22";
	$fdata["GoodName"] = "dip22";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip22");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip22";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip22";

	
	
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


	$tdatavoto_diputado["dip22"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip22";
//	dip23
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "dip23";
	$fdata["GoodName"] = "dip23";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip23");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip23";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip23";

	
	
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


	$tdatavoto_diputado["dip23"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip23";
//	dip24
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "dip24";
	$fdata["GoodName"] = "dip24";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip24");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip24";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip24";

	
	
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


	$tdatavoto_diputado["dip24"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip24";
//	dip25
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "dip25";
	$fdata["GoodName"] = "dip25";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip25");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip25";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip25";

	
	
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


	$tdatavoto_diputado["dip25"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip25";
//	dip26
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "dip26";
	$fdata["GoodName"] = "dip26";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip26");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip26";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip26";

	
	
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


	$tdatavoto_diputado["dip26"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip26";
//	dip27
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "dip27";
	$fdata["GoodName"] = "dip27";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip27");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip27";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip27";

	
	
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


	$tdatavoto_diputado["dip27"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip27";
//	dip28
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "dip28";
	$fdata["GoodName"] = "dip28";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip28");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip28";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip28";

	
	
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


	$tdatavoto_diputado["dip28"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip28";
//	dip29
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "dip29";
	$fdata["GoodName"] = "dip29";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip29");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip29";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip29";

	
	
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


	$tdatavoto_diputado["dip29"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip29";
//	dip30
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "dip30";
	$fdata["GoodName"] = "dip30";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip30");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip30";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip30";

	
	
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


	$tdatavoto_diputado["dip30"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip30";
//	dip31
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "dip31";
	$fdata["GoodName"] = "dip31";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip31");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip31";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip31";

	
	
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


	$tdatavoto_diputado["dip31"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip31";
//	dip32
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "dip32";
	$fdata["GoodName"] = "dip32";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip32");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip32";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip32";

	
	
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


	$tdatavoto_diputado["dip32"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip32";
//	dip33
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "dip33";
	$fdata["GoodName"] = "dip33";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip33");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip33";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip33";

	
	
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


	$tdatavoto_diputado["dip33"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip33";
//	dip34
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "dip34";
	$fdata["GoodName"] = "dip34";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip34");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip34";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip34";

	
	
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


	$tdatavoto_diputado["dip34"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip34";
//	dip35
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "dip35";
	$fdata["GoodName"] = "dip35";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip35");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip35";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip35";

	
	
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


	$tdatavoto_diputado["dip35"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip35";
//	dip36
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "dip36";
	$fdata["GoodName"] = "dip36";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip36");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip36";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip36";

	
	
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


	$tdatavoto_diputado["dip36"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip36";
//	dip37
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "dip37";
	$fdata["GoodName"] = "dip37";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip37");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip37";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip37";

	
	
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


	$tdatavoto_diputado["dip37"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip37";
//	dip38
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "dip38";
	$fdata["GoodName"] = "dip38";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip38");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip38";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip38";

	
	
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


	$tdatavoto_diputado["dip38"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip38";
//	dip39
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "dip39";
	$fdata["GoodName"] = "dip39";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip39");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip39";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip39";

	
	
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


	$tdatavoto_diputado["dip39"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip39";
//	dip40
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "dip40";
	$fdata["GoodName"] = "dip40";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip40");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip40";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip40";

	
	
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


	$tdatavoto_diputado["dip40"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip40";
//	dip41
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "dip41";
	$fdata["GoodName"] = "dip41";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip41");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip41";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip41";

	
	
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


	$tdatavoto_diputado["dip41"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip41";
//	dip42
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "dip42";
	$fdata["GoodName"] = "dip42";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip42");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip42";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip42";

	
	
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


	$tdatavoto_diputado["dip42"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip42";
//	dip43
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "dip43";
	$fdata["GoodName"] = "dip43";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip43");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip43";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip43";

	
	
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


	$tdatavoto_diputado["dip43"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip43";
//	dip44
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "dip44";
	$fdata["GoodName"] = "dip44";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip44");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip44";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip44";

	
	
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


	$tdatavoto_diputado["dip44"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip44";
//	dip45
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "dip45";
	$fdata["GoodName"] = "dip45";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip45");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip45";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip45";

	
	
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


	$tdatavoto_diputado["dip45"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip45";
//	dip46
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "dip46";
	$fdata["GoodName"] = "dip46";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip46");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip46";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip46";

	
	
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


	$tdatavoto_diputado["dip46"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip46";
//	dip47
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "dip47";
	$fdata["GoodName"] = "dip47";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip47");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip47";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip47";

	
	
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


	$tdatavoto_diputado["dip47"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip47";
//	dip48
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "dip48";
	$fdata["GoodName"] = "dip48";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip48");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip48";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip48";

	
	
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


	$tdatavoto_diputado["dip48"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip48";
//	dip49
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "dip49";
	$fdata["GoodName"] = "dip49";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip49");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip49";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip49";

	
	
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


	$tdatavoto_diputado["dip49"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip49";
//	dip50
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "dip50";
	$fdata["GoodName"] = "dip50";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip50");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip50";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip50";

	
	
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


	$tdatavoto_diputado["dip50"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip50";
//	dip51
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "dip51";
	$fdata["GoodName"] = "dip51";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip51");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip51";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip51";

	
	
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


	$tdatavoto_diputado["dip51"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip51";
//	dip52
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "dip52";
	$fdata["GoodName"] = "dip52";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip52");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip52";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip52";

	
	
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


	$tdatavoto_diputado["dip52"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip52";
//	dip53
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "dip53";
	$fdata["GoodName"] = "dip53";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip53");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip53";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip53";

	
	
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


	$tdatavoto_diputado["dip53"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip53";
//	dip54
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "dip54";
	$fdata["GoodName"] = "dip54";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip54");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip54";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip54";

	
	
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


	$tdatavoto_diputado["dip54"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip54";
//	dip55
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "dip55";
	$fdata["GoodName"] = "dip55";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip55");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip55";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip55";

	
	
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


	$tdatavoto_diputado["dip55"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip55";
//	dip56
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "dip56";
	$fdata["GoodName"] = "dip56";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip56");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip56";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip56";

	
	
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


	$tdatavoto_diputado["dip56"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip56";
//	dip57
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "dip57";
	$fdata["GoodName"] = "dip57";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip57");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip57";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip57";

	
	
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


	$tdatavoto_diputado["dip57"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip57";
//	dip58
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "dip58";
	$fdata["GoodName"] = "dip58";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip58");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip58";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip58";

	
	
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


	$tdatavoto_diputado["dip58"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip58";
//	dip59
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "dip59";
	$fdata["GoodName"] = "dip59";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip59");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip59";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip59";

	
	
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


	$tdatavoto_diputado["dip59"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip59";
//	dip60
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "dip60";
	$fdata["GoodName"] = "dip60";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip60");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip60";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip60";

	
	
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


	$tdatavoto_diputado["dip60"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip60";
//	dip61
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "dip61";
	$fdata["GoodName"] = "dip61";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip61");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip61";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip61";

	
	
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


	$tdatavoto_diputado["dip61"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip61";
//	dip62
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "dip62";
	$fdata["GoodName"] = "dip62";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip62");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip62";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip62";

	
	
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


	$tdatavoto_diputado["dip62"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip62";
//	dip63
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "dip63";
	$fdata["GoodName"] = "dip63";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip63");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip63";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip63";

	
	
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


	$tdatavoto_diputado["dip63"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip63";
//	dip64
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "dip64";
	$fdata["GoodName"] = "dip64";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip64");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip64";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip64";

	
	
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


	$tdatavoto_diputado["dip64"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip64";
//	dip65
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "dip65";
	$fdata["GoodName"] = "dip65";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip65");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip65";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip65";

	
	
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


	$tdatavoto_diputado["dip65"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip65";
//	dip66
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "dip66";
	$fdata["GoodName"] = "dip66";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip66");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip66";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip66";

	
	
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


	$tdatavoto_diputado["dip66"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip66";
//	dip67
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "dip67";
	$fdata["GoodName"] = "dip67";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip67");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip67";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip67";

	
	
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


	$tdatavoto_diputado["dip67"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip67";
//	dip68
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "dip68";
	$fdata["GoodName"] = "dip68";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip68");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip68";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip68";

	
	
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


	$tdatavoto_diputado["dip68"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip68";
//	dip69
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "dip69";
	$fdata["GoodName"] = "dip69";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip69");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip69";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip69";

	
	
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


	$tdatavoto_diputado["dip69"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip69";
//	dip70
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "dip70";
	$fdata["GoodName"] = "dip70";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip70");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip70";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip70";

	
	
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


	$tdatavoto_diputado["dip70"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip70";
//	dip71
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "dip71";
	$fdata["GoodName"] = "dip71";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip71");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip71";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip71";

	
	
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


	$tdatavoto_diputado["dip71"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip71";
//	dip72
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "dip72";
	$fdata["GoodName"] = "dip72";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip72");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip72";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip72";

	
	
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


	$tdatavoto_diputado["dip72"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip72";
//	dip73
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "dip73";
	$fdata["GoodName"] = "dip73";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip73");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip73";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip73";

	
	
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


	$tdatavoto_diputado["dip73"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip73";
//	dip74
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "dip74";
	$fdata["GoodName"] = "dip74";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip74");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip74";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip74";

	
	
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


	$tdatavoto_diputado["dip74"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip74";
//	dip75
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "dip75";
	$fdata["GoodName"] = "dip75";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip75");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip75";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip75";

	
	
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


	$tdatavoto_diputado["dip75"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip75";
//	dip76
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "dip76";
	$fdata["GoodName"] = "dip76";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip76");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip76";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip76";

	
	
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


	$tdatavoto_diputado["dip76"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip76";
//	dip77
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "dip77";
	$fdata["GoodName"] = "dip77";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip77");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip77";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip77";

	
	
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


	$tdatavoto_diputado["dip77"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip77";
//	dip78
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "dip78";
	$fdata["GoodName"] = "dip78";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip78");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip78";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip78";

	
	
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


	$tdatavoto_diputado["dip78"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip78";
//	dip79
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "dip79";
	$fdata["GoodName"] = "dip79";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip79");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip79";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip79";

	
	
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


	$tdatavoto_diputado["dip79"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip79";
//	dip80
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "dip80";
	$fdata["GoodName"] = "dip80";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip80");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip80";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip80";

	
	
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


	$tdatavoto_diputado["dip80"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip80";
//	dip81
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "dip81";
	$fdata["GoodName"] = "dip81";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip81");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip81";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip81";

	
	
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


	$tdatavoto_diputado["dip81"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip81";
//	dip82
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "dip82";
	$fdata["GoodName"] = "dip82";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip82");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip82";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip82";

	
	
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


	$tdatavoto_diputado["dip82"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip82";
//	dip83
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "dip83";
	$fdata["GoodName"] = "dip83";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip83");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip83";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip83";

	
	
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


	$tdatavoto_diputado["dip83"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip83";
//	dip84
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "dip84";
	$fdata["GoodName"] = "dip84";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip84");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip84";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip84";

	
	
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


	$tdatavoto_diputado["dip84"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip84";
//	dip85
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "dip85";
	$fdata["GoodName"] = "dip85";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip85");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip85";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip85";

	
	
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


	$tdatavoto_diputado["dip85"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip85";
//	dip86
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "dip86";
	$fdata["GoodName"] = "dip86";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip86");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip86";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip86";

	
	
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


	$tdatavoto_diputado["dip86"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip86";
//	dip87
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "dip87";
	$fdata["GoodName"] = "dip87";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip87");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip87";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip87";

	
	
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


	$tdatavoto_diputado["dip87"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip87";
//	dip88
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "dip88";
	$fdata["GoodName"] = "dip88";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip88");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip88";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip88";

	
	
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


	$tdatavoto_diputado["dip88"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip88";
//	dip89
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "dip89";
	$fdata["GoodName"] = "dip89";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip89");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip89";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip89";

	
	
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


	$tdatavoto_diputado["dip89"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip89";
//	dip90
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "dip90";
	$fdata["GoodName"] = "dip90";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip90");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip90";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip90";

	
	
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


	$tdatavoto_diputado["dip90"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip90";
//	dip91
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "dip91";
	$fdata["GoodName"] = "dip91";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip91");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip91";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip91";

	
	
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


	$tdatavoto_diputado["dip91"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip91";
//	dip92
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "dip92";
	$fdata["GoodName"] = "dip92";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip92");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip92";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip92";

	
	
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


	$tdatavoto_diputado["dip92"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip92";
//	dip93
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "dip93";
	$fdata["GoodName"] = "dip93";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip93");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip93";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip93";

	
	
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


	$tdatavoto_diputado["dip93"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip93";
//	dip94
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "dip94";
	$fdata["GoodName"] = "dip94";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip94");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip94";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip94";

	
	
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


	$tdatavoto_diputado["dip94"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip94";
//	dip95
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "dip95";
	$fdata["GoodName"] = "dip95";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip95");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip95";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip95";

	
	
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


	$tdatavoto_diputado["dip95"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip95";
//	dip96
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "dip96";
	$fdata["GoodName"] = "dip96";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip96");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip96";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip96";

	
	
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


	$tdatavoto_diputado["dip96"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip96";
//	dip97
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "dip97";
	$fdata["GoodName"] = "dip97";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip97");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip97";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip97";

	
	
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


	$tdatavoto_diputado["dip97"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip97";
//	dip98
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "dip98";
	$fdata["GoodName"] = "dip98";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip98");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip98";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip98";

	
	
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


	$tdatavoto_diputado["dip98"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip98";
//	dip99
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "dip99";
	$fdata["GoodName"] = "dip99";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip99");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip99";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip99";

	
	
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


	$tdatavoto_diputado["dip99"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip99";
//	dip100
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "dip100";
	$fdata["GoodName"] = "dip100";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip100");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip100";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip100";

	
	
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


	$tdatavoto_diputado["dip100"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip100";
//	dip101
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "dip101";
	$fdata["GoodName"] = "dip101";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip101");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip101";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip101";

	
	
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


	$tdatavoto_diputado["dip101"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip101";
//	dip102
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "dip102";
	$fdata["GoodName"] = "dip102";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip102");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip102";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip102";

	
	
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


	$tdatavoto_diputado["dip102"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip102";
//	dip103
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "dip103";
	$fdata["GoodName"] = "dip103";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip103");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip103";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip103";

	
	
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


	$tdatavoto_diputado["dip103"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip103";
//	dip104
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "dip104";
	$fdata["GoodName"] = "dip104";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip104");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip104";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip104";

	
	
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


	$tdatavoto_diputado["dip104"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip104";
//	dip105
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "dip105";
	$fdata["GoodName"] = "dip105";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip105");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip105";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip105";

	
	
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


	$tdatavoto_diputado["dip105"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip105";
//	dip106
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "dip106";
	$fdata["GoodName"] = "dip106";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip106");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip106";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip106";

	
	
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


	$tdatavoto_diputado["dip106"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip106";
//	dip107
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 108;
	$fdata["strName"] = "dip107";
	$fdata["GoodName"] = "dip107";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip107");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip107";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip107";

	
	
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


	$tdatavoto_diputado["dip107"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip107";
//	dip108
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 109;
	$fdata["strName"] = "dip108";
	$fdata["GoodName"] = "dip108";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip108");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip108";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip108";

	
	
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


	$tdatavoto_diputado["dip108"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip108";
//	dip109
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 110;
	$fdata["strName"] = "dip109";
	$fdata["GoodName"] = "dip109";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip109");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip109";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip109";

	
	
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


	$tdatavoto_diputado["dip109"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip109";
//	dip110
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 111;
	$fdata["strName"] = "dip110";
	$fdata["GoodName"] = "dip110";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip110");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip110";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip110";

	
	
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


	$tdatavoto_diputado["dip110"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip110";
//	dip111
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 112;
	$fdata["strName"] = "dip111";
	$fdata["GoodName"] = "dip111";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip111");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip111";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip111";

	
	
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


	$tdatavoto_diputado["dip111"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip111";
//	dip112
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 113;
	$fdata["strName"] = "dip112";
	$fdata["GoodName"] = "dip112";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip112");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip112";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip112";

	
	
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


	$tdatavoto_diputado["dip112"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip112";
//	dip113
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 114;
	$fdata["strName"] = "dip113";
	$fdata["GoodName"] = "dip113";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip113");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip113";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip113";

	
	
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


	$tdatavoto_diputado["dip113"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip113";
//	dip114
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 115;
	$fdata["strName"] = "dip114";
	$fdata["GoodName"] = "dip114";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip114");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip114";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip114";

	
	
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


	$tdatavoto_diputado["dip114"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip114";
//	dip115
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 116;
	$fdata["strName"] = "dip115";
	$fdata["GoodName"] = "dip115";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip115");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip115";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip115";

	
	
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


	$tdatavoto_diputado["dip115"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip115";
//	dip116
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 117;
	$fdata["strName"] = "dip116";
	$fdata["GoodName"] = "dip116";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip116");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip116";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip116";

	
	
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


	$tdatavoto_diputado["dip116"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip116";
//	dip117
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 118;
	$fdata["strName"] = "dip117";
	$fdata["GoodName"] = "dip117";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip117");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip117";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip117";

	
	
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


	$tdatavoto_diputado["dip117"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip117";
//	dip118
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 119;
	$fdata["strName"] = "dip118";
	$fdata["GoodName"] = "dip118";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip118");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip118";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip118";

	
	
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


	$tdatavoto_diputado["dip118"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip118";
//	dip119
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 120;
	$fdata["strName"] = "dip119";
	$fdata["GoodName"] = "dip119";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip119");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip119";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip119";

	
	
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


	$tdatavoto_diputado["dip119"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip119";
//	dip120
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 121;
	$fdata["strName"] = "dip120";
	$fdata["GoodName"] = "dip120";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip120");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip120";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip120";

	
	
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


	$tdatavoto_diputado["dip120"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip120";
//	dip121
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 122;
	$fdata["strName"] = "dip121";
	$fdata["GoodName"] = "dip121";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip121");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip121";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip121";

	
	
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


	$tdatavoto_diputado["dip121"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip121";
//	dip122
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 123;
	$fdata["strName"] = "dip122";
	$fdata["GoodName"] = "dip122";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip122");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip122";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip122";

	
	
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


	$tdatavoto_diputado["dip122"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip122";
//	dip123
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 124;
	$fdata["strName"] = "dip123";
	$fdata["GoodName"] = "dip123";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip123");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip123";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip123";

	
	
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


	$tdatavoto_diputado["dip123"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip123";
//	dip124
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 125;
	$fdata["strName"] = "dip124";
	$fdata["GoodName"] = "dip124";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip124");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip124";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip124";

	
	
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


	$tdatavoto_diputado["dip124"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip124";
//	dip125
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 126;
	$fdata["strName"] = "dip125";
	$fdata["GoodName"] = "dip125";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip125");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip125";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip125";

	
	
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


	$tdatavoto_diputado["dip125"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip125";
//	dip126
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 127;
	$fdata["strName"] = "dip126";
	$fdata["GoodName"] = "dip126";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip126");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip126";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip126";

	
	
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


	$tdatavoto_diputado["dip126"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip126";
//	dip127
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 128;
	$fdata["strName"] = "dip127";
	$fdata["GoodName"] = "dip127";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip127");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip127";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip127";

	
	
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


	$tdatavoto_diputado["dip127"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip127";
//	dip128
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 129;
	$fdata["strName"] = "dip128";
	$fdata["GoodName"] = "dip128";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip128");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip128";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip128";

	
	
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


	$tdatavoto_diputado["dip128"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip128";
//	dip129
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 130;
	$fdata["strName"] = "dip129";
	$fdata["GoodName"] = "dip129";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip129");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip129";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip129";

	
	
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


	$tdatavoto_diputado["dip129"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip129";
//	dip130
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 131;
	$fdata["strName"] = "dip130";
	$fdata["GoodName"] = "dip130";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip130");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip130";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip130";

	
	
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


	$tdatavoto_diputado["dip130"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip130";
//	dip131
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 132;
	$fdata["strName"] = "dip131";
	$fdata["GoodName"] = "dip131";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip131");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip131";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip131";

	
	
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


	$tdatavoto_diputado["dip131"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip131";
//	dip132
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 133;
	$fdata["strName"] = "dip132";
	$fdata["GoodName"] = "dip132";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip132");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip132";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip132";

	
	
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


	$tdatavoto_diputado["dip132"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip132";
//	dip133
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 134;
	$fdata["strName"] = "dip133";
	$fdata["GoodName"] = "dip133";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip133");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip133";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip133";

	
	
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


	$tdatavoto_diputado["dip133"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip133";
//	dip134
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 135;
	$fdata["strName"] = "dip134";
	$fdata["GoodName"] = "dip134";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip134");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip134";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip134";

	
	
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


	$tdatavoto_diputado["dip134"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip134";
//	dip135
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 136;
	$fdata["strName"] = "dip135";
	$fdata["GoodName"] = "dip135";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip135");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip135";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip135";

	
	
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


	$tdatavoto_diputado["dip135"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip135";
//	dip136
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 137;
	$fdata["strName"] = "dip136";
	$fdata["GoodName"] = "dip136";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip136");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip136";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip136";

	
	
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


	$tdatavoto_diputado["dip136"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip136";
//	dip137
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 138;
	$fdata["strName"] = "dip137";
	$fdata["GoodName"] = "dip137";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip137");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip137";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip137";

	
	
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


	$tdatavoto_diputado["dip137"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip137";
//	dip138
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 139;
	$fdata["strName"] = "dip138";
	$fdata["GoodName"] = "dip138";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip138");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip138";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip138";

	
	
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


	$tdatavoto_diputado["dip138"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip138";
//	dip139
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 140;
	$fdata["strName"] = "dip139";
	$fdata["GoodName"] = "dip139";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip139");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip139";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip139";

	
	
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


	$tdatavoto_diputado["dip139"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip139";
//	dip140
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 141;
	$fdata["strName"] = "dip140";
	$fdata["GoodName"] = "dip140";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip140");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip140";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip140";

	
	
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


	$tdatavoto_diputado["dip140"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip140";
//	dip141
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 142;
	$fdata["strName"] = "dip141";
	$fdata["GoodName"] = "dip141";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip141");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip141";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip141";

	
	
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


	$tdatavoto_diputado["dip141"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip141";
//	dip142
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 143;
	$fdata["strName"] = "dip142";
	$fdata["GoodName"] = "dip142";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip142");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip142";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip142";

	
	
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


	$tdatavoto_diputado["dip142"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip142";
//	dip143
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 144;
	$fdata["strName"] = "dip143";
	$fdata["GoodName"] = "dip143";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip143");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip143";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip143";

	
	
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


	$tdatavoto_diputado["dip143"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip143";
//	dip144
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 145;
	$fdata["strName"] = "dip144";
	$fdata["GoodName"] = "dip144";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip144");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip144";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip144";

	
	
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


	$tdatavoto_diputado["dip144"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip144";
//	dip145
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 146;
	$fdata["strName"] = "dip145";
	$fdata["GoodName"] = "dip145";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip145");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip145";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip145";

	
	
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


	$tdatavoto_diputado["dip145"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip145";
//	dip146
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 147;
	$fdata["strName"] = "dip146";
	$fdata["GoodName"] = "dip146";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip146");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip146";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip146";

	
	
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


	$tdatavoto_diputado["dip146"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip146";
//	dip147
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 148;
	$fdata["strName"] = "dip147";
	$fdata["GoodName"] = "dip147";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip147");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip147";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip147";

	
	
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


	$tdatavoto_diputado["dip147"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip147";
//	dip148
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 149;
	$fdata["strName"] = "dip148";
	$fdata["GoodName"] = "dip148";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip148");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip148";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip148";

	
	
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


	$tdatavoto_diputado["dip148"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip148";
//	dip149
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 150;
	$fdata["strName"] = "dip149";
	$fdata["GoodName"] = "dip149";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip149");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip149";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip149";

	
	
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


	$tdatavoto_diputado["dip149"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip149";
//	dip150
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 151;
	$fdata["strName"] = "dip150";
	$fdata["GoodName"] = "dip150";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip150");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip150";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip150";

	
	
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


	$tdatavoto_diputado["dip150"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip150";
//	dip151
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 152;
	$fdata["strName"] = "dip151";
	$fdata["GoodName"] = "dip151";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip151");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip151";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip151";

	
	
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


	$tdatavoto_diputado["dip151"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip151";
//	dip152
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 153;
	$fdata["strName"] = "dip152";
	$fdata["GoodName"] = "dip152";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip152");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip152";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip152";

	
	
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


	$tdatavoto_diputado["dip152"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip152";
//	dip153
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 154;
	$fdata["strName"] = "dip153";
	$fdata["GoodName"] = "dip153";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip153");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip153";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip153";

	
	
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


	$tdatavoto_diputado["dip153"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip153";
//	dip154
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 155;
	$fdata["strName"] = "dip154";
	$fdata["GoodName"] = "dip154";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip154");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip154";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip154";

	
	
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


	$tdatavoto_diputado["dip154"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip154";
//	dip155
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 156;
	$fdata["strName"] = "dip155";
	$fdata["GoodName"] = "dip155";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip155");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip155";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip155";

	
	
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


	$tdatavoto_diputado["dip155"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip155";
//	dip156
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 157;
	$fdata["strName"] = "dip156";
	$fdata["GoodName"] = "dip156";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip156");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip156";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip156";

	
	
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


	$tdatavoto_diputado["dip156"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip156";
//	dip157
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 158;
	$fdata["strName"] = "dip157";
	$fdata["GoodName"] = "dip157";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip157");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip157";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip157";

	
	
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


	$tdatavoto_diputado["dip157"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip157";
//	dip158
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 159;
	$fdata["strName"] = "dip158";
	$fdata["GoodName"] = "dip158";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip158");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip158";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip158";

	
	
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


	$tdatavoto_diputado["dip158"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip158";
//	dip159
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 160;
	$fdata["strName"] = "dip159";
	$fdata["GoodName"] = "dip159";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip159");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip159";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip159";

	
	
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


	$tdatavoto_diputado["dip159"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip159";
//	dip160
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 161;
	$fdata["strName"] = "dip160";
	$fdata["GoodName"] = "dip160";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip160");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip160";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip160";

	
	
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


	$tdatavoto_diputado["dip160"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip160";
//	dip161
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 162;
	$fdata["strName"] = "dip161";
	$fdata["GoodName"] = "dip161";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip161");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip161";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip161";

	
	
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


	$tdatavoto_diputado["dip161"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip161";
//	dip162
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 163;
	$fdata["strName"] = "dip162";
	$fdata["GoodName"] = "dip162";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip162");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip162";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip162";

	
	
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


	$tdatavoto_diputado["dip162"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip162";
//	dip163
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 164;
	$fdata["strName"] = "dip163";
	$fdata["GoodName"] = "dip163";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip163");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip163";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip163";

	
	
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


	$tdatavoto_diputado["dip163"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip163";
//	dip164
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 165;
	$fdata["strName"] = "dip164";
	$fdata["GoodName"] = "dip164";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip164");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip164";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip164";

	
	
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


	$tdatavoto_diputado["dip164"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip164";
//	dip165
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 166;
	$fdata["strName"] = "dip165";
	$fdata["GoodName"] = "dip165";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip165");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip165";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip165";

	
	
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


	$tdatavoto_diputado["dip165"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip165";
//	dip166
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 167;
	$fdata["strName"] = "dip166";
	$fdata["GoodName"] = "dip166";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip166");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip166";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip166";

	
	
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


	$tdatavoto_diputado["dip166"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip166";
//	dip167
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 168;
	$fdata["strName"] = "dip167";
	$fdata["GoodName"] = "dip167";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip167");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip167";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip167";

	
	
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


	$tdatavoto_diputado["dip167"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip167";
//	dip168
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 169;
	$fdata["strName"] = "dip168";
	$fdata["GoodName"] = "dip168";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip168");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip168";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip168";

	
	
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


	$tdatavoto_diputado["dip168"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip168";
//	dip169
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 170;
	$fdata["strName"] = "dip169";
	$fdata["GoodName"] = "dip169";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip169");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip169";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip169";

	
	
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


	$tdatavoto_diputado["dip169"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip169";
//	dip170
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 171;
	$fdata["strName"] = "dip170";
	$fdata["GoodName"] = "dip170";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip170");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip170";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip170";

	
	
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


	$tdatavoto_diputado["dip170"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip170";
//	dip171
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 172;
	$fdata["strName"] = "dip171";
	$fdata["GoodName"] = "dip171";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip171");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip171";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip171";

	
	
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


	$tdatavoto_diputado["dip171"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip171";
//	dip172
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 173;
	$fdata["strName"] = "dip172";
	$fdata["GoodName"] = "dip172";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip172");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip172";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip172";

	
	
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


	$tdatavoto_diputado["dip172"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip172";
//	dip173
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 174;
	$fdata["strName"] = "dip173";
	$fdata["GoodName"] = "dip173";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip173");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip173";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip173";

	
	
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


	$tdatavoto_diputado["dip173"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip173";
//	dip174
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 175;
	$fdata["strName"] = "dip174";
	$fdata["GoodName"] = "dip174";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip174");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip174";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip174";

	
	
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


	$tdatavoto_diputado["dip174"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip174";
//	dip175
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 176;
	$fdata["strName"] = "dip175";
	$fdata["GoodName"] = "dip175";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip175");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip175";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip175";

	
	
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


	$tdatavoto_diputado["dip175"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip175";
//	dip176
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 177;
	$fdata["strName"] = "dip176";
	$fdata["GoodName"] = "dip176";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip176");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip176";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip176";

	
	
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


	$tdatavoto_diputado["dip176"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip176";
//	dip177
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 178;
	$fdata["strName"] = "dip177";
	$fdata["GoodName"] = "dip177";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip177");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip177";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip177";

	
	
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


	$tdatavoto_diputado["dip177"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip177";
//	dip178
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 179;
	$fdata["strName"] = "dip178";
	$fdata["GoodName"] = "dip178";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip178");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip178";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip178";

	
	
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


	$tdatavoto_diputado["dip178"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip178";
//	dip179
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 180;
	$fdata["strName"] = "dip179";
	$fdata["GoodName"] = "dip179";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip179");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip179";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip179";

	
	
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


	$tdatavoto_diputado["dip179"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip179";
//	dip180
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 181;
	$fdata["strName"] = "dip180";
	$fdata["GoodName"] = "dip180";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip180");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip180";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip180";

	
	
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


	$tdatavoto_diputado["dip180"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip180";
//	dip181
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 182;
	$fdata["strName"] = "dip181";
	$fdata["GoodName"] = "dip181";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip181");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip181";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip181";

	
	
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


	$tdatavoto_diputado["dip181"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip181";
//	dip182
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 183;
	$fdata["strName"] = "dip182";
	$fdata["GoodName"] = "dip182";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip182");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip182";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip182";

	
	
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


	$tdatavoto_diputado["dip182"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip182";
//	dip183
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 184;
	$fdata["strName"] = "dip183";
	$fdata["GoodName"] = "dip183";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip183");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip183";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip183";

	
	
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


	$tdatavoto_diputado["dip183"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip183";
//	dip184
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 185;
	$fdata["strName"] = "dip184";
	$fdata["GoodName"] = "dip184";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip184");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip184";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip184";

	
	
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


	$tdatavoto_diputado["dip184"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip184";
//	dip185
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 186;
	$fdata["strName"] = "dip185";
	$fdata["GoodName"] = "dip185";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip185");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip185";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip185";

	
	
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


	$tdatavoto_diputado["dip185"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip185";
//	dip186
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 187;
	$fdata["strName"] = "dip186";
	$fdata["GoodName"] = "dip186";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip186");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip186";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip186";

	
	
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


	$tdatavoto_diputado["dip186"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip186";
//	dip187
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 188;
	$fdata["strName"] = "dip187";
	$fdata["GoodName"] = "dip187";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip187");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip187";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip187";

	
	
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


	$tdatavoto_diputado["dip187"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip187";
//	dip188
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 189;
	$fdata["strName"] = "dip188";
	$fdata["GoodName"] = "dip188";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip188");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip188";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip188";

	
	
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


	$tdatavoto_diputado["dip188"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip188";
//	dip189
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 190;
	$fdata["strName"] = "dip189";
	$fdata["GoodName"] = "dip189";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip189");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip189";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip189";

	
	
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


	$tdatavoto_diputado["dip189"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip189";
//	dip190
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 191;
	$fdata["strName"] = "dip190";
	$fdata["GoodName"] = "dip190";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip190");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip190";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip190";

	
	
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


	$tdatavoto_diputado["dip190"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip190";
//	dip191
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 192;
	$fdata["strName"] = "dip191";
	$fdata["GoodName"] = "dip191";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip191");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip191";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip191";

	
	
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


	$tdatavoto_diputado["dip191"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip191";
//	dip192
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 193;
	$fdata["strName"] = "dip192";
	$fdata["GoodName"] = "dip192";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip192");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip192";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip192";

	
	
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


	$tdatavoto_diputado["dip192"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip192";
//	dip193
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 194;
	$fdata["strName"] = "dip193";
	$fdata["GoodName"] = "dip193";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip193");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip193";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip193";

	
	
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


	$tdatavoto_diputado["dip193"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip193";
//	dip194
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 195;
	$fdata["strName"] = "dip194";
	$fdata["GoodName"] = "dip194";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip194");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip194";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip194";

	
	
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


	$tdatavoto_diputado["dip194"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip194";
//	dip195
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 196;
	$fdata["strName"] = "dip195";
	$fdata["GoodName"] = "dip195";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip195");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip195";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip195";

	
	
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


	$tdatavoto_diputado["dip195"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip195";
//	dip196
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 197;
	$fdata["strName"] = "dip196";
	$fdata["GoodName"] = "dip196";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip196");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip196";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip196";

	
	
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


	$tdatavoto_diputado["dip196"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip196";
//	dip197
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 198;
	$fdata["strName"] = "dip197";
	$fdata["GoodName"] = "dip197";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip197");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip197";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip197";

	
	
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


	$tdatavoto_diputado["dip197"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip197";
//	dip198
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 199;
	$fdata["strName"] = "dip198";
	$fdata["GoodName"] = "dip198";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip198");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip198";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip198";

	
	
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


	$tdatavoto_diputado["dip198"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip198";
//	dip199
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 200;
	$fdata["strName"] = "dip199";
	$fdata["GoodName"] = "dip199";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip199");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip199";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip199";

	
	
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


	$tdatavoto_diputado["dip199"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip199";
//	dip200
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 201;
	$fdata["strName"] = "dip200";
	$fdata["GoodName"] = "dip200";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip200");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip200";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip200";

	
	
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


	$tdatavoto_diputado["dip200"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip200";
//	dip201
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 202;
	$fdata["strName"] = "dip201";
	$fdata["GoodName"] = "dip201";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip201");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip201";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip201";

	
	
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


	$tdatavoto_diputado["dip201"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip201";
//	dip202
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 203;
	$fdata["strName"] = "dip202";
	$fdata["GoodName"] = "dip202";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip202");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip202";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip202";

	
	
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


	$tdatavoto_diputado["dip202"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip202";
//	dip203
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 204;
	$fdata["strName"] = "dip203";
	$fdata["GoodName"] = "dip203";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip203");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip203";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip203";

	
	
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


	$tdatavoto_diputado["dip203"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip203";
//	dip204
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 205;
	$fdata["strName"] = "dip204";
	$fdata["GoodName"] = "dip204";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip204");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip204";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip204";

	
	
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


	$tdatavoto_diputado["dip204"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip204";
//	dip205
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 206;
	$fdata["strName"] = "dip205";
	$fdata["GoodName"] = "dip205";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip205");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip205";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip205";

	
	
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


	$tdatavoto_diputado["dip205"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip205";
//	dip206
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 207;
	$fdata["strName"] = "dip206";
	$fdata["GoodName"] = "dip206";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip206");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip206";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip206";

	
	
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


	$tdatavoto_diputado["dip206"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip206";
//	dip207
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 208;
	$fdata["strName"] = "dip207";
	$fdata["GoodName"] = "dip207";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip207");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip207";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip207";

	
	
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


	$tdatavoto_diputado["dip207"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip207";
//	dip208
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 209;
	$fdata["strName"] = "dip208";
	$fdata["GoodName"] = "dip208";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip208");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip208";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip208";

	
	
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


	$tdatavoto_diputado["dip208"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip208";
//	dip209
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 210;
	$fdata["strName"] = "dip209";
	$fdata["GoodName"] = "dip209";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip209");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip209";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip209";

	
	
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


	$tdatavoto_diputado["dip209"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip209";
//	dip210
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 211;
	$fdata["strName"] = "dip210";
	$fdata["GoodName"] = "dip210";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip210");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip210";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip210";

	
	
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


	$tdatavoto_diputado["dip210"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip210";
//	dip211
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 212;
	$fdata["strName"] = "dip211";
	$fdata["GoodName"] = "dip211";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip211");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip211";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip211";

	
	
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


	$tdatavoto_diputado["dip211"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip211";
//	dip212
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 213;
	$fdata["strName"] = "dip212";
	$fdata["GoodName"] = "dip212";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip212");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip212";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip212";

	
	
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


	$tdatavoto_diputado["dip212"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip212";
//	dip213
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 214;
	$fdata["strName"] = "dip213";
	$fdata["GoodName"] = "dip213";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip213");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip213";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip213";

	
	
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


	$tdatavoto_diputado["dip213"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip213";
//	dip214
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 215;
	$fdata["strName"] = "dip214";
	$fdata["GoodName"] = "dip214";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip214");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip214";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip214";

	
	
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


	$tdatavoto_diputado["dip214"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip214";
//	dip215
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 216;
	$fdata["strName"] = "dip215";
	$fdata["GoodName"] = "dip215";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip215");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip215";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip215";

	
	
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


	$tdatavoto_diputado["dip215"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip215";
//	dip216
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 217;
	$fdata["strName"] = "dip216";
	$fdata["GoodName"] = "dip216";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip216");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip216";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip216";

	
	
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


	$tdatavoto_diputado["dip216"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip216";
//	dip217
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 218;
	$fdata["strName"] = "dip217";
	$fdata["GoodName"] = "dip217";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip217");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip217";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip217";

	
	
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


	$tdatavoto_diputado["dip217"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip217";
//	dip218
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 219;
	$fdata["strName"] = "dip218";
	$fdata["GoodName"] = "dip218";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip218");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip218";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip218";

	
	
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


	$tdatavoto_diputado["dip218"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip218";
//	dip219
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 220;
	$fdata["strName"] = "dip219";
	$fdata["GoodName"] = "dip219";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip219");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip219";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip219";

	
	
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


	$tdatavoto_diputado["dip219"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip219";
//	dip220
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 221;
	$fdata["strName"] = "dip220";
	$fdata["GoodName"] = "dip220";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip220");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip220";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip220";

	
	
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


	$tdatavoto_diputado["dip220"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip220";
//	dip221
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 222;
	$fdata["strName"] = "dip221";
	$fdata["GoodName"] = "dip221";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip221");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip221";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip221";

	
	
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


	$tdatavoto_diputado["dip221"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip221";
//	dip222
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 223;
	$fdata["strName"] = "dip222";
	$fdata["GoodName"] = "dip222";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip222");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip222";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip222";

	
	
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


	$tdatavoto_diputado["dip222"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip222";
//	dip223
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 224;
	$fdata["strName"] = "dip223";
	$fdata["GoodName"] = "dip223";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip223");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip223";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip223";

	
	
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


	$tdatavoto_diputado["dip223"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip223";
//	dip224
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 225;
	$fdata["strName"] = "dip224";
	$fdata["GoodName"] = "dip224";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip224");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip224";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip224";

	
	
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


	$tdatavoto_diputado["dip224"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip224";
//	dip225
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 226;
	$fdata["strName"] = "dip225";
	$fdata["GoodName"] = "dip225";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip225");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip225";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip225";

	
	
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


	$tdatavoto_diputado["dip225"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip225";
//	dip226
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 227;
	$fdata["strName"] = "dip226";
	$fdata["GoodName"] = "dip226";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip226");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip226";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip226";

	
	
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


	$tdatavoto_diputado["dip226"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip226";
//	dip227
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 228;
	$fdata["strName"] = "dip227";
	$fdata["GoodName"] = "dip227";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip227");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip227";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip227";

	
	
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


	$tdatavoto_diputado["dip227"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip227";
//	dip228
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 229;
	$fdata["strName"] = "dip228";
	$fdata["GoodName"] = "dip228";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip228");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip228";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip228";

	
	
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


	$tdatavoto_diputado["dip228"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip228";
//	dip229
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 230;
	$fdata["strName"] = "dip229";
	$fdata["GoodName"] = "dip229";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip229");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip229";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip229";

	
	
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


	$tdatavoto_diputado["dip229"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip229";
//	dip230
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 231;
	$fdata["strName"] = "dip230";
	$fdata["GoodName"] = "dip230";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip230");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip230";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip230";

	
	
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


	$tdatavoto_diputado["dip230"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip230";
//	dip231
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 232;
	$fdata["strName"] = "dip231";
	$fdata["GoodName"] = "dip231";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip231");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip231";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip231";

	
	
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


	$tdatavoto_diputado["dip231"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip231";
//	dip232
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 233;
	$fdata["strName"] = "dip232";
	$fdata["GoodName"] = "dip232";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip232");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip232";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip232";

	
	
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


	$tdatavoto_diputado["dip232"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip232";
//	dip233
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 234;
	$fdata["strName"] = "dip233";
	$fdata["GoodName"] = "dip233";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip233");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip233";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip233";

	
	
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


	$tdatavoto_diputado["dip233"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip233";
//	dip234
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 235;
	$fdata["strName"] = "dip234";
	$fdata["GoodName"] = "dip234";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip234");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip234";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip234";

	
	
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


	$tdatavoto_diputado["dip234"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip234";
//	dip235
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 236;
	$fdata["strName"] = "dip235";
	$fdata["GoodName"] = "dip235";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip235");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip235";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip235";

	
	
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


	$tdatavoto_diputado["dip235"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip235";
//	dip236
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 237;
	$fdata["strName"] = "dip236";
	$fdata["GoodName"] = "dip236";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip236");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip236";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip236";

	
	
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


	$tdatavoto_diputado["dip236"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip236";
//	dip237
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 238;
	$fdata["strName"] = "dip237";
	$fdata["GoodName"] = "dip237";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip237");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip237";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip237";

	
	
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


	$tdatavoto_diputado["dip237"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip237";
//	dip238
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 239;
	$fdata["strName"] = "dip238";
	$fdata["GoodName"] = "dip238";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip238");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip238";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip238";

	
	
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


	$tdatavoto_diputado["dip238"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip238";
//	dip239
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 240;
	$fdata["strName"] = "dip239";
	$fdata["GoodName"] = "dip239";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip239");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip239";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip239";

	
	
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


	$tdatavoto_diputado["dip239"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip239";
//	dip240
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 241;
	$fdata["strName"] = "dip240";
	$fdata["GoodName"] = "dip240";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip240");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip240";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip240";

	
	
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


	$tdatavoto_diputado["dip240"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip240";
//	dip241
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 242;
	$fdata["strName"] = "dip241";
	$fdata["GoodName"] = "dip241";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip241");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip241";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip241";

	
	
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


	$tdatavoto_diputado["dip241"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip241";
//	dip242
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 243;
	$fdata["strName"] = "dip242";
	$fdata["GoodName"] = "dip242";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip242");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip242";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip242";

	
	
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


	$tdatavoto_diputado["dip242"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip242";
//	dip243
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 244;
	$fdata["strName"] = "dip243";
	$fdata["GoodName"] = "dip243";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip243");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip243";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip243";

	
	
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


	$tdatavoto_diputado["dip243"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip243";
//	dip244
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 245;
	$fdata["strName"] = "dip244";
	$fdata["GoodName"] = "dip244";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip244");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip244";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip244";

	
	
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


	$tdatavoto_diputado["dip244"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip244";
//	dip245
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 246;
	$fdata["strName"] = "dip245";
	$fdata["GoodName"] = "dip245";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip245");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip245";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip245";

	
	
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


	$tdatavoto_diputado["dip245"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip245";
//	dip246
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 247;
	$fdata["strName"] = "dip246";
	$fdata["GoodName"] = "dip246";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip246");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip246";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip246";

	
	
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


	$tdatavoto_diputado["dip246"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip246";
//	dip247
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 248;
	$fdata["strName"] = "dip247";
	$fdata["GoodName"] = "dip247";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip247");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip247";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip247";

	
	
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


	$tdatavoto_diputado["dip247"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip247";
//	dip248
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 249;
	$fdata["strName"] = "dip248";
	$fdata["GoodName"] = "dip248";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip248");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip248";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip248";

	
	
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


	$tdatavoto_diputado["dip248"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip248";
//	dip249
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 250;
	$fdata["strName"] = "dip249";
	$fdata["GoodName"] = "dip249";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip249");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip249";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip249";

	
	
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


	$tdatavoto_diputado["dip249"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip249";
//	dip250
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 251;
	$fdata["strName"] = "dip250";
	$fdata["GoodName"] = "dip250";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip250");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip250";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip250";

	
	
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


	$tdatavoto_diputado["dip250"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip250";
//	dip251
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 252;
	$fdata["strName"] = "dip251";
	$fdata["GoodName"] = "dip251";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip251");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip251";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip251";

	
	
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


	$tdatavoto_diputado["dip251"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip251";
//	dip252
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 253;
	$fdata["strName"] = "dip252";
	$fdata["GoodName"] = "dip252";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip252");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip252";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip252";

	
	
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


	$tdatavoto_diputado["dip252"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip252";
//	dip253
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 254;
	$fdata["strName"] = "dip253";
	$fdata["GoodName"] = "dip253";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip253");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip253";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip253";

	
	
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


	$tdatavoto_diputado["dip253"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip253";
//	dip254
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 255;
	$fdata["strName"] = "dip254";
	$fdata["GoodName"] = "dip254";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip254");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip254";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip254";

	
	
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


	$tdatavoto_diputado["dip254"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip254";
//	dip255
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 256;
	$fdata["strName"] = "dip255";
	$fdata["GoodName"] = "dip255";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip255");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip255";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip255";

	
	
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


	$tdatavoto_diputado["dip255"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip255";
//	dip256
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 257;
	$fdata["strName"] = "dip256";
	$fdata["GoodName"] = "dip256";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip256");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip256";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip256";

	
	
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


	$tdatavoto_diputado["dip256"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip256";
//	dip257
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 258;
	$fdata["strName"] = "dip257";
	$fdata["GoodName"] = "dip257";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip257");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip257";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip257";

	
	
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


	$tdatavoto_diputado["dip257"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip257";
//	dip258
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 259;
	$fdata["strName"] = "dip258";
	$fdata["GoodName"] = "dip258";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip258");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip258";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip258";

	
	
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


	$tdatavoto_diputado["dip258"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip258";
//	dip259
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 260;
	$fdata["strName"] = "dip259";
	$fdata["GoodName"] = "dip259";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip259");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip259";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip259";

	
	
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


	$tdatavoto_diputado["dip259"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip259";
//	dip260
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 261;
	$fdata["strName"] = "dip260";
	$fdata["GoodName"] = "dip260";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip260");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip260";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip260";

	
	
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


	$tdatavoto_diputado["dip260"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip260";
//	dip261
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 262;
	$fdata["strName"] = "dip261";
	$fdata["GoodName"] = "dip261";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip261");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip261";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip261";

	
	
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


	$tdatavoto_diputado["dip261"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip261";
//	dip262
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 263;
	$fdata["strName"] = "dip262";
	$fdata["GoodName"] = "dip262";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip262");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip262";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip262";

	
	
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


	$tdatavoto_diputado["dip262"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip262";
//	dip263
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 264;
	$fdata["strName"] = "dip263";
	$fdata["GoodName"] = "dip263";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip263");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip263";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip263";

	
	
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


	$tdatavoto_diputado["dip263"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip263";
//	dip264
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 265;
	$fdata["strName"] = "dip264";
	$fdata["GoodName"] = "dip264";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip264");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip264";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip264";

	
	
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


	$tdatavoto_diputado["dip264"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip264";
//	dip265
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 266;
	$fdata["strName"] = "dip265";
	$fdata["GoodName"] = "dip265";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip265");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip265";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip265";

	
	
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


	$tdatavoto_diputado["dip265"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip265";
//	dip266
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 267;
	$fdata["strName"] = "dip266";
	$fdata["GoodName"] = "dip266";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip266");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip266";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip266";

	
	
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


	$tdatavoto_diputado["dip266"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip266";
//	dip267
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 268;
	$fdata["strName"] = "dip267";
	$fdata["GoodName"] = "dip267";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip267");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip267";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip267";

	
	
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


	$tdatavoto_diputado["dip267"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip267";
//	dip268
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 269;
	$fdata["strName"] = "dip268";
	$fdata["GoodName"] = "dip268";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip268");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip268";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip268";

	
	
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


	$tdatavoto_diputado["dip268"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip268";
//	dip269
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 270;
	$fdata["strName"] = "dip269";
	$fdata["GoodName"] = "dip269";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip269");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip269";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip269";

	
	
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


	$tdatavoto_diputado["dip269"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip269";
//	dip270
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 271;
	$fdata["strName"] = "dip270";
	$fdata["GoodName"] = "dip270";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip270");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip270";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip270";

	
	
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


	$tdatavoto_diputado["dip270"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip270";
//	dip271
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 272;
	$fdata["strName"] = "dip271";
	$fdata["GoodName"] = "dip271";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip271");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip271";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip271";

	
	
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


	$tdatavoto_diputado["dip271"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip271";
//	dip272
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 273;
	$fdata["strName"] = "dip272";
	$fdata["GoodName"] = "dip272";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip272");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip272";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip272";

	
	
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


	$tdatavoto_diputado["dip272"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip272";
//	dip273
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 274;
	$fdata["strName"] = "dip273";
	$fdata["GoodName"] = "dip273";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip273");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip273";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip273";

	
	
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


	$tdatavoto_diputado["dip273"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip273";
//	dip274
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 275;
	$fdata["strName"] = "dip274";
	$fdata["GoodName"] = "dip274";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip274");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip274";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip274";

	
	
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


	$tdatavoto_diputado["dip274"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip274";
//	dip275
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 276;
	$fdata["strName"] = "dip275";
	$fdata["GoodName"] = "dip275";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip275");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip275";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip275";

	
	
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


	$tdatavoto_diputado["dip275"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip275";
//	dip276
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 277;
	$fdata["strName"] = "dip276";
	$fdata["GoodName"] = "dip276";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip276");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip276";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip276";

	
	
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


	$tdatavoto_diputado["dip276"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip276";
//	dip277
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 278;
	$fdata["strName"] = "dip277";
	$fdata["GoodName"] = "dip277";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip277");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip277";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip277";

	
	
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


	$tdatavoto_diputado["dip277"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip277";
//	dip278
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 279;
	$fdata["strName"] = "dip278";
	$fdata["GoodName"] = "dip278";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip278");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip278";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip278";

	
	
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


	$tdatavoto_diputado["dip278"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip278";
//	dip279
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 280;
	$fdata["strName"] = "dip279";
	$fdata["GoodName"] = "dip279";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip279");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip279";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip279";

	
	
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


	$tdatavoto_diputado["dip279"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip279";
//	dip280
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 281;
	$fdata["strName"] = "dip280";
	$fdata["GoodName"] = "dip280";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","dip280");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dip280";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dip280";

	
	
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


	$tdatavoto_diputado["dip280"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "dip280";
//	validos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 282;
	$fdata["strName"] = "validos";
	$fdata["GoodName"] = "validos";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","validos");
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


	$tdatavoto_diputado["validos"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "validos";
//	blancos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 283;
	$fdata["strName"] = "blancos";
	$fdata["GoodName"] = "blancos";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","blancos");
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


	$tdatavoto_diputado["blancos"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "blancos";
//	nulos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 284;
	$fdata["strName"] = "nulos";
	$fdata["GoodName"] = "nulos";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","nulos");
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


	$tdatavoto_diputado["nulos"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "nulos";
//	utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 285;
	$fdata["strName"] = "utilizados";
	$fdata["GoodName"] = "utilizados";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","utilizados");
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


	$tdatavoto_diputado["utilizados"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "utilizados";
//	no_utilizados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 286;
	$fdata["strName"] = "no_utilizados";
	$fdata["GoodName"] = "no_utilizados";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","no_utilizados");
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


	$tdatavoto_diputado["no_utilizados"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "no_utilizados";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 287;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","total");
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


	$tdatavoto_diputado["total"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "total";
//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 288;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","usuario");
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


	$tdatavoto_diputado["usuario"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "usuario";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 289;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","fecha");
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


	$tdatavoto_diputado["fecha"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "fecha";
//	editado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 290;
	$fdata["strName"] = "editado_por";
	$fdata["GoodName"] = "editado_por";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","editado_por");
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


	$tdatavoto_diputado["editado_por"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "editado_por";
//	fecha_edicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 291;
	$fdata["strName"] = "fecha_edicion";
	$fdata["GoodName"] = "fecha_edicion";
	$fdata["ownerTable"] = "voto_diputado";
	$fdata["Label"] = GetFieldLabel("voto_diputado","fecha_edicion");
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


	$tdatavoto_diputado["fecha_edicion"] = $fdata;
		$tdatavoto_diputado[".searchableFields"][] = "fecha_edicion";


$tables_data["voto_diputado"]=&$tdatavoto_diputado;
$field_labels["voto_diputado"] = &$fieldLabelsvoto_diputado;
$fieldToolTips["voto_diputado"] = &$fieldToolTipsvoto_diputado;
$placeHolders["voto_diputado"] = &$placeHoldersvoto_diputado;
$page_titles["voto_diputado"] = &$pageTitlesvoto_diputado;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["voto_diputado"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["voto_diputado"] = array();



	
				$strOriginalDetailsTable="urna";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="urna";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "urna";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["voto_diputado"][0] = $masterParams;
				$masterTablesData["voto_diputado"][0]["masterKeys"] = array();
	$masterTablesData["voto_diputado"][0]["masterKeys"][]="id_urna";
				$masterTablesData["voto_diputado"][0]["detailKeys"] = array();
	$masterTablesData["voto_diputado"][0]["detailKeys"][]="id_urna";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_voto_diputado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_urna,  	dip1,  	dip2,  	dip3,  	dip4,  	dip5,  	dip6,  	dip7,  	dip8,  	dip9,  	dip10,  	dip11,  	dip12,  	dip13,  	dip14,  	dip15,  	dip16,  	dip17,  	dip18,  	dip19,  	dip20,  	dip21,  	dip22,  	dip23,  	dip24,  	dip25,  	dip26,  	dip27,  	dip28,  	dip29,  	dip30,  	dip31,  	dip32,  	dip33,  	dip34,  	dip35,  	dip36,  	dip37,  	dip38,  	dip39,  	dip40,  	dip41,  	dip42,  	dip43,  	dip44,  	dip45,  	dip46,  	dip47,  	dip48,  	dip49,  	dip50,  	dip51,  	dip52,  	dip53,  	dip54,  	dip55,  	dip56,  	dip57,  	dip58,  	dip59,  	dip60,  	dip61,  	dip62,  	dip63,  	dip64,  	dip65,  	dip66,  	dip67,  	dip68,  	dip69,  	dip70,  	dip71,  	dip72,  	dip73,  	dip74,  	dip75,  	dip76,  	dip77,  	dip78,  	dip79,  	dip80,  	dip81,  	dip82,  	dip83,  	dip84,  	dip85,  	dip86,  	dip87,  	dip88,  	dip89,  	dip90,  	dip91,  	dip92,  	dip93,  	dip94,  	dip95,  	dip96,  	dip97,  	dip98,  	dip99,  	dip100,  	dip101,  	dip102,  	dip103,  	dip104,  	dip105,  	dip106,  	dip107,  	dip108,  	dip109,  	dip110,  	dip111,  	dip112,  	dip113,  	dip114,  	dip115,  	dip116,  	dip117,  	dip118,  	dip119,  	dip120,  	dip121,  	dip122,  	dip123,  	dip124,  	dip125,  	dip126,  	dip127,  	dip128,  	dip129,  	dip130,  	dip131,  	dip132,  	dip133,  	dip134,  	dip135,  	dip136,  	dip137,  	dip138,  	dip139,  	dip140,  	dip141,  	dip142,  	dip143,  	dip144,  	dip145,  	dip146,  	dip147,  	dip148,  	dip149,  	dip150,  	dip151,  	dip152,  	dip153,  	dip154,  	dip155,  	dip156,  	dip157,  	dip158,  	dip159,  	dip160,  	dip161,  	dip162,  	dip163,  	dip164,  	dip165,  	dip166,  	dip167,  	dip168,  	dip169,  	dip170,  	dip171,  	dip172,  	dip173,  	dip174,  	dip175,  	dip176,  	dip177,  	dip178,  	dip179,  	dip180,  	dip181,  	dip182,  	dip183,  	dip184,  	dip185,  	dip186,  	dip187,  	dip188,  	dip189,  	dip190,  	dip191,  	dip192,  	dip193,  	dip194,  	dip195,  	dip196,  	dip197,  	dip198,  	dip199,  	dip200,  	dip201,  	dip202,  	dip203,  	dip204,  	dip205,  	dip206,  	dip207,  	dip208,  	dip209,  	dip210,  	dip211,  	dip212,  	dip213,  	dip214,  	dip215,  	dip216,  	dip217,  	dip218,  	dip219,  	dip220,  	dip221,  	dip222,  	dip223,  	dip224,  	dip225,  	dip226,  	dip227,  	dip228,  	dip229,  	dip230,  	dip231,  	dip232,  	dip233,  	dip234,  	dip235,  	dip236,  	dip237,  	dip238,  	dip239,  	dip240,  	dip241,  	dip242,  	dip243,  	dip244,  	dip245,  	dip246,  	dip247,  	dip248,  	dip249,  	dip250,  	dip251,  	dip252,  	dip253,  	dip254,  	dip255,  	dip256,  	dip257,  	dip258,  	dip259,  	dip260,  	dip261,  	dip262,  	dip263,  	dip264,  	dip265,  	dip266,  	dip267,  	dip268,  	dip269,  	dip270,  	dip271,  	dip272,  	dip273,  	dip274,  	dip275,  	dip276,  	dip277,  	dip278,  	dip279,  	dip280,  	validos,  	blancos,  	nulos,  	utilizados,  	no_utilizados,  	total,  	usuario,  	fecha,  	editado_por,  	fecha_edicion";
$proto0["m_strFrom"] = "FROM voto_diputado";
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
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto6["m_sql"] = "id_urna";
$proto6["m_srcTableName"] = "voto_diputado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dip1",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto8["m_sql"] = "dip1";
$proto8["m_srcTableName"] = "voto_diputado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dip2",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto10["m_sql"] = "dip2";
$proto10["m_srcTableName"] = "voto_diputado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dip3",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto12["m_sql"] = "dip3";
$proto12["m_srcTableName"] = "voto_diputado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dip4",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto14["m_sql"] = "dip4";
$proto14["m_srcTableName"] = "voto_diputado";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "dip5",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto16["m_sql"] = "dip5";
$proto16["m_srcTableName"] = "voto_diputado";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "dip6",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto18["m_sql"] = "dip6";
$proto18["m_srcTableName"] = "voto_diputado";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dip7",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto20["m_sql"] = "dip7";
$proto20["m_srcTableName"] = "voto_diputado";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dip8",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto22["m_sql"] = "dip8";
$proto22["m_srcTableName"] = "voto_diputado";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "dip9",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto24["m_sql"] = "dip9";
$proto24["m_srcTableName"] = "voto_diputado";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "dip10",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto26["m_sql"] = "dip10";
$proto26["m_srcTableName"] = "voto_diputado";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "dip11",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto28["m_sql"] = "dip11";
$proto28["m_srcTableName"] = "voto_diputado";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "dip12",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto30["m_sql"] = "dip12";
$proto30["m_srcTableName"] = "voto_diputado";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "dip13",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto32["m_sql"] = "dip13";
$proto32["m_srcTableName"] = "voto_diputado";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "dip14",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto34["m_sql"] = "dip14";
$proto34["m_srcTableName"] = "voto_diputado";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "dip15",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto36["m_sql"] = "dip15";
$proto36["m_srcTableName"] = "voto_diputado";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "dip16",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto38["m_sql"] = "dip16";
$proto38["m_srcTableName"] = "voto_diputado";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "dip17",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto40["m_sql"] = "dip17";
$proto40["m_srcTableName"] = "voto_diputado";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "dip18",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto42["m_sql"] = "dip18";
$proto42["m_srcTableName"] = "voto_diputado";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "dip19",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto44["m_sql"] = "dip19";
$proto44["m_srcTableName"] = "voto_diputado";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "dip20",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto46["m_sql"] = "dip20";
$proto46["m_srcTableName"] = "voto_diputado";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "dip21",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto48["m_sql"] = "dip21";
$proto48["m_srcTableName"] = "voto_diputado";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "dip22",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto50["m_sql"] = "dip22";
$proto50["m_srcTableName"] = "voto_diputado";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "dip23",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto52["m_sql"] = "dip23";
$proto52["m_srcTableName"] = "voto_diputado";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "dip24",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto54["m_sql"] = "dip24";
$proto54["m_srcTableName"] = "voto_diputado";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "dip25",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto56["m_sql"] = "dip25";
$proto56["m_srcTableName"] = "voto_diputado";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "dip26",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto58["m_sql"] = "dip26";
$proto58["m_srcTableName"] = "voto_diputado";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "dip27",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto60["m_sql"] = "dip27";
$proto60["m_srcTableName"] = "voto_diputado";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "dip28",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto62["m_sql"] = "dip28";
$proto62["m_srcTableName"] = "voto_diputado";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "dip29",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto64["m_sql"] = "dip29";
$proto64["m_srcTableName"] = "voto_diputado";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "dip30",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto66["m_sql"] = "dip30";
$proto66["m_srcTableName"] = "voto_diputado";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "dip31",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto68["m_sql"] = "dip31";
$proto68["m_srcTableName"] = "voto_diputado";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "dip32",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto70["m_sql"] = "dip32";
$proto70["m_srcTableName"] = "voto_diputado";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "dip33",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto72["m_sql"] = "dip33";
$proto72["m_srcTableName"] = "voto_diputado";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "dip34",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto74["m_sql"] = "dip34";
$proto74["m_srcTableName"] = "voto_diputado";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "dip35",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto76["m_sql"] = "dip35";
$proto76["m_srcTableName"] = "voto_diputado";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "dip36",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto78["m_sql"] = "dip36";
$proto78["m_srcTableName"] = "voto_diputado";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "dip37",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto80["m_sql"] = "dip37";
$proto80["m_srcTableName"] = "voto_diputado";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "dip38",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto82["m_sql"] = "dip38";
$proto82["m_srcTableName"] = "voto_diputado";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "dip39",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto84["m_sql"] = "dip39";
$proto84["m_srcTableName"] = "voto_diputado";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "dip40",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto86["m_sql"] = "dip40";
$proto86["m_srcTableName"] = "voto_diputado";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "dip41",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto88["m_sql"] = "dip41";
$proto88["m_srcTableName"] = "voto_diputado";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "dip42",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto90["m_sql"] = "dip42";
$proto90["m_srcTableName"] = "voto_diputado";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "dip43",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto92["m_sql"] = "dip43";
$proto92["m_srcTableName"] = "voto_diputado";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "dip44",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto94["m_sql"] = "dip44";
$proto94["m_srcTableName"] = "voto_diputado";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "dip45",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto96["m_sql"] = "dip45";
$proto96["m_srcTableName"] = "voto_diputado";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "dip46",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto98["m_sql"] = "dip46";
$proto98["m_srcTableName"] = "voto_diputado";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "dip47",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto100["m_sql"] = "dip47";
$proto100["m_srcTableName"] = "voto_diputado";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "dip48",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto102["m_sql"] = "dip48";
$proto102["m_srcTableName"] = "voto_diputado";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "dip49",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto104["m_sql"] = "dip49";
$proto104["m_srcTableName"] = "voto_diputado";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "dip50",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto106["m_sql"] = "dip50";
$proto106["m_srcTableName"] = "voto_diputado";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "dip51",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto108["m_sql"] = "dip51";
$proto108["m_srcTableName"] = "voto_diputado";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "dip52",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto110["m_sql"] = "dip52";
$proto110["m_srcTableName"] = "voto_diputado";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "dip53",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto112["m_sql"] = "dip53";
$proto112["m_srcTableName"] = "voto_diputado";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "dip54",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto114["m_sql"] = "dip54";
$proto114["m_srcTableName"] = "voto_diputado";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "dip55",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto116["m_sql"] = "dip55";
$proto116["m_srcTableName"] = "voto_diputado";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "dip56",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto118["m_sql"] = "dip56";
$proto118["m_srcTableName"] = "voto_diputado";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "dip57",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto120["m_sql"] = "dip57";
$proto120["m_srcTableName"] = "voto_diputado";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "dip58",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto122["m_sql"] = "dip58";
$proto122["m_srcTableName"] = "voto_diputado";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "dip59",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto124["m_sql"] = "dip59";
$proto124["m_srcTableName"] = "voto_diputado";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "dip60",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto126["m_sql"] = "dip60";
$proto126["m_srcTableName"] = "voto_diputado";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "dip61",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto128["m_sql"] = "dip61";
$proto128["m_srcTableName"] = "voto_diputado";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "dip62",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto130["m_sql"] = "dip62";
$proto130["m_srcTableName"] = "voto_diputado";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "dip63",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto132["m_sql"] = "dip63";
$proto132["m_srcTableName"] = "voto_diputado";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "dip64",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto134["m_sql"] = "dip64";
$proto134["m_srcTableName"] = "voto_diputado";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "dip65",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto136["m_sql"] = "dip65";
$proto136["m_srcTableName"] = "voto_diputado";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "dip66",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto138["m_sql"] = "dip66";
$proto138["m_srcTableName"] = "voto_diputado";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "dip67",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto140["m_sql"] = "dip67";
$proto140["m_srcTableName"] = "voto_diputado";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "dip68",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto142["m_sql"] = "dip68";
$proto142["m_srcTableName"] = "voto_diputado";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "dip69",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto144["m_sql"] = "dip69";
$proto144["m_srcTableName"] = "voto_diputado";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "dip70",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto146["m_sql"] = "dip70";
$proto146["m_srcTableName"] = "voto_diputado";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "dip71",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto148["m_sql"] = "dip71";
$proto148["m_srcTableName"] = "voto_diputado";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "dip72",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto150["m_sql"] = "dip72";
$proto150["m_srcTableName"] = "voto_diputado";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "dip73",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto152["m_sql"] = "dip73";
$proto152["m_srcTableName"] = "voto_diputado";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "dip74",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto154["m_sql"] = "dip74";
$proto154["m_srcTableName"] = "voto_diputado";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "dip75",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto156["m_sql"] = "dip75";
$proto156["m_srcTableName"] = "voto_diputado";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "dip76",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto158["m_sql"] = "dip76";
$proto158["m_srcTableName"] = "voto_diputado";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "dip77",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto160["m_sql"] = "dip77";
$proto160["m_srcTableName"] = "voto_diputado";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "dip78",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto162["m_sql"] = "dip78";
$proto162["m_srcTableName"] = "voto_diputado";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "dip79",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto164["m_sql"] = "dip79";
$proto164["m_srcTableName"] = "voto_diputado";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "dip80",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto166["m_sql"] = "dip80";
$proto166["m_srcTableName"] = "voto_diputado";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "dip81",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto168["m_sql"] = "dip81";
$proto168["m_srcTableName"] = "voto_diputado";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "dip82",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto170["m_sql"] = "dip82";
$proto170["m_srcTableName"] = "voto_diputado";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "dip83",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto172["m_sql"] = "dip83";
$proto172["m_srcTableName"] = "voto_diputado";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "dip84",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto174["m_sql"] = "dip84";
$proto174["m_srcTableName"] = "voto_diputado";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "dip85",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto176["m_sql"] = "dip85";
$proto176["m_srcTableName"] = "voto_diputado";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "dip86",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto178["m_sql"] = "dip86";
$proto178["m_srcTableName"] = "voto_diputado";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "dip87",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto180["m_sql"] = "dip87";
$proto180["m_srcTableName"] = "voto_diputado";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "dip88",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto182["m_sql"] = "dip88";
$proto182["m_srcTableName"] = "voto_diputado";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "dip89",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto184["m_sql"] = "dip89";
$proto184["m_srcTableName"] = "voto_diputado";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "dip90",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto186["m_sql"] = "dip90";
$proto186["m_srcTableName"] = "voto_diputado";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "dip91",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto188["m_sql"] = "dip91";
$proto188["m_srcTableName"] = "voto_diputado";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "dip92",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto190["m_sql"] = "dip92";
$proto190["m_srcTableName"] = "voto_diputado";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "dip93",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto192["m_sql"] = "dip93";
$proto192["m_srcTableName"] = "voto_diputado";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "dip94",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto194["m_sql"] = "dip94";
$proto194["m_srcTableName"] = "voto_diputado";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "dip95",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto196["m_sql"] = "dip95";
$proto196["m_srcTableName"] = "voto_diputado";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "dip96",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto198["m_sql"] = "dip96";
$proto198["m_srcTableName"] = "voto_diputado";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "dip97",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto200["m_sql"] = "dip97";
$proto200["m_srcTableName"] = "voto_diputado";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "dip98",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto202["m_sql"] = "dip98";
$proto202["m_srcTableName"] = "voto_diputado";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "dip99",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto204["m_sql"] = "dip99";
$proto204["m_srcTableName"] = "voto_diputado";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "dip100",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto206["m_sql"] = "dip100";
$proto206["m_srcTableName"] = "voto_diputado";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "dip101",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto208["m_sql"] = "dip101";
$proto208["m_srcTableName"] = "voto_diputado";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "dip102",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto210["m_sql"] = "dip102";
$proto210["m_srcTableName"] = "voto_diputado";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "dip103",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto212["m_sql"] = "dip103";
$proto212["m_srcTableName"] = "voto_diputado";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "dip104",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto214["m_sql"] = "dip104";
$proto214["m_srcTableName"] = "voto_diputado";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "dip105",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto216["m_sql"] = "dip105";
$proto216["m_srcTableName"] = "voto_diputado";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$obj = new SQLField(array(
	"m_strName" => "dip106",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto218["m_sql"] = "dip106";
$proto218["m_srcTableName"] = "voto_diputado";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$obj = new SQLField(array(
	"m_strName" => "dip107",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto220["m_sql"] = "dip107";
$proto220["m_srcTableName"] = "voto_diputado";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto222=array();
			$obj = new SQLField(array(
	"m_strName" => "dip108",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto222["m_sql"] = "dip108";
$proto222["m_srcTableName"] = "voto_diputado";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "";
$obj = new SQLFieldListItem($proto222);

$proto0["m_fieldlist"][]=$obj;
						$proto224=array();
			$obj = new SQLField(array(
	"m_strName" => "dip109",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto224["m_sql"] = "dip109";
$proto224["m_srcTableName"] = "voto_diputado";
$proto224["m_expr"]=$obj;
$proto224["m_alias"] = "";
$obj = new SQLFieldListItem($proto224);

$proto0["m_fieldlist"][]=$obj;
						$proto226=array();
			$obj = new SQLField(array(
	"m_strName" => "dip110",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto226["m_sql"] = "dip110";
$proto226["m_srcTableName"] = "voto_diputado";
$proto226["m_expr"]=$obj;
$proto226["m_alias"] = "";
$obj = new SQLFieldListItem($proto226);

$proto0["m_fieldlist"][]=$obj;
						$proto228=array();
			$obj = new SQLField(array(
	"m_strName" => "dip111",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto228["m_sql"] = "dip111";
$proto228["m_srcTableName"] = "voto_diputado";
$proto228["m_expr"]=$obj;
$proto228["m_alias"] = "";
$obj = new SQLFieldListItem($proto228);

$proto0["m_fieldlist"][]=$obj;
						$proto230=array();
			$obj = new SQLField(array(
	"m_strName" => "dip112",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto230["m_sql"] = "dip112";
$proto230["m_srcTableName"] = "voto_diputado";
$proto230["m_expr"]=$obj;
$proto230["m_alias"] = "";
$obj = new SQLFieldListItem($proto230);

$proto0["m_fieldlist"][]=$obj;
						$proto232=array();
			$obj = new SQLField(array(
	"m_strName" => "dip113",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto232["m_sql"] = "dip113";
$proto232["m_srcTableName"] = "voto_diputado";
$proto232["m_expr"]=$obj;
$proto232["m_alias"] = "";
$obj = new SQLFieldListItem($proto232);

$proto0["m_fieldlist"][]=$obj;
						$proto234=array();
			$obj = new SQLField(array(
	"m_strName" => "dip114",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto234["m_sql"] = "dip114";
$proto234["m_srcTableName"] = "voto_diputado";
$proto234["m_expr"]=$obj;
$proto234["m_alias"] = "";
$obj = new SQLFieldListItem($proto234);

$proto0["m_fieldlist"][]=$obj;
						$proto236=array();
			$obj = new SQLField(array(
	"m_strName" => "dip115",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto236["m_sql"] = "dip115";
$proto236["m_srcTableName"] = "voto_diputado";
$proto236["m_expr"]=$obj;
$proto236["m_alias"] = "";
$obj = new SQLFieldListItem($proto236);

$proto0["m_fieldlist"][]=$obj;
						$proto238=array();
			$obj = new SQLField(array(
	"m_strName" => "dip116",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto238["m_sql"] = "dip116";
$proto238["m_srcTableName"] = "voto_diputado";
$proto238["m_expr"]=$obj;
$proto238["m_alias"] = "";
$obj = new SQLFieldListItem($proto238);

$proto0["m_fieldlist"][]=$obj;
						$proto240=array();
			$obj = new SQLField(array(
	"m_strName" => "dip117",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto240["m_sql"] = "dip117";
$proto240["m_srcTableName"] = "voto_diputado";
$proto240["m_expr"]=$obj;
$proto240["m_alias"] = "";
$obj = new SQLFieldListItem($proto240);

$proto0["m_fieldlist"][]=$obj;
						$proto242=array();
			$obj = new SQLField(array(
	"m_strName" => "dip118",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto242["m_sql"] = "dip118";
$proto242["m_srcTableName"] = "voto_diputado";
$proto242["m_expr"]=$obj;
$proto242["m_alias"] = "";
$obj = new SQLFieldListItem($proto242);

$proto0["m_fieldlist"][]=$obj;
						$proto244=array();
			$obj = new SQLField(array(
	"m_strName" => "dip119",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto244["m_sql"] = "dip119";
$proto244["m_srcTableName"] = "voto_diputado";
$proto244["m_expr"]=$obj;
$proto244["m_alias"] = "";
$obj = new SQLFieldListItem($proto244);

$proto0["m_fieldlist"][]=$obj;
						$proto246=array();
			$obj = new SQLField(array(
	"m_strName" => "dip120",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto246["m_sql"] = "dip120";
$proto246["m_srcTableName"] = "voto_diputado";
$proto246["m_expr"]=$obj;
$proto246["m_alias"] = "";
$obj = new SQLFieldListItem($proto246);

$proto0["m_fieldlist"][]=$obj;
						$proto248=array();
			$obj = new SQLField(array(
	"m_strName" => "dip121",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto248["m_sql"] = "dip121";
$proto248["m_srcTableName"] = "voto_diputado";
$proto248["m_expr"]=$obj;
$proto248["m_alias"] = "";
$obj = new SQLFieldListItem($proto248);

$proto0["m_fieldlist"][]=$obj;
						$proto250=array();
			$obj = new SQLField(array(
	"m_strName" => "dip122",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto250["m_sql"] = "dip122";
$proto250["m_srcTableName"] = "voto_diputado";
$proto250["m_expr"]=$obj;
$proto250["m_alias"] = "";
$obj = new SQLFieldListItem($proto250);

$proto0["m_fieldlist"][]=$obj;
						$proto252=array();
			$obj = new SQLField(array(
	"m_strName" => "dip123",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto252["m_sql"] = "dip123";
$proto252["m_srcTableName"] = "voto_diputado";
$proto252["m_expr"]=$obj;
$proto252["m_alias"] = "";
$obj = new SQLFieldListItem($proto252);

$proto0["m_fieldlist"][]=$obj;
						$proto254=array();
			$obj = new SQLField(array(
	"m_strName" => "dip124",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto254["m_sql"] = "dip124";
$proto254["m_srcTableName"] = "voto_diputado";
$proto254["m_expr"]=$obj;
$proto254["m_alias"] = "";
$obj = new SQLFieldListItem($proto254);

$proto0["m_fieldlist"][]=$obj;
						$proto256=array();
			$obj = new SQLField(array(
	"m_strName" => "dip125",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto256["m_sql"] = "dip125";
$proto256["m_srcTableName"] = "voto_diputado";
$proto256["m_expr"]=$obj;
$proto256["m_alias"] = "";
$obj = new SQLFieldListItem($proto256);

$proto0["m_fieldlist"][]=$obj;
						$proto258=array();
			$obj = new SQLField(array(
	"m_strName" => "dip126",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto258["m_sql"] = "dip126";
$proto258["m_srcTableName"] = "voto_diputado";
$proto258["m_expr"]=$obj;
$proto258["m_alias"] = "";
$obj = new SQLFieldListItem($proto258);

$proto0["m_fieldlist"][]=$obj;
						$proto260=array();
			$obj = new SQLField(array(
	"m_strName" => "dip127",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto260["m_sql"] = "dip127";
$proto260["m_srcTableName"] = "voto_diputado";
$proto260["m_expr"]=$obj;
$proto260["m_alias"] = "";
$obj = new SQLFieldListItem($proto260);

$proto0["m_fieldlist"][]=$obj;
						$proto262=array();
			$obj = new SQLField(array(
	"m_strName" => "dip128",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto262["m_sql"] = "dip128";
$proto262["m_srcTableName"] = "voto_diputado";
$proto262["m_expr"]=$obj;
$proto262["m_alias"] = "";
$obj = new SQLFieldListItem($proto262);

$proto0["m_fieldlist"][]=$obj;
						$proto264=array();
			$obj = new SQLField(array(
	"m_strName" => "dip129",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto264["m_sql"] = "dip129";
$proto264["m_srcTableName"] = "voto_diputado";
$proto264["m_expr"]=$obj;
$proto264["m_alias"] = "";
$obj = new SQLFieldListItem($proto264);

$proto0["m_fieldlist"][]=$obj;
						$proto266=array();
			$obj = new SQLField(array(
	"m_strName" => "dip130",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto266["m_sql"] = "dip130";
$proto266["m_srcTableName"] = "voto_diputado";
$proto266["m_expr"]=$obj;
$proto266["m_alias"] = "";
$obj = new SQLFieldListItem($proto266);

$proto0["m_fieldlist"][]=$obj;
						$proto268=array();
			$obj = new SQLField(array(
	"m_strName" => "dip131",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto268["m_sql"] = "dip131";
$proto268["m_srcTableName"] = "voto_diputado";
$proto268["m_expr"]=$obj;
$proto268["m_alias"] = "";
$obj = new SQLFieldListItem($proto268);

$proto0["m_fieldlist"][]=$obj;
						$proto270=array();
			$obj = new SQLField(array(
	"m_strName" => "dip132",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto270["m_sql"] = "dip132";
$proto270["m_srcTableName"] = "voto_diputado";
$proto270["m_expr"]=$obj;
$proto270["m_alias"] = "";
$obj = new SQLFieldListItem($proto270);

$proto0["m_fieldlist"][]=$obj;
						$proto272=array();
			$obj = new SQLField(array(
	"m_strName" => "dip133",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto272["m_sql"] = "dip133";
$proto272["m_srcTableName"] = "voto_diputado";
$proto272["m_expr"]=$obj;
$proto272["m_alias"] = "";
$obj = new SQLFieldListItem($proto272);

$proto0["m_fieldlist"][]=$obj;
						$proto274=array();
			$obj = new SQLField(array(
	"m_strName" => "dip134",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto274["m_sql"] = "dip134";
$proto274["m_srcTableName"] = "voto_diputado";
$proto274["m_expr"]=$obj;
$proto274["m_alias"] = "";
$obj = new SQLFieldListItem($proto274);

$proto0["m_fieldlist"][]=$obj;
						$proto276=array();
			$obj = new SQLField(array(
	"m_strName" => "dip135",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto276["m_sql"] = "dip135";
$proto276["m_srcTableName"] = "voto_diputado";
$proto276["m_expr"]=$obj;
$proto276["m_alias"] = "";
$obj = new SQLFieldListItem($proto276);

$proto0["m_fieldlist"][]=$obj;
						$proto278=array();
			$obj = new SQLField(array(
	"m_strName" => "dip136",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto278["m_sql"] = "dip136";
$proto278["m_srcTableName"] = "voto_diputado";
$proto278["m_expr"]=$obj;
$proto278["m_alias"] = "";
$obj = new SQLFieldListItem($proto278);

$proto0["m_fieldlist"][]=$obj;
						$proto280=array();
			$obj = new SQLField(array(
	"m_strName" => "dip137",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto280["m_sql"] = "dip137";
$proto280["m_srcTableName"] = "voto_diputado";
$proto280["m_expr"]=$obj;
$proto280["m_alias"] = "";
$obj = new SQLFieldListItem($proto280);

$proto0["m_fieldlist"][]=$obj;
						$proto282=array();
			$obj = new SQLField(array(
	"m_strName" => "dip138",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto282["m_sql"] = "dip138";
$proto282["m_srcTableName"] = "voto_diputado";
$proto282["m_expr"]=$obj;
$proto282["m_alias"] = "";
$obj = new SQLFieldListItem($proto282);

$proto0["m_fieldlist"][]=$obj;
						$proto284=array();
			$obj = new SQLField(array(
	"m_strName" => "dip139",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto284["m_sql"] = "dip139";
$proto284["m_srcTableName"] = "voto_diputado";
$proto284["m_expr"]=$obj;
$proto284["m_alias"] = "";
$obj = new SQLFieldListItem($proto284);

$proto0["m_fieldlist"][]=$obj;
						$proto286=array();
			$obj = new SQLField(array(
	"m_strName" => "dip140",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto286["m_sql"] = "dip140";
$proto286["m_srcTableName"] = "voto_diputado";
$proto286["m_expr"]=$obj;
$proto286["m_alias"] = "";
$obj = new SQLFieldListItem($proto286);

$proto0["m_fieldlist"][]=$obj;
						$proto288=array();
			$obj = new SQLField(array(
	"m_strName" => "dip141",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto288["m_sql"] = "dip141";
$proto288["m_srcTableName"] = "voto_diputado";
$proto288["m_expr"]=$obj;
$proto288["m_alias"] = "";
$obj = new SQLFieldListItem($proto288);

$proto0["m_fieldlist"][]=$obj;
						$proto290=array();
			$obj = new SQLField(array(
	"m_strName" => "dip142",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto290["m_sql"] = "dip142";
$proto290["m_srcTableName"] = "voto_diputado";
$proto290["m_expr"]=$obj;
$proto290["m_alias"] = "";
$obj = new SQLFieldListItem($proto290);

$proto0["m_fieldlist"][]=$obj;
						$proto292=array();
			$obj = new SQLField(array(
	"m_strName" => "dip143",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto292["m_sql"] = "dip143";
$proto292["m_srcTableName"] = "voto_diputado";
$proto292["m_expr"]=$obj;
$proto292["m_alias"] = "";
$obj = new SQLFieldListItem($proto292);

$proto0["m_fieldlist"][]=$obj;
						$proto294=array();
			$obj = new SQLField(array(
	"m_strName" => "dip144",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto294["m_sql"] = "dip144";
$proto294["m_srcTableName"] = "voto_diputado";
$proto294["m_expr"]=$obj;
$proto294["m_alias"] = "";
$obj = new SQLFieldListItem($proto294);

$proto0["m_fieldlist"][]=$obj;
						$proto296=array();
			$obj = new SQLField(array(
	"m_strName" => "dip145",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto296["m_sql"] = "dip145";
$proto296["m_srcTableName"] = "voto_diputado";
$proto296["m_expr"]=$obj;
$proto296["m_alias"] = "";
$obj = new SQLFieldListItem($proto296);

$proto0["m_fieldlist"][]=$obj;
						$proto298=array();
			$obj = new SQLField(array(
	"m_strName" => "dip146",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto298["m_sql"] = "dip146";
$proto298["m_srcTableName"] = "voto_diputado";
$proto298["m_expr"]=$obj;
$proto298["m_alias"] = "";
$obj = new SQLFieldListItem($proto298);

$proto0["m_fieldlist"][]=$obj;
						$proto300=array();
			$obj = new SQLField(array(
	"m_strName" => "dip147",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto300["m_sql"] = "dip147";
$proto300["m_srcTableName"] = "voto_diputado";
$proto300["m_expr"]=$obj;
$proto300["m_alias"] = "";
$obj = new SQLFieldListItem($proto300);

$proto0["m_fieldlist"][]=$obj;
						$proto302=array();
			$obj = new SQLField(array(
	"m_strName" => "dip148",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto302["m_sql"] = "dip148";
$proto302["m_srcTableName"] = "voto_diputado";
$proto302["m_expr"]=$obj;
$proto302["m_alias"] = "";
$obj = new SQLFieldListItem($proto302);

$proto0["m_fieldlist"][]=$obj;
						$proto304=array();
			$obj = new SQLField(array(
	"m_strName" => "dip149",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto304["m_sql"] = "dip149";
$proto304["m_srcTableName"] = "voto_diputado";
$proto304["m_expr"]=$obj;
$proto304["m_alias"] = "";
$obj = new SQLFieldListItem($proto304);

$proto0["m_fieldlist"][]=$obj;
						$proto306=array();
			$obj = new SQLField(array(
	"m_strName" => "dip150",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto306["m_sql"] = "dip150";
$proto306["m_srcTableName"] = "voto_diputado";
$proto306["m_expr"]=$obj;
$proto306["m_alias"] = "";
$obj = new SQLFieldListItem($proto306);

$proto0["m_fieldlist"][]=$obj;
						$proto308=array();
			$obj = new SQLField(array(
	"m_strName" => "dip151",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto308["m_sql"] = "dip151";
$proto308["m_srcTableName"] = "voto_diputado";
$proto308["m_expr"]=$obj;
$proto308["m_alias"] = "";
$obj = new SQLFieldListItem($proto308);

$proto0["m_fieldlist"][]=$obj;
						$proto310=array();
			$obj = new SQLField(array(
	"m_strName" => "dip152",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto310["m_sql"] = "dip152";
$proto310["m_srcTableName"] = "voto_diputado";
$proto310["m_expr"]=$obj;
$proto310["m_alias"] = "";
$obj = new SQLFieldListItem($proto310);

$proto0["m_fieldlist"][]=$obj;
						$proto312=array();
			$obj = new SQLField(array(
	"m_strName" => "dip153",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto312["m_sql"] = "dip153";
$proto312["m_srcTableName"] = "voto_diputado";
$proto312["m_expr"]=$obj;
$proto312["m_alias"] = "";
$obj = new SQLFieldListItem($proto312);

$proto0["m_fieldlist"][]=$obj;
						$proto314=array();
			$obj = new SQLField(array(
	"m_strName" => "dip154",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto314["m_sql"] = "dip154";
$proto314["m_srcTableName"] = "voto_diputado";
$proto314["m_expr"]=$obj;
$proto314["m_alias"] = "";
$obj = new SQLFieldListItem($proto314);

$proto0["m_fieldlist"][]=$obj;
						$proto316=array();
			$obj = new SQLField(array(
	"m_strName" => "dip155",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto316["m_sql"] = "dip155";
$proto316["m_srcTableName"] = "voto_diputado";
$proto316["m_expr"]=$obj;
$proto316["m_alias"] = "";
$obj = new SQLFieldListItem($proto316);

$proto0["m_fieldlist"][]=$obj;
						$proto318=array();
			$obj = new SQLField(array(
	"m_strName" => "dip156",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto318["m_sql"] = "dip156";
$proto318["m_srcTableName"] = "voto_diputado";
$proto318["m_expr"]=$obj;
$proto318["m_alias"] = "";
$obj = new SQLFieldListItem($proto318);

$proto0["m_fieldlist"][]=$obj;
						$proto320=array();
			$obj = new SQLField(array(
	"m_strName" => "dip157",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto320["m_sql"] = "dip157";
$proto320["m_srcTableName"] = "voto_diputado";
$proto320["m_expr"]=$obj;
$proto320["m_alias"] = "";
$obj = new SQLFieldListItem($proto320);

$proto0["m_fieldlist"][]=$obj;
						$proto322=array();
			$obj = new SQLField(array(
	"m_strName" => "dip158",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto322["m_sql"] = "dip158";
$proto322["m_srcTableName"] = "voto_diputado";
$proto322["m_expr"]=$obj;
$proto322["m_alias"] = "";
$obj = new SQLFieldListItem($proto322);

$proto0["m_fieldlist"][]=$obj;
						$proto324=array();
			$obj = new SQLField(array(
	"m_strName" => "dip159",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto324["m_sql"] = "dip159";
$proto324["m_srcTableName"] = "voto_diputado";
$proto324["m_expr"]=$obj;
$proto324["m_alias"] = "";
$obj = new SQLFieldListItem($proto324);

$proto0["m_fieldlist"][]=$obj;
						$proto326=array();
			$obj = new SQLField(array(
	"m_strName" => "dip160",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto326["m_sql"] = "dip160";
$proto326["m_srcTableName"] = "voto_diputado";
$proto326["m_expr"]=$obj;
$proto326["m_alias"] = "";
$obj = new SQLFieldListItem($proto326);

$proto0["m_fieldlist"][]=$obj;
						$proto328=array();
			$obj = new SQLField(array(
	"m_strName" => "dip161",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto328["m_sql"] = "dip161";
$proto328["m_srcTableName"] = "voto_diputado";
$proto328["m_expr"]=$obj;
$proto328["m_alias"] = "";
$obj = new SQLFieldListItem($proto328);

$proto0["m_fieldlist"][]=$obj;
						$proto330=array();
			$obj = new SQLField(array(
	"m_strName" => "dip162",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto330["m_sql"] = "dip162";
$proto330["m_srcTableName"] = "voto_diputado";
$proto330["m_expr"]=$obj;
$proto330["m_alias"] = "";
$obj = new SQLFieldListItem($proto330);

$proto0["m_fieldlist"][]=$obj;
						$proto332=array();
			$obj = new SQLField(array(
	"m_strName" => "dip163",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto332["m_sql"] = "dip163";
$proto332["m_srcTableName"] = "voto_diputado";
$proto332["m_expr"]=$obj;
$proto332["m_alias"] = "";
$obj = new SQLFieldListItem($proto332);

$proto0["m_fieldlist"][]=$obj;
						$proto334=array();
			$obj = new SQLField(array(
	"m_strName" => "dip164",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto334["m_sql"] = "dip164";
$proto334["m_srcTableName"] = "voto_diputado";
$proto334["m_expr"]=$obj;
$proto334["m_alias"] = "";
$obj = new SQLFieldListItem($proto334);

$proto0["m_fieldlist"][]=$obj;
						$proto336=array();
			$obj = new SQLField(array(
	"m_strName" => "dip165",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto336["m_sql"] = "dip165";
$proto336["m_srcTableName"] = "voto_diputado";
$proto336["m_expr"]=$obj;
$proto336["m_alias"] = "";
$obj = new SQLFieldListItem($proto336);

$proto0["m_fieldlist"][]=$obj;
						$proto338=array();
			$obj = new SQLField(array(
	"m_strName" => "dip166",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto338["m_sql"] = "dip166";
$proto338["m_srcTableName"] = "voto_diputado";
$proto338["m_expr"]=$obj;
$proto338["m_alias"] = "";
$obj = new SQLFieldListItem($proto338);

$proto0["m_fieldlist"][]=$obj;
						$proto340=array();
			$obj = new SQLField(array(
	"m_strName" => "dip167",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto340["m_sql"] = "dip167";
$proto340["m_srcTableName"] = "voto_diputado";
$proto340["m_expr"]=$obj;
$proto340["m_alias"] = "";
$obj = new SQLFieldListItem($proto340);

$proto0["m_fieldlist"][]=$obj;
						$proto342=array();
			$obj = new SQLField(array(
	"m_strName" => "dip168",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto342["m_sql"] = "dip168";
$proto342["m_srcTableName"] = "voto_diputado";
$proto342["m_expr"]=$obj;
$proto342["m_alias"] = "";
$obj = new SQLFieldListItem($proto342);

$proto0["m_fieldlist"][]=$obj;
						$proto344=array();
			$obj = new SQLField(array(
	"m_strName" => "dip169",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto344["m_sql"] = "dip169";
$proto344["m_srcTableName"] = "voto_diputado";
$proto344["m_expr"]=$obj;
$proto344["m_alias"] = "";
$obj = new SQLFieldListItem($proto344);

$proto0["m_fieldlist"][]=$obj;
						$proto346=array();
			$obj = new SQLField(array(
	"m_strName" => "dip170",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto346["m_sql"] = "dip170";
$proto346["m_srcTableName"] = "voto_diputado";
$proto346["m_expr"]=$obj;
$proto346["m_alias"] = "";
$obj = new SQLFieldListItem($proto346);

$proto0["m_fieldlist"][]=$obj;
						$proto348=array();
			$obj = new SQLField(array(
	"m_strName" => "dip171",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto348["m_sql"] = "dip171";
$proto348["m_srcTableName"] = "voto_diputado";
$proto348["m_expr"]=$obj;
$proto348["m_alias"] = "";
$obj = new SQLFieldListItem($proto348);

$proto0["m_fieldlist"][]=$obj;
						$proto350=array();
			$obj = new SQLField(array(
	"m_strName" => "dip172",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto350["m_sql"] = "dip172";
$proto350["m_srcTableName"] = "voto_diputado";
$proto350["m_expr"]=$obj;
$proto350["m_alias"] = "";
$obj = new SQLFieldListItem($proto350);

$proto0["m_fieldlist"][]=$obj;
						$proto352=array();
			$obj = new SQLField(array(
	"m_strName" => "dip173",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto352["m_sql"] = "dip173";
$proto352["m_srcTableName"] = "voto_diputado";
$proto352["m_expr"]=$obj;
$proto352["m_alias"] = "";
$obj = new SQLFieldListItem($proto352);

$proto0["m_fieldlist"][]=$obj;
						$proto354=array();
			$obj = new SQLField(array(
	"m_strName" => "dip174",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto354["m_sql"] = "dip174";
$proto354["m_srcTableName"] = "voto_diputado";
$proto354["m_expr"]=$obj;
$proto354["m_alias"] = "";
$obj = new SQLFieldListItem($proto354);

$proto0["m_fieldlist"][]=$obj;
						$proto356=array();
			$obj = new SQLField(array(
	"m_strName" => "dip175",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto356["m_sql"] = "dip175";
$proto356["m_srcTableName"] = "voto_diputado";
$proto356["m_expr"]=$obj;
$proto356["m_alias"] = "";
$obj = new SQLFieldListItem($proto356);

$proto0["m_fieldlist"][]=$obj;
						$proto358=array();
			$obj = new SQLField(array(
	"m_strName" => "dip176",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto358["m_sql"] = "dip176";
$proto358["m_srcTableName"] = "voto_diputado";
$proto358["m_expr"]=$obj;
$proto358["m_alias"] = "";
$obj = new SQLFieldListItem($proto358);

$proto0["m_fieldlist"][]=$obj;
						$proto360=array();
			$obj = new SQLField(array(
	"m_strName" => "dip177",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto360["m_sql"] = "dip177";
$proto360["m_srcTableName"] = "voto_diputado";
$proto360["m_expr"]=$obj;
$proto360["m_alias"] = "";
$obj = new SQLFieldListItem($proto360);

$proto0["m_fieldlist"][]=$obj;
						$proto362=array();
			$obj = new SQLField(array(
	"m_strName" => "dip178",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto362["m_sql"] = "dip178";
$proto362["m_srcTableName"] = "voto_diputado";
$proto362["m_expr"]=$obj;
$proto362["m_alias"] = "";
$obj = new SQLFieldListItem($proto362);

$proto0["m_fieldlist"][]=$obj;
						$proto364=array();
			$obj = new SQLField(array(
	"m_strName" => "dip179",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto364["m_sql"] = "dip179";
$proto364["m_srcTableName"] = "voto_diputado";
$proto364["m_expr"]=$obj;
$proto364["m_alias"] = "";
$obj = new SQLFieldListItem($proto364);

$proto0["m_fieldlist"][]=$obj;
						$proto366=array();
			$obj = new SQLField(array(
	"m_strName" => "dip180",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto366["m_sql"] = "dip180";
$proto366["m_srcTableName"] = "voto_diputado";
$proto366["m_expr"]=$obj;
$proto366["m_alias"] = "";
$obj = new SQLFieldListItem($proto366);

$proto0["m_fieldlist"][]=$obj;
						$proto368=array();
			$obj = new SQLField(array(
	"m_strName" => "dip181",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto368["m_sql"] = "dip181";
$proto368["m_srcTableName"] = "voto_diputado";
$proto368["m_expr"]=$obj;
$proto368["m_alias"] = "";
$obj = new SQLFieldListItem($proto368);

$proto0["m_fieldlist"][]=$obj;
						$proto370=array();
			$obj = new SQLField(array(
	"m_strName" => "dip182",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto370["m_sql"] = "dip182";
$proto370["m_srcTableName"] = "voto_diputado";
$proto370["m_expr"]=$obj;
$proto370["m_alias"] = "";
$obj = new SQLFieldListItem($proto370);

$proto0["m_fieldlist"][]=$obj;
						$proto372=array();
			$obj = new SQLField(array(
	"m_strName" => "dip183",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto372["m_sql"] = "dip183";
$proto372["m_srcTableName"] = "voto_diputado";
$proto372["m_expr"]=$obj;
$proto372["m_alias"] = "";
$obj = new SQLFieldListItem($proto372);

$proto0["m_fieldlist"][]=$obj;
						$proto374=array();
			$obj = new SQLField(array(
	"m_strName" => "dip184",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto374["m_sql"] = "dip184";
$proto374["m_srcTableName"] = "voto_diputado";
$proto374["m_expr"]=$obj;
$proto374["m_alias"] = "";
$obj = new SQLFieldListItem($proto374);

$proto0["m_fieldlist"][]=$obj;
						$proto376=array();
			$obj = new SQLField(array(
	"m_strName" => "dip185",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto376["m_sql"] = "dip185";
$proto376["m_srcTableName"] = "voto_diputado";
$proto376["m_expr"]=$obj;
$proto376["m_alias"] = "";
$obj = new SQLFieldListItem($proto376);

$proto0["m_fieldlist"][]=$obj;
						$proto378=array();
			$obj = new SQLField(array(
	"m_strName" => "dip186",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto378["m_sql"] = "dip186";
$proto378["m_srcTableName"] = "voto_diputado";
$proto378["m_expr"]=$obj;
$proto378["m_alias"] = "";
$obj = new SQLFieldListItem($proto378);

$proto0["m_fieldlist"][]=$obj;
						$proto380=array();
			$obj = new SQLField(array(
	"m_strName" => "dip187",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto380["m_sql"] = "dip187";
$proto380["m_srcTableName"] = "voto_diputado";
$proto380["m_expr"]=$obj;
$proto380["m_alias"] = "";
$obj = new SQLFieldListItem($proto380);

$proto0["m_fieldlist"][]=$obj;
						$proto382=array();
			$obj = new SQLField(array(
	"m_strName" => "dip188",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto382["m_sql"] = "dip188";
$proto382["m_srcTableName"] = "voto_diputado";
$proto382["m_expr"]=$obj;
$proto382["m_alias"] = "";
$obj = new SQLFieldListItem($proto382);

$proto0["m_fieldlist"][]=$obj;
						$proto384=array();
			$obj = new SQLField(array(
	"m_strName" => "dip189",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto384["m_sql"] = "dip189";
$proto384["m_srcTableName"] = "voto_diputado";
$proto384["m_expr"]=$obj;
$proto384["m_alias"] = "";
$obj = new SQLFieldListItem($proto384);

$proto0["m_fieldlist"][]=$obj;
						$proto386=array();
			$obj = new SQLField(array(
	"m_strName" => "dip190",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto386["m_sql"] = "dip190";
$proto386["m_srcTableName"] = "voto_diputado";
$proto386["m_expr"]=$obj;
$proto386["m_alias"] = "";
$obj = new SQLFieldListItem($proto386);

$proto0["m_fieldlist"][]=$obj;
						$proto388=array();
			$obj = new SQLField(array(
	"m_strName" => "dip191",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto388["m_sql"] = "dip191";
$proto388["m_srcTableName"] = "voto_diputado";
$proto388["m_expr"]=$obj;
$proto388["m_alias"] = "";
$obj = new SQLFieldListItem($proto388);

$proto0["m_fieldlist"][]=$obj;
						$proto390=array();
			$obj = new SQLField(array(
	"m_strName" => "dip192",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto390["m_sql"] = "dip192";
$proto390["m_srcTableName"] = "voto_diputado";
$proto390["m_expr"]=$obj;
$proto390["m_alias"] = "";
$obj = new SQLFieldListItem($proto390);

$proto0["m_fieldlist"][]=$obj;
						$proto392=array();
			$obj = new SQLField(array(
	"m_strName" => "dip193",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto392["m_sql"] = "dip193";
$proto392["m_srcTableName"] = "voto_diputado";
$proto392["m_expr"]=$obj;
$proto392["m_alias"] = "";
$obj = new SQLFieldListItem($proto392);

$proto0["m_fieldlist"][]=$obj;
						$proto394=array();
			$obj = new SQLField(array(
	"m_strName" => "dip194",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto394["m_sql"] = "dip194";
$proto394["m_srcTableName"] = "voto_diputado";
$proto394["m_expr"]=$obj;
$proto394["m_alias"] = "";
$obj = new SQLFieldListItem($proto394);

$proto0["m_fieldlist"][]=$obj;
						$proto396=array();
			$obj = new SQLField(array(
	"m_strName" => "dip195",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto396["m_sql"] = "dip195";
$proto396["m_srcTableName"] = "voto_diputado";
$proto396["m_expr"]=$obj;
$proto396["m_alias"] = "";
$obj = new SQLFieldListItem($proto396);

$proto0["m_fieldlist"][]=$obj;
						$proto398=array();
			$obj = new SQLField(array(
	"m_strName" => "dip196",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto398["m_sql"] = "dip196";
$proto398["m_srcTableName"] = "voto_diputado";
$proto398["m_expr"]=$obj;
$proto398["m_alias"] = "";
$obj = new SQLFieldListItem($proto398);

$proto0["m_fieldlist"][]=$obj;
						$proto400=array();
			$obj = new SQLField(array(
	"m_strName" => "dip197",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto400["m_sql"] = "dip197";
$proto400["m_srcTableName"] = "voto_diputado";
$proto400["m_expr"]=$obj;
$proto400["m_alias"] = "";
$obj = new SQLFieldListItem($proto400);

$proto0["m_fieldlist"][]=$obj;
						$proto402=array();
			$obj = new SQLField(array(
	"m_strName" => "dip198",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto402["m_sql"] = "dip198";
$proto402["m_srcTableName"] = "voto_diputado";
$proto402["m_expr"]=$obj;
$proto402["m_alias"] = "";
$obj = new SQLFieldListItem($proto402);

$proto0["m_fieldlist"][]=$obj;
						$proto404=array();
			$obj = new SQLField(array(
	"m_strName" => "dip199",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto404["m_sql"] = "dip199";
$proto404["m_srcTableName"] = "voto_diputado";
$proto404["m_expr"]=$obj;
$proto404["m_alias"] = "";
$obj = new SQLFieldListItem($proto404);

$proto0["m_fieldlist"][]=$obj;
						$proto406=array();
			$obj = new SQLField(array(
	"m_strName" => "dip200",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto406["m_sql"] = "dip200";
$proto406["m_srcTableName"] = "voto_diputado";
$proto406["m_expr"]=$obj;
$proto406["m_alias"] = "";
$obj = new SQLFieldListItem($proto406);

$proto0["m_fieldlist"][]=$obj;
						$proto408=array();
			$obj = new SQLField(array(
	"m_strName" => "dip201",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto408["m_sql"] = "dip201";
$proto408["m_srcTableName"] = "voto_diputado";
$proto408["m_expr"]=$obj;
$proto408["m_alias"] = "";
$obj = new SQLFieldListItem($proto408);

$proto0["m_fieldlist"][]=$obj;
						$proto410=array();
			$obj = new SQLField(array(
	"m_strName" => "dip202",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto410["m_sql"] = "dip202";
$proto410["m_srcTableName"] = "voto_diputado";
$proto410["m_expr"]=$obj;
$proto410["m_alias"] = "";
$obj = new SQLFieldListItem($proto410);

$proto0["m_fieldlist"][]=$obj;
						$proto412=array();
			$obj = new SQLField(array(
	"m_strName" => "dip203",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto412["m_sql"] = "dip203";
$proto412["m_srcTableName"] = "voto_diputado";
$proto412["m_expr"]=$obj;
$proto412["m_alias"] = "";
$obj = new SQLFieldListItem($proto412);

$proto0["m_fieldlist"][]=$obj;
						$proto414=array();
			$obj = new SQLField(array(
	"m_strName" => "dip204",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto414["m_sql"] = "dip204";
$proto414["m_srcTableName"] = "voto_diputado";
$proto414["m_expr"]=$obj;
$proto414["m_alias"] = "";
$obj = new SQLFieldListItem($proto414);

$proto0["m_fieldlist"][]=$obj;
						$proto416=array();
			$obj = new SQLField(array(
	"m_strName" => "dip205",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto416["m_sql"] = "dip205";
$proto416["m_srcTableName"] = "voto_diputado";
$proto416["m_expr"]=$obj;
$proto416["m_alias"] = "";
$obj = new SQLFieldListItem($proto416);

$proto0["m_fieldlist"][]=$obj;
						$proto418=array();
			$obj = new SQLField(array(
	"m_strName" => "dip206",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto418["m_sql"] = "dip206";
$proto418["m_srcTableName"] = "voto_diputado";
$proto418["m_expr"]=$obj;
$proto418["m_alias"] = "";
$obj = new SQLFieldListItem($proto418);

$proto0["m_fieldlist"][]=$obj;
						$proto420=array();
			$obj = new SQLField(array(
	"m_strName" => "dip207",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto420["m_sql"] = "dip207";
$proto420["m_srcTableName"] = "voto_diputado";
$proto420["m_expr"]=$obj;
$proto420["m_alias"] = "";
$obj = new SQLFieldListItem($proto420);

$proto0["m_fieldlist"][]=$obj;
						$proto422=array();
			$obj = new SQLField(array(
	"m_strName" => "dip208",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto422["m_sql"] = "dip208";
$proto422["m_srcTableName"] = "voto_diputado";
$proto422["m_expr"]=$obj;
$proto422["m_alias"] = "";
$obj = new SQLFieldListItem($proto422);

$proto0["m_fieldlist"][]=$obj;
						$proto424=array();
			$obj = new SQLField(array(
	"m_strName" => "dip209",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto424["m_sql"] = "dip209";
$proto424["m_srcTableName"] = "voto_diputado";
$proto424["m_expr"]=$obj;
$proto424["m_alias"] = "";
$obj = new SQLFieldListItem($proto424);

$proto0["m_fieldlist"][]=$obj;
						$proto426=array();
			$obj = new SQLField(array(
	"m_strName" => "dip210",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto426["m_sql"] = "dip210";
$proto426["m_srcTableName"] = "voto_diputado";
$proto426["m_expr"]=$obj;
$proto426["m_alias"] = "";
$obj = new SQLFieldListItem($proto426);

$proto0["m_fieldlist"][]=$obj;
						$proto428=array();
			$obj = new SQLField(array(
	"m_strName" => "dip211",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto428["m_sql"] = "dip211";
$proto428["m_srcTableName"] = "voto_diputado";
$proto428["m_expr"]=$obj;
$proto428["m_alias"] = "";
$obj = new SQLFieldListItem($proto428);

$proto0["m_fieldlist"][]=$obj;
						$proto430=array();
			$obj = new SQLField(array(
	"m_strName" => "dip212",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto430["m_sql"] = "dip212";
$proto430["m_srcTableName"] = "voto_diputado";
$proto430["m_expr"]=$obj;
$proto430["m_alias"] = "";
$obj = new SQLFieldListItem($proto430);

$proto0["m_fieldlist"][]=$obj;
						$proto432=array();
			$obj = new SQLField(array(
	"m_strName" => "dip213",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto432["m_sql"] = "dip213";
$proto432["m_srcTableName"] = "voto_diputado";
$proto432["m_expr"]=$obj;
$proto432["m_alias"] = "";
$obj = new SQLFieldListItem($proto432);

$proto0["m_fieldlist"][]=$obj;
						$proto434=array();
			$obj = new SQLField(array(
	"m_strName" => "dip214",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto434["m_sql"] = "dip214";
$proto434["m_srcTableName"] = "voto_diputado";
$proto434["m_expr"]=$obj;
$proto434["m_alias"] = "";
$obj = new SQLFieldListItem($proto434);

$proto0["m_fieldlist"][]=$obj;
						$proto436=array();
			$obj = new SQLField(array(
	"m_strName" => "dip215",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto436["m_sql"] = "dip215";
$proto436["m_srcTableName"] = "voto_diputado";
$proto436["m_expr"]=$obj;
$proto436["m_alias"] = "";
$obj = new SQLFieldListItem($proto436);

$proto0["m_fieldlist"][]=$obj;
						$proto438=array();
			$obj = new SQLField(array(
	"m_strName" => "dip216",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto438["m_sql"] = "dip216";
$proto438["m_srcTableName"] = "voto_diputado";
$proto438["m_expr"]=$obj;
$proto438["m_alias"] = "";
$obj = new SQLFieldListItem($proto438);

$proto0["m_fieldlist"][]=$obj;
						$proto440=array();
			$obj = new SQLField(array(
	"m_strName" => "dip217",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto440["m_sql"] = "dip217";
$proto440["m_srcTableName"] = "voto_diputado";
$proto440["m_expr"]=$obj;
$proto440["m_alias"] = "";
$obj = new SQLFieldListItem($proto440);

$proto0["m_fieldlist"][]=$obj;
						$proto442=array();
			$obj = new SQLField(array(
	"m_strName" => "dip218",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto442["m_sql"] = "dip218";
$proto442["m_srcTableName"] = "voto_diputado";
$proto442["m_expr"]=$obj;
$proto442["m_alias"] = "";
$obj = new SQLFieldListItem($proto442);

$proto0["m_fieldlist"][]=$obj;
						$proto444=array();
			$obj = new SQLField(array(
	"m_strName" => "dip219",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto444["m_sql"] = "dip219";
$proto444["m_srcTableName"] = "voto_diputado";
$proto444["m_expr"]=$obj;
$proto444["m_alias"] = "";
$obj = new SQLFieldListItem($proto444);

$proto0["m_fieldlist"][]=$obj;
						$proto446=array();
			$obj = new SQLField(array(
	"m_strName" => "dip220",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto446["m_sql"] = "dip220";
$proto446["m_srcTableName"] = "voto_diputado";
$proto446["m_expr"]=$obj;
$proto446["m_alias"] = "";
$obj = new SQLFieldListItem($proto446);

$proto0["m_fieldlist"][]=$obj;
						$proto448=array();
			$obj = new SQLField(array(
	"m_strName" => "dip221",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto448["m_sql"] = "dip221";
$proto448["m_srcTableName"] = "voto_diputado";
$proto448["m_expr"]=$obj;
$proto448["m_alias"] = "";
$obj = new SQLFieldListItem($proto448);

$proto0["m_fieldlist"][]=$obj;
						$proto450=array();
			$obj = new SQLField(array(
	"m_strName" => "dip222",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto450["m_sql"] = "dip222";
$proto450["m_srcTableName"] = "voto_diputado";
$proto450["m_expr"]=$obj;
$proto450["m_alias"] = "";
$obj = new SQLFieldListItem($proto450);

$proto0["m_fieldlist"][]=$obj;
						$proto452=array();
			$obj = new SQLField(array(
	"m_strName" => "dip223",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto452["m_sql"] = "dip223";
$proto452["m_srcTableName"] = "voto_diputado";
$proto452["m_expr"]=$obj;
$proto452["m_alias"] = "";
$obj = new SQLFieldListItem($proto452);

$proto0["m_fieldlist"][]=$obj;
						$proto454=array();
			$obj = new SQLField(array(
	"m_strName" => "dip224",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto454["m_sql"] = "dip224";
$proto454["m_srcTableName"] = "voto_diputado";
$proto454["m_expr"]=$obj;
$proto454["m_alias"] = "";
$obj = new SQLFieldListItem($proto454);

$proto0["m_fieldlist"][]=$obj;
						$proto456=array();
			$obj = new SQLField(array(
	"m_strName" => "dip225",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto456["m_sql"] = "dip225";
$proto456["m_srcTableName"] = "voto_diputado";
$proto456["m_expr"]=$obj;
$proto456["m_alias"] = "";
$obj = new SQLFieldListItem($proto456);

$proto0["m_fieldlist"][]=$obj;
						$proto458=array();
			$obj = new SQLField(array(
	"m_strName" => "dip226",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto458["m_sql"] = "dip226";
$proto458["m_srcTableName"] = "voto_diputado";
$proto458["m_expr"]=$obj;
$proto458["m_alias"] = "";
$obj = new SQLFieldListItem($proto458);

$proto0["m_fieldlist"][]=$obj;
						$proto460=array();
			$obj = new SQLField(array(
	"m_strName" => "dip227",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto460["m_sql"] = "dip227";
$proto460["m_srcTableName"] = "voto_diputado";
$proto460["m_expr"]=$obj;
$proto460["m_alias"] = "";
$obj = new SQLFieldListItem($proto460);

$proto0["m_fieldlist"][]=$obj;
						$proto462=array();
			$obj = new SQLField(array(
	"m_strName" => "dip228",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto462["m_sql"] = "dip228";
$proto462["m_srcTableName"] = "voto_diputado";
$proto462["m_expr"]=$obj;
$proto462["m_alias"] = "";
$obj = new SQLFieldListItem($proto462);

$proto0["m_fieldlist"][]=$obj;
						$proto464=array();
			$obj = new SQLField(array(
	"m_strName" => "dip229",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto464["m_sql"] = "dip229";
$proto464["m_srcTableName"] = "voto_diputado";
$proto464["m_expr"]=$obj;
$proto464["m_alias"] = "";
$obj = new SQLFieldListItem($proto464);

$proto0["m_fieldlist"][]=$obj;
						$proto466=array();
			$obj = new SQLField(array(
	"m_strName" => "dip230",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto466["m_sql"] = "dip230";
$proto466["m_srcTableName"] = "voto_diputado";
$proto466["m_expr"]=$obj;
$proto466["m_alias"] = "";
$obj = new SQLFieldListItem($proto466);

$proto0["m_fieldlist"][]=$obj;
						$proto468=array();
			$obj = new SQLField(array(
	"m_strName" => "dip231",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto468["m_sql"] = "dip231";
$proto468["m_srcTableName"] = "voto_diputado";
$proto468["m_expr"]=$obj;
$proto468["m_alias"] = "";
$obj = new SQLFieldListItem($proto468);

$proto0["m_fieldlist"][]=$obj;
						$proto470=array();
			$obj = new SQLField(array(
	"m_strName" => "dip232",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto470["m_sql"] = "dip232";
$proto470["m_srcTableName"] = "voto_diputado";
$proto470["m_expr"]=$obj;
$proto470["m_alias"] = "";
$obj = new SQLFieldListItem($proto470);

$proto0["m_fieldlist"][]=$obj;
						$proto472=array();
			$obj = new SQLField(array(
	"m_strName" => "dip233",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto472["m_sql"] = "dip233";
$proto472["m_srcTableName"] = "voto_diputado";
$proto472["m_expr"]=$obj;
$proto472["m_alias"] = "";
$obj = new SQLFieldListItem($proto472);

$proto0["m_fieldlist"][]=$obj;
						$proto474=array();
			$obj = new SQLField(array(
	"m_strName" => "dip234",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto474["m_sql"] = "dip234";
$proto474["m_srcTableName"] = "voto_diputado";
$proto474["m_expr"]=$obj;
$proto474["m_alias"] = "";
$obj = new SQLFieldListItem($proto474);

$proto0["m_fieldlist"][]=$obj;
						$proto476=array();
			$obj = new SQLField(array(
	"m_strName" => "dip235",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto476["m_sql"] = "dip235";
$proto476["m_srcTableName"] = "voto_diputado";
$proto476["m_expr"]=$obj;
$proto476["m_alias"] = "";
$obj = new SQLFieldListItem($proto476);

$proto0["m_fieldlist"][]=$obj;
						$proto478=array();
			$obj = new SQLField(array(
	"m_strName" => "dip236",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto478["m_sql"] = "dip236";
$proto478["m_srcTableName"] = "voto_diputado";
$proto478["m_expr"]=$obj;
$proto478["m_alias"] = "";
$obj = new SQLFieldListItem($proto478);

$proto0["m_fieldlist"][]=$obj;
						$proto480=array();
			$obj = new SQLField(array(
	"m_strName" => "dip237",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto480["m_sql"] = "dip237";
$proto480["m_srcTableName"] = "voto_diputado";
$proto480["m_expr"]=$obj;
$proto480["m_alias"] = "";
$obj = new SQLFieldListItem($proto480);

$proto0["m_fieldlist"][]=$obj;
						$proto482=array();
			$obj = new SQLField(array(
	"m_strName" => "dip238",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto482["m_sql"] = "dip238";
$proto482["m_srcTableName"] = "voto_diputado";
$proto482["m_expr"]=$obj;
$proto482["m_alias"] = "";
$obj = new SQLFieldListItem($proto482);

$proto0["m_fieldlist"][]=$obj;
						$proto484=array();
			$obj = new SQLField(array(
	"m_strName" => "dip239",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto484["m_sql"] = "dip239";
$proto484["m_srcTableName"] = "voto_diputado";
$proto484["m_expr"]=$obj;
$proto484["m_alias"] = "";
$obj = new SQLFieldListItem($proto484);

$proto0["m_fieldlist"][]=$obj;
						$proto486=array();
			$obj = new SQLField(array(
	"m_strName" => "dip240",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto486["m_sql"] = "dip240";
$proto486["m_srcTableName"] = "voto_diputado";
$proto486["m_expr"]=$obj;
$proto486["m_alias"] = "";
$obj = new SQLFieldListItem($proto486);

$proto0["m_fieldlist"][]=$obj;
						$proto488=array();
			$obj = new SQLField(array(
	"m_strName" => "dip241",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto488["m_sql"] = "dip241";
$proto488["m_srcTableName"] = "voto_diputado";
$proto488["m_expr"]=$obj;
$proto488["m_alias"] = "";
$obj = new SQLFieldListItem($proto488);

$proto0["m_fieldlist"][]=$obj;
						$proto490=array();
			$obj = new SQLField(array(
	"m_strName" => "dip242",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto490["m_sql"] = "dip242";
$proto490["m_srcTableName"] = "voto_diputado";
$proto490["m_expr"]=$obj;
$proto490["m_alias"] = "";
$obj = new SQLFieldListItem($proto490);

$proto0["m_fieldlist"][]=$obj;
						$proto492=array();
			$obj = new SQLField(array(
	"m_strName" => "dip243",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto492["m_sql"] = "dip243";
$proto492["m_srcTableName"] = "voto_diputado";
$proto492["m_expr"]=$obj;
$proto492["m_alias"] = "";
$obj = new SQLFieldListItem($proto492);

$proto0["m_fieldlist"][]=$obj;
						$proto494=array();
			$obj = new SQLField(array(
	"m_strName" => "dip244",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto494["m_sql"] = "dip244";
$proto494["m_srcTableName"] = "voto_diputado";
$proto494["m_expr"]=$obj;
$proto494["m_alias"] = "";
$obj = new SQLFieldListItem($proto494);

$proto0["m_fieldlist"][]=$obj;
						$proto496=array();
			$obj = new SQLField(array(
	"m_strName" => "dip245",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto496["m_sql"] = "dip245";
$proto496["m_srcTableName"] = "voto_diputado";
$proto496["m_expr"]=$obj;
$proto496["m_alias"] = "";
$obj = new SQLFieldListItem($proto496);

$proto0["m_fieldlist"][]=$obj;
						$proto498=array();
			$obj = new SQLField(array(
	"m_strName" => "dip246",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto498["m_sql"] = "dip246";
$proto498["m_srcTableName"] = "voto_diputado";
$proto498["m_expr"]=$obj;
$proto498["m_alias"] = "";
$obj = new SQLFieldListItem($proto498);

$proto0["m_fieldlist"][]=$obj;
						$proto500=array();
			$obj = new SQLField(array(
	"m_strName" => "dip247",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto500["m_sql"] = "dip247";
$proto500["m_srcTableName"] = "voto_diputado";
$proto500["m_expr"]=$obj;
$proto500["m_alias"] = "";
$obj = new SQLFieldListItem($proto500);

$proto0["m_fieldlist"][]=$obj;
						$proto502=array();
			$obj = new SQLField(array(
	"m_strName" => "dip248",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto502["m_sql"] = "dip248";
$proto502["m_srcTableName"] = "voto_diputado";
$proto502["m_expr"]=$obj;
$proto502["m_alias"] = "";
$obj = new SQLFieldListItem($proto502);

$proto0["m_fieldlist"][]=$obj;
						$proto504=array();
			$obj = new SQLField(array(
	"m_strName" => "dip249",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto504["m_sql"] = "dip249";
$proto504["m_srcTableName"] = "voto_diputado";
$proto504["m_expr"]=$obj;
$proto504["m_alias"] = "";
$obj = new SQLFieldListItem($proto504);

$proto0["m_fieldlist"][]=$obj;
						$proto506=array();
			$obj = new SQLField(array(
	"m_strName" => "dip250",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto506["m_sql"] = "dip250";
$proto506["m_srcTableName"] = "voto_diputado";
$proto506["m_expr"]=$obj;
$proto506["m_alias"] = "";
$obj = new SQLFieldListItem($proto506);

$proto0["m_fieldlist"][]=$obj;
						$proto508=array();
			$obj = new SQLField(array(
	"m_strName" => "dip251",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto508["m_sql"] = "dip251";
$proto508["m_srcTableName"] = "voto_diputado";
$proto508["m_expr"]=$obj;
$proto508["m_alias"] = "";
$obj = new SQLFieldListItem($proto508);

$proto0["m_fieldlist"][]=$obj;
						$proto510=array();
			$obj = new SQLField(array(
	"m_strName" => "dip252",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto510["m_sql"] = "dip252";
$proto510["m_srcTableName"] = "voto_diputado";
$proto510["m_expr"]=$obj;
$proto510["m_alias"] = "";
$obj = new SQLFieldListItem($proto510);

$proto0["m_fieldlist"][]=$obj;
						$proto512=array();
			$obj = new SQLField(array(
	"m_strName" => "dip253",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto512["m_sql"] = "dip253";
$proto512["m_srcTableName"] = "voto_diputado";
$proto512["m_expr"]=$obj;
$proto512["m_alias"] = "";
$obj = new SQLFieldListItem($proto512);

$proto0["m_fieldlist"][]=$obj;
						$proto514=array();
			$obj = new SQLField(array(
	"m_strName" => "dip254",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto514["m_sql"] = "dip254";
$proto514["m_srcTableName"] = "voto_diputado";
$proto514["m_expr"]=$obj;
$proto514["m_alias"] = "";
$obj = new SQLFieldListItem($proto514);

$proto0["m_fieldlist"][]=$obj;
						$proto516=array();
			$obj = new SQLField(array(
	"m_strName" => "dip255",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto516["m_sql"] = "dip255";
$proto516["m_srcTableName"] = "voto_diputado";
$proto516["m_expr"]=$obj;
$proto516["m_alias"] = "";
$obj = new SQLFieldListItem($proto516);

$proto0["m_fieldlist"][]=$obj;
						$proto518=array();
			$obj = new SQLField(array(
	"m_strName" => "dip256",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto518["m_sql"] = "dip256";
$proto518["m_srcTableName"] = "voto_diputado";
$proto518["m_expr"]=$obj;
$proto518["m_alias"] = "";
$obj = new SQLFieldListItem($proto518);

$proto0["m_fieldlist"][]=$obj;
						$proto520=array();
			$obj = new SQLField(array(
	"m_strName" => "dip257",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto520["m_sql"] = "dip257";
$proto520["m_srcTableName"] = "voto_diputado";
$proto520["m_expr"]=$obj;
$proto520["m_alias"] = "";
$obj = new SQLFieldListItem($proto520);

$proto0["m_fieldlist"][]=$obj;
						$proto522=array();
			$obj = new SQLField(array(
	"m_strName" => "dip258",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto522["m_sql"] = "dip258";
$proto522["m_srcTableName"] = "voto_diputado";
$proto522["m_expr"]=$obj;
$proto522["m_alias"] = "";
$obj = new SQLFieldListItem($proto522);

$proto0["m_fieldlist"][]=$obj;
						$proto524=array();
			$obj = new SQLField(array(
	"m_strName" => "dip259",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto524["m_sql"] = "dip259";
$proto524["m_srcTableName"] = "voto_diputado";
$proto524["m_expr"]=$obj;
$proto524["m_alias"] = "";
$obj = new SQLFieldListItem($proto524);

$proto0["m_fieldlist"][]=$obj;
						$proto526=array();
			$obj = new SQLField(array(
	"m_strName" => "dip260",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto526["m_sql"] = "dip260";
$proto526["m_srcTableName"] = "voto_diputado";
$proto526["m_expr"]=$obj;
$proto526["m_alias"] = "";
$obj = new SQLFieldListItem($proto526);

$proto0["m_fieldlist"][]=$obj;
						$proto528=array();
			$obj = new SQLField(array(
	"m_strName" => "dip261",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto528["m_sql"] = "dip261";
$proto528["m_srcTableName"] = "voto_diputado";
$proto528["m_expr"]=$obj;
$proto528["m_alias"] = "";
$obj = new SQLFieldListItem($proto528);

$proto0["m_fieldlist"][]=$obj;
						$proto530=array();
			$obj = new SQLField(array(
	"m_strName" => "dip262",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto530["m_sql"] = "dip262";
$proto530["m_srcTableName"] = "voto_diputado";
$proto530["m_expr"]=$obj;
$proto530["m_alias"] = "";
$obj = new SQLFieldListItem($proto530);

$proto0["m_fieldlist"][]=$obj;
						$proto532=array();
			$obj = new SQLField(array(
	"m_strName" => "dip263",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto532["m_sql"] = "dip263";
$proto532["m_srcTableName"] = "voto_diputado";
$proto532["m_expr"]=$obj;
$proto532["m_alias"] = "";
$obj = new SQLFieldListItem($proto532);

$proto0["m_fieldlist"][]=$obj;
						$proto534=array();
			$obj = new SQLField(array(
	"m_strName" => "dip264",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto534["m_sql"] = "dip264";
$proto534["m_srcTableName"] = "voto_diputado";
$proto534["m_expr"]=$obj;
$proto534["m_alias"] = "";
$obj = new SQLFieldListItem($proto534);

$proto0["m_fieldlist"][]=$obj;
						$proto536=array();
			$obj = new SQLField(array(
	"m_strName" => "dip265",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto536["m_sql"] = "dip265";
$proto536["m_srcTableName"] = "voto_diputado";
$proto536["m_expr"]=$obj;
$proto536["m_alias"] = "";
$obj = new SQLFieldListItem($proto536);

$proto0["m_fieldlist"][]=$obj;
						$proto538=array();
			$obj = new SQLField(array(
	"m_strName" => "dip266",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto538["m_sql"] = "dip266";
$proto538["m_srcTableName"] = "voto_diputado";
$proto538["m_expr"]=$obj;
$proto538["m_alias"] = "";
$obj = new SQLFieldListItem($proto538);

$proto0["m_fieldlist"][]=$obj;
						$proto540=array();
			$obj = new SQLField(array(
	"m_strName" => "dip267",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto540["m_sql"] = "dip267";
$proto540["m_srcTableName"] = "voto_diputado";
$proto540["m_expr"]=$obj;
$proto540["m_alias"] = "";
$obj = new SQLFieldListItem($proto540);

$proto0["m_fieldlist"][]=$obj;
						$proto542=array();
			$obj = new SQLField(array(
	"m_strName" => "dip268",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto542["m_sql"] = "dip268";
$proto542["m_srcTableName"] = "voto_diputado";
$proto542["m_expr"]=$obj;
$proto542["m_alias"] = "";
$obj = new SQLFieldListItem($proto542);

$proto0["m_fieldlist"][]=$obj;
						$proto544=array();
			$obj = new SQLField(array(
	"m_strName" => "dip269",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto544["m_sql"] = "dip269";
$proto544["m_srcTableName"] = "voto_diputado";
$proto544["m_expr"]=$obj;
$proto544["m_alias"] = "";
$obj = new SQLFieldListItem($proto544);

$proto0["m_fieldlist"][]=$obj;
						$proto546=array();
			$obj = new SQLField(array(
	"m_strName" => "dip270",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto546["m_sql"] = "dip270";
$proto546["m_srcTableName"] = "voto_diputado";
$proto546["m_expr"]=$obj;
$proto546["m_alias"] = "";
$obj = new SQLFieldListItem($proto546);

$proto0["m_fieldlist"][]=$obj;
						$proto548=array();
			$obj = new SQLField(array(
	"m_strName" => "dip271",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto548["m_sql"] = "dip271";
$proto548["m_srcTableName"] = "voto_diputado";
$proto548["m_expr"]=$obj;
$proto548["m_alias"] = "";
$obj = new SQLFieldListItem($proto548);

$proto0["m_fieldlist"][]=$obj;
						$proto550=array();
			$obj = new SQLField(array(
	"m_strName" => "dip272",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto550["m_sql"] = "dip272";
$proto550["m_srcTableName"] = "voto_diputado";
$proto550["m_expr"]=$obj;
$proto550["m_alias"] = "";
$obj = new SQLFieldListItem($proto550);

$proto0["m_fieldlist"][]=$obj;
						$proto552=array();
			$obj = new SQLField(array(
	"m_strName" => "dip273",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto552["m_sql"] = "dip273";
$proto552["m_srcTableName"] = "voto_diputado";
$proto552["m_expr"]=$obj;
$proto552["m_alias"] = "";
$obj = new SQLFieldListItem($proto552);

$proto0["m_fieldlist"][]=$obj;
						$proto554=array();
			$obj = new SQLField(array(
	"m_strName" => "dip274",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto554["m_sql"] = "dip274";
$proto554["m_srcTableName"] = "voto_diputado";
$proto554["m_expr"]=$obj;
$proto554["m_alias"] = "";
$obj = new SQLFieldListItem($proto554);

$proto0["m_fieldlist"][]=$obj;
						$proto556=array();
			$obj = new SQLField(array(
	"m_strName" => "dip275",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto556["m_sql"] = "dip275";
$proto556["m_srcTableName"] = "voto_diputado";
$proto556["m_expr"]=$obj;
$proto556["m_alias"] = "";
$obj = new SQLFieldListItem($proto556);

$proto0["m_fieldlist"][]=$obj;
						$proto558=array();
			$obj = new SQLField(array(
	"m_strName" => "dip276",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto558["m_sql"] = "dip276";
$proto558["m_srcTableName"] = "voto_diputado";
$proto558["m_expr"]=$obj;
$proto558["m_alias"] = "";
$obj = new SQLFieldListItem($proto558);

$proto0["m_fieldlist"][]=$obj;
						$proto560=array();
			$obj = new SQLField(array(
	"m_strName" => "dip277",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto560["m_sql"] = "dip277";
$proto560["m_srcTableName"] = "voto_diputado";
$proto560["m_expr"]=$obj;
$proto560["m_alias"] = "";
$obj = new SQLFieldListItem($proto560);

$proto0["m_fieldlist"][]=$obj;
						$proto562=array();
			$obj = new SQLField(array(
	"m_strName" => "dip278",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto562["m_sql"] = "dip278";
$proto562["m_srcTableName"] = "voto_diputado";
$proto562["m_expr"]=$obj;
$proto562["m_alias"] = "";
$obj = new SQLFieldListItem($proto562);

$proto0["m_fieldlist"][]=$obj;
						$proto564=array();
			$obj = new SQLField(array(
	"m_strName" => "dip279",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto564["m_sql"] = "dip279";
$proto564["m_srcTableName"] = "voto_diputado";
$proto564["m_expr"]=$obj;
$proto564["m_alias"] = "";
$obj = new SQLFieldListItem($proto564);

$proto0["m_fieldlist"][]=$obj;
						$proto566=array();
			$obj = new SQLField(array(
	"m_strName" => "dip280",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto566["m_sql"] = "dip280";
$proto566["m_srcTableName"] = "voto_diputado";
$proto566["m_expr"]=$obj;
$proto566["m_alias"] = "";
$obj = new SQLFieldListItem($proto566);

$proto0["m_fieldlist"][]=$obj;
						$proto568=array();
			$obj = new SQLField(array(
	"m_strName" => "validos",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto568["m_sql"] = "validos";
$proto568["m_srcTableName"] = "voto_diputado";
$proto568["m_expr"]=$obj;
$proto568["m_alias"] = "";
$obj = new SQLFieldListItem($proto568);

$proto0["m_fieldlist"][]=$obj;
						$proto570=array();
			$obj = new SQLField(array(
	"m_strName" => "blancos",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto570["m_sql"] = "blancos";
$proto570["m_srcTableName"] = "voto_diputado";
$proto570["m_expr"]=$obj;
$proto570["m_alias"] = "";
$obj = new SQLFieldListItem($proto570);

$proto0["m_fieldlist"][]=$obj;
						$proto572=array();
			$obj = new SQLField(array(
	"m_strName" => "nulos",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto572["m_sql"] = "nulos";
$proto572["m_srcTableName"] = "voto_diputado";
$proto572["m_expr"]=$obj;
$proto572["m_alias"] = "";
$obj = new SQLFieldListItem($proto572);

$proto0["m_fieldlist"][]=$obj;
						$proto574=array();
			$obj = new SQLField(array(
	"m_strName" => "utilizados",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto574["m_sql"] = "utilizados";
$proto574["m_srcTableName"] = "voto_diputado";
$proto574["m_expr"]=$obj;
$proto574["m_alias"] = "";
$obj = new SQLFieldListItem($proto574);

$proto0["m_fieldlist"][]=$obj;
						$proto576=array();
			$obj = new SQLField(array(
	"m_strName" => "no_utilizados",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto576["m_sql"] = "no_utilizados";
$proto576["m_srcTableName"] = "voto_diputado";
$proto576["m_expr"]=$obj;
$proto576["m_alias"] = "";
$obj = new SQLFieldListItem($proto576);

$proto0["m_fieldlist"][]=$obj;
						$proto578=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto578["m_sql"] = "total";
$proto578["m_srcTableName"] = "voto_diputado";
$proto578["m_expr"]=$obj;
$proto578["m_alias"] = "";
$obj = new SQLFieldListItem($proto578);

$proto0["m_fieldlist"][]=$obj;
						$proto580=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto580["m_sql"] = "usuario";
$proto580["m_srcTableName"] = "voto_diputado";
$proto580["m_expr"]=$obj;
$proto580["m_alias"] = "";
$obj = new SQLFieldListItem($proto580);

$proto0["m_fieldlist"][]=$obj;
						$proto582=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto582["m_sql"] = "fecha";
$proto582["m_srcTableName"] = "voto_diputado";
$proto582["m_expr"]=$obj;
$proto582["m_alias"] = "";
$obj = new SQLFieldListItem($proto582);

$proto0["m_fieldlist"][]=$obj;
						$proto584=array();
			$obj = new SQLField(array(
	"m_strName" => "editado_por",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto584["m_sql"] = "editado_por";
$proto584["m_srcTableName"] = "voto_diputado";
$proto584["m_expr"]=$obj;
$proto584["m_alias"] = "";
$obj = new SQLFieldListItem($proto584);

$proto0["m_fieldlist"][]=$obj;
						$proto586=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_edicion",
	"m_strTable" => "voto_diputado",
	"m_srcTableName" => "voto_diputado"
));

$proto586["m_sql"] = "fecha_edicion";
$proto586["m_srcTableName"] = "voto_diputado";
$proto586["m_expr"]=$obj;
$proto586["m_alias"] = "";
$obj = new SQLFieldListItem($proto586);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto588=array();
$proto588["m_link"] = "SQLL_MAIN";
			$proto589=array();
$proto589["m_strName"] = "voto_diputado";
$proto589["m_srcTableName"] = "voto_diputado";
$proto589["m_columns"] = array();
$proto589["m_columns"][] = "id_urna";
$proto589["m_columns"][] = "dip1";
$proto589["m_columns"][] = "dip2";
$proto589["m_columns"][] = "dip3";
$proto589["m_columns"][] = "dip4";
$proto589["m_columns"][] = "dip5";
$proto589["m_columns"][] = "dip6";
$proto589["m_columns"][] = "dip7";
$proto589["m_columns"][] = "dip8";
$proto589["m_columns"][] = "dip9";
$proto589["m_columns"][] = "dip10";
$proto589["m_columns"][] = "dip11";
$proto589["m_columns"][] = "dip12";
$proto589["m_columns"][] = "dip13";
$proto589["m_columns"][] = "dip14";
$proto589["m_columns"][] = "dip15";
$proto589["m_columns"][] = "dip16";
$proto589["m_columns"][] = "dip17";
$proto589["m_columns"][] = "dip18";
$proto589["m_columns"][] = "dip19";
$proto589["m_columns"][] = "dip20";
$proto589["m_columns"][] = "dip21";
$proto589["m_columns"][] = "dip22";
$proto589["m_columns"][] = "dip23";
$proto589["m_columns"][] = "dip24";
$proto589["m_columns"][] = "dip25";
$proto589["m_columns"][] = "dip26";
$proto589["m_columns"][] = "dip27";
$proto589["m_columns"][] = "dip28";
$proto589["m_columns"][] = "dip29";
$proto589["m_columns"][] = "dip30";
$proto589["m_columns"][] = "dip31";
$proto589["m_columns"][] = "dip32";
$proto589["m_columns"][] = "dip33";
$proto589["m_columns"][] = "dip34";
$proto589["m_columns"][] = "dip35";
$proto589["m_columns"][] = "dip36";
$proto589["m_columns"][] = "dip37";
$proto589["m_columns"][] = "dip38";
$proto589["m_columns"][] = "dip39";
$proto589["m_columns"][] = "dip40";
$proto589["m_columns"][] = "dip41";
$proto589["m_columns"][] = "dip42";
$proto589["m_columns"][] = "dip43";
$proto589["m_columns"][] = "dip44";
$proto589["m_columns"][] = "dip45";
$proto589["m_columns"][] = "dip46";
$proto589["m_columns"][] = "dip47";
$proto589["m_columns"][] = "dip48";
$proto589["m_columns"][] = "dip49";
$proto589["m_columns"][] = "dip50";
$proto589["m_columns"][] = "dip51";
$proto589["m_columns"][] = "dip52";
$proto589["m_columns"][] = "dip53";
$proto589["m_columns"][] = "dip54";
$proto589["m_columns"][] = "dip55";
$proto589["m_columns"][] = "dip56";
$proto589["m_columns"][] = "dip57";
$proto589["m_columns"][] = "dip58";
$proto589["m_columns"][] = "dip59";
$proto589["m_columns"][] = "dip60";
$proto589["m_columns"][] = "dip61";
$proto589["m_columns"][] = "dip62";
$proto589["m_columns"][] = "dip63";
$proto589["m_columns"][] = "dip64";
$proto589["m_columns"][] = "dip65";
$proto589["m_columns"][] = "dip66";
$proto589["m_columns"][] = "dip67";
$proto589["m_columns"][] = "dip68";
$proto589["m_columns"][] = "dip69";
$proto589["m_columns"][] = "dip70";
$proto589["m_columns"][] = "dip71";
$proto589["m_columns"][] = "dip72";
$proto589["m_columns"][] = "dip73";
$proto589["m_columns"][] = "dip74";
$proto589["m_columns"][] = "dip75";
$proto589["m_columns"][] = "dip76";
$proto589["m_columns"][] = "dip77";
$proto589["m_columns"][] = "dip78";
$proto589["m_columns"][] = "dip79";
$proto589["m_columns"][] = "dip80";
$proto589["m_columns"][] = "dip81";
$proto589["m_columns"][] = "dip82";
$proto589["m_columns"][] = "dip83";
$proto589["m_columns"][] = "dip84";
$proto589["m_columns"][] = "dip85";
$proto589["m_columns"][] = "dip86";
$proto589["m_columns"][] = "dip87";
$proto589["m_columns"][] = "dip88";
$proto589["m_columns"][] = "dip89";
$proto589["m_columns"][] = "dip90";
$proto589["m_columns"][] = "dip91";
$proto589["m_columns"][] = "dip92";
$proto589["m_columns"][] = "dip93";
$proto589["m_columns"][] = "dip94";
$proto589["m_columns"][] = "dip95";
$proto589["m_columns"][] = "dip96";
$proto589["m_columns"][] = "dip97";
$proto589["m_columns"][] = "dip98";
$proto589["m_columns"][] = "dip99";
$proto589["m_columns"][] = "dip100";
$proto589["m_columns"][] = "dip101";
$proto589["m_columns"][] = "dip102";
$proto589["m_columns"][] = "dip103";
$proto589["m_columns"][] = "dip104";
$proto589["m_columns"][] = "dip105";
$proto589["m_columns"][] = "dip106";
$proto589["m_columns"][] = "dip107";
$proto589["m_columns"][] = "dip108";
$proto589["m_columns"][] = "dip109";
$proto589["m_columns"][] = "dip110";
$proto589["m_columns"][] = "dip111";
$proto589["m_columns"][] = "dip112";
$proto589["m_columns"][] = "dip113";
$proto589["m_columns"][] = "dip114";
$proto589["m_columns"][] = "dip115";
$proto589["m_columns"][] = "dip116";
$proto589["m_columns"][] = "dip117";
$proto589["m_columns"][] = "dip118";
$proto589["m_columns"][] = "dip119";
$proto589["m_columns"][] = "dip120";
$proto589["m_columns"][] = "dip121";
$proto589["m_columns"][] = "dip122";
$proto589["m_columns"][] = "dip123";
$proto589["m_columns"][] = "dip124";
$proto589["m_columns"][] = "dip125";
$proto589["m_columns"][] = "dip126";
$proto589["m_columns"][] = "dip127";
$proto589["m_columns"][] = "dip128";
$proto589["m_columns"][] = "dip129";
$proto589["m_columns"][] = "dip130";
$proto589["m_columns"][] = "dip131";
$proto589["m_columns"][] = "dip132";
$proto589["m_columns"][] = "dip133";
$proto589["m_columns"][] = "dip134";
$proto589["m_columns"][] = "dip135";
$proto589["m_columns"][] = "dip136";
$proto589["m_columns"][] = "dip137";
$proto589["m_columns"][] = "dip138";
$proto589["m_columns"][] = "dip139";
$proto589["m_columns"][] = "dip140";
$proto589["m_columns"][] = "dip141";
$proto589["m_columns"][] = "dip142";
$proto589["m_columns"][] = "dip143";
$proto589["m_columns"][] = "dip144";
$proto589["m_columns"][] = "dip145";
$proto589["m_columns"][] = "dip146";
$proto589["m_columns"][] = "dip147";
$proto589["m_columns"][] = "dip148";
$proto589["m_columns"][] = "dip149";
$proto589["m_columns"][] = "dip150";
$proto589["m_columns"][] = "dip151";
$proto589["m_columns"][] = "dip152";
$proto589["m_columns"][] = "dip153";
$proto589["m_columns"][] = "dip154";
$proto589["m_columns"][] = "dip155";
$proto589["m_columns"][] = "dip156";
$proto589["m_columns"][] = "dip157";
$proto589["m_columns"][] = "dip158";
$proto589["m_columns"][] = "dip159";
$proto589["m_columns"][] = "dip160";
$proto589["m_columns"][] = "dip161";
$proto589["m_columns"][] = "dip162";
$proto589["m_columns"][] = "dip163";
$proto589["m_columns"][] = "dip164";
$proto589["m_columns"][] = "dip165";
$proto589["m_columns"][] = "dip166";
$proto589["m_columns"][] = "dip167";
$proto589["m_columns"][] = "dip168";
$proto589["m_columns"][] = "dip169";
$proto589["m_columns"][] = "dip170";
$proto589["m_columns"][] = "dip171";
$proto589["m_columns"][] = "dip172";
$proto589["m_columns"][] = "dip173";
$proto589["m_columns"][] = "dip174";
$proto589["m_columns"][] = "dip175";
$proto589["m_columns"][] = "dip176";
$proto589["m_columns"][] = "dip177";
$proto589["m_columns"][] = "dip178";
$proto589["m_columns"][] = "dip179";
$proto589["m_columns"][] = "dip180";
$proto589["m_columns"][] = "dip181";
$proto589["m_columns"][] = "dip182";
$proto589["m_columns"][] = "dip183";
$proto589["m_columns"][] = "dip184";
$proto589["m_columns"][] = "dip185";
$proto589["m_columns"][] = "dip186";
$proto589["m_columns"][] = "dip187";
$proto589["m_columns"][] = "dip188";
$proto589["m_columns"][] = "dip189";
$proto589["m_columns"][] = "dip190";
$proto589["m_columns"][] = "dip191";
$proto589["m_columns"][] = "dip192";
$proto589["m_columns"][] = "dip193";
$proto589["m_columns"][] = "dip194";
$proto589["m_columns"][] = "dip195";
$proto589["m_columns"][] = "dip196";
$proto589["m_columns"][] = "dip197";
$proto589["m_columns"][] = "dip198";
$proto589["m_columns"][] = "dip199";
$proto589["m_columns"][] = "dip200";
$proto589["m_columns"][] = "dip201";
$proto589["m_columns"][] = "dip202";
$proto589["m_columns"][] = "dip203";
$proto589["m_columns"][] = "dip204";
$proto589["m_columns"][] = "dip205";
$proto589["m_columns"][] = "dip206";
$proto589["m_columns"][] = "dip207";
$proto589["m_columns"][] = "dip208";
$proto589["m_columns"][] = "dip209";
$proto589["m_columns"][] = "dip210";
$proto589["m_columns"][] = "dip211";
$proto589["m_columns"][] = "dip212";
$proto589["m_columns"][] = "dip213";
$proto589["m_columns"][] = "dip214";
$proto589["m_columns"][] = "dip215";
$proto589["m_columns"][] = "dip216";
$proto589["m_columns"][] = "dip217";
$proto589["m_columns"][] = "dip218";
$proto589["m_columns"][] = "dip219";
$proto589["m_columns"][] = "dip220";
$proto589["m_columns"][] = "dip221";
$proto589["m_columns"][] = "dip222";
$proto589["m_columns"][] = "dip223";
$proto589["m_columns"][] = "dip224";
$proto589["m_columns"][] = "dip225";
$proto589["m_columns"][] = "dip226";
$proto589["m_columns"][] = "dip227";
$proto589["m_columns"][] = "dip228";
$proto589["m_columns"][] = "dip229";
$proto589["m_columns"][] = "dip230";
$proto589["m_columns"][] = "dip231";
$proto589["m_columns"][] = "dip232";
$proto589["m_columns"][] = "dip233";
$proto589["m_columns"][] = "dip234";
$proto589["m_columns"][] = "dip235";
$proto589["m_columns"][] = "dip236";
$proto589["m_columns"][] = "dip237";
$proto589["m_columns"][] = "dip238";
$proto589["m_columns"][] = "dip239";
$proto589["m_columns"][] = "dip240";
$proto589["m_columns"][] = "dip241";
$proto589["m_columns"][] = "dip242";
$proto589["m_columns"][] = "dip243";
$proto589["m_columns"][] = "dip244";
$proto589["m_columns"][] = "dip245";
$proto589["m_columns"][] = "dip246";
$proto589["m_columns"][] = "dip247";
$proto589["m_columns"][] = "dip248";
$proto589["m_columns"][] = "dip249";
$proto589["m_columns"][] = "dip250";
$proto589["m_columns"][] = "dip251";
$proto589["m_columns"][] = "dip252";
$proto589["m_columns"][] = "dip253";
$proto589["m_columns"][] = "dip254";
$proto589["m_columns"][] = "dip255";
$proto589["m_columns"][] = "dip256";
$proto589["m_columns"][] = "dip257";
$proto589["m_columns"][] = "dip258";
$proto589["m_columns"][] = "dip259";
$proto589["m_columns"][] = "dip260";
$proto589["m_columns"][] = "dip261";
$proto589["m_columns"][] = "dip262";
$proto589["m_columns"][] = "dip263";
$proto589["m_columns"][] = "dip264";
$proto589["m_columns"][] = "dip265";
$proto589["m_columns"][] = "dip266";
$proto589["m_columns"][] = "dip267";
$proto589["m_columns"][] = "dip268";
$proto589["m_columns"][] = "dip269";
$proto589["m_columns"][] = "dip270";
$proto589["m_columns"][] = "dip271";
$proto589["m_columns"][] = "dip272";
$proto589["m_columns"][] = "dip273";
$proto589["m_columns"][] = "dip274";
$proto589["m_columns"][] = "dip275";
$proto589["m_columns"][] = "dip276";
$proto589["m_columns"][] = "dip277";
$proto589["m_columns"][] = "dip278";
$proto589["m_columns"][] = "dip279";
$proto589["m_columns"][] = "dip280";
$proto589["m_columns"][] = "validos";
$proto589["m_columns"][] = "blancos";
$proto589["m_columns"][] = "nulos";
$proto589["m_columns"][] = "utilizados";
$proto589["m_columns"][] = "no_utilizados";
$proto589["m_columns"][] = "total";
$proto589["m_columns"][] = "usuario";
$proto589["m_columns"][] = "fecha";
$proto589["m_columns"][] = "editado_por";
$proto589["m_columns"][] = "fecha_edicion";
$obj = new SQLTable($proto589);

$proto588["m_table"] = $obj;
$proto588["m_sql"] = "voto_diputado";
$proto588["m_alias"] = "";
$proto588["m_srcTableName"] = "voto_diputado";
$proto590=array();
$proto590["m_sql"] = "";
$proto590["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto590["m_column"]=$obj;
$proto590["m_contained"] = array();
$proto590["m_strCase"] = "";
$proto590["m_havingmode"] = false;
$proto590["m_inBrackets"] = false;
$proto590["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto590);

$proto588["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto588);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="voto_diputado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_voto_diputado = createSqlQuery_voto_diputado();


	
		;

																																																																																																																																																																																																																																																																																																			

$tdatavoto_diputado[".sqlquery"] = $queryData_voto_diputado;



include_once(getabspath("include/voto_diputado_events.php"));
$tableEvents["voto_diputado"] = new eventclass_voto_diputado;
$tdatavoto_diputado[".hasEvents"] = true;

?>