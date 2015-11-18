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
$pictures = $arResult["PROPERTIES"]["IMAGE_GALERY"]["VALUE"];
?>

<!-- broadcrumbs -->
<div class="container">
	<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","events",
		Array(
			"START_FROM" => "2",
			"PATH" => "",
			"SITE_ID" => "s1"
		)
	);?>
</div>


<!-- events content -->
<section class="page_section" id="services">
	<!-- section header -->
	<header>
		<div class="container">
			<h1>
				<?=$arResult["NAME"]?>
			</h1>
			<div class="separator"></div>
			<p style="width:100%; text-align: justify;">
				<?if(strlen($arResult["DETAIL_TEXT"])>0):?>
					<?= $arResult["DETAIL_TEXT"];?>
				<?else:?>
					<?= $arResult["PREVIEW_TEXT"];?>
				<?endif?>
			</p><br/><br/>
			<p class="centeredp">
				<a style="font-weight: bold;" href="<?echo $arResult["LIST_PAGE_URL"];?>"><?=GetMessage("NEWS_BACK_TEXT")?></a>
			</p><br/><br />
		</div><!-- end .container -->
	</header>
	<!-- //section header -->

	<div class="container">
		<div class="row">
			<?
				global $arrFilter;
				$arrFilter = array("ID" => $arResult["PROPERTIES"]["EVENT_SERVICES"]["VALUE"]);
			?>

			<?$APPLICATION->IncludeComponent("bitrix:news.list", "serv_events", Array(
	"IBLOCK_TYPE" => "sstudio",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "8",	// Код информационного блока
		"NEWS_COUNT" => "6",	// Количество новостей на странице
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "ID",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "arrFilter",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "LINK",
			2 => "",
		),
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "N",	// Учитывать права доступа
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "",	// Формат показа даты
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"COMPONENT_TEMPLATE" => "events",
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SHOW_404" => "N",	// Показ специальной страницы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
	),
	false
);?>

		</div>
	</div><!-- end .container -->
</section>



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
						"PATH" => SITE_DIR."sstudioinclude/permertit.php",
						"EDIT_TEMPLATE" => ""
					)
				);?><?=$arResult["NAME"]?>
			</h2>
			<div class="separator"></div>
			<noindex><p>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."sstudioinclude/permertext.php",
						"EDIT_TEMPLATE" => ""
					)
				);?>
			</p></noindex>
		</div><!-- end .container -->
	</header>
	<!-- //section header -->


	<!-- portfolio_block -->
	<div class="container">
		<div class="row">
			<!-- Products -->
			<div class="portfolio_block image-grid columns3" id="list">

				<?foreach($pictures as $picture):?>
					<div class="col-md-4 element <?=$arResult[cats][$arItem['IBLOCK_SECTION_ID']][CODE]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="img_block">
							<a href="<?=CFile::GetPath($picture)?>" class="prettyPhoto" data-rel="prettyPhoto[portfolio55]">
								<?=CFile::ShowImage($picture);?>
								<div class="caption">
									<div class="info"><?=$arItem["NAME"]?></div>
								</div>
							</a>
						</div>
					</div><!-- .element -->
				<?endforeach;?>
			</div><!-- .products_block -->
			<div class="clear"></div>
			<!-- //Products -->
		</div>
	</div>
	<!-- portfolio_block -->

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