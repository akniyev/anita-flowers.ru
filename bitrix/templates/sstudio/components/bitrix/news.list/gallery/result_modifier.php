<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$arParams["DISPLAY_IMG_WIDTH"]=370; $arParams["DISPLAY_IMG_HEIGHT"]=300;
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
		
		$arResult["ITEMS"][$key]["PREVIEW_IMG"] = array(
			"SRC" => $arFileTmp["src"],
			'WIDTH' => $arFileTmp["width"],
			'HEIGHT' => $arFileTmp["height"],
		);
	}
	$catarr[$arElement[IBLOCK_SECTION_ID]]=$arElement[IBLOCK_SECTION_ID];
}
 $arFilter = Array('IBLOCK_ID'=>$arParams[IBLOCK_ID]);
  $db_list = CIBlockSection::GetList(Array('sort'=>'asc'), $arFilter, true);
  echo $db_list->NavPrint($arIBTYPE["SECTION_NAME"]);
  while($ar_result = $db_list->GetNext())
  {
   $catarr2[$ar_result['ID']]=array('CODE'=>$ar_result['CODE'], 'NAME'=>$ar_result['NAME']);
  }
  
  $arResult[cats]=$catarr2;
  $arResult[elemcats]=$catarr;
  ?>
