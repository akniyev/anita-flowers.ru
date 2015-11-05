<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$cats=array();	
$catsid=array();
$arParams["DISPLAY_IMG_WIDTH"]=140; $arParams["DISPLAY_IMG_HEIGHT"]=95;
foreach ($arResult['ITEMS'] as $key => $arElement)
{
	if(is_array($arElement["PREVIEW_PICTURE"]))
	{
		$arFilter = '';
		if($arParams["SHARPEN"] != 0)
		{
			$arFilter = array("name" => "sharpen", "precision" => $arParams["SHARPEN"]);
		}
		
		$arFileTmp = CFile::ResizeImageGet(
			$arElement['PREVIEW_PICTURE'],
			array("width" => $arParams["DISPLAY_IMG_WIDTH"], "height" => $arParams["DISPLAY_IMG_HEIGHT"]),
			BX_RESIZE_IMAGE_PROPORTIONAL,
			true, $arFilter
		);
		
		$arResult["ITEMS"][$key]["PREVIEW_PICTURE"] = array(
			"SRC" => $arFileTmp["src"],
			'WIDTH' => $arFileTmp["width"],
			'HEIGHT' => $arFileTmp["height"],
		);
	}
	$cats[$arElement["IBLOCK_SECTION_ID"]][child][]=$arElement;
	$catsid[$arElement["IBLOCK_SECTION_ID"]]=$arElement["IBLOCK_SECTION_ID"];
	
}
$uf_arresult = CIBlockSection::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ID" => $catsid), false, array("ID","NAME"));
   while($uf_value = $uf_arresult->Fetch()){
		$cats[$uf_value["ID"]][NAME]=$uf_value[NAME];
   }
$arResult[cats]=$cats;
?>

