<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//getting subsections list
$arFilter = Array("IBLOCK_ID"=>$arResult["ID"], "SECTION_ID"=>$_GET["section"]);
$db_list = CIBlockSection::GetList(Array("NAME"=>"ASC"), $arFilter, false);
while ($arr = $db_list->GetNext()) {
	$arResult["SECTIONS"][$arr["ID"]]["NAME"] = $arr["NAME"];
	$arResult["SECTIONS"][$arr["ID"]]["DESCRIPTION"] = $arr["DESCRIPTION"];
	$arResult["SECTIONS"][$arr["ID"]]["PICTURE"] = $arr["PICTURE"];
	//test_dump($arr);
}
?>