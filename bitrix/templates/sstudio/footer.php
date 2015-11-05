<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?> 
   </div>
        <!--footer-->
        <div class="footer">
        	<!-- footer_bottom -->
        	<div class="container">
            	<div class="row">
                    <div class="col-md-12">	
                    	<div class="copyright">
                            <?=GetMessage("SMS")?>
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
    
     		
<div style="display:none;"><?=GetMessage("SMS2")?></div>	
</body>
</html>