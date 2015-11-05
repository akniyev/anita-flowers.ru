<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Готовый сайт студии дизайна sStudio");
?>






<!-- Contact content -->
<section class="page_section" id="contact">
	<!-- section header -->
	<header>
		<div class="container">
			<h2>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."sstudioinclude/adrestit.php",
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
						"PATH" => SITE_DIR."sstudioinclude/adrestext.php",
						"EDIT_TEMPLATE" => ""
					)
				);?>
			</p>
		</div><!-- end .container -->
	</header>
	<!-- //section header -->

	<!-- section content -->
	<div class="container">
		<div class="icons-block">
			<div class="row">
				<div class="col-md-4">
					<div class="icon_box">
						<div class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/images/icon/place_icon.png" alt=""></div>
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR."sstudioinclude/adres.php",
								"EDIT_TEMPLATE" => ""
							)
						);?>


					</div>
				</div>
				<div class="col-md-4">
					<div class="icon_box">
						<div class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/images/icon/mail_icon.png" alt=""></div>
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR."sstudioinclude/mail.php",
								"EDIT_TEMPLATE" => ""
							)
						);?>

					</div>
				</div>
				<div class="col-md-4">
					<div class="icon_box">
						<div class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/images/icon/phone_icon.png" alt=""></div>
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR."sstudioinclude/phone.php",
								"EDIT_TEMPLATE" => ""
							)
						);?>


					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //section content -->
</section>
<section class="page_section cover form_block">
	<!-- section header -->
	<header>
		<div class="container">
			<h2>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."sstudioinclude/formtit.php",
						"EDIT_TEMPLATE" => ""
					)
				);?>
			</h2>
			<div class="separator"></div>
		</div><!-- end .container -->
	</header>
	<!-- //section header -->

	<!-- section content -->
	<div class="contact_form container">
		<div class="row">

			<div id="sendform">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."sstudioinclude/send.php",
						"EDIT_TEMPLATE" => ""
					)
				);?>
			</div>
		</div>
	</div>
	<!-- //section content -->
</section>







<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>