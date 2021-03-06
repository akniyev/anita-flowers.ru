<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!--  Contact content -->
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




</div>
        <!--footer-->
        <div class="footer">
        	<!-- footer_bottom -->
        	<div class="container">
            	<div class="row">
                    <div class="col-md-12">	
                    	<div class="copyright">
                            ©  2015. Anita Flowers
                        </div>
                        <div class="social_icon">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."sstudioinclude/soc.php",
									"EDIT_TEMPLATE" => ""
								)
							);?>
                            
                        </div>
                    </div> 
				</div>             
            </div>
        	<!-- //footer_bottom -->
        </div>
        <!--//footer-->        
    </div><!-- end #page -->   
    <header class="fixed-menu"></header>	
	
    

    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/sorting.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/plugins.js"></script>           
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/current.js"></script>
    
     		
<div style="display:none;">© 2015. Anita Flowers</div>
</body>
</html>