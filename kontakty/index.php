<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
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
							"PATH" => SITE_DIR."sstudioinclude/contcts.php",
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
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."sstudioinclude/contctext.php",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

					</div>
				</div>
			</div>
			<!--//about-->
		</div>
		<!-- //section content -->
	</section>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>