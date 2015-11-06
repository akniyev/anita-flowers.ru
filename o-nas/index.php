<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О нас");
?>


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


<!-- services content -->
<section class="page_section" id="services">
	<!-- section header -->
	<header>
		<div class="container">
			<h1>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."sstudioinclude/servicetit.php",
						"EDIT_TEMPLATE" => ""
					)
				);?>
			</h1>
			<div class="separator"></div>
			<p>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."sstudioinclude/servicetext.php",
						"EDIT_TEMPLATE" => ""
					)
				);?>
			</p>
		</div><!-- end .container -->
	</header>
	<!-- //section header -->

	<div class="container">
		<div class="row">

			<div class="col-md-4">
				<div class="service">
					<a>
						<div class="icon icon1"></div>
						<div class="title_cont">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."sstudioinclude/ico1tit.php",
									"EDIT_TEMPLATE" => ""
								)
							);?>
						</div>
					</a>
					<p>
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR."sstudioinclude/ico1text.php",
								"EDIT_TEMPLATE" => ""
							)
						);?>
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service">
					<a>
						<div class="icon icon2"></div>
						<div class="title_cont">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."sstudioinclude/ico2tit.php",
									"EDIT_TEMPLATE" => ""
								)
							);?>
						</div>
					</a>
					<p>
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR."sstudioinclude/ico2text.php",
								"EDIT_TEMPLATE" => ""
							)
						);?>
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service">
					<a>
						<div class="icon icon3"></div>
						<div class="title_cont">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."sstudioinclude/ico3tit.php",
									"EDIT_TEMPLATE" => ""
								)
							);?>
						</div>
					</a>
					<p>
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR."sstudioinclude/ico3text.php",
								"EDIT_TEMPLATE" => ""
							)
						);?>
					</p>
				</div>
			</div>
		</div>
	</div><!-- end .container -->
</section>



<!-- team content-->
<section class="page_section">
	<!-- section header -->
	<header>
		<div class="container">
			<h2>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."sstudioinclude/teamtit.php",
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
						"PATH" => SITE_DIR."sstudioinclude/teamtext.php",
						"EDIT_TEMPLATE" => ""
					)
				);?>
			</p>
		</div><!-- end .container -->
	</header>
	<!-- //section header -->

	<!-- section content -->
	<div class="container team_block">
		<div class="row">
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"team",
				Array(
					"IBLOCK_TYPE" => "sstudio",
					"IBLOCK_ID" => "1",
					"NEWS_COUNT" => "8",
					"SORT_BY1" => "SORT",
					"SORT_ORDER1" => "ASC",
					"SORT_BY2" => "ID",
					"SORT_ORDER2" => "DESC",
					"FILTER_NAME" => "",
					"FIELD_CODE" => array(0=>"",1=>"",),
					"PROPERTY_CODE" => array("LINK_FB"),
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

		</div>
	</div>
	<!-- //section content -->
</section>









<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>