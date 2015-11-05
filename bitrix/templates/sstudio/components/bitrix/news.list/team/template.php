<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?foreach($arResult["ITEMS"] as $cell=>$arItem):$cell++;?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<div class="col-md-3">
     	<div class="item-team">
         	<div class="img" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
             	<a>
             		<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
                     <div class="sub-info">
                         <span><?echo $arItem["NAME"]?></span>
                         <?echo $arItem["PREVIEW_TEXT"];?>
                     </div>
                 </a>
             </div>
             <div class="cont">
             	<?echo $arItem["DETAIL_TEXT"];?>
             </div>
             <div class="social">
				<?=($arItem["PROPERTIES"][LINK_FB][VALUE]? "<a target='blank' href=".$arItem["PROPERTIES"][LINK_FB][VALUE]." class='fa fa-facebook'></a>":"")?>
				<?=($arItem["PROPERTIES"][LINK_TW][VALUE]? "<a target='blank' href=".$arItem["PROPERTIES"][LINK_TW][VALUE]." class='fa fa-twitter'></a>":"")?>
				<?=($arItem["PROPERTIES"][LINK_GOOG][VALUE]? "<a target='blank' href=".$arItem["PROPERTIES"][LINK_GOOG][VALUE]." class='fa fa-google-plus'></a>":"")?>
				<?=($arItem["PROPERTIES"][LINK_DRIBBLE][VALUE]? "<a target='blank' href=".$arItem["PROPERTIES"][LINK_DRIBBLE][VALUE]." class='fa fa-dribbble'></a>":"")?>
             </div>
			 <div class="clear"></div>
         </div>
     </div>
	<?if($cell%4==0 && $cell>4 || $cell==4){?>
						<div class="clear"></div>
					<?}?>

<?endforeach;?>
<div class="clear"></div>
