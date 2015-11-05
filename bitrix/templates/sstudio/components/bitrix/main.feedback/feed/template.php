<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<!-- section content -->
            <div class="contact_form container">
                <div class="row">
                    <div class="col-md-12">
                    	<div id="note">
						<?if(!empty($arResult["ERROR_MESSAGE"]))
							{
								foreach($arResult["ERROR_MESSAGE"] as $v)
									ShowError($v);
							}
							if(strlen($arResult["OK_MESSAGE"]) > 0)
							{
								?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
							}
							?>
						</div>
                    </div>
                </div> 
                <div class="row">

                    <div class="col-md-12">
                        <div id="fields"> 
                            <form id="ajax-contact-form" class="row" action="<?=SITE_DIR?>sstudioinclude/send.php<?//=POST_FORM_ACTION_URI?>" method="POST">    
								<?=bitrix_sessid_post()?>                            
                                <div class="col-md-6"><input type="text" name="user_name" placeholder="<?=GetMessage("MFT_NAME")?>" title="<?=GetMessage("MFT_NAME")?>" value="<?=$arResult["AUTHOR_NAME"]?>"></div>
                                <div class="col-md-6"><input type="text" name="user_email" placeholder="<?=GetMessage("MFT_EMAIL")?>" title="<?=GetMessage("MFT_EMAIL")?>" value="<?=$arResult["AUTHOR_EMAIL"]?>"></div>
                                <div class="clear"></div>                
                                <div class="col-md-12 text-center">
                                    <textarea name="MESSAGE" id="message" title="<?=GetMessage("MFT_MESSAGE")?>" placeholder="<?=GetMessage("MFT_MESSAGE")?>"><?=$arResult["MESSAGE"]?></textarea>
                                  <input class="shortcode_button" type="submit" name="submit"  value="<?=GetMessage("MFT_SUBMIT")?>"> 
								  <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                                </div>        
                            </form> 
                        </div> 
                    </div>

                </div>                
            </div>  
            <!-- //section content --> 

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/ajax.js"></script>
