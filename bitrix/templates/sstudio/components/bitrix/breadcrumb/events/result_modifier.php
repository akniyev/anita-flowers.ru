<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//getting subsections list
$arFilter = Array("IBLOCK_ID"=>$arResult["ID"], "ID"=>$_GET["section"]);
$arr = CIBlockSection::GetByID(Array("NAME"=>"ASC"), $arFilter, false);


$arResult["PARENT_SECTION"]= lesh;

$arResult["SECTIONS"][$arr["ID"]]["NAME"] = $arr["NAME"];
$arResult["SECTIONS"][$arr["ID"]]["DESCRIPTION"] = $arr["DESCRIPTION"];
$arResult["SECTIONS"][$arr["ID"]]["PICTURE"] = $arr["PICTURE"];

?>