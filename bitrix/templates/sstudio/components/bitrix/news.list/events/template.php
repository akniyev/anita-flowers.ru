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
$picwidth=120;
$picheight=120;
?>



<?if (isset($arResult["SECTIONS"])):?>
	<div class="row">
		<h2 class="merosectitle">
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."sstudioinclude/merosectitle.php",
					"EDIT_TEMPLATE" => ""
				)
			);?>
		</h2>
	</div>
	<? // sections
		$cnt = 0; ?>
	<?foreach($arResult["SECTIONS"] as $arId=>$arItem):?>
		<div class="col-md-3">
			<div class="service">
				<a href="/meropriyatiya/index.php?section=<?=$arId?>">
					<div class="">
						<?=CFile::ShowImage($arItem["PICTURE"],$picwidth,$picheight);?>
					</div>
					<div class="title_cont">
						<?= $arItem["NAME"]; ?>
					</div>
				</a>
				<? /* <p><?= $arItem["DESCRIPTION"]; ?></p> */ ?>
			</div>
		</div>
		<?if ($cnt >= 3):?>
			<div class="clearboth"></div>
			<?$cnt = 0;?>
		<?else:?>
			<?$cnt++;?>
		<?endif;?>
	<?endforeach;?>
	<div class="clearboth"></div>
<?endif;?>


<?if (isset($arResult["ITEMS"])):?>
	<div class="row">
		<h2 class="merosectitle">
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."sstudioinclude/meroelemtitle.php",
					"EDIT_TEMPLATE" => ""
				)
			);?>
		</h2>
	</div>
	<? // elements
	$cnt = 0; ?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

		<div class="col-md-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="service">
				<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
					<div class="">
						<?=CFile::ShowImage($arItem["PREVIEW_PICTURE"]["SRC"],$picwidth,$picheight);?>
					</div>
					<div class="title_cont">
						<?= $arItem["NAME"]; ?>
					</div>
				</a>
				<p>
					<?=$arItem["PREVIEW_TEXT"]; ?>
				</p>
			</div>
		</div>
		<?if ($cnt >= 3):?>
			<div class="clearboth"></div>
			<?$cnt = 0;?>
		<?else:?>
			<?$cnt++;?>
		<?endif;?>
	<?endforeach;?>
<?endif;?>