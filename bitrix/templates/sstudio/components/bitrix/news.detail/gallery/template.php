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



<!-- events content -->
<section class="page_section" id="services">
	<!-- section header -->
	<header>
		<div class="container">
			<h1>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."sstudioinclude/usltit.php",
						"EDIT_TEMPLATE" => "",
						"COMPONENT_TEMPLATE" => ".default"
					),
					false
				);?>
			</h1>
			<div class="separator"></div>
			<p>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."sstudioinclude/usltext.php",
						"EDIT_TEMPLATE" => "",
						"COMPONENT_TEMPLATE" => ".default"
					),
					false
				);?>
			</p>
		</div><!-- end .container -->
	</header>
	<!-- //section header -->

	<div class="container">
		<div class="row">

			<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"events", 
	array(
		"IBLOCK_TYPE" => "sstudio",
		"IBLOCK_ID" => "8",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "LINK",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "events",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>

		</div>
	</div><!-- end .container -->
</section>



<?/*
<div class="container">
	<h1 id="pagetitle"><?=$arResult["NAME"]?></h1>

	<div class="news-detail">
		<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif;?>
		<?if(strlen($arResult["DETAIL_TEXT"])>0):?>
			<?= $arResult["DETAIL_TEXT"];?>
		<?else:?>
			<?= $arResult["PREVIEW_TEXT"];?>
		<?endif?>
		<div style="clear:both"></div><br>
	</div>
	<p style="width:100%; text-align: center;">
		<a style="font-weight: bold;" href="<?echo $arResult["LIST_PAGE_URL"];?>"><?=GetMessage("NEWS_BACK_TEXT")?></a>
	</p><br/><br/>
</div>






<!-- portfolio content-->
<section class="page_section bg_gray" id="portfolio">
	<!-- section header -->
	<header>
		<div class="container">
			<h2>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."sstudioinclude/perttit.php",
						"EDIT_TEMPLATE" => ""
					)
				);?>
			</h2>
			<div class="separator"></div>
			<p>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."sstudioinclude/porttext.php",
						"EDIT_TEMPLATE" => ""
					)
				);?>
			</p>
		</div><!-- end .container -->
	</header>
	<!-- //section header -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"gallery",
		Array(
			"IBLOCK_TYPE" => "sstudio",
			"IBLOCK_ID" => "3",
			"NEWS_COUNT" => "100",
			"SORT_BY1" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_BY2" => "ID",
			"SORT_ORDER2" => "DESC",
			"FILTER_NAME" => "",
			"FIELD_CODE" => array(0=>"",1=>"",),
			"PROPERTY_CODE" => array(""),
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "N",
			"PREVIEW_TRUNCATE_LEN" => "",
			"ACTIVE_DATE_FORMAT" => "",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"INCLUDE_SUBSECTIONS" => "Y",
			"PAGER_TEMPLATE" => ".default",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"PAGER_TITLE" => "",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "N",
			"AJAX_OPTION_ADDITIONAL" => ""
		)
	);?>


</section>




<!-- about content-->
<section class="page_section" id="about">
	<!-- section header -->
	<header>
		<div class="container">
			<h2>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."sstudioinclude/abouttit.php",
						"EDIT_TEMPLATE" => ""
					)
				);?>
			</h2>
			<div class="separator"></div>

		</div><!-- end .container -->
	</header>
	<!-- //section header -->

	<!-- section content -->
	<div class="container about_block">
		<!--about-->
		<div class="row">
			<div class="col-md-6">
				<div class="img">
					<img src="<?=SITE_DIR?>sstudioimages/img_about.jpg" alt="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="cont">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_DIR."sstudioinclude/abouttext.php",
							"EDIT_TEMPLATE" => ""
						)
					);?>

				</div>
			</div>
		</div>
		<!--//about-->
	</div>
	<!-- //section content -->
</section>
*/?>