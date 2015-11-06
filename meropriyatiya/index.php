<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мероприятия");
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





<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>