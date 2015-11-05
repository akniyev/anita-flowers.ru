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


<!-- filter_block -->
            <div class="filter_block">
                <div class="filter_navigation">
                    <ul id="options" class="splitter">
                        <li>
                            <ul data-option-key="filter" class="optionset">
                                <li class="selected"><a data-option-value="*" href="#filter"><?=GetMessage("ALL")?></a></li>
								<?foreach($arResult[elemcats] as $cat):?>
									<li><a title="<?=$arResult[cats][$cat][NAME]?>" data-option-value=".<?=$arResult[cats][$cat][CODE]?>" href="#filter"><?=$arResult[cats][$cat][NAME]?></a></li>
								<?endforeach;?>
                            </ul>
                        </li>
                    </ul>
                </div><!-- .filter_navigation -->
            </div>
            <!-- //filter_block --> 
                             
            <!-- section content -->
            <div class="container">
                <div class="row">
                    <!-- Products -->
                    <div class="portfolio_block image-grid columns3" id="list">
						
						<?foreach($arResult["ITEMS"] as $arItem):?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
							
                        <div class="col-md-4 element <?=$arResult[cats][$arItem['IBLOCK_SECTION_ID']][CODE]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">   	
                            <div class="img_block">
                                <a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="prettyPhoto" data-rel="prettyPhoto[portfolio55]">
                                    <img src="<?=$arItem["PREVIEW_IMG"]["SRC"]?>" alt="">
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