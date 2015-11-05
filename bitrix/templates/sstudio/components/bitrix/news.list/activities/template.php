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
 <div class="shortcode_tabs">
                                    <div class="all_heads_cont">
										<?$k=0;
										foreach($arResult["cats"] as $cat){ $k++;?>
											<div class="shortcode_tab_item_title <?=($k==1 ? 'active' : '')?>"><?=$cat[NAME]?></div>
										<?}?>
                                    </div>
                                    <div class="all_body_cont">
										<?foreach($arResult["cats"] as $cat){?>
                                        <div class="shortcode_tab_item_body">
											<?foreach($cat[child] as $arItem){?>
											<?
											$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
											$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
											?>
                                            <div class="img_box" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                            	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="round_img" alt="" /></a>
                                                <h6><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></h6>
                                                <p><?echo $arItem["PREVIEW_TEXT"];?></p>
                                                <div class="clear"></div>
                                            </div>
											<?}?>
										</div>
										<?}?>
                                    </div>
                            	</div>    
                            
