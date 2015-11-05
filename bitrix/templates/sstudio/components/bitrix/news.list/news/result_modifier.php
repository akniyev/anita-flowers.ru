<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$arParams["DISPLAY_IMG_WIDTH"]=370; $arParams["DISPLAY_IMG_HEIGHT"]=220;
$catarr=array();$catarr2=array();
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
			BX_RESIZE_IMAGE_EXACT,
			true, $arFilter
		);
		
		$arResult["ITEMS"][$key]["PREVIEW_PICTURE"] = array(
			"SRC" => $arFileTmp["src"],
			'WIDTH' => $arFileTmp["width"],
			'HEIGHT' => $arFileTmp["height"],
		);
	}
}
  ?>
