<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$section = $_GET["section"];

//getting section parameters
if (isset($section)){
	$arFilter = Array("IBLOCK_ID"=>"7", "ID"=>$section);
	if(CModule::IncludeModule("IBlock")) {
		//category dets
		$db_list = CIBlockSection::GetList(Array("NAME"=>"ASC"), $arFilter, false);
		$secdetails = $db_list->GetNext();
		$secname = $secdetails["NAME"];
		$secid = $secdetails["ID"];
		$secdescr = $secdetails["DESCRIPTION"];
		//parent category
		$db_list = CIBlockSection::GetByID($secdetails["IBLOCK_SECTION_ID"]);
		$psecdetails = $db_list->GetNext();
		$psecname = $psecdetails["NAME"];
		$psecid = $psecdetails["ID"];
	}
	$APPLICATION->SetTitle($secname);
} else {
	$APPLICATION->SetTitle("Мероприятия и торжества");
}
?>


<!-- broadcrumbs -->
<?if (isset($section)):?>
	<div class="container">
		<?$GLOBALS["SUBSECTIONS"] = Array(
				0 => Array(
						"NAME"=>$psecname,
						"ID"=>$psecid
				),
				1 => Array(
						"NAME"=>$secname,
						"ID"=>null
				),
		);?>
		<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","events",
				Array(
						"START_FROM" => "1",
						"PATH" => "",
						"SITE_ID" => "s1"
				)
		);?>
	</div>
<?endif;?>



<!-- events content -->
<section class="page_section" id="services">
		<!-- section header -->
		<header>
			<div class="container">
				<h1>
					<?if (isset($section)) {
						echo $secname;
					} else {
						$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							".default",
							array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR . "sstudioinclude/meroptit.php",
								"EDIT_TEMPLATE" => "",
								"COMPONENT_TEMPLATE" => ".default"
							),
							false
						);
					}?>
				</h1>
				<div class="separator"></div>
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
						"NEWS_COUNT" => "8",
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
						"PARENT_SECTION" => $section,
						"PARENT_SECTION_CODE" => "",
						"INCLUDE_SUBSECTIONS" => "N",
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

		<div class="container">
			<div class="separator"></div>
			<p>
				<?if (isset($section)) {
					echo $secdescr;
				} else {
					$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						".default",
						array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_DIR . "sstudioinclude/merptext.php",
							"EDIT_TEMPLATE" => "",
							"COMPONENT_TEMPLATE" => ".default"
						),
						false
					);
				}?>
			</p>
		</div><!-- end .container -->
	</section>





<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>