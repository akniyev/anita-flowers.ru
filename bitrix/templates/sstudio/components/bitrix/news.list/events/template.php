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

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<div class="col-md-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="service">
			<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
				<div class=""><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" /></div>
				<div class="title_cont">
					<?= $arItem["NAME"]; ?>
				</div>
			</a>
			<p>
				<?=$arItem["PREVIEW_TEXT"]; ?>
			</p>
		</div>
	</div>


<?endforeach;?>
