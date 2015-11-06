<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мероприятия");
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
							"PATH" => SITE_DIR."sstudioinclude/meroptit.php",
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
							"PATH" => SITE_DIR."sstudioinclude/merptext.php",
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
						"IBLOCK_ID" => "7",
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





<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>