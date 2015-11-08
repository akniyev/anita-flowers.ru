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




<!-- services content -->
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
						"PATH" => SITE_DIR."sstudioinclude/welcome.php",
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

			<div class="col-md-3">
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
			<div class="col-md-3">
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
			<div class="col-md-3">
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
			<div class="col-md-3">
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
		</div>
	</div><!-- end .container -->
</section>




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




















<?/*

<div class="news-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>

	<table cellpadding="0" cellspacing="0" width="100">
		<tr>
			<td width="0%" style="padding-right: 5px"><?
				$image = $templateFolder."/images/".strtolower($arResult["DISPLAY_PROPERTIES"]["DOC_TYPE"]["VALUE_XML_ID"]).".gif";
				if(file_exists($_SERVER["DOCUMENT_ROOT"].$image)):
					?><img border="0" src="<?=$image?>" width="30" height="30" alt="<?=$arResult["DISPLAY_PROPERTIES"]["DOC_TYPE"]["VALUE_ENUM"]?>" hspace="0" vspace="0" title="<?=$arResult["DISPLAY_PROPERTIES"]["DOC_TYPE"]["VALUE_ENUM"]?>" style="float:left" /><?
				endif?><br /></td>
			<td width="100%" valign="top" class="news-date-time"><?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
					<span style="white-space: nowrap;"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span><?endif;?></td>
		</tr>
	</table>
	<br />

	<?if(false && $arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3><br/>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):?>
		<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
		<br />
	<?endforeach;?>
	<?foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;<b>
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			<br /></b>
	<?endforeach;?>
	<?
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
				<?
				$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
					$component,
					array("HIDE_ICONS" => "Y")
				);
				?>
			</noindex>
		</div>
		<?
	}
	?>
	<p><a href="<?echo $arResult["LIST_PAGE_URL"];?>"><?=GetMessage("NEWS_BACK_TEXT")?></a></p>
</div>
*/?>